$(document).ready(function(){
  $.ajax({
<<<<<<< HEAD
    url : "http://localhost/Home-Automation/Web/Control/Consumption/graph.php",
=======
<<<<<<< HEAD
    url : "http://localhost/Home-Automation/Web/Control/Consumption/graph.php",
=======
    url : "http://localhost/hometest/Web/Control/Consumption/graph.php",
>>>>>>> fbcd7fba76735f369e732728aa69b390a08f192f
>>>>>>> a6bbc7850093a08aa7f7c2bb8017d1201542e274
    type : "GET",
    success : function(data){
      console.log(data);

      var month = [];
      var power = [];


      for(var i in data) {
        month.push(data[i].month);
        power.push(data[i].power);

      }

      var chartdata = {
        labels: month,
        datasets: [

          {
            label: "power",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgba(211, 72, 54, 0.75)",
            borderColor: "rgba(211, 72, 54, 1)",
            pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
            pointHoverBorderColor: "rgba(211, 72, 54, 1)",
            data: power
          }
        ]
      };

		var opt={animation:false};

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {
        type: 'line',
        data: chartdata,
        options:opt
      });
    },
    error : function(data) {

    }
  });
});
