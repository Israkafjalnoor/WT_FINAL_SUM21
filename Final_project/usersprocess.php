<?php

if(isset($_POST["submit"])){
	if ($_POST["pos"]=="admin"){
		echo "You will not be able to be an admin. Try with other designation!";
		header("refresh: 6; url= signup.php");
	}
      else if ($_POST["password"]==$_POST["cpassword"]){
           
            $name=$_POST["name"];
			$password=$_POST["password"];
			$phone=$_POST["phone"];
			$address=$_POST["address"];
			//$position=$_POST["position"];
			$pos=$_POST["pos"];
            $conn = mysqli_connect('localhost', 'root', '', 'school');
            $sql = "INSERT INTO users(name , password , phone ,address ,pos ) VALUES ('$name', '$password', '$phone', '$address', '$pos')";
            //INSERT POSITION ALSO UPPER LINE
echo $sql;
            if (mysqli_query($conn, $sql)){
                  session_start();

                  $_SESSION["name"] = $_POST["name"];
                  echo "registration accepted<br>Wait for Admin Approval";
                  header("refresh: 6; url= index.php");
            }
      }
      else{
            
      echo "Password not matched!";
      header ("refresh: 2; url=index.php");
      }
}
else{
      if(session_status()==PHP_SESSION_NONE){}
      header("location: index.php");
}

?>