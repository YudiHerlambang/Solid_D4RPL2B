<?php
include_once 'Lampu.php';
include_once 'KipasAngin.php';
include_once 'Saklar.php';

// Objek Lampu
$lampu = new Lampu();

// Objek Kipas Angin
$kipas = new KipasAngin();

// Objek Saklar untuk Lampu
$saklar_lampu = new Saklar($lampu);
$saklar_lampu->ubah();

// Objek Saklar untuk Kipas Angin
$saklar_kipas = new Saklar($kipas);
$saklar_kipas->ubah();
?>
