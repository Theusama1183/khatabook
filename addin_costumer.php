<?php

include("includes/db24.php");

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
<head>
<?php
error_reporting(0);
		$user = $_GET['cos_id'];
		
        $get_user = "select * from costumers where cos_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);


      $cos_id=$row['cos_id'];
      $cos_name=$row['cos_name'];
	  $reg_date=$row['date'];
	  $cos_address=$row['cos_address'];
	  $cos_mob=$row['mobile'];
	  $cos_status=$row['p_status'];
	  
	  $user = $_GET['cos_id'];
		
        $get_user = "select * from entery where cos_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);
	  
		$entery_id=$row['entery_id'];
		
?>
 <body>

 <style>
	 .cus-nave-container {
    display: flex;
    background: #6200EA;
    align-content: center;
    align-items: center;
    justify-content: space-between;
    height: 40px;
}
input:focus-visible {
    border: none;
    outline: none !important;
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
    display: block;
}
p.page-heading {
    margin-left: 10px !important;
    color: white;
    font-size: 15px;
    margin-bottom: 0;
}
p.Coust-Name {
    margin-left: 10px;
    color: white;
    font-size: 14px;
    margin-top: 0;
}
td.eleips {
    max-width: 40px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
form.entry-form {
    margin-top: 20px;
    display: grid;
}
input.entry-fields {
    width: 90%;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 10px;
    border: none;
    background: transparent;
    border-bottom: 1px solid #00000073 !important;
}
input.entry-btn {
    width: 90%;
    margin: 0 auto;
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
 </style>

 <div class="cus-nave-container">
        <div class="back-btn-container">
            <a class="back-icon" href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
        <div class="cus-image-container">
            <p class="page-heading">New Entery</p>
			<p class="Coust-Name"><?php echo $cos_name;?></p>
        </div>
    </div>


  <form class="entry-form" method="post" action="addin_costumer.php?cos_id=<?php echo $cos_id; ?>" enctype="multipart/form-data">
  <input class="entry-fields" type="text" name="work" placeholder="Title" />
  <input class="entry-fields" type="text" name="pro_desc" placeholder="Description" />
  <input class="entry-fields" type="text" name="pro_price" placeholder="Amount" />
  <input class="entry-btn" type="submit" name="insert" value="Add" />
  </form>

 
			
<?php
    error_reporting(0);
      $p_user = $_GET['cos_id'];

       $i=0;
		$get_costumers="select*from entery WHERE cos_id='$p_user' order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$en_id = $row_costumers['entery_id'];
			$work = $row_costumers['work'];
			$cos_desc = $row_costumers['wr_desc'];
			$amount = $row_costumers['price'];
			$date = $row_costumers['date'];
			$i++;
			
			if($amount=='0'){
				$u_status="<img src='images/paid.png' width='40'height='20'>";
			}
			
			  else{
				 $u_status="<img src='images/due.png' width='40'height='20'>";
			      }
			
	 } 

 ?>
 </body>
</html>

<?php 
if(isset($_POST['insert'])){

$work = $_POST['work'];
$pr_desc = $_POST['pro_desc'];
$price = $_POST['pro_price'];


	   if($work=='' OR $pr_desc=='' OR $price=='' )
			  {
                echo'<div class="errorMessege"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>please fill all the fields</div>';
		      exit();
		      }
	  
	        else{


 $insert_costumer="insert into entery (cos_id,date,work,wr_desc,price)values('$cos_id',NOW(),'$work','$pr_desc','$price') ";

	  $run_costumer = mysqli_query($con, $insert_costumer);
	  if($run_costumer){
		  
		  echo'<div class="successMessege"><i class="fa-regular fa-circle-check"></i>Entry inserted successfully</div>';

	     }

       }
   }

?>




