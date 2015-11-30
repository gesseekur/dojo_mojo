<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Product extends CI_Model
	{
		public function product_data_for_cart($id){
			$query= "SELECT products.id as id, name, price  FROM products WHERE products.id=?";
			$values=array($id);
			return $this->db->query($query,$values)->row_array();
		}



	}
