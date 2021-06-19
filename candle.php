<?php
$conn = new mysqli('localhost', 'root', '', 'trade');

function insert($data)
{
    global $conn;
    $sql = "INSERT INTO rendah (rendah) VALUES ({$data});";
    $conn->query($sql);
}

function insertTinggi($data)
{
    global $conn;
    $sql = "INSERT INTO tinggi (tinggi) VALUES ({$data});";
    $conn->query($sql);
}

function readLowest($data)
{
    global $conn;
    $sql = "SELECT MIN({$data}) FROM {$data};";
    $result = $conn->query($sql);


    $tampung = [];
    while ($rows = $result->fetch_row()) {
        $tampung[] = $rows;
    }
    return $tampung;
}

function readHighest($data)
{
    global $conn;
    $sql = "SELECT MAX({$data}) FROM {$data};";
    $result = $conn->query($sql);

    $tampung = [];
    while ($rows = $result->fetch_row()) {
        $tampung[] = $rows;
    }
    return $tampung;
}

if (isset($_POST['rendah'])) {
    $ambil = (int) $_POST['rendah'];
    insert($ambil);
} elseif (isset($_POST['tinggi'])) {
    $ambiltinggi = (int) $_POST['tinggi'];
    insertTinggi($ambiltinggi);
} else {
    echo "";
}


$bacaRendah = (int) readLowest('rendah')[0][0];
$bacaTinggi = (int) readHighest('tinggi')[0][0];






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

        <form action="candle.php" method="POST" name="formRendah">
            <input type="hidden" id="rendah" value name="rendah">
            <button type="submit" id="sembunyi" hidden="hidden"></button>
        </form>

        <form action="candle.php" method="POST" name="formTinggi">
            <input type="hidden" id="tinggi" value name="tinggi">
            <button type="submit" id="sembunyi2" hidden="hidden">www.alfabetdigital.com</button>
        </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="candle.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

    <script src="coba.js"></script>
    <script>
        var terendah = <?= $bacaRendah; ?>;
        var tertinggi = <?= $bacaTinggi; ?>;
    </script>
</body>

</html>