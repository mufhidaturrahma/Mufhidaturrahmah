create database crud_fidah;

use database crud_fidah;

CREATE TABLE petshop (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(255) NOT NULL,
    harga DECIMAL(10, 2) NOT NULL,
    kategori VARCHAR(255) NOT NULL
);