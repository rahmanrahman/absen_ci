<?php //Loading navbar.php
  $this->load->view('admin/templates/head_cetak');
?>


      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Absen Masuk</h6>
                  <div
                    class="d-flex flex-wrap justify-content-between align-items-center py-3"
                  >
                    <div class="left">
                      <p>Show <span>10</span></p>
                    </div>
                    <div class="right">
                      <div class="table-search d-flex">
                        <form action="#">
                          <input type="text" placeholder="Search..." />
                          <button><i class="lni lni-search-alt"></i></button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="lead-number"><h6>No</h6></th>
                          <th class="lead-info"><h6>NIP</h6></th>
                          <th class="lead-email"><h6>Nama</h6></th>
                          <th class="lead-phone"><h6>Tanggal Absen Masuk</h6></th>
                          <th class="lead-phone"><h6>Jam</h6></th>
                          <th><h6>Keterangan</h6></th>
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
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $msk->nip ?></td>
                    <td><?php echo $this->session->userdata('nama'); ?></td>
                    <td><?php echo $msk->tanggal ?></td>
                    <td><?php echo $msk->jam ?></td>
                    <td>
                        Masuk
                    </td>
                  </tr>
                  <?php }; ?>

                  <?php if($msk->tanggal_klr == $msk->tanggal) {?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $msk->nip ?></td>
                    <td><?php echo $this->session->userdata('nama'); ?></td>
                    <td><?php echo $msk->tanggal_klr ?></td>
                    <td><?php echo $msk->jam_klr ?></td>
                    <td>
                        Keluar
                    </td>
                  </tr>
                  <?php }; ?>
                                    <?php endforeach; ?>



                  </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                  <div class="pt-10 d-flex flex-wrap justify-content-between">
                    <div class="left">
                      <p class="text-sm text-gray">Showing 12/30 products</p>
                    </div>
                    <div class="right table-pagination">
                      <ul class="d-flex justify-content-end align-items-center">
                        <li class="ms-2">
                          <a href="#0">
                            <i class="lni lni-angle-double-left"></i>
                          </a>
                        </li>
                        <li class="ms-2">
                          <a href="#0"> 1 </a>
                        </li>
                        <li class="ms-2">
                          <a href="#0" class="active"> 2 </a>
                        </li>
                        <li class="ms-2">
                          <a href="#0"> 3 </a>
                        </li>
                        <li class="ms-2">
                          <a href="#0"> 4 </a>
                        </li>
                        <li class="ms-2">
                          <a href="#0">
                            <i class="lni lni-angle-double-right"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
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