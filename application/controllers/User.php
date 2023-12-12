<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }
	
	public function index()
	{
        $url = $_SERVER['REQUEST_URI'];
        if ($url !== '/2023/BookMSystem/user/') {
            header("Location: " . base_url('user/'));
            exit();
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['countries'] = $this->db->get('countries')->result_array();
        $data['menus'] = $this->uri->segment(1);
        
        $data['title'] = 'My Profile';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
	}
	
	public function change_password()
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Change Password';
        $data['countries'] = $this->db->get('countries')->result_array();
        $data['menus'] = $this->uri->segment(1); 
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        $this->load->view('user/change_password', $data);
        $this->load->view('templates/footer');
	}
}
