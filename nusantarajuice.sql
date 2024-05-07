CREATE TABLE Produk (
  id_produk VARCHAR(10) PRIMARY KEY,
  nama_jus VARCHAR(255),
  harga DECIMAL(10, 2),
  stok INT
);

CREATE TABLE Ukuran (
  id_ukuran INT PRIMARY KEY,
  ukuran ENUM('small', 'medium', 'jumbo')
);

CREATE TABLE Penjualan (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  jumlah INT,
  tgl_penjualan DATE,
  total_penjualan DECIMAL(10, 2),
  id_produk VARCHAR(10),
  FOREIGN KEY (id_produk) REFERENCES Produk(id_produk),
  pembayaran ENUM('Tunai', 'Transfer')
);

CREATE TABLE Pemasok (
  id_supplier INT PRIMARY KEY,
  nama VARCHAR(255),
  no_tlp VARCHAR(15)
);

CREATE TABLE Pengeluaran (
  id_pengeluaran INT PRIMARY KEY,
  deskripsi TEXT,
  tgl_pengeluaran DATE,
  jml_pengeluaran DECIMAL(10, 2)
);

ALTER TABLE Pengeluaran
ADD COLUMN id_supplier INT,
ADD FOREIGN KEY (id_supplier) REFERENCES Pemasok(id_supplier);

ALTER TABLE Produk
ADD COLUMN id_ukuran INT,
ADD FOREIGN KEY (id_ukuran) REFERENCES Ukuran(id_ukuran);

INSERT INTO Ukuran (id_ukuran, ukuran) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Jumbo');

INSERT INTO Produk (id_produk, nama_jus, harga, stok, id_ukuran) VALUES
('S01', 'Jus Alpukat', 5000.00, 20, 1),
('S02', 'Jus Strobery', 5000.00, 20, 1),
('S03', 'Jus Jambu merah', 5000.00, 20, 1),
('S04', 'Jus Apel Fuji', 5000.00, 20, 1),
('S05', 'Jus Jerukadu', 5000.00, 20, 1),
('S06', 'Jus Melon', 5000.00, 20, 1),
('M01', 'Jus Alpukat', 7000.00, 20, 2),
('M02', 'Jus Strobery', 7000.00, 20, 2),
('M03', 'Jus Jambu merah', 7000.00, 20, 2),
('M04', 'Jus Apel Fuji', 7000.00, 20, 2),
('M05', 'Jus Jerukadu', 7000.00, 20, 2),
('M06', 'Jus Melon', 7000.00, 20, 2),
('J01', 'Jus Alpukat', 12000.00, 20, 3),
('J02', 'Jus Strobery', 12000.00, 20, 3),
('J03', 'Jus Jambu merah', 12000.00, 20, 3),
('J04', 'Jus Apel Fuji', 12000.00, 20, 3),
('J05', 'Jus Jerukadu', 12000.00, 20, 3),
('J06', 'Jus Melon', 12000.00, 20, 3);

INSERT INTO Pemasok (id_supplier, nama, no_tlp) VALUES
(01, 'P. Budi', 082397871121),
(02, 'P. Adi', 081234567233);