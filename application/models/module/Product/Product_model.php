<?php
    class Product_model extends GCA_Model
	{
		const PRODUCTS_TABLE = 'products';

		public function __construct()
		{
			$this->load->database();
		}

		public function addProduct($newProduct)
		{
			$this->db->insert(self::PRODUCTS_TABLE, $newProduct);
		}
	}
?>