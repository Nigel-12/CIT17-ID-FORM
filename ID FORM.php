<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Student ID Form</title>
<style>
	body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  background-image: linear-gradient(
      115deg,
      rgba(95, 159, 109, 0.8),
      rgba(15, 75, 28, 0.8)
    ),
    url(https://www.uc-bcf.edu.ph/assets/images/uc_logo_white_ext_h150.png);
  background-size: auto;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
</head>
<body>

<form action="" method="GET">
Last Name <input type="text" name="Lname" size="20" maxlength="15"><br>
First Name <input type="text" name="Fname" size="20" maxlength="15"><br>
Student ID Number <input type="text" name="ID" size="15" maxlength="11"><br>

<h3>COLLEGE DEPARTMENTS</h3>
<input type="radio" name="DEPT" value="CITCS"> CITCS <br>
<input type="radio" name="DEPT" value="COA"> COA <br>
<input type="radio" name="DEPT" value="CCJE"> CCJE <br>
<input type="radio" name="DEPT" value="CON"> CON <br>
<input type="radio" name="DEPT" value="CTE"> CTE <br>
<input type="radio" name="DEPT" value="CEA"> CEA <br>
<input type="radio" name="DEPT" value="CAS"> CAS <br>
<input type="radio" name="DEPT" value="CHTM"> CHTM <br>
<br>
<br>

YEAR LEVEL: <select name= "Year">
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

<?php
if(!empty($_GET)){
    $student = [];
    $student['First_name'] = $_GET['Fname'];
    $student['Last_name'] = $_GET['Lname'];
    $student['ID Number'] = $_GET['ID'];
    $student['Department'] = $_GET['DEPT'];
    $student['Year Level'] = $_GET['Year'];
    $student['Address'] = $_GET['Address'];
    $student['Birth_date'] = $_GET['birthday'];

    
    $studentArray = [];
    array_push($studentArray, $student);
    $str = print_r($studentArray, true);
    file_put_contents('student.txt', $str, FILE_APPEND);
}
?>