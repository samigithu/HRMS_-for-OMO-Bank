<?php

include('../include/access/connector.php');
if (isset($_POST['login_hr'])) {
    session_start();
    $hr_email = $_POST['hr_email'];
    $hr_password   =md5( $_POST['hr_password']);
    $hr_type  = $_POST['hr_type'];
    
   ?>
   <link rel="stylesheet" href="../css/popup_style.css">
<?php   ////////////////////////////////////////////////////////HR Head////////////////////////////////////////////////////////
    if ($hr_type == "HR Head") {
        $query  = $phdb->query("SELECT * FROM hr_member WHERE hr_email='$hr_email' AND hr_password='$hr_password' AND hr_type='HR Head'");
        $row     = mysqli_fetch_array($query);
        $num_row = mysqli_num_rows($query);
        if ($num_row > 0) {
			   $_SESSION['hr_id'] = $row;
             ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Well Come~~ HR Head~~~
    </h1>
    <p>Login Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Superadmin_Dashboard/Superadmin_Dashboard.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
			
       <?php     
         
        }else {
           
?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Invalid Email or Password</p>
    <p>
      <a href="../index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
        }

        ////////////////////////////////////////////////////////////HR Officer////////////////////////////////////////////////////
        
	    } else if ($hr_type == "HR Officer") {
	        $query   = $phdb->query("SELECT * FROM hr_member WHERE hr_email='$hr_email' AND hr_password='$hr_password' AND hr_type='HR Officer'");
	        $row    = mysqli_fetch_array($query);
	        $num_row = mysqli_num_rows($query);
	        if ($num_row > 0) {
	        $_SESSION['hr_id'] = $row;
             ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Well Come~~ HR Officer~~~
    </h1>
    <p>Login Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Admin_Dashboard/Admin_Dashboard.php';\",1500);</script>"; ?>
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
    <p>Invalid Email or Password</p>
    <p>
      <a href="../index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
	        }
	    
	   ////////////////////////////////////////////////////////////HR Employee//////////////////////////////////////////////////////

     } else if ($hr_type == "Employee") {
        $query   = $phdb->query("SELECT * FROM employee_table WHERE employee_email='$hr_email' AND employee_pass='$hr_password'");
        $row     = mysqli_fetch_array($query);
        $num_row = mysqli_num_rows($query);
        if ($num_row > 0) {
			$_SESSION['employee_id'] = $row;
                     ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Well Come~~ HR Employee~~~
    </h1>
    <p>Login Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../User/Employee_Dashboard.php';\",1500);</script>"; ?>
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
    <p>Invalid Email or Password</p>
    <p>
      <a href="../index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
        }
    }
        
}
?>
