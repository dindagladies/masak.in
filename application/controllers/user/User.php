<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class User extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('authenticated')) {
			$this->session->set_flashdata('error','Silahkan login dahulu');
			redirect('auth');
		}
	}

	public function index()
	{
		$this->template->load('template/index','konten_user/home');
	}

	public function home(){
		$this->load->view('konten_user/home');
	}

	public function shop(){
		$this->load->view('konten_user/shop');
	}

	public function profile(){
		$this->load->view('konten_user/profile');
	}

	public function thanks(){
		$this->load->view('konten_user/thankyou');
	}

	public function edit_profile(){
		$this->load->view('konten_user/edit_profile');
	}

}
