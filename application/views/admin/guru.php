<?php //Loading navbar.php
  $this->load->view('admin/templates/head');
?>


      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title mb-30">
                  <h2>Akun Guru</h2> <br>
                   
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
                  <h6 class="mb-10">Data Guru</h6>
                  <div
                    class="d-flex flex-wrap justify-content-between align-items-center py-3"
                  >
                    <div class="left">
                      <p>Show <span><?php echo $total?></span> entries</p>
                    </div>
                  </div>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="lead-number"><h6>No</h6></th>
                          <th class="lead-info"><h6>Nama</h6></th>
                          <th class="lead-email"><h6>NIP</h6></th>
                          <th class="lead-phone"><h6>Password</h6></th>
                          <th class="lead-phone"><h6>Foto</h6></th>
                          <th><h6>Hapus</h6></th>
                          <th><h6>Edit</h6></th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                  <?php
                  $no = 1;
                  foreach($guru as $gr) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $gr->nama ?></td>
                    <td><?php echo $gr->nip ?></td>
                    <td><?php echo $gr->password ?></td>
                    <td><?php echo $gr->foto ?></td>
                    <td onclick="javascript: return  confirm('Anda  yakin  hapus?')">
                        <div class="action">
                            <a class="text-danger" href="<?php echo base_url('Admin/Hapus_Guru/'.$gr->id)?>">
                                <i class="lni lni-trash-can"></i>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="action">
                            <a class="text-danger" data-bs-toggle="modal"
                        href="#ModalEdit<?php echo $gr->id ?>">
                                <i class="lni lni-warning"></i>
                            </a>
                        </div>
                    </td>
                  </tr>
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


    <div class="warning-modal">
      <div class="modal fade" id="ModalFive" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content card-style">
            <div class="modal-header px-0 border-0">
              <h5 class="text-bold">Input Tanggal</h5>
            </div>
            <div class="modal-body px-0">
              <div class="content mb-30">
                <form action="<?php echo base_url('Admin/Tambah_Guru'); ?>" method="post">
                <div class="input-style-1">
                    <label>Input Nama</label>
                     <input type="text" placeholder="nama" name='nama'/>
                  </div>
                <div class="input-style-1">
                    <label>Input NIP</label>
                     <input type="text" placeholder="Nomor Induk Pegawai" name='nip'/>
                </div>
                <div class="input-style-1">
                    <label>Jabatan</label>
                     <input type="text" placeholder="Jabatan" name='jabatan'/>
                </div>
                <div class="input-style-1">
                    <label>Input Password</label>
                     <input type="password" placeholder="password" name='password'/>
                </div>
                <div class="input-style-1">
                    <label>Input Foto</label>
                     <input type="file" placeholder="foto" name='foto'/>
                </div>

              </div>
              <div
                class="action d-flex flex-wrap align-items-center justify-content-between"
              >
                <!-- end checkbox -->
                <button
                  data-bs-dismiss="modal"
                  class="main-btn primary-btn btn-hover m-1"
                >
                  Kembali
                </button>
                <button
                  class="main-btn primary-btn btn-hover m-1"
                  type='submit'
                >
                  Submit
                </button>
                                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

                  <?php
                  foreach($guru as $e) : ?>
    <div class="warning-modal">
      <div class="modal fade" id="ModalEdit<?php echo $e->id ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content card-style">
            <div class="modal-header px-0 border-0">
              <h5 class="text-bold">Edit Akun</h5>
            </div>
            <div class="modal-body px-0">
              <div class="content mb-30">
                <form action="<?php echo base_url('Admin/Update_Guru'); ?>" method="post">
                <div class="input-style-1">
                    <label>Input Nama</label>
                    <input type="hidden" name="id" value="<?php echo $e->id ?>">
                     <input type="text" placeholder="nama" name='nama' value="<?php echo $e->nama ?>" />
                  </div>
                <div class="input-style-1">
                    <label>Input NIP</label>
                     <input type="text" placeholder="Nomor Induk Pegawai" name='nip' value="<?php echo $e->nip ?>" />
                </div>
                <div class="input-style-1">
                    <label>Input jabatan</label>
                     <input type="text" placeholder="Nomor Induk Pegawai" name='jabatan' value="<?php echo $e->jabatan ?>" />
                </div>
                <div class="input-style-1">
                    <label>Input Password</label>
                     <input type="password" placeholder="password" name='password'/>
                </div>
                <div class="input-style-1">
                    <label>Input Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>
              </div>
              <div
                class="action d-flex flex-wrap align-items-center justify-content-between"
              >
                <!-- end checkbox -->
                <button
                  data-bs-dismiss="modal"
                  class="main-btn primary-btn btn-hover m-1"
                >
                  Kembali
                </button>
                <button
                  class="main-btn primary-btn btn-hover m-1"
                  type='submit'
                >
                  Submit
                </button>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>
<?php //Loading footer.php
  $this->load->view('admin/templates/footer');
?>