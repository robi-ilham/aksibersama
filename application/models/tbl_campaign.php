<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tbl_campaign extends CI_Model {
	public function __construct(){
        parent::__construct();  
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
	function updateTblRegister($param){
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
	function deleteTblRegister($param){
		
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