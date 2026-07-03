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
                <h3 class="card-title" style="float: left;">
			  <a href="#"><button type="button" class="btn btn-primary" onclick="window.print();">
                  <?php echo htmlspecialchars($lang['print']);?>  
                </button> </a></h3>
				 <h3 class="card-title" style="float: right;">
                  <?php echo htmlspecialchars($lang['va']);?>  
                </h3>
				
              </div>
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><?php echo htmlspecialchars($lang['sn']);?> </th>
                    <th><?php echo htmlspecialchars($lang['eid']);?> </th>
                    <th><?php echo htmlspecialchars($lang['en']);?> </th>
					<th><?php echo htmlspecialchars($lang['date']);?> </th>
                    <th><?php echo htmlspecialchars($lang['morning']);?> </th>
                    <th><?php echo htmlspecialchars($lang['afternoon']);?> </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      include('../user/controller/connect.php');
					  $dbs = new database();
					  $db=$dbs->connection();
					  $empid = $_SESSION['employee_id']['employee_companyid'];
                      $result = mysqli_query($db,"SELECT a.*,b.employee_firstname,b.employee_middlename FROM attendence_table a , employee_table b WHERE a.EmpId=b.employee_companyid AND a.EmpId='$empid'  ORDER BY b.employee_companyid DESC");
                      // if($result->num_rows === 0) echo'<div class="alert alert-warning" role="alert">No Record Found!!!</div>';
                       while ($row = $result->fetch_array()){
                        $name = ucfirst($row['employee_firstname'])."&nbsp;&nbsp;&nbsp;".ucfirst($row['employee_middlename']);
                      ?>
                      <tr>

                        <td><?php echo $row['id'];?></td>
                         <td><?php echo $row['EmpId'];?></td>
                        <td><?php echo $name;?></td>
						<td><?php echo date('M-d-Y', strtotime(htmlentities($row['date'])));?></td>
                        <td><?php echo $row['morning'];?></td>
						<td><?php echo $row['afternoon'];?></td>
						
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

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>


<!-- Custom Theme Scripts -->
<script src="../resource/js/custom.min.js"></script>
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
