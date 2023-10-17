



<?php
session_start();
//var_dump($_SESSION['allInfo']);

?>
<?php
include('config.php');

if (isset($_POST['submit'])) {

    $id = $_GET['cycleid'];
    $user_id = $_SESSION['allInfo']['id'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $mobile_no = $_POST['mobile_no'];
    $rent_address = $_POST['rent_address'];

    //for cycle name 
    $cycledata = "Select cycle_name FROM cycle WHERE id = '$id' ";
    $result = mysqli_query($conn, $cycledata);

    if (!strlen($mobile_no) === 10) {
        $error[] = 'Enter valid mobile no';

    } else {

        $row = mysqli_fetch_assoc($result);
        $insert = "INSERT INTO rent(rent_id,user_id,cycle_id,from_date, to_date, mobile_no, rent_address, cycle_name) VALUES('','$user_id','$id','$from_date','$to_date','$mobile_no','$rent_address','$row[cycle_name]')";
        $var = mysqli_query($conn, $insert);

        if ($var) {
            echo "ordered";
        } else {
            echo "Order not successfull";
        }

        //header('location:login_form.php');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cycle Rent</title>
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
    <!--------- single product details ------>

    <div class="small-container single-product">
        <div class="row">

            <?php
            $id = $_GET['cycleid'];
            $sql = "SELECT * from cycle WHERE id=$id  ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            $name = $row['cycle_name'];
            $price = $row['price'];
            $image = $row['image'];

            echo '
                    <div class="col-2"> 
                     <img src= ' . $image . '> 
                    </div>

                    <div class="col-2">
                     <h1> ' . $name . ' </h1> 
                     
                     

                     <form action="" method="post" class="cycledetailform">

                    
                    <label >From Date:</label>
                    <input type="date" name="from_date">
                    <br>

                    <label >To Date:</label>
                    <input type="date" name="to_date">
                    <br>

                    <label >Mobile No:</label>
                    <input type="number" name="mobile_no">
                    <br>

                    <label >Address:</label>
                    <input type="text" name="rent_address">
                    <br>
                    
                    <label >price: </label>
                    <input  type="number" value=' . $price . ' readonly name="price"> 
                    <br>
                    
                    <input type="submit" value="Rent Now" name="submit" class="btn_small">

                </form>
                </div>
                    ';





            ?>

        </div>
    </div>

<!-- footer -->

<section class="footer">
		<div class="social">
		<a href="https://www.facebook.com/thebikefarmnepal/" target="_blank"><i class="fa-brands fa-facebook" style="color: #0561ff;"></i></a>
		<a href="https://www.instagram.com/thebikefarmnepal/?fbclid=IwAR0aieroTwgx5RvJGNPdOujqmcv4j4_2F0DHP9nxAzheu6agqUK7RKJZpzM" target="_blank"><i class="fa-brands fa-instagram" style="color: #5e0bf9;"></i></a>
		<a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fapi.whatsapp.com%2Fsend%3Fphone%3D9779803000667%26app%3Dfacebook%26entry_point%3Dpage_cta%26fbclid%3DIwAR2pLwPWUwZhrFo1MKlP_YKbMrHWxDxLGgfu-IEEYNMRf-yZQK9DavXnG1M&h=AT1evIeygfB1WoJWFVKGm8KUbx907ZoSQ2_6oOokhf5u4gGF7gleuXT0zS8O2gicvc-2hpmZwR_zdUtK_obaKgArP6TqM_jCqls4Vb__31oEom_bP7-2uEjkqZzzizadM1S6Rw" target="_blank"><i class="fa-brands fa-whatsapp" style="color: #13b110;"></i></a>
		<a href="thebikefarm.nepal@gmail.com" target="_blank"><i class="fa-solid fa-envelope" style="color: #11a5e4;"></i></a>
		
	</div>
	<p class="copyright">
    980-3000667<br>
	thebikefarm.nepal@gmail.com <br>
		Satyan Shakya @ 2023
</p>
	</section>
		

</body>

</html>




<!-- stipe -->
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" name="submit"
                        data-key="<?php echo $publishablekey ?>"
                        data-name="Cycle Rental System" 
                        data-description="Cycle payment" 
                        data-amount="<?php echo ' ' . $price . ' ' ?>" 
                        data-currency="inr"
                        data-label="Rent Now"
                        data-email="satyanshakya@gmail.com"
                        >
                        </script> 

