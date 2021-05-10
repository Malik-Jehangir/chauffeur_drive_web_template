<?php

//if (!defined('BASEPATH'))
//    exit('No direct script access allowed');

class Adminauth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('admins_model');
    }

    function login() {
        $admin_id = $this->session->userdata('admin_id');
        if (!$admin_id) {
            if ($this->input->post('email') && $this->input->post('password')) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $verify_login = $this->verify_login($email, $password);
                if ($verify_login) {
                    $this->session->set_userdata("admin_id", $verify_login['u_id']);
                    $this->session->set_userdata("admin_name", $verify_login['username']);
                    $this->session->set_userdata("admin_email", $verify_login['user_email']);
                    redirect(base_url('admin/dashboard'));
                } else{
                    $this->session->set_flashdata('errormessage', 'Incorrect email or password');
                    redirect(base_url('adminauth/login'));
                }
            } else {
                $this->session->set_flashdata('errormessage', 'Incorrect email or password');
                $this->load->view('admin/login');
            }
        } else {
            redirect(base_url('admin/dashboard'));
        }
    }


    function verify_login($email, $password) {
        // $password = md5($password);
        $this->db->select('*')->from('agencies_login')->where('user_email', $email)->where('password', $password);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            print_r($query);
            $result = $query->result_array();
            return $result[0];
        } else
            return False;
    }



}

