<?php

require_once('DBMS.php');
require_once('MySQL.php');
require_once('MongoDB.php');
require_once('DBMSConnection.php');

// Membuat objek DBMSConnection
$dbmsConnection = new DBMSConnection();

// Membuat objek MySQL dan MongoDB
$mysql = new MySQL();
$mongodb = new MongoDB();

// Menghubungkan ke MySQL
$dbmsConnection->connect($mysql); // Output: Koneksi MySQL berhasil dibuat.

// Menghubungkan ke MongoDB
$dbmsConnection->connect($mongodb); // Output: Koneksi MongoDB berhasil dibuat.

?>
