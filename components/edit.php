<?php
include "../class.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $selectGudang = new Gudang(); 
    $data = $selectGudang->selectBarangById($id);

    if (!$data) {
        echo "Barang not found.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["_method"]) && strtoupper($_POST["_method"]) === "PUT") {
        $id = $_POST["id"];
        $nama_barang = $_POST["nama_barang"];
        $stok = $_POST["stok"];
        $harga_satuan = $_POST["harga_satuan"];
        $lokasi = $_POST["lokasi"];
        $tanggal_masuk = $_POST["tanggal_masuk"];

        $inputGudang = new Gudang();
        $resultEdit = $inputGudang->editBarang($id, $nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk);
        header("Location: ../index.php");
        exit();
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/style.css">
    <script defer src="../public/formHandle.js"></script>
</head>

<body>
    <div class="container">
        <form id="form" action="edit.php" method="POST" class="form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?php echo $data['id_gudang']; ?>">
            <h1>Edit Barang Data</h1>
            <div class="form-control">
                <label for="nama_barang">Nama Barang</label>
                <input id="nama_barang" name="nama_barang" type="text"
                    value="<?php echo $data['nama_barang']; ?>">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="stok">Stok</label>
                <input id="stok" name="stok" type="number" value="<?php echo $data['stok']; ?>">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="harga_satuan">Harga Satuan</label>
                <input id="harga_satuan" name="harga_satuan" type="number"
                    value="<?php echo $data['harga_satuan']; ?>">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="lokasi">Lokasi</label>
                <input id="lokasi" name="lokasi" type="text" value="<?php echo $data['lokasi']; ?>">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="tanggal_masuk">Tanggal Masuk</label>
                <input id="tanggal_masuk" name="tanggal_masuk" type="date"
                    value="<?php echo $data['tanggal_masuk']; ?>">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <button type="submit">Update Barang</button>
        </form>
    </div>
</body>

</html>
