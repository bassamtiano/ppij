<?php
	
	class Jurnal_Data extends CI_Model {
		
		protected static $table = "jurnal";
	
		public $id;
		public $id_jurnal_kategori;
		public $title;
		public $content;

		public $created_at;
		public $modified_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function get_jurnal($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->from(self::$table);
			$this->db->join('jurnal_kategori', 'jurnal_kategori.id = jurnal.id_jurnal_kategori');	
			
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}
		
		public function categorized_jurnal($kategori, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$filtering = str_replace('_', ' ', $kategori);

			$this->db->from(self::$table);
			$this->db->where('jurnal_kategori.kategori', $filtering);
			$this->db->join('jurnal_kategori', 'jurnal_kategori.id = jurnal.id_jurnal_kategori');	
			
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function get_jurnal_artikel($id, $kategori, $date, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$filtering = str_replace('_', ' ', $kategori);

			$this->db->where('jurnal.id', $id);
			$this->db->where('jurnal.created_at', $date);
			$this->db->where('jurnal_kategori.kategori', $filtering);

			$this->db->join('jurnal_kategori', 'jurnal_kategori.id = jurnal.id_jurnal_kategori');	
			
			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data[0];
		}



	}
?>