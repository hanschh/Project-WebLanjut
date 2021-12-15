<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="assets/adminlte/index2.html"><b>Login</b> Admin</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Login to an Account</p>
        <p>
        <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                  <p class="text-danger">
                     <?php echo session()->getFlashdata('gagal') ?>
                    </p>
               <?php } ?>
              </p>
              <p class="text-danger">
        <?= session()->get('pesan') ?>
        </p>

        <form action="auth/login" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        
               

      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  <?= $this->endSection(); ?>