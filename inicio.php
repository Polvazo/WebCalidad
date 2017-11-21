<?php 
  include "controller/login.controller.php";
?>
<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
<link rel="stylesheet" href="app/css/login.css">
<script src="app/js/login.js"></script>
</head>
<body>

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <center>
                <img src="app/img/logo.png" class="img-responsive" style="height: 140px">
            </center>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="inicio.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="correo" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>