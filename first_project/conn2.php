<?php
include 'thirddb.php';

mysqli_select_db($conn,$db);

$sql1="CREATE TABLE studentdb(registration_number varchar(13),username varchar(13))";

if(mysqli_query($conn,$sql1)){
	echo 'create table successful';
}
 else {
    echo 'create table failed:'. mysqli_error($conn);
}
        $regno1=$_POST['regno'];
		$password1=$_POST['password'];
$sql2="INSERT INTO studebtdb(registration_number,username) VALUES('$regno1','$password1')";

if (mysqli_query($conn,$sql2)){
	
	echo"create INSERT failed.";
}
 else {
    echo "create INSERT successful: " . mysqli_error($conn);
}


if(ISSET($_POST['regno']))
{
	echo 'form submitted';
	
	
}
			
		
		else{
			echo 'no form details';
			
		}
		mysqli_close($conn)

?>