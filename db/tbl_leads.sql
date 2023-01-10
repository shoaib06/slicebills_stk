-- phpMyAdmin SQL Dump
-- version 5.1.1deb3+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2023 at 09:52 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slicebills`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads`
--

CREATE TABLE `tbl_leads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `debt_amount` varchar(255) DEFAULT NULL,
  `name` text,
  `address` longtext,
  `state` text,
  `dob` datetime DEFAULT NULL,
  `gender` text,
  `date_time` datetime DEFAULT NULL,
  `employment_status` text,
  `contibute_factor` text,
  `loan_type` text,
  `have_st_loan` varchar(70) NOT NULL,
  `st_loan_type` text NOT NULL,
  `falling_behind_payment` varchar(50) DEFAULT NULL,
  `property_live_in` varchar(100) DEFAULT NULL,
  `certUrl` text,
  `pingUrl` text,
  `ip_address` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leads`
--

INSERT INTO `tbl_leads` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `city`, `zip_code`, `debt_amount`, `name`, `address`, `state`, `dob`, `gender`, `date_time`, `employment_status`, `contibute_factor`, `loan_type`, `have_st_loan`, `st_loan_type`, `falling_behind_payment`, `property_live_in`, `certUrl`, `pingUrl`, `ip_address`, `timestamp`) VALUES
(1, NULL, 'SHOAIB', 'MOHAMMAD', 'kdas@yopmail.com', '08882670078', '', '700024', '$15,000-$25,000', NULL, NULL, NULL, NULL, NULL, NULL, 'Employed', 'Hardships Due To COVID-19', 'Credit Cards', '0', 'Federal Student Loan', 'Yes', 'Live with parents', 'https://cert.trustedform.com/49518a2062d795359189eec2ae8e3e2a4c77d953', 'https://ping.trustedform.com/0.DVgbD9mYCTIcyet62PgmlIxyD2XmaKL-Y3K7_jDGWY5Azjkoy2LZsUGXEtMVM9w0zedxCcmr.LH-kK98S3MwhatvtPwew0g.rqkNrmz0Q0LZ05e1M7zUaw', '::1', '1673288082'),
(2, NULL, 'Client', 'KunterDas', 'kdas@yopmail.com', '01625712576', '', '92', '$25,000-$50,000', NULL, NULL, NULL, NULL, NULL, NULL, 'Self-Employed', 'Job Loss Or Income Reduction,Hardships Due To COVID-19,Medical Expenses & Bills,Overwhelming Debts & Bills,Other', 'Credit Cards,Personal Loan Debt,Tax Debt,Medical Debt', '0', 'Private Student Loan', 'No', 'Rent', 'https://cert.trustedform.com/651d860730307834815a9ca94a6bca419bbbcd5d', 'https://ping.trustedform.com/0.TN--iC4ttmikkfWmW4phiJSbxNq_gyxRcyOeTo_RLjfXliIsnvOJqBa-TzUYuJgch-IkinDI.Vxx2qVDcF1Lcu2JJWud60g.uTVi0km62cVSTlMaXGEOLw', '::1', '1673288960'),
(3, NULL, 'SHOAIB', 'MOHAMMAD', 'sas@yomail.com', '08882670078', '', '92', '$10,000-$15,000', NULL, NULL, NULL, NULL, NULL, NULL, 'Self-Employed', 'Job Loss Or Income Reduction,Hardships Due To COVID-19', 'Personal Loan Debt', 'Yes', 'Private Student Loan', 'Yes', 'Live with parents', 'https://cert.trustedform.com/329f92759607d94ecfb2b7fe1d2ddea2e8a1216b', 'https://ping.trustedform.com/0.jAXY3_VTWUnybS9aG6xFEUIHURlVCyDQ6NYEZHb2feKHi3vklYv4spekFgCSz6AgNvcT7mH2.3nGv3z1YTR64ROg4zZE5NA.mvl_-WYQW2S8Je1szEd_2g', '::1', '1673289902');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
