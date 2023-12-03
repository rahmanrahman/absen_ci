
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?php echo base_url().'C_pengguna/index';?>" class="navbar-brand">
        
        <span class="brand-text font-weight-light">Book Store</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo base_url().'C_pengguna/index';?>" class="nav-link">Home</a>
          </li>
          
          
                  <!-- End Level three -->

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-cash-register"></i>
            
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
             
              <!-- Message End -->
            </a>
            
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url().'C_pengguna/invoice';?>" class="dropdown-item dropdown-footer">Lihat bukti pembayaran</a>
          </div>
        </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header"><?php echo $this->session->userdata('nama');?></span>
            
            <div class="dropdown-divider"></div>
            <a href="<?php echo base_url('Login/pengguna')?>" class="dropdown-item dropdown-footer">logout</a>
          </div>
        </li>
        
      </ul>
    </div>
  </nav>