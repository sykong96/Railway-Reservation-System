-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 07:31 PM
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
-- Database: `rrs_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `AnnouncementID` int(11) NOT NULL,
  `AnnouncementTitle` varchar(100) NOT NULL,
  `AnnouncementDetails` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`AnnouncementID`, `AnnouncementTitle`, `AnnouncementDetails`) VALUES
(1, 'Stop Operation from 4/5/2019', 'Please take note that the KTM operation will be stop operate at 4/5/2019 from 8.30a.m until 10.30a.m from KL Sentral to Gemas. ');

-- --------------------------------------------------------

--
-- Table structure for table `manageprofile`
--

CREATE TABLE `manageprofile` (
  `profile_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manageprofile`
--

INSERT INTO `manageprofile` (`profile_id`, `name`, `phone_number`, `address`, `date_of_birth`) VALUES
(0, 'BECKY LOW CHAI WEI', '165463180', 'No 9,Taman Seri Melati, 33000 Kuala Kangsar, Perak', '20/7/2019');

-- --------------------------------------------------------

--
-- Table structure for table `trainticket`
--

CREATE TABLE `trainticket` (
  `TicketID` int(11) NOT NULL,
  `TicketDate` date NOT NULL,
  `TicketTime` time NOT NULL,
  `PassengerName` varchar(100) NOT NULL,
  `PassengerIC` varchar(50) NOT NULL,
  `PassengerPhone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainticket`
--

INSERT INTO `trainticket` (`TicketID`, `TicketDate`, `TicketTime`, `PassengerName`, `PassengerIC`, `PassengerPhone`) VALUES
(2, '2019-08-12', '09:00:00', 'LOW CHAI WEI', '1287136187', '13927398'),
(3, '2019-08-12', '09:00:00', 'LOW CHAI WEI', '1287136187', '13927398'),
(8, '2019-08-12', '13:00:00', 'Chan ', '18381', '465676768');

-- --------------------------------------------------------

--
-- Table structure for table `train_schedule`
--

CREATE TABLE `train_schedule` (
  `ScheduleID` int(11) NOT NULL,
  `TrainScheduleDate` varchar(50) NOT NULL,
  `TrainScheduleDeparture` varchar(100) NOT NULL,
  `TrainScheduleArrival` varchar(100) NOT NULL,
  `TrainScheduleDepartureTime` varchar(50) NOT NULL,
  `TrainScheduleArrivalTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_schedule`
--

INSERT INTO `train_schedule` (`ScheduleID`, `TrainScheduleDate`, `TrainScheduleDeparture`, `TrainScheduleArrival`, `TrainScheduleDepartureTime`, `TrainScheduleArrivalTime`) VALUES
(1, '6/5/2019', 'Kuala Kangsar', 'KL Sentral', '8.23a.m', '12.23p.m'),
(4, '8/5/2019', 'KL Sentral', 'Butterworth', '12.23p.m', '2.55p.m');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserType` varchar(50) NOT NULL,
  `UserNationality` varchar(50) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserIC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `UserType`, `UserNationality`, `UserEmail`, `UserIC`) VALUES
(1, 'becky', '7654321', 'passenger', 'Malaysian', 'chaiweilow96@hotmail.com', '1239879213'),
(4, 'kong', '654321', 'staff', 'malaysia', 'kong@gmail.com', '12615371');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`AnnouncementID`);

--
-- Indexes for table `trainticket`
--
ALTER TABLE `trainticket`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `train_schedule`
--
ALTER TABLE `train_schedule`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `AnnouncementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainticket`
--
ALTER TABLE `trainticket`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `train_schedule`
--
ALTER TABLE `train_schedule`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
