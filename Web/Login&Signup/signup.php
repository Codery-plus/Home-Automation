<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<style>
	form{font-family:Helvetica;
	border:black;
	}
	input[type=text], input[type=password],input[type=email]{
	width:97%;    
	border:none;
	background:#f1f1f1; 
	margin:10px 0 5px 0;
	padding:10px 10px;
	}
	input[type=text]:focus, input[type=password]:focus,input[type=email]:focus{
	background-color:#ddd;
	outline:none;
	}
	button{
	background:#4CAF50;
	color:white;
	height:40px;	
	width:100%;
	cursor:pointer;
	opacity:0.9;
	border:none;
	margin-bottom:10px;
	
	}
	.cancel {
         background-color: #f44336;
         }
        
	button:hover{
	opacity:1;
	}
	hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
        
        }
      
        @media screen and (max-width: 480px) {
        .cancel, button {
        width: 100%;
        }
	
	
	</style>
	</head>
	<body>
	<div style="width:800px; margin:auto;">
	
		<form style="width:60%; margin:auto;" action ="includes/signup.inc.php" method="POST">
			<h1>Sign Up</h1>
			<hr>
			<label>Email</label><br>
			<input type="email" placeholder="Enter email" name="email" required> <br><br>
			<label>Password</label><br>
			<input type="password" placeholder="Enter a password" name="pass" required><br><br>
			<label>Repeat Password</label><br>
			<input type="password"  placeholder="Enter password again" name="passr" required>
			
			<button type="submit" name="submit">Sign Up</button><br>
		        
			        
		
		</form>
	</div>	
	</body>
</html>
