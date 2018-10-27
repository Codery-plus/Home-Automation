$(document).ready(function(){
  $.ajax({
    url : "http://localhost/Home-Automation/Web/Control/Consumption/graph.php",
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
