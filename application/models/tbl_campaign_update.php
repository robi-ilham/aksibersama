<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tbl_campaign_update extends CI_Model {
	public function __construct(){
        parent::__construct();  
	}
	
	function getAllCampainUpdate()
	{
		return $this->db->get('tbl_campaign_update');
	}

	function getCampainUpdateById($param){
		$filter['id']=$param['id'];
		$res=$this->db->get('tbl_campaign_update',$filter);
		return $res;
	}

	function getCampainUpdateByCampaign($param){
		$filter['id_campaign']=$param['id_campaign'];
		$res=$this->db->get('tbl_campaign_update',$filter);
		return $res;
	}

	function insertTblCampaignUpdate($param){
		$insert['id_campaign']=$param['id_campaign'];
		$insert['title']=$param['title'];
		$insert['description']=$param['description'];
		$insert['creator']=$param['creator'];
		//$insert['alamat']=$param['alamat'];
		$this->db->insert('tbl_campaign_update',$insert);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function updateTblCampaignUpdate($param){
		$update['id_campaign']=$param['id_campaign'];
		$update['title']=$param['title'];
		$update['description']=$param['description'];
		$update['creator']=$param['creator'];
		$filter['id']=$param['id'];
		$this->db->update('tbl_campaign_update',$update,$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteTblCampaignUpdate($param){
		
		$filter['id']=$param['id'];
		$this->db->delete('tbl_campaign_update',$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}