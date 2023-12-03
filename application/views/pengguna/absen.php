<?php //Loading navbar.php
  $this->load->view('pengguna/templates/head');
?>


<section>

        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2> Form Absen </h2>
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
                  <h6 class="mb-25">Input Absen </h6>

                  <?php if($cond =='sudah melakukan absensi') {?>
 <div class="alert-box warning-alert pl-100">
                  <div class="alert">
                    <h4 class="alert-heading">#D50100</h4>
                    <p class="text-medium">
                     <?php echo $cond?>
                    </p>
                  </div>
                </div>
              <?php } ?>
                                <?php if($cond =='Absensi Berhasil') {?>
 <div class="alert-box warning-alert pl-100">
                  <div class="alert">
                    <h4 class="alert-heading">#D50100</h4>
                    <p class="text-medium">
                <?php echo $cond?>
                    </p>
                  </div>
                </div>
              <?php } ?>

                



                  <div class="input-style-1">
                    <label>NIP</label>
                     <form action="<?php echo base_url('C_pengguna/Input_Absen_Masuk'); ?>" method="post">
                      
                    <input type="text" placeholder="Nomor Induk Pegawai" name='nip' value="<?php echo $detail->nip;?>" placeholder="<?php echo $detail->nip;?>" />
                  </div>
                  <!-- end input -->

                   <div class="input-style-1">
                    <label>Date</label>
                    <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" disabled />
                  </div>

                  <div class="input-style-1">
                    <label>Jam</label>
                    <input type="time" name="jam" value="<?php echo date('H:i'); ?>"disabled  />
                  </div>

                  <div class="select-style-1">
                    <label>Keterangan</label>
                    <div class="select-position">
                      <select name="keterangan">
                        <option value="Hadir" name="keterangan">Tidak Ada</option>
                        <option value="Izin" name="keterangan">Izin</option>
                        <option value="Sakit" name="keterangan">Sakit</option>
                      </select>
                    </div>
                  </div>
                  <div
                        class="button-group d-flex justify-content-center flex-wrap"
                      >
                        <button
                          type="submit"
                          class="main-btn w-100 info-btn btn-hover m-2"
                        >
                          Absen Masuk
                        </button></form>
                        <br>

                         <form action="<?php echo base_url('C_pengguna/Input_Absen_Keluar'); ?>" method="post">

                           <input type="hidden" placeholder="Nomor Induk Pegawai" name='nip' value="<?php echo $detail->nip;?>" placeholder="<?php echo $detail->nip;?>" />
                            <input type="hidden" name="jam" value="<?php echo date('H:i'); ?>"disabled  />
                          <button
                          type="submit"
                          class="main-btn w-100 warning-btn btn-hover m-2"
                        >
                          Absen Keluar
                        </button>
                      </form>
 
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
  $this->load->view('pengguna/templates/footer');
?>