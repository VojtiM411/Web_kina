<!DOCTYPE html>
<head>
    <title>Přihlášení</title>
    <meta charset="utf-8">
    <!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn btn-outline-success" style="margin-top: 30px; margin-left: 30px"><a href="<?php echo base_url() ?>">Zpět na hlavní stranu</a></button>
  <div class="row"> <div class="col-3"></div>
  <div class="col-3">
    <h2 class="display-5 font-weight-bold">Přihlásit se</h2>
    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open();?>

      <p>
        E-mail
        <?php echo form_input($identity);?>
      </p>

      <p>
        Heslo
        <?php echo form_input($password);?>
      </p>


      <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>
    </div>
    <?php echo form_close();?>
    </div> <div class="col-3"></div>
    
</body>