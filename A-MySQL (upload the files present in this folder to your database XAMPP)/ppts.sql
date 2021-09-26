-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 01:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btao`
--

-- --------------------------------------------------------

--
-- Table structure for table `ppts`
--

CREATE TABLE `ppts` (
  `uploadedby` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'UNKNOWNUSER',
  `pptdrivelink` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `topics` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vstatus` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `uploadeddate` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppts`
--

INSERT INTO `ppts` (`uploadedby`, `pptdrivelink`, `subject`, `topics`, `branch`, `vstatus`, `uploadeddate`) VALUES
('btao', 'https://docs.google.com/presentation/d/17Ka2vnmVjP2YFJxsellD-0J2cAhKPYBBqtifUJ8dUns/edit?usp=sharing', 'Operating Systems', 'Virtual memory,page fault,demand paging,page replacement and frame allocation', 'cse', '2019-12-10', '2019-12-10 23:39:35'),
('btao', 'https://docs.google.com/presentation/d/1JefruaMoLVwQIMril_vdMjtPTcs03-g27WLuExyP8r8/edit?usp=sharing', 'Operating Systems', 'data and signals,Tramsmission Impairement,Data Rate Limits,Network Performance,Guided and unguided media,switching', 'cse', '2019-12-10', '2019-12-10 23:42:49'),
('btao', 'https://docs.google.com/presentation/d/1o39sEn8iBlrZBfQ7iN1jBw_xXWMadgPfcTvhIISnrf0/edit?usp=sharing', 'Operating Systems', 'Memory Management,paging,segmentation', 'cse', '2019-12-10', '2019-12-10 23:35:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppts`
--
ALTER TABLE `ppts`
  ADD PRIMARY KEY (`pptdrivelink`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
