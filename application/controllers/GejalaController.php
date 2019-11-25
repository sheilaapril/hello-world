<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GejalaController extends CI_Controller {

	public function index()
	{	
		$data= $this->GejalaModel->getGejala();
		$this->load->view('gejala/tampilGejala',array('data'=>$data));
	}

	public function admin()
	{	
		$data= $this->GejalaModel->getGejala();
		$this->load->view('gejala/tampilGejalaAdmin',array('data'=>$data));
	}

	public function addData(){
		$this->load->view('gejala/tambahGejala');
	}

	public function tambahGejala(){
		
		$kode_gejala = $_POST['kode_gejala'];
		$nama_gejala = $_POST['nama_gejala'];

		$data = array(
			'kode_gejala' => $kode_gejala,
			'nama_gejala' => $nama_gejala,
		);

		$res = $this->GejalaModel->insertData('gejala',$data);
		
		if ($res>=1 ) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}

	public function edit_data($kode_gejala){
		$user = $this->GejalaModel->getGejala("where kode_gejala = '$kode_gejala'");
		$data = array(
			"kode_gejala" =>$user[0]['kode_gejala'],
			"nama_gejala" =>$user[0]['nama_gejala'],
		);
		$this->load->view('gejala/editGejala',$data);
	}

	public function updateGejala(){
		$kode_gejala = $_POST['kode_gejala'];
		$nama_gejala = $_POST['nama_gejala'];
		$data = array(
			'kode_gejala' => $kode_gejala,
			'nama_gejala' => $nama_gejala,
		);
		$where=array('kode_gejala'=>$kode_gejala);
		$res = $this->GejalaModel->updateData('gejala',$data,$where);
		if ($res>=1) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}

	public function deleteGejala($kode_gejala){
		$where=array('kode_gejala'=>$kode_gejala);
		$res = $this->GejalaModel->deleteData('gejala',$where);
		if ($res>=1) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}
}
