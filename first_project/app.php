
<html>
  <head>
  
      <CENTER><title>KYAMUHUNGA UNIVERSITY</title></CENTER>
     </head>
<link href='style.css'rel='stylesheet'>

 <ul>
<li><a>Home</a></li>
<li><a>Application</a>
  <ul>
	<li><a href="app.html">enrollment</a></li>
	<li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=="app.php")?"correct":"";?>" href="app.php">application form</a></li>
	<li><a>status</a></li>
	<li><a>Help</a></li>
	</ul>
</li>
<li><a>Admission</a>
 <ul>
 <li><a href="registrarlogin.html">registrarlogin</a></li>
  <li><a href="byaka.php">students who have applied</a></li>
	<li><a>Reg.no</a></li>
	<li><a>Sdt. Portal</a></li>
	<li><a>status</a></li>


  </ul></li>
<li><a>Registration</a>
 <ul>
  <li><a>course units</a></li>
	<li><a>Balance</a></li>
	
  </ul></li>
<li><a>Examination</a>
<ul>
<li><a>Test Table</a></li>
<li><a>Exam Table</a></li>
</li></ul>
<li><a>student portal</a>
<ul>
<li><a href="studentlogin.php">view results online</a></li>
</li></ul>
<li><a>ABOUT US</a>
<ul>
<li><a href="app.php">application form</a></li></ul>
</li>
</ul>

</html>


<br><br>





