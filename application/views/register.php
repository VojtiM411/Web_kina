<!DOCTYPE html>
<head>
    <title>Registrace</title>
    <meta charset="utf-8">
    <!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <button type="button" class="btn btn-outline-success" style="margin-top: 30px; margin-left: 30px"><a href="<?php echo base_url() ?>">Zpět na hlavní stranu</a></button>
    <div class="container">
        <form style="margin-left: 500px">
        <div class="form-group">
            <h1>Registrace</h1>
            <br>
            <label>jméno:</label>
            <?php
            echo form_open();
            echo form_input('first_name');
            ?>
        </div><br>
        <div class="form-group">
            <label>e-mail:</label>
            <?php
            echo form_input('email')
            ?>
        </div><br>
        <div class="form-group">
            <label>heslo:</label>
            <?php echo form_input(); ?>
        </div><br>
        <?php
        echo form_submit('register','Odeslat');
        echo form_close();
        ?>
        </form>
    </div>
</body>