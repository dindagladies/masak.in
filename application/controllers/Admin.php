<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$this->template->load('template_admin/index','konten_admin/dashboard');
	}

	public function report()
	{
		$this->template->load('template_admin/index','konten_admin/report');
	}

}
