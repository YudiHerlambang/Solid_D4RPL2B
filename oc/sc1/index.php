<?php

require_once('TipePembayaran.php');
require_once('PembayaranCustomer.php');
require_once('Debit.php');
require_once('Kredit.php');
require_once('Cash.php');

// Membuat objek PembayaranCustomer
$pembayaranCustomer = new PembayaranCustomer();

// Membuat objek metode pembayaran (Debit, Kredit, atau Cash)
$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

// Memilih metode pembayaran
$pembayaranCustomer->menerimaPembayaran($debit); // Contoh: Debit
// $pembayaranCustomer->menerimaPembayaran($kredit); // Contoh: Kredit
// $pembayaranCustomer->menerimaPembayaran($cash); // Contoh: Cash

?>
