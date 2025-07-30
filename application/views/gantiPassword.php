<!DOCTYPE html>
<html>
<head>
  <title>Ganti Password | APP GAJI</title>
  <link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="<?php echo base_url(); ?>assets/js/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <div class="img">
      <img src="<?php echo base_url(); ?>assets/img/payroll.svg">
    </div>
    <div class="login-content">
      <form method="POST" action="<?php echo base_url('GantiPassword/ganti_password_aksi') ?>">
        <img src="<?php echo base_url(); ?>assets/img/avatar.svg">
        <h2 class="title">GANTI PASSWORD</h2>
        <?php echo $this->session->flashdata('pesan') ?>

        <!-- Password Baru -->
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Password Baru <?php echo form_error('passBaru', '<div class="text-small text-danger"> </div>')?></h5>
            <input type="password" class="input" name="passBaru">
          </div>
        </div>

        <!-- Ulangi Password Baru -->
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Ulangi Password <?php echo form_error('ulangPass', '<div class="text-small text-danger"> </div>')?></h5>
            <input type="password" class="input" name="ulangPass">
          </div>
        </div>

        <input type="submit" class="btn" value="Simpan">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
