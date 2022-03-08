<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= bs() ?>public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= bs() ?>public/assets/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?= bs() ?>public/assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?= bs() ?>public/assets/css/iofrm-theme9.css">
    
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="float-left ml-4 mb-2 w-auto">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="<?= bs() ?>public/assets/img/graphic5.svg" alt="image">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items" style="max-width:380px">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <!-- <div class="logo"> -->
                                    <img class="logo-size" src="<?= bs() ?>public/assets/img/login.png" alt="">
                                <!-- </div> -->
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="<?= base_url('users/auth/login') ?>" class="active">Login</a
                            >
                            <?php 
                                if ($reg_status[0]->registration_status == 1): 
                            ?>
                                <a href="<?= base_url('users/Register') ?>">Register</a>
                            <?php endif; ?> 
                        </div>
                        <form id="login_form" action="<?= base_url('users/auth/login') ?>" method="post">
                            <input class="form-control" type="email" name="identity" id="identity" placeholder="E-mail Address"
                                required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            
                            <input type="checkbox" class="form-check-input" name="remember" value="1" id="exampleCheck1">
                            
                            <label class="form-check-label" for="exampleCheck1"> Remember me</label>

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> 
                                
                                <?php if ($reg_status[0]->forgot_pass_status == 1): ?>
                                    <a href="<?= base_url('users/register/forgot_pass') ?>">
                                        Forget Password?
                                    </a>
                                <?php endif ?>    
                            </div>
                        </form>
                        <?php if ($reg_status[0]->socail_login_status == 1): ?>
                            <div class="other-links">
                                <span>Or login with</span>
                                 <a href="<?= bs() ?>users/register/demo">Facebook</a>
                                <a href="<?= bs() ?>users/register/demo">Google</a>
                                <a href="<?= bs() ?>users/register/demo">Instagram</a>
                                <a href="<?= bs() ?>users/register/demo">Linkedin</a>
                                <!-- <a href="<?= $fbUrl ?>">Facebook</a>
                                <a href="<?= $authUrl ?>">Google</a>
                                <a href="https://api.instagram.com/oauth/authorize/?client_id=cc0c6e3ffad5457eb811cf3bd99f0524&redirect_uri=http://localhost/login/users/Social_login/instagram_login&response_type=code&scope=public_content">Instagram</a>
                                <a href="<?php echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>">Linkedin</a> -->
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= bs() ?>public/assets/js/jquery.min.js"></script>
    <script src="<?= bs() ?>public/assets/js/popper.min.js"></script>
    <script src="<?= bs() ?>public/assets/js/bootstrap.min.js"></script>
    <script src="<?= bs() ?>public/assets/js/main.js"></script>
</body>

</html>


<script src="<?= base_url('public/assets/js/bootstrap-notify.js') ?>"></script>
<script type="text/javascript" src="<?= bs() ?>public/assets/js/jquery.validate.min.js"></script>
<script>
   $("#login_form").validate();
</script>
<script>
   $(document).ready(function(){
     $("[rel=tooltip]").tooltip({ placement: 'top'});
   });
</script>
<!-- Notification Script -->
<script>
   <?php
      $success = $this->session->flashdata('success');
      $error   = $this->session->flashdata('error');
      if (!empty($success))
       {
      ?>
    $.notify({
         
         icon: 'glyphicon glyphicon-info-sign',
         title: '<b>Notification</b><br>',
         message: '<?php echo $success ?>',
     },
     {
         
         
         type: "success success-noty col-md-3",
         allow_dismiss: true,
         placement: {
             from: "top",
             align: "right"
         },
         offset: 20,
         spacing: 10,
         z_index: 1431,
         delay: 5000,
         timer: 1000,
         animate: {
             enter: 'animated bounceInDown',
             exit: 'animated bounceOutUp'
         }
     });
   <?php
      } 
      if (!empty($error))
       {
      ?>
    $.notify({
             
             icon: 'glyphicon glyphicon-info-sign',
             title: '<b>Notification</b><br>',
             message: '<?php echo $error ?>',
         },{
             
             
             type: "danger noty-color col-md-3",
             allow_dismiss: true,
             placement: {
                 from: "top",
                 align: "right"
             },
             offset: 20,
             spacing: 10,
             z_index: 1431,
             delay: 5000,
             timer: 1000,
             animate: {
                 enter: 'animated fadeInDown',
                 exit: 'animated fadeOutUp'
             }
         });
    <?php            
      }
      ?>
   
</script>  
<script>
   <?php
      if (!empty($message))
        {
      ?>
    $.notify({
         
         icon: 'glyphicon glyphicon-info-sign',
         title: '<b>Notification</b><br>',
         message: '<?php echo $message;?>',
     },
     {
         
         type: "success success-noty col-md-3 col-md-offset-2",
         allow_dismiss: true,
         placement: {
             from: "top",
             align: "right"
         },
         offset: 20,
         spacing: 10,
         z_index: 1431,
         delay: 5000,
         timer: 1000,
         animate: {
             enter: 'animated bounceInDown',
             exit: 'animated bounceOutUp'
         }
     });
   <?php
      }
      ?> 
</script> 
<script>
   <?php  
      if (!empty($_GET['err_msg']))  
      {
      ?> 
      $.notify({
      title: '<strong><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Error!</strong>',
      message: '<?php echo $_GET['err_msg'] ?>'
      },{
        type: 'danger alert-danger-alt col-md-3 col-md-offset-3'
      });
     <?php 
      } 
       elseif (!empty($_GET['success_msg']))  
      {
       ?>
   
      $.notify({
      title: '<strong> <span class= "glyphicon glyphicon-ok"></span> Success!</strong>',
      message: '<?php echo $_GET['success_msg'] ?>'
      },{
        type: 'success alert-success-alt col-md-3'
      });
   
    <?php    
      }    
      ?>  
   
</script>

