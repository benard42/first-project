<?php include 'header.php'; ?>
<html>
<body>

<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">

<link href='style.css'rel='stylesheet'>
<br><br>
<h1 style="color:red;">Search for a particular student</h1>
<form method="POST" action=""><strong><input type="text" name="debt" placeholder="REGno/REFno" style="color:black;font-size:18px;">
<input type="submit" value="search" style="color:black; font-size:18px;"></strong>
</form>
<div >

</div> 
</body>
</html>



<style>

body{
	background: url('www.jpg') no-repeat;
	background-size: cover;
	font-family: Agency fb;
		  color: white;
}
ul{
	margin:0px;
	padding:0px;
	list-style: none;
	
	
}
ul li{
	Margin-top:10px;
    float:left;	
	width: 190px;
	height: 40px;
	background-color: black;
	opacity:.9;
	line-height: 40px;
	text-align:center;
    font-size: 20px;

	
} ul li a{
	text-decoration: none;
	color: white;
	display: block;
	
}
ul li a:hover{
	background-color:green;
}
ul li ul li{
	display: none;
	
	
}ul li:hover ul li{
	display: block;
	float:right;
	position:100px 100px;
}

.active{
	background-color:blue;
	
}


</style>


<?php
$con = mysqli_connect ("localhost","root","");
if($con===false){
	die("ERROR:Could not connect. " . mysqli_connect_error());
}else echo "connection successful";


mysqli_select_db($con,"dbank") or die("couldn't find db");

$reg = $_POST['debt'];
$from= "select * from Banktable WHERE RFno='$reg'";
$result = mysqli_query($con,$from);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

echo $reg.'\'s financial Statement'; 
echo"<table rowspan='2' border='1' style='background-color:grey; font-size:18px; color: white;'
->";
echo "<tr><th>FirstName|</th><th>LastName|</th><th>ProgramName|</th><th>BranchName|</th><th>libraryFee|</th><th>ApplicationFee|</th><th>GuildFee|</th><th>ICTfee|</th><th>Late reg.|</th><th>CourseFee|</th><th>tDate|</th><th>TotalAmount|</th><th>REGno/REFno.|</tr></th>";
while($value= mysqli_fetch_array($result)){


echo '<tr><td>';
echo $value['fname'];	
echo '</td>';

echo '<td>';
echo $value['lname'];
echo '</td>';
echo'<td>';
echo $value['program'];
echo '</td>';

echo '<td>';
echo $value['Bname'];
echo '</td>';
echo '<td>';
echo $value['library'];
echo '</td>';
echo '<td>';
echo $value['Application'];
echo '</td>';
echo '<td>';
echo $value['Guild'];
echo '</td>';
echo '<td>';
echo $value['ict'];
echo '</td>';

echo '<td>';
echo $value['Latereg'];
echo '</td>';
echo '<td>';
echo $value['coursefee'];
echo '</td>';
echo '<td>';
echo $value['tdate'];
echo '</td>';
echo '<td><div style="color:red;">';
echo $value['amount'];
echo '</div></td>';
echo '<td>';
echo $value['RFno'];
echo '</tr></td>';


}
echo "</table>";

$from= "select * from Banktable";
$result = mysqli_query($con,$from);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
	



echo "<BR><CENTER><H1><I>STUDENTS WITH DEBTS</I></H1></CENTER>";

echo"<table rowspan='2' border='1' style='background-color:grey; font-size:18px;'
->";
echo "<tr><th>FirstName|</th><th>LastName|</th><th>ProgramName|</th><th>BranchName|</th><th>libraryFee|</th><th>ApplicationFee|</th><th>GuildFee|</th><th>ICTfee|</th><th>Late reg.|</th><th>CourseFee|</th><th>tDate|</th><th>TotalAmount|</th><th>REGno/REFno.|</tr></th>";
while($value= mysqli_fetch_array($result)){
$fees = $value['amount'];
$pgm =$value['program'];
$program_match ='Masters of Computing';
$program_match1 ='Masters of IS';
$program_match2 ='Masters of IT';
$program_match3 ='Diploma Software Engineering';

if($pgm == $program_match && $fees<1100000 || $pgm == $program_match1 && $fees<1100000 || $pgm == $program_match2 && $fees<900000 || $pgm == $program_match3 && $fees<900000 ){


echo '<tr><td>';
echo $value['fname'];	
echo '</td>';

echo '<td>';
echo $value['lname'];
echo '</td>';
echo'<td>';
echo $value['program'];
echo '</td>';

echo '<td>';
echo $value['Bname'];
echo '</td>';
echo '<td>';
echo $value['library'];
echo '</td>';
echo '<td>';
echo $value['Application'];
echo '</td>';
echo '<td>';
echo $value['Guild'];
echo '</td>';
echo '<td>';
echo $value['ict'];
echo '</td>';

echo '<td>';
echo $value['Latereg'];
echo '</td>';
echo '<td>';
echo $value['coursefee'];
echo '</td>';
echo '<td>';
echo $value['tdate'];
echo '</td>';
echo '<td><div style="color:red;">';
echo $value['amount'];
echo '</div></td>';
echo '<td>';
echo $value['RFno'];
echo '</tr></td>';


}
}
echo "</table>";





?>
