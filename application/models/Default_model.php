<?php 

class Default_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get($data = array())
    {
    	$this->db->select($data['select']);
    	$this->db->from($data['name_table']);

    	if(isset($data['where']))
    		$this->db->where($data['where']);

    	if(isset($data['order_by']))
    		$this->db->order_by($data['order_by']);

    	if(isset($data['limit']))
    		$this->db->limit($data['limit']);

    	return $this->db->get()->result();
    }

    public function get_max($data = array())
    {
    	$this->db->from($data['name_table']);
    	$this->db->select_max($data['field'], $data['as']);

    	return $this->db->get()->result();
    }

    public function get_min($data = array())
    {
    	$this->db->from($data['name_table']);
    	$this->db->select_min($data['field'], $data['as']);

    	return $this->db->get()->result();
    }

    public function get_avg($data = array())
    {
    	$this->db->from($data['name_table']);
    	$this->db->select_avg($data['field'], $data['as']);

    	return $this->db->get()->result();
    }

    public function get_sum($data = array())
    {
    	$this->db->from($data['name_table']);
    	$this->db->select_sum($data['field'], $data['as']);

    	return $this->db->get()->result();
    }

    public function insert($data = array())
    {
		$this->db->insert($data['name_table'], $data['values']);
    }

    public function update($data = array())
    {
		$this->db->where($data['where_field'], $data['where_value']);
		$this->db->update($data['name_table'], $data['values']);
    }

    public function delete($data = array())
    {
    	$this->db->where($data['where_field'], $data['where_value']);
		$this->db->delete($data['name_table']);
    }
}