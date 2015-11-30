<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{
	// gets user for the login to check to see if they are in the database based on the email
	// they typed in
	public function get_current_user($email)
	{
		$query = "SELECT id, name, alias, birthday, email, password, roles, phone FROM users WHERE email = ?";
		$value = array($email);
		return $this->db->query($query, $value)->row_array();
	}

	public function add_user($user)
	{
		$query = "INSERT INTO users (name, alias, birthday, email, password, phone, roles, created_at, updated_at)
			VALUES (?, ?, ?, ?, ?, ?, 0, NOW(), NOW())";
		$value = array($user["name"], $user["alias"], $user["date_of_birth"], $user["email"], $user["password"], $user["phone"]);
		return $this->db->query($query, $value);
	}
	// getting a specific user when we call the specific user id, mostly used for session results
	public function get_user_id($userid)
	{
		$query = "SELECT id, name, alias, birthday, email, password, roles, phone FROM users WHERE id = ?";
		$value = array($userid);
		return $this->db->query($query, $value)->result_array();
	}

	public function view_products()
	{
			$query="SELECT categories.category_name, products.image_name, products.id as product_id, products.name FROM products LEFT JOIN categories on products.category_id = categories.id";
			return $this->db->query($query)->result_array();
	}

	public function view_product($id)
	{
			$query="SELECT categories.category_name, products.image_name, products.id, products.name, products.description, products.specifications, products.price
					FROM products 
					LEFT JOIN categories on products.category_id = categories.id
					WHERE products.id = ? ";
			$values = array($id);
			return $this->db->query($query, $values)->result_array();
	}

	public function search_products($search){
			$query="SELECT products.id as product_id, name, quantity, quantity_sold, image_name, categories.category_name FROM products
					LEFT JOIN categories on products.category_id = categories.id
					WHERE products.id LIKE ? OR name LIKE ? OR categories.category_name LIKE ?"; 
			$values=array("%" . $search . "%","%" . $search . "%", "%" . $search . "%");
			return $this->db->query($query,$values)->result_array();
		}
}