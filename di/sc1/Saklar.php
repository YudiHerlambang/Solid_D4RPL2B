<?php
include_once 'BarangElektronik.php';

// Implementasi kelas Saklar dengan Dependency Injection
class Saklar {
    private $item;
    private $keaktifan;

    public function __construct(BarangElektronik $item) {
        $this->item = $item;
        $this->keaktifan = false;
    }

    public function ubah() {
        if ($this->keaktifan) {
            $this->item->berhenti();
            $this->keaktifan = false;
        } else {
            $this->item->beroperasi();
            $this->keaktifan = true;
        }
    }
}
?>
