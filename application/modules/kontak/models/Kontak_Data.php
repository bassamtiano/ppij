<?php


	/**
	* 
	*/
	class Kontak_Data extends CI_Model {
		
		protected static $table = "kontak";
	
		public $id;
		public $name;
		public $email;
		public $subject;
		public $message;

		public $created_at;
		public $updated_at;
		
		public function __construct() {
			parent::__construct();
		}

		public function add_kontak($data) {
			if($this->db->insert(self::$table, $data))
                return 1;
            else
                return 0;
		}

	}

?>