<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('./vendor/autoload.php');

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

	public function stripe_pay() 
	{

		$amount =$this->cart->total() * 100;
		$stripe_keys = array(
			"secret_key" => "sk_test_MIO6f9ftiPtcuTpGXQeVQQOu",
			"publishable_key" => "pk_test_qUFrcMAtaUuox560lPVGhqdk"
			);

		\Stripe\Stripe::setApiKey($stripe_keys["secret_key"]);

		$token = $this->input->post("stripeToken");

		try {
			$charge = \Stripe\Charge::create(array(
        "amount" => $amount, // amount in cents, again
        "currency" => "usd",
        "source" => $token,
        "description" => "Charging the user in the example"
        ));
		} catch(\Stripe\Error\Card $e) {
			$this->session->set_flashdata("errors", "Invalid Card. Please try again with another credit card");
			redirect("carts");
		}
		redirect("orders/add_order");
	}

	public function add_orders (){
		$user_id = $this->session->userdata('user')['user_id'];

		// create order to add items to
		$order_id = $this->Order->create_order($user_id);

		$items = $this->cart->contents();
		$data = array();

		// add items to order details
		foreach ($items as $item){


		}

	}
}
