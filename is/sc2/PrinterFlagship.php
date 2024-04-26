<?php
include_once 'FiturFax.php';
include_once 'FiturCetak.php';
include_once 'FiturScan.php';

// Kelas PrinterFlagship yang mengimplementasikan semua tiga interface
class PrinterFlagship implements FiturFax, FiturCetak, FiturScan {
    public function terimaFax() {
        echo "Menerima fax di printer flagship.\n";
    }

    public function cetakKertas() {
        echo "Mencetak kertas di printer flagship.\n";
    }

    public function scanKertas() {
        echo "Menggunakan fitur scan di printer flagship.\n";
    }
}
?>
