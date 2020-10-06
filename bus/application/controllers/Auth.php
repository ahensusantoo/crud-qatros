<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index(){
		$data = [
			'title' => 'Halaman Login'
		];
		$this->load->view('login', $data);
	}

	public function process(){
		$post = $this->input->post(null, true);
		$query = $this->user_model->login($post);
		if(isset($post['login'])){
			if($query->num_rows() > 0){
				$row = $query->row();
				$sess_data = [	'user_id' 	=> $row->user_id,
								'level' 	=> $row->level
							];
				$this->session->set_userdata($sess_data);
				echo "<script>
					alert('Selamat, Login Berhasil');
					window.location='".site_url('admin/home')."';
				</script>";
				// echo "berhasil";
			}
			else{
				echo "<script>
					alert('Login Gagal, username/passwaord salah');
					window.location='".site_url('auth')."';
				</script>";
				// echo "gagal";
			}
		}
	}

	public function logout(){
		$this->user_login->logout();
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */