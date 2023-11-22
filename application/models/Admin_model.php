<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

   // CREATE DATA
   public function insertData($table,$Data){
      return $this->db->insert($table,$Data);
   }
    
   // READ DATA
   public function getAllUsers(){
       return $this->db->get_where('user')->result_array();
   }

   public function getAllRoles(){
       return $this->db->get('user_role')->result_array();
   }

   public function getAllMenu(){
       return $this->db->get('user_menu')->result_array();
   }
    
   public function getAllSubMenu(){
       return $this->db->get('user_sub_menu')->result_array();
   }

   // UPDATE DATA
   public function updateData($table, $id, $Data){
      $this->db->where('id',$id);  
      $this->db->update($table, $Data);
  }

   // DELETE DATA
   public function deleteData($table, $id){
      $this->db->set('is_active',0);
      $this->db->where('id',$id);  
      $this->db->update($table);
  }
}