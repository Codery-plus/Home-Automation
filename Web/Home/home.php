<?php
session_start();
if(isset($_SESSION['u_id'])){
header("Location:../Control/ControlPanel/controlpanel.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Indoor Voice</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./iot.css">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

>>>>>>> fbcd7fba76735f369e732728aa69b390a08f192f
>>>>>>> a6bbc7850093a08aa7f7c2bb8017d1201542e274
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<script>
  	var xmlhttp;
	function loadXMLDoc(url,func)
	{
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=func;
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
	}

	function firstfun()
	{
	loadXMLDoc("./txt/first.txt",function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("textbelow").innerHTML=xmlhttp.responseText;
		}
	  });
	}

	function secondfun()
	{
	loadXMLDoc("./txt/second.txt",function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("textbelow").innerHTML=xmlhttp.responseText;
		}
	  });
	}
	function thirdfun()
	{
	loadXMLDoc("./txt/third.txt",function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("textbelow").innerHTML=xmlhttp.responseText;
		}
	  });
	}
	function fourthfun()
	{
	loadXMLDoc("./txt/fourth.txt",function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("textbelow").innerHTML=xmlhttp.responseText;
		}
	  });
	}



  	</script>
	</head>
	<body>
		<div>
		<!--
		<img src="/home/dbit/Downloads/dbit-banner-1.png" max-width="556px" height="auto" alt="Home Indoor Voice">
		-->
		</div>
		<!--Menu Bar bootstrapped-->
		<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    			<div class="navbar-header">
     				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
    				<a class="navbar-brand" href="#">Home Indoor Voice</a>
    			</div>
   			 <div class="collapse navbar-collapse" id="myNavbar">
      				<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="./Build/build.html">Build it yourself</a></li>
				<li><a href="../team/team.html">About Us</a></li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
				<li><a href="../Login&Signup/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="../Login&Signup/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
			
>>>>>>> fbcd7fba76735f369e732728aa69b390a08f192f
>>>>>>> a6bbc7850093a08aa7f7c2bb8017d1201542e274
			      </ul>
			    </div>
		</div>
		</nav>


			<div class="div_1">
				<p class="head_1">View Our Product</p>
					<img class="item" src="../Images/view_our_product.jpeg" alt="Our product">
			</div>
			<div class="div_2">
				<p class="head_2">Applications</p>
				<div class="row">
					<div class="col">
						<img class="item" src="../Images/light.jpeg" alt="light" onclick="firstfun()">
					</div>
					<div class="col">
						<img class="item" src="../Images/fan.jpg" alt="fan" onclick="secondfun()">
					</div>
					<div class="col">
						<img class="item" src="../Images/ac.jpg" alt="ac" onclick="thirdfun()">
					</div>
					<div class="col">
						<img class="item" src="../Images/tv.jpg" alt="tv" onclick="fourthfun()">
					</div>
				</div>
				<p id="textbelow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor auctor nisi, quis molestie dui consectetur sit amet. Nullam quis porta neque. Nunc ligula ante, sollicitudin vitae eros sit amet, maximus consequat nisi. Integer vitae libero vestibulum, vestibulum mauris mollis, convallis felis. Ut vel nisi molestie tellus placerat scelerisque. Suspendisse cursus semper dui, non lobortis libero. Duis dolor elit, molestie vel commodo eu, facilisis non tellus. Pellentesque venenatis consectetur enim vel consequat. </p>
			</div>
			<div class="div_1">
				<p class="head_1">Technology</p>
					<img class="item" src="../Images/view_our_product.jpeg" alt="Our product">
			</div>
	</body>
</html>



