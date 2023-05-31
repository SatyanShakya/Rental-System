<?php

include ('config.php');

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
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
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
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                   
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
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
                            <h3 class="box-title">All Rents</h3>
                
                <div class="table-responsive">
                                <table class="table text-nowrap" border="1px">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">S.N</th>
                                            <th class="border-top-0">User Id</th>
                                            <th class="border-top-0">Cycle Id</th>
                                            <th class="border-top-0">From</th>
                                            <th class="border-top-0">To</th>
                                            <th class="border-top-0">Mobile no</th>

                                            <th class="border-top-0">Address</th>
                                            <th class="border-top-0">Operations</th>

                                            
                                        </tr>
                                    </thead>
                                   <?php
                                        $sql="select * from rent";
                                        $result=mysqli_query($conn,$sql);
                                        if ($result) {
                                            while($row=mysqli_fetch_assoc($result)){
                                                $id=$row['rent_id'];
                                                $user_id=$row['user_id'];
                                                $cycle_id=$row['cycle_id'];
                                                $from_date=$row['from_date'];
                                                $to_date=$row['to_date'];
                                                $mobile_no=$row['mobile_no'];
                                                $rent_address=$row['rent_address'];

                                                echo'<tr> 
                                                    <th scope="row">'.$id.'</th>
                                                    <th scope="row">'.$user_id.'</th>
                                                    <th scope="row">'.$cycle_id.'</th>
                                                    <th scope="row">'.$from_date.'</th>
                                                    <th scope="row">'.$to_date.'</th>
                                                    <th scope="row"> '.$mobile_no.'</th>
                                                    <th scope="row">'.$rent_address.' </th>
                                                    
                                                    <td>
                                                    <button><a href="updaterent.php?updateid='.$id.'">Update</a></button>
                                                    <button><a href="deleterent.php?deleteid='.$id.'">Delete</a></button>
                                                    </td>

                                                </tr>';
                                            }
                                           
                                        }
                                   ?>                              
                                </table>
                            </div>
                            
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