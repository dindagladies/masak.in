<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {
    public function __construct()
	{
        parent::__construct();
        $this->load->model('M_makanan');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        # code...
        $data = $this->M_makanan->show();
        $state = array(
            'data' => $data,
        );

        $this->load->view('chef/konten/makanan',$state);
        // $this->template->load('chef/template/chef_index','chef/konten/makanan',$state);
    }

    public function insert()
    {
        # code...
        $data = $this->M_makanan->show_kategori()->result();
        $this->load->view('chef/konten/add_makanan',array('data'=>$data));
    }

    public function add_proc(){
        
        if ($_FILES['foto']['name'] != "" and $_FILES['foto']['name'] != null) {

            // $error = array('data', 'cek image');
            // echo json_encode($error);
            # code...
            $config['upload_path'] = './assets/uploads/foto_makanan';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 100;
            $config['max_width'] = 400;
            $config['max_heigh'] = 400;
            $new_name = time().$_FILES['foto']['name'];
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);

            if (! $this->upload->do_upload('foto')) {
                # code...
                $this->session->set_flashdata('error',$this->upload->display_errors());
                $error = array('error' => 'error');
                echo json_encode($error);
            } else {
                
                $data = array(
                    'author' => '12',
                    'nama_makanan' => $this->input->post('makanan'),
                    'id_kategori' => $this->input->post('kategori'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'stock' => $this->input->post('stock'),
                    'foto' => $new_name
                );

                // echo json_encode($data);

                $this->M_makanan->add($data);

                $this->session->set_flashdata('sukses','Insert data sukses');
                $error = array('error' => 'false');
                echo json_encode($error);
                
            }
        } else {
            
            $error = array('error', 'gambar harus di isi');
            echo json_encode($error);
        }

    }

    public function edit($id)
    {
        # code...
        $data = $this->M_makanan->show_kategori()->result();
        $food = $this->M_makanan->showByid($id)->row();
        $dat = array(
            'data'=>$data,
            'food' => $food
        );

        $this->load->view('chef/konten/edit_makanan',$dat);
    }

    public function edit_proc()
    {
        error_reporting(0); 
        $data_id = $this->input->post('id_makanan');
        $new_name = $this->input->post('foto_hiden');

        if ($_FILES['foto']['name'] != "" and $_FILES['foto']['name'] != null) {

            $foto = $this->M_makanan->showByid($this->input->post('id'));
            
            if ($foto->foto != '') {
                # code...
                unlink('./assets/uploads/foto_makanan/'.$foto->foto);
            }

            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 100;
            $config['max_width'] = 600;
            $config['max_heigh'] = 600;
            $new_name = time().$_FILES['foto']['name'];
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                # code...
                $error = array('error' => $this->upload->display_errors());
                echo json_encode($error);
                }
            } 

            $data = array(
                'author' => '12',
                'nama_makanan' => $this->input->post('makanan'),
                'id_kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'stock' => $this->input->post('stock'),
                'foto' => $new_name
            );


            $this->M_makanan->edit($data_id,$data);

            $sukses = $this->session->set_flashdata('sukses','Edit data sukses');
            echo json_encode($sukses);
    }

    public function delete(){      
       
        $del_id = $this->input->post('id');
        if ($del_id->foto != ''and $del_id->foto != null) {
            unlink('./assets/uploads/foto_mananan/'.$del_id->foto);
        }

        $this->M_makanan->delete($del_id);
        $sukses = $this->session->set_flashdata('sukses','Hapus data dengan id:'.$del_id.' sukses');
        echo json_encode($sukses);
    }

}
