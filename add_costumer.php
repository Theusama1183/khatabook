<?php

include("includes/db24.php");
session_start();
if(!isset($_SESSION['ID'])){
    header("Location: index.php"); 
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
    background: #6200EA;
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
    background: #6200EA;
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
input:focus-visible {
    border: none;
    outline: none !important;
}

</style>
 <body>
 <nav class="nave-bar-container" >
    <div class="menu-link-container">
        <a href="home.php"><i class="fa-solid fa-house menu-link"></i></a>
        
    </div>

    <div class="menu-link-container">
    <a href="add_costumer.php"><i class="fa-solid fa-plus menu-link active"></i></a>
    <span class="menu-name">Add Customer</span>
    </div>

    <div class="menu-link-container">
    <a href="account.php"><i class="fa-solid fa-user menu-link"></i></a>
    </div>

</nav>
 <div class="cus-nave-container">
        <div class="back-btn-container">
            <a class="back-icon" href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="cus-image-container">
            <p class="Coust-Name">Add Customer</p> 
        </div>
    </div>

  
 <div align="center"style="margin-top:0px;">
   <form method="post" action="add_costumer.php" >
   		<input type="text" name="costumer_name" placeholder="Name*" />
		<input type="text" name="mob" placeholder="Number*" />
		<input type="text" name="cos_add" placeholder="Address*" />
		<input type="submit" name="insert_costumer" value="Submit"/>
   </form>
  
  </div>
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
			    

  
  
  
?>
