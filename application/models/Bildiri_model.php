<?php

class Bildiri_model extends CI_model {
	
	public $tablename = "bildiri";
	
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
		// join('kongre', 'kongre.id = bildiri.kongre_id')->
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
		//$this->db->where('id', $id);
		//$this->db->delete($this->tablename);
		//if($this->db->affected_rows() == 1){
			
		//	return true;
			
		//}else {
			
			//return false;
		//}
		
    }
}



