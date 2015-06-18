<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_update extends CI_Controller {

    public function __construct(){
        parent::__construct();  
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->model('tbl_campaign_update');
		$this->data['data'] = $this->tbl_campaign_update->getAllCampainUpdate();  
		$this->load->view('admin/view_campaign_update', $this->data);
	}

	function addData()
	{
		$this->load->view('admin/add_campaign_update');
	}

    function edit($id)
    {
        $this->load->model('tbl_campaign_update');
        $filter['id']=$id;
        $query=$this->tbl_campaign_update->getCampainUpdateById($filter);
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $this->data['id'] = $row->id;
                $this->data['id_campaign'] = $row->id_campaign;
                $this->data['title'] = $row->title;
                $this->data['description'] = $row->description;
                $this->data['creator'] = $row->creator;
                $this->load->view('admin/edit_campaign_update', $this->data);
            }
        }
    }

    function getDelete($id)
    {
        $this->load->model('tbl_campaign_update');
        $filter['id']=$id;
        $this->tbl_campaign_update->deleteTblCampaignUpdate($filter);
        redirect('campaign_update');
    }    

    function insertToDatabase()
    {   
        $this->form_validation->set_rules('description', 'description', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/add_campaign_update',array("error" => true, "message" => validation_errors()));
        }        
        else
        {
            $this->data['id_campaign'] = $this->input->post('campaignt');
            $this->data['title'] = $this->input->post('title');
            $this->data['description'] = $this->input->post('description');
            $this->data['creator'] = $this->input->post('creator');
            
            $this->load->model('tbl_campaign_update');
            if (isset($this->data)) 
            {
                $this->tbl_campaign_update->insertTblCampaignUpdate($this->data);
                redirect('campaign_update');
            }
            
        }
    }

}

/* End of file campaign_update.php */
/* Location: ./application/controllers/campaign_update.php */