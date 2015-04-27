<?php
defined('BASEPATH') or exit('No access allowed');

class Message extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('book_model', 'book');
        $this->load->model('category_model', 'cate');
        $this->load->model('message_model', 'message');

        $this->category = $this->cate->limit_category(3);
        $this->title    = $this->book->title(10);
    }

    public function index()
    {
        $data['category'] = $this->category;
        $data['title']    = $this->title;

        $data['message'] = $this->message->check();
        foreach ($data['message'] as $key => &$value) {
            if ($value['pid'] != 0) {
                $row = $this->message->select($value['pid']);
                if ($row) {
                    $value['content'] .= ' //管理员回复:' .$row['content'];
                }
            }
        }
        // p($data);
        $this->load->view('index/message', $data);
    }

    public function insert()
    {
        $content = $this->input->post('content');

        $data = array(
            'content' => $content,
            'time'    => time(),
            'uid'     => 0,
        );
        $this->message->insert($data);
        success('index/message/index', '添加成功');
    }
}
