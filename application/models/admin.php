<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends CI_Model{
		public function admin_login($email){
			$query="SELECT * FROM users WHERE email=?";
			$values=array($email);
			return $this->db->query($query,$values)->row_array();
		}

		public function view_products(){
			$query="SELECT * FROM products";
			return $this->db->query($query)->result_array();
		}
	}