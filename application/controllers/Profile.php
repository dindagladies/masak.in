<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
	}

	public function editname()
	{
       
        $dataku = array(
            'user_id' => $this->input->post('user_id'),
            'name' => $this->input->post('nama_lengkap'),
            'overview' => $this->input->post('overview')
        );

        echo json_encode($dataku);

    }
    
    public function editcontact()
    {
        $dataku = array(
            'user_id' => $this->input->post('user_id'),
            'no_telp' => $this->input->post('no_telp'),
            'laman_web' => $this->input->post('laman_web'),
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'instagram' => $this->input->post('instagram')
        );

        echo json_encode($dataku);
    }

}
