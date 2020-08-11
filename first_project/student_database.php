<!DOCTYPE html>
<html>
<head>
<meta charset-"utf-8">
<title>Student_database</title>
</head>
<body>
<?php


$host="localhost";
$username = "root";
$password = "";
$mydb="student";
$conn = new mysqli($host,$username,$password);

if($conn){
	echo'connected successfully';
}
$sql = "CREATE DATABASE student";

if(mysqli_query($conn,$sql)){
echo'DATABSE created successfully';
}else echo 'Database not created';



mysqli_select_db($conn,$mydb);

$student_info = "CREATE TABLE studenttable(RegNo varchar(10) primary key, Libraryfee int(9),Guildfee int(9),Applicationfee int(9),ICTfees int(9), fname varchar(25) NOT NULL,lname varchar(25) NOT NULL, Gender varchar(2) NOT NULL)";

$program = "CREATE TABLE Programtable(programcode varchar(10) primary key, pfee int(8), Pname varchar(25) NOT NULL, level varchar(10))";

//$NOK = "CREATE TABLE NOKtable(NIN varchar(10) primary key, fname varchar(25) NOT NULL,lname varchar(25) NOT NULL, Relationship varchar(20) NOT NULL, TelNo varchar(10))";

$courseunits = "CREATE TABLE unittable(unitCode varchar(10) primary key, coursefees int(10), Unitname varchar(25) NOT NULL,year int(4),Semester int(2))";


if(mysqli_query($conn, $student_info)){
	echo"studenttable created successfully<br>";
}else{
	
	
	echo "ERROR: Could not able to execute $student_info " . mysqli_error($conn);
}


if(mysqli_query($conn,$program)){
	echo"programtable created successfully<br>";
}else{
	echo"ERROR: Could not able to execute $program. " . mysqli_error($conn);
}




if(mysqli_query($conn,$courseunits)){
	echo"Unittable created successfully<br>";
}else{
	echo"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);


?>
</body>
</html>