<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	
	function search($str)
	{
		//all fieldがnullだと、うまく行かない
			$sql= "SELECT * FROM accountants_list WHERE concat_ws(char(0),id,jimu_name,teac_name,address,tel,fax,mob_tel,mail,hp_url,seturitsu,sikaku_get,other_sikaku,area,tokui_gyo,tokui_bun,software,jimu_amount,other_sikaku_jimu,near_st,birthday,career,other_info) LIKE ?" ;
			$query=$this->db->query($sql,array("%{$str}%"));
			return $query->result_array();
	
	 }
	
	public function allview($id_syutoku)
	{
			
			$sql= "SELECT * FROM accountants_list WHERE id=$id_syutoku";
			$query=$this->db->query($sql);
			return $query->result_array();
	
	 }
	
	public function edit($id_syutoku)
	{
			
			$sql= "SELECT * FROM accountants_list WHERE id=$id_syutoku";
			$query=$this->db->query($sql);
			return $query->result_array();
	 }
	
	/*public function update($id_syutoku)
	{
			
			$sql= "UPDATE accountants_list SET WHERE id=$id_syutoku";
			$query=$this->db->query($sql);
			return $query->result_array();
	
	 }*/
}

/* End of file users_model.php */