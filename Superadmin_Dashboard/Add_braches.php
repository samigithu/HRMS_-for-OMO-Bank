
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
                 <?php echo htmlspecialchars($lang['ab']);?>
                </button></h3>
                <?php include 'modal/addbranches_modal.php';?>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><?php echo htmlspecialchars($lang['sn']);?></th>
                    <th><?php echo htmlspecialchars($lang['bn']);?></th>
                    <th><?php echo htmlspecialchars($lang['dc']);?></th>
                    <th><?php echo htmlspecialchars($lang['action']);?></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                       include('include/access/connector.php');
                      $result = $phdb->query("SELECT * FROM `branches_table` ORDER BY branches_id DESC");
                      // if($result->num_rows === 0) echo'<div class="alert alert-warning" role="alert">No Record Found!!!</div>';
                       while ($row = $result->fetch_array()){
                          
                      ?>
                      <tr>
                        <td><?php echo $row['branches_id'];?></td>
                        <td><?php echo $row['branches_name'];?></td>
                        <td><?php echo $row['date_created'];?></td>
                        <td><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-edit2<?php echo $row['branches_id'];?>"><?php echo htmlspecialchars($lang['edit']);?></button> | <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete2<?php echo $row['branches_id'];?>"><?php echo htmlspecialchars($lang['delete']);?></button></td>
                         <?php include 'modal/editbranches_modal.php';?>
                         <?php include 'modal/deletebranches_modal.php';?>
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
