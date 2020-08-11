<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>student registration</title>

   <style type="text/css">
 
	body,h2,h4{
     text-align:left;
 
	}
	#divwrapper2{
          width: 700px; 
		  height:150%;
		  position: absolute;
		  left: 40%;
		  margin-left: -180px;
		  color: darkblue; 
		 background-color:#ccf;
		  border: 2px solid black ; 
		  padding: 4px; 
		  font-family: sans-serif;
		  text-align:left;
		  }
	#divheader{
        text-align:left;
       width=700px;
	   background-color:blue;
	   }
	body {
		font-family:vardana,geneva,sans-serif;
		background-color: powderblue;
		}
 
 
   </style>
 <?php
	   //create connection
	$connect=mysqli_connect('localhost','root','','groupbbbb');
	
		//check connection
	if(mysqli_connect_errno($connect))
	{
		echo 'Failed to connect to database: '.mysqli_connect_error();
	}
	else
		echo '';
    if(isset($_POST['submit'])){
 $std_id = $_POST['std_id'];
  
  $course =  $_POST['course'];
  $courses="";
  if($course){
  foreach ($course as $courses){
  
  $query = "INSERT INTO registration(course, std_id) VALUES('".mysqli_real_escape_string($connect,$courses)."',$std_id)";
  mysqli_query($connect,$query);
   
	
	}}}
?>

</head>
<body>

	<div id="divheader">
		<h1> <img src="#" width="1366" height="119"></h1>
	</div>
	<div id="divwrapper2">
		<h2><strong>MAKERERE UNIVERSITY</strong></h2>
		<h4>THIS IS YOUR PROOF OF REGISTRATION</h4>
	<form action="registration.php" method="post" enctype="multipart/form-data">

		<label>Select Qualification:</label>
		 <select>
			<option>Masters of IT</option>
			<option>Masters of Computing</option>
			<option>Masters of IS</option>
			<option>Diploma in Software Engineering</option>
		 </select> <br />

	 <label>Enter your regisration number:</label> <input type = "text" name = "std_id">
		<p>Year of Registration:2018</p>
		<p>Faculty/School/Insitute:FAC.OF COMPUTING & INFORM TECH</p>

		<label>Offering Type:</label>
		<input type="checkbox" name="offering"/>DAY
		<input type="checkbox" name="offering"/>Evening
		<p>Period of study:
		<select>
			<option>Year 1</option>
			<option>Year 2</option>
			<option>Year 3</option>
			<option>Year 4</option>
		</select></p>

		<p>Semester:SEMESTER 2</p>
		<p><label>course unit:</label>

		<select name="course[]" >
		<option>none</option>
			<option value="CS506:Conteporary Issues In Computing">CS506:Conteporary Issues In Computing</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>

		</select></p>


		<p><label>course unit:</label>
		<select name="course[]" >
			<option>none</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>
		</select></p>


		<p><label>course unit:</label>
		<select name="course[]" >
			<option>none</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>
		</select></p>

	    <p><label>course unit:</label>
		<select name="course[]" >
			<option>none</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>
		</select></p>

		<p><label>course unit:</label>
		<select name="course[]" >
			<option>none</option>
			<option value="CS507:Machine Learning">CS507:Machine Learning</option>
			<option value="TM500:Research Methods">TM500:Research Methods</option>
			<option value="SE500:Software Design & Modelling">SE500:Software Design & Modelling</option>
			<option value="IT501:Electronic Commerce Technologies">IT501:Electronic Commerce Technologies</option>
			<option value="CS508:Cell Phone Applications Development">CS508:Cell Phone Applications Development</option>
			<option value ="CS509:Mobile Cloud Computing">CS509:Mobile Cloud Computing</option>
			<option value ="CS510:Cryptosystems">CS510:Cryptosystems</option>
			<option value ="NW500:Unified Communications Design">NW500:Unified Communications Design</option>
			<option value ="CS600:Advanced Programming">CS600:Advanced Programming</option>
			<option value ="CS601:Conteporary Issues in Computing">CS601:Conteporary Issues in Computing</option>
			<option value = "CS602:Machine Learning">CS602:Machine Learning</option>
			<option value = "SE600:Software Design& Modelling">SE600:Software Design& Modelling</option>
			<option value = "CS505:Advanced Programming">CS505:Advanced Programming</option>
			<option value = "CS511:Information Security">CS511:Information Security</option>
		</select></p>
		<i><input  type="submit" name="submit" value="submit" id="submit"/></i>
	</form>
	</div>
</</body>
</</html>