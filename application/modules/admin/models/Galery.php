<?php


	/**
	* 
	*/
	class Galery extends CI_Model {
		
		protected static $table = "galery";
	
		public $id;
		public $url;

		public function __construct() {
			parent::__construct();
		}
		

		public function get_galery($column) {
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

		public function add_galery($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_galery($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_galery($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}
	}

?>