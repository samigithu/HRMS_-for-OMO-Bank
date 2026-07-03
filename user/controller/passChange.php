<?php
session_start();
  if(!isset($_SESSION['employee_id'])){
      //header("location:../index.php");exit();
	  echo "<script>window.location='../index.php';</script>";exit();
  }
?>
<?php
	include_once('connect.php');

	$dbs = new database();
	$db=$dbs->connection();
	?>
	<link rel="stylesheet" href="../css/popup_style.css">
	<?php
	
	if (isset($_POST['usave']))
	{
		$old = md5($_POST['oldpass']);
		$npass = md5($_POST['npassword']);
		$cpass = md5($_POST['cpassword']);
		$email = $_SESSION['employee_id']['employee_email'];

		if(empty($old))
		{
			 ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Old Pasword is Required</p>
    <p>
      <a href="../changepassword.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
		}
		else
		{

			$sql = mysqli_query($db,"select * from employee_table where employee_pass='$old' AND employee_email='$email' ");
			if(mysqli_num_rows($sql) > 0)
			{
				if(!empty($npass) && !empty($cpass))
				{
					if($npass == $cpass)
					{
						mysqli_query($db,"update employee_table set employee_pass='$npass' where employee_pass='$old' AND employee_email='$email'");
					             ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Data Updated Successfull
    </h1>
    <p>Password Changed Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../changepassword.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
			
       <?php     
         
					}
					else
					{
	
								 ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Old Pasword and new Password Mismatch</p>
    <p>
      <a href="../changepassword.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
					}
					
				}
				else
				{
					
							 ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>New Pasword and Confirm Password Mismatch</p>
    <p>
      <a href="../changepassword.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
				}
			}
			else
			{
				
						 ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Old Pasword is Wrong</p>
    <p>
      <a href="../changepassword.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
			}
		}
	}
?>
