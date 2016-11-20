<?php


	/**
	* 
	*/
	class Kesekretariatan_Data extends CI_Model {
		
		protected static $table = "kesekretariatan";
	
		public $id;
		public $title;
		public $content;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function select_kesekretariatan($id, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->from(self::$table);
			$this->db->where('id', $id);

			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data[0];
		}

	}

?>