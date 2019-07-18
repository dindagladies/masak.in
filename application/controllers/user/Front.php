<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {
	public function index()
	{
		$this->template->load('template/index','template/index');
	}

	public function home(){
		$this->template->load('template/index','konten_user/home');
	}

	public function menu(){
		$this->load->view('konten_user/menu');
	}

	public function second_menu(){
		$this->template->load('template/index','konten_user/second_menu');
	}

	public function third_menu(){
		$this->template->load('template/index','konten_user/third_menu');
	}

	// public function register(){
	// 	$this->template->load('template/index','template/register');
	// }

	

	public function login(){
		$this->template->load('template/index','template/login');
	}

	// ------------- Menu ---------------

	// ----------- End Menu ------------
}
