
<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>


<section>

        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2> Form Tambah Admin </h2>
                </div>
              </div>
              <!-- end col -->

              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper">
            <div class="row">
              <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">Input Admin </h6>

                



                  <div class="input-style-1">
                    <label>Nama</label>
                     <form action="<?php echo base_url('C_pengguna/Tambah_Admin'); ?>" method="post">
                      
                    <input type="text" placeholder="Nama Admin" name='nama'/>
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>password</label>
                    <input type="text" placeholder="password" name='password'/>
                  </div>
                  <div
                        class="button-group d-flex justify-content-center flex-wrap"
                      >
                        <button
                          type="submit"
                          class="main-btn w-100 info-btn btn-hover m-2"
                        >
                          Tambah
                        </button></form>
                        
 
                      </div>

                  <!-- end input -->
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->

                <!-- ======= input switch style end ======= -->
              </div>
              <!-- end col -->

              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>




</section>



<?php //Loading footer.php
  $this->load->view('admin/templates/footer');
?>