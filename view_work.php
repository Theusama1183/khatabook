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
    body {
    margin: 0;
}
p.detail-title {
    margin: 0;
}
  .cus-nave-container {
    display: flex;
    background: #6200EA;
    align-content: center;
    align-items: center;
    justify-content: space-between;
    height: 40px;
}
a.edit-btn, .delete-btn {
    color: black;
    text-decoration: none;
}
.back-btn-container {
    width: 10%;
    display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
}
a.back-icon {
    color: white;
}
.three-dots-btn-container {
    width: 5%;
    color: white;
}
.cus-image-container {
    width: 80%;
}
p.edit-btn {
    margin: 6px;
}
h5.page-heading {
    color: white;
}
div#edit-btn-container {
    height: 50px;
    background: white;
    align-content: center;
    align-items: center;
    justify-content: center;
    position: absolute;
    width: 40%;
    border: 1px solid #00000054;
    text-align: center;
    right: 0;
    color: black;
}
p.edit-btn {
    border-bottom: 1px solid #00000014;
}
a.edit-btn,.delete-btn { 
    color: black;
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
    color: #6200EA;
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
.delete-btn-wrapper {
    display: flex;
    align-content: center;
    justify-content: center;
    background: white;
    position: absolute;
    top: 50%;
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
    margin: 0 15;
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
 <body>
  
<?php

	$user = $_GET['en_id'];	
    $get_user = "select * from entery where entery_id='$user'";
    $run_user = mysqli_query($con, $get_user);
    $row=mysqli_fetch_array($run_user);

        $en_id = $row['entery_id'];
        $cos_id=$row['cos_id'];
        $entery_id=$row['entery_id'];
        $work=$row['work'];
        $wr_desc=$row['wr_desc'];
        $date=$row['date'];
        $price=$row['price'];
		
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


<div class="cus-nave-container">
        <div class="back-btn-container">
            <a class="back-icon" href="home.php"><i class="fa-solid fa-arrow-left-long"></i></a>
        </div>

        <div class="cus-image-container">
            <h5 class="page-heading">
              Entery Details
            </h5>
        </div>

        <div class="three-dots-btn-container">
            <span id="three-dots-btn" onclick="editBtn()"><i class="fa-solid fa-ellipsis-vertical"></i></span>
        </div>
    </div>

    <div id="edit-btn-container" style="display: none;">
        <a  class="delete-btn" href="edit_work.php?en_id=<?php echo $en_id; ?>"><p class="edit-btn">Edit</a>
        <a class="edit-btn" onclick="DelBtn()"><p class="edit-btn">Delete</a>
    </div>

    <div id="delete-btn-container" style="display: none;">
        <div class="delete-btn-wrapper">
            <div class="ico-container">
            <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <div class="text-container">
                <p style="color:black !Important; line-height: 18px;
    font-size: 16px;">
                    Are you sure you want to delete this entry?
                </p>

                <form class="delForm" method="post" action="" enctype="multipart/form-data">
                    <span onclick="DelBtn()" class="cancel-btn" >Cancel</span>
                     <input type="submit" name="delete" value="Yes"/>
                </form>
            </div>
        </div>
    </div>


<div class="entery-details-wrapper">
  <div class="icon-side">
     <span class="ico">Rs</p>
  </div>
  <div class="content-side">
    <p class="detail-title">Amount</p>
    <p class="detail-content"><?php echo $price;?></p>
  </div>
</div>

<div class="entery-details-wrapper">
  <div class="icon-side">
     <span class="ico"><i class="fa-regular fa-calendar"></i></p>
  </div>
  <div class="content-side">
    <p class="detail-title">Date</p>
    <p class="detail-content"><?php echo $date;?></p>
  </div>
</div>

<div class="entery-details-wrapper">
  <div class="icon-side">
     <span class="ico"><i class="fa-solid fa-book"></i></p>
  </div>
  <div class="content-side">
    <p class="detail-title">Descripation</p>
    <p class="detail-content"><?php echo $wr_desc;?></p>
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


<?php 
if(isset($_POST['delete'])){
$u_id = $_GET['en_id'];
$delete = "delete from entery where entery_id='$u_id'";
$run_delete = mysqli_query($con, $delete);
  if($run_delete){
	  
	   echo"<script>confirm('Do You Realy Want To Delete')</script>"; 
	   
	   echo"<script>window.open('view_costumer.php?cos_id=$cos_id','_self')</script>";
    }

}
?>
</script>
 </body>
</html>

