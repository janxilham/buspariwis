<?php
$koneksi = new mysqli("localhost", "root", "", "bus_parawisata");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
