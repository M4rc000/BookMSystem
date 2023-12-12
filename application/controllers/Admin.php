<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Admin_model','AModel');
    }
	
	public function index()
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $url = $_SERVER['REQUEST_URI'];
        if ($url !== '/2023/BookMSystem/admin/') {
            header("Location: " . base_url('admin/'));
            exit();
        }
            
        $data['title'] = 'Dashboard';
        $data['menu'] = $this->uri->segment(1);
        $data['user'] = $this->AModel->getAllUsers();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);   
        $this->load->view('templates/sidebar', $data);   
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
	}
    
    public function manage_user() {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->uri->segment(1);

        $data['title'] = 'Manage User';
        $data['user'] = $this->AModel->getAllUsers();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/manage_user', $data);
        $this->load->view('templates/footer');
    }

	public function manage_role()
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->uri->segment(1);

        $data['title'] = 'Manage User Role';

        $this->load->model('Admin_model','AModel');
        
        $data['roles'] = $this->AModel->getAllRoles();
        $data['menu'] = $this->AModel->getAllMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);   
        $this->load->view('templates/sidebar',$data);   
        $this->load->view('admin/manage_user_role',$data);
        $this->load->view('templates/footer');
	}

	public function manage_menu()
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->uri->segment(1);
        $data['title'] = 'Manage Menu';
        $this->load->model('Admin_model','AModel');
        
        $data['menu'] = $this->AModel->getAllMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);   
        $this->load->view('templates/sidebar');   
        $this->load->view('admin/manage_menu',$data);
        $this->load->view('templates/footer');
	}

	public function manage_sub_menu()
	{
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->uri->segment(1);
        $data['title'] = 'Manage Sub-Menu';

        $this->load->model('Admin_model','AModel');
        
        $data['submenu'] = $this->AModel->getAllSubMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);   
        $this->load->view('templates/sidebar');   
        $this->load->view('admin/manage_sub_menu',$data);
        $this->load->view('templates/footer');
	}

	public function manage_books()
	{
        $this->load->model('Admin_model','AModel');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->uri->segment(1);
        $data['title'] = 'Manage Books';
        $data['books'] = $this->AModel->getAllBooks();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);   
        $this->load->view('templates/sidebar');   
        $this->load->view('admin/manage_books',$data);
        $this->load->view('templates/footer');
	}




    // ACTION
        // MANAGE USER
        public function addUser() {
            $upload_image = $_FILES['img']['name'];
                                
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size']      = '5048';
                $config['upload_path']   = './assets/images/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('img')) {  
                    $old_image = $data['user']['image'];  
                    if ($old_image != 'default.webp') {
                        unlink(FCPATH . './assets/images/profile/' . $old_image);
                    }                
                    $new_image = $this->upload->data('file_name');
                    $data['img'] = $new_image;                  
                } else {
                    echo $this->upload->display_errors();
                }            
            }

            if(empty($new_image) ? $new_image = 'default.webp' : $new_image);

            $Data = array(
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'image' => $new_image,
                'is_active' => $this->input->post('aktif'),
                'token' => base64_encode(random_bytes(32)),
                'date_joined' => date('d-m-Y H:i')
            );

            $this->AModel->insertData('user', $Data);
            $_SESSION['message'] = 'SUCCESS';
            redirect('admin/manage_user');
        }

        public function editUser() {
            $id = $this->input->post('id');
            $upload_image = $_FILES['img']['name'];
                
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size']      = '5048';
                $config['upload_path']   = './assets/images/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('img')) {  
                    $old_image = $data['user']['image'];  
                    if ($old_image != 'default.webp') {
                        unlink(FCPATH . './assets/images/profile/' . $old_image);
                    }                
                    $new_image = $this->upload->data('file_name');
                    $data['img'] = $new_image;   

                    $Data = array(
                        'name' => $this->input->post('name'),
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password'),
                        'role_id' => $this->input->post('role'),
                        'is_active' => $this->input->post('aktif'),
                        'image' => $new_image
                    );               
                } else {
                    echo $this->upload->display_errors();
                }            
            }
            else{
                $Data = array(
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'role_id' => $this->input->post('role'),
                    'is_active' => $this->input->post('aktif')
                );
            }
                

            $this->AModel->updateData('user', $id, $Data);
            $_SESSION['message'] = 'edit';
            redirect('admin/manage_user'); 
        }

        public function deleteUser() {
            $this->load->model('Admin_model','AModel');
        
            $id = $this->input->post('id');
            $action = $this->input->post('action');
        
            if($action == 'manage_user'){
                $this->AModel->deleteData('user', $id);
                $status = 1;
            }

            if ($status == 1) {
                $_SESSION['message'] = 'delete';
                header("Location: " . base_url('admin/manage_user'));
                
            } else {
                $_SESSION['message'] = 'error';
                header("Location: " . base_url('admin/manage_user'));
            }
        }
    
}
