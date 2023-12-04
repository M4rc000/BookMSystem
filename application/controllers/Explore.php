<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->library('form_validation');
                $this->load->model('Explore_model','EModel');
        }
	
	public function index()
	{
                $url = $_SERVER['REQUEST_URI'];
                if ($url !== '/2023/BookMSystem/explore/') {
                        header("Location: " . base_url('explore/'));
                        exit();
                }
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['countries'] = $this->db->get('countries')->result_array();
                $data['menus'] = $this->uri->segment(1);
                $data['books'] = $this->EModel->getAllBooks();
                $data['title'] = 'My Books';
        
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('explore/my_books', $data);
                $this->load->view('templates/footer');
	}
    
	public function explorations()
	{
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['countries'] = $this->db->get('countries')->result_array();
                $data['menus'] = $this->uri->segment(1);
                $data['title'] = 'Explorations';
        
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('explore/explorations',$data);
                $this->load->view('templates/footer');
	}

	public function collaborations()
	{
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['countries'] = $this->db->get('countries')->result_array();
                $data['menus'] = $this->uri->segment(1);
                $data['title'] = 'Collaborations';

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('explore/collaborations',$data);
                $this->load->view('templates/footer');
	}

	public function read_book()
	{
                $data['title'] = 'Book Reader';

                $this->load->view('templates/header', $data);
                $this->load->view('explore/book_reader',$data);
                $this->load->view('templates/footer');
	}

}
