 <html>
 <head>
	<link rel = "stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
	<style>
    #div1{ border:1px solid blue;}
	#inn{min-height:200px; }
   </style>
	<TITLE>course units</title>
 </head>
<body style="color:orange;background-color:powderblue">
	<img src="muklogo.png" width="100%" height="20%">				
	  <div class="col-md-11"id="div1">
	  <h2 style="color:green">Register For Course Units here</h2>
	 <form method="POST" action="unit.php">
	    Registration number:
	    <input type="text" name="hty" placeholder="Enter registration number"><br>
	    Program offered:
		<select name="programz">
		 <option>Masters of Computing </option>
		 <option>Masters of IT </option>
		 <option>Masters of IS </option>
		 <option>Diploma Software Engineering </option>
		</select><br><br>
	    Year of study:
		<select name="yearz" >
		 <option>2018</option>
		 <option>2017</option>
		 <option>2016</option>
		 <option>2015</option>
		 <option>2014</option>
		 <option>2013</option>
		 <option>2012</option>
		 <option>2011</option>
		 <option>2010</option>
		 <option>2009</option>
		 <option>2008</option>
		 <option>2007</option>
		 <option>2006</option>
		 <option>2005</option>
		 <option>2004</option>
		</select><br><br>
		Semester:
		<select name="sem">
		 <option>1</option>
		 <option>2</option>
		</select>
		<table border="0">
		   <tr><th colspan="2" style="color:purple;">
		   <h3>Select Course units:</h3></th><tr>
		  <tr><th>
		  Unit Code:<input type="text" name="unitz"></th><th>
		  Unit Name:<input type="text" name="unitnames"></th></tr>
		  <tr><th><input type="submit" value="save" name="submit"></th>
		  </tr>
		</table> 
		
		
	 </form></body></div>
</html>
<?php

$host="localhost";
$username = "root";
$password = "";
$mydb="registration";
$conn = new mysqli($host,$username,$password);
if($conn){
	echo'connected successfully';
}
$sql = "CREATE DATABASE Cregistration";

if(mysqli_query($conn,$sql)){
echo'DATABSE created successfully';
}else echo 'Database not created';

mysqli_select_db($conn,$mydb);
$courseunits = "CREATE TABLE courseunittable(programname varchar(25),year int(4),Semester int(2),unitCode varchar(10) primary key, Unitname varchar(25) NOT NULL)";



if(mysqli_query($conn,$courseunits)){
	echo"Courseunittable created successfully<br>";
}else{
	echo"ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



$programname = $_POST['programz'];
$year = $_POST['yearz'];
$semester = $_POST['sem'];
$unitcode = $_POST['unitz'];
$unitname = $_POST['unitnames'];


$con = mysqli_connect ("localhost","root","");
if($con===false){
	die("ERROR:Could not connect. " . mysqli_connect_error());
}else echo "connection successful";


mysqli_select_db($con,"dbank") or die("couldn't find db");
 $RFNO2=$_POST['hty'];

$from= "select * from Banktable WHERE RFno='$RFNO2'";
$result = mysqli_query($con,$from);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
	
while($value= mysqli_fetch_array($result)){
$fees = $value['amount'];
$pgm =$value['program'];
$program_match ='Masters of Computing';
$program_match1 ='Masters of IS';
$program_match2 ='Masters of IT';
$program_match3 ='Diploma Software Engineering';




  if($pgm == $program_match && $fees<1100000 || $pgm == $program_match1 && $fees<1100000 || $pgm == $program_match2 && $fees<900000 || $pgm == $program_match3 && $fees<900000 ){
	echo $fees;
	
echo '<div style="background-color:red;color:white;">YOU HAVE BALANCE WITH ACCOUNTS, CLEAR FIRST TO COUNTINUE</div>';
}ELSE {


$sql = "INSERT INTO courseunittable (programname,year,semester,unitcode,Unitname) VALUES ('$programname', '$year', '$semester', '$unitcode', '$unitname')";

echo '<div style="background-color:red;color:white;">YOU HAVE SUCCESSFULLY REGISTERED</div>';

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
	//header("Refresh:0;URL=unit.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
if(isset($_POST['semester'])){
	echo'Form submitted';
}else{
	echo'form not submitted';

	
	}

	
mysqli_close($conn);
}


}



?>




