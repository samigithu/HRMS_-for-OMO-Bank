<?php

  include('../include/access/connector.php');
?>
<link rel="stylesheet" href="../../css/popup_style.css">
<?php
	if(isset($_POST['bran'])){
      
      $branches_name = $phdb->real_escape_string($_POST['branches_name']);
$datee = date('M-d-y');
	 $date = str_replace('/', '-', $datee);
    $startd = date('Y-m-d', strtotime($date));
       $sql = $phdb->query("INSERT INTO `branches_table` VALUES (null,'$branches_name','$startd')")  or die (mysqli_error($phdb));
       if($sql == TRUE){
			         ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
     Data Inserted Successfully
    </h1>
    <p>Branch Added Successfully</p>
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
    <p>Branch is Not created</p>
    <p>
      <a href="../Add_braches.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
    }

	}

?>