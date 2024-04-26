<?php
include_once 'PrinterFlagship.php';
include_once 'PrinterEntryLevel.php';
include_once 'PrinterMidRange.php';

// Objek Printer Flagship
$flagship_printer = new PrinterFlagship();
$flagship_printer->terimaFax();
$flagship_printer->cetakKertas();
$flagship_printer->scanKertas();

// Objek Printer Entry Level
$entry_level_printer = new PrinterEntryLevel();
$entry_level_printer->cetakKertas();

// Objek Printer Mid Range
$mid_range_printer = new PrinterMidRange();
$mid_range_printer->cetakKertas();
$mid_range_printer->scanKertas();
?>
