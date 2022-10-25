<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBuku extends CI_Model {

	public function getBuku() {
		return $this->db->get();
	}

	public function bukuWhere($where) {
		return $this->db->get_where('buku', $where);
	}
}
