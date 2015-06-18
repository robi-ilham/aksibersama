<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tbl_campaign extends CI_Model {
	public function __construct(){
        parent::__construct();  
	}
	
	function getAllCampign(){
		return $this->db->get('tbl_campaign');
	}

	function getCampaignById($param){
		$filter['id']=$param['id'];
		return $this->db->get_where('tbl_campaign',$filter);
	}
	
	function insertTblCampaign($param){
		$insert['title']=$param['title'];
		$insert['description']=$param['description'];
		$insert['start_date']=$param['start_date'];
		$insert['end_date']=$param['end_date'];
		$insert['target_donation']=$param['target_donation'];
		$insert['creator']=$param['creator'];
		$insert['image']=$param['image'];
		$this->db->insert('tbl_campaign',$insert);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function updateTblCampaign($param){
		$update['title']=$param['title'];
		$update['description']=$param['description'];
		$update['start_date']=$param['start_date'];
		$update['end_date']=$param['end_date'];
		$update['target_donation']=$param['target_donation'];
		$update['creator']=$param['creator'];
		$update['image']=$param['image'];
		$filter['id']=$param['id'];
		$this->db->update('tbl_campaign',$update,$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteTblCampaign($param){
		
		$filter['id']=$param['id'];
		$this->db->delete('tbl_campaign',$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}