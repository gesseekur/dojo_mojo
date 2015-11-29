<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin extends CI_Model{
		public function admin_login($email, $password){
			$query="SELECT * FROM users WHERE email=? && password = ?";
			$values=array($email, $password);
			return $this->db->query($query,$values)->row_array();
		}

		public function view_products(){
			$query="SELECT categories.category_name, products.image_name, products.id, products.name, products.quantity, products.quantity_sold FROM products LEFT JOIN categories on products.category_id = categories.id LIMIT 5 ";
			return $this->db->query($query)->result_array();
		}

		public function view_orders() {
			$query="SELECT orders.id, users.name, orders.status_id, DATE_FORMAT(users.created_at, '%c/%e/%Y') as created_at, status.status_name FROM orders
					LEFT JOIN users ON orders.user_id = users.id
					LEFT JOIN status ON orders.status_id=status.id";
			return $this->db->query($query)->result_array();
		}

		public function search_orders($search){
			$query="SELECT orders.id, users.name, DATE_FORMAT(orders.created_at, '%c/%e/%Y') as created_at, status.status_name FROM orders
				LEFT JOIN users ON orders.user_id = users.id 
				LEFT JOIN status ON orders.status_id = status.id
				WHERE name LIKE ? OR orders.id LIKE ? OR orders.created_at LIKE ? OR status.status_name LIKE ?"; 
			$values=array("%" . $search . "%","%" . $search . "%","%" . $search . "%","%" . $search . "%");
			return $this->db->query($query,$values)->result_array();
		}

		public function search_products($search){
			$query="SELECT id, name, quantity, quantity_sold FROM products
					WHERE id LIKE ? OR name LIKE ? OR quantity LIKE ? OR quantity_sold LIKE ?"; 
			$values=array("%" . $search . "%","%" . $search . "%","%" . $search . "%","%" . $search . "%");
			return $this->db->query($query,$values)->result_array();
		}

		public function select_status() {
			$query="SELECT status_name, id FROM status";
			return $this->db->query($query)->result_array();
		}

		public function update_status($status,$id) {
			// var_dump($status, $id);
			// die();
			$query="UPDATE orders SET status_id=?, updated_at= NOW() WHERE id=?";
			$value=array($status,$id);
			$this->db->query($query,$value);
		}


		public function edit_category($status){
			$query="UPDATE orders SET status=?";
			$values=array($status);
			return $this->db->query($query,$values);
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
			$query= "SELECT * FROM products LEFT JOIN categories on products.category_id = categories.id WHERE products.id=?";
			$values=array($id);
			return $this->db->query($query,$values)->row_array();
		}

		public function update_product_to_db($product_name, $description,$price, $specifications,$category_id,$quantity, $quantity_sold,$image_name, $id){
			$query="UPDATE products SET name=?,description=?, price=?, specifications=?, category_id=?, quantity=?,quantity_sold=?,image_name=?, updated_at=NOW()
					WHERE products.id=?";
			$values=array($product_name, $description,$price, $specifications,$category_id,$quantity, $quantity_sold,$image_name, $id);
			return $this->db->query($query,$values);
		}

		public function show_orders($order_id)
		{
			$query = "SELECT address.name as user, address.street, address.city, address.zip, address.state, products.name as item, products.price, products.quantity, orders.status, orders.id as id
 						FROM orders
 						LEFT JOIN address on orders.user_id = address.user_id
 						LEFT JOIN order_details on orders.id = order_details.order_id
 						LEFT JOIN products on order_details.product_id = products.id
 						WHERE orders.id = ? ";
 			$values = array($order_id);
 			return $this->db->query($query, $values) -> result_array();
		}

	}