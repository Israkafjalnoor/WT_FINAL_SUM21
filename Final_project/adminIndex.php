<?php
session_start();
if(isset($_SESSION["id"])){

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Admin</title>
</head>
<body>
<?php


			$conn = mysqli_connect('localhost', 'root', '', 'school');
$sql = "SELECT * FROM users WHERE id =".$_SESSION["id"];
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    $name=$row["name"];
    echo "Hello Admin, ".$name;
  }
} else {
  echo "Not Found!";
}

?>

     <br><a href="studentRegistration.php">student</a><br>
	 <a href="teacherRegistration.php">teacher</a><br>
	 <a href="employeeRegistration.php">employee</a>
                              
      </form>
	  <br><br><br><br><br><br><br>
<a href="signout.php">log out</a>
</body>
</html>