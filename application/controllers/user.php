<?php

class User extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		$data['users'] = $this->user_model->get_users();
		$this->load->view('view.php',$data);
	}

    public function check_duplicate_id(){
        if(isset($_GET['id'])){
            if($this->user_model->is_duplicate('id',$_GET['id'])){
                echo "Employee number already exists.";
            }
        }
    }

    public function check_duplicate_username(){
        if(isset($_GET['username'])){
            if($this->user_model->is_duplicate('username',$_GET['username'])){
                echo "Username already exists.";
            }
        }
    }

	public function add(){
		if(isset($_POST['id'])){
            $params = array(
                'id'=>$_POST['id'],
                'name'=>$_POST['l_name'].", ".$_POST['f_name']." ".$_POST['m_name'],
                'username'=>$_POST['username'],
                'password'=>md5($_POST['password']),
                'contact_number'=>$_POST['contact_number'],
                'designation'=>$_POST['designation']
            );
            if($this->user_model->insert_user($params)){
                echo "User successfully added";
            }else{
                echo "Failed to add user";
            }
		}else{
			$this->load->view('users/add.php');
		}
	}
	public function edit(){
		if(isset($_GET['id'])){
			$params = array('id'=>$_GET['id']);
			$data = array('data'=>$this->user_model->get_user($params));
			$this->load->view('edit.php',$data);
		}
		if(isset($_POST['edit'])){
			if($_POST['password'] == $_POST['confirm_password']){
				$params = array('username'=>$_POST['username'],'password'=>md5($_POST['password']));
				if($this->user_model->update_user($_POST['id'],$params)){
					$this->session->set_flashdata('data',(object)array('status'=>'ok','message'=>'User has been successfully edited.'));
				}else{
					$this->session->set_flashdata('data',(object)array('status'=>'ok','message'=>'Failed to edit user.'));
				}
				redirect('user','refresh');
			}else{
				$this->session->set_flashdata('data',(object)array('status'=>'error','message'=>'Passwords does not match'));
				redirect('user/edit','refresh');
			}
		}
	}

	public function delete(){
		if(isset($_GET['id'])){
			if($this->user_model->delete_user($_GET['id'])){
				$this->session->set_flashdata('data',(object)array('status'=>'ok','message'=>'User has been successfully deleted.'));
			}else{
				$this->session->set_flashdata('data',(object)array('status'=>'ok','message'=>'Failed to delete user.'));
			}
			redirect('user','refresh');
		}
	}

}
?>
