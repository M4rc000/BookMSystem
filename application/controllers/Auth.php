<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $data['title'] = 'Login Page';
        $data['background'] = base_url('assets') . '/images/auth/login.jpg';

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header',$data);
            $this->load->view('auth/index',$data);
            $this->load->view('templates/auth_footer');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                   $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('wrong_password','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Your password is wrong!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    echo "password is wrong";
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('wrong_username','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Your username has not been activated
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                echo "username is wrong";
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('wrong_username','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Your username has not been registered
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            echo "username haven't";
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[10]|regex_match[/^[a-zA-Z0-9_]+$/]|is_unique[user.username]',[
            'is_unique' => 'This username has already used!']);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Page';
            $data['background'] = base_url('assets') . '/images/auth/lockscreen-bg.jpg';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration',$data);
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email', true);                     
            $token = mt_rand(100000, 999999);
            $username = $this->input->post('username');

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'username' => htmlspecialchars($username),
                'email' => htmlspecialchars($email),
                'image' => 'default.webp',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_of_birth' => '',
                'place_of_birth' => '',
                'gender' => '',
                'role_id' => 1, 
                'is_active' => 0,
                'date_joined' => date('d-m-Y H:i:s'),
                'token' => $token,
                'date_created_token' => date('d-m-Y H:i:s')
            ];

            $this->db->insert('user', $data);
            $this->_sendEmail($token, 'verify', $username);

            $this->session->set_flashdata('registration', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Registration successful :), Please check your email to activate your account
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        
        $this->session->set_flashdata('logout','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        You have been logout!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('auth');
    }

    public function _sendEmail($token, $type, $username){
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'bmsystemofficiall@gmail.com',
            'smtp_pass' => 'depwctpfacpoobyo', 
            'smtp_port' => 465, 
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
        ];
                            
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('bmsystemofficiall@gmail.com', 'BMS');
        $this->email->to($this->input->post('email'));

        if($type == 'verify'){
            $this->email->subject('Account Activation');
            $this->email->message('Hi, ' . $username . '<br>' . 'The OTP code is: ' . $token);
            $this->email->send();
        }
        // else{} forgot password
    }

    public function verify(){
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){
            $user_token = $this->db->get_where('user', ['token' => $token])->row_array();
            if($user_token){

            }
            else{
                $this->session->set_flashdata('registration', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Account activation failed : <b>Wrong Token</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth');
            }
        }
        else{
            $this->session->set_flashdata('registration', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Account activation failed : <b>Wrong Email</b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth');
        }
    }
}
