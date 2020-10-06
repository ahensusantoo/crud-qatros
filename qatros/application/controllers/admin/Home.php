<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index(){

		$item = $this->home_model->get()->result();
		$data = [
			'title' 	=> 'Halaman Dashboard',
			'item' 		=> $item,
		];
		$this->load->view('admin/home', $data, FALSE);
	}

	public function add(){
		$post = $this->input->post(null, true);
		if(isset($_POST['submit'])){
			if($this->home_model->check_nama_item($post['nama_item'], $post['id'])->num_rows() > 0 ){
					$this->session->set_flashdata('warning', "nama item $post[nama_item] sudah digunakan!");
					redirect(site_url('admin/home'),'refresh');
			}
			else{
				$this->home_model->add($post);
				if($this->db->affected_rows() > 0 ){
					$this->session->flashdata('sukses','Data Berhasil Di Tambah');
				}
					echo "<script>window.location='".site_url('admin/home')."'</script>";
			}
		}
	}

	public function update($id){
		$item = $this->home_model->get($id)->result();
		$data = [
			'item' 		=> $item,
		];
		$this->load->view('admin/update', $data, FALSE);
	}

	public function proces($post){
		$post = $this->input->post(null, true);
		
		if(isset($_POST['submit'])){
			if($this->home_model->check_nama_item($post['nama_item'], $post['id'])->num_rows() > 0 ){
				$this->session->set_flashdata('warning', "nama item $post[nama_item] sudah digunakan!");
				redirect(site_url('admin/home/update/'.$post['id']),'refresh');
			}
			else{
				$this->home_model->update($post);
				$this->session->set_flashdata('sukses', 'Berhasil update data');
				redirect(site_url('admin/home'),'refresh');
			}
		}
	}

	public function delete($id){
		$delete = $this->home_model->delete($id);
		$this->session->flashdata('sukses', 'Data Berhasil Di Hapus');
		redirect(site_url('admin/home'),'refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */