-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 09:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `dfr_no` varchar(20) NOT NULL,
  `dfr_tanggal` date DEFAULT NULL,
  `dfr_password` varchar(50) NOT NULL,
  `dft_nama` varchar(50) NOT NULL,
  `dfr_jekel` enum('1','2') DEFAULT NULL,
  `dfr_tmp_lahir` varchar(20) DEFAULT NULL,
  `dfr_tgl_lahir` date DEFAULT NULL,
  `dft_agama` enum('1','2','3','4','5') DEFAULT NULL,
  `dfr_anak_dr` enum('1','2','3','4') DEFAULT NULL,
  `dfr_nisn` varchar(50) DEFAULT NULL,
  `dfr_asal_sekolah` text DEFAULT NULL,
  `dfr_almt_sekolah` text DEFAULT NULL,
  `dfr_pas_photo` text DEFAULT NULL,
  `dfr_nilai_mm` int(11) DEFAULT NULL,
  `dfr_nilai_indo` int(11) DEFAULT NULL,
  `dfr_nilai_eng` int(11) DEFAULT NULL,
  `dfr_nilai_ipa` int(11) DEFAULT NULL,
  `dfr_nilai_ips` int(11) DEFAULT NULL,
  `dfr_ayah` varchar(20) DEFAULT NULL,
  `dfr_ibu` varchar(20) DEFAULT NULL,
  `dfr_alamat` text DEFAULT NULL,
  `dfr_hp_ortu` varchar(12) DEFAULT NULL,
  `status` enum('R','S') DEFAULT NULL,
  `filetf` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`dfr_no`, `dfr_tanggal`, `dfr_password`, `dft_nama`, `dfr_jekel`, `dfr_tmp_lahir`, `dfr_tgl_lahir`, `dft_agama`, `dfr_anak_dr`, `dfr_nisn`, `dfr_asal_sekolah`, `dfr_almt_sekolah`, `dfr_pas_photo`, `dfr_nilai_mm`, `dfr_nilai_indo`, `dfr_nilai_eng`, `dfr_nilai_ipa`, `dfr_nilai_ips`, `dfr_ayah`, `dfr_ibu`, `dfr_alamat`, `dfr_hp_ortu`, `status`, `filetf`) VALUES
('admin', '2021-08-23', '123', 'Admin', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('REG20210826001', '2021-08-26', '123456', 'Andi Sucipta', '1', 'Bogor', '2002-03-11', '1', '', '0023573580', 'SMP Sejahtera 1', 'Jalan Raya Bogor No.12', '821-1-16. sudirman_pas_photo.jpg', 80, 78, 81, 82, 83, 'Sucipto Kubowo', 'Ningrum Larasati', 'Bogor', '089672489112', 'R', '821-316-RBQD8269.JPG'),
('REG20210826003', '2021-08-26', '123456', 'Irgi Rama', '1', 'Bogor', '2002-08-31', '1', '1', '0025673585', 'SMP Klapanunggal', 'Jalan Raya Bojong Klapanunggal', '458-286-16. sudirman_pas_photo.jpg', 90, 91, 89, 86, 85, 'Suminta', 'Listiani', 'Bogor', '08967248945', 'S', '458-445-received_518032995563659.jpeg'),
('REG20210826006', '2021-08-26', '123456', 'Sulistio Pramono', '1', 'Bogor', '2002-04-17', '1', '1', '0021324243', 'MTS Alfurqon', 'Jalan Raya Bogor', '854-476-16. sudirman_pas_photo.jpg', 80, 91, 84, 83, 82, 'Encep ', 'Listiani', 'Bogor', '089672412314', 'S', '854-978-316-RBQD8269.JPG'),
('REG20210828012', '2021-08-28', '123456', 'Reyhan Putra', '1', 'Jakarta', '2002-08-31', '1', '1', '0024657357', 'SMP Bahagia 1', 'Jakarta Selatan', '273-1-16. sudirman_pas_photo.jpg', 50, 60, 70, 80, 68, 'Tio Prasetyo', 'Indah Kusuma', 'Jakarta Selatan', '08723456475', 'R', '273-469-138-743-test.jpg'),
('REG20211004014', '2021-10-04', 'irgi1234', 'rama', '1', 'Bogor', '2001-08-09', '1', '1', '123456', 'SMP Klapanunggal', 'Bogor', '926-foto 3x4_Irgi Rama Sulistio.jpg', 80, 91, 89, 82, 83, 'suminta', 'listiani', 'Bogor', '0896432314', 'R', '926-117-316-RBQD8269.JPG'),
('REG20211004015', '2021-10-04', 'irgi1234', 'Irgi Rama Sulistio', '1', 'Bogor', '2002-10-06', '1', '1', '45039204', 'SMP Klapanunggal', 'Bogor', '857-foto 3x4_Irgi Rama Sulistio.jpg', 87, 90, 87, 88, 97, 'suminta', 'listiani', 'Bogor', '08964378232', 'R', '857-117-316-RBQD8269.JPG'),
('REG20211004016', '2021-10-04', 'irgi1234', 'Rama Sulis', '1', 'Bogor', '2002-03-20', '1', '1', '7532515', 'SMP Sejahtera 1', 'Medan', '666-foto 3x4_Irgi Rama Sulistio.jpg', 66, 91, 89, 83, 83, 'Suminta', 'Ai Listiani', 'Cileungsi', '08964378142', 'R', '666-117-316-RBQD8269.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`dfr_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
