<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class changePassword extends CI_Controller {
	public function __construct(){
		parent::__construct();
    //load the required libraries and helpers for login
        $this->load->helper('url');
        $this->load->library(['form_validation','session']);
        $this->load->database();

        //load the Login Model
        $this->load->model('LoginModel', 'login');
	}

  public function index()
  {
    $this->load->view('user/index');
  }

  public function update() {

	    $pwd = $this->input->post('password');
	    $confirmPassword = $this->input->post('confirm_password');
			//echo  "<pre>";
			if(!$this->session->user || !$this->session->user->email){
				redirect("login");
			}

			if($pwd !== $confirmPassword){
					$this->session->set_flashdata('msg', 'Password and Confirm password doesn\'t match');
					redirect("changepassword");
			} else {
				$email = $this->session->user->email;
				$hashed = password_hash($pwd, PASSWORD_DEFAULT);

				if($this->login->updatePassword($email,$hashed)){
						$this->session->set_flashdata('msg', 'Password updated successfully');
						redirect("changepassword");
				} else{
					$this->session->set_flashdata('msg', 'Failed to update password');
				}

			}

   }
}
