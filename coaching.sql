-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 07:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `username`, `password`) VALUES
('academic@iiitdmj', 'Nitin Triphati', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `complain_id` varchar(20) NOT NULL,
  `complain_detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`complain_id`, `complain_detail`) VALUES
('20bcs142', 'all slides are not available');

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `id` int(255) NOT NULL,
  `course` varchar(20) NOT NULL,
  `files` varchar(200) DEFAULT NULL,
  `filename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`id`, `course`, `files`, `filename`) VALUES
(1, 'DBMS', 'upload/output3.png', 'output3.png'),
(5, 'DS', 'upload/Screenshot (5).png', NULL),
(6, 'COA', 'upload/Screenshot (9).png', 'Screenshot (9).png');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `Tid` varchar(15) NOT NULL,
  `Tname` varchar(15) NOT NULL,
  `Gender` char(1) NOT NULL,
  `DOB` date NOT NULL,
  `phone_no` text NOT NULL,
  `QFT` varchar(40) NOT NULL,
  `no_of_course` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`Tid`, `Tname`, `Gender`, `DOB`, `phone_no`, `QFT`, `no_of_course`) VALUES
('ayan@iiitdmj', 'Ayan seal', 'M', '1980-10-12', '2345127896', 'Phd', 2),
('manish@iitdmj', 'Manish Bajpai', 'M', '1975-02-11', '2345127896', 'Phd', 1),
('preeti@iiitdmj', 'Preeti khana', 'F', '1975-10-11', '9865457812', 'phd', 1),
('sarban@iiitdmj', 'Sraban Mohanty', 'M', '1975-02-10', '3256478956', 'Phd', 1),
('Sriram@iiitdmj', 'Siram Kanvah', 'M', '1973-11-09', '8685741236', 'phd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `srequest`
--

CREATE TABLE `srequest` (
  `userid` varchar(15) NOT NULL,
  `sname` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `srequest`
--

INSERT INTO `srequest` (`userid`, `sname`, `dob`, `gender`, `phone_no`, `password`) VALUES
('20bcs138', 'Nandipeni bhargav', '2001-10-10', 'M', '7258076567', '1234'),
('20bcs148', 'Om sharma', '2001-10-01', 'M', '9685741654', '54321'),
('20bcs150', 'Param kesarwani', '2001-10-10', 'M', '7258076945', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `stlogin`
--

CREATE TABLE `stlogin` (
  `userid` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stlogin`
--

INSERT INTO `stlogin` (`userid`, `password`) VALUES
('20bcs142', 'Navneet123'),
('20bcs143', '12345'),
('20bcs146', 'Neil123'),
('20bcs147', 'nutan123'),
('20bcs151', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sid` varchar(15) NOT NULL,
  `Sname` varchar(15) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `S_DOB` date DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sid`, `Sname`, `Gender`, `S_DOB`, `phone_no`) VALUES
('20bcs142', 'Navneet kumar', 'M', '2002-04-09', '7258076955'),
('20bcs143', 'Nayan Tripathi', 'M', '2001-02-06', '6947583698'),
('20bcs146', 'Neil Sagar Sahu', 'M', '2002-01-06', '7258076866'),
('20bcs147', 'Nutan Shukla', 'M', '2002-06-02', '9685741236'),
('20bcs151', 'Paras gami', 'M', '2001-11-10', '9685741237');

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

CREATE TABLE `tlogin` (
  `userid` varchar(15) NOT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`userid`, `password`) VALUES
('ayan@iiitdmj', '54321'),
('manish@iitdmj', '123456'),
('preeti@iiitdmj', '12345'),
('sarban@iiitdmj', '98765'),
('Sriram@iiitdmj', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `trequest`
--

CREATE TABLE `trequest` (
  `Tid` varchar(15) NOT NULL,
  `Tname` varchar(15) NOT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `DOB` date NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `QFT` varchar(40) NOT NULL,
  `no_of_course` int(10) DEFAULT 1,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trequest`
--

INSERT INTO `trequest` (`Tid`, `Tname`, `Gender`, `DOB`, `phone_no`, `QFT`, `no_of_course`, `password`) VALUES
('ds@iiitdmj', 'Durgesh singh', 'M', '1975-10-11', 7251476866, 'phd', 2, '54321'),
('mk@iiitdmj', 'mkroy', 'M', '1975-10-11', 7251476866, 'phd', 1, '54321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `srequest`
--
ALTER TABLE `srequest`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `stlogin`
--
ALTER TABLE `stlogin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `tlogin`
--
ALTER TABLE `tlogin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `trequest`
--
ALTER TABLE `trequest`
  ADD PRIMARY KEY (`Tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stlogin`
--
ALTER TABLE `stlogin`
  ADD CONSTRAINT `stlogin_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `student` (`Sid`);

--
-- Constraints for table `tlogin`
--
ALTER TABLE `tlogin`
  ADD CONSTRAINT `tlogin_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `professor` (`Tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
