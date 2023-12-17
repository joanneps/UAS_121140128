<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/style.css">
</head>

<body>
    <h1 class="title">List Kendaraan Di Bengkel</h1>
    <?php

    include 'class.php';

    $inputGudang = new Gudang();

    $resultGudang = $inputGudang->getAllBarang();

    $no = 1;

    echo "<table class='gudang-table'>
         <tr>
             <th>No</th>
             <th>Nama Barang</th>
             <th>Stok</th>
             <th>Harga Satuan</th>
             <th>Lokasi</th>
             <th>Tanggal Masuk</th>
             <th>Action</th>
         </tr>";

    foreach ($resultGudang as $row) {
        echo "<tr>
             <td>" . $no++ . "</td>
             <td>" . $row["nama_barang"] . "</td>
             <td>" . $row["stok"] . "</td>
             <td>" . $row["harga_satuan"] . "</td>
             <td>" . $row["lokasi"] . "</td>
             <td>" . $row["tanggal_masuk"] . "</td>
             <td class='action-buttons'>
                 <a class='edit-button' href='./components/edit.php?id=" . $row["id_gudang"] . "'>Edit</a>
                 <a class='delete-button' href='./components/delete.php?id=" . $row["id_gudang"] . "'>Delete</a>
             </td>
         </tr>";
    }

    echo "</table>";
    ?>
    <a class="add-button" href="./components/create.php">Tambah Data</a>


    <div id="cookie-notice">
        <p>Kami menggunakan cookie untuk meningkatkan pengalaman Anda di situs web ini. Dengan melanjutkan, Anda setuju
            dengan kebijakan cookie kami.</p>
        <button onclick="acceptCookies()">Setuju</button>
    </div>

    <script>
        function acceptCookies() {
            setCookie("cookie-user", "true", 90);
            document.getElementById("cookie-notice").style.display = "none";
        }

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        var cookieAccepted = getCookie("cookie-user");
        if (cookieAccepted === "true") {
            document.getElementById("cookie-notice").style.display = "none";
        }
    </script>
</body>

</html>