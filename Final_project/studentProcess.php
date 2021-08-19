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
                  
                  echo "student registered<br>";
            }
      
      
}
else{
      if(session_status()==PHP_SESSION_NONE){}
      header("location: index.php");
}
            
           
 

?>