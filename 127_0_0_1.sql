-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 06:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'Navdeep Bhanderi', 'navdeepbhanderi1@gmail.com', 'Navdeep@1234', '2023-10-29 09:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `did`, `bname`) VALUES
(6, 2, 'mechanical enginnering'),
(7, 3, 'mechanical enginnering'),
(8, 1, 'it enginnering'),
(9, 1, 'computer science'),
(10, 3, 'bca');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `did` int(11) NOT NULL,
  `dayname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`did`, `dayname`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `did` int(10) NOT NULL,
  `dname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`did`, `dname`) VALUES
(1, 'degree'),
(2, 'diploma'),
(3, 'pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `img`, `fname`, `email`, `password`, `number`, `date`) VALUES
(5, 'Faculty6.jpg', 'NAVDEEP', 'navdeepbhanderi1@gmail.com', '67845', '5463214564', '2023-10-31 22:11:32'),
(6, 'Faculty1964.jpeg', 'BHANDERI NAVDEEP KISHORBHAI', 'navdeepbhanderi@gmail.com', '8765432', '5463214564', '2023-10-31 22:45:50'),
(7, 'Faculty7066.jpg', 'ROHAN', 'rohan@gmail.com', '867543', '63135', '2023-10-31 22:50:08'),
(8, 'Faculty8413.jpg', 'ROHAN2', 'rohan@gmail.com', 'tr3', '63135', '2023-10-31 22:50:46'),
(9, 'Faculty9209.jpg', 'MEHUL', 'mehul@gmail.com', '654356343', '564673421', '2023-11-01 07:53:54'),
(10, 'Faculty2198.jpeg', 'CHIRANGSIR', 'crudani31@gmail.com', '32', '543', '2023-11-01 10:05:28'),
(11, 'Faculty4641.PNG', 'CHRMI', 'crudani31@gmail.com', '64537', '6543127856', '2023-11-02 16:00:42'),
(12, 'Faculty7555.png', 'SWETA', 'abcd@gmail.com', '5432', '5463214564', '2023-11-03 09:48:56'),
(13, 'Faculty953.png', 'RONAK', 'abcd@gmail.com', '453253', '5463214564', '2023-11-03 10:51:18'),
(14, 'Faculty5970.jpg', 'SUNNY SIR', 'abcd@gmail.com', '67u53', '5463214564', '2023-11-03 15:02:47'),
(15, 'Faculty4886.jpg', 'SUNNY SIR', 'abcd@gmail.com', '67u53', '5463214564', '2023-11-03 15:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_role`
--

CREATE TABLE `faculty_role` (
  `id` int(10) NOT NULL,
  `fid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `sem` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_role`
--

INSERT INTO `faculty_role` (`id`, `fid`, `bid`, `subject`, `sem`, `date`) VALUES
(22, 6, 6, 'data structure', '2nd Semester', '2023-11-01 08:00:51'),
(29, 7, 6, 'python', '2nd Semester', '2023-11-01 21:13:24'),
(30, 10, 9, 'ai & ml', '3rd Semester', '2023-11-01 21:13:43'),
(31, 10, 9, 'computer network', '8th Semester', '2023-11-01 21:13:55'),
(32, 10, 9, 'dbms', '3rd Semester', '2023-11-01 21:15:21'),
(33, 7, 9, 'java', '2nd Semester', '2023-11-01 21:17:21'),
(34, 10, 10, 'python', '2nd Semester', '2023-11-01 21:17:56'),
(35, 10, 6, 'data structure', '2nd Semester', '2023-11-02 10:53:52'),
(37, 10, 6, 'computer network', '4th Semester', '2023-11-02 10:55:02'),
(38, 11, 8, 'data structure', '4th Semester', '2023-11-02 16:01:06'),
(39, 7, 6, 'computer network', '8th Semester', '2023-11-03 08:22:40'),
(40, 10, 6, 'java', '1st Semester', '2023-11-03 08:35:52'),
(41, 12, 6, 'data structure', '3rd Semester', '2023-11-03 09:49:33'),
(42, 12, 6, 'python', '5th Semester', '2023-11-03 09:50:15'),
(43, 6, 6, 'ai & ml', '3rd Semester', '2023-11-03 10:02:29'),
(44, 13, 10, 'ai & ml', '4th Semester', '2023-11-03 10:51:40'),
(45, 14, 6, 'ai & ml', '3rd Semester', '2023-11-03 15:02:58'),
(46, 14, 6, 'python', '8th Semester', '2023-11-03 15:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `eid` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL,
  `number` varchar(10) NOT NULL,
  `fnumber` varchar(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`eid`, `name`, `email`, `password`, `number`, `fnumber`, `dept`, `branch`, `sem`, `date`) VALUES
(7, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '8th Semester', '2023-11-02 20:50:41'),
(8, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '2nd Semester', '2023-11-02 20:50:41'),
(9, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '2nd Semester', '2023-11-02 20:50:41'),
(10, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '8th Semester', '2023-11-02 20:50:41'),
(11, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '8th Semester', '2023-11-02 20:50:41'),
(12, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '1st Semester', '2023-11-02 20:52:06'),
(13, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '1st Semester', '2023-11-02 20:52:06'),
(14, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '1st Semester', '2023-11-02 20:52:06'),
(15, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '1st Semester', '2023-11-02 20:52:06'),
(16, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '1st Semester', '2023-11-02 20:52:06'),
(17, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '1st Semester', '2023-11-02 20:52:06'),
(18, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '3rd Semester', '2023-11-02 20:52:52'),
(19, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '3rd Semester', '2023-11-02 20:52:52'),
(20, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '3rd Semester', '2023-11-02 20:52:52'),
(21, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '3rd Semester', '2023-11-02 20:52:52'),
(22, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '3rd Semester', '2023-11-02 20:52:52'),
(23, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '3rd Semester', '2023-11-02 20:52:52'),
(24, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '4th Semester', '2023-11-02 20:53:50'),
(25, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '4th Semester', '2023-11-02 20:53:50'),
(26, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '4th Semester', '2023-11-02 20:53:50'),
(27, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '4th Semester', '2023-11-02 20:53:50'),
(28, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '4th Semester', '2023-11-02 20:53:50'),
(29, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '4th Semester', '2023-11-02 20:53:50'),
(30, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '2nd Semester', '2023-11-02 20:54:47'),
(31, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '2nd Semester', '2023-11-02 20:54:47'),
(32, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '2nd Semester', '2023-11-02 20:54:47'),
(33, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '2nd Semester', '2023-11-02 20:54:47'),
(34, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '2nd Semester', '2023-11-02 20:54:47'),
(35, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '2nd Semester', '2023-11-02 20:54:47'),
(36, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '5th Semester', '2023-11-02 20:55:29'),
(37, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '5th Semester', '2023-11-02 20:55:29'),
(38, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '5th Semester', '2023-11-02 20:55:29'),
(39, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '5th Semester', '2023-11-02 20:55:29'),
(40, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '5th Semester', '2023-11-02 20:55:29'),
(41, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '5th Semester', '2023-11-02 20:55:29'),
(42, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '6th Semester', '2023-11-02 20:56:11'),
(43, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '6th Semester', '2023-11-02 20:56:11'),
(44, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '6th Semester', '2023-11-02 20:56:11'),
(45, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '6th Semester', '2023-11-02 20:56:11'),
(46, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '6th Semester', '2023-11-02 20:56:11'),
(47, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '6th Semester', '2023-11-02 20:56:11'),
(48, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '7th Semester', '2023-11-02 20:56:44'),
(49, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '7th Semester', '2023-11-02 20:56:44'),
(50, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '7th Semester', '2023-11-02 20:56:44'),
(51, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '7th Semester', '2023-11-02 20:56:44'),
(52, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '7th Semester', '2023-11-02 20:56:44'),
(53, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '7th Semester', '2023-11-02 20:56:44'),
(54, 'John Doe', 'john.doe@example.com', '123456', '+155555555', '1234567890', 'degree', 'it enginnering', '8th Semester', '2023-11-02 20:57:50'),
(55, 'Jane Doe', 'jane.doe@example.com', '123456', '+155555555', '9876543210', 'degree', 'computer science', '8th Semester', '2023-11-02 20:57:50'),
(56, 'Peter Parker', 'peter.parker@example.com', '123456', '+155555555', '0987654321', 'diploma', 'mechanical enginnering', '8th Semester', '2023-11-02 20:57:50'),
(57, 'Mary Jane Watson', 'mary.jane.watson@example.com', '123456', '+155555555', '1098765432', 'diploma', 'mechanical enginnering', '8th Semester', '2023-11-02 20:57:50'),
(58, 'Bruce Wayne', 'bruce.wayne@example.com', '123456', '+155555555', '2109876543', 'pharmacy', 'mechanical enginnering', '8th Semester', '2023-11-02 20:57:50'),
(59, 'Selina Kyle', 'selina.kyle@example.com', '123456', '+155555555', '3210987654', 'degree', 'it enginnering', '8th Semester', '2023-11-02 20:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `did`, `subject`, `from`, `to`) VALUES
(108, 1, 'java', '07:30', '08:20'),
(109, 1, 'python', '08:20', '09:10'),
(110, 1, 'ai & ml', '09:10', '10:00'),
(111, 1, 'break', '10:00', '10:30'),
(112, 1, 'data structure', '10:30', '11:20'),
(113, 1, 'dbms', '11:20', '12:10'),
(114, 1, 'computer network', '12:10', '13:00'),
(115, 1, 'Leave', '13:00', '00:00'),
(116, 2, 'python', '07:30', '08:20'),
(117, 2, 'java', '08:20', '09:10'),
(118, 2, 'dbms', '09:10', '10:00'),
(119, 2, 'break', '10:00', '10:30'),
(120, 2, 'ai & ml', '10:30', '11:20'),
(121, 2, 'data structure', '11:20', '12:10'),
(122, 2, 'computer network', '12:10', '13:00'),
(123, 2, 'Leave', '13:00', '00:00'),
(124, 3, 'data structure', '07:30', '08:20'),
(125, 3, 'computer network', '08:20', '09:10'),
(126, 3, 'java', '09:10', '10:00'),
(127, 3, 'break', '10:00', '10:30'),
(128, 3, 'ai & ml', '10:30', '11:20'),
(129, 3, 'python', '11:20', '12:10'),
(130, 3, 'dbms', '12:10', '13:00'),
(131, 3, 'Leave', '13:00', '00:00'),
(132, 4, 'java', '07:30', '08:20'),
(133, 4, 'python', '08:20', '09:10'),
(134, 4, 'dbms', '09:10', '10:00'),
(135, 4, 'break', '10:00', '10:30'),
(136, 4, 'ai & ml', '10:30', '11:20'),
(137, 4, 'computer network', '11:20', '12:10'),
(138, 4, 'data structure', '12:10', '13:00'),
(139, 4, 'Leave', '13:00', '00:00'),
(140, 5, 'python', '07:30', '08:20'),
(141, 5, 'java', '08:20', '09:10'),
(142, 5, 'dbms', '09:10', '10:00'),
(143, 5, 'break', '10:00', '10:30'),
(144, 5, 'ai & ml', '10:30', '11:20'),
(145, 5, 'data structure', '11:20', '12:10'),
(146, 5, 'computer network', '12:10', '13:00'),
(147, 5, 'Leave', '13:00', '00:00'),
(148, 6, 'No Lecture Today', '00:00', '00:00'),
(149, 7, 'No Lecture Today', '00:00', '00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `faculty_role`
--
ALTER TABLE `faculty_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faculty_role`
--
ALTER TABLE `faculty_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
