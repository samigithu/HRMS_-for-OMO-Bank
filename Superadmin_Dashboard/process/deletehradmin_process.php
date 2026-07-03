<?php

 include('../include/access/connector.php');
 ?><link rel="stylesheet" href="../../css/popup_style.css">
 <?php
	if(isset($_POST['delete_admin'])){
      $hr_id = $phdb->real_escape_string($_POST['hr_id']);

       $sql = $phdb->query("DELETE FROM `hr_member` WHERE hr_id = '$hr_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	    ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Data Deleted Successfully
    </h1>
    <p>Admin Deleted Successfully</p>
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
    <p>Admin is not Deleted</p>
    <p>
      <a href="../Add_admin.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
    }

	}

?>