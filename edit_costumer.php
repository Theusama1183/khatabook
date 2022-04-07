<?php

include("includes/db24.php");

?>
<html>
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
a.back-icon {
    color: white !important;
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
form.edit-customer-form {
    width: 90%;
    margin: 0 auto;
}
input[type="text"] {
    width: 100%;
    margin-top: 20px;
    margin-bottom: 10px;
    background: transparent;
    border-bottom: 1px solid #00000073 !important;
    border: none;
}
input[type="submit"] {
    width: 100%;
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
<head>
<?php

		$user = $_GET['cos_id'];
		
        $get_user = "select * from costumers where cos_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);

      $cos_id=$row['cos_id'];
      $cos_name=$row['cos_name'];
	  $reg_date=$row['date'];
	  $cos_address=$row['cos_address'];
	  $cos_mob=$row['mobile'];
		
		
?>
</head>
 <body>

 <div class="cus-nave-container">
        <div class="back-btn-container">
            <a class="back-icon" href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="cus-image-container">
            <p class="Coust-Name">Edit Customer</p> 
        </div>
    </div>

    <form class="edit-customer-form" method="post" action="" enctype="multipart/form-data">

    <input type="text" name="u_name" value="<?php echo $cos_name;?>" placeholder="Name" />

    <input type="text" name="mob"value="<?php echo $cos_mob;?>" placeholder="Number" />

    <input type="text" name="cos_add" value="<?php echo $cos_address;?>" placeholder="Address" >
    
    <input type="submit" name="update" value="Save"> 

    </form>



 </body>
</html>

<?php 
if(isset($_POST['update'])){

$u_name = $_POST['u_name'];
$mob = $_POST['mob'];
$cos_add = $_POST['cos_add'];


$update = "update costumers set cos_name='$u_name', mobile='$mob', cos_address='$cos_add' where cos_id='$cos_id'";

$run = mysqli_query($con, $update);
if($run){
  echo'<div class="successMessege"><i class="fa-regular fa-circle-check"></i>Profile updated successfuly</div>';
	
    }
	 else{
     echo'<div class="errorMessege"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>Something went wrong try again later</div>';
   }
}

?>




