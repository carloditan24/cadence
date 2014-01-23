<?php

class Team extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('team_model');
    }

    public function add(){
        if(isset($_POST['team_no'])){
            $params = array(
                'team_no'=>$_POST['team_no'],
                'name'=>$_POST['team_name'],
                'username'=>$_POST['username'],
                'manager'=>$_POST['manager'],
                'members'=>$_POST['members'],
                'leader'=>$_POST['leader']
            );
            if($this->team_model->insert_team($params)){
                echo "Team successfully added";
            }else{
                echo "Failed to add team";
            }
        }
        $this->load->view('teams/add.php');
    }

    public function get_users_by(){
        $filter = $this->input->get('filter');
        $res = $this->user_model->get_user_by($filter);
        echo json_encode($res);
    }

}

?>