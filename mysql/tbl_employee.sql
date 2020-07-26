-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2020 at 08:04 AM
-- Server version: 10.3.23-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8799410_hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `emp_id` varchar(50) NOT NULL COMMENT 'yymmxxx 001 by year',
  `prev_suff` varchar(10) DEFAULT NULL,
  `emp_name` varchar(50) NOT NULL,
  `rear_suff` varchar(10) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `blood_group` varchar(2) DEFAULT NULL,
  `religion` varchar(10) DEFAULT NULL,
  `p_of_birth` varchar(20) DEFAULT NULL COMMENT 'place_of_birth',
  `d_of_birth` date DEFAULT NULL COMMENT 'date_of_birth',
  `mother_name` varchar(40) DEFAULT NULL,
  `father_name` varchar(40) DEFAULT NULL,
  `id_kk` varchar(30) DEFAULT NULL,
  `id_card` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `desa_id` varchar(50) DEFAULT NULL,
  `kec_id` varchar(50) DEFAULT NULL,
  `kab_id` varchar(20) DEFAULT NULL,
  `prov_id` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `education` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'SD Tidak Tamat',
  `majoring` varchar(50) DEFAULT NULL,
  `marital` varchar(10) DEFAULT NULL,
  `num_of_child` int(11) DEFAULT NULL,
  `phone_1` varchar(20) DEFAULT NULL,
  `phone_2` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `resign` int(11) DEFAULT 0,
  `resign_date` date DEFAULT NULL,
  `resign_note` varchar(100) DEFAULT NULL,
  `locked` int(11) DEFAULT 0,
  `photolink` varchar(255) DEFAULT 'avatar.png',
  `division` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `position` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sch_id` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT 'NS',
  `entry_by` varchar(20) DEFAULT NULL,
  `entry_time` datetime DEFAULT NULL,
  `update_by` varchar(20) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `prev_suff`, `emp_name`, `rear_suff`, `join_date`, `gender`, `blood_group`, `religion`, `p_of_birth`, `d_of_birth`, `mother_name`, `father_name`, `id_kk`, `id_card`, `address`, `desa_id`, `kec_id`, `kab_id`, `prov_id`, `kode_pos`, `education`, `majoring`, `marital`, `num_of_child`, `phone_1`, `phone_2`, `email`, `resign`, `resign_date`, `resign_note`, `locked`, `photolink`, `division`, `position`, `sch_id`, `entry_by`, `entry_time`, `update_by`, `update_time`) VALUES
('1000001', 'Ir. H.', 'TESTER', 'S.E.', '2000-01-01', 'P', 'A', 'Islam', 'Cilacap', '1972-05-20', '', '', '', '', 'Jl. Gandaria Barat No 77', '', '32.01.07', '32.01', '32', '', 'S1', '', 'K', 3, '081288765', '', 'priyadiwijaya123@gmail.com ', 0, '0000-00-00', '', 0, 'user_1000001_305101186.png', 'Produksi', 'HR Staff', 'NS', 'demo_1', '2020-05-16 17:26:58', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `education` (`education`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD CONSTRAINT `tbl_employee_ibfk_1` FOREIGN KEY (`education`) REFERENCES `tb_r_education` (`education`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
