

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
                $total="<span style='color:#55E18A;'> Rs. $total</span>";
			}
			
			  else{
				 $u_status="<h5 style='color:#e84041;'>Due</h5>";
                 $total="<span style='color:#e84041;'> Rs. $total</span>";
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
    body {
    background-color: #f0eff6;
    font-family: 'Poppins', sans-serif;
    margin: 0;
    }
.containerff {
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: space-between;
    background: white;
    padding: 5px;
}
p.edit-btn {
    margin: 0 !important;
}
.Coust-container {
    width: 50%;
    text-align: center;
    border: 1px solid #00000029;
    padding: 5px;
    border-radius: 5px 0px 0px 5px;
}
.TBA-container {
    width: 100%;
    text-align: center;
    border: 1px solid #00000029;
    padding: 5px;
    border-radius: 0px 5px 5px 0px;
}
table {
    width: 100% !important;
    margin-top: 20px;
    padding: 10px;
}
.cus-nave-container {
    display: flex;
    background: #6200EA;
    align-content: center;
    align-items: center;
    justify-content: space-between;
    height: 40px;
}
.cus-call-container {
    width: 15%;
    display: flex;
    justify-content: center;
}
.cus-image-container {
    width: 80%;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-right: 8rem;
}
.back-btn-container {
    width: 10%;
    display: flex;
    justify-content: center;
}
.three-dots-btn-container {
    width: 5%;
    display: flex;
    justify-content: flex-start;
    color:white;
}
p.Coust-Name {
    margin-left: 10px;
    color: white;
    font-size: 14px;
}
p {
    font-size: 12px;
}
a:link{
    text-decoration: none!important;
  }
div#edit-btn-container {
    height: 20px;
    background: white;
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: center;
    position: absolute;
    width: 40%;
    border: 1px solid #00000054;
    text-align: center;
    padding-top: 5px;
    right: 0;
    color: black;
}
.fotter-btn-container {
    display: flex;
    align-content: center;
    align-items: center;
    justify-content: space-around;
    height: 50px;
    background: white;
    border-radius: 15px 15px 0 0;
    width: 100%;
    position: fixed;
    bottom: 0;
    color: #b1b6c2;
    text-decoration: none;
}
.add-btn-container,.delete-btn-container {
    width: 50%;
    text-align: center;
}
a.add-btn {
    background: green;
    width: 140px !important;
    height: 30px !important;
}
button.add-btn {
    background: green;
    width: 140px;
    height: 30px;
    border: none;
    color: white;
}
button.delete-btn {
    background: #e9455e;
    width: 140px;
    height: 30px;
    border: none;
    color: white;
}
a.phone-icon,.back-icon,.edit-btn {
    color: white;
}
a.edit-btn {
    color: black;
}
.eache-customer-entry {
    margin: 10px 10px 10px 10px;
    background: white;
    padding: 10px;
    width: 70%;
}
.each-title {
    color: #6200EA;
    font-size: 18px;
    font-weight: 600;
}
.each-amount {
    color: black;
    font-size: 14px;
    font-weight: 600;
}
.each-customer-descripiton-wrapper {
    max-width: 200px;
}
p.each-customer-descripiton {
    font-size: 13px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
.each-date-amount-wrapper {
    font-size: 10px;
    border-top: 1px solid #f0eff6;
    margin-top: 10px;
    padding-top: 10px;
    display: flex;
    align-content: center;
    justify-content: space-between;
    align-items: center;
}
.eache-customer-entry {
    color: black;
}
.footer-space {
    height: 80px;
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
form.delForm {
    display: flex;
    justify-content: flex-end;
}
input[type="submit"] {
    margin: 0 15px;
    background: transparent;
    border: none;
    font-size: 14px;
    color: #6200EA;
    font-weight: 600;
}
.cancel-btn {
    font-size: 14px;
    color: black;
    font-weight: 600;
}
form.delForm {
    margin-top: 30px;
}
input:focus-visible {
    border: none;
    outline: none !important;
}
    </style>

    <div class="cus-nave-container">
        <div class="back-btn-container">
            <a class="back-icon" href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>
    <a href="customer_profile.php?cos_id=<?php echo $cos_id; ?>">
        <div class="cus-image-container">
            <img src="images/CustomerPng.png" alt="" style="width: 30px;">
            <p class="Coust-Name"><?php echo $cos_name;?></p> 
        </div>
    </a>
        <div class="cus-call-container">
            <a class="phone-icon" href="tel:<?php echo $cos_mob;?>"><i class="fa-solid fa-phone"></i></a>
        </div>
        <div class="three-dots-btn-container">
            <span id="three-dots-btn" onclick="editBtn()"><i class="fa-solid fa-ellipsis-vertical"></i></span>
        </div>
    </div>

    <div id="edit-btn-container" style="display: none;">
        <a class="edit-btn" href="edit_costumer.php?cos_id=<?php echo $cos_id; ?>"><p class="edit-btn">Edit Customer</a>
    </div>

    <div class="containerff">
    <div class="TBA-container">
            <p>You Will Get</p>
            <p class="borrowing-amount"> <?php echo $total;?></p> 
        </div>
       
    </div>
    
			
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
                $total="<span style='color:#55E18A;'> Rs. $total</span>";
			}
			
			  else{
				 $u_status="<img src='images/due.png' width='40'height='20'>";
                 $total="<span style='color:#e84041;'> Rs. $total</span>";
			      }
	     ?> 


        <div class="customer-entry-data">
            <a href="view_work.php?en_id=<?php echo $en_id; ?>">
                <div class="eache-customer-entry">
                    <div class="each-title"><?php echo $work; ?></div>
                        <div class="each-customer-descripiton-wrapper">
                        <p class="each-customer-descripiton"><?php echo $cos_desc; ?></p> 
                    </div>
                    <div class="each-date-amount-wrapper">
                            <div class="each-amount"><?php echo $amount; ?></div>
                            <div class="each-date"><?php echo $date; ?></div>
                    </div>
                </div>
            </a>
        </div>
        
		
			
		<?php }
 
		
		$user=$_GET['cos_id'];
		
         $total=0;
			$pro_price="select*from entery WHERE cos_id='$user'";
			$run_pro_price=mysqli_query($con,$pro_price);
			
            
			while($p_price=mysqli_fetch_array($run_pro_price)){
			$amount=array($p_price['price']);
			$values=array_sum($amount);
			$total +=$values;
			}

		?>


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
		

        <div class="footer-space"></div>

<div class="fotter-btn-container">
    <div class="add-btn-container">
        <a href="addin_costumer.php?cos_id=<?php echo $cos_id; ?>"><button class="add-btn">+ Add</button></a>
    </div>
    <div class="delete-btn-container">
        <a onclick="DelBtn()"><button class="delete-btn">- Delete</button></a>
    </div>
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

<?php 
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

</body>
</html>