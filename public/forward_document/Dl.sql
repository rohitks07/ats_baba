-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2019 at 05:56 AM
-- Server version: 5.7.27
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baba_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forward_candidate_exp_required`
--

CREATE TABLE `tbl_forward_candidate_exp_required` (
  `id` int(11) NOT NULL,
  `forward_candidate_id` varchar(10) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `yrs_of_exp` varchar(20) NOT NULL,
  `org_id` varchar(256) NOT NULL,
  `expertise_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forward_candidate_exp_required`
--

INSERT INTO `tbl_forward_candidate_exp_required` (`id`, `forward_candidate_id`, `skills`, `yrs_of_exp`, `org_id`, `expertise_level`) VALUES
(1, '1422', 'fgdfg', 'fdgdf', '3', 'vcxcvsr'),
(2, '1422', 'FTHGHBGD', 'GHHD', '3', 'DA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_forward_candidate_exp_required`
--
ALTER TABLE `tbl_forward_candidate_exp_required`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_forward_candidate_exp_required`
--
ALTER TABLE `tbl_forward_candidate_exp_required`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
