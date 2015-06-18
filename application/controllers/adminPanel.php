<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {
	
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
	public function __construct(){
        parent::__construct();  
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
        
	{
        
		$this->load->view('admin/login');
	}
	public function login(){
		$this->form_validation->set_rules('email', 'Email', 'required');
		 $this->form_validation->set_rules('password', 'Password', 'required',
                array('required' => 'You must provide a %s.')
        );
		 if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('admin/login');
        }
        else
        {
        	$email=$this->input->post('email');
        	$pass=sha1($this->input->post('password'));
			$filter['email']=$email;
			$filter['password']=$pass;
			$rows=$this->db->get_where('tbl_login',$filter);
			echo $this->db->last_query();
			echo $rows->num_rows();
			if($rows->num_rows == 0){
				$error['message']='incorrect email or password  ';
				$this->load->view('admin/login',$error);
			}
			else {
				$data=array(
					'email'=>$email,
				);
				$this->session->set_userdata($data);
				redirect('adminpanel/home');
			}
                
        }
		
		//$filter['email']=$email;
		//$filter['password']=$pass;
		//$rows=$this->db->get('tbl_login',$filter);
	}
	function home(){
			//print_r($this->session->userdata());
			$this->load->model('tbl_campaign');
			$campaign = $this->tbl_campaign->getAllCampign();
			$total_campaign = $campaign->num_rows();
			$this->data['total_campaign']=$total_campaign;

			$this->load->model('tbl_campaign_donations');
			$campaign_donations = $this->tbl_campaign_donations->getAllCampainDonantions();
			$total_campaign_campaign_donations = $campaign_donations->num_rows();
			$this->data['total_campaign_campaign_donations'] = $total_campaign_campaign_donations;

			// 

			$this->load->model('tbl_login');
			$login = $this->tbl_login->getAllLogin();
			$total_user = $login->num_rows();
			$this->data['total_user'] = $total_user;

			$this->load->view('admin/home',$this->data);
	}
	
}
