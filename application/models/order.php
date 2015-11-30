<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model
{
	public function create_order($user_id){
		$query = "INSERT INTO games.orders (created_at, updated_at, user_id, status_id) VALUES (NOW(), NOW(), ?, ?);
		VALUES"
		$values = array($user_id,2);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
}
