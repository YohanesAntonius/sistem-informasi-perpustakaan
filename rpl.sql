-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2020 pada 14.11
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_terbit` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` char(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_buku` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_input` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tanggal_input`, `created_at`, `updated_at`) VALUES
(1, 'Belajar Laravel 8.0', 'Yohanes Antonius S.Kom dkk', 'Informatika', '2018', '909-975-10-2581-3', '49', 'Teknologi', '2020-12-03', '2020-12-03 02:37:34', '2020-12-09 03:41:25'),
(2, 'Customer Relationship Management (CRM)', 'I Putu Agus Eka Pratama', 'Informatika', '2020', '909-975-10-2581-3', '4', 'Bisnis', '2020-12-03', '2020-12-03 02:58:50', '2020-12-09 05:29:33'),
(3, 'Edukasi bahasa inggris', 'Dhira', 'Maju Tech', '2019', '978-602-00-2519-4', '4', 'Ilmu Komunikasi', '2019-12-07', '2020-12-07 00:28:05', '2020-12-09 05:30:11'),
(4, 'Management Keuangan', 'Malvina', 'Garuda Davelopment', '2018', '909-975-10-2281-1', '5', 'Manajemen', '2020-11-30', '2020-12-07 00:29:22', '2020-12-07 00:29:22'),
(5, 'Data Science', 'Melvin', 'PT TRI JAYA PERCETAKAN', '2017', '978-602-00-2519-9', '5', 'Teknologi', '2020-12-02', '2020-12-07 00:30:31', '2020-12-07 00:30:31'),
(6, 'Php & Laravel', 'Andriyan', 'Maju Tech', '2017', '978-450-7131-10-5', '5', 'Teknologi', '2020-10-29', '2020-12-07 00:31:46', '2020-12-07 00:31:46'),
(7, 'Matlab untuk pemrosesan Citra Digital', 'Andre Malengka', 'Fast Teknologi', '2016', '909-9230-10-2581-8', '5', 'Teknologi', '2020-11-21', '2020-12-07 00:34:22', '2020-12-07 00:34:22'),
(8, 'Filosofi Bahasa', 'Rani dkk', 'Erlangga', '2012', '909-975-00-3470-7', '5', 'Ilmu Komunikasi', '2020-11-30', '2020-12-07 00:35:54', '2020-12-07 00:35:54'),
(9, 'Membangun bisnis di era pandemi', 'Syarifuddin', 'Informatika', '2013', '909-975-10-2672-3', '5', 'Bisnis', '2020-12-01', '2020-12-07 00:37:45', '2020-12-07 00:37:45'),
(10, 'Management Keuangan', 'I Putu Gede', 'Informatika', '2016', '909-975-20-3091-4', '5', 'Manajemen', '2020-11-30', '2020-12-07 00:39:38', '2020-12-07 00:39:38'),
(11, 'Jika kamu menjadi tanda tambah', 'Trista Speed Shaskan', 'BIP', '2010', '909-765-10-2581-3', '5', 'Ilmu Komunikasi', '2020-12-01', '2020-12-07 04:55:35', '2020-12-07 04:55:35'),
(12, 'Pierre', 'Matthew J.baek', 'Pt Gramedia Pusaka', '2009', '978-602-00-2570-9', '5', 'Manajemen', '2020-12-01', '2020-12-07 04:57:27', '2020-12-07 04:57:27'),
(13, 'Buku pintar pengetahuan umum', 'Robert Oeban', 'Karisma', '2018', '978-623-7300-18-2', '5', 'Manajemen', '2020-11-30', '2020-12-07 04:59:34', '2020-12-07 04:59:34'),
(14, 'Membaca pikiran orang lewat bahasa tubuh', 'Dianata eka putra', 'PT.Mizan pustaka', '2004', '978-540-7131-15-2', '4', 'Ilmu Komunikasi', '2020-12-06', '2020-12-07 05:00:56', '2020-12-09 04:37:35'),
(15, 'Mikrotik', 'Yohanes Antonius S.Kom dkk', 'Informatika', '2014', '909-975-00-3091-7', '5', 'Komputer', '2020-12-02', '2020-12-07 05:08:58', '2020-12-07 05:08:58'),
(16, '30 Menit Mahir Membuat Jaringan Komputer', 'Alan Nur Aditya', 'Dunia Komputer (PS)', '2013', '978-623-7540-18-9', '5', 'Komputer', '2020-10-29', '2020-12-07 05:12:16', '2020-12-07 05:12:16'),
(17, 'Bongkar Rahasia Openbts', 'Onno W Purbo', 'Andi', '2013', '909-975-25-3045-8', '5', 'Komputer', '2020-10-27', '2020-12-07 05:16:40', '2020-12-07 05:16:40'),
(18, 'Jaringan MESH', 'Ono W Purbo', 'STKIP Surya', '2013', '978-602-00-2595-4', '5', 'Komputer', '2020-09-30', '2020-12-07 05:18:57', '2020-12-07 05:18:57'),
(19, 'Buat Website dengan tapestry', 'Andriyan', 'Informatika', '2016', '909-452-10-2753-3', '5', 'Teknologi', '2020-07-30', '2020-12-07 05:20:29', '2020-12-07 05:20:29'),
(20, 'Koleksi Lengkap Software Hacking', 'Dedik Kurniawan', 'Elex Media', '2013', '978-669-7450-25-4', '5', 'Komputer', '2020-10-29', '2020-12-07 09:09:55', '2020-12-07 09:09:55'),
(21, 'Kupas Tuntas Tool Gratis Proteksi Windows', 'Wahana Komputer', 'Andi', '2013', '909-975-10-4568-3', '5', 'Komputer', '2020-11-30', '2020-12-07 09:13:36', '2020-12-07 09:13:36'),
(22, 'Linux Networking Ubuntu Debian', 'Imam Catealy', 'Jasakom', '2013', '970-530-7653-27-5', '5', 'Komputer', '2020-10-28', '2020-12-07 09:16:42', '2020-12-07 09:16:42'),
(23, 'Membangun Jaringan Komputer Di Windows XP', 'Edy Winarno ST, M.Eng', 'Elex Media Komputindo', '2013', '978-602-00-2519-5', '5', 'Komputer', '2020-12-02', '2020-12-07 09:22:22', '2020-12-07 09:22:22'),
(24, 'Membuat Sendiri Jaringan Komputer', 'Edy Winarno ST, M.ENG', 'Elex Media Komputindo', '2013', '978-623-7131-18-2', '5', 'Komputer', '2020-10-28', '2020-12-07 09:25:30', '2020-12-07 09:25:30'),
(25, 'Rangkaian Listrik', 'Cekmas Cekdin', 'Andi', '2013', '978-602-00-2519-1', '5', 'Teknologi', '2020-12-03', '2020-12-07 09:26:55', '2020-12-07 09:26:55'),
(26, 'Tips & Trik Mikrotik Router OS', 'Imam Cartely', 'Andi Publisher', '2013', '978-623-7450-20-9', '5', 'Komputer', '2020-10-28', '2020-12-07 09:28:50', '2020-12-07 09:28:50'),
(27, 'Administrasi Jaringan Linux UBUNTU 11', 'Wahana Komputer', 'Andi Publisher', '2012', '958-780-7450-18-6', '5', 'Komputer', '2020-10-28', '2020-12-07 09:30:29', '2020-12-07 09:30:29'),
(28, 'Algoritma & Pemograman Menggunakan Java', 'Abdul Kadir', 'Andi', '2012', '909-975-10-2478-6', '5', 'Komputer', '2020-12-02', '2020-12-07 09:31:51', '2020-12-07 11:00:29'),
(29, 'Algoritma & Pemrograman Menggunakan C & C++', 'Abdul Kadir', 'Andi', '2012', '956-657-36-3095-1', '5', 'Komputer', '2020-11-30', '2020-12-07 09:34:15', '2020-12-07 09:34:15'),
(30, 'Belajar Kilat: Computer Networking', 'Elcom', 'Andi', '2012', '978-602-05-2432-7', '5', 'Komputer', '2020-10-27', '2020-12-07 09:40:24', '2020-12-07 09:40:24'),
(31, 'Cybertron Solution', 'IMAM CATEALY', 'Jasakom', '2012', '909-975-10-2467-7', '5', 'Komputer', '2020-08-31', '2020-12-07 09:42:09', '2020-12-07 11:04:02'),
(32, 'Kriptografi Untuk Keamanan Jaringan', 'Rifki Sadikin', 'Andi', '2012', '978-602-00-3567-7', '5', 'Komputer', '2020-12-02', '2020-12-07 09:45:18', '2020-12-07 09:45:18'),
(33, 'Membuat Sendiri CCTV Berkelas Enterprise', 'Eko Hari Atmoko', 'Andi', '2011', '978-623-7341-20-9', '5', 'Bisnis', '2020-12-01', '2020-12-07 10:37:13', '2020-12-07 10:37:13'),
(34, 'Membuat Sendiri Cloud Computing Server', 'Onno W Purbo', 'Andi', '2012', '978-623-7131-37-8', '5', 'Komputer', '2020-12-01', '2020-12-07 10:42:02', '2020-12-07 10:42:02'),
(35, 'Mengubah Windows7 Menjadi Linux', 'Irawan', 'Maxicom', '2019', '909-975-10-2581-6', '5', 'Komputer', '2020-12-03', '2020-12-07 10:43:43', '2020-12-07 10:43:43'),
(36, 'Network Hacking Dengan Linux Backtrack', 'Wahana Komputer', 'Andi', '2012', '978-602-00-2520-6', '5', 'Teknologi', '2020-11-30', '2020-12-07 10:45:33', '2020-12-07 10:45:33'),
(37, 'Panduan Aplikatif Dan Solusi Bikin Animasi', 'Wahana Komputer', 'Andi Publisher', '2007', '909-975-10-2581-3', '5', 'Teknologi', '2020-11-06', '2020-12-07 10:47:31', '2020-12-07 10:47:31'),
(38, 'Bisnis ikan lele', 'Sule', 'OVJ', '2010', '909-975-21-3023-2', '5', 'Bisnis', '2020-12-01', '2020-12-07 10:50:15', '2020-12-07 10:50:15'),
(39, 'Bisnis ikan Nila', 'Budi Anduk', 'Empat Mata', '2002', '978-602-00-1234-1', '5', 'Bisnis', '2020-11-20', '2020-12-07 10:51:30', '2020-12-07 10:51:30'),
(40, 'Membaca huruf braille', 'Sipapar', 'Andi cs', '2010', '909-975-10-2345-2', '5', 'Ilmu Komunikasi', '2020-09-08', '2020-12-07 10:52:57', '2020-12-07 10:52:57'),
(41, 'Finance', 'Sutarma', 'Adi Malarangeng', '2012', '923-645-34-2530-9', '5', 'Manajemen', '2020-12-05', '2020-12-07 10:54:23', '2020-12-07 10:54:23'),
(42, 'Membuat Bakmie', 'Anton', 'Siap saji', '2010', '978-623-7131-18-6', '5', 'Masak', '2020-12-01', '2020-12-07 10:55:34', '2020-12-07 10:55:34'),
(43, 'Belajar Code Igniter', 'Yohanes Antonius S.Kom dkk', 'Garuda Davelopment', '2011', '909-975-00-4500-9', '5', 'Teknologi', '2020-09-12', '2020-12-07 10:56:56', '2020-12-07 10:56:56'),
(44, 'Belajar Django', 'Sidarma', 'Maju Tech', '2012', '909-975-47-3091-5', '5', 'Teknologi', '2020-12-01', '2020-12-07 10:58:13', '2020-12-07 10:58:13'),
(45, 'Edukasi jawa', 'Galuh Eka', 'Media', '2002', '978-602-00-2519-8', '5', 'Ilmu Komunikasi', '2020-10-02', '2020-12-07 11:00:14', '2020-12-07 11:00:14'),
(46, 'Belajar bahasa Jerman', 'Sidamar', 'Tenang media', '1995', '909-975-10-2457-9', '5', 'Ilmu Komunikasi', '2020-11-10', '2020-12-07 11:02:26', '2020-12-07 11:02:26'),
(47, 'Hukum Ketatanegaraan', 'Gusti', 'Media', '1999', '978-530-47-1234-1', '5', 'Hukum', '2020-12-07', '2020-12-07 11:03:48', '2020-12-07 11:03:48'),
(48, 'Bisnis membuat pupuk', 'Dhira', 'Bisnisman', '2003', '978-602-00-2578-3', '5', 'Bisnis', '2020-12-03', '2020-12-07 11:05:24', '2020-12-07 11:05:24'),
(49, 'Belajar Html', 'Melvin', 'Belajar com', '2016', '978-602-00-2548-8', '5', 'Teknologi', '2020-09-30', '2020-12-07 11:06:27', '2020-12-07 11:06:27'),
(50, 'Install Ulang WIndows 8', 'Yohanes Antonius S.Kom dkk', 'Maju Jaya', '2016', '978-602-00-2589-2', '5', 'Komputer', '2020-11-20', '2020-12-07 11:07:57', '2020-12-07 11:07:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellphone` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_id` bigint(20) UNSIGNED NOT NULL,
  `aktif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `nim`, `nama`, `alamat`, `telepon`, `cellphone`, `agama`, `email`, `pendidikan_id`, `aktif`, `username`, `password`, `created_at`, `updated_at`) VALUES
