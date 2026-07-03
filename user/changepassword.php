<?php include 'header/head.php';?>
   <?php include 'sidebar/sidebar_menu.php';?>
<?php
	$result="";
	if(isset($_GET['msg']))
	{
		$result=$_GET['msg'];
	}
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];	
	}
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
                  <?php echo htmlspecialchars($lang['cp']);?> 
                </h3>
              </div>
              <div class="card-body">
      	<form action="../user/controller/passChange.php" class="form-horizontal form-label-left" method="post">
		 <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"> <?php echo htmlspecialchars($lang['old']);?>  <span class="required">*</span>
            </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="Password" class="form-control col-md-7 col-xs-12" id="fname" title="Old Password" name="oldpass" placeholder="Enter Old Password" >
               </div>
         </div>
		 
	 <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"> <?php echo htmlspecialchars($lang['new']);?>  <span class="required">*</span>
            </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
               <input type="Password" class="form-control col-md-7 col-xs-12" title="New Password" id="email" name="npassword" placeholder="Enter New Password" >
               </div>
         </div>
		    
		 <div class="item form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"> <?php echo htmlspecialchars($lang['retray']);?> <span class="required">*</span>
            </label>
               <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="Password" class="form-control col-md-7 col-xs-12" id="message" name="cpassword" title="Retry Password" placeholder="Enter Retry Password">
               </div>
         </div>  
             <div class="form-group">
                 <div class="col-md-6 col-md-offset-3">
                 <button type="reset" class="btn btn-primary"> <?php echo htmlspecialchars($lang['reset']);?> </button>
                 <button title="Submit" name="usave" id="btn-notice" type="submit" class="btn btn-success"> <?php echo htmlspecialchars($lang['submit']);?> </button>
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
<script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="dist/js/adminlte.js"></script>
        <script src="dist/js/demo.js"></script>


        <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <script src="plugins/chart.js/Chart.min.js"></script>
        <script src="dist/js/pages/dashboard2.js"></script>

<?php include "Employee_footer.php"; ?>