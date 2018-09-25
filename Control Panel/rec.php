<?php
if(isset($_POST['id']))
	{
	$id=$_POST['id'];
	$status=$_POST['status'];
	
	//echo $status;
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "homeauto";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "Update devices set status=\"".$status."\" where id=".$id;

	if (mysqli_query($conn, $sql)) {
		echo "Data updated Successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
	}
?>
