
<!DOCTYPE html>
<html lang="en">
<head>
      <title>PHP APP</title>
</head>
<body>
      <h2>Employee Registration</h2>
      <form action="EmployeeRegistrationProcess.php" method="post">

 

      Name<input type="text" name="name"><br><br>
      Phone<input type="text" name="phone"><br><br>
      Shift<input type="text" name="shift"><br><br>
      Address<input type="text" name="address"><br><br>
      Salary<input type="text" name="salary"><br><br>
      
      <input type="submit" name="submit"><br>
                              
      </form>
	  
	  
	  <br><br>
	  <h2>Search Employee</h2>
      <form action="printEmployee.php" method="post">

 
      ID<input type="text" name="id"><br><br>
      Submit<input type="submit" name="submit"><br>
                              
      </form>
</body>
</html>