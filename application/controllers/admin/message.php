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
        foreach ($data['message'] as $key => &$value) {
            if ($value['pid'] != 0) {
                $row = $this->message->select($value['pid']);
                if ($row) {
                    $value['content'] .= ' //管理员回复:' .$row['content'];
                }
            }
        }
        $this->load->view('admin/message/index', $data);
    }

    /**
     * 删除
     * Ajax调用
     */
    public function delete($mid)
    {
        $this->message->del($mid);
        echo '删除成功';
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
        $data = array(
            'pid' => $this->input->post('mid'),
            'time' => time(),
            'content' => $this->input->post('content'),
        );
        $this->message->insert($data);
        success('admin/message/index', '操作成功');
        // print_r($data);
    }

}
