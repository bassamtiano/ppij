<?php

	/**
	* 
	*/
	class PanduanStudi extends CI_Controller {

		public function __construct() {
			parent::__construct();
		
			$this->load->model('Beasiswa');
			$this->load->model('Panduan_Studi_Kuliah');
		}

		// public function index() {
		// 	echo 'hai';
		// }

		public function kuliahdijepang() {
			$content['data'] = $this->Panduan_Studi_Kuliah->get_panduan_studi_kuliah('id, step, title, content');

			$interface['content'] = $this->load->view('pages/kuliahdijepang', $content, TRUE);
			$this->load->view('main', $interface);
		}

		public function beasiswa() {

			$content['data'] = $this->Beasiswa->get_beasiswa('id, title, deadline, content, thumbnail, created_at');

			$interface['content'] = $this->load->view('pages/beasiswa_list', $content, TRUE);		
			$this->load->view('main', $interface);
		}

		public function beasiswa_konten($id) {

			$content['data'] = $this->Beasiswa->select_beasiswa($id, 'id, title, deadline, content, thumbnail, created_at');			
			$interface['content'] = $this->load->view('pages/beasiswa', $content, TRUE);		
			$this->load->view('main', $interface);	
		}
	}

?>