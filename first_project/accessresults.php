<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "llogin.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<html>
    <head>
        <title>student dashbord</title>
    </head>
    <style type="text/css">
        body{
            background-color: floralwhite;
            margin: 0px;
            margin-top: -20px;
            color:forestgreen;
            }
       #d li{
            padding: 10px;
            text-decoration: none;
            list-style: none;
            
        }
      #d  ul{
            background-color: orange;
            padding-top: 15%;
            width: 15%;
            height: 100%;
            position: fixed;
            
        }
        #d ul li{
            background-color: aqua;
            padding:20px;
        }
      #d  ul li a:hover{
            margin: 0px;
            cursor: pointer;
            width:20px;
        }
      #d  ul li{
            margin-left: -40px;
        }
      #d  a{
            text-decoration: none;
        }

        h3{
            color:blue;
            text-transform: uppercase;
            padding-left: 20%;
        }
   
         
    </style>
<body>
    <div id="d">
        
    <ul>
        <img src="part.PNG" style="margin-top:-95%; border-radius:50%; margin-left:-5%;"><br><br><br>
        <li><a href="#">Access Results</a></li><br>
        <li><a href="#">Financial Statement</a></li><br>
        <li><a href="registercourseunit.php">Course Unit Registration</a></li><br>
        <li><a href="#">Change Profile Picture</a></li><br>
        <li><a href="<?php echo $logoutAction ?>">LogOut</a></li>
    </ul>
    </div>
    <div style="padding-left:19%;padding-top:2%;">
  <img src="logo.png" style="width:80%; height:20%; position:fixed;">
    </div>
    <div style="padding-left:20%;">
    <div class="top" style="padding-top:15%;">
    <?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_RSshowdata = 10;
$pageNum_RSshowdata = 0;
if (isset($_GET['pageNum_RSshowdata'])) {
  $pageNum_RSshowdata = $_GET['pageNum_RSshowdata'];
}
$startRow_RSshowdata = $pageNum_RSshowdata * $maxRows_RSshowdata;

mysql_select_db($database_conn, $conn);
@$d=$_POST['FirstName'];
$query_RSshowdata = "SELECT * FROM  entermarks";
$query_limit_RSshowdata = sprintf("%s LIMIT %d, %d", $query_RSshowdata, $startRow_RSshowdata, $maxRows_RSshowdata);
$RSshowdata = mysql_query($query_limit_RSshowdata, $conn) or die(mysql_error());
$row_RSshowdata = mysql_fetch_assoc($RSshowdata);

if (isset($_GET['totalRows_RSshowdata'])) {
  $totalRows_RSshowdata = $_GET['totalRows_RSshowdata'];
} else {
  $all_RSshowdata = mysql_query($query_RSshowdata);
  $totalRows_RSshowdata = mysql_num_rows($all_RSshowdata);
}
$totalPages_RSshowdata = ceil($totalRows_RSshowdata/$maxRows_RSshowdata)-1;
?>
<table border="1">
  <tr>
    <td>Registration Number</td>
    <td>Course Code</td>
    <td>Course Unit</td>
    <td>Marks</td>
    <td>Course Code</td>
    <td>Course Unit</td>
    <td>Marks</td>
    <td>Course Code</td>
    <td>Course Unit</td>
    <td>Marks</td>
    <td>Course Code</td>
    <td>Course Unit</td>
    <td>Marks</td>
    <td>Course Code</td>
    <td>Course Unit</td>
    <td>Marks</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_RSshowdata['FirstName']; ?></td>
      <td><?php echo $row_RSshowdata['CourseCode1']; ?></td>
      <td><?php echo $row_RSshowdata['CourseUnit1']; ?></td>
      <td><?php echo $row_RSshowdata['Marks']; ?></td>
      <td><?php echo $row_RSshowdata['CourseCode2']; ?></td>
      <td><?php echo $row_RSshowdata['CourseUnit2']; ?></td>
      <td><?php echo $row_RSshowdata['Marks1']; ?></td>
      <td><?php echo $row_RSshowdata['CourseCode3']; ?></td>
      <td><?php echo $row_RSshowdata['CourseUnit3']; ?></td>
      <td><?php echo $row_RSshowdata['Marks2']; ?></td>
      <td><?php echo $row_RSshowdata['CourseCode4']; ?></td>
      <td><?php echo $row_RSshowdata['CourseUnit4']; ?></td>
      <td><?php echo $row_RSshowdata['Marks3']; ?></td>
      <td><?php echo $row_RSshowdata['CourseCode5']; ?></td>
      <td><?php echo $row_RSshowdata['CourseUnit5']; ?></td>
      <td><?php echo $row_RSshowdata['Marks4']; ?></td>
    </tr>
    <?php } while ($row_RSshowdata = mysql_fetch_assoc($RSshowdata)); ?>
</table>
	</div>
    </div>
</body>
</html>