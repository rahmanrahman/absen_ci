<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.plainadmin.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:19:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="<?php echo base_url('assets/dist')?>/images/sd.png"
      type="image/x-icon"
    />
    <title>SDN SALAMJAYA</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/LineIcons.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/quill/bubble.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/quill/snow.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/morris.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/datatable.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/loading-bar.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/main.css" />

  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="<?php echo base_url().'Admin/index';?>">
          <img src="<?php echo base_url('assets/dist')?>/images/sd.png" alt="logo" width=50 height=50 class="mb-10" /><br>
          <b>SDN SALAMJAYA</b>
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item">
            <a href="<?php echo base_url('Admin/index')?>">
              <span class="icon">
                <svg
                  width="18"
                  height="20"
                  viewBox="0 0 18 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16.3333 19.1666H1.66667C1.42355 19.1666 1.19039 19.07 1.01849 18.8981C0.846577 18.7262 0.75 18.493 0.75 18.2499V1.74992C0.75 1.5068 0.846577 1.27365 1.01849 1.10174C1.19039 0.929829 1.42355 0.833252 1.66667 0.833252H16.3333C16.5764 0.833252 16.8096 0.929829 16.9815 1.10174C17.1534 1.27365 17.25 1.5068 17.25 1.74992V18.2499C17.25 18.493 17.1534 18.7262 16.9815 18.8981C16.8096 19.07 16.5764 19.1666 16.3333 19.1666ZM15.4167 17.3333V2.66659H2.58333V17.3333H15.4167ZM5.33333 5.41658H12.6667V7.24992H5.33333V5.41658ZM5.33333 9.08325H12.6667V10.9166H5.33333V9.08325ZM5.33333 12.7499H9.91667V14.5833H5.33333V12.7499Z"
                  />
                </svg>
              </span>
              <span class="text">
                Dashboard
              </span>
            </a>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path
                    d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                  />
                </svg>
              </span>
              <span class="text">Akun</span>
            </a>
            <ul id="ddmenu_1" class="collapse dropdown-nav">
              <li>
                <a href="<?php echo base_url('Admin/Add_Guru')?>">
                  <span class="text">
                    Tambah Akun Guru
                  </span>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url('Admin/Akun_Guru')?>"> Akun Guru </a>
                <!-- <span class="pro-badge">Pro</span> -->
              </li>
              <li>
                <a href="<?php echo base_url('Admin/Add_Admin')?>">
                  <span class="text">
                    Tambah Akun Admin
                  </span>
                </a>
              </li>
              
              <li>
                <a href="<?php echo base_url('Admin/Akun_Admin')?>">
                  <span class="text">
                    Akun Admin
                  </span>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z"
                  />
                </svg>
              </span>
              <span class="text">Laporan</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a href="<?php echo base_url('Admin/Laporan_Absen')?>"> Laporan Absen </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>

    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-20">
                  <button
                    id="menu-toggle"
                    class="main-btn primary-btn btn-hover"
                  >
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>

              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">

                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button
                    class="dropdown-toggle bg-transparent border-0"
                    type="button"
                    id="profile"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <div class="profile-info">
                      <div class="info">
                        <h6><?php echo $this->session->userdata('nama');?></h6>
                        <div class="image">
                          <img
                            src="<?php echo base_url('assets/dist')?>/images/profile/profile-image.png"
                            alt=""
                          />
                          <span class="status"></span>
                        </div>
                      </div>
                    </div>
                    <i class="lni lni-chevron-down"></i>
                  </button>
                  <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="profile"
                  >
                    
                    <li>
                      <a href="<?php echo base_url('Login/pengguna')?>"> <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->