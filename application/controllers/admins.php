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
		$this->load->view('orders_page');
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
		$output= [
			'category' =>  $this->Admin->get_all_categories()
		];

		$this->load->view('add_product', $output);
	}

	public function add_product_to_db() {
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

	public function edit_product(){
		$new_product= $this->input->post();
		$output= [
			'category' =>  $this->Admin->get_all_categories(),
			// 'edits' => $this->Admin->update_product($new_product)
		];

		$this->load->view('edit_product', $output);
	}

	public function log_off(){
		$this->session->unset_userdata('');
	}
}
