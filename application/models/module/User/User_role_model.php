<?php
    class User_role_model extends GCA_Model
	{
		const USER_ROLE_TABLE = 'user_roles';

		public function __construct()
		{
			$this->load->database();
		}

		public function getUserRoles()
		{
			$query = $this->db->get(self::USER_ROLE_TABLE);
			return $query->result_array();
		}
	}
?>