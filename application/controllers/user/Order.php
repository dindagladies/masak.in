<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Order extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_user/M_order');
    }
    
    function get_order(){
        // $data['order'] = $this->M_order->get_order($id_chef)->result();
        $this->load->view('konten_user/shop');

        // echo json_encode($id_chef);
    }

    function show_detail($id_chef){
        // $query = $this->db->get_where('chef', array('id_makanan' => $id_makanan));

    }

}