-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 11:32 PM
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
-- Database: `autoservices-capstone-1`
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
(1, 1, 'ABC 123', 1, 20000, 'A/T', NULL, 'JMDKSFIENV1223', 1, '2018-10-15 21:07:27', '2018-10-15 21:07:27'),
(2, 2, 'ABC 123', 1, 20000, 'A/T', NULL, 'JMDKSFIENV1223', 1, '2018-10-15 21:10:15', '2018-10-15 21:10:15');

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
(1, 'Sofia ', ' ', 'Wabe', '(0915) 581-0953', NULL, 'QC', NULL, NULL, NULL, 'sofia@gmai.com', 1, '2018-10-15 21:07:26', '2018-10-15 21:07:26'),
(2, 'Sofia ', ' ', 'Wabe', '(0915) 581-0953', NULL, 'QC', NULL, NULL, NULL, 'sofia@gmai.com', 1, '2018-10-15 21:10:15', '2018-10-15 21:10:15');

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
(1, 1, NULL, NULL, 1, NULL, '51200.75', 1, '2018-10-15 21:07:27', '2018-10-15 21:07:27');

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
(1, 1, 2, NULL, NULL, 2, NULL, NULL, NULL, 1, 'Ongoing', '2018-10-16 05:10:34', NULL, NULL, NULL, '2018-10-16 05:10:15', '2018-10-21 02:19:41', NULL, '57344.84', '43008.63', 0, 1, '2018-10-21 02:19:41', '2018-10-15 21:10:15');

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
  `WarrantyMileage` int(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_header`
--

INSERT INTO `package_header` (`PackageID`, `PackageName`, `Price`, `WarrantyDuration`, `WarrantyDurationMode`, `WarrantyMileage`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Summer Package', '999.00', 3, 'weeks', NULL, 1, '0000-00-00 00:00:00', '2018-08-10 01:55:14');

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin02@email.com', '$2y$10$D2qaNpV4nejIpC3b5Z/PDu.hKNCLkjmW7XhdrQXGegCow5yOd5ala', '2018-10-20 22:48:11');

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
(1, 1, 1, 1, '2018-10-15 21:10:16', '2018-10-15 21:10:16');

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
  `WarrantyDurationMode` varchar(6) DEFAULT NULL,
  `WarrantyMileage` int(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductTypeID`, `ProductBrandID`, `ProductUnitTypeID`, `ProductName`, `Description`, `Price`, `Size`, `WarrantyDuration`, `WarrantyDurationMode`, `WarrantyMileage`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1, 'Semi Synthetic Oil', NULL, '500.00', 1, 3, 'months', 3000, 1, '2018-10-14 16:44:29', '0000-00-00 00:00:00'),
(2, 2, 2, 2, 'Scotch\'s Electrical Tape', NULL, '150.00', 1, NULL, NULL, NULL, 0, '2018-10-04 17:51:03', '0000-00-00 00:00:00'),
(3, 13, 5, 3, 'Piston', NULL, '700.00', 1, 0, NULL, NULL, 1, '2018-10-14 16:37:44', '2018-08-13 09:18:38'),
(4, 15, 3, 3, 'Crank Rods', NULL, '500.00', 1, 0, NULL, NULL, 1, '2018-10-14 16:38:01', '2018-08-13 09:18:38'),
(5, 4, 4, 3, 'Piston', NULL, '499.00', 1, 0, NULL, NULL, 1, '2018-10-14 16:37:58', '2018-08-28 04:06:59'),
(6, 17, 8, 3, 'Leather Cleaner and Protectant', NULL, '2000.00', 1, 4, 'weeks', NULL, 1, '2018-10-14 16:38:17', '2018-10-04 18:27:23'),
(7, 18, 6, 3, 'Oil Filter', NULL, '700.00', 1, 3, 'months', 3000, 1, '2018-10-15 00:11:38', '2018-10-15 00:11:38');

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
(6, 1, 2, b'1', '2018-10-04 18:18:26', '2018-08-28 12:11:07'),
(7, 7, 2, b'1', '2018-10-15 00:12:16', '2018-10-15 00:12:16');

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
(17, 15, 'Protectant', 1, '2018-10-04 18:26:26', '2018-10-04 18:26:26'),
(18, 1, 'Oil Filter', 1, '2018-10-15 00:09:44', '2018-10-15 00:09:44');

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
(1, 1, 1, NULL, 1, 4, 1, 1, '2018-10-16', '500.00', b'0', 1, '2018-10-16 05:16:17', '2018-10-15 21:07:27'),
(2, 1, 1, NULL, 1, 3, 1, 1, '2018-10-16', '700.00', b'0', 1, '2018-10-16 05:16:17', '2018-10-15 21:07:27');

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
  `WarrantyMileage` int(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo_header`
--

INSERT INTO `promo_header` (`PromoID`, `PromoName`, `StartDate`, `EndDate`, `Price`, `WarrantyDuration`, `WarrantyDurationMode`, `WarrantyMileage`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Summer Promo', '2018-08-01', '2018-08-21', '999.00', 3, 'weeks', NULL, 1, '2018-10-04 14:01:56', '2018-08-10 01:55:14');

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

--
-- Dumping data for table `promo_product_inclusions`
--

INSERT INTO `promo_product_inclusions` (`PromoID`, `ProductID`, `Quantity`, `isFree`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 2, b'0', 1, '2018-10-14 23:57:45', '2018-10-14 23:57:45'),
(1, 7, 1, b'0', 1, '2018-10-15 01:46:07', '2018-10-15 01:46:07');

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

--
-- Dumping data for table `promo_service_inclusions`
--

INSERT INTO `promo_service_inclusions` (`PromoID`, `ServiceID`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 2, 1, '2018-10-14 23:48:12', '2018-10-14 23:48:12');

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
  `WarrantyDurationMode` varchar(6) DEFAULT NULL,
  `WarrantyMileage` int(5) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ServiceID`, `ServiceCategoryID`, `ServiceName`, `SizeType`, `Class`, `EstimatedTime`, `InitialPrice`, `Quantity`, `WarrantyDuration`, `WarrantyDurationMode`, `WarrantyMileage`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 'Engine Overhaul', NULL, NULL, 360, '2500.00', 0, 12, 'months', 12000, 1, '2018-10-14 16:34:29', '2018-08-09 17:59:00'),
