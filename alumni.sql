-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2020 at 05:04 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `addr_home`
--

CREATE TABLE `addr_home` (
  `a_id` int(11) NOT NULL,
  `House-No` varchar(20) NOT NULL,
  `Moo-home` varchar(50) NOT NULL,
  `road-home` varchar(50) NOT NULL,
  `Province-home` varchar(50) NOT NULL,
  `Area-home` varchar(50) NOT NULL,
  `Sub-area-home` varchar(50) NOT NULL,
  `Postal-Code-home` varchar(5) NOT NULL,
  `Tel-home` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addr_home`
--

INSERT INTO `addr_home` (`a_id`, `House-No`, `Moo-home`, `road-home`, `Province-home`, `Area-home`, `Sub-area-home`, `Postal-Code-home`, `Tel-home`) VALUES
(3, '31', '8', '-', 'นครปฐม', 'กำแพงแสน', 'สระสี่มุม', '73140', '-'),
(4, '34', '2', '-', 'นครปฐม', 'เมือง', 'สระกระเทียม', '73000', '-'),
(5, '13', '9', '-', 'ราชบุรี', 'โพธาราม', 'ท่าชุมพล', '70120', '-'),
(6, '31', '8', '-', 'นครปฐม', 'กำแพงแสน', 'สระสี่มุม', '73140', '-');

-- --------------------------------------------------------

--
-- Table structure for table `addr_work`
--

CREATE TABLE `addr_work` (
  `a_id` int(11) NOT NULL,
  `Work-No` varchar(10) NOT NULL,
  `Moo-work` varchar(50) NOT NULL,
  `road-work` varchar(50) NOT NULL,
  `Province-work` varchar(50) NOT NULL,
  `Area-work` varchar(50) NOT NULL,
  `Sub-area-work` varchar(50) NOT NULL,
  `Postal-Code-work` varchar(5) NOT NULL,
  `Tel-work` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addr_work`
--

INSERT INTO `addr_work` (`a_id`, `Work-No`, `Moo-work`, `road-work`, `Province-work`, `Area-work`, `Sub-area-work`, `Postal-Code-work`, `Tel-work`) VALUES
(3, '86', '9', '-', 'นครปฐม', 'กำแพงแสน', 'กำแพงแสน', '73140', '-'),
(4, '34', '9', '-', 'นครปฐม', 'กำแพงแสน', 'กำแพงแสน', '73140', '-'),
(5, '13', '9', '-', 'ราชบุรี', 'โพธาราม', 'ท่าชุมพล', '70120', '-'),
(6, '31', '8', '-', 'นครปฐม', 'โพธาราม', 'ท่าชุมพล', '70120', '-');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `a_id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `idcard` char(13) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `job` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `face` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`a_id`, `title`, `fname`, `lname`, `idcard`, `sex`, `date`, `job`, `tel`, `face`, `email`, `password`, `image`) VALUES
(3, 'นาย', 'เมืองแมน', 'สระทองจีน', '', 'ชาย', '2000-03-31', 'นักศึกษา', '0972745063', 'Mannyjung', 'srathongjeenm@gmail.com', 'muangman63', '52635819_394390901339127_4717300806129287168_n.jpg'),
(4, 'นาย', 'ศิวกร', 'รามเรือง', '', 'ชาย', '1999-07-07', 'นักศึกษา', '0993896785', 'Siwakorn Ram', 'siwa@gmail.com', '123456', 'jefferson-santos-450408-unsplash.jpg'),
(5, 'นาย', 'ธนกต', 'ตินพ', '', 'ชาย', '2000-02-07', 'student', '0659216799', 'Thanakit', 'Thanakit@gmail.com', '123456', '46976009_1959044544192399_409518955510628352_o.jpg'),
(6, 'นาย', 'เมืองแมน', 'สระทองจีน', '1730201354430', 'ชาย', '2000-03-31', 'student', '0972745063', 'Mannyjung', 'muangman.6336@gmail.com', '0925658330', '46976009_1959044544192399_409518955510628352_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `a_id` int(11) NOT NULL,
  `attend` varchar(4) NOT NULL,
  `finish` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`a_id`, `attend`, `finish`) VALUES
(3, '2561', '2564'),
(4, '2561', '2564'),
(5, '', '2562'),
(6, '2556', '2561');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addr_home`
--
ALTER TABLE `addr_home`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `addr_work`
--
ALTER TABLE `addr_work`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addr_home`
--
ALTER TABLE `addr_home`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `addr_work`
--
ALTER TABLE `addr_work`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addr_home`
--
ALTER TABLE `addr_home`
  ADD CONSTRAINT `addr_home_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `info` (`a_id`);

--
-- Constraints for table `addr_work`
--
ALTER TABLE `addr_work`
  ADD CONSTRAINT `addr_work_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `info` (`a_id`);

--
-- Constraints for table `year`
--
ALTER TABLE `year`
  ADD CONSTRAINT `year_ibfk_1` FOREIGN KEY (`a_id`) REFERENCES `info` (`a_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
