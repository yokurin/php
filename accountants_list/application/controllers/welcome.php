<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->helper();
	}
	 
	public function index()
	{
	//	$this->load->model('users_model');
		
		$this->load->view('search_form');		
		$data['records'] = $this->db->get('accountants_list')->result_array();
		$this->load->view('welcome_message',$data);
	}
	
	public function search()
	{
		
		
		if($this->input->post('search')!=null)
		{
			$search = $this->input->post('search');
			$this->load->model('users_model');
			$data['records']=$this->users_model->search($search);
			$this->load->view('search_list',$data);
		}
		else
		{
			redirect('../Welcome/index');	
		}
	
		
	}

	public function allview()
	{
		$this->load->model('users_model');
		$id_syutoku = $this->input->post('id');
		$data['records'] = $this->users_model->allview($id_syutoku);
		$this->load->view('allview',$data);
	}
	
	
	
	public function edit()
	{
		$this->load->model('users_model');
		$id_syutoku = $this->input->post('id');
		$data['records']=$this->users_model->edit($id_syutoku);
		$this->load->view('edit',$data);
		
	}
	
	public function update()
	{
		$this->load->model('users_model');
		$id_syutoku = $this->input->post('id');
		if($this->input->post('id')!=null)
		{
			$data=array(
			'id'=>$this->input->post('id',true),
			'jimu_name'=>$this->input->post('jimu_name',true),
			'teac_name'=>$this->input->post('teac_name',true),
			'address'=>$this->input->post('address',true),
			'tel'=>$this->input->post('tel',true),
			'fax'=>$this->input->post('fax',true),
			'mob_tel'=>$this->input->post('mob_tel',true),
			'mail'=>$this->input->post('mail',true),
			'hp_url'=>$this->input->post('hp_url',true),
			'seturitsu'=>$this->input->post('seturitsu',true),
			'sikaku_get'=>$this->input->post('sikaku_get',true),
			'other_sikaku'=>$this->input->post('other_sikaku',true),
			'area'=>$this->input->post('area',true),
			'tokui_gyo'=>$this->input->post('tokui_gyo',true),
			'tokui_bun'=>$this->input->post('tokui_bun',true),
			'software'=>$this->input->post('software',true),
			'jimu_amount'=>$this->input->post('jimu_amount',true),
			'other_sikaku_jimu'=>$this->input->post('other_sikaku_jimu',true),
			'near_st'=>$this->input->post('near_st',true),
			'birthday'=>$this->input->post('birthday',true),
			'career'=>$this->input->post('career',true),
			'other_info'=>$this->input->post('other_info',true),

			);
			$this->db->where('ID',$this->input->post('id',true));
			$this->db->update('accountants_list',$data);
		}
		$this->load->view('allview');
		
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */