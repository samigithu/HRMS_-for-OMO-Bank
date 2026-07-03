<?php
session_start();
  if(!isset($_SESSION['hr_id'])){
      //header("location:../index.php");exit();
	  echo "<script>window.location='../index.php';</script>";exit();
  }
?>
<link rel="stylesheet" href="../../css/popup_style.css">
<?php
 include('../include/access/connector.php');   
 if(!empty($_POST['noticeSubject'])) {
    $noticeSubject=$_POST['noticeSubject'];
    $noticeDate=$_POST['noticeDate'];
    $noticeTime=$_POST['noticeTime'];
    $noticeDesc=$_POST['noticeDesc'];
	$noticeto=$_POST['to'];
	$noticeBy=$_SESSION['hr_id']['hr_firstname'];
	
    $result=$phdb->query("INSERT INTO notices (subject, notice_date, notice_time, description, visibility , insert_by, insert_date) 
     VALUES ('".$noticeSubject."', '".$noticeDate."', '".$noticeTime."', '".$noticeDesc."','".$noticeto."', '".$noticeBy."', CURRENT_TIMESTAMP)");

    if($result) {
                    ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
     Data Inserted Successfully
    </h1>
    <p>Notice Posted Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = '../adminaddnotice.php';\",1500);</script>"; ?>
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
    <p>Notice is Not Posted</p>
    <p>
      <a href="../adminaddnotice.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
 }}else {
        
		  ?>
         <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Please Insert full Information </p>
    <p>
      <a href="../adminaddnotice.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
    </p>
  </div>
</div><?php	
 }
?>