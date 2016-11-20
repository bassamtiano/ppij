<?php


	/**
	* 
	*/
	class Kalender extends CI_Model {
		
		protected static $table = "kalender";
	
		public $id;
		public $nama;
		public $tempat;
		public $tanggal;
		public $waktu_mulai;
		public $waktu_selesai;
		public $konten;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function get_kalender($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->from(self::$table);
			
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function select_kalender($id, $date, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->from(self::$table);

			$this->db->where('id', $id);
			$this->db->where('tanggal', $date);

			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data[0];
		}

	}

?>