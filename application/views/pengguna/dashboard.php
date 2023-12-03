<?php //Loading navbar.php
  $this->load->view('pengguna/templates/head');
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
                  <h6 class="mb-10">Absen Masuk</h6>
                  <h3 class="text-bold mb-10"><?php echo $msk?></h3>


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
                  <h6 class="mb-10">Absen Keluar</h6>
                  <h3 class="text-bold mb-10"><?php echo $klr?></h3>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>

            <div class="col-xl- col-lg-4 col-sm-6">
              <div class="icon-card mb-50">
                <div class="icon success">
                  <i class="lni lni-checkmark-circle"></i>
                </div>
                <div class="content">
                  <h6 class="mb-20">Status Absen</h6>

                <?php if($status=='absensi harian selesai') {?>
                   <button href="#0" class="main-btn primary-btn btn-hover btn-sm">
                  <?php echo $status; };  ?></button>

                <?php if($status=='absen masuk selesai') { ?>
                  <button href="#0" class="main-btn warning-btn btn-hover btn-sm">
                  <?php echo $status; };?></button>

                  <?php if($status=='belum absen masuk') { ?>
                  <button href="#0" class="main-btn warning-btn btn-hover btn-sm">
                  <?php echo $status; };?></button>

                  <?php if($status=='belum absensi') { ?>
                  <button href="#0" class="main-btn danger-btn btn-hover btn-sm">
                  <?php echo $status; };?></button>

                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
           
        </div>


      </div>



      </section>
      <!-- ========== section end ========== -->












<?php //Loading footer.php
  $this->load->view('pengguna/templates/footerD');
?>