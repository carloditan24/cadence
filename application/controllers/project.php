<?php
class Project extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('project_model');
    }

    public function index(){
        $this->load->view();
    }

    public function add(){
        if(isset($_POST['work_order_no'])){
            $params = array(
                'work_order_no'=>$_POST['work_order_no'],
                'aeb_ref'=>$_POST['aeb_ref'],
                'title'=>$_POST['title'],
                'package'=>$_POST['package'],
                'building_type'=>$_POST['building_type'],
                'standard'=>$_POST['standard'],
                'budget_allotted'=>$_POST['budget_allotted'],
                'date_issued'=>$_POST['date_issued'],
                'pre_contract_stage'=>$_POST['pre_contract_stage'],
                'discipline'=>$_POST['discipline'],
                'total_drawings'=>$_POST['total_drawings'],
                'hours_allotted'=>$_POST['hours_allotted'],
                'commencement_date'=>$_POST['commencement_date']
            );
            if($this->project_model->insert_project($params)){
                echo "Project successfully added";
            }else{
                echo "Failed to add project.";
            }
        }
    }
}