<?php
            include("includes/db24.php");
            $get_like = "select*from costumers";
            $run_like = mysqli_query($con, $get_like);
            $row=mysqli_fetch_array($run_like);
            $num_rows=mysqli_num_rows($run_like);
			

			
			$total=0;
			$pro_price="select*from entery ";
			$run_pro_price=mysqli_query($con,$pro_price);
			
            
			while($p_price=mysqli_fetch_array($run_pro_price)){
			$amount=array($p_price['price']);
			$values=array_sum($amount);
			$total +=$values;
			}
?>

<?php
			session_start();
			$ID= $_SESSION["ID"];
			$sql=mysqli_query($con,"SELECT * FROM register where ID='$ID' ");
			$row  = mysqli_fetch_array($sql);

            if(!isset($_SESSION['ID'])){
				header("Location: index.php"); 
			}
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>My Credit Book</title>
</head>
<body>
<style>

        img.admin-image {
            width: 100px;
            border-radius: 50%;
            border: 5px solid white;
        }
        .total-payment-container {
            padding: 0px !important;
            padding-left: 20px !important;
            color: white;
        }
        p.dfhdj {
            color: #ffffffc2;
            font-size: 14px;
            margin-right: 15px;
        }
        .back-text-container {
            display: flex;
            align-content: center;
            justify-content: space-between;
            align-items: center;
            color: white;
            text-align: center;
        }
        h4.admin-name {
            margin-left: 20px !important;
            margin: 0;
}
        .account-container {
            display: flex;
            align-content: center;
            align-items: center;
            color: white;
            justify-content: normal;
            border-bottom: 1px solid #ffffff4a;
        }
        .total-payment {
            padding-top: 0 !important;
            color: white;
        }
        .btn-back {
            width: 20%;
        }
        .profile-text-container {
            width: 80%;
        }
        .fhjdfh {
            display: flex;
            align-content: center;
            justify-content: space-between;
            align-items: center;
            padding-top: 10px;
        }
        .total-customer-container {
            padding: 0px !important;
            padding-right: 20px !important;
            color: white;
            text-align: center;
        }
        .total-payment-container {
            text-align: center;
        }
        h5.admin-adress {
            margin-left: 20px;
            font-size: 12px !important;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }
        p.total-customer, .total-payment {
            font-size: 12px;
            text-align:center;
            margin-top: -7px;
            margin-bottom: 5px;
        }
        .cus-btn-container {
            width: 50px;
            height: 40px;
            background: white;
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #6200EA;
            position: absolute;
            left: 38%;
            margin-top: 30px;
            border: 10px solid #6542C8;
        }
        h3 {
            margin: 0;
        }
        .main-container {
            margin-top: 50px;
            margin-left: 25px;
        }
        .link-container {
            display: flex;
            width: 100%;
            align-content: center;
            align-items: center;
        }
        .icon-hf {
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }
        p.linkp {
            color: black;
            margin-left: 15px !important;
        }
        p.linkp {
            margin: 0px;
        }
            .linkp-ico {
            color: #6200EA;
        }
        a.add-btn {
            color: ##6200EA;
        }
        i.fa-solid.fa-arrow-left-long {
            color: white;
        }
</style>

<nav class="nave-bar-container" >
    <div class="menu-link-container">
        <a href="home.php"><i class="fa-solid fa-house menu-link"></i></a>
        
    </div>

    <div class="menu-link-container">
    <a href="add_costumer.php"><i class="fa-solid fa-plus menu-link"></i></a>
    
    </div>

    <div class="menu-link-container">
    <a href="account.php"><i class="fa-solid fa-user menu-link active"></i></a>
    <span class="menu-name">Account</span>
    </div>

</nav>

<div class="hero-section">
    <div class="back-text-container">
        <div class="btn-back">
        <a class="btn-back" href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="profile-text-container">
        <p class="profile-text">
            Profile
        </p>
        </div>
    </div>
    <div class="account-container">
        <a href="account.php"><img src="upload/<?php echo $row['File']?>" style="width: 80px;border-radius: 50%;border: 3px solid white;"></a>
        <div class="admin-content">
            <h4 class="admin-name"><?php echo $_SESSION["First_Name"] ?></h4>
            <h5 class="admin-adress">
            <i class="fa-solid fa-location-dot"></i>
            <span>Chak No 518GB, Toba Tek Singh</span>
            </h5>
        </div>
        
    </div>
    <div class="fhjdfh">
    <div class="total-payment-container">
        <h3><?php echo $total;?> RS</h3>
        <p class="total-payment"> Balance  </p>
    </div>
    <div class="cus-btn-container">
        <a class="add-btn" href="add_costumer.php"><i class="fa-solid fa-plus"></i></a>
    </div>
    <div class="total-customer-container">
        <h3><?php echo $num_rows;?></h3>
        <p class="total-customer">Customers</p>
    </div>
    </div>
</div>

<div class="main-container">
    <div class="link-container">
        <div class="icon-hf">
            <i class="fa-solid fa-clock-rotate-left linkp-ico"></i>
            <p class="linkp">Purchase histor</p>
        </div>
    </div>
    <div class="link-container">
        <div class="icon-hf">
            <i class="fa-solid fa-user linkp-ico"></i>
            <p class="linkp">Invite a friend</p>
        </div>
    </div>
    <div class="link-container">
        <div class="icon-hf">
            <i class="fa-solid fa-circle-info linkp-ico"></i>
            <p class="linkp">Help & support</p>
        </div>
    </div>
    <div class="link-container">
        <div class="icon-hf">
            <i class="fa-solid fa-arrow-right-from-bracket linkp-ico"></i>
            <a href="logout.php"><p class="linkp">Logout</p></a>
        </div>
    </div>
        
</div>

 
</body>
</html>