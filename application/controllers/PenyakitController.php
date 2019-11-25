<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyakitController extends CI_Controller {


	public function index()
	{	
		$data= $this->PenyakitModel->getPenyakit();
		$this->load->view('penyakit/tampilPenyakit',array('data'=>$data));
	}

	public function admin()
	{	
		$data= $this->PenyakitModel->getPenyakit();
		$this->load->view('penyakit/tampilPenyakitAdmin',array('data'=>$data));
	}

	public function addData(){
		$this->load->view('penyakit/tambahPenyakit');
	}

	public function tambahPenyakit(){
		
		$kode_penyakit = $_POST['kode_penyakit'];
		$nama_penyakit = $_POST['nama_penyakit'];

		$data = array(
			'kode_penyakit' => $kode_penyakit,
			'nama_penyakit' => $nama_penyakit,
		);

		$res = $this->PenyakitModel->insertData('penyakit',$data);
		
		if ($res>=1 ) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}

	public function edit_data($kode_penyakit){
		$user = $this->PenyakitModel->getPenyakit("where kode_penyakit = '$kode_penyakit'");
		$data = array(
			"kode_penyakit" =>$user[0]['kode_penyakit'],
			"nama_penyakit" =>$user[0]['nama_penyakit'],
		);
		$this->load->view('penyakit/editpenyakit',$data);
	}

	public function updatepenyakit(){
		$kode_penyakit = $_POST['kode_penyakit'];
		$nama_penyakit = $_POST['nama_penyakit'];
		$data = array(
			'kode_penyakit' => $kode_penyakit,
			'nama_penyakit' => $nama_penyakit,
		);
		$where=array('kode_penyakit'=>$kode_penyakit);
		$res = $this->PenyakitModel->updateData('penyakit',$data,$where);
		if ($res>=1) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}

	public function deletepenyakit($kode_penyakit){
		$where=array('kode_penyakit'=>$kode_penyakit);
		$res = $this->PenyakitModel->deleteData('penyakit',$where);
		if ($res>=1) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}
}
