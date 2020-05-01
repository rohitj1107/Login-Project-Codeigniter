<?php

/**
 *
 */
class Users extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('User_model');
  }

  public function login(){

    $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
    $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
    $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

    if ($this->form_validation->run()) {

      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $user_id = $this->User_model->login_user($username,$password);

      if ($user_id) {
          $user_data = array('user_id' => $user_id,'username'=>$username,'logged_in'=>true);

          $this->session->set_userdata($user_data);
          $this->session->set_flashdata('login_success','You are now logged in');
          // return redirect('Home/index');

          $data['main_view'] = "admin_view";
          $this->load->view('layouts/main',$data);


      } else {
        $this->session->set_flashdata('login_failed','Sorry You are not logged in');
        return redirect('Home/index');
      }

    } else {
      $data =  array('errors' => validation_errors());

      $this->session->set_flashdata($data);
      return redirect('Home');
    }

  }

  public function logout(){
    $this->session->sess_destroy();
    return redirect('Home/index');
  }

}


 ?>
