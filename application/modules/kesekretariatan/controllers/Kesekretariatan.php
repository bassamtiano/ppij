<?php 

	/**
	* 
	*/
	class Kesekretariatan extends CI_Controller {

		public function adart() {
			$interface['content'] = $this->load->view('pages/adart', NULL, TRUE);
			$this->load->view('main', $interface);
		}

		public function kongres() {
			$interface['content'] = $this->load->view('pages/kongres_list', NULL, TRUE);
			$this->load->view('main', $interface);
		}

		public function kongres_konten() {
			$interface['content'] = $this->load->view('pages/kongres', NULL, TRUE);
			$this->load->view('main', $interface);	
		}

		public function otsukaresama() {
			$interface['content'] = $this->load->view('pages/otsukaresama', NULL, TRUE);
			$this->load->view('main', $interface);	
		}

		public function otsukaresama_konten() {
			$interface['content'] = $this->load->view('pages/otsukaresama_konten', NULL, TRUE);
			$this->load->view('main', $interface);	
		}

		public function kalender() {
			$interface['content'] = $this->load->view('pages/kalender', NULL, TRUE);
			$this->load->view('main', $interface);
		}

		public function kegiatan() {
			$interface['content'] = $this->load->view('pages/kegiatan', NULL, TRUE);
			$this->load->view('main', $interface);
		}

	}

?>