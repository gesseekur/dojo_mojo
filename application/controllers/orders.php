<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Product');
		$this->load->model('Order');
	}

	public function index(){
		$output['products'] = $this->cart->contents();
		$this->load->view('shopping_cart', $output);
	}

	function add_to_cart()
	{
		$id = $this->input->post('id');
		$qty = $this->input->post('qty');

		$insert_data = $this->Product->product_data_for_cart($id);
		$insert_data['qty'] = $qty;

		$this->cart->insert($insert_data);

		// This will show insert data in cart.
		redirect('orders');
	}
}