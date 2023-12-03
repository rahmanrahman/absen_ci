<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>


      <!-- ========== section start ========== -->
      <section>
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title d-flex align-items-center flex-wrap mb-30">
                  <h2 class="mr-40">Dashboard</h2> 
                  
                </div>
              </div>
              <!-- end col -->

              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon purple">
                  <i class="lni lni-checkmark-circle"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Akun Guru</h6>
                  <h3 class="text-bold mb-10"><?php echo $guru?></h3>

                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon success">
                  <i class="lni lni-circle-minus"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Akun Admin</h6>
                  <h3 class="text-bold mb-10"><?php echo $admin?></h3>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            
              <!-- End Icon Cart -->
            </div>

        </div>
        <div class="row">
              <div class="col-lg-7">
                <div class="card-style mb-30">
                  <div class="title d-flex justify-content-between">
                    <div class="left">
                      <h6 class="text-medium mb-20">Total Absen per NIP</h6>
                    </div>
                  </div>
                  <!-- End Title -->
                  <div class="chart">
                    <canvas
                      id="Chart1"
                      style="width: 100%; height: 400px"
                    ></canvas>
                  </div>
                  <!-- End Chart -->
                </div>
              </div>
      </div>



      </section>
      <!-- ========== section end ========== -->









