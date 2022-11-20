-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 02:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apdk`
--

CREATE TABLE `apdk` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apdk`
--

INSERT INTO `apdk` (`id`, `title`, `description`, `file_json`, `user_id`, `date_created`) VALUES
(1, 'Tse APDK', '																																Bahasa C# adalah salah satu baha yang digunakan didalam pemrograman menggunakan Unity																												', '[\"1668940740_Tes.pdf\"]', 1, '2022-11-20 17:34:31'),
(2, 'Tes Lagi APDK', 'APDK adalah blablabla', '[\"1668948000_Tes.pdf\"]', 1, '2022-11-20 19:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `disda`
--

CREATE TABLE `disda` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disda`
--

INSERT INTO `disda` (`id`, `title`, `description`, `file_json`, `user_id`, `date_created`) VALUES
(1, 'Tes Distribusi Daya', 'Distribusi Daya daalaah blablabla', '[\"1668940740_Tes.pdf\"]', 1, '2022-11-20 17:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `title`, `description`, `file_json`, `user_id`, `date_created`) VALUES
(9, 'tes KWU', '								KWU							', '[\"1668940020_Tes.pdf\"]', 1, '2022-11-20 10:20:28'),
(11, 'asd', 'asd', '[\"1668915420_Kelompok 12_Soal Pemrograman Web.pdf\"]', 1, '2022-11-20 10:37:18'),
(15, 'Tes Tambah Dokumen (Gelen)', 'Tes 123', '[\"1668941040_Tes.pdf\"]', 3, '2022-11-20 17:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `k3`
--

CREATE TABLE `k3` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `k3`
--

INSERT INTO `k3` (`id`, `title`, `description`, `file_json`, `user_id`, `date_created`) VALUES
(1, 'Tes K3', '								K3 sangat penting dalam pekerjaan							', '[\"1668940380_Tes.pdf\"]', 1, '2022-11-20 17:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `rlac`
--

CREATE TABLE `rlac` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rlac`
--

INSERT INTO `rlac` (`id`, `title`, `description`, `file_json`, `user_id`, `date_created`) VALUES
(1, 'Tes AC', '								Rangkaian AC berbed dengan rangkaian DC							', '[\"1668940680_Tes.pdf\"]', 1, '2022-11-20 17:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `rldc`
--

CREATE TABLE `rldc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Rangkaian Listrik DC';

--
-- Dumping data for table `rldc`
--

INSERT INTO `rldc` (`id`, `title`, `description`, `file_json`, `user_id`, `date_created`) VALUES
(9, 'Tes AC', '								Rangkaian AC berbeda dengan Rangkaian DC							', '[\"1668939900_Tes.pdf\"]', 1, '2022-11-20 17:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Admin,2= users',
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `middlename`, `contact`, `address`, `email`, `password`, `type`, `avatar`, `date_created`) VALUES
(1, 'Admin', 'Admin', '', '+12354654787', 'Sample', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 1, '', '2020-11-11 15:35:19'),
(2, 'John', 'Smith', 'C', '+14526-5455-44', 'Address', 'jsmith@sample.com', '1254737c076cf867dc53d60a0364f38e', 2, '1605080820_avatar.jpg', '2020-11-11 09:24:40'),
(3, 'Cliff', 'Satryo', 'Gallant', 'dwjdwj', 'Pesona Cilebut 02 Blok FB 02 No.16 RT.11 RW.15', 'sayagelen@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 2, '1668493800_1605057840_avatar.jpg', '2022-11-15 13:30:34'),
(4, 'Duta', 'Gunawan', 'Alif', '123', 'Surabaya', 'gelenjap@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 1, '1668495960_1605057840_avatar.jpg', '2022-11-15 14:06:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apdk`
--
ALTER TABLE `apdk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disda`
--
ALTER TABLE `disda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `k3`
--
ALTER TABLE `k3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rlac`
--
ALTER TABLE `rlac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rldc`
--
ALTER TABLE `rldc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apdk`
--
ALTER TABLE `apdk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disda`
--
ALTER TABLE `disda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `k3`
--
ALTER TABLE `k3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rlac`
--
ALTER TABLE `rlac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rldc`
--
ALTER TABLE `rldc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
