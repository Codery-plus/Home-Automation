<script>

var i = 1;                     //  set your counter to 1

function myLoop () {           //  create a loop function
   setTimeout(function () {    //  call a 3s setTimeout when the loop is called
	var temp;
	var myvar;
    var i;
    var a;
    var t=-1;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		   //document.write(xhttp.responseText);
		   temp=xhttp.responseText;
		   len=temp.length;
		   myvar=temp.slice(2,len-2);
		 //  alert(myvar.slice(0,a));


		   var xh = new XMLHttpRequest();
			xh.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				//alert(xh.responseText);
			}

		};
		xh.open("GET", "rec_data.php?watt="+myvar, true);
		xh.send();
		   }
		};
	xhttp.open("GET", "http://188.166.206.43/14d44711dc344804a0e7e7c93c085a1b/get/V5", true);
	xhttp.send();

      //i++;                     //  increment the counter
      if (i != 0) {            //  if the counter < 10, call the loop function
         myLoop();             //  ..  again which will trigger another
      }                        //  ..  setTimeout()
   }, 3000)
}
myLoop();


</script>
