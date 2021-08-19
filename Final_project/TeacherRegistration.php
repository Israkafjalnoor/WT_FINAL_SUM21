
<!DOCTYPE html>
<html lang="en">
<head>
      <title>PHP APP</title>
</head>
<body>
      <h2><body text='blue'>Teacher Registration</h2>
      <form action="TeacherRegistrationProcess.php" method="post">
       <body background="pen3.jpg">
 

      Name<input type="text" name="name"><br><br>
      Phone<input type="text" name="phone"><br><br>
      Address<input type="text" name="address"><br><br>
      Department<input type="text" name="department"><br><br>
      Gender<input type="text" name="gender"><br><br>
      Email<input type="text" name="email"><br><br>
      Shift<input type="text" name="shift"><br><br>
	  Salary<input type="text" name="salary"><br><br>
      Submit<input type="submit" name="submit"><br>
                              
      </form>
	  
	  
	  <br><br>
	  <h2>Search Teacher</h2>
      <form action="printTeacher.php" method="post">

 
      ID<input type="text" name="id"><br><br>
      Submit<input type="submit" name="submit"><br>
                              
      </form>
	  <br><br><br><br><br><br><br>
<a href="signout.php">log out</a>
</body>
</html>