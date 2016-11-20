<?php

	/**
	* 
	*/
	class Jurnal_Kategori extends CI_Model {
		
		protected static $table = "jurnal_kategori";
	
		public $id;
		public $kategori;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function categorized_jurnal() {

		}

		public function get_jurnal_kategori($column) {

			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data;
		}

		public function add_jurnal_kategori($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_jurnal_kategori($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_jurnal_kategori($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}

	}


?>