<?php

class User_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}

    public function is_duplicate($attribute,$value){
        $this->db->where($attribute, $value);
        $this->db->from('user');
        $res = $this->db->count_all_results();
        if($res > 0) return true;
        return false;
    }

	public function get_user($params){
		$res = $this->db->get_where('user',$params)->row();
		return $res;
	}
	
	public function get_user_by($params){
		$this->db->select($params);
		$this->db->from('user');
		$res = $this->db->get()->result();
		return $res;
	}
	
	public function delete_user($id){
		$this->db->where('id',$id);
		$res = $this->db->delete('user');
		return $res;
	}

	public function insert_user($params){
		$res = $this->db->insert('user',$params);
		return $res;
	}

	public function login($params){
		$result = $this->db->get_where('user',$params)->row();
		if(count($result) > 0){
			$data = array('logged_in'=>TRUE,'username'=>$result->username);
			return $data;
		}else{
			$data = array('logged_in'=>FALSE,'username'=>NULL);
			return $data;
		}
	}
	
	public function update_user($id,$params){
		$this->db->where('id',$id);
		$res = $this->db->update('user',$params);
		return $res;
	}
}

?>
