google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  //Time, Low, Open, Close, High
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Selasa', 20, 28, 38, 45],
      ['Rabu', 31, 38, 55, 66],
      ['Kamis', 50, 55, 77, 80],
      ['Jumat', 77, 77, 66, 100],
      ['Sabtu', 50, 66, 90, 200],
      ['Minggu', 0, 66, 90, 1000],
      ['Senin', rendah(), buka, tutup, tinggi()]
      // Treat first row as data as well.
    ], true);

    var options = {
      legend: 'none'
    };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

    chart.draw(data, options);
  }
