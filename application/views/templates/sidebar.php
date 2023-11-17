<div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!-- QUERY MENU -->
          <?php 
             $role_id = $this->session->userdata('role_id');
             $queryMenu = "SELECT `user_menu`.`id`, `menu`
                             FROM `user_menu` JOIN `user_access_menu`
                               ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                         ORDER BY `user_access_menu`.`menu_id` ASC
                         ";
             $menu = $this->db->query($queryMenu)->result_array();
          ?>

          <!-- LOOPING MENU -->
          <?php foreach ($menu as $m) : ?>
            <hr id="sidebar-divider">
            <span class="text-secondary menu text-center" id="menu" style="font-size: 12px !important; font-weight: bold;">
              <?= $m['menu']; ?>
            </span>

          
            <!-- SIAPKAN SUB-MENU SESUAI MENU -->
            <?php 
              $menuId = $m['id'];
              $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu` 
                                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                  AND `user_sub_menu`.`is_active` = 1
                          ";
              $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>
               
              
              <?php 
                foreach ($subMenu as $sm) : ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                          <i class="<?= $sm['icon']; ?>"></i>
                          <span class="menu-title">&nbsp;&nbsp;&nbsp;<?= $sm['title']; ?></span>
                      </a>
                  </li>
                  <?php $menuId+=1;?>
              <?php endforeach; ?>
          <?php endforeach; ?>

          <hr id="sidebar-divider">

          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#DeleteConfirmModal">
              <i class="ti-arrow-circle-right"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">


<!-- DELETE CONFIRM MODAL-->
<div class="modal fade" id="DeleteConfirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: -5rem">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pb-0 mb-0" id="exampleModalLabel">Confirm to logout ?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="<?= base_url('auth/logout'); ?>"><button type="button" class="btn btn-primary">Confirm</button></a>
      </div>
    </div>
  </div>
</div>