<?php
include_once "./inc/login_header.php";
session_start();
?>

<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">Register</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-6 col-lg-5">
<div class="login-wrap p-4 p-md-5">
<div class="icon d-flex align-items-center justify-content-center">
<span class="fa fa-user-o"></span>
</div>
<h3 class="text-center mb-4">Have an account?</h3>
<form action="./controller/storeuser.php" class="login-form" method="POST">
<div class="form-group">
<input value="<?= isset($_SESSION['info']['name'])? $_SESSION['info']['name']: '';?>" name="name" type="text" class="form-control rounded-left" placeholder="Username">
<?php
if(isset($_SESSION['errors']['name_error'])){
 ?>   
    <span style="color: red;display:block;"><?= $_SESSION['errors']['name_error'] ?></span>
<?php    
}
?>

</div>

<div class="form-group d-flex">
<input  value="<?= isset($_SESSION['info']['email'])? $_SESSION['info']['email']: '';?>" name="email" type="email" class="form-control rounded-left" placeholder="Your Email" >


</div>
<?php
if(isset($_SESSION['errors']['email_error'])){
 ?>   
    <span style="color: red;display:block;"><?= $_SESSION['errors']['email_error'] ?></span>
<?php    
}
?>
<div class="form-group d-flex">
<input  value="<?= isset($_SESSION['info']['phone'])? $_SESSION['info']['phone']: '';?>" name="phone" type="number" class="form-control rounded-left" placeholder="Your Phone" >

</div>
<?php
if(isset($_SESSION['errors']['phone_error'])){
 ?>   
    <span style="color: red;display:block;"><?= $_SESSION['errors']['phone_error'] ?></span>
<?php    
}
?>
<div class="form-group d-flex">
<input  value="<?= isset($_SESSION['info']['password'])? $_SESSION['info']['password']: '';?>" name="password" type="password" class="form-control rounded-left" placeholder="Password" >

</div>
<?php
if(isset($_SESSION['errors']['password_error'])){
 ?>   
    <span style="color: red;display:block;"><?= $_SESSION['errors']['password_error'] ?></span>
<?php    
}
?>
<div class="form-group d-flex">
<input  value="<?= isset($_SESSION['info']['confirm_password'])? $_SESSION['info']['confirm_password']: '';?>" name="confirm_password" type="password" class="form-control rounded-left" placeholder="Confirm Password" >

</div>
<?php
if(isset($_SESSION['errors']['con_password_error'])){
 ?>   
    <span style="color: red;display:block;"><?= $_SESSION['errors']['con_password_error'] ?></span>
<?php    
}
?>
<div class="form-group d-md-flex">
<div class="w-50">
<label class="checkbox-wrap checkbox-primary">Remember Me
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
</div>
<div class="w-50 text-md-right">
<a href="#">Forgot Password</a>
</div>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="toast<?=isset($_SESSION['msg']) ? 'show': ''?>" style="position: absolute; right:50px;bottom:100px;" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    
    <strong class="me-auto">Post System</strong>
    <small>2 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
<?= isset( $_SESSION['msg']) ? $_SESSION['msg'] : ''?>
  </div>
</div>
</section>



<?php
include_once "./inc/login_footer.php";
session_unset();
?>