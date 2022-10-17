<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Student ID Form</title>
</head>
<body>
<form action="" method="GET">
Last Name <input type="text" name="Lname" size="20" maxlength="15"><br>
First Name <input type="text" name="Fname" size="20" maxlength="15"><br>
Student ID Number <input type="text" name="ID" size="15" maxlength="11"><br>

<h3>COLLEGE DEPARTMENTS</h3>
<input type="radio" name="DEPT" value="BSIT"> CTICS
<input type="radio" name="DEPT" value="BSCS"> COA
<input type="radio" name="DEPT" value="BSCS"> 
<br>
<br>
<select name= "favechar">
	<option selected="selected">1st Year</option>
	<option>2nd Year</option>
	<option>3rd Year</option>\
<br>
</select><br>
<br>
ADDRESS:
<br>
<textarea name="Address" rows="5" cols="40">
</textarea>
<br>
BIRTH DATE: <input type="date" id="birthday" name="birthday"><br>

<input type="SUBMIT" name="Submit">


</body>
</html>