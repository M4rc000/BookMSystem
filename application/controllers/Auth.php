<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        // $this->load->view('user/profile'); // Ganti disini aja (comment or uncomment)
        // $this->load->view('admin/dashboard');
        $this->load->view('admin/manage_books');
        $this->load->view('templates/footer');

    }

	// public function index()
	// {
	// 	if ($this->session->userdata('email')) {
    //         redirect('user');
    //     }

    //     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    //     $this->form_validation->set_rules('password', 'Password', 'trim|required');

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Login Page';
    //         $data['background'] = base_url('assets') . '/images/auth/lockscreen-bg.jpg';
    //         $this->load->view('templates/auth_header', $data);
    //         $this->load->view('auth/login',$data);
    //         $this->load->view('templates/auth_footer');
    //     } else {
    //         // validasinya success
    //         $this->_login();
    //     }
	// }

    // private function _login()
    // {
    //     $email = $this->input->post('email');
    //     $password = $this->input->post('password');

    //     $user = $this->db->get_where('user', ['email' => $email])->row_array();

    //     // jika usernya ada
    //     if ($user) {
    //         // jika usernya aktif
    //         if ($user['is_active'] == 1) {
    //             // cek password
    //             if (password_verify($password, $user['password'])) {
    //                 $data = [
    //                     'email' => $user['email'],
    //                     'role_id' => $user['role_id']
    //                 ];
    //                $this->session->set_userdata($data);
    //                 if ($user['role_id'] == 1) {
    //                     redirect('admin');
    //                 } else {
    //                     redirect('user');
    //                 }
    //             } else {
    //                 $this->session->set_flashdata('wrong_login','<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //                 Your password is wrong!
    //                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //                 <span aria-hidden="true">&times;</span>
    //                 </button>
    //                 </div>');
    //                 redirect('auth');
    //             }
    //         } else {
    //             redirect('auth');
    //         }
    //     } else {
    //         $this->session->set_flashdata('wrong_email','<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //         Your email has not been registered
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //         </button>
    //         </div>');
    //         redirect('auth');
    //     }
    // }

    // public function registration()
    // {
    //     if ($this->session->userdata('email')) {
    //         redirect('user');
    //     }

    //     $this->form_validation->set_rules('name', 'Name', 'required|trim');
    //     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
    //         'is_unique' => 'This email has already registered!'
    //     ]);
    //     $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
    //         'min_length' => 'Password too short!'
    //     ]);

    //     if ($this->form_validation->run() == false) {
    //         $data['title'] = 'Register Page';
    //         $data['background'] = base_url('assets') . '/images/auth/lockscreen-bg.jpg';
    //         $this->load->view('templates/auth_header', $data);
    //         $this->load->view('auth/registration',$data);
    //         $this->load->view('templates/auth_footer');
    //     } else {
    //         $email = $this->input->post('email', true);
    //         $data = [
    //             'name' => htmlspecialchars($this->input->post('name', true)),
    //             'username' => htmlspecialchars($this->input->post('username', true)),
    //             'email' => htmlspecialchars($email),
    //             'image' => 'default.jpg',
    //             'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
    //             'date_of_birth' => '',
    //             'place_of_birth' => '',
    //             'gender' => '',
    //             'role_id' => 1,
    //             'is_active' => 1,
    //             'date_joined' => date('d-m-Y H:i:s')
    //         ];

    //         $this->db->insert('user', $data);
    //         // $this->_sendemail();
    //         $this->session->set_flashdata('registration','<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //         Registration successfull :), Let\'s Login
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //         </button>
    //         </div>');
    //     //   redirect('auth');
    //     }
    // }

    // public function forgotpassword(){
    //     $data['title'] = 'Forgot Password Page';
    //     $data['background'] = base_url('assets') . '/images/auth/lockscreen-bg.jpg';
    //     $this->load->view('templates/auth_header', $data);
    //     $this->load->view('auth/forgotpassword');
    //     $this->load->view('templates/auth_footer');
    // }

    // private function _sendemail(){
    //     // $config = Array(
    //     //     'protocol' => 'smtp',
    //     //     'smtp_host' => 'ssl://smtp.googlemail.com',
    //     //     'smtp_user' => 'bmsystemofficiall@gmail.com',
    //     //     'smtp_pass' => 'bmsystemofficial03111990',
    //     //     'smtp_port' => 465,
    //     //     'mailtype' => 'html',
    //     //     'starttls'  => true,
    //     //     'newline'   => "\r\n"
    //     // );
        
    //     $this->load->library('email');
    //     $this->email->from('bmsofficiall@gmail.com', 'BMS Official');
    //     $this->email->to('marcoantoniomadgaskar@gmail.com');
    //     $this->email->subject('Testing');
    //     $this->email->message('Hello World');
    //     $this->email->send();

    //     if ($this->email->send()) {
    //         $_SESSION['message_email'] = 'berhasil';
    //         return true; 
    //     } else {
    //         $this->email->print_debugger();
    //         die;
    //     }        
    // }
}
