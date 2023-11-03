<div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!-- QUERY MENU -->
          <?php 
            $role_id = 1;
            $queryMenu = "SELECT `menu`.`menu_id`, `menu_name`
                            FROM `menu` JOIN `role_access_menu`
                              ON `menu`.`menu_id` = `role_access_menu`.`menu_id`
                           WHERE `role_access_menu`.`role_id` = $role_id
                        ORDER BY `role_access_menu`.`menu_id` ASC
                        ";
            $menu = $this->db->query($queryMenu)->result_array();
          ?>

          <!-- LOOPING MENU -->
          <?php foreach ($menu as $m) : ?>
            <hr id="sidebar-divider">
            <span class="text-secondary menu text-center" id="menu" style="font-size: 12px !important; font-weight: bold;">
              <?= $m['menu_name']; ?>
            </span>

          
            <!-- SIAPKAN SUB-MENU SESUAI MENU -->
            <?php 
              // $menuId = 1;
              $menuId = $m['menu_id'];
              $querySubMenu = "SELECT *
                                FROM `submenu` JOIN `menu` 
                                  ON `submenu`.`menu_id` = `menu`.`menu_id`
                                WHERE `submenu`.`menu_id` = $menuId
                                  AND `submenu`.`is_active` = 1
                          ";
              $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($subMenu as $sm) : ?>
            
              <?php if ($title === $sm['submenu_name']) : ?>
                <li class="nav-item active">
                    <?php else : ?>
                <li class="nav-item">
                  <?php endif; ?>
                    <a class="nav-link" href="<?= base_url($sm['submenu_url']); ?>">
                        <i class="<?= $sm['submenu_icon']; ?>"></i>
                        <span class="menu-title">&nbsp;&nbsp;&nbsp;<?= $sm['submenu_name']; ?></span></a>
                </li>
                <?php $menuId+=1;?>
            <?php endforeach; ?>
          <?php endforeach; ?>


          <hr id="sidebar-divider">

          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ti-arrow-circle-right"></i>
              <span class="menu-title">&nbsp;&nbsp;&nbsp;Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
