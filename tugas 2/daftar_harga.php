<?php
// Periksa apakah tombol Submit telah ditekan
if(isset($_POST['submit'])) {
    // Ambil nilai-nilai dari formulir
    $nama_customer = "Putri Fredilia";
    $produk = "mesin cuci";
    $jumlah = 2;
    $harga = 7600000;

    // Proses lebih lanjut dengan nilai-nilai yang telah diambil
    // Misalnya, hitung total harga, simpan ke dalam database, dll.

    // Untuk contoh sederhana, kita hanya akan menampilkan kembali nilai-nilai yang telah dimasukkan
    echo "<h2>Detail Pembelian:</h2>";
    echo "<p>Nama Customer: $nama_customer</p>";
    echo "<p>Produk: $produk</p>";
    echo "<p>Jumlah: $jumlah</p>";
    echo "<p>Total Harga: " . number_format($harga, 0, ',', '.') . "</p>"; // Format harga dengan pemisah ribuan
}
?>