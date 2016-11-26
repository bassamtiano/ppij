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
		
		public function find_otsukaresama($id, $column) {
			if($column != NULL || $column != '') 
				$this->db->select($column);

			$this->db->where('id', $id);
			$this->db->from(self::$table);

			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data[0];
		}

		public function get_otsukaresama($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}
			$this->db->group_by('otsukaresama_konten.id_otsukaresama');
			$this->db->join('otsukaresama_konten', 'otsukaresama_konten.id_otsukaresama = otsukaresama.id', 'left');

			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;

			
		}
	}

?>