<?php 

	/**
	* 
	*/
	class Kesekretariatan extends CI_Controller {

		public function __construct() {
			parent::__construct();
		
			$this->load->model('Kesekretariatan_Data');
			$this->load->model('Kalender');

			$this->load->model('Otsukaresama');
			$this->load->model('Otsukaresama_Konten');
		}

		public function adart() {
			$data['content'] = $this->Kesekretariatan_Data->select_kesekretariatan(1, 'id, title, content');

			$interface['content'] = $this->load->view('pages/adart', $data, TRUE);
			$this->load->view('main', $interface);
		}

		public function kongres() {
			$data['content'] = $this->Kesekretariatan_Data->select_kesekretariatan(2, 'id, title, content');

			$interface['content'] = $this->load->view('pages/kongres', $data, TRUE);
			$this->load->view('main', $interface);
		}

		public function kongres_konten() {
			$interface['content'] = $this->load->view('pages/kongres', NULL, TRUE);
			$this->load->view('main', $interface);	
		}

		public function otsukaresama() {
			$content_data['data'] = $this->Otsukaresama->get_otsukaresama('otsukaresama.id, otsukaresama.title, otsukaresama_konten.id_otsukaresama, otsukaresama_konten.url');

			$interface['content'] = $this->load->view('pages/otsukaresama', $content_data, TRUE);
			$this->load->view('main', $interface);	
		}

		public function otsukaresama_konten($id) {
			$content_data['data'] = $this->Otsukaresama_Konten->select_otsukaresama_konten($id, 'otsukaresama.id, otsukaresama.title, otsukaresama_konten.id_otsukaresama, otsukaresama_konten.url');
			$content_data['data_title'] = $this->Otsukaresama->find_otsukaresama($id, 'id, title');

			$interface['content'] = $this->load->view('pages/otsukaresama_konten', $content_data, TRUE);
			$this->load->view('main', $interface);	

			// header('Content-Type: application/json');
			// echo json_encode($content_data);
		}

		public function kalender() {

			$data['content'] = $this->Kalender->get_kalender('id, nama, tempat, tanggal, waktu_mulai, waktu_selesai, content, poster');
			

			$interface['content'] = $this->load->view('pages/kalender', $data, TRUE);
			$this->load->view('main', $interface);
		}

		public function kegiatan($year, $month, $day, $id) {

			$column = 'id, nama, tempat, tanggal, waktu_mulai, waktu_selesai, content, poster, created_at';

			$konten['data'] = $this->Kalender->select_kalender($id, $year . '-' . $month . '-' . $day, $column);

			$interface['content'] = $this->load->view('pages/kegiatan', $konten, TRUE);
			$this->load->view('main', $interface);
		}

	}

?>