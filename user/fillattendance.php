 <?php include 'header/head.php';?>
  <?php include 'header/attendance.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
<head>
<script src="js/attendance.js">
</script>
</head>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
			  <h4 class="text-danger"><?php echo $msg;?></h4>
                <h3  class="card-title" style="float: right;">
                <span id="Today"><b> </b></span>
               </h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> <?php echo htmlspecialchars($lang['eid']);?> </th>
                    <th> <?php echo htmlspecialchars($lang['en']);?> </th>
					<th> <?php echo htmlspecialchars($lang['date']);?> </th>
                    <th><?php echo htmlspecialchars($lang['session']);?></th>
                    <th><?php echo htmlspecialchars($lang['atstatus']);?></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
					$name=ucfirst($_SESSION['employee_id']['employee_firstname'])."&nbsp;".ucfirst($_SESSION['employee_id']['employee_middlename']);
					$id=$_SESSION['employee_id']['employee_companyid'];
                      ?>
                      <tr>
					   <td><?php echo $id;?></td>
					   <td><?php echo $name;?></td>
                        <td><?php echo date('M-d-Y');?></td>
						<td id="session"></td>
                        <td id="atten"><?php if($msg=='sucess'){echo "<script>document.getElementById('session').style.color='#7FFF00'; 
							</script>";}?>
						<a id="ok" href="?id=<?php echo $id; ?>" title="Assign the Attendance"><i  class="fa fa-check " aria-hidden="true"></i>
                        </td>
                      </tr>                   
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

<script src="../user/plugins/jquery/jquery.min.js"></script>
<script src="../user/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../user/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../user/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../user/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../user/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

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
