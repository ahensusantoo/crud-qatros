<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function kode_item(){
		$sql = "SELECT MAX(MID(kode_item,9 ,4)) AS kode_no 
				FROM tbl_item 
				WHERE MID(kode_item, 3, 6) = DATE_FORMAT(CURDATE(), '%y%m%d') ";

		$query = $this->db->query($sql);
		if($query->num_rows() > 0 ){
			$row 	= $query->row();
			$n 		= ((int)$row->kode_no) + 1;
			$no 	= sprintf("%'.04d", $n);
		}
		else{
			$no 	= "0001" ;
		}
		$kode_item 	= "KD".date('ymd').$no;
		return $kode_item;
	}

	public function get($id = null){
		$this->db->select('*');
		$this->db->from('tbl_item');
		$this->db->order_by('item_id', 'desc');
		if($id != null){
			$this->db->where('item_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post){
		$data = [
			'kode_item' 	=>$this->kode_item(),
			'nama_item'  	=>$post['nama_item'],
			'deskripsi'  	=>$post['deskripsi'],
			'created'  		=>date('Y-m-d')
		];
		$this->db->insert('tbl_item', $data);
	}

	public function delete($id){
		$this->db->where('item_id', $id);
		return $this->db->delete('tbl_item');
	}

	public function check_nama_item($nama, $id = null){
		$this->db->from('tbl_item');
		$this->db->where('nama_item', $nama);
		if($id != null){
			$this->db->where('item_id !=', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function update($post){
		$params 	= [
			'nama_item'			=> $post['nama_item'],
			'deskripsi'			=> $post['deskripsi'],
		];
		$this->db->where('item_id', $post['id']);
		$this->db->update('tbl_item', $params);
	}

}

/* End of file Home_model.php */
/* Location: ./application/models/Home_model.php */