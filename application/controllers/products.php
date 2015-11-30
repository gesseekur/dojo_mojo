<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function view_0_5_products(){
		$products = $this->Admin->view_0_5_products();
		$output['products'] = $products;
		$this->load->view('products_page',$output);
	}

	public function view_5_10_products(){
		$products = $this->Admin->view_5_10_products();
		$output['products'] = $products;
		$this->load->view('products_page',$output);
	}

	public function view_10_15_products(){
		$products = $this->Admin->view_10_15_products();
		$output['products'] = $products;
		$this->load->view('products_page',$output);
	}

	public function view_15_20_products(){
		$products = $this->Admin->view_15_20_products();
		$output['products'] = $products;
		$this->load->view('products_page',$output);
	}

	public function view_20_25_products(){
		$products = $this->Admin->view_20_25_products();
		$output['products'] = $products;
		$this->load->view('products_page',$output);
	}

	public function view_25_30_products(){
		$products = $this->Admin->view_25_30_products();
		$output['products'] = $products;
		$this->load->view('products_page',$output);
	}
}
