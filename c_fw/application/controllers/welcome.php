<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
		
	}

	
    public function __construct()
    {
        parent::__construct();
       $this->load->model('model');
	   echo "$data";
	   
        

    }
}
?>