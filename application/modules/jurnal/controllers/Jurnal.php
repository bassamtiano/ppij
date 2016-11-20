<?php

	class Jurnal extends CI_Controller { 

		public function __construct() {
			parent::__construct();
		
			$this->load->model('Jurnal_Data');
			$this->load->model('jurnal_Kategori');
		}

		public function index() {
			$column = 'jurnal.id as id, jurnal.title as title, jurnal_kategori.kategori as kategori, jurnal.thumbnail as thumbnail, jurnal.content, jurnal.created_at';
			
			$menu['selected'] = 'All';
			$menu['content'] = $this->jurnal_Kategori->get_jurnal_kategori('kategori');

			$sub_interface['menu'] = $this->load->view('modules/menu', $menu, TRUE);
			$sub_interface['data'] = $this->Jurnal_Data->get_jurnal($column);

			$interface['content'] = $this->load->view('pages/list', $sub_interface, TRUE);
			$this->load->view('main', $interface);
		}

		public function kategori($kategori) {

			$column = 'jurnal.id as id, jurnal.title as title, jurnal_kategori.kategori as kategori, jurnal.thumbnail as thumbnail, jurnal.content, jurnal.created_at';

			$menu['selected'] = str_replace('_', ' ', $kategori);
			$menu['content'] = $this->jurnal_Kategori->get_jurnal_kategori('kategori');

			$sub_interface['menu'] = $this->load->view('modules/menu', $menu, TRUE);
			$sub_interface['data'] = $this->Jurnal_Data->categorized_jurnal($kategori, $column);

			$interface['content'] = $this->load->view('pages/list', $sub_interface, TRUE);
			$this->load->view('main', $interface);

			// header('Content-Type: application/json');
			// echo json_encode($data);
		}

		public function artikel($kategori, $year, $month, $day, $id) {

			$column = 'jurnal.id as id, jurnal.title as title, jurnal_kategori.kategori as kategori, jurnal.thumbnail as thumbnail, jurnal.content, jurnal.created_at';

			// $data = $this->Jurnal_Data->get_jurnal_artikel($id, $kategori, $year . '-' . $month . '-' . $day, $column);

			$menu['selected'] = $kategori;
			$menu['content'] = $this->jurnal_Kategori->get_jurnal_kategori('kategori');

			$sub_interface['menu'] = $this->load->view('modules/menu', $menu, TRUE);
			$sub_interface['data'] = $this->Jurnal_Data->get_jurnal_artikel($id, $kategori, $year . '-' . $month . '-' . $day, $column);

			$interface['content'] = $this->load->view('pages/artikel', $sub_interface, TRUE);
			$this->load->view('main', $interface);

			// header('Content-Type: application/json');
			// echo json_encode($data);
		}
	}

?>