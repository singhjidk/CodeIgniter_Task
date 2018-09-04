<?php

class User extends CI_Controller{

    public function index(){
        $this->load->view('login.php');
    }
    public function login_process(){
        $user_login=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password')
              );
          
              $data=$this->user_models->login_user($user_login['username'],$user_login['password']);
                if($data)
                {
                  $this->session->set_userdata('user_id',$data['id']);
                  $this->session->set_userdata('user_email',$data['username']);
                  $this->session->set_userdata('email',$data['email']);
                  $this->session->set_flashdata('login_success','you are logged in');
                  $this->session->set_flashdata('welcome','WELCOME');
                //   $this->load->view('user_profile.php');
                $this->load->view('home_view.php');
                }
                else{
                  $this->session->set_flashdata('error_msg', 'Username and Password not matched');
                  $this->load->view("login.php");
          
                }
          
    }
    public function register(){
        $this->load->view('signup.php');
    }
    public function register_process(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
        $this->load->view('signup');
        } else {
        $data = array(
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
        );
        $result = $this->user_models->insert($data);
        if ($result == TRUE) {
        $data['message_display'] = 'Registration Successfully !';
        $this->load->view('login', $data);
        } else {
        $data['message_display'] = 'Username already exist!';
        $this->load->view('signup', $data);
        }
        }

       }

}
?>