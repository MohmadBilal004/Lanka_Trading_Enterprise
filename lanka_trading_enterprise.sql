-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 11:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lanka_trading_enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `invoiceID` int(11) NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `discount` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitPrice` double NOT NULL,
  `TotalPrice` double NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `invoiceID`, `Item_Name`, `discount`, `quantity`, `unitPrice`, `TotalPrice`, `date`) VALUES
(1, 1, 'Nails', 15, 5, 4250, 21250, '10/07/2023'),
(2, 1, 'sdasda', 25, 1, 23490.75, 23490.75, '10/07/2023'),
(3, 1, 'Nails', 10, 5, 4500, 22500, '11/07/2023'),
(4, 1, 'sdasda', 25, 2, 23490.75, 46981.5, '11/07/2023'),
(5, 1, 'sdasda', 20, 2, 25056.8, 50113.6, '11/07/2023'),
(6, 1, 'Nails', 10, 10, 4500, 45000, '11/07/2023'),
(7, 1, 'sdasda', 20, 2, 25056.8, 50113.6, '11/07/2023'),
(8, 1, 'Nails', 0, 2, 5000, 10000, '11/07/2023'),
(9, 1, 'Nails', 20, 5, 4000, 20000, '11/07/2023'),
(10, 1, 'sdasda', 5, 0, 29754.95, 0, '11/07/2023'),
(11, 2, 'sdasda', 50, 10, 15660.5, 156605, '11/07/2023'),
(12, 2, 'sdasda', 50, 10, 15660.5, 156605, '11/07/2023'),
(13, 3, 'Nails', 50, 100, 2500, 250000, '11/07/2023'),
(14, 4, 'Nails', 50, 100, 2500, 250000, '11/07/2023'),
(15, 5, ' Antique Brown ', 5, 5, 15, 2992, '29/07/2023'),
(16, 6, ' Antique Brown ', 5, 5, 15, 2992, '29/07/2023'),
(17, 7, ' Antique Brown ', 5, 5, 15, 2992, '29/07/2023'),
(18, 8, ' Antique Brown ', 15, 5, 15, 2992, '29/07/2023'),
(19, 9, ' Antique Brown ', 2, 5, 15, 2992, '29/07/2023');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catID` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catID`, `Category`) VALUES
(1, 'Exterior Paints'),
(2, 'Enamel paints'),
(3, 'Emulsion paints'),
(4, 'Nut and Bolts'),
(5, 'Carpets'),
(6, 'Thinner');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `Billing_address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `Tp_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `customer_name`, `Billing_address`, `city`, `Tp_number`) VALUES
(14, 'Bilal', '7/2 Rahumanabath Road ', 'Negombo', 762704454),
(15, 'John Wick', '235, Kettwallamulla,Dematagoda', 'Maradana', 714852963);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `eName` varchar(255) NOT NULL,
  `eAddress` varchar(255) NOT NULL,
  `ePhone` int(11) NOT NULL,
  `yearOfJoin` date NOT NULL,
  `noOfyears` int(11) NOT NULL,
  `dailySalary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `eName`, `eAddress`, `ePhone`, `yearOfJoin`, `noOfyears`, `dailySalary`) VALUES
