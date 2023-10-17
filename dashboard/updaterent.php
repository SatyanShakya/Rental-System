<?php

include('config.php');
$id = $_GET['updateid'];
$sql = "SELECT * from rent where rent_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$user_id = $row['user_id'];
$cycle_id = $row['cycle_id'];
$from_date = $row['from_date'];
$to_date = $row['to_date'];
$mobile_no = $row['mobile_no'];
$rent_address = $row['rent_address'];
$cycle_price = $row['price'];
$rent_quantity = $row['rent_quantity'];
$total = $row['total'];

if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $cycle_id = $_POST['cycle_id'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $mobile_no = $_POST['mobile_no'];
    $rent_address = $_POST['rent_address'];
    $cycle_price = $_POST['price'];
    $rent_quantity = $_POST['rent_quantity'];
    $total = $_POST['total'];


    $sql = "UPDATE `rent` set user_id='$user_id',cycle_id='$cycle_id',from_date='$from_date',to_date='$to_date',mobile_no='$mobile_no',rent_address='$rent_address',price='$cycle_price',rent_quantity='$rent_quantity',total='$total' where rent_id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:renthistory.php');
    } else {
        die(mysqli_error($conn));
    }
}
;


?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>basictable</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
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
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="addcycle.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="image/logo.png" alt="homepage" width="75px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->

                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>


                </div>
            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="basic-table.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Basic Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addcycle.php"
                                aria-expanded="false">
                                <!-- <i class="far fa-clock" aria-hidden="true"></i> -->
                                <span class="hide-menu"> &#43 Add Cycle</span>
                            </a>
                        </li>



                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewcycle.php"
                                aria-expanded="false">
                                <!-- <i class="fa fa-table" aria-hidden="true"></i> -->
                                <span class="hide-menu">&#10070 View Cycle</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="renthistory.php"
                                aria-expanded="false">
                                <!-- <i class="fa fa-table" aria-hidden="true"></i> -->
                                <span class="hide-menu">&#9783 rent history</span>
                            </a>
                        </li>

                    </ul>


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Cycle Rental System</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="../logout.php">LOGOUT</a></li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Update rent</h3>

                          

                            <form method="post" class="formdesign" onsubmit="return combinedSubmit(event)">

                                User Id:
                                <input type="number" name="user_id" readonly value=<?php echo $user_id; ?>> <br>

                                Cycle Id:
                                <input type="number" name="cycle_id" readonly value=<?php echo $cycle_id; ?>><br>

                                From:
                                <input type="date" id="fromDate" name="from_date" value=<?php echo $from_date; ?>
                                    required><br>

                                To:
                                <input type="date" id="toDate" name="to_date" value=<?php echo $to_date; ?>
                                    required><br>

                                Mobile:
                                <input type="number" placeholder="mobile no" name="mobile_no" value=<?php echo $mobile_no; ?> required><br>

                                Address:
                                <input type="address" placeholder="Address" id="address" name="rent_address" value=<?php echo $rent_address; ?> required> <br>



                                Quantity:
                                <input type="number" id="quantity" placeholder="Quantity" name="rent_quantity"
                                    value=<?php echo $rent_quantity; ?> onchange="calculatePrice()" min="1" max="3" required> <br>

                                Price:
                                <input type="number" id="price" value=<?php echo $cycle_price; ?> readonly name="price"
                                    required>
                                <br>


                                Total amount:
                                <input type="number" id="total" name="total" readonly>
                                <br>


                                <input type="submit" value="Update" name="submit">

                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>