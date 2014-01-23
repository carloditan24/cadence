<?php

class Logout extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index(){
		$array_items = array('user_data' => '','logged_in' => '');
		$this->session->unset_userdata($array_items);
		redirect('login','refresh');
	}
}
?>
