<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="groupb";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {echo 'connection successful';
}

mysqli_select_db($conn,$db);

$sql1="create table studentbiodata1(
firstName varchar(14),SecondName varchar(14),OtherName varchar(14),Sex varchar(6),Date_Of_Birth date,occupation varchar(15),Place_of_residence varchar(20),
address varchar(50),citizenship varchar(17),country varchar(14),email varchar(20),telephone int(10),fax varchar(20))";


if(mysqli_query($conn,$sql1)){
	echo 'create table failed';
}
 else {
    echo 'create table successful:'. mysqli_error($conn);
}

    $fname1=$_post['fname'];
    $sname1=$_post['sname'];
	$oname1=$_post['oname'];
	$sex1=$_post['sex'];
	$DOB1=$_post['DOB'];
	$occupation1=$_post['occupation'],
	$place1=$_post['place'];
	$address1=$_post['address'];
	$citizenship1=$_post['citizenship'];
	$country1=$_post['country'];
	$email1=$_post['email1'];
	$telephone1=$_post['telephone'];
	$fax1=$_post['fax'];
$sql6="INSERT INTO studentbiodata(firstName,SecondName,OtherName,Sex,Date_Of_Birth,Place_of_residence,
address,citizenship,country,email,telephone,fax)
VALUE('$fname1','$sname1','$oname1','$sex1','$DOB1','$occupation1','$place1''$address1','$citizenship1','$country1','$email1','$telephone1','$fax1')";
if(mysqli_query($conn,$sql6)){
	echo"create INSERT failed.";
}
 else {
    echo "create INSERT successful: " . mysqli_error($conn);
}

if(ISSET($_POST['fname']))
{
	echo 'form submitted';
	
	
}
			
		
		else{
			echo 'no form details';
			
		}
		mysqli_close($conn)


?>		   