<?php


	/**
	* 
	*/
	class Otsukaresama extends CI_Model {
		
		protected static $table = "otsukaresama";
	
		public $id;
		public $title;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}
		

		public function get_otsukaresama($column) {
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

		public function add_otsukaresama($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_otsukaresama($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_otsukaresama($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}
	}

?>