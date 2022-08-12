-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Agu 2022 pada 14.43
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cjl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `gambar_barang` varchar(70) NOT NULL,
  `desk_barang` text DEFAULT NULL,
  `id_merk` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `gambar_barang`, `desk_barang`, `id_merk`, `id_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Mesin Press', '1660297483_e42637517677c4de8b4e.png', 'Aku mesin pres', 13, 3, '2022-08-12 16:44:43', '2022-08-12 16:44:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Machinery'),
(2, 'Machine Tools'),
(3, 'Cutting Tools'),
(4, 'Measuring Tools'),
(5, 'Hand Tools'),
(6, 'Cutting Coolant'),
(7, 'Abrasive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk`
--

CREATE TABLE `merk` (
  `id_merk` bigint(20) UNSIGNED NOT NULL,
  `nama_merk` varchar(60) NOT NULL,
  `gambar_merk` varchar(60) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `merk`
--

INSERT INTO `merk` (`id_merk`, `nama_merk`, `gambar_merk`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Arntz', '1660143176_b9644530425e97b4e129.jpg', '2022-08-10 21:52:56', '2022-08-10 21:52:56', NULL),
(4, 'Besdia', '1660146565_443c2b41d51570ad2510.jpg', '2022-08-10 22:49:25', '2022-08-10 22:49:25', NULL),
(5, 'Bositools', '1660146598_2633fdabe53e204ca999.png', '2022-08-10 22:49:58', '2022-08-10 22:49:58', NULL),
(6, 'Carmar', '1660146615_6ea9f3008d2c94f63ecd.jpg', '2022-08-10 22:50:15', '2022-08-10 22:50:15', NULL),
(7, 'Dixon', '1660146635_87cde6ca6c98d666440c.jpg', '2022-08-10 22:50:35', '2022-08-10 22:50:35', NULL),
(8, 'Fullmark', '1660146652_047c2403a3aae8c0c226.jpg', '2022-08-10 22:50:52', '2022-08-10 22:50:52', NULL),
(9, 'J&W', '1660146678_51332da9fe191165c336.jpg', '2022-08-10 22:51:18', '2022-08-10 22:51:18', NULL),
(10, 'Kodex', '1660146697_6334cdb7c6d665f1d29f.png', '2022-08-10 22:51:37', '2022-08-10 22:51:37', NULL),
(11, 'Lamina', '1660146714_7baf5e2c62dcf74064c5.jpg', '2022-08-10 22:51:54', '2022-08-10 22:51:54', NULL),
(12, 'Maykestag', '1660146738_6059e8993be43d12bc14.jpg', '2022-08-10 22:52:18', '2022-08-10 22:52:18', NULL),
(13, 'Mitutoyo', '1660146760_411f9279098bc0ed868b.png', '2022-08-10 22:52:40', '2022-08-10 22:52:40', NULL),
(14, 'Nachi', '1660146789_848adcd0442f36421a01.jpg', '2022-08-10 22:53:09', '2022-08-10 22:53:09', NULL),
(15, 'Nikken', '1660146806_d70b46102e23942eda00.jpg', '2022-08-10 22:53:26', '2022-08-10 22:53:26', NULL),
(16, 'Orient Craft', '1660146832_29024b0f387e927013f3.png', '2022-08-10 22:53:52', '2022-08-10 22:53:52', NULL),
(17, 'Sanou', '1660146854_63be8f389e4477eae21c.jpg', '2022-08-10 22:54:14', '2022-08-10 22:54:14', NULL),
(18, 'Seayac', '1660146869_c80b3142cee4318e2b32.jpg', '2022-08-10 22:54:29', '2022-08-11 05:26:09', NULL),
(26, 'Shan Gin', '1660199809_a55bf5e69cb42949bf41.jpg', '2022-08-11 13:36:49', '2022-08-11 13:36:49', NULL),
(27, 'Supersonic', '1660199822_93f2741c06d45fef0a4b.jpg', '2022-08-11 13:37:02', '2022-08-11 13:37:02', NULL),
(28, 'Vertex', '1660199835_1e0a05de14a93f4774da.png', '2022-08-11 13:37:15', '2022-08-11 13:37:15', NULL),
(29, 'Waytrain', '1660199857_1ff7af5ddf17c3a9e132.jpg', '2022-08-11 13:37:37', '2022-08-11 14:38:18', NULL),
(30, 'Weida', '1660199870_f314a8e8a5d0202113da.png', '2022-08-11 13:37:50', '2022-08-11 13:37:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-08-08-200816', 'App\\Database\\Migrations\\DataSales', 'default', 'App', 1660134827, 1),
(2, '2022-08-10-112158', 'App\\Database\\Migrations\\DataMerk', 'default', 'App', 1660134827, 1),
(3, '2022-08-12-043311', 'App\\Database\\Migrations\\DataKategori', 'default', 'App', 1660280202, 2),
(5, '2022-08-12-052028', 'App\\Database\\Migrations\\DataBarang', 'default', 'App', 1660293021, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_sales` bigint(20) UNSIGNED NOT NULL,
  `nama_sales` varchar(60) NOT NULL,
  `phone_sales` varchar(60) NOT NULL,
  `alamat_sales` varchar(60) NOT NULL,
  `tgl_lahir_sales` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sales`
--

INSERT INTO `sales` (`id_sales`, `nama_sales`, `phone_sales`, `alamat_sales`, `tgl_lahir_sales`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Edi', '08123170863', 'Surabaya', '1980-12-22', NULL, '2022-08-11 13:35:44', NULL),
(2, 'Ilyas', '081254693810', 'Surabaya', '1976-01-30', NULL, NULL, NULL),
(3, 'Rochman', '081331637497', 'Surabaya', '1977-01-01', NULL, NULL, NULL),
(4, 'Dwiono', '085232777490', 'Surabaya', '1970-04-29', NULL, '2022-08-11 14:01:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `barang_id_kategori_foreign` (`id_kategori`),
  ADD KEY `barang_id_merk_foreign` (`id_merk`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `merk`
--
ALTER TABLE `merk`
  MODIFY `id_merk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `barang_id_merk_foreign` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
