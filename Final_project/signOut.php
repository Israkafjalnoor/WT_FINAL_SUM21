<?php

if(session_status()>=0){
session_start();
session_unset();
session_destroy();
echo"Logged Out!";
}
header("refresh: 2; url= index.php");

?>