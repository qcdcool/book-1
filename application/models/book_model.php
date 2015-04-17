<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * 文章管理模型
 */
class Book_model extends MY_Model
{
    /**
     * 发表文章
     */

    public function __construct()
    {
        parent::__construct();
        $this->table = 'book';
        $this->id    = 'bid';
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    /**
     * 查看文章
     */
    public function book_category()
    {
        $data = $this->db->select('bid,title,author,isbn,press,stock,cname,time')->from($this->table)->join('category', 'book.cid=category.cid')->order_by('bid', 'asc')->get()->result_array();
        return $data;
    }

    /**
     * 首页查询文章
     */
    public function check()
    {
        $data['new'] = $this->db->select('bid,thumb,title,info')->order_by('time', 'desc')->get_where($this->table, array('type' => 1), 5)->result_array();

        $data['hot'] = $this->db->select('bid,thumb,title,info')->order_by('time', 'desc')->get_where($this->table, array('type' => 2), 5)->result_array();

        return $data;
    }

    /**
     * 右侧文章标题调取
     */
    public function title($limit)
    {
        $data = $this->db->select('title,bid')->order_by('time', 'desc')->limit($limit)->get($this->table)->result_array();
        return $data;
    }

    /**
     * 通过栏目调取文章
     */
    public function category_book($cid)
    {
        $data = $this->db->select('bid,thumb,title,info')->order_by('time', 'desc')->get_where($this->table, array('cid' => $cid))->result_array();
        return $data;
    }

    /**
     * 通过bid 调取文章
     */

    public function bid_book($bid)
    {
        $data = $this->db->join('category', 'book.cid=category.cid')->get_where($this->table, array('bid' => $bid))->result_array();
        return $data;
    }

    /**
     * 通过 cid 或者 title 查询文章
     */
    public function getByCidAndTitle($cid, $title)
    {
        $cid and $this->db->where(array('book.cid' => $cid));
        $this->db->like('title', $title);
        $data = $this->db->join('category', 'book.cid=category.cid')->get($this->table)->result_array();
        // echo $this->db->last_query();
        return $data;
    }

    /**
     * 删除
     */
    public function delete($bid)
    {
        $this->db->where(array('bid' => $bid))->delete($this->table);
    }

    /**
     * 更新
     */
    public function update($data, $id)
    {
        $this->db->update($this->table, $data, array('bid' => $id));
    }

    /**
     * 前台
     */

    /**
     * 最新的文章
     */
    public function getNew($limit)
    {
        $data = $this->db->order_by('time desc')->get($this->table, $limit)->result_array();
        return $data;
    }

}
