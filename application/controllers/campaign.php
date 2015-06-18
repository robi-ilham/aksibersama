<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {

    public function __construct(){
        parent::__construct();  
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->model('tbl_campaign');
		$this->data['data'] = $this->tbl_campaign->getAllCampign();  
		$this->load->view('admin/view_campaign', $this->data);
	}

    function detail($id)
    {
        $this->load->model('tbl_campaign');
        $filter['id']=$id;
        $query=$this->tbl_campaign->getCampaignById($filter);
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $this->data['id'] = $row->id;
                $this->data['title'] = $row->title;
                $this->data['description'] = $row->description;
                $this->data['start_date'] = $row->start_date;
                $this->data['end_date'] = $row->end_date;
                $this->data['target_donation'] = $row->target_donation;
                $this->data['creator'] = $row->creator;
                $this->data['image'] = $row->image;               
                $this->load->view('admin/detail_campaign', $this->data);
            }

        }
    }

	function addData()
	{
		$this->load->view('admin/add_campaign');
	}

	function edit($id)
    {
        $this->load->model('tbl_campaign');
        $filter['id']=$id;
        $query=$this->tbl_campaign->getCampaignById($filter);
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $this->data['id'] = $row->id;
                $this->data['title'] = $row->title;
                $this->data['description'] = $row->description;
                $this->data['start_date'] = $row->start_date;
                $this->data['end_date'] = $row->end_date;
                $this->data['target_donation'] = $row->target_donation;
                $this->data['creator'] = $row->creator;
                $this->data['image'] = $row->image;               
                $this->load->view('admin/edit_campaign', $this->data);
            }

        }
    }

    function getDelete($id)
    {
        $this->load->model('tbl_campaign');
        $filter['id']=$id;
        $this->tbl_campaign->deleteTblCampaign($filter);
        redirect('campaign');
    }    

	function insertToDatabase()
	{    
        $this->data['title'] = $this->input->post('title');
        $this->data['description'] = $this->input->post('description');
        $this->data['start_date'] = $this->input->post('start_date');
        $this->data['end_date'] = $this->input->post('end_date');       
        $this->data['target_donation'] = $this->input->post('target_donation');
        $this->data['creator'] = $this->input->post('creator');
        $this->data['image'] = $this->input->post('image');
        
        $this->load->model('tbl_campaign');
        if (isset($this->data)) 
        {
            $this->tbl_campaign->insertTblCampaign($this->data);
            redirect('campaign');
        }
	}

    function updateToDatabase()
    {
        $this->form_validation->set_rules('title', 'title', 'required');
        //$this->form_validation->set_rules('email', 'email', 'required|is_unique[tbl_confirm_donation.email]|valid_email', array('required'=>'email sudah ada'));
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/edit_campaign',array("error" => true, "message" => validation_errors()));
        }
        else
        {
            $this->data['id'] = $this->input->post('id');
            $this->data['title'] = $this->input->post('title');
            $this->data['description'] = $this->input->post('description');
            $this->data['start_date'] = $this->input->post('start_date');
            $this->data['end_date'] = $this->input->post('end_date');
            $this->data['target_donation'] = $this->input->post('target_donation');
            $this->data['creator'] = $this->input->post('creator');
            $this->data['image'] = $this->input->post('image');

            $this->load->model('tbl_campaign');
            if (isset($this->data)) 
            {
                $this->tbl_campaign->updateTblCampaign($this->data);
                redirect('campaign');
            }   
        }    
    }
}

/* End of file campaign.php */
/* Location: ./application/controllers/campaign.php */