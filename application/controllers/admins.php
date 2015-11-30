<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {	
	function __construct()    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
    }  


	public function index() {
		$this->load->view('admin_login');
	}

	public function validate_admin() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$admin = $this->Admin->admin_login($email, $password);
		// var_dump($admin);
		// die();
		if ($admin && $admin['roles'] == "1") {	
			// $this->load->view('view_orders');	
			redirect('/dashboard/orders');	
		}

		else {
			$this->session->set_flashdata('error', "Invalid email or password!");
			redirect('/');
		}
	}

	public function view_orders() {	
		$output['status'] = $this->Admin->select_status();
		// var_dump($output);
		// die();
		$output['orders'] = $this->Admin->view_orders();
		$this->load->view('orders_page', $output);
	}

	public function search_orders() {
		 if ( $this->input->post('search_orders') ){ 
   	    		$this->session->set_flashdata('selectedStatus','selected');
   	   		}
			if (($this->input->post('search_orders')) == "show") {
			redirect('/dashboard/orders');
			}
	
			else {
				$output['status'] = $this->Admin->select_status();
				$orders = $this->input->post('search_orders');
				$output['orders']=$this->Admin->search_orders($orders);
				$this->load->view('orders_page', $output);
			}
			

		// else {
		// 	$selected="";
		// }
	}

	public function update_status($id) {
		$status=$this->input->post('status_id');
		var_dump($status);
		die();
		$this->Admin->update_status($status, $id);
		redirect ('/dashboard/orders');
	}

	public function search_products() {
		$search = $this->input->post('search_products');
		$output['products']=$this->Admin->search_products($search);
		$this->load->view('products_page',$output);
		// var_dump($result);
		// die();
	}


	public function edit_category() {
		$status = $this->input->post('status');
		$this->Admin->edit_category($status);
	}

	
	public function delete_product($id) {
		$delete= $this->Admin->delete_product($id);
		redirect('/dashboard/products');
	}

	public function add_product() {
		$this->load->helper('form');
		$this->load->library('upload');
		$output['category'] = $this->Admin->get_all_categories();
		$this->load->view('add_product', $output);
	}

	public function add_product_to_db(){
		$this->load->helper('form');
		$this->load->library('upload');
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


	public function edit_product($id){
		$output['category']= $this->Admin->get_all_categories();
		$output['id'] = $id;
		$output['product'] = $this->Admin->select_product($id);
		$this->load->view('edit_product', $output);
	}

	public function upload_image() {
       $config['upload_path']   =   "uploads/";
       $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
       $config['max_size']      =   "5000";
       $config['max_width']     =   "1907";
       $config['max_height']    =   "1280";
       $this->load->library('upload',$config);
 
       if(!$this->upload->do_upload())       {
 	      echo $this->upload->display_errors();
 		}
       else  {
           $finfo=$this->upload->data();
           $data['uploadInfo'] = $finfo;
           // $data['thumbnail_name'] = $finfo['raw_name']. '_thumb' .$finfo['file_ext']; 
           $this->load->view('upload_success',$data);
		}
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload()) {
			$this->session->set_flashdata('error', 'You had an error. Please try again');
		}
		if(is_file($config['upload_path'])) {
    	chmod($config['upload_path'], 777); 
		}
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

	// displays the show page when the admin clicks the order number and displays all the info about the user and the products they bought
	public function show_order_id($id)
	{
		$output["infos"] = $this->Admin->show_orders($id);
		$this->load->view('show_order.php', $output);
	}

	
	public function log_off(){
		$this->session->unset_userdata('');
	}
}
