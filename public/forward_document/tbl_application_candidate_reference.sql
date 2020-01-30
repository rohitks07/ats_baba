-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 01:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_application_candidate_reference`
--

CREATE TABLE `tbl_application_candidate_reference` (
  `id` int(11) NOT NULL,
  `forward_candidate_id` varchar(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `officialEmail` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `clientName` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `org_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_application_candidate_reference`
--

INSERT INTO `tbl_application_candidate_reference` (`id`, `forward_candidate_id`, `fullname`, `officialEmail`, `designation`, `clientName`, `location`, `org_id`) VALUES
(1, '1422', '5454545FD4F545', 'HJH', 'JHJ4J34JHKJHKJ6787', '8787878', '78787887hjdhj', '3'),
(2, '1422', 'hjjhjsdhfjshdf78w4uhjfhjk', 'jhjskfdh78rhuryhys8fuhwo78yq87hu', 'hhiury9847uhufiy', 'h78y4yuhw78rygfg', '77yuwg', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_application_candidate_reference`
--
ALTER TABLE `tbl_application_candidate_reference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_application_candidate_reference`
--
ALTER TABLE `tbl_application_candidate_reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
