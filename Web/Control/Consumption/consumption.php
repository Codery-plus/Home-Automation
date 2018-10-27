<?php
include 'rec_js.php';
?>
<html>
	<head>
	<meta http-equiv="refresh" content="6" />
	<link rel="stylesheet" href="consumption.css">
	<?php

	?>
	</head>
	<body>
	<div class="vertical-menu">
	  <a href="../ControlPanel/controlpanel.php">Control Panel</a>
	  <a href="#" class="active">Consumption</a>
	  <a href="../EditDevice/editdevice.php">Edit Devices Nicknames</a>
	</div>
	<div class="main" id="temp">
	<p class="head">Device Consumption:</p>
		<canvas id = "mycanvas"></canvas>

	</div>
	<script type="text/javascript" src="Chart.min.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="linegraph.js"></script>

	</body>

</html>
