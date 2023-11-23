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