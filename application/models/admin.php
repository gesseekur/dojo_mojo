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
			$query="SELECT id as category_id, category_name as name FROM categories";
			return $this->db->query($query)->result_array();
		}

		public function add_product($product_name, $description,$price, $quantity, $category_id, $quantity_sold, $specifications ,$image_name){
			$query="INSERT INTO products(name, description, price, quantity, category_id, quantity_sold, specifications, image_name, created_at, updated_at) 
				VALUES (?,?,?,?,?,?,?,?, NOW(), NOW())";
			$values = array($product_name, $description,$price, $quantity,$category_id, $quantity_sold, $specifications,$image_name);
			return $this->db->query($query,$values);
		}

		public function add_category($new_category) {
			$query="INSERT INTO categories(category_name,created_at,updated_at)
					VALUES (?, NOW(), NOW())";
			$values=array($new_category);
			$this->db->query($query,$values);
			return $this->db->insert_id();
		}

		public function select_product($id) {
			$query= "SELECT * FROM products WHERE id=?";
			$values=array($id);
			return $this->db->query($query,$values)->row_array();
		}

		public function update_product_to_db($product_name, $description,$price, $specifications,$category_id,$quantity, $quantity_sold,$image_name, $id){
			$query="UPDATE products SET name=?,description=?, price=?, specifications=?, category_id=?, quantity=?,quantity_sold=?,image_name=?, updated_at=NOW()
					WHERE products.id=?";
			$values=array($product_name, $description,$price, $specifications,$category_id,$quantity, $quantity_sold,$image_name, $id);
			return $this->db->query($query,$values);

		}

	}