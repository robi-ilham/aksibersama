<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_donations extends CI_Controller {

    public function __construct(){
        parent::__construct();  
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->model('tbl_campaign_donations');
		$this->data['data'] = $this->tbl_campaign_donations->getAllCampainDonantions();  
		$this->load->view('admin/view_campaign_donations', $this->data);
	}

	function addData()
	{
		$this->load->view('admin/add_campaign_donations');
	}

	function edit($id)
    {
        $this->load->model('tbl_campaign_donations');
        $filter['id']=$id;
        $query=$this->tbl_campaign_donations->getCampainDonantionsById($filter);
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $this->data['id'] = $row->id;
                $this->data['id_campaign'] = $row->id_campaign;
                $this->data['name'] = $row->name;
                $this->data['account_number'] = $row->account_number;
                $this->data['donation_date'] = $row->donation_date;
                $this->data['donation'] = $row->donation;
                $this->data['user_id'] = $row->user_id;
                $this->data['email'] = $row->email;
                $this->data['phone_number'] = $row->phone_number;               
                $this->load->view('admin/edit_campaign_donations', $this->data);
            }

        }
    }

    function getDelete($id)
    {
        $this->load->model('tbl_campaign_donations');
        $filter['id']=$id;
        $this->tbl_campaign_donations->deleteTblCampaignDonations($filter);
        redirect('campaign_donations');
    }    

	function insertToDatabase()
	{    
        $this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/add_campaign_donations',array("error" => true, "message" => validation_errors()));
        }        
        else
        {
            $this->data['id_campaign'] = $this->input->post('campaignt');
            $this->data['name'] = $this->input->post('name');
            $this->data['account_number'] = $this->input->post('account_number');
            $this->data['donation_date'] = $this->input->post('donation_date');
            $this->data['donation'] = $this->input->post('donation');
            $this->data['user_id'] = $this->input->post('user_id');
            $this->data['email'] = $this->input->post('email');
            $this->data['phone_number'] = $this->input->post('phone_number');
            
            $this->load->model('tbl_campaign_donations');
            if (isset($this->data)) 
            {
                $this->tbl_campaign_donations->insertTblCampaignDonations($this->data);
                redirect('campaign_donations');
            }
            
        }
	}

    function updateToDatabase()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        //$this->form_validation->set_rules('email', 'email', 'required|is_unique[tbl_confirm_donation.email]|valid_email', array('required'=>'email sudah ada'));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/edit_campaign_donations',array("error" => true, "message" => validation_errors()));
        }
        else
        {
            $this->data['id'] = $this->input->post('id');
            $this->data['id_campaign'] = $this->input->post('id_campaign');
            $this->data['name'] = $this->input->post('name');
            $this->data['account_number'] = $this->input->post('account_number');
            $this->data['donation_date'] = $this->input->post('donation_date');
            $this->data['donation'] = $this->input->post('donation');
            $this->data['user_id'] = $this->input->post('user_id');
            $this->data['email'] = $this->input->post('email');
            $this->data['phone_number'] = $this->input->post('phone_number');

            $this->load->model('tbl_campaign_donations');
            if (isset($this->data)) 
            {
                $this->tbl_campaign_donations->updateTblCampaignDonations($this->data);
                redirect('campaign_donations');
            }   
        }    
    }
}

/* End of file campaign.php */
/* Location: ./application/controllers/campaign.php */