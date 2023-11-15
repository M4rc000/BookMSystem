<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->library('form_validation');
        }
	
	public function index()
	{
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['title'] = 'Dashboard';
                
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar', $data);   
                $this->load->view('admin/dashboard', $data);
                $this->load->view('templates/footer');
	}
    
	public function manage_user()
	{
                $data['title'] = 'Manage User';

                $this->load->model('Admin_model','AModel');
                
                $data['user'] = $this->AModel->getAllUsers();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('admin/manage_user',$data);
                $this->load->view('templates/footer');
	}

	public function manage_role()
	{
                $data['title'] = 'Manage User Role';

                $this->load->model('Admin_model','AModel');
                
                $data['roles'] = $this->AModel->getAllRoles();
                $data['menu'] = $this->AModel->getAllMenu();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('admin/manage_user_role',$data);
                $this->load->view('templates/footer');
	}

	public function manage_menu()
	{
                $data['title'] = 'Manage Menu';

                $this->load->model('Admin_model','AModel');
                
                $data['menu'] = $this->AModel->getAllMenu();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('admin/manage_menu',$data);
                $this->load->view('templates/footer');
	}

	public function manage_sub_menu()
	{
                $data['title'] = 'Manage Sub-Menu';

                $this->load->model('Admin_model','AModel');
                
                $data['submenu'] = $this->AModel->getAllSubMenu();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('admin/manage_sub_menu',$data);
                $this->load->view('templates/footer');
	}

	public function manage_books()
	{
                $data['title'] = 'Manage Books';

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('admin/manage_books',$data);
                $this->load->view('templates/footer');
	}

}
