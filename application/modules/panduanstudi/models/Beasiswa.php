<?php
	

	/**
	* 
	*/
	class Beasiswa extends CI_Model {
		
		protected static $table = "beasiswa";
	
		public $id;
		public $title;
		public $deadline;
		public $content;

		public $thumbnail;
		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function get_beasiswa($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data;
		}

		public function select_beasiswa($id, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->where('id', $id);

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data[0];

		}
	}

?>