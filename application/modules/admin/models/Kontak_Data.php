<?php


	/**
	* 
	*/
	class Kontak_Data extends CI_Model {
		
		protected static $table = "kontak";
	
		public $id;
		public $name;
		public $email;
		public $subject;
		public $message;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function get_kontak($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

	}

?>