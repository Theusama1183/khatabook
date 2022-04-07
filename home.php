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
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
    <title>My Credit Book</title>
</head>
<body>

<nav class="nave-bar-container" >
    <div class="menu-link-container">
        <a href="home.php"><i class="fa-solid fa-house menu-link active"></i></a>
        <span class="menu-name">Home</span>
    </div>

    <div class="menu-link-container">
    <a href="add_costumer.php"><i class="fa-solid fa-plus menu-link"></i></a>
    </div>

    <div class="menu-link-container">
    <a href="account.php"><i class="fa-solid fa-user menu-link"></i></a>
</div>

</nav>

<div class="hero-section">
    <div class="account-container">
        <a href="account.php"><img src="upload/<?php echo $row['File']?>" style="width: 50px;border-radius: 50%;border: 3px solid white;">
		</a>
        <h4 class="author-name">Welcome <?php echo $_SESSION["First_Name"] ?></h4>
    </div>
    <div class="total-payment-container">
        <p class="dfhdj"> Total Udhar Payments  </p>
        <h3 class="amount-home"><?php echo $total;?> RS</h3>
    </div>
</div>
<script>
	$(document).ready(function(){
		$('#search').keyup(function(){
			search_table($(this).val());
		});

		function search_table(value) {
			$('#customer_table tr').each(function(){
				var found = 'false';
				$(this).each(function(){
					if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) 
					{
						found = ' true ';
					} 
			});
			if (found == ' true ') 
			{
				$(this).show();	
			}
			else
			{
				$(this).hide();
			}
		});
	}

});

</script>

<div class="search-container">
	<input type="text" name="Search" id="search" placeholder="Search Customer" class="form-control">
</div>

<table id="customer_table" style="margin-bottom: 100px;">
	<tbody>
			
<?php

       $i=0;
		$get_costumers="select*from costumers order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$cos_id = $row_costumers['cos_id'];
			$cos_name = $row_costumers['cos_name'];
			$cos_add = $row_costumers['cos_address'];
			$cos_status = $row_costumers['p_status'];
			$date = $row_costumers['date'];
			$i++;
			
			
	

		
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
				$total="<span style='color:#55E18A;'>$total</span>";
			}
			
			  else{ 
				 $u_status="<h5 style='color:#e84041;'>Due</h5>";
				 $total="<span style='color:#e84041;'>$total</span>";
			      }
						
	     ?> 

	<tr>

		<td class="other-td" >
			<a href="view_costumer.php?cos_id=<?php echo $cos_id; ?>">
				<div class="content-container">
					<div class="image-cotainer">
						<img class="cus-img" src="images/CustomerPng.png" alt="">
					</div>
					<div class="name-date-container">
						<h5 class="customer-name"><?php echo $cos_name; ?></h5>
						<h5 class="selling-date"><?php echo $date; ?></h5>
					</div>
					<div class="name-status-total">
						<h5 class="customer-status"><?php echo $u_status; ?></h5>
						<h5 class="customer-total"><?php echo $total; ?></h5>
					</div>
				</div>
			</a>
		</td>
	</tr>
			
			
			
		<?php } ?>
<tbody>
      </table>

 
</body>
</html>