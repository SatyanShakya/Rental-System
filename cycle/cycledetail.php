
<?php

include ('config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cycle Rental</title>
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
						<li><a href="../logout.php">LOGOUT</a></li>
						
					</ul>
			</nav>
		</div>		
	</div>
	 <!--------- single product details ------>

	 <div class="small-container single-product">
     <div class="row">
        <div class="col-2">
         <img src="image\mtb.jpg" width="100%" id="ProductImg">
             

   </div>

    <div class="col-2">
			
                <h1>Furry E350</h1>
				
                <form>
				<!-- 					
				Duration:
				<select>
                    
                    <option>1 Day</option>
                    <option>2 Day</option>
                    <option>3 Day</option>
                    <option>4 Day</option>
                    <option>5 Day</option>
                </select> -->

				From Date:<input type="date">
				<br>

				To Date:<input type="date">
				<br>
				
				Mobile No:<input type="number" placeholder="MObile No:">
				<br>
				
				Address:<input type="text" placeholder="address:">
				<br>
				Email:<input type="email" placeholder="email">
				<br>
				<input type="submit" value="confirm">

				</form>
				
            </div>
        </div>
    </div>

	


</body>
</html>

<!---dis[lay image example --->

			<div class="col-2">
                <img src="<?php echo $row['image']; ?>" width=100px; height=100px;>
            </div>

            <div class="col-2">


                <h1>
                    <?php echo ' ' . $name . ' ' ?>
                </h1>
                <p> RS
                    <?php echo ' ' . $price . ' ' ?>
                </p>
                <form>


                    From Date:<input type="date">
                    <br>

                    To Date:<input type="date">
                    <br>

                    Mobile No:<input type="number">
                    <br>

                    Address:<input type="text">
                    <br>
                    Email:<input type="email">

                    <br>

                    <input type="submit" value="Rent">

                </form>

            </div>



            // Check if there are any results
            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_assoc($result)) {

                    $image = $row['image'];

                    $name = $row['name'];
                    $price = $row['price'];

                    echo'
                    <div class="col-2">
                     <img src= '.$image.'> 
                    </div>

                    <div class="col-2">
                     <h1> ' . $name . ' </h1> 
                     <p> ' . $price . ' </p>
                     

                     <form>


                    From Date:<input type="date">
                    <br>

                    To Date:<input type="date">
                    <br>

                    Mobile No:<input type="number">
                    <br>

                    Address:<input type="text">
                    <br>
                    Email:<input type="email">
                    <br>
                    <input type="submit" value="Rent Now">

                </form>
                </div>
                    ';  
