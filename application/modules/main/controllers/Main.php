<?php

	class Main extends CI_Controller { 

		public function __construct() {
			parent::__construct();
		
			$this->load->model('Jurnal_Data');
			$this->load->model('Slideshow');
			$this->load->model('Events');
		}

		public function index() {
			$modal_data['data'] = $this->Events->get_events('id, title, url');

			if(isset($modal_data['data'])) {
				$content_data['modal'] = $this->load->view('modals/modal_event', $modal_data, TRUE);	
				
			}
			else {

			}


			$content_data['data'] = $this->Jurnal_Data->get_jurnal();

			$content_data['slideshow'] = $this->Slideshow->get_slideshow('id, url, title, description, status');
			$content_data['count_slideshow'] = $this->Slideshow->count_slideshow();

			

			$this->load->view('main', $content_data);
		}

	}

?>