(5, '66', '1414321025', 'Sutrisno Hadi', 'Sidoarjo', '031124574675', '082141567340', 'Islam', 'sutrisno@gmail.com', 3, 'Y', 'sutrisno', 'sutrisno', '2020-12-07 11:12:38', '2020-12-07 11:32:06'),
(7, '70', '1514321002', 'Agung Guerrero', 'Jember', '031124574756', '085730027745', 'Hindu', 'agungguerr@gmail.com', 6, 'Y', 'agung', 'agung', '2020-12-07 11:15:48', '2020-12-07 11:15:48'),
(10, '75', '1214321035', 'Nur Tirta Rahayu', 'Surabaya', '031124574450', '081241356799', 'Islam', 'nur@gmail.com', 1, 'Y', 'nurtirta', 'nurtirta', '2020-12-07 11:21:29', '2020-12-07 11:21:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `user_id`, `nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `prodi`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, '3', '1714321000', 'M Zyahed', 'Sampang, Madura', '1998-12-03', 'Laki - laki', 'Teknk Informatika', 'zyahed@gmail.com', 'zyahed', '2020-12-03 02:36:50', '2020-12-03 02:36:50'),
(2, '15', '1714321001', 'A Abu Nidhal', 'Sidoarjo', '1993-12-30', 'Laki - laki', 'Teknik Sipil', 'abunidhal@gmail.com', 'abunidhal', '2020-12-06 04:49:35', '2020-12-06 04:49:35'),
(3, '16', '1714321002', 'Achmad Fahrudin', 'Surabaya', '1995-03-02', 'Laki - laki', 'Teknik Elektro', 'fahrudin@gmail.com', 'fahrudin', '2020-12-06 04:51:00', '2020-12-06 04:51:00'),
(4, '17', '1714321003', 'Aang Mura', 'Surabaya', '1994-08-15', 'Laki - laki', 'Ekonomi Manajemen', 'mura@gmail.com', 'mura', '2020-12-06 04:53:39', '2020-12-06 04:53:39'),
(5, '18', '1714321004', 'Rony Wahyu', 'Sidoarjo', '1993-12-30', 'Laki - laki', 'Ekonomi Akuntansi', 'ronyw@gmail.com', 'ronyw', '2020-12-06 04:55:25', '2020-12-06 04:55:25'),
(6, '19', '1714321005', 'Achmad Sofyan', 'Sidoarjo', '1993-05-05', 'Laki - laki', 'Ilmu Ekonomi dan Pembangunan', 'sofyan@gmail.com', 'sofyan', '2020-12-06 04:56:31', '2020-12-06 04:56:31'),
(7, '20', '1714321006', 'Achmad Vidi S', 'Surabaya', '1995-07-13', 'Laki - laki', 'Fisip Ilmu Komunikasi', 'vidi@gmail.com', 'vidi', '2020-12-06 04:57:40', '2020-12-06 04:57:40'),
(8, '21', '1714321007', 'Achmad Syauqi', 'Surabaya', '1995-06-13', 'Laki - laki', 'Fisip Ilmu Komunikasi', 'syauqi@gmail.com', 'syauqi', '2020-12-06 05:00:03', '2020-12-06 05:00:03'),
(9, '22', '1714321008', 'Achmad Zakinur Arif', 'Lamongan', '1994-12-12', 'Laki - laki', 'Fisip Admin Publik', 'zakinur@gmail.com', 'zakinur', '2020-12-06 05:01:39', '2020-12-06 05:01:39'),
(10, '23', '1714321009', 'Ade Hermawanto', 'Sidoarjo', '1993-03-20', 'Laki - laki', 'Fisip Admin Publik', 'hermawanto@gmail.com', 'hermawanto', '2020-12-06 05:02:56', '2020-12-06 05:02:56'),
(11, '24', '1714321010', 'Agung Dwi Kresna', 'Sidoarjo', '1995-07-14', 'Laki - laki', 'Ilmu Hukum', 'agungdwi@gmail.com', 'agungdwi', '2020-12-06 05:04:19', '2020-12-06 05:04:19'),
(12, '25', '1714321011', 'Ade Rakhmawan', 'Sidoarjo', '1995-03-18', 'Laki - laki', 'Teknk Informatika', 'aderakhmawan@gmail.com', 'aderakhmawan', '2020-12-06 05:06:02', '2020-12-06 05:06:02'),
(13, '26', '1714321012', 'Agus Wahyudi', 'Ciamis', '1994-08-13', 'Laki - laki', 'Teknik Sipil', 'aguswahyudi@gmail.com', 'aguswahyudi', '2020-12-06 05:07:19', '2020-12-06 05:07:19'),
(14, '28', '1714321013', 'Ahmad Agus Rudianto', 'Sidoarjo', '1994-08-08', 'Laki - laki', 'Teknik Elektro', 'aderakh@gmail.com', 'aderakh', '2020-12-06 05:09:59', '2020-12-06 05:09:59'),
(15, '29', '1714321014', 'Ahmad Rijal J', 'Sidoarjo', '1994-07-24', 'Laki - laki', 'Teknik Elektro', 'rijal@gmail.com', 'rijal', '2020-12-06 05:12:23', '2020-12-06 05:12:23'),
(16, '30', '1714321015', 'Ahmad Fikri Adam', 'Malang', '1996-04-22', 'Laki - laki', 'Ekonomi Manajemen', 'fikriadam@gmail.com', 'fikriadam', '2020-12-06 05:15:19', '2020-12-06 05:15:19'),
(17, '31', '1714321016', 'Ahmad Zaki Zakariyah', 'Jombang', '1995-01-09', 'Laki - laki', 'Ekonomi Akuntansi', 'zakizakariyah@gmail.com', 'zakizakariyah', '2020-12-06 05:16:36', '2020-12-06 05:16:36'),
(18, '32', '1714321017', 'Andi As Rifaldo', 'Klaten', '1994-07-09', 'Laki - laki', 'Ilmu Ekonomi dan Pembangunan', 'andiasrif@gmail.com', 'andiasrif', '2020-12-06 05:18:28', '2020-12-06 05:18:28'),
(19, '33', '1714321018', 'Andik Rahmad', 'Trenggalek', '1995-03-12', 'Laki - laki', 'Ilmu Ekonomi dan Pembangunan', 'andikrahmad@gmail.com', 'andikrahmad', '2020-12-06 05:19:45', '2020-12-06 05:19:45'),
(20, '34', '1714321019', 'Andi Prasetyo M', 'Surabaya', '1995-03-21', 'Laki - laki', 'Fisip Ilmu Komunikasi', 'andiprasetyo@gmail.com', 'andiprasetyo', '2020-12-06 05:21:01', '2020-12-06 05:21:01'),
(21, '35', '1714321020', 'Andika Wahyuono P', 'Sidoarjo', '1995-06-17', 'Laki - laki', 'Fisip Ilmu Komunikasi', 'andikawahyu@gmail.com', 'andikawahyu', '2020-12-06 05:22:43', '2020-12-06 05:22:43'),
(22, '36', '1714321021', 'Andini Eka Tri Putriani', 'Sidoarjo', '1995-06-15', 'Laki - laki', 'Fisip Admin Publik', 'andinierika@gmail.com', 'andinierika', '2020-12-06 05:25:51', '2020-12-06 05:25:51'),
(23, '37', '1714321022', 'Andy Dharmawan', 'Sidoarjo', '1995-09-26', 'Laki - laki', 'Fisip Admin Publik', 'andydharmawan@gmail.com', 'andydharmawan', '2020-12-06 05:28:42', '2020-12-06 05:28:42'),
(24, '38', '1714321023', 'Andrianus Koly', 'Surabaya', '1994-06-29', 'Laki - laki', 'Ilmu Hukum', 'andrianuskoly@gmail.com', 'andrianuskoly', '2020-12-06 05:31:17', '2020-12-06 05:31:17'),
(25, '39', '1714321024', 'Angga Indrayanto', 'Madiun', '1994-12-03', 'Laki - laki', 'Ilmu Hukum', 'anggaandriyanto@gmail.com', 'anggaandriyanto', '2020-12-06 05:32:52', '2020-12-06 05:32:52'),
(26, '40', '1714321025', 'Ar Rohmah Puji Rahayu', 'Surabaya', '1995-09-02', 'Wanita', 'Teknk Informatika', 'antoniusyohan22@gmail.com', 'yohan', '2020-12-06 05:35:08', '2020-12-06 05:38:36'),
(27, '41', '1714321026', 'Arif Kurnia Putra', 'Sidoarjo', '1995-04-15', 'Laki - laki', 'Teknik Sipil', 'arifkurnia@gmail.com', 'arifkurnia', '2020-12-06 05:38:14', '2020-12-06 05:38:14'),
(28, '42', '1714321027', 'Ari Setiawan', 'Sidoarjo', '1995-04-10', 'Laki - laki', 'Teknik Sipil', 'arisetiawan@gmail.com', 'arisetiawan', '2020-12-06 05:40:34', '2020-12-06 05:40:34'),
(29, '43', '1714321028', 'Arik Eka Yulianto', 'Siadoarjo', '1995-07-18', 'Laki - laki', 'Teknik Sipil', 'arikekayulianto@gmail.com', 'arikekayulianto', '2020-12-06 05:42:15', '2020-12-06 05:42:15'),
(30, '44', '1714321029', 'Arindra Wirawan', 'Sidoarjo', '1995-01-09', 'Laki - laki', 'Teknik Elektro', 'arindra@gmail.com', 'arindra', '2020-12-06 05:43:57', '2020-12-06 23:47:03'),
(31, '45', '1714321030', 'Ayatulloh Firmansyah', 'Sidoarjo', '1994-09-07', 'Laki - laki', 'Teknik Elektro', 'ayatulloh@gmail.com', 'ayatulloh', '2020-12-06 05:46:52', '2020-12-06 23:48:06'),
(32, '46', '1714321031', 'Ariyadi', 'Sidoarjo', '1995-01-17', 'Laki - laki', 'Teknk Informatika', 'ariyadi@gmail.com', 'ariyadi', '2020-12-06 23:39:52', '2020-12-06 23:49:07'),
(33, '47', '1714321032', 'Astin Syafriansyaji', 'Sidoarjo', '1995-06-24', 'Laki - laki', 'Teknik Sipil', 'astin@gmail.com', 'astin', '2020-12-06 23:41:45', '2020-12-07 00:05:33'),
(34, '48', '1714321033', 'Bagus Sanjaya', 'Malang', '1995-08-14', 'Laki - laki', 'Teknik Elektro', 'bagussanjaya@gmail.com', 'bagussanjaya', '2020-12-06 23:43:01', '2020-12-06 23:51:05'),
(35, '49', '1714321034', 'Bima Apriliasta Eka', 'Bangkalan', '1995-04-30', 'Laki - laki', 'Teknik Elektro', 'bima@gmail.com', 'bima', '2020-12-06 23:44:49', '2020-12-06 23:51:41'),
(36, '50', '1714321035', 'Bagus Yogo Pribadi', 'Sidoarjo', '1995-07-22', 'Laki - laki', 'Ekonomi Manajemen', 'bagusyogo@gmail.com', 'bagusyogo', '2020-12-06 23:45:58', '2020-12-06 23:52:23'),
(37, '51', '1714321036', 'Bimo Ari Susilo', 'Nganjuk', '1995-07-08', 'Laki - laki', 'Ekonomi Manajemen', 'bimoari@gmail.com', 'bimoari', '2020-12-06 23:53:55', '2020-12-06 23:53:55'),
(38, '52', '1714321037', 'Burhani', 'Ciamis', '1994-05-02', 'Laki - laki', 'Ekonomi Akuntansi', 'burhani@gmail.com', 'burhani', '2020-12-06 23:55:06', '2020-12-06 23:55:06'),
(39, '53', '1714321038', 'Bintang Pamungkas', 'Surabaya', '1995-05-21', 'Laki - laki', 'Ilmu Ekonomi dan Pembangunan', 'bintang@gmail.com', 'bintang', '2020-12-06 23:56:33', '2020-12-06 23:56:33'),
(40, '54', '1714321039', 'Choirun Nisa', 'Tulungagung', '1994-07-25', 'Laki - laki', 'Fisip Ilmu Komunikasi', 'choirunnisa@gmail.com', 'choirunnisa', '2020-12-06 23:57:57', '2020-12-06 23:57:57'),
(41, '55', '1714321040', 'Dana Prasetyo', 'Gresik', '1995-12-31', 'Laki - laki', 'Fisip Ilmu Komunikasi', 'dana@gmail.com', 'dana', '2020-12-06 23:59:22', '2020-12-06 23:59:22'),
(42, '56', '1714321041', 'Dewi Nur Afifah', 'Sidoarjo', '1995-07-12', 'Wanita', 'Fisip Ilmu Komunikasi', 'dewinur@gmail.com', 'dewinur', '2020-12-07 00:00:32', '2020-12-07 00:00:32'),
(43, '57', '1714321042', 'Denny Permana Putra', 'Surabaya', '1994-12-02', 'Laki - laki', 'Fisip Ilmu Komunikasi', 'dennypermana@gmail.com', 'dennypermana', '2020-12-07 00:02:25', '2020-12-07 00:02:25'),
(44, '58', '1714321043', 'Dika Muhammad', 'Sidoarjo', '1995-02-28', 'Laki - laki', 'Fisip Admin Publik', 'dika@gmail.com', 'dika', '2020-12-07 00:04:53', '2020-12-07 00:04:53'),
(45, '59', '1714321044', 'Dimas Aditya Pratama', 'Ponorogo', '1995-02-18', 'Laki - laki', 'Fisip Admin Publik', 'dimasadit@gmail.com', 'dimasadit', '2020-12-07 00:07:17', '2020-12-07 00:07:17'),
(46, '60', '1714321045', 'Dimas Gilang Ramadhan', 'Sidoarjo', '1993-03-16', 'Laki - laki', 'Ilmu Hukum', 'dimasgilang@gmail.com', 'dimasgilang', '2020-12-07 00:08:33', '2020-12-07 00:08:33'),
(47, '61', '1714321046', 'Dimas Bagus P', 'Surabaya', '1995-12-16', 'Laki - laki', 'Teknk Informatika', 'dimasbagus@gmail.com', 'dimasbagus', '2020-12-07 00:09:52', '2020-12-07 00:09:52'),
(48, '62', '1714321047', 'Dimas Permadianto', 'Jember', '1994-08-11', 'Laki - laki', 'Teknik Sipil', 'dimaspermadi@gmail.com', 'dimaspermadi', '2020-12-07 00:11:20', '2020-12-07 00:11:20'),
(49, '63', '1714321049', 'Doni Kurniawan', 'Malang', '1994-12-05', 'Laki - laki', 'Teknik Sipil', 'donikurniawan@gmail.com', 'donikurniawan', '2020-12-07 00:12:39', '2020-12-07 00:12:39'),
(50, '64', '1714321048', 'Dwi Triyanto', 'Surabaya', '1994-09-29', 'Laki - laki', 'Teknik Elektro', 'dwitriyanto@gmail.com', 'dwitriyanto', '2020-12-07 00:14:04', '2020-12-07 00:14:04'),
(51, '65', '1714321050', 'Dwi Putri Tjahyani', 'Jakarta', '1995-11-26', 'Wanita', 'Teknik Elektro', 'djitjahyani@gmail.com', 'dwitjahyani', '2020-12-07 00:16:00', '2020-12-07 00:16:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_10_30_145243_create_sessions_table', 1),
(7, '2020_10_31_170042_create_employees_table', 1),
(8, '2020_11_09_074240_create_members_table', 1),
(9, '2020_11_10_141440_create_books_table', 1),
(10, '2020_11_14_105634_create_transactions_table', 1),
(11, '2020_12_02_032834_create_pendidikan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'SD', '2020-12-03 02:32:59', '2020-12-03 02:32:59'),
(2, 'SMP', '2020-12-03 02:32:59', '2020-12-03 02:32:59'),
(3, 'SMA/SMK', '2020-12-03 02:32:59', '2020-12-03 02:32:59'),
(4, 'S1', '2020-12-03 02:32:59', '2020-12-03 02:32:59'),
(5, 'S2', '2020-12-03 02:32:59', '2020-12-03 02:32:59'),
(6, 'S3', '2020-12-03 02:32:59', '2020-12-03 02:32:59'),
(7, 'Tidak Sekolah', '2020-12-03 02:32:59', '2020-12-03 02:32:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `members_id` bigint(20) UNSIGNED NOT NULL,
  `books_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` enum('pinjam','kembali') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `kode_transaksi`, `members_id`, `books_id`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `created_at`, `updated_at`) VALUES
(3, 'TR00001', 1, 14, '2020-12-09', '2020-12-12', 'pinjam', '2020-12-09 04:37:35', '2020-12-09 04:37:35'),
(4, 'TR00004', 2, 2, '2020-12-09', '2020-12-12', 'pinjam', '2020-12-09 05:29:33', '2020-12-09 05:29:33'),
(5, 'TR00005', 3, 3, '2020-12-09', '2020-12-12', 'pinjam', '2020-12-09 05:30:11', '2020-12-09 05:30:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Yohanes Antonius', 'antoniusyohan22@gmail.com', NULL, '$2y$10$eGlS1WuojWxbj5esmfOVGupHdO7xQ1252/yz8tCGunqJTQf.h3lnS', NULL, NULL, 'a4vpzw5DLd', NULL, NULL, '2020-12-03 02:32:59', '2020-12-03 02:32:59'),
(2, 'admin', 'Yuga Kurniawan', 'yuga@gmail.com', NULL, 'yuga', NULL, NULL, 'xsvgJBQfVY', NULL, NULL, '2020-12-03 02:35:46', '2020-12-03 02:35:46'),
(3, 'anggota', 'M Zyahed', 'zyahed@gmail.com', NULL, 'zyahed', NULL, NULL, 'DjjHSe7jVc', NULL, NULL, '2020-12-03 02:36:50', '2020-12-03 02:36:50'),
(4, 'admin', 'Indra Oktavian', 'indra@gmail.com', NULL, 'indra', NULL, NULL, '0FkJAe9hla', NULL, NULL, '2020-12-03 23:00:59', '2020-12-03 23:00:59'),
(12, 'admin', 'Indra Oktavian', 'indraokt@gmail.com', NULL, 'indra', NULL, NULL, 'Bww5jmhJTT', NULL, NULL, '2020-12-03 23:22:07', '2020-12-03 23:22:07'),
(14, 'admin', 'Dwi Rizkianto', 'dwirizki@gmail.com', NULL, 'dwi', NULL, NULL, 'n0CVW5N97k', NULL, NULL, '2020-12-03 23:27:01', '2020-12-03 23:27:01'),
(15, 'anggota', 'A Abu Nidhal', 'abunidhal@gmail.com', NULL, 'abunidhal', NULL, NULL, 'BUWmhUDB8m', NULL, NULL, '2020-12-06 04:49:35', '2020-12-06 04:49:35'),
(16, 'anggota', 'Achmad Fahrudin', 'fahrudin@gmail.com', NULL, 'fahrudin', NULL, NULL, 'OdBu002537', NULL, NULL, '2020-12-06 04:51:00', '2020-12-06 04:51:00'),
(17, 'anggota', 'Aang Mura', 'mura@gmail.com', NULL, 'mura', NULL, NULL, 'Df4PCYwz2k', NULL, NULL, '2020-12-06 04:53:39', '2020-12-06 04:53:39'),
(18, 'anggota', 'Rony Wahyu', 'ronyw@gmail.com', NULL, 'ronyw', NULL, NULL, 'r4ZhpisTFp', NULL, NULL, '2020-12-06 04:55:25', '2020-12-06 04:55:25'),
(19, 'anggota', 'Achmad Sofyan', 'sofyan@gmail.com', NULL, 'sofyan', NULL, NULL, 'IzJa3qUoGP', NULL, NULL, '2020-12-06 04:56:31', '2020-12-06 04:56:31'),
(20, 'anggota', 'Achmad Vidi S', 'vidi@gmail.com', NULL, 'vidi', NULL, NULL, 'EcXnEiAn6R', NULL, NULL, '2020-12-06 04:57:39', '2020-12-06 04:57:39'),
(21, 'anggota', 'Achmad Syauqi', 'syauqi@gmail.com', NULL, 'syauqi', NULL, NULL, 'CZ2KKkDffU', NULL, NULL, '2020-12-06 05:00:03', '2020-12-06 05:00:03'),
(22, 'anggota', 'Achmad Zakinur Arif', 'zakinur@gmail.com', NULL, 'zakinur', NULL, NULL, 'zRHdnk0fgg', NULL, NULL, '2020-12-06 05:01:39', '2020-12-06 05:01:39'),
(23, 'anggota', 'Ade Hermawanto', 'hermawanto@gmail.com', NULL, 'hermawanto', NULL, NULL, 'HYPyzT6CQS', NULL, NULL, '2020-12-06 05:02:56', '2020-12-06 05:02:56'),
(24, 'anggota', 'Agung Dwi Kresna', 'agungdwi@gmail.com', NULL, 'agungdwi', NULL, NULL, 'epiFR2Je8n', NULL, NULL, '2020-12-06 05:04:19', '2020-12-06 05:04:19'),
(25, 'anggota', 'Ade Rakhmawan', 'aderakhmawan@gmail.com', NULL, 'aderakhmawan', NULL, NULL, 'o1dU0ajfr3', NULL, NULL, '2020-12-06 05:06:02', '2020-12-06 05:06:02'),
(26, 'anggota', 'Agus Wahyudi', 'aguswahyudi@gmail.com', NULL, 'aguswahyudi', NULL, NULL, '7ZL4Nw53Zh', NULL, NULL, '2020-12-06 05:07:19', '2020-12-06 05:07:19'),
(28, 'anggota', 'Ahmad Agus Rudianto', 'aderakh@gmail.com', NULL, 'aderakh', NULL, NULL, '6CwpCjBqrW', NULL, NULL, '2020-12-06 05:09:59', '2020-12-06 05:09:59'),
(29, 'anggota', 'Ahmad Rijal J', 'rijal@gmail.com', NULL, 'rijal', NULL, NULL, 'NqjHJ2Qa0T', NULL, NULL, '2020-12-06 05:12:22', '2020-12-06 05:12:22'),
(30, 'anggota', 'Ahmad Fikri Adam', 'fikriadam@gmail.com', NULL, 'fikriadam', NULL, NULL, 'FxRpudcINK', NULL, NULL, '2020-12-06 05:15:19', '2020-12-06 05:15:19'),
(31, 'anggota', 'Ahmad Zaki Zakariyah', 'zakizakariyah@gmail.com', NULL, 'zakizakariyah', NULL, NULL, 'KiYNp31F6n', NULL, NULL, '2020-12-06 05:16:36', '2020-12-06 05:16:36'),
(32, 'anggota', 'Andi As Rifaldo', 'andiasrif@gmail.com', NULL, 'andiasrif', NULL, NULL, '3LT8xBoMil', NULL, NULL, '2020-12-06 05:18:28', '2020-12-06 05:18:28'),
(33, 'anggota', 'Andik Rahmad', 'andikrahmad@gmail.com', NULL, 'andikrahmad', NULL, NULL, 'UFkO2uOOIH', NULL, NULL, '2020-12-06 05:19:45', '2020-12-06 05:19:45'),
(34, 'anggota', 'Andi Prasetyo M', 'andiprasetyo@gmail.com', NULL, 'andiprasetyo', NULL, NULL, 'PU9YjMAgJH', NULL, NULL, '2020-12-06 05:21:01', '2020-12-06 05:21:01'),
(35, 'anggota', 'Andika Wahyuono P', 'andikawahyu@gmail.com', NULL, 'andikawahyu', NULL, NULL, 'uW7ePW9iEX', NULL, NULL, '2020-12-06 05:22:43', '2020-12-06 05:22:43'),
(36, 'anggota', 'Andini Eka Tri Putriani', 'andinierika@gmail.com', NULL, 'andinierika', NULL, NULL, 'CeORC3Ddks', NULL, NULL, '2020-12-06 05:25:51', '2020-12-06 05:25:51'),
(37, 'anggota', 'Andy Dharmawan', 'andydharmawan@gmail.com', NULL, 'andydharmawan', NULL, NULL, '4AKGCvaC4T', NULL, NULL, '2020-12-06 05:28:42', '2020-12-06 05:28:42'),
(38, 'anggota', 'Andrianus Koly', 'andrianuskoly@gmail.com', NULL, 'andrianuskoly', NULL, NULL, 'P42wl09U68', NULL, NULL, '2020-12-06 05:31:17', '2020-12-06 05:31:17'),
(39, 'anggota', 'Angga Indrayanto', 'anggaandriyanto@gmail.com', NULL, 'anggaandriyanto', NULL, NULL, 'mpeDGa5UfP', NULL, NULL, '2020-12-06 05:32:52', '2020-12-06 05:32:52'),
(40, 'anggota', 'Ar Rohmah Puji Rahayu', 'arrohmah@gmail.com', NULL, 'arrohmah', NULL, NULL, 'HXmeaYpI8C', NULL, NULL, '2020-12-06 05:35:08', '2020-12-06 05:35:08'),
(41, 'anggota', 'Arif Kurnia Putra', 'arifkurnia@gmail.com', NULL, 'arifkurnia', NULL, NULL, 'W1ie4r8vzb', NULL, NULL, '2020-12-06 05:38:14', '2020-12-06 05:38:14'),
(42, 'anggota', 'Ari Setiawan', 'arisetiawan@gmail.com', NULL, 'arisetiawan', NULL, NULL, 'fP9U15xJxf', NULL, NULL, '2020-12-06 05:40:34', '2020-12-06 05:40:34'),
(43, 'anggota', 'Arik Eka Yulianto', 'arikekayulianto@gmail.com', NULL, 'arikekayulianto', NULL, NULL, 'LKxQWdC7ME', NULL, NULL, '2020-12-06 05:42:15', '2020-12-06 05:42:15'),
(44, 'anggota', 'Arindra Wirawan', 'arindrawirawan@gmail.com', NULL, 'arindrawirawan', NULL, NULL, 'gzSOPtS146', NULL, NULL, '2020-12-06 05:43:57', '2020-12-06 05:43:57'),
(45, 'anggota', 'Ayatulloh Firmansyah', 'ayatulloh@gmail.com', NULL, 'ayatulloh', NULL, NULL, 'iRNy3dbehW', NULL, NULL, '2020-12-06 05:46:52', '2020-12-06 05:46:52'),
(46, 'anggota', 'Ariyadi', 'ariyadi@gmail.com', NULL, 'ariyadi', NULL, NULL, '1bCdaL0rXx', NULL, NULL, '2020-12-06 23:39:52', '2020-12-06 23:39:52'),
(47, 'anggota', 'Astin Syafriansyaji', 'astin@gmail.com', NULL, 'astin', NULL, NULL, 'Q09r4JwLVQ', NULL, NULL, '2020-12-06 23:41:45', '2020-12-06 23:41:45'),
(48, 'anggota', 'Bagus Sanjaya', 'bagussanjaya@gmail.com', NULL, 'bagussanjaya', NULL, NULL, 'FOVDO0Mb6J', NULL, NULL, '2020-12-06 23:43:01', '2020-12-06 23:43:01'),
(49, 'anggota', 'Bima Apriliasta Eka', 'bima@gmail.com', NULL, 'bima', NULL, NULL, 'av7M9VyhFn', NULL, NULL, '2020-12-06 23:44:49', '2020-12-06 23:44:49'),
(50, 'anggota', 'Bagus Yogo Pribadi', 'bagusyogo@gmail.com', NULL, 'bagusyogo', NULL, NULL, 'No8YpX9da1', NULL, NULL, '2020-12-06 23:45:58', '2020-12-06 23:45:58'),
(51, 'anggota', 'Bimo Ari Susilo', 'bimoari@gmail.com', NULL, 'bimoari', NULL, NULL, 'un3NF7xvVI', NULL, NULL, '2020-12-06 23:53:55', '2020-12-06 23:53:55'),
(52, 'anggota', 'Burhani', 'burhani@gmail.com', NULL, 'burhani', NULL, NULL, '6vPK9lXNHQ', NULL, NULL, '2020-12-06 23:55:06', '2020-12-06 23:55:06'),
(53, 'anggota', 'Bintang Pamungkas', 'bintang@gmail.com', NULL, 'bintang', NULL, NULL, '34HUPMOEeY', NULL, NULL, '2020-12-06 23:56:33', '2020-12-06 23:56:33'),
(54, 'anggota', 'Choirun Nisa', 'choirunnisa@gmail.com', NULL, 'choirunnisa', NULL, NULL, 's5yZfkBVdA', NULL, NULL, '2020-12-06 23:57:57', '2020-12-06 23:57:57'),
(55, 'anggota', 'Dana Prasetyo', 'dana@gmail.com', NULL, 'dana', NULL, NULL, 'KydreyI1a5', NULL, NULL, '2020-12-06 23:59:22', '2020-12-06 23:59:22'),
(56, 'anggota', 'Dewi Nur Afifah', 'dewinur@gmail.com', NULL, 'dewinur', NULL, NULL, 'hsWxDSmSAh', NULL, NULL, '2020-12-07 00:00:32', '2020-12-07 00:00:32'),
(57, 'anggota', 'Denny Permana Putra', 'dennypermana@gmail.com', NULL, 'dennypermana', NULL, NULL, 'i5k3Thgoec', NULL, NULL, '2020-12-07 00:02:24', '2020-12-07 00:02:24'),
(58, 'anggota', 'Dika Muhammad', 'dika@gmail.com', NULL, 'dika', NULL, NULL, 'ojipS3lw5x', NULL, NULL, '2020-12-07 00:04:53', '2020-12-07 00:04:53'),
(59, 'anggota', 'Dimas Aditya Pratama', 'dimasadit@gmail.com', NULL, 'dimasadit', NULL, NULL, 'j1HL0zr2ij', NULL, NULL, '2020-12-07 00:07:17', '2020-12-07 00:07:17'),
(60, 'anggota', 'Dimas Gilang Ramadhan', 'dimasgilang@gmail.com', NULL, 'dimasgilang', NULL, NULL, '94JsiuWZHO', NULL, NULL, '2020-12-07 00:08:33', '2020-12-07 00:08:33'),
(61, 'anggota', 'Dimas Bagus P', 'dimasbagus@gmail.com', NULL, 'dimasbagus', NULL, NULL, '10IAKkpLh7', NULL, NULL, '2020-12-07 00:09:52', '2020-12-07 00:09:52'),
(62, 'anggota', 'Dimas Permadianto', 'dimaspermadi@gmail.com', NULL, 'dimaspermadi', NULL, NULL, 'RU0eoYhsGy', NULL, NULL, '2020-12-07 00:11:20', '2020-12-07 00:11:20'),
(63, 'anggota', 'Doni Kurniawan', 'donikurniawan@gmail.com', NULL, 'donikurniawan', NULL, NULL, 'It67kbXuEo', NULL, NULL, '2020-12-07 00:12:39', '2020-12-07 00:12:39'),
(64, 'anggota', 'Dwi Triyanto', 'dwitriyanto@gmail.com', NULL, 'dwitriyanto', NULL, NULL, 'KYLRDx2zNU', NULL, NULL, '2020-12-07 00:14:04', '2020-12-07 00:14:04'),
(65, 'anggota', 'Dwi Putri Tjahyani', 'djitjahyani@gmail.com', NULL, 'dwitjahyani', NULL, NULL, 'ZSdunldhvm', NULL, NULL, '2020-12-07 00:16:00', '2020-12-07 00:16:00'),
(66, 'admin', 'Sutrisno Hadi', 'sutrisno@gmail.com', NULL, 'sutrisno', NULL, NULL, '8Bm9UrWWqu', NULL, NULL, '2020-12-07 11:12:38', '2020-12-07 11:12:38'),
(67, 'admin', 'Agung Guerrero', 'agung@gmail.com', NULL, 'agung', NULL, NULL, 'aGv8Nxnyi9', NULL, NULL, '2020-12-07 11:14:05', '2020-12-07 11:14:05'),
(70, 'admin', 'Agung Guerrero', 'agungguerr@gmail.com', NULL, 'agung', NULL, NULL, 'FwI5fVsFYj', NULL, NULL, '2020-12-07 11:15:48', '2020-12-07 11:15:48'),
(71, 'admin', 'Ketapang Sukmo', 'ketapang@gmail.com', NULL, 'ketapang', NULL, NULL, 'DvE4M88ngM', NULL, NULL, '2020-12-07 11:17:16', '2020-12-07 11:17:16'),
(73, 'admin', 'Nur Tirta Rahayu', 'nurtirta@gmail.com', NULL, 'nurtirta', NULL, NULL, 'A3tgmDIAMC', NULL, NULL, '2020-12-07 11:19:45', '2020-12-07 11:19:45'),
(75, 'admin', 'Nur Tirta Rahayu', 'nur@gmail.com', NULL, 'nurtirta', NULL, NULL, 'k1KqCumeLr', NULL, NULL, '2020-12-07 11:21:29', '2020-12-07 11:21:29'),
(76, 'anggota', 'Alfian Rizki', 'alfianrizki@gmail.com', NULL, 'alfianrizki', NULL, NULL, 'DVahH6D3on', NULL, NULL, '2020-12-09 04:28:39', '2020-12-09 04:28:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_pendidikan_id_unique` (`pendidikan_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_books_id_foreign` FOREIGN KEY (`books_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_members_id_foreign` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
