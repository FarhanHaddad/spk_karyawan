<?php
$koneksi = new mysqli("localhost", "root", "", "spk_nutan");

if ($koneksi->connect_error) {
    // jika terjadi error, matikan proses dengan die() atau exit();
    die('Maaf koneksi gagal: ' . $koneksi->connect_error);
}
