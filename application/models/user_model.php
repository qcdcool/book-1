<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 栏目管理模型
 */
class User_model extends CI_Model
{
    /**
     * 查看
     */
    public function check()
    {
        $data = $this->db->get('user')->result_array();
        return $data;
    }

    /**
     * 删除栏目
     */
    public function del($uid)
    {
        $this->db->delete('user', array('uid' => $uid));
    }

}
