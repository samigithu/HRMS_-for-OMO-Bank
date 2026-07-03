 <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title" style="float: right;">
                 <?php echo htmlspecialchars($lang['ls']);?>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><?php echo htmlspecialchars($lang['eid']);?></th>
                    <th><?php echo htmlspecialchars($lang['lt']);?></th>
					<th><?php echo htmlspecialchars($lang['reason']);?></th>
                    <th><?php echo htmlspecialchars($lang['sd']);?></th>
                    <th><?php echo htmlspecialchars($lang['ed']);?></th>
                    <th><?php echo htmlspecialchars($lang['lstatus']);?></th>
       
                  </tr>
                  </thead>
                  <tbody>
					  <?php
					  include('../user/controller/connect.php');
					  $dbs = new database();
					  $db=$dbs->connection();
					  $empid = $_SESSION['employee_id']['employee_id'];
                      $result = mysqli_query($db,"select a.Detail_Id,a.Reason,a.StateDate,a.EndDate,a.LeaveStatus,b.Type_of_Name from leavedetails a,type_of_leave b WHERE a.EmpId='$empid' AND a.TypesLeaveId=b.LeaveId");
			            while ($row = $result->fetch_array()){
						?>
                      <tr>
                         <td><?php echo $row['Detail_Id'];?></td>
                        <td><?php echo $row['Type_of_Name'];?></td>
                        <td><?php echo $row['Reason'];?></td>
                        <td><?php echo date('M-d-Y', strtotime(htmlentities($row['StateDate'])));?></td>
                        <td><?php echo date('M-d-Y', strtotime(htmlentities($row['EndDate'])));?></td>
                        <td><?php echo $row['LeaveStatus'];?></td>
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
   <?php include "Employee_footer.php"; ?>
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
