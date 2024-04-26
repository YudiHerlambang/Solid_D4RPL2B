<?php

class MongoDB implements DBMS {
    public function createConnection(): void {
        echo "Koneksi MongoDB berhasil dibuat.\n";
    }
}

?>
