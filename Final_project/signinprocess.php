<!DOCTYPE html>
<html lang="en">
<head>
      <title>try</title>
</head>
<body>
<?php
if(isset($_POST["submit"])){
    $phone= $_POST["phone"];
    $password= $_POST["password"];
    $conn = mysqli_connect('localhost', 'root', '', 'school');
    $sql = "select * from users where phone='".$phone."' and password='".$password."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if ($row["pos"]=="teacher"){
                session_start();
                $id=$row["id"];
                $_SESSION["id"] = $id;
                header("location: teacherIndex.php");
            }
            else if ($row["pos"]=="employee"){
                session_start();
                $id=$row["id"];
                $_SESSION["id"] = $id;
                header("location: employeeIndex.php");
            }
            else if ($row["pos"]=="student"){
                session_start();
                $id=$row["id"];
                $_SESSION["id"] = $id;
                header("location: studentIndex.php");
            }
            else if ($row["pos"]=="admin"){
                session_start();
                $id=$row["id"];
                $_SESSION["id"] = $id;
                header("location: adminIndex.php");
            }
            else{
                echo "ERROR!";
                header("location: signin.php");
            }
        }
        } 
      }
    
else{
if(session_status()==PHP_SESSION_NONE){}
header("location: signin.php");
}
 
?>
</body>
</html>