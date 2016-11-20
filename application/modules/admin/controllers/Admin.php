<?php

	class Admin extends CI_Controller { 

		public function __construct() {
			parent::__construct();
			$this->load->model('Jurnal_Kategori');
			$this->load->model('Jurnal_Data');
		}


		public function index() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/konten', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		/* ========== History Konten ====================================================================================
		   ============================================================================================================== */

		public function history() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/about/history', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function history_edit() {

		}

		/* ========== Pengurus Konten ===================================================================================
		   ============================================================================================================== */

		public function pengurus() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/about/pengurus', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function pengurus_edit() {

		}


		/* ========== Korda Komsat Konten ===============================================================================
		   ============================================================================================================== */

		public function korda_komsat() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/about/korda_komsat', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function korda_komsat_edit() {

		}

		/* ========== Jurnal Kategori =================================================================================== //
		   ============================================================================================================== */

		public function jurnal_kategori() {

			$form_data['kategori'] = $this->Jurnal_Kategori->get_jurnal_kategori('id, kategori');

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/kategori', $form_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function jurnal_kategori_add() {

		}

		public function jurnal_kategori_edit() {

		}

		public function jurnal_kategori_remove() {

		}

		/* ========== Jurnal Konten ===================================================================================== 
		   ============================================================================================================== */

		public function jurnal_list() {

			$table['jurnal'] = $this->Jurnal_Data->get_full_jurnal('jurnal.id, jurnal.date_created as jurnal_date, jurnal_kategori.id as id_jurnal_kategori, jurnal_kategori.kategori as kategori_jurnal, jurnal.title as jurnal_title, jurnal.thumbnail as thumbnail');

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/konten_list', $table, TRUE);

			$this->load->view('main', $interface);

			// header('Content-Type: application/json');
			// echo json_encode($table);

		}

		public function jurnal_konten() {
			
			$form_data['kategori'] = $this->Jurnal_Kategori->get_jurnal_kategori('id, kategori');

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/konten', $form_data, TRUE);

			$this->load->view('main', $interface);

			// header('Content-Type: application/json');
			// echo json_encode($data);
		}

		public function jurnal_konten_add() {
			$config['upload_path'] = 'files/jurnal/img';
			$config['allowed_types'] = 'png|jpg|gif';

			$file_name = '';
			
			//load upload class library
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('banner')) {
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			}

			else {
			    // case - success
			    $upload_data = $this->upload->data();
			    $file_name = $upload_data['file_name'];
			}

			$data = [
				'title' => $this->input->post('title'),
				'news_date' => date("Y/m/d"),
				'content' => $this->input->post('content'),
				'banner' => $file_name
			];
			$this->News->add_news($data);
		}

		public function jurnal_konten_edit() {
			
		}

		public function jurnal_konten_remove() {
			
		}

		/* ========== Kuliah di Jepang Konten ===========================================================================
		   ============================================================================================================== */

		public function kuliahdijepang_() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/panduan_studi/kuliah_di_jepang', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function kuliahdijepang_edit() {
						
		}

		/* ========== Beasiswa Konten ===================================================================================
		   ============================================================================================================== */

		public function beasiswa() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/panduan_studi/beasiswa', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function beasiswa_konten() {
			
		}

		public function beasiswa_add() {
			
		}

		public function beasiswa_edit() {
			
		}

		public function beasiswa_remove() {

		}

		/* ========== AD / ART Konten ===================================================================================
		   ============================================================================================================== */

		public function adart() {
			$this->load->view('main');
		}

		public function adart_edit() {
			
		}

		/* ========== Kongres Konten ====================================================================================
		   ============================================================================================================== */

		public function kongres_() {
			$this->load->view('main');
		}

		public function kongres_add() {
			
		}

		public function kongres_edit() {
			
		}

		public function kongres_remove() {

		}

		/* ========== Otsukaresama Konten ===============================================================================
		   ============================================================================================================== */

		public function otsukaresama() {
			$this->load->view('main');
		}

		public function otsukaresama_add() {
			
		}

		public function otsukaresama_edit() {
			
		}

		public function otsukaresama_remove() {

		}

		/* ========== Kalender Kegiatan Konten ==========================================================================
		   ============================================================================================================== */

		public function kalender() {
			$this->load->view('main');
		}

		public function kalender_add() {
			
		}

		public function kalender_edit() {
			
		}

		public function kalender_remove() {

		}

		/* ========== FAQ Konten ========================================================================================
		   ============================================================================================================== */

		public function faq() {
			$this->load->view('main');	
		}

		public function faq_edit() {
			
		}

		/* ========== Kontak Konten =====================================================================================
		   ============================================================================================================== */

		public function kontak() {
			$this->load->view('main');
		}

		/* ========== Kontak Config =====================================================================================
		   ============================================================================================================== */

		public function config() {
			$this->load->view('main');
		}

		public function config_edit() {
			
		}

	}

?>