<?php
	
	/**
	* 
	*/
	class Faq extends CI_Controller {
		public function index() {
			$interface['content'] = $this->load->view('pages/faq', NULL, TRUE);

			$this->load->view('main', $interface);
		}		
	}

?>