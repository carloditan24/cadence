<?php

class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index(){
		if(isset($_POST['login'])){
			$params = array('username'=>$_POST['username'],'password'=>md5($_POST['password']));
			$results = $this->user_model->login($params);
			if($results['logged_in'] == TRUE){
				$newdata = array(
                   'user_data'  => $results['username'],
                   'logged_in' => TRUE
               	);
				$this->session->set_userdata($newdata);
				redirect('/home','refresh');
			}else{
				echo "Invalid username/password";
			}
		}else{
            $array = $this->session->all_userdata();
            if(isset($array['user_data'])){
                redirect('home','refresh');
            }else{
                $this->load->view('login_view.php');
            }
		}
	}
}
?>
