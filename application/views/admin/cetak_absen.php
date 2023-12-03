<?php //Loading navbar.php
  $this->load->view('admin/templates/head_cetak');
?>


      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Laporan Absen</h2> <br>
                   
                </div>
              </div>
              <!-- end col -->

              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Absen</h6>
                  <div
                    class="d-flex flex-wrap justify-content-between align-items-center py-3"
                  >
                    <div class="left">
                      <p>Show <span><?php echo $total?></span></p>
                    </div>
                   
                  </div>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="lead-email"><h6>Nama</h6></th>
                          <th class="lead-email"><h6>NIP</h6></th>
                          <th class="lead-email"><h6>Jabatan</h6></th>
                          <th class="lead-phone"><h6>Tanggal Absen</h6></th>
                          <th class="lead-phone"><h6>Jam</h6></th>
                          <th class="lead-phone"><h6>Status</h6></th>
                           <th class="lead-phone"><h6>Keterangan</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                  <?php
                  $no = 1;
                  foreach($absen as $msk) : ?>
                    <?php $cek=$msk->tanggal?>

                    <?php if($msk->tanggal_klr == $msk->tanggal) {?>
                  <tr>
                     <?php $no++ ?>
                    <td><?php echo $msk->nama ?></td>
                    <td><?php echo $msk->nip?></td>
                    <td><?php echo $msk->jabatan?></td>
                    <td><?php echo $msk->tanggal ?></td>
                    <td><?php echo $msk->jam ?></td>
                    <td>
                        Masuk
                    </td>
                    <td>
                        <?php echo $msk->keterangan ?>
                    </td>
                  </tr>
                  <?php }; ?>

                  <?php if($msk->tanggal_klr == $msk->tanggal) {?>
                  <tr>
                    <td><?php echo $msk->nama ?></td>
                    <td><?php echo $msk->nip?></td>
                    <td><?php echo $msk->jabatan?></td>
                    <td><?php echo $msk->tanggal_klr ?></td>
                    <td><?php echo $msk->jam_klr ?></td>
                    <td>
                        Keluar
                    </td>
                    <td>
                        <?php echo $msk->keterangan ?>
                    </td>
                  </tr>
                  <?php }; ?>
                                    <?php endforeach; ?>



                  </tbody>
                    </table>
                    <!-- end table -->
                  </div>

                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>


<?php //Loading navbar.php
  $this->load->view('admin/templates/footer');
?>