CREATE TABLE gudang (
  id_gudang INT AUTO_INCREMENT PRIMARY KEY,
  nama_barang VARCHAR(255),
  stok INT,
  harga_satuan INT,
  lokasi VARCHAR(10),
  tanggal_masuk DATE
);

INSERT INTO gudang (nama_barang, stok, harga_satuan, lokasi, tanggal_masuk)
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
