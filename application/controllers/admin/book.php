<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Book extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('book_model', 'book');
        $this->load->model('category_model', 'cate');

    }

    /**
     * 查看文章
     */
    public function index()
    {
        //后台设置后缀为空，否则分页出错
        $this->config->set_item('url_suffix', '');
        //载入分页类
        $this->load->library('pagination');
        $perPage = 3;

        //配置项设置
        $config['base_url']    = site_url('admin/book/index');
        $config['total_rows']  = $this->db->count_all_results('book');
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

        // TODO
        $data['cid']   = 0;
        $data['title'] = '';

        $data['category'] = $this->cate->select();
        $data['book']     = $this->book->book_category();

        // p($data);die;
        $this->load->view('admin/book/index', $data);
    }

    /**
     * 查询
     */
    public function search()
    {
        $cid   = $this->input->post('cid');
        $title = $this->input->post('title');

        $data['book']     = $this->book->getByCidAndTitle($cid, $title);
        $data['links']    = '';
        $data['cid']      = $cid;
        $data['title']    = $title;
        $data['category'] = $this->cate->select();

        $this->load->view('admin/book/index', $data);
    }

    /**
     * 发表文章模板显示
     */
    public function add()
    {

        $data['category'] = $this->cate->check();

        $this->load->helper('form');
        $this->load->view('admin/book/add', $data);
    }

    /**
     * 发表文章动作
     */
    public function insert()
    {
        //载入表单验证类
        $this->load->library('form_validation');
        //执行验证
        $status = $this->form_validation->run('book');

        if ($status) {
            //文件上传------------------------
            //配置
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '5000';
            $config['file_name']     = date('YmdHis') . uniqid();

            //载入上传类
            $this->load->library('upload', $config);
            //执行上传
            $status = $this->upload->do_upload('thumb');

            $wrong = $this->upload->display_errors();

            if ($wrong) {
                error($wrong);
            }
            //返回信息
            $info = $this->upload->data();
            // p($info);die;

            //缩略图-----------------
            //配置
            $arr['source_image']   = $info['full_path'];
            $arr['create_thumb']   = false;
            $arr['maintain_ratio'] = true;
            $arr['width']          = 309;
            $arr['height']         = 500;

            //载入缩略图类
            $this->load->library('image_lib', $arr);
            //执行动作
            $status = $this->image_lib->resize();
            if (!$status) {
                error('缩略图动作失败');
            }

            $data = array(
                'title'  => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'press'  => $this->input->post('press'),
                'date'   => $this->input->post('date'),
                'isbn'   => $this->input->post('isbn'),
                'cid'    => $this->input->post('cid'),
                'type'   => $this->input->post('type'),
                'stock'  => $this->input->post('stock'),
                'rent'   => $this->input->post('rent'),
                'info'   => $this->input->post('info'),
                'thumb'  => $info['file_name'],
                'time'   => time(),
            );

            // p($data);die;

            $this->book->add($data);
            success('admin/book/index', '发表成功');
        } else {
            $data['category'] = $this->cate->check();

            $this->load->helper('form');
            $this->load->view('admin/book/add', $data);
        }
    }

    /**
     * 编辑文章
     */
    public function edit($bid = 0)
    {
        $bid == 0 and $bid = $this->uri->segment(4);
        $this->load->helper('form');

        $book         = $this->book->bid_book($bid);
        $data['book'] = $book[0];

        $data['category'] = $this->cate->check();

        $this->load->view('admin/book/edit', $data);
    }

    /**
     * 编辑动作
     */
    public function update()
    {
        $this->load->library('form_validation');
        $status = $this->form_validation->run('book');

        if ($status) {
            // 这里只判断是否上传了文件, 其他交给upload类来验证
            if ($_FILES['thumb']['error'] != 4) {
                //文件上传------------------------
                //配置
                $config['upload_path']   = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '5000';
                $config['file_name']     = date('YmdHis') . uniqid();

                //载入上传类
                $this->load->library('upload', $config);
                //执行上传
                $status = $this->upload->do_upload('thumb');

                $wrong = $this->upload->display_errors('', '');

                if ($wrong) {
                    error($wrong);
                }
                //返回信息
                $info = $this->upload->data();
                // p($info);die;

                //缩略图-----------------
                //配置
                $arr['source_image']   = $info['full_path'];
                $arr['create_thumb']   = false;
                $arr['maintain_ratio'] = true;
                $arr['width']          = 500;
                $arr['height']         = 500;

                //载入缩略图类
                $this->load->library('image_lib', $arr);
                //执行动作
                $status = $this->image_lib->resize();
                if (!$status) {
                    error('缩略图动作失败');
                }
            }

            $data = array(
                'title'  => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'press'  => $this->input->post('press'),
                'date'   => $this->input->post('date'),
                'isbn'   => $this->input->post('isbn'),
                'cid'    => $this->input->post('cid'),
                'type'   => $this->input->post('type'),
                'stock'  => $this->input->post('stock'),
                'rent'   => $this->input->post('rent'),
                'info'   => $this->input->post('info'),
                'time'   => time(),
            );
            isset($info['file_name']) and $data['thumb'] = $info['file_name'];
            $this->book->update($data, $this->input->post('bid'));
            success('admin/book/index', '操作成功');
        } else {
            $this->edit($this->input->post('bid'));
            // $this->load->helper('form');
            // $this->load->view('admin/book/edit');
        }
    }

    /**
     * 删除
     */
    public function delete()
    {
        $bid = $this->uri->segment(4);
        $this->book->delete($bid);
        success('admin/book/index', '删除成功');
    }

}
