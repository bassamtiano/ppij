<?php
	
	class Jurnal_Data extends CI_Model {
		
		protected static $table = "jurnal";
	
		public $id;
		public $id_jurnal_kategori;
		public $title;
		public $content;

		public $created_at;
		public $modified_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function get_jurnal() {
			$this->db->select('jurnal.id as id, jurnal.title as title, jurnal_kategori.kategori as kategori, jurnal.thumbnail as thumbnail, jurnal.content, jurnal.created_at');

			
			$this->db->from(self::$table);
			
			
			$this->db->join('jurnal_kategori', 'jurnal_kategori.id = jurnal.id_jurnal_kategori');	
			$this->db->order_by("jurnal.id", "desc");
			$this->db->limit(3);

			$query = $this->db->get();
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data = [];
			return $data;
		}
		



	}
?>