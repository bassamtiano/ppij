<?php


	/**
	* 
	*/
	class Faq_Data extends CI_Model {
		
		protected static $table = "faq";
	
		public $id;
		public $title;
		public $content;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function select_faq($id, $column) {
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

		public function add_faq($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_faq($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_faq($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}
	}

?>