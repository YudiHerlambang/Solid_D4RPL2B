<?php

require_once 'Persegi.php';
require_once 'PenghitungPersegi.php';

// Fungsi utama untuk menjalankan program
function main() {
    // Input sisi persegi
    $sisi = 5;

    // Membuat objek persegi
    $persegi = new Persegi($sisi);

    // Membuat objek penghitung persegi
    $penghitungPersegi = new PenghitungPersegi();

    // Menghitung luas persegi
    $luas = $penghitungPersegi->hitungLuas($persegi);

    // Menampilkan hasil perhitungan
    echo "Luas persegi adalah: " . $luas . "\n";
}

// Menjalankan program
main();

?>