-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2026 at 07:30 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_major`
--

CREATE TABLE `tbl_major` (
  `major_id` int(5) NOT NULL COMMENT 'รหัสสาขา',
  `major_name` varchar(250) DEFAULT NULL COMMENT 'ชื่อสาขา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_major`
--

INSERT INTO `tbl_major` (`major_id`, `major_name`) VALUES
(100, 'สาขาเทคโนโลยีสารสนเทศ'),
(200, 'สาขาวิทยาการคอมพิวเตอร์'),
(300, 'สาขาระบบสารสนเทศเพื่อการจัดการ'),
(400, 'สาขาวิทยาศาสตร์'),
(500, 'สาขาฟิสิก'),
(999, 'เกศาส');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `std_di` char(10) NOT NULL COMMENT 'รหัสนักศึกษา',
  `std_name` char(200) DEFAULT NULL COMMENT 'ชื่อนักศึกษา',
  `std_address` varchar(400) DEFAULT NULL COMMENT 'ที่อยู่',
  `std_birth` date DEFAULT NULL COMMENT 'วันเกิด',
  `std_gender` char(10) DEFAULT NULL COMMENT 'เพศ',
  `major_id` int(5) DEFAULT NULL COMMENT 'รหัสสาขา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`std_di`, `std_name`, `std_address`, `std_birth`, `std_gender`, `major_id`) VALUES
('6840214121', 'อภิชาติ', 'ไม่บอก', '2025-10-07', 'หญิง', 999),
('6840214130', 'Aphichat', 'กรุงเทพ', '2025-07-09', 'ชาย', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_major`
--
ALTER TABLE `tbl_major`
  ADD PRIMARY KEY (`major_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`std_di`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
