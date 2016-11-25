<?php

	/**
	* 
	*/
	class Kontak extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('Kontak_Data');
		}

		public function index() {
			$interface['content'] = $this->load->view('pages/kontak', NULL, TRUE);
			$this->load->view('main', $interface);
		}

		public function send() {
			$data = [
				'name' =>  $this->input->post('name'),
				'email' => $this->input->post('email'),
				'subject' => $this->input->post('subject'),
				'message' => $this->input->post('message'),
				'created_at' => date("Y/m/d")
			];

			$this->Kontak_Data->add_kontak($data);
			return redirect('kontak');
		}
	}

?>