<! Doctyle html>
<html>
      <head></head>
	    <body bgcolor="orange">
	
	     <form method="post" action="byaka.php">
	<H1>SECTION A</H1>
		    <h2>APPLICATION FORM<h2>
			      					
					   <table border=2>
					   <thead><th><e><h2>PERSONAL INFORMATION</h2></th></thead>
					   <tbody><td>
						<p><label>First Name<input type="text"placeholder="First Name"required name="fname"></label></p>
						 <label>Second Name<input type="text"placeholder="Second Name"required name="sname"></label>
						 <label>Other Name<input type="text"placeholder="Other Name"name="oname"></label></p>
						 <p>Sex* Male<input type="radio"name="sex"name="sex"> Female<input type="radio"name="sex">
						  <label>Date Of Birth<input type="date"placeholder="(dd/mm/yyyy)"name="DOB"></label></p>
						  <p>Occupation* student<input type="radio"name="Occupation"name="occupation"> Employees<input type="radio"name="Occupation"></p>
						  Place of Residence<label><input type="text"placeholder="Place of Residence"name="place"></label>
						  Postal Address<label><input type="text"placeholder="Postal Address"name="address"></label>
						  Citizenship<label><input type="text"placeholder="Citizenship"name="citizenship"></label>
						  Country<label><input type="text"placeholder="Country"name="country"></label></p>
						  <p>Email<label><input type="text"placeholder="benardbyaka@gmail.com"name="email"></label>
						  Telephone<label><input type="number"placeholder="Telephone"name="telephone"></label>
						  Fax<label><input type="text"placeholder="if you have"name="fax"></label>
						  <ul>Next Of Kin <li>name<label><input type="text"placeholder="Name"name="kinname"></li><br>
						  <li>ADDRESS<label><input type="text"placeholder="address"name="next"></li></label><br>
						  <li>CONTACT<label><input type="text"placeholder="0772411673"name="contact"></li></label><br>
						  <li>RELATIONSHIP<label><input type="text"placeholder="relationship"name="rship"></li></label></ul>
						  </p></td></td></tbody>
		                 </table>
						 
				<H1>SECTION B</H1>		
	       <thead><th><H2>ACADEMIC INFORMATION</H2></th></thead>
		     
	            <p>O LEVEL. NAME OF THE SCHOOL<label><input type="text"name="nschool"></p></label>
			   <p>INDEX NUMBER<label><input type="text"placeholder="schoolNo/personnalNO"name="nindex"></p>
			   <p>YEAR OF ATTENDANCE From<input type="date"name="date">To<input type="date"name="date"></p>
			     <table border=2 align = "center">
			     <thead><th>Subject</th><th>Grade</th></thead>
			       <tbody bgcolor="skyblue"><td>
				   
				       <tr><td> <select name="csubject"><option>select subject 1</option><option>ENGLISH</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option></SELECT></td><td><select name="cgrade1"><option>select grade</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr>
					   <tr><td> <select name="csubject2"><option>select subject 2</option><option>ENGLISH</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option></SELECT></td><td><select name="cgrade2"><option>select grade</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr><tr><td> <select name="csubject3"><option>select subject 3</option><option>ENGLISH</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option></SELECT></td><td><select name="cgrade3"><option>select grade</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr><tr><td> <select name="csubject4"><option>select subject 4</option><option>ENGLISH</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option></SELECT></td><td><select name="cgrade4"><option>select grade</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr><tr><td> <select name="5"><option>select subject 5</option><option>ENGLISH</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option></SELECT></td><td><select name="cgrade5"><option>select grade</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr><tr><td> <select name="csubject6"><option>select subject 6</option><option>ENGLISH</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option></SELECT></td><td><select name="cgrade6"><option>select grade</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr><tr><td> <select name="csubject7"><option>select subject 7</option><option>ENGLISH</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option></SELECT></td><td><select name="cgrade7"><option>select grade</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr>
					   <tr><td> <select name="osubject1="><option>select subject 1</option><option>LITERATURE</option><option>CRE</option><option>ACCOUNTS</option><option>GERMANY</option>
					   <option>COMMERCE</option><option>AGRICULTURE</option><option>FINE ART</option><option>KISWAHILI</option><option>COMPUTER</option>
					   <option>FOODS AND NUTRITION</option><option>TECHNICAL DRAWING</option><option>LUGANDA</option><option>RUNYAKOLE</option><option>ENTERPNERSHIP</option>
					   <option>ADDITIONAL MATH</option></SELECT></td><td><select name="ograde1"><option>select grade1</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr><tr><td> <select name="osubject2"><option>select subject 3</option><option>LITERATURE</option><option>CRE</option><option>ACCOUNTS</option><option>GERMANY</option>
					   <option>COMMERCE</option><option>AGRICULTURE</option><option>FINE ART</option><option>KISWAHILI</option><option>COMPUTER</option>
					   <option>FOODS AND NUTRITION</option><option>TECHNICAL DRAWING</option><option>LUGANDA</option><option>RUNYAKOLE</option><option>ENTERPNERSHIP</option>
					   <option>ADDITIONAL MATH</option></SELECT></td><td><select name=ograde2><option>select grade2</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr>
					   <tr><td> <select name="osubject3"><option>select subject 3</option><option>LITERATURE</option><option>CRE</option><option>ACCOUNTS</option><option>GERMANY</option>
					   <option>COMMERCE</option><option>AGRICULTURE</option><option>FINE ART</option><option>KISWAHILI</option><option>COMPUTER</option>
					   <option>FOODS AND NUTRITION</option><option>TECHNICAL DRAWING</option><option>LUGANDA</option><option>RUNYAKOLE</option><option>ENTERPNERSHIP</option>
					   <option>ADDITIONAL MATH</option></SELECT></td><td><select name="ograde3"><option>select grade3</option><option>D1</option><option>D2</option><option>C3</option>
					   <option>C4</option><option>C5</option><option>C6</option><option>P7</option><option>P8</option><option>F9</option></SELECT></td></tr>
			          </table>
					          
	           <p> A LEVEL. NAME OF THE SCHOOL<label><input type="text"name="nnschool"></label><p>
			   <p>INDEX NUMBER<label><input type="text"placeholder="schoolNo/personnalNO"name="nnumber"></label></p>
			   <p>YEAR OF ATTENDANCE  From<input type="date">To<input type="date"></p>
			     <table border=2>
			     <thead><th>Subject</th><th>Grade</th></thead>
			       <tbody bgcolor="skyblue">
				       <TR><td> <select name="psubject1"><option>select principal subject 1</option><option>LITERATURE</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option><option>CRE</option>
					   <option>COMMERCE</option><option>AGRICULTURE</option><option>FINE ART</option><option>KISWALI</option><option>COMPUTER</option>
					   <option>FOODS AND NUTRITION</option><option>TECHNICAL DRAWING</option><option>LUGANDA</option><option>RUNYAKOLE</option><option>ENTERPNERSHIP</option>
					   </SELECT></td><td><select name="pgrade1"><option>select principal grade</option><option>A</option><option>B</option><option>C</option>
					   <option>D</option><option>E</option><option>F</option></SELECT></td></TR>
					   <TR><td> <select name="psubject2"><option>select principal subject 2</option><option>LITERATURE</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option><option>CRE</option>
					   <option>COMMERCE</option><option>AGRICULTURE</option><option>FINE ART</option><option>KISWALI</option><option>COMPUTER</option>
					   <option>FOODS AND NUTRITION</option><option>TECHNICAL DRAWING</option><option>LUGANDA</option><option>RUNYAKOLE</option><option>ENTERPNERSHIP</option>
					   </SELECT></td><td><select name="pgrade2"><option>select principal grade</option><option>A</option><option>B</option><option>C</option>
					   <option>D</option><option>E</option><option>F</option></SELECT></td></TR>
