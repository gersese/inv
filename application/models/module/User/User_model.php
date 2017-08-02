<?php
    class User_model extends GCA_Model
	{
		const USERS_TABLE = 'users';

		public function __construct()
		{
			$this->load->database();
		}

		public function validateUser($username, $password)
		{
			$query = $this->db->get_where(self::USERS_TABLE, 
				array(
					'username' => $username,
					'password' => $password)
				);
			return $query->row();
		}
	}
?>