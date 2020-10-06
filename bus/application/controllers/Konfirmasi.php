<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {

	public function index(){
		$data = [
			'title' => 'Halaman Konfirmasi'
		];
		$this->load->view('konfirmasi/index', $data);
	}

}

/* End of file Konfirmasi.php */
/* Location: ./application/controllers/Konfirmasi.php */