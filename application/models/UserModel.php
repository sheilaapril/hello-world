<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function login_admin($username,$password){
		if($username == "admin" && $password == md5("admin")) {
			return true;
		}
		else{
			return false;
		}
	 }

	public function getLikelihood($where=""){
		$data = $this->db->query('select * from likelihood '.$where);
		return $data->result_array();
	}

	public function get_countPenyakit(){
		$data = $this->db->query('select count(kode_penyakit) as kode_penyakit from diagnosa ');
		return $data->row()->kode_penyakit;
	}

	public function get_jumlahPenyakit(){
		$data = $this->db->query('select count(kode_penyakit) as kode_penyakit from penyakit ');
		return $data->row()->kode_penyakit;
	}

	public function get_countK006(){
		$data = $this->db->query('select count(if(kode_penyakit = "k006", kode_penyakit, NULL)) as penyakit_k006 from diagnosa');
		return $data->row()->penyakit_k006;
	}
	public function get_countK011(){
		$data = $this->db->query('select count(if(kode_penyakit = "k011", kode_penyakit, NULL)) as penyakit_k011 from diagnosa');
		return $data->row()->penyakit_k011;
	}
	public function get_countK039(){
		$data = $this->db->query('select count(if(kode_penyakit = "k039", kode_penyakit, NULL)) as penyakit_k039 from diagnosa');
		return $data->row()->penyakit_k039;
	}
	public function get_countK040(){
		$data = $this->db->query('select count(if(kode_penyakit = "k040", kode_penyakit, NULL)) as penyakit_k040 from diagnosa');
		return $data->row()->penyakit_k040;
	}
	public function get_countK041(){
		$data = $this->db->query('select count(if(kode_penyakit = "k041", kode_penyakit, NULL)) as penyakit_k041 from diagnosa');
		return $data->row()->penyakit_k041;
	}
	public function get_countK044(){
		$data = $this->db->query('select count(if(kode_penyakit = "k044", kode_penyakit, NULL)) as penyakit_k044 from diagnosa');
		return $data->row()->penyakit_k044;
	}
	public function get_countK047(){
		$data = $this->db->query('select count(if(kode_penyakit = "k047", kode_penyakit, NULL)) as penyakit_k047 from diagnosa');
		return $data->row()->penyakit_k047;
	}
	public function get_countK050(){
		$data = $this->db->query('select count(if(kode_penyakit = "k050", kode_penyakit, NULL)) as penyakit_k050 from diagnosa');
		return $data->row()->penyakit_k050;
	}


//Tanda - tanda

	public function get_countTandaK006($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k006"');
		return $data->row()->kode_tanda;
	}
	public function get_countTandaK011($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k011"');
		return $data->row()->kode_tanda;
	}
	public function get_countTandaK039($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k039"');
		return $data->row()->kode_tanda;
	}
	public function get_countTandaK040($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k040"');
		return $data->row()->kode_tanda;
	}
	public function get_countTandaK041($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k041"');
		return $data->row()->kode_tanda;
	}
	public function get_countTandaK044($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k044"');
		return $data->row()->kode_tanda;
	}
	public function get_countTandaK047($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k047"');
		return $data->row()->kode_tanda;
	}
	public function get_countTandaK050($tanda){
		$data = $this->db->query('select count(if(kode_tanda = "'.$tanda.'", kode_tanda, NULL)) as kode_tanda from diagnosa where kode_penyakit="k050"');
		return $data->row()->kode_tanda;
	}


//Gejala gejala

	public function get_countgejalaK006($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k006"');
		return $data->row()->kode_gejala;
	}
	public function get_countgejalaK011($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k011"');
		return $data->row()->kode_gejala;
	}
	public function get_countgejalaK039($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k039"');
		return $data->row()->kode_gejala;
	}
	public function get_countgejalaK040($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k040"');
		return $data->row()->kode_gejala;
	}
	public function get_countgejalaK041($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k041"');
		return $data->row()->kode_gejala;
	}
	public function get_countgejalaK044($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k044"');
		return $data->row()->kode_gejala;
	}
	public function get_countgejalaK047($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k047"');
		return $data->row()->kode_gejala;
	}
	public function get_countgejalaK050($gejala){
		$data = $this->db->query('select count(if(kode_gejala = "'.$gejala.'", kode_gejala, NULL)) as kode_gejala from diagnosa where kode_penyakit="k050"');
		return $data->row()->kode_gejala;
	}

}
