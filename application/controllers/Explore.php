<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	
	public function index()
	{
        $data['title'] = 'My Books';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        $this->load->view('explore/my_books', $data);
        $this->load->view('templates/footer');
	}
    
	public function explorations()
	{
        $data['title'] = 'Explorations';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        $this->load->view('explore/explorations',$data);
        $this->load->view('templates/footer');
	}

	public function collaborations()
	{
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
        $this->load->view('templates/navbar');   
        $this->load->view('templates/sidebar');   
        $this->load->view('explore/book_reader',$data);
        $this->load->view('templates/footer');
	}

}
