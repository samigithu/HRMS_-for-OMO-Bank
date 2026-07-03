<?php
	include('../user/controller/connect.php');
	$dbs = new database();
	$db=$dbs->connection();
	$manger=$_SESSION['hr_id']['hr_firstname'];
    $id=$_SESSION['hr_id']['hr_companyid'];
	date_default_timezone_set("Africa/Addis_Ababa");
	$datee = date('M-d-y');
	$date = str_replace('/', '-', $datee);
    $startd = date('Y-m-d', strtotime($date));
	$nn= date("g:i:sP A",time());
	$AM= date('g:i A',time());
	$AMs=date('g:i A',strtotime('3:01AM'));$AMf=date('g:i A',strtotime('6:30AM'));
	$AMas=date('g:i A',strtotime('8:01AM'));$AMaf=date('g:i A',strtotime('11:00AM'));		
	$msg ="";
 if(isset($_GET['message'])) 
    {
        $msg=$_GET['message'];
		
	}   	
  if(isset($_GET['id']))
  {
    $acceptid = $_GET['id'];
    $statues = "Absent";
	$void="";
   $query=mysqli_query($db,"SELECT * FROM attendence_table WHERE EmpId='$id' AND date='$startd' AND morning='$void'  OR afternoon='$void'");
    $row     = mysqli_fetch_array($query);
    $num_row = mysqli_num_rows($query);
 if ($num_row > 0) {	
	//Morning Period
if($AM<=$AMf && $AM>=$AMs){
$phdb=mysqli_query($db,"UPDATE attendence_table SET morning='".$statues."' WHERE  morning='$void' AND date='$startd'");
	  if($phdb) {
        echo "<script>window.location='validateattendance.php? message=sucess';</script>";
        die();
    } else {
         echo "<script>window.location='validateattendance.php? message=falid';</script>";
        die();
 }	
 //Afternoon Period 09 and 08 time number mey no work on php server>5.o versions to correrct please change attendance registration time and check it
}else if($AM<= $AMaf && $AM>= $AMas);{
 $phdb=mysqli_query($db,"UPDATE attendence_table SET afternoon='".$statues."' WHERE afternoon='$void' AND date='$startd' ");
	  if($phdb) {
        echo "<script>window.location='validateattendance.php? message=sucess';</script>";
        die();
    } else {
         echo "<script>window.location='validateattendance.php? message=falid';</script>";
        die();
 }
 }
  }else {
         echo "<script>window.location='validateattendance.php? message=All Memebers Are Presented Today';</script>";
        die();
  }
  }	
?>