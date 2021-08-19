<?php

 

if(isset($_POST["submit"])){
            $name= $_POST["name"];
            //$id= $_POST["id"];
            $department= $_POST["department"];
            $teacher= $_POST["teacher"];
            
            $conn = mysqli_connect('localhost', 'root', '', 'school');
            $sql = "INSERT INTO subject(name, department, teacher) VALUES ('$name','$department', '$teacher)";
            ;

 

            if (mysqli_query($conn, $sql)){
                  
                  echo "subject registered<br>";
            }
      
      
}
else{
      if(session_status()==PHP_SESSION_NONE){}
      header("location: subject.php");
}

 

?>