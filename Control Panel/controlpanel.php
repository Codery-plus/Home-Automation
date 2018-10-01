<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="controlpanel.css">
	</head>
	<body>
	<div class="vertical-menu">
	  <a href="#" class="active">Control Panel</a>
	  <a href="#">Consumption</a>
	  <a href="#">Edit Devices Nicknames</a>
	  <a href="#">Link 3</a>
	  <a href="#">Link 4</a>
	</div>
	<div class="main" id="temp">
	<p class="head">Current Devices:</p>
	
	<ul id="here">
	</ul>
	</div>
	</body>
	
	
	<script  type="text/javascript">
	function reqListener () {
      console.log(this.responseText);
    }

    var oReq = new XMLHttpRequest(); //New request object
    oReq.onload = function() {
    	//response from the server is reseved and saved in this.responseText
        var txt=this.responseText;
        
        var devices=JSON.parse(txt).devices;
		
		var ul=document.getElementById("here");
		for(i=0;i<devices.length;i++)
			{
			var li=document.createElement('li');
			li.innerHTML=devices[i].name;
		
			var label=document.createElement('label');
			label.className='switch';
			var input=document.createElement('input');
			input.type="checkbox";
			input.id=devices[i].id;
			if(devices[i].status=='on')
				{
				input.checked=true;
				}
			var span=document.createElement('span');
			span.className='slider round';
			label.appendChild(input);
			label.appendChild(span);
			ul.appendChild(li);
			ul.appendChild(label);
			}
		
		
		//This is the code to listen to the checkbox and take action.
        var outerid=document.getElementById('here');
		var innerid=outerid.getElementsByTagName('label');	
	
		for(var i=0;i<innerid.length;i++)
			{
			if(innerid[i].firstChild.type=='checkbox')
				{
				innerid[i].firstChild.onclick=function()
					{
					var checkboxid=this.id;
					
					
					//if it is on or off
					if(this.checked)
						{
						//alert("u put device id:"+checkboxid+" on");
						//Code to create new AXAJ req to send data to php
						var myhttp = new XMLHttpRequest();
						var url = "rec.php";
						var params='id='+this.id+'&status=on';
						myhttp.open("POST",url,true);
					
						myhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						//myhttp.setRequestHeader("Content-Length",params.length);
					
						myhttp.onreadystatechange=function(){
						if(myhttp.readyState==4 && myhttp.status==200){
							//alert(myhttp.responseText);
							}
						}
						myhttp.send(params);
						//
						var xh = new XMLHttpRequest();
						xh.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
							  	//alert("done");
							}
						};
						xh.open("GET", "http://188.166.206.43/14d44711dc344804a0e7e7c93c085a1b/update/D13?value=1", true);
						xh.send();
						
						}
					else
						{
						//alert("u put device id:"+checkboxid+" off");
						//Code to create new AXAJ req to send data to php
						var myhttp = new XMLHttpRequest();
						var url = "rec.php";
						var params='id='+this.id+'&status=off';
						myhttp.open("POST",url,true);
					
						myhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						//myhttp.setRequestHeader("Content-Length",params.length);
					
						myhttp.onreadystatechange=function(){
						if(myhttp.readyState==4 && myhttp.status==200){
							//alert(myhttp.responseText);
							}
						}
						myhttp.send(params);
						
						var xh = new XMLHttpRequest();
						xh.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
							  	//alert("done");
							}
						};
						xh.open("GET", "http://188.166.206.43/14d44711dc344804a0e7e7c93c085a1b/update/D13?value=0", true);
						xh.send();
						
						}
					}
				}
			}
        
    };
    oReq.open("get", "test2.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();


	
	</script>
	
</html>
