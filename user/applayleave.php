<?php include 'header/head.php';?>
<?php include 'sidebar/sidebar_menu.php';?>
<link rel="stylesheet" href="../user/css/popup_style.css">
<?php
  include_once('../user/controller/connect.php');
  
  $dbs = new database();
  $db=$dbs->connection();

  $empid = $_SESSION['employee_id']['employee_id'];
  $sql = mysqli_query($db,"select * from type_of_leave ");
  if(isset($_POST['Apply']))
  {
    $leave = $_POST['levetype'];
    $reason = $_POST['reason'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $leavestatus = "Pending";
    /*date formate*/
    $date = str_replace('/', '-', $startdate);
    $startd = date('Y-m-d', strtotime($date));
    $datee = str_replace('/', '-', $enddate);
    $endd = date('Y-m-d', strtotime($datee));
    /*end date formate*/

    $result=mysqli_query($db,"insert into leavedetails values(null,'$empid','$leave','$reason','$startd','$endd','$leavestatus',null,null)");
     if($result) {
                ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Data Submitted Successfully
    </h1>
    <p>Successfully APPlied</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = 'applayleave.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
			
       <?php
    } else {
        		 ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Failed to applay</p>
    <p>
      <a href="applayleave.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
 }
  }
?>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title" style="float: right;">
                <?php echo htmlspecialchars($lang['apl']);?>
                </h3>
              </div>
              <div class="card-body">
                       <form action="" method="post" class="form-horizontal form-label-left">
					   <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeSubject"><?php echo htmlspecialchars($lang['lt']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="levetype" name="levetype" class="form-control col-md-7 col-xs-12"  title="Select Leave" required="">
					              	       <option value="">-- <?php echo htmlspecialchars($lang['sl']);?> --</option>
                                            <?php while($row = mysqli_fetch_assoc($sql)) { ?>
                                           <option value="<?php echo $row['LeaveId']; ?>"><?php echo ucfirst($row['Type_of_Name']);?></option>
                                                 <?php } ?>
					                   </select>
                                        </div>
                         </div>  
					    
					    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeTime"><?php echo htmlspecialchars($lang['sd']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="StartDate" class="form-control col-md-7 col-xs-12" name="startdate" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off" placeholder="Start Date" title="Start Date" required="">
                                        </div>
                         </div>
					    
                        <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeDesc"><?php echo htmlspecialchars($lang['ed']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="EndDate" class="form-control col-md-7 col-xs-12" name="enddate" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off" placeholder="End Date" title="End Date" required="">
                                        </div>
                                    </div>
						
					      <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noticeDate"><?php echo htmlspecialchars($lang['reason']);?><span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="5" type="text" id="lname" class="form-control col-md-7 col-xs-12" name="reason" placeholder="Reason" title="Reason" required="" autocomplete="off"></textarea>
                                        </div>
                          </div>			
					    
					<div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary"><?php echo htmlspecialchars($lang['reset']);?></button>
                                            <button name="Apply" title="submit" id="btn-notice" type="submit" class="btn btn-success"><?php echo htmlspecialchars($lang['submit']);?></button>
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


  <?php include "Employee_footer.php"; ?>
<script type="text/javascript">
 
$('#EndDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d',
  minDate:'2015/01/01', // yesterday is minimum date
  maxDate:'2030/01/01' // and tommorow is maximum date calendar
});

$('#StartDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d',
  minDate:'2015/01/01', // yesterday is minimum date
  maxDate:'2030/01/01' // and tommorow is maximum date calendar
});
  
</script>
	 <script src="../dp/jquery.datetimepicker.full.js"></script>
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
		



		
