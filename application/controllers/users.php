<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('user_login');

	}

	public function login()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$this->load->model('User');
		//checks if user is in database based on correct email and password
		$person = $this->User->get_current_user($email);
		if($person && $person["password"] == $password)
		{
			$user = array(
				"user_name" => $person["name"],
				"user_alias" => $person["alias"],
				"user_email" => $person["email"],
				"user_id" => $person["id"],
				"user_birthday" => $person["birthday"],
				"user_phone" => $person["phone"],
				"user_role" => $person["roles"]
			);
		$this->session->set_userdata($user);
		// put the right view after this
		// $this->load->view("books", $arrtoView);
		}
		else
		{
			// in the view if you call the variable login_error it will show the error
			$this->session->set_flashdata("login_error", "Invalid email or password!");
			redirect("/");
		}	
	}

	public function register()
	{
		//register the user and adds to the validation error array which input is showing the error
		$this->load->model('User');
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|required|is_unique[users.email]|valid_email");
		$this->form_validation->set_rules("date_of_birth", "Date of Birth", "trim|required|regex_match[^(19|20)\d\d[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$]");
		$this->form_validation->set_rules("phone", "Phone No", "trim|required");
		$this->form_validation->set_rules("password", "Password", "required|min_length[8]");
		$this->form_validation->set_rules("confirm_password", "confirm_Password", "required|matches[password]");		
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata("registration_error", validation_errors());
			redirect("/");
		}
		else
		{
		$user = $this->User->add_user($this->input->post());
		$this->session->set_flashdata("success", "REGISTRATION COMPLETE YAYAYAY");
		redirect("/");	
		}
	}

	public function homepage()
	{
	// load the home page here 
	}

	public function logout()
	{
		//logout the user
		$this->session->sess_destroy();
		redirect("/");
	}
}