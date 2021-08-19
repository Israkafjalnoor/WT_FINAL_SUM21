<!DOCTYPE html>
<html lang="en">
<head>
      <title>PHP APP</title>
</head>
<body>

<?php

if(isset($_POST["submit"])){
            
            $id= $_POST["id"];
			
			
			
			
			$conn = mysqli_connect('localhost', 'root', '', 'school');
$sql = "SELECT * FROM teacher WHERE id =".$id;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    $name=$row["name"];
    echo '<b>Name: </b>'.$row["name"];
	echo '<br><b>Phone: </b>'.$row["phone"];
	echo '<br><b>Address: </b>'.$row["address"];
	echo '<br><b>Department: </b>'.$row["department"];
	echo '<br><b>Gender: </b>'.$row["gender"];
	echo '<br><b>Email: </b>'.$row["email"];
	echo '<br><b>Shift: </b>'.$row["shift"];
  }
} else {
  echo "Not Found!";
}
}
			

else{
      if(session_status()==PHP_SESSION_NONE){}
      header("location: signup.php");
}

 

?>
<br><br><br><br><br><br><br>
<a href="signout.php">log out</a>
</body>
</html>

