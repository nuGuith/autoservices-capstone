-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 06:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoservices-capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `automobile`
--

CREATE TABLE `automobile` (
  `AutomobileID` int(10) NOT NULL,
  `CustomerID` int(10) DEFAULT NULL,
  `PlateNo` varchar(10) NOT NULL,
  `ModelID` int(10) NOT NULL,
  `Mileage` int(6) DEFAULT NULL,
  `Transmission` char(3) DEFAULT 'A/T',
  `Color` varchar(50) DEFAULT NULL,
  `ChassisNo` varchar(30) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile`
--

INSERT INTO `automobile` (`AutomobileID`, `CustomerID`, `PlateNo`, `ModelID`, `Mileage`, `Transmission`, `Color`, `ChassisNo`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 23, 'ABC123', 1, 10000, 'A/T', 'Black', 'JMDKSFIENV1223', 1, '2018-08-27 02:49:38', '2018-08-03 07:51:12'),
(2, 24, 'JHN089', 2, 1, 'A/T', 'w', 'd', 1, '2018-10-07 11:14:18', '2018-08-03 07:51:12'),
(3, 25, 'XHR321', 2, 15000, 'A/T', 'Gray', 'JNCVJKSD12209MKF', 1, '2018-08-25 01:44:23', '2018-08-14 15:59:22'),
(4, 26, 'YES555', 3, 10000, 'A/T', 'Pink', 'HNCVJKSD15209JPN', 1, '2018-08-25 06:22:01', '2018-08-14 16:10:52'),
(5, 30, 'VAMP19', 3, 12000, 'A/T', 'Red', 'VAMPJKSD15209J', 1, '2018-10-03 22:47:06', '2018-08-14 17:53:27'),
(6, 23, 'WABS00', 1, 15000, 'A/T', 'Green', '5KBRL388080015876', 1, '2018-08-27 03:00:21', '2018-08-21 11:49:01'),
(8, 35, 'WEAAB', 3, 20000, 'A/T', 'Brown', 'KAJG45HHSDJF32', 1, '2018-10-11 19:04:58', '2018-08-23 03:39:40'),
(12, 39, 'SHF344', 1, 20000, 'A/T', 'Red', 'HNCVJKSD15209JPN', 1, '2018-10-01 06:20:15', '2018-08-23 06:30:15'),
(13, 40, 'XHR321', 1, 10000, 'A/T', 'Yellow', 'JNCVJKSD12209MKD', 1, '2018-08-28 19:00:00', '2018-08-23 07:08:57'),
(14, 41, 'STRONK', 2, 15000, 'A/T', 'Pink', 'HNCVJKSD15209JPN', 1, '2018-08-25 09:59:20', '2018-08-23 07:13:51'),
(15, 50, 'YES555', 3, 10000, 'A/T', 'Pink', 'HNCVJKSD15209JPN', 1, '2018-08-23 19:50:56', '2018-08-23 19:50:56'),
(19, 54, 'REVREV', 3, 25000, 'A/T', 'Brown', 'JNCVJKSD12209MKD', 1, '2018-08-25 10:04:51', '2018-08-25 10:01:51'),
(20, 55, 'DING123', 3, 15000, 'M/T', 'Green', 'JNCVJKSD12209MKD', 1, '2018-08-27 14:10:08', '2018-08-25 12:34:55'),
(21, 59, 'PJ0909', 1, 10000, 'M/T', 'Black', 'JMDKSFIENV1223', 1, '2018-08-27 03:02:43', '2018-08-27 03:02:43'),
(22, 60, 'XGH576', 1, 10000, 'M/T', 'Red', 'HNCVJKSD15209JPN', 1, '2018-10-01 07:07:44', '2018-08-28 18:35:39'),
(23, 62, 'XYZ123', 1, 10000, 'M/T', 'Red', 'JNCVJKSD12209MKD', 1, '2018-08-29 02:29:40', '2018-08-29 02:29:40'),
(25, 64, 'DING123', 3, 15000, 'M/T', 'Green', 'JNCVJKSD12209MKD', 1, '2018-09-15 22:54:28', '2018-09-15 22:54:28'),
(26, 67, 'JHO376', 2, 10000, 'M/T', 'Pink', 'HNCVJKSD15209JPN', 1, '2018-10-04 22:23:40', '2018-10-02 04:15:52'),
(39, 80, 'VAMP19', 3, 12000, 'A/T', 'Red', 'VAMPJKSD15209J', 1, '2018-10-03 23:21:18', '2018-10-03 23:21:18'),
(42, 83, 'JHO376', 2, 10000, 'M/T', 'Pink', 'HNCVJKSD15209JPN', 1, '2018-10-04 01:02:03', '2018-10-04 01:02:03'),
(44, 100, 'BERT123', 1, 12000, 'A/T', 'Black', 'JNCVJKSD12209M', 1, '2018-10-07 05:33:56', '2018-10-04 05:49:43'),
(45, 101, 'YHN564', 2, 15000, 'A/T', 'Green', 'JMDKSFIENV1223', 1, '2018-10-04 05:58:22', '2018-10-04 05:58:22'),
(60, 118, 'JHO376', 2, 10000, 'M/T', 'Pink', 'HNCVJKSD15209JPN', 1, '2018-10-04 22:28:40', '2018-10-04 22:28:40'),
(61, 120, 'WEAAB', 3, 20000, 'A/T', 'Brown', 'KAJG45HHSDJF32', 1, '2018-10-11 19:13:48', '2018-10-11 19:13:48'),
(62, 124, 'PJ0909', 1, 10000, 'M/T', 'Black', 'JMDKSFIENV1223', 1, '2018-10-13 06:59:38', '2018-10-13 06:59:38'),
(63, 125, 'PJ0909', 1, 10000, 'M/T', 'Black', 'JMDKSFIENV1223', 1, '2018-10-13 07:00:48', '2018-10-13 07:00:48'),
(64, 126, 'VANN023', 1, 10000, 'A/T', 'Blue', 'JNCVJKSD12209M', 1, '2018-10-13 07:05:01', '2018-10-13 07:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `automobile_make`
--

CREATE TABLE `automobile_make` (
  `MakeID` int(10) NOT NULL,
  `Make` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile_make`
--

INSERT INTO `automobile_make` (`MakeID`, `Make`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Land Rover', 1, '0000-00-00 00:00:00', '2018-08-03 07:48:11'),
(2, 'Volkswagen', 1, '0000-00-00 00:00:00', '2018-08-03 07:48:11'),
(3, 'Honda', 1, '0000-00-00 00:00:00', '2018-08-15 00:08:05'),
(4, 'Mitsubishi', 0, '2018-09-02 09:18:35', '2018-08-19 09:38:17'),
(5, 'Honda', 0, '0000-00-00 00:00:00', '2018-08-19 09:41:44'),
(6, 'Honda', 1, '0000-00-00 00:00:00', '2018-08-19 09:40:37'),
(7, 'Honda', 0, '0000-00-00 00:00:00', '2018-08-31 11:19:34'),
(8, 'Honda', 0, '2018-09-02 09:10:38', '2018-09-02 09:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `automobile_mileage`
--

CREATE TABLE `automobile_mileage` (
  `MileageID` int(10) NOT NULL,
  `AutomobileID` int(10) DEFAULT NULL,
  `Mileage` int(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `automobile_model`
--

CREATE TABLE `automobile_model` (
  `ModelID` int(10) NOT NULL,
  `MakeID` int(10) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Year` year(4) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automobile_model`
--

INSERT INTO `automobile_model` (`ModelID`, `MakeID`, `Model`, `Year`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 'Range Rover', 2015, 1, '2018-08-19 07:07:12', '2018-08-03 07:49:45'),
(2, 2, 'Beetle', 2012, 1, '2018-08-19 07:07:07', '2018-08-03 07:49:45'),
(3, 3, 'City', 2015, 1, '2018-08-19 07:06:59', '2018-08-15 00:08:39'),
(4, 4, 'Montero Sport 2WD', 2016, 0, '2018-08-19 14:51:29', '2018-08-19 09:37:58'),
(5, 4, 'Montero Sport Premium 4WD', 2017, 1, '2018-08-29 02:25:37', '2018-08-19 09:37:58'),
(6, 5, 'Civic', 2015, 1, '2018-08-21 11:55:21', '2018-08-19 09:40:22'),
(7, 6, 'CR-V', 2014, 1, '2018-08-19 14:51:55', '2018-08-19 09:40:37'),
(8, 7, 'CR-V', 2012, 1, '2018-08-31 11:20:29', '2018-08-28 12:00:50'),
(9, 7, 'CR-V', 2015, 1, '2018-08-31 11:20:26', '2018-08-28 12:00:50'),
(10, 8, 'CR-V', 2014, 0, '2018-09-02 09:10:39', '2018-09-02 09:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `ComplaintID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `EstimateID` int(10) DEFAULT NULL,
  `Problem` varchar(8000) NOT NULL,
  `Diagnosis` varchar(8000) DEFAULT NULL,
  `isResolved` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`ComplaintID`, `JobOrderID`, `EstimateID`, `Problem`, `Diagnosis`, `isResolved`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 25, 109, 'Noisy', 'None yet.', 0, 1, '2018-10-04 05:09:55', '2018-10-04 05:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) NOT NULL,
  `ContactNo` varchar(15) NOT NULL,
  `PWD_SC_No` varchar(30) DEFAULT NULL,
  `CompleteAddress` varchar(255) NOT NULL,
  `Barangay` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `Province` varchar(40) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `FirstName`, `MiddleName`, `LastName`, `ContactNo`, `PWD_SC_No`, `CompleteAddress`, `Barangay`, `City`, `Province`, `EmailAddress`, `isActive`, `updated_at`, `created_at`) VALUES
(23, 'Ma. Sofia ', 'Aguirre ', 'Wabe', '(0910) 123-1431', NULL, 'SDFM, Quezon Ave.,', NULL, NULL, NULL, 'sofiawabe@gmail.com', 1, '2018-10-04 14:26:53', '2018-08-18 02:54:18'),
(24, 'John Ray ', 'Ramos ', 'Palatino', '(0938) 110-9011', NULL, '13 San Vicente St Brgy Damayan Quezon City', NULL, NULL, NULL, 'johnraypalatino08@gmail.com', 1, '2018-08-28 21:03:54', '2018-08-18 02:54:18'),
(25, 'Ivann Ashley ', 'Reyes ', 'Nuguid', '(0910) 432-7713', NULL, '002 P. Lucas St. Napindan, Taguig City', NULL, NULL, NULL, 'nuguidivannxx@gmail.com', 1, '2018-08-28 21:03:59', '2018-08-18 02:54:18'),
(26, 'Guesshee ', 'Orteza ', 'Almario', '(0999) 999-9943', NULL, 'Filinvest City, Alabang, Muntinlupa City', NULL, NULL, NULL, 'guesshee@gmail.com', 1, '2018-08-28 21:04:02', '2018-08-18 02:54:18'),
(27, 'Danice Joy ', 'Escano ', 'Tanguilan', '(0954) 999-9965', NULL, 'Sta Maria, Bulacan', NULL, NULL, NULL, 'da_nice@mail.com', 0, '2018-08-28 21:04:20', '2018-08-18 02:54:18'),
(28, 'Dodge Samuel', 'Nerizon ', 'Culaniban', '(0916) 999-9943', NULL, 'Sto Tomas, Pasig City', NULL, NULL, NULL, 'dodgekun@weeabmail.com', 0, '2018-08-28 21:04:28', '2018-08-18 02:54:18'),
(29, 'Rena Eznaira ', 'Carino ', 'Era', '(0945) 999-2243', NULL, 'Imus City, Cavite', NULL, NULL, NULL, 'iamzegryffindor@gmail.com', 0, '2018-08-28 21:04:39', '2018-08-18 02:54:18'),
(30, 'Sharmil Joy ', 'Ballera ', 'Pamatian', '(0923) 420-2018', NULL, 'Bacoor City, Cavite', NULL, NULL, NULL, 'sharmmms19@gmail.com', 1, '2018-10-03 22:47:06', '2018-08-18 02:54:18'),
(33, 'Reven John ', 'Piodos ', 'Candelario', '(0916) 000-0023', NULL, '', NULL, NULL, NULL, 'revenjohn@gmail.com', 0, '2018-08-28 21:04:51', '2018-08-19 07:12:48'),
(35, 'Dodge Samuel ', 'Nerizon ', 'Culaniban', '(0916) 000-0021', NULL, 'Brgy. Sto. Tomas, Pasig City', NULL, NULL, NULL, 'dodgekun@gmail.com', 1, '2018-10-11 19:04:58', '2018-08-23 03:39:40'),
(39, 'Janelle Joy ', 'Reyes ', 'Gabat', '(0912) 343-2835', NULL, 'Makati City', NULL, NULL, NULL, 'jenjoy@gmail.com', 1, '2018-10-01 06:20:15', '2018-08-23 06:30:15'),
(40, 'Cristina Jane ', 'Amistoso ', 'Inosanto', '(0918) 090-9365', NULL, 'FilInvest, Alabang, Muntinlupa City', NULL, NULL, NULL, 'tinayjane@yahoo.com', 1, '2018-08-28 19:00:00', '2018-08-23 07:08:57'),
(41, 'Rena Eznaira ', 'Cariño ', 'Era', '(0916) 783-3075', NULL, '18 C Blk A. Sto. Nino St. SFDM Qezon City', NULL, NULL, NULL, 'recera@gmail.com', 1, '2018-08-28 21:05:04', '2018-08-23 07:13:51'),
(50, 'Guesshee ', 'Orteza ', 'Almario', '(0999) 999-9932', NULL, '', NULL, NULL, NULL, 'guesshee@gmail.com', 1, '2018-08-28 21:05:06', '2018-08-23 19:50:56'),
(54, 'Reven John ', 'Piodos ', 'Candelario', '(0916) 000-0076', '462979101', '', NULL, NULL, NULL, 'rebenjan@gmail.com', 1, '2018-08-28 21:05:08', '2018-08-25 10:01:51'),
(55, 'Jlord ', 'Padernal ', 'Tolentino', '(0912) 093-0997', NULL, 'Central Bicutan, Taguig City', NULL, NULL, NULL, 'j@jmail.com', 1, '2018-08-28 21:05:11', '2018-08-25 12:34:55'),
(59, 'Patrick Joseph ', 'Pasion ', 'Concepcion', '(0990) 583-4532', NULL, 'Marikina City', NULL, NULL, NULL, NULL, 1, '2018-08-28 21:05:16', '2018-08-27 03:02:43'),
(60, 'Jairo ', 'Malamanig ', 'Sanchez', '(0917) 092-4536', NULL, 'V. Mapa St., Sta. Mesa, Manila', NULL, NULL, NULL, 's.jairo@gmail.com', 1, '2018-10-01 07:07:44', '2018-08-28 18:35:39'),
(62, 'John Michael ', 'Orias ', 'Igdalino', '(0916) 127-8002', NULL, 'Caloocan City', NULL, NULL, NULL, 'jm@gmail.com', 1, '2018-08-29 02:29:40', '2018-08-29 02:29:40'),
(64, 'Jlord ', 'Padernal ', 'Tolentino', '(0912) 093-0997', NULL, 'Central Bicutan, Taguig City', NULL, NULL, NULL, 'j@jmail.com', 1, '2018-09-15 22:54:28', '2018-09-15 22:54:28'),
(67, 'Joana Mae ', 'Reyes ', 'Morales', '(0933) 323-3423', NULL, '02 P. Lucas St., Napindan, Taguig City', NULL, NULL, NULL, 'jho@gmail.com', 1, '2018-10-04 22:23:40', '2018-10-02 04:15:52'),
(80, 'Sharmil Joy ', 'Ballera ', 'Pamatian', '(0923) 420-2018', NULL, 'Bacoor City, Cavite', NULL, NULL, NULL, 'sharmmms19@gmail.com', 1, '2018-10-03 23:21:18', '2018-10-03 23:21:18'),
(83, 'Joana Mae ', 'Reyes ', 'Morales', '(0933) 323-3423', NULL, '02 P. Lucas St., Napindan, Taguig City', NULL, NULL, NULL, 'jho@gmail.com', 1, '2018-10-04 01:02:03', '2018-10-04 01:02:03'),
(100, 'John Albert ', 'Reyes ', 'Nuguid', '(0945) 728-7234', NULL, 'Napindan', NULL, NULL, NULL, 'berttt@gmail.com', 1, '2018-10-07 05:33:56', '2018-10-04 05:49:43'),
(101, 'Arianne Joy ', 'Reyes ', 'Morales', '(0916) 779-8879', NULL, 'Napindan, Taguig City', NULL, NULL, NULL, 'yhann@gmail.com', 1, '2018-10-04 05:58:22', '2018-10-04 05:58:22'),
(118, 'Joana Mae ', 'Reyes ', 'Morales', '(0933) 323-3423', NULL, '02 P. Lucas St., Napindan, Taguig City', NULL, NULL, NULL, 'jho@gmail.com', 1, '2018-10-04 22:28:40', '2018-10-04 22:28:40'),
(119, 'Juan', NULL, 'Cruz', '09332409109', NULL, 'Makati City', NULL, NULL, NULL, NULL, 1, '2018-10-11 03:43:52', '2018-10-11 03:43:52'),
(120, 'Dodge Samuel ', 'Nerizon ', 'Culaniban', '(0916) 000-0021', NULL, 'Brgy. Sto. Tomas, Pasig City', NULL, NULL, NULL, 'dodgekun@gmail.com', 1, '2018-10-11 19:13:48', '2018-10-11 19:13:48'),
(124, 'Patrick Joseph ', 'Pasion ', 'Concepcion', '(0990) 583-4532', NULL, 'Marikina City', NULL, NULL, NULL, NULL, 1, '2018-10-13 06:59:38', '2018-10-13 06:59:38'),
(125, 'Patrick Joseph ', 'Pasion ', 'Concepcion', '(0990) 583-4532', NULL, 'Marikina City', NULL, NULL, NULL, NULL, 1, '2018-10-13 07:00:48', '2018-10-13 07:00:48'),
(126, 'Ivann Ashley ', 'Reyes ', 'Nuguid', '(0910) 432-7718', NULL, 'Napindan, Taguig City', NULL, NULL, NULL, 'nuguidivannxx@gmail.com', 1, '2018-10-13 07:05:01', '2018-10-13 07:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `DiscountID` int(10) NOT NULL,
  `DiscountName` varchar(255) NOT NULL,
  `DiscountRate` smallint(3) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`DiscountID`, `DiscountName`, `DiscountRate`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Senior Citizen', 20, 1, '0000-00-00 00:00:00', '2018-08-12 17:24:21'),
(2, 'PWD', 20, 1, '0000-00-00 00:00:00', '2018-08-17 05:55:09'),
(3, 'Twenty Five Percent', 25, 1, '0000-00-00 00:00:00', '2018-08-17 05:55:09'),
(4, 'Thirty Percent', 30, 1, '0000-00-00 00:00:00', '2018-08-17 05:55:09'),
(5, 'Forty Percent', 40, 1, '0000-00-00 00:00:00', '2018-08-28 12:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `EstimateID` int(10) NOT NULL,
  `AutomobileID` int(10) NOT NULL,
  `InspectionID` int(10) DEFAULT NULL,
  `DiscountID` int(10) DEFAULT NULL,
  `PersonnelID` int(10) NOT NULL,
  `ServiceBayID` int(10) DEFAULT NULL,
  `TotalCost` decimal(14,2) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`EstimateID`, `AutomobileID`, `InspectionID`, `DiscountID`, `PersonnelID`, `ServiceBayID`, `TotalCost`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 2, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-21 10:11:52', '2018-08-17 06:18:59'),
(2, 4, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-21 10:11:48', '2018-08-17 06:18:59'),
(3, 1, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-26 15:12:56', '2018-08-17 06:18:59'),
(8, 3, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-18 02:41:21', '2018-08-17 06:18:59'),
(9, 5, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-18 02:41:21', '2018-08-17 06:18:59'),
(11, 5, NULL, NULL, 1, NULL, '0.00', 1, '2018-08-23 03:29:12', '2018-08-23 03:29:12'),
(12, 8, NULL, NULL, 1, NULL, '0.00', 1, '2018-08-23 03:39:40', '2018-08-23 03:39:40'),
(15, 4, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 03:49:29', '2018-08-23 03:49:29'),
(16, 5, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 03:55:49', '2018-08-23 03:55:49'),
(18, 8, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 04:02:40', '2018-08-23 04:02:40'),
(20, 5, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 04:13:24', '2018-08-23 04:13:24'),
(21, 6, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 04:19:39', '2018-08-23 04:19:39'),
(22, 6, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-23 04:20:31', '2018-08-23 04:20:31'),
(23, 3, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-23 06:07:43', '2018-08-23 06:07:43'),
(25, 12, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-23 06:30:15', '2018-08-23 06:30:15'),
(26, 2, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-23 06:54:08', '2018-08-23 06:54:08'),
(28, 14, NULL, NULL, 1, NULL, '0.00', 1, '2018-08-23 07:13:51', '2018-08-23 07:13:51'),
(32, 14, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 07:52:01', '2018-08-23 07:52:01'),
(33, 14, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 07:57:48', '2018-08-23 07:57:48'),
(34, 12, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 14:56:20', '2018-08-23 14:56:20'),
(36, 5, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 15:01:07', '2018-08-23 15:01:07'),
(37, 5, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 15:01:39', '2018-08-23 15:01:39'),
(38, 5, NULL, NULL, 2, 3, '0.00', 1, '2018-08-25 18:34:44', '2018-08-23 15:02:16'),
(39, 2, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 16:12:13', '2018-08-23 16:12:13'),
(40, 8, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 17:52:14', '2018-08-23 17:52:14'),
(41, 8, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 17:54:09', '2018-08-23 17:54:09'),
(42, 4, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-23 18:28:18', '2018-08-23 18:28:18'),
(43, 13, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-23 19:56:44', '2018-08-23 19:56:44'),
(50, 14, NULL, NULL, 1, NULL, '0.00', 1, '2018-08-24 07:17:53', '2018-08-24 07:17:53'),
(51, 12, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-24 07:21:19', '2018-08-24 07:21:19'),
(56, 14, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 01:00:59', '2018-08-25 01:00:59'),
(60, 3, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 01:44:23', '2018-08-25 01:44:23'),
(62, 8, NULL, NULL, 1, NULL, '0.00', 1, '2018-08-25 01:48:36', '2018-08-25 01:48:36'),
(63, 6, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 01:54:32', '2018-08-25 01:54:32'),
(64, 14, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 02:12:20', '2018-08-25 02:12:20'),
(65, 13, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 02:20:41', '2018-08-25 02:20:41'),
(66, 14, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 05:54:59', '2018-08-25 05:54:59'),
(73, 12, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 06:07:21', '2018-08-25 06:07:21'),
(74, 2, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 06:08:58', '2018-08-25 06:08:58'),
(75, 8, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 06:11:26', '2018-08-25 06:11:26'),
(76, 4, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 06:16:17', '2018-08-25 06:16:17'),
(77, 4, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-25 06:22:01', '2018-08-25 06:22:01'),
(89, 1, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 09:56:44', '2018-08-25 09:56:44'),
(90, 14, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 09:59:20', '2018-08-25 09:59:20'),
(91, 19, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-25 10:01:52', '2018-08-25 10:01:52'),
(92, 19, NULL, NULL, 3, 3, '0.00', 1, '2018-08-25 19:46:16', '2018-08-25 10:04:51'),
(93, 20, NULL, NULL, 2, 2, '0.00', 1, '2018-08-25 12:34:55', '2018-08-25 12:34:55'),
(94, 20, NULL, NULL, 2, 3, '0.00', 1, '2018-08-25 18:41:49', '2018-08-25 18:41:49'),
(100, 20, NULL, NULL, 2, 3, '0.00', 1, '2018-08-27 02:11:34', '2018-08-27 02:11:34'),
(101, 6, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-27 02:14:02', '2018-08-27 02:14:02'),
(102, 8, NULL, NULL, 3, 2, '0.00', 1, '2018-08-27 02:15:46', '2018-08-27 02:15:46'),
(103, 1, NULL, NULL, 3, NULL, '0.00', 1, '2018-08-27 02:49:38', '2018-08-27 02:49:38'),
(104, 6, NULL, NULL, 1, 3, '0.00', 1, '2018-08-27 03:00:21', '2018-08-27 03:00:21'),
(105, 21, NULL, NULL, 1, 2, '0.00', 1, '2018-08-27 03:02:43', '2018-08-27 03:02:43'),
(106, 22, NULL, NULL, 2, NULL, '0.00', 1, '2018-08-28 18:35:39', '2018-08-28 18:35:39'),
(107, 13, NULL, NULL, 1, 2, '0.00', 1, '2018-08-28 19:00:00', '2018-08-28 19:00:00'),
(108, 23, NULL, NULL, 1, 2, '0.00', 1, '2018-08-29 02:29:40', '2018-08-29 02:29:40'),
(109, 26, NULL, NULL, 3, 3, '0.00', 1, '2018-10-02 04:15:52', '2018-10-02 04:15:52'),
(110, 26, NULL, NULL, 1, 1, '0.00', 1, '2018-10-03 22:45:43', '2018-10-03 22:45:43'),
(111, 5, NULL, NULL, 2, 1, '0.00', 1, '2018-10-03 22:47:06', '2018-10-03 22:47:06'),
(112, 26, NULL, NULL, 1, NULL, '0.00', 1, '2018-10-04 22:23:40', '2018-10-04 22:23:40'),
(113, 8, NULL, NULL, 1, 2, '0.00', 1, '2018-10-11 19:04:58', '2018-10-11 19:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `InspectionID` int(10) NOT NULL,
  `InspectionChecklistID` int(10) NOT NULL,
  `isWorking` bit(1) NOT NULL DEFAULT b'0',
  `hasInventory` bit(1) NOT NULL DEFAULT b'0',
  `Condition` varchar(100) NOT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`InspectionID`, `InspectionChecklistID`, `isWorking`, `hasInventory`, `Condition`, `Remarks`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, b'1', b'1', 'Chipped-off', NULL, 1, '0000-00-00 00:00:00', '2018-08-10 02:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_checklist`
--

CREATE TABLE `inspection_checklist` (
  `InspectionChecklistID` int(10) NOT NULL,
  `InspectionTypeID` int(10) NOT NULL,
  `InspectionItem` varchar(100) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_checklist`
--

INSERT INTO `inspection_checklist` (`InspectionChecklistID`, `InspectionTypeID`, `InspectionItem`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 'Weather Strip', 1, '0000-00-00 00:00:00', '2018-08-10 01:55:14'),
(2, 1, 'Door Lining', 1, '0000-00-00 00:00:00', '2018-08-10 01:55:14'),
(3, 1, 'Step Garnish', 1, '0000-00-00 00:00:00', '2018-08-10 01:55:42'),
(4, 2, 'Instrument Panel', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(5, 2, 'Horn', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(6, 2, 'Dashboard', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(7, 2, 'Stereo Unit', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(8, 2, 'Console Box', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(9, 2, 'Cigarette Lighter', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(10, 2, 'Sunvisor', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(11, 2, 'RR View Mirror', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(12, 2, 'Roof Lining - FR Side', 1, '0000-00-00 00:00:00', '2018-08-17 06:23:00'),
(13, 3, 'Roof Panel - LH Side', 1, '0000-00-00 00:00:00', '2018-08-17 06:24:56'),
(14, 3, 'Door Panel - RR LH', 1, '0000-00-00 00:00:00', '2018-08-17 06:24:56'),
(15, 3, 'Weatherstrip', 1, '0000-00-00 00:00:00', '2018-08-17 06:24:56'),
(16, 3, 'Door Lining - RR LH', 1, '0000-00-00 00:00:00', '2018-08-17 06:24:56'),
(17, 3, 'Step Garnish', 1, '0000-00-00 00:00:00', '2018-08-17 06:24:56'),
(18, 3, 'RR Seat/Back FR Seat', 1, '0000-00-00 00:00:00', '2018-08-17 06:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_header`
--

CREATE TABLE `inspection_header` (
  `InspectionID` int(10) NOT NULL,
  `EstimateID` int(10) DEFAULT NULL,
  `JobOrderID` int(10) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_header`
--

INSERT INTO `inspection_header` (`InspectionID`, `EstimateID`, `JobOrderID`, `Date`, `isActive`, `updated_at`, `created_at`) VALUES
(1, NULL, 1, '2018-08-10 02:05:02', 1, '2018-08-18 14:07:58', '2018-08-10 02:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_type`
--

CREATE TABLE `inspection_type` (
  `InspectionTypeID` int(10) NOT NULL,
  `InspectionTypeName` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_type`
--

INSERT INTO `inspection_type` (`InspectionTypeID`, `InspectionTypeName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Open Door', 1, '0000-00-00 00:00:00', '2018-08-10 01:55:14'),
(2, 'Get Inside Open Trunk And Fuel Lid', 1, '0000-00-00 00:00:00', '2018-08-17 06:20:36'),
(3, 'Close Door Open Next Door', 1, '0000-00-00 00:00:00', '2018-08-17 06:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `job_description`
--

CREATE TABLE `job_description` (
  `JobDescriptionID` int(10) NOT NULL,
  `JobDescription` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_description`
--

INSERT INTO `job_description` (`JobDescriptionID`, `JobDescription`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Service Advisor', 1, '0000-00-00 00:00:00', '2018-08-17 05:59:51'),
(2, 'Checklister', 1, '2018-08-28 12:13:07', '2018-08-17 05:59:51'),
(3, 'Inventory Manager', 1, '2018-10-01 13:36:40', '2018-08-17 05:59:51'),
(4, 'Quality Analyst', 1, '2018-10-01 13:36:46', '2018-08-17 05:59:51'),
(5, 'Mechanic', 1, '0000-00-00 00:00:00', '2018-08-17 05:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `JobOrderID` int(10) NOT NULL,
  `EstimateID` int(10) DEFAULT NULL,
  `AutomobileID` int(10) DEFAULT NULL,
  `InspectionID` int(10) DEFAULT NULL,
  `PersonnelPerformedID` int(10) DEFAULT NULL,
  `ServiceBayID` int(10) NOT NULL,
  `PromoID` int(10) DEFAULT NULL,
  `PackageID` int(10) DEFAULT NULL,
  `DiscountID` int(10) DEFAULT NULL,
  `UserID` int(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `JobStartDate` timestamp NULL DEFAULT NULL,
  `JobEndDate` timestamp NULL DEFAULT NULL,
  `Terms_Agreement` varchar(8000) DEFAULT NULL,
  `Diagnosis` varchar(8000) DEFAULT NULL,
  `Agreement_Timestamp` datetime NOT NULL,
  `Release_Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `JobDuration` smallint(3) DEFAULT NULL,
  `TotalAmountDue` decimal(14,2) DEFAULT NULL,
  `DiscountedAmount` decimal(14,2) NOT NULL,
  `isFinalized` tinyint(1) DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_order`
--

INSERT INTO `job_order` (`JobOrderID`, `EstimateID`, `AutomobileID`, `InspectionID`, `PersonnelPerformedID`, `ServiceBayID`, `PromoID`, `PackageID`, `DiscountID`, `UserID`, `Status`, `JobStartDate`, `JobEndDate`, `Terms_Agreement`, `Diagnosis`, `Agreement_Timestamp`, `Release_Timestamp`, `JobDuration`, `TotalAmountDue`, `DiscountedAmount`, `isFinalized`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 3, 1, 1, NULL, 1, NULL, NULL, NULL, 1, '', NULL, NULL, NULL, NULL, '2018-08-10 00:00:00', '2018-10-11 14:34:50', NULL, NULL, '4500.00', 0, 1, '2018-10-11 14:34:50', '2018-08-10 02:04:34'),
(15, 1, 2, NULL, NULL, 1, 1, NULL, NULL, 1, 'Ongoing', NULL, NULL, NULL, NULL, '2018-08-14 23:37:27', '2018-10-11 14:34:50', NULL, NULL, '499.00', 0, 1, '2018-10-11 14:34:50', '2018-08-14 15:37:27'),
(16, 8, 3, NULL, NULL, 1, 1, NULL, NULL, 1, '', NULL, NULL, NULL, NULL, '2018-08-14 23:39:45', '2018-10-11 14:34:50', NULL, NULL, '499.00', 0, 1, '2018-10-11 14:34:50', '2018-08-14 15:39:45'),
(20, 2, 4, NULL, NULL, 1, 1, 1, 1, 1, '', NULL, NULL, NULL, NULL, '2018-08-14 23:59:22', '2018-10-11 14:34:50', NULL, NULL, '499.00', 0, 1, '2018-10-11 14:34:50', '2018-08-14 15:59:22'),
(22, 9, 5, NULL, NULL, 1, 1, 1, 1, 1, '', NULL, NULL, NULL, NULL, '2018-08-15 01:53:27', '2018-10-11 14:34:50', NULL, NULL, '499.00', 0, 1, '2018-10-11 14:34:50', '2018-08-14 17:53:27'),
(23, 94, 15, NULL, NULL, 2, NULL, NULL, NULL, 1, 'Pending', '2018-09-30 05:12:27', NULL, NULL, NULL, '2018-08-24 03:50:56', '2018-10-11 14:34:50', NULL, NULL, '499.00', 0, 1, '2018-10-11 14:34:50', '2018-08-23 19:50:56'),
(25, 42, 25, NULL, NULL, 3, NULL, NULL, NULL, 1, 'Ongoing', '2018-10-01 09:54:55', NULL, NULL, NULL, '2018-09-16 06:54:28', '2018-10-11 14:34:50', NULL, NULL, '499.00', 0, 1, '2018-10-11 14:34:50', '2018-09-15 22:54:28'),
(26, 25, 12, NULL, NULL, 2, NULL, NULL, NULL, 1, 'Ongoing', NULL, NULL, NULL, NULL, '2018-10-01 14:20:15', '2018-10-11 14:34:50', NULL, '51200.75', '0.00', 0, 1, '2018-10-11 14:34:50', '2018-10-01 06:20:15'),
(31, 106, 22, NULL, NULL, 2, NULL, NULL, 3, 1, 'Finished', '2018-10-04 06:16:29', NULL, NULL, NULL, '2018-10-01 15:07:44', '2018-10-11 14:34:50', NULL, '2625.00', '875.00', 0, 1, '2018-10-11 14:34:50', '2018-10-01 07:07:44'),
(45, 111, 39, NULL, NULL, 1, NULL, NULL, 2, 1, 'Pending', '2018-10-04 07:29:27', NULL, NULL, NULL, '2018-10-04 07:21:18', '2018-10-11 14:34:50', NULL, '38160.00', '9540.00', 0, 1, '2018-10-11 14:34:50', '2018-10-03 23:21:18'),
(48, 109, 42, NULL, NULL, 3, NULL, NULL, 1, 1, 'Ongoing', NULL, NULL, NULL, NULL, '2018-10-04 09:02:03', '2018-10-11 14:34:50', NULL, '52560.00', '13140.00', 0, 1, '2018-10-11 14:34:50', '2018-10-04 01:02:03'),
(49, 110, 26, NULL, NULL, 2, NULL, NULL, 2, 1, 'Pending', NULL, NULL, NULL, NULL, '2018-10-04 10:26:48', '2018-10-11 14:34:50', NULL, '36700.00', '24960.00', 0, 1, '2018-10-11 14:34:50', '2018-10-04 02:26:48'),
(50, 1, 2, NULL, NULL, 3, 1, 1, 1, 1, 'Ongoing', NULL, NULL, NULL, NULL, '2018-10-04 10:41:09', '2018-10-11 14:34:50', NULL, '56400.75', '40960.60', 0, 1, '2018-10-11 14:34:50', '2018-10-04 02:41:09'),
(51, 1, 2, NULL, NULL, 3, 1, 1, 1, 1, 'Ongoing', NULL, NULL, NULL, NULL, '2018-10-04 10:46:49', '2018-10-11 14:34:50', NULL, '51200.75', '0.00', 0, 1, '2018-10-11 14:34:50', '2018-10-04 02:46:49'),
(52, 1, 2, NULL, NULL, 3, 1, 1, 1, 1, 'Ongoing', NULL, NULL, NULL, NULL, '2018-10-04 10:56:01', '2018-10-11 14:34:50', NULL, '27150.00', '27150.00', 0, 1, '2018-10-11 14:34:50', '2018-10-04 02:56:01'),
(54, NULL, 44, NULL, NULL, 1, NULL, NULL, 4, 1, 'Pending', NULL, NULL, NULL, NULL, '2018-10-04 13:49:44', '2018-10-11 14:34:50', NULL, '44100.52', '44100.52', 0, 1, '2018-10-11 14:34:50', '2018-10-04 05:49:44'),
(55, NULL, 45, NULL, NULL, 2, NULL, NULL, 4, 1, 'Pending', NULL, NULL, NULL, NULL, '2018-10-04 13:58:22', '2018-10-11 14:34:50', NULL, '34400.00', '24080.00', 0, 1, '2018-10-11 14:34:50', '2018-10-04 05:58:22'),
(70, 112, 60, NULL, NULL, 2, NULL, NULL, 3, 1, 'Finished', '2018-10-05 06:30:27', NULL, NULL, NULL, '2018-10-05 06:28:40', '2018-10-11 14:34:50', NULL, '38500.00', '28875.00', 0, 1, '2018-10-11 14:34:50', '2018-10-04 22:28:40'),
(84, NULL, 44, NULL, NULL, 2, NULL, NULL, NULL, 1, 'Pending', NULL, NULL, NULL, NULL, '2018-10-07 13:33:56', '2018-10-11 14:34:50', NULL, '54699.75', '54699.75', 0, 1, '2018-10-11 14:34:50', '2018-10-07 05:33:56'),
(85, 113, 61, NULL, NULL, 2, NULL, NULL, 3, 1, 'Finished', '2018-10-12 03:29:19', NULL, NULL, NULL, '2018-10-12 03:13:48', '2018-10-12 03:30:36', NULL, '44500.00', '33375.00', 0, 1, '2018-10-12 03:30:36', '2018-10-11 19:13:48'),
(87, 105, 62, NULL, NULL, 2, NULL, NULL, NULL, 1, 'Pending', NULL, NULL, NULL, NULL, '2018-10-13 14:59:38', '2018-10-13 14:59:38', NULL, '52800.75', '52800.75', 0, 1, '2018-10-13 06:59:38', '2018-10-13 06:59:38'),
(88, 105, 63, NULL, NULL, 2, NULL, NULL, NULL, 1, 'Pending', NULL, NULL, NULL, NULL, '2018-10-13 15:00:48', '2018-10-13 15:01:28', NULL, '53300.75', '53300.75', 0, 1, '2018-10-13 07:01:28', '2018-10-13 07:00:48'),
(89, NULL, 64, NULL, NULL, 1, NULL, NULL, 3, 1, 'Pending', '2018-10-13 15:05:24', NULL, NULL, NULL, '2018-10-13 15:05:01', '2018-10-13 15:05:24', NULL, '11499.00', '8624.25', 0, 1, '2018-10-13 15:05:24', '2018-10-13 07:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `job_order_backjob`
--

CREATE TABLE `job_order_backjob` (
  `BackJobID` int(10) NOT NULL,
  `JobOrderID` int(10) DEFAULT NULL,
  `ServiceBayID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `JobStartDate` timestamp NULL DEFAULT NULL,
  `JobEndDate` timestamp NULL DEFAULT NULL,
  `Diagnosis` varchar(8000) DEFAULT NULL,
  `JobDuration` smallint(3) DEFAULT NULL,
  `Cost` decimal(14,2) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_schedule`
--

CREATE TABLE `job_schedule` (
  `ScheduleID` int(10) NOT NULL,
  `ProcessID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `PersonnelID` int(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `StartDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FinishDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `MaintenanceID` int(10) NOT NULL,
  `MaintenanceChecklistID` int(10) NOT NULL,
  `CheckAdjust` tinyint(1) NOT NULL,
  `Inspect` tinyint(1) NOT NULL,
  `MaterialRequired` tinyint(1) NOT NULL,
  `CarriedOut` tinyint(1) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_checklist`
--

CREATE TABLE `maintenance_checklist` (
  `MaintenanceChecklistID` int(10) NOT NULL,
  `MaintenanceCheckCategory` varchar(100) NOT NULL,
  `MaintenanceCheckItem` varchar(100) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_header`
--

CREATE TABLE `maintenance_header` (
  `MaintenanceID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `Mileage` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_backjob`
--

CREATE TABLE `package_backjob` (
  `PackageBackjobID` int(10) NOT NULL,
  `BackJobID` int(10) NOT NULL,
  `PackageID` int(10) NOT NULL,
  `DateTime` datetime DEFAULT NULL,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_header`
--

CREATE TABLE `package_header` (
  `PackageID` int(10) NOT NULL,
  `PackageName` varchar(255) NOT NULL,
  `Price` decimal(14,2) NOT NULL,
  `WarrantyDuration` int(3) DEFAULT NULL,
  `WarrantyDurationMode` varchar(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_header`
--

INSERT INTO `package_header` (`PackageID`, `PackageName`, `Price`, `WarrantyDuration`, `WarrantyDurationMode`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Summer Package', '999.00', 3, 'weeks', 1, '0000-00-00 00:00:00', '2018-08-10 01:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `package_product_inclusions`
--

CREATE TABLE `package_product_inclusions` (
  `PackageID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_service_inclusions`
--

CREATE TABLE `package_service_inclusions` (
  `PackageID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `TotalPayment` decimal(14,2) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personnel_header`
--

CREATE TABLE `personnel_header` (
  `PersonnelID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) NOT NULL,
  `Birthday` date NOT NULL,
  `Position` varchar(50) NOT NULL,
  `ContactNo` varchar(13) NOT NULL,
  `CompleteAddress` varchar(255) NOT NULL,
  `Barangay` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `Province` varchar(40) DEFAULT NULL,
  `EmailAddress` varchar(40) NOT NULL,
  `image` int(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel_header`
--

INSERT INTO `personnel_header` (`PersonnelID`, `FirstName`, `MiddleName`, `LastName`, `Birthday`, `Position`, `ContactNo`, `CompleteAddress`, `Barangay`, `City`, `Province`, `EmailAddress`, `image`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'John Paul ', '', 'Repolona', '0000-00-00', '', '09155810953', 'Fairview, Quezon City', '', '', '', 'jpr@gmail.com', 0, 1, '2018-08-21 15:17:03', '2018-08-03 07:46:20'),
(2, 'Juan ', 'Crisostomo ', 'Dela Cruz', '0000-00-00', '', '09348110091', 'Intramuros, Manila City', NULL, NULL, NULL, 'juan@mail.com', 0, 1, '0000-00-00 00:00:00', '2018-08-17 05:58:37'),
(3, 'Pedro ', 'Cruz ', 'Mayo', '0000-00-00', '', '09381109091', 'Quezon City', NULL, NULL, NULL, 'perdro@mail.com', 0, 1, '2018-08-24 05:33:31', '2018-08-17 05:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `personnel_job`
--

CREATE TABLE `personnel_job` (
  `PersonnelJobID` int(10) NOT NULL,
  `PersonnelID` int(10) NOT NULL,
  `JobDescriptionID` int(40) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel_job`
--

INSERT INTO `personnel_job` (`PersonnelJobID`, `PersonnelID`, `JobDescriptionID`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 2, 5, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:20'),
(2, 2, 4, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:20'),
(3, 2, 3, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:20'),
(4, 2, 2, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:20'),
(5, 3, 5, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:20'),
(6, 3, 4, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:20'),
(7, 3, 2, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:20'),
(8, 1, 1, 1, '0000-00-00 00:00:00', '2018-08-17 06:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `personnel_job_performed`
--

CREATE TABLE `personnel_job_performed` (
  `PersonnelPerformedID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `PersonnelJobID` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel_job_performed`
--

INSERT INTO `personnel_job_performed` (`PersonnelPerformedID`, `JobOrderID`, `PersonnelJobID`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1, '0000-00-00 00:00:00', '2018-09-01 13:02:21'),
(10, 45, 5, 1, '2018-10-03 23:21:18', '2018-10-03 23:21:18'),
(11, 45, 5, 1, '2018-10-03 23:21:18', '2018-10-03 23:21:18'),
(14, 48, 5, 1, '2018-10-04 01:02:03', '2018-10-04 01:02:03'),
(15, 48, 5, 1, '2018-10-04 01:02:03', '2018-10-04 01:02:03'),
(20, 70, 1, 1, '2018-10-04 22:28:40', '2018-10-04 22:28:40'),
(47, 84, 5, 1, '2018-10-07 05:33:56', '2018-10-07 05:33:56'),
(48, 84, 5, 1, '2018-10-07 05:33:57', '2018-10-07 05:33:57'),
(49, 85, 5, 1, '2018-10-11 19:13:48', '2018-10-11 19:13:48'),
(50, 87, 5, 1, '2018-10-13 06:59:38', '2018-10-13 06:59:38'),
(51, 88, 1, 1, '2018-10-13 07:00:48', '2018-10-13 07:00:48'),
(52, 89, 5, 1, '2018-10-13 07:05:01', '2018-10-13 07:05:01'),
(53, 89, 5, 1, '2018-10-13 07:05:02', '2018-10-13 07:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `personnel_skill`
--

CREATE TABLE `personnel_skill` (
  `PersonnelSkillID` int(10) NOT NULL,
  `SkillID` int(10) NOT NULL,
  `PersonnelID` int(10) NOT NULL,
  `isMastered` tinyint(1) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel_skill`
--

INSERT INTO `personnel_skill` (`PersonnelSkillID`, `SkillID`, `PersonnelID`, `isMastered`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 2, 0, 1, '2018-09-20 14:27:05', '2018-09-20 14:27:05'),
(2, 2, 2, 0, 1, '2018-09-20 14:27:05', '2018-09-20 14:27:05'),
(3, 3, 3, 0, 1, '2018-09-20 15:01:27', '2018-09-20 15:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `personnel_workload`
--

CREATE TABLE `personnel_workload` (
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PersonnelID` int(10) NOT NULL,
  `WorkStartDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `InitialWorkload` int(3) NOT NULL DEFAULT '0',
  `ActualWorkload` int(3) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `ProcessID` int(10) NOT NULL,
  `ProcessName` varchar(100) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`ProcessID`, `ProcessName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Warm up the engine', 1, '0000-00-00 00:00:00', '2018-08-16 16:40:23'),
(2, 'Find and unscrew the drain plug', 1, '0000-00-00 00:00:00', '2018-08-16 16:40:23'),
(3, 'Unscrew the oil filter and empty it', 1, '0000-00-00 00:00:00', '2018-08-16 16:40:23'),
(4, 'Attach the new filter', 1, '0000-00-00 00:00:00', '2018-08-16 16:40:23'),
(5, 'Screw the oil drain plug', 1, '0000-00-00 00:00:00', '2018-08-16 16:40:23'),
(6, 'Pour the oil and check the level', 1, '0000-00-00 00:00:00', '2018-08-16 16:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `process_service`
--

CREATE TABLE `process_service` (
  `ProcessID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process_service`
--

INSERT INTO `process_service` (`ProcessID`, `ServiceID`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 2, 1, '0000-00-00 00:00:00', '2018-08-16 16:44:10'),
(2, 2, 1, '0000-00-00 00:00:00', '2018-08-16 16:44:10'),
(3, 2, 1, '0000-00-00 00:00:00', '2018-08-16 16:44:10'),
(4, 2, 1, '0000-00-00 00:00:00', '2018-08-16 16:44:10'),
(5, 2, 1, '0000-00-00 00:00:00', '2018-08-16 16:44:10'),
(6, 2, 1, '0000-00-00 00:00:00', '2018-08-16 16:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(10) NOT NULL,
  `ProductTypeID` int(10) NOT NULL,
  `ProductBrandID` int(10) NOT NULL,
  `ProductUnitTypeID` int(10) DEFAULT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Price` decimal(14,2) NOT NULL,
  `Size` int(4) NOT NULL,
  `WarrantyDuration` int(3) DEFAULT NULL,
  `WarrantyDurationMode` varchar(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductTypeID`, `ProductBrandID`, `ProductUnitTypeID`, `ProductName`, `Description`, `Price`, `Size`, `WarrantyDuration`, `WarrantyDurationMode`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1, 'Semi Synthetic Oil', NULL, '500.00', 1, NULL, NULL, 1, '2018-07-31 15:13:49', '0000-00-00 00:00:00'),
(2, 2, 2, 2, 'Scotch\'s Electrical Tape', NULL, '150.00', 1, NULL, NULL, 0, '2018-10-04 17:51:03', '0000-00-00 00:00:00'),
(3, 13, 5, 3, 'Piston', NULL, '700.00', 1, NULL, NULL, 1, '2018-10-04 17:50:53', '2018-08-13 09:18:38'),
(4, 15, 3, 3, 'Crank Rods', NULL, '500.00', 1, NULL, NULL, 1, '2018-10-04 17:50:58', '2018-08-13 09:18:38'),
(5, 4, 4, 3, 'Piston', NULL, '499.00', 1, NULL, NULL, 1, '2018-08-28 04:06:59', '2018-08-28 04:06:59'),
(6, 17, 8, 3, 'Leather Cleaner and Protectant', NULL, '2000.00', 1, NULL, NULL, 1, '2018-10-04 18:27:23', '2018-10-04 18:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_backjob`
--

CREATE TABLE `product_backjob` (
  `ProductBackjobID` int(10) NOT NULL,
  `BackJobID` int(10) NOT NULL,
  `ProductUsedID` int(10) DEFAULT NULL,
  `ServicePerformedID` int(10) NOT NULL,
  `ProductID` int(10) DEFAULT NULL,
  `Quantity` tinyint(5) NOT NULL,
  `QuantityUsed` tinyint(5) NOT NULL,
  `DateTime` datetime DEFAULT NULL,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `ProductBrandID` int(10) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`ProductBrandID`, `BrandName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Petron', 1, '2018-07-31 15:14:45', '0000-00-00 00:00:00'),
(2, 'Scotch', 1, '2018-07-31 15:14:45', '0000-00-00 00:00:00'),
(3, 'Denso', 1, '0000-00-00 00:00:00', '2018-08-13 08:44:24'),
(4, 'Continental', 1, '2018-08-28 12:04:19', '2018-08-13 08:44:24'),
(5, 'Sumitomo', 1, '0000-00-00 00:00:00', '2018-08-13 08:44:24'),
(6, 'Schaeffler', 1, '0000-00-00 00:00:00', '2018-08-13 08:44:24'),
(7, 'Mitsubishi', 1, '0000-00-00 00:00:00', '2018-08-13 08:44:24'),
(8, 'Raggtopp', 1, '2018-10-04 18:25:06', '2018-10-04 18:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `ProductCategoryID` int(10) NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`ProductCategoryID`, `CategoryName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Mechanical', 1, '2018-07-31 15:15:02', '0000-00-00 00:00:00'),
(2, 'Electrical', 1, '2018-07-31 15:15:02', '0000-00-00 00:00:00'),
(3, 'Brake', 1, '2018-08-13 00:50:28', '2018-08-13 00:50:28'),
(4, 'Accessory', 1, '2018-08-28 12:02:05', '2018-08-13 00:50:42'),
(5, 'Air Intake', 1, '2018-08-13 00:50:58', '2018-08-13 00:50:58'),
(6, 'Auto Body Parts', 1, '2018-08-13 00:51:11', '2018-08-13 00:51:11'),
(7, 'Body Electrical', 1, '2018-08-13 00:51:31', '2018-08-13 00:51:31'),
(8, 'Body Mechanical & Trim', 1, '2018-08-13 00:51:46', '2018-08-13 00:51:46'),
(9, 'Climate Control', 1, '2018-08-13 00:52:18', '2018-08-13 00:52:18'),
(10, 'Cooling System', 1, '2018-08-13 00:52:34', '2018-08-13 00:52:34'),
(11, 'Driveshaft & Axle', 1, '2018-08-13 00:53:00', '2018-08-13 00:53:00'),
(12, 'Engine Electrical', 1, '2018-08-13 00:53:20', '2018-08-13 00:53:20'),
(13, 'Exhaust', 1, '2018-08-13 00:53:46', '2018-08-13 00:53:46'),
(14, 'Fuel Delivery', 1, '2018-08-13 00:53:58', '2018-08-13 00:53:58'),
(15, 'Interior Styling', 1, '2018-08-13 00:54:09', '2018-08-13 00:54:09'),
(16, 'Steering', 1, '2018-08-13 00:54:20', '2018-08-13 00:54:20'),
(17, 'Suspension', 1, '2018-08-13 00:54:31', '2018-08-13 00:54:31'),
(18, 'Transmission', 1, '2018-08-13 00:54:44', '2018-08-13 00:54:44'),
(19, 'test', 0, '2018-08-19 09:56:42', '2018-08-19 01:56:21'),
(20, 'Lubricant', 1, '2018-08-28 04:02:20', '2018-08-28 04:02:20'),
(21, 'Accessory@&', 0, '2018-08-31 04:48:23', '2018-08-30 20:47:19'),
(22, 'Accessory$', 0, '2018-08-31 04:48:32', '2018-08-30 20:47:57'),
(23, 'Test5', 0, '2018-09-02 09:11:33', '2018-09-02 01:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_damaged`
--

CREATE TABLE `product_damaged` (
  `ProductDamagedID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `State` varchar(40) NOT NULL,
  `Quantity` smallint(4) NOT NULL,
  `Date` date NOT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_service`
--

CREATE TABLE `product_service` (
  `ProductServiceID` int(10) NOT NULL,
  `ProductID` int(10) DEFAULT NULL,
  `ServiceID` int(10) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_service`
--

INSERT INTO `product_service` (`ProductServiceID`, `ProductID`, `ServiceID`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 3, 1, b'1', '0000-00-00 00:00:00', '2018-08-13 09:48:56'),
(2, 4, 1, b'1', '0000-00-00 00:00:00', '2018-08-13 09:49:15'),
(3, 1, 2, b'1', '0000-00-00 00:00:00', '2018-08-13 10:33:12'),
(4, 6, 4, b'1', '2018-10-04 18:27:40', '2018-08-28 12:10:36'),
(5, 1, 4, b'1', '2018-10-04 18:18:24', '2018-08-28 12:10:50'),
(6, 1, 2, b'1', '2018-10-04 18:18:26', '2018-08-28 12:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ProductTypeID` int(10) NOT NULL,
  `ProductCategoryID` int(10) NOT NULL,
  `ProductTypeName` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ProductTypeID`, `ProductCategoryID`, `ProductTypeName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 'Lubricant', 1, '2018-07-31 15:15:41', '0000-00-00 00:00:00'),
(2, 2, 'Electrical Tape', 1, '2018-07-31 15:15:41', '0000-00-00 00:00:00'),
(3, 1, 'Connecting Rod', 1, '0000-00-00 00:00:00', '2018-08-13 08:34:44'),
(4, 1, 'Connecting Piston', 1, '0000-00-00 00:00:00', '2018-08-13 08:35:33'),
(5, 1, 'Main Bearings', 1, '0000-00-00 00:00:00', '2018-08-13 08:35:33'),
(6, 1, 'Push Rods', 1, '0000-00-00 00:00:00', '2018-08-13 08:36:54'),
(7, 1, 'Bolts', 1, '0000-00-00 00:00:00', '2018-08-13 08:36:54'),
(8, 1, 'Harmonic Balancer', 1, '0000-00-00 00:00:00', '2018-08-13 08:38:39'),
(9, 1, 'Lifters', 1, '2018-08-13 08:45:47', '2018-08-13 08:38:39'),
(10, 1, 'Valve', 1, '0000-00-00 00:00:00', '2018-08-13 08:39:15'),
(11, 1, 'Spring', 1, '0000-00-00 00:00:00', '2018-08-13 08:39:15'),
(12, 1, 'Rotator', 1, '0000-00-00 00:00:00', '2018-08-13 08:39:56'),
(13, 1, 'Piston', 1, '0000-00-00 00:00:00', '2018-08-13 08:39:56'),
(14, 1, 'Camshafts', 1, '0000-00-00 00:00:00', '2018-08-13 08:40:45'),
(15, 1, 'Crank Rods', 1, '0000-00-00 00:00:00', '2018-08-13 08:40:45'),
(16, 5, 'Oil', 1, '2018-08-28 04:03:16', '2018-08-28 04:03:16'),
(17, 15, 'Protectant', 1, '2018-10-04 18:26:26', '2018-10-04 18:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_unit_type`
--

CREATE TABLE `product_unit_type` (
  `ProductUnitTypeID` int(10) NOT NULL,
  `UnitTypeName` varchar(50) NOT NULL,
  `Unit` char(3) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_unit_type`
--

INSERT INTO `product_unit_type` (`ProductUnitTypeID`, `UnitTypeName`, `Unit`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Liter', 'L', 1, '2018-10-04 18:02:46', '0000-00-00 00:00:00'),
(2, 'Meter', 'm', 1, '2018-07-31 15:17:40', '0000-00-00 00:00:00'),
(3, 'Piece', 'pc', 1, '2018-08-19 10:55:14', '2018-08-13 09:16:18'),
(4, 'Millimeter', 'mL', 1, '2018-10-04 18:03:03', '2018-08-17 06:27:44'),
(5, 'Grams', 'g', 1, '0000-00-00 00:00:00', '2018-08-17 06:27:44'),
(6, 'test', 't', 0, '2018-08-19 09:43:51', '2018-08-19 01:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_used`
--

CREATE TABLE `product_used` (
  `ProductUsedID` int(10) NOT NULL,
  `JobOrderID` int(10) DEFAULT NULL,
  `EstimateID` int(10) DEFAULT NULL,
  `SalesID` int(10) DEFAULT NULL,
  `ServicePerformedID` int(10) DEFAULT NULL,
  `ProductID` int(10) DEFAULT NULL,
  `Quantity` tinyint(5) NOT NULL,
  `QuantityUsed` tinyint(10) NOT NULL,
  `DateUsed` date NOT NULL,
  `SubTotal` decimal(14,2) NOT NULL,
  `isCustomerProvided` bit(1) NOT NULL DEFAULT b'0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_used`
--

INSERT INTO `product_used` (`ProductUsedID`, `JobOrderID`, `EstimateID`, `SalesID`, `ServicePerformedID`, `ProductID`, `Quantity`, `QuantityUsed`, `DateUsed`, `SubTotal`, `isCustomerProvided`, `isActive`, `updated_at`, `created_at`) VALUES
(1, NULL, 1, NULL, 1, 4, 2, 0, '2018-08-24', '500.00', b'0', 1, '2018-08-24 14:49:12', '2018-08-24 01:09:38'),
(2, NULL, 1, NULL, 1, 3, 3, 0, '2018-08-24', '900.00', b'0', 1, '2018-08-24 14:49:21', '2018-08-24 01:09:38'),
(3, NULL, 1, NULL, 2, 1, 2, 0, '2018-08-24', '300.00', b'0', 1, '2018-08-24 14:49:27', '2018-08-24 01:09:58'),
(4, 25, 42, NULL, 3, 4, 2, 0, '2018-08-24', '799.00', b'0', 1, '2018-10-01 01:44:41', '2018-08-24 02:30:37'),
(5, 25, 42, NULL, 3, 3, 3, 0, '2018-08-24', '900.00', b'0', 1, '2018-10-01 01:44:41', '2018-08-24 02:30:37'),
(6, 25, 42, NULL, 4, 1, 2, 0, '2018-08-24', '300.00', b'0', 1, '2018-10-01 01:44:41', '2018-08-24 02:31:07'),
(7, NULL, 50, NULL, 5, 4, 1, 0, '2018-08-24', '500.00', b'0', 1, '2018-08-24 15:26:28', '2018-08-24 07:17:53'),
(8, NULL, 51, NULL, 6, 1, 1, 0, '2018-08-24', '500.00', b'0', 1, '2018-08-24 15:26:32', '2018-08-24 07:21:19'),
(13, NULL, 56, NULL, 12, 3, 5, 0, '2018-08-25', '50000.75', b'0', 1, '2018-08-25 09:12:37', '2018-08-25 01:00:59'),
(14, NULL, 56, NULL, 12, 4, 1, 0, '2018-08-25', '700.00', b'0', 1, '2018-08-25 01:00:59', '2018-08-25 01:00:59'),
(15, NULL, 56, NULL, 12, 1, 3, 0, '2018-08-25', '500.00', b'0', 1, '2018-08-25 09:12:42', '2018-08-25 01:00:59'),
(19, NULL, 62, NULL, 19, 3, 1, 0, '2018-08-25', '50000.75', b'0', 1, '2018-08-25 01:48:36', '2018-08-25 01:48:36'),
(20, NULL, 62, NULL, 19, 4, 3, 0, '2018-08-25', '2100.00', b'0', 1, '2018-08-25 01:48:36', '2018-08-25 01:48:36'),
(21, NULL, 62, NULL, 19, 1, 2, 0, '2018-08-25', '1000.00', b'0', 1, '2018-08-25 01:48:36', '2018-08-25 01:48:36'),
(22, NULL, 62, NULL, 20, 3, 1, 0, '2018-08-25', '50000.75', b'0', 1, '2018-08-25 01:48:36', '2018-08-25 01:48:36'),
(23, NULL, 62, NULL, 20, 4, 3, 0, '2018-08-25', '2100.00', b'0', 1, '2018-08-25 01:48:36', '2018-08-25 01:48:36'),
(24, NULL, 62, NULL, 20, 1, 2, 0, '2018-08-25', '1000.00', b'0', 1, '2018-08-25 01:48:36', '2018-08-25 01:48:36'),
(25, NULL, 73, NULL, 32, 3, 6, 0, '2018-08-25', '300004.50', b'0', 1, '2018-08-25 06:07:21', '2018-08-25 06:07:21'),
(26, NULL, 73, NULL, 32, 1, 4, 0, '2018-08-25', '2800.00', b'0', 1, '2018-08-25 06:07:21', '2018-08-25 06:07:21'),
(27, NULL, 73, NULL, 33, 3, 6, 0, '2018-08-25', '300004.50', b'0', 1, '2018-08-25 06:07:21', '2018-08-25 06:07:21'),
(28, NULL, 73, NULL, 33, 1, 4, 0, '2018-08-25', '2800.00', b'0', 1, '2018-08-25 06:07:21', '2018-08-25 06:07:21'),
(50, NULL, 89, NULL, 53, 3, 4, 0, '2018-08-25', '2800.00', b'0', 1, '2018-08-25 09:56:44', '2018-08-25 09:56:44'),
(51, NULL, 89, NULL, 53, 4, 2, 0, '2018-08-25', '1000.00', b'0', 1, '2018-08-25 09:56:44', '2018-08-25 09:56:44'),
(52, NULL, 92, NULL, 56, 3, 7, 0, '2018-08-25', '4900.00', b'0', 1, '2018-08-25 10:04:51', '2018-08-25 10:04:51'),
(53, NULL, 92, NULL, 56, 4, 7, 0, '2018-08-25', '3500.00', b'0', 1, '2018-08-25 10:04:51', '2018-08-25 10:04:51'),
(54, NULL, 92, NULL, 57, 1, 7, 0, '2018-08-25', '3500.00', b'0', 1, '2018-08-25 10:04:51', '2018-08-25 10:04:51'),
(55, NULL, 93, NULL, 58, 3, 6, 0, '2018-08-25', '4200.00', b'0', 1, '2018-08-25 12:34:55', '2018-08-25 12:34:55'),
(56, NULL, 93, NULL, 58, 4, 3, 0, '2018-08-25', '1500.00', b'0', 1, '2018-08-25 12:34:55', '2018-08-25 12:34:55'),
(57, NULL, 94, NULL, 59, 3, 1, 0, '2018-09-16', '700.00', b'0', 1, '2018-09-15 22:54:29', '2018-08-25 18:41:50'),
(58, NULL, 94, NULL, 59, 4, 5, 0, '2018-09-16', '2500.00', b'0', 1, '2018-09-15 22:54:29', '2018-08-25 18:41:50'),
(59, NULL, 94, NULL, 60, 1, 7, 0, '2018-09-16', '3500.00', b'0', 1, '2018-09-15 22:54:29', '2018-08-25 18:41:50'),
(60, NULL, 100, NULL, 61, 3, 1, 0, '2018-08-27', '700.00', b'0', 1, '2018-08-27 02:11:34', '2018-08-27 02:11:34'),
(61, NULL, 100, NULL, 61, 4, 1, 0, '2018-08-27', '500.00', b'0', 1, '2018-08-27 02:11:34', '2018-08-27 02:11:34'),
(62, NULL, 101, NULL, 62, 3, 10, 0, '2018-08-27', '7000.00', b'0', 1, '2018-08-27 02:14:02', '2018-08-27 02:14:02'),
(63, NULL, 101, NULL, 62, 4, 5, 0, '2018-08-27', '2500.00', b'0', 1, '2018-08-27 02:14:02', '2018-08-27 02:14:02'),
(64, NULL, 102, NULL, 63, 3, 2, 0, '2018-08-27', '1400.00', b'0', 1, '2018-08-27 02:15:46', '2018-08-27 02:15:46'),
(65, NULL, 102, NULL, 63, 4, 3, 0, '2018-08-27', '1500.00', b'0', 1, '2018-08-27 02:15:46', '2018-08-27 02:15:46'),
(66, NULL, 103, NULL, 64, 3, 2, 0, '2018-08-27', '1400.00', b'0', 1, '2018-08-27 02:49:38', '2018-08-27 02:49:38'),
(67, NULL, 104, NULL, 65, 3, 5, 0, '2018-08-27', '3500.00', b'0', 1, '2018-08-27 03:00:21', '2018-08-27 03:00:21'),
(68, 88, 105, NULL, 66, 3, 1, 0, '2018-10-13', '500.00', b'0', 1, '2018-10-13 07:01:28', '2018-08-27 03:02:43'),
(69, NULL, 106, NULL, 67, 3, 5, 0, '2018-08-29', '3500.00', b'0', 1, '2018-08-28 18:35:39', '2018-08-28 18:35:39'),
(70, NULL, 106, NULL, 67, 4, 9, 0, '2018-08-29', '4500.00', b'0', 1, '2018-08-28 18:35:39', '2018-08-28 18:35:39'),
(71, NULL, 107, NULL, 68, 3, 1, 0, '2018-08-29', '700.00', b'0', 1, '2018-08-28 19:00:00', '2018-08-28 19:00:00'),
(72, NULL, 107, NULL, 68, 4, 1, 0, '2018-08-29', '500.00', b'0', 1, '2018-08-28 19:00:00', '2018-08-28 19:00:00'),
(73, NULL, 108, NULL, 69, 3, 5, 0, '2018-08-29', '3500.00', b'0', 1, '2018-08-29 02:29:40', '2018-08-29 02:29:40'),
(74, NULL, 108, NULL, 69, 4, 3, 0, '2018-08-29', '1500.00', b'0', 1, '2018-08-29 02:29:40', '2018-08-29 02:29:40'),
(79, 31, NULL, NULL, 74, 1, 1, 1, '2018-10-01', '500.00', b'0', 1, '2018-10-04 06:16:48', '2018-10-01 07:07:45'),
(81, 48, 109, NULL, 76, 3, 6, 0, '2018-10-04', '4200.00', b'0', 1, '2018-10-04 01:02:03', '2018-10-02 04:15:52'),
(82, 48, 109, NULL, 76, 4, 12, 0, '2018-10-04', '6000.00', b'0', 1, '2018-10-04 01:02:03', '2018-10-02 04:15:52'),
(83, 48, 109, NULL, 77, 1, 3, 0, '2018-10-04', '1500.00', b'0', 1, '2018-10-04 01:02:03', '2018-10-02 04:15:52'),
(84, NULL, 110, NULL, 78, 3, 5, 0, '2018-10-04', '3500.00', b'0', 1, '2018-10-03 22:45:43', '2018-10-03 22:45:43'),
(85, NULL, 110, NULL, 78, 4, 10, 0, '2018-10-04', '5000.00', b'0', 1, '2018-10-03 22:45:43', '2018-10-03 22:45:43'),
(86, NULL, 110, NULL, 79, 1, 1, 0, '2018-10-04', '500.00', b'0', 1, '2018-10-03 22:45:44', '2018-10-03 22:45:44'),
(87, 45, 111, NULL, 80, 3, 0, 0, '2018-10-04', '0.00', b'0', 1, '2018-10-03 23:21:18', '2018-10-03 22:47:06'),
(88, 45, 111, NULL, 80, 4, 0, 0, '2018-10-04', '0.00', b'0', 1, '2018-10-03 23:21:18', '2018-10-03 22:47:06'),
(89, 45, 111, NULL, 81, 1, 0, 0, '2018-10-04', '0.00', b'0', 1, '2018-10-03 23:21:18', '2018-10-03 22:47:06'),
(90, 49, NULL, NULL, 82, 3, 1, 0, '2018-10-04', '700.00', b'0', 1, '2018-10-04 02:26:48', '2018-10-04 02:26:48'),
(91, 49, NULL, NULL, 82, 4, 12, 0, '2018-10-04', '6000.00', b'0', 1, '2018-10-04 02:26:48', '2018-10-04 02:26:48'),
(92, 50, NULL, NULL, 83, 3, 7, 0, '2018-10-04', '4900.00', b'0', 1, '2018-10-04 02:41:09', '2018-10-04 02:41:09'),
(93, 50, NULL, NULL, 83, 4, 3, 0, '2018-10-04', '1500.00', b'0', 1, '2018-10-04 02:41:09', '2018-10-04 02:41:09'),
(94, 51, NULL, NULL, 84, 3, 1, 0, '2018-10-04', '700.00', b'0', 1, '2018-10-04 02:46:49', '2018-10-04 02:46:49'),
(95, 51, NULL, NULL, 84, 4, 1, 0, '2018-10-04', '500.00', b'0', 1, '2018-10-04 02:46:49', '2018-10-04 02:46:49'),
(96, 52, NULL, NULL, 85, 3, 1, 0, '2018-10-04', '700.00', b'0', 1, '2018-10-04 02:56:02', '2018-10-04 02:56:02'),
(97, 52, NULL, NULL, 85, 4, 1, 0, '2018-10-04', '500.00', b'0', 1, '2018-10-04 02:56:02', '2018-10-04 02:56:02'),
(100, 54, NULL, NULL, 87, 3, 5, 0, '2018-10-04', '3500.00', b'0', 1, '2018-10-04 05:49:44', '2018-10-04 05:49:44'),
(101, 54, NULL, NULL, 87, 4, 10, 0, '2018-10-04', '5000.00', b'0', 1, '2018-10-04 05:49:44', '2018-10-04 05:49:44'),
(102, 54, NULL, NULL, 88, 1, 3, 0, '2018-10-04', '1500.00', b'0', 1, '2018-10-04 05:49:44', '2018-10-04 05:49:44'),
(103, 55, NULL, NULL, 89, 3, 2, 0, '2018-10-04', '1400.00', b'0', 1, '2018-10-04 05:58:22', '2018-10-04 05:58:22'),
(104, 55, NULL, NULL, 89, 4, 6, 0, '2018-10-04', '3000.00', b'0', 1, '2018-10-04 05:58:22', '2018-10-04 05:58:22'),
(117, 70, 112, NULL, 96, 3, 5, 5, '2018-10-05', '3500.00', b'0', 1, '2018-10-05 06:31:29', '2018-10-04 22:23:40'),
(118, 70, 112, NULL, 96, 4, 10, 5, '2018-10-05', '5000.00', b'0', 1, '2018-10-07 09:15:21', '2018-10-04 22:23:40'),
(119, 84, NULL, NULL, 97, 4, 1, 0, '2018-10-07', '0.00', b'0', 1, '2018-10-07 05:33:57', '2018-10-07 05:33:57'),
(120, 84, NULL, NULL, 97, 3, 1, 0, '2018-10-07', '0.00', b'0', 1, '2018-10-07 05:33:57', '2018-10-07 05:33:57'),
(121, 84, NULL, NULL, 98, 6, 1, 0, '2018-10-07', '0.00', b'0', 1, '2018-10-07 05:33:57', '2018-10-07 05:33:57'),
(122, 84, NULL, NULL, 98, 1, 1, 0, '2018-10-07', '0.00', b'0', 1, '2018-10-07 05:33:57', '2018-10-07 05:33:57'),
(123, 85, 113, NULL, 99, 3, 5, 5, '2018-10-12', '3500.00', b'0', 1, '2018-10-12 03:30:03', '2018-10-11 19:04:58'),
(124, 85, 113, NULL, 99, 4, 12, 6, '2018-10-12', '6000.00', b'0', 1, '2018-10-12 03:30:03', '2018-10-11 19:04:58'),
(125, 89, NULL, NULL, 100, 6, 3, 3, '2018-10-13', '6000.00', b'0', 1, '2018-10-13 15:13:37', '2018-10-13 07:05:01'),
(126, 89, NULL, NULL, 100, 1, 2, 0, '2018-10-13', '1000.00', b'0', 1, '2018-10-13 07:05:02', '2018-10-13 07:05:02'),
(127, 89, NULL, NULL, 101, 1, 1, 0, '2018-10-13', '500.00', b'0', 1, '2018-10-13 07:05:02', '2018-10-13 07:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_vehicle`
--

CREATE TABLE `product_vehicle` (
  `ProductID` int(11) DEFAULT NULL,
  `ModelID` int(11) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `isActive` bit(1) DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_backjob`
--

CREATE TABLE `promo_backjob` (
  `PromoBackjobID` int(10) NOT NULL,
  `BackJobID` int(10) DEFAULT NULL,
  `PromoID` int(10) NOT NULL,
  `DateTime` datetime DEFAULT NULL,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_freeitems`
--

CREATE TABLE `promo_freeitems` (
  `FreeItemsID` int(3) NOT NULL,
  `ItemName` varchar(10) NOT NULL,
  `Description` varchar(15) NOT NULL,
  `isActive` int(3) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_freeitems`
--

INSERT INTO `promo_freeitems` (`FreeItemsID`, `ItemName`, `Description`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Umbrella', 'Red - 1 pc', 1, '2018-08-24 02:18:19', '2018-08-24 02:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `promo_freeitems_inclusions`
--

CREATE TABLE `promo_freeitems_inclusions` (
  `PromoID` int(3) NOT NULL,
  `FreeItemsID` int(3) NOT NULL,
  `isActive` int(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_freeitems_inclusions`
--

INSERT INTO `promo_freeitems_inclusions` (`PromoID`, `FreeItemsID`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '2018-08-28 00:33:15', '2018-08-28 00:33:15'),
(50, 1, 1, '2018-08-28 01:29:30', '2018-08-28 01:29:30'),
(51, 1, 1, '2018-08-28 01:31:37', '2018-08-28 01:31:37');

-- --------------------------------------------------------

--
-- Table structure for table `promo_header`
--

CREATE TABLE `promo_header` (
  `PromoID` int(10) NOT NULL,
  `PromoName` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Price` decimal(14,2) NOT NULL,
  `WarrantyDuration` int(3) DEFAULT NULL,
  `WarrantyDurationMode` varchar(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_header`
--

INSERT INTO `promo_header` (`PromoID`, `PromoName`, `StartDate`, `EndDate`, `Price`, `WarrantyDuration`, `WarrantyDurationMode`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Summer Promo', '2018-08-01', '2018-08-21', '999.00', 3, 'weeks', 1, '2018-10-04 14:01:56', '2018-08-10 01:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `promo_product_inclusions`
--

CREATE TABLE `promo_product_inclusions` (
  `PromoID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `isFree` bit(1) NOT NULL DEFAULT b'0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_service_inclusions`
--

CREATE TABLE `promo_service_inclusions` (
  `PromoID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SalesID` int(10) NOT NULL,
  `SalesPrice` decimal(14,2) NOT NULL,
  `MarkupPrice` decimal(14,2) NOT NULL,
  `Quantity` smallint(4) NOT NULL,
  `Date` date NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ServiceID` int(10) NOT NULL,
  `ServiceCategoryID` int(10) NOT NULL,
  `ServiceName` varchar(255) NOT NULL,
  `SizeType` varchar(50) DEFAULT NULL,
  `Class` varchar(50) DEFAULT NULL,
  `EstimatedTime` int(3) NOT NULL,
  `InitialPrice` decimal(14,2) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `WarrantyDuration` int(3) DEFAULT NULL,
  `WarrantyDurationMode` varchar(5) DEFAULT NULL,
  `WarrantyMileage` int(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ServiceID`, `ServiceCategoryID`, `ServiceName`, `SizeType`, `Class`, `EstimatedTime`, `InitialPrice`, `Quantity`, `WarrantyDuration`, `WarrantyDurationMode`, `WarrantyMileage`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 'Engine Overhaul', '', '', 360, '2500.00', 0, NULL, NULL, NULL, 1, '2018-08-09 17:59:00', '2018-08-09 17:59:00'),
(2, 3, 'Change Oil', NULL, NULL, 90, '250.00', 4, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '2018-08-13 10:32:49'),
(3, 2, 'Carwash', NULL, NULL, 10, '100.00', 0, NULL, NULL, NULL, 1, '2018-08-19 08:54:54', '2018-08-17 06:41:42'),
(4, 2, 'Interior Detailing', NULL, NULL, 200, '1300.00', 0, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '2018-08-17 06:41:42'),
(5, 2, 'Exterior Detailing', NULL, NULL, 200, '1200.00', 0, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '2018-08-17 06:41:42'),
(6, 1, 'Underchassis', NULL, NULL, 180, '5000.00', 0, NULL, NULL, NULL, 1, '2018-08-17 06:42:19', '2018-08-17 06:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `service_backjob`
--

CREATE TABLE `service_backjob` (
  `ServiceBackjobID` int(10) NOT NULL,
  `BackJobID` int(10) NOT NULL,
  `ServicePerformedID` int(10) NOT NULL,
  `PersonnelPerformedID` int(10) DEFAULT NULL,
  `CurrentStep` tinyint(3) DEFAULT NULL,
  `StartDate` timestamp NULL DEFAULT NULL,
  `EndDate` timestamp NULL DEFAULT NULL,
  `DateTime` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_bay`
--

CREATE TABLE `service_bay` (
  `ServiceBayID` int(10) NOT NULL,
  `ServiceBayName` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_bay`
--

INSERT INTO `service_bay` (`ServiceBayID`, `ServiceBayName`, `Description`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Bay 1', 'Right Bay', 1, '2018-08-09 17:58:31', '2018-08-17 06:43:17'),
(2, 'Bay 2', 'Right Bay', 1, '0000-00-00 00:00:00', '2018-08-17 06:43:03'),
(3, 'Bay 3', 'Left Bay', 1, '0000-00-00 00:00:00', '2018-08-17 06:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `ServiceCategoryID` int(10) NOT NULL,
  `ServiceCategoryName` varchar(100) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`ServiceCategoryID`, `ServiceCategoryName`, `Description`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Mechanical', '', 1, '2018-08-09 17:58:42', '2018-08-09 17:58:42'),
(2, 'Autodetailing', NULL, 1, '0000-00-00 00:00:00', '2018-08-28 12:08:28'),
(3, 'Calibration', NULL, 1, '0000-00-00 00:00:00', '2018-08-12 17:27:02'),
(4, 'Suspension', NULL, 1, '0000-00-00 00:00:00', '2018-08-12 17:27:02'),
(5, 'Test', '', 0, '2018-09-02 09:11:55', '2018-08-19 01:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `service_performed`
--

CREATE TABLE `service_performed` (
  `ServicePerformedID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `JobOrderID` int(10) DEFAULT NULL,
  `EstimateID` int(10) DEFAULT NULL,
  `PersonnelPerformedID` int(10) DEFAULT NULL,
  `CurrentStep` tinyint(3) NOT NULL,
  `StartDate` timestamp NULL DEFAULT NULL,
  `EndDate` timestamp NULL DEFAULT NULL,
  `LaborCost` decimal(14,2) NOT NULL,
  `isPerformed` bit(1) NOT NULL DEFAULT b'0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_performed`
--

INSERT INTO `service_performed` (`ServicePerformedID`, `ServiceID`, `JobOrderID`, `EstimateID`, `PersonnelPerformedID`, `CurrentStep`, `StartDate`, `EndDate`, `LaborCost`, `isPerformed`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, NULL, 1, 1, 0, NULL, NULL, '3000.00', b'0', 1, '0000-00-00 00:00:00', '2018-09-01 13:02:33'),
(2, 2, NULL, 1, 1, 0, NULL, NULL, '899.00', b'0', 1, '0000-00-00 00:00:00', '2018-09-01 13:04:06'),
(3, 1, 25, 42, 1, 7, '2018-10-01 01:54:57', '2018-10-01 09:55:04', '3000.00', b'0', 1, '2018-10-01 09:55:04', '2018-09-01 13:04:06'),
(4, 2, 25, 42, 1, 3, '2018-10-01 01:55:07', NULL, '599.00', b'0', 1, '2018-10-01 09:55:21', '2018-09-01 13:04:06'),
(5, 1, NULL, 50, 1, 0, NULL, NULL, '30000.00', b'0', 1, '2018-08-24 07:17:53', '2018-09-01 13:04:06'),
(6, 2, NULL, 51, 1, 0, NULL, NULL, '3000.00', b'0', 1, '2018-08-24 07:21:19', '2018-09-01 13:04:06'),
(11, 1, NULL, 56, 1, 0, NULL, NULL, '30000.00', b'0', 1, '2018-08-25 01:00:59', '2018-09-01 13:04:06'),
(12, 2, NULL, 56, 1, 0, NULL, NULL, '2000.00', b'0', 1, '2018-08-25 01:00:59', '2018-09-01 13:04:06'),
(16, 2, NULL, 60, 1, 0, NULL, NULL, '2000.00', b'0', 1, '2018-08-25 01:44:23', '2018-09-01 13:04:06'),
(17, 1, NULL, 60, 1, 0, NULL, NULL, '30000.00', b'0', 1, '2018-08-25 01:44:23', '2018-09-01 13:04:06'),
(19, 1, NULL, 62, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-25 01:48:36', '2018-09-01 13:04:06'),
(20, 2, NULL, 62, 1, 0, NULL, NULL, '1000.00', b'0', 1, '2018-08-25 01:48:36', '2018-09-01 13:04:06'),
(21, 1, NULL, 63, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-25 01:54:32', '2018-09-01 13:04:06'),
(22, 2, NULL, 63, 1, 0, NULL, NULL, '3000.00', b'0', 1, '2018-08-25 01:54:32', '2018-09-01 13:04:06'),
(23, 2, NULL, 64, 1, 0, NULL, NULL, '2000.00', b'0', 1, '2018-08-25 02:12:20', '2018-09-01 13:04:06'),
(24, 1, NULL, 64, 1, 0, NULL, NULL, '30000.00', b'0', 1, '2018-08-25 02:12:20', '2018-09-01 13:04:06'),
(25, 1, NULL, 65, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-25 02:20:41', '2018-09-01 13:04:06'),
(26, 2, NULL, 65, 1, 0, NULL, NULL, '3000.00', b'0', 1, '2018-08-25 02:20:41', '2018-09-01 13:04:06'),
(27, 1, NULL, 66, 1, 0, NULL, NULL, '30000.00', b'0', 1, '2018-08-25 05:54:59', '2018-09-01 13:04:06'),
(32, 1, NULL, 73, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-25 06:07:21', '2018-09-01 13:04:06'),
(33, 2, NULL, 73, 1, 0, NULL, NULL, '3000.00', b'0', 1, '2018-08-25 06:07:21', '2018-09-01 13:04:06'),
(34, 1, NULL, 74, 1, 0, NULL, NULL, '30000.00', b'0', 1, '2018-08-25 06:08:58', '2018-09-01 13:04:06'),
(35, 2, NULL, 74, 1, 0, NULL, NULL, '2000.00', b'0', 1, '2018-08-25 06:08:58', '2018-09-01 13:04:06'),
(36, 1, NULL, 75, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-25 06:11:26', '2018-09-01 13:04:06'),
(37, 2, NULL, 75, 1, 0, NULL, NULL, '1000.00', b'0', 1, '2018-08-25 06:11:26', '2018-09-01 13:04:06'),
(38, 1, NULL, 76, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-25 06:16:17', '2018-09-01 13:04:06'),
(39, 2, NULL, 76, 1, 0, NULL, NULL, '1000.00', b'0', 1, '2018-08-25 06:16:17', '2018-09-01 13:04:06'),
(40, 1, NULL, 77, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-25 06:22:01', '2018-09-01 13:04:06'),
(41, 2, NULL, 77, 1, 0, NULL, NULL, '1000.00', b'0', 1, '2018-08-25 06:22:01', '2018-09-01 13:04:06'),
(53, 1, NULL, 89, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-25 09:56:44', '2018-09-01 13:04:06'),
(54, 1, NULL, 90, 1, 0, NULL, NULL, '30000.00', b'0', 1, '2018-08-25 09:59:20', '2018-09-01 13:04:06'),
(55, 1, NULL, 91, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-25 10:01:52', '2018-09-01 13:04:06'),
(56, 1, NULL, 92, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-25 10:04:51', '2018-09-01 13:04:06'),
(57, 2, NULL, 92, 1, 0, NULL, NULL, '1000.00', b'0', 1, '2018-08-25 10:04:51', '2018-09-01 13:04:06'),
(58, 1, NULL, 93, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-25 12:34:55', '2018-09-01 13:04:06'),
(59, 1, 23, 94, NULL, 0, NULL, NULL, '35000.00', b'1', 1, '2018-10-01 03:04:52', '2018-09-01 13:04:06'),
(60, 2, 23, 94, NULL, 0, NULL, NULL, '1000.00', b'0', 1, '2018-10-01 03:04:56', '2018-09-01 13:04:06'),
(61, 1, NULL, 100, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-27 02:11:34', '2018-09-01 13:04:06'),
(62, 1, NULL, 101, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-27 02:14:02', '2018-09-01 13:04:06'),
(63, 1, NULL, 102, 1, 0, NULL, NULL, '35000.00', b'0', 1, '2018-08-27 02:15:46', '2018-09-01 13:04:06'),
(64, 1, NULL, 103, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-27 02:49:38', '2018-09-01 13:04:06'),
(65, 1, NULL, 104, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-27 03:00:21', '2018-09-01 13:04:06'),
(66, 1, 88, 105, 51, 0, NULL, NULL, '50000.75', b'1', 1, '2018-10-13 07:01:28', '2018-09-01 13:04:06'),
(67, 1, NULL, 106, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-28 18:35:39', '2018-09-01 13:04:06'),
(68, 1, NULL, 107, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-28 19:00:00', '2018-09-01 13:04:06'),
(69, 1, NULL, 108, 1, 0, NULL, NULL, '50000.75', b'0', 1, '2018-08-29 02:29:40', '2018-09-01 13:04:06'),
(74, 2, 31, NULL, NULL, 5, '2018-10-03 22:16:39', '2018-10-04 06:16:48', '3000.00', b'1', 1, '2018-10-04 06:16:48', '2018-10-01 07:07:45'),
(76, 1, 48, 109, 14, 0, NULL, NULL, '30000.00', b'1', 1, '2018-10-04 01:02:03', '2018-10-02 04:15:52'),
(77, 2, 48, 109, 15, 0, NULL, NULL, '24000.00', b'1', 1, '2018-10-04 01:02:03', '2018-10-02 04:15:52'),
(78, 1, NULL, 110, NULL, 0, NULL, NULL, '30000.00', b'0', 1, '2018-10-03 22:45:43', '2018-10-03 22:45:43'),
(79, 2, NULL, 110, NULL, 0, NULL, NULL, '2000.00', b'0', 1, '2018-10-03 22:45:43', '2018-10-03 22:45:43'),
(80, 1, 45, 111, 10, 0, '2018-10-03 23:29:29', NULL, '35000.00', b'1', 1, '2018-10-04 07:29:29', '2018-10-03 22:47:06'),
(81, 2, 45, 111, 11, 0, NULL, NULL, '1000.00', b'0', 1, '2018-10-03 23:21:18', '2018-10-03 22:47:06'),
(82, 1, 49, NULL, NULL, 0, NULL, NULL, '30000.00', b'1', 1, '2018-10-04 02:26:48', '2018-10-04 02:26:48'),
(83, 1, 50, NULL, NULL, 0, NULL, NULL, '50000.75', b'1', 1, '2018-10-04 02:41:09', '2018-10-04 02:41:09'),
(84, 1, 51, NULL, NULL, 0, NULL, NULL, '50000.75', b'1', 1, '2018-10-04 02:46:49', '2018-10-04 02:46:49'),
(85, 1, 52, NULL, NULL, 0, NULL, NULL, '35000.00', b'1', 1, '2018-10-04 02:56:02', '2018-10-04 02:56:02'),
(87, 1, 54, NULL, NULL, 0, NULL, NULL, '50000.75', b'1', 1, '2018-10-04 05:49:44', '2018-10-04 05:49:44'),
(88, 2, 54, NULL, NULL, 0, NULL, NULL, '3000.00', b'1', 1, '2018-10-04 05:49:44', '2018-10-04 05:49:44'),
(89, 1, 55, NULL, NULL, 0, NULL, NULL, '30000.00', b'1', 1, '2018-10-04 05:58:22', '2018-10-04 05:58:22'),
(96, 1, 70, 112, 20, 7, '2018-10-04 22:30:36', '2018-10-07 09:15:21', '30000.00', b'1', 1, '2018-10-07 09:15:21', '2018-10-04 22:23:40'),
(97, 1, 84, NULL, 47, 0, NULL, NULL, '50000.75', b'1', 1, '2018-10-07 05:33:57', '2018-10-07 05:33:57'),
(98, 4, 84, NULL, 48, 0, NULL, NULL, '999.00', b'1', 1, '2018-10-07 05:33:57', '2018-10-07 05:33:57'),
(99, 1, 85, 113, 49, 7, '2018-10-11 19:29:38', '2018-10-12 03:30:33', '35000.00', b'1', 1, '2018-10-12 03:30:34', '2018-10-11 19:04:58'),
(100, 4, 89, NULL, 52, 0, '2018-10-13 07:05:27', NULL, '999.00', b'1', 1, '2018-10-13 15:05:27', '2018-10-13 07:05:01'),
(101, 2, 89, NULL, 53, 0, NULL, NULL, '3000.00', b'1', 1, '2018-10-13 07:05:02', '2018-10-13 07:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_price`
--

CREATE TABLE `service_price` (
  `ServicePriceID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `ModelID` int(10) NOT NULL,
  `Price` decimal(14,2) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_price`
--

INSERT INTO `service_price` (`ServicePriceID`, `ServiceID`, `ModelID`, `Price`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '50000.75', 1, '0000-00-00 00:00:00', '2018-08-24 07:50:36'),
(2, 1, 2, '30000.00', 1, '0000-00-00 00:00:00', '2018-08-16 12:09:18'),
(3, 1, 3, '35000.00', 1, '0000-00-00 00:00:00', '2018-08-16 12:09:18'),
(4, 2, 1, '3000.00', 1, '0000-00-00 00:00:00', '2018-08-16 12:09:18'),
(5, 2, 2, '2000.00', 1, '0000-00-00 00:00:00', '2018-08-16 12:09:18'),
(6, 2, 3, '1000.00', 1, '0000-00-00 00:00:00', '2018-08-16 12:09:18'),
(7, 4, 1, '999.00', 1, '2018-10-04 18:21:27', '2018-10-04 18:21:27'),
(8, 4, 5, '2999.00', 1, '2018-10-04 18:21:27', '2018-10-04 18:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `service_skill`
--

CREATE TABLE `service_skill` (
  `ServiceID` int(10) NOT NULL,
  `SkillID` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_skill`
--

INSERT INTO `service_skill` (`ServiceID`, `SkillID`, `isActive`, `updated_at`, `created_at`) VALUES
(4, 1, 1, '0000-00-00 00:00:00', '2018-08-17 06:55:15'),
(5, 1, 1, '0000-00-00 00:00:00', '2018-08-17 06:55:15'),
(6, 3, 1, '0000-00-00 00:00:00', '2018-08-17 06:56:55'),
(1, 3, 1, '0000-00-00 00:00:00', '2018-08-17 06:56:55'),
(1, 2, 1, '2018-10-11 07:30:37', '2018-10-11 07:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `service_steps`
--

CREATE TABLE `service_steps` (
  `ServiceStepID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `Step` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_steps`
--

INSERT INTO `service_steps` (`ServiceStepID`, `ServiceID`, `Step`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 2, 'Find and unscrew the drain plug', 1, '2018-09-18 11:17:40', '2018-09-18 11:17:40'),
(2, 2, 'Unscrew the oil filter and empty it', 1, '2018-09-18 11:17:40', '2018-09-18 11:17:40'),
(3, 2, 'Attach the new filter', 1, '2018-09-18 11:18:06', '2018-09-18 11:18:06'),
(4, 2, 'Screw the oil drain plug', 1, '2018-09-18 11:18:06', '2018-09-18 11:18:06'),
(5, 2, 'Pour the oil and check the level', 1, '2018-09-18 11:18:37', '2018-09-18 11:18:37'),
(6, 1, 'Prepare engine for removal.', 1, '2018-09-18 11:19:15', '2018-09-18 11:19:15'),
(7, 1, 'Remove the engine.', 1, '2018-09-18 11:19:15', '2018-09-18 11:19:15'),
(10, 1, 'Removal of the accessories - Carburetor.', 1, '2018-09-18 11:20:06', '2018-09-18 11:20:06'),
(11, 1, 'Removal of the accessories - Muffler.', 1, '2018-09-18 11:20:06', '2018-09-18 11:20:06'),
(12, 1, 'Removal of the accessories - Flywheel.', 1, '2018-09-18 11:20:24', '2018-09-18 11:20:24'),
(13, 1, 'Removal of the accessories - Ignition.', 1, '2018-09-18 11:20:24', '2018-09-18 11:20:24'),
(14, 1, 'Removal of the accessories - Cylinder head.', 1, '2018-09-18 11:20:36', '2018-09-18 11:20:36'),
(15, 4, 'Dry Clean', 1, '2018-10-05 03:37:18', '2018-10-05 03:37:18'),
(16, 4, 'Remove the leather coverings.', 1, '2018-10-05 03:37:18', '2018-10-05 03:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `skill_header`
--

CREATE TABLE `skill_header` (
  `SkillID` int(10) NOT NULL,
  `Skill` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_header`
--

INSERT INTO `skill_header` (`SkillID`, `Skill`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Auto Detailing', 0, '2018-10-11 08:29:46', '2018-08-17 06:52:13'),
(2, 'Suspension', 1, '0000-00-00 00:00:00', '2018-08-17 06:52:13'),
(3, 'Mechanical', 1, '0000-00-00 00:00:00', '2018-08-17 06:52:13'),
(5, 'Electrical', 1, '0000-00-00 00:00:00', '2018-08-17 06:52:13'),
(6, 'Auto Detailing', 0, '2018-10-11 08:30:12', '2018-08-28 12:13:49'),
(7, 'Auto Detailing', 0, '2018-10-11 08:30:15', '2018-10-11 08:29:57'),
(8, 'Auto Detailing', 1, '2018-10-11 08:30:08', '2018-10-11 08:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `TaxID` int(10) NOT NULL,
  `Tax` int(4) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`TaxID`, `Tax`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '2018-10-13 16:25:59', '2018-10-13 16:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) NOT NULL,
  `Position` varchar(40) NOT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `MiddleName`, `LastName`, `Position`, `Username`, `Password`, `EmailAddress`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Ivann Ashley', 'Reyes', 'Nuguid', 'Admin', NULL, '1234', 'admin02@email.com', 1, '0000-00-00 00:00:00', '2018-08-12 17:27:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`AutomobileID`),
  ADD KEY `FK_Automobile_Model` (`ModelID`),
  ADD KEY `FK_Automobile_Customer` (`CustomerID`);

--
-- Indexes for table `automobile_make`
--
ALTER TABLE `automobile_make`
  ADD PRIMARY KEY (`MakeID`);

--
-- Indexes for table `automobile_mileage`
--
ALTER TABLE `automobile_mileage`
  ADD PRIMARY KEY (`MileageID`),
  ADD KEY `FK_AutoMileage_Automobile` (`AutomobileID`);

--
-- Indexes for table `automobile_model`
--
ALTER TABLE `automobile_model`
  ADD PRIMARY KEY (`ModelID`),
  ADD KEY `FK_Model_Make` (`MakeID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`ComplaintID`),
  ADD KEY `FK_Problem_JobOrder` (`JobOrderID`),
  ADD KEY `FK_Problem_Estimate` (`EstimateID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`DiscountID`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`EstimateID`),
  ADD KEY `FK_Estimate_Automobile` (`AutomobileID`),
  ADD KEY `FK_Estimate_Inspection` (`InspectionID`),
  ADD KEY `FK_Estimate_Discount` (`DiscountID`),
  ADD KEY `FK_Estimate_Personnel` (`PersonnelID`),
  ADD KEY `FK_Estimate_ServiceBay` (`ServiceBayID`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD KEY `FK_Inspection_InspHeader` (`InspectionID`),
  ADD KEY `FK_Inspection_InspChecklist` (`InspectionChecklistID`);

--
-- Indexes for table `inspection_checklist`
--
ALTER TABLE `inspection_checklist`
  ADD PRIMARY KEY (`InspectionChecklistID`),
  ADD KEY `FK_InspectionChecklist_InspectionType` (`InspectionTypeID`);

--
-- Indexes for table `inspection_header`
--
ALTER TABLE `inspection_header`
  ADD PRIMARY KEY (`InspectionID`),
  ADD KEY `FK_Inspection_JobOrder` (`JobOrderID`),
  ADD KEY `FK_Inspection_Estimate` (`EstimateID`);

--
-- Indexes for table `inspection_type`
--
ALTER TABLE `inspection_type`
  ADD PRIMARY KEY (`InspectionTypeID`);

--
-- Indexes for table `job_description`
--
ALTER TABLE `job_description`
  ADD PRIMARY KEY (`JobDescriptionID`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`JobOrderID`),
  ADD KEY `FK_JobOrder_Estimate` (`EstimateID`),
  ADD KEY `FK_JobOrder_Automobile` (`AutomobileID`),
  ADD KEY `FK_JobOrder_Inspection` (`InspectionID`),
  ADD KEY `FK_JobOrder_PersonnelJobPerformed` (`PersonnelPerformedID`),
  ADD KEY `FK_JobOrder_ServiceBay` (`ServiceBayID`),
  ADD KEY `FK_JobOrder_Promo` (`PromoID`),
  ADD KEY `FK_JobOrder_Package` (`PackageID`),
  ADD KEY `FK_JobOrder_Discount` (`DiscountID`),
  ADD KEY `FK_JobOrder_User` (`UserID`);

--
-- Indexes for table `job_order_backjob`
--
ALTER TABLE `job_order_backjob`
  ADD PRIMARY KEY (`BackJobID`),
  ADD KEY `FK_Backjob_JobOrder` (`JobOrderID`) USING BTREE,
  ADD KEY `FK_Backjob_ServiceBay` (`ServiceBayID`) USING BTREE,
  ADD KEY `FK_Backjob_User` (`UserID`) USING BTREE;

--
-- Indexes for table `job_schedule`
--
ALTER TABLE `job_schedule`
  ADD PRIMARY KEY (`ScheduleID`),
  ADD KEY `FK_JobSchedule_Process` (`ProcessID`),
  ADD KEY `FK_JobSchedule_JobOrder` (`JobOrderID`),
  ADD KEY `FK_JobSchedule_PersonnelHeader` (`PersonnelID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD KEY `FK_Maintenance_MntcHeader` (`MaintenanceID`),
  ADD KEY `FK_Maintenance_MntcChecklist` (`MaintenanceChecklistID`);

--
-- Indexes for table `maintenance_checklist`
--
ALTER TABLE `maintenance_checklist`
  ADD PRIMARY KEY (`MaintenanceChecklistID`);

--
-- Indexes for table `maintenance_header`
--
ALTER TABLE `maintenance_header`
  ADD PRIMARY KEY (`MaintenanceID`),
  ADD KEY `FK_MaintenanceHeader_JobOrder` (`JobOrderID`);

--
-- Indexes for table `package_backjob`
--
ALTER TABLE `package_backjob`
  ADD PRIMARY KEY (`PackageBackjobID`),
  ADD KEY `FK_PackageBackjob_Package` (`PackageID`),
  ADD KEY `FK_PackageBackjob_Backjob` (`BackJobID`);

--
-- Indexes for table `package_header`
--
ALTER TABLE `package_header`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `package_product_inclusions`
--
ALTER TABLE `package_product_inclusions`
  ADD KEY `FK_PackageProductInclusions_Package` (`PackageID`),
  ADD KEY `FK_PackageProductInclusions_Product` (`ProductID`);

--
-- Indexes for table `package_service_inclusions`
--
ALTER TABLE `package_service_inclusions`
  ADD KEY `FK_PackageServiceInclusions_Package` (`PackageID`),
  ADD KEY `FK_PackageServiceInclusions_Service` (`ServiceID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `FK_Payment_JobOrder` (`JobOrderID`);

--
-- Indexes for table `personnel_header`
--
ALTER TABLE `personnel_header`
  ADD PRIMARY KEY (`PersonnelID`);

--
-- Indexes for table `personnel_job`
--
ALTER TABLE `personnel_job`
  ADD PRIMARY KEY (`PersonnelJobID`),
  ADD KEY `FK_PersonnelJob_PersonnelHeader` (`PersonnelID`),
  ADD KEY `FK_PersonnelJob_JobDescription` (`JobDescriptionID`);

--
-- Indexes for table `personnel_job_performed`
--
ALTER TABLE `personnel_job_performed`
  ADD PRIMARY KEY (`PersonnelPerformedID`),
  ADD KEY `FK_PersonnelJobPerformed_JobOrder` (`JobOrderID`),
  ADD KEY `FK_PersonnelJobPerformed_PersonnelJob` (`PersonnelJobID`);

--
-- Indexes for table `personnel_skill`
--
ALTER TABLE `personnel_skill`
  ADD PRIMARY KEY (`PersonnelSkillID`),
  ADD KEY `FK_PersonnelSkill_SkillHeader` (`SkillID`),
  ADD KEY `FK_PersonnelSkill_PersonnelHeader` (`PersonnelID`);

--
-- Indexes for table `personnel_workload`
--
ALTER TABLE `personnel_workload`
  ADD PRIMARY KEY (`DateTime`),
  ADD KEY `FK_PersonnelWorkload_PersonnelHeader` (`PersonnelID`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`ProcessID`);

--
-- Indexes for table `process_service`
--
ALTER TABLE `process_service`
  ADD KEY `FK_ProcessSvc_Process` (`ProcessID`),
  ADD KEY `FK_ProcessSvc_Service` (`ServiceID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `FK_Product_ProdType` (`ProductTypeID`),
  ADD KEY `FK_Product_ProdBrand` (`ProductBrandID`),
  ADD KEY `FK_Product_ProdUnitType` (`ProductUnitTypeID`);

--
-- Indexes for table `product_backjob`
--
ALTER TABLE `product_backjob`
  ADD PRIMARY KEY (`ProductBackjobID`),
  ADD KEY `FK_ProductBackjob_JobOrder` (`BackJobID`),
  ADD KEY `FK_ProductBackjob_Product` (`ProductUsedID`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`ProductBrandID`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`ProductCategoryID`);

--
-- Indexes for table `product_damaged`
--
ALTER TABLE `product_damaged`
  ADD PRIMARY KEY (`ProductDamagedID`),
  ADD KEY `FK_ProductDamaged_Product` (`ProductID`);

--
-- Indexes for table `product_service`
--
ALTER TABLE `product_service`
  ADD PRIMARY KEY (`ProductServiceID`),
  ADD KEY `FK_Product_ProductService` (`ProductID`),
  ADD KEY `FK_Service_ProductService` (`ServiceID`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ProductTypeID`),
  ADD KEY `FK_ProductType_ProdCategory` (`ProductCategoryID`);

--
-- Indexes for table `product_unit_type`
--
ALTER TABLE `product_unit_type`
  ADD PRIMARY KEY (`ProductUnitTypeID`);

--
-- Indexes for table `product_used`
--
ALTER TABLE `product_used`
  ADD PRIMARY KEY (`ProductUsedID`),
  ADD KEY `FK_ProductUsed_JobOrder` (`JobOrderID`),
  ADD KEY `FK_ProductUsed_Sales` (`SalesID`),
  ADD KEY `FK_ProductUsed_Product` (`ProductID`),
  ADD KEY `FK_ProductUsed_Estimate` (`EstimateID`),
  ADD KEY `FK_ProductUsed_SvcPerformed` (`ServicePerformedID`);

--
-- Indexes for table `product_vehicle`
--
ALTER TABLE `product_vehicle`
  ADD KEY `FK_product_productvehicle` (`ProductID`),
  ADD KEY `FK_product_automobilemodel` (`ModelID`);

--
-- Indexes for table `promo_backjob`
--
ALTER TABLE `promo_backjob`
  ADD PRIMARY KEY (`PromoBackjobID`),
  ADD KEY `FK_PromoBackjob_Promo` (`PromoID`),
  ADD KEY `FK_PromoBackjob_Backjob` (`BackJobID`);

--
-- Indexes for table `promo_freeitems`
--
ALTER TABLE `promo_freeitems`
  ADD PRIMARY KEY (`FreeItemsID`);

--
-- Indexes for table `promo_freeitems_inclusions`
--
ALTER TABLE `promo_freeitems_inclusions`
  ADD KEY `PromoID` (`PromoID`) USING BTREE,
  ADD KEY `FreeItemsID` (`FreeItemsID`) USING BTREE;

--
-- Indexes for table `promo_header`
--
ALTER TABLE `promo_header`
  ADD PRIMARY KEY (`PromoID`);

--
-- Indexes for table `promo_product_inclusions`
--
ALTER TABLE `promo_product_inclusions`
  ADD KEY `FK_PromoProductInclusions_Promo` (`PromoID`),
  ADD KEY `FK_PromoProductInclusions_Product` (`ProductID`);

--
-- Indexes for table `promo_service_inclusions`
--
ALTER TABLE `promo_service_inclusions`
  ADD KEY `FK_PromoServiceInclusions_Promo` (`PromoID`),
  ADD KEY `FK_PromoServiceInclusions_Service` (`ServiceID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SalesID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `FK_Service_SvcCategory` (`ServiceCategoryID`);

--
-- Indexes for table `service_backjob`
--
ALTER TABLE `service_backjob`
  ADD PRIMARY KEY (`ServiceBackjobID`),
  ADD KEY `FK_ServiceBackjob_SvcPerformed` (`ServicePerformedID`),
  ADD KEY `FK_ServiceBackjob_Backjob` (`BackJobID`) USING BTREE,
  ADD KEY `FK_ServiceBackjob_PersonnelJobPerf` (`PersonnelPerformedID`);

--
-- Indexes for table `service_bay`
--
ALTER TABLE `service_bay`
  ADD PRIMARY KEY (`ServiceBayID`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`ServiceCategoryID`);

--
-- Indexes for table `service_performed`
--
ALTER TABLE `service_performed`
  ADD PRIMARY KEY (`ServicePerformedID`),
  ADD KEY `FK_ServicePerformed_Service` (`ServiceID`),
  ADD KEY `FK_ServicePerformed_JobOrder` (`JobOrderID`),
  ADD KEY `FK_ServicePerformed_Estimate` (`EstimateID`),
  ADD KEY `FK_ServicePerformed_PersonnelPerformed` (`PersonnelPerformedID`);

--
-- Indexes for table `service_price`
--
ALTER TABLE `service_price`
  ADD PRIMARY KEY (`ServicePriceID`),
  ADD KEY `FK_ServicePrice_Service` (`ServiceID`),
  ADD KEY `FK_ServicePrice_Model` (`ModelID`);

--
-- Indexes for table `service_skill`
--
ALTER TABLE `service_skill`
  ADD KEY `FK_ServiceSkill_Service` (`ServiceID`),
  ADD KEY `FK_ServiceSkill_Skill` (`SkillID`);

--
-- Indexes for table `service_steps`
--
ALTER TABLE `service_steps`
  ADD PRIMARY KEY (`ServiceStepID`),
  ADD KEY `FK_ServiceStep_Step` (`ServiceID`);

--
-- Indexes for table `skill_header`
--
ALTER TABLE `skill_header`
  ADD PRIMARY KEY (`SkillID`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`TaxID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobile`
--
ALTER TABLE `automobile`
  MODIFY `AutomobileID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `automobile_make`
--
ALTER TABLE `automobile_make`
  MODIFY `MakeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `automobile_mileage`
--
ALTER TABLE `automobile_mileage`
  MODIFY `MileageID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `automobile_model`
--
ALTER TABLE `automobile_model`
  MODIFY `ModelID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `ComplaintID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `DiscountID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `EstimateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `inspection_checklist`
--
ALTER TABLE `inspection_checklist`
  MODIFY `InspectionChecklistID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inspection_header`
--
ALTER TABLE `inspection_header`
  MODIFY `InspectionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inspection_type`
--
ALTER TABLE `inspection_type`
  MODIFY `InspectionTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_description`
--
ALTER TABLE `job_description`
  MODIFY `JobDescriptionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_order`
--
ALTER TABLE `job_order`
  MODIFY `JobOrderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `job_order_backjob`
--
ALTER TABLE `job_order_backjob`
  MODIFY `BackJobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_schedule`
--
ALTER TABLE `job_schedule`
  MODIFY `ScheduleID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenance_checklist`
--
ALTER TABLE `maintenance_checklist`
  MODIFY `MaintenanceChecklistID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenance_header`
--
ALTER TABLE `maintenance_header`
  MODIFY `MaintenanceID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_backjob`
--
ALTER TABLE `package_backjob`
  MODIFY `PackageBackjobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_header`
--
ALTER TABLE `package_header`
  MODIFY `PackageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel_header`
--
ALTER TABLE `personnel_header`
  MODIFY `PersonnelID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personnel_job`
--
ALTER TABLE `personnel_job`
  MODIFY `PersonnelJobID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personnel_job_performed`
--
ALTER TABLE `personnel_job_performed`
  MODIFY `PersonnelPerformedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personnel_skill`
--
ALTER TABLE `personnel_skill`
  MODIFY `PersonnelSkillID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `ProcessID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_backjob`
--
ALTER TABLE `product_backjob`
  MODIFY `ProductBackjobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `ProductBrandID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `ProductCategoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_damaged`
--
ALTER TABLE `product_damaged`
  MODIFY `ProductDamagedID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_service`
--
ALTER TABLE `product_service`
  MODIFY `ProductServiceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ProductTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_unit_type`
--
ALTER TABLE `product_unit_type`
  MODIFY `ProductUnitTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_used`
--
ALTER TABLE `product_used`
  MODIFY `ProductUsedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `promo_backjob`
--
ALTER TABLE `promo_backjob`
  MODIFY `PromoBackjobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_freeitems`
--
ALTER TABLE `promo_freeitems`
  MODIFY `FreeItemsID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promo_header`
--
ALTER TABLE `promo_header`
  MODIFY `PromoID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SalesID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ServiceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_backjob`
--
ALTER TABLE `service_backjob`
  MODIFY `ServiceBackjobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_bay`
--
ALTER TABLE `service_bay`
  MODIFY `ServiceBayID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `ServiceCategoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_performed`
--
ALTER TABLE `service_performed`
  MODIFY `ServicePerformedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `service_price`
--
ALTER TABLE `service_price`
  MODIFY `ServicePriceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_steps`
--
ALTER TABLE `service_steps`
  MODIFY `ServiceStepID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `skill_header`
--
ALTER TABLE `skill_header`
  MODIFY `SkillID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `TaxID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `automobile`
--
ALTER TABLE `automobile`
  ADD CONSTRAINT `FK_Automobile_Customer` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `FK_Automobile_Model` FOREIGN KEY (`ModelID`) REFERENCES `automobile_model` (`ModelID`) ON UPDATE CASCADE;

--
-- Constraints for table `automobile_mileage`
--
ALTER TABLE `automobile_mileage`
  ADD CONSTRAINT `FK_AutoMileage_Automobile` FOREIGN KEY (`AutomobileID`) REFERENCES `automobile` (`AutomobileID`) ON UPDATE CASCADE;

--
-- Constraints for table `automobile_model`
--
ALTER TABLE `automobile_model`
  ADD CONSTRAINT `FK_Model_Make` FOREIGN KEY (`MakeID`) REFERENCES `automobile_make` (`MakeID`) ON UPDATE CASCADE;

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `FK_Problem_Estimate` FOREIGN KEY (`EstimateID`) REFERENCES `estimate` (`EstimateID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Problem_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE;

--
-- Constraints for table `estimate`
--
ALTER TABLE `estimate`
  ADD CONSTRAINT `FK_Estimate_Automobile` FOREIGN KEY (`AutomobileID`) REFERENCES `automobile` (`AutomobileID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Estimate_Discount` FOREIGN KEY (`DiscountID`) REFERENCES `discount` (`DiscountID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Estimate_Inspection` FOREIGN KEY (`InspectionID`) REFERENCES `inspection_header` (`InspectionID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Estimate_Personnel` FOREIGN KEY (`PersonnelID`) REFERENCES `personnel_header` (`PersonnelID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Estimate_ServiceBay` FOREIGN KEY (`ServiceBayID`) REFERENCES `service_bay` (`ServiceBayID`) ON UPDATE CASCADE;

--
-- Constraints for table `inspection`
--
ALTER TABLE `inspection`
  ADD CONSTRAINT `FK_Inspection_InspChecklist` FOREIGN KEY (`InspectionChecklistID`) REFERENCES `inspection_checklist` (`InspectionChecklistID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Inspection_InspHeader` FOREIGN KEY (`InspectionID`) REFERENCES `inspection_header` (`InspectionID`) ON UPDATE CASCADE;

--
-- Constraints for table `inspection_checklist`
--
ALTER TABLE `inspection_checklist`
  ADD CONSTRAINT `FK_InspectionChecklist_InspType` FOREIGN KEY (`InspectionTypeID`) REFERENCES `inspection_type` (`InspectionTypeID`) ON UPDATE CASCADE;

--
-- Constraints for table `inspection_header`
--
ALTER TABLE `inspection_header`
  ADD CONSTRAINT `FK_Inspection_Estimate` FOREIGN KEY (`EstimateID`) REFERENCES `estimate` (`EstimateID`),
  ADD CONSTRAINT `FK_Inspection_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE;

--
-- Constraints for table `job_order`
--
ALTER TABLE `job_order`
  ADD CONSTRAINT `FK_JobOrder_Automobile` FOREIGN KEY (`AutomobileID`) REFERENCES `automobile` (`AutomobileID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Discount` FOREIGN KEY (`DiscountID`) REFERENCES `discount` (`DiscountID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Estimate` FOREIGN KEY (`EstimateID`) REFERENCES `estimate` (`EstimateID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Inspection` FOREIGN KEY (`InspectionID`) REFERENCES `inspection_header` (`InspectionID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Package` FOREIGN KEY (`PackageID`) REFERENCES `package_header` (`PackageID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_PersonnelJobPerformed` FOREIGN KEY (`PersonnelPerformedID`) REFERENCES `personnel_job_performed` (`PersonnelPerformedID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Promo` FOREIGN KEY (`PromoID`) REFERENCES `promo_header` (`PromoID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_ServiceBay` FOREIGN KEY (`ServiceBayID`) REFERENCES `service_bay` (`ServiceBayID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_User` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `job_order_backjob`
--
ALTER TABLE `job_order_backjob`
  ADD CONSTRAINT `FK_BackJob_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE;

--
-- Constraints for table `job_schedule`
--
ALTER TABLE `job_schedule`
  ADD CONSTRAINT `FK_JobSchedule_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobSchedule_PersonnelHeader` FOREIGN KEY (`PersonnelID`) REFERENCES `personnel_header` (`PersonnelID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobSchedule_Process` FOREIGN KEY (`ProcessID`) REFERENCES `process` (`ProcessID`) ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `FK_Maintenance_MntcChecklist` FOREIGN KEY (`MaintenanceChecklistID`) REFERENCES `maintenance_checklist` (`MaintenanceChecklistID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Maintenance_MntcHeader` FOREIGN KEY (`MaintenanceID`) REFERENCES `maintenance_header` (`MaintenanceID`) ON UPDATE CASCADE;

--
-- Constraints for table `maintenance_header`
--
ALTER TABLE `maintenance_header`
  ADD CONSTRAINT `FK_MaintenanceHeader_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE;

--
-- Constraints for table `package_backjob`
--
ALTER TABLE `package_backjob`
  ADD CONSTRAINT `FK_PackageBackjob_Backjob` FOREIGN KEY (`BackJobID`) REFERENCES `job_order_backjob` (`BackJobID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PackageBackjob_Package` FOREIGN KEY (`PackageID`) REFERENCES `package_header` (`PackageID`) ON UPDATE CASCADE;

--
-- Constraints for table `package_product_inclusions`
--
ALTER TABLE `package_product_inclusions`
  ADD CONSTRAINT `FK_PackageProductInclusions_Package` FOREIGN KEY (`PackageID`) REFERENCES `package_header` (`PackageID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PackageProductInclusions_Product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE;

--
-- Constraints for table `package_service_inclusions`
--
ALTER TABLE `package_service_inclusions`
  ADD CONSTRAINT `FK_PackageServiceInclusions_Package` FOREIGN KEY (`PackageID`) REFERENCES `package_header` (`PackageID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PackageServiceInclusions_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_Payment_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE;

--
-- Constraints for table `personnel_job`
--
ALTER TABLE `personnel_job`
  ADD CONSTRAINT `FK_PersonnelJob_JobDescription` FOREIGN KEY (`JobDescriptionID`) REFERENCES `job_description` (`JobDescriptionID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PersonnelJob_PersonnelHeader` FOREIGN KEY (`PersonnelID`) REFERENCES `personnel_header` (`PersonnelID`) ON UPDATE CASCADE;

--
-- Constraints for table `personnel_job_performed`
--
ALTER TABLE `personnel_job_performed`
  ADD CONSTRAINT `FK_PersonnelJobPerformed_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PersonnelJobPerformed_PersonnelJob` FOREIGN KEY (`PersonnelJobID`) REFERENCES `personnel_job` (`PersonnelJobID`) ON UPDATE CASCADE;

--
-- Constraints for table `personnel_skill`
--
ALTER TABLE `personnel_skill`
  ADD CONSTRAINT `FK_PersonnelSkill_PersonnelHeader` FOREIGN KEY (`PersonnelID`) REFERENCES `personnel_header` (`PersonnelID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PersonnelSkill_SkillHeader` FOREIGN KEY (`SkillID`) REFERENCES `service_category` (`ServiceCategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `personnel_workload`
--
ALTER TABLE `personnel_workload`
  ADD CONSTRAINT `FK_PersonnelWorkload_PersonnelHeader` FOREIGN KEY (`PersonnelID`) REFERENCES `personnel_header` (`PersonnelID`) ON UPDATE CASCADE;

--
-- Constraints for table `process_service`
--
ALTER TABLE `process_service`
  ADD CONSTRAINT `FK_ProcessSvc_Process` FOREIGN KEY (`ProcessID`) REFERENCES `process` (`ProcessID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProcessSvc_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Product_ProdBrand` FOREIGN KEY (`ProductBrandID`) REFERENCES `product_brand` (`ProductBrandID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Product_ProdType` FOREIGN KEY (`ProductTypeID`) REFERENCES `product_type` (`ProductTypeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Product_ProdUnitType` FOREIGN KEY (`ProductUnitTypeID`) REFERENCES `product_unit_type` (`ProductUnitTypeID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_backjob`
--
ALTER TABLE `product_backjob`
  ADD CONSTRAINT `FK_ProductBackjob_JobOrder` FOREIGN KEY (`BackJobID`) REFERENCES `job_order_backjob` (`BackJobID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductBackjob_Product` FOREIGN KEY (`ProductUsedID`) REFERENCES `product_used` (`ProductUsedID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_damaged`
--
ALTER TABLE `product_damaged`
  ADD CONSTRAINT `FK_ProductDamaged_Product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_service`
--
ALTER TABLE `product_service`
  ADD CONSTRAINT `FK_Product_ProductService` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`),
  ADD CONSTRAINT `FK_Service_ProductService` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`);

--
-- Constraints for table `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `FK_ProductType_ProdCategory` FOREIGN KEY (`ProductCategoryID`) REFERENCES `product_category` (`ProductCategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_used`
--
ALTER TABLE `product_used`
  ADD CONSTRAINT `FK_ProductUsed_Estimate` FOREIGN KEY (`EstimateID`) REFERENCES `estimate` (`EstimateID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductUsed_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductUsed_Product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductUsed_Sales` FOREIGN KEY (`SalesID`) REFERENCES `sales` (`SalesID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductUsed_SvcPerformed` FOREIGN KEY (`ServicePerformedID`) REFERENCES `service_performed` (`ServicePerformedID`);

--
-- Constraints for table `product_vehicle`
--
ALTER TABLE `product_vehicle`
  ADD CONSTRAINT `FK_product_automobilemodel` FOREIGN KEY (`ModelID`) REFERENCES `automobile_model` (`ModelID`),
  ADD CONSTRAINT `FK_product_productvehicle` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `promo_backjob`
--
ALTER TABLE `promo_backjob`
  ADD CONSTRAINT `FK_PromoBackjob_Backjob` FOREIGN KEY (`BackJobID`) REFERENCES `job_order_backjob` (`BackJobID`),
  ADD CONSTRAINT `FK_PromoBackjob_Promo` FOREIGN KEY (`PromoID`) REFERENCES `promo_header` (`PromoID`) ON UPDATE CASCADE;

--
-- Constraints for table `promo_product_inclusions`
--
ALTER TABLE `promo_product_inclusions`
  ADD CONSTRAINT `FK_PromoProductInclusions_Product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PromoProductInclusions_Promo` FOREIGN KEY (`PromoID`) REFERENCES `promo_header` (`PromoID`) ON UPDATE CASCADE;

--
-- Constraints for table `promo_service_inclusions`
--
ALTER TABLE `promo_service_inclusions`
  ADD CONSTRAINT `FK_PromoServiceInclusions_Promo` FOREIGN KEY (`PromoID`) REFERENCES `promo_header` (`PromoID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PromoServiceInclusions_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_Service_SvcCategory` FOREIGN KEY (`ServiceCategoryID`) REFERENCES `service_category` (`ServiceCategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_backjob`
--
ALTER TABLE `service_backjob`
  ADD CONSTRAINT `FK_ServiceBackjob_Backjob` FOREIGN KEY (`BackJobID`) REFERENCES `job_order_backjob` (`BackJobID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServiceBackjob_PersonnelJobPerf` FOREIGN KEY (`PersonnelPerformedID`) REFERENCES `personnel_job_performed` (`PersonnelPerformedID`),
  ADD CONSTRAINT `FK_ServiceBackjob_SvcPerformed` FOREIGN KEY (`ServicePerformedID`) REFERENCES `service_performed` (`ServicePerformedID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_performed`
--
ALTER TABLE `service_performed`
  ADD CONSTRAINT `FK_ServicePerformed_Estimate	` FOREIGN KEY (`EstimateID`) REFERENCES `estimate` (`EstimateID`),
  ADD CONSTRAINT `FK_ServicePerformed_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServicePerformed_PersonnelPerformed` FOREIGN KEY (`PersonnelPerformedID`) REFERENCES `personnel_job_performed` (`PersonnelPerformedID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServicePerformed_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_price`
--
ALTER TABLE `service_price`
  ADD CONSTRAINT `FK_ServicePrice_Model` FOREIGN KEY (`ModelID`) REFERENCES `automobile_model` (`ModelID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServicePrice_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_skill`
--
ALTER TABLE `service_skill`
  ADD CONSTRAINT `FK_ServiceSkill_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServiceSkill_Skill` FOREIGN KEY (`SkillID`) REFERENCES `service_category` (`ServiceCategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_steps`
--
ALTER TABLE `service_steps`
  ADD CONSTRAINT `FK_ServiceStep_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
