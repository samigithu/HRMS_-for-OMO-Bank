<?php

  include('../include/access/connector.php');
?><link rel="stylesheet" href="../../css/popup_style.css">
<?php
	if(isset($_POST['corp'])){
      
      $corporate_name = $phdb->real_escape_string($_POST['corporate_name']);
    $datee = date('M-d-y');
	 $date = str_replace('/', '-', $datee);
    $startd = date('Y-m-d', strtotime($date));
       $sql = $phdb->query("INSERT INTO `corporate_table` VALUES (null,'$corporate_name','$startd')")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	           ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
     Data Inserted Successfully
    </h1>
    <p>Corporate Added Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Add_corporate.php';\",1500);</script>"; ?>
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
    <p>Corporate is Not created</p>
    <p>
      <a href="../Add_corporate.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
    }

	}

?>