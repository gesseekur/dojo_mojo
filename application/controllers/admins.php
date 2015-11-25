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
		$this->load->view('add_product');
	}

	public function show_order(){
		$this->load->view('show_order');
	}

	public function edit_product(){
		$this->load->view('edit_product');
	}

	public function log_off(){
		$this->session->unset_userdata('');
	}
}
