<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User extends MY_Controller
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
    }

    /**
     * 查看
     */
    public function index()
    {

        $data['user'] = $this->user->check();
        $this->load->view('admin/user/index', $data);
    }

    /**
     * 删除
     */
    public function delete()
    {
        $uid = $this->uri->segment(4);
        $this->user->del($uid);
        success('admin/user/index', '删除成功');
    }

}
