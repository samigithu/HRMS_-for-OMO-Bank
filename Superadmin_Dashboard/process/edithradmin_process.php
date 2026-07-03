<?php

  include('../include/access/connector.php');
?>
<link rel="stylesheet" href="../../css/popup_style.css">
<?php
	if(isset($_POST['hredit_admin'])){
      
       $hr_companyid = $phdb->real_escape_string($_POST['hr_companyid']);
       $hr_firstname = $phdb->real_escape_string($_POST['hr_firstname']);
       $hr_lastname = $phdb->real_escape_string($_POST['hr_lastname']);
       $hr_middlename = $phdb->real_escape_string($_POST['hr_middlename']);
       $hr_contactno = $phdb->real_escape_string($_POST['hr_contactno']);
       $hr_email = $phdb->real_escape_string($_POST['hr_email']);
       $hr_password = $phdb->real_escape_string(md5($_POST['hr_password']));
       $hr_type = $phdb->real_escape_string($_POST['hr_type']);
       $hr_id = $phdb->real_escape_string($_POST['hr_id']);


       $sql = $phdb->query("UPDATE `hr_member` SET `hr_companyid` = '$hr_companyid', `hr_firstname` = '$hr_firstname', `hr_lastname` = '$hr_lastname', `hr_middlename` = '$hr_middlename', `hr_contactno` = '$hr_contactno', `hr_email` = '$hr_email', `hr_password` = '$hr_password', `hr_type` = '$hr_type' WHERE  `hr_id` = '".$hr_id."'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
			              ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
            Data Updated Successfully
    </h1>
    <p>Admin Updated Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Add_admin.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
			
       <?php 
       }else{
			   ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Admin is not Updated</p>
    <p>
      <a href="../Add_admin.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
    }

	}

?>