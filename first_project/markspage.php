<?php
$con = mysqli_connect ("localhost","root","");
if($con===false){
	die("ERROR:Could not connect. " . mysqli_connect_error());
}


$db=mysqli_select_db($con,'applicantsdb');

$fName=$_POST['fName'];
$lName=$_POST['lName'];
$programme=$_POST['programme'];
$courseCode=$_POST['courseCode'];
$courseName=$_POST['courseName'];
$marksScored=$_POST['score'];
$semester=$_POST['semester'];


$query = "insert into marks values('$fName','$lName','$programme','$courseCode','$courseName','$marksScored','$semester')" ;
//if(mysql_query($con,$query)){echo "data inserted succesfully";} else{echo "data NOT inserted succesfully";}
mysqli_close($con);
?>