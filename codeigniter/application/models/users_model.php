<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	public function save()
    {
    	$this->load->database();
		$this->db->select("*");

		$this->db->from("accountants_list");
        return $this->db->get();
		
    }
}

/* End of file users_model.php */