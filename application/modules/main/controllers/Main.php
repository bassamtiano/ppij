<?php

	class Main extends CI_Controller { 

		public function __construct() {
			parent::__construct();
		
			$this->load->model('Jurnal_Data');
		}

		public function index() {
			$content_data['data'] = $this->Jurnal_Data->get_jurnal();
			$content_data['modal'] = $this->load->view('modals/modal_event', NULL, TRUE);

			// header('Content-Type: application/json');
			// echo json_encode($data);

			$this->load->view('main', $content_data);
		}

	}

?>