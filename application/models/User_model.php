<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function getAllUsers(){
       return $this->db->get('user')->result_array();
    }

    public function getAllRoles(){
       return $this->db->get('role')->result_array();
    }

    public function getAllMenu(){
       return $this->db->get('menu')->result_array();
    }
    
    public function getAllSubMenu(){
       return $this->db->get('submenu')->result_array();
    }
}