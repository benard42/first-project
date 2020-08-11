


<HTML>
<body style="background-image:url(building.jpg)">
<img src="muklogo.png" class="photo" >
<br><br><h1>
<form method="POST" action="result.php" >
<input type="text" name="rn" placeholder="Enter Reg.NO." style="background-color:purple"></input><br>
<input type="submit" value="Search Results"style="background-color:orange">
</form></h1>

</body>

</html>

<div class="row" style="background-color:powderblue">
<?php


$con = mysqli_connect ("localhost","root","");
if($con===false){
	die("ERROR:Could not connect. " . mysqli_connect_error());
}


mysqli_select_db($con,"applicantsdb") or die("couldn't find db");
$reno = $_POST['rn'];

$from= "select * from marks WHERE regNo ='$reno'";
$result = mysqli_query($con,$from);
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

echo $reno.'\'  <i>Results</i>'; 
echo"<table rowspan='2' width:100px; border='2'->";
echo "<tr><th>coursecode|</th><th>coursename|</th><th>Marks</th></tr>";
while($value= mysqli_fetch_array($result)){


echo '<tr><h1>';
echo'<td>';
echo $value['courseCode'];
echo '</td>';




echo'<td>';
echo $value['courseName'];
echo '</td>';

echo'<td>';
echo $value['marksScored'];
echo '</td>';

echo '</h1></tr></td>';


}
echo "</table>";



?></div>