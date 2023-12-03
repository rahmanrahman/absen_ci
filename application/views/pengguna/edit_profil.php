<?php //Loading navbar.php
  $this->load->view('pengguna/templates/head');
?>

      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="titlemb-30">
                  <h2>Edit Profil</h2>
                </div>
              </div>
              <!-- end col -->
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <div class="row">
            <div class="col-lg-6">
              <div class="card-style settings-card-1 mb-30">
                <div
                  class="title mb-30 d-flex justify-content-between align-items-center"
                >
                  <h6>My Profile</h6>
                  <a class="border-0 bg-transparent" href="<?php echo base_url('C_pengguna/Edit_Profil')?>">
                    <i class="lni lni-pencil-alt"></i>
                  </a>
                </div>
                <div class="profile-info">
                  <div class="d-flex align-items-center mb-30">
                    <div class="profile-image">
                      <img src="<?php echo base_url('assets/dist/')?>/images/profile/<?php echo $profil->foto ?>" alt="" />
                      <div class="update-image">
                        <a href="<?php echo base_url('C_pengguna/Edit_Profil')?>" />
                        <label for=""
                          ><i class="lni lni-cloud-upload"></i
                        ></label>
                      </a>
                      </div>
                    </div>
                    <div class="profile-meta">
                      <h5 class="text-bold text-dark mb-10"><?php echo $this->session->userdata('nama');?></h5>
                      <p class="text-sm text-gray"><?php echo $profil->nip?></p>
                    </div>
                  </div>
                  <div class="input-style-1">
                     <form action="<?php echo base_url('C_pengguna/Update_Guru'); ?>" method="post">
                    <label>nama</label>
                    <input
                    type="hidden"
                      value="<?php echo $profil->id?>"
                      name="id"
                    />
                    <input
                    type="text"
                      value="<?php echo $profil->nama?>"
                      required
                      name="nama"
                    />
                  </div>
                  <div class="input-style-1">
                    <label>nip</label>
                    <input
                    type="text"
                      value="<?php echo $profil->nip?>"
                      readonly
                      name="nip"
                    />
                  </div>
                  <div class="input-style-1">
                    <label>Jabatan</label>
                    <input
                    type="text"
                      value="<?php echo $profil->jabatan?>"
                      required
                      name="jabatan"
                    />
                  </div>
                  <div class="input-style-1">
                    <label>Password</label>
                    <input type="password" value="<?php echo $profil->password ?>" required name="password"/>
                  </div>

                   <div class="input-style-1">
                    <label>foto</label>
                    <input type="file" name="foto" />
                  </div>

                   <button
                          type="submit"
                          class="main-btn w-100 warning-btn btn-hover m-2"
                        >
                          Edit
                        </button>
                      </form>
                  
                </div>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->

            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </section>


      <?php //Loading navbar.php
  $this->load->view('pengguna/templates/footerD');
?>