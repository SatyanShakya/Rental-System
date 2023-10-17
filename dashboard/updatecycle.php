<?php

include('config.php');
$id = $_GET['updatecycleid'];
$sql = "SELECT * from cycle where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$cyclename = $row['cycle_name'];
$price = $row['price'];
$image = $row['image'];
$quantity = $row['quantity'];

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $cyclename = $_POST['cycle_name'];
    $price = $_POST['price'];
    // $target_dir = "image/";
    // $target_file = $target_dir . basename($_FILES["image"]["name"]);
    // move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $quantity = $_POST['quantity'];

    
    $select = " SELECT * FROM cycle WHERE cycle_name = '$name' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error= 'cycle already exist!';

    } else {


    $sql = "UPDATE `cycle` set id='$id',cycle_name='$cyclename',price='$price',quantity='$quantity' where id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:viewcycle.php');
    } else {
        die(mysqli_error($conn));
    }
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

function validatePrice() {
    var price = document.getElementById("price").value;
    var quantity = document.getElementById("quantity").value;


    if (price < 0) {
        alert("Invalid price. Please enter a valid price.");
        return false;
    }


    if (quantity < 0) {
        alert("Invalid quantity. Please enter a valid quantity.");
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
                            <h3 class="box-title">Update cycle</h3>

                            <form method="post" class="formdesign"  enctype="multipart/form-data"  onsubmit="return validatePrice()">



                                Id:
                                <input type="number" name="id" readonly value=<?php echo $id; ?>> <br>

                                Cycle Name:

                                <input type="text" name="cycle_name" value=<?php echo $cyclename; ?> required><br>

                                Price:

                                <input type="number"  id="price" name="price" value=<?php echo $price; ?> required><br>


                                Quantity:

                                <input type="number"  id="quantity" name="quantity" value=<?php echo $quantity; ?> required><br>

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