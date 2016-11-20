<?php

	/**
	* 
	*/
	class Jurnal_Kategori extends CI_Model {
		
		protected static $table = "jurnal_kategori";
	
		public $id;
		public $kategori;

		public $created_at;
		public $modified_at;
		
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


	}

?>