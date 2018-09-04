<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
    <div class="wrapper" id="banner">
        <div class="container" id="login-box">
            <br>
            <h1 class="text-center">Register</h1>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                  <?php echo form_open('http://localhost/ci_task/index.php/user/register_process'); ?>
                 <?php
                    if (isset($message_display)) {
                    echo "<div class='message'>";
                    echo $message_display;
                    echo "</div>";
                    }
                ?>
                    <label class="label"> Username :</label>
                    <input type="text" name="username" class="form-control" id="name"/>
                    <label class="label"> Email :</label>
                    <input type="email" name="email" class="form-control" id="name"/>
                    <label class="label">Password :</label>
                    <input type="password" name="password" class="form-control" id="password"/>
                    <br>
                    <center><input type="submit" value=" SignUp " class="btn btn-primary" name="submit"/></center>
                        <br>
                <?php echo form_close(); ?>
                    <center><b id="bold">Already Registered?</b><a href="<?php echo base_url() ?>">Login Here</a></center>
                <br>
                <br>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>   
</body>
</html>