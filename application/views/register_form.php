<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_shop/') ?>/img/logo.png" alt="logo" width="200" class="">
            </div>

            <div class="card card-warning">
              <div class="card-header"><h4 class="text-warning">Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register') ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama Lengkap</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username">
                      <?php echo form_error('username', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?php echo form_error('alamat', '<div class="text-small text-danger">','</div>') ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">+62</span>
                      <input type="text" id="telepon" name="telepon" class="form-control" placeholder="No. Telepon" aria-label="telepon" aria-describedby="basic-addon1">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>No. KTP</label>
                      <input type="text" name="no_ktp" class="form-control">
                      <?php echo form_error('no_ktp', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control">
                      <?php echo form_error('password', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                    <div class="form-group">
                      <label for="gender" class="d-block">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="">-- Pilih gender --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <?php echo form_error('gender', '<div class="text-small text-danger">','</div>') ?>
                    </div> 
                  <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-md btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Edo Rent Car <br> Jalan Tidar Utara 1 / 6, Kota Malang <br> 2024
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- <body>
    <div
      class="wrapper"
      style="background-image: url('<?= base_url() ?>assets/assets_shop/img/register-bg.png')"
    >
      <div class="inner">
        <div class="image-holder">
          <img src="<?= base_url() ?>assets/assets_shop/img/register-image.png" alt="" />
        </div>
        <form action="">
          <h3>Registration Form</h3>
          <div class="form-group">
            <input type="text" placeholder="First Name" class="form-control" />
            <input type="text" placeholder="Last Name" class="form-control" />
          </div>
          <div class="form-wrapper">
            <input type="text" placeholder="Username" class="form-control" />
            <i class="zmdi zmdi-account"></i>
          </div>
          <div class="form-wrapper">
            <input
              type="text"
              placeholder="Email Address"
              class="form-control"
            />
            <i class="zmdi zmdi-email"></i>
          </div>
          <div class="form-wrapper">
            <select name="" id="" class="form-control">
              <option value="" disabled selected>Gender</option>
              <option value="male">Male</option>
              <option value="femal">Female</option>
              <option value="other">Other</option>
            </select>
            <i class="zmdi zmdi-chevron-down" style="font-size: 17px"></i>
          </div>
          <div class="form-wrapper">
            <input
              type="password"
              placeholder="Password"
              class="form-control"
            />
            <i class="zmdi zmdi-lock"></i>
          </div>
          <div class="form-wrapper">
            <input
              type="password"
              placeholder="Confirm Password"
              class="form-control"
            />
            <i class="zmdi zmdi-lock"></i>
          </div>
          <button>
            Register
            <i class="zmdi zmdi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div> -->