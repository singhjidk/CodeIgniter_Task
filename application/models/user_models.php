<?php
 class User_models extends CI_Model{

    public function login_user($username,$password){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
          return false;
        }
      }


    public function insert($data) {
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
        $this->db->insert('users', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        } else {
        return false;
        }
        }

     
 }
 ?>