(2, 3, 'Change Oil', NULL, NULL, 90, '250.00', 4, 3, 'months', 3000, 1, '2018-10-14 16:33:13', '2018-08-13 10:32:49'),
(3, 2, 'Carwash', NULL, NULL, 10, '100.00', 0, NULL, NULL, NULL, 1, '2018-08-19 08:54:54', '2018-08-17 06:41:42'),
(4, 2, 'Interior Detailing', NULL, NULL, 200, '1300.00', 0, 3, 'weeks', NULL, 1, '2018-10-14 16:34:42', '2018-08-17 06:41:42'),
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
(1, 1, 1, 1, 1, 4, '2018-10-15 21:10:54', NULL, '50000.75', b'1', 1, '2018-10-21 02:19:39', '2018-10-15 21:07:27');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `position` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `role` int(10) NOT NULL DEFAULT '0',
  `bio` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `MiddleName`, `LastName`, `name`, `email`, `email_verified_at`, `position`, `password`, `avatar`, `role`, `bio`, `remember_token`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Ivann Ashley', 'Reyes', 'Nuguid', 'Ivann Nuguid', 'nuguidivannxx@gmail.com', '2018-10-21 21:14:39', 'Admin', '$2y$10$bOiL7LS6tum5P8ycxO.Uq.6UxWWUyxSnJnpYKNVjDvI5ym.HqBopS', NULL, 10, NULL, '7XpkMa6bKxLXPCFC7e7K84Haho5wd2zJ5ik3TJOmRhm6AFNV1lX5tYt2x6sz', 1, '2018-10-21 21:14:39', '2018-08-12 17:27:33'),
(2, 'Guesshee', 'Orteza', 'Almario', 'Guesh Almario', 'beth.nuguid22@gmail.com', '2018-10-21 21:28:42', 'admin', '$2y$10$hcz74blHUspDxb7/20r/C.t3oS8HPiWUUL.W6wy3p2Df0de1i1Cyy', NULL, 10, NULL, 'pOv25kFkz5nGo5amfj8BocoffLVEzhJZTqH8b2dUyI8a0aGBmNnIZGG8bUtn', 1, '2018-10-21 21:28:42', '2018-10-21 20:59:53');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `email` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobile`
--
ALTER TABLE `automobile`
  MODIFY `AutomobileID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `DiscountID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `EstimateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `JobOrderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `PersonnelPerformedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `ProductServiceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ProductTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_unit_type`
--
ALTER TABLE `product_unit_type`
  MODIFY `ProductUnitTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_used`
--
ALTER TABLE `product_used`
  MODIFY `ProductUsedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `ServicePerformedID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `FK_JobOrder_User` FOREIGN KEY (`UserID`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

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