(3, 'Mohammad Lebbe Mohmammd Ramzan', '177/3,Thalkattuwa road, Dalupotha', 766575483, '2019-07-18', 3, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `extra`
--

CREATE TABLE `extra` (
  `exid` int(11) NOT NULL,
  `val` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extra`
--

INSERT INTO `extra` (`exid`, `val`) VALUES
(1, '9'),
(5, '1');

-- --------------------------------------------------------

--
-- Table structure for table `grn`
--

CREATE TABLE `grn` (
  `id` int(11) NOT NULL,
  `grn_no` int(11) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `costPrice` double NOT NULL,
  `sellingPrice` double NOT NULL,
  `expDate` varchar(255) NOT NULL,
  `subTotal` double NOT NULL,
  `discount` double NOT NULL,
  `netTotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grn`
--

INSERT INTO `grn` (`id`, `grn_no`, `sid`, `sName`, `itemName`, `quantity`, `costPrice`, `sellingPrice`, `expDate`, `subTotal`, `discount`, `netTotal`) VALUES
(1, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 105600),
(2, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 105600),
(3, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 105600),
(4, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 105600),
(5, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 132000),
(6, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 132000),
(7, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 132000),
(8, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 132000),
(9, 5, '2', 'Robbialac', ' Antique Brown ', 10, 3520, 3780, 'yyyy-mm-dd', 35200, 25, 132000);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesID` int(11) NOT NULL,
  `InvoiceID` int(11) NOT NULL,
  `Cid` int(11) NOT NULL,
  `Customer_Name` varchar(255) NOT NULL,
  `Total_Qty` varchar(255) NOT NULL,
  `Total_Bill` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesID`, `InvoiceID`, `Cid`, `Customer_Name`, `Total_Qty`, `Total_Bill`, `Status`, `Balance`) VALUES
(1, 1, 0, 'John Wick', '7.0', '69481.5', 'Unpaid', '69481.5'),
(2, 1, 0, 'John Wick', '7.0', '69481.5', 'Unpaid', '69481.5'),
(3, 1, 0, 'Bilal', '12.0', '95113.6', 'partially paid', '45113.600000000006'),
(4, 1, 0, 'Bilal', '12.0', '95113.6', 'partially paid', '45113.600000000006'),
(5, 1, 0, 'Bilal', '4.0', '60113.6', 'null', '0.0'),
(6, 1, 0, 'Bilal', '4.0', '60113.6', 'null', '0.0'),
(7, 1, 15, 'John Wick', '5.0', '20000.0', 'Unpaid', '20000.0'),
(8, 1, 15, 'John Wick', '0.0', '0.0', 'Unpaid', '0.0'),
(9, 2, 15, 'John Wick', '20.0', '313210.0', 'Unpaid', '313210.0'),
(10, 2, 15, 'John Wick', '20.0', '313210.0', 'Unpaid', '313210.0'),
(11, 3, 0, 'Bilal', '100.0', '250000.0', 'Unpaid', '250000.0'),
(12, 4, 14, 'Bilal', '100.0', '250000.0', 'Unpaid', '250000.0'),
(13, 5, 0, 'Bilal', '5.0', '14960.0', 'Unpaid', '14960.0'),
(14, 6, 0, 'Bilal', '5.0', '14960.0', 'paid', '0.0'),
(15, 7, 0, 'Bilal', '5.0', '14960.0', 'Unpaid', '14960.0'),
(16, 8, 0, 'Bilal', '5.0', '52800.0', 'Unpaid', '52800.0'),
(17, 9, 14, 'Bilal', '5.0', '5984.0', 'paid', '0.0');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `IName` varchar(255) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitPrice` double NOT NULL,
  `Sellprice` double NOT NULL,
  `discount` double NOT NULL,
  `totalCost` double NOT NULL,
  `supID` varchar(255) NOT NULL,
  `supplierName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`IName`, `ItemID`, `type`, `Description`, `quantity`, `unitPrice`, `Sellprice`, `discount`, `totalCost`, `supID`, `supplierName`) VALUES
('Nuts and Bolts', 4, 'Nails', '3 inch 8 No. 25kg pkt', 2, 1450, 0, 12, 2552, '1', 'adwdwa'),
(' Antique Brown ', 5, 'Enamel Paints', '1 Litre', 16, 3520, 3780, 20, 42240, '2', 'Robbialac');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SID` int(11) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `sPhone` int(11) NOT NULL,
  `sEmail` varchar(550) NOT NULL,
  `sAddress` varchar(255) NOT NULL,
  `bankName` varchar(255) NOT NULL,
  `bankNo` int(255) NOT NULL,
  `Distributor` varchar(255) NOT NULL,
  `contactPerson` varchar(255) NOT NULL,
  `cPhoneNo` int(11) NOT NULL,
  `cEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SID`, `sName`, `sPhone`, `sEmail`, `sAddress`, `bankName`, `bankNo`, `Distributor`, `contactPerson`, `cPhoneNo`, `cEmail`) VALUES
(1, 'adwdwa', 13123, 'dawdwad', '3131awdwa', '', 0, '', 'adwd', 0, ''),
(3, 'Causeway', 714859526, 'Causeway@gmail.com', '55/9, main road, Horana', 'Seylan Bank', 1234567891, 'Asian Paints', 'Giniharan', 456789123, 'AsianPaints@gmail.com'),
(4, 'Shums', 714859632, 'Shum@gmail.com', '91,Main street, Marbola', '', 0, '', 'Maduranga', 0, ''),
(5, 'dawdaw', 3132131, 'dawdad', 'awdwadww', 'dwdawd', 1312312321, 'dwadwad', 'cacscs', 1321321, 'dawdwadw'),
(6, 'Robbialac', 714859632, 'Robbialac@gmail.com', '559, Colombo Road , Jaela', 'Commercial Back', 45121205, 'Aneesha Distributors', 'Mahesh', 764859162, 'Mahesh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`exid`);

--
-- Indexes for table `grn`
--
ALTER TABLE `grn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesID`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `extra`
--
ALTER TABLE `extra`
  MODIFY `exid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grn`
--
ALTER TABLE `grn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
