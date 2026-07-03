 <?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
<?php
include_once('../user/controller/connect.php');
$conn=new database();
$empid = $_SESSION['employee_id']['employee_companyid'];
$notices=$conn->getAll("SELECT * FROM `notices` WHERE visibility='0' OR visibility='$empid'");

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
                   <?php echo htmlspecialchars($lang['nb']);?> 
                </h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                                    <tr>
                                        <th><?php echo htmlspecialchars($lang['ns']);?> </th>
                                        <th><?php echo htmlspecialchars($lang['nd']);?> </th>
                                        <th><?php echo htmlspecialchars($lang['nt']);?> </th>
                                        <th><?php echo htmlspecialchars($lang['description']);?> </th>
                                        <th><?php echo htmlspecialchars($lang['status']);?> </th>
                                        <th><?php echo htmlspecialchars($lang['from']);?> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($notices as $notice){
                                        ?>
                                        <tr>
                                            <td><?=$notice['subject']?></td>
                                            <td><?=$notice['notice_date']?></td>
                                            <td><?=$notice['notice_time']?></td>
                                            <td><?=$notice['description']?></td>
                                            <td>
                                                <?php
                                                if($notice['visibility']==0){
                                                    echo "Brodcast Message";
                                                }else{
                                                    echo "Your INBOX";
                                                }
                                                ?>
                                            </td>
                                            <td><?=$notice['insert_by']?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
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
