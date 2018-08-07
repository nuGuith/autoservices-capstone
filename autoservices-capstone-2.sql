-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 06:35 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
  `PlateNo` varchar(10) NOT NULL,
  `ModelID` int(10) NOT NULL,
  `Transmission` char(2) NOT NULL,
  `Year` year(4) NOT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `ChassisNo` varchar(30) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `automobile_make`
--

CREATE TABLE `automobile_make` (
  `MakeID` int(10) NOT NULL,
  `Make` varchar(255) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `automobile_model`
--

CREATE TABLE `automobile_model` (
  `ModelID` int(10) NOT NULL,
  `MakeID` int(10) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(10) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) NOT NULL,
  `ContactNo` varchar(13) NOT NULL,
  `CompleteAddress` varchar(255) NOT NULL,
  `Barangay` varchar(40) DEFAULT NULL,
  `City` varchar(40) NOT NULL,
  `Province` varchar(40) NOT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `DiscountID` int(10) NOT NULL,
  `DiscountName` varchar(255) NOT NULL,
  `DiscountRate` smallint(3) NOT NULL,
  `DiscountType` varchar(40) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `EstimateID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `PlateNo` varchar(10) NOT NULL,
  `InspectionID` int(10) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `InspectionID` int(10) NOT NULL,
  `InspectionChecklistID` int(10) NOT NULL,
  `Assessment` varchar(100) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_checklist`
--

CREATE TABLE `inspection_checklist` (
  `InspectionChecklistID` int(10) NOT NULL,
  `InspectionItem` varchar(100) NOT NULL,
  `InspectionType` varchar(100) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_header`
--

CREATE TABLE `inspection_header` (
  `InspectionID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_description`
--

CREATE TABLE `job_description` (
  `JobDescriptionID` int(10) NOT NULL,
  `JobDescription` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `JobOrderID` int(10) NOT NULL,
  `EstimateID` int(10) NOT NULL,
  `PersonnelPerformedID` int(10) NOT NULL,
  `ServiceBayID` int(10) NOT NULL,
  `PromoID` int(10) DEFAULT NULL,
  `PackageID` int(10) DEFAULT NULL,
  `DiscountID` int(10) DEFAULT NULL,
  `UserID` int(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Terms_Agreement` varchar(8000) DEFAULT NULL,
  `Agreement_Timestamp` datetime NOT NULL,
  `Release_Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `LaborCharge` decimal(14,2) NOT NULL,
  `LaborDiscount_Rate` smallint(3) DEFAULT NULL,
  `JobDuration` smallint(3) DEFAULT NULL,
  `TotalAmountDue` decimal(14,2) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_backjob`
--

CREATE TABLE `package_backjob` (
  `PackageBackjobID` int(10) NOT NULL,
  `PackageID` int(10) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_product_inclusions`
--

CREATE TABLE `package_product_inclusions` (
  `PackageID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_service_inclusions`
--

CREATE TABLE `package_service_inclusions` (
  `PackageID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_warranty`
--

CREATE TABLE `package_warranty` (
  `PackageWarrantyID` int(10) NOT NULL,
  `PackageID` int(10) NOT NULL,
  `Duration` int(3) NOT NULL,
  `DurationMode` varchar(5) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `TotalCharge` decimal(14,2) NOT NULL,
  `TotalPayment` decimal(14,2) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
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
  `Position` varchar(50) NOT NULL,
  `ContactNo` varchar(13) NOT NULL,
  `CompleteAddress` varchar(255) NOT NULL,
  `Barangay` varchar(40) DEFAULT NULL,
  `City` varchar(40) NOT NULL,
  `Province` varchar(40) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personnel_job`
--

CREATE TABLE `personnel_job` (
  `PersonnelJobID` int(10) NOT NULL,
  `PersonnelID` int(10) NOT NULL,
  `JobDescriptionID` int(40) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personnel_job_performed`
--

CREATE TABLE `personnel_job_performed` (
  `PersonnelPerformedID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `PersonnelJobID` int(10) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personnel_skill`
--

CREATE TABLE `personnel_skill` (
  `SkillID` int(10) NOT NULL,
  `PersonnelID` int(10) NOT NULL,
  `isMastered` tinyint(1) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `ProblemID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `Problem` varchar(8000) NOT NULL,
  `isPerformed` tinyint(1) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `ProcessID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `ProcessName` varchar(100) NOT NULL,
  `EstimatedTime` int(4) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(10) NOT NULL,
  `ProductTypeID` int(10) NOT NULL,
  `ProductBrandID` int(10) NOT NULL,
  `ProductUnitTypeID` int(10) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Price` decimal(14,2) NOT NULL,
  `Size` int(4) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductTypeID`, `ProductBrandID`, `ProductUnitTypeID`, `ProductName`, `Description`, `Price`, `Size`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 1, 'Semi Synthetic Oil', NULL, '500.00', 1, b'1', '2018-07-31 15:13:49', '0000-00-00 00:00:00'),
(2, 2, 2, 2, 'Scotch\'s Electrical Tape', NULL, '150.00', 100, b'1', '2018-07-31 15:13:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_application`
--

CREATE TABLE `product_application` (
  `ProductID` int(10) NOT NULL,
  `Make` varchar(20) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_backjob`
--

CREATE TABLE `product_backjob` (
  `ProductBackjobID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `ProductWarrantyID` int(10) NOT NULL,
  `Date` date NOT NULL,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `ProductBrandID` int(10) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`ProductBrandID`, `BrandName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Petron', b'1', '2018-07-31 15:14:45', '0000-00-00 00:00:00'),
(2, 'Scotch', b'1', '2018-07-31 15:14:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `ProductCategoryID` int(10) NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`ProductCategoryID`, `CategoryName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Mechanical', b'1', '2018-07-31 15:15:02', '0000-00-00 00:00:00'),
(2, 'Electrical', b'1', '2018-07-31 15:15:02', '0000-00-00 00:00:00');

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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ProductTypeID` int(10) NOT NULL,
  `ProductCategoryID` int(10) NOT NULL,
  `ProductTypeName` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ProductTypeID`, `ProductCategoryID`, `ProductTypeName`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 1, 'Lubricant', b'1', '2018-07-31 15:15:41', '0000-00-00 00:00:00'),
(2, 2, 'Electrical Tape', b'1', '2018-07-31 15:15:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_unit_type`
--

CREATE TABLE `product_unit_type` (
  `ProductUnitTypeID` int(10) NOT NULL,
  `UnitTypeName` varchar(50) NOT NULL,
  `Unit` char(3) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_unit_type`
--

INSERT INTO `product_unit_type` (`ProductUnitTypeID`, `UnitTypeName`, `Unit`, `isActive`, `updated_at`, `created_at`) VALUES
(1, 'Liter', 'l', b'1', '2018-07-31 15:17:40', '0000-00-00 00:00:00'),
(2, 'Meter', 'm', b'1', '2018-07-31 15:17:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_used`
--

CREATE TABLE `product_used` (
  `JobOrderID` int(10) NOT NULL,
  `SalesID` int(10) NOT NULL,
  `DateUsed` date NOT NULL,
  `SubTotal` decimal(14,2) NOT NULL,
  `isCustomerProvided` bit(1) NOT NULL DEFAULT b'0',
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_warranty`
--

CREATE TABLE `product_warranty` (
  `ProductWarrantyID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Duration` int(3) NOT NULL,
  `DurationMode` varchar(5) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_backjob`
--

CREATE TABLE `promo_backjob` (
  `PromoBackjobID` int(10) NOT NULL,
  `PromoID` int(10) NOT NULL,
  `DateTime` datetime NOT NULL,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_header`
--

CREATE TABLE `promo_header` (
  `PromoID` int(10) NOT NULL,
  `PromoName` varchar(255) NOT NULL,
  `Duration` int(3) NOT NULL,
  `DurationMode` varchar(5) NOT NULL,
  `Price` decimal(14,2) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_product_inclusions`
--

CREATE TABLE `promo_product_inclusions` (
  `PromoID` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_service_inclusions`
--

CREATE TABLE `promo_service_inclusions` (
  `PromoID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo_warranty`
--

CREATE TABLE `promo_warranty` (
  `PromoWarrantyID` int(10) NOT NULL,
  `PromoID` int(10) NOT NULL,
  `Duration` int(3) NOT NULL,
  `DurationMode` varchar(5) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_backjob`
--

CREATE TABLE `service_backjob` (
  `ServiceBackjobID` int(10) NOT NULL,
  `ServicePerformedID` int(10) NOT NULL,
  `ServiceWarrantyID` int(10) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `Cost` decimal(14,2) NOT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `ServiceCategoryID` int(10) NOT NULL,
  `ServiceCategoryName` varchar(100) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_performed`
--

CREATE TABLE `service_performed` (
  `ServicePerformedID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `JobOrderID` int(10) NOT NULL,
  `ServiceWarrantyID` int(10) NOT NULL,
  `LaborCost` decimal(14,2) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_skill`
--

CREATE TABLE `service_skill` (
  `ServiceID` int(10) NOT NULL,
  `SkillID` int(10) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_warranty`
--

CREATE TABLE `service_warranty` (
  `ServiceWarrantyID` int(10) NOT NULL,
  `ServiceID` int(10) NOT NULL,
  `Duration` int(3) NOT NULL,
  `DurationMode` varchar(5) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skill_header`
--

CREATE TABLE `skill_header` (
  `SkillID` int(10) NOT NULL,
  `Skill` varchar(50) NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `isActive` bit(1) NOT NULL DEFAULT b'1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`PlateNo`),
  ADD KEY `FK_Automobile_Model` (`ModelID`);

--
-- Indexes for table `automobile_make`
--
ALTER TABLE `automobile_make`
  ADD PRIMARY KEY (`MakeID`);

--
-- Indexes for table `automobile_model`
--
ALTER TABLE `automobile_model`
  ADD PRIMARY KEY (`ModelID`),
  ADD KEY `FK_Model_Make` (`MakeID`);

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
  ADD KEY `FK_Estimate_Customer` (`CustomerID`),
  ADD KEY `FK_Estimate_Automobile` (`PlateNo`),
  ADD KEY `FK_Estimate_Inspection` (`InspectionID`);

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
  ADD PRIMARY KEY (`InspectionChecklistID`);

--
-- Indexes for table `inspection_header`
--
ALTER TABLE `inspection_header`
  ADD PRIMARY KEY (`InspectionID`),
  ADD KEY `FK_Inspection_JobOrder` (`JobOrderID`);

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
  ADD KEY `FK_JobOrder_PersonnelJobPerformed` (`PersonnelPerformedID`),
  ADD KEY `FK_JobOrder_ServiceBay` (`ServiceBayID`),
  ADD KEY `FK_JobOrder_Promo` (`PromoID`),
  ADD KEY `FK_JobOrder_Package` (`PackageID`),
  ADD KEY `FK_JobOrder_Discount` (`DiscountID`),
  ADD KEY `FK_JobOrder_User` (`UserID`);

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
  ADD KEY `FK_PackageBackjob_Package` (`PackageID`);

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
-- Indexes for table `package_warranty`
--
ALTER TABLE `package_warranty`
  ADD PRIMARY KEY (`PackageWarrantyID`),
  ADD KEY `FK_PackageWarranty_Package` (`PackageID`);

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
  ADD KEY `FK_PersonnelSkill_SkillHeader` (`SkillID`),
  ADD KEY `FK_PersonnelSkill_PersonnelHeader` (`PersonnelID`);

--
-- Indexes for table `personnel_workload`
--
ALTER TABLE `personnel_workload`
  ADD PRIMARY KEY (`DateTime`),
  ADD KEY `FK_PersonnelWorkload_PersonnelHeader` (`PersonnelID`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`ProblemID`),
  ADD KEY `FK_Problem_JobOrder` (`JobOrderID`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`ProcessID`),
  ADD KEY `FK_Process_Service` (`ServiceID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `FK_Product_ProdType` (`ProductTypeID`),
  ADD KEY `FK_Product_ProdBrand` (`ProductBrandID`),
  ADD KEY `FK_Product_ProdUnitType` (`ProductUnitTypeID`);

--
-- Indexes for table `product_application`
--
ALTER TABLE `product_application`
  ADD KEY `FK_Product_Application` (`ProductID`);

--
-- Indexes for table `product_backjob`
--
ALTER TABLE `product_backjob`
  ADD PRIMARY KEY (`ProductBackjobID`),
  ADD KEY `FK_ProductBackjob_JobOrder` (`JobOrderID`),
  ADD KEY `FK_ProductBackjob_ProdWarranty` (`ProductWarrantyID`);

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
  ADD KEY `FK_ProductUsed_JobOrder` (`JobOrderID`),
  ADD KEY `FK_ProductUsed_Sales` (`SalesID`);

--
-- Indexes for table `product_warranty`
--
ALTER TABLE `product_warranty`
  ADD PRIMARY KEY (`ProductWarrantyID`),
  ADD KEY `FK_ProductWarranty_Product` (`ProductID`);

--
-- Indexes for table `promo_backjob`
--
ALTER TABLE `promo_backjob`
  ADD PRIMARY KEY (`PromoBackjobID`),
  ADD KEY `FK_PromoBackjob_Promo` (`PromoID`);

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
-- Indexes for table `promo_warranty`
--
ALTER TABLE `promo_warranty`
  ADD PRIMARY KEY (`PromoWarrantyID`),
  ADD KEY `FK_PromoWarranty_Promo` (`PromoID`);

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
  ADD KEY `FK_ServicePerf_SvcWarranty` (`ServiceWarrantyID`);

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
  ADD KEY `FK_ServicePerformed_SvcWarranty` (`ServiceWarrantyID`);

--
-- Indexes for table `service_skill`
--
ALTER TABLE `service_skill`
  ADD KEY `FK_ServiceSkill_Service` (`ServiceID`),
  ADD KEY `FK_ServiceSkill_Skill` (`SkillID`);

--
-- Indexes for table `service_warranty`
--
ALTER TABLE `service_warranty`
  ADD PRIMARY KEY (`ServiceWarrantyID`),
  ADD KEY `FK_ServiceWarranty_Service` (`ServiceID`);

--
-- Indexes for table `skill_header`
--
ALTER TABLE `skill_header`
  ADD PRIMARY KEY (`SkillID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automobile_make`
--
ALTER TABLE `automobile_make`
  MODIFY `MakeID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `automobile_model`
--
ALTER TABLE `automobile_model`
  MODIFY `ModelID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `DiscountID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `EstimateID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_checklist`
--
ALTER TABLE `inspection_checklist`
  MODIFY `InspectionChecklistID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inspection_header`
--
ALTER TABLE `inspection_header`
  MODIFY `InspectionID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_description`
--
ALTER TABLE `job_description`
  MODIFY `JobDescriptionID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_order`
--
ALTER TABLE `job_order`
  MODIFY `JobOrderID` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `PackageID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_warranty`
--
ALTER TABLE `package_warranty`
  MODIFY `PackageWarrantyID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel_header`
--
ALTER TABLE `personnel_header`
  MODIFY `PersonnelID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel_job`
--
ALTER TABLE `personnel_job`
  MODIFY `PersonnelJobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnel_job_performed`
--
ALTER TABLE `personnel_job_performed`
  MODIFY `PersonnelPerformedID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `ProblemID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `ProcessID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_backjob`
--
ALTER TABLE `product_backjob`
  MODIFY `ProductBackjobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `ProductBrandID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `ProductCategoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_damaged`
--
ALTER TABLE `product_damaged`
  MODIFY `ProductDamagedID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ProductTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_unit_type`
--
ALTER TABLE `product_unit_type`
  MODIFY `ProductUnitTypeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_warranty`
--
ALTER TABLE `product_warranty`
  MODIFY `ProductWarrantyID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_backjob`
--
ALTER TABLE `promo_backjob`
  MODIFY `PromoBackjobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_header`
--
ALTER TABLE `promo_header`
  MODIFY `PromoID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo_warranty`
--
ALTER TABLE `promo_warranty`
  MODIFY `PromoWarrantyID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SalesID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ServiceID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_backjob`
--
ALTER TABLE `service_backjob`
  MODIFY `ServiceBackjobID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_bay`
--
ALTER TABLE `service_bay`
  MODIFY `ServiceBayID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `ServiceCategoryID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_performed`
--
ALTER TABLE `service_performed`
  MODIFY `ServicePerformedID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_warranty`
--
ALTER TABLE `service_warranty`
  MODIFY `ServiceWarrantyID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skill_header`
--
ALTER TABLE `skill_header`
  MODIFY `SkillID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `automobile`
--
ALTER TABLE `automobile`
  ADD CONSTRAINT `FK_Automobile_Model` FOREIGN KEY (`ModelID`) REFERENCES `automobile_model` (`ModelID`) ON UPDATE CASCADE;

--
-- Constraints for table `automobile_model`
--
ALTER TABLE `automobile_model`
  ADD CONSTRAINT `FK_Model_Make` FOREIGN KEY (`MakeID`) REFERENCES `automobile_make` (`MakeID`) ON UPDATE CASCADE;

--
-- Constraints for table `estimate`
--
ALTER TABLE `estimate`
  ADD CONSTRAINT `FK_Estimate_Automobile` FOREIGN KEY (`PlateNo`) REFERENCES `automobile` (`PlateNo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Estimate_Customer` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Estimate_Inspection` FOREIGN KEY (`InspectionID`) REFERENCES `inspection_header` (`InspectionID`) ON UPDATE CASCADE;

--
-- Constraints for table `inspection`
--
ALTER TABLE `inspection`
  ADD CONSTRAINT `FK_Inspection_InspChecklist` FOREIGN KEY (`InspectionChecklistID`) REFERENCES `inspection_checklist` (`InspectionChecklistID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Inspection_InspHeader` FOREIGN KEY (`InspectionID`) REFERENCES `inspection_header` (`InspectionID`) ON UPDATE CASCADE;

--
-- Constraints for table `inspection_header`
--
ALTER TABLE `inspection_header`
  ADD CONSTRAINT `FK_Inspection_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE;

--
-- Constraints for table `job_order`
--
ALTER TABLE `job_order`
  ADD CONSTRAINT `FK_JobOrder_Discount` FOREIGN KEY (`DiscountID`) REFERENCES `discount` (`DiscountID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Estimate` FOREIGN KEY (`EstimateID`) REFERENCES `estimate` (`EstimateID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Package` FOREIGN KEY (`PackageID`) REFERENCES `package_header` (`PackageID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_PersonnelJobPerformed` FOREIGN KEY (`PersonnelPerformedID`) REFERENCES `personnel_job_performed` (`PersonnelPerformedID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_Promo` FOREIGN KEY (`PromoID`) REFERENCES `promo_header` (`PromoID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_ServiceBay` FOREIGN KEY (`ServiceBayID`) REFERENCES `service_bay` (`ServiceBayID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_JobOrder_User` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON UPDATE CASCADE;

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
-- Constraints for table `package_warranty`
--
ALTER TABLE `package_warranty`
  ADD CONSTRAINT `FK_PackageWarranty_Package` FOREIGN KEY (`PackageID`) REFERENCES `package_header` (`PackageID`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `FK_PersonnelSkill_SkillHeader` FOREIGN KEY (`SkillID`) REFERENCES `skill_header` (`SkillID`) ON UPDATE CASCADE;

--
-- Constraints for table `personnel_workload`
--
ALTER TABLE `personnel_workload`
  ADD CONSTRAINT `FK_PersonnelWorkload_PersonnelHeader` FOREIGN KEY (`PersonnelID`) REFERENCES `personnel_header` (`PersonnelID`) ON UPDATE CASCADE;

--
-- Constraints for table `problem`
--
ALTER TABLE `problem`
  ADD CONSTRAINT `FK_Problem_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE;

--
-- Constraints for table `process`
--
ALTER TABLE `process`
  ADD CONSTRAINT `FK_Process_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Product_ProdBrand` FOREIGN KEY (`ProductBrandID`) REFERENCES `product_brand` (`ProductBrandID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Product_ProdType` FOREIGN KEY (`ProductTypeID`) REFERENCES `product_type` (`ProductTypeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Product_ProdUnitType` FOREIGN KEY (`ProductUnitTypeID`) REFERENCES `product_unit_type` (`ProductUnitTypeID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_application`
--
ALTER TABLE `product_application`
  ADD CONSTRAINT `FK_Product_Application` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_backjob`
--
ALTER TABLE `product_backjob`
  ADD CONSTRAINT `FK_ProductBackjob_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductBackjob_ProdWarranty` FOREIGN KEY (`ProductWarrantyID`) REFERENCES `product_warranty` (`ProductWarrantyID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_damaged`
--
ALTER TABLE `product_damaged`
  ADD CONSTRAINT `FK_ProductDamaged_Product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `FK_ProductType_ProdCategory` FOREIGN KEY (`ProductCategoryID`) REFERENCES `product_category` (`ProductCategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_used`
--
ALTER TABLE `product_used`
  ADD CONSTRAINT `FK_ProductUsed_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ProductUsed_Sales` FOREIGN KEY (`SalesID`) REFERENCES `sales` (`SalesID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_warranty`
--
ALTER TABLE `product_warranty`
  ADD CONSTRAINT `FK_ProductWarranty_Product` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`) ON UPDATE CASCADE;

--
-- Constraints for table `promo_backjob`
--
ALTER TABLE `promo_backjob`
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
-- Constraints for table `promo_warranty`
--
ALTER TABLE `promo_warranty`
  ADD CONSTRAINT `FK_PromoWarranty_Promo` FOREIGN KEY (`PromoID`) REFERENCES `promo_header` (`PromoID`) ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_Service_SvcCategory` FOREIGN KEY (`ServiceCategoryID`) REFERENCES `service_category` (`ServiceCategoryID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_backjob`
--
ALTER TABLE `service_backjob`
  ADD CONSTRAINT `FK_ServiceBackjob_SvcPerformed` FOREIGN KEY (`ServicePerformedID`) REFERENCES `service_performed` (`ServicePerformedID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServicePerf_SvcWarranty` FOREIGN KEY (`ServiceWarrantyID`) REFERENCES `service_warranty` (`ServiceWarrantyID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_performed`
--
ALTER TABLE `service_performed`
  ADD CONSTRAINT `FK_ServicePerformed_JobOrder` FOREIGN KEY (`JobOrderID`) REFERENCES `job_order` (`JobOrderID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServicePerformed_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServicePerformed_SvcWarranty` FOREIGN KEY (`ServiceWarrantyID`) REFERENCES `service_warranty` (`ServiceWarrantyID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_skill`
--
ALTER TABLE `service_skill`
  ADD CONSTRAINT `FK_ServiceSkill_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ServiceSkill_Skill` FOREIGN KEY (`SkillID`) REFERENCES `skill_header` (`SkillID`) ON UPDATE CASCADE;

--
-- Constraints for table `service_warranty`
--
ALTER TABLE `service_warranty`
  ADD CONSTRAINT `FK_ServiceWarranty_Service` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
