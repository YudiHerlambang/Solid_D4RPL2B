<?php
include_once 'FiturCetak.php';

// Kelas PrinterEntryLevel yang hanya mengimplementasikan FiturCetak
class PrinterEntryLevel implements FiturCetak {
    public function cetakKertas() {
        echo "Mencetak kertas di printer entry level.\n";
    }
}
?>
