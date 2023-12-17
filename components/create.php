<?php
session_start();
include '../class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST["nama_barang"];
    $stok = $_POST["stok"];
    $harga_satuan = $_POST["harga_satuan"];
    $lokasi = $_POST["lokasi"];

    $tanggal_masuk = $_POST["tanggal_masuk"];

    $_SESSION['form_data'] = compact('nama_barang', 'stok', 'harga_satuan', 'lokasi', 'tanggal_masuk');

    $inputBarang = new Gudang();

    $resultBarang = $inputBarang->inputBarang($nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk);

    if ($resultBarang === -1) {
        $message = "Barang sudah terdaftar.";
    } elseif ($resultBarang === 1) {
        $message = "Data barang berhasil ditambahkan.";
        header("Location: ../index.php");
        exit();

    } else {
        $message = "Gagal menambahkan data barang.";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gudang</title>
    <link rel="stylesheet" href="../public/style.css">
    <script defer src="../public/formHandle.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Create Data</h2>
        </div>
        <form action="create.php" class="form" id="form" method="POST">
            <div class="form-control">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" placeholder="Nama Barang" id="nama_barang" name="nama_barang">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="stok">Stok</label>
                <input type="number" placeholder="Stok" id="stok" name="stok">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="harga_satuan">Harga Satuan</label>
                <input type="number" placeholder="Harga Satuan" id="harga_satuan" name="harga_satuan">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="lokasi">Lokasi</label>
                <input type="text" placeholder="Lokasi" id="lokasi" name="lokasi">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input type="date" placeholder="Tanggal Masuk" id="tanggal_masuk" name="tanggal_masuk">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    </div>
    <script>
        window.onload = function () {
            const formData = JSON.parse(localStorage.getItem('formData')) || {};
            document.getElementById('nama_barang').value = formData.nama_barang || '';
            document.getElementById('stok').value = formData.stok || '';
            document.getElementById('harga_satuan').value = formData.harga_satuan || '';
            document.getElementById('lokasi').value = formData.lokasi || '';
            document.getElementById('tanggal_masuk').value = formData.tanggal_masuk || '';
        };

        document.getElementById('form').addEventListener('submit', function (event) {
            event.preventDefault(); 

            const formData = {
                nama_barang: document.getElementById('nama_barang').value,
                stok: document.getElementById('stok').value,
                harga_satuan: document.getElementById('harga_satuan').value,
                lokasi: document.getElementById('lokasi').value,
                tanggal_masuk: document.getElementById('tanggal_masuk').value,
            };

            localStorage.setItem('formData', JSON.stringify(formData));
        });

    </script>
</body>

</html>