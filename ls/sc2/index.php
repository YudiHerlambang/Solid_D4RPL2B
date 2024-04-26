<?php
include 'KendaraanBBM.php';
include 'KendaraanListrik.php';
include 'Mobil.php';
include 'MobilListrik.php';

$mobil = new Mobil();
$mobil->menggunakanBBM();

$mobilListrik = new MobilListrik();
$mobilListrik->menggunakanBaterai();
