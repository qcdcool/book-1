<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{

    public $table;
    public $id;

    public function __construct()
    {
        parent::__construct();
        // $this->output->enable_profiler(true);
    }

    public function select($id = null)
    {
        if ($id) {
            $data = $this->db->get_where($this->table, array($this->id => $id))->row_array();
            return $data;
        } else {
            $data = $this->db->get($this->table)->result_array();
        }
        return $data;
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        // echo $this->db->last_query();
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array($this->id => $id));
    }

    /**
     * 删除
     */
    public function delete($id)
    {
        $this->db->where(array($this->id => $id))->delete($this->table);
    }
}
