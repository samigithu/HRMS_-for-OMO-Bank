<?php

  include('../include/access/connector.php');
?>
<link rel="stylesheet" href="../../css/popup_style.css">
<?php
	if(isset($_POST['bran'])){
      
      $branches_name = $phdb->real_escape_string($_POST['branches_name']);

       $sql = $phdb->query("INSERT INTO `type_of_leave`(`Type_of_Name`) VALUES ('$branches_name')")  or die (mysqli_error($phdb));
       if($sql == TRUE){
       	         ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
     Data Inserted Successfully
    </h1>
    <p>Leave Type Inserted Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../Addleavetype.php';\",1500);</script>"; ?>
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
    <p>Data is Not inserted</p>
    <p>
      <a href="../Addleavetype.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
    }

	}

?>