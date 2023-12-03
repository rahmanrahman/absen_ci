<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.plainadmin.com/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:19:27 GMT -->
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
    <link rel="stylesheet" href="<?php echo base_url('assets/dist')?>/css/main.css" />
  </head>
  <body>

     
          <div class="row g-0 auth-row">
            <div class="col-lg-6">
              <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                  <div class="title text-center">
                   
                    <img src="<?php echo base_url('assets/dist')?>/images/sd.png" width=75 height=75><br><br>
                     <h2 class="text-primary mb-10"><b>SDN SALAMJAYA</b></h2>
                  </div>
                  <div class="cover-image">
                    <img src="<?php echo base_url('assets/dist')?>/images/auth/signin-image.svg" alt="" />
                  </div>
                  <div class="shape-image">
                    <img src="<?php echo base_url('assets/dist')?>/images/auth/shape.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signin-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">Sign In Guru</h6>
                  
                  <form action="<?php echo base_url('Login/validasi_pengguna'); ?>" method="post">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Nama</label>
                          <input type="text" placeholder="Nama" name="nama" />
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Password</label>
                          <input type="password" placeholder="Password" name="password" />
                        </div>
                      </div>
                      <!-- end col -->

                      <div class="col-12">
                        <div
                          class="button-group d-flex justify-content-center flex-wrap"
                        >
                          <button
                            class="main-btn primary-btn btn-hover w-100 text-center" type="submit"
                          >
                            Sign In
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- end row -->
                  </form>

                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
      </section>
      <!-- ========== signin-section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a
                    href="https://plainadmin.com/"
                    rel="nofollow"
                    target="_blank"
                  >
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="terms d-flex justify-content-center justify-content-md-end"
              >
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ============ Theme Option Start ============= -->

    <!-- ============ Theme Option End ============= -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/datatable.js"></script>
    <script src="assets/js/Sortable.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>

<!-- Mirrored from demo.plainadmin.com/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Aug 2022 04:19:28 GMT -->
</html>
