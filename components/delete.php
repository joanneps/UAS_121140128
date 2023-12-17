<?php
include "../class.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $deleteGudang = new Gudang();
    $resultDelete = $deleteGudang->deleteBarang($id);

    if ($resultDelete === 1) {
        header("Location: ../index.php");
        exit();
    } else {
        echo "Gagal menghapus data barang.";
    }
} else {
    echo "Invalid request.";
}
?>
