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
                <h4 class="logo-heading">Sign Up</h4>
            </div>


<div class="signup-form">
<form action="register_a.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
				<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
        </div>

        <div class="form-group">
				<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
        <div class="form-group">
            <input type="file" name="file" required>
            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
        </div>        
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>

    </form>
    <div class="text-center or">OR</div> 
        <a class="btn-link" href="login.php"><button class="btn-log-sin btn-signup">Login</button></a>
</div>
        </div>









</body>
</html>