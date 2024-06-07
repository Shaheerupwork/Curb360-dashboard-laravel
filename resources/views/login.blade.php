<?php
include("config.php");
session_start();
$error='';
if($_SERVER["REQUEST_METHOD"] == "POST") {

   // username and password sent from form 
   $myusername = mysqli_real_escape_string($conn,$_POST['username']);
   $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

   $sql = "SELECT * FROM tb_user WHERE username = '$myusername' and password = '$mypassword'";

   $result = mysqli_query($conn,$sql);      
   $row = mysqli_num_rows($result);      
   $count = mysqli_num_rows($result);

   if($count == 1) {
   
      // session_register("myusername");
      $_SESSION['login_user'] = $myusername;
      header("location: index.php");
   } else {
      $error = "Your username or password is invalid";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="img/7777.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="text-center heading w-100 pl-4 pr-4">
                                    <h2 class="h4 text-gray-900 mb-4">Welcome Back!</h2>
                                    
                                    <form action = "" method = "post">
                                    <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            name = "username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block"
                                            name="submit">Login</button>
                                        <hr>
                                    </form>
                                    <?php 
                                    if ($error != null) {
                                        echo '<div class="alert alert-danger" role="alert">'. $error .'</div>';
                                    } 
                                    ?>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
