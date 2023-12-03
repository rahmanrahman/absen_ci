  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <h2>BOOKSTORE</h2>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/dist')?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('nama');?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url().'Admin/akun_pengguna';?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              Akun Pengguna
            </a>
          </li>
            
          <li class="nav-item">
            <a href="<?php echo base_url().'Admin/buku';?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              Buku
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'Admin/data_pembayaran';?>" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              Data Pembayaran
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url().'Login/pengguna';?>" class="nav-link">
              <i class="nav-icon fa fa-share"></i>
              Logout
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>