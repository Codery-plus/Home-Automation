<?php
session_start();

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6bbc7850093a08aa7f7c2bb8017d1201542e274
if(isset($_SESSION['u_id'])){
	header("Location: ../Control/ControlPanel/controlpanel.php");
	exit();}
?>
<!DOCTYPE html>
=======
if(!isset($_SESSION['u_id'])){
echo'<!DOCTYPE html>
>>>>>>> fbcd7fba76735f369e732728aa69b390a08f192f
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
			<form class="texte" action="includes/login.inc.php" method="POST">
					<h1 style="color:#696969">Login</h1>
					<hr style="color:#f0f0f0"><br>
					<label style="margin-bottom:5px">Username</label><br>
					<input type="email" name="userid" required placeholder="email@example.com"><br><br>
					<label style="margin-bottom:4px">Password</label><br>
					<input type="password" name="passwd" placeholder="yourpassword" required><br><br>
					<label><input type="checkbox" name="remember" style="margin:5px 5px 20px 5px">Remember Me</label>
					<button class="click" style="background-color:#4CAF50;" type="submit" name="submit">Login</button>
					<a href = "../Home/home.php"><button class="click" style="background-color:#f44336;" type="button" name="cancel">Cancel</button></a>
					<p style="text-align:center;"><a href="https://www.google.com/search?q=i+forgot+my+password" target="_blank">Forgot password?</a><br>
<<<<<<< HEAD
					Don't have an account? <a href="../Login&Signup/signup.php" >Sign up</a></p>

<<<<<<< HEAD
			</form>
	</body>
</html>;
}
=======
			</form>
	</body>
</html>;
}
=======
					Don\'t have an account? <a href="../Login&Signup/signup.php" >Sign up</a></p>
					
			</form>
	</body>
</html>';
}
else{
	header("Location: ../Control/ControlPanel/controlpanel.php");
	exit();
}
?>
>>>>>>> fbcd7fba76735f369e732728aa69b390a08f192f
>>>>>>> a6bbc7850093a08aa7f7c2bb8017d1201542e274
