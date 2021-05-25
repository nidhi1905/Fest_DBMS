-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 10:41 AM
-- Server version: 10.1.34-MariaDB
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
-- Database: `un`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', '6789');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `E_id` int(11) NOT NULL,
  `Ename` varchar(20) NOT NULL,
  `Time` time NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`E_id`, `Ename`, `Time`, `Date`) VALUES
(2, 'group dance', '04:00:00', '2018-05-12'),
(5, '200 meter running', '11:00:00', '2018-05-24'),
(7, 'drama', '01:00:00', '2018-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `O_id` int(11) NOT NULL,
  `Oname` varchar(20) NOT NULL,
  `Phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`O_id`, `Oname`, `Phone`) VALUES
(0, '', 0),
(1, 'Ujwal', 7411226650),
(2, 'varshitha', 7019138313),
(3, 'vinay', 7896543210),
(4, 'tej', 9876543120),
(5, 'Ujwal', 8345344533),
(7, 'santhosh', 9879876556),
(726483, 'Sudharshan', 12345678901);

-- --------------------------------------------------------

--
-- Table structure for table `organizes`
--

CREATE TABLE `organizes` (
  `E_id` int(11) NOT NULL,
  `O_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizes`
--

INSERT INTO `organizes` (`E_id`, `O_id`) VALUES
(2, 2),
(5, 5),
(7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `particepates_in`
--

CREATE TABLE `particepates_in` (
  `E_id` int(11) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `particepates_in`
--

INSERT INTO `particepates_in` (`E_id`, `usn`) VALUES
(2, '4mn16cs033'),
(2, '4mn16cs039'),
(2, '4mn16cs046'),
(2, '6'),
(2, 'eca'),
(7, '17'),
(7, '4mn16cs018'),
(7, 'asns'),
(7, 'edc3');

-- --------------------------------------------------------

--
-- Table structure for table `particepent`
--

CREATE TABLE `particepent` (
  `usn` varchar(10) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `particepent`
--

INSERT INTO `particepent` (`usn`, `Pname`, `Department`, `sem`) VALUES
('', '', '', 0),
('1', '1', '1', 1),
('124', 'adi', 'mee', 1),
('17', 'varsh tale', 'varshri', 5),
('234', 'asdf', 'cse', 3),
('332', 'qwer', 'fds', 34),
('4mn16cs003', 'akash', 'cse', 5),
('4mn16cs010', 'chan', 'cse', 5),
('4mn16cs018', 'mahadev', 'cse', 5),
('4mn16cs033', 'raki', 'cse', 5),
('4mn16cs039', 'srinidhi', 'cse', 5),
('4mn16cs046', 'raki', '5', 5),
('6', 'anagha', 'cs', 3),
('asd32', 'bbbs', '4', 2),
('asns', 'dacs', 'jcsak', 2),
('eca', 'wsxd', 'aecx', 1),
('edc3', 'chan', 'ec', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`O_id`);

--
-- Indexes for table `organizes`
--
ALTER TABLE `organizes`
  ADD PRIMARY KEY (`E_id`,`O_id`),
  ADD KEY `E_id` (`E_id`),
  ADD KEY `O_id` (`O_id`);

--
-- Indexes for table `particepates_in`
--
ALTER TABLE `particepates_in`
  ADD PRIMARY KEY (`E_id`,`usn`),
  ADD KEY `E_id` (`E_id`),
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `particepent`
--
ALTER TABLE `particepent`
  ADD PRIMARY KEY (`usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `organizes`
--
ALTER TABLE `organizes`
  ADD CONSTRAINT `organizes_ibfk_1` FOREIGN KEY (`E_id`) REFERENCES `event` (`E_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organizes_ibfk_2` FOREIGN KEY (`O_id`) REFERENCES `organizer` (`O_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `particepates_in`
--
ALTER TABLE `particepates_in`
  ADD CONSTRAINT `particepates_in_ibfk_1` FOREIGN KEY (`E_id`) REFERENCES `event` (`E_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `particepates_in_ibfk_2` FOREIGN KEY (`usn`) REFERENCES `particepent` (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
