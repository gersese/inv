<?php

class Utils extends GCA_Model 
{
	const HASHING_ALGORITHM = 'sha256';
	function __construct(){
		parent::__construct();
	}

	function getHeaders(){
		$this->db->select('*')->from('src_header');
		$query = $this->db->get();

		$items = array();
		foreach($query->result_array() as $itm){
			$items[] = $itm;
		}
		return $items;
	}

	public function hasSession()
	{
		$this->load->library('session');
		return $this->session->userdata('user_id') != null;
	}

	public 	function encryptPassword($password)
	{
		return hash(self::HASHING_ALGORITHM, md5($password));
	}

	
} 