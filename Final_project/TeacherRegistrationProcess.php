<?php

 

if(isset($_POST["submit"])){
            $name= $_POST["name"];
            //$id= $_POST["id"];
            $phone= $_POST["phone"];
            $address= $_POST["address"];
            $department= $_POST["department"];
            $gender= $_POST["gender"];
            $email= $_POST["email"];
            $shift= $_POST["shift"];
			$salary= $_POST["salary"];
            $conn = mysqli_connect('localhost', 'root', '', 'school');
            $sql = "INSERT INTO teacher(name, phone, address, department, gender, email, shift,salary) VALUES ('$name', '$phone', '$address','$department', '$gender', '$email', '$shift','$salary')";
            ;

 

            if (mysqli_query($conn, $sql)){
                  
                  echo "<h1>Teacher Registered</h1><br>";
            }
      
      
}
else{
      if(session_status()==PHP_SESSION_NONE){}
      header("location: TeacherRegistration.php");
}

 
 

?>