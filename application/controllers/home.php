<?php

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index(){
		$array = $this->session->all_userdata();
		if(isset($array['user_data'])){
			$data['message'] = "Hello ".$array['user_data'];
			$this->load->view('home_view.php',$data);
		}else{
			$this->session->set_flashdata('data',(object)array('status'=>'error','message'=>'Not logged in.'));
			redirect('login','refresh');
		}
	}
}
?>
