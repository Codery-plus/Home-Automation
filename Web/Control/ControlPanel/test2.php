<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$db_name="homeauto";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$sql="Select * from devices";
$result=$conn->query($sql);

$final_res['data']=array();
if($result->num_rows>0)
	{
	while($row=$result->fetch_assoc())
		{
		$final_res['devices'][]=array(
			'id'=>$row['id'],
			'name'=>$row['name'],
			'status'=>$row['status'],
		);
		}
	}
//$final_res['data']=$final_data;
echo json_encode($final_res); 
?>
