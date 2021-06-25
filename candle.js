google.charts.load('current', {
    'packages': ['corechart']
  });

  google.charts.setOnLoadCallback(drawChart);

  //Time, Low, Open, Close, High
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      
      ['Selasa', runLow5, runOpen5, runClose5, runHigh5],
      ['Rabu', runLow4, runOpen4, runClose4, runHigh4],
      ['Kamis', runLow3, runOpen3, runClose3, runHigh3],
      ['Jumat', runLow2, runOpen2, runClose2, runHigh2],
      ['Sabtu', runLow1, runOpen1, runClose1, runHigh1],
      ['Minggu', runLow, runOpen, runClose, runHigh],
      ['Senin', rendah(), buka, tutup, tinggi()]
      // Treat first row as data as well.
    ], true);

    var options = {
      legend: 'none',
    };

    var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));

    chart.draw(data, options);
    
  }
