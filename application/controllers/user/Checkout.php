<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Checkout extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_user/M_order');
	}
	
    public function index(){
		$this->load->view('konten_user/checkout');
	}

    function get_checkout($id_chef){
        $data['checkout'] = $this->M_checkout->get_checkout($id_order)->result();
        // $this->load->view('konten_user/checkout', $data);
        echo json_encode($data);
    }
}