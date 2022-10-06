-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 02:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Location`, `C-Date`, `Mod-Date`) VALUES
('A_10', 'Pond', 'คลองสาม', '2022-09-08', '2022-09-08'),
('A_20', 'Jack', 'คลองสอง', '2022-09-09', '2022-09-09'),
('A_30', 'John', 'คลองหก', '2022-09-10', '2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` varchar(10) NOT NULL,
  `ProductName` varchar(10) NOT NULL,
  `Price` float NOT NULL,
  `NumberProduct` int(11) NOT NULL,
  `Total` float DEFAULT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `ProductName`, `Price`, `NumberProduct`, `Total`, `C-Date`, `Mod-Date`) VALUES
('cc1001', 'Rejoice', 199, 1, NULL, '2022-09-08', '2022-09-08'),
('cc1002', 'Pantene', 299, 2, NULL, '2022-09-09', '2022-09-09'),
('cc1003', 'โอโม', 399, 3, NULL, '2022-09-10', '2022-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Locations` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Postcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `Locations`, `Email`, `DateOfBirth`, `CDate`, `ModDate`, `Postcode`) VALUES
('', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 0),
('c2001', 'ประกาศิต', 'คลองสาม', 'D@Email.com', '2022-09-08', '2022-09-09', '2022-09-09', 0),
('c2002', 'สวัสดี', 'คลองสอง', 'A@hotmail.com', '2022-09-09', '2022-09-09', '2022-09-09', 54321),
('c2003', 'ลาก่อน', 'คลองหก', 'P@gmail.com', '2022-09-10', '2022-09-10', '2022-09-10', 12345),
('c2005', 'ลาก่อน', 'คลองหก', 'P@gmail.com', '2022-09-10', '2022-09-10', '2022-09-10', 0),
('c2009', 'ลาก่อน', 'คลองหก', 'P@gmail.com', '2022-09-10', '2022-09-10', '2022-09-10', 0),
('dadada', 'daddd', 'adaa', 'addd', '2022-09-16', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Iid` varchar(10) NOT NULL,
  `CustomerID` varchar(10) NOT NULL,
  `CartID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Iid`, `CustomerID`, `CartID`) VALUES
('', '', ''),
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003'),
('V1004', 'C2004', 'CC2004'),
('V1005', 'C2005', 'CC2005');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocationId` varchar(10) NOT NULL,
  `LocationName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationId`, `LocationName`) VALUES
('L_10', 'คลองสาม'),
('L_20', 'คลองสอง'),
('L_30', 'คลองหก');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  `CDate` date NOT NULL,
  `ModDate` date NOT NULL,
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Price`, `CDate`, `ModDate`, `Deleted`) VALUES
('', '', 0, '0000-00-00', '0000-00-00', 0),
('001', 'Rejoice', 199, '2020-03-21', '2022-09-08', 0),
('002', 'Pantene', 299, '2022-11-01', '2022-09-09', 0),
('003', 'โอโม', 399, '2016-09-10', '2022-09-10', 0),
('cc1500', 'PPP', 99999, '2022-09-16', '2022-09-29', 0),
('cc1501', 'กฟฟก', 99999, '2022-09-13', '2022-09-30', 0),
('dadada', 'dada', 465465, '2022-09-20', '2022-09-29', 0),
('DDDDD', 'AAA', 231312, '2022-09-01', '2022-10-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `PromotionId` varchar(10) NOT NULL,
  `PromotionName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`PromotionId`, `PromotionName`) VALUES
('001', 'โปรโมชัน 8.9'),
('002', 'โปรโมชัน 12.8'),
('003', 'โปรโมชัน ส่งฟรี'),
('004', 'All Free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LocationId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`PromotionId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
