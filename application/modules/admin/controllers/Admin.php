<?php

	class Admin extends CI_Controller { 

		public function __construct() {

			parent::__construct();

			$this->load->library(array('ion_auth','form_validation'));
			$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

			if (!$this->ion_auth->is_admin()) {
				redirect('login');
			}
			

			$this->load->model('Slideshow');
			$this->load->model('Events');

			$this->load->model('Jurnal_Kategori');
			$this->load->model('Jurnal_Data');
			$this->load->model('Galery');

			$this->load->model('About_Data');

			$this->load->model('Panduan_Studi_Kuliah');

			$this->load->model('Beasiswa');

			$this->load->model('Kesekretariatan_Data');
			$this->load->model('Otsukaresama');
			$this->load->model('Otsukaresama_Konten');

			$this->load->model('Kalender');

			$this->load->model('Faq_Data');

			$this->load->model('Kontak_Data');
		}


		public function index() {
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = "";
			// $interface['content'] = $this->load->view('pages/ju', NULL, TRUE);

			$this->load->view('main', $interface);


		}

		/* ========== Slide Show Konten =================================================================================
		   ============================================================================================================== */

		public function slideshow() {

			$content_data['data'] = $this->Slideshow->get_slideshow('id, url, title, description, status');
			$content_data['modal'] = $this->load->view('modals/main/slideshow/add_slideshow', NULL, TRUE) . $this->load->view('modals/main/slideshow/edit_slideshow', NULL, TRUE) . $this->load->view('modals/main/slideshow/delete_slideshow', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/main/slideshow', $content_data, TRUE);
			$this->load->view('main', $interface);
		}

		public function slideshow_add() {
			$config['upload_path'] = 'files/slideshow/img';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['file_name'] = str_replace(' ', '_', strtolower($this->input->post('title')));
			// $config['max_size']    = '100';
			$file_name = '';
			//load upload class library
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('url'))
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
				'url' => $file_name,
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('status')
			];

			$this->Slideshow->add_slideshow($data);

			redirect('admin/main/slideshow');
		}

		public function slideshow_edit() {
			$config['upload_path'] = 'files/slideshow/img';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['file_name'] = str_replace(' ', '_', strtolower($this->input->post('title')));
			
			$file_name = '';

			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('url'))
			{
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			    $file_name = $this->input->post('old_url');
			}
			else
			{
			    // case - success
			    $upload_data = $this->upload->data();

				$this->load->helper("file");
				$file_name = $upload_data['file_name'];

				if(!empty($this->input->post('old_url'))) {
					$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/slideshow/img/';
					unlink($path . $this->input->post('old_url'));					
				}

			}

			$data = [
				'url' => $file_name,
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'status' => $this->input->post('edit_status'),
			];
			
			$this->Slideshow->edit_slideshow($this->input->post('id'), $data);

			redirect('admin/main/slideshow');
		}

		public function slideshow_delete() {
			$this->Slideshow->delete_slideshow($this->input->post('id'));

			$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/slideshow/img/';
			unlink($path . $this->input->post('url'));

			redirect('admin/main/slideshow');
		}

		/* ========== Events Konten =====================================================================================
		   ============================================================================================================== */

		public function events() {

			$content_data['data'] = $this->Events->get_events('id, title, url, status');
			$content_data['modal'] = $this->load->view('modals/main/events/add_events', NULL, TRUE) . $this->load->view('modals/main/events/edit_events', NULL, TRUE) . $this->load->view('modals/main/events/delete_events', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/main/events', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function events_add() {
			$config['upload_path'] = 'files/events/img';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['file_name'] = str_replace(' ', '_', strtolower($this->input->post('title')));
			// $config['max_size']    = '100';
			$file_name = '';
			//load upload class library
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('url'))
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
				'url' => $file_name,
				'title' => $this->input->post('title'),
				'status' => $this->input->post('status'),
				'created_at' => date("Y/m/d")
			];

			$this->Events->add_events($data);

			redirect('admin/main/events');	
		}

		public function events_edit() {
			$config['upload_path'] = 'files/events/img';
			$config['allowed_types'] = 'png|jpg|gif';
			$config['file_name'] = str_replace(' ', '_', strtolower($this->input->post('title')));
			
			$file_name = '';

			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('url'))
			{
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			    $file_name = $this->input->post('old_url');
			}
			else
			{
			    // case - success
			    $upload_data = $this->upload->data();

				$this->load->helper("file");
				$file_name = $upload_data['file_name'];

				if(!empty($this->input->post('old_url'))) {
					$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/events/img/';
					unlink($path . $this->input->post('old_url'));					
				}

			}

			$data = [
				'url' => $file_name,
				'title' => $this->input->post('title'),
				'status' => $this->input->post('edit_status'),
				'updated_at' => date("Y/m/d")
			];
			
			$this->Events->edit_events($this->input->post('id'), $data);

			redirect('admin/main/events');
		}

		public function events_delete() {
			$this->Events->delete_events($this->input->post('id'));

			$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/events/img/';
			unlink($path . $this->input->post('url'));

			redirect('admin/main/events');
		}

		/* ========== History Konten ====================================================================================
		   ============================================================================================================== */

		public function history() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');

			$content_data['data'] = $this->About_Data->select_about(1, 'section, content');
			$content_data['modal'] = $this->load->view('modals/about/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/about/history', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function history_edit() {
			$data = [
				'content' => $this->input->post('content'),
				'updated_at' => date("Y/m/d")
			];
			$this->About_Data->edit_about(1, $data);
			redirect('admin/about/history');
		}

		/* ========== Pengurus Konten ===================================================================================
		   ============================================================================================================== */

		public function pengurus() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');

			$content_data['data'] = $this->About_Data->select_about(2, 'section, content');
			$content_data['modal'] = $this->load->view('modals/about/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/about/pengurus', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function pengurus_edit() {
			$data = [
				'content' => $this->input->post('content'),
				'updated_at' => date("Y/m/d")
			];
			$this->About_Data->edit_about(2, $data);
			redirect('admin/about/pengurus');
		}


		/* ========== Korda Komsat Konten ===============================================================================
		   ============================================================================================================== */

		public function korda_komsat() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');

			$content_data['data'] = $this->About_Data->select_about(3, 'section, content');
			$content_data['modal'] = $this->load->view('modals/about/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/about/korda_komsat', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function korda_komsat_edit() {
			$data = [
				'content' => $this->input->post('content'),
				'updated_at' => date("Y/m/d")
			];
			$this->About_Data->edit_about(3, $data);
			redirect('admin/about/korda');
		}

		/* ========== Jurnal Kategori =================================================================================== //
		   ============================================================================================================== */

		public function jurnal_kategori() {

			$kategori_data['kategori'] = $this->Jurnal_Kategori->get_jurnal_kategori('id, kategori');

			$kategori_data['modal'] = $this->load->view('modals/jurnal/kategori/edit_kategori', NULL, TRUE) . $this->load->view('modals/jurnal/kategori/remove_kategori', NULL, TRUE) . $this->load->view('modals/jurnal/kategori/add_kategori', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/jurnal/kategori', $kategori_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function jurnal_kategori_add() {
			$data = [
				'kategori' => $this->input->post('kategori'),
				'created_at' => date("Y/m/d")
			];
			$this->Jurnal_Kategori->add_jurnal_kategori($data);
			redirect('admin/jurnal/kategori');
		}

		public function jurnal_kategori_edit() {
			$data = [
				'kategori' => $this->input->post('kategori'),
				'modified_at' => date("Y/m/d")
			];
			$this->Jurnal_Kategori->edit_jurnal_kategori($this->input->post('id'), $data);
			redirect('admin/jurnal/kategori');
		}

		public function jurnal_kategori_remove() {
			$this->Jurnal_Kategori->delete_jurnal_kategori($this->input->post('id'));
			redirect('admin/jurnal/kategori');
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

			redirect('admin/jurnal/konten/add');
		}

		public function jurnal_galery_hapus() {
			$file_id = $this->input->post('galery_id');
			$file_name = $this->input->post('galery_name');

			$path = $_SERVER['DOCUMENT_ROOT'].'/ppij/files/jurnal/img/';

			$this->load->helper("file");
			unlink($path . $file_name);

			$this->Galery->delete_galery($file_id);
			// redirect('admin/jurnal/konten/add');
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

			redirect('admin/jurnal');
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

				if(!empty($this->input->post('old_thumbnail'))) {
					$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/jurnal/thumbnail/';
					unlink($path . $this->input->post('old_thumbnail'));					
				}

			}

			$data = [
				'id_jurnal_kategori' => $this->input->post('id_jurnal_kategori'),
				'title' => $this->input->post('title'),
				'thumbnail' => $file_name,
				'content' => $this->input->post('content'),
				'updated_at' => date("Y/m/d")
			];
			
			$this->Jurnal_Data->edit_jurnal($this->input->post('id'), $data);

			redirect('admin/jurnal');
		}

		public function jurnal_remove() {
			$this->Jurnal_Data->delete_jurnal($this->input->post('id'));

			$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/jurnal/thumbnail/';
			unlink($path . $this->input->post('thumbnail'));

			redirect('admin/jurnal');
		}

		/* ========== Kuliah di Jepang Konten ===========================================================================
		   ============================================================================================================== */

		public function kuliahdijepang() {
			$content['data'] = $this->Panduan_Studi_Kuliah->get_panduan_studi_kuliah('id, step, title');
			$content['modal'] = $this->load->view('modals/panduanstudi/remove_kuliah_di_jepang', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/panduan_studi/kuliah_di_jepang_list', $content, TRUE);

			$this->load->view('main', $interface);
		}

		public function kuliahdijepang_konten_add() {

			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$content['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/panduan_studi/kuliah_di_jepang_add', $content, TRUE);

			$this->load->view('main', $interface);
		}

		public function kuliahdijepang_add() {
			$data = [
				'title' => $this->input->post('title'),
				'step' => $this->input->post('step'),
				'content' => $this->input->post('content'),
				'created_at' => date("Y/m/d")
			];

			$this->Panduan_Studi_Kuliah->add_panduan_studi_kuliah($data);
			redirect('admin/panduanstudi/kuliahdijepang');
		}

		public function kuliahdijepang_konten_edit($id) {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$content['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);
			$content['data'] = $this->Panduan_Studi_Kuliah->select_panduan_studi_kuliah($id, 'id, step, title, content');

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/panduan_studi/kuliah_di_jepang_edit', $content, TRUE);


			$this->load->view('main', $interface);
		}

		public function kuliahdijepang_edit() {
			$data = [
				'title' => $this->input->post('title'),
				'step' => $this->input->post('step'),
				'content' => $this->input->post('content'),
				'created_at' => date("Y/m/d")
			];

			$this->Panduan_Studi_Kuliah->edit_panduan_studi_kuliah($this->input->post('id'), $data);
			redirect('admin/panduanstudi/kuliahdijepang');
		}

		public function kuliahdijepang_delete() {
			$this->Panduan_Studi_Kuliah->delete_panduan_studi_kuliah($this->input->post('id'));
			redirect('admin/panduanstudi/kuliahdijepang');
		}

		/* ========== Beasiswa Konten ===================================================================================
		   ============================================================================================================== */

		public function beasiswa() {
			$content['data'] = $this->Beasiswa->get_beasiswa('id, title, deadline, content, thumbnail, created_at');
			$content['modal'] = $this->load->view('modals/panduanstudi/remove_beasiswa', NULL, TRUE);

			$interface['content'] = $this->load->view('pages/panduan_studi/beasiswa', $content, TRUE);	
			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			

			$this->load->view('main', $interface);

			
		}

		public function beasiswa_konten_add() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$content['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/panduan_studi/beasiswa_add', $content, TRUE);

			$this->load->view('main', $interface);
		}

		public function beasiswa_add() {
			$config['upload_path'] = 'files/panduanstudi/thumbnail';
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
				'title' => $this->input->post('title'),
				'deadline' => $this->input->post('deadline'),
				'content' => $this->input->post('content'),
				'thumbnail' => $file_name,
				'created_at' => date("Y/m/d")
			];

			$this->Beasiswa->add_beasiswa($data);

			redirect('admin/panduanstudi/beasiswa');
		}

		public function beasiswa_konten_edit($id) {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$content['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);
			$content['data'] = $this->Beasiswa->select_beasiswa($id, 'id, title, deadline, content, thumbnail, created_at');

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/panduan_studi/beasiswa_edit', $content, TRUE);

			$this->load->view('main', $interface);
		}

		public function beasiswa_edit() {
			$config['upload_path'] = 'files/panduanstudi/thumbnail';
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

				if(!empty($this->input->post('old_thumbnail'))) {
					$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/panduanstudi/thumbnail/';
					unlink($path . $this->input->post('old_thumbnail'));					
				}

			}

			$data = [
				'id' => $this->input->post('id'),
				'title' => $this->input->post('title'),
				'deadline' => $this->input->post('deadline'),
				'content' => $this->input->post('content'),
				'thumbnail' => $file_name,
				'updated_at' => date("Y/m/d")
			];

			$this->Beasiswa->edit_beasiswa($this->input->post('id'), $data);

			redirect('admin/panduanstudi/beasiswa');
		}

		public function beasiswa_remove() {
			$this->Beasiswa->delete_beasiswa($this->input->post('id'));

			$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/panduanstudi/thumbnail/';
			unlink($path . $this->input->post('thumbnail'));

			redirect('admin/panduanstudi/beasiswa');
		}

		/* ========== AD / ART Konten ===================================================================================
		   ============================================================================================================== */

		public function adart() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');

			$content_data['data'] = $this->Kesekretariatan_Data->select_kesekretariatan(1, 'content');
			$content_data['modal'] = $this->load->view('modals/about/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/adart', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function adart_edit() {
			$data = [
				'content' => $this->input->post('content'),
				'updated_at' => date("Y/m/d")
			];
			$this->Kesekretariatan_Data->edit_kesekretariatan(1, $data);
			redirect('admin/kesekretariatan/adart');
		}

		/* ========== Kongres Konten ====================================================================================
		   ============================================================================================================== */

		public function kongres() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');

			$content_data['data'] = $this->Kesekretariatan_Data->select_kesekretariatan(2, 'content');
			$content_data['modal'] = $this->load->view('modals/about/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/kongres', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function kongres_edit() {
			$data = [
				'content' => $this->input->post('content'),
				'updated_at' => date("Y/m/d")
			];
			$this->Kesekretariatan_Data->edit_kesekretariatan(2, $data);
			redirect('admin/kesekretariatan/kongres');
		}


		/* ========== Otsukaresama Konten ===============================================================================
		   ============================================================================================================== */

		public function otsukaresama() {

			$content_data['data'] = $this->Otsukaresama->get_otsukaresama('id, title');
			$content_data['modal'] = $this->load->view('modals/kesekretariatan/otsukaresama/otsukaresama_add', NULL, TRUE) . $this->load->view('modals/kesekretariatan/otsukaresama/otsukaresama_edit', NULL, TRUE) . $this->load->view('modals/kesekretariatan/otsukaresama/otsukaresama_delete', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/otsukaresama', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function otsukaresama_add() {
			$data = [
				'title' => $this->input->post('title'),
				'created_at' => date("Y/m/d")
			];

			$this->Otsukaresama->add_otsukaresama($data);

			redirect('admin/kesekretariatan/otsukaresama');
		}

		public function otsukaresama_edit() {
			$data = [
				'title' => $this->input->post('title'),
				'updated_at' => date("Y/m/d")
			];

			$this->Otsukaresama->edit_otsukaresama($this->input->post('id'), $data);

			redirect('admin/kesekretariatan/otsukaresama');
		}

		public function otsukaresama_remove() {
			$this->Otsukaresama->delete_otsukaresama($this->input->post('id'));
			redirect('admin/kesekretariatan/otsukaresama');	
		}

		public function otsukaresama_konten($id) {

			$modal_data['id_otsukaresama'] = $id;

			$content_data['data'] = $this->Otsukaresama_Konten->select_otsukaresama_konten($id, 'otsukaresama_konten.id as id, otsukaresama_konten.url as url, otsukaresama.id as id_otsukaresama, otsukaresama.title as asdf');
			$content_data['modal'] = $this->load->view('modals/kesekretariatan/otsukaresama_konten/otsukaresama_konten_add', $modal_data, TRUE) . $this->load->view('modals/kesekretariatan/otsukaresama_konten/otsukaresama_konten_edit', $modal_data, TRUE) . $this->load->view('modals/kesekretariatan/otsukaresama_konten/otsukaresama_konten_delete', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/otsukaresama_konten', $content_data, TRUE);
			$this->load->view('main', $interface);


			

			

		}

		public function otsukaresama_konten_add() {

			$config['upload_path'] = 'files/otsukaresama';
			$config['allowed_types'] = 'png|jpg|gif';
			// $config['max_size']    = '100';
			$file_name = '';
			//load upload class library
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('url'))
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
				'url' => $file_name,
				'id_otsukaresama' => $this->input->post('id_otsukaresama'),
				'created_at' => date("Y/m/d")
			];

			$this->Otsukaresama_Konten->add_otsukaresama_konten($data);

			redirect('admin/kesekretariatan/otsukaresama/' . $this->input->post('id_otsukaresama'));

		}

		public function otsukaresama_konten_delete() {

			$this->Otsukaresama_Konten->delete_otsukaresama_konten($this->input->post('id'));

			if(!empty($this->input->post('url'))) {
				$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/otsukaresama/';
				unlink($path . $this->input->post('url'));	
			}
			
			redirect('admin/kesekretariatan/otsukaresama/' . $this->input->post('id_otsukaresama'));
		}

		/* ========== Kalender Kegiatan Konten ==========================================================================
		   ============================================================================================================== */

		public function kalender() {
			$content['data'] = $this->Kalender->get_kalender('id, nama, tempat, tanggal, waktu_mulai, waktu_selesai, content, thumbnail, poster, created_at');
			$content['modal'] = $this->load->view('modals/kesekretariatan/remove_kalender', NULL, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/kalender', $content, TRUE);

			$this->load->view('main', $interface);

			
		}

		public function kalender_ui_add() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$content['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/kalender_add', $content, TRUE);

			$this->load->view('main', $interface);
		}

		public function kalender_add() {
			$config_thumbnail['upload_path'] = 'files/kalender/thumbnail';
			$config_thumbnail['allowed_types'] = 'png|jpg|gif';

			$thumbnail_name = '';
			$poster_name = '';
			
			//load upload class library
			$this->load->library('upload', $config_thumbnail);
			if (!$this->upload->do_upload('thumbnail')) {
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			}

			else {
			    // case - success
			    $upload_data = $this->upload->data();
			    $thumbnail_name = $upload_data['file_name'];
			}

			$config_poster['upload_path'] = 'files/kalender/poster';
			$config_poster['allowed_types'] = 'png|jpg|gif';

			//load upload class library
			$this->load->library('upload', $config_poster);
			if (!$this->upload->do_upload('poster')) {
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			}

			else {
			    // case - success
			    $upload_data = $this->upload->data();
			    $poster_name = $upload_data['file_name'];
			}

			$data = [
				'nama' => $this->input->post('nama'),
				'tempat' => $this->input->post('tempat'),
				'tanggal' => $this->input->post('tanggal'),
				'waktu_mulai' => $this->input->post('waktu_mulai'),
				'waktu_selesai' => $this->input->post('waktu_selesai'),
				'content' => $this->input->post('content'),
				'thumbnail' => $thumbnail_name,
				'poster' => $poster_name,
				'created_at' => date("Y/m/d")
			];

			$this->Kalender->add_kalender($data);

			redirect('admin/kesekretariatan/kalender');
		}

		public function kalender_ui_edit($id) {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');
			
			$content['modal'] = $this->load->view('modals/jurnal/konten/add_gambar', $modal_gambar, TRUE);
			$content['data'] = $this->Kalender->select_kalender($id, 'id, nama, tempat, tanggal, waktu_mulai, waktu_selesai, content, thumbnail, poster');

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kesekretariatan/kalender_edit', $content, TRUE);

			$this->load->view('main', $interface);
		}

		public function kalender_edit() {
			$config_thumbnail['upload_path'] = 'files/kalender/thumbnail';
			$config_thumbnail['allowed_types'] = 'png|jpg|gif';

			$thumbnail_name = '';
			$poster_name = '';
			
			//load upload class library
			$this->load->library('upload', $config_thumbnail);
			if (!$this->upload->do_upload('thumbnail')) {
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			    $thumbnail_name = $this->input->post('old_thumbnail');
			}

			else {
			    // case - success
			    $upload_data = $this->upload->data();
			    $thumbnail_name = $upload_data['file_name'];

			    if(!empty($this->input->post('old_thumbnail'))) {
					$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/panduanstudi/thumbnail/';
					unlink($path . $this->input->post('old_thumbnail'));					
				}
			}

			$config_poster['upload_path'] = 'files/kalender/poster';
			$config_poster['allowed_types'] = 'png|jpg|gif';

			//load upload class library
			$this->load->library('upload', $config_poster);
			if (!$this->upload->do_upload('poster')) {
			    // case - failure
			    $upload_error = array('error' => $this->upload->display_errors());
			    $poster_name = $this->input->post('old_poster');
			}

			else {
			    // case - success
			    $upload_data = $this->upload->data();
			    $poster_name = $upload_data['file_name'];

			    if(!empty($this->input->post('old_poster'))) {
					$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/panduanstudi/thumbnail/';
					unlink($path . $this->input->post('old_poster'));					
				}
			}
			

			$data = [
				'nama' => $this->input->post('nama'),
				'tempat' => $this->input->post('tempat'),
				'tanggal' => $this->input->post('tanggal'),
				'waktu_mulai' => $this->input->post('waktu_mulai'),
				'waktu_selesai' => $this->input->post('waktu_selesai'),
				'content' => $this->input->post('content'),
				'thumbnail' => $thumbnail_name,
				'poster' => $poster_name,
				'created_at' => date("Y/m/d")
			];

			$this->Kalender->edit_kalender($this->input->post('id'), $data);
			redirect('admin/kesekretariatan/kalender');
		}

		public function kalender_remove() {
			$this->Kalender->delete_kalender($this->input->post('id'));

			$path = $_SERVER['DOCUMENT_ROOT'] . '/ppij/files/kalender/thumbnail/';
			unlink($path . $this->input->post('thumbnail'));
			unlink($path . $this->input->post('poster'));

			redirect('admin/kesekretariatan/kalender');
		}

		/* ========== FAQ Konten ========================================================================================
		   ============================================================================================================== */

		public function faq() {
			$modal_gambar['data'] = $this->Galery->get_galery('id, url');

			$content_data['data'] = $this->Faq_Data->select_faq(1, 'konten');
			$content_data['modal'] = $this->load->view('modals/about/add_gambar', $modal_gambar, TRUE);

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/faq', $content_data, TRUE);

			$this->load->view('main', $interface);
		}

		public function faq_edit() {
			$data = [
				'konten' => $this->input->post('konten'),
				'updated_at' => date("Y/m/d")
			];
			$this->Faq_Data->edit_faq(1, $data);
			redirect('admin/faq');
		}

		/* ========== Galery Konten =====================================================================================	
		   ============================================================================================================== */

		

		/* ========== Kontak Konten =====================================================================================
		   ============================================================================================================== */

		public function kontak() {
			$content['data'] = $this->Kontak_Data->get_kontak('id, name, email, subject, message, created_at');

			$interface['sidebar'] = $this->load->view('modules/sidebar', NULL, TRUE);
			$interface['content'] = $this->load->view('pages/kontak', $content, TRUE);

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

		/* ========== Do Log Out ========================================================================================
		   ============================================================================================================== */


		public function do_logout() {
			$logout = $this->ion_auth->logout();

            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect('login', 'refresh');
		}

	}

?>