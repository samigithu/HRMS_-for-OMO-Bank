<?php
session_start();
  if(!isset($_SESSION['employee_id'])){
      //header("location:../index.php");exit();
	  echo "<script>window.location='../index.php';</script>";exit();
  }


$id=$_SESSION['employee_id']['employee_id'];
?>
<?php include "../Language/lang.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo htmlspecialchars($lang['hrms']);?> </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Favicon -->
<link rel="shortcut icon" href="../image/omoBank1.jpg" type="image/x-icon">
<link rel="apple-touch-icon" href="../image/omoBank1.jpg">  


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

      <!-- DataTables -->
  <link rel="stylesheet" href="../user/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../user/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <script type="text/javascript" src="../user/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="../user/js/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../dp/jquery.datetimepicker.css"/>
<script src="../dp/jquery.datetimepicker.full.js"></script>
<?php date_default_timezone_set("Africa/Addis_Ababa");?>
   <!-- styles -->


<link rel="stylesheet" href="../assets/css/slippry.css">
<link href="../assets/css/about.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/color/default.css">
 <link rel="stylesheet" href="../user/css/popup_style.css">

<style>
.pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <!-----User with setting--->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                </i><b><i class="material-icons"> <?php echo htmlspecialchars($lang['notifications']);?> </i><i class="fa fa-user"></i>
                     <?php         
                                   include('include/access/connector.php'); 
                                    								   
								    $pandingleave2 = mysqli_query($phdb,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='pending' AND EmpId='$id'");
                                     $tpandingleave2 = mysqli_fetch_assoc($pandingleave2);
                                    ?>  


                                <span class="badge" style="background-color:#F79663;"><i class="fa fa-inbox"></i><?php echo(isset($tpandingleave2['pleave']))?$tpandingleave2['pleave']:"";?></span>					</a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
					
				
							<a href="#" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large">
							
                                
								</a>
                            
					
                        <a href="profile.php" class="dropdown-item">
                            <i class="fa fa-user"></i>  <?php echo htmlspecialchars($lang['profile']);?> 
                        </a>
                        <div class="dropdown-divider"></div>
						<a a href ="?lang=en" class="dropdown-item">
                            <i class="fa fa-link"></i>  <?php echo htmlspecialchars($lang['el']);?> 
                        </a>
                        <div class="dropdown-divider"></div>
						<a a href ="?lang=it" class="dropdown-item">
                            <i class="fa fa-link"></i> <?php echo htmlspecialchars($lang['al']);?> 
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="../user/controller/logout.php" class="dropdown-item">
                            <i class="fa fa-power-off"></i>  <?php echo htmlspecialchars($lang['lo']);?> 
                        </a>

                </li>
                <!-----End user with setting--->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="Employee_Dashboard.php" class="brand-link" style="background-color:#528EB5;">
                <img src="../image/omoBank1.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8">
                <span class="brand-text font-weight-light"><?php echo htmlspecialchars($lang['ob']);?> </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" style="background-color:#528EB5;">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image"> 
                        <img src="../Admin_Dashboard/image_upload/<?php echo (isset($_SESSION['employee_id']['employee_image']))?$_SESSION['employee_id']['employee_image']:""; ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="profile.php" class="d-block"><?php echo $_SESSION['employee_id']['employee_email']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item has-treeview menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Employee_Dashboard.php" class="nav-link active">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p><?php echo htmlspecialchars($lang['dashboard']);?> </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    <?php echo htmlspecialchars($lang['attendance']);?> 
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="fillattendance.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?php echo htmlspecialchars($lang['fa']);?> </p>
                                    </a>
                                </li>
								<li class="nav-item">
                                    <a href="attendanceview.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?php echo htmlspecialchars($lang['via']);?> </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-asterisk"></i>
                                <p>
                                    <?php echo htmlspecialchars($lang['leave']);?> 
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
							 <li class="nav-item">
                                    <a href="applayleave.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?php echo htmlspecialchars($lang['apl']);?> </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="leavestatus.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
										<p><?php echo htmlspecialchars($lang['ls']);?> </p> <?php                                      
                                    								   
								    $pandingleave2 = mysqli_query($phdb,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='pending' AND EmpId='$id'");
                                     $tpandingleave2 = mysqli_fetch_assoc($pandingleave2);
                                    ?>  


                                <span class="badge" style="background-color:#F79663;"><?php echo(isset($tpandingleave2['pleave']))?$tpandingleave2['pleave']:"";?></span>
                                        
                                    </a>
                                </li>
								
								
                            </ul>
                        </li>
                       <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-road"></i>
                                <p>
                                    <?php echo htmlspecialchars($lang['notice']);?> 
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="viewnotice.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?php echo htmlspecialchars($lang['nb']);?> </p>
                                    </a>
                                </li>
                            </ul>
                        </li> 
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-cogs"></i>
                                <p>
                                    <?php echo htmlspecialchars($lang['settings']);?> 
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="changepassword.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?php echo htmlspecialchars($lang['cp']);?> </p>
                                    </a>
                                </li>
								 <li class="nav-item">
                                    <a href="aboutus.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p><?php echo htmlspecialchars($lang['au']);?> </p>
                                    </a>
                                </li>
                            </ul>
                        </li> 					

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
