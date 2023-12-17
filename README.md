**UAS PEMPROGRAMAN WEB**
**JOANNE POLAMA PUTRI SEMBIRING**
**121140128**
**PEMROGRAMAN WEB RB**

Bagian 1: Pemrograman di Sisi Klien
1.1 Pembuatan tampilan halaman untuk data penjualan gadget yang mencakup fungsi CRUD. Pembuatan formulir input dengan lima data dan menampilkan data dari server database ke dalam indeks menggunakan tag `table`.

1.2 Pengembangan beberapa event untuk menangani interaksi pengguna pada halaman web, seperti input.

Bagian 2: Pemrograman di Sisi Server
2.1 Penyusunan script PHP untuk mengelola data dari formulir di atas file create, edit, delete dengan menggunakan variabel `$_POST` dan `$_GET`.

2.2 Pembuatan objek PHP berbasis OOP, yaitu `Gudang` yang memiliki metode dan objek tersebut digunakan dalam skenario koneksi ke database dan operasi CRUD memakai PDO.

Bagian 3: Pengelolaan Database
3.1 Pembuatan tabel pada database MySQL dengan panduan langkah-langkah membuat basis data menggunakan sintaks basis data.

-CREATE TABLE gudang (
  id_gudang INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(255),
  stok INT,
  harga_satuan INT,
  lokasi VARCHAR(10),
  tanggal_masuk DATE
);

-INSERT INTO gudang (nama_barang, stok, harga_satuan, lokasi, tanggal_masuk)
VALUES
  ('Laptop', 50, 12000000, 'Rak A', '2023-01-05'),
  ('Printer', 30, 3000000, 'Rak B', '2023-02-10'),
  ('Mouse', 100, 500000, 'Rak C', '2023-03-15'),
  ('Keyboard', 80, 700000, 'Rak A', '2023-04-20'),
  ('Monitor', 40, 2500000, 'Rak B', '2023-05-25'),
  ('Scanner', 20, 4000000, 'Rak C', '2023-06-30'),
  ('Hard Disk', 60, 800000, 'Rak A', '2023-07-05'),
  ('RAM', 75, 600000, 'Rak B', '2023-08-10'),
  ('Graphics Card', 25, 1500000, 'Rak C', '2023-09-15'),
  ('Speaker', 50, 1000000, 'Rak A', '2023-10-20');



3.2 Pembuatan konfigurasi koneksi ke database MySQL dalam file `class`.

3.3 Manipulasi data pada tabel database menggunakan query SQL dalam formulir CRUD, seperti menambah data dengan `$_POST`, mengambil data dengan `$_GET`, atau memperbarui data dengan `$_POST`.

Bagian 4: Manajemen Status
4.1 Pembuatan skrip PHP yang menggunakan session untuk menyimpan status pengguna ke dalam variabel global `$_SESSION`, dengan isi:  `$_SESSION['form_data'] = compact('nama_barang', 'stok', 'harga_satuan', 'lokasi', 'tanggal_masuk');`

4.2 Implementasi manajemen status dengan menggunakan cookie dan penyimpanan lokal pada sisi klien menggunakan JavaScript. Sertakan skrip khusus yang dieksekusi saat pengguna berada di halaman indeks untuk memastikan manajemen data status yang efektif dan responsif.

Bagian Bonus: Hosting Aplikasi Web
- Langkah-langkah untuk meng-host aplikasi web:
  1. Pilih penyedia hosting gratis.
  2. Daftar dan login.
  3. Ajukan permintaan pembuatan website.
  4. Buat database dan atur cPanel.

- Pemilihan penyedia hosting web yang paling cocok:
  Penyedia hosting gratis 000webhost dipilih karena biaya yang rendah, cocok untuk proyek kecil, dan panel kontrol sederhana untuk pemula.

- Keamanan aplikasi web yang dihosting:
  Keamanan ditingkatkan dengan penggunaan protokol HTTPS untuk mengenkripsi data yang dikirimkan.

- Konfigurasi server untuk mendukung aplikasi web:
  Konfigurasi server minimal, mungkin hanya pengaturan versi PHP.