-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2018 at 09:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5363369_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_details`
--

CREATE TABLE `additional_details` (
  `RGUKT_Id_Num` varchar(15) NOT NULL,
  `Hostel_Room_Number` varchar(5) NOT NULL,
  `Warden_Name` text NOT NULL,
  `Homeclass_Room` varchar(10) NOT NULL,
  `Homeroom_teacher` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_details`
--

INSERT INTO `additional_details` (`RGUKT_Id_Num`, `Hostel_Room_Number`, `Warden_Name`, `Homeclass_Room`, `Homeroom_teacher`) VALUES
('', '', '', '', ''),
('12345', '555', 'Ramesh', '112', 'Laksmi Kanth'),
('788989', '', '', '', ''),
('98765', '56', 'mnbv', '11', 'cxzq');

-- --------------------------------------------------------

--
-- Table structure for table `address_tbl`
--

CREATE TABLE `address_tbl` (
  `RGUKT_Id_Num` varchar(15) NOT NULL,
  `House_Number` varchar(10) NOT NULL,
  `Street_Name` varchar(15) NOT NULL,
  `Address_Line_1` varchar(20) NOT NULL,
  `City_Town` text NOT NULL,
  `District` text NOT NULL,
  `Pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`RGUKT_Id_Num`, `House_Number`, `Street_Name`, `Address_Line_1`, `City_Town`, `District`, `Pincode`) VALUES
('', '', '', '', '', '', 0),
('12345', '11-14-6/G', 'O-city', 'Kashibugga', 'WARANGAL', 'WARANGAL', 506002),
('788989', '', '', '', '', '', 0),
('98765', '12-1-23', 'kjhg', 'lkjh', 'asdf', 'qwe', 54321);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `RGUKT_Id_Num` varchar(15) CHARACTER SET latin1 NOT NULL,
  `School_Name` text CHARACTER SET latin1 NOT NULL,
  `Town_City` text CHARACTER SET latin1 NOT NULL,
  `Mandal` text CHARACTER SET latin1 NOT NULL,
  `District` text CHARACTER SET latin1 NOT NULL,
  `Date_of_Graduation` int(11) NOT NULL,
  `GPA` float NOT NULL,
  `English_Medium` varchar(5) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`RGUKT_Id_Num`, `School_Name`, `Town_City`, `Mandal`, `District`, `Date_of_Graduation`, `GPA`, `English_Medium`) VALUES
('', '', '', '', '', 0, 0, 'Yes'),
('12345', 'IIITH', 'Hyderabad', 'Lingampally', 'Hyderabad', 2018, 7.95, 'Yes'),
('788989', '', '', '', '', 0, 0, 'Yes'),
('98765', 'as', 'sd', 'df', 'fg', 2018, 9, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `family_information`
--

CREATE TABLE `family_information` (
  `RGUKT_Id_Num` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Father_Name` text CHARACTER SET latin1 NOT NULL,
  `Father_Education` text CHARACTER SET latin1 NOT NULL,
  `Father_Occupation` text CHARACTER SET latin1 NOT NULL,
  `Mother_Name` text CHARACTER SET latin1 NOT NULL,
  `Mother_Education` text CHARACTER SET latin1 NOT NULL,
  `Mother_Occupation` text CHARACTER SET latin1 NOT NULL,
  `Annual_Income` varchar(15) CHARACTER SET latin1 NOT NULL,
  `Caste` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Sub_Caste` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `family_information`
--

INSERT INTO `family_information` (`RGUKT_Id_Num`, `Father_Name`, `Father_Education`, `Father_Occupation`, `Mother_Name`, `Mother_Education`, `Mother_Occupation`, `Annual_Income`, `Caste`, `Sub_Caste`) VALUES
('', '', 'Education Level', 'Occupation', '', 'Education Level', 'Occupation', '', 'Caste', ''),
('12345', 'Eshwar', 'Intermediate', 'Business', 'Karunasri', 'Metriculation', 'House Wife', '100000', 'B. C', 'D'),
('788989', '', 'Education Level', 'Occupation', '', 'Education Level', 'Occupation', '', 'Caste', ''),
('98765', 'qw', 'Bachelors', 'Business', 'er', 'Intermediate', 'House Wife', '100000', 'B. C', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `RGUKT_Id_Num` varchar(15) CHARACTER SET latin1 NOT NULL,
  `first_name` text CHARACTER SET latin1 NOT NULL,
  `middle_name` text CHARACTER SET latin1 NOT NULL,
  `last_name` text CHARACTER SET latin1 NOT NULL,
  `gender` char(7) CHARACTER SET latin1 NOT NULL,
  `date_of_birth` date NOT NULL,
  `mobile_number` bigint(12) NOT NULL,
  `gmail` varchar(20) CHARACTER SET latin1 NOT NULL,
  `skype_id` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`RGUKT_Id_Num`, `first_name`, `middle_name`, `last_name`, `gender`, `date_of_birth`, `mobile_number`, `gmail`, `skype_id`) VALUES
('', '', '', '', 'Male', '0000-00-00', 0, '', ''),
('12345', 'Aditya', '', 'Davalagar', 'Male', '1993-03-06', 9160474351, 'aditya14315@gmail.co', 'a.skype'),
('788989', '', '', '', 'Male', '0000-00-00', 0, '', ''),
('98765', 'a', 'b', 'c', 'Female', '1992-06-05', 1234567890, 'a@123', 'a.ytr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_details`
--
ALTER TABLE `additional_details`
  ADD PRIMARY KEY (`RGUKT_Id_Num`);

--
-- Indexes for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD PRIMARY KEY (`RGUKT_Id_Num`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`RGUKT_Id_Num`);

--
-- Indexes for table `family_information`
--
ALTER TABLE `family_information`
  ADD PRIMARY KEY (`RGUKT_Id_Num`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`RGUKT_Id_Num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
