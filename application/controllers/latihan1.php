<?php
	class Latihan1 extends CI_Controller {
		public function index() {
			echo "<h1>Halo nama saya Jamur</h1>";
			echo "Kali ini saya akan belajar CodeIgniter ";
		}

		public function penjumlahan($n1=0, $n2=0) {
			$this->load->model('Model_latihan1');
			$data['nilai1'] = $n1;
			$data['nilai2'] = $n2;
			$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

			$this->load->view("view_latihan1", $data);
		}
	}
?>
~
