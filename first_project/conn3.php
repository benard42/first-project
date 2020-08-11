<?php
include 'newaccount.php';

mysqli_select_db($conn,$db);

$sql1="CREATE TABLE newaccount_detail(firstName varchar(13),secondName varchar(13),telephone varchar(10),email varchar(20),
password varchar(10),confirm_password varchar(10))";

if(mysqli_query($conn,$sql1)){
	echo 'create table successful';
}
 else {
    echo 'create table failed:'. mysqli_error($conn);
}
      $fname1=$_post['fname'];
	  $sname1=$_post['sname'];
      $telephone1=$_post['telephone'];
	  $email1=$_post['email'];
	  $password1=$_post['password'];
	  $confirm_password1=$_post['confirm_password'];
$sql2="INSERT INTO newaccount_detail(firstName,secondName,telephone,email,password,confirm_password)
VALUE('$fname1','$sname1','$telephone1','$email1','$password1','$confirm_password1')";

	if (mysqli_query($conn,$sql2)){
	
	echo"create INSERT failed.";
}
 else {
    echo "create INSERT successful: " . mysqli_error($conn);
}

  
	  
	if(ISSET($_POST['fname']))
{
	echo 'form submitted';
	
	
}else{
			echo 'no form details';
			
		}
		mysqli_close($conn)
  
?>