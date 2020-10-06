<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


	public function get($id = null){
		$this->db->select('*');
		$this->db->from('tbl_stasiun');
		$this->db->order_by('stasiun_id', 'desc');
		if($id != null){
			$this->db->where('stasiun_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add_stasiun($post){
		$data = [
			'nama_stasiun' =>$post['nama_stasiun']
		];
		$this->db->insert('tbl_stasiun', $data);
	}

	public function delete_stasiun($id){
		$this->db->where('stasiun_id', $id);
		return $this->db->delete('tbl_stasiun');
	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */