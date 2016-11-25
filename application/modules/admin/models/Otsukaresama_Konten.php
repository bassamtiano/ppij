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

			// $this->db->where('otsukaresama_konten.id_otsukaresama', $id);
			$this->db->from(self::$table);
			$this->db->join('otsukaresama', 'otsukaresama.id = otsukaresama_konten.id_otsukaresama');	
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function add_otsukaresama_konten($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_otsukaresama_konten($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_otsukaresama_konten($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}
	}

?>