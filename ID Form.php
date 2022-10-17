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
<input type="radio" name="DEPT" value="1"> CTICS <br>
<input type="radio" name="DEPT" value="2"> COA <br>
<input type="radio" name="DEPT" value="3"> CCJE <br>
<input type="radio" name="DEPT" value="4"> CON <br>
<input type="radio" name="DEPT" value="5"> CTE <br>
<input type="radio" name="DEPT" value="6"> CEA <br>
<input type="radio" name="DEPT" value="7"> CAS <br>
<input type="radio" name="DEPT" value="8"> CHTM <br>
<br>
<br>

YEAR LEVEL: <select name= "favechar">
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
<br>
BIRTH DATE: <input type="date" id="birthday" name="birthday"><br>
<br>

<input type="SUBMIT" name="Submit">


</body>
</html>