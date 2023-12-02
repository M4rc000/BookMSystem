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
<<<<<<< HEAD
                $data['title'] = 'My Books';
                $data['books'] = $this->EModel->getAllBooks();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('explore/my_books', $data);
                $this->load->view('templates/footer');
=======
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['countries'] = $this->db->get('countries')->result_array();
                $data['menus'] = $this->uri->segment(1);
        $data['title'] = 'My Books';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        $this->load->view('explore/my_books', $data);
        $this->load->view('templates/footer');
>>>>>>> 2a701f2ea57e624a69b494aebbdae5146a70aff7
	}
    
	public function explorations()
	{
<<<<<<< HEAD
                $data['title'] = 'Explorations';
                
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');   
                $this->load->view('templates/sidebar');   
                $this->load->view('explore/explorations',$data);
                $this->load->view('templates/footer');
=======
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['countries'] = $this->db->get('countries')->result_array();
                $data['menus'] = $this->uri->segment(1);
        $data['title'] = 'Explorations';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        $this->load->view('explore/explorations',$data);
        $this->load->view('templates/footer');
>>>>>>> 2a701f2ea57e624a69b494aebbdae5146a70aff7
	}

	public function collaborations()
	{
<<<<<<< HEAD
                $data['title'] = 'Collaborations';
=======
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                $data['countries'] = $this->db->get('countries')->result_array();
                $data['menus'] = $this->uri->segment(1);
        $data['title'] = 'Collaborations';
>>>>>>> 2a701f2ea57e624a69b494aebbdae5146a70aff7

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
