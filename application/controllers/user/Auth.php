<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->model('M_user/M_auth');
		$this->load->model('M_user/M_profile');
		
    }

	// public function index(){
	// 	$this->template->load('template/index', 'konten_user/home');
	// }

    public function index()
    {
        $this->template->load('template/auth_index','template/login');
	}

    public function register()
    {
        $this->template->load('template/auth_index','template/register');
    }

    public function log_action(){
        $email = $this->input->post('email');
		$password = $this->input->post('password');

		$where = array(
			'email' => $email
		);

		$data = $this->M_auth->ct_login($where)->row_array();
		
		$cc =  $data['password'];

		
		if (password_verify($password,$cc)) {
		// 	# code...
			$cek = $this->M_auth->ct_login($where)->num_rows();
			if ($cek == 1) {
				# code...
				$data_session = array(
					'user_id' => $data['id'],
					'nama' => $email,
					'role' => $data['role'],
					'authenticated' => true
				);

				$this->session->set_userdata($data_session);
				$role = $data['role'];
				switch ($role) {
					case '0':
						redirect('user/user/');
						break;
				
					case '1':
						redirect('user/admin/');
					break;

					default:
						redirect('user/auth');
				};
			}

			

		} else {
			$this->session->set_flashdata('error','Password yang anda masukan salah');
			redirect('user/auth');
		}
    }

    public function reg_action(){
		$this->db->trans_start();

		$password = $this->input->post('password',TRUE);
		$hash = password_hash($password,PASSWORD_DEFAULT);
		$email = $this->input->post('email');

		$data = array(
			'email' => $email,
			'password' => $hash
		);

				

		if($this->M_auth->reg_user($data)){

				$idku = $this->M_auth->get_user($email)->row_array();
				$sendit = $idku['user_id'];
				$data= array(
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'user_id' => $sendit
				);
				

				$this->M_profile->add($data);	
				if ($this->db->trans_status()=== FALSE) {
					$this->db->trans_rollback();
				} else {
					$this->db->trans_commit();
					$this->session->set_flashdata('success','Registrasi berhasil');
					redirect('user/auth');
				}

				console.log('nama_lengkap');
			
		};

		

    }
    
    public function cekEmail(){
		
        $email = $this->input->post('email',TRUE);
            
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                echo '<label class="error mt-2 text-danger" for="cemail">Please enter a valid email address.</label>';
            } else {
                if ($this->M_auth->ct_email($email)) {
                    echo '<label class="error mt-2 text-danger" for="cemail">Email telah terdaftar</label>';
                } else {
                    echo '<label class="error mt-2 text-success" for="cemail">Email bisa digunakan</label>';
            }
        }
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect('user/auth');
	}

}