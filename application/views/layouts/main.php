<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  </head>
  <body>

    <div class="container">

      <div class="col-xs-3">

        <?php $this->load->view('users/login_view'); ?>

      </div>
      <div class="col-xs-9">

        <?php $this->load->view($main_view); ?>

      </div>


    </div>

  </body>
</html>
