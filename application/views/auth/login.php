<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#">Halaman Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

    <form method="post" action="">
      <?= $this->session->flashdata('message') ?>
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash() ?>" readonly>
        <div class="input-group mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email'); ?>
        <div class="input-group mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password'); ?>
        <div class="row">
          <div class="col-8">
        
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p>Belum Punya Akun ? <a href="<?= base_url("auth/register") ?>" >Register</a> </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->