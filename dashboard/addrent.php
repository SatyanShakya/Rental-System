
<?php

include ('config.php');

if(isset($_POST['submit'])){

    $from_date =$_POST['from_date'];
    $to_date =$_POST['to_date'];
    $mobile_no =$_POST['mobile_no'];
    $rent_address =$_POST['rent_address'];



        $insert = "INSERT INTO rent(from_date, to_date,mobile_no,rent_address) VALUES('$from_date','$to_date','$mobile_no','$rent_address')";
        $querry= mysqli_query($conn, $insert);
        if($querry){
            header('location:viewcycle.php');
        }
        else{
           // $error[] = 'cycle already exist!';
            echo"Failed";
        }
         
          
   
 };
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
    <title>dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
   
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
   
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                   
                    <a class="navbar-brand" href="addcycle.php">
                        
                        <b class="logo-icon">
                            
                            <img src="image/logo.png" alt="homepage" width="75px"/>
                        </b>
                       
                        <span class="logo-text">
                            
                        </span>
                    </a>
                   
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
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
               
            </div>
            
            <div class="container-fluid">
                
                <div class="row justify-content-center">
                   
                <form method="post" action="" enctype="multipart/form-data">
                  
                  From:<input type="date"  name="from_date"><br>

                  To:<input type="date"  name="to_date"><br>

                  <input type="number" placeholder="mobile no"  name="mobile_no"><br>
                  
                  <input type="address"   placeholder="Address" name="rent_address">
                

                 <input type="submit" value="Add" name="submit">
                </form>  
                
                
            </div>
           
            
        </div>
       
    </div>
   
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>