<?php

if (isset($_POST['rendah'])) {
	if ($_POST['rendah'] != 0) {
		$ambil = (int) $_POST['rendah'];
		insertRendah($ambil);
	}
} elseif (isset($_POST['tinggi'])) {
	if ($_POST['tinggi'] != 0) {
		$ambiltinggi = (int) $_POST['tinggi'];
		insertTinggi($ambiltinggi);
	}
} else {
	echo "";
}
