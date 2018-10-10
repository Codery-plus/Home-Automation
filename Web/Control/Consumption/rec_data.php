<?php
if(isset($_GET['watt']))
	{
	$id=$_GET['watt'];

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

	//$sql = "Update devices set status=\"".$status."\" where id=".$id;
	$sql = "Insert into device1 values(\"".date("h:i:sa")."\",".$id.");";
	$sql1 ="DELETE FROM device1 LIMIT 1";

	if (mysqli_query($conn, $sql)) {
		echo "Data updated Successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	if (mysqli_query($conn, $sql1)) {
		echo "Data updated Successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
	}
?>
