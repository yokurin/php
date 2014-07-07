<?php

class Model extends CI_Model {

	//必ず必要なファンクション？？？
	//form_helperはモデル内に書くこと
    function __construct()
    {
       
        parent::__construct();
		//$this->load->helper('form');
		$this->load->database();
		
    }

   //dbに書き込むファンクション
   /* function update_mydb_items_name()
    {
      	$this->load->database('database');
		
		$insert_array = array(
   			'id' => 'id' ,
   			'item_name' => 'item_name' ,
   			'price' => 'price',
   			'keyword' => 'keyword',
			);
		$this->db->insert('my_items', $insert_array); 
	}

    */
}		
			
?>
