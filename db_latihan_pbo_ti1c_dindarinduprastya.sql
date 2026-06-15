-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2026 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_ti1c_dindarinduprastya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` bigint(20) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Regular','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(5) DEFAULT NULL,
  `kacamata_3d_id` varchar(50) DEFAULT NULL,
  `efek_gerak_fitur` varchar(50) DEFAULT NULL,
  `bantal_selimut_pack` tinyint(1) DEFAULT NULL,
  `layanan_butler` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'Avengers: Secret Wars', '2026-07-01 13:00:00', 2, 50000.00, 'Regular', 'Dolby Atmos 7.1', 'A', NULL, NULL, NULL, NULL),
(2, 'Avengers: Secret Wars', '2026-07-01 15:30:00', 1, 50000.00, 'Regular', 'Dolby Atmos 7.1', 'D', NULL, NULL, NULL, NULL),
(3, 'KKN di Desa Penari 2', '2026-07-01 19:00:00', 4, 60000.00, 'Regular', 'Standard Stereo', 'F', NULL, NULL, NULL, NULL),
(4, 'KKN di Desa Penari 2', '2026-07-01 21:30:00', 2, 60000.00, 'Regular', 'Standard Stereo', 'E', NULL, NULL, NULL, NULL),
(5, 'Avatar 4', '2026-07-02 12:00:00', 3, 50000.00, 'Regular', 'Dolby Atmos 7.1', 'C', NULL, NULL, NULL, NULL),
(6, 'The Batman Part II', '2026-07-02 14:45:00', 2, 50000.00, 'Regular', 'Standard Stereo', 'B', NULL, NULL, NULL, NULL),
(7, 'The Batman Part II', '2026-07-02 18:00:00', 1, 60000.00, 'Regular', 'Standard Stereo', 'G', NULL, NULL, NULL, NULL),
(8, 'Avengers: Secret Wars', '2026-07-01 12:45:00', 2, 95000.00, 'IMAX', 'IMAX 12-Channel', 'H', '3D-IMAX-001', 'Dual Laser Projector', NULL, NULL),
(9, 'Avengers: Secret Wars', '2026-07-01 16:00:00', 2, 95000.00, 'IMAX', 'IMAX 12-Channel', 'J', '3D-IMAX-002', 'Dual Laser Projector', NULL, NULL),
(10, 'Avatar 4', '2026-07-01 19:15:00', 1, 110000.00, 'IMAX', 'IMAX 12-Channel', 'K', '3D-IMAX-045', '4D Motion Seat Tech', NULL, NULL),
(11, 'Avatar 4', '2026-07-01 22:45:00', 2, 110000.00, 'IMAX', 'IMAX 12-Channel', 'L', '3D-IMAX-046', '4D Motion Seat Tech', NULL, NULL),
(12, 'Interstellar (Rerelease)', '2026-07-02 11:00:00', 4, 85000.00, 'IMAX', 'IMAX 6-Channel', 'I', NULL, '70mm Film Simulation', NULL, NULL),
(13, 'The Batman Part II', '2026-07-02 15:00:00', 2, 95000.00, 'IMAX', 'IMAX 12-Channel', 'J', NULL, 'Enhanced Xenon Base', NULL, NULL),
(14, 'The Batman Part II', '2026-07-02 20:30:00', 3, 110000.00, 'IMAX', 'IMAX 12-Channel', 'M', NULL, 'Enhanced Xenon Base', NULL, NULL),
(15, 'Avengers: Secret Wars', '2026-07-01 14:00:00', 2, 150000.00, 'Velvet', NULL, 'Sofa-', NULL, NULL, 1, 1),
(16, 'Avengers: Secret Wars', '2026-07-01 17:30:00', 2, 150000.00, 'Velvet', NULL, 'Sofa-', NULL, NULL, 1, 1),
(17, 'The Batman Part II', '2026-07-01 20:45:00', 2, 175000.00, 'Velvet', NULL, 'Sofa-', NULL, NULL, 1, 1),
(18, 'The Batman Part II', '2026-07-02 13:15:00', 2, 150000.00, 'Velvet', NULL, 'Sofa-', NULL, NULL, 1, 0),
(19, 'KKN di Desa Penari 2', '2026-07-02 16:30:00', 2, 150000.00, 'Velvet', NULL, 'Sofa-', NULL, NULL, 1, 1),
(20, 'Avatar 4', '2026-07-02 19:45:00', 2, 175000.00, 'Velvet', NULL, 'Sofa-', NULL, NULL, 1, 1),
(21, 'Avatar 4', '2026-07-02 22:30:00', 2, 175000.00, 'Velvet', NULL, 'Sofa-', NULL, NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
