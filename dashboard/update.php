<?php

include ('config.php');
$id=$_GET['updateid'];
$sql="SELECT * from user_form where id=$id";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$pass=$row['password'];
$user_type=$row['user_type'];

if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $user_type = $_POST['user_type'];
 
    $sql = "UPDATE `user_form` set name='$name',email='$email', password='$pass',user_type='$user_type' where id=$id";
    $result = mysqli_query($conn, $sql);
       
    if($result){
        header('location:basic-table.php');
    }
    else{
        die(mysqli_error($conn));
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
    <title>basictable</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                            <img src="image/logo.png" alt="homepage" width="75px"/>
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
                            <h3 class="box-title">Update user</h3>
                            <input type="text" name="name" required placeholder="enter your name" value=<?php echo $name;  ?> >
                              <input type="email" name="email" required placeholder="enter your email" value=<?php echo $email;  ?>>
                            <input type="password" name="password" required placeholder="enter your password" >
                             <input type="password" name="cpassword" required placeholder="confirm your password">
                             <select name="user_type">
                               <option value="user">user</option>
                               <option value="admin">admin</option>
                            </select>
                              <input type="submit" name="submit" value="update">
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