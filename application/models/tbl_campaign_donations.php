<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tbl_campaign_donations extends CI_Model {
	public function __construct(){
        parent::__construct();  
	}
	
	function getAllCampainDonantions(){
		$res = $this->db->get('tbl_campaign_donations');
		return $res;
	}
	function insertTblCampaignDonations($param){
		$insert['id_campaign']=$param['id_campaign'];
		$insert['name']=$param['name'];
		$insert['account_number']=$param['account_number'];
		$insert['donation_date']=$param['donation_date'];
		$insert['donation']=$param['donation'];
		$insert['user_id']=$param['user_id'];
		$insert['email']=$param['email'];
		$insert['phone_number']=$param['phone_number'];
		//$insert['donation']=$param['donation'];
		$this->db->insert('tbl_campaign_donations',$insert);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function updateTblCampaignDonations($param){
		$update['id_campaign']=$param['id_campaign'];
		$update['name']=$param['name'];
		$update['account_number']=$param['account_number'];
		$update['donation_date']=$param['donation_date'];
		$update['donation']=$param['donation'];
		$update['user_id']=$param['user_id'];
		$update['email']=$param['email'];
		$update['phone_number']=$param['phone_number'];
		$filter['id']=$param['id'];
		$this->db->update('tbl_campaign_donations',$update,$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteTblCampaignDonations($param){
		
		$filter['id']=$param['id'];
		$this->db->delete('tbl_campaign_donations',$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}