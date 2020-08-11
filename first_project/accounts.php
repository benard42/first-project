<?php

  session_start();
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];

  require_once("connectvars.php");

  //Obtain records from the course_unit table
  $q1 ="SELECT * FROM course_units WHERE reg_no = '$username'";
  $result = mysqli_query($dbc,$q1);
  $count = mysqli_num_rows($result);


  //Total course unit fees 
  $totalunitfees = 200000.00 * $count;
  $total = 100000.00 + $totalunitfees;

  //Obtain paid fees from fees table
  $q2 = "SELECT * FROM fees WHERE regno ='$username'";
  $data = mysqli_query($dbc, $q2);
  $row = mysqli_fetch_array($data);
  $paid = $row['registration'] + $row['library'] + $row['ict'] + $row['guild'] + $row['course_units'];
  $balance = $total - $paid;

  //Obtain student credentials from biodata
  $q3 = "SELECT FirstName, LastName FROM admitted WHERE id = '$username'";
  $r3 =mysqli_query($dbc,$q3);
  $row1 = mysqli_fetch_array($r3);
  $firstname = $row1['FirstName'];
  $lastname = $row1['LastName'];


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">


<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ACCOUNTS</title>
</head>
<body >
<a href="welcome.php">&lt;&lt;Go back Home</a>
<center>

<div id="header">
<h2>kyamuhunga University</h2>
<p> P.O.Box 762 Bushenyi.</p>
<p> kyamuhunga@edu.com</p>

</div>

<h1> ACCOUNTS DETAILS</h1>
<table style="width:50%" border="1">
<tr>
<td> NAME </td>
<td> AMOUNT PAID</td>
<td> BALANCE</td>
</tr>
<tr>
<?php
echo '<td>'.$firstname.' '.$lastname.'</td>';
echo '<td>Shs.'.$paid.'</td>';
echo '<td>Shs.'.$balance.'</td>';
?>
</tr>

</table>
<br>
<br>
<br>
<table >
   <tr >
    	<td  colspan="2">
    	    <center><b><u>INCASE OF ANY NEED OF ASSISTANCE, YOU CAN CONTACT US ON:</u></b>
            <br>E-mail: SchoolManagement@gmail.com<br>
            Tel: 0759001257 / 0721212987<br></center>
    	</td>
    </tr>
    </table>
</center>
</body>
</html>