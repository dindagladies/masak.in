<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Makanan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_user/M_makanan');
    }

    function index(){
        $data['kategori'] = $this->M_makanan->get_kategori()->result();
        $this->load->view('konten_user/menu', $data);
    }

    function get_makanan($id_kategori){
        // $id_kategori = $this->input->post('id', TRUE);
        $data['makanan'] = $this->M_makanan->get_makanan($id_kategori)->result();
        $this->load->view('konten_user/second_menu', $data);
        // echo json_encode($data);
    }

    function get_chef($id_makanan){
        $data['chef'] = $this->M_makanan->get_chef($id_makanan)->result();
        $this->load->view('konten_user/third_menu', $data);
        // echo json_encode($data);
    }
    
}