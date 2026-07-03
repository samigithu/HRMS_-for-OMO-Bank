<?php

  include('../include/access/connector.php');
?>
<link rel="stylesheet" href="../../css/popup_style.css">
<?php
	if(isset($_POST['braches'])){
      $branches_id = $phdb->real_escape_string($_POST['branches_id']);

       $sql = $phdb->query("DELETE FROM `branches_table` WHERE branches_id = '$branches_id'")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	           ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Data Deleted Successfully
    </h1>
    <p>Branch Deleted Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Add_braches.php';\",1500);</script>"; ?>
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
    <p>Branch is not Deleted</p>
    <p>
      <a href="../Add_braches.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
    }

	}

?>