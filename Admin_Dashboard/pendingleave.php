<link rel="stylesheet" href="../css/popup_style.css">
   <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
<?php
	include('../user/controller/connect.php');
	$dbs = new database();
	$db=$dbs->connection();
	$manger=$_SESSION['hr_id']['hr_firstname'];
	$datee = date('M-d-y');
	$date = str_replace('/', '-', $datee);
    $startd = date('Y-m-d', strtotime($date));
    $Statusl = "Pending";
  $leavedetails = mysqli_query($db,"select * from leavedetails where LeaveStatus='$Statusl'");
  if(isset($_GET['id']))
  {
    $acceptid = $_GET['id'];
    $accept = "Accept";
    $phdb=mysqli_query($db,"update leavedetails set LeaveStatus='$accept',approvedby='$manger',approveddate='$startd' where Detail_Id='$acceptid'");
	 if($phdb) {
             ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
     Data Inserted Successfully
    </h1>
    <p>Leave Accepted Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Admin_Dashboard/pendingleave.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
			
       <?php   
        
    } else {
         ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Leave is Not Accepted</p>
    <p>
      <a href="../Admin_Dashboard/pendingleave.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
 }
  }
  else if(isset($_GET['msg']))
  {
    $deniedid = $_GET['msg'];
    $denied = "Denied";
    $phdb=mysqli_query($db,"update leavedetails set LeaveStatus='$denied',approvedby='$manger',approveddate='$startd'  where Detail_Id='$deniedid'");
     if($phdb) {
              ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
     Data Inserted Successfully
    </h1>
    <p>Leave Denied Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Admin_Dashboard/pendingleave.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
			
       <?php   
    } else {
          ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Leave is Not Denied</p>
    <p>
      <a href="../Admin_Dashboard/pendingleave.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
 }
  }
  

  
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
			  <h3 class="card-title" style="float: left;">
			  <a href="#"><button type="button" class="btn btn-primary" onclick="window.print();">
                  <?php echo htmlspecialchars($lang['print']);?> 
                </button> </a></h3>
                <h3 class="card-title" style="float: right;">
               <?php echo htmlspecialchars($lang['dpl']);?>
			</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><?php echo htmlspecialchars($lang['sn']);?></th>
                    <th><?php echo htmlspecialchars($lang['en']);?></th>
                    <th><?php echo htmlspecialchars($lang['lt']);?></th>
					<th><?php echo htmlspecialchars($lang['reason']);?></th>
                    <th><?php echo htmlspecialchars($lang['sd']);?></th>
                    <th><?php echo htmlspecialchars($lang['ed']);?></th>
                    <th><?php echo htmlspecialchars($lang['lstatus']);?></th>
                    <th><?php echo htmlspecialchars($lang['action']);?></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
					  $result = mysqli_query($db,"SELECT l.*,e.employee_firstname,e.employee_middlename,lt.Type_of_Name FROM leavedetails l JOIN employee_table e ON l.EmpId=e.employee_id JOIN type_of_leave lt on l.TypesLeaveId=lt.LeaveId WHERE LeaveStatus='Pending'");
                      
                      // if($result->num_rows == 0) 
					 //echo'<div class="alert alert-warning" role="alert">No Record Found!!!</div>';
                       while ($row = $result->fetch_array()){
                        $name = ucfirst($row['employee_firstname'])."&nbsp;".ucfirst($row['employee_middlename']);
                      ?>
                      <tr>

                        <td><?php echo $row['Detail_Id'];?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $row['Type_of_Name'];?></td>
						<td><?php echo $row['Reason'];?></td>
                        <td><?php echo date('M-d-Y', strtotime(htmlentities($row['StateDate'])));?></td>
                        <td><?php echo date('M-d-Y', strtotime(htmlentities($row['EndDate'])));?></td>
                        <td><?php echo $row['LeaveStatus'];?></td>
                        <td style="width: 10%">
						<a href="?id=<?php echo $row['Detail_Id'];?>" title="Accept"><i class="fa fa-check " aria-hidden="true"></i>
	                    </a>&nbsp;&nbsp;<a href="?msg=<?php echo $row['Detail_Id'];?>" title="Denied"><i class="fa fa-times" style="color: red;" aria-hidden="true"></i></a>
                        </td>
                      </tr>

                     <?php  } ?>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  <?php include "Admin_footer.php"; ?>
<script src="/pdf_js/pdfobject.js"></script>
<script>PDFObject.embed("/pdf_js/sample-3pp.pdf", "#example1");</script>

<script src="../Admin_Dashboard/plugins/jquery/jquery.min.js"></script>
<script src="../Admin_Dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../Admin_Dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Admin_Dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Admin_Dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Admin_Dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
