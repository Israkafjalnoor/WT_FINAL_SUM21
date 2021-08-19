<?php

$antu_server="localhost";
$antu_uname="root";
$antu_pass="";
$antu_name="school" ;


function oparate ($sql){
	
	global $antu_server,$antu_uname,$antu_pass,$antu_name ;
	$connection = mysqli_connect ( $antu_server,$antu_uname,$antu_pass,$antu_name  );
	
	if($connection ){ 
			if(mysqli_query($connection, $sql) )
			{
				return true 
			}
	}
           


}









?>