<?php

	/**
	* 
	*/
	class About extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('About_Data');
		}

		public function history() {

			$data['content'] = $this->About_Data->select_about(1, 'id, section, content');

			$interface['content'] = $this->load->view('pages/history', $data, TRUE);
			$this->load->view('main', $interface);


		}

		public function pengurus() {

			$data['content'] = $this->About_Data->select_about(2, 'id, section, content');

			$interface['content'] = $this->load->view('pages/pengurus', $data, TRUE);
			$this->load->view('main', $interface);
		}

		public function korda_komsat() {

			$data['content'] = $this->About_Data->select_about(3, 'id, section, content');

			$interface['content'] = $this->load->view('pages/korda_komsat', $data, TRUE);
			$this->load->view('main', $interface);
		}

	}

?>