<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	
	public function index()
	{
		var_dump($this->input->post('email_address'));
		$this->load->model('users_model');
        // データがPOSTされたときだけ括弧内を実行する
        if ($_POST) 
        {
            $data = new stdClass();
            $data->users_email_address = $this->input->post('email_address');
            $data->users_encrypted_password = $this->input->post('password');
            //$data->users_registration_token = '';
            //$data->users_created_at = date('Y-m-d H:i:s');
            $this->users_model->save($data);
        }
		
		$this->load->view('register_form');
	}
}

?>