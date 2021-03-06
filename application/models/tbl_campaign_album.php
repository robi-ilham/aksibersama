<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tbl_campaign_album extends CI_Model {
	public function __construct(){
        parent::__construct();  
	}
	
	function gelAllCampainAlabum(){
		$res=$this->db->get('tbl_campaign_album');
		return $res;
	}

	function getCampainAlabumById($param){
		$filter['id']=$param['id'];
		return $this->db->get_where('tbl_campaign_album',$filter);
	}
	
	function insertTblCampaignAlbum($param){
		$insert['id_campaign']=$param['id_campaign'];
		$insert['image']=$param['image'];
		$insert['camption']=$param['camption'];
		
		$this->db->insert('tbl_campaign_album',$insert);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function updateTblCampaignAlbum($param){
		$update['id_campaign']=$param['id_campaign'];
		$update['image']=$param['image'];
		$update['camption']=$param['camption'];
		$filter['id']=$param['id'];
		$this->db->update('tbl_campaign_album',$update,$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteTblCampaignAlbum($param){
		
		$filter['id']=$param['id'];
		$this->db->delete('tbl_campaign_album',$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}