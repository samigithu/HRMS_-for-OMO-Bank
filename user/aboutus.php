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
                <?php echo htmlspecialchars($lang['au']);?> 
              </h3>
				<h3 class="card-title" style="float: left;"><p>
					 <?php echo htmlspecialchars($lang['amu']);?> 
				</p></h3></div>
              <div class="card-body">
	<div class="row">
		<div class="col-md-3">
			<div class="team-box">
			<img src="../assets/img/dummies/team1.jpg" alt="" class="brand-image img-circle elevation-3" height="80" width="195"/>
			<div class="roles">
				<h5><strong><?php echo htmlspecialchars($lang['sg']);?> </strong></h5>
				<p>
					<?php echo htmlspecialchars($lang['sgr']);?> 
				</p>
				<ul class="social-profile">
					<li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="team-box">
			<img src="../assets/img/dummies/team2.jpg" alt="" class="brand-image img-circle elevation-3" height="80" width="195"/>
			<div class="roles">
				<h5><strong><?php echo htmlspecialchars($lang['tw']);?> </strong></h5>
				<p>
					 <?php echo htmlspecialchars($lang['twr']);?> 
				</p>
				<ul class="social-profile">
					<li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="team-box">
			<img src="../assets/img/dummies/team3.jpg" alt="" class="brand-image img-circle elevation-3" height="80" width="195" />
			<div class="roles">
				<h5><strong><?php echo htmlspecialchars($lang['aka']);?> </strong></h5>
				<p>
					<?php echo htmlspecialchars($lang['aar']);?> 
				</p>
				<ul class="social-profile">
					<li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="team-box">
			<img src="../assets/img/dummies/team4.jpg" alt="" class="brand-image img-circle elevation-3" height="80" width="195" />
			<div class="roles">
				<h5><strong><?php echo htmlspecialchars($lang['dd']);?> </strong></h5>
				<p>
					<?php echo htmlspecialchars($lang['ddr']);?> 
				</p>
				<ul class="social-profile">
					<li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <?php include 'Employee_footer.php';?>
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
