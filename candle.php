<?php
require 'configandmodels.php';
require 'controller.php';
require 'pricing.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script type="text/javascript" src="loader.js"></script>
    <title>AlfaTrade</title>
</head>

<body>
    <div class="container">

        <center>
            <h5 class="mt-5">INDEX HARGA SAHAM ALFABET DIGITAL</h5>
            <div>
                <div id="chart_div" style="width: 700px; height: 500px;"></div>
            </div>
        </center>
        <p id="cobaAjax"></p>
        <form action="candle.php" method="POST" name="formRendah" id="target">
            <input type="hidden" id="rendah" name="rendah">
            <input type="submit" id="sembunyi" hidden="hidden">
        </form>

        <form action="candle.php" method="POST" name="formTinggi" id="target2">
            <input type="hidden" id="tinggi" name="tinggi">
            <input type="submit" id="sembunyi2" hidden="hidden">
        </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="candle.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="coba.js"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script>
        let terendah = <?= $bacaRendah; ?>;
        let tertinggi = <?= $bacaTinggi; ?>;

        let runLow = <?= $runLow; ?>;
        let runOpen = <?= $runOpen; ?>;
        let runClose = <?= $runClose; ?>;
        let runHigh = <?= $runHigh; ?>;

        let runLow1 = <?= $runLow1; ?>;
        let runOpen1 = <?= $runOpen1; ?>;
        let runClose1 = <?= $runClose1; ?>;
        let runHigh1 = <?= $runHigh1; ?>;

        let runLow2 = <?= $runLow2; ?>;
        let runOpen2 = <?= $runOpen2; ?>;
        let runClose2 = <?= $runClose2; ?>;
        let runHigh2 = <?= $runHigh2; ?>;

        let runLow3 = <?= $runLow3; ?>;
        let runOpen3 = <?= $runOpen3; ?>;
        let runClose3 = <?= $runClose3; ?>;
        let runHigh3 = <?= $runHigh3; ?>;

        let runLow4 = <?= $runLow4; ?>;
        let runOpen4 = <?= $runOpen4; ?>;
        let runClose4 = <?= $runClose4; ?>;
        let runHigh4 = <?= $runHigh4; ?>;

        let runLow5 = <?= $runLow5; ?>;
        let runOpen5 = <?= $runOpen5; ?>;
        let runClose5 = <?= $runClose5; ?>;
        let runHigh5 = <?= $runHigh5; ?>;
    </script>
</body>

</html>