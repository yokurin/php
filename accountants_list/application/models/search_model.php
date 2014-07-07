<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	
	function search($str)
	{
		$sql="SELECT * FROM accountants_list WHERE id like ? OR teac_name like ?";
		$query=$this->db->query($sql,array("%{$str}%","%{$str}%"));
		return $query->result_array();
	}

	
}

/* End of file users_model.php */