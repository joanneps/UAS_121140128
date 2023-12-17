<?php

class Gudang {
    private $host = "127.0.0.1";
    private $password = "";
    private $user = "root";
    private $port = "3080";
    private $db_name = "pengweb1";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->db_name", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function inputBarang($nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk) {
        $duplicate = $this->conn->prepare("SELECT * FROM gudang WHERE nama_barang = ?");
        $duplicate->execute([$nama_barang]);

        if ($duplicate->rowCount() > 0) {
            return -1;
        } else {
            $insertResult = $this->insertBarang($nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk);

            if ($insertResult) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    public function editBarang($id_gudang, $nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk) {
        $updateQuery = "UPDATE gudang SET nama_barang=?, stok=?, harga_satuan=?, lokasi=?, tanggal_masuk=? WHERE id_gudang=?";
        $updateResult = $this->conn->prepare($updateQuery);
        $updateResult->execute([$nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk, $id_gudang]);

        return $updateResult->rowCount() ? 1 : 0;
    }

    public function deleteBarang($id_gudang) {
        $deleteQuery = "DELETE FROM gudang WHERE id_gudang=?";
        $deleteResult = $this->conn->prepare($deleteQuery);
        $deleteResult->execute([$id_gudang]);

        return $deleteResult->rowCount() ? 1 : 0;
    }

    public function selectBarangById($id_gudang) {
        $result = $this->conn->prepare("SELECT * FROM gudang WHERE id_gudang = ?");
        $result->execute([$id_gudang]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllBarang() {
        $result = $this->conn->query("SELECT * FROM gudang");
        $barangData = $result->fetchAll(PDO::FETCH_ASSOC);

        return $barangData;
    }

    private function insertBarang($nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk) {
        $insertQuery = "INSERT INTO gudang (nama_barang, stok, harga_satuan, lokasi, tanggal_masuk) VALUES (?, ?, ?, ?, ?)";
        $insertResult = $this->conn->prepare($insertQuery);
        return $insertResult->execute([$nama_barang, $stok, $harga_satuan, $lokasi, $tanggal_masuk]);
    }
}

?>
