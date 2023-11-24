-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2023 pada 00.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_ubsi_pontianak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `nama_berita` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `nama_berita`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Lewat BKOT Universitas BSI Ajak Orang Tua Mahasiswa Baru Kenali Dunia Kampus', 'Sebagai langkah awal dalam menyambut semester baru ganjil 2023-2024, Kampus Digital Kreatif Universitas BSI (Bina Sarana Informatika) akan kembali menghadirkan BKOT (Bincang Kampus Bersama Orang Tua', 'berita1.jpeg', NULL, NULL),
(2, 'Tingkatkan Sinergi Kampus Dengan Orang Tua, Universitas BSI akan Gelar BKOT', 'Dalam rangka menyiapkan lulusan bertalenta digital, Universitas BSI (Bina Sarana Informatika) akan mengadakan acara Bincang Kampus bersama Orang Tua (BKOT). Acara ini akan digelar pada Sabtu, 12 Agustus 2023 di Universitas BSI kampus Kramat 98', 'berita2.jpg', NULL, NULL),
(3, 'Capaian UBSI Di Usia BSI Ke-33 Tahun, Menyambut Hari Baru', 'Bina Sarana Informatika kini telah menginjak usia 33 tahun. Sepanjang itu tentu BSI telah melahirkan banyak lulusan terbaiknya yang mampu berkompetisi dan berdaya saing tinggi.Dalam Dies Natalis ke-33 tahun, BSI melangsungkan kegiatan secara terbatas', 'berita3.jpeg', NULL, NULL),
(4, 'Universitas BSI Kampus Pontianak Jamin Kampusnya Tak Ada Perploncoan', 'Pengenalan Kehidupan Kampus Bagi Mahasiswa Baru (PKKMB) merupakan wahana bagi pemimpin perguruan tinggi untuk memperkenalkan dan mempersiapkan mahasiswa baru (maba) dalam proses transisi menjadi mahasiswa yang dewasa dan mandiri', 'berita4.jpeg', NULL, NULL),
(5, 'Pembalap memasuki lapangan futsal aw', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam blanditiis repellendus sit quae! Perspiciatis commodi dolores ad alias architecto. Molestiae inventore asperiores maxime repellendus quo. A, ab blanditiis. Ipsum sunt officia doloribus repudiandae quod earum amet et incidunt unde vel.\r\n', 'berita52.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
