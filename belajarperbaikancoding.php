<?php
// Memeriksa apakah parameter 'nama' ada dalam URL
if (isset($_GET['nama'])) {
    // Mengambil nilai dari parameter 'nama'
    $nama = htmlspecialchars($_GET['nama']);
    // Menampilkan pesan
    echo "Halo, $nama!";
} else {
    echo "Nama tidak diberikan.";
}
?>