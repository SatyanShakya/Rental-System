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
				?>
					
	
					<div class="col-4">
						<!-- <a href="cycledetail_demo.php? cycleid='.$id.'" >  -->
						<img src="<?php echo $row['image']; ?>">
						<!-- </a> -->
						<?php
						echo '
                           <h4>' . $name . ' </h4>
  						   <p> Rs  ' . $price . '</p>      
							 <button class="btn_small"><a href="cycledetail_demo.php?cycleid=' . $id . ' ">Rent It </a></button>                             
                            ';
							?>

							</div>
							
							<?php
			}
		}
		?>
		</div>
		
</body>

</html>









