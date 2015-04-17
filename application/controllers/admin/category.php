<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Category extends MY_Controller
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model', 'cate');
    }

    /**
     * 查看栏目
     */
    public function index()
    {

        $data['category'] = $this->cate->check();
        $this->load->view('admin/category/index', $data);
    }

    /**
     * 添加栏目
     */
    public function add()
    {
        // $this->output->enable_profiler(TRUE);
        $this->load->helper('form');
        $this->load->view('admin/category/add');
    }

    /**
     * 添加动作
     */
    public function insert()
    {
        $this->load->library('form_validation');
        $status = $this->form_validation->run('cate');

        if ($status) {
            // echo "数据库操作";
            // echo $_POST['abc'];die;
            // var_dump($this->input->post('abc'));die;

            $data = array(
                'cname' => $this->input->post('cname'),
            );

            $this->cate->add($data);
            success('admin/category/index', '添加成功');
        } else {
            $this->load->helper('form');
            $this->load->view('admin/category/add');
        }
    }

    /**
     * 编辑
     */
    public function edit()
    {
        $cid = $this->uri->segment(4);
        // echo $cid;die;

        $data['category'] = $this->cate->check_cate($cid);

        $this->load->helper('form');
        $this->load->view('admin/category/edit', $data);
    }

    /**
     * 编辑动作
     */
    public function update()
    {
        $this->load->library('form_validation');
        $status = $this->form_validation->run('cate');

        if ($status) {

            $cid   = $this->input->post('cid');
            $cname = $this->input->post('cname');

            $data = array(
                'cname' => $cname,
            );

            $data['category'] = $this->cate->update_cate($cid, $data);
            success('admin/category/index', '修改成功');
        } else {
            $this->load->helper('form');
            $this->load->view('admin/category/edit');
        }
    }

    /**
     * 删除栏目
     */
    public function delete()
    {
        $cid = $this->uri->segment(4);
        $this->cate->del($cid);
        success('admin/category/index', '删除成功');
    }

}
