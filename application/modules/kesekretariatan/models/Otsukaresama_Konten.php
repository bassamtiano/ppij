<?php


	/**
	* 
	*/
	class Otsukaresama_Konten extends CI_Model {
		
		protected static $table = "otsukaresama_konten";
	
		public $id;
		public $id_otsukaresama;
		public $url;

		public $created_at;
		public $updated_at;

		public function __construct() {
			parent::__construct();
		}


		public function select_otsukaresama_konten($id, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->where('otsukaresama_konten.id_otsukaresama', $id);
			$this->db->from(self::$table);
			$this->db->join('otsukaresama', 'otsukaresama.id = otsukaresama_konten.id_otsukaresama');	

			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}
	}

?>