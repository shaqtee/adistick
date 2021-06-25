<?php

$conn = new mysqli('localhost', 'root', '', 'trade');

function insertRendah($data)
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
	return $tampung[0][0];
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
	return $tampung[0][0];
}

function highlow($view)
{
	global $conn;
	$sql = "SELECT $view FROM $view LIMIT 6;";
	$result = $conn->query($sql);

	$tampung = [];
	while ($rows = $result->fetch_row()) {
		$tampung[] = $rows;
	}
	return $tampung;
}

function openclose()
{
	global $conn;
	$sql = "SELECT Price FROM openprice ORDER BY `openprice`.`open_price` DESC LIMIT 6";
	$result = $conn->query($sql);

	$tampung = [];
	while ($rows = $result->fetch_row()) {
		$tampung[] = $rows;
	}
	return $tampung;
}

$tinggiSekali = highlow('harga_tertinggi');
$rendahSekali = highlow('harga_terendah');

$openCloseSignal = openclose();
$oc0 = current($openCloseSignal);
$oc1 = next($openCloseSignal);
$oc2 = current($openCloseSignal);
$oc3 = next($openCloseSignal);
$oc4 = current($openCloseSignal);
$oc5 = next($openCloseSignal);
$oc6 = current($openCloseSignal);
$oc7 = next($openCloseSignal);
$oc8 = current($openCloseSignal);
$oc9 = next($openCloseSignal);
$oc10 = current($openCloseSignal);
$oc11 = next($openCloseSignal);

$high0 = current($tinggiSekali);
$low0 = current($rendahSekali);

$hargaBerjalan = [];
array_push($hargaBerjalan, $low0, $oc0, $oc1, $high0);


//print_r($runLow);

$low1 = next($rendahSekali);
$high1 = next($tinggiSekali);
$hargaBerjalan1 = [];
array_push($hargaBerjalan1, $low1, $oc1, $oc2, $high1);


$low2 = next($rendahSekali);
$high2 = next($tinggiSekali);
$hargaBerjalan2 = [];
array_push($hargaBerjalan2, $low2, $oc2, $oc3, $high2);


$low3 = next($rendahSekali);
$high3 = next($tinggiSekali);
$hargaBerjalan3 = [];
array_push($hargaBerjalan3, $low3, $oc3, $oc4, $high3);


$low4 = next($rendahSekali);
$high4 = next($tinggiSekali);
$hargaBerjalan4 = [];
array_push($hargaBerjalan4, $low4, $oc4, $oc5, $high4);


$low5 = next($rendahSekali);
$high5 = next($tinggiSekali);
$hargaBerjalan5 = [];
array_push($hargaBerjalan5, $low5, $oc5, $oc6, $high5);
