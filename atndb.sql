-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 10:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atndb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C001', 'Figure', ''),
('C002', 'Robot', ''),
('C003', 'Puzzle', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('anhkienmuu', 'e10adc3949ba59abbe56e057f20f883e', 'kiet ko ngu', 0, 'asd', '0337197520', 'ads', 18, 11, 1986, '', '', 0),
('kienlt2710', '812a62e12fc617e88482cc35fa550003', 'Le Trung Kien', 0, '456 hung vuong', '0337197520', 'trungkien.dell2018@gmail.com', 22, 11, 1988, '', '', 0),
('trungkien1', 'e10adc3949ba59abbe56e057f20f883e', 'Trung Kien', 0, '123 hung vuong', '12345789', 'trungkien.dell208@gmail.com', 21, 12, 1989, '', '', 0),
('trungkien2', 'e10adc3949ba59abbe56e057f20f883e', 'Le Trung Kien', 0, '123 hung vuong', '0337197520', 'trungkien.dell2019@gmail.com', 21, 10, 2000, '', '', 1),
('trungkien3', 'e10adc3949ba59abbe56e057f20f883e', 'Le Trung Kien', 0, '123 hung vuong', '12345789', 'trungkien.dell2028@gmail.com', 19, 10, 1990, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(6) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `Delivery_loca` varchar(200) NOT NULL,
  `Payment` int(11) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL,
  `sup_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`, `sup_id`) VALUES
('P001', 'Coaster Hanayama Metal Brainte', 230000, '0.00', '', '', '2023-06-19 02:43:01', 5, '71LHl7CvS1L._AC_SY879_.jpg', 'C003', 'S002'),
('P002', 'Trumpeter SK-06 B-127 Bumblebe', 439000, '0.00', '', '', '2023-06-19 02:44:23', 5, 'TRUMPETER-SK06-BUMBLEBEE-B-127-MODEL-KIT-AZGUNDAM.jpg', 'C002', 'S001'),
('P003', 'Entry Grade Strike Gundam ', 199000, '0.00', '', '', '2023-06-19 02:46:14', 5, 'ENTRY-GRADE-STRIKE-GUNDAM-AZGUNDAM.jpg', 'C002', 'S001'),
('P004', 'One Piece DXF – The Grandline ', 439000, '0.00', '', '', '2023-06-19 02:47:18', 5, 'ONE-PIECE-DXF-THE-GRANDLINE-MEN-GOL-DROGER-AZGUNDAM-5.jpg', 'C001', 'S001'),
('P005', 'One Piece – Senkouzekkei – Por', 479000, '0.00', '', '', '2023-06-19 02:47:56', 5, 'ONE-PIECE-SENKOUZEKKEI-PORTGAS-D-ACE-BANPRESTO-AZGUNDAM.jpg', 'C001', 'S001'),
('P006', 'Cylinder Hanayama Metal Braint', 239000, '0.00', '', '', '2023-06-19 02:48:33', 5, '91eQO0oKLpL._AC_SY879_.jpg', 'C003', 'S002');

-- --------------------------------------------------------

--
-- Table structure for table `suppier`
--

CREATE TABLE `suppier` (
  `sup_id` varchar(30) NOT NULL,
  `sup_name` varchar(30) NOT NULL,
  `sup_address` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `suppier`
--

INSERT INTO `suppier` (`sup_id`, `sup_name`, `sup_address`) VALUES
('S001', 'Bandai', ''),
('S002', 'Hanayama', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Indexes for table `suppier`
--
ALTER TABLE `suppier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`Username`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
