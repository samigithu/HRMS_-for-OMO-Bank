<?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
<?php
    $msg ="";
    if(isset($_GET['message'])) 
    {
        $msg=$_GET['message'];
    }
 
$result = $phdb->query("SELECT * FROM `employee_table`");
 ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title" style="float: right;">
                  <?php echo htmlspecialchars($lang['an']);?>
                </h3>
              </div>
              <div class="card-body">
                 <form action="../Admin_Dashboard/store/NoticeStore.php" method="post" class="form-horizontal form-label-left" novalidate>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"><?php echo htmlspecialchars($lang['ns']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="noticeSubject" class="form-control col-md-7 col-xs-12" data-validate-minmax="10,20" name="noticeSubject" placeholder="Notice Subject" required="required" type="text">
                                        </div>
                                    </div>
									
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="to"><?php echo htmlspecialchars($lang['to']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select id="to" class="form-control col-md-7 col-xs-12" name="to"  required="required">
											<option value="0">&larr;<?php echo htmlspecialchars($lang['all']);?>&rarr;</option>
						                    <?php while($row = $result->fetch_array()) { ?>
						                   <option value="<?php echo $row['employee_companyid']; ?>">
										   <?php echo ucfirst($row['employee_firstname']);?>
										   </option>
                                           <?php } ?></select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeDate"><?php echo htmlspecialchars($lang['nd']);?> <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="noticeDate" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="noticeDate" placeholder="Notice Date" required="required" type="date">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeTime"><?php echo htmlspecialchars($lang['nt']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="time" id="noticeTime" name="noticeTime" required="required" placeholder="Notice Time" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeDesc"><?php echo htmlspecialchars($lang['description']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="5" id="noticeDesc" name="noticeDesc" required="required" placeholder="Notice Description" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <h4 class="text-danger"><?php echo $msg ?></h4>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary"><?php echo htmlspecialchars($lang['reset']);?></button>
                                            <button name="btn-notice" id="btn-notice" type="submit" class="btn btn-success"><?php echo htmlspecialchars($lang['submit']);?></button>
                                        </div>
                                    </div>
                                </form>
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
