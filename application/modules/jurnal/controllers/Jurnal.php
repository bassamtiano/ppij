<?php

	class Jurnal extends CI_Controller { 
		public function index() {
			$sub_interface['menu'] = $this->load->view('modules/menu', NULL, TRUE);

			$interface['content'] = $this->load->view('pages/list', $sub_interface, TRUE);
			$this->load->view('main', $interface);
		}

		public function artikel() {
			$sub_interface['menu'] = $this->load->view('modules/menu', NULL, TRUE);

			$interface['content'] = $this->load->view('pages/artikel', $sub_interface, TRUE);
			$this->load->view('main', $interface);
		}
	}

?>