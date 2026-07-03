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
                  <?php echo htmlspecialchars($lang['profile']);?>
                </h3>
				<h3 class="card-title" style="float: left;">
				<a href="#"><button type="button" class="btn btn-primary" onclick="window.print();">
                  <?php echo htmlspecialchars($lang['print']);?> 
                </button> </a></h3>
              </div>
              <div class="card-body">
                 <table  class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><?php echo htmlspecialchars($lang['eid']);?></th>
                    <th><?php echo htmlspecialchars($lang['fn']);?></th>
                    <th><?php echo htmlspecialchars($lang['ln']);?></th>
                    <th><?php echo htmlspecialchars($lang['mn']);?></th>
                    <th><?php echo htmlspecialchars($lang['cn']);?></th>
                    <th><?php echo htmlspecialchars($lang['ea']);?></th>
                    <th><?php echo htmlspecialchars($lang['pi']);?></th>
                    <th><?php echo htmlspecialchars($lang['position']);?></th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td><?php echo $_SESSION['hr_id']['hr_companyid'];?></td>
                        <td><?php echo $_SESSION['hr_id']['hr_firstname'];?></td>
                        <td><?php echo $_SESSION['hr_id']['hr_lastname'];?></td>
                        <td><?php echo $_SESSION['hr_id']['hr_middlename'];?></td>
                        <td><?php echo $_SESSION['hr_id']['hr_contactno'];?></td>
                        <td><?php echo $_SESSION['hr_id']['hr_email'];?></td>
                        <td><div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div></td>
                        <td><?php echo $_SESSION['hr_id']['hr_type'];?></td>
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
  <?php include "Admin_footer.php"; ?>
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
