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

		public function registerUser($newUser)
		{
			$this->db->insert(self::USERS_TABLE, $newUser);
		}

		public function isUsernameTaken($username)
		{
			$query = $this->db->get_where(self::USERS_TABLE,
				array('username' => $username)
			);
			return $query->num_rows > 0;
		}
	}
?>