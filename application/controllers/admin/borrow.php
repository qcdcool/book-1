<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Borrow extends MY_Controller
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('book_model', 'book');
        $this->load->model('borrow_model', 'borrow');
        // $this->output->enable_profiler();
    }

    /**
     * 查看
     */
    public function index()
    {

        //后台设置后缀为空，否则分页出错
        $this->config->set_item('url_suffix', '');
        //载入分页类
        $this->load->library('pagination');
        $perPage = 10;

        //配置项设置
        $config['base_url']    = site_url('admin/borrow/index');
        $config['total_rows']  = $this->db->count_all_results('borrow');
        $config['per_page']    = $perPage;
        $config['uri_segment'] = 4;
        $config['first_link']  = '首页';
        $config['prev_link']   = '上一页';
        $config['next_link']   = '下一页';
        $config['last_link']   = '末页';

        $this->pagination->initialize($config);

        $data['links'] = $this->pagination->create_links();
        // p($data);die;
        $offset = $this->uri->segment(4);
        $this->db->limit($perPage, $offset);

        $borrow = $this->borrow->borrow_book();
        foreach ($borrow as &$v) {
            $v['borrowDate'] = date('Y-m-d', $v['borrow_time']);
            $v['returnDate'] = date('Y-m-d', $v['borrow_time'] + $v['borrow_days'] * 86400);
        }
        // echo $this->db->last_query();
        // p($data);die;
        $data['borrow'] = $borrow;
        $this->load->view('admin/borrow/index', $data);
    }

    /**
     * 添加借阅, 从图书列表页链接过来
     */
    public function add($bid)
    {
        $book = $this->book->select($bid);
        if ($book['stock'] == 0) {
            error('库存不足');
        }
        $data['book'] = $book;
        // p($data);
        $this->load->view('admin/borrow/add', $data);
    }

    /**
     * 添加动作
     */
    public function insert()
    {
        // p($_POST);die;

        $data = array(
            'bid'         => $this->input->post('bid'),
            'name'        => $this->input->post('name'),
            'idcard'      => $this->input->post('idcard'),
            'phone'       => $this->input->post('phone'),
            'deposit'     => $this->input->post('deposit'),
            'borrow_days' => $this->input->post('borrow_days'),
            'borrow_time' => time(),
        );

        $this->borrow->insert($data);

        // 更新库存
        $bid  = $data['bid'];
        $book = $this->book->select($bid);
        $data = array(
            'stock' => $book['stock'] - 1,
        );
        $this->book->update($data, $bid);

        success('admin/borrow/index', '借阅成功, 库存已更新');

    }

    /**
     * 编辑动作  编辑 == 续借
     */
    public function update($id, $days)
    {
        $borrow = $this->borrow->select($id);
        // p($borrow);return;

        $data = array(
            'borrow_days' => $borrow['borrow_days'] + $days,
        );

        $this->borrow->update($data, $id);
        // echo $this->db->last_query();
        success('admin/borrow/index', '续借成功');

    }

    /**
     * 删除 == 还书
     */
    public function delete($id)
    {
        $borrow = $this->borrow->select($id);
        $this->borrow->delete($id);

        // $this->borrow->insert($data);

        // 更新库存
        $bid  = $borrow['bid'];
        $book = $this->book->select($bid);
        $data = array(
            'stock' => $book['stock'] + 1,
        );
        $this->book->update($data, $bid);

        success('admin/borrow/index', '还书成功, 库存已更新');
    }

}
