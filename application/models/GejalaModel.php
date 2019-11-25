<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GejalaModel extends CI_Model {

	
	public function getGejala($where=""){
		$data = $this->db->query('select * from gejala '.$where);
		return $data->result_array();
	}

	public function insertData($tableName, $data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	public function updateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;
	}

	public function deleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
	}
}
