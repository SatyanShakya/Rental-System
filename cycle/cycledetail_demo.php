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
    $rent_quantity = $_POST['rent_quantity'];
    $cycle_price = $_POST['price'];
    $total = $_POST['total'];

    //for cycle name 
    $cycledata = "Select cycle_name FROM cycle WHERE id = '$id' ";
    $result = mysqli_query(mysqli_connect('localhost', 'root', '', 'user_db'), $cycledata);

    $validate = true;

    if (strlen($_POST['mobile_no']) < 10) {
        $validate = false;
        // echo "<div class= 'error-msg'>Invalid mobile number </div>";
        $error = 'invalid mobile number';



    }
    if ($validate) {

        if ($from_date != "" && $to_date != "" && $mobile_no != "" && $rent_address != "" && $rent_quantity != "") {

            $row = mysqli_fetch_assoc($result);

            $insert = "INSERT INTO rent(rent_id,user_id,cycle_id,from_date, to_date, mobile_no, rent_address, cycle_name, rent_quantity,price, total) 
            VALUES('','$user_id','$id','$from_date','$to_date','$mobile_no','$rent_address','$row[cycle_name]','$rent_quantity','$cycle_price','$total')";
            
            $var = mysqli_query(mysqli_connect('localhost', 'root', '', 'user_db'), $insert);




            if ($var) {
                header('location:Success.php');
            } else {
                echo "Order not successfull";
            }



            //header('location:login_form.php');
        } else {
            $error[] = 'Please Fill the required Informations';
        }

        // Reduce quantity on purchase
        $cycleId = $_GET['cycleid'];
        $purchaseQuantity = $_POST['rent_quantity'];

        // Update the product quantity
        $updateQuery = "UPDATE cycle SET quantity = quantity - $purchaseQuantity WHERE id = $cycleId";
        mysqli_query(mysqli_connect('localhost', 'root', '', 'user_db'), $updateQuery);

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
    <script src="https://js.stripe.com/v3/"></script>

    <script>

        function calculatePrice() {
            var fromdate = new Date(document.getElementById("fromDate").value);
            var todate = new Date(document.getElementById("toDate").value);

            var timeDiff = Math.abs(todate.getTime() - fromdate.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

            // document.getElementById("result").innerHTML = "Number of days: " + diffDays;


            var quantity = document.getElementById("quantity").value;
            var price = document.getElementById("price").value;

            var total = quantity * diffDays * price;

            document.getElementById("total").value = total;
        }

        //put two function at once in form onsubmit

        function combinedSubmit(event) {
            var isValid = validateInput() && validateTwoDates() && validateDate();

            if (!isValid) {
                event.preventDefault(); // Prevent form submission
            }

            return isValid;
        }

        //addres only in letter
        function validateInput() {
            var input = document.getElementById("address").value;
            var regex = /^[A-Za-z]+$/; // Regular expression to match alphabets only

            if (input.match(regex)) {
                // Input contains only alphabets
                return true;
            } else {
                // Input contains non-alphabetic characters
                alert("Please enter valid address");
                return false;


            }
        }

        //curent date only
        function validateDate() {
            var inputDate = new Date(document.getElementById("fromDate").value);
            var currentDate = new Date();

            if (inputDate < currentDate) {
                alert("Invalid date. Please select a date that is not expired.");
                return false;
            }

            return true;
        }

        //from date should be greater

        function validateTwoDates() {
            var fromDate = new Date(document.getElementById("fromDate").value);
            var toDate = new Date(document.getElementById("toDate").value);

            if (fromDate > toDate) {
                alert("Invalid date range. Please select a valid range of dates.");
                return false;
            }

            return true;
        }


    </script>



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
            $qty = $row['quantity'];


            ?>

            <div class="col-2">
                <img src=<?php echo ' ' . $image . ' ' ?>>
            </div>

            <div class="col-2">
                <h1>
                    <?php echo ' ' . $name . ' ' ?>
                </h1>

                <form action="" method="post" class="cycledetailform" onsubmit="return combinedSubmit(event)">


                    <label>From Date:</label>
                    <input type="date" id="fromDate" name="from_date" required>

                    <label>To Date:</label>
                    <input type="date" id="toDate" name="to_date" required>


                    <label>Mobile No:</label>
                    <input type="number" name="mobile_no" required>

                    <?php if (isset($error)) { ?>
                        <div class="error-msg">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>

                    <label>Address:</label>
                    <input type="text" id="address" name="rent_address" required>


                    <label>Quantity:</label>


                    <input type="number" name="rent_quantity" id="quantity" min="1" max=<?php echo $qty ?>
                        onchange="calculatePrice()" required>


 

                    <label>Price: </label>
                    <input type="number" id="price" value=<?php echo ' ' . $price . ' ' ?> readonly name="price">
                    <br>


                    <label>Total amount: </label>
                    <input type="number" id="total" name="total" readonly>
                    <br>


                    <input type="submit" value="Rent Now" name="submit" class="btn_small"> 
                    
                    <!-- <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" name="submit"
                        data-key=" <?php echo $publishablekey ?>"
                        data-name="Cycle Rental System" 
                        data-description="Cycle payment" 
                        data-amount="<?php echo ' ' . $price . ' ' ?> " 
                        data-currency="inr"
                        data-label="Rent Now"
                        data-email="satyanshakya@gmail.com"
                        >
                        </script>  -->

   
                </form>
            </div>

        </div>
    </div>

    <!-- footer -->

    <section class="footer">
        <div class="social">
            <a href="https://www.facebook.com/thebikefarmnepal/" target="_blank"><i class="fa-brands fa-facebook"
                    style="color: #0561ff;"></i></a>
            <a href="https://www.instagram.com/thebikefarmnepal/?fbclid=IwAR0aieroTwgx5RvJGNPdOujqmcv4j4_2F0DHP9nxAzheu6agqUK7RKJZpzM"
                target="_blank"><i class="fa-brands fa-instagram" style="color: #5e0bf9;"></i></a>
            <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fapi.whatsapp.com%2Fsend%3Fphone%3D9779803000667%26app%3Dfacebook%26entry_point%3Dpage_cta%26fbclid%3DIwAR2pLwPWUwZhrFo1MKlP_YKbMrHWxDxLGgfu-IEEYNMRf-yZQK9DavXnG1M&h=AT1evIeygfB1WoJWFVKGm8KUbx907ZoSQ2_6oOokhf5u4gGF7gleuXT0zS8O2gicvc-2hpmZwR_zdUtK_obaKgArP6TqM_jCqls4Vb__31oEom_bP7-2uEjkqZzzizadM1S6Rw"
                target="_blank"><i class="fa-brands fa-whatsapp" style="color: #13b110;"></i></a>

        </div>
        <p class="copyright">
            980-3000667<br>
            thebikefarm.nepal@gmail.com <br><br>
            Satyan Shakya @ 2023
        </p>
    </section>


</body>

</html>