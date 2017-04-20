$( document ).ready(function() {
  var chart = $("#local_stock");

  var data = {
      labels: [
          "Milled",
          "Original Stock"
      ],
      datasets: [
          {
              data: [22, 76],
              backgroundColor: [
                  "#69460C",
                  "#D08B14"
              ],
              hoverBackgroundColor: [
                  "#69460C",
                  "#D08B14"
              ]
          }]
      };

  Chart.defaults.global.legend.display = false;

  var myPieChart = new Chart(chart,{
  type: 'pie',
  data: data,
  options: {
    responsive: true
  }
  });

  var chart = $("#imported_stock");

  var data = {
      labels: [
          "Received",
          "Original Stock"
      ],
      datasets: [
          {
              data: [57, 202],
              backgroundColor: [
                  "#69460C",
                  "#D08B14"
              ],
              hoverBackgroundColor: [
                  "#69460C",
                  "#D08B14"
              ]
          }]
      };

  Chart.defaults.global.legend.display = false;

  var myPieChart = new Chart(chart,{
  type: 'pie',
  data: data,
  options: {
    responsive: true
  }
  });

  var chart = $("#market_share");

  var data = {
      labels: [
          "KBB",
          "SUMK",
          "JV Mills",
          "Private Mills"
      ],
      datasets: [
          {
              data: [61, 40, 49, 100],
              backgroundColor: [
                  "#69460C",
                  "#EB2C3B",
                  "#9D298C",
                  "#D08B14"
              ],
              hoverBackgroundColor: [
                "#69460C",
                "#EB2C3B",
                "#9D298C",
                "#D08B14"
              ]
          }]
      };

  Chart.defaults.global.legend.display = false;

  var myPieChart = new Chart(chart,{
  type: 'pie',
  data: data,
  options: {
    responsive: true
  }
  });


});
