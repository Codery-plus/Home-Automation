<?php
session_start();
if(isset($_SESSION['u_id'])){
echo '<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="controlpanel.css">
	<style>
		li{
			cursor:pointer;
		}
	</style>
	</head>
	<body>
	<div class="vertical-menu">
	  <a href="../ControlPanel/controlpanel.php" >Control Panel</a>
	  <a href="../Consumption/consumption.php">Consumption</a>
	  <a href="../EditDevice/editdevice.php" class="active">Edit Devices Nicknames</a>
	</div>
	<div class="main" id="temp">
	<p class="head">Current Devices:</p>
	
	<ul id="here">
	<li>light</li>
	<li>fan</li>
	</ul>
	<input type="text" id="txt">
       <button onclick="edit()">Edit</button>
	</div>
	</body>
	
	
	<script  type="text/javascript">
	var inputText = document.getElementById("txt"),
                 items = document.querySelectorAll("#here li"),
                 tab = [], index;
        
             
             for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
             }
             
          
             for(var i = 0; i < items.length; i++){
                 
                 items[i].onclick = function(){
                     index = tab.indexOf(this.innerHTML);
                     console.log(this.innerHTML + " INDEX = " + index);
                     inputText.value = this.innerHTML;
                 };
                 
             }
            
            function refreshArray()
            {
                
                tab.length = 0;
                items = document.querySelectorAll("#here li");
             
                for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
               }
            }
     
             
             function edit(){
                
                items[index].innerHTML = inputText.value;
                refreshArray();
              }
	
		
		

	
	</script>
	
</html>
';
			}else{
				header("Location:../Web/Home/home.html");
				exit();
			}
?>
