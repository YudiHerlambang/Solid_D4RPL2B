<?php
include_once 'FiturCetak.php';
include_once 'FiturScan.php';

// Kelas PrinterMidRange yang mengimplementasikan FiturCetak dan FiturScan
class PrinterMidRange implements FiturCetak, FiturScan {
    public function cetakKertas() {
        echo "Mencetak kertas di printer mid range.\n";
    }

    public function scanKertas() {
        echo "Menggunakan fitur scan di printer mid range.\n";
    }
}
?>
