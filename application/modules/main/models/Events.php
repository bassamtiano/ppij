<?php


	/**
	* 
	*/
	class Events extends CI_Model {
		
		protected static $table = "events";
	
		public $id;
		public $title;
		public $url;
		public $status;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function get_events($column) {
			if($column != NULL || $column != '') {
				$this->db->select($column);
			}

			$this->db->where('status', 1);
			$this->db->order_by('id');
			$this->db->limit(1);
			$query = $this->db->get(self::$table);
			if ($query->num_rows() > 0)
				foreach ($query->result() as $row) $data[] = $row;
			else
				$data[0] = null;
			return $data[0];
		}
	}

?>