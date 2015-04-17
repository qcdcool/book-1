<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 栏目管理模型
 */
class Message_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->table = 'message';
        $this->id    = 'mid';
    }

    /**
     * 查看
     */
    public function check()
    {
        $data = $this->db->order_by('mid', 'desc')->get('message')->result_array();
        return $data;
    }

    /**
     * 删除栏目
     */
    public function del($id)
    {
        $this->db->delete('message', array('mid' => $id));
    }

}
