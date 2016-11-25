<?php


	/**
	* 
	*/
	class Jurnal_Data extends CI_Model {
		
		protected static $table = "jurnal";
	
		public $id;
		public $id_jurnal_kategori;
		public $title;
		public $content;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}
		
		public function categorized_jurnal($kategori) {
			$this->db->where('id_jurnal_kategori', $kategori);
			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			return $data;
		}

		public function select_jurnal($id, $column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}
			$this->db->from('jurnal');
			$this->db->where('jurnal.id', $id);
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data[0];
		}

		public function get_jurnal($column) {
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

		public function get_full_jurnal($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}
			// $this->db->select('*');
			$this->db->from('jurnal');
			$this->db->join('jurnal_kategori', 'jurnal_kategori.id = jurnal.id_jurnal_kategori');	
			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}

		public function add_jurnal($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

		public function edit_jurnal($id, $data) {
			$this->db->where('id', $id);
            return $this->db->update(self::$table, $data);
		}

		public function delete_jurnal($id) {
			$this->db->where('id', $id);
			$this->db->delete(self::$table);
		}
	}

?>