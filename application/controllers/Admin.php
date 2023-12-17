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
        $adminUrl = '/admin';
        if (substr($url, -strlen($adminUrl)) === $adminUrl) {
            header('Location: ' . rtrim($url, '/') . '/');
            exit();
        }
        
        $data['title'] = 'Dashboard';
        $data['menu'] = $this->uri->segment(1);
        $data['user'] = $this->AModel->getAllUsers();
        $data['userDataChart'] = $this->AModel->getUsers();
        $data['booksDataChart'] = $this->AModel->getBooks();

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
            $this->session->set_flashdata('SUCCESS','<div class="alert alert-success alert-dismissible fade show" role="alert">
                New User successfully added
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
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
            $this->session->set_flashdata('EDIT','<div class="alert alert-success alert-dismissible fade show" role="alert">
                User successfully updated
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
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
                $this->session->set_flashdata('DELETED','<div class="alert alert-success alert-dismissible fade show" role="alert">
                User successfully deleted
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                header("Location: " . base_url('admin/manage_user'));
                
            } else {
                $this->session->set_flashdata('ERROR','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                ERROR
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                header("Location: " . base_url('admin/manage_user'));
            }
        }
        

        // MANAGE USER ROLE
        public function addUserRole() {
            $id = $this->input->post('role_id');
            $role = $this->input->post('role');

            $Data = array(
                'id' => $id,
                'role' => $role,
                'crtdt' => date('d-m-Y h:i'),
                'crtby' => $this->input->post('crtby')
            );

            if($this->db->get_where('user_role', array('role' => $role, 'id' => $id))->num_rows() > 0){
                $this->session->set_flashdata('DUPLICATES','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Role is duplicates
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            }
            else{
                $this->session->set_flashdata('SUCCESS','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Role successfully added
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                $this->AModel->insertData('user_role', $Data);
            }
            redirect('admin/manage_role');
        }

        public function editUserRole() {
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

        public function deleteUserRole() {
            $this->load->model('Admin_model','AModel');
        
            $id = $this->input->post('id');
            $this->AModel->deleteData('user_role', $id);

            $this->session->set_flashdata('DELETED','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Role successfully deleted
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            header("Location: " . base_url('admin/manage_role'));       
        }

        public function roleAccess($role_id)
        {
            $this->load->helper('bms_helper');
            $data['title'] = 'Role Access';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            
            $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

            // $this->db->where('id !=', 1);
            $data['menu'] = $this->db->get('user_menu')->result_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);   
            $this->load->view('templates/sidebar');   
            $this->load->view('admin/role-access',$data);
            $this->load->view('templates/footer');

            $this->session->set_flashdata('role_access','<div class="alert alert-success alert-dismissible fade show" role="alert">
            The access has been changed!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
        }

        public function changeAccess()
        {
            $menu_id = $this->input->post('menuId');
            $role_id = $this->input->post('roleId');

            $data = [
                'role_id' => $role_id,
                'menu_id' => $menu_id
            ];

            $result = $this->db->get_where('user_access_menu', $data);

            if ($result->num_rows() < 1) {
                $this->db->insert('user_access_menu', $data);
            } else {
                $this->db->delete('user_access_menu', $data);
            }
        }


        // MANAGE MENU
        public function addMenu() {

            $Data = array(
                'menu' => $this->input->post('name'),
                'crtdt' => date('d-m-Y H:i'),
                'crtby' => $this->input->post('user'),
                'upddt' => date('d-m-Y H:i'),
                'updby' => $this->input->post('user')
            );

            $this->AModel->insertData('user_menu', $Data);
            $this->session->set_flashdata('SUCCESS','<div class="alert alert-success alert-dismissible fade show" role="alert">
                New Menu successfully added
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/manage_menu');
        }

        public function editMenu() {
            $id = $this->input->post('id');
            $Data = array(
                'menu' => $this->input->post('name'),
                'upddt' => date('d-m-Y H:i'),
                'updby' => $this->input->post('user')
            );

            $this->AModel->updateData('user_menu', $id, $Data);
            $this->session->set_flashdata('EDIT','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Menu successfully updated
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('admin/manage_menu');
        }

        public function deleteMenu() {
            $this->load->model('Admin_model','AModel');
        
            $id = $this->input->post('id');
        
            $this->AModel->deleteData('user_menu', $id);
            $this->session->set_flashdata('DELETED','<div class="alert alert-success alert-dismissible fade show" role="alert">
            User successfully deleted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            header("Location: " . base_url('admin/manage_menu'));
        }
}
