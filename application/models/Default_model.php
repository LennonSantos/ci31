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
    	$this->db->where($data['where']);

    	$query = $this->db->get(); 
    	return $query->result();
    }
}