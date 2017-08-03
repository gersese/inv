<?php
    class Product_category_model extends GCA_Model
	{
		const PRODUCTS_TABLE = 'product_categories';

		public function __construct()
		{
			$this->load->database();
		}

		
	}
?>