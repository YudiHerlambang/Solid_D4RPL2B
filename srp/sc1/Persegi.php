<?php

// Kelas yang merepresentasikan persegi
class Persegi {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    // Getter untuk mendapatkan nilai sisi
    public function getSisi() {
        return $this->sisi;
    }
}

?>