<?php
    $result ="";
    if(isset($_GET['msg'])) 
    {
        $result=$_GET['msg'];
    }
?>
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
                  <?php echo htmlspecialchars($lang['cp']);?>
                </h3>
              </div>
              <div class="card-body">
                 <form method="POST" action="../Admin_Dashboard/store/passChange.php">
<div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"> <?php echo htmlspecialchars($lang['old']);?><span class="required">*</span>
            </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="Password" class="form-control col-md-7 col-xs-12" id="fname" title="Old Password" name="oldpass" placeholder="Enter Old Password" >
               </div>
         </div>
		 
	 <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"> <?php echo htmlspecialchars($lang['new']);?><span class="required">*</span>
            </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               <input type="Password" class="form-control col-md-7 col-xs-12" title="New Password" id="email" name="npassword" placeholder="Enter New Password" >
               </div>
         </div>
		    
		 <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"><?php echo htmlspecialchars($lang['retray']);?><span class="required">*</span>
            </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="Password" class="form-control col-md-7 col-xs-12" id="message" name="cpassword" title="Retry Password" placeholder="Enter Retry Password">
               </div>
         </div>  
             <div class="form-group">
                 <div class="col-md-6 col-md-offset-3">
                 <button type="reset" class="btn btn-primary"> <?php echo htmlspecialchars($lang['reset']);?></button>
                 <button title="Submit" name="usave" id="btn-notice" type="submit" class="btn btn-success"> <?php echo htmlspecialchars($lang['submit']);?></button>
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
