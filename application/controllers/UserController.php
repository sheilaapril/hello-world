<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('Home');
	}

	public function about(){
		$this->load->view('about');
	}

	public function diag(){
		$this->load->view('tampil');
	}

	public function login(){
		$this->load->view('login/login');
	}

	public function loginValidation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run()) {
			//true
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password_v = md5($password);
			//model function
			if ($this->UserModel->login_admin($username,$password_v)) {
				$session_data = array(
					'username'=>$username
				);
				$this->session->set_userdata($session_data);
				$this->session->set_flashdata('success');
				if ($username =="admin") {
					redirect('TandaController/admin');
				}
			}else{
				$this->session->set_flashdata('error','Invalid username and password');
				redirect('UserController/login');
			}
		}else{
			$this->login();
		}
	}

	function logout(){
		$this->session->unset_userdata('username');
		redirect('UserController/login');
	}

	public function hasil(){
		$hasil= $this->UserModel->getLikelihood("where id = '1'");
		$data = array(
			'tanda006' => $hasil[0]['tanda006'],
			'tanda011' => $hasil[0]['tanda011'],
			'tanda039' => $hasil[0]['tanda039'],
			'tanda040' => $hasil[0]['tanda040'],
			'tanda041' => $hasil[0]['tanda041'],
			'tanda044' => $hasil[0]['tanda044'],
			'tanda047' => $hasil[0]['tanda047'],
			'tanda050' => $hasil[0]['tanda050'],
			'gejala006' => $hasil[0]['gejala006'],
			'gejala011' => $hasil[0]['gejala011'],
			'gejala039' => $hasil[0]['gejala039'],
			'gejala040' => $hasil[0]['gejala040'],
			'gejala041' => $hasil[0]['gejala041'],
			'gejala044' => $hasil[0]['gejala044'],
			'gejala047' => $hasil[0]['gejala047'],
			'gejala050' => $hasil[0]['gejala050'],
		);
		$this->load->view('tampilAkhir',$data);
	}
}
