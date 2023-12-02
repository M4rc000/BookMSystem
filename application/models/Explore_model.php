<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Explore_model extends CI_Model {

//    // CREATE DATA
//    public function insertData($table,$Data){
//       return $this->db->insert($table,$Data);
//    }
    
   // READ DATA
   public function getAllBooks(){
       return $this->db->get_where('books')->result_array();
   }
}