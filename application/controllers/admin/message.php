<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Message extends MY_Controller
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('message_model', 'message');
    }
    /**
     * 查看
     */
    public function index()
    {

        $data['message'] = $this->message->check();
        $this->load->view('admin/message/index', $data);
    }

    /**
     * 删除
     */
    public function delete()
    {
        $uid = $this->uri->segment(4);
        $this->message->del($uid);
        success('admin/message/index', '删除成功');
    }

    /**
     * 回复
     */
    public function reply_add($mid)
    {
        $message         = $this->message->select($mid);
        $data['message'] = $message;
        $this->load->view('admin/message/reply_add', $data);
    }

    /**
     * 回复动作
     */
    public function reply_insert()
    {
        $data = [
            'pid'      => $this->input->post('mid'),
            'username' => $this->session->userdata('username'),
            'content'  => $this->input->post('content'),
        ];

        print_r($data);
    }

}
