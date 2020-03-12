-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2020 at 08:28 PM
-- Server version: 5.5.62
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
-- Database: `20s2_g4`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowtransection`
--

CREATE TABLE `borrowtransection` (
  `ID` int(3) NOT NULL,
  `itemID` int(3) DEFAULT NULL,
  `userID` int(3) DEFAULT NULL,
  `Statusref` int(3) DEFAULT NULL,
  `statuswork` varchar(100) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `request_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrowtransection`
--

INSERT INTO `borrowtransection` (`ID`, `itemID`, `userID`, `Statusref`, `statuswork`, `Start_Date`, `End_Date`, `request_Date`) VALUES
(1, 2, 1, 1, 'รอดำเนินการ', '2020-03-12', '2020-03-14', '2020-03-12 07:08:30'),
(2, 1, 1, 2, 'อนุมัติ', '2020-03-12', '2020-03-13', '2020-03-12 07:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `IDs` int(3) NOT NULL,
  `TypeID` int(3) DEFAULT NULL,
  `ItemID` char(30) DEFAULT NULL,
  `ItemName` varchar(300) DEFAULT NULL,
  `Detail` varchar(500) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Building` char(11) DEFAULT NULL,
  `Add_Date` date DEFAULT NULL,
  `Edit_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TeacherRight` varchar(100) DEFAULT NULL,
  `StaffRight` varchar(100) DEFAULT NULL,
  `StudentRight` varchar(100) DEFAULT NULL,
  `Statusref` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`IDs`, `TypeID`, `ItemID`, `ItemName`, `Detail`, `Price`, `Building`, `Add_Date`, `Edit_Date`, `TeacherRight`, `StaffRight`, `StudentRight`, `Statusref`) VALUES
(1, 3, '5802130000044', 'ชุดคอม', 'รายละเอียด', 499500, '3156', '2020-03-12', '2020-03-12 07:06:39', 'อนุญาต', 'อนุญาต', 'อนุญาต', 1),
(2, 4, '5802130000040', 'ชุดคอมพิวเตอร์', NULL, 25000, '8506', '2020-03-12', '2020-03-12 07:06:39', 'อนุญาต', 'อนุญาต', 'อนุญาต', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `IDst` int(3) NOT NULL,
  `StatusName` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`IDst`, `StatusName`) VALUES
(1, 'ปกติ'),
(2, 'ถูกยืม'),
(3, 'ปลดระวาง'),
(4, 'ซ่อม'),
(5, 'ไม่พร้อมใช้งาน'),
(6, 'จำหน่ายออก');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `ID` int(3) NOT NULL,
  `TypeName` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`ID`, `TypeName`) VALUES
(1, 'อาคารถาวร'),
(2, 'อาคารชั่วคราว'),
(3, 'ครุภัณฑ์กีฬา'),
(4, 'ครุภัณฑ์สื่อการสอน');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `idus` int(3) NOT NULL,
  `userID` char(100) DEFAULT NULL,
  `firstName` char(100) DEFAULT NULL,
  `lastName` char(100) DEFAULT NULL,
  `userName` char(100) DEFAULT NULL,
  `passWord` char(100) DEFAULT NULL,
  `franchise` varchar(200) NOT NULL COMMENT 'สิทธิ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`idus`, `userID`, `firstName`, `lastName`, `userName`, `passWord`, `franchise`) VALUES
(1, '6030204977', 'jatupon', 'donkoon', '6030204977', '6030204977', 'userNormal'),
(2, '6030204978', 'ad', 'min', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowtransection`
--
ALTER TABLE `borrowtransection`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Useraccount_pk` (`userID`),
  ADD KEY `Item3_pk` (`itemID`),
  ADD KEY `Status2_pk` (`Statusref`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`IDs`),
  ADD KEY `Type_fk` (`TypeID`),
  ADD KEY `Status_fk` (`Statusref`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`IDst`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`idus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowtransection`
--
ALTER TABLE `borrowtransection`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `IDs` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `IDst` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `idus` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowtransection`
--
ALTER TABLE `borrowtransection`
  ADD CONSTRAINT `Useraccount_pk` FOREIGN KEY (`userID`) REFERENCES `useraccount` (`idus`),
  ADD CONSTRAINT `Item3_pk` FOREIGN KEY (`itemID`) REFERENCES `item` (`IDs`),
  ADD CONSTRAINT `Status2_pk` FOREIGN KEY (`Statusref`) REFERENCES `status` (`IDst`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `Status_fk` FOREIGN KEY (`Statusref`) REFERENCES `status` (`IDst`),
  ADD CONSTRAINT `Type_fk` FOREIGN KEY (`TypeID`) REFERENCES `type` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
