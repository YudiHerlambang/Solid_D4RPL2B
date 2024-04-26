<?php

class MahasiswaView {
    public function showMahasiswa($mahasiswa) {
        echo "Data Mahasiswa: \n";
        echo "NIM: " . $mahasiswa->getNim() . "\n";
        echo "Nama: " . $mahasiswa->getNama() . "\n";
    }
}

?>
