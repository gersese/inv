<?php

class Utils extends GCA_Model {
	
	function __construct(){
		parent::__construct();
		$this->load->library('session');
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
		return $this->session->userdata('user_id') != null;
	}
	
} 