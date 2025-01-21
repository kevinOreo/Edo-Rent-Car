<!-- <body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo base_url('assets/assets_shop') ?>/img/logo.png" alt="logo" width="200" class="">
            </div>

            <div class="card card-warning">
              <div class="card-header"><h4 class="text-warning">Login</h4></div>

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login') ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">    <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum memiliki akun? <a href="<?php echo base_url('register') ?>">Buat akun</a>
            </div>
            <br>
            <div class="simple-footer">
              Edo Rent Car <br> Jalan Tidar Utara 1 / 6, Kota Malang <br> 2024
            </div>
          </div>
        </div>
      </div>
    </section>
  </div> -->
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login #05</h2> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(<?= base_url() ?>/assets/assets_shop/img/login-banner.png);"></div>
						<div class="login-wrap p-4 p-md-5">
							<?php echo $this->session->flashdata('pesan') ?>
			      		<div class="d-flex">
							<div class="w-100">
								<h3 class="mb-4">Sign In</h3>
							</div>
								<!-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> -->
			      		</div>
							<form action="<?php echo base_url('auth/login') ?>" method="POST">
								<div class="form-group mt-3">
									<input type="text" class="form-control" name="username" required autofocus>
									<label class="form-control-placeholder" for="username">Username</label>
								</div>
								<div class="form-group">
									<input id="password-field" type="password" name="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-warning rounded submit px-3">Sign In</button>
								</div>
								<div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-warning mb-0">Remember Me
												<input type="checkbox">
												<span class="checkmark"></span>
													</label>
												</div>
												<div class="w-50 text-md-right">
													<a href="#">Forgot Password</a>
												</div>
								</div>
		          			</form>
		          			Belum memiliki akun? <a href="<?php echo base_url('register') ?>">Buat akun</a>
		        		</div>
		      		</div>
				</div>
			</div>
		</div>
	</section>