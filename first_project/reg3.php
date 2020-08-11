<html>
<head>

<title> STUDENTS </title>
<STYLE type="text/css">
body{background-image:url(US.jpg); background-repeat:no-repeat; background-size:cover;}
   </style>
</head>

<body>
<?php
echo '<form method  = "post" action = "login.html">
<h1 align = "center">STUDENTS</h1>
<table border=2  align = "center">
<tbody><td>


<label> FIRST NAME </label>

<input type = "text" name = "fname"placeholder="first name">
<br>
<br>

<label> SECOND NAME 
<input type = "text"  name="sname"placeholder="Second name"></label>
<br>
<br>
<select name="cc"><option>+256</option><option>+255</option><option>+254</option><option>+253</option><option>+252</option><option>+251</option><option>+250</option><option>+249</option>
</select>
<label> TELEPHONE </label>

<input type = "text" name = "fname"placeholder="0772411673">
<br>
<br>


<label> Email

<input type = "text" name = "sdtno"placeholder="bbyaka@gmail.com"/></label>
<br/>
<br/>
<label> Password <input type = "text"  name="regno"placeholder="******"></label>
<label> confirm Password <input type = "text"  name="regno"placeholder="******"></label><br>
<br/><br>
<a href="app.php">login</a>
</td></tbody></table></form>'

?>
</body>

</html>