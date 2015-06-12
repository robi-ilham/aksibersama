<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tbl_confirm_donation extends CI_Model {
	public function __construct(){
        parent::__construct();  
	}
	
	
	function insertTblConfirmDonation($param){
		$insert['name']=$param['name'];
		$insert['email']=$param['email'];
		$insert['account_number']=$param['account_number'];
		$insert['date']=$param['date'];
		$insert['donation']=$param['donation'];
		
		$this->db->insert('tbl_confirm_donation',$insert);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function updateTblRegister($param){
		$update['name']=$param['name'];
		$update['email']=$param['email'];
		$update['account_number']=$param['account_number'];
		$update['date']=$param['date'];
		$update['donation']=$param['donation'];
		$filter['id']=$param['id'];
		$this->db->update('tbl_confirm_donation',$update,$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteTblConfirmDonation($param){
		
		$filter['id']=$param['id'];
		$this->db->delete('tbl_confirm_donation',$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}