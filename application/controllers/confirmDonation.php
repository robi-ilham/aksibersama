<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfirmDonation extends CI_Controller {
	
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
		$this->load->model('tbl_confirm_donation');
		$this->data['data'] = $this->tbl_confirm_donation->getAllConfirmDonation();  
		$this->load->view('admin/view_confirmDonation',$this->data);
	}

	function addData()
	{
        $this->load->view('admin/add_ConfirmDonation');
    }

    function edit($id)
    {
        $this->load->model('tbl_confirm_donation');
        $filter['id']=$id;
        $query=$this->tbl_confirm_donation->getConfirmDonationById($filter);
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $this->data['id'] = $row->id;
                $this->data['name'] = $row->name;
                $this->data['email'] = $row->email;
                $this->data['accountNumber'] = $row->account_number;
                $this->data['date'] = $row->date;
                $this->data['donation'] = $row->donation;              
                $this->load->view('admin/edit_ConfirmDonation', $this->data);
            }

        }
    }

    function getDelete($id)
    {
        $this->load->model('tbl_confirm_donation');
        $filter['id']=$id;
        $this->tbl_confirm_donation->deleteTblConfirmDonation($filter);
        redirect('confirmDonation');
    }    

	function insertToDatabase()
	{   
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|is_unique[tbl_confirm_donation.email]|valid_email', array('required'=>'email sudah ada'));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/add_ConfirmDonation',array("error" => true, "message" => validation_errors()));
        }
        
        else
        {
            $this->data['name'] = $this->input->post('name');
            $this->data['email'] = $this->input->post('email');
            $this->data['account_number'] = $this->input->post('accountNumber');
            $this->data['date'] = $this->input->post('date');
            $this->data['donation'] = $this->input->post('donation');
            
            $this->load->model('tbl_confirm_donation');
            if (isset($this->data)) 
            {
                $this->tbl_confirm_donation->insertTblConfirmDonation($this->data);
                redirect('confirmDonation');
            }
            
        }
	}

    function updateToDatabase()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        //$this->form_validation->set_rules('email', 'email', 'required|is_unique[tbl_confirm_donation.email]|valid_email', array('required'=>'email sudah ada'));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/edit_ConfirmDonation',array("error" => true, "message" => validation_errors()));
        }
        else
        {
            $this->data['id'] = $this->input->post('id');
            $this->data['name'] = $this->input->post('name');
            $this->data['email'] = $this->input->post('email');
            $this->data['account_number'] = $this->input->post('accountNumber');
            $this->data['date'] = $this->input->post('date');
            $this->data['donation'] = $this->input->post('donation');

            $this->load->model('tbl_confirm_donation');
            if (isset($this->data)) 
            {
                $this->tbl_confirm_donation->updateTblConfirmDonation($this->data);
                redirect('confirmDonation');
            }
            
        }
        
    }
}
