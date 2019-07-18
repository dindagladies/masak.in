<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Home extends CI_Controller {

    public function hm()
    {
        $this->template->load('template/auth_index','template/login');
    }
    
    // public function index(){
    //     $this->load->view('konten_user/home');
    // }

    public function index(){
        $this->load->view('template/home');
    }
}