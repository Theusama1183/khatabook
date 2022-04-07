<?php

        include("includes/db24.php");
        $user = $_GET['cos_id'];
		$get_costumers="select*from costumers where cos_id='$user'";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		$row_costumers=mysqli_fetch_array($run_costumers);
			
			
			$cos_id = $row_costumers['cos_id'];
			$cos_name = $row_costumers['cos_name'];
			$cos_mob = $row_costumers['mobile'];
			$cos_add = $row_costumers['cos_address'];
			$cos_village = $row_costumers['village'];
			$date = $row_costumers['date'];
		
		
		
		    $total=0;
			$pro_price="select*from entery WHERE cos_id='$cos_id'";
			$run_pro_price=mysqli_query($con,$pro_price);
			
            
			while($p_price=mysqli_fetch_array($run_pro_price)){
			$amount=array($p_price['price']);
			$values=array_sum($amount);
			$total +=$values;
			}
			
			if($total=='0'){
				$u_status="<h5 style='color:#55E18A;'>Paid</h5>";
			}
			
			  else{
				 $u_status="<h5 style='color:#e84041;'>Due</h5>";
			      }
?>
<html>
<head>
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

<style>
        .cus-nave-container {
            display: flex;
            background:#6200EA;
            align-content: center;
            align-items: center;
            justify-content: space-between;
            height: 40px;
        }
        .back-btn-container {
            width: 10%;
            display: flex;
            justify-content: center;
        }
        .cus-image-container {
            width: 90%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        p.Coust-Name {
            margin-left: 10px;
            color: white;
            font-size: 14px;
        }
        a.back-icon {
            color: white !important;
        }
        input[type="text"] {
            width: 90%;
            margin-top: 20px;
            margin-bottom: 10px;
            background: transparent;
            border-bottom: 1px solid #00000073 !important;
            border: none;
        }
        input[type="submit"] {
            width: 90%;
            height: 30px;
            background: #55e18a;
            color: white;
            border: none;
            left: 0;
            margin-top: 20px;
        }
        .successMessege {
            display: flex;
            align-content: center;
            align-items: center;
            background: white;
            margin-top: 20px;
            height: 50px;
            width: 88%;
            justify-content: space-around;
            margin-left: 16px;
            border-left: 5px solid #51cf65;
            font-size: 14px;
        }
        .errorMessege{
            display: flex;
            align-content: center;
            align-items: center;
            background: white;
            margin-top: 20px;
            height: 50px;
            width: 88%;
            margin-left: 16px;
            border-left: 5px solid red;
            font-size: 14px;
        }
        i.fa-regular.fa-circle-check {
            font-size: 18px;
            color: #51cf65;
        }
        i.fa.fa-exclamation-triangle {
            font-size: 18px;
            color: red;
            margin-left: 20px;
            margin-right: 30px;
        }
        img.cstomer-profile-image {
            width: 100px;
        }
        .entery-details-wrapper {
            display: flex;
            padding: 10px;
        }
        .icon-side {
            width: 10%;
        }
        .content-side {
            width: 90%;
            border-bottom: 1px solid #00000014;
            padding-bottom: 10px;
        }
        span.ico {
            color:#6200EA;
            font-size: 14px;
        }
        p.detail-title {
            font-size: 12px;
            line-height: 10px;
            color: #000000ad;
        }
        p.detail-content {
            font-size: 14px;
        }
        .customer-profile-image-wrapper {
            padding: 15px;
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
            border-bottom: 5px solid #e1e1e1;
        }
        .delete-btn-container {
            width: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        button.delete-btn {
            background: #e9455e;
            width: 140px;
            height: 30px;
            border: none;
            color: white;
        }
        .delete-btn-wrapper {
            display: flex;
            align-content: center;
            justify-content: center;
            background: white;
            position: absolute;
            top: 35%;
            margin: 5%;
            padding: 10px;
            z-index: 1;
            border-radius: 10px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }
        .ico-container {
            width: 15%;
        }
        
        .text-container {
            width: 85%;
        }
        i.fa-solid.fa-triangle-exclamation {
            color: #d70606;
            font-size: 22px;
        }
        input:focus-visible {
            border: none;
            outline: none !important;
        }
        form.delForm {
            display: flex;
            justify-content: flex-end;
            align-content: center;
            align-items: center;
        }
        input[type="submit"] {
            margin: 0 15px;
            background: transparent;
            border: none;
            font-size: 14px;
            color:#6200EA;
            font-weight: 600;
            width: 30px;
        }
        .cancel-btn {
            font-size: 14px;
            color: black;
            font-weight: 600;
        }
        form.delForm {
            margin-top: 30px;
        }
</style>
 <body>

    <div class="cus-nave-container">
        <div class="back-btn-container">
            <a class="back-icon" href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="cus-image-container">
            <p class="Coust-Name">Customer Profile</p> 
        </div>
    </div>


    <div class="customer-profile-image-wrapper">
        <img class="cstomer-profile-image" src="images/CustomerPng.png" alt="">
    </div>

    <div class="entery-details-wrapper">
  <div class="icon-side">
     <span class="ico"><i class="fa-solid fa-user"></i></p>
  </div>
  <div class="content-side">
    <p class="detail-title">Name</p>
    <p class="detail-content"><?php echo $cos_name;?></p>
  </div>
</div>

<div class="entery-details-wrapper">
  <div class="icon-side">
     <span class="ico"><i class="fa-solid fa-phone"></i></p>
  </div>
  <div class="content-side">
    <p class="detail-title">Number</p>
    <p class="detail-content"><?php echo $cos_mob;?></p>
  </div>
</div>

<div class="entery-details-wrapper">
  <div class="icon-side">
     <span class="ico"><i class="fa-solid fa-book"></i></p>
  </div>
  <div class="content-side">
    <p class="detail-title">Address</p>
    <p class="detail-content"><?php echo $cos_add;?></p>
  </div>
</div>

<div class="entery-details-wrapper">
  <div class="icon-side">
     <span class="ico"><i class="fa-solid fa-book"></i></p>
  </div>
  <div class="content-side">
    <p class="detail-title">Status</p>
    <p class="detail-content"><?php echo $u_status;?></p>
  </div>
</div>

<div id="delete-btn-container" style="display: none;">
                        <div class="delete-btn-wrapper">
                            <div class="ico-container">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            </div>
                            <div class="text-container">
                                <p style="color:black !Important; line-height: 18px;
                    font-size: 16px;">
                                    Are you sure you want to delete this entry? This will also delete the transection entries.
                                </p>

                                <form class="delForm" method="post" action="" enctype="multipart/form-data">
                                    <span onclick="DelBtn()" class="cancel-btn" >Cancel</span>
                                    <input type="submit" name="delete" value="Yes"/>
                                </form>
                            </div>
                        </div>
                    </div>


<div class="delete-btn-container">
        <a onclick="DelBtn()"><button class="delete-btn">- Delete</button></a>
    </div>

    <script>

function editBtn() {
    var x = document.getElementById("edit-btn-container");
        if (x.style.display === "block"){
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}


function DelBtn() {
var x = document.getElementById("delete-btn-container");
    if (x.style.display === "block"){
    x.style.display = "none";
} else {
    x.style.display = "block";
}

var y = document.getElementById("edit-btn-container");
    if (y.style.display === "block"){
    y.style.display = "none";
} 
}


</script>


 </body>
</html>
<?php
  
  if(isset($_POST['insert_costumer'])){
	  
	  //text data variables
	  $costumer_name=$_POST['costumer_name'];
	  $mob=$_POST['mob'];
	  $cos_add=$_POST['cos_add'];
	  $status='due';
	  
	   if($costumer_name=='')
			  {
              echo'<div class="errorMessege"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>please fill all the fields</div>';
		      }
	  
	        else{
  
	  $insert_cos="insert into costumers (cos_name,mobile,p_status,cos_address)values('$costumer_name','$mob','$status','$cos_add')";
	  
	  $run_cos = mysqli_query($con, $insert_cos);
	  if($run_cos){
		  
		  echo'<div class="successMessege"><i class="fa-regular fa-circle-check"></i>costumer inserted successfully</div>';
	     }
    	
			}		
	 
	  } 


      if(isset($_POST['delete'])){


        $u_id = $_GET['cos_id'];
        
        
        $delete = "delete from costumers where cos_id='$u_id'";
        
        $run_delete = mysqli_query($con, $delete);
          if($run_delete){
               
               echo"<script>window.open('home.php','_self')</script>";
            }
        
            $delete_p = "delete from entery where cos_id='$u_id'";
            $run_delete_p = mysqli_query($con, $delete_p);
            
        }
  
?>
