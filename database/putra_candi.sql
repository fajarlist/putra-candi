-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 02:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putra_candi`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `deskripsi_alat` varchar(1000) NOT NULL,
  `harga_alat` double NOT NULL,
  `gambar_alat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id_alat`, `nama_alat`, `deskripsi_alat`, `harga_alat`, `gambar_alat`) VALUES
(1, 'Pavir Super', 'Pavir tembakau dengan kualitas super yang tak perlu di ragukan lagi kualitas nya seperti rasa sayangku padamu tak perlu diragukan', 10, 'pavir.jpg'),
(2, 'Alat Linting', 'Alat linting ini dapat menjadi perantara atas terjalinya ikatan cinta antara tembakau dan juga kertas pavir', 25, 'alat linting.jpeg'),
(3, 'Lem Stick', 'Lem stick ini dapat mempererat hubungan yang  sudah terjalin antara tembakau dan kertas sehingga hubungan mereka dapat terikat sampai ajal menjemput seperti cinta kita', 15, 'lem.jpg'),
(4, 'Busa Filter', 'Busa filter ini dapat membuat hubungan terasa lebih nyaman dan juga dapat menyaring tembakau tembakau pelakor yang dapat merusak rasa kasih sayang dan cinta yang tercipta dari hubungan tebakau dan kertas pavir sehingga hubungan ini tetap terasa nyaman', 15, 'busa 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(20) NOT NULL,
  `nama_beli` varchar(1000) NOT NULL,
  `alamat_beli` varchar(5000) NOT NULL,
  `jumlah_beli` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`id_beli`, `nama_beli`, `alamat_beli`, `jumlah_beli`) VALUES
(16, 'k', 'k', 5),
(17, 'd', 'd', 2),
(18, 'ds', 'sas', 2),
(19, 'aa', 'Candirejo, Gedangan, Cepogo, Boyolali', 22),
(20, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 15),
(21, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 15),
(22, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 11),
(23, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(24, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(25, 'GUSTOM', 'JOGJA', 99),
(26, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(27, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(28, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(29, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(30, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(31, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(32, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(33, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(34, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(35, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(36, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(37, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(38, ',', 'Candirejo, Gedangan, Cepogo, Boyolali', 99),
(39, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(40, 'fajar', 'Candirejo, Gedangan, Cepogo, Boyolali', 2),
(41, 'sdgsg', 'ergsrr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `telp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_contact`, `email`, `pesan`, `telp`) VALUES
(1, 'asa', 'addd@gmail.com', 'aaaaaaa', 1234567899);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `qty` double NOT NULL,
  `nota` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `id_produk`, `id_users`, `qty`, `nota`, `updated_at`) VALUES
(2, 6, 5, 2, 'INV-20220714123027-5', '2022-07-26 21:01:14'),
(3, 6, 11, 2, 'INV-20220714132410-11', '2022-07-26 21:01:14'),
(4, 7, 11, 2, 'INV-20220714132410-11', '2022-07-25 07:20:39'),
(5, 7, 5, 2, 'INV-20220714123027-5', '2022-07-25 07:20:39'),
(6, 4, 5, 3, 'INV-20220714123027-5', '2022-07-14 05:50:15'),
(7, 4, 5, 3, 'INV-20220714124931-5', '2022-07-14 05:50:15'),
(11, 6, 5, 2, 'INV-20220714125937-5', '2022-07-26 21:01:14'),
(12, 17, 5, 3, 'INV-20220714125937-5', '2022-07-14 05:59:37'),
(13, 17, 5, 1, 'INV-20220714130008-5', '2022-07-14 06:00:08'),
(14, 17, 5, 1, 'INV-20220714130313-5', '2022-07-14 06:03:13'),
(17, 16, 5, 1, 'INV-20220714131631-5', '2022-07-14 06:16:31'),
(18, 4, 5, 1, 'INV-20220714131631-5', '2022-07-14 06:16:31'),
(19, 8, 11, 3, 'INV-20220714132410-11', '2022-07-15 01:19:51'),
(20, 4, 11, 1, 'INV-20220714132410-11', '2022-07-14 06:24:10'),
(21, 4, 11, 1, 'INV-20220714133502-11', '2022-07-14 06:35:02'),
(22, 7, 11, 2, 'INV-20220715062330-11', '2022-07-25 07:20:39'),
(23, 7, 5, 2, 'INV-20220715072622-5', '2022-07-25 07:20:39'),
(24, 8, 11, 5, 'INV-20220715082000-11', '2022-07-15 01:20:00'),
(25, 7, 11, 2, 'INV-20220715082058-11', '2022-07-25 07:20:39'),
(26, 4, 11, 1, 'INV-20220715082058-11', '2022-07-15 01:20:58'),
(27, 7, 5, 2, 'INV-20220725142406-5', '2022-07-25 07:24:06'),
(28, 2, 5, 1, 'INV-20220725142406-5', '2022-07-25 07:24:06'),
(29, 4, 5, 1, 'INV-20220725142406-5', '2022-07-25 07:24:06'),
(33, 6, 5, 3, 'INV-20220727040148-5', '2022-07-26 21:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `harga` double NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `kualitas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `deskripsi`, `gambar`, `kualitas`) VALUES
(2, 'Sampoerna Mild', 63, 'Tembakau asli boyolali dengan rasa sampoerna mild', '9.jpg', 'Grade A'),
(4, 'Djarum Super', 55, 'Tembakau asli boyolali dengan rasa djarum super dijamin tidak mlengse', '8.jpg', 'Grade A'),
(6, 'Gudang Garam', 75, 'Tembakau asli boyolali dengan rasa Gudang Garam dijamin sama persis garansi pacar', 'a.png', 'Premium'),
(7, 'Dunhill Putih', 99, 'Tembakau asli boyolali dengan rasa dunhill putih rasa super mantap tidak akan kecewa garansi rasa malu', 'high class.png', 'High Class'),
(8, 'Rasa Mangga', 70, 'Tembakau asli boyolali dengan rasa buah mangga dijamin manis garansi harga diri', 'contact2.jpg', 'Premium'),
(16, 'marlboro merah', 70, 'Tembakau asli boyolali dengan rasa marlboro dijamin tidak mlengse rasanya sama seperti marlboro asli tetapi lebih ringan saat menyedot asap dari pori pori filter yang telah anda satukan dengan tembakau dan kertas menggunakan segenap cintamu', 'pre2.jpg', 'Premium'),
(17, 'Lucky Strick', 70, 'Tembakau asli boyolali yang memiliki rasa sangat mirip dengan rokok lucky strick, silahkan mencoba jika anda tidak percaya dengan rasa tembakau ini tapi walaupun anda tidak percaya pada rasa rokok ini tetap percayalah pda cintamu padanya jangan sampai lepas ke tangan pria lain', 'pre1.jpg', 'Premium');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `nota` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `jumlah` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_users` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`nota`, `id`, `status`, `jumlah`, `tanggal`, `id_users`, `updated_at`) VALUES
('INV-20220714131631-5', 1, 1, 125, '2022-07-14 13:16:31', 5, '2022-07-14 23:22:44'),
('INV-20220714132410-11', 2, 1, 543, '2022-07-14 13:24:10', 11, '2022-07-14 21:10:48'),
('INV-20220714133502-11', 3, 1, 55, '2022-06-14 13:35:02', 11, '2022-07-14 21:10:51'),
('INV-20220715062330-11', 4, 1, 99, '2022-07-15 06:23:30', 11, '2022-07-14 23:24:12'),
('INV-20220715072622-5', 5, 1, 99, '2022-07-15 07:26:22', 5, '2022-07-15 01:23:47'),
('INV-20220715082000-11', 6, 0, 350, '2022-07-15 08:20:01', 11, '2022-07-15 08:20:01'),
('INV-20220715082058-11', 7, 0, 352, '2022-07-15 08:20:58', 11, '2022-07-15 01:25:20'),
('INV-20220725142406-5', 8, 0, 316, '2022-07-25 14:24:06', 5, '2022-07-25 14:24:06'),
('INV-20220727040148-5', 9, 1, 225, '2022-07-27 04:01:48', 5, '2022-07-26 21:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahir` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pelanggan',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `hp`, `alamat`, `lahir`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Fajar Listiyanto', 'fajarlistiyanto.tkj2@gmail.com', '088216097050', 'Boyolali', 17, NULL, '$2y$10$j6SE8hOvMnqwGGvst3Oq2eRqhLvNhzU03ygaOUmB/KB6LLr99sHw2', 'admin', '7PD2Z7er4FKyoiHgu85KpFmjwHst7kKp5WyZ1HqADpAVvEqbMm0nNhQPcSrA', '2022-07-04 19:53:23', '2022-07-04 19:53:23'),
(11, 'mas faj', 'akuoradueemail@gmail.com', '6288216097050', 'adoh kono', 17, NULL, '$2y$10$xUCgPW/KG8gOoJxhbix8DeM5hnWqDJcEaT1pnKdMl5/d/YzHrXzkm', 'pelanggan', NULL, '2022-07-11 20:06:32', '2022-07-11 20:06:32'),
(12, 'aaaaaa', 'doloe009@gmail.com', '012323456765', 'ssdddsas', 19, NULL, '$2y$10$jicmAfazVwWFGATvM6OJ8O/836ctdSoaEtXLx/v8TflPC8SU6QcqK', 'pelanggan', NULL, '2022-07-15 01:52:25', '2022-07-15 01:52:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`nota`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
