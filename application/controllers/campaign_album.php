<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign_album extends CI_Controller {

    public function __construct(){
        parent::__construct();  
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->model('tbl_campaign_album');
		$this->data['data'] = $this->tbl_campaign_album->gelAllCampainAlabum();  
		$this->load->view('admin/view_campaign_album', $this->data);
	}

	function addData()
	{
		$this->load->view('admin/add_campaign_album');
	}

	// edit
	function edit($id)
    {
        $this->load->model('tbl_campaign_album');
        $filter['id']=$id;
        $query=$this->tbl_campaign_album->getCampainAlabumById($filter);
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $this->data['id'] = $row->id;
                $this->data['id_campaign'] = $row->id_campaign;
                $this->data['image'] = $row->image;
                $this->data['camption'] = $row->camption;
                $this->load->view('admin/edit_campaign_album', $this->data);
            }
        }
    }

	// delete
	function getDelete($id)
    {
        $this->load->model('tbl_campaign_album');
        $filter['id']=$id;
        $this->tbl_campaign_album->deleteTblCampaignAlbum($filter);
        redirect('campaign_album');
    }    


	function insertToDatabase()
	{   
        $this->form_validation->set_rules('camption', 'camption', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/add_campaign_album',array("error" => true, "message" => validation_errors()));
        }        
        else
        {
            $this->data['id_campaign'] = $this->input->post('campaignt');
            $this->data['image'] = $this->input->post('image');
            $this->data['camption'] = $this->input->post('camption');
          	
            $this->load->model('tbl_campaign_album');
            if (isset($this->data)) 
            {
                $this->tbl_campaign_album->insertTblCampaignAlbum($this->data);
                redirect('campaign_album');
            }
            
        }
	}

	function updateToDatabase()
    {
        $this->form_validation->set_rules('camption', 'camption', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/add_campaign_album',array("error" => true, "message" => validation_errors()));
        }      
        else
        {
            $this->data['id'] = $this->input->post('id');
            $this->data['id_campaign'] = $this->input->post('id_campaign');
            $this->data['image'] = $this->input->post('image');
            $this->data['camption'] = $this->input->post('camption');

            $this->load->model('tbl_campaign_album');
            if (isset($this->data)) 
            {
                $this->tbl_campaign_album->updateTblCampaignAlbum($this->data);
                redirect('campaign_album');
            }   
        }    
    }
}

/* End of file Campaign_album.php */
/* Location: ./application/controllers/Campaign_album.php */