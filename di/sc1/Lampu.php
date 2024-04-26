<?php
include_once 'BarangElektronik.php';

// Implementasi kelas Lampu
class Lampu implements BarangElektronik {
    public function beroperasi() {
        echo "Lampu menyala.\n";
    }

    public function berhenti() {
        echo "Lampu mati.\n";
    }
}
?>
