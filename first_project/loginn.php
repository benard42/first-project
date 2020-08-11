<!DOCTYLE html>
<html>
    <head>
	<STYLE type="text/css">
body{background-image:url(US.jpg); background-repeat:no-repeat; background-size:cover;}
#d{
position:absolute;
text-align:center;
margin:20px 450px;
background-color:limegreen;
}
   </STYLE>

	   
	  </head>
	    <body><BR><BR><BR><BR><BR><BR><BR>
		<div id="d">
		<?php
		echo '<form name="benard" ><br><br>
	       <LABEL>username<input type="text"placeholder="username" required name="nusername"></LABEL></BR><br><br>
		   <LABEL>email<input type="text"placeholder="email" required name="emailaddress"></LABEL></BR><br><br>
		   <LABEL>password<input type="password"placeholder="*********"name="npassword"></LABEL><br><br>
						 				 
	       <P><a href="app.php"><input type="submit"value="login"></a><BR><br>
		   <a href="app.php">login</a>
		    <input type="submit"value="FORGET PASSWORD"><BR><br>
		    <a href="reg3.php">CREATE_NEW_ACCOUNT</a></div>
				</form>'	 
			?>			 			 
	     </body>
   </html>