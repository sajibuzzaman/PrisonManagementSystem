-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 03:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prisoner_management`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `admin`
-- (See below for the actual view)
--
CREATE TABLE `admin` (
`username` varchar(30)
,`password` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `block_info`
--

CREATE TABLE `block_info` (
  `B_ID` varchar(30) NOT NULL,
  `B_Type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block_info`
--

INSERT INTO `block_info` (`B_ID`, `B_Type`) VALUES
('B101', 'Large'),
('B102', 'Large'),
('B103', 'medium'),
('B104', 'medium'),
('B105', 'small');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_ID` varchar(10) NOT NULL,
  `P_ID` varchar(10) NOT NULL,
  `course_name` varchar(15) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_ID`, `P_ID`, `course_name`, `duration`, `start_date`) VALUES
('C105', 'P105', 'construction', '6 month', '2018-11-05'),
('C106', 'P101', 'web depveloping', '3 month', '2019-03-02');

-- --------------------------------------------------------

--
-- Stand-in structure for view `crime`
-- (See below for the actual view)
--
CREATE TABLE `crime` (
`crime_type` varchar(30)
,`tcrime` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `crimelocation`
-- (See below for the actual view)
--
CREATE TABLE `crimelocation` (
`crime_location` varchar(30)
,`location` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

CREATE TABLE `guard` (
  `Guard_ID` varchar(10) NOT NULL,
  `B_ID` varchar(30) NOT NULL,
  `Guard_name` varchar(15) NOT NULL,
  `shift` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`Guard_ID`, `B_ID`, `Guard_name`, `shift`) VALUES
('G101', 'B101', 'Saurav Das', 'Morning'),
('G102', 'B102', 'Ahad Adil', 'Evening'),
('G103', 'B105', 'Kamran Hasan', 'Morning'),
('G104', 'B103', 'Alamin hasan', 'Night');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner_info`
--

CREATE TABLE `prisoner_info` (
  `P_ID` varchar(10) NOT NULL,
  `B_ID` varchar(30) NOT NULL,
  `P_name` varchar(15) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DoB` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `crime_type` varchar(30) NOT NULL,
  `crime_location` varchar(30) NOT NULL,
  `punishment` varchar(50) NOT NULL,
  `p_start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoner_info`
--

INSERT INTO `prisoner_info` (`P_ID`, `B_ID`, `P_name`, `Gender`, `DoB`, `Address`, `crime_type`, `crime_location`, `punishment`, `p_start_date`) VALUES
('P101', 'B101', 'Naimul Pathan', 'male', '1997-02-20', 'Araihazar', 'Theif', 'Sanarpar', '6 month jail', '2019-01-19'),
('P102', 'B101', 'Siddarth Jou', 'male', '1997-07-03', 'Narshingdi', 'Rapist', 'Jatrabari', ' 3 years jail', '2019-01-18'),
('P103', 'B102', 'Maisha Muntaha', 'female', '1998-05-02', 'Sonargaon', 'Theif', 'Sanarpar', '6 month jail', '2018-08-02'),
('P104', 'B103', 'Urmi Rahman', 'female', '1995-05-02', 'Jatrabari', 'Theif', 'Sanarpar', '5 month jail', '2019-01-01'),
('P105', 'B105', 'Sobuj Khan', 'male', '1994-08-02', 'Mirpur', 'Murder', 'Mirpur', '10 year jail', '2018-09-02'),
('P126', 'B102', 'redwan ahmed', 'male', '1997-04-05', 'Jatrabari', 'Theif', 'JKatrabari', '4 month Jail', '2019-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `userinfotable`
--

CREATE TABLE `userinfotable` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfotable`
--

INSERT INTO `userinfotable` (`id`, `username`, `fullname`, `gender`, `department`, `password`) VALUES
(6, 'PATHAN', 'Naimul Pathan', 'male', 'General Employee', 'B160305026'),
(13, 'sajibuzzaman', 'Sajib Uzzaman', 'male', 'Inspector General of Prisons', 'B160305025'),
(14, 'nahid', 'Nahid Hasan', 'male', 'Deputy Inspector General', '123');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_info`
--

CREATE TABLE `visitor_info` (
  `visitor_id` varchar(10) NOT NULL,
  `P_ID` varchar(10) NOT NULL,
  `V_name` varchar(15) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `relationship` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_info`
--

INSERT INTO `visitor_info` (`visitor_id`, `P_ID`, `V_name`, `Address`, `relationship`, `date`) VALUES
('aq', 'P101', 'Joy hasan', 'Jatrabari', 'cousin', '2019-01-01'),
('V102', 'P102', 'Robi ahmed', 'old dhaka', 'friend', '2019-02-03'),
('V109', 'P101', 'Naimul Khan', 'Jatrabari', 'Brother', '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `W_ID` varchar(10) NOT NULL,
  `P_ID` varchar(10) NOT NULL,
  `W_type` varchar(15) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`W_ID`, `P_ID`, `W_type`, `description`) VALUES
('W101', 'P155', 'garden cleaning', 'Good'),
('W102', 'P105', 'labourer', 'Good');

-- --------------------------------------------------------

--
-- Structure for view `admin`
--
DROP TABLE IF EXISTS `admin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `admin`  AS  (select `userinfotable`.`username` AS `username`,`userinfotable`.`password` AS `password` from `userinfotable`) ;

-- --------------------------------------------------------

--
-- Structure for view `crime`
--
DROP TABLE IF EXISTS `crime`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `crime`  AS  (select `prisoner_info`.`crime_type` AS `crime_type`,count(`prisoner_info`.`crime_type`) AS `tcrime` from `prisoner_info` group by `prisoner_info`.`crime_type`) ;

-- --------------------------------------------------------

--
-- Structure for view `crimelocation`
--
DROP TABLE IF EXISTS `crimelocation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `crimelocation`  AS  (select `prisoner_info`.`crime_location` AS `crime_location`,count(`prisoner_info`.`crime_location`) AS `location` from `prisoner_info` group by `prisoner_info`.`crime_location`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block_info`
--
ALTER TABLE `block_info`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `P_ID_2` (`P_ID`);

--
-- Indexes for table `guard`
--
ALTER TABLE `guard`
  ADD PRIMARY KEY (`Guard_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `prisoner_info`
--
ALTER TABLE `prisoner_info`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `userinfotable`
--
ALTER TABLE `userinfotable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_info`
--
ALTER TABLE `visitor_info`
  ADD PRIMARY KEY (`visitor_id`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`W_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfotable`
--
ALTER TABLE `userinfotable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `prisoner_info` (`P_ID`);

--
-- Constraints for table `guard`
--
ALTER TABLE `guard`
  ADD CONSTRAINT `guard_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `block_info` (`B_ID`);

--
-- Constraints for table `prisoner_info`
--
ALTER TABLE `prisoner_info`
  ADD CONSTRAINT `prisoner_info_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `block_info` (`B_ID`);

--
-- Constraints for table `visitor_info`
--
ALTER TABLE `visitor_info`
  ADD CONSTRAINT `visitor_info_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `prisoner_info` (`P_ID`);

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `prisoner_info` (`P_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
