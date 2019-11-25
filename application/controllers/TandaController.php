<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TandaController extends CI_Controller {

	public function index()
	{	
		$data= $this->TandaModel->getTanda();
		$this->load->view('tanda/tampilTanda',array('data'=>$data));
	}

	public function admin()
	{	
		$data= $this->TandaModel->getTanda();
		$this->load->view('tanda/tampilTandaAdmin',array('data'=>$data));
	}

	public function addData(){
		$this->load->view('tanda/tambahTanda');
	}

	public function tambahTanda(){
		
		$kode_tanda = $_POST['kode_tanda'];
		$nama_tanda = $_POST['nama_tanda'];

		$data = array(
			'kode_tanda' => $kode_tanda,
			'nama_tanda' => $nama_tanda,
		);

		$res = $this->TandaModel->insertData('tanda',$data);
		
		if ($res>=1 ) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}

	public function edit_data($kode_tanda){
		$user = $this->TandaModel->getTanda("where kode_tanda = '$kode_tanda'");
		$data = array(
			"kode_tanda" =>$user[0]['kode_tanda'],
			"nama_tanda" =>$user[0]['nama_tanda'],
		);
		$this->load->view('tanda/editTanda',$data);
	}

	public function updateTanda(){
		$kode_tanda = $_POST['kode_tanda'];
		$nama_tanda = $_POST['nama_tanda'];
		$data = array(
			'kode_tanda' => $kode_tanda,
			'nama_tanda' => $nama_tanda,
		);
		$where=array('kode_tanda'=>$kode_tanda);
		$res = $this->TandaModel->updateData('tanda',$data,$where);
		if ($res>=1) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}

	public function deleteTanda($kode_tanda){
		$where=array('kode_tanda'=>$kode_tanda);
		$res = $this->TandaModel->deleteData('tanda',$where);
		if ($res>=1) {
			$this->admin();
		}
		else{
			echo "gagal";
		}
	}
}
