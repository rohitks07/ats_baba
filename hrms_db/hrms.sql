-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2019 at 07:33 AM
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
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `currency` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(8) NOT NULL,
  `admin_username` varchar(80) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_username`, `admin_password`, `type`) VALUES
(1, 'admin', '$2y$10$ANVYWi5aLSeyUPfNIISkMuDHMknuq4oMwVNITBmzYDnGNyMR2zm5C', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ad_codes`
--

CREATE TABLE `tbl_ad_codes` (
  `ID` int(4) NOT NULL,
  `bottom` text,
  `right_side_1` text,
  `right_side_2` text,
  `google_analytics` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applications_notes`
--

CREATE TABLE `tbl_applications_notes` (
  `id` int(11) NOT NULL,
  `job_application_id` int(11) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `privacy_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ar_agreement`
--

CREATE TABLE `tbl_ar_agreement` (
  `agreement_id` int(11) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `org_id` varchar(50) NOT NULL,
  `doc_id` varchar(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `signature` varchar(70) NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `last_updated_by` varchar(70) NOT NULL,
  `last_updated_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ar_contact_type`
--

CREATE TABLE `tbl_ar_contact_type` (
  `id` int(11) NOT NULL,
  `contact_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ar_customers`
--

CREATE TABLE `tbl_ar_customers` (
  `id` int(11) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `customer_name` varchar(70) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `org_type` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone_w` varchar(50) NOT NULL,
  `phone_h` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `sort_name` varchar(70) NOT NULL,
  `company_desc` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `last_updated_by` varchar(50) NOT NULL,
  `created_date` varchar(60) NOT NULL,
  `last_updated_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ar_customer_contact`
--

CREATE TABLE `tbl_ar_customer_contact` (
  `id` int(11) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `customer_id` varchar(70) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `cont_per_name` varchar(60) NOT NULL,
  `phone_c` varchar(60) NOT NULL,
  `phone_w` varchar(60) NOT NULL,
  `email_h` varchar(60) NOT NULL,
  `email_w` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `dated` varchar(256) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `last_updated_by` varchar(60) NOT NULL,
  `last_updated_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ar_customer_relation`
--

CREATE TABLE `tbl_ar_customer_relation` (
  `id` int(11) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `contact_id` varchar(50) NOT NULL,
  `title` varchar(60) NOT NULL,
  `contact_type` varchar(60) NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `last_updated_date` varchar(50) NOT NULL,
  `last_updated_by` varchar(70) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ar_work_order`
--

CREATE TABLE `tbl_ar_work_order` (
  `id` int(11) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `agreement_id` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `invoice_period` varchar(50) NOT NULL,
  `invoice_cycle` varchar(50) NOT NULL,
  `pay_term` varchar(50) NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `last_updated_by` varchar(70) NOT NULL,
  `last_updated_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_link_generation`
--

CREATE TABLE `tbl_candidate_link_generation` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `forward_by` varchar(150) NOT NULL,
  `forward_to` varchar(150) NOT NULL,
  `cc` varchar(150) NOT NULL,
  `bcc` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidate_notes`
--

CREATE TABLE `tbl_candidate_notes` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `privacy_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `ID` int(11) NOT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '1',
  `city_slug` varchar(150) NOT NULL,
  `city_name` varchar(150) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `sort_order` int(3) NOT NULL DEFAULT '998',
  `country_ID` int(11) NOT NULL DEFAULT '1',
  `is_popular` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`ID`, `show`, `city_slug`, `city_name`, `state`, `sort_order`, `country_ID`, `is_popular`) VALUES
(1, 1, '', 'Jamshedpur', 'Jharkhand', 998, 1, 'no'),
(2, 1, '', NULL, 'CA', 998, 2, 'no'),
(3, 1, '', NULL, 'TX', 998, 2, 'no'),
(4, 1, '', NULL, 'NC', 998, 2, 'no'),
(5, 1, '', NULL, 'FL', 998, 2, 'no'),
(6, 1, '', NULL, 'WA', 998, 2, 'no'),
(7, 1, '', NULL, 'OR', 998, 2, 'no'),
(8, 1, '', NULL, 'AZ', 998, 2, 'no'),
(9, 1, '', NULL, 'MA', 998, 2, 'no'),
(10, 1, '', NULL, 'OH', 998, 2, 'no'),
(11, 1, '', NULL, 'NY', 998, 2, 'no'),
(12, 1, '', NULL, 'NJ', 998, 2, 'no'),
(13, 1, '', NULL, 'GA', 998, 2, 'no'),
(14, 1, '', NULL, 'WI', 998, 2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE `tbl_cms` (
  `pageID` int(11) NOT NULL,
  `pageTitle` varchar(100) DEFAULT NULL,
  `pageSlug` varchar(100) DEFAULT NULL,
  `pageContent` text,
  `pageImage` varchar(100) DEFAULT NULL,
  `pageParentPageID` int(11) DEFAULT '0',
  `dated` datetime DEFAULT CURRENT_TIMESTAMP,
  `pageStatus` enum('Inactive','Published') DEFAULT 'Inactive',
  `seoMetaTitle` varchar(100) DEFAULT NULL,
  `seoMetaKeyword` varchar(255) DEFAULT NULL,
  `seoMetaDescription` varchar(255) DEFAULT NULL,
  `seoAllowCrawler` tinyint(1) DEFAULT '1',
  `pageCss` text,
  `pageScript` text,
  `menuTop` tinyint(4) DEFAULT '0',
  `menuBottom` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companies`
--

CREATE TABLE `tbl_companies` (
  `ID` int(11) NOT NULL,
  `company_name` varchar(155) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `company_ceo` varchar(60) DEFAULT NULL,
  `industry_ID` int(5) DEFAULT NULL,
  `ownership_type` enum('NGO','Private','Public') DEFAULT 'Private',
  `company_description` text,
  `company_location` varchar(155) DEFAULT NULL,
  `company_location_one` varchar(255) DEFAULT NULL,
  `company_csz` varchar(225) NOT NULL,
  `no_of_offices` int(11) DEFAULT NULL,
  `company_website` varchar(155) DEFAULT NULL,
  `no_of_employees` varchar(15) DEFAULT NULL,
  `established_in` varchar(12) DEFAULT NULL,
  `company_type` varchar(60) DEFAULT NULL,
  `company_fax` varchar(30) DEFAULT NULL,
  `company_phone` varchar(30) DEFAULT NULL,
  `company_logo` varchar(155) DEFAULT NULL,
  `company_folder` varchar(155) DEFAULT NULL,
  `company_country` varchar(80) DEFAULT NULL,
  `company_state` varchar(100) NOT NULL,
  `sts` enum('blocked','pending','active') DEFAULT 'active',
  `company_city` varchar(80) DEFAULT NULL,
  `company_slug` varchar(155) DEFAULT NULL,
  `old_company_id` int(11) DEFAULT NULL,
  `old_employerlogin` varchar(100) DEFAULT NULL,
  `flag` varchar(5) DEFAULT NULL,
  `ownership_type` varchar(20) DEFAULT NULL,
  `federal_id` varchar(255) DEFAULT NULL,
  `duns` varchar(20) DEFAULT NULL,
  `loc_time_zone` varchar(255) NOT NULL,
  `dis_time_zone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_companies`
--

INSERT INTO `tbl_companies` (`ID`, `company_name`, `company_email`, `company_ceo`, `industry_ID`, `ownership_type`, `company_description`, `company_location`, `company_location_one`, `company_csz`, `no_of_offices`, `company_website`, `no_of_employees`, `established_in`, `company_type`, `company_fax`, `company_phone`, `company_logo`, `company_folder`, `company_country`, `company_state`, `sts`, `company_city`, `company_slug`, `old_company_id`, `old_employerlogin`, `flag`, `ownership_type`, `federal_id`, `duns`, `loc_time_zone`, `dis_time_zone`) VALUES
(1, 'IT SCIENT', 'sumant@itscient.com', NULL, 22, 'Private', 'Test', 'A-40, B-726, Ithum Tower, Sector 62, Noida, Uttar Pradesh 201301', NULL, ' ', NULL, 'www.itscient.com', '101-300', NULL, NULL, NULL, NULL, '354455093.png', NULL, 'India', 'Jharkhand', 'active', 'Jamshedpur', NULL, NULL, NULL, NULL, NULL, '253255252', NULL, '(GMT+05:30) India Standard Time (IST)', '(GMT+05:30) India Standard Time (IST)'),
(2, 'ITSCIENT', 'sumit.m@itscient.com', NULL, 22, 'Private', 'hi this is sumit as employer for post.', 'Adityapur', 'Sakchi', ' ', NULL, 'www.itscient.com', '1-10', NULL, NULL, NULL, NULL, '1158705863.png', NULL, 'India', 'Jharkhand', 'active', 'Jamshedpur', NULL, NULL, NULL, NULL, NULL, '123456789', NULL, '(GMT+05:30) India Standard Time (IST)', '(GMT+05:30) India Standard Time (IST)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `ID` int(11) NOT NULL,
  `country_name` varchar(150) NOT NULL DEFAULT '',
  `country_citizen` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`ID`, `country_name`, `country_citizen`) VALUES
(1, 'India', 'indian'),
(2, 'USA', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_degree`
--

CREATE TABLE `tbl_degree` (
  `id` int(11) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `degree_name` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_degree`
--

INSERT INTO `tbl_degree` (`id`, `degree_id`, `degree_name`, `status`) VALUES
(1, 1, 'BE/B.tech', 1),
(2, 3, 'MCA', 1),
(3, 4, 'BSC', 1),
(4, 5, 'MSC', 1),
(5, 6, 'B.com', 1),
(6, 7, 'M.Com', 1),
(7, 8, 'BBA', 1),
(8, 9, 'MBA', 1),
(9, 10, 'M.TECH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document_type`
--

CREATE TABLE `tbl_document_type` (
  `id` int(11) NOT NULL,
  `document_type` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_content`
--

CREATE TABLE `tbl_email_content` (
  `ID` int(11) NOT NULL,
  `email_name` varchar(155) DEFAULT NULL,
  `from_name` varchar(155) DEFAULT NULL,
  `content` text,
  `from_email` varchar(90) DEFAULT NULL,
  `subject` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_list`
--

CREATE TABLE `tbl_email_list` (
  `id` int(11) NOT NULL,
  `employer_id` varchar(100) NOT NULL,
  `email_list_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `privacy_flag` varchar(100) NOT NULL,
  `active_flag` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL,
  `last_updated_date` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `last_updated_by` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_list_contacts`
--

CREATE TABLE `tbl_email_list_contacts` (
  `id` int(11) NOT NULL,
  `employer_id` varchar(100) DEFAULT NULL,
  `email_list_id` varchar(100) DEFAULT NULL,
  `email_list_name` varchar(60) DEFAULT NULL,
  `email_contact_id` varchar(100) NOT NULL,
  `salutation` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `add_in_contact_db` varchar(11) NOT NULL,
  `unsub_date` varchar(100) DEFAULT NULL,
  `unsub_by` varchar(100) DEFAULT NULL,
  `created_date` date NOT NULL,
  `last_updated_date` date NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `last_updated_by` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_template`
--

CREATE TABLE `tbl_email_template` (
  `et_id` int(11) NOT NULL,
  `employer_id` varchar(50) DEFAULT NULL,
  `et_sender_name` varchar(200) NOT NULL,
  `et_sender_email` varchar(255) NOT NULL,
  `et_cc_emails` varchar(255) NOT NULL,
  `et_title` varchar(255) NOT NULL,
  `et_subject` varchar(255) NOT NULL,
  `et_content` text NOT NULL,
  `created_date` date NOT NULL,
  `last_updated_date` date NOT NULL,
  `et_status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `ID` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `employee_code` varchar(255) NOT NULL,
  `employee_uniq_Id` varchar(255) NOT NULL,
  `name_prefix` varchar(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(70) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mode_of_employment` varchar(255) NOT NULL,
  `employee_role` varchar(255) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_department` varchar(255) NOT NULL,
  `employement_status` varchar(255) NOT NULL,
  `employee_image` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `leaving_date` date NOT NULL,
  `years_experince` varchar(255) NOT NULL,
  `work_tel_no` varchar(50) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_document`
--

CREATE TABLE `tbl_employee_document` (
  `doc_ID` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `document_type` varchar(60) NOT NULL,
  `sub_document_type` varchar(100) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `document_file` varchar(255) NOT NULL,
  `active_flag` varchar(50) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_date` date NOT NULL,
  `active_start_date` varchar(60) NOT NULL,
  `active_end_date` varchar(60) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `last_updated_date` date NOT NULL,
  `last_updated_by` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employers`
--

CREATE TABLE `tbl_employers` (
  `ID` int(11) NOT NULL,
  `company_ID` int(6) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass_code` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `mobile_phone` varchar(30) DEFAULT NULL,
  `gender` enum('female','male') DEFAULT NULL,
  `dated` date NOT NULL,
  `sts` enum('blocked','pending','active') NOT NULL DEFAULT 'active',
  `dob` date DEFAULT NULL,
  `home_phone` varchar(30) DEFAULT NULL,
  `verification_code` varchar(155) DEFAULT NULL,
  `first_login_date` datetime DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `old_emp_id` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `present_address` varchar(155) DEFAULT NULL,
  `top_employer` enum('no','yes') DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employers`
--

INSERT INTO `tbl_employers` (`ID`, `company_ID`, `email`, `pass_code`, `first_name`, `last_name`, `country`, `state`, `city`, `mobile_phone`, `gender`, `dated`, `sts`, `dob`, `home_phone`, `verification_code`, `first_login_date`, `last_login_date`, `ip_address`, `old_emp_id`, `flag`, `present_address`, `top_employer`) VALUES
(1, 1, 'sumant@itscient.com', '123456789', 'Sumant Singh', NULL, 'India', 'Jharkhand', 'Jamshedpur', '9311959563', NULL, '2019-09-24', 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no'),
(2, 2, 'sumit.m@itscient.com', 'sumit123', 'Sumit M', NULL, 'India', 'Jharkhand', 'Jamshedpur', '9888525552', NULL, '2019-09-24', 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_experience`
--

CREATE TABLE `tbl_experience` (
  `id` int(11) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `exp_digit` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favourite_candidates`
--

CREATE TABLE `tbl_favourite_candidates` (
  `employer_id` int(11) NOT NULL,
  `seekerid` int(11) DEFAULT NULL,
  `employerlogin` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favourite_companies`
--

CREATE TABLE `tbl_favourite_companies` (
  `seekerid` int(11) NOT NULL,
  `companyid` int(11) DEFAULT NULL,
  `seekerlogin` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forward_candidate`
--

CREATE TABLE `tbl_forward_candidate` (
  `ID` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job_seeker_id` int(11) NOT NULL,
  `forward_by` varchar(150) NOT NULL,
  `forward_to` varchar(150) NOT NULL,
  `cc` varchar(150) DEFAULT NULL,
  `bcc` varchar(100) DEFAULT NULL,
  `subject` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `forward_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ssn` varchar(60) DEFAULT NULL,
  `visa_status` varchar(250) NOT NULL,
  `notice_period` varchar(100) DEFAULT NULL,
  `yearExp` varchar(100) NOT NULL,
  `monthExp` varchar(100) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `current_ctc` varchar(150) DEFAULT NULL,
  `pay_min` varchar(100) NOT NULL,
  `pay_max` varchar(100) NOT NULL,
  `panNumber` varchar(250) DEFAULT NULL,
  `institute` varchar(250) DEFAULT NULL,
  `current_org` varchar(100) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `qualification1` varchar(100) DEFAULT NULL,
  `prefer_location` varchar(100) DEFAULT NULL,
  `passyear` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `entered` varchar(100) DEFAULT NULL,
  `relocation` varchar(100) NOT NULL,
  `telephonicinterview` varchar(100) NOT NULL,
  `personinterview` varchar(100) NOT NULL,
  `availibilitynewproj` varchar(100) DEFAULT NULL,
  `expectedrate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forward_candidate`
--

INSERT INTO `tbl_forward_candidate` (`ID`, `job_id`, `job_seeker_id`, `forward_by`, `forward_to`, `cc`, `bcc`, `subject`, `content`, `forward_date`, `ssn`, `visa_status`, `notice_period`, `yearExp`, `monthExp`, `fullname`, `mobile`, `email`, `current_ctc`, `pay_min`, `pay_max`, `panNumber`, `institute`, `current_org`, `qualification`, `qualification1`, `prefer_location`, `passyear`, `dob`, `entered`, `relocation`, `telephonicinterview`, `personinterview`, `availibilitynewproj`, `expectedrate`) VALUES
(1, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:29:20', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(2, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:32:42', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(3, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:32:45', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(4, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:33:07', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(5, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:35:19', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(6, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:37:31', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(7, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:39:50', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(8, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:40:52', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(9, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:43:58', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(10, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:44:22', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(11, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:44:46', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(12, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:45:16', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(13, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:48:44', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(14, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:49:26', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(15, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:49:34', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(16, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:49:57', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(17, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:50:25', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(18, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:52:30', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(19, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:52:45', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(20, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:54:16', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(21, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:54:50', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(22, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:55:06', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(23, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:55:44', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(24, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:55:50', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(25, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:56:34', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(26, 2, 1, 'sumit.m@itscient.com', 'danoy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:56:47', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(27, 2, 1, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:57:40', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(28, 2, 1, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 10:59:56', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(29, 2, 1, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 11:00:47', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(30, 2, 1, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 11:01:04', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(31, 2, 1, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'testing', '<p>this is testing</p>', '2019-09-24 11:01:19', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'krjhhjgr', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'kjdsfvs', NULL, '2017', '2006-02-03', NULL, 'Y', 'Y', 'Y', NULL, '15000'),
(32, 2, 1, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'test2', '<p>again</p>', '2019-09-24 11:05:13', '2514', 'US Citizen', NULL, '0', '0', 'Rohit', '8574961230', 'rohit45@gmail.com', 'gter', '20k', '25k', NULL, 'Vikekanand College', NULL, NULL, 'yryrt', NULL, '2017', '2006-02-03', 'lklkjdf', 'Y', 'Y', 'Y', 'Y', '25000'),
(33, 16, 8, 'chandan.k@itscient.com', 'itscient.recruiter2017@gmail.com', NULL, NULL, 'Requirement for Position: Java Developer Location: Sunnyvale,CA', '<p><strong>Hi,</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;Please go through the requirement and let me know your interest.</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Position:&nbsp;Java&nbsp;Developer</strong></p>\r\n\r\n<p><strong>Location: Sunnyvale,CA</strong></p>\r\n\r\n<p><strong>Duration: Long term</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Job Description</strong><strong>:</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&bull; Core&nbsp;Java&nbsp;and Object-oriented development skills</strong></p>\r\n\r\n<p><strong>&bull; HTML/CSS</strong></p>\r\n\r\n<p><strong>&bull;&nbsp;knowledge of Java&nbsp;Script, Spring, Oracle, PL/SQL,Mongo DB</strong></p>\r\n\r\n<p><strong>&bull; Hibernate</strong></p>\r\n\r\n<p><strong>&bull; Familiarity and experience with SQL&nbsp;</strong></p>\r\n\r\n<p><strong>&bull; Strong communication skills</strong></p>\r\n\r\n<p><strong>&bull; Adapt to shifting priorities in a fastpaced, dynamic business environment</strong></p>', '2019-09-24 11:46:04', '4410', 'H1B', NULL, '2', '28', 'Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', '56', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'Bachelors in Information technology from JNTU, India (2011)', NULL, '2011', '1989-08-08', 'YES', 'YES', 'YES', 'YES', 'YES', '$50/hr on C2C'),
(34, 9, 9, 'subham.k@itscient.com', 'it.recruiter2017@gmail.com', NULL, NULL, 'Resume:UI Developer(Sindhuja namala)', '<p><strong>Hi Sir,</strong></p>\r\n\r\n<p><strong>&nbsp;Please find the details and attached resume and&nbsp;submit the profile for the position&nbsp; UI Developer.</strong></p>\r\n\r\n<p><strong>Match: Javascript, Reacts JS, Angular Js, UI&nbsp;developer, Node JS, Mustacle,JSX</strong></p>\r\n\r\n<p><strong>Gap: NA</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Candidate&rsquo;s Personal Details</strong></p>\r\n\r\n<p><strong><em>&nbsp;</em></strong></p>\r\n\r\n<p><strong>Full Name</strong></p>\r\n\r\n<p><strong>Sindhuja namala</strong></p>\r\n\r\n<p><strong>Phone (Primary)</strong></p>\r\n\r\n<p><strong>714-721-4144</strong></p>\r\n\r\n<p><strong>Email ID</strong></p>\r\n\r\n<p><strong>sindhuja.namala9@gmail.com</strong></p>\r\n\r\n<p><strong>Skype ID</strong></p>\r\n\r\n<p><strong>sindhuja.namala3</strong></p>\r\n\r\n<p><strong>LinkedIn ID</strong></p>\r\n\r\n<p><strong>&nbsp;https://www.linkedin.com/in/sindhujanamala/</strong></p>\r\n\r\n<p><strong>Current Location (City, State)</strong></p>\r\n\r\n<p><strong>Los&nbsp;Angeles,CA</strong></p>\r\n\r\n<p><strong>Qualification with University name &nbsp;and Passing Year</strong></p>\r\n\r\n<p><strong>Bachelors, 2010 JNTU HYD</strong></p>\r\n\r\n<p><strong>US Visa Status</strong></p>\r\n\r\n<p><strong>H1B</strong></p>\r\n\r\n<p><strong>DOB</strong></p>\r\n\r\n<p><strong>06/18/1988</strong></p>\r\n\r\n<p><strong>Passport Number:</strong></p>\r\n\r\n<p><strong>L6598808</strong></p>\r\n\r\n<p><strong>Last 4 digits SSN. No.&nbsp;</strong></p>\r\n\r\n<p><strong>1841</strong></p>\r\n\r\n<p><strong>Open for Relocation(Y/N)?</strong></p>\r\n\r\n<p><strong>Yes</strong></p>\r\n\r\n<p><strong>Availability for Telephone Interview</strong></p>\r\n\r\n<p><strong>Yes</strong></p>\r\n\r\n<p><strong>Availability for In-person Interview</strong></p>\r\n\r\n<p><strong>No</strong></p>\r\n\r\n<p><strong>Availability for new Project</strong></p>\r\n\r\n<p><strong>2 weeks prior notice&nbsp;</strong></p>\r\n\r\n<p><strong>Rate </strong></p>\r\n\r\n<p><strong>$60/Hr on C2C</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Experience summary</strong></p>\r\n\r\n<p><strong>Total it experience:8+Years</strong></p>\r\n\r\n<p><strong>Total US experience:6+Years</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Skills</strong></p>\r\n\r\n<p><strong>Years of experience</strong></p>\r\n\r\n<p><strong>Expertise level (0-10)</strong></p>\r\n\r\n<p><strong>[1=novice;10=expert]</strong></p>\r\n\r\n<p><strong>UI&nbsp;developer</strong></p>\r\n\r\n<p><strong>8+ years</strong></p>\r\n\r\n<p><strong>8</strong></p>\r\n\r\n<p><strong>Angular Js</strong></p>\r\n\r\n<p><strong>3+ years</strong></p>\r\n\r\n<p><strong>7</strong></p>\r\n\r\n<p><strong>Reacts JS</strong></p>\r\n\r\n<p><strong>3+ years</strong></p>\r\n\r\n<p><strong>7</strong></p>\r\n\r\n<p><strong>Mustacle,JSX</strong></p>\r\n\r\n<p><strong>1 + years</strong></p>\r\n\r\n<p><strong>6</strong></p>\r\n\r\n<p><strong>Node js</strong></p>\r\n\r\n<p><strong>3+ years</strong></p>\r\n\r\n<p><strong>7</strong></p>\r\n\r\n<p><strong>Javascript</strong></p>\r\n\r\n<p><strong>5+ years</strong></p>\r\n\r\n<p><strong>8</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Two reference form the last project with official ID &amp; Contact no:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Full name</strong></p>\r\n\r\n<p><strong>Email Id</strong></p>\r\n\r\n<p><strong>Designation</strong></p>\r\n\r\n<p><strong>Contact no</strong></p>\r\n\r\n<p><strong>Client name</strong></p>\r\n\r\n<p><strong>&nbsp;Suresh Gajula</strong></p>\r\n\r\n<p><strong>&nbsp;durga.gajula@davita.com</strong></p>\r\n\r\n<p><strong>&nbsp;Sr. Front End Developer</strong></p>\r\n\r\n<p><strong>&nbsp;361-207-3077</strong></p>\r\n\r\n<p><strong>&nbsp;Davita, CA</strong></p>\r\n\r\n<p><strong>&nbsp;Rakesh Kankanala</strong></p>\r\n\r\n<p><strong>&nbsp;rakesh.kankanala@davita.com</strong></p>\r\n\r\n<p><strong>&nbsp;Sr. Front End Developer</strong></p>\r\n\r\n<p><strong>&nbsp;6782088786</strong></p>\r\n\r\n<p><strong>&nbsp;Davita, CA</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Employer&#39;s Details:</strong></p>\r\n\r\n<p><strong>Suman</strong></p>\r\n\r\n<p><strong><em>Unicorn Technologies, LLC</em>&nbsp;|&nbsp;www.unicorntek.com</strong></p>\r\n\r\n<p><strong>suman@unicorntek.com&nbsp;|Ph:&nbsp;(678)-400-7958&nbsp;|</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thanks and Regards</strong></p>\r\n\r\n<p><strong>Subham Kumar Dey</strong></p>\r\n\r\n<p><strong>IT&nbsp; Recruiter</strong></p>\r\n\r\n<p><strong>Ph.No:510-516-7885</strong></p>\r\n\r\n<p><strong>Email ID: subham.k@itscient.com</strong></p>\r\n\r\n<p><strong>IT-SCIENT LLC |Fremont,CA II Web:&nbsp;www.itscient.com</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2019-09-24 12:05:06', '1841', 'H-B1', NULL, '3', '40', 'Sindhuja', '7147214144', 'sindhuja.namala9@gmail.com', NULL, '55k', '60k', NULL, 'JNTU', 'Davita', NULL, 'Bachelors, 2010 JNTU HYD', NULL, '2010', '1988-06-18', NULL, 'Yes', 'Yes', 'No', 'Immediate', '$60/Hr on C2C'),
(35, 10, 5, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'this test', '<p>thia thjhassasas<strong>sasasasas<em>saasasasassasassasasa</em></strong></p>', '2019-09-24 12:10:43', '8896', 'US Citizen', NULL, '0', '0', 'Disha', '9728223017', 'dlakhankar@gmail.com', '67', '55k', '60k', NULL, 'Cleveland State University', NULL, NULL, 'diploma, akp', NULL, '2015', '1985-08-07', 'y', 'y', 'y', 'y', 'y', '6767'),
(36, 10, 5, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'this test', '<p>thia thjhassasas<strong>sasasasas<em>saasasasassasassasasa</em></strong></p>', '2019-09-24 12:11:22', '8896', 'US Citizen', NULL, '0', '0', 'Disha', '9728223017', 'dlakhankar@gmail.com', '67', '55k', '60k', NULL, 'Cleveland State University', NULL, NULL, 'diploma, akp', NULL, '2015', '1985-08-07', 'y', 'y', 'y', 'y', 'y', '6767'),
(37, 10, 5, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'this test', '<p>thia thjhassasas<strong>sasasasas<em>saasasasassasassasasa</em></strong></p>', '2019-09-24 12:12:22', '8896', 'US Citizen', NULL, '0', '0', 'Disha', '9728223017', 'dlakhankar@gmail.com', '67', '55k', '60k', NULL, 'Cleveland State University', NULL, NULL, 'diploma, akp', NULL, '2015', '1985-08-07', 'y', 'y', 'y', 'y', 'y', '6767'),
(38, 16, 8, 'arpita.s@itscient.com', 'shreya.b@itscient.com', NULL, NULL, 'resume: java developer', '<p>Hello sreya,</p>\r\n\r\n<p>&nbsp;</p>', '2019-09-24 12:22:58', '4512', 'H1b', NULL, '2', '28', 'Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', '55', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'b. tech', NULL, '2011', '1989-08-08', '2015', 'Yes', 'Yes', 'Yes', 'Yes', '65'),
(39, 10, 5, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'test95', '<p>ssn number testing</p>', '2019-09-24 12:28:48', '1425', 'US Citizen', NULL, '0', '0', 'Disha', '9728223017', 'dlakhankar@gmail.com', 'jhf', '55k', '60k', NULL, 'Cleveland State University', NULL, NULL, 'oihhoihi', NULL, '2015', '1985-08-07', 'lklkjdf', 'Yes', 'No', 'Yes', 'Yes', '24000'),
(40, 16, 8, 'chandan.k@itscient.com', 'itscient.recruiter2017@gmail.com', NULL, NULL, 'Requirement for Position  Java Developer Location: Sunnyvale,CA', '<p><strong>Hi,</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;Please go through the requirement and let me know your interest.</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Position:&nbsp;Java&nbsp;Developer</strong></p>\r\n\r\n<p><strong>Location: Sunnyvale,CA</strong></p>\r\n\r\n<p><strong>Duration: Long term</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Job Description</strong><strong>:</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&bull; Core&nbsp;Java&nbsp;and Object-oriented development skills</strong></p>\r\n\r\n<p><strong>&bull; HTML/CSS</strong></p>\r\n\r\n<p><strong>&bull;&nbsp;knowledge of Java&nbsp;Script, Spring, Oracle, PL/SQL,Mongo DB</strong></p>\r\n\r\n<p><strong>&bull; Hibernate</strong></p>\r\n\r\n<p><strong>&bull; Familiarity and experience with SQL&nbsp;</strong></p>\r\n\r\n<p><strong>&bull; Strong communication skills</strong></p>\r\n\r\n<p><strong>&bull; Adapt to shifting priorities in a fastpaced, dynamic business environment</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2019-09-24 12:30:55', '4410', 'H-B1', NULL, '2', '28', 'Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', '56', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'Bachelors in Information technology', NULL, '2011', '1989-08-08', 'YES', 'Yes', 'Yes', 'Yes', 'Yes', '$50/hr on C2C'),
(41, 9, 9, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'test99', '<p>testing</p>', '2019-09-24 12:31:35', 'dvfg', 'H-B1', NULL, '3', '40', 'Sindhuja', '7147214144', 'sindhuja.namala9@gmail.com', 'drffr', '55k', '60k', NULL, 'JNTU', 'Davita', NULL, 'ewfwe', NULL, '2010', '1988-06-18', 'fgfg', 'Yes', 'Yes', 'Yes', 'Yes', '45000'),
(42, 16, 8, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'testing', '<p>ghfhhfhg</p>', '2019-09-24 12:33:30', 'sfrg', 'H-B1', NULL, '2', '28', 'Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', 'fghf', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'tyrtyry', NULL, '2011', '1989-08-08', 'fgh', 'Yes', 'Yes', 'Yes', 'Yes', '24000'),
(43, 16, 8, 'shreya.b@itscient.com', 'arpita.s@ITSCIENT.COM', NULL, NULL, 'RESUME', '<p>HELLO ARPITA,</p>', '2019-09-24 12:37:17', '1234', 'H-B1', NULL, '2', '28', 'Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', '55', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'B.TECH IN COMPUTER SCIENCE', NULL, '2011', '1989-08-08', 'F1,2015', 'Yes', 'Yes', 'No', 'Yes', '45'),
(44, 19, 15, 'sharmistha.d@itscient.com', 'resu.r@itscient.com', NULL, NULL, 'Resume-UI Developer', '<p>Hello Sir,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please find the attached&nbsp;resume&nbsp;and details for UI Developer at SanJose,CA.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Candidate&rsquo;s Personal Details</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Full Name</p>\r\n\r\n<p>Sushil Kumar Rajbhandari</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Phone (Primary)</p>\r\n\r\n<p>8319172709</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Email ID</p>\r\n\r\n<p>Rajbhandari.Sushil@gmail.com</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Skype ID</p>\r\n\r\n<p>SushilRajbhandari2014</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Current Location</p>\r\n\r\n<p>Bothell, WA</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Qualification with University name &nbsp;and Passing Year</p>\r\n\r\n<p>Bachelor in Business Administration from Tribhuvan University, Kathmandu (1993)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Masters Details(University name &nbsp;and Passing Year)</p>\r\n\r\n<p>Masters in Business Administration from Tribhuvan University, Kathmandu (1996)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Passport No</p>\r\n\r\n<p>493615251</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>US Visa Status</p>\r\n\r\n<p>US CITIZEN</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Last 4 digits SSN. No.&nbsp;</p>\r\n\r\n<p>6810</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>DOB</p>\r\n\r\n<p>01/14/1971</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Availability to Start</p>\r\n\r\n<p>2 Weeks</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Availability for Telephonic Interview</p>\r\n\r\n<p>Yes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Willing to relocate:</p>\r\n\r\n<p>Yes</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Availability for face to face Interview :</p>\r\n\r\n<p>No</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Interviews/ Offers in Pipeline</p>\r\n\r\n<p>No</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Notice Period/ LWD on last project</p>\r\n\r\n<p>1 Week</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Rate</p>\r\n\r\n<p>$67 on C2C</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Total IT Experience- &nbsp;&nbsp;&nbsp;8 + years</p>\r\n\r\n<p>Total US Experience- &nbsp;&nbsp;8 + Years</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Skills</strong></p>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Years of</strong></p>\r\n\r\n<p><strong>Experience/Exposure</strong></p>\r\n\r\n<p><strong>Expertise Level (0&nbsp;&ndash;&nbsp;10)</strong></p>\r\n\r\n<p><strong>[1=Novice; 10=Expert]</strong></p>\r\n\r\n<p>Angular</p>\r\n\r\n<p>5 Years</p>\r\n\r\n<p>9</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Employer Detail:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Anik Reddy</p>\r\n\r\n<p>IT Sales Recruiter |&nbsp;TECHNUMEN, Inc</p>\r\n\r\n<p>242 Old New Brunswick Rd, Suite #310, Piscataway NJ - 08854</p>\r\n\r\n<p>Ph: 732-802-7013 | Email:&nbsp;anik@technumen.com</p>\r\n\r\n<p>&nbsp;</p>', '2019-09-24 12:48:32', '6810', 'US Citizen', NULL, '0', '5', 'Sushil', '8319172709', 'Rajbhandari.Sushil@gmail.com', '$62/hr', '55k', '60k', NULL, 'Tribhuvan University', 'Century Link', NULL, 'Bachelor in Business Administration from Tribhuvan University, Kathmandu (1993)', NULL, '1993', '1971-01-14', 'US Citizen', 'Yes', 'Yes', 'No', 'Yes', '$65/hr'),
(45, 16, 8, 'shreya.b@itscient.com', 'arpita.s@ITSCIENT.COM', NULL, NULL, 'RESUME', '<p>Hi ,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hope you are doing well.</p>\r\n\r\n<p>Please go through the job description and let me know your interest. Please</p>\r\n\r\n<p>Revert back with updated resumes at shreya.b@itscient.com</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Job Title</strong>:&nbsp;Scrum&nbsp;Master</p>\r\n\r\n<p><strong>Location</strong>:&nbsp;Plano, TX&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Duration</strong>:&nbsp; 12+ Months</p>\r\n\r\n<p>Desired years of experience: 5+ Years</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Job Details:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Responsibilities of&nbsp;Scrum&nbsp;Master.</p>\r\n\r\n<p>&bull; Responsible for managing the&nbsp;scrum&nbsp;process with the coordination of&nbsp;scrum&nbsp;team in agile methodology.</p>\r\n\r\n<p>&bull; Responsible to remove the impediments for the&nbsp;scrum&nbsp;team.</p>\r\n\r\n<p>&bull; Arranged daily stand-up meetings, facilitate meetings, schedule meetings, demo and decision-making processes in order to ensure quick inspection and proper use of adaptation process.</p>\r\n\r\n<p>&bull; Helps product owner to make the product backlogs in good shape and make them ready for the next sprint.</p>\r\n\r\n<p>&bull; Responsible to conduct retrospective meetings.</p>\r\n\r\n<p>&bull; Organizes and facilitates the sprint planning meeting.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Technical skills</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; Knowledge of agile methodology and frameworks like&nbsp;Scrum, Kanban, XP, etc.</p>\r\n\r\n<p>&bull; Good skills to coach team how to follow agile&nbsp;scrum, which really works.</p>\r\n\r\n<p>&bull; Understand the basic fundamentals of iterative and incremental development.</p>\r\n\r\n<p>&bull; Strong knowledge of&nbsp;Scrum&nbsp;theory, rules and practices.</p>\r\n\r\n<p>&bull; Knowledge of other agile approaches, like: Kanban, Crystal, FDD, XP, etc.</p>\r\n\r\n<p>&bull; Knowledge about other methodologies other than Agile-Scrum, so that he can explain other methodologies to motivate his team.</p>\r\n\r\n<p>&bull; Basic knowledge of software development processes and procedures to understand his team needs.</p>\r\n\r\n<p>&bull; He should have knowledge about agile techniques like: User Stories, Continuous Integration, ATDD, TDD, Continuous Testing, Pairing, Automated Testing, and Agile Games.</p>\r\n\r\n<p>&bull; Ability to take and understand his commitment to deliver the product on time.</p>\r\n\r\n<p>&bull; Know about the value of metrics and incremental delivery.</p>\r\n\r\n<p>&bull; Knowledge about tasks, backlog tracking, burn down metrics, velocity, user stories etc.</p>\r\n\r\n<p>&bull; Familiar with common development practices, Service oriented environments, and Agile practices.</p>\r\n\r\n<p>&bull; Programming Languages: Java and Knowledge of agile methodology and frameworks like&nbsp;Scrum, Kanban, XP, etc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks and regards,<br />\r\nShreya Bose<br />\r\nTechnical Recruiter<br />\r\n|| IT-SCIENT || Phone: 510-516-7825 || Fax: 877.701.4872 ||<br />\r\nEmail:&nbsp;shreya.b@itscient.com&nbsp;|| Web:&nbsp;www.itscient.com&nbsp;|| &nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2019-09-24 12:49:30', '3445', 'H-B1', NULL, '2', '28', 'raj Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', '55', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'B.TECH IN COMPUTER SCIENCE', NULL, '2011', '1989-08-08', 'fi,2013', 'Yes', 'Yes', 'Yes', 'Yes', '56'),
(46, 16, 8, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'testing', '<p>lkkjrfjger</p>', '2019-09-24 12:50:27', '1425', 'H-B1', NULL, '2', '28', 'Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', 'krjhhjgr', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'kjdsfvs', NULL, '2011', '1989-08-08', 'lklkjdf', 'Yes', 'Yes', 'Yes', 'Yes', '24000'),
(47, 16, 8, 'samiksha.s@itscient.com', 'arpita.s@itscient.com', NULL, NULL, 'resume', '<p>Hello,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hope you are doing good,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please go through the job description and let me know your interest.</p>\r\n\r\n<p>Please Revert back with updated resumes.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Job Title</strong><strong>: </strong>Android Developer</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Work Location</strong><strong>: </strong>Plano, TX/ Bostern, MA</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Contract duration</strong><strong>:</strong> 6+Months</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Implementation Partner</strong><strong>: </strong>Photon InfoTech</p>\r\n\r\n<p>&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Must Have Skills:</strong></p>\r\n\r\n<p>Android Developer using Kotlin.</p>\r\n\r\n<p>Agile Methodology</p>\r\n\r\n<p>Good Communication</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Detailed Job Description:</strong></p>\r\n\r\n<p>Android Development using Kotlin, Agile Methodology. Medical device knowledge will be helpful.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks&nbsp;and regards,</p>\r\n\r\n<p>Samiksha Sinha</p>\r\n\r\n<p>Technical Recruiter,</p>\r\n\r\n<p>|| IT-SCIENT || Phone: 510.516.7753 || Fax: 877.701.4872 ||</p>\r\n\r\n<p>Email:&nbsp;samiksha.s@itscient.com&nbsp;||&nbsp;Web:&nbsp;www.itscient.com&nbsp;||</p>\r\n\r\n<p>&nbsp;</p>', '2019-09-24 14:18:11', '2345', 'H-B1', NULL, '2', '28', 'amar kumar', '123-445-7890', 'amarkumar@gmail.com', '66', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'b.tech from jntuh', NULL, '2011', '1989-08-08', 'f1,2014', 'No', 'Yes', 'No', 'No', '56'),
(48, 10, 5, 'sumit.m@itscient.com', 'rohit18.itscient@gmail.com', NULL, NULL, 'this is test', '<p>this is test</p>', '2019-09-24 15:37:15', '7895', 'US Citizen', NULL, '0', '0', 'Disha', '9728223017', 'dlakhankar@gmail.com', '677', '55k', '60k', NULL, 'Cleveland State University', NULL, NULL, 'b.tech Rvs', NULL, '2015', '1985-08-07', 'yes', 'Yes', 'Yes', 'Yes', 'Yes', '78'),
(49, 10, 5, 'sumit.m@itscient.com', 'danroy48@gmail.com', NULL, NULL, 'Work', '<p>work in progress</p>', '2019-09-24 17:05:03', '1111', 'US Citizen', NULL, '0', '0', 'Disha', '9728223017', 'dlakhankar@gmail.com', '5555', '55k', '60k', NULL, 'Cleveland State University', NULL, NULL, 'TACT', NULL, '2015', '1985-08-07', 'asd', 'Yes', 'Yes', 'Yes', 'Yes', '1000000'),
(50, 16, 8, 'sumit.m@itscient.com', 'pateltulsi2903@gmail.com', NULL, NULL, 'test', '<p>asdasd</p>', '2019-09-25 02:11:20', '123123', 'H-B1', NULL, '2', '28', 'Srinivasa', '4696296898', 'Srinivasaraom311@gmail.com', '654', '55k', '60k', NULL, 'JNTU', 'silverxis', NULL, 'ada', NULL, '2011', '1989-08-08', 'czxv', 'Yes', 'Yes', 'Yes', 'Yes', '$130k/annum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forward_candidate_exp_required`
--

CREATE TABLE `tbl_forward_candidate_exp_required` (
  `id` int(11) NOT NULL,
  `forward_candidate_id` varchar(10) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `yrs_of_exp` varchar(20) NOT NULL,
  `expertise_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forward_candidate_reference`
--

CREATE TABLE `tbl_forward_candidate_reference` (
  `id` int(11) NOT NULL,
  `forward_candidate_id` varchar(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `officialEmail` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `clientName` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `ID` int(11) NOT NULL,
  `image_caption` varchar(150) DEFAULT NULL,
  `image_name` varchar(155) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `sts` enum('inactive','active') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_institute`
--

CREATE TABLE `tbl_institute` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sts` enum('blocked','active') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invite_employer`
--

CREATE TABLE `tbl_invite_employer` (
  `id` int(11) NOT NULL,
  `employer_name` varchar(200) NOT NULL,
  `employer_email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `status` varchar(400) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invite_jobseeker`
--

CREATE TABLE `tbl_invite_jobseeker` (
  `id` int(11) NOT NULL,
  `jobseeker_name` varchar(200) NOT NULL,
  `jobseeker_email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `status` varchar(400) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_inventory_item`
--

CREATE TABLE `tbl_inv_inventory_item` (
  `item_id` int(11) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `last_updated_by` varchar(60) NOT NULL,
  `last_updated_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inv_item_pricelist`
--

CREATE TABLE `tbl_inv_item_pricelist` (
  `id` int(11) NOT NULL,
  `employer_id` varchar(60) NOT NULL,
  `item_id` varchar(50) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `last_updated_by` varchar(60) NOT NULL,
  `last_updated_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs_history`
--

CREATE TABLE `tbl_jobs_history` (
  `id` int(11) NOT NULL,
  `job_id` varchar(50) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `update_job_field` varchar(700) NOT NULL,
  `updated_job_from_value` varchar(700) NOT NULL,
  `update_job_to_value` varchar(700) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `updated_by` varchar(70) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs_notes`
--

CREATE TABLE `tbl_jobs_notes` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `note` text COLLATE utf8_swedish_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `privacy_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_alert`
--

CREATE TABLE `tbl_job_alert` (
  `ID` int(11) NOT NULL,
  `job_ID` int(11) DEFAULT NULL,
  `dated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_alert_queue`
--

CREATE TABLE `tbl_job_alert_queue` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) DEFAULT NULL,
  `job_ID` int(11) DEFAULT NULL,
  `dated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_functional_areas`
--

CREATE TABLE `tbl_job_functional_areas` (
  `ID` int(7) NOT NULL,
  `industry_ID` int(7) DEFAULT NULL,
  `functional_area` varchar(155) DEFAULT NULL,
  `sts` enum('suspended','active') DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_industries`
--

CREATE TABLE `tbl_job_industries` (
  `ID` int(11) NOT NULL,
  `industry_name` varchar(155) DEFAULT NULL,
  `slug` varchar(155) DEFAULT NULL,
  `sts` enum('suspended','active') DEFAULT 'active',
  `top_category` enum('no','yes') DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 PACK_KEYS=0;

--
-- Dumping data for table `tbl_job_industries`
--

INSERT INTO `tbl_job_industries` (`ID`, `industry_name`, `slug`, `sts`, `top_category`) VALUES
(1, 'It', NULL, 'active', 'no'),
(2, 'I Software', NULL, 'active', 'no'),
(3, 'General it', NULL, 'active', 'no'),
(4, 'tec it', NULL, 'active', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_multiple_location`
--

CREATE TABLE `tbl_job_multiple_location` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `country` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `state` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `city` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_post_assign`
--

CREATE TABLE `tbl_job_post_assign` (
  `ID` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `team_member_id` int(11) NOT NULL,
  `job_assigned_by` int(11) NOT NULL,
  `owner_id` varchar(50) NOT NULL,
  `job_assigned_date` varchar(255) NOT NULL,
  `job_unassigned_date` varchar(255) NOT NULL,
  `read_flag` tinyint(1) NOT NULL,
  `first_read_date_time` varchar(255) NOT NULL,
  `favourite_flag` tinyint(1) NOT NULL,
  `status` enum('blocked','pending','active') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_seekers`
--

CREATE TABLE `tbl_job_seekers` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `ssn` varchar(60) DEFAULT NULL,
  `fed_id` varchar(60) NOT NULL,
  `skype_id` varchar(60) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address_line_1` varchar(160) DEFAULT NULL,
  `address_line_2` varchar(160) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `dated` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `gender` enum('female','male') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `cv_file` varchar(60) NOT NULL,
  `otherdocuments1` varchar(100) DEFAULT NULL,
  `otherdocuments2` varchar(100) DEFAULT NULL,
  `default_cv_id` int(11) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `home_phone` varchar(25) DEFAULT NULL,
  `skills` varchar(200) NOT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `career_objective` text,
  `sts` enum('active','blocked','pending') NOT NULL DEFAULT 'active',
  `verification_code` varchar(155) DEFAULT NULL,
  `first_login_date` datetime DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `slug` varchar(155) DEFAULT NULL,
  `visa_status` varchar(50) NOT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `employer_id` varchar(60) NOT NULL,
  `created_by` int(11) NOT NULL,
  `is_employer` int(11) NOT NULL,
  `owner_id` varchar(60) NOT NULL,
  `old_id` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `queue_email_sts` tinyint(1) DEFAULT NULL,
  `send_job_alert` enum('no','yes') DEFAULT 'yes',
  `min_pay_rate` varchar(255) NOT NULL,
  `max_pay_rate` varchar(255) NOT NULL,
  `pay_rate_umo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_seekers`
--

INSERT INTO `tbl_job_seekers` (`ID`, `first_name`, `middle_name`, `last_name`, `email`, `ssn`, `fed_id`, `skype_id`, `password`, `address_line_1`, `address_line_2`, `present_address`, `permanent_address`, `dated`, `country`, `state`, `city`, `gender`, `dob`, `phone`, `photo`, `cv_file`, `otherdocuments1`, `otherdocuments2`, `default_cv_id`, `experience`, `mobile`, `home_phone`, `skills`, `cnic`, `nationality`, `career_objective`, `sts`, `verification_code`, `first_login_date`, `last_login_date`, `slug`, `visa_status`, `ip_address`, `employer_id`, `created_by`, `is_employer`, `owner_id`, `old_id`, `flag`, `queue_email_sts`, `send_job_alert`, `min_pay_rate`, `max_pay_rate`, `pay_rate_umo`) VALUES
(1, 'Rohit', NULL, 'Kumar', 'rohit45@gmail.com', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'India', 'Jharkhand', 'Jamshedpur', 'male', '2006-02-03', NULL, NULL, '1846517346.docx', NULL, NULL, 1, '', '9876543210', '9685741230', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'US Citizen', NULL, '1', 1, 1, '', NULL, NULL, NULL, 'yes', '', '', ''),
(2, 'Srinivasa Rao', NULL, 'Munagala', 'Srinivasaraom311@gmail.com', '789456121', '12', 'Srinivasaraom311', NULL, 'Near Adityapur Toll Bridge, Tata Kandra Main Road, Adityapur, Jamshedpur, Jharkhand 832109', NULL, NULL, NULL, '2019-09-24', 'India', 'Jharkhand', '7326', 'male', '1993-08-08', NULL, NULL, '1481186816.docx', NULL, '623594156.jpg', 1, '', '8709542815', '7894661233', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'Green Card', NULL, '23', 23, 23, '', NULL, NULL, NULL, 'yes', '', '', ''),
(3, 'Rahul', NULL, 'Dutta', 'rahul45@gmail.com', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'India', 'Jharkhand', 'Jamshedpur', 'male', '2007-05-02', NULL, NULL, '312803532.docx', NULL, NULL, 1, '', '7845129630', '7945861230', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'Green Card', NULL, '1', 1, 1, '', NULL, NULL, NULL, 'yes', '', '', ''),
(4, 'Ram', NULL, 'Singh', 'ramsingh228@gmail.com', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'India', 'Jharkhand', 'Jamshedpur', 'male', '1997-04-05', NULL, NULL, '470300018.docx', NULL, NULL, 1, '', '9856321470', '9852147630', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H-B1', NULL, '1', 1, 1, '', NULL, NULL, NULL, 'yes', '', '', ''),
(5, 'Disha', NULL, 'Lakhankar', 'dlakhankar@gmail.com', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'Jharkhand', 'Dallas, TX', 'female', '1985-08-07', NULL, NULL, '566264533.docx', NULL, NULL, 1, '', '9728223017', '9728223017', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'US Citizen', NULL, '30', 30, 30, '', NULL, NULL, NULL, 'yes', '', '', ''),
(6, 'Madhukar', NULL, 'Dharavath', 'dmadhukar194@gmail.com', '3190', '12', 'madhuprasadnayak99@gmail.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'Jharkhand', 'Washington', 'male', '1988-08-02', NULL, NULL, '788078646.docx', NULL, '1187508622.pdf', 1, '', '6692121590', '6692121590', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H-B1', NULL, '5', 5, 5, '', NULL, NULL, NULL, 'yes', '', '', ''),
(7, 'CELINE', NULL, 'NJECK', 'cnjeck@yahoo.com', '000003245', '12', 'cnjeck2', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'Jharkhand', 'Dallas, TX', 'female', '1990-12-05', NULL, NULL, '596998194.docx', NULL, NULL, 1, '', '4404446354', '4404446354', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'US Citizen', NULL, '39', 39, 39, '', NULL, NULL, NULL, 'yes', '', '', ''),
(8, 'Srinivasa', 'Rao', 'Munagala', 'Srinivasaraom311@gmail.com', '4410', '12', 'Srinivasaraom311@gmail.com', NULL, 'Glendale CA', 'Glendale CA', NULL, NULL, '2019-09-24', 'USA', 'CA', 'Sunnyvale', 'male', '1989-08-08', NULL, NULL, '1235507992.docx', '699144503.pdf', '880916181.pdf', 1, '', '4696296898', '4696296898', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H-B1', NULL, '9', 9, 9, '', NULL, NULL, NULL, 'yes', '', '', ''),
(9, 'Sindhuja', NULL, 'Namala', 'sindhuja.namala9@gmail.com', '1841', '12', 'sindhuja.namala3', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'Jharkhand', 'Los Angele', 'female', '1988-06-18', NULL, NULL, '1754902930.docx', '299561071.pdf', '1071892974.pdf', 1, '', '7147214144', '7147214144', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H-B1', NULL, '8', 8, 8, '', NULL, NULL, NULL, 'yes', '', '', ''),
(10, 'Muhammad', 'Noaman', 'Yousuf', 'yomuhammad89@gmail.com', '9753', '12', 'yomuhammad89@gmail.com', NULL, 'Framingham, MA', NULL, NULL, NULL, '2019-09-24', 'USA', 'MA', 'Framingham', 'male', '1989-09-11', NULL, NULL, '1862453882.docx', '1476633214.PNG', '1611391998.PNG', 1, '', '7192662409', '7192662409', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'GC-EAD', NULL, '7', 7, 7, '', NULL, NULL, NULL, 'yes', '', '', ''),
(11, 'Fnu', NULL, 'Pavani', 'fnupavani@gmail.com', '9042', '12', 'fnupavani@gmail.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'CA', 'Sunnyvale', 'female', '1988-05-29', NULL, NULL, '280955342.doc', NULL, '424227632.jpg', 1, '', '6692611821', '6692611821', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H4-EAD', NULL, '3', 3, 3, '', NULL, NULL, NULL, 'yes', '', '', ''),
(12, 'Jyothi', NULL, 'Sravani G', 'jyothisravanig@gmail.com', '6123', '12', 'jyothisravanig@gmail.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'CA', 'Sunnyvale', 'female', '1990-07-03', NULL, NULL, '192198262.docx', '2026766187.jpg', '1573312057.jpg', 1, '', '908-854-95', NULL, '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '1', NULL, '32', 32, 32, '', NULL, NULL, NULL, 'yes', '', '', ''),
(13, 'Jyothi', NULL, 'Sravani G', 'jyothisravanig@gmail.com', NULL, '12', 'jyothisravanig@gmail.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'CA', 'Sunnyvale', 'female', '1990-07-03', NULL, NULL, '1176083068.docx', '2106524095.jpg', '439079259.jpg', 1, '', '9088549538', NULL, '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '1', NULL, '32', 32, 32, '', NULL, NULL, NULL, 'yes', '', '', ''),
(14, 'Karthik', NULL, 'Kanuganti', 'karthikreddyone@gmail.com', '00000000', '12', 'karthikavenger@hotmail.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'CA', 'oakland', 'male', '1992-07-01', NULL, NULL, '1983625300.docx', NULL, NULL, 1, '', '2015285155', '2015285155', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H1-B', NULL, '72', 72, 72, '', NULL, NULL, NULL, 'yes', '', '', ''),
(15, 'Sushil', 'Kumar', 'Rajbhandari', 'Rajbhandari.Sushil@gmail.com', '6810', '12', 'SushilRajbhandari2014', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'WA', 'Bothell', 'male', '1971-01-14', NULL, NULL, '114829537.docx', NULL, NULL, 1, '', '8319172709', '8319172709', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'US Citizen', NULL, '65', 65, 65, '', NULL, NULL, NULL, 'yes', '', '', ''),
(16, 'Omkar', NULL, 'Pilla', 'Omkarpilla983@gmail.com', '9740', '12', 'OmkarPilla', NULL, 'Pennington', 'Pennington', NULL, NULL, '2019-09-24', 'USA', 'NJ', 'Pennington', 'male', '1991-07-03', NULL, NULL, '1586569398.doc', '2119269406.pdf', '958010747.jpg', 1, '', '6098150372', '6098150372', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H1-B', NULL, '59', 59, 59, '', NULL, NULL, NULL, 'yes', '', '', ''),
(17, 'Jyothi', NULL, 'Sravani G', 'jyothisravanig@gmail.com', NULL, '12', 'jyothisravanig@gmail.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'CA', 'Sunnyvale', 'female', '1990-07-03', NULL, NULL, '1719486501.docx', '609516436.jpg', '1218266862.jpg', 1, '', '9088549538', '9088549538', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '1', NULL, '32', 32, 32, '', NULL, NULL, NULL, 'yes', '', '', ''),
(18, 'Raveendranatha', 'Reddy', 'Karnati', 'idravee@gmail.com', NULL, '12', 'idravee@gmail.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'NC', 'cary', 'male', '1980-05-18', NULL, NULL, '806409149.docx', NULL, NULL, 1, '', '8132960044', '8132960044', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H1-B', NULL, '58', 58, 58, '', NULL, NULL, NULL, 'yes', '', '', ''),
(19, 'Khant', NULL, 'Vyas', 'khantvyas1987@gmail.com', '9808', '12', 'khantvyas1987@outlook.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'CA', 'Sunnyvale', 'male', '1988-06-10', NULL, NULL, '1185901818.docx', NULL, NULL, 1, '', '4159526491', '4159526491', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'H1-B', NULL, '31', 31, 31, '', NULL, NULL, NULL, 'yes', '', '', ''),
(20, 'Rama', 'Krishna', 'Pairmi', 'krishna82479@gmail.com', '8888', '12', 'krishna82479@gmail.com', NULL, 'Charlotte,NC', 'Charlotte,NC', NULL, NULL, '2019-09-24', 'USA', 'NC', 'Sunnyvale', 'male', '1989-08-24', NULL, NULL, '2046629237.docx', '247782660.pdf', '342130620.pdf', 1, '', '2014778217', '2014778217', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'GC-EAD', NULL, '9', 9, 9, '', NULL, NULL, NULL, 'yes', '', '', ''),
(21, 'Deepa', 'Rani', 'Jangity', 'deepajangity@gmail.com', '6009', '12', 'deepajangity@live.com', NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'CA', 'Sunnyvale', 'female', '1980-01-05', NULL, NULL, '2109414181.docx', '938042768.jpg', NULL, 1, '', '4083063008', '4083063008', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'US Citizen', NULL, '29', 29, 29, '', NULL, NULL, NULL, 'yes', '', '', ''),
(22, 'sdasd', 'asd', 'asd', 'saraswati@gmail.com', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-24', 'USA', 'TX', NULL, 'male', '2007-03-01', NULL, NULL, '1679673609.docx', NULL, NULL, 1, '', '1011111111', '1221121212', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, 'OPT-EAD', NULL, '1', 1, 1, '', NULL, NULL, NULL, 'yes', '', '', ''),
(23, 'Saivi', NULL, 'Raj', 'shivanifeb3@gmail.com', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-25', 'India', 'TX', 'Ranchi', 'female', '2006-05-08', NULL, NULL, '504015008.doc', NULL, NULL, 1, '', '9876789077', '6545667789', '', NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '1', NULL, '2', 2, 2, '', NULL, NULL, NULL, 'yes', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_titles`
--

CREATE TABLE `tbl_job_titles` (
  `ID` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marketing_emailer`
--

CREATE TABLE `tbl_marketing_emailer` (
  `emailer_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `emailer_section` varchar(255) NOT NULL,
  `emailer_subject` varchar(255) NOT NULL,
  `emailer_to` text NOT NULL,
  `emailer_cc` varchar(255) DEFAULT NULL,
  `emailer_bcc` varchar(255) DEFAULT NULL,
  `emailer_content` text NOT NULL,
  `emailer_type` enum('text','html') NOT NULL DEFAULT 'html',
  `emailer_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_marketing_emailer`
--

INSERT INTO `tbl_marketing_emailer` (`emailer_id`, `employer_id`, `emailer_section`, `emailer_subject`, `emailer_to`, `emailer_cc`, `emailer_bcc`, `emailer_content`, `emailer_type`, `emailer_status`, `added_on`) VALUES
(1, 7, 'email_list', 'meeting schedule load', 'danroy48@gmail.com', 'danroy48@gmail.com', NULL, 'This', 'html', 'active', '2019-09-24 15:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marketing_emailer_list`
--

CREATE TABLE `tbl_marketing_emailer_list` (
  `list_id` int(11) NOT NULL,
  `emailer_id` int(11) NOT NULL,
  `emailer_to` varchar(255) NOT NULL,
  `emailer_cc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marketing_emailier_schedule`
--

CREATE TABLE `tbl_marketing_emailier_schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_section` varchar(255) NOT NULL,
  `schedule_list_id` int(11) NOT NULL,
  `start_day` varchar(255) NOT NULL,
  `start_month` varchar(255) NOT NULL,
  `start_year` varchar(255) NOT NULL,
  `start_hour` int(11) NOT NULL,
  `start_minute` int(11) NOT NULL,
  `end_day` varchar(255) NOT NULL,
  `end_month` varchar(255) NOT NULL,
  `end_year` varchar(255) NOT NULL,
  `end_hour` int(11) NOT NULL,
  `end_minute` int(11) NOT NULL,
  `reque_every` varchar(255) NOT NULL,
  `reque_day` varchar(255) NOT NULL,
  `reque_month` varchar(255) NOT NULL,
  `reque_year` varchar(255) NOT NULL,
  `reque_hour` int(11) NOT NULL,
  `reque_minute` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_admin`
--

CREATE TABLE `tbl_mar_admin` (
  `id` int(11) NOT NULL,
  `loginname` varchar(25) NOT NULL,
  `namelc` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifiedby` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordchanged` date DEFAULT NULL,
  `superuser` tinyint(4) DEFAULT '0',
  `disabled` tinyint(4) DEFAULT '0',
  `privileges` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_adminattribute`
--

CREATE TABLE `tbl_mar_adminattribute` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `required` tinyint(4) DEFAULT NULL,
  `tablename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_admintoken`
--

CREATE TABLE `tbl_mar_admintoken` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `entered` int(11) NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_admin_attribute`
--

CREATE TABLE `tbl_mar_admin_attribute` (
  `adminattributeid` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_admin_password_request`
--

CREATE TABLE `tbl_mar_admin_password_request` (
  `id_key` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `key_value` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_attachment`
--

CREATE TABLE `tbl_mar_attachment` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `remotefile` varchar(255) DEFAULT NULL,
  `mimetype` varchar(255) DEFAULT NULL,
  `description` text,
  `size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_bounce`
--

CREATE TABLE `tbl_mar_bounce` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `header` text,
  `data` blob,
  `status` varchar(255) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_bounceregex`
--

CREATE TABLE `tbl_mar_bounceregex` (
  `id` int(11) NOT NULL,
  `regex` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `listorder` int(11) DEFAULT '0',
  `admin` int(11) DEFAULT NULL,
  `comment` text,
  `status` varchar(255) DEFAULT NULL,
  `count` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_bounceregex_bounce`
--

CREATE TABLE `tbl_mar_bounceregex_bounce` (
  `regex` int(11) NOT NULL,
  `bounce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_config`
--

CREATE TABLE `tbl_mar_config` (
  `item` varchar(35) NOT NULL,
  `value` longtext,
  `editable` tinyint(4) DEFAULT '1',
  `type` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_eventlog`
--

CREATE TABLE `tbl_mar_eventlog` (
  `id` int(11) NOT NULL,
  `entered` datetime DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  `entry` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_i18n`
--

CREATE TABLE `tbl_mar_i18n` (
  `lan` varchar(10) NOT NULL,
  `original` text NOT NULL,
  `translation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_linktrack`
--

CREATE TABLE `tbl_mar_linktrack` (
  `linkid` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `forward` text,
  `firstclick` datetime DEFAULT NULL,
  `latestclick` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clicked` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_linktrack_forward`
--

CREATE TABLE `tbl_mar_linktrack_forward` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `uuid` varchar(36) DEFAULT '',
  `personalise` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_linktrack_ml`
--

CREATE TABLE `tbl_mar_linktrack_ml` (
  `messageid` int(11) NOT NULL,
  `forwardid` int(11) NOT NULL,
  `firstclick` datetime DEFAULT NULL,
  `latestclick` datetime DEFAULT NULL,
  `total` int(11) DEFAULT '0',
  `clicked` int(11) DEFAULT '0',
  `htmlclicked` int(11) DEFAULT '0',
  `textclicked` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_linktrack_uml_click`
--

CREATE TABLE `tbl_mar_linktrack_uml_click` (
  `id` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `forwardid` int(11) DEFAULT NULL,
  `firstclick` datetime DEFAULT NULL,
  `latestclick` datetime DEFAULT NULL,
  `clicked` int(11) DEFAULT '0',
  `htmlclicked` int(11) DEFAULT '0',
  `textclicked` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_linktrack_userclick`
--

CREATE TABLE `tbl_mar_linktrack_userclick` (
  `linkid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `data` text,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_list`
--

CREATE TABLE `tbl_mar_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `entered` datetime DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL,
  `prefix` varchar(10) DEFAULT NULL,
  `rssfeed` varchar(255) DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(4) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_listmessage`
--

CREATE TABLE `tbl_mar_listmessage` (
  `id` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_listuser`
--

CREATE TABLE `tbl_mar_listuser` (
  `userid` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_message`
--

CREATE TABLE `tbl_mar_message` (
  `id` int(11) NOT NULL,
  `uuid` varchar(36) DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '(no subject)',
  `fromfield` varchar(255) NOT NULL DEFAULT '',
  `tofield` varchar(255) NOT NULL DEFAULT '',
  `replyto` varchar(255) NOT NULL DEFAULT '',
  `message` longtext,
  `textmessage` longtext,
  `footer` text,
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `embargo` datetime DEFAULT NULL,
  `repeatinterval` int(11) DEFAULT '0',
  `repeatuntil` datetime DEFAULT NULL,
  `requeueinterval` int(11) DEFAULT '0',
  `requeueuntil` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `userselection` text,
  `sent` datetime DEFAULT NULL,
  `htmlformatted` tinyint(4) DEFAULT '0',
  `sendformat` varchar(20) DEFAULT NULL,
  `template` int(11) DEFAULT NULL,
  `processed` mediumint(8) UNSIGNED DEFAULT '0',
  `astext` int(11) DEFAULT '0',
  `ashtml` int(11) DEFAULT '0',
  `astextandhtml` int(11) DEFAULT '0',
  `aspdf` int(11) DEFAULT '0',
  `astextandpdf` int(11) DEFAULT '0',
  `viewed` int(11) DEFAULT '0',
  `bouncecount` int(11) DEFAULT '0',
  `sendstart` datetime DEFAULT NULL,
  `rsstemplate` varchar(100) DEFAULT NULL,
  `owner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_messagedata`
--

CREATE TABLE `tbl_mar_messagedata` (
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `data` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mar_messagedata`
--

INSERT INTO `tbl_mar_messagedata` (`name`, `id`, `data`) VALUES
('campaigntitle', 1, 'Server Down'),
('campaigntitle', 3, 'rssfsfsdf'),
('campaigntitle', 6, 'Server Down'),
('campaigntitle', 9, '(no title)'),
('campaigntitle', 10, '(no title)'),
('campaigntitle', 11, '(no title)'),
('campaigntitle', 12, '(no title)'),
('campaigntitle', 13, '(no title)'),
('campaigntitle', 14, '(no title)'),
('campaigntitle', 15, '(no title)'),
('cb', 1, 'SER:a:3:{s:12:\"google_track\";s:1:\"1\";s:10:\"resetstats\";s:1:\"1\";s:14:\"istestcampaign\";s:1:\"1\";}'),
('cb', 6, 'SER:a:3:{s:12:\"google_track\";s:1:\"1\";s:10:\"resetstats\";s:1:\"1\";s:14:\"istestcampaign\";s:1:\"1\";}'),
('embargo', 1, 'SER:a:5:{s:3:\"day\";s:2:\"18\";s:5:\"month\";s:2:\"01\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"15\";s:6:\"minute\";s:1:\"0\";}'),
('embargo', 6, 'SER:a:5:{s:3:\"day\";s:2:\"18\";s:5:\"month\";s:2:\"01\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"17\";s:6:\"minute\";s:1:\"0\";}'),
('embargo', 9, 'SER:a:5:{s:3:\"day\";s:1:\"6\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"18\";s:6:\"minute\";s:1:\"0\";}'),
('embargo', 10, 'SER:a:5:{s:3:\"day\";s:1:\"7\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"18\";s:6:\"minute\";s:1:\"0\";}'),
('embargo', 12, 'SER:a:5:{s:3:\"day\";s:2:\"12\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"9\";s:6:\"minute\";s:1:\"0\";}'),
('embargo', 14, 'SER:a:5:{s:3:\"day\";s:2:\"14\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"9\";s:6:\"minute\";s:1:\"0\";}'),
('end_notified', 1, '2018-01-18 18:03:02'),
('ETA', 1, 'unknown'),
('ETA', 10, 'unknown'),
('ETA', 11, 'unknown'),
('ETA', 12, 'unknown'),
('ETA', 13, 'unknown'),
('ETA', 14, 'unknown'),
('finishsending', 1, 'SER:a:5:{s:3:\"day\";s:2:\"20\";s:5:\"month\";s:2:\"07\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"3\";s:6:\"minute\";s:1:\"0\";}'),
('finishsending', 6, 'SER:a:5:{s:3:\"day\";s:2:\"20\";s:5:\"month\";s:2:\"07\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"5\";s:6:\"minute\";s:1:\"0\";}'),
('finishsending', 9, 'SER:a:5:{s:3:\"day\";s:1:\"8\";s:5:\"month\";s:2:\"08\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"6\";s:6:\"minute\";s:1:\"0\";}'),
('finishsending', 10, 'SER:a:5:{s:3:\"day\";s:1:\"9\";s:5:\"month\";s:2:\"08\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"6\";s:6:\"minute\";s:1:\"0\";}'),
('finishsending', 12, 'SER:a:5:{s:3:\"day\";s:2:\"13\";s:5:\"month\";s:2:\"08\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"21\";s:6:\"minute\";s:1:\"0\";}'),
('finishsending', 14, 'SER:a:5:{s:3:\"day\";s:2:\"14\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"21\";s:6:\"minute\";s:1:\"0\";}'),
('followupto', 1, ''),
('followupto', 3, ''),
('followupto', 6, 'https://hrms.itscient.com/promail/admin/?page=send&id=6&tk=4084b76dd042af4a22309505eab629cd&tab=Text'),
('followupto', 9, 'http://jobportal.itscient.com/promail/admin/?page=send&id=9&tk=680fe350e159e8d6e8b02ae2c8698360&tab=Format'),
('followupto', 10, 'http://jobportal.itscient.com/promail/admin/?page=send&id=10&tk=ca03001b8dcada612e95ae2ce8c8b2c6&tab=Lists'),
('followupto', 11, 'http://jobportal.itscient.com/promail/admin/?page=send&id=11&tk=f87ea97be8a576bf76df016353343fb2&tab=Scheduling'),
('followupto', 12, 'http://jobportal.itscient.com/promail/admin/?page=send&id=12&tk=0c6af0bc7df0bcd648195c5bcdb8668d&tab=Scheduling'),
('followupto', 13, 'http://jobportal.itscient.com/promail/admin/?page=send&id=13&tk=f870d0cdb83d00ea883a1e4eed9f1249&tab=Scheduling'),
('followupto', 14, ''),
('followupto', 15, 'http://jobportal.itscient.com/promail/admin/?page=send&id=15&tk=ec3f5ebc6c1fbeb836fcb8cf0dbf677a&tab=Scheduling'),
('footer', 1, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 3, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 6, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 9, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 10, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 11, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 12, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 13, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 14, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('footer', 15, '--\r\n  \r\n    <div class=\\\"footer\\\" style=\\\"text-align:left; font-size: 75%;\\\">\r\n      <p>This message was sent to [EMAIL] by [FROMEMAIL]</p>\r\n      <p>To forward this message, please do not use the forward button of your email application, because this message was made specifically for you only. Instead use the <a href=\\\"[FORWARDURL]\\\">forward page</a> in our newsletter system.<br/>\r\n      To change your details and to choose which lists to be subscribed to, visit your personal <a href=\\\"[PREFERENCESURL]\\\">preferences page</a><br/>\r\n      Or you can <a href=\\\"[UNSUBSCRIBEURL]\\\">opt-out completely</a> from all future mailings.</p>\r\n    </div>\r\n\r\n  '),
('formtoken', 1, 'd9897d753d98d15b1d334b412098074b'),
('formtoken', 3, '69edb628369c8e9b29e6df919787b42b'),
('formtoken', 6, 'bf0f7416bf3bb5562539635ac23e7656'),
('formtoken', 9, '16b31ba7d467393294ba8a262d249d80'),
('formtoken', 10, '0d9d8ff007fbdcfe860d04b74be199d9'),
('formtoken', 11, '3872cd70a9a9fc36213e9e03aa8f5f4a'),
('formtoken', 12, 'd6c10130aecf92823e6e56ce27c3f542'),
('formtoken', 13, 'ea97d6147a0ccfac845a5cc52d082c58'),
('formtoken', 14, 'd278fe6711c0312da0581d7cc2600418'),
('formtoken', 15, '9928ace523086bb9a4ac5d86c2a9fe79'),
('fromfield', 1, 'admin@hrms.itscient.com Pro Email'),
('fromfield', 3, 'rakesh.s@itscient.com'),
('fromfield', 6, 'rakesh.s@itscient.com'),
('fromfield', 9, 'rakesh.s@itscient.com'),
('fromfield', 10, 'rakesh.s@itscient.com'),
('fromfield', 11, 'rakesh.s@itscient.com'),
('fromfield', 12, 'rakesh.s@itscient.com'),
('fromfield', 13, 'rakesh.s@itscient.com'),
('fromfield', 14, 'rakesh.s@itscient.com'),
('fromfield', 15, 'rakesh.s@itscient.com'),
('google_track', 1, '0'),
('google_track', 6, '0'),
('htmlformatted', 1, 'auto'),
('htmlformatted', 6, 'auto'),
('id', 1, '1'),
('id', 3, '3'),
('id', 6, '6'),
('id', 9, '9'),
('id', 10, '10'),
('id', 11, '11'),
('id', 12, '12'),
('id', 13, '13'),
('id', 14, '14'),
('id', 15, '15'),
('istestcampaign', 1, '0'),
('istestcampaign', 6, '0'),
('last msg sent', 1, '1516316581'),
('message', 1, '<p>test</p>\r\n'),
('message', 3, '<p>dsfsd</p>\r\n'),
('message', 6, '<p>Test</p>\r\n'),
('message', 9, ''),
('message', 10, ''),
('message', 11, ''),
('message', 12, ''),
('message', 13, ''),
('message', 14, ''),
('message', 15, ''),
('msg/hr', 1, '0 '),
('msg/hr', 10, '0 '),
('msg/hr', 11, '0 '),
('msg/hr', 12, '0 '),
('msg/hr', 13, '0 '),
('msg/hr', 14, '0 '),
('notify_end', 1, 'admin@hrms.itscient.com'),
('notify_end', 6, 'rakesh.s@itscient.com'),
('notify_start', 1, 'admin@hrms.itscient.com'),
('notify_start', 6, 'rakesh.s@itscient.com'),
('requeueinterval', 1, '0'),
('requeueinterval', 6, '0'),
('requeueinterval', 9, '0'),
('requeueinterval', 10, '0'),
('requeueinterval', 12, '0'),
('requeueinterval', 14, '0'),
('requeueuntil', 1, 'SER:a:5:{s:3:\"day\";s:2:\"18\";s:5:\"month\";s:2:\"01\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"15\";s:6:\"minute\";s:1:\"0\";}'),
('requeueuntil', 6, 'SER:a:5:{s:3:\"day\";s:2:\"18\";s:5:\"month\";s:2:\"01\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"17\";s:6:\"minute\";s:1:\"0\";}'),
('requeueuntil', 9, 'SER:a:5:{s:3:\"day\";s:1:\"6\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"18\";s:6:\"minute\";s:1:\"0\";}'),
('requeueuntil', 10, 'SER:a:5:{s:3:\"day\";s:1:\"7\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:2:\"18\";s:6:\"minute\";s:1:\"0\";}'),
('requeueuntil', 12, 'SER:a:5:{s:3:\"day\";s:2:\"12\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"9\";s:6:\"minute\";s:1:\"0\";}'),
('requeueuntil', 14, 'SER:a:5:{s:3:\"day\";s:2:\"14\";s:5:\"month\";s:2:\"02\";s:4:\"year\";s:4:\"2018\";s:4:\"hour\";s:1:\"9\";s:6:\"minute\";s:1:\"0\";}'),
('resetstats', 1, '0'),
('resetstats', 6, '0'),
('samplesent', 1, '1'),
('samplesent', 10, '0'),
('samplesent', 11, '0'),
('samplesent', 12, '0'),
('samplesent', 13, '0'),
('samplesent', 14, '0'),
('sampletime', 1, '1518525046'),
('sampletime', 10, '1518602080'),
('sampletime', 11, '1518602080'),
('sampletime', 12, '1518602080'),
('sampletime', 13, '1518602080'),
('sampletime', 14, '1518602080'),
('savedraft', 14, 'Save as draft'),
('send', 1, 'Place Campaign in Queue for Sending'),
('sendformat', 1, 'HTML'),
('sendformat', 6, 'text'),
('sendmethod', 1, 'inputhere'),
('sendmethod', 3, 'inputhere'),
('sendmethod', 6, 'inputhere'),
('sendmethod', 9, 'inputhere'),
('sendmethod', 10, 'inputhere'),
('sendmethod', 11, 'inputhere'),
('sendmethod', 12, 'inputhere'),
('sendmethod', 13, 'inputhere'),
('sendmethod', 14, 'inputhere'),
('sendmethod', 15, 'inputhere'),
('sendtest', 3, 'Send test'),
('sendtest', 6, 'Send test'),
('sendurl', 1, ''),
('sendurl', 3, ''),
('sendurl', 6, ''),
('sendurl', 9, ''),
('sendurl', 10, ''),
('sendurl', 11, ''),
('sendurl', 12, ''),
('sendurl', 13, ''),
('sendurl', 14, ''),
('sendurl', 15, ''),
('start_notified', 1, '2018-01-18 18:03:01'),
('status', 1, 'submitted'),
('status', 3, 'draft'),
('status', 6, 'draft'),
('status', 9, 'draft'),
('status', 10, 'draft'),
('status', 11, 'draft'),
('status', 12, 'draft'),
('status', 13, 'draft'),
('status', 14, 'draft'),
('status', 15, 'draft'),
('subject', 1, 'Server Down'),
('subject', 3, 'Test Bhai'),
('subject', 6, 'Server Down'),
('subject', 9, '(no subject)'),
('subject', 10, '(no subject)'),
('subject', 11, '(no subject)'),
('subject', 12, '(no subject)'),
('subject', 13, '(no subject)'),
('subject', 14, '(no subject)'),
('subject', 15, '(no subject)'),
('targetlist', 1, 'SER:a:2:{s:8:\"unselect\";s:2:\"-1\";i:1;s:1:\"1\";}'),
('targetlist', 6, 'SER:a:1:{s:8:\"unselect\";s:2:\"-1\";}'),
('targetlist', 9, 'SER:a:1:{s:8:\"unselect\";s:2:\"-1\";}'),
('targetlist', 14, 'SER:a:1:{s:8:\"unselect\";s:2:\"-1\";}'),
('testtarget', 1, ''),
('testtarget', 3, 'nas.rakesh@gmail.com'),
('testtarget', 6, 'nas.rakesh@gmail.com'),
('testtarget', 9, ''),
('testtarget', 10, ''),
('testtarget', 11, ''),
('testtarget', 12, ''),
('testtarget', 13, ''),
('testtarget', 14, ''),
('testtarget', 15, ''),
('textmessage', 1, ''),
('textmessage', 6, 'gchghvh'),
('textmessage', 12, ''),
('to process', 1, '0'),
('workaround_fck_bug', 1, '1'),
('workaround_fck_bug', 3, '1'),
('workaround_fck_bug', 6, '1'),
('workaround_fck_bug', 9, '1'),
('workaround_fck_bug', 10, '1'),
('workaround_fck_bug', 11, '1'),
('workaround_fck_bug', 12, '1'),
('workaround_fck_bug', 13, '1'),
('workaround_fck_bug', 14, '1'),
('workaround_fck_bug', 15, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_message_attachment`
--

CREATE TABLE `tbl_mar_message_attachment` (
  `id` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `attachmentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_sendprocess`
--

CREATE TABLE `tbl_mar_sendprocess` (
  `id` int(11) NOT NULL,
  `started` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alive` int(11) DEFAULT '1',
  `ipaddress` varchar(50) DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_subscribepage`
--

CREATE TABLE `tbl_mar_subscribepage` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `active` tinyint(4) DEFAULT '0',
  `owner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_subscribepage_data`
--

CREATE TABLE `tbl_mar_subscribepage_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_template`
--

CREATE TABLE `tbl_mar_template` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `template` longblob,
  `listorder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_templateimage`
--

CREATE TABLE `tbl_mar_templateimage` (
  `id` int(11) NOT NULL,
  `template` int(11) NOT NULL DEFAULT '0',
  `mimetype` varchar(100) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `data` longblob,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mar_templateimage`
--

INSERT INTO `tbl_mar_templateimage` (`id`, `template`, `mimetype`, `filename`, `data`, `width`, `height`) VALUES
(1, 0, 'image/png', 'powerphplist.png', 0x6956424f5277304b47676f414141414e535568455567414141457341414141684341594141414352495662574141414142484e4353565149434167496641686b6941414141416c7753466c7a4141414c45674141437849423074312b2f41414141423530525668305532396d64486468636d554151575276596d5567526d6c795a586476636d747a49454e544e5334787178394936774141446d684a52454655614948746d6e747731465757787a2b2f587a2f54366151545167496b4a6752354c47524946446350735341455745466b5a534969735049635261544b456b454d775547585252615a576c53796c4b50727142444647435879554171694b4c55673641444268435241454751685755314949707275394c742f6a2f326a6b782f7070454f775a6d6f65745836727572727634357837372f6665632b3635743639414e347a4f794d674446675035674b31372b663844324947395150475a6d7072447171707142554c6e6a39455a475446414d664472763354762f6f6278456243347472713644547249366944714d4844625836396666374f6f42764a71713676627849364d596e3468716a666352704166684134663964392f7a6437386e574369486c6a52572b6e777a50476b3530375430673131565a77714c7750415a4c45796274624432506f5078503744565935397541326632306c4b3268675342672f6a56486b5a747669425a4536627a6146337467497766646c76326639664c2f54514333426f5237444f3541584c74627975656d39577076614c636936654f74706a4c4c6234675348316a753361546b763978614438777556614f2b6d35302f43366e65463072424342764e37497373554869546a3153526d6e50696c6a524a634f54312f325777424f665649576b7661366e4b546e336774634a39746b735a4b534e675a622f4d4377656b3939556f6139395371322b454759493631614873433457512f6674457a74462b566b54587551345a6e6a7734776c7446356e667746732f516553506d476174674238626d63344f764c30394245653246756261446858466679644f773154704256622f454273385950592f584b7777595a7a5666786d30335a7338514e7071622b4975614e4f7971677841497a4948453955334143756e4b6c456b695155525546564647525a4271442b6243554173697a6a6362627a507a5556415052507670554271534e2b6c6f7a42624346353547335548512f314c4c49736f367242623057574d566d73534a4945774a4764622f4267775839674e45647939664946545a646572772f684f79515644754d65654a6878447a79736b564a37704a774271634f78747a6231494e555750776837363155617a6c557850484d384b576c6a4f4c5a7247796c7059346a75503543542b392f5836672f2b3152335934676546444c777a2f2b6e697a7a5364482f392b513538793366767844316d355963747338595049766e634f414435334f2b5a494b3136586b2b597246376c516359547336584e346f32426872317a3053646178586473305039554a7238754a4f6449616b74665a4d45427a2f5557797073326d706634694465644f6b7a56744e69614c6c66707a317764596658672f4a2f642f304b4f392b724f56484377755973472f765572313466303058376e597030784950797857764f484e694f597246796a6258416841376f4e4c794d696272756e3770754b4c6a736c754369734c4949624e56525274365373647637742b47692f5659624a595352733346556d5353427333465a504653754f6c4f69524a346e4c744b5577574b2b64504871487855683165567a764e567935715a505946653273546e785676496666424a517849485835544d6843637342485a45337064645631685378683030336f373065664b366730662f3334444d78352f6a696d4c562f51776c2b5972463747334e6c462f74684b394b464a37354543774d5445344e3649674d473757492b512b75455354325636346d49444868642f7452432b4b58507236474d632b664973377038396c2f32736262796a543158525048646a4a75532f4b746259363062316577376b717a6e6170313758743369434d7a736851652b517143704b692f437a79656b4d334a2f6c336a66416a4551534e595545516b43515a6a38654e5871386e4f6a7161794d68495646584637585a6a743975525a526d4c78594a4f703650727766505052666966696b416767434149662f4c4539534964484c4167436e6a6348767a2b41502b5965516454377037437146476a5345684951465656576c746271616d70346443685135772b6652716a30596a5a624134684449412b53464d5542612f585334545a6a4841444d3767525a466e47352f4e686959674151516a4a48355351674d2f7670363274445a314f3136734f7439754e30576a45594441454765696942336f785130465641414733323433425947445a736d584d6e54755841514d476847326b7362475230744a53336e7a7a54525246775751796f616f716b7149455a2f4d475a436d4b6773566949544d7a6b34714b437278654c304b3354765946525647496a59306c4c53324e4579644f494d7379676941514341524953556c6835383664744c53304d472f655046777556316a435646566c374e6978584c6c7968652b2f2f78366458742b44724c4454714b6771667238666d383347756e587265504c4a4a304f49386e673876504c4b4b7a7a3131465055316457526d4a6a49716c5772654f615a5a314256565676324e774f2f33382b7759634e3437625858474470304b443666372b66774249445836325873324c47382f767272784d62476173476d7171726f6444724d5a6a4e6d73376e5850736d795445524542432b3939424c3333484d5062726337624c32775a756a7a2b56426b425a505a52485a32646b685a494244677a62666534747a5a73397879537a4b62667663374e6d78346e73457067356b2f667a36584c312f686a54662f5147784d4c424430655636664436566a6458564734494967594451614152413754452b534a4a784f4a35496b495167434a704d4a673847414c4d743476563545556579497849504730456c45707a355a6c6b50386b74466f704c362b6e716c54707849494248433558456953684d666a306571496f6f68657238666e3878454942504236765469645471785255543349445575574a456e6365757574544a6f346962567231374a75335470476a68774a674d766c6f724c79612b624f6e734d2f3358303343785973704b472b6e734570677846466b5963652b68634f4854724564392f2f4c795a7a4248362f6e377675756f75596d426743675144333333382f555646525646645855317061797266666668733057556b694a7965486566506d6b5a5355524556464253556c4a62533274744b2f6633396d7a5a7246685173586d4478354d756e7036546763447662733263506e6e3338655041717071766270436b56526d44466a426b314e545a53566c5a475a6d636e7332624e4a5455336c327256726650625a5a78772f6670773161395a6773396d595033382b61576c702f5076476a66674467524264596331514a2b724979737869376471316a4c31724c415546425a772f66783641714b676f787434356c6b38506673726237377a4e77494544474470306d4359375a4d675163736550782b2f7a423165693330392b666a35465255555546525868395871707271356d3473534a66504442423477614e51715078344d67434b7865765a72342b486871616d71343737373765502f3939306c495343412b5070373136396454576c704b586c34654e54553165447765746d376479706f31617768304731516e4f6f6e4c7a38386e4a7965486b534e48736e333764704b536b716973724553575a5a352f2f6e6c79636e49306e63334e7a5a772f6631367a68443558466f4a41656e6f36414d7566574934737952515746724a3538325a476a426a42307157504d6d504772396c572f445a66486a314b596d4c696459563650576c706152684e4a6b3158707738704b436a677777382f52424145746d3764536b6c4a4363383939787862746d784270394f7862647332317139666a79524a76507271712b7a647535666c793564545846774d77496b544a336a6b6b55646f613274445656586d7a4a6e4479792b2f7a4c35392b2f423676574748416b456632393765546e5a324e684552456178597359494c4679356774566f5a4e6d77594c70634c683850423473574c4f586a774946753262474651596d4b506e546e3850713271784d584661636d564b3165536c356448595745686c79356459732b6576635446785448766f59643435353133734e767449654b32574274476730464c4734314747686f612b50545454346d4f6a69596d4a6f6232396e614b693475352f6662625355354f5270496b446834386946367670312b2f666c7937646f304442773577787831336148377076666665772b6c30456873625330784d4441634f484f43373737356a3071524a6d692f734455616a6b5a4d6e542b4c7a2b646935637965624e6d31693473534a4e446333593766626959364f526852467a47597a555748385661396b7959714372495132766e4c6c5371622f38335357507261553358743273336274576c35363855583841542b7256362f4735584a706452565a51655736377842466b5a392b2b676c4a6b6a526e626a41592b5048484878454541617656716d33336e6556367656357a394949676f43674b625731746d675076644f6a58726c326a5837392b4e79514b774751795556746279364a46693669707157486d7a4a6d556c4a53775938634f45684d543866763966656f4953356252614b436876714648666c4a694573334e7a625137326f6d4e6a6356734e7250682b513159725661654c6e6861322f61626d712f6938313176584a5a6c45684d54735667736d6e2f786572304d487a346376393950613273726572322b7832774b67714435485645555355314e316377744541675147526c4a616d6f716c793966376e4f676e54704f6e6a7a4a696855726d4470314b6773574c434139505a3246437864715a505549715073697932517963654c45695a433875726f366974392b6d394c5339386e4c7932506a786f326f716f7256616d586a786f3159496979736557594e446f65447332664f496b6c42556753436f5568386644797256713343614454696444724a7973726969536565594e2b2b665451334e36505436634b5331556d594c4d73382f766a6a5a47646e343351364d52674d464251554542455251586c354f61594f482b6e7a2b6642367666683850693063454151426e382f4876486e7a4b4377734a446f3647727664546c565646513648517a752b4751774752464845362f57474a613258343435415a57556c78343866353834373777534355547171796f434542496150474535565652562b76782b547959545a624f61464631356730365a4e4c463336474e3833666b646b78333258536a4165616d7472343935373732584b6c436b34484136536b704c3436717576324c78354d326c7061514168666b6456565152427747417751456551375056363262466a4234324e6a5669745667774741797458727554793563746b5a5756684d42676f4b536e42372f6472784f2f617455744c6537316546693161784d795a4d334534484d5445784f427975586a33335866782b58776350587155705575586b706d5a7961716e6e3862587a54534630526b5a6258533757685a51635470645a47646c386f6333336941364b6871333238327a7a7a354c79772b7453494541632b664d4a54382f5030525a613273722b666e354e445931455230646a543851774f2f3338353962747043636e4d7a535278386c643849456f71785776766e6d47796f714b704156685a6959474c4b7a737a6c2b2f4467656a7765785977644e48544b45754c673450423450753366765a736d534a54676344744c54303345366e5878353742694e5455325954435a6962445a794a3077674d6a49795a49576550584d47434f3649315455314445354a49544d7269396a595746706157766a6a56332b6b7a5237306857617a6d636d544a325051367a6c515867366875364664474a3252735a64752f30494c714d69716771504e7a7633337a3254647636346a4c713466486f2b482f5166326b33784c4d6a6b354f5346452f6644444432782b38555832376673596e553650494542416b7648372f5777744b6d4c77344d45732b733169544f594956455642627a42674d706b515251464656764234504552594968414673624d5442414953397259326867775a777136794d683562746f797671366f77365055496f6f444a5a4d616731344d51584a56757478753657592f5261455256565552527847677945676745385076384b49714371424d786d637a6f64626f4f48516f657478734567636a49534b3432686479616671514869727154425149365555643056445337642b2b6d746157564a55736559664c6b7963783659465a4954566d574f587a6b434e7533622b505973532b444d79734b3047487a71717169312b76523658546f44555979737a4b31736a3468434a772b5861306c56594a4263544147564b396e2f72787a3930326a47316c466e582f666836777551534134494546455553546148553573746d67796272754e39462b4e3570626b5a46525670616d786b5a7161476d72506e734865316b5a6b704256524a336151495243514a4652564a58504d474d77524558787839476a7778482b7a74776f71714b7043744d334770456d544f487a344d442f392b4350694461355a2f707a6f63733738714c61364f6a2f735777645230507261515678776c35456b4351517736413067434d6953684b4971475051473756446346663641684d4667774f7678424b39694f6e61646e77744655584237504667694972513437433849376133444c36396f626f796572326936347066335762322f7a2f6f2f5a346a5131394c4c79654d41414141415355564f524b35435949493d, 70, 30);
INSERT INTO `tbl_mar_templateimage` (`id`, `template`, `mimetype`, `filename`, `data`, `width`, `height`) VALUES
(2, 0, 'image/png', 'organisation_logo', 0x6956424f5277304b47676f414141414e53556845556741414264774141414a59434149414141443330624e7a41414141475852465748525462325a30643246795a5142425a4739695a53424a6257466e5a564a6c5957523563636c6c5041414141794a70564668305745314d4f6d4e76625335685a4739695a53353462584141414141414144772f654842685932746c644342695a576470626a30693737752f496942705a443069567a564e4d4531775132566f61556836636d5654656b355559337072597a6c6b496a382b494478344f6e68746347316c6447456765473173626e4d366544306959575276596d5536626e4d366257563059533869494867366547317764477339496b466b62324a6c4946684e5543424462334a6c494455754d79316a4d444578494459324c6a45304e5459324d5377674d6a41784d6938774d6938774e6930784e446f314e6a6f794e7941674943416749434167496a346750484a6b5a6a70535245596765473173626e4d36636d526d50534a6f644852774f693876643364334c6e637a4c6d39795a7938784f546b354c7a41794c7a49794c584a6b5a69317a6557353059586774626e4d6a496a346750484a6b5a6a70455a584e6a636d6c7764476c76626942795a47593659574a76645851394969496765473173626e4d366547317750534a6f644852774f693876626e4d7559575276596d5575593239744c336868634338784c6a41764969423462577875637a70346258424e545430696148523063446f764c32357a4c6d466b62324a6c4c6d4e7662533934595841764d5334774c3231744c79496765473173626e4d36633352535a575939496d6830644841364c793975637935685a4739695a53356a62323076654746774c7a45754d43397a56486c775a5339535a584e7664584a6a5a564a6c5a694d694948687463447044636d566864473979564739766244306951575276596d5567554768766447397a6147397749454e544e69416f56326c755a47393363796b69494868746345314e4f6b6c7563335268626d4e6c53555139496e687463433570615751364e7a684751544d7952446c464d4559304d5446464e7a6c43526b4535513059354f545a47526b4a434d7a4969494868746345314e4f6b5276593356745a57353053555139496e68746343356b615751364e7a684751544d79524546464d4559304d5446464e7a6c43526b4535513059354f545a47526b4a434d7a49695069413865473177545530365247567961585a6c5a455a7962323067633352535a5759366157357a644746755932564a52443069654731774c6d6c705a446f334f455a424d7a4a454e305577526a51784d5555334f554a4751546c44526a6b354e6b5a47516b497a4d694967633352535a5759365a47396a6457316c626e524a52443069654731774c6d52705a446f334f455a424d7a4a454f455577526a51784d5555334f554a4751546c44526a6b354e6b5a47516b497a4d694976506941384c334a6b5a6a70455a584e6a636d6c7764476c76626a3467504339795a475936556b5247506941384c336736654731776257563059543467504439346347466a61325630494756755a4430696369492f506c33584e5a4d4141464f555355524256486a61374e312f734e66566653642b32736e494b427161334d694e42425152454c686b38417043574f586d6d7779684d5951326b4c6878683457646d4d54455a4c4f4d64614c5a4a6d6262614c76526a4848634e44564a73396b704c4c4f324d574a4c69536b796355557469754b5643566349494349585364446575503441522f3759664e2f78646c6d584b4e34666e2f6637764e376e2f58674d3032595376627a762b334d2b372f63357a33504f362f7a4f72332f393678454141414141564f7433335149414141434136676c6c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a76635173414775374979306633397a35582f496566396679692f372f5a7565756658336a786c59482f6848466a337a72326a4e4f4b2f334471714a504f6e7442572f49637a78372f746c4a4e50636d2f72627565755138582f66584a66333075486a78622f34654176586a78773841554e4177436756595179414d32792f38427a2b3537363161466e5874797939656e2f39667772397a333854486c2f5638666b30525050657575306339397852767470785a6a6367447979767237447a2f6139394c4f65582f516e4c2b7332397062336438322f594d7a766a5234355a3961372b734f6171565061335838416f4a6c2b3539652f2f725737414a4433594c746e35792b37747833637675505a55694f5967576876477a6d6e63307778476e393378786b796d72543656306a39724f63585737592b766158376d554e39727953386d49374a6f382b62636672737a724579476743675559517941426b3646735273326e79675a2f667a5961397a2f67566a357331353138775a593264316a7665705657506e726b502f394e432b7a567565547037516e6344694265506e7a4872583341764f4f6e50633233786b4145444768444c356d2f7165373854705a482f6a2b6b57442f62642b7550617861323934304f645964336575576d4c3275774c37447a7933385a3564776366626232545a6b6b6e7676656a73326565507433796d35593638665053525233767676662f4a6a5a74363036364947617a327470464c46303236614e36455a735a32582f7a4b2b6c4c336b51334b7a67632f572b49503333586f497976572b717257776e5858764f65534a65666c3273344c56367a6f57506d352b66583967494c306e41666237592f5744416a34707369596d6a4b35667a466572644559784c527a337a47456632764c317164396a686b3463377a7037684c313952332b7578397658373968622b52464d5739717a646f39785a385230706e574f5a6246394e2f594f6a7255393871747133714b5038314d5a2b494d55655a664d4b62556e332b73796a6a78545879316148655737627a66486576333144715532626e726e2b7659375a66495a4b44734e30584768444b5a65334a665835794c6d545278534b464d397a4d2b783772726d447a61364c713849666671323762566356334d4366536e4d2f32443843562f4d4d4d476c69463179672f3934385a647864436958757469547542594f6c4d38547935644f753339585a5062326b626c2f534875502f42636e49755a4d6533304a67776a4759674a5a37343931335a2b37476d7a7462753376766e7659397566725632335032417a494f4362496d4e436d637a7432684d6f6c4a6c7731714466346e313968374d5a5554545a65544d386f31757366326e4d58392f32654d5a666b474f44384d554c786e397978577a623377616950366537355474626172316d3673534b582b3361477834732f6978624d756d534a652f4f75474873652b70586353356d79715332556e392b6b47456b6236706a38756a573571476832766b7839322f6556394e51706e674c42486e2b4436726248374d5a454f314e6b544768544f613237776a5579786e436450652b2f5a37524f5a67363552317551717673502f446332722f66667575716e7562387975733239685a2f6970484179732f4f366272774847336764665831486637707074312f386633753567545a2f5375714d7337733975774e74486a6b37416b6c6472586a44434e35557932665a656e65646a446772316d385a442f3969626c31584f5337767a66456b705032747047443676614865747752383032524e36464d7a6f70655470784e4455572f65516a2f3174354932363859736e64336e4f456d744b436e646543356233336e6e78713736626f597331312b3164324c462b793061755934665832482f2f7666504e716f6e4f36312b6a4f374c4b4f5a7a5673436c5651723964377532486e4946376b75576a374c456d7236384c5565656253336a744d4151636f7a7a656b63584732524854385879755478664e413947794b68544e5a44754e35412b7a506e7a487258455034745658377a6f4d717655586472522b444c6c6b7a36334b666d5a5639533545306465666e6f582f3233687a534d45612b4a5a72353035662b5854634f6f2b37544b774a6d41715a47577a374b4572596c32372f3150316a47554f66694c462b76593756666c4e774f712f41374837376f46475174316c7348516176577238707342565836484f65722b346472486c713734577750763131717a646b3978542b376138486a44473862464831756a59527a5872623977306572697a685433702b362f537761484a77376958573843706a35614f3873537170332f396f756d722b3977375436674943755042745874562b553344367238446f64514a6d65687a6a49595171312b5658377a6f4d72766348717279792f2f30625533504f694c384e754b65334c6c567a6439385376723639687048715a4e447a78783863665761426876704c677a7852636e386d42764944493450484867544d44557866774c787252326c75584a3249756b746d7839716e6166555a435652345071397176796d776456666f64444b4a4f7a4f47635a744c654e484d4a36636c562b3836444b3778416365666e6f4431592f394a45566178572f504c46314733755872766a627264314e576661382f38427a582f7a4b2b737576756c736363324c46463666342b6852666f76722b436e552f50484867544d4455534d746e776b4f31383939327837716439667141676f5452672b3332712f4b624231562b68304d6f6b2f4f674c7335776272446c7676725a5a4a3448565836484d50426566766d506276783274317378454d567762746b5636332b34397248736639506964317a3473622b783858376769692f527037397752303358556d3361664344496c517a32464a58424d6746544979326643592f547a6c2f586651382f55363848534a435652777536426c654653705866504b6a794f7878436d5779464f7374416c64386d552b563343414e764332514736396f6248727a6c4c2b2f4c6f4a4c493639702f344c6c50662b474f346e663051513968544c563078642f576269745442744d7141326343706b593670702b52617a742f49332f33342b30312b6f43437244776137424a706b77305a554f56336d4951793251725679786e6157676d627a48506f774b6e794f356a75365855336244547748724a62562f577376506f663873746c2b6e4f36734165557848656f37355750724669373659456e616e544e475279654f49683376516d592b6d6a746d716c513766794e724e2b7774305966304947444c39537532362f4b627835552b52306d6f55793251765679687242577769627a504b6a794f2f4147762f4c716631697a646f39624d527a335066784d54726c4d3053712b2b4a5831637271577550797175322f35792f76716372555a484a34346343624a36364c6c4a364f486175647670476633387a564b44594a386d7762563756666c4e772b712f41365455435a62635a615a444732746845336d6556446c6479434b44742f53465839724b55524c5a4a504c624f332b5451316a34395557756e5656543131796d626f666e6a696f70352b575752637450786b395644732f6762562f583438645445472b54595074397176796d776456666f644a4b4a4f6e554d744d68725a577769627a504b6a794f35426531504c5033476c645741746c6b4d7638634f316a7936355972315730584631796d626f666e6a68774a736c725a4f614d73626d3238784f3759333039467245472b54594e74747576796d386556506b644a71464d6e6b49744d786e6157676d627a504f6779752b4a5357524b63742f447a2f7a566636766c6363684b43355574666937543133633454765854775a36694d6c676d7957756b7457756d5172587a45797665305675376137426f4d6369336158626e344d49374330497a6f4d727638416c6c387252742b3845344636504b62324f70386e746945706d79783936314f796637794d74486c526171706d31457a6d55796d46595a4f4a506b646448794e5650313271562b2f2b5a3938533879794c6470554e74596247444d6779712f7779655579564f6f5873345131724f70387073485658355033424752794a547432687365724e465a794557547550686a613551577173617471337275327642347a47764c3450444567544e4a5868637450786d3958727655697964472f4332785161597a423958747434457844367238447039514a6b3978656a6c4457382b6d796d386556506c394936397555626c48496c4f427a317a3534316f556c78485356652f4b7232364b75535768376f636e446c794e4d6c4e61666a4a3637586170502f4a6f364141787948546d594c76394e6a446d515a58663452504b5a436a555573436872576454355463507176792b6b662f305a3364624546474e6f704e3630332f5a46507769693647705243614a502f724b786f434c352b742b654f4c4150656c64332b415865753132716439372f354f524c792f49644f5a67752f30324d4f5a426c642f684538706b4b4e5253774b47745a31506c4e772b712f4c36754836782b794972394b71315a757964796a635a4e447a7a786b5256724a544a4a464c6639756876754358564a475279654f4843373967686c47767043722b4d7539654a56556c7832324d734c4d7030353247362f376c414756506c744361464d686b497442527a61656a5a56666a4f6779752f7232747264652b4f3375393248697633354e2b2b5075596c7030774e505848375633543667684f35372b4a6b6672413530554666507a6c2f47755a6a426e714979574e7433504b73464e764f464871716444364a3375765770774e6357596a717a592f6f67566c53703870734856583562516969546f6331624169307a55655733735654352f573148586a373652312f5a3644346b474f6a75666e373954384a5664643235363542454a6f4962763930647037684a42744d71413263585a3131307a52755863547366754476573751783762587566656948435a5a773562684172716c54357a594d71767930686c4d6c516e46374f3467586a682f427671664b624231562b6639744e2f32575477444756762f682b64366a464d7673505050655a4b332f7363776e69793966394e456a7a7150766869514f6e796d2b544231303172535253644c426a4c75346f486c383975352b76586264666c64383871504c62456b4b5a334954713555773764796a44636c562b3836444b37334732647665755762764866556a6c554e38726352624c4f4773706d6a68727165702b654f4c4171664c62354546586653754a624c786e563843723274386249696f61624c64666c64383871504c62456b4b5a33495471355579614f4a525152705866504b6a796535772f2f2b6239626b4a615152624c464e63676b516e6f32687365544637464d345044457766756b653644576c307a4231323172695379667350656746663173353566314c486272387076426c543562525768544735436e57557734617933442b486655755533413672384875654861782b4c734c53343451373176584c7666596b584b7831352b656a4b712f394249685054662f2b6252394e65514161484a773763593974562b57336f6f4b76576c55534b56336e416e58633764345659636a4b6f6272387176336c513562645668444b35435857577761444b6666565435546350717677654e77372f692b383763536d4537362f656c76594362766f766d7851334465765756543170683176643277497448686e554b5370446543724b71657469337078335a647a4f682b41664e3462627762542f51506f71762b31744931583562534256666c74464b4a506232452b5658794a513566653131762f6b6356466a45476b6e4f582b34396a463168594c377236736553666933313331615a52426a79463654354c5578744b336f64576e6e513344482b6e4350385169642f7a6d646731745270637076486c54356252576854465a4339584c6d7a42724b31496f7176336c5135666359793253695354584a7562573739396f62486e542f673175337354646862466633615a57424331494367344559326c62305772547a6f546e55393072785049397a505547325577323232362f4b627835552b5730566f557857517656794a6734704f6c586c4e772b712f42357a373331374c4a4d4a4a636b6b5a312f6634542f36796b593376785a537858595a484a34346d462f57654b77654272736e70563774664d682b764f486e6353346d79424566672b3332712f4b624156562b5730676f6b355651765a774a5a367279323143712f4c35573869496d4843664a4a4f65582f7551665a584e31636575716e6954484d475677654f4c4171664a62463450646b314b76646a356b6139627569584357583738675233774d71747576796d386556506c744961464d56754c3063747262527261316a5272737636584b627835552b54326d475077725a686e512f5a763356666e582f57443151347237317374504e2b3175374d6a7158385a587264367863747937336f4f784c6f613246663045736a6b4b2f5a46486f797a304f484177665a58666a736d6a42395874562b5533443672387474426233494a73684f726c4c4f68533562653556506c4e4e6668766f6661326b536559494e333731417531486c4e74326e7867356563712b727432376a70303437647a4b7970303475615277614c30322b375963636d53383670766c6e452b33314b722f48725831386a45566c66787a476152314c7137646e5a64654536494b776e7779423373624a777176336c513562654668444c35434e584c47647177584a5866504b6a7965307a414d787265534d666b3056337a786b325a31466138596764597475334979306633397a3733354c362b52376f5062747a5557364e6c626a32376e2b2f724f7a794531587944566479694c312f333077786138754946343665642b34365a4d38616566767170627a70632f386231762f6d2f4f3363646575625a6c347165392b5974543964756f56445251725a323938377148462f5a33786a71694f695737316a7872712b76615650626332336e77375275592b2b5872717a6950584a69516659424462626272387076486c5435625347685444354339584b474e6978583554635071767a324b775a3138584f4b6a736d6a4c313036626534465a773168597679556b303871337366466e34735854722f326d743930445466657332763968723231364850333750786c425a4f63743933655864385253487662794b574c4a6c3030623049784b6874436c616a2b746c4863354d755776377151632b6376313932317330614c614f3766764b2f4b5543614477784f39362f5054386770786d523246766d5872553858724c2b3031424e6b484e4e68757679712f4756446c743757454d6a6d3947774c31636f59324c46666c567838754a3848334c6931654d5036544b326133634a626a7a48467675327a35334f4c5070676565754f553757344b48455876322f6e505a6f5578394e7934565061336c6c38366366663734566e325832397047465865372b504f6c4b772f2f33592b332f2f56746a3866504b2b39597632666c352b5a583974646c634869696433312b576c34684c724f6a304f3959747a4e354b424e6b48394367757632712f4f5a426c642f574573726b493034765a326a44636c562b39654579453362765576454e2f624e7233312f656f74502b346664644778372f2b693050686631536c373132757159626c316f653152326e725733555a63766e587671787a7474753777366557505766306c585a59706b4d446b2f3072733950797976455a5859552b6e30505037502f77484f6c466d424b2f6934726f397576796d386556506c744c6163765a534a554c32646f77334b562f2f5468636c4a303147494f504b35593062483665782b74594276777851756e722f377552384b7562693137376654366e7a78657234314c6978654d763350566b6d396376366943746c463033793962506e6644375238507676693579735675645438383062732b53793276454c647855323662566a626573797674425553596b6532614e3235512f37777176336c5135626531724a544a524d2f4f583861356d4e6d645934667762383371484c2f7a77632f477a5272653835303459366469344b544e522f394b506835786b666233627670416c6164466e446e75626266632b4f4756562f39447a447176356458364c58377974546338574a653257677a43763752796276574c3849766d385666665776714431512b4658544a5432536c64475279654f4844627467633645546c7972794d2f57533653577239683732584c357a62386c6735327855542f54756559482b6a4f5859632b736d4a746b497535377072335648384f494b6c594b5a4f4a554b6c7a667446703859794f637a48547a72555570515a3237516c3376456a466955792f5530342b365a59625078787a5163537a66532b56394a4f2f6676502f72457444586278672f4632334c3074594671486f6d6863744d2b624e36542b6c71344b2f4b495044457763757a716b72716c52574c4d744655735654496d45584d6367747a616e6233366a79586f51696c4d6c45714c506c386a736737636c494a31744e6d696955715948744f35344e645431586637367a2b6b536d33796b6e6e2f5431502f6e393972615244666c65467833307570777263665058757235782f614c6b6c626d4c6c686b336c366c6b46576f476879634f584a787668797156466376314b50522f334c6972346263307032352f63387037455931514a684e78656a6c5a546a32465776557734537a5036426f497457476e2b46616d58537263316a6271537976447256562b366644524d6e3773546439364948373762473862656565714a636e5044546b6d624337547661324b7654595a484a3434514b464f5856476c736d4b35486f5765734b682f684675615762632f54746d6a6a736d6a53793376525452436d5279453675566b4f66573061664f424f454f707448582b71643158736e44564679354d666733462b4c2f6f595953364c532b2b315071742b4a736565434a6d415a336a2b744372762f755261484f62585265656338574b6a6d592b2f4f742b654f4c4168547031525a584b71684f4554493943377a2b704c636c6676666570463354375779694455314f6f4c36464d446b4c3163764b62656a7279387445344a526a6e644e6f4458775050507674536e497370526c6c4268743872507a736e314d6455787137505737367a4a586a6a6e482f426d4674752f48444d625066546e3567624c626b72487637464b36445576794c55535732445055566c73454c56763874767133566b5955386b62496b66622f68355933756e6e5450485a764d354e717138463945495a584a517a6672716759344170352b52326533643378746f31634f6357652f53344f4d4c7458502b5538746e52686e765858684f774d6f794c62547067536543483450646e38676b4c794c7a526f6f4c2b374e7233392b305630436a706c553262336b367a6e664271367253346535544f522b46766d62746e724c543237433930357a32314465717642665243475679454b716b614836626131526970395a434c6445762b375464744949766b776d65795053624f71563938594a596a61547351752b4e4f6a77787a75592b56583472467171646c2b4752523676657752536b64357054743738353562304953436954677a69396e476964365a5a51695a316174356c51532f526e6434374e39554d50766b796d592f4c6f2b496c4d76302b756d423371656e3578364d56536633357a446b394d65484c776231506c74324b68326e6b5a31743231733445396a6379362f61464f54616e462b356f574573706b4d50774c314d755a646d364747794256596d6577586e6a78465466686459566174745061376c666b5a544c7462534e762f73386672457350622b7155396c426253386f655444626e384d516e4932304e554f573373635064386e3742767237445666364e2b772b6b722f4b625537666671536d6b4a5a5370765643396e456b546377746c56474b6e31714c56546368314f5737775a544c6676483542765661594c3739305a70794c4b6656386b30594e41336274436452645565573373635064386d7a5a2b6c5356663132455a664935646675646d6b4a6151706e614339584c79616e63313738386f3156697038366948632b6336334c6336686575443978313137786e566d664e56706a50506a2f51425a6361742f55384871686d57646d6e714d53706636664b623956666f6b6a7476447833724b76755252426b6d587a483148646d382f45317172775841516c6c616d2f5435674e42727153396257522b565835565967666574484d63646d582b3467586a4c316c795875317536536b6e6e78527132467a65726f52475461756f387474596f64703571533238736a5642455a624a4639332b6e506255787a6b62626f536c6649333046726567316f36386644544f6d766b356e526c4f50616e457a6843454771495834386c5133616238796f482f34385a644d532b733644462f3663722f72365a33646436636438555a777a2f6239314a4a58364c6d484a366f796d2b546857726e706470347a36374c6c732b7434432b4b6b484e6c317531336167707043575871625839766f47323663326139792b6936504371784d7a51394f332f5a646545356361376e4739637679756e32486e6e35364b3272656d4a65327a6576583144666163795a4d38614f474e47642f64657a4f634f41494d663339724d316f4c487476477a724e2b79744a705135634442396c642b637576314f54534535323566714c5651765a324a327652795632496b3576426d55652b392f306964533475323962302f59526c6937556a4b764e5770556f417936704a30436a526f475244692b3978686241786f37334331627a2b376e712f6c394930775a3574547464326f4b79516c6c367636714339544c6d58426d646c562b56574b6e2f74617333644f516b792b532b50377162514776717459626c77494f6d313836664e5177594a67653236374b62304f46617563567147424461354233656b37646671656d6b4a785170743769394849794b2f66567233766277546758307a46646c562b47364c6f62376e455453756f5a787a774a2b39392f716a4f2f42334a2b48756d4f39496f7038785356555058764c447474636a7576774233725331382b4757484b73475079364a7a654d6b354e49546d68544933313952324f3038745a304a56685661726d6c47416b622f63392f4d777466336d662b394279612f392b653843724b76724b697a34343361635458334f6d56554c5676375073744c4874764271482b6c375a326c337533714949687a65664e794f66634e4f704b5551676c4b6d78666673446261365a4f695844445a417173544d303438612b4e646f6c336271713534746657562f30504877364c5654426a4f675172507a736e44794b67756639334776554d4543563338594b31633472382b4d4e50792f31352b2f34656670514a71647576314e546945416f55324e3749323354665864486270747256474a6e794d61656356724171317133736666696a36335a394d415450714357324e726465366a766c57685831544635644b6a44746f626a667a332f53736274703148444146562b477974554f362f4d6d7256375370304332644b6466736f777032362f55314f4951436854593175325068336e597334636e39766d4770585947624c324d616646764c424466613963667458644831332b5030517a7733662f356e30427232726c5a2b646b6334666a7246557349314e6f3144426734366265494c2b704b72384e484f3632743432732f693939354e4779326e7866332b454938774535646675646d6b494551706b6169354355392b75595044715031664c2f7a7775314d53555961626b78703538612b664a36646a2f6648383338634f316a5266664f357a5530416663753562524d4a705158586d7a39454b6735773441675938682b7176785733564d4e4d4831343352393356662b58727274725a306b2f4f554c7467766b586a4d6d703278386e4e63367366444b4449705370712f30486e6f7654792b6d614e79362f4f2b786b4b3461734673766a6533592f662b304e443136346150576e76334448585273656c38344d53737939537a6b746b386c65633459426f65726664633463712b31564b666e3034654946343265666e3641363162714e76535739565350554c736770334179564775645550706e42656f746255464d527a734d374a722b7a444652695a356a6d587a416d7a75614c45797575732f395369327465756e6871782f517a4850583170725a74443366496132624c5a497148384a32726c6753356d4e506257727a327256484467464431377961635a577441733461373438612b395a5354543171325a4e4b61745657766264797939616d4c463034763463656d583379555537666671536b45495a537071776a6e3452325433316b474b72457a5450506d764b73756f63777878394b5a33777a7635343237614e3645615650623839755a32424c724e2b794e646b6d584c70325730783075476c374742566b624e5179495666394f347479776474346648377a336f724f724432572b763370624761484d33716465304f31766f5642544c506d646d734c41435758714b734a35654b2f70307558576456614a6e5747614f575073694248644e6233346e743350463339755864557a3474586c4d7776665037486f4b446979354a6a394235344c654d6a726f67394f3939485552614d4f543478542f79377651396131387850454237505048392f654e724c695a54764661364a3457625132427779796a6a756e2f6f4478464545495a65707133555a6e475a545a69597730737a6474716d64302f57547a71523162506c5030614264306a5a2f644f64622b70703748667848746b7135593057464e6b31664d304a5236696b716f2b6e66547a7255316f48487476482b55577a77656c79366131442f54554b574e392b793662506e63566e366841717a6a7a717a62627a784645454b5a576970364f5845754a73757a444a78737854436c327352656e6d4a6b566677362f6239522f2f366d7a706c6a4f36612b7334465671454d647a6462763978644d3861587a69676e3469676c562f3237487a2f2f3568327366302f7a617835785754663270354d5064313435794c356f336f6670515a7632477661304e5a534b73343534334a35383939635a547843475571615651383754356e575767456a73746b575154653057506f4666334e78582f76372f58573354525a7334594f36757a4b5673446f6e327378626a616d75643644514f616333686971507033367a623278706b5654326a5a6b6b6b566844495268727576486555576236676b4f35693264766532384f5734633166364c39536b69666d734f484e71436e45495a5770703178356e475a54356a46614a6e565a496367786e396637502f7162752f72372b374d3678633261646c6648796d5a3237446b57377045554c4a2f71364751624548416145717464416c66324b434f3338754f61645a4166542f5a76337454435532583867665a58666e4c723933647343725876746d4b374b62365039726c7451523974335042766e59764b724c7145534f79317879736b6e586247696f31472f38707131653637383671594c4636332b394266757547764434333139682f5037485a2b4d564b4b313378392b6149617657343030367642454b314d4371715a6645614764483965386c2f7842676b666c486574627562497977716d4f4f5858376a616549517968545333474f327333794c414f5632476d56662f7678387876376a4d6f316e596c575547622b42574d61574e62484b365957723568513952723476324f2f385739725344732f726e6b586739364f79614d72766f5a44666139736575434a6c76796f434f73304d2b7632473038526831436d666b49746e732f794c414f5632476d5659725463384266747358546d6931395a3336714f61566f624e3857612b632b70356d4a444e4f63564532716a467630714f7a3067564a586659354a7339727a332f696462386e4d69724e504d716474765045556f51706e364362563450716479582f31555971653150726c69747076513330472f2f4b71373337766f762f316739555031585467547167703476775876632b3653596341516c5a336f68617258514c2b79537a76486165646e6a6e74726b41666d6d7256376a7278386450672f4a304a42795a6b7a386a6e637733694b5549517939524e7138587a483148646d646e756462455672545a33533372544b4d696477714f2b5647372f64336239775a6d74332f59704e684b6f4350754c5653572b373041304477673444517456726f4638314a377845614f657657382b346547416d57595038794b4d74654e38644f42696779752b5a2b5654354e5a3469464b464d2f54793250556f76703731745a483631444a78735263763932342b665833785a334966585772657864396b56367a2b362f482f5561302f54336d42566671755a394d59725a6d6a69314776676d4c4a4c4f386470353239557a336a7034716e5658387a7132376131354c327032323838526136454d6a567a354f576a5062756644334978637a6f7a72486969456a73745637787276375279727676773234716e326556583356326a6147624c317164445863394638795a6f525634784d56387841512b505a30525670776445614f6476564d39347a71797a71722b592b78352b5a706a3764694e7372732b7032323838525452436d5a725a3378756f34736d6357526b576d46534a6e544a6376484336442f534e3143696132644964612b5a2f326c536e73336e4642483346424477386e737032376952763579656f5a397a574e69724a44715974573538617a7238656f5778325474312b34796d69456372557a4d3936416c55386d566a4a497467717163524f6566373079782b7769656b452b714f5a4c33356c6664674a39694d7648773156356263595631527a696770654d554d5161714d572f616f35505342434f7a3976786f6c2b302b57587a717a2b6b72362f656c67376d50627354582f456545376466754d706f68484b314b354c393839784c69616e636c38426e3945356c62696e554979667633767a68397948453175337366636a4b39626538706633746553736974594b4e624532776d4859586a4778587a47712f415a557a656b424564723536316235505762322b516b5772766273666e3434573542322f4478392f7a2b6e745a6d684e694e62394d6f496f557a74624e7755356279536a736d6a3836744b4a664f69354735692b2f64752b6f4437384b5a755864567a38636657524e764e394d797a4c3457364869646f657357456663556365666d6f4b72384256584e36514952322f6b5a566676756463764a4a79355a4d537443487632665830454f453772673777756f6f7a6d626b7a47347351796155715a4f2b76734e7846732b6665476c6f54616e4554746d364c6a7a6e3673393375673976716e6a573965396d69724e6b3574417a4c3461365255375139496f4a2b34714a7471794d66745763486843686e6239526c64396a336e76523264566631666f4e652b76622f382b7032323838525542436d54725a742f39586353376d784574443630676c6471707832664b3556367a6f6342384759743347336f732f746d5a7264346756677146574f3874747657496976324a4362645369587a584635694f30382b4c782b4b5a4c44326166503737364b6d2f466e526e61367978432f7a2b6e626e2f507a6c2f47755a6a5a6e596f56384274436d54725a472b6b7367784d764461326a485473446c574255695431764b7a38335879347a51496636586c6c3278666f6672483749726168795545334c4e6571776a314162746568587a656b4245647235514236507035783830744a464358597733623935583033372f7a6c312b794e555454376d6246562b655a5651706b35437a644f2b36644c5132704635556157566e35742f38396536334963427576486233636d334d7133623242766e68736874613664526833334532616a464d6456556f5972517a676634654c786f336f5471722b324f3958747132762f50716473666f5772794d564f6e71504c4c6277686c366b5256716e4a767238794c616c3238634c713676774f33626d50763873742f4e4a7a544b334c53507559304e3845725a73684b5065776a314559742f6d2f50725a4971564248612b51417a78316d6443585977486570375a5167313750632b39554c61577a722f676a45356466766a544c45554e39616a695835436d646f6f68694a78716c4a317a5275585959395a356b58315836554c7a396c772b38654c5439797447496869704c66384d33636d795757696855466a546a3956652f434b69666d4b436255586d4836565661474b304d344866724a596b68314d3939372f354b442b2b516770353478702b52536a446655327a2b6e474d6b78436d647259393153674b7239544a7557324156496c646c493563397a62566e2f766f306d4f3536796a346e75614a4a63356375526f7150746777624e58544e6858544b693977505372706770566848592b7150687079522f4d7150344b31367a644d3669747542484b394f545537653935504e424f3073365a71767a794c3451797461457156626e50614a5859536565556b302b3639706f464e332b74712f716c314857554a4a6335664468514b4b4f643145366a446b384d7456474c667456556f5972517a67635650353035376d314a56716f2b38756767747339454b4e4f545537642f31353541716647457339342b416c346c6c4b6b4e56616c4b4a664d69755973585472396a31622b75357454537571732b6c776b312b652f6f70647070564348354f4275314f475a694a66324b62647350706e3838446a4a2b5772527759765558756671326251502f68794f635a5a5a5474332f376a6b426c794d38637034496b2f30496f557875715570564b356b55456257326a766e4839496b746d42694c5650715949786f313971775a514c3830704a4239716f786248444c7a4d53743237556f4f4e6e2f377751776c324d4e3333384450464e3257412f2f442b41346d722f475932563154632f43425859684b4f3133714c5731414c4f3363464b707333623036475237484b7649722b7755383337573743742b6d534a65634676384b4c4630352f372f784a7439336566654f33757a3339547141592b31333548332b792b6e736662567068374c466e4f48724a4b32626f7235685376792b684e6d725272325079364771712f455a6f35344f4e6e346f375533777071682b6f62396e3656504775723057494d4f33636432547a585167316e737270786a4a3851706c3665444c537975644a45334e37694b6a4550754c56716a725833764267396c2b6c3972615238554f5a456139576d626c732b64772f2f4e434d762f7a2b356a567239336747766d473733663338662f717a753739782f614c7965334b4246744f644f737270624634785156387871767747564d3370415548612b5244697036574c703159666648782f3962614268444952516f536375763052437651634d334f4743704c385837597631594f71564f574f3631526944315a56707a7a314b735a5264433676765762426e617557574f4e36417573323976356739554e6c2f7930767642686f52346179552f5853714d4d5456666b4e714f7a537a6e48612b6444656c584e6d6e5a576735376e372b5948455742456d5a585071396f656158366c6d55794631495a5370423157705369587a47684773716b3535716a6d426f74583936665a76584c2f6f7a6c564c484a7639526d3738646e656f4e636e77576f30714a42396e6f7862486c4633614f5534374839702b6b4c613255556c6d506a6265733673574864536375763250625938796e687255326530306756436d486c536c4b70584d717a6b3936596d315857497764557237746463736547443938697457644367442f4e752b664e31506a3778387443472f37436d6e324c35554a3830704a4e2f4d777476786c5672612b5a6a4e573949766b6872795270764646302b742f6d725862396a3770762f4d67594f712f4c5a4d30556e6f326631386b49747869694c4845637255674b70555a542b6a5a56374e36556e586662466f5739756f6c5a2b62663966747932372b576c6648354e45656a38635550613362626d394b58575348614e5a4c6377724a6839716f52622f695456464e4b66514958616b68727a576566583643336c6678327472613352763836564848396356765a4d664f514f4f706e4734734c5347557151465671557131767a64514870487147523271716b367066644d38466f73575065794c4630372f3065702f732b6257526659304858506a7437744e31424e4e6f77355062456874736e72706d6a65754f6531387949463138565a4e386a4b39662f4f2b4533565141377a524a6d5a557769785547664a714e68565349304b5a576e5470564b557155616a4d4b39584c4c3152566e664a5563774a466c575a316a722f326d675750336e505a7a562f72536e575965696a662b73342f75516d4530716a44457874536d36786579693774484b656444334f74385873764f7276366137356a2f596c4f563479773943796e626e2b6f4d7554566243716b526f51794e61417156616c6b58694f4356645570547a556e55465376662b484d583331723659626250333731357a7562764b3170336362656b695a737433512f4d77494772314746354658354461696177396f6974504e6837712f767576436336757531486570375a644d4454377a522f35703836566c6d33663434372f484b4e68565349304b5a3646536c4b70764d6130536b53744b6c796e3678364a6e6a336e625a38726b2f577631764e747a2b386575756555387a31383763394b304853756f3665783878424d30704a472f7a5945796c6c6e594f3163364876784273366149454f356a7576662f4a4e2f71666b69383979366e62333964334f4d3537504c2b46327779665543593646552f4b666b624879627757644b57703874756373345362733169304748706473755338762f7257306766574c2f2f6554523959746d52536377357375752f685a2f4a7530676f383130696a43736b3370445a5a765651547a51647035324e4f50335759502b476965524f71762b7731612f65383064474279566432354e547437396e35797a67584d37737a74774b64444a39514a6a6f565430713162332b676f794a536261344a56664b67314b46734178654c7472574e367272776e477576575844762b6b2f637557724a646465384a38745437592f7a5831633955744f787a59436577326539315a75784c686f3172644b51326d54314d6d50613663317035384e66457a53726333795343597848486e326466583852566e626b744c343456426e7973374d62547a46386233454c676774566c5772613150624d6271394b374c2f7044585166624d4a58715a6f544b4349724f717a466e3075576e50656e587a3636592b65686264735062743779644a593731395a74375033536c59646275786e7739305a4857577230763536336b616f32476a5774456d656a5673666b305a63756e61623556646176694e444f573557622f37744c70392f343765364b4c333731626475364c6a7a6e75503879777178685475754c5135556872325a54496655696c496c4f566170796236394b374a4771367053716d684d6f6171483449732f7148462f3875577a35717a763464763679653976424f39627679616c7379742f396550746c792b646d2b66453170414a55486870565344354f797a787678756d584c446c50383274554f322f566d71414637357453665368546648654b642f467845776e4a5a77307a362f62484b555075724578656c2b314c6f616c4b5654615a5636684b30715779575052313965397657766d352b6665752f30524f3559485862396a727779573535685353443158494b6465443972547a45326a56764d755a3439365770473758547a6674507236446d6e72574d4b647566366748314c773537786f427630556f4535714b4a365861662b43354f4a6c58717330316f556f656c4e79414c525a393838376f63655742362f7537394f782b336c6b77704e576f77784f66744264594f302b7168664d7569785a4f725037366237746a7833482f7a64366e587444747a2f49424e66786a77736953554359304655394b74652b70514a6c58717330316f556f656c4d6469305545355668373430587375752f6c7258545739657876763265576a4a4b45644f77504e7a546171796d397a447472547a6c2b54494c527333755550507a536a2b75732f62694968517453565537632f31414e71776c6c764877472f525367546d6f6f6e70564b4a665553776b67666c716559456976796363764a4a46792b63337239323575725064396272584f334e57353732435a4a516f365a564e6d302b454f513362655a4265773176353632644f5768724735566b4b754b3145776b52566a486e744c343454686e7945612b7553766263344c634a5a55494c565a55717631364f5375792f36515273366d334356366c7a356c6a506b3246325569396250766575323566642f4c57754a507674682b432b6835383538764c525676323061656347576d2f63313364596d3479764f644d716f545a715a566e2f546a732f735a625075797864504c5836332b4b76623376383248394f766f6f35702f584678514d7154686e797851764765326a77756f517963595571694a446c51674f5632454e566b6936567861497430623977356b65722f38334e582b75717861715a46713672502b3355514c2f767333307661593031474b773270704238714e706b737a744638493172357933664144356e316c6e562f785a466632787239372f3053354f765973367032782f7141565832546c4c717935485963616c345569715632456345717952644b6f7446572b7669686450664f332f536262643356333930364b44733364633371394f73564131736575434a51382b38474f5269576e4b6163714d4f547778566d3878426531554b307335622f714733745931617647423839564e3339322f65312f2f4f326e3867635a58666e4c72396f523551457a326765414e436d62685550436d565375776a677055384b492f466f6d5534356553544c6c732b39312f4e6e66435a4b333863647233566c7131507432534158546831564b44396d38586a4b375054784737357a7059672b312f6132306132704d303036764445554c584a484c52587053447476497a64655973766e6c70394b4850482b6a32662f73546334765761664c744e5474332b55412b6f43576461754d3372733330704c685650537155532b3468674a512f4b45366f615347614b4a384e647479384c752f6d3868657671512f5651587a70384e4b6457464b6f6979594b75316d5334323759666a484f48793637792b396a324b4555304862525873516a74764b546465625050547a436463366a766c556365375932776c44756e626e2b634231523732386932746c4765473777756f5578634b7036554b7335524563557a4f74586d6d6a676c443071566169465351785339345674752f5041564b7a6f43586c75754a5a4d794f7a5174314e485272617049307078706c62362b773345794e5166745666336c4464444f5339716456377a616c69325a56503276632b2f3954795a66797033542b754a51443668576866356b5353675474732b74346b6d4a516b334d7a756c4d6b336e74502f426351367238646b78397030644b7159724f363872507a592b5a3372627157567271345457442f2f4b2b6b46503775582f7a766a675830366f6c5563325a56676d315553752f2b6e664252576a6e3565334f652b39465a31662f3636785a752b6552377354726a334a615839796f6e6154556d6c416d4b42565079683353714d5165724a4a3065537757726377744e333634466b6379445532706839634d56707a5450567369314c72466c69777161645468696146716b366e7957326c584b6b59374c32393358746546357952357161315a7530653350387348564e6b3753616b31685836445576476b564371786a77685753626f3851313649394d4f316a30555a4b4934357265676178722f5670357838306e64762f7442485671774e6456557472496b372f34497863644b51596a695578356c6978532b533339727952683265474b6f326d53712f565172537a6b74647872683030615262562f5530375a504e716473663667455661736b743051686c6774712b34396b3446355066636349717359384956764b6750454e6569485474445138472b52586132306265752f366357747a74596b535535426a524532686854647a664778316f48564178484d726a79627a3237376648755a6857465a5270314f474a6357715471664a6273653574325662355065616965524f6146736f6b4c48535939774f71374c5a4b33646d2b464e47526c342f476d592f4e386a6a686a5a75694442714c5a3353717a5457685273376c6d566a2f31657a314b76337a7952577a6332314c715859616868304f7465526c643866365058477570324e3661396157623937536c4d556a66583248347a79673871742f4631794536634f53717677654d36747a664d6262636c2f2f5464655a5437675a716e686931377878486871636746416d35454e45785a4d79686570456c7432664f4d474c71694866706c514c6b52717247414632544236643561393236716841633178783672414d78794f5039735a3547686674746c587a7738325a56676c56524e4e426578574c304d3472714a7a3637793664337169504e61647566364e326b6c4a3351706d495644787054696379565358326e73642f30595376306e4157496d57355271776169785a4f7a504c33436c56447447663338333139682b742b53322f357a706238326d326f7778504c506b566c322f5a414b37627971333858575a4232586b486c314158766d394b6f547a616e626e2b6a64704a5364304b5a6d4b38364655394b70424c3769474356704d755461694653793956725a564f7538395852537652743266705572652f6e7067656569465069747a427a526d734b796a5471384d525174636e7971333858575a4232666e726271525730713179586632626637572f4f546c4979494a534a364c4874556172385a6e6d637345727349344a566b69377a465a684a4f6e446b794e45615865325930302f4e736a6d6463764a4a6f62726d64367a62576576374757715a545047796d39585a6d7356786a546f384d5535744d6d73624b7861686e566657523831312b576632335834464f716b526f5579383064664c522b4e4d48755a55376974674a334c2b42574e5356574b50383649715661714653433058616b746a6b34566165315638692b7537672b6d486178384c7455786d36614a4a726670527a546b384d64514b76724933616e4763434757744b75756a2f7547485a6a546b593133516c553932304b6964704752414b42504f6a70324248694c3556666b4e31596d634d53334e41432f556936726341636b7746694b39396252414279364532744c595a4e4857587633646a376658385462323952332b692b39336837716b692b5a4e614d6e50616454686961474b614b7279573655673034655639564862326b5931354d4431624e59586a326a59546c4979494a514a52385754356e516955315669442f57694b6b2f48354e484457596755716d73535a30746a773056374a503731625938586f36506133636176332f772f5178333033734b3953343036504446554555315666717355704a3158575a4a3236654b70336e483130716964704754674c5735424e4371654e4b63546d616f532b356a54543776756d76646b2f31567148334e614e72394c7a2b376e3978393454686e4c354b4956366a765539386f6a6a2f5a325858684f6a653768585273656a374f4839462b47573633627539536f7778506a56506c74627876703856696c494f323879704b3063326164315952504e7164756634516464683551444a78514a707774335646575067397a6f55464d4b7245585a6e574f62395730634d61696e517135385a35646c7932667137382b57433266393175385948796f544f486150393930312b336a362f4b73336e2f677553752f75696e615666332b677059646564756f7778506a664247797248385857595232586e464a32754c7669766277312b302f41515536715233626c324c70367a73635a3146334e73634a76355a4b37417a5171464778756962724e2b7a5658772f5275777057616174345a617a2f79654e31365355762f387964416363684c637a486d334e3459716a615a506e5676777375516a7576667143372b4f4c4d647a446c314f31763145355338694355695758662f6b4156543349713978577745366b5365334452467648323748352b30774e50314f4c57626477556143367835657652416d3635762f6147422b4d667733546b35614d72722f3648554b566b2b6e31712b6378572f616a695534677a4e3176324b53716861704e4657396959747944747650714237757a7a4d35394c6d3930354e7076667056453753636d44554361576264735078726d592f4b72387173544f774a3179386b6e7462534e445864497433396b532f3735746575434a4f4150764d6a3742715650616f7a574d7770662b3542386a7434722b5243624f5173582f64326a58736c49526a5a705769565645383078464e4b7354704a3158587a617536425573577a497034302f3237497979673062744a43555051706c593470544e47784776704756756e556956324d4f4c746732345a2f667a64323249766c456c56484a55306964593968714549626a763457642b735071686d45306963694a7a7859714f4675377861645468696474334e47576a466a4862655a4a4f314963576e7076784a357454747a2f4f6974324f79614d396f4267496f557773635571497a623867773670554b72457a4b4147336d4833396c6f663248336775374232376138506a63625a766a436874666674374c7a6f37344d322f38647664415465345255356b52725330784f2b4968683265474f637a5655537a596b4861655a4a4f314b7a4f385146585375723248306542547570494b424e49714c48576a476d3550555255596d6577416d34784b2f6f5a3139317754394759597a3742766e354c724d55614a57336b446c745a34504b72376736567978524e59766e6c50777162794253446b4e624f4444666e3845525666707373516a745065465443306b5635376d444b71647576514364314a4a534a394242354b7442445a4d716b334b70537163544f6f4163325539385a384b714b4965374b712f386857693554584d39314e39775472597a72744b6d6c4c4d614f58466b6754693554584d62797a39775a61755855635a5a664f724f465036315263374f4b61445a576b4861656342337252664d6d5a506e4a357454746239524f557249686c416c6b7a3935414257584f7a7136586f78504a594c57316a597135554c6b2f6c346c7a3445374d4c53727a4c786854336d4b426d4475592b6c312b3164317061772b396d7442744c43346a34466c4c7833524d4874313134546b742f4945394f33385a353763722b785356554555305338706569647a4f4536356a6e645535766e68363550664a646b7a504a7a746f31453553737645577479434f7a56734350555479712f496236686d7445316b585378644e756e56565438414c752b2f685a3561752b4e747658722b673643436d765a4c3942353637386a2f2b4a4f434369486c7a536c7950467678733143752f75756d52376f4e582f59657555766577764b36374e6a7a2b3956736569687a483946763532546d742f59474e6d6c5a356250757a6358375a39542b4a58763438725864336e4e4843486c3251647037327149524643796632374f374f724a336b564f67775649484f36742f43314a52514a74596f4b3869564a4e79735735376d3750616e6854706e6a6830786f69666d7452586a336d565872462b325a4e4c6e506a55765657332f48363539374e6f62486f7835667861386230703550377a34436c2b786f694e6d594e64767a646f39477a6631587666485861316444334943573774372f2f796239306665722f54616833444c6230747a446b384d5661437445505952464d544e582b747159587349307337544a676a46792b58476232635679755455375665676b35717966536d4b5547587a416834364d3077717354504577567649736a4c486a623076584c54366c722b38722b4c64544a7365654f4b6a792f3948324f46514d656f7575396665326f4e37796c41383943362f3675376959797137796b782f59316832786670614a44496a536c676d4d364a4a687965474b7444476d32727473716b4937547835676c433858444c62775a525474312b42546d724b53706b6f6e6f78556c5372676f54504466556172784d3651744c574e4b6b593459592b504f656257565433466e364b7275766a697152315433316e6577706d2b76734d2f33625437746a74324242392b4c316f3473667776636e76524c3438665178525865506c566433644d33764b703554506e7a4471726857316a2f34486e4e74367a36363976657a7a2b5a7158584b6d4f5a544b506d5a6b4d5661474d675436724d326e6d45424f485370644e7957714b565537646667553571536967547861343967554b5a744a7431793742742b38453446364d53653730735854773166696a5462393347337635707a506b586a4a6b333531307a5a347964634f6262687a3849502f4c79306632397a2f3354512f733262336d364c726669447a38306f344b2f5a65566e3531782b316432317543453975352b2f387175622b7476477776645048484b5a69614978374e68357148696972742b7774793772596f377a783339305563742f5a71506d5a6b4e562b6558455772756f4a45673750365039744f54583850367579546d464d6a6c312b78586f704b61454d6c46733378476f6246354f356237364e576533507930335a395a5a7462766d2b78352b35745830705075312f664c2b67396a627835773235765254332f516e39452b4762396e36394e366e58716a64324c763466617370736a50372f504874625350727455376b2f37534e3335682f775a677a78373131367052336e44727170424e4d36443235722b2b6c773064723268682b753232555552753765317567334c2f735531513262756f6451553230646c464a6b4859655966564258566252446b547846737570323639414a7a556c6c416e68794d74485055524b315a7a642f705452393171325a4e4b61745876713376376a6641744b66346864504c5761762b69556b302f3639352f71724f393836572f654f373935396578707a74663543352f3956325838324f5a4d71345171304d6162617532326c434474504d6a4d566f3157305a37596e4d35382b71554b64464a6643763247454b707358763930656c61335679563268756539463533744a74524647525644546d4452423665337434313032327668367339336c6852594e4764614a5653424e7435556137656c52476a6e635761323672694b4e76747576774b64314a64514a6f52515a664d6d5a6c65565369563268716b593547643231454c47796a6859357754364638753437664556582b464c5031624b4a39576f75646d396b6359386e46687274365545616564785a7262365639466d304535793676592f306831704a326e34347a734a52536754517169796552504f7a4b334b62364e322b314f535335644f63784e714d66437563706c4d5034746c617547502f2b69695530342b71597966334b6935325331626e39615736714b3132314b4374504e514d317435724b4c4e7164762f3250596f4f306d4c586b453174653349686c44475179542f68346769796868344e30544679325436465550394c363263362b5a48746d7a4a70444c712b2f5a72314f474a57377166305a7a716f725862556f4b303831426e444d382b762f5a4647485071396839352b5769635576513556657168476b495a4435483848794b4b4b4e4f53676264644b73455633362f716c386e3075336a686442766377696f2b6d71762b5131643550332f5435674e78786c65712f484a4d6137656c42476e6e6f6336764c446f4764642f42744b41726e333670417033556d6c416d76523037413231487a2b38686f68493772574b785448416c4861777a5148393237667439424445564830314a473564474e4778617057666e4c7a576e47706b327454327a646837772f4d6f504c547933316f316b367052382b71554b64464a7251706e305170584e653364486268565056474b6e565379576961793867335547334c56747a36506f59326175752b5939705536744e32707564732f656639616936714a6a387567575a70464232766d5a34393461375437503668786636396d616e4c72396f53706574544153705347454d6834692f2b384c623378754655395559716546466e33514c70576777342b534474595a6c4b762b51356531564b4573586a442b6b69586e6c6670584e4770756473665068544b316364364d302f4e72357a475864537864564f4d34507164756635794b5636324e52476b496f597948534f59504555575561614869432f4c48663353522b78444e7a662f356778476558635531665050364254364f4f472b30502f33794238722b57787031654f4b366a6233615656334d37687962587a755075617a6a6f6e6b54367675517a4b6262483672695657736a555270434b4f4d686b764e445242466c576d35573533693756454b352b57746463513431307a7943614738625755315531357a63662f2b4235375372476d6e744b5555624e34584934324975367967652b7a56645174733162317732445837662f6c2f46755a69634b7656514761464d5971484b3572563258695543525a517067313071635378624d756e6968644f6a4e513937334a4c373576554c4b6f6a712b766f4f78386e39797a35465a64395476394b7561715346705a53435442394758746178614f48454f6a61534b5a50794b55613762587567596758354665696b416b4b5a78454b567a54733775314c6869696854427274556770682f775a68536a7a6f6563764f342b54392f304b6554305064752b7343737a69724f6557335533477a33746f4f61566f32656a666d31383869727552653862306f6432306c4f33663551466139434864784f5851686c50455279666f676f6f6b784a6969486646537336334965453274744766763150666a2f6d784f6d5a34393732765a732b34444e4b3475617664585664654534316631656a63762f744f35375675757069787254543832766e6b626545464d2f384f6936517a4b6e62483666695663434432366b466f597948534d3450455557554b632b6e507a4858717a65563972615271372f376b6369567337737550456473563733696e6c65356e61315275663939447a2b6a67645646353879782b62587a344d754e4c3130367256364e4a4b634f544b694b5636324e52476b4f6f597948534c5950455557554b6455704a352f3039542f356663566c71746566794d517037767447566e35752f754946343331656c626c69525564787a367638473575542b2b2f63645567447135454a5a37303976335965664c6e782b37736d31367552354e5474443158784b71644b5056524a4b4f4d686b7531445242466c797462574e6d7231647a38696c366c5358524b5a666e2f3635513959546c574e717a2f6657584569732f2f41633346792f374a5055586b79306b5974336c514c6e354242326e6e3835635a4666364265542f76574c71644b4b315446713437704b6b67794645495a4435467348794b4b4b464e4e332f6536502b3579483670527230526d784b764c7157363538634e796d624a3937365950584c5a386273562f61614f6d5658627445637255526d73583641567035785050656d76384f37393038645161745a50574c71644b4b31544671787031555168464b4f4d686b7531445242466c7174463134546d71756c6167646f6c4d50376c4d326132692b505a5656746e33745271562b36767957794e7a5a72307276336265326c2b7174497338713062744a4b64756635794b562f59734d32524347512b52624238696969685447626c4d42562b694f31623936357032497555794a656e50365a496b4d694f616c50736665666d6f4b7238314d72476c43563251646a36784473754e323970474c5673797152614e4a4b64756636694b5639504f6663634947424b686a4964496e673852525a53706d46796d504555333935596250787a35724b55334a5a647075654a6d336e5837736f513558584e792f2f32397a326c764e544c687a4c666e313835622b307556353730586e56324c36387970322f2b7a6e6c2f45755a695a4d3153515a4969454d736d454b70733361574a756f557a503434476530546c56552b4d4575693438353835565339543962613372726e6e5074646373794f42452b6635637069377a714d46642f666e4f762f7257306f53746f6c47356636677844796457764942616d463848616565742f61564b4e6676386571784179616e6276334e586f45574c64556b504355676f6b30796f736e6b356c66747965306c6f3670543231642f39534d666b3057374638425733386335565379355a636c3432763945704a3539303754554c72763538707739334f4d4f7a4e62637571723673373345616c66754847764e7759677536787566587a756430316d614e5966475172305879336a48316e646d302b63653252366c34566150306b4943454d736c73326e77677a6b4d6b7679712f69696954384f4e652f6232504b7659325445572f7472694e57566249766d7a35334f2f6439414572716f61672b46726464667579575a33707631794e7976336a6a486c3455314f6e76434f2f646c364c4b722f4866476a68756347764d4b6673344d6a4c5233743250782f6b596d715548684b51554d5a444a4d2b4869434c4b4a48544b79536439342f70463131337a48726469615033464e626375796d504c306876707576436331642f396942497a67326f5633377670413858584b6b69726145377548367137777074366438635a2b62587a576c543550575a57352f6a676d58744f336634644f774d56364b7858656b673051706b305170584e792b38686f6f677945567979354c774e74332f6356715a427566727a6e554757516c51776b4c376c78672f62796a515156367a6f4b467046716c4f57586c647a636e3956666d763259426e2f74767a61656533716443786446486f48553037642f723252436e53324e684b6c61595179615951716d3165764b596a613356365632427664503335314b354f42397744486c6874752f2f686c792b646d7645446d4f4d56765776792b6436356149726b375161736f37732f4b7a38305031536f616c667572386c736a3879385930384a7653704232587365394e722b2f5945726b793875703237396c36394f42756e7a6a46537467364e37694669547130696b56377662536f4948336776644e2b645a332f696e4f4762725242684a58666548434c4d7648444d5276696b4e2f37365072662f4c347454633871444563307a4635394d72507a676d314f756159526832654747724d77346d3139687975494f32386a6e7474697164363851514c752b3876703337706c75346f6978614c543777355530715551536954686c4c6862692b4e637561347433336a2b6b574c4c3337696c75397355614368466750764b685539755575576e50662b72736c66762f6c2f537537697434704875673847756c306c6e3649535a387a446d356f797153322f646c37545065434c466b3773326430643877476254622b30722b2f776f623558676c7a4d65544e4f48774844494a524a3878434a4d79707237656d4a4553696954466a464f4c503438384f316a2f33463937766a39435353574c78672f4364587a47377336706a5856585355763348396f6b2b754f505266567a33537a47686d2f67566a6c6c38364d33354931357a6350395359687a63666230382f4937393258765a61734c4a36312b2b6263754f33493459794f5755485054742f476564695a6e63715673437743475553324c662f563345757072576e4a306167456a764258624c6b764555666e4837766658752b763370624131664e584c476959386b667a48424f2f42732f6b39763746315774766d31626e4771795a5675325a4e496c533935646935437555626c2f714f344b623671467a39553437627a7345392f4c2b797869376d444b7164752f5a322b675967566e5a3165676b346f4a5a524a514b747a747065464f4f666d6b6978644f4c2f357365714170592b2f354634785a756e6a71652b645073756c3649506f58566533636c666d716d574c5163756e5361652f766d6c796a3566534e4f6a777831507555453276744f567878326e6c39452f78504c5a393535566333526275716e50716c4f3334654b4a53783870646845736f6b6f4653343277757648587676502f446332722f666673663650666e744643684733597357546c7a7776696d57786779746b2f654e36786439366372442f2f317648733270656253336a6678336c3036766161746f314f474a71767a575347747272775270353257662b4636714f62504f436e68564f66564c343878597a4c394173514b4753796954496a56514b747a74686464326b7361396265586e3568642f746e62332f6e6a447a3965733356503333366a6f6f4378382f3853354635776c69786d2b74725a52526476343943666d50764a6f3737333350316e66357046485174656f302f31552b61325231745a6543644c4f6131726c3939696a75336756686c6f4a6d314f2f64502b425149735757337677476333304f372f2b39612f6468597239634f316a5161366b666378706d5a31376375546c6f2b742f38726a625339317437653639662f4f2b545a7350314b6a6f544e486236356f33726e506d324936703733546f574b6c507552716c4d2b3174497864306a5a2f644f58624f724c50796142563362586a3870634e4867317a4d4a55764f61386a376c446656326d324151647235757a764f715057756b4a3237446f5661573564547633542f67656365657669704942645439345a4b4245495a674e44646a703748662f46493938474e6d336f44376c365a6638475947644e4f4638516b5559795a642b77387447333777665562396f594b372f7062785a524a625233547a37425543674467784951794150585131336434332f35663764335874325872303175366e366b2b6f326c76477a6d6e6338793063393878616549377870782b716e6d684f506f446d695274343169724f4b5039744c4d6e74476b564141434449705142714b756475773439382b784c6835353538654176586a7877384955524c6170374e2f2b434d623833657552625478765a66335a6d2f32454e42747331307464332b4e6d2b6c333757383473585833716c2f33794b3454654d2f6f7162576755415147734a5a514179744850586f5548393836656363704b644a746e72443273472f732b66336e617158576b41414b5553796741414141416b384c7475415141414145443168444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a5142414141415345416f41774141414a434155415941414141674161454d4141414151414a43475141414149414568444941414141414351686c4141414141424951796741414141416b494a514241414141534f417462674541774d4439372f39392f482f7a75796135414941682b5a31662f2f7258376749414141424178637a7341414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145414141424951436744414141416b49425142674141414341426f51774141414241416b495a41414141674153454d6741414141414a43475541414141414568444b41414141414351676c4145413450396e7834344641414141414162355777396a543245454141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d4241796741414141414d7041774141414441514d6f4141414141444b514d414141417745444b414141414141796b44414141414d416741515941716b38745053382b31586f41414141415355564f524b35435949493d, 1500, 600);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_urlcache`
--

CREATE TABLE `tbl_mar_urlcache` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `lastmodified` int(11) DEFAULT NULL,
  `added` datetime DEFAULT NULL,
  `content` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_usermessage`
--

CREATE TABLE `tbl_mar_usermessage` (
  `messageid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `entered` datetime NOT NULL,
  `viewed` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mar_usermessage`
--

INSERT INTO `tbl_mar_usermessage` (`messageid`, `userid`, `entered`, `viewed`, `status`) VALUES
(1, 1, '2018-01-18 18:03:01', NULL, 'sent');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_userstats`
--

CREATE TABLE `tbl_mar_userstats` (
  `id` int(11) NOT NULL,
  `unixdate` int(11) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `listid` int(11) DEFAULT '0',
  `value` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mar_userstats`
--

INSERT INTO `tbl_mar_userstats` (`id`, `unixdate`, `item`, `listid`, `value`) VALUES
(1, 1515888000, 'total users', 0, 1),
(2, 1515888000, 'subscribe', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_attribute`
--

CREATE TABLE `tbl_mar_user_attribute` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `required` tinyint(4) DEFAULT NULL,
  `tablename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_blacklist`
--

CREATE TABLE `tbl_mar_user_blacklist` (
  `email` varchar(255) NOT NULL,
  `added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_blacklist_data`
--

CREATE TABLE `tbl_mar_user_blacklist_data` (
  `email` varchar(150) NOT NULL,
  `name` varchar(25) NOT NULL,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_message_bounce`
--

CREATE TABLE `tbl_mar_user_message_bounce` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `bounce` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_message_forward`
--

CREATE TABLE `tbl_mar_user_message_forward` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `forward` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_user`
--

CREATE TABLE `tbl_mar_user_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `confirmed` tinyint(4) DEFAULT '0',
  `blacklisted` tinyint(4) DEFAULT '0',
  `optedin` tinyint(4) DEFAULT '0',
  `bouncecount` int(11) DEFAULT '0',
  `entered` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uniqid` varchar(255) DEFAULT NULL,
  `uuid` varchar(36) DEFAULT '',
  `htmlemail` tinyint(4) DEFAULT '0',
  `subscribepage` int(11) DEFAULT NULL,
  `rssfrequency` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `passwordchanged` date DEFAULT NULL,
  `disabled` tinyint(4) DEFAULT '0',
  `extradata` text,
  `foreignkey` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mar_user_user`
--

INSERT INTO `tbl_mar_user_user` (`id`, `email`, `confirmed`, `blacklisted`, `optedin`, `bouncecount`, `entered`, `modified`, `uniqid`, `uuid`, `htmlemail`, `subscribepage`, `rssfrequency`, `password`, `passwordchanged`, `disabled`, `extradata`, `foreignkey`) VALUES
(1, 'admin@hrms.itscient.com', 1, 0, 0, 0, '2018-01-18 10:13:33', '2018-01-18 16:13:33', 'e50803c34eb2d9e3047ee87eea909573', '78394d3e-3f2d-43a4-bbb1-fbdd24764007', 1, NULL, NULL, '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', '2018-01-18', 0, NULL, NULL),
(2, 'nas.rakesh@outlook.com', 0, 0, 0, 0, '2018-01-18 10:13:56', '2018-01-18 21:13:56', 'a88534d8ed3916d42b501b8577a7820f', '99163dfd-008f-44f9-8202-3308a2299301', 1, 1, NULL, NULL, NULL, 0, NULL, NULL),
(3, 'nas.rakesh@gmail.com', 0, 0, 0, 0, '2018-01-18 10:29:05', '2018-01-18 21:29:05', '55bd9be234e2c6e46a543e411ef598f0', '2c359eee-c5ec-4437-86a9-1abfa88f18fc', 1, NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_user_attribute`
--

CREATE TABLE `tbl_mar_user_user_attribute` (
  `attributeid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mar_user_user_history`
--

CREATE TABLE `tbl_mar_user_user_history` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `detail` text,
  `systeminfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meetings`
--

CREATE TABLE `tbl_meetings` (
  `meeting_ID` int(11) NOT NULL,
  `employer_ID` varchar(100) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `timezone` varchar(100) NOT NULL,
  `participants` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module`
--

CREATE TABLE `tbl_module` (
  `ID` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `module_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_module`
--

INSERT INTO `tbl_module` (`ID`, `module_id`, `module_name`) VALUES
(1, 1, 'Company Profile'),
(2, 2, 'Candidate Management'),
(3, 3, 'Job Management'),
(4, 4, 'User Management'),
(5, 5, 'Application Management'),
(6, 6, 'Contacts Management'),
(7, 7, 'Organization Management'),
(8, 8, 'Calender Management'),
(9, 9, 'AR Management'),
(10, 10, 'AP Management'),
(11, 11, 'HR Management'),
(12, 12, 'HR Recruitment Management'),
(13, 13, 'Marketing Management');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nationality`
--

CREATE TABLE `tbl_nationality` (
  `id` int(11) NOT NULL,
  `cityzen` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `ID` int(11) NOT NULL,
  `email_name` varchar(50) DEFAULT NULL,
  `from_name` varchar(60) DEFAULT NULL,
  `from_email` varchar(120) DEFAULT NULL,
  `email_subject` varchar(100) DEFAULT NULL,
  `email_body` text,
  `email_interval` int(4) DEFAULT NULL,
  `status` enum('inactive','active') DEFAULT 'active',
  `dated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `notification_id` int(11) NOT NULL,
  `notification_service_id` int(11) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `notification_added_by` int(11) NOT NULL,
  `notification_added_to` int(11) DEFAULT NULL,
  `applied_id` varchar(50) NOT NULL,
  `notification_text` varchar(255) NOT NULL,
  `submit_date` date NOT NULL,
  `read_by` longtext,
  `updated_date` date NOT NULL,
  `read_status` enum('0','1') NOT NULL DEFAULT '0',
  `read_date` date DEFAULT NULL,
  `read_status_team_member` varchar(256) NOT NULL,
  `read_date_team_member` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`notification_id`, `notification_service_id`, `service_type`, `notification_added_by`, `notification_added_to`, `applied_id`, `notification_text`, `submit_date`, `read_by`, `updated_date`, `read_status`, `read_date`, `read_status_team_member`, `read_date_team_member`) VALUES
(1, 11, 'Update Job', 10, 4, ' ', 'Java DeveloperThis  job Is Update By 10', '2019-09-24', NULL, '2019-09-24', '0', '2019-09-24', '1', '2019-09-24'),
(2, 28, 'Update Job', 37, 5, ' ', 'Java Full Stack Developer with AngularThis  job Is Update By 37', '2019-09-24', NULL, '2019-09-24', '0', '2019-09-24', '1', '2019-09-24'),
(3, 33, 'Update Job', 40, 5, ' ', 'Java Core DeveloperThis  job Is Update By 40', '2019-09-24', NULL, '2019-09-24', '0', '2019-09-24', '1', '2019-09-24'),
(4, 26, 'Update Job', 40, 5, ' ', 'Java Full Stack DeveloperThis  job Is Update By 40', '2019-09-24', NULL, '2019-09-24', '0', '2019-09-24', '1', '2019-09-24'),
(5, 44, 'Update Job', 81, 8, ' ', 'iOS LeadThis  job Is Update By 81', '2019-09-24', NULL, '2019-09-24', '0', '2019-09-24', '1', '2019-09-24'),
(6, 44, 'Update Job', 81, 8, ' ', 'iOS LeadThis  job Is Update By 81', '2019-09-24', NULL, '2019-09-24', '0', '2019-09-24', '1', '2019-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification_Activity`
--

CREATE TABLE `tbl_notification_Activity` (
  `id` int(11) NOT NULL,
  `Notification_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` int(11) NOT NULL,
  `read_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization_type`
--

CREATE TABLE `tbl_organization_type` (
  `id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_rate_umo`
--

CREATE TABLE `tbl_pay_rate_umo` (
  `id` int(11) NOT NULL,
  `option_val` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_company`
--

CREATE TABLE `tbl_post_company` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `fed_id` varchar(60) NOT NULL,
  `duns` varchar(60) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_short_name` varchar(255) NOT NULL,
  `company_logo` varchar(256) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `add_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL,
  `hq_location` varchar(60) NOT NULL,
  `state_of_org` varchar(60) NOT NULL,
  `employees` varchar(60) NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `created_date` date NOT NULL,
  `last_updated_date` date NOT NULL,
  `last_updated_by` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_contacts`
--

CREATE TABLE `tbl_post_contacts` (
  `id` int(11) NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `cont_per_name` varchar(60) DEFAULT NULL,
  `phone_c` varchar(60) NOT NULL,
  `phone_w` varchar(60) NOT NULL,
  `email_h` varchar(60) NOT NULL,
  `email_w` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `last_updated_by` varchar(70) NOT NULL,
  `last_updated_date` date NOT NULL,
  `employer_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post_jobs`
--

CREATE TABLE `tbl_post_jobs` (
  `ID` int(11) NOT NULL,
  `for_group` int(11) DEFAULT NULL,
  `job_code` varchar(255) NOT NULL,
  `employer_ID` int(11) DEFAULT NULL,
  `owner_id` varchar(50) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company_ID` int(11) NOT NULL,
  `industry_ID` int(11) DEFAULT NULL,
  `client_name` varchar(150) NOT NULL,
  `pay_min` varchar(60) NOT NULL,
  `pay_max` varchar(60) NOT NULL,
  `pay_uom` varchar(20) NOT NULL,
  `dated` date DEFAULT NULL,
  `sts` enum('Draft','Published','Hold','Deleted','Cancelled','Closed','Pending') DEFAULT 'Pending',
  `is_featured` enum('no','yes') NOT NULL DEFAULT 'no',
  `country` varchar(100) NOT NULL,
  `last_date` date NOT NULL,
  `age_required` varchar(50) DEFAULT NULL,
  `qualification` varchar(60) DEFAULT NULL,
  `min_experience` varchar(50) NOT NULL,
  `max_experience` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(225) NOT NULL,
  `job_mode` enum('Home Based','Part Time','Full Time','Contract','Contract-to-Hire') NOT NULL DEFAULT 'Full Time',
  `job_duration` varchar(255) NOT NULL,
  `job_duration_uom` varchar(255) NOT NULL,
  `vacancies` int(3) NOT NULL,
  `job_description` longtext NOT NULL,
  `requirement_must` text NOT NULL,
  `requirement_optional` text,
  `contact_person` varchar(100) DEFAULT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_phone` varchar(30) DEFAULT NULL,
  `viewer_count` int(11) NOT NULL DEFAULT '0',
  `job_slug` varchar(255) DEFAULT NULL,
  `job_visa_status` text,
  `ip_address` varchar(40) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL,
  `required_skills` varchar(255) DEFAULT NULL,
  `email_queued` tinyint(1) DEFAULT '0',
  `min_pay_rate` varchar(255) DEFAULT NULL,
  `max_pay_rate` varchar(255) DEFAULT NULL,
  `pay_rate_umo` varchar(255) NOT NULL,
  `privacy_level` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_employer` int(11) DEFAULT NULL,
  `last_updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post_jobs`
--

INSERT INTO `tbl_post_jobs` (`ID`, `for_group`, `job_code`, `employer_ID`, `owner_id`, `job_title`, `company_ID`, `industry_ID`, `client_name`, `pay_min`, `pay_max`, `pay_uom`, `dated`, `sts`, `is_featured`, `country`, `last_date`, `age_required`, `qualification`, `min_experience`, `max_experience`, `experience`, `city`, `state`, `job_mode`, `job_duration`, `job_duration_uom`, `vacancies`, `job_description`, `requirement_must`, `requirement_optional`, `contact_person`, `contact_email`, `contact_phone`, `viewer_count`, `job_slug`, `job_visa_status`, `ip_address`, `flag`, `old_id`, `required_skills`, `email_queued`, `min_pay_rate`, `max_pay_rate`, `pay_rate_umo`, `privacy_level`, `status`, `created_by`, `is_employer`, `last_updated_date`, `last_updated_by`) VALUES
(1, NULL, '9228-1', 2, 'Chandan Kumar', 'Laravel Developer', 2, 2, 'apple', '25k', '30k', 'Annum', '2019-09-24', 'Published', 'no', 'India', '2019-12-21', NULL, 'BA,B.Tech,M.Tech', '2', '2', '2', 'Jamshedpur', 'AZ', 'Full Time', '6', 'Month', 20, 'Have to handle a lots of multiple', 'Able to manage team', 'good working speed', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-L2,EAD-OPT', NULL, NULL, NULL, 'Laravel developer', 0, NULL, NULL, 'Annum', 'private', NULL, 2, NULL, '2019-09-24 09:18:36', 2),
(2, NULL, '45612-1', 24, 'Sophiya Sandhu', 'Java Developer', 2, 2, 'verizon', '20k', '25k', 'Hourly', '2019-09-24', 'Published', 'no', 'India', '2019-09-26', NULL, 'BE', '5', '5', '5', 'sunnyvale', 'CA', 'Contract', '6', 'Month', 2, 'need 5+Years of Experience in Java', 'Retail domain knowledge\r\nenterprise webapplication application knoweledge on MEAN Stack\r\nCloud Platform', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,EAD-OPT,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Java,spring,hibernate', 0, NULL, NULL, 'Hourly', 'public', NULL, 24, NULL, '2019-09-24 09:27:55', 24),
(4, NULL, '00007-1', 8, 'Abhishek Gorai', 'JAVA API Automation', 2, 1, 'Apple', '50k', '55k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-28', NULL, 'B.Tech', '7+', '7+', '7+', 'Austin', 'TX', 'Contract-to-Hire', '6', 'Month', 2, 'Hi,\r\nHope you are doing well.\r\nPlease go through the following requirement and let me know your feedback.\r\n\r\n\r\nJob Position: Java API Automation\r\nJob Location:  Austin TX\r\nJob Duration:  Long Term\r\n \r\nJob Description:\r\n \r\n•         3+ years of strong hand on coding experience in Java or UI Automation.\r\n•         Good knowledge in DB Queries.\r\n•         Good Understanding of REST web services\r\n•         Familiarity with GIT & Jenkins\r\n\r\nMust Have Skills:\r\n•         QA Testing\r\n•         Java API\r\n•         Selenium\r\n•         Jenkins\r\n•         Rest Assured', '•         QA Testing\r\n•         Java API\r\n•         Selenium\r\n•         Jenkins\r\n•         Rest Assured', NULL, NULL, NULL, NULL, 0, NULL, 'H1 Visa', NULL, NULL, NULL, 'QA Testing,Java API,Selenium,Jenkins,Rest Assured', 0, NULL, NULL, 'Hourly', 'public', NULL, 8, NULL, '2019-09-24 10:32:20', 8),
(5, NULL, '45612-1', 6, 'Ravi lal Teli', 'Teradata Developer', 2, 1, 'apple', '50k', '55k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-26', NULL, 'B.Tech', '6', '6', '6', 'Sunnyvale', 'CA', 'Contract', '6', 'Month', 2, 'Need 5+years of experience in Teradata', 'Teradata,TPT,Fastload', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,EAD-OPT,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Teradata,TPT,Fastload', 0, NULL, NULL, 'Hourly', 'public', NULL, 6, NULL, '2019-09-24 10:32:20', 6),
(6, NULL, '45612_1', 4, 'Sanjay Mandi', 'UI Developer', 2, 1, 'IT-SCIENT LLC', '50k', '55k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '1970-01-01', NULL, 'B.Tech', '5+', '5+', '5+', 'Sunnyvale', 'CA', 'Contract', '6', 'Day', 2, 'Hello Everyone ,\r\nHope you all are doing great.\r\nPlease go through the requirement and let me know your interest.\r\n\r\nPosition : UI Developer  \r\nLocation:  Sunnyvale,CA\r\nDuration: Long Term\r\n \r\nJob description:\r\n\r\n•	Expert in UI Software Development experience.\r\n•	Experience of React JS\r\n•	Experience with HTML, CSS3, JavaScript.\r\n•	Experience working with Angular JS\r\n•	Experience working with the node JS\r\n•	Experience with RESTful  API development.\r\n•	Must familiar with JQUERY, AJAX, JSON \r\n\r\n\r\nMust Have Skills:\r\n\r\n•	HTML\r\n•	Angular JS\r\n•	CSS\r\n•	React JS\r\n•	Node JS\r\n•	Javascript\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nThanks And Regards.\r\nSanjay Mandi\r\nITSCIENT ||  Ph No: 510-516-7827 || Email: sanjay.m@itscient.com', 'React.JS\r\nAngular.JS', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'React.JS,Angular.JS', 0, NULL, NULL, 'Hourly', 'public', NULL, 4, NULL, '2019-09-24 10:32:35', 4),
(8, NULL, 'INFY-AP-4', 32, 'Sumit kumar', 'java developer', 2, 2, 'apple', '55', '60', 'Hourly', '1970-01-01', 'Published', 'no', 'United States', '1970-01-01', NULL, 'BCA', '1', '1', '1', 'Sunnyvale', 'CA', 'Contract', '6', 'Month', 2, 'Hi,\r\n \r\n Please go through the requirement and let me know your interest.\r\n \r\nPosition: Java Developer\r\nLocation: Sunnyvale,CA\r\nDuration: Long term\r\n\r\nJob Description:\r\n \r\n• Core Java and Object-oriented development skills\r\n• HTML/CSS\r\n• knowledge of Java Script, Spring, Oracle, PL/SQL,Mongo DB\r\n• Hibernate\r\n• Familiarity and experience with SQL \r\n• Strong communication skills\r\n• Adapt to shifting priorities in a fastpaced, dynamic business environment', 'java,spring,hibernate', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-H4', NULL, NULL, NULL, 'java,spring,hibernate', 0, '55', '60', 'Hourly', 'public', NULL, 32, NULL, '2019-09-24 10:34:21', 32),
(9, NULL, '45612-2', 9, 'Subham Kumar Dey', 'UI Developer', 2, 1, 'Apple', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'B.Tech', '8', '8', '8', 'Sunnyvale', 'CA', 'Contract', '6', 'Month', 2, 'Expert in UI Software Development experience.\r\n\r\n·  Knowledge of React JS\r\n\r\n·  Experience with HTML, CSS3, JavaScript.\r\n\r\n·  Experience working with Angular JS\r\n\r\n·  Experience working with the node JS\r\n\r\n· Experience with RESTful API development.\r\n\r\n·  Must familiar with JQUERY, AJAX, JSON', 'UI Developer React JS Angular JS', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,EAD-OPT,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Angular JS,React JS,UI Developer', 0, NULL, NULL, 'Hourly', 'public', NULL, 9, NULL, '2019-09-24 10:37:37', 9),
(10, NULL, 'Zen-02', 41, 'Joydeep Kumar', 'Scrum Master', 2, 1, 'Zensar', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-28', NULL, 'BE,Diploma,B.Tech,M.Tech,MCA', '7+', '7+', '7+', 'Plano', 'TX', 'Contract', '12', 'Month', 3, 'Job Description:\r\nM/Scrum Master will lead a software development projects in the retail domain. Candidate must have experience managing all aspects of the software development lifecycle, as well as financial governance of software projects. This role requires working with onshore and offshore teams. Strong soft skills and the ability to build payment gateway application development and lead by influence are MUST. \r\n\r\n•	Experienced in Agile/Scrum/DevOps processes\r\n•	Large organization experience - Large Scale projects\r\n•	Ability to communicate agile concepts and benefits to the team and stakeholders.\r\n•	Ability to facilitate scrum ceremonies, identify epics, create user stories, spikes, understand velocity, burndown metrics, capacity planning, and backlog aging and tracking\r\n•	Able to blend Scrum, technical practices to come up with the right approach for our teams\r\n•	Muti-Tasker – up to three scrum teams at a time.\r\n•	Technology experience in the retail domain – payment gateway application Assessments – Must be able to understand and talk technology.\r\n•	A true servant leader with great influencing abilities,\r\n•	Communication and people leadership skills are non-negotiable.', 'Scrum Master, Retail Domain, Payment Gateway', 'Agile, Scrum, DevOps', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Scrum Master,Retail Domain,Payment Gateway', 0, NULL, NULL, 'Hourly', 'public', NULL, 41, NULL, '2019-09-24 10:38:49', 41),
(15, NULL, '45612-3', 9, 'Subham Kumar Dey', 'DevOps Engineer', 2, 1, 'Apple', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'B.Tech', '7', '7', '7', 'Sunnyvale', 'CA', 'Contract', '6', 'Day', 5, 'Linux/Unix, Chef, Puppet, Automation and Ansible.\r\nProfound experience with Linux or unix.\r\nStrong Experience in Automation .\r\nStrong experience with Deployment framework Ansible.\r\nExperience with Configuration Management tools such as Puppet.', 'Linux Unix Ansible Automation Puppet', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,EAD-OPT,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Linux,Unix,Ansible,Automation', 0, NULL, NULL, 'Hourly', 'public', NULL, 9, NULL, '2019-09-24 10:45:41', 9),
(16, NULL, '83101-1', 10, 'Chandan Kumar', 'Java Developer', 2, 1, 'Apple', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '1970-01-01', NULL, 'B.Tech', '10', '10', '10', 'Sunnyvale', 'CA', 'Contract', '6', 'Month', 2, 'Hi,\r\n \r\n Please go through the requirement and let me know your interest.\r\n \r\nPosition: Java Developer\r\nLocation: Sunnyvale,CA\r\nDuration: Long term\r\n \r\nJob Description:\r\n \r\n• Core Java and Object-oriented development skills\r\n• HTML/CSS\r\n• knowledge of Java Script, Spring, Oracle, PL/SQL,Mongo DB\r\n• Hibernate\r\n• Familiarity and experience with SQL \r\n• Strong communication skills\r\n• Adapt to shifting priorities in a fastpaced, dynamic business environment', 'Java,Spring,Hibernate,HTML', 'Java,Spring,Hibernate,HTML,Multi threading,Algorithm', NULL, NULL, NULL, 0, NULL, 'H1 Visa', NULL, NULL, NULL, 'Java ,Spring,Hibernate,HTML,Multithearding ,Algorithm', 0, NULL, NULL, 'Hourly', 'public', NULL, 10, NULL, '2019-09-24 10:58:39', 10),
(14, NULL, '45612-1', 6, 'Ravi lal Teli', 'Java Developer', 2, 1, 'apple', '50k', '55k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-26', NULL, 'B.Tech', '6', '6', '6', 'Sunnyvale', 'CA', 'Contract', '6', 'Day', 3, '• Core Java and Object-oriented development skills\r\n• knowledge of Java Script, Spring.\r\n• Hibernate\r\n• Familiarity and experience with SQL \r\n• Strong communication skills\r\n• Adapt to shifting priorities in a fastpaced, dynamic business environment\r\n \r\nMust Have Skills:\r\n •Java\r\n•Spring\r\n •Hibernate\r\n• Algorithm\r\n• Multithreading\r\n\r\n \r\n\r\nThanks and regards....,\r\n\r\nRavi Lal Teli\r\n\r\nTechnical Recruiter\r\n\r\nPhone Number : 510-5167-7788\r\n\r\nEmail ID: ravi.l@itscient.com\r\n\r\n IT-SCIENT LLC | Fremont, CA || Web: www.itscient.com', '•Java\r\n•Spring\r\n •Hibernate\r\n• Algorithm\r\n• Multithreading', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, '•Java •Spring  •Hibernate • Algorithm • Multithreading', 0, NULL, NULL, 'Hourly', 'public', NULL, 6, NULL, '2019-09-24 10:45:19', 6),
(12, NULL, '47215-1', 24, 'Sophiya Sandhu', 'RPA Developer', 2, 1, 'IT-SCIENT LLC', '30k', '35k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-26', NULL, 'B.Tech', '5', '5', '5', 'Broomfield', 'CO', 'Contract', '6', 'Month', 2, 'Design, develop, test and deploy solutions to automate processes, activities, and tasks using UiPath Tool.', 'RPA, .NET,', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,EAD-OPT,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'RPA,.NET,UIPATH', 0, NULL, NULL, 'Hourly', 'public', NULL, 24, NULL, '2019-09-24 10:41:48', 24),
(13, NULL, '4321_1', 17, 'Sanju Gorai', 'UI Developer', 2, 1, 'apple', '50k', '55k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '1970-01-01', NULL, 'BA', '5+', '5+', '5+', 'sunnyvale', 'CA', 'Contract', '6', 'Day', 2, 'Expert in UI Software Development experience.\r\n•         Knowledge of React JS\r\n•         Experience with HTML, CSS3, JavaScript.\r\n•         Experience working with Angular JS\r\n•         Experience working with the node JS\r\n•         Experience with RESTful API development.\r\n•         Must familiar with JQUERY, AJAX, JSON', 'Angular, React Js,', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,EAD-OPT,Green Card,H1 Visa,TN Visa', NULL, NULL, NULL, 'Angular Js  ,React Js,Node Js,RESTful API Developement', 0, NULL, NULL, 'Hourly', 'public', NULL, 17, NULL, '2019-09-24 10:42:49', 17),
(17, NULL, '54321-1', 14, 'Amit Kumar', 'java developer', 2, 1, 'IT SCIENT LLC', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-28', NULL, 'B.Tech', '10', '10', '10', 'sunnyvale', 'CA', 'Contract', 'long rerm', 'Month', 2, 'Hi,\r\n Hope you doing well\r\n Kindly go through the requirement and let me know if you are comfortable with the Skill set for   java developer\r\n \r\n candidate must have experience in Aws\r\n \r\nPosition: Sr. Java  Developer\r\nLocation:  sunnyvale,CA\r\nDuration: Long term\r\n \r\nJob Description:\r\n \r\n• Core Java and Object-oriented development skills\r\n• HTML/CSS\r\n• knowledge of Java Script, Spring, Oracle, PL/SQL,Mongo DB\r\n• Hibernate\r\n• Familiarity and experience with SQL \r\n• Strong communication skills\r\n• Adapt to shifting priorities in a fastpaced, dynamic business environment\r\n\r\n \r\nThanks and regards,\r\nAmit kumar\r\n|| IT-SCIENT || amit.k@itscient.com || Phone: 510-516-7788|| Web: www.itscient.com.', 'html/css,SQL,Mongo DB,Hibernate', NULL, NULL, NULL, NULL, 0, NULL, 'TN Visa', NULL, NULL, NULL, 'Hibernate,Mongo DB,html/css ,SQL', 0, NULL, NULL, 'Hourly', 'public', NULL, 14, NULL, '2019-09-24 10:58:41', 14),
(18, NULL, 'ZEN-01', 73, 'Resu Raj', 'UI Developer', 2, 2, 'Zensar', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-10-24', NULL, 'B.Tech', '07', '07', '07', 'San Fransisco', 'CA', 'Contract', '06', 'Month', 2, 'Role:UI Developer \r\nLocation:San Jose, CA\r\nContract:06 Months\r\n\r\nDetailed Job Description:\r\nThanks & Regards,...\r\n \r\nResu Raj\r\nTechnical Recruiter\r\nIT SCIENT LLC, Fremont, CA 94538,\r\n|| IT-SCIENT || Phone: 510-516-7895 || Fax: 877.701.4872 ||\r\nEmail: resu.r@itscient.com || Web: www.itscient.com ||\r\n\r\n1.Strong Angular (4/5/7)', 'Angular(4/5/7)', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Angular (4/5/7)', 0, NULL, NULL, 'Hourly', 'public', NULL, 73, NULL, '2019-09-24 12:19:37', 73),
(19, NULL, 'ZEN_01', 66, 'Sharmistha Dutta', 'UI Developer', 2, 2, 'IT SCIENT', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '1970-01-01', NULL, 'BA', '07', '07', '07', 'Bellevue', 'WA', 'Contract', '12', 'Month', 2, 'Role: UI Developer\r\nLocation: Bellevue,WA  \r\nContract:12 Months\r\n\r\nMinimum Years of Experience:06+ Years\r\n\r\nLinkedin Id and Passport No.is mandatory. \r\n\r\nMust Have Skills:\r\n\r\nReact Js\r\n\r\n \r\nThanks & Regards,...\r\n \r\nSharmistha Dutta\r\nTechnical Recruiter\r\nIT SCIENT LLC, Fremont, CA 94538,\r\n|| IT-SCIENT || Phone: 510-516-7895 || Fax: 877.701.4872 ||\r\nEmail: sharmistha.d@itscient.com || Web: www.itscient.com ||', 'React Js', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,EAD-OPT,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Strong React Js', 0, NULL, NULL, 'Hourly', 'public', NULL, 66, NULL, '2019-09-24 12:19:38', 66),
(20, NULL, '47857-1', 59, 'Sheetal Abhilasha Raven', 'Oracle ERP Cloud Consultant', 2, 2, 'IT SCIENT-LLC', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '1970-01-01', NULL, 'BE', '8', '8', '8', 'Raleigh', 'NC', 'Contract', '6 months', 'Month', 2, 'Job Details:\r\nSubject matter expertise and experience with Oracle ERP Cloud Implementations Oracle Financials AR Knowledge is required.\r\n\r\nMust Have Skills:\r\n- Oracle Cloud Implementation experience\r\n- AR Module Knowledge\r\n- Oracle Financials\r\n\r\nProcess Workflow Steps:\r\na.      Request distributed for sourcing\r\nb.      Supplier submits candidate profile(s)\r\nc.      MSP reviews and dispositions (MSP Qualify) candidate profiles for manager review\r\nd.      Candidate is evaluated and selected by manager (PM Qualified)\r\ne.      MSP Team releases offer for supplier Offer Acceptance/Approval; Supplier initiates BGC \r\nf.      Once accepted & approved by the supplier the workflow goes to Worker Download then PO ID Upload\r\ng.      Once the PO is uploaded, the workflow circles back to the MSP Team for Onboarding\r\nh.      When the supplier has confirmed that the BGC is complete and ajudicated green, the MSP Team will onboard the candidate to complete the workflow in Beeline\r\ni.      Every 6 months, you will receive a survey form our team requesting input on your experience.', '- Oracle Cloud Implementation experience\r\n- AR Module Knowledge\r\n- Oracle Financials', NULL, NULL, NULL, NULL, 0, NULL, 'H1 Visa', NULL, NULL, NULL, 'Oracle Cloud Implementation experience - AR Module Knowledge - Oracle Financials', 0, NULL, NULL, 'Hourly', 'public', NULL, 59, NULL, '2019-09-24 12:43:24', 59),
(21, NULL, 'Zen-01', 72, 'Dolly Kumari', 'QA Analyst', 2, 2, 'IT SCIENT-LLC', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '1970-01-01', NULL, 'BE,BS,MBA', '8', '8', '8', 'charlotte', 'NC', 'Contract', '6', 'Month', 4, 'Job Title: ETL tester/QA Analyst\r\nWork Location: Charlotte, NC\r\n\r\nContract duration: 12+Months\r\n \r\n \r\nMinimum 7+ Years of experience \r\n  \r\n\r\nMust have skills: \r\n\r\n•	ETL tester\r\n\r\nThanks and regards,\r\nDolly Kumari\r\nTechnical Recruiter,\r\n|| IT-SCIENT || Phone: 510.516.7896 || Fax: 877.701.4872 ||\r\nEmail: dolly.k@itscient.com || Web: www.itscient.com ||', 'ETL, QA', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'ETL,QA,Analyst', 0, NULL, NULL, 'Hourly', 'public', NULL, 72, NULL, '2019-09-24 12:49:15', 72),
(22, NULL, 'Zen-06', 41, 'Joydeep Kumar', 'Sr. Developer Sitecore', 2, 1, 'Zensar', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-10-10', NULL, 'BA,BE,Diploma,MBA,PhD,B.Tech,BCOM,M.Tech,M.Com', '8+', '8+', '8+', 'Brea', 'CA', 'Full Time', '12', 'Month', 3, 'Job Description:\r\nCome up with detailed Architecture in line with business needs and addressing UX design covering – \r\n•	Architecture primarily focussing on Web & Mobile channels with Mobile first approach as applicable \r\n•	Come up with Sitecore application architecture (solution architecture, technology architecture & integration architecture) \r\n•	Identify & Define application design patterns \r\n•	Adherence to non-functional requirements such as security, performance, accessibility, device & browser support etc. \r\n•	Define integration specifications (work with back end systems as applicable) for back end, 3rd party integrations \r\n•	Define authentication, authorization and session management guidelines for applications with post login functionality \r\n•	Build and create CICD pipeline for code coverage, unit testing, automated build & deployment \r\n•	Provide solution for integration with commerce requirements with Oracle ATG \r\n•	Work as a part of Agile delivery team with ability to contribute in architectural discussions and decision making, spring planning, sizing and delivering as per required code quality standards \r\n•	Define coding standards, best practices and ensure implementation in projects by conducting regular reviews \r\n•	Proactively identify & guide the team to build common solution components (functional and non-functional) which be seamlessly used in application \r\n•	Share knowledge and industry trends with team and stakeholders during formal and informal interaction. \r\n•	Perform as build coordinator as needed to perform tasks such as code merging, build, unit test cases execution, integration with services and deployment in Non production environment \r\n•	Review code for implementation of Performance & Security aspects of the application being developed \r\n•	Plan for upgrade and utilization of new features in Sitecore to implement business and technical requirements in best possible way \r\n\r\nOverall 10+ years of experience in .NET/, ASP.NET, MVC, Web API technology stack building Web Application Architecture with 4+ years of specific experience in Sitecore 8.x \r\nMinimum 3+ years of hands on experience as Solution/Technical Architect on Sitecore Platform with Sitecore certification \r\nShould have played Technical Lead/Architect role in various scenarios such as – \r\n•	Green field Sitecore implementation on cloud (Sitecore as digital platform) \r\n•	Sitecore Upgrade \r\n•	Web & Mobile channel digital experience Global implementation using Sitecore as Digital platform (existing setup) for multi-site, multi-lingual scenario \r\n•	Implementation of customer transaction with integration to eCommerce solution (Oracle ATG would be advantage) \r\n•	Sitecore administration activities such as Production deployment, performance monitoring and fine tuning etc. \r\n\r\ni)	Experience on front end technologies such as HTML5, CSS Framework such as CSS3/SaaS/LESS, Responsive Web Design using Bootstrap, Javascript/JQuery etc. \r\nii)	Experience in database technologies such as SQL server & Mongo DB \r\niii)	Very good experience in setting up and implementation of CICD pipeline using Visual studio, bitbucket/Git, NUnit, etc. \r\niv)	Hands on experience on using Agile project management tools such as JIRA h) Good understanding of data layer implementation for Web analytics solution implementation \r\nv)	Good understanding on SEO implementation and role it plays in case of public facing applications \r\nvi)	Good understanding in implementation of search for public facing applications using Coveo, SOLR search etc. \r\nvii)	Very good understanding of Digital Marketing technologies such as Google Analytics/Adobe Analytics, SEO, Campaign Management etc\r\nviii)	Good understanding and exposure to Sitecore DMS and Commerce.', 'Sitecore, .NET, ASP.NET', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,TN Visa,US Citizen', NULL, NULL, NULL, 'Sitecore,.NET,ASP.NET', 0, NULL, NULL, 'Annum', 'public', NULL, 41, NULL, '2019-09-24 12:55:46', 41),
(23, NULL, 'Photon-03', 78, 'Avinash Kumar', 'Mobile Developer with React Native', 2, 1, 'IT SCIENT-LLC', '25k', '30k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BA,CA,Certification,Diploma,MBA,PhD,B.Tech,M.Tech,MCA', '6+', '6+', '6+', 'Bellevue', 'TX', 'Contract', '9+', 'Month', 3, 'e-Commerce  Engineering is looking for experienced  Mobile App Developer for its team, This team is building a cloud platform to enables a true cross-service, cross-device, and especially, one with an ultimate goal: to make people\'s life and health better thanks to technology, and bring magical user experiences we all have dreamt of through science fictions books or movies over the past decades. We are a team of highly motivated and smart people who are working on building this platform. This role will work effectively to foster a strong team environment and make contribution in every aspect of software feature development lifecycle, including requirement analysis, design and implementation, bug regression and code refactoring, unit and integration testing.\r\n \r\nDesired Skills & Experience for React Native:\r\n•	Looking for (3-6) Years of IT Experience.\r\n•	Solid 1+ yrs of experience in React Native.\r\n•	Good understanding of Android/ iOS/ Web design guidelines, SDK and excellent JavaScript skills.\r\n•	Hands-on experience in building ReactNative components in native iOS and Android\r\n•	Exposure to other hybrid mobile platforms like Sencha, HTML5, PhoneGap, jQuery Mobile etc.\r\n•	Solve complex technical, scalability or performance challenges\r\n•	Write, test, and release world- class, production- ready code\r\n•	Understand, maintain and enhance the automated software deployment pipeline\r\n•	Good communication skill\r\n•	Good problem solving skills\r\n•	Bachelor\'s Degree', 'React Native, Android, IOS, Hybrid mobile platforms', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Android,Android, IOS,React native', 0, NULL, NULL, 'Hourly', 'public', NULL, 78, NULL, '2019-09-24 12:59:51', 78),
(24, NULL, 'Zen-09', 37, 'Joydeep Kumar', 'Java Full Stack Developer with React', 2, 1, 'Zensar', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-10-10', NULL, 'BA,BE,BS,MBA,B.Tech,M.SC,M.Tech', '7', '7', '7', 'RTP', 'NC', 'Contract', '12', 'Month', 3, '1. Technical skills: Hands on, actual project work experience on following- Java, J2EE, Web Services, Spring Framework, multi-threading, Hibernate, AJAX, Java Script, React.\r\n2. Excellent communication skills, self-driven', 'Java,Spring,Hibernate,React,Ajax', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'JAva,Java,Hibernate,Ajax,React,Spring,JavaScript,Java', 0, NULL, NULL, 'Hourly', 'public', NULL, 37, NULL, '2019-09-24 13:00:58', 37),
(25, NULL, 'Zen-04', 36, 'Joydeep Kumar', 'Drupal Developer', 2, 1, 'Zensar', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-10-10', NULL, 'BA,BE,Diploma,MBA,B.Tech,M.Tech,MCA', '7+', '7+', '7+', 'San Jose', 'CA', 'Contract', '12', 'Month', 3, 'Job Description:\r\n•         Minimum 4- 7 years Drupal 7 and/or 8.x\r\n•         Experience developing Custom Drupal modules\r\n•         Firm understanding of Drupal 7 API, Entity API\r\n•         Experience creating/managing a multi-lingual site\r\n•         Experience working on content promotion/deployment module\r\n•         Experience using PHP unit for Unit testing\r\n•         Worked on Organics groups and managed in Drupal 7\r\n•         Created feature in Drupal\r\n•         Worked on deployed modules using 3 different environments (test, stage and production)\r\n•         Experience in SSO integration with industry solutions is a plus\r\n•         Experience / understanding of JSON and AJAX as well as building RESTful APIs\r\n•         Good knowledge of Drupal contrib modules, Drupal tools, Drush\r\n•         Front end Skills for developing a Drupal theme\r\n•         Experience in scalable/HA/Global platform is a plus\r\n•         Working knowledge of Unix and Databases (MySQL Preferrered)\r\n•         Experience with AWS a plus\r\n•         Working in Docker Containers a plus', 'Docker, Drupal, PHP', 'AJAX, JSON, RESTful APIs', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Docker,Drupal,PHP', 0, NULL, NULL, 'Hourly', 'public', NULL, 36, NULL, '2019-09-24 13:01:45', 36),
(26, NULL, 'Zen-07', 40, '14', 'Java Full Stack Developer', 2, 1, '5', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'India', '2019-10-10', NULL, NULL, '8', '8', '8', 'Miami', 'FL', 'Full Time', '12', 'Day', 3, 'Job Description:\r\n1. Technical skills: Hands on, actual project work experience on following- Java, J2EE, Web Services, Spring Framework, multi-threading, Hibernate, AJAX, Java Script, Angular.\r\n2. Excellent communication skills, self-driven\r\n\r\nFull stack developer \r\n(Experienced in server and client-side development)', 'server and client-side development\r\nJava, J2EE, Web Services, Spring Framework, multi-threading, Hibernate, AJAX, Java Script, Angular.\r\nExcellent communication skills, self-driven', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC', NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Hourly', 'public', NULL, 40, NULL, '2019-09-24 13:03:32', 40),
(39, NULL, 'Photon-09', 80, 'Pratik Kumar', 'Java Microservices Lead', 2, 1, 'Photon Infotech', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BS,Diploma,MS,MCS,B.Tech,BCOM,BBA,BCA,M.Tech', '7', '7', '7', 'Dallas', 'TX', 'Contract', '9', 'Month', 2, '• Ability to build and lead a Microservices team\r\n• Hands on Java/J2EE engineering within the Spring framework\r\n• Must have web application experience (ideally high scale application and/or customer facing)\r\n• Demonstrated experience in building microservices\r\n• Experience in building presentation layers using Front-end technologies on top of REST APIs\r\n• Good problem solving skills\r\n• Strong analytical skills\r\n• Collaborative team Leader', 'Microservices ,Spring,REST,APIs,Pandas,Django', 'Java/J2EE', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Microservices,Spring,REST APIs,Pandas,Django', 0, NULL, NULL, 'Annum', 'public', NULL, 80, NULL, '2019-09-24 14:58:15', 80),
(27, NULL, 'Zen-05', 35, 'Joydeep Kumar', 'ELK Consultant', 2, 1, 'Zensar', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-10-10', NULL, 'Diploma,MBA,PhD,B.Tech,BCA,M.Tech,M.Com,MCA', '7', '7', '7', 'sanjose', 'CA', 'Contract', 'Long Term', 'Month', 3, 'Responsibilities:\r\nMust have hands on experience in Elasticsearch, fluentd, fluent bit, Kibana, ELK, EFK,\r\n•         Highly experienced in Enterprise level ElasticSearch implementation\r\n•         Multi node implementation (more than 5)\r\n•         Experienced with Kibana\r\n•         Expert in ElasticSearch scripting for filtering, collapsing, sorting etc\r\n•         Experience in FluentD\r\n \r\nNice To have:\r\n•         Elasticsearch painless scripting experience\r\n•         Enterprise level ElasticSearch Architectural experience\r\n•         ElasticSearch infrastructure setup experience for disaster recovery', 'Elasticsearch, fluentd, fluent bit, Kibana, ELK, EFK,', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,US Citizen', NULL, NULL, NULL, 'Elasticsearch, fluentd, fluent bit,Kibana,ELK,EFK', 0, NULL, NULL, 'Hourly', 'public', NULL, 35, NULL, '2019-09-24 13:05:06', 35),
(28, NULL, 'Zen-10', 37, '14', 'Java Full Stack Developer with Angular', 2, 1, '5', '55k', '60K', 'Hourly', '2019-09-24', 'Draft', 'no', 'India', '2019-10-10', NULL, NULL, '7', '7', '7', 'RTP', 'NC', 'Full Time', '12', 'Day', 3, '1. Technical skills: Hands on, actual project work experience on following- Java, J2EE, Web Services, Spring Framework, multi-threading, Hibernate, AJAX, Java Script, Angular.\r\n2. Excellent communication skills, self-driven', 'Java,JavaScript,Ajax,Angular,Spring,Hibernate', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC', NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Hourly', 'public', NULL, 37, NULL, '2019-09-24 13:06:34', 37),
(29, NULL, 'Birla_001', 86, 'Ashish Verma', 'Sr. Software Engineer(C# and C++)', 2, 2, 'IT SCIENT LLC', '15k', '20k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-28', NULL, 'BA,BE,BS,CA,MA,MBA,B.Tech,BCA,M.SC,M.Tech,M.Com,MCA', '10', '10', '10', 'Madison', 'WI', 'Contract', '12', 'Month', 5, '•	Senior level C++/ C# developer (Migration from C++ to C#)\r\n•	Understands the difference and requirements of unmanaged code (C++) versus Managed code(C#)\r\n•	Understanding of interop communication between managed and unmanaged code\r\n•	Understanding of .Net frame work, and how it may interact with unmanaged code\r\n•	Understands WCF services .Net\r\n•	Some SQL experience is nice\r\n•	Some working hand knowledge of vector drawing, both C++ and, .Net framework.', 'C# , C++, .NET , SQL Server', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, ',C#,C++,.NET', 0, NULL, NULL, 'Hourly', 'public', NULL, 86, NULL, '2019-09-24 13:07:58', 86),
(30, NULL, 'Zen-03', 33, 'Joydeep Kumar', 'Golang Developer', 2, 1, 'Zensar', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2010-10-19', NULL, 'BA,BE,BS,CA,MBA,MS,B.Tech,BCOM,BBA,BCA', '8+', '8+', '8+', 'San Jose', 'CA', 'Contract', '12', 'Month', 3, '5+ years of solid hands-on software development experience with a focus on continuous delivery and deployment, enterprise application development, cloud automation, and building a container-hosting platform \r\n\r\n• Software programming experience in Golang is a must. At least 1+ year of Go programming experience\r\n• A proven track record with Docker containers with a deep understanding of the current container ecosystem and marketplace \r\n• Experience building cloud-based application using micro-services and deploying in containerized environments \r\n• Good understanding of Kubernetes fundamentals \r\n• Experience with running containers (Docker/LXC) on Kubernetes platform\r\n• Understanding of Software design patterns, SDLC, Test Driven Development (TDD), Continuous Integration and Continuous Delivery \r\n• Experience working in an agile development environment \r\n• Strong analytical and problem-solving skills \r\n• Strong communication and collaboration skills', 'GoLang, Kubernetes, Dockers', 'SDLC, Test Driven Development (TDD)', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Dockers', 0, NULL, NULL, 'Annum', 'public', NULL, 33, NULL, '2019-09-24 13:10:59', 33),
(31, NULL, 'Photon-04', 78, 'Avinash Kumar', 'Java Full Stack Developer', 2, 1, 'Photon infotech', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BS,CA,Diploma,MBA,PhD,B.Tech,M.Tech', '8+', '8+', '8+', 'Plano', 'TX', 'Contract', '9+', 'Month', 3, 'Job Description:\r\n•	Participate in all aspects of the software development lifecycle which includes solution design, estimation, development, documentation, testing and deployment within an Agile Continuous Delivery environment\r\n•	Provide full stack development leadership and expertise\r\n•	Work with product managers, UI/UX designers, solution architects, technical leads and other developers on interpretation and translation of wireframes and creative designs into functional and non-functional requirements aligned to our software platforms\r\n•	Embrace the established standards and best practices that currently exist for software applications, and contribute ideas in these areas to keep our technology moving forward\r\n•	Collaborate and communicate effectively and efficiently with other developers on the team to achieve the highest quality code & product\r\n•	Report status and work progress to scrum master and technical lead as requested\r\n•	Participate in troubleshooting and defect resolution activity for aligned product and capabilities\r\n•	Create technical documentation as required in the form of technical specifications, and project artifacts\r\n•	Assist/Mentor other developers on the team in software development best practices and continual improvement of service\r\n•	Demonstrate the ability to adapt and work with team members of various experience levels\r\n \r\nRequired Experience / Skills:\r\n•	Bachelor’s degree in Computer/Information Science or Information Systems Management or equivalent\r\n•	Passion for delivering quality software, learning new technologies and mentoring others\r\n•	Minimum of 5 years experience in Java/JEE based applications and development\r\n•	Experience using the following software frameworks/concepts: Client side MVC, Spring, Hibernate, Junit, Maven, microservices, SOAP/Rest frameworks, Spring MVC\r\n•	At least two years of experience building complex web applications using Angular (or other similar JavaScript based frameworks) in a corporate environment\r\n•	Experience with client-side UI frameworks like AngularJS and how these integrate into a REST services framework\r\n•	Experience in Linux/Unix/Mac OS X based environments, comfortable working with command line tools & scripting\r\n•	Experience with the following tools & technologies: Docker, Jenkins, Selenium, GIT, Swagger, Eclipse, Tomcat, SonarQube,\r\n•	Experience with Continuous Integration/Continuous Delivery environment, utilizing automated testing, as well as Test Driven Development\r\n•	Experience working on teams that have employed agile and lean methodologies.\r\n•	Experience building mobile apps using Cordova and Ionic (or other similar mobile development frameworks)\r\n•	Experience with Bootstrap or similar frameworks\r\n•	Experience using CSS Preprocessors (preferably SASS)\r\n•	Skilled problem solvers with the desire and proven ability to create innovative solutions.\r\n•	Flexible and adaptable attitude, disciplined to manage multiple responsibilities and adjust to varied environments.\r\n•	Future technology leaders- dynamic individuals energized by fast paced personal and professional growth.', 'Angular JS, CSS3, HTML, Spring, Hiberante', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Angular JS,HTML, CSS3, Spring, Hibernate', 0, NULL, NULL, 'Annum', 'public', NULL, 78, NULL, '2019-09-24 13:13:25', 78),
(32, NULL, 'Photon-04', 78, 'Avinash Kumar', 'Java Full Stack Developer', 2, 1, 'Photon infotech', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BS,CA,Diploma,MBA,PhD,B.Tech,M.Tech', '8+', '8+', '8+', 'Plano', 'TX', 'Contract', '9+', 'Month', 3, 'Job Description:\r\n•	Participate in all aspects of the software development lifecycle which includes solution design, estimation, development, documentation, testing and deployment within an Agile Continuous Delivery environment\r\n•	Provide full stack development leadership and expertise\r\n•	Work with product managers, UI/UX designers, solution architects, technical leads and other developers on interpretation and translation of wireframes and creative designs into functional and non-functional requirements aligned to our software platforms\r\n•	Embrace the established standards and best practices that currently exist for software applications, and contribute ideas in these areas to keep our technology moving forward\r\n•	Collaborate and communicate effectively and efficiently with other developers on the team to achieve the highest quality code & product\r\n•	Report status and work progress to scrum master and technical lead as requested\r\n•	Participate in troubleshooting and defect resolution activity for aligned product and capabilities\r\n•	Create technical documentation as required in the form of technical specifications, and project artifacts\r\n•	Assist/Mentor other developers on the team in software development best practices and continual improvement of service\r\n•	Demonstrate the ability to adapt and work with team members of various experience levels\r\n \r\nRequired Experience / Skills:\r\n•	Bachelor’s degree in Computer/Information Science or Information Systems Management or equivalent\r\n•	Passion for delivering quality software, learning new technologies and mentoring others\r\n•	Minimum of 5 years experience in Java/JEE based applications and development\r\n•	Experience using the following software frameworks/concepts: Client side MVC, Spring, Hibernate, Junit, Maven, microservices, SOAP/Rest frameworks, Spring MVC\r\n•	At least two years of experience building complex web applications using Angular (or other similar JavaScript based frameworks) in a corporate environment\r\n•	Experience with client-side UI frameworks like AngularJS and how these integrate into a REST services framework\r\n•	Experience in Linux/Unix/Mac OS X based environments, comfortable working with command line tools & scripting\r\n•	Experience with the following tools & technologies: Docker, Jenkins, Selenium, GIT, Swagger, Eclipse, Tomcat, SonarQube,\r\n•	Experience with Continuous Integration/Continuous Delivery environment, utilizing automated testing, as well as Test Driven Development\r\n•	Experience working on teams that have employed agile and lean methodologies.\r\n•	Experience building mobile apps using Cordova and Ionic (or other similar mobile development frameworks)\r\n•	Experience with Bootstrap or similar frameworks\r\n•	Experience using CSS Preprocessors (preferably SASS)\r\n•	Skilled problem solvers with the desire and proven ability to create innovative solutions.\r\n•	Flexible and adaptable attitude, disciplined to manage multiple responsibilities and adjust to varied environments.\r\n•	Future technology leaders- dynamic individuals energized by fast paced personal and professional growth.', 'Angular JS, CSS3, HTML, Spring, Hiberante', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Angular JS,HTML, CSS3, Spring, Hibernate', 0, NULL, NULL, 'Annum', 'public', NULL, 78, NULL, '2019-09-24 13:13:26', 78),
(33, NULL, 'Zen-08', 40, '14', 'Java Core Developer', 2, 1, '5', '55', '60', 'Hourly', '2019-09-24', 'Draft', 'no', 'India', '2019-10-10', NULL, NULL, '8', '8', '8', 'Raleigh', 'NC', 'Contract', '12', 'Day', 3, 'Responsibilities:\r\nThe Java Core Developer will design & develop interfaces for web applications for commerce transactions systems. The primary focus will be on code quality and efficiency.\r\n\r\nQualifications:\r\n•	8+ years of experience in Java full stack application development\r\n•	Excellent communication skills and self-driven\r\n•	Hands-on professional project work experience in the following: Java, J2EE, Web Services, Spring Framework, Multi-threading, Hibernate, AJAX, Java Script, Angular and JQuery', 'Java, J2EE, Web Services, Spring Framework, Multi-threading, Hibernate, AJAX, Java Script, Angular and JQuery', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC', NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Annum', 'public', NULL, 40, NULL, '2019-09-24 13:14:22', 40),
(35, NULL, '48072-1', 60, 'Pinky Kumari', 'ENOVIA PLM Consultant', 2, 1, 'IT Scient LLC', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-10-01', NULL, 'B.Tech', '8+', '8+', '8+', 'Mason', 'OH', 'Contract', '6+', 'Month', 2, '1. At least 8 years of experience with ENOVIA 3DExperience V6 2018x above  based application infrastructure planning, design, scaling ,development and deployment.\r\n2. At least 5 years of experience in creating requirement specifications based on Architecture. Design Detailing of Processes, of PLM implementations in larger enterprise set ups.\r\n3. Experience in Planning, scaling and Design of ENOVIA V6 implementations,', 'ENOVIA 3D,V6 2018x ,PLM implementations ,ENOVIA V6, PG IDQ AMS', NULL, NULL, NULL, NULL, 0, NULL, 'H1 Visa', NULL, NULL, NULL, 'ENOVIA 3D,V6 2018x ,PLM implementations ,ENOVIA V6, PG IDQ AMS', 0, NULL, NULL, 'Hourly', 'public', NULL, 60, NULL, '2019-09-24 13:19:08', 60),
(36, NULL, '43918-1', 63, 'Pooja Sharma', 'Devops Engineer', 2, 1, 'IT SCIENT _LLC', '50k', '55k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-10-01', NULL, 'B.Tech', '7', '7', '7', 'Exton', 'PA', 'Contract', '6', 'Month', 2, '-       Should have minimum of 7 years IT experience in DevOps L3 Support.\r\n-       Have experience to work either or both on AWS / Azure could platforms.\r\n-       Have experience on Build and Deployment automation.\r\n-       Experience in Tools support like Chef & Terraform.\r\n-       Should be able to interact with Client and work independently', 'CICD, UNIX, Cloud', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC', NULL, NULL, NULL, 'CICD,UNIX,Cloud', 0, NULL, NULL, 'Hourly', 'public', NULL, 63, NULL, '2019-09-24 13:27:04', 63),
(37, NULL, 'Photon-05', 82, 'Akash Mondal', 'Node JS Developer', 2, 1, 'Photon Infotech', '55k', '60k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BS,MS,PhD,B.Tech,BCA,M.SC,M.Tech,MCA', '6+', '6+', '6+', 'Bellevue', 'WA', 'Contract', '6+', 'Month', 2, 'Job Description:\r\n•	Minimum 5 yrs of experience in NodeJS \r\n•	Strong proficiency with JavaScript \r\n•	Knowledge of Node.js and frameworks and libraries such as Express, Async, Lodash, socket, etc \r\n•	Understanding the nature of asynchronous programming and its quirks and workarounds \r\n•	Good understanding of server-side templating languages such as Jade, EJS, etc depending on your technology stack \r\n•	Basic understanding of front-end technologies, such as HTML5, and CSS3 \r\n•	Understanding accessibility and security compliance \r\n•	User authentication and authorization between multiple systems, servers, and environments \r\n•	Integration of multiple data sources and databases into one system \r\n•	Understanding fundamental design principles behind a scalable application \r\n•	Understanding differences between multiple delivery platforms, such as mobile vs. desktop, and optimizing output to match the specific platform \r\n•	Creating database schemas that represent and support business processes \r\n•	Implementing automated testing platforms and unit tests \r\n•	Proficient understanding of code versioning tools, such as Git \r\n\r\nRoles and Responsibilities \r\n•	Integration of user-facing elements developed by front-end developers with server side logic \r\n•	Writing reusable, testable, and efficient code \r\n•	Design and implementation of low-latency, high-availability, and performance applications \r\n•	Implementation of security and data protection \r\n•	Integration of data storage solutions', 'Node.JS,\r\nCSS3,\r\nJavaScript,\r\nHTML', 'UI, Frontend', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Node.JS, CSS3, JavaScript, HTML', 0, NULL, NULL, 'Hourly', 'public', NULL, 82, NULL, '2019-09-24 13:30:32', 82),
(38, NULL, 'Photon-06', 82, 'Akash Mondal', 'Python Developer', 2, 1, 'Photon Infotech', '50k', '55k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BA', '8', '8', '8', 'Dallas', 'TX', 'Contract', '6+', 'Month', 2, 'Total Experience: 8+ Years Must Have: Python, JavaScript, HTML, SQL, Django, Fask, Pandas, Python Libs Good to have: PyGTK, tkInter, wxPython', 'Python,\r\nJavascript,\r\nSQL,\r\nFask,\r\nPandas', 'HTML,\r\nDjango,\r\nPython Libs', NULL, NULL, NULL, 0, NULL, 'EAD-GC', NULL, NULL, NULL, 'Python, Javascript, SQL, Fask, Pandas,HTML, Django, Python Libs', 0, NULL, NULL, 'Annum', 'public', NULL, 82, NULL, '2019-09-24 14:12:33', 82);
INSERT INTO `tbl_post_jobs` (`ID`, `for_group`, `job_code`, `employer_ID`, `owner_id`, `job_title`, `company_ID`, `industry_ID`, `client_name`, `pay_min`, `pay_max`, `pay_uom`, `dated`, `sts`, `is_featured`, `country`, `last_date`, `age_required`, `qualification`, `min_experience`, `max_experience`, `experience`, `city`, `state`, `job_mode`, `job_duration`, `job_duration_uom`, `vacancies`, `job_description`, `requirement_must`, `requirement_optional`, `contact_person`, `contact_email`, `contact_phone`, `viewer_count`, `job_slug`, `job_visa_status`, `ip_address`, `flag`, `old_id`, `required_skills`, `email_queued`, `min_pay_rate`, `max_pay_rate`, `pay_rate_umo`, `privacy_level`, `status`, `created_by`, `is_employer`, `last_updated_date`, `last_updated_by`) VALUES
(40, NULL, 'Photon-10', 80, 'Pratik Kumar', 'Azure Data Architect', 2, 1, 'Photon infotech', '45k', '50k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'B.Tech,M.Tech', '9', '9', '9', 'Bellevue', 'AK', 'Contract', '8', 'Month', 4, 'The  Architect will own the Azure Data Services technical architecture: data architecture design sessions, implementation and/or Proofs of Concepts. The ideal candidate will have experience in customer facing roles and success leading deep technical architecture and design discussions with senior executives.\r\n \r\nKey Responsibilities\r\n \r\nInterface with delivery team to design Azure data services solutions in support of the overarching analytics services solution, including SQL Database,  SQL Data Warehouse, HD Insight, AZURE EVENT HUB, AZURE DATA FACTORY, AZURE DATA LAKE, Stream Analytics, and Notification Hubs\r\nArchitect scalable data processing and analytics solutions, including technical feasibility for Big Data storage, processing and consumption e.g., development of enterprise Data Lake strategy, heterogeneous data management, Polyglot Persistence, decision support over Data Lake\r\nReport on progress of PROGRAM objectives; Ensure plan execution, Document and share technical best practices / insights with Engineering team\r\n \r\nExperience Required\r\n \r\n5+ years of experience with deep understanding in both traditional and modern data architecture and processing concepts, including relational databases (e.g., SQL Server, MySQL, Oracle), Data warehousing, big data (Hadoop, Spark, Storm), noSQL, and business analytics\r\n5+ years of success in consultative/complex technical deployment projects (where necessary, managing various stakeholder relationships to get consensus on solutions)\r\nUnderstanding of big data use-cases and Hadoop-based design patterns Knowledge of real time/stream analytics trends\r\n5+ years of architecture, design, implementation, and/or support of complex application architectures (i.e. having an architectural sense for connecting data sources, data visualization, structured and unstructured data, etc.)\r\nDemonstrable hands on experience implementing Big Data solutions using Microsoft Data Platform and Azure Data Services\r\nCreate a data factory, orchestrate data processing activities in a data-driven workflow, monitor and manage the data factory, move, transform and analyze data\r\n \r\no Design big data real-time processing solutions:\r\nIngest data for real-time processing, design and provision compute resources, design for lambda architecture, design for real-time processing\r\n \r\no Designing big data batch processing and interactive solutions:\r\nIngest data for batch and interactive processing, design and provision compute clusters, design for data security, design for batch processing, design interactive queries \r\n \r\nDeep technical experience in one or more of the following areas: Software design or development, Application Design, Systems Operations / Management, Database architecture, Virtualization,IT Security\r\n \r\nWorking knowledge with AGILE development, SCRUM and Application Lifecycle Management\r\n \r\n \r\nTechnical Requirements\r\n \r\nProficient with Azure cloud computing \r\nAzure SQL DB/DW, HD Insight, Azure Data Lake Storage, Azure Data Lake Analytics, Stream Analytics, Azure Data Factory, and CosmosDB.\r\nExperience of hybrid and/or cloud architectures that utilize Azure\r\nExperience in or exposure to solutions that are analytical in nature, employing data centric architectures\r\nData technology literate with a detailed understanding of data architecture and data tools and technologies, in particular in memory/in database and open source technology.\r\nFamiliarity and experience with Java/Node based Microservices\r\n \r\n \r\nKnowledge and/or experience in one of the below listed bullets:\r\nC#, R, Python, SQL, PL/SQL, MDX, JSON, XML, .NET, C++, T-SQL, Java, JSON, PHP\r\nHadoop, Spark, Storm, Pig/Hive\r\nNoSQL,  MongoDB\r\nPL/SQL Developer, SQL Query Analyzer,  PowerBI, Visual Studio, TFS\r\nVoltage Decryption', 'Azure Data Factory\r\nAzure Data Lake\r\nSQL\r\nNoSQL', 'Data Lake strategy', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Azure Data Factory,Azure Data Lake,SQL,NoSQL', 0, NULL, NULL, 'Annum', 'public', NULL, 80, NULL, '2019-09-24 15:04:46', 80),
(41, NULL, 'Photon-01', 83, 'Prashant Kumar Yadav', 'Android Developer', 2, 1, 'IT-SCIENT LLC', '50k', '55k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BS,MS,B.Tech,BCA,M.SC,M.Tech,MCA', '5+', '5+', '5+', 'Boston', 'MA', 'Contract', '6+', 'Month', 3, '•          Strong knowledge of Android SDK, different versions of Android, and how to deal with different screen sizes\r\n•          Familiarity with RESTful APIs to connect\r\n•          Android applications to back-end services\r\n•          Strong knowledge of Android UI design principles, patterns, and best practices\r\n•          Experience with offline storage, threading, and performance tuning\r\n•          Ability to design applications around natural user interfaces, such as “touch” Familiarity with the use of additional sensors, such as gyroscopes and accelerometers\r\n•          Knowledge of the open-source Android ecosystem and the libraries available for common tasks\r\n•          Ability to understand business requirements and translate them into technical requirements\r\n•          Familiarity with cloud message APIs and push notifications\r\n•          A knack for benchmarking and optimization Understanding of Google’s Android design principles and interface guidelines\r\n•          Proficient understanding of code versioning tools, such as Git Familiarity with continuous integration\r\n•          7+ years of hands on development experience on the Android platform with a strong understanding of the Android Architecture Experience with all phases of the development life cycle\r\n•          Conceptual and detailed design for state-of-the-art and complex development projects based on Microsoft technologies Development of architectural design artifacts for IT solutions addressing customer requirements', 'Android SDK,\r\nAndroid platform,\r\nAndroid UI design,\r\nRestful APIs', 'Android UI design', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Android SDK, Android platform, Android UI design, Restful APIs', 0, NULL, NULL, 'Annum', 'public', NULL, 83, NULL, '2019-09-24 17:41:19', 83),
(43, NULL, 'Photon-02', 83, 'Prashant Kumar Yadav', 'React JS developer', 2, 1, 'IT-SCIENT LLC', '40k', '45k', 'Hourly', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BA,BS,CA,B.Tech,BCA,M.SC,M.Tech,MCA', '5+', '5+', '5+', 'Bellevue', 'WA', 'Contract', '6+', 'Day', 3, 'At least 6+ years of software development experience having a focus on front-end development. \r\n•	2+ years experience in ReactJS. \r\n•	Hands on experience with server side rendering, server side streaming & Redux \r\n•	Hands on experience with browser developer tools for UI performance debugging \r\n•	Hands on experience with the Nodejs performance monitoring & tuning \r\n•	source-code management tools (e.g., Git, SVN) \r\n•	Experience with Scrum or another Agile methodology \r\n•	A desire and willingness to be challenged and learn about new technologies \r\n•	A passion for building high quality code with efficiency and maintainability in mind \r\n•	Experience with test driven development \r\n•	Strong analytical and creative problem solving skills', 'React JS,\r\nRedux,\r\nUI,\r\nHTML,\r\nNode.JS,\r\nAngular JS', 'Git, SVN,Agile', NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'React JS, Redux UI, HTML, Node.JS, Angular JS', 0, NULL, NULL, 'Hourly', 'public', NULL, 83, NULL, '2019-09-24 17:48:25', 83),
(46, NULL, 'Photon-07', 81, 'Vishal Kumar Singh', 'iOS Lead', 2, 1, 'IT SCIENT LLC', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BE,BS,HSSC,MS,PhD,SSC,B.Tech,BCA,M.SC,M.Tech,MCA', '5', '5', '5', 'Canton', 'MA', 'Contract', '6+', 'Month', 2, 'This position is responsible for the day to day development, review and production support of consumer mobile application.\r\nThe candidate should be comfortable with native app coding based on iOS development guidelines. This position is also responsible for collaborating with 3rd party vendors to ensure development is on track & quality. On top of this, the candidate should be comfortably communicating with cross-functional teams and be able to provide updates to key stakeholders.\r\n 	\r\nIn-depth knowledge of iOS SDK, XCode, Objective-C and Swift\r\nSolid understanding of design patterns such as MVC, MVP, VIPER &MVVM.\r\nExcellent knowledge of working with dynamic data (e.g., JSON, XML) through various interface types (e.g., REST, SOAP)\r\nExperience creating automated test scripts to check API’s readiness to integrate in the application (Service Assurance Tests)\r\nExperience managing software projects with source control systems (e.g., GitHub)\r\nExperience with mobile security vulnerability assessment techniques & devising remediation plan\r\nGood understanding of the native app DevOps build experience (e.g., Ansible, CocoaPods, Fastlane)\r\nUnderstanding of the iOS Provisioning portal processes (provisioning profiles, certificates, entitlements)\r\nFamiliarity with 3rd party cloud-based technologies (e.g., AWS, TeamCity) and services including push notifications (e.g., Epsilon), analytics (e.g., New Relic, Apptentive), distribution & crash monitoring (e.g., Firebase)', 'Objective C\r\nSwift\r\niOS SDK\r\nXCode\r\nCocoa Touch', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Objective C Swift iOS SDK XCode Cocoa Touch', 0, NULL, NULL, 'Annum', 'public', NULL, 81, NULL, '2019-09-24 18:07:36', 81),
(45, NULL, 'Photon-08', 81, 'Vishal Kumar Singh', 'Data Scientist', 2, 1, 'IT SCIENT LLC', '55k', '60k', 'Annum', '2019-09-24', 'Published', 'no', 'United States', '2019-09-30', NULL, 'BE,BS,MBA,MS,PhD,SSC,MCS,BCA,M.SC,M.Tech,MCA', '7+', '7+', '7+', 'Parsippany', 'NJ', 'Contract', '6+', 'Month', 2, 'Job Description:\r\n\r\nSeeking a data scientist/model builder to join our IT Business Systems team. This is a newly created position for our firm and in this role, one would be required to develop advanced analytical models to solve business problems leveraging the latest technologies in statistical, unsupervised, supervised, and Artificial Intelligence (AI) models to achieve organizational goals, increase data-driven insights, functional excellence, and digital expertise.\r\nESSENTIAL DUTIES (100%):\r\n60% - Data Modeling\r\n• Transform business problem into data science case to assess the scope of the model’s value, speed, and cost in order to articulate model selection criteria\r\n• Build Data Science models using cloud-computing platforms such as AWS, Azure, and Google\r\n• Build Data Science models using any relevant Data Science capability\r\n• Be prepared to automate analytical workflows\r\n• Manage and shape modeling design, development, and delivery process\r\n20% - Data Collection\r\n• Collect, profile, collate, and map appropriate data for usage in new or existing solutions as well as for ongoing data analysis activities\r\n• Develop, maintain, and review data processes and architecture for both on-premise and cloud-based data systems\r\n• Develop and perform standard queries to ensure data quality, identify data inconsistencies, missing data and resolve as needed\r\n• Perform data extraction, storage, manipulation, processing, and analysis\r\n• Conduct programmatic web scraping to acquire external publically available information\r\n\r\n 20% - Model Deployment and Evaluation\r\n\r\n• Assemble relevant User Interfaces (UIs) or Dashboards\r\n• Assemble, deliver, and effectively communicate actionable insights for decision-makers\r\n\r\n\r\nLEVEL BASED COMPETENCIES: \r\n\r\n• Teamwork: Collaborates with other members of formal and informal groups in the pursuit of a common mission, vision, values, and mutual goals\r\n• Change Advocate: Identifies and acts upon opportunities for continuous improvement\r\n• Communicates for Results: Expresses technical and business concepts, ideas, feelings, opinions, and conclusions orally and in writing\r\n\r\n• Conceptual Thinking: Applies appropriate concepts and theories in the development of principles, practices, techniques, tools, and solution.\r\n• Information Seeking: Gathers and analyzes information or data on current and future trends of best practice\r\n• Innovation: Employs sound judgment in determining how innovations will be deployed to produce a return on investment\r\n• Problem Solving: Anticipate, identify and define problems to seek out the root causes\r\n\r\nTECHNICAL KNOWLEDGE/SKILLS:\r\n\r\n• (Advanced) Python, R, or other relevant Data Science capabilities\r\n• (Intermediate) SQL, NoSQL, & Hadoop\r\n• (Entry) Any Data or visualization tool or software\r\n• (Entry) Web Scraping: Scrapy, bsa, selenium, spiders, and API calls\r\n\r\nGENERAL KNOWLEDGE/SKILLS:\r\n\r\n• (Advanced) Data intuition\r\n• (Intermediate) General experience across relevant business operations to enhance understanding would be desirable\r\n• (Entry) Exposure to roofing or manufacturing industry would be helpful\r\n\r\n\r\nREQUIRED EDUCATION/EXPERIENCE:\r\n• Undergraduate Education or Graduate of a Data Science Academy in a related technical Data Science discipline', 'Big Data Technologies, Python, R, Map Reduce', NULL, NULL, NULL, NULL, 0, NULL, 'EAD-GC,EAD-H4,EAD-L2,Green Card,H1 Visa,TN Visa,US Citizen', NULL, NULL, NULL, 'Big Data Technologies, Python, R, Map Reduce', 0, NULL, NULL, 'Annum', 'public', NULL, 81, NULL, '2019-09-24 18:00:03', 81);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prohibited_keywords`
--

CREATE TABLE `tbl_prohibited_keywords` (
  `ID` int(11) NOT NULL,
  `keyword` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualifications`
--

CREATE TABLE `tbl_qualifications` (
  `ID` int(15) NOT NULL,
  `val` varchar(25) DEFAULT NULL,
  `text` varchar(25) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rec_tags`
--

CREATE TABLE `tbl_rec_tags` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `tag_type` varchar(100) NOT NULL,
  `is_tag` varchar(50) NOT NULL,
  `dated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salaries`
--

CREATE TABLE `tbl_salaries` (
  `ID` int(5) NOT NULL,
  `val` varchar(25) DEFAULT NULL,
  `text` varchar(25) DEFAULT NULL,
  `display_order` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salutation`
--

CREATE TABLE `tbl_salutation` (
  `id` int(11) NOT NULL,
  `salutation` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scam`
--

CREATE TABLE `tbl_scam` (
  `ID` int(11) NOT NULL,
  `user_ID` int(11) DEFAULT NULL,
  `job_ID` int(11) DEFAULT NULL,
  `reason` text,
  `dated` datetime DEFAULT NULL,
  `ip_address` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule_interview`
--

CREATE TABLE `tbl_schedule_interview` (
  `schedule_id` int(11) NOT NULL,
  `employer_ID` int(11) NOT NULL,
  `job_ID` int(11) NOT NULL,
  `seeker_ID` int(11) NOT NULL,
  `interview_date` date NOT NULL,
  `interview_type` enum('Telephonic','Skype/Video','In-Person Date','from time','end time') NOT NULL,
  `from_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `invitees_to` varchar(255) NOT NULL,
  `invitees_cc` varchar(255) NOT NULL,
  `instructions` text NOT NULL,
  `attachment_note` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `dated` date NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seekers_applied_by_employer`
--

CREATE TABLE `tbl_seekers_applied_by_employer` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `dated` datetime NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `gender` enum('female','male') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `cv_file` varchar(60) NOT NULL,
  `default_cv_id` int(11) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `home_phone` varchar(25) DEFAULT NULL,
  `skills` varchar(200) NOT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `career_objective` text,
  `sts` enum('active','blocked','pending') NOT NULL DEFAULT 'active',
  `verification_code` varchar(155) DEFAULT NULL,
  `first_login_date` datetime DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `slug` varchar(155) DEFAULT NULL,
  `visa_status` varchar(50) NOT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `employer_id` varchar(60) NOT NULL,
  `owner_id` varchar(60) NOT NULL,
  `old_id` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `queue_email_sts` tinyint(1) DEFAULT NULL,
  `send_job_alert` enum('no','yes') DEFAULT 'yes',
  `min_pay_rate` varchar(255) NOT NULL,
  `max_pay_rate` varchar(255) NOT NULL,
  `pay_rate_umo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_academic`
--

CREATE TABLE `tbl_seeker_academic` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) DEFAULT NULL,
  `degree_level` varchar(30) DEFAULT NULL,
  `degree_title` varchar(100) DEFAULT NULL,
  `major` varchar(155) DEFAULT NULL,
  `institude` varchar(155) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `completion_year` varchar(50) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seeker_academic`
--

INSERT INTO `tbl_seeker_academic` (`ID`, `seeker_ID`, `degree_level`, `degree_title`, `major`, `institude`, `country`, `city`, `completion_year`, `dated`, `flag`, `old_id`) VALUES
(1, 0, '', 'BCA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, NULL, 'MCA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, 'BCA', 'Mechanical Engineering', 'Mumbai University', 'India', '7326', '2013', NULL, NULL, NULL),
(3, 0, NULL, 'BBA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, NULL, 'BE/B.TECH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0, NULL, 'BS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 0, NULL, 'MS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 0, NULL, 'B.COM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, NULL, 'MBA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, NULL, 'BCA', 'Computer', 'Vikekanand College', 'India', 'Jamshedpur', '2017', NULL, NULL, NULL),
(11, 1, NULL, 'BCA', 'Computer', 'Kantilal College', 'India', 'Jamshedpur', '2018', NULL, NULL, NULL),
(12, 4, NULL, 'BE/B.TECH', 'Computer', 'KAMIR COLLEGE', 'India', 'Jamshedpur', '2017', NULL, NULL, NULL),
(13, NULL, NULL, 'BE/B.TECH', 'Bachelor of Engineering', 'Nagpur University', 'India', 'Nagpur', '2000', NULL, NULL, NULL),
(14, NULL, NULL, 'BE/B.TECH', 'Computer science', 'JNTUH', 'India', 'Haydrabad', '2011', NULL, NULL, NULL),
(15, 5, NULL, 'MBA', 'MBA', 'Cleveland State University', 'USA', 'Cleveland', '2015', NULL, NULL, NULL),
(16, 7, NULL, '7', 'Accounting', 'University of Buea', '2', 'Buea', '2009', NULL, NULL, NULL),
(17, 8, NULL, 'BE/B.TECH', 'Bachelors in Information technology', 'JNTU', 'India', NULL, '2011', NULL, NULL, NULL),
(18, 9, NULL, 'BE/B.TECH', 'Computer Science', 'JNTU', 'India', 'Hyderabad', '2010', NULL, NULL, NULL),
(19, 10, NULL, 'BE/B.TECH', 'Science', 'East Central University', 'USA', 'Ada', '2011', NULL, NULL, NULL),
(20, 11, NULL, 'BE/B.TECH', 'Information Science', 'SDMIT', 'India', 'Karnataka', '2010', NULL, NULL, NULL),
(21, 11, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL),
(22, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 14, NULL, 'BE/B.TECH', 'Electrical Engineering', 'JNTU', 'India', 'Hyderabad', '2012', NULL, NULL, NULL),
(25, 15, NULL, 'BBA', 'Bussiness Administration', 'Tribhuvan University', 'India', 'Kathmandu', '1993', NULL, NULL, NULL),
(26, 16, NULL, 'BE/B.TECH', 'EEE', 'Acharya Nagarjuna University', 'India', 'Vijayawada', '2012', NULL, NULL, NULL),
(27, 17, NULL, 'BCA', 'COMPUTER', 'Andhra University, Visakhapatnam, India', 'India', 'Visakhapatnam', '2011', NULL, NULL, NULL),
(28, 18, NULL, 'B.COM', 'commerce', 'SKU', 'India', 'Ananthapur', '2001', NULL, NULL, NULL),
(29, 19, NULL, 'BCA', 'COMPUTER', 'Andhra University, Visakhapatnam, India', 'India', 'Visakhapatnam', '2010', NULL, NULL, NULL),
(30, 20, NULL, 'BE/B.TECH', 'Bachelors in ECE', 'JNTU', 'USA', 'NC', '2011', NULL, NULL, NULL),
(31, 21, NULL, 'BE/B.TECH', 'Computer Science', 'Andhra University', 'India', 'Visakhapatnam', '2004', NULL, NULL, NULL),
(32, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 23, NULL, 'BE/B.TECH', 'computer', 'it scient', 'India', 'ranchi', '2004', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_additional_info`
--

CREATE TABLE `tbl_seeker_additional_info` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL COMMENT 'JSON data',
  `interest` varchar(155) DEFAULT NULL,
  `awards` varchar(100) DEFAULT NULL,
  `additional_qualities` varchar(155) DEFAULT NULL,
  `convicted_crime` enum('no','yes') DEFAULT 'no',
  `crime_details` text,
  `summary` text,
  `bad_habits` varchar(255) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_applied_for_job`
--

CREATE TABLE `tbl_seeker_applied_for_job` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) NOT NULL,
  `job_ID` int(11) NOT NULL,
  `cover_letter` text,
  `expected_salary` varchar(20) DEFAULT NULL,
  `dated` date NOT NULL,
  `ip_address` varchar(40) DEFAULT NULL,
  `employer_ID` int(11) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL,
  `candate_name` varchar(200) NOT NULL,
  `phone_no_mobile` varchar(20) NOT NULL,
  `phone_no_home` varchar(2) DEFAULT NULL,
  `email_id` varchar(200) NOT NULL,
  `updated_resume` varchar(255) DEFAULT NULL,
  `skype_id` varchar(200) DEFAULT NULL,
  `current_location` varchar(250) NOT NULL,
  `visa_status` varchar(50) DEFAULT NULL,
  `new_assignment` varchar(200) DEFAULT NULL,
  `personal_interviews` varchar(200) DEFAULT NULL,
  `telephonic_interviews` varchar(200) DEFAULT NULL,
  `expectation_trainee_stipend` varchar(200) DEFAULT NULL,
  `expectation_hours` varchar(200) DEFAULT NULL,
  `total_experience` varchar(100) DEFAULT NULL,
  `is_employer` int(11) NOT NULL,
  `submitted_by` int(11) NOT NULL,
  `pay_min` varchar(255) NOT NULL,
  `pay_max` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seeker_applied_for_job`
--

INSERT INTO `tbl_seeker_applied_for_job` (`ID`, `seeker_ID`, `job_ID`, `cover_letter`, `expected_salary`, `dated`, `ip_address`, `employer_ID`, `flag`, `old_id`, `candate_name`, `phone_no_mobile`, `phone_no_home`, `email_id`, `updated_resume`, `skype_id`, `current_location`, `visa_status`, `new_assignment`, `personal_interviews`, `telephonic_interviews`, `expectation_trainee_stipend`, `expectation_hours`, `total_experience`, `is_employer`, `submitted_by`, `pay_min`, `pay_max`) VALUES
(2, 5, 10, NULL, '40k-45k', '2019-09-24', '1.6.162.197', 30, NULL, NULL, 'Disha', '9728223017', NULL, 'dlakhankar@gmail.com', NULL, NULL, 'Dallas, TX', 'US Citizen', NULL, NULL, NULL, NULL, NULL, NULL, 0, 30, '40k', '45k'),
(4, 9, 9, NULL, '55k-60k', '2019-09-24', '1.6.162.197', 8, NULL, NULL, 'Sindhuja', '7147214144', NULL, 'sindhuja.namala9@gmail.com', NULL, NULL, 'Los Angele', 'H-B1', NULL, NULL, NULL, NULL, NULL, NULL, 0, 8, '55k', '60k'),
(5, 7, 4, NULL, '25k-30k', '2019-09-24', '1.6.162.197', 39, NULL, NULL, 'CELINE', '1234567890', NULL, 'cnjeck@yahoo.com', NULL, NULL, 'Dallas, TX', 'US Citizen', NULL, NULL, NULL, NULL, NULL, NULL, 0, 39, '25k', '30k'),
(6, 15, 19, NULL, '40k-45k', '2019-09-24', '1.6.162.197', 65, NULL, NULL, 'Sushil', '8319172709', NULL, 'Rajbhandari.Sushil@gmail.com', NULL, NULL, 'Bothell', 'US Citizen', NULL, NULL, NULL, NULL, NULL, NULL, 0, 65, '40k', '45k'),
(7, 7, 1, NULL, '15k-20k', '2019-09-24', '1.6.162.197', 39, NULL, NULL, 'CELINE', '1234567890', NULL, 'cnjeck@yahoo.com', NULL, NULL, 'Dallas, TX', 'US Citizen', NULL, NULL, NULL, NULL, NULL, NULL, 0, 39, '15k', '20k'),
(8, 7, 7, NULL, '20k-25k', '2019-09-24', '1.6.162.197', 39, NULL, NULL, 'CELINE', '1234567890', NULL, 'cnjeck@yahoo.com', NULL, NULL, 'Dallas, TX', 'US Citizen', NULL, NULL, NULL, NULL, NULL, NULL, 0, 39, '20k', '25k'),
(9, 19, 8, NULL, '20k-25k', '2019-09-24', '1.6.162.197', 31, NULL, NULL, 'Khant', '4159526491', NULL, 'khantvyas1987@gmail.com', NULL, NULL, 'Sunnyvale', 'H1-B', NULL, NULL, NULL, NULL, NULL, NULL, 0, 31, '20k', '25k');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_applied_for_job_client_refrence`
--

CREATE TABLE `tbl_seeker_applied_for_job_client_refrence` (
  `id` int(11) NOT NULL,
  `applied_job_id` varchar(20) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `work_location` varchar(200) NOT NULL,
  `contact_designation` varchar(200) NOT NULL,
  `contacts_email` varchar(200) NOT NULL,
  `contact_phone` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_applied_for_job_doc`
--

CREATE TABLE `tbl_seeker_applied_for_job_doc` (
  `id` int(11) NOT NULL,
  `applied_job_id` varchar(20) NOT NULL,
  `resume` varchar(200) NOT NULL,
  `visa` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_applied_for_job_salary_uom`
--

CREATE TABLE `tbl_seeker_applied_for_job_salary_uom` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(200) NOT NULL,
  `yrs_of_exp` varchar(20) NOT NULL,
  `self_rating` varchar(10) NOT NULL,
  `applied_job_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_documents`
--

CREATE TABLE `tbl_seeker_documents` (
  `id` int(11) NOT NULL,
  `document_type` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `dated` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `seeker_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_experience`
--

CREATE TABLE `tbl_seeker_experience` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) DEFAULT NULL,
  `job_title` varchar(155) DEFAULT NULL,
  `company_name` varchar(155) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `responsibilities` text,
  `dated` datetime DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  `old_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_seeker_experience`
--

INSERT INTO `tbl_seeker_experience` (`ID`, `seeker_ID`, `job_title`, `company_name`, `start_date`, `end_date`, `city`, `country`, `responsibilities`, `dated`, `flag`, `old_id`) VALUES
(1, NULL, 'Laravel Developer', 'It-Info', '2019-09-10', '2019-09-27', 'Jamshedpuer', 'India', NULL, NULL, NULL, NULL),
(2, NULL, 'Java Developer', 'AMDOCS', '2019-09-25', '2019-09-11', '7326', 'India', NULL, NULL, NULL, NULL),
(3, NULL, 'Java Developer', 'Geetanjali Infotech', '2019-09-01', '2019-09-18', 'BHOPAL', 'India', NULL, NULL, NULL, NULL),
(4, 4, '225-45', 'Logisoft', '2017-11-06', '2018-10-11', 'Jaipur', 'India', NULL, NULL, NULL, NULL),
(5, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 'Scrum Master', 'Varidesk', '2016-05-17', '2019-02-12', 'Dallas', 'USA', NULL, NULL, NULL, NULL),
(7, NULL, 'Teradata Developer', 'T-Mobile', '2019-01-21', '2019-09-21', 'Bellevue, WA', 'USA', NULL, NULL, NULL, NULL),
(8, NULL, 'Sr. Scrum Master', 'Nestle', '2017-06-15', '2019-08-15', 'Solon, Ohio', 'USA', NULL, NULL, NULL, NULL),
(9, NULL, 'Scrum Master', 'Vixgrid  Web Agency', '2015-06-15', '2017-06-10', 'Cleveland, Ohio', '2', NULL, NULL, NULL, NULL),
(10, 8, 'Java Developer', 'silverxis', '2017-06-02', '2019-09-25', 'USA', 'USA', NULL, NULL, NULL, NULL),
(11, 9, 'UI Developer', 'Davita', '2016-05-16', '2019-09-21', 'El Segundo', 'USA', NULL, NULL, NULL, NULL),
(12, 10, 'QA Automation Engineer', 'Staples', '2017-07-21', '2019-09-22', 'Framingham', 'USA', NULL, NULL, NULL, NULL),
(13, 11, 'UI Developer', 'PayPal', '1988-09-24', '2019-09-24', 'San Jose,CA', 'USA', NULL, NULL, NULL, NULL),
(14, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 14, 'UI Developer', 'AppleInc', '2017-05-12', '2019-10-24', 'Sunnyvale, CA', 'USA', NULL, NULL, NULL, NULL),
(17, 15, 'UI Developer', 'Century Link', '2019-03-25', '2019-09-20', 'Littleton', 'USA', NULL, NULL, NULL, NULL),
(18, 16, 'MULESOFT DEVELOPER', 'Bank of America', '2015-11-10', '2019-09-17', 'Pennington,NJ', 'USA', NULL, NULL, NULL, NULL),
(19, 17, 'JAVA DEVELOPER', 'Verizon Wireless', '2018-09-09', '2019-09-26', 'Piscataway, NJ', 'USA', NULL, NULL, NULL, NULL),
(20, 18, 'Sr. Consultant Oracle cloud Financials', 'Advance Auto Parts', '2019-03-11', '2019-09-20', 'Raleigh, NC', 'USA', NULL, NULL, NULL, NULL),
(21, 19, 'java developer', 'Paypal', '2018-12-30', '2019-10-31', 'San Jose', 'USA', NULL, NULL, NULL, NULL),
(22, 20, 'Java Full Stack Developer', 'Brighthouse Financial', '2017-11-06', '2019-09-25', 'NC', 'USA', NULL, NULL, NULL, NULL),
(23, 21, 'Business Analyst /Program Management', 'Cisco systems', '2019-01-16', '2019-09-25', 'San Jose, CA', 'USA', NULL, NULL, NULL, NULL),
(24, 21, 'Business Analyst/Project Management', 'Brokaw Capital', '2018-01-24', '2018-12-21', 'San Jose, CA', '2', NULL, NULL, NULL, NULL),
(25, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 23, 'ui developer', 'infpsis', '2019-09-06', '2019-09-06', 'ranchi', 'India', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_resumes`
--

CREATE TABLE `tbl_seeker_resumes` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) DEFAULT NULL,
  `is_uploaded_resume` enum('no','yes') DEFAULT 'no',
  `file_name` varchar(155) DEFAULT NULL,
  `resume_name` varchar(40) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `is_default_resume` enum('no','yes') DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seeker_skills`
--

CREATE TABLE `tbl_seeker_skills` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) DEFAULT NULL,
  `skill_name` varchar(155) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE `tbl_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `ID` int(11) NOT NULL,
  `emails_per_hour` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills`
--

CREATE TABLE `tbl_skills` (
  `ID` int(11) NOT NULL,
  `skill_name` varchar(40) DEFAULT NULL,
  `industry_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `country_id`, `state`, `is_active`) VALUES
(1, 1, 'Jharkhand', 1),
(2, 2, 'CA', 1),
(3, 2, 'TX', 1),
(4, 2, 'NC', 1),
(5, 2, 'FL', 1),
(6, 2, 'WA', 1),
(7, 2, 'OR', 1),
(8, 2, 'AZ', 1),
(9, 2, 'MA', 1),
(10, 2, 'Oh', 1),
(11, 2, 'NY', 1),
(12, 2, 'NJ', 1),
(13, 2, 'GA', 1),
(14, 2, 'WI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `sts` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stories`
--

CREATE TABLE `tbl_stories` (
  `ID` int(11) NOT NULL,
  `seeker_ID` int(11) NOT NULL,
  `is_featured` enum('yes','no') DEFAULT 'no',
  `sts` enum('active','inactive') DEFAULT 'inactive',
  `title` varchar(250) DEFAULT NULL,
  `story` text,
  `dated` datetime DEFAULT NULL,
  `ip_address` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_document_type`
--

CREATE TABLE `tbl_sub_document_type` (
  `id` int(11) NOT NULL,
  `doc_id` varchar(50) NOT NULL,
  `sub_document_name` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `ID` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `team_member_type` int(11) NOT NULL DEFAULT '4',
  `assigned_jobs` varchar(255) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass_code` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `jobs_history` varchar(50) NOT NULL,
  `is_active` enum('active','inactive') NOT NULL DEFAULT 'active',
  `dated` date NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mobile_number` varchar(50) DEFAULT NULL,
  `sts` enum('blocked','pending','active') NOT NULL DEFAULT 'active',
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `loc_time_zone` varchar(255) DEFAULT NULL,
  `dis_time_zone` varchar(255) DEFAULT NULL,
  `first_login_date` datetime NOT NULL,
  `last_login_date` datetime NOT NULL,
  `last_updated_date` datetime NOT NULL,
  `last_updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`ID`, `employer_id`, `company_id`, `team_member_type`, `assigned_jobs`, `member_id`, `email`, `pass_code`, `full_name`, `first_name`, `profile_image`, `jobs_history`, `is_active`, `dated`, `phone`, `mobile_number`, `sts`, `country`, `state`, `city`, `loc_time_zone`, `dis_time_zone`, `first_login_date`, `last_login_date`, `last_updated_date`, `last_updated_by`) VALUES
(1, 1, 2, 4, ' ', '1501003', 'sumit.m@itscient.com', 'sumit@123', 'Sumit madne', 'Sumit madne', '152740446.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:35:26', '2019-09-24 12:35:26', '2019-09-24 12:35:26', 1),
(2, 2, 2, 4, ' ', '1701001', 'jashraj.k@itscient.com', 'jashraj@123', 'Jashraj Kumar', 'Jashraj Kumar', 'Untitled.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:38:53', '2019-09-24 12:38:53', '2019-09-24 03:07:47', 2),
(3, 2, 2, 4, ' ', '1901001', 'sanjay.m@itscient.com', 'sanjay@123', 'Sanjay Mandi', 'Sanjay Mandi', '1983798652.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:40:14', '2019-09-24 12:40:14', '2019-09-24 12:40:14', 2),
(4, 2, 2, 4, ' ', '1901002', 'avinash.j@itscient.com', 'avinash@123', 'Avinash Jhingan', 'Avinash Jhingan', '1304595311.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:41:42', '2019-09-24 12:41:42', '2019-09-24 12:41:42', 2),
(5, 2, 2, 4, ' ', '1901003', 'ravi.l@itscient.com', 'ravi@123', 'Ravi lal Teli', 'Ravi lal Teli', '1714135171.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:43:55', '2019-09-24 12:43:55', '2019-09-24 12:43:55', 2),
(6, 2, 2, 4, ' ', '1901004', 'prem.t@itscient.com', 'prem@123', 'prem Toppo', 'prem Toppo', '1465985945.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:45:33', '2019-09-24 12:45:33', '2019-09-24 12:45:33', 2),
(7, 2, 2, 4, ' ', '1901005', 'abhishek.ku@itscient.com', 'abhishek@123', 'Abhishek Gorai', 'Abhishek Gorai', '346500953.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:46:54', '2019-09-24 12:46:54', '2019-09-24 12:46:54', 2),
(8, 2, 2, 4, ' ', '1901006', 'subham.k@itscient.com', 'subham@123', 'Subham Kumar Dey', 'Subham Kumar Dey', '976648255.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:48:27', '2019-09-24 12:48:27', '2019-09-24 12:48:27', 2),
(9, 2, 2, 4, ' ', '1901007', 'chandan.k@itscient.com', 'chandan@123', 'Chandan Kumar', 'Chandan Kumar', '1029399506.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:49:49', '2019-09-24 12:49:49', '2019-09-24 12:49:49', 2),
(10, 1, 2, 3, ' ', 'savi123', 'savita.k@itscient.com', 'savita123', 'Savita kumari', 'Savita kumari', '829838696.png', 'yes', 'active', '2019-09-24', NULL, '9888855885', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:53:03', '2019-09-24 12:53:03', '2019-09-24 12:53:03', 1),
(11, 2, 2, 4, ' ', '1901007', 'abhishek.p@itscient.com', 'abhishek@123', 'Abhishek kumar Pandey', 'Abhishek kumar Pandey', '456464373.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:53:08', '2019-09-24 12:53:08', '2019-09-24 12:53:08', 2),
(12, 2, 2, 4, ' ', '1901008', 'gautam.k@itscient.com', 'gautam@123', 'Gautam Kumar', 'Gautam Kumar', '1354186290.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:54:27', '2019-09-24 12:54:27', '2019-09-24 12:54:27', 2),
(13, 2, 2, 4, ' ', '1901009', 'amit.k@itscient.com', 'amit@123', 'Amit Kumar', 'Amit Kumar', '1762567032.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:56:33', '2019-09-24 12:56:33', '2019-09-24 12:56:33', 2),
(14, 1, 2, 1, ' ', 'joydeep123', 'joydeep.s@itscient.com', 'joydeep123', 'Joydeep Kumar', 'Joydeep Kumar', 'Untitled.png', 'yes', 'active', '2019-09-24', NULL, '1234568785', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:58:06', '2019-09-24 12:58:06', '2019-09-24 03:03:07', 2),
(15, 2, 2, 4, ' ', '1901008', 'abhinay.m@itscient.com', 'abhinay@123', 'Abhinay Mishra', 'Abhinay Mishra', '987126635.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:58:19', '2019-09-24 12:58:19', '2019-09-24 12:58:19', 2),
(16, 2, 2, 4, ' ', '1901009', 'sanju.g@itscient.com', 'sanju@123', 'Sanju Gorai', 'Sanju Gorai', '1319093719.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 12:59:54', '2019-09-24 12:59:54', '2019-09-24 12:59:54', 2),
(17, 2, 2, 4, ' ', '1901010', 'devyani.k@itscient.com', 'devyani@123', 'Devyani Kumari', 'Devyani Kumari', '682762653.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 01:02:27', '2019-09-24 01:02:27', '2019-09-24 01:02:27', 2),
(18, 2, 2, 4, ' ', '1901011', 'neha.s@itscient.com', 'neha@123', 'Neha Singh', 'Neha Singh', '1271343131.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 01:03:47', '2019-09-24 01:03:47', '2019-09-24 01:03:47', 2),
(19, 2, 2, 4, ' ', '1901011', 'archana', 'archana@123', 'Archana Kumari', 'Archana Kumari', '1086197967.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 01:05:52', '2019-09-24 01:05:52', '2019-09-24 01:05:52', 2),
(20, 2, 2, 4, ' ', '1901012', 'supriya.k@itscient.com', 'supriya@123', 'Supriya Kumari', 'Supriya Kumari', '67598428.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 01:07:25', '2019-09-24 01:07:25', '2019-09-24 01:07:25', 2),
(21, 2, 2, 4, ' ', '1901013', 'komal.k@itscient.com', 'komal@123', 'Komal Kumari', 'Komal Kumari', '344402883.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 01:10:56', '2019-09-24 01:10:56', '2019-09-24 01:10:56', 2),
(22, 2, 2, 4, ' ', '1901012', 'rani.m@itscient.com', 'rani@123', 'Rani Mardi', 'Rani Mardi', '1970053875.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 01:15:25', '2019-09-24 01:15:25', '2019-09-24 01:15:25', 2),
(23, 11, 2, 3, ' ', '18210035', 'sophiya.s@itscient.com', 'sophiya@123', 'Sophiya Sandhu', 'Sophiya Sandhu', '1166235468.png', 'yes', 'active', '2019-09-24', NULL, '5105167821', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 02:20:25', '2019-09-24 02:20:25', '2019-09-24 02:20:25', 11),
(24, 2, 2, 3, ' ', 'putul123', 'putul.s@itscient.com', 'putul123', 'Putul Singh', 'Putul Singh', '840602468.png', 'yes', 'active', '2019-09-24', NULL, '1236868255', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 02:32:20', '2019-09-24 02:32:20', '2019-09-24 02:32:20', 2),
(25, 11, 2, 3, ' ', '19910022', 'itsc.comm@gmail.com', 'sumitra123', 'Sumitra Dhal', 'Sumitra Dhal', '2083609614.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167821', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 02:40:03', '2019-09-24 02:40:03', '2019-09-24 02:40:03', 11),
(26, 11, 2, 4, ' ', '18210033', 'neha.s@itscient.com', 'neha123', 'Neha Singh', 'Neha Singh', '975798349.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167830', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 02:49:39', '2019-09-24 02:49:39', '2019-09-24 02:49:39', 11),
(28, 11, 2, 3, ' ', '19210203', 'punrgee.t@itscient.com', 'punrgee123', 'Punrgee Tudu', 'Punrgee Tudu', '800567682.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167830', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:01:13', '2019-09-24 03:01:13', '2019-09-24 03:01:13', 11),
(29, 11, 2, 4, ' ', '18210041', 'archana.k@itscient.com', 'archana123', 'Archana Kumari', 'Archana Kumari', '1604975560.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167812', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:04:56', '2019-09-24 03:04:56', '2019-09-24 03:04:56', 11),
(30, 15, 2, 5, ' ', '19210096', 'nilesh.c@itscient.com', 'nilesh123', 'Nilesh Chandra', 'Nilesh Chandra', '318245817.png', 'yes', 'active', '2019-09-24', NULL, '5105167826', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:05:34', '2019-09-24 03:05:34', '2019-09-24 03:05:34', 15),
(31, 2, 2, 4, ' ', '19210045', 'sumit.k@itscient.com', 'sumit@123', 'Sumit kumar', 'Sumit kumar', '874727800.png', 'yes', 'active', '2019-09-24', NULL, '5105167845', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:06:16', '2019-09-24 03:06:16', '2019-09-24 03:06:16', 2),
(32, 15, 2, 5, ' ', '19110052', 'ajay.d@itscient.com', 'ajay123', 'Ajay Dutta', 'Ajay Dutta', '843294392.png', 'yes', 'active', '2019-09-24', NULL, '5105167854', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:07:31', '2019-09-24 03:07:31', '2019-09-24 03:07:31', 15),
(33, 11, 2, 4, ' ', '19210102', 'supriya.k@itscient.com', 'supriya123', 'Supriya Kumari', 'Supriya Kumari', '904223102.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167801', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:08:57', '2019-09-24 03:08:57', '2019-09-24 03:08:57', 11),
(34, 15, 2, 5, ' ', '19210126', 'niladri.s@itscient.com', 'niladri123', 'Niladri Sarker', 'Niladri Sarker', '1563980842.png', 'yes', 'active', '2019-09-24', NULL, '5105167851', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:09:15', '2019-09-24 03:09:15', '2019-09-24 03:09:15', 15),
(35, 15, 2, 5, ' ', '19210159', 'rajesh.g@itscient.com', 'rajesh123', 'Rajesh Gorai', 'Rajesh Gorai', '759327692.png', 'yes', 'active', '2019-09-24', NULL, '5105167851', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:10:34', '2019-09-24 03:10:34', '2019-09-24 03:10:34', 15),
(36, 15, 2, 5, ' ', '19210123', 'jyotirmoy.b@itscient.com', 'jyotirmoy123', 'Jyotirmoy Bhakat', 'Jyotirmoy Bhakat', '1772057317.png', 'yes', 'active', '2019-09-24', NULL, '5105167861', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:11:59', '2019-09-24 03:11:59', '2019-09-24 03:11:59', 15),
(37, 25, 2, 6, ' ', '17210020', 'nayna.b@itscient.com', 'nayna@123', 'Nayna Biswas', 'Nayna Biswas', '347173758.png', 'yes', 'active', '2019-09-24', NULL, '5105167853', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:12:45', '2019-09-24 03:12:45', '2019-09-24 03:12:45', 25),
(38, 11, 2, 4, ' ', '19210199', 'manisha.p@itscient.com', 'manisha123', 'Manisha Podel', 'Manisha Podel', '532570456.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167812', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:12:51', '2019-09-24 03:12:51', '2019-09-24 03:12:51', 11),
(39, 15, 2, 5, ' ', '19210094', 'laxmikant.m@itscient.com', 'laxmikant123', 'Laxmikant Mahto', 'Laxmikant Mahto', '1646310141.png', 'yes', 'active', '2019-09-24', NULL, '5105167809', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:13:11', '2019-09-24 03:13:11', '2019-09-24 03:13:11', 15),
(40, 15, 2, 5, ' ', '19210120', 'nitesh.c@itscient.com', 'nitesh123', 'Nitesh Kumar Chanda', 'Nitesh Kumar Chanda', '120056247.png', 'yes', 'active', '2019-09-24', NULL, '5105167838', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:15:16', '2019-09-24 03:15:16', '2019-09-24 03:15:16', 15),
(41, 11, 2, 4, ' ', '19210202', 'komal.k@itscient.com', 'komal123', 'Komal Kumari', 'Komal Kumari', '188655346.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167866', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:17:17', '2019-09-24 03:17:17', '2019-09-24 03:17:17', 11),
(42, 11, 2, 3, ' ', '18210037', 'purnima.s@itscient.com', 'purnima123', 'Purnima Singh', 'Purnima Singh', '59471403.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167899', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:39:19', '2019-09-24 03:39:19', '2019-09-24 03:39:19', 11),
(43, 11, 2, 3, ' ', '19210196', 'mohini.k@itscient.com', 'mohini123', 'Mohini Kumari', 'Mohini Kumari', '426007681.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167833', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:41:45', '2019-09-24 03:41:45', '2019-09-24 03:41:45', 11),
(44, 11, 2, 3, ' ', '19210171', 'shivani.s@itscient.com', 'shivani123', 'Shivani Singh', 'Shivani Singh', '1251797800.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167833', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:44:22', '2019-09-24 03:44:22', '2019-09-24 03:44:22', 11),
(45, 11, 2, 3, ' ', '19110056', 'itsc.comm@gmail.com', 'munmun123', 'Munmun Das', 'Munmun Das', '416050325.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167839', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:47:31', '2019-09-24 03:47:31', '2019-09-24 03:47:31', 11),
(46, 11, 2, 3, ' ', '19210179', 'sonali.s@itscient.com', 'sonali123', 'Sonali Srivastava', 'Sonali Srivastava', '1747211215.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167879', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:51:10', '2019-09-24 03:51:10', '2019-09-24 03:51:10', 11),
(47, 11, 2, 3, ' ', '19210204', 'rakhi.s@itscient.com', 'rakhi123', 'Rakhi Shukla', 'Rakhi Shukla', '1080946426.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167859', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 03:55:05', '2019-09-24 03:55:05', '2019-09-24 03:55:05', 11),
(48, 11, 2, 3, ' ', '18210048', 'priya.s@itscient.com', 'parwati123', 'Parwati Sagar', 'Parwati Sagar', '1832100856.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167716', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:03:39', '2019-09-24 04:03:39', '2019-09-24 04:03:39', 11),
(49, 11, 2, 3, ' ', '19210073', 'lata.s@itscient.com', 'pushpalata123', 'Pushpalata Sinku', 'Pushpalata Sinku', '1462330061.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167733', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:06:30', '2019-09-24 04:06:30', '2019-09-24 04:06:30', 11),
(50, 11, 2, 3, ' ', '19210161', 'kajal.k@itscient.com', 'kajal123', 'Kajal Kumari', 'Kajal Kumari', '1104703996.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167816', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:09:24', '2019-09-24 04:09:24', '2019-09-24 04:09:24', 11),
(51, 11, 2, 3, ' ', '18210035', 'sophiya.s@itscient.com', 'sophiya123', 'Sophiya Sandhu', 'Sophiya Sandhu', '1524266702.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167816', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:14:03', '2019-09-24 04:14:03', '2019-09-24 04:14:03', 11),
(52, 11, 2, 3, ' ', '19210200', 'basanti.m@itscient.com', 'basanti123', 'Basanti Mukhi', 'Basanti Mukhi', '1287700358.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167837', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:16:40', '2019-09-24 04:16:40', '2019-09-24 04:16:40', 11),
(53, 11, 2, 3, ' ', '19210104', 'nisha.k@itscient.com', 'nisha123', 'Nisha Khalkho', 'Nisha Khalkho', '1235348395.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167847', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:19:15', '2019-09-24 04:19:15', '2019-09-24 04:19:15', 11),
(54, 11, 2, 3, ' ', '19210178', 'shobha.r@itscient.com', 'shobha123', 'Shobha R. Mahato', 'Shobha R. Mahato', '1060031392.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167837', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:22:08', '2019-09-24 04:22:08', '2019-09-24 04:22:08', 11),
(55, 11, 2, 3, ' ', '19910023', 'itsc.comm@gmail.com', 'shristy123', 'Shristy Jaiswal', 'Shristy Jaiswal', '190025910.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167821', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:24:34', '2019-09-24 04:24:34', '2019-09-24 04:24:34', 11),
(56, 11, 2, 3, ' ', '19210197', 'ankita.p@itscient.com', 'ankita123', 'Ankita Pathak', 'Ankita Pathak', '1288872149.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167837', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:27:51', '2019-09-24 04:27:51', '2019-09-24 04:27:51', 11),
(57, 11, 2, 3, ' ', '19210090', 'moumita.p@itscient.com', 'moumita123', 'Moumita Pramanik', 'Moumita Pramanik', '483845313.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167837', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:30:49', '2019-09-24 04:30:49', '2019-09-24 04:30:49', 11),
(58, 11, 2, 3, ' ', '19210166', 'sheetal.k@itscient.com', 'sheetal123', 'Sheetal Abhilasha Raven', 'Sheetal Abhilasha Raven', '1658691.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167716', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:34:01', '2019-09-24 04:34:01', '2019-09-24 04:34:01', 11),
(59, 11, 2, 3, ' ', '18210080', 'pinky.k@itscient.com', 'pinky123', 'Pinky Kumari', 'Pinky Kumari', '585488092.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167733', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:37:30', '2019-09-24 04:37:30', '2019-09-24 04:37:30', 11),
(60, 11, 2, 3, ' ', '18210045', 'babita.k@itscient.com', 'babita123', 'Babita Karua', 'Babita Karua', '107764722.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167847', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:40:05', '2019-09-24 04:40:05', '2019-09-24 04:40:05', 11),
(61, 38, 2, 6, ' ', '19210167', 'neha.ku@itscient.com', 'neha123', 'Neha Kumari', 'Neha Kumari', '1501594550.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167853', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:40:40', '2019-09-24 04:40:40', '2019-09-24 04:40:40', 38),
(62, 11, 2, 3, ' ', '19210174', 'pooja.sh@itscient.com', 'pooja123', 'Pooja Sharma', 'Pooja Sharma', '1109197517.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167733', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:42:38', '2019-09-24 04:42:38', '2019-09-24 04:42:38', 11),
(63, 38, 2, 6, ' ', '18210067', 'shweta.singh@itscient.com', 'sweta123', 'Sweta Kumari', 'Sweta Kumari', '1893258884.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167867', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:48:07', '2019-09-24 04:48:07', '2019-09-24 04:48:07', 38),
(64, 38, 2, 6, ' ', '19210103', 'soumya.si@itscient.com', 'soumya123', 'Soumya Singh', 'Soumya Singh', '1075139505.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167867', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:52:45', '2019-09-24 04:52:45', '2019-09-24 04:52:45', 38),
(66, 38, 2, 6, ' ', '19210090', 'madhuri.j@itscient.com', 'madhuri123', 'Madhuri Jaiswal', 'Madhuri Jaiswal', '803385608.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167868', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:54:58', '2019-09-24 04:54:58', '2019-09-24 04:54:58', 38),
(67, 11, 2, 7, ' ', '19210180', 'arpita.s@itscient.com', 'arpita123', 'Arpita Sanigrahi', 'Arpita Sanigrahi', '9455956.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167825', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:56:05', '2019-09-24 04:56:05', '2019-09-24 04:56:05', 11),
(68, 38, 2, 6, ' ', '19210078', 'manisha.s@itscient.com', 'manisha123', 'Manisha Soy', 'Manisha Soy', '2102667334.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167868', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 04:57:01', '2019-09-24 04:57:01', '2019-09-24 04:57:01', 38),
(69, 11, 2, 7, ' ', '19210135', 'sharmistha.d@itscient.com', 'sharmistha123', 'Sharmistha Dutta', 'Sharmistha Dutta', '1179266147.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167895', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:02:14', '2019-09-24 05:02:14', '2019-09-24 05:02:14', 11),
(71, 11, 2, 7, ' ', '19210164', 'dolly.k@itscient.com', 'dolly123', 'Dolly Kumari', 'Dolly Kumari', '758147670.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167896', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:07:26', '2019-09-24 05:07:26', '2019-09-24 05:07:26', 11),
(72, 11, 2, 7, ' ', '18210074', 'resu.r@itscient.com', 'resu123', 'Resu Raj', 'Resu Raj', '172836347.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167895', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:09:36', '2019-09-24 05:09:36', '2019-09-24 05:09:36', 11),
(73, 38, 2, 6, ' ', '12120212', 'aarti.k@itscient.com', 'aarti123', 'Aarti Kumari', 'Aarti Kumari', '800669623.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167799', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:14:23', '2019-09-24 05:14:23', '2019-09-24 05:14:23', 38),
(74, 38, 2, 6, ' ', '52523366', 'leela.m@itscient.com', 'leela123', 'M.Leela', 'M.Leela', '677077824.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167848', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:16:28', '2019-09-24 05:16:28', '2019-09-24 05:16:28', 38),
(75, 11, 2, 7, ' ', '19210165', 'shreya.b@itscient.com', 'shreya123', 'Shreya Bose', 'Shreya Bose', '734247075.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167825', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:19:08', '2019-09-24 05:19:08', '2019-09-24 05:19:08', 11),
(76, 11, 2, 7, ' ', '18210043', 'sunidhi.m@itscient.com', 'sunidhi123', 'Sunidhi Mishra', 'Sunidhi Mishra', '473005118.jpg', 'yes', 'active', '2019-09-24', NULL, '5105167896', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:21:22', '2019-09-24 05:21:22', '2019-09-24 05:21:22', 11),
(77, 15, 2, 8, ' ', '17210028', 'avinash.m@itscient.com', 'avinash123', 'Avinash Kumar', 'Avinash Kumar', '269393365.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:25:52', '2019-09-24 05:25:52', '2019-09-24 05:25:52', 15),
(79, 15, 2, 8, ' ', '18210051', 'pratik.k@itscient.com', 'pratik123', 'Pratik Kumar', 'Pratik Kumar', '1314541252.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:27:53', '2019-09-24 05:27:53', '2019-09-24 05:27:53', 15),
(80, 15, 2, 8, ' ', '19210194', 'vishal.s@itscient.com', 'vishal123', 'Vishal Kumar Singh', 'Vishal Kumar Singh', '1394765813.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:29:24', '2019-09-24 05:29:24', '2019-09-24 05:29:24', 15),
(81, 15, 2, 8, ' ', '19210106', 'akash.m@itscient.com', 'akash123', 'Akash Mondal', 'Akash Mondal', '715047862.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:30:47', '2019-09-24 05:30:47', '2019-09-24 05:30:47', 15),
(82, 15, 2, 8, ' ', '19210191', 'prashant.k@itscient.com', 'prashant123', 'Prashant Kumar Yadav', 'Prashant Kumar Yadav', '912209662.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:32:47', '2019-09-24 05:32:47', '2019-09-24 05:32:47', 15),
(83, 15, 2, 9, ' ', '18210054', 'ashish.v@itscient.com', 'ashish123', 'Ashish Verma', 'Ashish Verma', '373278492.png', 'yes', 'active', '2019-09-24', NULL, '5105167887', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:35:42', '2019-09-24 05:35:42', '2019-09-24 05:35:42', 15),
(84, 15, 2, 9, ' ', '19210140', 'lawrence.g@itscient.com', 'lawrence123', 'Lawrence Goswami', 'Lawrence Goswami', '2087983929.png', 'yes', 'active', '2019-09-24', NULL, '5105167822', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:37:11', '2019-09-24 05:37:11', '2019-09-24 05:37:11', 15),
(85, 15, 2, 1, ' ', '192101154', 'yaman.k@itscient.com', 'yaman123', 'Yaman Kumar Varma', 'Yaman Kumar Varma', '1406646821.png', 'yes', 'active', '2019-09-24', NULL, '5105167815', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:39:11', '2019-09-24 05:39:11', '2019-09-24 05:39:11', 15),
(88, 11, 2, 7, ' ', '19210169', 'samiksha.s@itscient.com', 'samiksha123', 'Samiksha Sinha', 'Samiksha Sinha', '2100216469.png', 'yes', 'active', '2019-09-24', NULL, '5105167753', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 05:47:42', '2019-09-24 05:47:42', '2019-09-24 05:47:42', 11),
(89, 15, 2, 3, ' ', '19210055', 'pradeep.k@itscient.com', 'pradeep123', 'Pradeep Kumar Thakur', 'Pradeep Kumar Thakur', '1000155847.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 06:23:44', '2019-09-24 06:23:44', '2019-09-24 06:23:44', 15),
(90, 15, 2, 3, ' ', '19210099', 'romit.h@itscient.com', 'romit123', 'Romit Handa', 'Romit Handa', '140675509.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 06:27:47', '2019-09-24 06:27:47', '2019-09-24 06:27:47', 15),
(91, 15, 2, 3, ' ', '19210170', 'ruby.h@itscient.com', 'ruby123', 'Ruby Hansdah', 'Ruby Hansdah', '408776371.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:04:01', '2019-09-24 07:04:01', '2019-09-24 07:04:01', 15),
(92, 15, 2, 3, ' ', '19210131', 'roshan.k@itscient.com', 'roshan123', 'Roshan Kumar Jha', 'Roshan Kumar Jha', '1286483096.png', 'yes', 'active', '2019-09-24', NULL, '5105167871', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:05:44', '2019-09-24 07:05:44', '2019-09-24 07:05:44', 15),
(93, 15, 2, 3, ' ', '19210092', 'sambhaw.k@itscient.com', 'sambhaw123', 'Sambhaw Kumar', 'Sambhaw Kumar', '867895330.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:07:32', '2019-09-24 07:07:32', '2019-09-24 07:07:32', 15),
(94, 15, 2, 1, ' ', '19210187', 'brij.m@itscient.com', 'braj123', 'Braj Mohan', 'Braj Mohan', '1765755334.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:08:47', '2019-09-24 07:08:47', '2019-09-24 07:08:47', 15),
(95, 15, 2, 1, ' ', '19210190', 'bikash.s@itscient.com', 'bikash123', 'Bikash Kumar Singh', 'Bikash Kumar Singh', '601727016.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:10:24', '2019-09-24 07:10:24', '2019-09-24 07:10:24', 15),
(96, 15, 2, 3, ' ', '19210141', 'ajay.k@itscient.com', 'ajay123', 'Ajay Kumar Mahato', 'Ajay Kumar Mahato', '842535985.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:11:35', '2019-09-24 07:11:35', '2019-09-24 07:11:35', 15),
(97, 15, 2, 3, ' ', '19210189', 'Vivek.k@itscient.com', 'vivek123', 'Vivek kumar Mukhi', 'Vivek kumar Mukhi', '1098563662.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:12:47', '2019-09-24 07:12:47', '2019-09-24 07:12:47', 15),
(98, 15, 2, 3, ' ', '19210188', 'Gautam.p@itscient.com', 'gautam123', 'Gautam kumar panday', 'Gautam kumar panday', '633515622.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:14:06', '2019-09-24 07:14:06', '2019-09-24 07:14:06', 15),
(99, 15, 2, 3, ' ', '19210184', 'Pankaj.g@itscient.com', 'pankaj123', 'Pankaj kumar Gour', 'Pankaj kumar Gour', '927079855.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:15:51', '2019-09-24 07:15:51', '2019-09-24 07:15:51', 15),
(100, 15, 2, 3, ' ', '19210193', 'kaushik.s@itscient.com', 'kaushik123', 'Kaushik saha', 'Kaushik saha', '591206950.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:17:07', '2019-09-24 07:17:07', '2019-09-24 07:17:07', 15),
(101, 15, 2, 3, ' ', '19210182', 'Divyansh@itscient.com', 'divyansh123', 'Divyansh', 'Divyansh', '855936533.png', 'yes', 'active', '2019-09-24', NULL, '5105167893', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:18:32', '2019-09-24 07:18:32', '2019-09-24 07:18:32', 15),
(102, 15, 2, 3, ' ', '19210146', 'Suraj.g@itscient.com', 'suraj123', 'Suraj Gupta', 'Suraj Gupta', '1406227457.png', 'yes', 'active', '2019-09-24', NULL, '5105167870', 'active', NULL, NULL, NULL, NULL, NULL, '2019-09-24 07:19:42', '2019-09-24 07:19:42', '2019-09-24 07:19:42', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member_permission`
--

CREATE TABLE `tbl_team_member_permission` (
  `ID` int(11) NOT NULL,
  `team_member_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `permission_value` varchar(255) NOT NULL,
  `is_add` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_edit` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_delete` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_read` enum('yes','no') NOT NULL DEFAULT 'no',
  `is_system_admin` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team_member_permission`
--

INSERT INTO `tbl_team_member_permission` (`ID`, `team_member_id`, `employer_id`, `company_id`, `permission_value`, `is_add`, `is_edit`, `is_delete`, `is_read`, `is_system_admin`) VALUES
(1, 6, 6, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(2, 6, 6, 2, '2', 'no', 'no', 'no', 'yes', 'no'),
(3, 6, 6, 2, '3', 'no', 'no', 'no', 'yes', 'no'),
(4, 6, 6, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(5, 6, 6, 2, '5', 'no', 'no', 'no', 'yes', 'no'),
(6, 6, 6, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(7, 6, 6, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(8, 6, 6, 2, '8', 'no', 'no', 'no', 'yes', 'no'),
(9, 6, 6, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(10, 6, 6, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(11, 6, 6, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(12, 6, 6, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(13, 6, 6, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(14, 7, 2, 1, '1', 'yes', 'no', 'no', 'yes', 'no'),
(15, 7, 2, 1, '2', 'yes', 'no', 'no', 'yes', 'no'),
(16, 7, 2, 1, '3', 'yes', 'no', 'no', 'yes', 'no'),
(17, 7, 2, 1, '4', 'yes', 'no', 'no', 'yes', 'no'),
(18, 7, 2, 1, '5', 'yes', 'no', 'no', 'yes', 'no'),
(19, 7, 2, 1, '6', 'yes', 'no', 'no', 'yes', 'no'),
(20, 7, 2, 1, '7', 'yes', 'no', 'no', 'yes', 'no'),
(21, 7, 2, 1, '8', 'yes', 'no', 'no', 'yes', 'no'),
(22, 7, 2, 1, '9', 'yes', 'no', 'no', 'yes', 'no'),
(23, 7, 2, 1, '10', 'yes', 'no', 'no', 'yes', 'no'),
(24, 7, 2, 1, '11', 'yes', 'no', 'no', 'yes', 'no'),
(25, 7, 2, 1, '12', 'yes', 'no', 'no', 'yes', 'no'),
(26, 7, 2, 1, '13', 'no', 'no', 'no', 'yes', 'no'),
(429, 24, 2, 2, '13', 'yes', 'yes', 'yes', 'yes', 'no'),
(428, 24, 2, 2, '12', 'yes', 'yes', 'yes', 'yes', 'no'),
(427, 24, 2, 2, '11', 'yes', 'yes', 'yes', 'yes', 'no'),
(426, 24, 2, 2, '10', 'yes', 'yes', 'yes', 'yes', 'no'),
(425, 24, 2, 2, '9', 'yes', 'yes', 'yes', 'yes', 'no'),
(424, 24, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(423, 24, 2, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(422, 24, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(421, 24, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(420, 24, 2, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(419, 24, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(418, 24, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(417, 24, 2, 2, '1', 'yes', 'yes', 'yes', 'yes', 'no'),
(40, 2, 2, 1, '1', 'yes', 'no', 'no', 'yes', 'no'),
(41, 2, 2, 1, '2', 'yes', 'no', 'no', 'yes', 'no'),
(42, 2, 2, 1, '3', 'yes', 'no', 'no', 'yes', 'no'),
(43, 2, 2, 1, '4', 'yes', 'no', 'no', 'yes', 'no'),
(44, 2, 2, 1, '5', 'yes', 'no', 'no', 'yes', 'no'),
(45, 2, 2, 1, '6', 'yes', 'no', 'no', 'yes', 'no'),
(46, 2, 2, 1, '7', 'yes', 'no', 'no', 'yes', 'no'),
(47, 2, 2, 1, '8', 'yes', 'no', 'no', 'yes', 'no'),
(48, 2, 2, 1, '9', 'yes', 'no', 'no', 'yes', 'no'),
(49, 2, 2, 1, '10', 'yes', 'no', 'no', 'yes', 'no'),
(50, 2, 2, 1, '11', 'yes', 'no', 'no', 'yes', 'no'),
(51, 2, 2, 1, '12', 'yes', 'no', 'no', 'yes', 'no'),
(52, 2, 2, 1, '13', 'yes', 'no', 'no', 'yes', 'no'),
(53, 3, 2, 1, '1', 'yes', 'no', 'no', 'yes', 'no'),
(54, 3, 2, 1, '2', 'yes', 'no', 'no', 'yes', 'no'),
(55, 3, 2, 1, '3', 'yes', 'no', 'no', 'yes', 'no'),
(56, 3, 2, 1, '4', 'yes', 'no', 'no', 'yes', 'no'),
(57, 3, 2, 1, '5', 'yes', 'no', 'no', 'yes', 'no'),
(58, 3, 2, 1, '6', 'yes', 'no', 'no', 'yes', 'no'),
(59, 3, 2, 1, '7', 'yes', 'no', 'no', 'yes', 'no'),
(60, 3, 2, 1, '8', 'yes', 'no', 'no', 'yes', 'no'),
(61, 3, 2, 1, '9', 'yes', 'no', 'no', 'yes', 'no'),
(62, 3, 2, 1, '10', 'yes', 'no', 'no', 'yes', 'no'),
(63, 3, 2, 1, '11', 'yes', 'no', 'no', 'yes', 'no'),
(64, 3, 2, 1, '12', 'yes', 'no', 'no', 'yes', 'no'),
(65, 3, 2, 1, '13', 'yes', 'no', 'no', 'yes', 'no'),
(416, 23, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(415, 23, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(414, 23, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(413, 23, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(412, 23, 11, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(411, 23, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(410, 23, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(409, 23, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(408, 23, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(407, 23, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(406, 23, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(405, 23, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(404, 23, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(79, 2, 1, 5, '1', 'yes', 'no', 'no', 'yes', 'no'),
(80, 2, 1, 5, '2', 'yes', 'no', 'no', 'yes', 'no'),
(81, 2, 1, 5, '3', 'yes', 'no', 'no', 'yes', 'no'),
(82, 2, 1, 5, '4', 'yes', 'no', 'no', 'yes', 'no'),
(83, 2, 1, 5, '5', 'yes', 'no', 'no', 'yes', 'no'),
(84, 2, 1, 5, '6', 'yes', 'no', 'no', 'yes', 'no'),
(85, 2, 1, 5, '7', 'yes', 'no', 'no', 'yes', 'no'),
(86, 2, 1, 5, '8', 'yes', 'no', 'no', 'yes', 'no'),
(87, 2, 1, 5, '9', 'yes', 'no', 'no', 'yes', 'no'),
(88, 2, 1, 5, '10', 'yes', 'no', 'no', 'yes', 'no'),
(89, 2, 1, 5, '11', 'yes', 'no', 'no', 'yes', 'no'),
(90, 2, 1, 5, '12', 'yes', 'no', 'no', 'yes', 'no'),
(91, 2, 1, 5, '13', 'yes', 'no', 'no', 'yes', 'no'),
(92, 3, 1, 5, '1', 'no', 'yes', 'no', 'yes', 'no'),
(93, 3, 1, 5, '2', 'no', 'yes', 'no', 'yes', 'no'),
(94, 3, 1, 5, '3', 'no', 'yes', 'no', 'yes', 'no'),
(95, 3, 1, 5, '4', 'no', 'yes', 'no', 'yes', 'no'),
(96, 3, 1, 5, '5', 'no', 'yes', 'no', 'yes', 'no'),
(97, 3, 1, 5, '6', 'no', 'yes', 'no', 'yes', 'no'),
(98, 3, 1, 5, '7', 'no', 'yes', 'no', 'yes', 'no'),
(99, 3, 1, 5, '8', 'no', 'yes', 'no', 'yes', 'no'),
(100, 3, 1, 5, '9', 'no', 'yes', 'no', 'yes', 'no'),
(101, 3, 1, 5, '10', 'no', 'yes', 'no', 'yes', 'no'),
(102, 3, 1, 5, '11', 'no', 'yes', 'no', 'yes', 'no'),
(103, 3, 1, 5, '12', 'no', 'yes', 'no', 'yes', 'no'),
(104, 3, 1, 5, '13', 'no', 'yes', 'no', 'yes', 'no'),
(105, 4, 5, 1, '1', 'no', 'no', 'yes', 'yes', 'no'),
(106, 4, 5, 1, '2', 'no', 'no', 'yes', 'yes', 'no'),
(107, 4, 5, 1, '3', 'no', 'no', 'yes', 'yes', 'no'),
(108, 4, 5, 1, '4', 'no', 'no', 'yes', 'yes', 'no'),
(109, 4, 5, 1, '5', 'no', 'no', 'yes', 'yes', 'no'),
(110, 4, 5, 1, '6', 'no', 'no', 'yes', 'yes', 'no'),
(111, 4, 5, 1, '7', 'no', 'no', 'yes', 'yes', 'no'),
(112, 4, 5, 1, '8', 'no', 'no', 'yes', 'yes', 'no'),
(113, 4, 5, 1, '9', 'no', 'no', 'yes', 'yes', 'no'),
(114, 4, 5, 1, '10', 'no', 'no', 'yes', 'yes', 'no'),
(115, 4, 5, 1, '11', 'no', 'no', 'yes', 'yes', 'no'),
(116, 4, 5, 1, '12', 'no', 'no', 'yes', 'yes', 'no'),
(117, 4, 5, 1, '13', 'no', 'no', 'no', 'yes', 'no'),
(118, 1, 1, 2, '1', 'yes', 'yes', 'yes', 'yes', 'no'),
(119, 1, 1, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(120, 1, 1, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(121, 1, 1, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(122, 1, 1, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(123, 1, 1, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(124, 1, 1, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(125, 1, 1, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(126, 1, 1, 2, '9', 'yes', 'yes', 'yes', 'yes', 'no'),
(127, 1, 1, 2, '10', 'yes', 'yes', 'yes', 'yes', 'no'),
(128, 1, 1, 2, '11', 'yes', 'yes', 'yes', 'yes', 'no'),
(129, 1, 1, 2, '12', 'yes', 'yes', 'yes', 'yes', 'no'),
(130, 1, 1, 2, '13', 'yes', 'yes', 'yes', 'yes', 'no'),
(131, 2, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(132, 2, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(133, 2, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(134, 2, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(135, 2, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(136, 2, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(137, 2, 2, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(138, 2, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(139, 2, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(140, 2, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(141, 2, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(142, 2, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(143, 2, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(144, 3, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(145, 3, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(146, 3, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(147, 3, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(148, 3, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(149, 3, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(150, 3, 2, 2, '7', 'yes', 'no', 'no', 'yes', 'no'),
(151, 3, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(152, 3, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(153, 3, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(154, 3, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(155, 3, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(156, 3, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(157, 4, 2, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(158, 4, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(159, 4, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(160, 4, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(161, 4, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(162, 4, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(163, 4, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(164, 4, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(165, 4, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(166, 4, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(167, 4, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(168, 4, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(169, 4, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(170, 5, 2, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(171, 5, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(172, 5, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(173, 5, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(174, 5, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(175, 5, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(176, 5, 2, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(177, 5, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(178, 5, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(179, 5, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(180, 5, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(181, 5, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(182, 5, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(183, 6, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(184, 6, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(185, 6, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(186, 6, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(187, 6, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(188, 6, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(189, 6, 2, 2, '7', 'yes', 'no', 'no', 'yes', 'no'),
(190, 6, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(191, 6, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(192, 6, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(193, 6, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(194, 6, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(195, 6, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(196, 7, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(197, 7, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(198, 7, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(199, 7, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(200, 7, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(201, 7, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(202, 7, 2, 2, '7', 'yes', 'no', 'no', 'yes', 'no'),
(203, 7, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(204, 7, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(205, 7, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(206, 7, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(207, 7, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(208, 7, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(209, 8, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(210, 8, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(211, 8, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(212, 8, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(213, 8, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(214, 8, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(215, 8, 2, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(216, 8, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(217, 8, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(218, 8, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(219, 8, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(220, 8, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(221, 8, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(222, 9, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(223, 9, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(224, 9, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(225, 9, 2, 2, '4', 'yes', 'no', 'no', 'yes', 'no'),
(226, 9, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(227, 9, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(228, 9, 2, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(229, 9, 2, 2, '8', 'yes', 'no', 'no', 'yes', 'no'),
(230, 9, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(231, 9, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(232, 9, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(233, 9, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(234, 9, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(235, 10, 1, 2, '1', 'yes', 'yes', 'yes', 'yes', 'no'),
(236, 10, 1, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(237, 10, 1, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(238, 10, 1, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(239, 10, 1, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(240, 10, 1, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(241, 10, 1, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(242, 10, 1, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(243, 10, 1, 2, '9', 'yes', 'yes', 'yes', 'yes', 'no'),
(244, 10, 1, 2, '10', 'yes', 'yes', 'yes', 'yes', 'no'),
(245, 10, 1, 2, '11', 'yes', 'yes', 'yes', 'yes', 'no'),
(246, 10, 1, 2, '12', 'yes', 'yes', 'yes', 'yes', 'no'),
(247, 10, 1, 2, '13', 'yes', 'yes', 'yes', 'yes', 'no'),
(248, 11, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(249, 11, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(250, 11, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(251, 11, 2, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(252, 11, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(253, 11, 2, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(254, 11, 2, 2, '7', 'yes', 'no', 'no', 'yes', 'no'),
(255, 11, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(256, 11, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(257, 11, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(258, 11, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(259, 11, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(260, 11, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(261, 12, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(262, 12, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(263, 12, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(264, 12, 2, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(265, 12, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(266, 12, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(267, 12, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(268, 12, 2, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(269, 12, 2, 2, '9', 'yes', 'no', 'no', 'yes', 'no'),
(270, 12, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(271, 12, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(272, 12, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(273, 12, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(274, 13, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(275, 13, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(276, 13, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(277, 13, 2, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(278, 13, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(279, 13, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(280, 13, 2, 2, '7', 'yes', 'no', 'no', 'yes', 'no'),
(281, 13, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(282, 13, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(283, 13, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(284, 13, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(285, 13, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(286, 13, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(287, 14, 1, 2, '1', 'yes', 'yes', 'yes', 'yes', 'no'),
(288, 14, 1, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(289, 14, 1, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(290, 14, 1, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(291, 14, 1, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(292, 14, 1, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(293, 14, 1, 2, '7', 'yes', 'yes', 'yes', 'yes', 'no'),
(294, 14, 1, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(295, 14, 1, 2, '9', 'yes', 'yes', 'yes', 'yes', 'no'),
(296, 14, 1, 2, '10', 'yes', 'yes', 'yes', 'yes', 'no'),
(297, 14, 1, 2, '11', 'yes', 'yes', 'yes', 'yes', 'no'),
(298, 14, 1, 2, '12', 'yes', 'yes', 'yes', 'yes', 'no'),
(299, 14, 1, 2, '13', 'yes', 'yes', 'yes', 'yes', 'no'),
(300, 15, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(301, 15, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(302, 15, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(303, 15, 2, 2, '4', 'yes', 'yes', 'yes', 'yes', 'no'),
(304, 15, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(305, 15, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(306, 15, 2, 2, '7', 'yes', 'no', 'no', 'yes', 'no'),
(307, 15, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(308, 15, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(309, 15, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(310, 15, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(311, 15, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(312, 15, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(313, 16, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(314, 16, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(315, 16, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(316, 16, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(317, 16, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(318, 16, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(319, 16, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(320, 16, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(321, 16, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(322, 16, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(323, 16, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(324, 16, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(325, 16, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(326, 17, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(327, 17, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(328, 17, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(329, 17, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(330, 17, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(331, 17, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(332, 17, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(333, 17, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(334, 17, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(335, 17, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(336, 17, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(337, 17, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(338, 17, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(339, 18, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(340, 18, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(341, 18, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(342, 18, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(343, 18, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(344, 18, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(345, 18, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(346, 18, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(347, 18, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(348, 18, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(349, 18, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(350, 18, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(351, 18, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(352, 19, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(353, 19, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(354, 19, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(355, 19, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(356, 19, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(357, 19, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(358, 19, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(359, 19, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(360, 19, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(361, 19, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(362, 19, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(363, 19, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(364, 19, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(365, 20, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(366, 20, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(367, 20, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(368, 20, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(369, 20, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(370, 20, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(371, 20, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(372, 20, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(373, 20, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(374, 20, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(375, 20, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(376, 20, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(377, 20, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(378, 21, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(379, 21, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(380, 21, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(381, 21, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(382, 21, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(383, 21, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(384, 21, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(385, 21, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(386, 21, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(387, 21, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(388, 21, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(389, 21, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(390, 21, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(391, 22, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(392, 22, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(393, 22, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(394, 22, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(395, 22, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(396, 22, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(397, 22, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(398, 22, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(399, 22, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(400, 22, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(401, 22, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(402, 22, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(403, 22, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(430, 25, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(431, 25, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(432, 25, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(433, 25, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(434, 25, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(435, 25, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(436, 25, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(437, 25, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(438, 25, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(439, 25, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(440, 25, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(441, 25, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(442, 25, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(443, 26, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(444, 26, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(445, 26, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(446, 26, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(447, 26, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(448, 26, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(449, 26, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(450, 26, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(451, 26, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(452, 26, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(453, 26, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(454, 26, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(455, 26, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(456, 27, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(457, 27, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(458, 27, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(459, 27, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(460, 27, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(461, 27, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(462, 27, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(463, 27, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(464, 27, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(465, 27, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(466, 27, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(467, 27, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(468, 27, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(469, 28, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(470, 28, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(471, 28, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(472, 28, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(473, 28, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(474, 28, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(475, 28, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(476, 28, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(477, 28, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(478, 28, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(479, 28, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(480, 28, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(481, 28, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(482, 29, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(483, 29, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(484, 29, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(485, 29, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(486, 29, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(487, 29, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(488, 29, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(489, 29, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(490, 29, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(491, 29, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(492, 29, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(493, 29, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(494, 29, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(495, 30, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(496, 30, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(497, 30, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(498, 30, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(499, 30, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(500, 30, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(501, 30, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(502, 30, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(503, 30, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(504, 30, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(505, 30, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(506, 30, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(507, 30, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(508, 31, 2, 2, '1', 'yes', 'no', 'no', 'yes', 'no'),
(509, 31, 2, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(510, 31, 2, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(511, 31, 2, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(512, 31, 2, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(513, 31, 2, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(514, 31, 2, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(515, 31, 2, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(516, 31, 2, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(517, 31, 2, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(518, 31, 2, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(519, 31, 2, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(520, 31, 2, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(521, 32, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(522, 32, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(523, 32, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(524, 32, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(525, 32, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(526, 32, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(527, 32, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(528, 32, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(529, 32, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(530, 32, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(531, 32, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(532, 32, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(533, 32, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(534, 33, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(535, 33, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(536, 33, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(537, 33, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(538, 33, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(539, 33, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(540, 33, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(541, 33, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(542, 33, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(543, 33, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(544, 33, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(545, 33, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(546, 33, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(547, 34, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(548, 34, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(549, 34, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(550, 34, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(551, 34, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(552, 34, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(553, 34, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(554, 34, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(555, 34, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(556, 34, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(557, 34, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(558, 34, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(559, 34, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(560, 35, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(561, 35, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(562, 35, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(563, 35, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(564, 35, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(565, 35, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(566, 35, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(567, 35, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(568, 35, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(569, 35, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(570, 35, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(571, 35, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(572, 35, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(573, 36, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(574, 36, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(575, 36, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(576, 36, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(577, 36, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(578, 36, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(579, 36, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(580, 36, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(581, 36, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(582, 36, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(583, 36, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(584, 36, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(585, 36, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(586, 37, 25, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(587, 37, 25, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(588, 37, 25, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(589, 37, 25, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(590, 37, 25, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(591, 37, 25, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(592, 37, 25, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(593, 37, 25, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(594, 37, 25, 2, '9', 'yes', 'no', 'no', 'yes', 'no'),
(595, 37, 25, 2, '10', 'yes', 'no', 'no', 'yes', 'no'),
(596, 37, 25, 2, '11', 'yes', 'no', 'no', 'yes', 'no'),
(597, 37, 25, 2, '12', 'yes', 'no', 'no', 'yes', 'no'),
(598, 37, 25, 2, '13', 'yes', 'no', 'no', 'yes', 'no'),
(599, 38, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(600, 38, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(601, 38, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(602, 38, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(603, 38, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(604, 38, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(605, 38, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(606, 38, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(607, 38, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(608, 38, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(609, 38, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(610, 38, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(611, 38, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(612, 39, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(613, 39, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(614, 39, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(615, 39, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(616, 39, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(617, 39, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(618, 39, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(619, 39, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(620, 39, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(621, 39, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(622, 39, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(623, 39, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(624, 39, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(625, 40, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(626, 40, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(627, 40, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(628, 40, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(629, 40, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(630, 40, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(631, 40, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(632, 40, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(633, 40, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(634, 40, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(635, 40, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(636, 40, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(637, 40, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(638, 41, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(639, 41, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(640, 41, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(641, 41, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(642, 41, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(643, 41, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(644, 41, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(645, 41, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(646, 41, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(647, 41, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(648, 41, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(649, 41, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(650, 41, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(651, 42, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(652, 42, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(653, 42, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(654, 42, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(655, 42, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(656, 42, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(657, 42, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(658, 42, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(659, 42, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(660, 42, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(661, 42, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(662, 42, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(663, 42, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(664, 43, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(665, 43, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(666, 43, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(667, 43, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(668, 43, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(669, 43, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(670, 43, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(671, 43, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(672, 43, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(673, 43, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(674, 43, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(675, 43, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(676, 43, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(677, 44, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(678, 44, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(679, 44, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(680, 44, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(681, 44, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(682, 44, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(683, 44, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(684, 44, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(685, 44, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(686, 44, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(687, 44, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(688, 44, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(689, 44, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(690, 45, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(691, 45, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(692, 45, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(693, 45, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(694, 45, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(695, 45, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(696, 45, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(697, 45, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(698, 45, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(699, 45, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(700, 45, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(701, 45, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(702, 45, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(703, 46, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(704, 46, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(705, 46, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(706, 46, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(707, 46, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(708, 46, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(709, 46, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(710, 46, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(711, 46, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(712, 46, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(713, 46, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(714, 46, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(715, 46, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(716, 47, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(717, 47, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(718, 47, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(719, 47, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(720, 47, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(721, 47, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(722, 47, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(723, 47, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(724, 47, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(725, 47, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(726, 47, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(727, 47, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(728, 47, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(729, 48, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(730, 48, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(731, 48, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(732, 48, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(733, 48, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(734, 48, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(735, 48, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(736, 48, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(737, 48, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(738, 48, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(739, 48, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(740, 48, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(741, 48, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(742, 49, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(743, 49, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(744, 49, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(745, 49, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(746, 49, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(747, 49, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(748, 49, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(749, 49, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(750, 49, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(751, 49, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(752, 49, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(753, 49, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(754, 49, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(755, 50, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(756, 50, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(757, 50, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(758, 50, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(759, 50, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(760, 50, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(761, 50, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(762, 50, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(763, 50, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(764, 50, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(765, 50, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(766, 50, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(767, 50, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(768, 51, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(769, 51, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(770, 51, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(771, 51, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(772, 51, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(773, 51, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(774, 51, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(775, 51, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(776, 51, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(777, 51, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(778, 51, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(779, 51, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(780, 51, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(781, 52, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(782, 52, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(783, 52, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(784, 52, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(785, 52, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(786, 52, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(787, 52, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(788, 52, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(789, 52, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(790, 52, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(791, 52, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(792, 52, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(793, 52, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(794, 53, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(795, 53, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(796, 53, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(797, 53, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(798, 53, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(799, 53, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(800, 53, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(801, 53, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(802, 53, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(803, 53, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(804, 53, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(805, 53, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(806, 53, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(807, 54, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(808, 54, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(809, 54, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(810, 54, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(811, 54, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(812, 54, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(813, 54, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(814, 54, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(815, 54, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(816, 54, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(817, 54, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(818, 54, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(819, 54, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(820, 55, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(821, 55, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(822, 55, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(823, 55, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(824, 55, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(825, 55, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(826, 55, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(827, 55, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(828, 55, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(829, 55, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(830, 55, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(831, 55, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(832, 55, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(833, 56, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(834, 56, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(835, 56, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(836, 56, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(837, 56, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(838, 56, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(839, 56, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(840, 56, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(841, 56, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(842, 56, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(843, 56, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(844, 56, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(845, 56, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(846, 57, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(847, 57, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(848, 57, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(849, 57, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(850, 57, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(851, 57, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(852, 57, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(853, 57, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(854, 57, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(855, 57, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(856, 57, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(857, 57, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(858, 57, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(859, 58, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(860, 58, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(861, 58, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(862, 58, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(863, 58, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(864, 58, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(865, 58, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(866, 58, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(867, 58, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(868, 58, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(869, 58, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(870, 58, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(871, 58, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(872, 59, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(873, 59, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(874, 59, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(875, 59, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(876, 59, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(877, 59, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(878, 59, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(879, 59, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(880, 59, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(881, 59, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(882, 59, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(883, 59, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(884, 59, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(885, 60, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(886, 60, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(887, 60, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(888, 60, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(889, 60, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(890, 60, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(891, 60, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(892, 60, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(893, 60, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(894, 60, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(895, 60, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(896, 60, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(897, 60, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(898, 61, 38, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(899, 61, 38, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(900, 61, 38, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(901, 61, 38, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(902, 61, 38, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(903, 61, 38, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(904, 61, 38, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(905, 61, 38, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(906, 61, 38, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(907, 61, 38, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(908, 61, 38, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(909, 61, 38, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(910, 61, 38, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(911, 62, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(912, 62, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(913, 62, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(914, 62, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(915, 62, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(916, 62, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(917, 62, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(918, 62, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(919, 62, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(920, 62, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(921, 62, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(922, 62, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(923, 62, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(924, 63, 38, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(925, 63, 38, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(926, 63, 38, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(927, 63, 38, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(928, 63, 38, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(929, 63, 38, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(930, 63, 38, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(931, 63, 38, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(932, 63, 38, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(933, 63, 38, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(934, 63, 38, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(935, 63, 38, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(936, 63, 38, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(937, 64, 38, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(938, 64, 38, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(939, 64, 38, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(940, 64, 38, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(941, 64, 38, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(942, 64, 38, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(943, 64, 38, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(944, 64, 38, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(945, 64, 38, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(946, 64, 38, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(947, 64, 38, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(948, 64, 38, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(949, 64, 38, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(950, 65, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(951, 65, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(952, 65, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(953, 65, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(954, 65, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(955, 65, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(956, 65, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(957, 65, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(958, 65, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(959, 65, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(960, 65, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(961, 65, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(962, 65, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(963, 66, 38, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(964, 66, 38, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(965, 66, 38, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no');
INSERT INTO `tbl_team_member_permission` (`ID`, `team_member_id`, `employer_id`, `company_id`, `permission_value`, `is_add`, `is_edit`, `is_delete`, `is_read`, `is_system_admin`) VALUES
(966, 66, 38, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(967, 66, 38, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(968, 66, 38, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(969, 66, 38, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(970, 66, 38, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(971, 66, 38, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(972, 66, 38, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(973, 66, 38, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(974, 66, 38, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(975, 66, 38, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(976, 67, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(977, 67, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(978, 67, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(979, 67, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(980, 67, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(981, 67, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(982, 67, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(983, 67, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(984, 67, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(985, 67, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(986, 67, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(987, 67, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(988, 67, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(989, 68, 38, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(990, 68, 38, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(991, 68, 38, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(992, 68, 38, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(993, 68, 38, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(994, 68, 38, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(995, 68, 38, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(996, 68, 38, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(997, 68, 38, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(998, 68, 38, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(999, 68, 38, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1000, 68, 38, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1001, 68, 38, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1002, 69, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1003, 69, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1004, 69, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1005, 69, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1006, 69, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1007, 69, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1008, 69, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1009, 69, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1010, 69, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1011, 69, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1012, 69, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1013, 69, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1014, 69, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1015, 70, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1016, 70, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1017, 70, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1018, 70, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1019, 70, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1020, 70, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1021, 70, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1022, 70, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1023, 70, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1024, 70, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1025, 70, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1026, 70, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1027, 70, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1028, 71, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1029, 71, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1030, 71, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1031, 71, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1032, 71, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1033, 71, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1034, 71, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1035, 71, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1036, 71, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1037, 71, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1038, 71, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1039, 71, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1040, 71, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1041, 72, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1042, 72, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1043, 72, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1044, 72, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1045, 72, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1046, 72, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1047, 72, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1048, 72, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1049, 72, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1050, 72, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1051, 72, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1052, 72, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1053, 72, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1054, 73, 38, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1055, 73, 38, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1056, 73, 38, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1057, 73, 38, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1058, 73, 38, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1059, 73, 38, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1060, 73, 38, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1061, 73, 38, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1062, 73, 38, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1063, 73, 38, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1064, 73, 38, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1065, 73, 38, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1066, 73, 38, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1067, 74, 38, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1068, 74, 38, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1069, 74, 38, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1070, 74, 38, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1071, 74, 38, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1072, 74, 38, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1073, 74, 38, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1074, 74, 38, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1075, 74, 38, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1076, 74, 38, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1077, 74, 38, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1078, 74, 38, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1079, 74, 38, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1080, 75, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1081, 75, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1082, 75, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1083, 75, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1084, 75, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1085, 75, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1086, 75, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1087, 75, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1088, 75, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1089, 75, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1090, 75, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1091, 75, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1092, 75, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1093, 76, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1094, 76, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1095, 76, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1096, 76, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1097, 76, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1098, 76, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1099, 76, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1100, 76, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1101, 76, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1102, 76, 11, 2, '10', 'yes', 'yes', 'no', 'yes', 'no'),
(1103, 76, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1104, 76, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1105, 76, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1106, 77, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1107, 77, 15, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1108, 77, 15, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1109, 77, 15, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1110, 77, 15, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1111, 77, 15, 2, '6', 'yes', 'yes', 'yes', 'yes', 'no'),
(1112, 77, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1113, 77, 15, 2, '8', 'yes', 'yes', 'yes', 'yes', 'no'),
(1114, 77, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1115, 77, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1116, 77, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1117, 77, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1118, 77, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1119, 78, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1120, 78, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1121, 78, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1122, 78, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1123, 78, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1124, 78, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1125, 78, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1126, 78, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1127, 78, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1128, 78, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1129, 78, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1130, 78, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1131, 78, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1132, 79, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1133, 79, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1134, 79, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1135, 79, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1136, 79, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1137, 79, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1138, 79, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1139, 79, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1140, 79, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1141, 79, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1142, 79, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1143, 79, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1144, 79, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1145, 80, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1146, 80, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1147, 80, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1148, 80, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1149, 80, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1150, 80, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1151, 80, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1152, 80, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1153, 80, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1154, 80, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1155, 80, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1156, 80, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1157, 80, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1158, 81, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1159, 81, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1160, 81, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1161, 81, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1162, 81, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1163, 81, 15, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1164, 81, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1165, 81, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1166, 81, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1167, 81, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1168, 81, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1169, 81, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1170, 81, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1171, 82, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1172, 82, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1173, 82, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1174, 82, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1175, 82, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1176, 82, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1177, 82, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1178, 82, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1179, 82, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1180, 82, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1181, 82, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1182, 82, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1183, 82, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1184, 83, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1185, 83, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1186, 83, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1187, 83, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1188, 83, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1189, 83, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1190, 83, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1191, 83, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1192, 83, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1193, 83, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1194, 83, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1195, 83, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1196, 83, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1197, 84, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1198, 84, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1199, 84, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1200, 84, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1201, 84, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1202, 84, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1203, 84, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1204, 84, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1205, 84, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1206, 84, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1207, 84, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1208, 84, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1209, 84, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1210, 85, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1211, 85, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1212, 85, 15, 2, '3', 'yes', 'no', 'no', 'yes', 'no'),
(1213, 85, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1214, 85, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1215, 85, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1216, 85, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1217, 85, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1218, 85, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1219, 85, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1220, 85, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1221, 85, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1222, 85, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1223, 86, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1224, 86, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1225, 86, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1226, 86, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1227, 86, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1228, 86, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1229, 86, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1230, 86, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1231, 86, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1232, 86, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1233, 86, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1234, 86, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1235, 86, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1236, 87, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1237, 87, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1238, 87, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1239, 87, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1240, 87, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1241, 87, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1242, 87, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1243, 87, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1244, 87, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1245, 87, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1246, 87, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1247, 87, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1248, 87, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1249, 88, 11, 2, '1', 'yes', 'yes', 'no', 'yes', 'no'),
(1250, 88, 11, 2, '2', 'yes', 'yes', 'yes', 'yes', 'no'),
(1251, 88, 11, 2, '3', 'yes', 'yes', 'yes', 'yes', 'no'),
(1252, 88, 11, 2, '4', 'yes', 'yes', 'no', 'yes', 'no'),
(1253, 88, 11, 2, '5', 'yes', 'yes', 'yes', 'yes', 'no'),
(1254, 88, 11, 2, '6', 'yes', 'yes', 'no', 'yes', 'no'),
(1255, 88, 11, 2, '7', 'yes', 'yes', 'no', 'yes', 'no'),
(1256, 88, 11, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1257, 88, 11, 2, '9', 'yes', 'yes', 'no', 'yes', 'no'),
(1258, 88, 11, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1259, 88, 11, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1260, 88, 11, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1261, 88, 11, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1262, 89, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1263, 89, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1264, 89, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1265, 89, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1266, 89, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1267, 89, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1268, 89, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1269, 89, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1270, 89, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1271, 89, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1272, 89, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1273, 89, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1274, 89, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1275, 90, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1276, 90, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1277, 90, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1278, 90, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1279, 90, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1280, 90, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1281, 90, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1282, 90, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1283, 90, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1284, 90, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1285, 90, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1286, 90, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1287, 90, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1288, 91, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1289, 91, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1290, 91, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1291, 91, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1292, 91, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1293, 91, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1294, 91, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1295, 91, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1296, 91, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1297, 91, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1298, 91, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1299, 91, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1300, 91, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1301, 92, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1302, 92, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1303, 92, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1304, 92, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1305, 92, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1306, 92, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1307, 92, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1308, 92, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1309, 92, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1310, 92, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1311, 92, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1312, 92, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1313, 92, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1314, 93, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1315, 93, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1316, 93, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1317, 93, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1318, 93, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1319, 93, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1320, 93, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1321, 93, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1322, 93, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1323, 93, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1324, 93, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1325, 93, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1326, 93, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1327, 94, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1328, 94, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1329, 94, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1330, 94, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1331, 94, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1332, 94, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1333, 94, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1334, 94, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1335, 94, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1336, 94, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1337, 94, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1338, 94, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1339, 94, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1340, 95, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1341, 95, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1342, 95, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1343, 95, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1344, 95, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1345, 95, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1346, 95, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1347, 95, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1348, 95, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1349, 95, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1350, 95, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1351, 95, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1352, 95, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1353, 96, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1354, 96, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1355, 96, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1356, 96, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1357, 96, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1358, 96, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1359, 96, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1360, 96, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1361, 96, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1362, 96, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1363, 96, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1364, 96, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1365, 96, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1366, 97, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1367, 97, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1368, 97, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1369, 97, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1370, 97, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1371, 97, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1372, 97, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1373, 97, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1374, 97, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1375, 97, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1376, 97, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1377, 97, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1378, 97, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1379, 98, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1380, 98, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1381, 98, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1382, 98, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1383, 98, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1384, 98, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1385, 98, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1386, 98, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1387, 98, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1388, 98, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1389, 98, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1390, 98, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1391, 98, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1392, 99, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1393, 99, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1394, 99, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1395, 99, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1396, 99, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1397, 99, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1398, 99, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1399, 99, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1400, 99, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1401, 99, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1402, 99, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1403, 99, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1404, 99, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1405, 100, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1406, 100, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1407, 100, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1408, 100, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1409, 100, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1410, 100, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1411, 100, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1412, 100, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1413, 100, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1414, 100, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1415, 100, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1416, 100, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1417, 100, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1418, 101, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1419, 101, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1420, 101, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1421, 101, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1422, 101, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1423, 101, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1424, 101, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1425, 101, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1426, 101, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1427, 101, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1428, 101, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1429, 101, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1430, 101, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no'),
(1431, 102, 15, 2, '1', 'no', 'no', 'no', 'yes', 'no'),
(1432, 102, 15, 2, '2', 'yes', 'yes', 'no', 'yes', 'no'),
(1433, 102, 15, 2, '3', 'yes', 'yes', 'no', 'yes', 'no'),
(1434, 102, 15, 2, '4', 'no', 'no', 'no', 'yes', 'no'),
(1435, 102, 15, 2, '5', 'yes', 'yes', 'no', 'yes', 'no'),
(1436, 102, 15, 2, '6', 'no', 'no', 'no', 'yes', 'no'),
(1437, 102, 15, 2, '7', 'no', 'no', 'no', 'yes', 'no'),
(1438, 102, 15, 2, '8', 'yes', 'yes', 'no', 'yes', 'no'),
(1439, 102, 15, 2, '9', 'no', 'no', 'no', 'yes', 'no'),
(1440, 102, 15, 2, '10', 'no', 'no', 'no', 'yes', 'no'),
(1441, 102, 15, 2, '11', 'no', 'no', 'no', 'yes', 'no'),
(1442, 102, 15, 2, '12', 'no', 'no', 'no', 'yes', 'no'),
(1443, 102, 15, 2, '13', 'no', 'no', 'no', 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member_type`
--

CREATE TABLE `tbl_team_member_type` (
  `type_ID` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime DEFAULT NULL,
  `date_closed` datetime DEFAULT NULL,
  `last_updated_date` datetime DEFAULT NULL,
  `last_updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team_member_type`
--

INSERT INTO `tbl_team_member_type` (`type_ID`, `type_name`, `status`, `date_created`, `date_closed`, `last_updated_date`, `last_updated_by`) VALUES
(1, 'ITS NOIDA', 1, '2019-09-16 12:10:50', '2019-09-16 12:10:50', '2019-09-16 12:10:50', 2),
(2, 'ITS JSR', 1, '2019-09-24 11:27:25', '2019-09-24 11:27:25', '2019-09-24 11:27:25', 1),
(3, 'Infosys_others', 1, '2019-09-24 12:23:47', '2019-09-24 12:23:47', '2019-09-24 12:23:47', 1),
(4, 'Infosys_APPLE', 1, '2019-09-24 12:32:58', '2019-09-24 12:32:58', '2019-09-24 12:32:58', 1),
(5, 'Zensar', 1, '2019-09-24 12:55:35', '2019-09-24 12:55:35', '2019-09-24 12:55:35', 1),
(6, 'Persistent Systems', 1, '2019-09-24 03:00:38', '2019-09-24 03:00:38', '2019-09-24 03:00:38', 2),
(7, 'Zensar_Photon', 1, '2019-09-24 04:49:09', '2019-09-24 04:49:09', '2019-09-24 04:49:09', 25),
(8, 'Photon', 1, '2019-09-24 05:24:17', '2019-09-24 05:24:17', '2019-09-24 05:24:17', 15),
(9, 'Birlasoft', 1, '2019-09-24 05:33:52', '2019-09-24 05:33:52', '2019-09-24 05:33:52', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timesheet`
--

CREATE TABLE `tbl_timesheet` (
  `timesheet_id` int(11) NOT NULL,
  `employer_id` varchar(50) NOT NULL,
  `from_date` varchar(50) NOT NULL,
  `to_date` varchar(50) NOT NULL,
  `document_file` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `last_updated_date` date NOT NULL,
  `last_updated_by` varchar(70) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usa_cities`
--

CREATE TABLE `tbl_usa_cities` (
  `city` varchar(50) NOT NULL,
  `state_code` char(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visa_type`
--

CREATE TABLE `tbl_visa_type` (
  `type_ID` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visa_type`
--

INSERT INTO `tbl_visa_type` (`type_ID`, `type_name`, `status`) VALUES
(1, 'OPT-EAD', 1),
(2, 'H4-EAD', 1),
(3, 'GC-EAD', 1),
(4, 'H1-B', 1),
(5, 'TN-EAD', 1),
(6, 'US Citizen', 1),
(7, 'TN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `org_ID` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `org_ID`, `user_id`, `user_type`, `full_name`, `email`, `password`) VALUES
(1, '2', 2, 'employer', 'Sumit M', 'sumit.m@itscient.com', 'sumit123'),
(2, '2', 1, 'teammember', 'Sumit madne', 'sumit.m@itscient.com', 'sumit@123'),
(3, '2', 2, 'teammember', 'Jashraj Kumar', 'jashraj.k@itscient.com', 'jashraj@123'),
(4, '2', 3, 'teammember', 'Sanjay Mandi', 'sanjay.m@itscient.com', 'sanjay@123'),
(5, '2', 4, 'teammember', 'Avinash Jhingan', 'avinash.j@itscient.com', 'avinash@123'),
(6, '2', 5, 'teammember', 'Ravi lal Teli', 'ravi.l@itscient.com', 'ravi@123'),
(7, '2', 6, 'teammember', 'prem Toppo', 'prem.t@itscient.com', 'prem@123'),
(8, '2', 7, 'teammember', 'Abhishek Gorai', 'abhishek.ku@itscient.com', 'abhishek@123'),
(9, '2', 8, 'teammember', 'Subham Kumar Dey', 'subham.k@itscient.com', 'subham@123'),
(10, '2', 9, 'teammember', 'Chandan Kumar', 'chandan.k@itscient.com', 'chandan@123'),
(11, '2', 10, 'teammember', 'Savita kumari', 'savita.k@itscient.com', 'savita123'),
(12, '2', 11, 'teammember', 'Abhishek kumar Pandey', 'abhishek.p@itscient.com', 'abhishek@123'),
(13, '2', 12, 'teammember', 'Gautam Kumar', 'gautam.k@itscient.com', 'gautam@123'),
(14, '2', 13, 'teammember', 'Amit Kumar', 'amit.k@itscient.com', 'amit@123'),
(15, '2', 14, 'teammember', 'Joydeep Kumar', 'joydeep.s@itscient.com', 'joydeep123'),
(16, '2', 15, 'teammember', 'Abhinay Mishra', 'abhinay.m@itscient.com', 'abhinay@123'),
(17, '2', 16, 'teammember', 'Sanju Gorai', 'sanju.g@itscient.com', 'sanju@123'),
(18, '2', 17, 'teammember', 'Devyani Kumari', 'devyani.k@itscient.com', 'devyani@123'),
(19, '2', 18, 'teammember', 'Neha Singh', 'neha.s@itscient.com', 'neha@123'),
(20, '2', 19, 'teammember', 'Archana Kumari', 'archana', 'archana@123'),
(21, '2', 20, 'teammember', 'Supriya Kumari', 'supriya.k@itscient.com', 'supriya@123'),
(22, '2', 21, 'teammember', 'Komal Kumari', 'komal.k@itscient.com', 'komal@123'),
(23, '2', 22, 'teammember', 'Rani Mardi', 'rani.m@itscient.com', 'rani@123'),
(24, '2', 23, 'teammember', 'Sophiya Sandhu', 'sophiya.s@itscient.com', 'sophiya@123'),
(25, '2', 24, 'teammember', 'Putul Singh', 'putul.s@itscient.com', 'putul123'),
(26, '2', 25, 'teammember', 'Sumitra Dhal', 'itsc.comm@gmail.com', 'sumitra123'),
(27, '2', 26, 'teammember', 'Neha Singh', 'neha.s@itscient.com', 'neha123'),
(28, '2', 27, 'teammember', 'Devyani Kumari', 'devyani.k@itscient.com', 'devyani123'),
(29, '2', 28, 'teammember', 'Punrgee Tudu', 'punrgee.t@itscient.com', 'punrgee123'),
(30, '2', 29, 'teammember', 'Archana Kumari', 'archana.k@itscient.com', 'archana123'),
(31, '2', 30, 'teammember', 'Nilesh Chandra', 'nilesh.c@itscient.com', 'nilesh123'),
(32, '2', 31, 'teammember', 'Sumit kumar', 'sumit.k@itscient.com', 'sumit@123'),
(33, '2', 32, 'teammember', 'Ajay Dutta', 'ajay.d@itscient.com', 'ajay123'),
(34, '2', 33, 'teammember', 'Supriya Kumari', 'supriya.k@itscient.com', 'supriya123'),
(35, '2', 34, 'teammember', 'Niladri Sarker', 'niladri.s@itscient.com', 'niladri123'),
(36, '2', 35, 'teammember', 'Rajesh Gorai', 'rajesh.g@itscient.com', 'rajesh123'),
(37, '2', 36, 'teammember', 'Jyotirmoy Bhakat', 'jyotirmoy.b@itscient.com', 'jyotirmoy123'),
(38, '2', 37, 'teammember', 'Nayna Biswas', 'nayna.b@itscient.com', 'nayna@123'),
(39, '2', 38, 'teammember', 'Manisha Podel', 'manisha.p@itscient.com', 'manisha123'),
(40, '2', 39, 'teammember', 'Laxmikant Mahto', 'laxmikant.m@itscient.com', 'laxmikant123'),
(41, '2', 40, 'teammember', 'Nitesh Kumar Chanda', 'nitesh.c@itscient.com', 'nitesh123'),
(42, '2', 41, 'teammember', 'Komal Kumari', 'komal.k@itscient.com', 'komal123'),
(43, '2', 42, 'teammember', 'Purnima Singh', 'purnima.s@itscient.com', 'purnima123'),
(44, '2', 43, 'teammember', 'Mohini Kumari', 'mohini.k@itscient.com', 'mohini123'),
(45, '2', 44, 'teammember', 'Shivani Singh', 'shivani.s@itscient.com', 'shivani123'),
(46, '2', 45, 'teammember', 'Munmun Das', 'itsc.comm@gmail.com', 'munmun123'),
(47, '2', 46, 'teammember', 'Sonali Srivastava', 'sonali.s@itscient.com', 'sonali123'),
(48, '2', 47, 'teammember', 'Rakhi Shukla', 'rakhi.s@itscient.com', 'rakhi123'),
(49, '2', 48, 'teammember', 'Parwati Sagar', 'priya.s@itscient.com', 'parwati123'),
(50, '2', 49, 'teammember', 'Pushpalata Sinku', 'lata.s@itscient.com', 'pushpalata123'),
(51, '2', 50, 'teammember', 'Kajal Kumari', 'kajal.k@itscient.com', 'kajal123'),
(52, '2', 51, 'teammember', 'Sophiya Sandhu', 'sophiya.s@itscient.com', 'sophiya123'),
(53, '2', 52, 'teammember', 'Basanti Mukhi', 'basanti.m@itscient.com', 'basanti123'),
(54, '2', 53, 'teammember', 'Nisha Khalkho', 'nisha.k@itscient.com', 'nisha123'),
(55, '2', 54, 'teammember', 'Shobha R. Mahato', 'shobha.r@itscient.com', 'shobha123'),
(56, '2', 55, 'teammember', 'Shristy Jaiswal', 'itsc.comm@gmail.com', 'shristy123'),
(57, '2', 56, 'teammember', 'Ankita Pathak', 'ankita.p@itscient.com', 'ankita123'),
(58, '2', 57, 'teammember', 'Moumita Pramanik', 'moumita.p@itscient.com', 'moumita123'),
(59, '2', 58, 'teammember', 'Sheetal Abhilasha Raven', 'sheetal.k@itscient.com', 'sheetal123'),
(60, '2', 59, 'teammember', 'Pinky Kumari', 'pinky.k@itscient.com', 'pinky123'),
(61, '2', 60, 'teammember', 'Babita Karua', 'babita.k@itscient.com', 'babita123'),
(62, '2', 61, 'teammember', 'Neha Kumari', 'neha.ku@itscient.com', 'neha123'),
(63, '2', 62, 'teammember', 'Pooja Sharma', 'pooja.sh@itscient.com', 'pooja123'),
(64, '2', 63, 'teammember', 'Sweta Kumari', 'shweta.singh@itscient.com', 'sweta123'),
(65, '2', 64, 'teammember', 'Soumya Singh', 'soumya.si@itscient.com', 'soumya123'),
(66, '2', 65, 'teammember', 'Sharmistha Dutta', 'sharmistha.d@itscient.com', 'sharmistha123'),
(67, '2', 66, 'teammember', 'Madhuri Jaiswal', 'madhuri.j@itscient.com', 'madhuri123'),
(68, '2', 67, 'teammember', 'Arpita Sanigrahi', 'arpita.s@itscient.com', 'arpita123'),
(69, '2', 68, 'teammember', 'Manisha Soy', 'manisha.s@itscient.com', 'manisha123'),
(70, '2', 69, 'teammember', 'Sharmistha Dutta', 'sharmistha.d@itscient.com', 'sharmistha123'),
(71, '2', 70, 'teammember', 'Samiksha Swati Sinha', 'Samiksha.s@itscient.com', 'samiksha123'),
(72, '2', 71, 'teammember', 'Dolly Kumari', 'dolly.k@itscient.com', 'dolly123'),
(73, '2', 72, 'teammember', 'Resu Raj', 'resu.r@itscient.com', 'resu123'),
(74, '2', 73, 'teammember', 'Aarti Kumari', 'aarti.k@itscient.com', 'aarti123'),
(75, '2', 74, 'teammember', 'M.Leela', 'leela.m@itscient.com', 'leela123'),
(76, '2', 75, 'teammember', 'Shreya Bose', 'shreya.b@itscient.com', 'shreya123'),
(77, '2', 76, 'teammember', 'Sunidhi Mishra', 'sunidhi.m@itscient.com', 'sunidhi123'),
(78, '2', 77, 'teammember', 'Avinash Kumar', 'avinash.m@itscient.com', 'avinash123'),
(79, '2', 78, 'teammember', 'Samiksha Swati Sinha', 'Samiksha.s@itscient.com', 'samiksha123'),
(80, '2', 79, 'teammember', 'Pratik Kumar', 'pratik.k@itscient.com', 'pratik123'),
(81, '2', 80, 'teammember', 'Vishal Kumar Singh', 'vishal.s@itscient.com', 'vishal123'),
(82, '2', 81, 'teammember', 'Akash Mondal', 'akash.m@itscient.com', 'akash123'),
(83, '2', 82, 'teammember', 'Prashant Kumar Yadav', 'prashant.k@itscient.com', 'prashant123'),
(84, '2', 83, 'teammember', 'Ashish Verma', 'ashish.v@itscient.com', 'ashish123'),
(85, '2', 84, 'teammember', 'Lawrence Goswami', 'lawrence.g@itscient.com', 'lawrence123'),
(86, '2', 85, 'teammember', 'Yaman Kumar Varma', 'yaman.k@itscient.com', 'yaman123'),
(87, '2', 86, 'teammember', 'Samiksha Swati Sinha', 'samiksha.s@itscient.com', 'samiksha123'),
(88, '2', 87, 'teammember', 'Samiksha Swati Sinha', 'samiksha.s@itscient.com', 'samiksha123'),
(89, '2', 88, 'teammember', 'Samiksha Sinha', 'samiksha.s@itscient.com', '123456'),
(90, '2', 89, 'teammember', 'Pradeep Kumar Thakur', 'pradeep.k@itscient.com', 'pradeep123'),
(91, '2', 90, 'teammember', 'Romit Handa', 'romit.h@itscient.com', 'romit123'),
(92, '2', 91, 'teammember', 'Ruby Hansdah', 'ruby.h@itscient.com', 'ruby123'),
(93, '2', 92, 'teammember', 'Roshan Kumar Jha', 'roshan.k@itscient.com', 'roshan123'),
(94, '2', 93, 'teammember', 'Sambhaw Kumar', 'sambhaw.k@itscient.com', 'sambhaw123'),
(95, '2', 94, 'teammember', 'Braj Mohan', 'brij.m@itscient.com', 'braj123'),
(96, '2', 95, 'teammember', 'Bikash Kumar Singh', 'bikash.s@itscient.com', 'bikash123'),
(97, '2', 96, 'teammember', 'Ajay Kumar Mahato', 'ajay.k@itscient.com', 'ajay123'),
(98, '2', 97, 'teammember', 'Vivek kumar Mukhi', 'Vivek.k@itscient.com', 'vivek123'),
(99, '2', 98, 'teammember', 'Gautam kumar panday', 'Gautam.p@itscient.com', 'gautam123'),
(100, '2', 99, 'teammember', 'Pankaj kumar Gour', 'Pankaj.g@itscient.com', 'pankaj123'),
(101, '2', 100, 'teammember', 'Kaushik saha', 'kaushik.s@itscient.com', 'kaushik123'),
(102, '2', 101, 'teammember', 'Divyansh', 'Divyansh@itscient.com', 'divyansh123'),
(103, '2', 102, 'teammember', 'Suraj Gupta', 'Suraj.g@itscient.com', 'suraj123');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `created_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `name`, `email_id`, `pass`, `created_by`) VALUES
(1, 'admin', 'admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `ID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ad_codes`
--
ALTER TABLE `tbl_ad_codes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_applications_notes`
--
ALTER TABLE `tbl_applications_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ar_agreement`
--
ALTER TABLE `tbl_ar_agreement`
  ADD PRIMARY KEY (`agreement_id`);

--
-- Indexes for table `tbl_ar_contact_type`
--
ALTER TABLE `tbl_ar_contact_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ar_customers`
--
ALTER TABLE `tbl_ar_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ar_customer_contact`
--
ALTER TABLE `tbl_ar_customer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ar_customer_relation`
--
ALTER TABLE `tbl_ar_customer_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ar_work_order`
--
ALTER TABLE `tbl_ar_work_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidate_link_generation`
--
ALTER TABLE `tbl_candidate_link_generation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_candidate_notes`
--
ALTER TABLE `tbl_candidate_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  ADD PRIMARY KEY (`pageID`);

--
-- Indexes for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_degree`
--
ALTER TABLE `tbl_degree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_document_type`
--
ALTER TABLE `tbl_document_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_content`
--
ALTER TABLE `tbl_email_content`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_email_list`
--
ALTER TABLE `tbl_email_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_list_contacts`
--
ALTER TABLE `tbl_email_list_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_email_template`
--
ALTER TABLE `tbl_email_template`
  ADD PRIMARY KEY (`et_id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_employee_document`
--
ALTER TABLE `tbl_employee_document`
  ADD PRIMARY KEY (`doc_ID`);

--
-- Indexes for table `tbl_employers`
--
ALTER TABLE `tbl_employers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_favourite_candidates`
--
ALTER TABLE `tbl_favourite_candidates`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `tbl_favourite_companies`
--
ALTER TABLE `tbl_favourite_companies`
  ADD PRIMARY KEY (`seekerid`);

--
-- Indexes for table `tbl_forward_candidate`
--
ALTER TABLE `tbl_forward_candidate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_forward_candidate_exp_required`
--
ALTER TABLE `tbl_forward_candidate_exp_required`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_forward_candidate_reference`
--
ALTER TABLE `tbl_forward_candidate_reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_institute`
--
ALTER TABLE `tbl_institute`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_invite_employer`
--
ALTER TABLE `tbl_invite_employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invite_jobseeker`
--
ALTER TABLE `tbl_invite_jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inv_inventory_item`
--
ALTER TABLE `tbl_inv_inventory_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_inv_item_pricelist`
--
ALTER TABLE `tbl_inv_item_pricelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobs_history`
--
ALTER TABLE `tbl_jobs_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobs_notes`
--
ALTER TABLE `tbl_jobs_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_alert`
--
ALTER TABLE `tbl_job_alert`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_job_alert_queue`
--
ALTER TABLE `tbl_job_alert_queue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_job_functional_areas`
--
ALTER TABLE `tbl_job_functional_areas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_job_industries`
--
ALTER TABLE `tbl_job_industries`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_job_multiple_location`
--
ALTER TABLE `tbl_job_multiple_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_post_assign`
--
ALTER TABLE `tbl_job_post_assign`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_job_seekers`
--
ALTER TABLE `tbl_job_seekers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_job_titles`
--
ALTER TABLE `tbl_job_titles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_marketing_emailer`
--
ALTER TABLE `tbl_marketing_emailer`
  ADD PRIMARY KEY (`emailer_id`);

--
-- Indexes for table `tbl_marketing_emailer_list`
--
ALTER TABLE `tbl_marketing_emailer_list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `tbl_marketing_emailier_schedule`
--
ALTER TABLE `tbl_marketing_emailier_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_mar_admin`
--
ALTER TABLE `tbl_mar_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loginnameidx` (`loginname`);

--
-- Indexes for table `tbl_mar_adminattribute`
--
ALTER TABLE `tbl_mar_adminattribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mar_admintoken`
--
ALTER TABLE `tbl_mar_admintoken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mar_admin_attribute`
--
ALTER TABLE `tbl_mar_admin_attribute`
  ADD PRIMARY KEY (`adminattributeid`,`adminid`);

--
-- Indexes for table `tbl_mar_admin_password_request`
--
ALTER TABLE `tbl_mar_admin_password_request`
  ADD PRIMARY KEY (`id_key`);

--
-- Indexes for table `tbl_mar_attachment`
--
ALTER TABLE `tbl_mar_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mar_bounce`
--
ALTER TABLE `tbl_mar_bounce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dateindex` (`date`),
  ADD KEY `statusidx` (`status`(20));

--
-- Indexes for table `tbl_mar_bounceregex`
--
ALTER TABLE `tbl_mar_bounceregex`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regex` (`regex`);

--
-- Indexes for table `tbl_mar_bounceregex_bounce`
--
ALTER TABLE `tbl_mar_bounceregex_bounce`
  ADD PRIMARY KEY (`regex`,`bounce`);

--
-- Indexes for table `tbl_mar_config`
--
ALTER TABLE `tbl_mar_config`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `tbl_mar_eventlog`
--
ALTER TABLE `tbl_mar_eventlog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enteredidx` (`entered`),
  ADD KEY `pageidx` (`page`);

--
-- Indexes for table `tbl_mar_i18n`
--
ALTER TABLE `tbl_mar_i18n`
  ADD UNIQUE KEY `lanorigunq` (`lan`,`original`(200)),
  ADD KEY `lanorigidx` (`lan`,`original`(200));

--
-- Indexes for table `tbl_mar_linktrack`
--
ALTER TABLE `tbl_mar_linktrack`
  ADD PRIMARY KEY (`linkid`),
  ADD UNIQUE KEY `miduidurlindex` (`messageid`,`userid`,`url`),
  ADD KEY `midindex` (`messageid`),
  ADD KEY `uidindex` (`userid`),
  ADD KEY `urlindex` (`url`),
  ADD KEY `miduidindex` (`messageid`,`userid`);

--
-- Indexes for table `tbl_mar_linktrack_forward`
--
ALTER TABLE `tbl_mar_linktrack_forward`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `urlunique` (`url`),
  ADD KEY `urlindex` (`url`),
  ADD KEY `uuididx` (`uuid`);

--
-- Indexes for table `tbl_mar_linktrack_ml`
--
ALTER TABLE `tbl_mar_linktrack_ml`
  ADD PRIMARY KEY (`messageid`,`forwardid`),
  ADD KEY `midindex` (`messageid`),
  ADD KEY `fwdindex` (`forwardid`);

--
-- Indexes for table `tbl_mar_linktrack_uml_click`
--
ALTER TABLE `tbl_mar_linktrack_uml_click`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `miduidfwdid` (`messageid`,`userid`,`forwardid`),
  ADD KEY `midindex` (`messageid`),
  ADD KEY `uidindex` (`userid`),
  ADD KEY `miduidindex` (`messageid`,`userid`);

--
-- Indexes for table `tbl_mar_linktrack_userclick`
--
ALTER TABLE `tbl_mar_linktrack_userclick`
  ADD KEY `linkindex` (`linkid`),
  ADD KEY `uidindex` (`userid`),
  ADD KEY `midindex` (`messageid`),
  ADD KEY `linkuserindex` (`linkid`,`userid`),
  ADD KEY `linkusermessageindex` (`linkid`,`userid`,`messageid`);

--
-- Indexes for table `tbl_mar_list`
--
ALTER TABLE `tbl_mar_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nameidx` (`name`),
  ADD KEY `listorderidx` (`listorder`);

--
-- Indexes for table `tbl_mar_listmessage`
--
ALTER TABLE `tbl_mar_listmessage`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `messageid` (`messageid`,`listid`),
  ADD KEY `listmessageidx` (`listid`,`messageid`);

--
-- Indexes for table `tbl_mar_listuser`
--
ALTER TABLE `tbl_mar_listuser`
  ADD PRIMARY KEY (`userid`,`listid`),
  ADD KEY `userenteredidx` (`userid`,`entered`),
  ADD KEY `userlistenteredidx` (`userid`,`listid`,`entered`),
  ADD KEY `useridx` (`userid`),
  ADD KEY `listidx` (`listid`);

--
-- Indexes for table `tbl_mar_message`
--
ALTER TABLE `tbl_mar_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uuididx` (`uuid`);

--
-- Indexes for table `tbl_mar_messagedata`
--
ALTER TABLE `tbl_mar_messagedata`
  ADD PRIMARY KEY (`name`,`id`);

--
-- Indexes for table `tbl_mar_message_attachment`
--
ALTER TABLE `tbl_mar_message_attachment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messageidx` (`messageid`),
  ADD KEY `messageattidx` (`messageid`,`attachmentid`);

--
-- Indexes for table `tbl_mar_sendprocess`
--
ALTER TABLE `tbl_mar_sendprocess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mar_subscribepage`
--
ALTER TABLE `tbl_mar_subscribepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mar_subscribepage_data`
--
ALTER TABLE `tbl_mar_subscribepage_data`
  ADD PRIMARY KEY (`id`,`name`);

--
-- Indexes for table `tbl_mar_template`
--
ALTER TABLE `tbl_mar_template`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `tbl_mar_templateimage`
--
ALTER TABLE `tbl_mar_templateimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `templateidx` (`template`);

--
-- Indexes for table `tbl_mar_urlcache`
--
ALTER TABLE `tbl_mar_urlcache`
  ADD PRIMARY KEY (`id`),
  ADD KEY `urlindex` (`url`);

--
-- Indexes for table `tbl_mar_usermessage`
--
ALTER TABLE `tbl_mar_usermessage`
  ADD PRIMARY KEY (`userid`,`messageid`),
  ADD KEY `messageidindex` (`messageid`),
  ADD KEY `useridindex` (`userid`),
  ADD KEY `enteredindex` (`entered`),
  ADD KEY `statusidx` (`status`),
  ADD KEY `viewedidx` (`viewed`);

--
-- Indexes for table `tbl_mar_userstats`
--
ALTER TABLE `tbl_mar_userstats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entry` (`unixdate`,`item`,`listid`),
  ADD KEY `dateindex` (`unixdate`),
  ADD KEY `itemindex` (`item`),
  ADD KEY `listindex` (`listid`),
  ADD KEY `listdateindex` (`listid`,`unixdate`);

--
-- Indexes for table `tbl_mar_user_attribute`
--
ALTER TABLE `tbl_mar_user_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nameindex` (`name`),
  ADD KEY `idnameindex` (`id`,`name`);

--
-- Indexes for table `tbl_mar_user_blacklist`
--
ALTER TABLE `tbl_mar_user_blacklist`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `emailidx` (`email`);

--
-- Indexes for table `tbl_mar_user_blacklist_data`
--
ALTER TABLE `tbl_mar_user_blacklist_data`
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `emailidx` (`email`),
  ADD KEY `emailnameidx` (`email`,`name`);

--
-- Indexes for table `tbl_mar_user_message_bounce`
--
ALTER TABLE `tbl_mar_user_message_bounce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `umbindex` (`user`,`message`,`bounce`),
  ADD KEY `useridx` (`user`),
  ADD KEY `msgidx` (`message`),
  ADD KEY `bounceidx` (`bounce`);

--
-- Indexes for table `tbl_mar_user_message_forward`
--
ALTER TABLE `tbl_mar_user_message_forward`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usermessageidx` (`user`,`message`),
  ADD KEY `useridx` (`user`),
  ADD KEY `messageidx` (`message`);

--
-- Indexes for table `tbl_mar_user_user`
--
ALTER TABLE `tbl_mar_user_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `foreignkey` (`foreignkey`),
  ADD KEY `idxuniqid` (`uniqid`),
  ADD KEY `enteredindex` (`entered`),
  ADD KEY `confidx` (`confirmed`),
  ADD KEY `blidx` (`blacklisted`),
  ADD KEY `optidx` (`optedin`),
  ADD KEY `uuididx` (`uuid`);

--
-- Indexes for table `tbl_mar_user_user_attribute`
--
ALTER TABLE `tbl_mar_user_user_attribute`
  ADD PRIMARY KEY (`attributeid`,`userid`),
  ADD KEY `userindex` (`userid`),
  ADD KEY `attindex` (`attributeid`),
  ADD KEY `attuserid` (`userid`,`attributeid`);

--
-- Indexes for table `tbl_mar_user_user_history`
--
ALTER TABLE `tbl_mar_user_user_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userididx` (`userid`),
  ADD KEY `dateidx` (`date`);

--
-- Indexes for table `tbl_module`
--
ALTER TABLE `tbl_module`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD UNIQUE KEY `notification_id` (`notification_id`);

--
-- Indexes for table `tbl_pay_rate_umo`
--
ALTER TABLE `tbl_pay_rate_umo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_company`
--
ALTER TABLE `tbl_post_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_contacts`
--
ALTER TABLE `tbl_post_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post_jobs`
--
ALTER TABLE `tbl_post_jobs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_prohibited_keywords`
--
ALTER TABLE `tbl_prohibited_keywords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_qualifications`
--
ALTER TABLE `tbl_qualifications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_rec_tags`
--
ALTER TABLE `tbl_rec_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_salaries`
--
ALTER TABLE `tbl_salaries`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `tbl_scam`
--
ALTER TABLE `tbl_scam`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_schedule_interview`
--
ALTER TABLE `tbl_schedule_interview`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_seeker_academic`
--
ALTER TABLE `tbl_seeker_academic`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_seeker_additional_info`
--
ALTER TABLE `tbl_seeker_additional_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_seeker_applied_for_job`
--
ALTER TABLE `tbl_seeker_applied_for_job`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_seeker_applied_for_job_client_refrence`
--
ALTER TABLE `tbl_seeker_applied_for_job_client_refrence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seeker_applied_for_job_doc`
--
ALTER TABLE `tbl_seeker_applied_for_job_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seeker_applied_for_job_salary_uom`
--
ALTER TABLE `tbl_seeker_applied_for_job_salary_uom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seeker_documents`
--
ALTER TABLE `tbl_seeker_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seeker_experience`
--
ALTER TABLE `tbl_seeker_experience`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_seeker_skills`
--
ALTER TABLE `tbl_seeker_skills`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stories`
--
ALTER TABLE `tbl_stories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_sub_document_type`
--
ALTER TABLE `tbl_sub_document_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_team_member_permission`
--
ALTER TABLE `tbl_team_member_permission`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `tbl_team_member_type`
--
ALTER TABLE `tbl_team_member_type`
  ADD UNIQUE KEY `type_ID` (`type_ID`);

--
-- Indexes for table `tbl_timesheet`
--
ALTER TABLE `tbl_timesheet`
  ADD PRIMARY KEY (`timesheet_id`);

--
-- Indexes for table `tbl_visa_type`
--
ALTER TABLE `tbl_visa_type`
  ADD PRIMARY KEY (`type_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ad_codes`
--
ALTER TABLE `tbl_ad_codes`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ar_contact_type`
--
ALTER TABLE `tbl_ar_contact_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ar_customers`
--
ALTER TABLE `tbl_ar_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ar_customer_contact`
--
ALTER TABLE `tbl_ar_customer_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_candidate_link_generation`
--
ALTER TABLE `tbl_candidate_link_generation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  MODIFY `pageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_degree`
--
ALTER TABLE `tbl_degree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_email_list`
--
ALTER TABLE `tbl_email_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_email_list_contacts`
--
ALTER TABLE `tbl_email_list_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_email_template`
--
ALTER TABLE `tbl_email_template`
  MODIFY `et_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employers`
--
ALTER TABLE `tbl_employers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_forward_candidate`
--
ALTER TABLE `tbl_forward_candidate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_institute`
--
ALTER TABLE `tbl_institute`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invite_employer`
--
ALTER TABLE `tbl_invite_employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invite_jobseeker`
--
ALTER TABLE `tbl_invite_jobseeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_industries`
--
ALTER TABLE `tbl_job_industries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_job_seekers`
--
ALTER TABLE `tbl_job_seekers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_marketing_emailer`
--
ALTER TABLE `tbl_marketing_emailer`
  MODIFY `emailer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_module`
--
ALTER TABLE `tbl_module`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pay_rate_umo`
--
ALTER TABLE `tbl_pay_rate_umo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_post_company`
--
ALTER TABLE `tbl_post_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_post_contacts`
--
ALTER TABLE `tbl_post_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_post_jobs`
--
ALTER TABLE `tbl_post_jobs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_prohibited_keywords`
--
ALTER TABLE `tbl_prohibited_keywords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_qualifications`
--
ALTER TABLE `tbl_qualifications`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rec_tags`
--
ALTER TABLE `tbl_rec_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salaries`
--
ALTER TABLE `tbl_salaries`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_scam`
--
ALTER TABLE `tbl_scam`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_schedule_interview`
--
ALTER TABLE `tbl_schedule_interview`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seeker_academic`
--
ALTER TABLE `tbl_seeker_academic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_seeker_additional_info`
--
ALTER TABLE `tbl_seeker_additional_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seeker_applied_for_job`
--
ALTER TABLE `tbl_seeker_applied_for_job`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_seeker_applied_for_job_client_refrence`
--
ALTER TABLE `tbl_seeker_applied_for_job_client_refrence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seeker_applied_for_job_doc`
--
ALTER TABLE `tbl_seeker_applied_for_job_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seeker_applied_for_job_salary_uom`
--
ALTER TABLE `tbl_seeker_applied_for_job_salary_uom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seeker_documents`
--
ALTER TABLE `tbl_seeker_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seeker_experience`
--
ALTER TABLE `tbl_seeker_experience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_seeker_skills`
--
ALTER TABLE `tbl_seeker_skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stories`
--
ALTER TABLE `tbl_stories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sub_document_type`
--
ALTER TABLE `tbl_sub_document_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tbl_team_member_permission`
--
ALTER TABLE `tbl_team_member_permission`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1444;

--
-- AUTO_INCREMENT for table `tbl_team_member_type`
--
ALTER TABLE `tbl_team_member_type`
  MODIFY `type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_timesheet`
--
ALTER TABLE `tbl_timesheet`
  MODIFY `timesheet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visa_type`
--
ALTER TABLE `tbl_visa_type`
  MODIFY `type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
