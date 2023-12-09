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
            $this->session->set_flashdata('not_active_username','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Your username has not been activated
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
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
                'email' => $email,
                'image' => 'default.webp',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'date_of_birth' => '',
                'place_of_birth' => '',
                'gender' => '',
                'role_id' => 2, 
                'is_active' => 0,
                'date_joined' => date('d-m-Y H:i:s'),
                'token' => $token,
                'date_created_token' => date('d-m-Y H:i:s')
            ];

            $this->db->insert('user', $data);
            $this->_sendEmail($token, 'verify', $username, $email);

            $this->session->set_userdata('verification_email', $email);
            $this->session->set_flashdata('registration', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Please check the otp code that sent to your email to activate your account
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            $_SESSION['message'] = 'security';
            redirect('auth/verification');
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

    public function verification()
    {   
        $data['title'] = 'Verification Page';
        $data['background'] = base_url('assets') . '/images/auth/lockscreen-bg.jpg';

        if (!$this->input->post()) {
            if (!$_SESSION['message']) {
                redirect('auth/registration'); 
            } // Handle user change url
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/verification', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $token = $this->input->post('token');
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['token' => $token, 'email' => $email])->num_rows();

            if($user > 0){
                $this->session->set_flashdata('registration','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Registration successfull :), Let\'s Login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');

                $this->db->where('email', $email);
                $this->db->update('user', ['is_active' => 1]);
                redirect('auth');
            }
            else{
                $_SESSION['message'] = 'security';
                $this->session->set_flashdata('otp_notfound','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                The OTP code is not valid
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/verification');
            }
        }
	}

    public function _sendEmail($token, $type, $username, $email){
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

        $email_template = $this->load->view('templates/email', ['token' => $token, 'username' => $username], true);
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('bmsystemofficiall@gmail.com', 'BMS');
        $this->email->to($email);

        if($type == 'verify'){
            $this->email->subject('Account Activation');
            $this->email->message($email_template);
            $this->email->send();
        }
        else{
            $this->email->subject('Password Recovery');
            $this->email->message($email_template);
            $this->email->send();
        } 
    }

    public function forgotpassword(){
        $data['title'] = 'Forgot Password';
        $data['background'] = base_url('assets') . '/images/auth/lockscreen-bg.jpg';

        if (!$this->input->post()) {
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/forgotpassword', $data);
            $this->load->view('templates/auth_footer');
        }
        else{
            $key = $this->input->post('key');
            $query = $this->db->get_where('user', array('email' => $key));
            $result_count = $query->num_rows();
            
            if ($result_count > 0) {  
                $token = mt_rand(100000, 999999);
                $this->db->or_where('email', $key);
                $result = $this->db->update('user', array('token' => $token));

                if($result == TRUE){
                    $query = $this->db->get_where('user', array('email' => $key))->row_array();
                    $username = $query['username'];
                    $email = $query['email'];
                    $this->_sendEmail($token, 'forgot', $username, $email);

                    $this->session->set_flashdata('success_send', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    The OTP code is already send to your email
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    $this->session->set_userdata('email_', $email);
                    header("Location: " . base_url('auth/forgotpassword'));
                }
                else{
                    $this->session->set_flashdata('error', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Failed to send email verification
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                    header("Location: " . base_url('auth/forgotpassword'));
                }
            }
            else{
                $this->session->set_flashdata('email_notfound', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Email not found
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                header("Location: " . base_url('auth/forgotpassword'));
            } 
        }
    }

    public function newpassword(){
        
        $data['title'] = 'Change Password';
        $data['background'] = base_url('assets') . '/images/auth/lockscreen-bg.jpg';
        
        $token = $this->input->post('token');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $result = $this->db->get_where('user', array('token' => $token))->num_rows();
        
        if($result >= 1) {
            if(!$this->input->post('token')) {
                redirect('auth/forgotpassword');
            } // Handle if user try access by typing manually in url
            $user = $this->db->get_where('user', array('email' => $email))->row_array();
            $data['userid'] = $user['id'];
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/newpassword', $data);
            $this->load->view('templates/auth_footer');
        }
        elseif ($password || $password != NULL){
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $userid = $this->input->post('userid');

            $this->db->where('id', $userid);
            $this->db->update('user', array('password' => $password));
            $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Password has been changed
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            header("Location: " . base_url('auth'));
        }
        else{
            if(!$this->input->post('token')) {
                redirect('auth/forgotpassword');
            } // Handle if user try access by typing manually in url
            $this->session->set_flashdata('otp_notfound', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    The OTP code not valid
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
            header("Location: ". base_url('auth/forgotpassword'));
        }
    }
}
