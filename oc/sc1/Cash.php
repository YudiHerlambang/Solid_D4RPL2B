<?php

class Cash implements TipePembayaran {
    public function memprosesPembayaran() {
        echo "Pembayaran menggunakan metode Tunai telah diproses.\n";
    }
}

?>