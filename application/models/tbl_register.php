<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tbl_register extends CI_Model {
	public function __construct(){
        parent::__construct();  
	}
	
	
	function insertTblRegister($param){
		$insert['nama']=$param['nama'];
		$insert['email']=$param['email'];
		$insert['jenis_kelamin']=$param['jenis_kelammin'];
		$insert['tanggal_lahir']=$param['tanggal_lahir'];
		$insert['alamat']=$param['alamat'];
		$this->db->insert('tbl_registers',$insert);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function updateTblRegister($param){
		$update['nama']=$param['nama'];
		$update['email']=$param['email'];
		$update['jenis_kelamin']=$param['jenis_kelammin'];
		$update['tanggal_lahir']=$param['tanggal_lahir'];
		$update['alamat']=$param['alamat'];
		$filter['id']=$param['id'];
		$this->db->update('tbl_registers',$update,$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
	function deleteTblRegister($param){
		
		$filter['id']=$param['id'];
		$this->db->delete('tbl_registers',$filter);
		if($this->db->affected_rows() > 0){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}