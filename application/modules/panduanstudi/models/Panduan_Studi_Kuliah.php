<?php
	

	/**
	* 
	*/
	class Panduan_Studi_Kuliah extends CI_Model {
		
		protected static $table = "panduan_studi_kuliah";
	
		public $id;
		public $step;
		public $title;
		public $content;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function get_panduan_studi_kuliah($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->order_by("step", "asc");

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data;
		}

	}

?>