 <link rel="stylesheet" href="../Admin_Dashboard/css/popup_style.css">
  <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
					<a href="Add_employee.php">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-users"></i></span>
                                 <?php                             
                                                               
                                       $query0 = $phdb->query("select COUNT(*) as employee_id FROM employee_table")or die(mysqli_error($phdb));
                                       $row0 = $query0->fetch_array();

                                    ?> 
                                <div class="info-box-content">
                                    <span class="info-box-text"><?php echo htmlspecialchars($lang['employee']);?></span>
                                    <span class="info-box-number"><?php echo htmlentities($row0['employee_id']);?></span>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
						<a href="pendingleave.php">
                            <div class="info-box mb-3">
							
                                <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-handshake"></i></span>
							   <?php                             
                                     
								    $pandingleave = mysqli_query($phdb,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='Pending'");
                                     $tpandingleave = mysqli_fetch_assoc($pandingleave);
                                    ?> 
                                <div class="info-box-content">
                                    <span class="info-box-text"><?php echo htmlspecialchars($lang['dpl']);?></span>
                                    <span class="info-box-number"><?php echo(isset($tpandingleave['pleave']))?$tpandingleave['pleave']:"";?></span>
                                </div>
                            </div></a>
                        </div>
                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <a href="acceptedleaverequest.php">
							<div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-code-branch"></i></span>
                                  <?php                             
                                   
								    $pandingleave1 = mysqli_query($phdb,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='Accept'");
                                     $tpandingleave1 = mysqli_fetch_assoc($pandingleave1);
                                    ?>                                  
								 <div class="info-box-content">
                                    <span class="info-box-text"><?php echo htmlspecialchars($lang['dacclr']);?></span>
									 <span class="info-box-number"><?php echo(isset($tpandingleave1['pleave']))?$tpandingleave1['pleave']:"";?></span>
                                </div></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
						<a href="deniedleave.php">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-universal-access"></i></span>
                                  <?php                             
                                      
								    $pandingleave2 = mysqli_query($phdb,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='Denied'");
                                     $tpandingleave2 = mysqli_fetch_assoc($pandingleave2);
                                    ?>  
                                <div class="info-box-content">
                                    <span class="info-box-text"><?php echo htmlspecialchars($lang['ddl']);?></span>
                                     <span class="info-box-number"><?php echo(isset($tpandingleave2['pleave']))?$tpandingleave2['pleave']:"";?></span>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>
             </section>
        <?php include "Admin_footer.php"; ?>
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="dist/js/adminlte.js"></script>
        <script src="dist/js/demo.js"></script>


        <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>
        <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>