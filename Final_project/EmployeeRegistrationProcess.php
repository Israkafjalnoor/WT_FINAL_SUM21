<?php

 

if(isset($_POST["submit"])){
            $name= $_POST["name"];
            //$id= $_POST["id"];
            $phone= $_POST["phone"];
			$shift= $_POST["shift"];
            $address= $_POST["address"];
            $salary= $_POST["salary"];
            
            
			
            $conn = mysqli_connect('localhost', 'root', '', 'school');
            $sql = "INSERT INTO employee(name, phone,shift, address,salary) VALUES ('$name', '$phone', '$shift','$address','$salary')";
            

 

            if (mysqli_query($conn, $sql)){
                  
                  echo "<h1>Employee Registered</h1><br>";
            }
      
      
}
else{
      if(session_status()==PHP_SESSION_NONE){}
      header("location: EmployeeRegistration.php");
}

 

?>