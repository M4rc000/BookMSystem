<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
                $data['title'] = 'Dashboard';
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar',$data);   
                $this->load->view('admin/index', $data);
                $this->load->view('templates/footer');
	}
    
        public function manage_user() {
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                if($this->input->post()){
                        if($this->input->post('add_user')) {
                                $upload_image = $_FILES['img']['name'];
                            
                                if ($upload_image) {
                                    $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                                    $config['max_size']      = '2048';
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
                            
                                $Data = array(
                                    'name' => $this->input->post('name'),
                                    'username' => $this->input->post('username'),
                                    'email' => $this->input->post('email'),
                                    'password' => $this->input->post('password'),
                                    'role_id' => $this->input->post('role'),
                                    'image' => $new_image,
                                    'is_active' => $this->input->post('aktif')
                                );
                            
                                var_dump($Data);
                                $this->AModel->insertData('user', $Data);
                                $_SESSION['message'] = 'SUCCESS';
                                redirect('admin/manage_user');
                        }
        
                        elseif($this->input->post('edit_user')){
                                $id = $this->input->post('id');
                                $upload_image = $_FILES['img']['name'];
                            
                                if ($upload_image) {
                                    $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                                    $config['max_size']      = '2048';
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
                            
                                $Data = array(
                                    'name' => $this->input->post('name'),
                                    'username' => $this->input->post('username'),
                                    'email' => $this->input->post('email'),
                                    'password' => $this->input->post('password'),
                                    'role_id' => $this->input->post('role'),
                                    'image' => $new_image,
                                    'is_active' => $this->input->post('aktif')
                                );
        
                                $table = 'user';
                                $this->AModel->updateData($table, $id, $Data);
                                $_SESSION['message'] = 'SUCCESS';
                                redirect('admin/manage_user'); 
                        }
        
                        elseif($this->input->post('delete_user')){
                                $id = $_POST['id'];
                                $is_active = 0;
                                $table = 'user';
                                deleteData($table, $id, $is_active);
                                redirect('admin/manage_user');
                        }
                }

                else {
                    $data['title'] = 'Manage User';
                    $data['user'] = $this->AModel->getAllUsers();
        
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/navbar');
                    $this->load->view('templates/sidebar');
                    $this->load->view('admin/manage_user', $data);
                    $this->load->view('templates/footer');
                }
        }

	public function manage_role()
	{
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
