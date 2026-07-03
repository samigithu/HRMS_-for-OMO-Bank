<?php include 'header/head.php';?>
<?php include 'sidebar/sidebar_menu.php';?>
<?php //print_r($_SESSION);exit;
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
                  <?php echo htmlspecialchars($lang['profile']);?>
                </h3>
				<h3 class="card-title" style="float: left;">
				<a href="#"><button type="button" class="btn btn-primary" onclick="window.print();">
                  <?php echo htmlspecialchars($lang['print']);?> 
                </button> </a></h3>
              </div>
              <div class="card-body">
			  
                 <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                    <th><?php echo htmlspecialchars($lang['pi']);?></th>
                    <th><?php echo htmlspecialchars($lang['en']);?></th>
                    <th><?php echo htmlspecialchars($lang['eid']);?></th>
                    <th><?php echo htmlspecialchars($lang['gender']);?></th>
                    <th><?php echo htmlspecialchars($lang['bd']);?></th>
                    <th><?php echo htmlspecialchars($lang['ea']);?></th>
                    <th><?php echo htmlspecialchars($lang['cn']);?></th>
                    <th><?php echo htmlspecialchars($lang['jod']);?></th>
					<th><?php echo htmlspecialchars($lang['branch']);?></th>
					<th><?php echo htmlspecialchars($lang['departement']);?></th>
					<th><?php echo htmlspecialchars($lang['position']);?></th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td align="center"><img src="../Admin_Dashboard/image_upload/<?php echo (isset($_SESSION['employee_id']['employee_image']))?$_SESSION['employee_id']['employee_image']:""; ?>" id="myImg" style="height: 144px; border: 2px groove; border-radius:8px;"></td>
                        <td align="center"><u style="margin-bottom: 5px;"><b><?php echo ucfirst($_SESSION['employee_id']['employee_firstname'])."&nbsp;".ucfirst($_SESSION['employee_id']['employee_middlename']); ?></b></u></td>
                        <td align="center"><?php echo(isset($_SESSION['employee_id']['employee_companyid']))?$_SESSION['employee_id']['employee_companyid']:"Null";?></td>
                        <td ><?php echo(isset($_SESSION['employee_id']['employee_sss']))?$_SESSION['employee_id']['employee_sss']:"Null";?></td>
                        <td ><?php echo(isset($_SESSION['employee_id']['branches_recentdate']))?$_SESSION['employee_id']['branches_recentdate']:"Null";?></td>
						<td ><?php echo(isset($_SESSION['employee_id']['employee_email']))?$_SESSION['employee_id']['employee_email']:"Null";?></td>
                         <td ><?php echo(isset($_SESSION['employee_id']['employee_contact']))?$_SESSION['employee_id']['employee_contact']:"Null";?></td>
					    <td><?php echo(isset($_SESSION['employee_id']['branches_datefrom']))?$_SESSION['employee_id']['branches_datefrom']:"Null";?></td>
					    <td><?php echo (isset($_SESSION['employee_id']['employee_branches']))?$_SESSION['employee_id']['employee_branches']:"";?></td>
					     <td><?php echo(isset($_SESSION['employee_id']['employee_department']))?ucfirst($_SESSION['employee_id']['employee_department']):"Null";?></td>
                         <td><?php echo(isset($_SESSION['employee_id']['employee_position']))?ucfirst($_SESSION['employee_id']['employee_position']):"Null";?></td>					
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
<div id="myModal" class="modal">
             <span class="close">&times;</span>
            <img class="modal-content" id="img01">
                <div id="caption"></div>
 </div>
<!--image Popup-->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "inline-block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<!--End image Popup -->
</body>
</html>
