<?php

class AdminController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index() {

        $this->load->view('admin/login');
    }
    public function dashboard (){

     $this->load->view('admin/dashboard');

    }
    public function allUsersList(){
        $data ['istifadeciler'] = $this->AdminModel->umumiIstifadeciler();
        $this->load->view('admin/allUsers',$data);

    }
    public function addUsers(){
        $this->load->view('admin/addUsers');

    }

    public function addUserAct(){
        $name         =  $this->input->post('name');
        $surname      =  $this->input->post('surname');
        $username     =  $this->input->post('username');
        $email        =  $this->input->post('email');
        $password     =  $this->input->post('password');
        $gender       =  $this->input->post('gender');

      if (!empty($name) && !empty($surname) && !empty($username) && !empty($email) && !empty($password) && !empty($gender)){
          $data = array(
              'name'     => $name,
              'surname'  => $surname,
              'username' => $username,
              'email'    => $email,
              'password' => md5($password),
              'gender'   => $gender,

          );

          $this->AdminModel->insertUser($data);

          redirect(base_url('allUsersList'));
      }else{

               $this->session->set_flashdata('err','bosluq buraxmayin!');

               redirect(base_url('addUsers'));
      }
    }

    public function delete($id){

        $this->db->where('id',$id)->delete('human');

        $this->session->set_flashdata('success','Tebrikler!istifadeci ugurla silindi');

        redirect(base_url('allUsersList'));

    }
    public function updateUser($id){
        $data['getSingleUser']=$this->AdminModel->getSingleUser($id);
        $this->load->view('admin/updateUserPg',$data);


    }
    public function updateUserAct($id){

        $name         =  $this->input->post('name');
        $surname      =  $this->input->post('surname');
        $username     =  $this->input->post('username');
        $email        =  $this->input->post('email');
        $gender       =  $this->input->post('gender');

        if (!empty($name) && !empty($surname) && !empty($username) && !empty($email)  && !empty($gender)){
            $data = array(
                'name'     => $name,
                'surname'  => $surname,
                'username' => $username,
                'email'    => $email,
                'gender'   => $gender,

            );

            $this->AdminModel->updateUser($id,$data);

            redirect(base_url('allUsersList'));
        }else{



            redirect(base_url('updateUser/'.$id));
            $this->session->set_flashdata('err','bosluq buraxmayin!');
        }
    }

}