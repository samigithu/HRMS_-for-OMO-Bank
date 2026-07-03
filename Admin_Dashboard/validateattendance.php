  <?php include 'header/head.php';?>
  <?php include 'header/attendancevali.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
<head>
<script src="dist/js/Validateattendance.js"></script>
</head>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
			  <h4 class="text-danger"><?php echo $msg; ?></h4>
                <h3  class="card-title" style="float: right;">
                <span id="Today"><b></b></span>
               </h3>
              </div>
              <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><?php echo htmlspecialchars($lang['oid']);?> </th>
                    <th><?php echo htmlspecialchars($lang['on']);?> </th>
					<th><?php echo htmlspecialchars($lang['date']);?> </th>
                    <th><?php echo htmlspecialchars($lang['session']);?> </th>
                    <th> <?php echo htmlspecialchars($lang['atstatus']);?> </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
					$name=ucfirst($_SESSION['hr_id']['hr_firstname'])."&nbsp;".ucfirst($_SESSION['hr_id']['hr_lastname']);
					$id=$_SESSION['hr_id']['hr_companyid'];
                      ?>
                      <tr>
					   <td><?php echo $id;?></td>
					   <td><?php echo $name;?></td>
                        <td><?php echo date('M-d-Y');?></td>
						<td id="session"></td>
                        <td id="atten"><?php if($msg=='sucess'){echo "<script>document.getElementById('session').style.color='#7FFF00'; 
							</script>";}?>
						<a id="ok" href="?id=<?php echo $id; ?>" title="Validate the Attendance"><i  class="fa fa-check " aria-hidden="true"></i>
                        </td>
                      </tr>                   
                  </tbody>
                </table>
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
