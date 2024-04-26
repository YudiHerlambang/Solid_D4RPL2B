<?php

class PembayaranCustomer {
    public function menerimaPembayaran(TipePembayaran $metodePembayaran) {
        $metodePembayaran->memprosesPembayaran();
    }
}

?>
