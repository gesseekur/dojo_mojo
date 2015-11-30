<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Product');
		$this->load->model('Order');
	}

	public function index(){


		// loading data from the cart to have in view
		$output['products'] = $this->cart->contents();
		$output['total'] = $this->cart->total();
		$output['total_items'] = $this->cart->total_items();

		$this->load->view('shopping_cart', $output);
	}

	public function add_to_cart()
	{
		$id = $this->input->post('id');
		// $id = 3;
		$qty = $this->input->post('qty');

		$insert_data = $this->Product->product_data_for_cart($id);
		$insert_data['qty'] = $qty;

		$this->cart->insert($insert_data);



		redirect('carts');
	}

	function remove_from_cart($rowid) {
	// Check rowid value.
		if ($rowid==="all"){
		// Destroy data which store in session.
			$this->cart->destroy();
		}else{
		// Destroy selected rowid in session.
			$data = array(
				'rowid' => $rowid,
				'qty' => 0
				);
			// Update cart data, after cancel.
			$this->cart->update($data);
		}

		// This will show cancel data in cart.
		redirect('carts');
	}
}