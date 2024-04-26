<?php

require_once('Mahasiswa.php');
require_once('MahasiswaView.php');

// Contoh penggunaan:
$mahasiswa1 = new Mahasiswa("2205060", "Yudi Herlambang");
$view = new MahasiswaView();
$view->showMahasiswa($mahasiswa1);

?>
