window.onload=function(){getTime();} 
function getTime(){ 
var today=new Date(); 
var Men=today.getMonth();
var d=today.getDay();
var h=today.getHours(); 
var m=today.getMinutes();
var s=today.getSeconds(); 
 var x=document.getElementById('session').style.color; 
 // add a zero in front of numbers<10
 //h=checkTime(h);
 m=checkTime(m); 
 s=checkTime(s); 
 var amOrPm = (h < 12) ? "AM" : "PM";
  h=h%12;
   h=h? h:12;//the hour o should be 12
 var weekday = new Array(7);
        weekday[0] = "Sunday";
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";
 var month = new Array(11);
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";	
//Today date		
document.getElementById('Today').innerHTML=month[Men]+":"+weekday[d]+":"+h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000); 		
//PM session exception
if(amOrPm=="AM"){ 
//Saturday Afternoon atendance exception
  if(weekday[d]=="Saturday"&& h>=7){
	 document.getElementById('session').style.color="blue";
	 document.getElementById('session').innerHTML=h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
    document.getElementById('atten').innerHTML="Vacation Day";
 }
//exception sunday workdays
else if(weekday[d]!="Sunday"){
//Morning Session attendence Validation time 3:01-6:30
 if((6>=h && 30>=m)&&(m>=1 && h>=3)){
	 document.getElementById('session').innerHTML="Morining"+":"+h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000); 
//Afternoon Session attendence Validation time 8:01-11:00 
 }else if(11>=h && ( h>=8 && m>=1)){
	document.getElementById('session').innerHTML="Afternoon"+":"+h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
 //System spare time /time before/after work time
 }else if(h==1 || ((h==6 && m>30)&&(h==7 && m<30))){
     document.getElementById('session').style.color="gray";
	 document.getElementById('session').innerHTML=h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
	  document.getElementById('atten').innerHTML="Spare time"; 
	 // document.gtElementBYTagName("div").style.display="none";//page exit at that moment/may be system shoutdowend
//Attendance fill Time 
 }
 else if((8>=h && h>=7)||(3>=h && h>=2)){
     document.getElementById('session').style.color="green";
	 document.getElementById('session').innerHTML=h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
	  document.getElementById('atten').innerHTML="Attendance fill Time"; 
//Attendance Validation time Passed	 
 }else if((2==h && (45>=m && m>=30)) || (h==7&& 45>=m && m>=30)){
	document.getElementById('session').style.color="gray";
	 document.getElementById('session').innerHTML=h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
	  document.getElementById('atten').innerHTML="ART: please Assign Today Attendance within.."+(45-m)+"minute"; setTimeout(function(){getTime()},1000); 
 }else{
	  document.getElementById('session').style.color="red";
	 document.getElementById('session').innerHTML=h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
	 document.getElementById('atten').innerHTML="Attendance Validation outdated"; 
	 if(x=="#7FFF00"){
     document.getElementById('atten').innerHTML='Attendance Validated';	  }
 //Holdays attendence exception
 }}else{
	  document.getElementById('session').style.color="green";
	 document.getElementById('session').innerHTML=h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
	  document.getElementById('atten').innerHTML="Holy Day"; 
 }
 //Night Time Exception
}else{
	 document.getElementById('session').style.color="gray";
	 document.getElementById('session').innerHTML=h+":"+m+":"+s+":"+amOrPm; setTimeout(function(){getTime()},1000);  
	  document.getElementById('atten').innerHTML="Night Time"; 
}
if(x=="#7FFF00"){
     document.getElementById('atten').innerHTML='Attendance Validated';
}	 
 //setInterval("getTime()",1000);//another way 
 function checkTime(i){ 
 if (i<10){ i="0" + i; 
 } return i; }
	}