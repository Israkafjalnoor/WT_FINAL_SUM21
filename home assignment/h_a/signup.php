<?php

 include 'mainheader.php';

 ?>
 

 <html>
    <head></head>
	<body>
	    
		
	<div align="center">
	
	<h2>Sign Up</h2>
	
	<h5><?hp echo $err_db; ?></h5>
	
	<form action="" method="post">
		
	<div>
		<h3>Name</h3>
		
		<input type = "text" name = "name" value="<?php echo $name; ?>"/>
		
	   <span> <?php echo $err_name; ?> </span>
	   
		
	</div>
	
	<div>
		<h3>Username</h3>
		
		<input type = "text" name = "uname" value="<?php echo $uname; ?>"/>
		
		<span> <?php echo $err_uname; ?> </span>
		
	</div>
	<div>
			<h4>Email</h4>
			<input type = "text" name = "email" value="<?php echo $email; ?>"/>
			<span> <?php echo $err_email; ?> </span>
			
				</div>
				<div>
				
				<h3>Password</h3>
				<input type = "password" name = "pass"/>
				<span> <?php echo $err_pass; ?> </span>
					
				</div>
				<div>
				
				<input type = "submit" name = "signUp" value = "Sign Up" />
					
				</div>
			</form>
		</div>
	</body>
	
    <?php include 'footer.php'; ?>
</html>