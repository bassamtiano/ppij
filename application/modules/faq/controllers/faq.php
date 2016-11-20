<?php
	
	/**
	* 
	*/
	class Faq extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('Faq_Data');
		}

		public function index() {

			$konten['data'] = $this->Faq_Data->select_about(1, 'id, title, konten');

			$interface['content'] = $this->load->view('pages/faq', $konten, TRUE);

			$this->load->view('main', $interface);
		}		
	}

?>