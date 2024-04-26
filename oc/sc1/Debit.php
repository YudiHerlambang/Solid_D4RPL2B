<?php

class Debit implements TipePembayaran {
    public function memprosesPembayaran() {
        echo "Pembayaran menggunakan metode Debit telah diproses.\n";
    }
}

?>
