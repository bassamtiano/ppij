<?php

	class Admin extends CI_Controller { 

		public function __construct() {
			parent::__construct();
			$this->load->model('Jurnal_Kategori');
			$this->load->model('Jurnal_Data');
			$this->load->model('Galery');
		}


		public function index() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/konten', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		/* ========== Slide Show Konten =================================================================================
		   ============================================================================================================== */

		public function slideshow() {
			
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

		public function jurnal() {

			$table['jurnal'] = $this->Jurnal_Data->get_full_jurnal('jurnal.id, jurnal.created_at as jurnal_date, jurnal_kategori.id as id_jurnal_kategori, jurnal_kategori.kategori as kategori_jurnal, jurnal.title as jurnal_title, jurnal.thumbnail as thumbnail');

			$table['modal'] = $this->load->view('modals/jurnal/konten/remove_konten', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/konten_list', $table, TRUE);

			$this->load->view('main', $interface);

			// header('Content-Type: application/json');
			// echo json_encode($table);

		}

		public function jurnal_konten_add() {

			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$form_data['kategori'] = $this->Jurnal_Kategori->get_jurnal_kategori('id, kategori');
			$form_data['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/konten', $form_data, TRUE);

			$this->load->view('main', $interface);

			// header('Content-Type: application/json');
			// echo json_encode($data);
		}

		public function jurnal_galery_tambah() {
			$config['upload_path'] = 'files/jurnal/img';
			$config['allowed_types'] = 'png|jpg|gif';
			// $config['max_size']    = '100';
			$file_name = '';
			//load upload class library
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('add_galery'))
			{
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			    echo $upload_error;
			}
			else
			{
			    // case - success
			    $upload_data = $this->upload->data();
			    $file_name = $upload_data['file_name'];
			}

			$data = [
				'url' => $upload_data['file_name'],
			];
			$this->Galery->add_galery($data);

			return redirect('admin/jurnal/konten/add');
		}

		public function jurnal_galery_hapus() {
			$file_id = $this->input->post('galery_id');
			$file_name = $this->input->post('galery_name');

			$path = $_SERVER['DOCUMENT_ROOT'].'/ppij/files/jurnal/img/';

			$this->load->helper("file");
			unlink($path . $file_name);

			$this->Galery->delete_galery($file_id);
			// return redirect('admin/jurnal/konten/add');
		}

		public function jurnal_add() {
			$config['upload_path'] = 'files/jurnal/thumbnail';
			$config['allowed_types'] = 'png|jpg|gif';

			$file_name = '';
			
			//load upload class library
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('thumbnail')) {
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			}

			else {
			    // case - success
			    $upload_data = $this->upload->data();
			    $file_name = $upload_data['file_name'];
			}

			$data = [
				'id_jurnal_kategori' => $this->input->post('id_jurnal_kategori'),
				'title' => $this->input->post('title'),
				'thumbnail' => $file_name,
				'content' => $this->input->post('content'),
				'created_at' => date("Y/m/d")
			];

			$this->Jurnal_Data->add_jurnal($data);

			return redirect('admin/jurnal');
		}

		public function jurnal_konten_edit($id) {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$form_data['kategori'] = $this->Jurnal_Kategori->get_jurnal_kategori('id, kategori');
			$form_data['jurnal_data'] = $this->Jurnal_Data->select_jurnal($id, 'jurnal.id, jurnal.created_at as jurnal_date, jurnal.id_jurnal_kategori as id_jurnal_kategori, jurnal.title as jurnal_title, jurnal.thumbnail as thumbnail, jurnal.content as content');
			$form_data['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/konten_edit', $form_data, TRUE);

			$this->load->view('main', $interface);

			// header('Content-Type: application/json');
			// echo json_encode($form_data);
		}

		public function jurnal_edit() {
			$config['upload_path'] = 'files/jurnal/thumbnail';
			$config['allowed_types'] = 'png|jpg|gif';
			
			$file_name = '';

			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('thumbnail'))
			{
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			    $file_name = $this->input->post('old_thumbnail');
			}
			else
			{
			    // case - success
			    $upload_data = $this->upload->data();

				$this->load->helper("file");
				$file_name = $upload_data['file_name'];

				$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/jurnal/thumbnail/';
				unlink($path . $this->input->post('old_thumbnail'));

			}

			$data = [
				'id_jurnal_kategori' => $this->input->post('id_jurnal_kategori'),
				'title' => $this->input->post('title'),
				'thumbnail' => $file_name,
				'content' => $this->input->post('content'),
				'updated_at' => date("Y/m/d")
			];
			
			$this->Jurnal_Data->edit_jurnal($this->input->post('id'), $data);

			return redirect('admin/jurnal');
		}

		public function jurnal_remove() {
			$this->Jurnal_Data->delete_jurnal($this->input->post('id'));

			$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/jurnal/thumbnail/';
			unlink($path . $this->input->post('thumbnail'));

			return redirect('admin/jurnal');
		}

		

		/* ========== Kuliah di Jepang Konten ===========================================================================
		   ============================================================================================================== */

		public function kuliahdijepang() {
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
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/adart', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function adart_edit() {
			
		}

		/* ========== Kongres Konten ====================================================================================
		   ============================================================================================================== */

		public function kongres_() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/kongers', NULL, TRUE);

			$this->load->view('main', $interface);
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
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/otsukaresama', NULL, TRUE);

			$this->load->view('main', $interface);
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
			$interface['sidebar'] = $this->load->view('modules/kalender', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/adart', NULL, TRUE);

			$this->load->view('main', $interface);
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
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/faq', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function faq_edit() {
			
		}

		/* ========== Galery Konten =====================================================================================	
		   ============================================================================================================== */

		

		/* ========== Kontak Konten =====================================================================================
		   ============================================================================================================== */

		public function kontak() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kontak', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		/* ========== Kontak Config =====================================================================================
		   ============================================================================================================== */

		public function config() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/config', NULL, TRUE);

			$this->load->view('main', $interface);
		}

		public function config_edit() {
			
		}

	}

?>