<tr><td> <select name="psubject3"><option>select principal subject 3</option><option>LITERATURE</option><option>MATHEMATICS</option><option>GEOGRAPHY</option>
					   <option>HISTORY</option><option>CHEMISTRY</option><option>BIOLOGY</option><option>PHYSCIS</option><option>CRE</option>
					   <option>COMMERCE</option><option>AGRICULTURE</option><option>FINE ART</option><option>KISWALI</option><option>COMPUTER</option>
					   <option>FOODS AND NUTRITION</option><option>TECHNICAL DRAWING</option><option>LUGANDA</option><option>RUNYAKOLE</option><option>ENTERPNERSHIP</option>
					   </SELECT></td><td><select name="pgrade3"><option>select principal grade</option><option>A</option><option>B</option><option>C</option>
					   <option>D</option><option>E</option><option>F</option></SELECT></td></tr>
					   <tr><td> <select name="ssubject1"><option>select subsidiary subject 1</option><option>GENERAL PAPER</option><OPTION>SUB COMPUTER</OPTION><option>SUBSIDIARY MATHEMATICS</option>
					   </SELECT></td><td><select name="sgrade1"><option>select subsidiary grade</option><option>1</option><option>0</option></SELECT></td></tr>
<tr><td> <select name="ssubject2"><option>select subsidiary subject 2</option><option>GENERAL PAPER</option><OPTION>SUB COMPUTER</OPTION><option>SUBSIDIARY MATHEMATICS</option>
					   </SELECT></td><td><select name="sgrade2"><option>select subsidiary grade</option><option>1</option><option>0</option></SELECT></td></tr>
					   <tr><td> <select name="ssubject3"><option>select subsidiary subject 3</option><option>GENERAL PAPER</option><OPTION>SUB COMPUTER</OPTION><option>SUBSIDIARY MATHEMATICS</option>
					   </SELECT></td><td><select name="sgrade3"><option>select subsidiary grade</option><option>1</option><option>0</option></SELECT></td></tr>
			            </tbody></td>
						</table>
		<H1>SECTION C</H1>				
<div><H2>THIS PART OF THE FORM IS FILLED THE PERSON APPLYING FOR MASTERS</H2>
					         
	            <p>UNIVERSITY. NAME OF THE SCHOOL<label><input type="text"name="nuniversity"></p></label>
			   <p>REGISTRATION NUMBER<label><input type="text"name="nreg"></label></p>
			   <p>YEAR OF ATTENDANCE From<input type="date"name="date">To<input type="date"name="date"></p>
			   <ol><P>FIRST DEGREE QUALIFICATION</P>
			   <li>DEGREE OR EQUIVALENT<LABEL><input type="text"name="degree"></LABEL></li>
			   <li>CLASS/DIVISION<LABEL><input type="text"name="class"></LABEL></li>
			   <li><P>AWARDING UNIVERSITY<LABEL><input type="text"name="award"></LABEL></P></li>
			   <li><P>DATE OF AWARD<LABEL><input type="date"name="date"></LABEL></P></li></div>
			   <H1>SECTION D</H1>
			   <div><H2>SELECT COURSE</H2>
				  <td>
				       
		                      <p><select name>
						<p>Apply for</p>
						<option>MASTERS OF COMPUTING</option>
						<option>MASTERS OF IT </option>
						<option>MASTERS OF IS </option>
						<option>DIPLOMA SOFTWARE ENGINEERING</option></select><br><br>
						<p><a href="ACADEMIC1php.php">MASTERS</a></P>             <P><a href="require.php">DIPLOMA SOFTWARE ENGINEERING</a></p></p></div>

			  <h1>SECTION E</h1>
			  <P><H2>UPLOAD CURRENT PHOTO</H2> <td><P>Attach the scanned current photo <LABEL><INPUT TYPE="FILE"></LABEL></P></td></P>
			  <P><H2>UPLOAD O LEVEL PASSSLIP</H2><td><P>Attach the scanned passslip<LABEL><INPUT TYPE="FILE"></LABEL></P></td></P>
			    <P><H2>UPLOAD A LEVEL PASSSLIP</H2><td><P>Attach the scanned passslip<LABEL><INPUT TYPE="FILE"></LABEL></P></td></P>
 	<P><H2>UPLOAD ALEVEL ID</H2> <td><P>Attach the scanned ID<LABEL><INPUT TYPE="FILE"></LABEL></P></td></P>
	<P><H2>UPLOAD BIRTH CERTIFICATE</H2> <td><P>Attach the scanned birth certificate <LABEL><INPUT TYPE="FILE"></LABEL></P></td></P>
 
					
		<input type="submit"name="Apply"value="apply">
			        </form>
							   
						 					 
		     </body>
    </html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	