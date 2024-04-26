<?php

require_once 'Persegi.php';

// Kelas yang bertanggung jawab untuk menghitung luas persegi
class PenghitungPersegi {
    // Method untuk menghitung luas persegi
    public function hitungLuas(Persegi $persegi) {
        $sisi = $persegi->getSisi();
        return $sisi * $sisi;
    }
}

?>