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

		public function select_panduan_studi_kuliah($id, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}
			$this->db->from(self::$table);
			$this->db->where('id', $id);
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data[0];
		}

		public function get_panduan_studi_kuliah($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data;
		}

		public function add_panduan_studi_kuliah($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_panduan_studi_kuliah($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_panduan_studi_kuliah($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}
	}

?>