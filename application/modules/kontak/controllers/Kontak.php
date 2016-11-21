<?php

	/**
	* 
	*/
	class Kontak extends CI_Controller {
		public function index() {
			$interface['content'] = $this->load->view('pages/kontak', NULL, TRUE);
			$this->load->view('main', $interface);
		}
	}

?>