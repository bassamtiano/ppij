<?php

	/**
	* 
	*/
	class PanduanStudi extends CI_Controller {
		public function index() {
			echo 'hai';
		}

		public function kuliahdijepang() {
			$interface['content'] = $this->load->view('pages/kuliahdijepang', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function beasiswa() {
			$interface['content'] = $this->load->view('pages/beasiswa_list', NULL, TRUE);		

			$this->load->view('main', $interface);
		}

		public function beasiswa_content() {
			$interface['content'] = $this->load->view('pages/beasiswa', NULL, TRUE);		

			$this->load->view('main', $interface);	
		}
	}

?>