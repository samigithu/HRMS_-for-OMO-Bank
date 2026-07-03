<?php
  
	include('../user/controller/connect.php');
	$dbs = new database();
	$db=$dbs->connection();
	$manger=$_SESSION['employee_id']['employee_firstname'];
    $id=$_SESSION['employee_id']['employee_companyid'];
	$datee = date('M-d-y');
	$date = str_replace('/', '-', $datee);
    $startd = date('Y-m-d', strtotime($date));
	$AM= date('g:i A',time());
	$AMs=date('g:i A',strtotime('2:46AM'));$AMf=date('g:i A',strtotime('3:00AM'));//15 minute
	$AMas=date('g:i A',strtotime('7:46AM'));$AMaf=date('g:i A',strtotime('8:00AM'));//15 minute
	$msg ="";
 if(isset($_GET['message'])) 
    {
        $msg=$_GET['message'];
		
	}   	
  if(isset($_GET['id']))
  {
    $acceptid = $_GET['id'];
    $statues = "Present";
	$void="";
    $query=mysqli_query($db,"SELECT * FROM attendence_table WHERE EmpId='$id' AND date='$startd' AND afternoon='$void' OR morning='$void' ");
    $row     = mysqli_fetch_array($query);
     $num_row = mysqli_num_rows($query);
 if ($num_row > 0) {	
	//Morning Period
if($AM>=$AMs && $AM<=$AMf){
$phdb=mysqli_query($db,"UPDATE attendence_table SET morning='".$statues."' WHERE EmpId='$id' AND date='$startd'");
	  if($phdb) {
        echo "<script>window.location='fillattendance.php? message=sucess';</script>";
        die();
    } else {
         echo "<script>window.location='fillattendance.php? message=falid';</script>";
        die();
 }	
 //Afternoon Period 09 and 08 time number mey no work on php server>5.o versions to correrct please change attendance registration time and check it
}else if( $AMas<= $AM && $AMaf>= $AM)
{
 $phdb=mysqli_query($db,"UPDATE attendence_table SET afternoon='".$statues."' WHERE EmpId='$id' AND date='$startd' ");
	  if($phdb) {
        echo "<script>window.location='fillattendance.php? message=sucess';</script>";
        die();
    } else {
         echo "<script>window.location='fillattendance.php? message=falid';</script>";
        die();
 }
 }
  }else {
         echo "<script>window.location='fillattendance.php? message=attendance is fillid';</script>";
        die();
  }
  }	
?>