<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
                
        $this->load->library('form_validation');
        $this->load->helper('MY');
        $this->load->model('user_model');
    }

        // Register user
    public function register(){
        $data['page_title'] = 'Pendaftaran User';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 
'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 
'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 
'matches[password]');


        if($this->form_validation->run() === FALSE){

            $this->load->view('users/register', $data);

        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            // Tampilkan pesan
            $this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');

            redirect('user/login');
        }
    }

     // Log in user
    public function login(){
        $data['page_title'] = 'Log In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

         if ($this->form_validation->run() === TRUE){
            // Get username
            $username = $this->input->post('username');
            // Get & encrypt password
            $password = md5($this->input->post('password'));

            // Login user
            $user_id = $this->user_model->login($username, $password);

            if($user_id){
                // Buat session
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );
                 $this->session->set_userdata('user/login',$user_data);

                    if($user_data['username'] != 'admin'){
                        // Set message
                        $this->session->set_flashdata('user_loggedin', 'Welcome User');
                        redirect('welcome','refresh');
                    }
                    else  if($user_data['username'] == 'admin'){
                        $this->session->set_flashdata('user_loggedin', 'welcome admin');
                        redirect('welcome','refresh');
                    }else{
                        redirect('user/login','refresh');
                    }
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');

                redirect('user/login');
            }       
        }else{
            
            $this->load->view('templates/header');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        }
    }

     // Log user out
    public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user/login');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('welcome','refresh');
    }

}