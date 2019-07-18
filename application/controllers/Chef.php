<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chef extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('M_makanan');
		if (!$this->session->userdata('authenticated')) {
			$this->session->set_flashdata('error','Silahkan login dahulu');
			redirect('auth');
		}
	}

	public function index()
	{
		$this->template->load('chef/template/chef_index','chef/konten/dashboard');
	}

	public function report()
	{
		$this->template->load('chef/template/chef_index','chef/konten/report');
	}

	public function profil()
	{
		$this->load->view('chef/konten/profil');
	}

	
	public function gallery(){
		$this->load->view('chef/konten/gallery');
	}

	

}
