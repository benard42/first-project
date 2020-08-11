
<html>
	<head>
	
		<style>
		
		
        *{color:green;font-size:18}
		
		</style>

	</head>

	<body style="background-image:url(uni2.jpg)">
			
			<h2 class="block" style=text-align:center> ENTER STUDENTS MARKS</h2>
		<center>
		
			<form method="POST" action="entryy.php">
				
				Registration No:<br><input type="text" name="RegistrationNo"><br><br>
				First Name:<br> <input type="text" name="fName" ><br><br>
				
				Last Name:<br><input type="text" name="lName"><br><br>
				
				programme: <br><input type="text" name="programme"><br><br>
				
				course code:<br><input type="text" name="courseCode"><br><br>
				
				course Name:<br><input type="text" name="courseName" >	<br><br>			
				Marks Scored: <br><input type="text" name="score"><br><br>
				
				semester:<br><input type="text" name="semester"><br><br>
				
				<input  style="margin-left:40px;"type="submit" name="submit" value="SEND">
			
			</form>
		</div></center>
		
		



	
	</body>
</html>
<?php
$con = mysqli_connect ("localhost","root","");
if($con===false){
	die("ERROR:Could not connect. " . mysqli_connect_error());
}


$db=mysqli_select_db($con,'applicantsdb');
$reg=$_POST['RegistrationNo'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$programme=$_POST['programme'];
$courseCode=$_POST['courseCode'];
$courseName=$_POST['courseName'];
$marksScored=$_POST['score'];
$semester=$_POST['semester'];


$query = "insert into marks(regNo,firstName, lastName, program,courseCode, courseName,marksScored,semester) values('$reg','$fName','$lName','$programme','$courseCode','$courseName','$marksScored','$semester')" ;
if(mysqli_query($con,$query)){echo "data inserted succesfully";} else{echo "data NOT inserted succesfully";}
mysqli_close($con);
?>