<?php
include_once 'BarangElektronik.php';

// Implementasi kelas KipasAngin
class KipasAngin implements BarangElektronik {
    public function beroperasi() {
        echo "Kipas angin berputar.\n";
    }

    public function berhenti() {
        echo "Kipas angin berhenti berputar.\n";
    }
}
?>
