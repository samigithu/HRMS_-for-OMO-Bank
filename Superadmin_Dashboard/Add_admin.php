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
                <h3 class="card-title" style="float: right;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-overlay">
                  <?php echo htmlspecialchars($lang['aa']);?>
                </button></h3>
                <?php include 'modal/addhradmin_modal.php';?>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				   <th><?php echo htmlspecialchars($lang['eid']);?></th>
                    <th><?php echo htmlspecialchars($lang['fn']);?></th>
                    <th><?php echo htmlspecialchars($lang['mn']);?></th>
					<th><?php echo htmlspecialchars($lang['ln']);?></th>
                    <th><?php echo htmlspecialchars($lang['cn']);?></th>
                    <th><?php echo htmlspecialchars($lang['ea']);?></th>
                    <th><?php echo htmlspecialchars($lang['position']);?></th>
                    <th><?php echo htmlspecialchars($lang['action']);?></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                       include('include/access/connector.php');
                      $result = $phdb->query("SELECT * FROM `hr_member` ORDER BY hr_id DESC");
                       while ($row = $result->fetch_array()){
                          
                      ?>
                      <tr>
                        <td><?php echo $row['hr_companyid'];?></td>
                        <td><?php echo $row['hr_firstname'];?></td>
						<td><?php echo $row['hr_middlename'];?></td>
                        <td><?php echo $row['hr_lastname'];?></td> 
                        <td><?php echo $row['hr_contactno'];?></td>
                        <td><?php echo $row['hr_email'];?></td>
                        <td><?php echo $row['hr_type'];?></td>
                         <td style="width: 10%"><i data-toggle="modal" data-target="#modal-editx<?php echo $row['hr_id'];?>" class="fa fa-edit" style="color: green" title="Edit Employee"></i> | <i data-toggle="modal" data-target="#modal-deletex<?php echo $row['hr_id'];?>" class="fa fa-trash" style="color: red" title="Delete Employee"></i>
                        </td>
                         <?php include 'modal/edithradmin_modal.php';?>
                         <?php include 'modal/deletehradmin_modal.php';?>
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
 <?php include "Superadmin_footer.php"; ?>

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
