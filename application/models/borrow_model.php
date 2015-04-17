<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 文章管理模型
 */
class Borrow_model extends MY_Model
{
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        $this->table = 'borrow';
        $this->id    = 'id';
    }

    /**
     * 查看
     */
    public function borrow_book()
    {
        $this->db->select('id, name, phone, idcard, borrow_time, borrow_days, borrow.bid, num, deposit, title, author, isbn');
        $this->db->where(array(
            'borrow.bid' => 'book.bid',
        ), null, false);
        $data = $this->db->order_by('id', 'desc')->get($this->table . ', book')->result_array();
        return $data;
    }

}
