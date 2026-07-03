<?php

  include('../include/access/connector.php');
?><link rel="stylesheet" href="../../css/popup_style.css">
<?php
	if(isset($_POST['delete3'])){
      $employee_id = $phdb->real_escape_string($_POST['employee_id']);

       $sql = $phdb->query("DELETE FROM `employee_table` WHERE employee_id = '$employee_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	  ?>
		  
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
       Successfull Delation
    </h1>
    <p>Record Deleted Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Add_employee.php';\",1500);</script>"; ?>
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
    <p>Record Is not Deleted</p>
    <p>
      <a href="../Add_employee.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
    }

	}

?>