<?php
    session_start();

    if(isset($_SESSION['ID'])){
        header("Location: home.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>My Credit Book</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<style>
    body {
        background: url(https://www.kodular.io/assets/images/cbackground.png) !important;
        height:100vh;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

        <div class="main">
            <div class="logo-head-container">
                <h4 class="logo-heading">KhataBooK</h4>
            </div>

            <div class="login-btn-container">
                <div class="log-text">
                <h3 class="texto">
                Add Your customer Records
                </h3>
                </div>


                <a class="btn-link" href="login.php"><button class="btn-log-sin btn-login">Login</button></a>
                <a class="btn-link" href="register.php"><button class="btn-log-sin btn-signup">Sign Up</button></a>
            </div>
        </div>



</body>
</html>