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

   public function getUsers() {
        $months = range(1, 12);
        $year = date('Y');
        foreach ($months as $month) {
            $start_date = date('Y-m-01', strtotime("$year-$month-01"));
            $end_date = date('Y-m-t', strtotime("$year-$month-01"));

            $this->db->where("date_joined BETWEEN '$start_date' AND '$end_date'");
            $count = $this->db->count_all_results('user');    
            $result[] = $count;
        }
        return $result;
   }

   public function getBooks() {
        $months = range(1, 12);
        $year = date('Y');
        foreach ($months as $month) {
            $start_date = date('Y-m-01', strtotime("$year-$month-01"));
            $end_date = date('Y-m-t', strtotime("$year-$month-01"));

            $this->db->where("crtdt BETWEEN '$start_date' AND '$end_date'");
            $count = $this->db->count_all_results('books');    
            $result[] = $count;
        }
        return $result;
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

   public function getAllBooks(){
       return $this->db->get('books')->result_array();
    }

   // UPDATE DATA
   public function updateData($table, $id, $Data){
      $this->db->where('id',$id);  
      $this->db->update($table, $Data);
    } 

   // DELETE DATA
   public function deleteData($table, $id){
        $this->db->where('id',$id);
        $this->db->delete($table);
    }

  // MESSAGE
    public function displayAlert() {
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            $alertClass = '';
            $alertText = '';

            switch ($message) {
                case 'delete':
                    $alertClass = 'alert-success';
                    $alertText = 'The role has been deleted!';
                    break;
                case 'error':
                    $alertClass = 'alert-danger';
                    $alertText = 'Action has failed';
                    break;
                // Add more cases as needed

                default:
                    // Default case if 'message' doesn't match any expected values
                    return;
            }

            ?>
            <div class="alert <?php echo $alertClass; ?> alert-dismissible fade show" role="alert">
                <?php echo $alertText; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php unset($_SESSION['message']); ?>
            </div>
            <?php
        }
    }
}