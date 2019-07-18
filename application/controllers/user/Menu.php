<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Menu extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		// if (!$this->session->userdata('authenticated')) {
		// 	$this->session->set_flashdata('error','Silahkan login dahulu');
		// 	redirect('auth');
		// }
    }

	public function menu(){
		$this->load->view('konten_user/menu');
	}

    public function second_menu(){
		$this->load->view('konten_user/second_menu');
    }
    
    public function third_menu(){
		$this->load->view('konten_user/third_menu');
    }
    
}