<?php


	/**
	* 
	*/
	class About_Data extends CI_Model {
		
		protected static $table = "about";
	
		public $id;
		public $section;
		public $content;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function select_about($id, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->from(self::$table);
			$this->db->where('id', $id);

			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data;
		}

		public function edit_about($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

	}

?>