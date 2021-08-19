<?php
session_start();
if(isset($_SESSION["id"])){

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <title>Employee</title>
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
    echo "Hello Employee, ".$name;
  }
} else {
  echo "Not Found!";
}

?>

     
                              
      </form>
	  <br><br><br><br><br><br><br>
<a href="signout.php">log out</a>
	  
</body>
</html>