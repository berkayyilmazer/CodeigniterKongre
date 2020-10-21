<?php

class Kongre_model extends CI_model {
	
	public $tablename = "kongre";
	
	function __construct() 
	{
    parent::__construct();   
    }
	public function get($where = array())
	{
		return $this->db->where($where)->get($this->tablename)->row();
	}
	 public function get_all($where = array(), $order = "id ASC")
    {
        return $this->db->where($where)->get($this->tablename)->result();
    }
	
	public function add($data = array())
	{
		return $this->db->insert($this->tablename,$data);
	}
	
	public function update($where = array(), $data = array()){

       return $this->db->where($where)->update($this->tablename, $data);
    }
    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tablename);
    }
}



