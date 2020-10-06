<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index(){
		$tujuan = $this->home_model->get()->result();

		$data = [
			'tujuan' => $tujuan,
			'title' => 'Halaman Dashboard'
		];
		$this->load->view('dashboard/index', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */