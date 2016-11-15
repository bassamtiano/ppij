<?php

	/**
	* 
	*/
	class About extends CI_Controller {
		
		public function history() {
			$interface['content'] = $this->load->view('pages/history', NULL, TRUE);
			$this->load->view('main', $interface);
		}

		public function pengurus() {
			$interface['content'] = $this->load->view('pages/pengurus', NULL, TRUE);
			$this->load->view('main', $interface);
		}

		public function korda_komsat() {
			$interface['content'] = $this->load->view('pages/korda_komsat', NULL, TRUE);
			$this->load->view('main', $interface);
		}

	}

?>