<?php
include_once 'Kubus.php';
include_once 'Persegi.php';

// Create instances
$kubus = new Kubus();
$persegi = new Persegi();

// Calculate area and volume
$kubus->calculateArea();
$kubus->calculateVolume();

$persegi->calculateArea();

// Add echo statements to display the results
// No output will be displayed
?>
