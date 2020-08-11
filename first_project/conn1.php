
<?php
 
 include 'seconddb.php';
 
mysqli_select_db($conn,$db);

$sql1= "create table applicant(username varchar(14),emailaddress varchar(20),password varchar(10))";

if(mysqli_query($conn,$sql1)){
	echo 'create table failed';
}
 else {
    echo 'create table successful:'. mysqli_error($conn);
}
  $nusername1=$_post['nusername'];
  $emailaddress1=$_post['emailaddress'];
  $npassword1=$_post['npassword'];
$sql2="INSERT INTO applicant(username,emailaddress,password) VALUE('$nusername1','$emailaddress1','$npassword1')";

if (mysqli_query($conn,$sql2)){
	
	echo"create INSERT failed.";
}
 else {
    echo "create INSERT successful: " . mysqli_error($conn);
}

if(ISSET($_POST['nusername'])
{
	echo 'form submitted';
	
	
}
			
		
		else{
			echo 'no form details';
			
		}
		mysqli_close($conn)


 ?>