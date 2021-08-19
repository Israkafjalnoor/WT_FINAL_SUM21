<!DOCTYPE html>
<html lang="en">
<head>
      <title>PHP APP</title>
</head>
<body>
<?php

 

if(isset($_POST["submit"])){
            $name= $_POST["name"];
            //$id= $_POST["id"];
            $phone= $_POST["phone"];
            $address= $_POST["address"];
            $dob= $_POST["dob"];
            $gender= $_POST["gender"];
            $email= $_POST["email"];
            $shift= $_POST["shift"];
            $conn = mysqli_connect('localhost', 'root', '', 'school');
            $sql = "INSERT INTO student(name, phone, address, dob, gender, email, shift) VALUES ('$name', '$phone', '$address', '$dob', '$gender', '$email', '$shift')";
            ;

 

            if (mysqli_query($conn, $sql)){
                  
                  echo "student, <b>".$name."</b> Registered Successfully!<br>";
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