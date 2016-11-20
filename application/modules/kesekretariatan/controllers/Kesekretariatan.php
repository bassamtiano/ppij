<?php 

	/**
	* 
	*/
	class Kesekretariatan extends CI_Controller {

		public function __construct() {
			parent::__construct();
		
			$this->load->model('Kesekretariatan_Data');
			$this->load->model('Kalender');
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
			$interface['content'] = $this->load->view('pages/otsukaresama', NULL, TRUE);
			$this->load->view('main', $interface);	
		}

		public function otsukaresama_konten() {
			$interface['content'] = $this->load->view('pages/otsukaresama_konten', NULL, TRUE);
			$this->load->view('main', $interface);	
		}

		public function kalender() {

			$data['content'] = $this->Kalender->get_kalender('id, nama, tempat, tanggal, waktu_mulai, waktu_selesai, konten, poster');
			

			$interface['content'] = $this->load->view('pages/kalender', $data, TRUE);
			$this->load->view('main', $interface);
		}

		public function kegiatan($year, $month, $day, $id) {

			$column = 'id, nama, tempat, tanggal, waktu_mulai, waktu_selesai, konten, poster, created_at';

			$konten['data'] = $this->Kalender->select_kalender($id, $year . '-' . $month . '-' . $day, $column);

			$interface['content'] = $this->load->view('pages/kegiatan', $konten, TRUE);
			$this->load->view('main', $interface);
		}

	}

?>