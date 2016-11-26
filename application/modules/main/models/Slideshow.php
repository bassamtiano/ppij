<?php


	/**
	* 
	*/
	class Slideshow extends CI_Model {
		
		protected static $table = "slideshow";
	
		public $id;
		public $url;
		public $title;
		public $description;
		public $status;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function count_slideshow() {
			$this->db->select('id');
			$this->db->where('status', 1);
			$query = $this->db->get(self::$table);
			
			return $query->num_rows();
		}

		public function get_slideshow($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->where('status', 1);
			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}
	}

?>