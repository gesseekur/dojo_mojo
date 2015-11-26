<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {


	public function index() {
		$this->load->view('admin_login');
	}

	public function validate_admin() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$admin = $this->Admin->admin_login($email);
		// var_dump($admin);
		// die();
		if ($admin && $admin['password'] == $password && $admin['roles'] == "1") {	
			// $this->load->view('view_orders');	
			redirect('/dashboard/orders');	
		}

		else {
			$this->session->set_flashdata('error', "Invalid email or password!");
			redirect('/');
		}
	}

	public function view_orders() {
		if ($this->input->post('status')) {
			$ouput['status']= $this->input->post('status');
			$orders = $this->Admin->search_orders();
			$output['orders'] = $orders;
		}
		else {
				$orders = $this->Admin->view_orders();
				$output['orders'] = $orders;
		}
		$this->Admin->search_orders($status);
		$this->load->view('orders_page', $output);
	}

	// public function search_orders() {
	// 	// if ($this->input->post('search')) {
	// 	// 	$output['status'] = $this->input->post('search');
	// 	// }
	// 	if ($this->input->post('status')) {
	// 		$status= $this->input->post('status');
	// 	}
	// 	$this->Admin->search_orders($status);

	// }

	public function edit_category() {
		$status = $this->input->post('status');
		$this->Admin->edit_category($status);
	}

	public function view_products(){
		$products = $this->Admin->view_products();
		$output['products'] = $products;
		$this->load->view('products_page',$output);
	}

	public function delete_product($id) {
		$delete= $this->Admin->delete_product($id);
		redirect('/dashboard/products');
	}

	public function add_product() {
		$output['category'] = $this->Admin->get_all_categories();
		$this->load->view('add_product', $output);
	}

	public function add_product_to_db(){
		$new_category=$this->input->post('new_category');

		if (strlen($new_category)) {
			$category_id= $this->Admin->add_category($new_category);
		}
		else {
			$category_id = $this->input->post('category');
		}

		$product_name = $this->input->post('name');
		$description =  $this->input->post('description');
		$price = $this->input->post('price');
		$specifications = $this->input->post('specifications');
		$quantity = $this->input->post('quantity');
		$quantity_sold = 0;
		$image_name = $this->input->post('image_name');
		$this->Admin->add_product($product_name, $description,$price, $quantity,$category_id, $quantity_sold, $specifications,$image_name);
		redirect('/admins/add_product');
	}


	public function show_order(){
		$this->load->view('show_order');
	}

	public function edit_product($id){
		$output['category']= $this->Admin->get_all_categories();
		$output['id'] = $id;
		$output['product'] = $this->Admin->select_product($id);
		$this->load->view('edit_product', $output);
	}

	public function update_product_to_db($id){
		$new_category= $this->input->post('new_category');
		if (strlen($new_category)) {
			$category_id= $this->Admin->add_category($new_category);
		}
		else {
			$category_id= $this->input->post('category');
		}

		$product_name = $this->input->post('name');
		$description =  $this->input->post('description');
		$price = $this->input->post('price');
		$specifications = $this->input->post('specifications');
		$quantity = $this->input->post('quantity');
		$quantity_sold = $this->input->post('quantity_sold');
		$image_name = $this->input->post('image_name');
		$this->Admin->update_product_to_db($product_name, $description,$price, $specifications,$category_id,$quantity, $quantity_sold,$image_name, $id);
		redirect('/dashboard/products');
	}


	public function log_off(){
		$this->session->unset_userdata('');
	}
}
