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

		public function delete_product($id){
			$query="DELETE FROM products WHERE id=?";
			$values=array($id);
			return $this->db->query($query,$values);
		}

		public function get_all_categories(){
			$query="SELECT (id as category_id, category_name)";
			return $this->db->query($query)->result_array();

		}
	}