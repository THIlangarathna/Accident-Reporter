-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 06:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `fromemail` varchar(255) NOT NULL,
  `toemail` varchar(255) DEFAULT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `fromemail`, `toemail`, `msg`, `date`) VALUES
(16, 'ceylinco@gmail.com', 'helani@gmail.com', 'Hello!', '2020-01-09 04:54:20'),
(17, 'ceylinco@gmail.com', 'helani@gmail.com', 'this is about the accident', '2020-01-09 04:55:49'),
(18, 'helani@gmail.com', NULL, 'Hey', '2020-01-09 04:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `licenseno` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `telno` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  `insuranceno` varchar(15) NOT NULL,
  `insurancecom` varchar(255) NOT NULL,
  `vehicleno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`ID`, `name`, `address`, `NIC`, `licenseno`, `DOB`, `gender`, `telno`, `email`, `vehicle`, `insuranceno`, `insurancecom`, `vehicleno`, `password`) VALUES
(13, 'Helani Pinnawela', '48/2,Bagathale rd,colombo', '984638900', '1027593450', '1998-06-19', 'Female', '0784576534', 'helani@gmail.com', 'Car', '34679034', 'Ceylinco', 'GD-4567', '98765'),
(14, 'Micheal Jathin', '25/3,Mathara rd,Mathara', '925604733', '2956835740', '1992-04-23', 'Male', '0713467455', 'micheal@gmail.com', 'Van', '98563286', 'Union Assurance', 'PM-9732', '3456'),
(15, 'Brunthavan Rajkumar', '233/24A,Lakeside rd,Nuwara eliya.', '850389264', '0916538946', '1985-12-01', 'Male', '0770946372', 'rajkumar@gmail.com', 'Bus', '90842546', 'Janashakthi', 'GL-9547', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `uname`, `email`, `phoneno`, `msg`) VALUES
(2, 'Thilina', 'helani@gmail.com', '077123456', 'Useful Website!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telno` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approve` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`ID`, `name`, `company`, `branch`, `address`, `telno`, `email`, `password`, `approve`) VALUES
(9, 'Paatali Senarathna', '', 'Homagama', 'No.88/2, Katuwana Road, Wijesinghe Mawatha, Homagama.', '0112679302', 'janashakthi@gmail.co', '8463278', 1),
(8, 'Hiruni Dissanayake', '', 'Pannipitiya', 'Colombo - Batticaloa Hwy, Pannipitiya', '0111458934', 'ceylinco@gmail.com', '123456', 1),
(10, 'Gimasha Aranwela', '', 'Moratuwa', '472 1/1, Galle Road, Rawathawathe, Moratuwa, Moratuwa 10400.', '0115784507', 'unio@gmail.com', '237476', 1);

-- --------------------------------------------------------

--
-- Table structure for table `locationsnew`
--

CREATE TABLE `locationsnew` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `location_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationsnew`
--

INSERT INTO `locationsnew` (`id`, `email`, `lat`, `lng`, `description`, `date`, `time`, `district`, `address`, `status`, `location_status`) VALUES
(13, 'rajkumar@gmail.com', 6.9034, 79.8985, 'Bus accident', '2020-01-09', '16:06:00', 'Colombo', '223/25,\r\nParklane rd,Homagama\r\n', 'Critical', 0),
(12, 'micheal@gmail.com', 7.25228, 80.6455, 'hit a light tower', '2020-01-09', '03:35:00', 'Kandy', '', 'Serious', 0),
(11, 'helani@gmail.com', 8.29726, 80.4121, 'Accident with a threewhell', '2020-01-09', '15:35:00', 'Anuradhapura', '48/5,\r\nGalgamuwa rd,Anuradhapura\r\n', 'Normal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telno` varchar(15) NOT NULL,
  `MTDtelno` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approve` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`ID`, `name`, `branch`, `address`, `telno`, `MTDtelno`, `email`, `password`, `approve`) VALUES
(5, 'Ruwan Jananayake', 'Mirigama', 'Pasyala - Giriulla Rd, Mirigama', '011250990', '011250457', 'mirigamapo@gmail.com', '91011', 1),
(6, 'Hirunika Premarathna', 'Homagama', 'Homagama-Diyagama Rd, Homagama', '0114534874', '0114567453', 'homagamapo@gmail.com', '1234', 1),
(7, 'Duminda Perera', 'Mirihana', '373/10 Old Kottawa Rd, Nugegoda', '0111458754', '0111564389', 'mirihanapo@gmail.com', '5678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rda`
--

CREATE TABLE `rda` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telno` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approve` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rda`
--

INSERT INTO `rda` (`ID`, `name`, `branch`, `address`, `telno`, `email`, `password`, `approve`) VALUES
(4, 'Arjun mahendra', 'Western Province', 'Borella - Rajagiriya Rd, Sri Jayawardenepura Kotte', '0113468312', 'westernrda@gmail.com', '234515', 1),
(5, 'Piyumi hemamali', 'Southern Province', 'No. 19 Lower Dickson Rd, Galle 80000', '0112679468', 'southernrda@gmail.co', '678943', 1),
(6, 'Ranjan Selwam', 'Central Province', 'Kandy 20000', '0111896534', 'centralrda@gmail.com', '38966', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `Id` int(11) NOT NULL,
  `idaccident` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`Id`, `idaccident`, `location`) VALUES
(57, '7', 'upload/1577884834_Picture2.png'),
(58, '9', 'upload/1577884898_Picture1.png'),
(59, '9', 'upload/1577884898_Picture2.png'),
(60, '9', 'upload/1577885017_Picture1.png'),
(61, '9', 'upload/1577885017_Picture2.png'),
(62, '10', 'upload/1577886789_Picture5.png'),
(63, '10', 'upload/1577886789_Picture7.png'),
(64, '11', 'upload/1578544956_133676_IMG_0775.jpg'),
(65, '11', 'upload/1578544956_car.jpg'),
(66, '12', 'upload/1578545187_van.jpg'),
(67, '13', 'upload/1578545327_bus.JPG'),
(68, '13', 'upload/1578545328_s1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `locationsnew`
--
ALTER TABLE `locationsnew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rda`
--
ALTER TABLE `rda`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locationsnew`
--
ALTER TABLE `locationsnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rda`
--
ALTER TABLE `rda`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
