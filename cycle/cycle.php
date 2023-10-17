<?php
session_start();
//var_dump($_SESSION['allInfo']);
include('config.php');

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>cycle</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body>
	<div class="main">
		<div class="container">


			<div class="logo">
				<img src="image\logo.png" width="200px">

			</div>
			<nav>
				<ul>
					<li><a href="main.php">HOME</a></li>
					<li><a href="cycle.php">CYCLE</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="myrent.php">RENT</a></li>
					<li><a href="../logout.php">LOGOUT</a></li>

				</ul>
			</nav>
		</div>
	</div>

	<div class="small-container">

		<div class="row row-2">
			<h2>All Cycles</h2>

		</div>

		<div class="row">
		<?php

		$sql = "select * from cycle";
		$result = mysqli_query($conn, $sql);

		$i = 0;
		// Check if there are any results
		if (mysqli_num_rows($result) > 0) { 
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$image = $row['image'];
				$i++;
				$name = $row['cycle_name'];
				$price = $row['price']; 
				$quantity=$row['quantity'];
				?>
					
	 
					<div class="col-4">
						<!-- <a href="cycledetail_demo.php? cycleid='.$id.'" >  -->
						<img src="<?php echo $row['image']; ?>">
						<!-- </a> -->
						<?php
						// if($quantity){

						
						echo '
                           <h4>' . $name . ' </h4>
  						   <p> Rs  ' . $price . '</p>   
							 <p> Quantity:  ' . $quantity . '</p>      
							
							 <a href="cycledetail_demo.php?cycleid=' . $id . ' " class="btn_small">Rent It </a>                           
                            ';
						// }
						// else{
						// 	echo'
						// 	<h4>' . $name . ' </h4>
						// 	<p> Rs  ' . $price . '</p>   
						// 	<p> Quantity : 0 </p>      					                           
						//    ';
						// }
							?>

							</div> 
							
							<?php
			}
		}
		?> 
		</div>
	</div>
		
	<!-- footer -->

	<section class="footer">
		<div class="social">
		<a href="https://www.facebook.com/thebikefarmnepal/" target="_blank"><i class="fa-brands fa-facebook" style="color: #0561ff;"></i></a>
		<a href="https://www.instagram.com/thebikefarmnepal/?fbclid=IwAR0aieroTwgx5RvJGNPdOujqmcv4j4_2F0DHP9nxAzheu6agqUK7RKJZpzM" target="_blank"><i class="fa-brands fa-instagram" style="color: #5e0bf9;"></i></a>
		<a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fapi.whatsapp.com%2Fsend%3Fphone%3D9779803000667%26app%3Dfacebook%26entry_point%3Dpage_cta%26fbclid%3DIwAR2pLwPWUwZhrFo1MKlP_YKbMrHWxDxLGgfu-IEEYNMRf-yZQK9DavXnG1M&h=AT1evIeygfB1WoJWFVKGm8KUbx907ZoSQ2_6oOokhf5u4gGF7gleuXT0zS8O2gicvc-2hpmZwR_zdUtK_obaKgArP6TqM_jCqls4Vb__31oEom_bP7-2uEjkqZzzizadM1S6Rw" target="_blank"><i class="fa-brands fa-whatsapp" style="color: #13b110;"></i></a>
		
	</div>
	<p class="copyright">
	980-3000667<br>
	thebikefarm.nepal@gmail.com <br><br>
		Satyan Shakya @ 2023
</p>
	</section>
		
</body>

</html>









