
<!DOCTYPE html>
<html lang="en">
<head>
      <title>PHP APP</title>
</head>
<body>
      <h2><body text='red'>USER Registration</h2>
      <form action="usersprocess.php" method="post">
	  <body background="pen.jpg">
      
	  
	  
	  name<br><input type="text" name="name"><br><br>
      Password<br><input type="password" name="password"><br><br>
      Confirm Password<br><input type="password" name="cpassword"><br><br>
	  phone<br><input type="text" name="phone"><br><br>
	  address<br><input type="text" name="address"><br><br>           
       Your Designation<br><input type="radio" name="pos" <?php if (isset($pos) && $pos=="teacher") echo "checked";?> value="teacher">teacher
       <input type="radio" name="pos" <?php if (isset($pos) && $pos=="employee") echo "checked";?> value="employee">employee
       <input type="radio" name="pos" <?php if (isset($pos) && $pos=="student") echo "checked";?> value="student">student
	

 


      <br><input type="submit" name="submit"><br>
                              
      </form>
	  <a href="signin.php">Already Have an Account</a>
	  
</body>
</html>