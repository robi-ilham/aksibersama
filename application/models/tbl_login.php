<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tbl_login extends CI_Model {
	public function __construct(){
        parent::__construct();  
	}
	
	function getAllLogin(){
		return $this->db->get('tbl_login');
	}
	function insertTblLogin($param){
		$insert['id_register']=$param['id_register'];
		$insert['email']=$param['email'];
		$insert['password']=$param['password'];
		$insert['login_type']=$param['login_type'];
		$this->db->insert('tbl_login',$insert);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function updateTblLogin($param){
		$filter['id_register']=$param['id_register'];
		$insert['email']=$param['email'];
		$insert['password']=$param['password'];
		$insert['login_type']=$param['login_type'];
		$this->db->update('tbl_login',$update,$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteTblRegister($param){
		
		$filter['id_register']=$param['id_register'];
		$this->db->delete('tbl_login',$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}