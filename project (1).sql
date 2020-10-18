-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-10-18 23:49:32
-- 服务器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `project`
--

-- --------------------------------------------------------

--
-- 表的结构 `course`
--

CREATE TABLE `course` (
  `coursecode` varchar(50) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `roomID` varchar(20) NOT NULL,
  `college` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `course`
--

INSERT INTO `course` (`coursecode`, `coursename`, `fullname`, `time`, `roomID`, `college`) VALUES
('CIV3CPM', 'CPM', 'CIVIL ENGINEERING PROJECT MANAGEMENT', '8:00-12:00 Tues', '8.01', 'MEL'),
('CSE1IOO', 'IOO', 'Intermedia Objected Oriented Fundation', '14:00-18:00, Thur', '1.06', 'SYD'),
('CSE2INE', 'INE', 'Intermedia Network Engineering', '13:00-15:00, Wed', '1.14', 'SYD'),
('CSE3MAD', 'MAD', 'Mobile Application Development', '14:00-18:00, Wed', '1.15', 'SYD'),
('ELE1IEL', 'IEL', 'INTRODUCTION TO ELECTRICAL AND ELECTRONIC ENGINEER', '8:00-10:00 Mon', '3.03', 'MEL'),
('MKT1MDP', 'MDP', 'FUNDAMENTALS OF MARKETING', '10:00-12:00 Wed', '2.02', 'SYD'),
('MKT2CBE', 'CBE', 'CONSUMER BEHAVIOUR', '8:00-12:00 Mon', '3.02', 'SYD');

-- --------------------------------------------------------

--
-- 表的结构 `dunling_chat`
--

CREATE TABLE `dunling_chat` (
  `id` int(11) NOT NULL,
  `nicheng` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `time` varchar(55) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE `manager` (
  `managerid` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`managerid`, `password`, `email`, `type`) VALUES
(20201111, '123456', 'admin@gmail.com', 'manager'),
(20202222, '456123', 'admin@outlook.com', 'manager'),
(2020123456, '112233', 'student@gmail.com', 'student'),
(2020555555, '123456', 'STAFF@outlook.com', 'staff');

-- --------------------------------------------------------

--
-- 表的结构 `meeting`
--

CREATE TABLE `meeting` (
  `meetingID` varchar(100) NOT NULL,
  `hostname` varchar(100) NOT NULL,
  `passkey` int(10) NOT NULL,
  `time` varchar(100) NOT NULL,
  `roomID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `meeting`
--

INSERT INTO `meeting` (`meetingID`, `hostname`, `passkey`, `time`, `roomID`) VALUES
('MT0001\r\n', 'Oliver\r\n', 15897, 'Fri July 31 14:00-18:00 2020\r\n', '2.10'),
('MT0002\r\n', 'Tendy\r\n', 15898, 'Mon June 15 13:00-15:00 2020\r\n', '1.14'),
('MT0003\r\n', 'Alan\r\n', 15899, 'Wed Aug 11 14:00-18:00 2020', '3.02');

-- --------------------------------------------------------

--
-- 表的结构 `roster`
--

CREATE TABLE `roster` (
  `userID` int(10) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `phone` int(15) NOT NULL,
  `college` varchar(15) NOT NULL,
  `coursecode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `roster`
--

INSERT INTO `roster` (`userID`, `staff_name`, `gender`, `age`, `phone`, `college`, `coursecode`) VALUES
(2020222222, 'Tendy ', 'Male', 31, 452185566, 'SYD', 'CSE2INE'),
(2020333333, 'Tracy', 'Female', 32, 452185567, 'MEL', 'CSE3MAD'),
(2020444444, 'Ancy', 'Male', 33, 452185565, 'MEL', 'MKT1MDP'),
(2020555555, 'Oliver', 'Male', 30, 452185568, 'SYD', 'MKT2CBE');

-- --------------------------------------------------------

--
-- 表的结构 `student_list`
--

CREATE TABLE `student_list` (
  `studentID` int(10) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(10) NOT NULL,
  `Major` varchar(100) NOT NULL,
  `Phone` int(15) NOT NULL,
  `college` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `student_list`
--

INSERT INTO `student_list` (`studentID`, `studentname`, `Gender`, `Age`, `Major`, `Phone`, `college`) VALUES
(2016456123, 'Ancy\r\n', 'Male', 24, 'Civil Engineering\r\n', 44556677, 'MEL'),
(2018123789, 'Mike\r\n', 'Male', 22, 'IT', 45612378, 'MEL\r\n'),
(2020112233, 'Stella \r\n', 'Female', 20, 'Business\r\n', 48843022, 'SYD\r\n'),
(2020123456, 'Alan', 'Male', 22, 'IT', 45678002, 'SYD\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `timetable`
--

CREATE TABLE `timetable` (
  `studentID` int(10) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `roomID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `timetable`
--

INSERT INTO `timetable` (`studentID`, `studentname`, `college`, `coursecode`, `time`, `roomID`) VALUES
(2016456123, 'Ancy', 'MEL', 'CIV3CPM', '8:00-12:00 Tues', '8.01'),
(2016456123, 'Ancy', 'MEL', 'ELE1IEL', '17:00-19:00 Fri', '3.03'),
(2020112233, 'Stella ', 'SYD', 'MKT1MDP', '10:00-12:00 Wed', '2.02'),
(2020112233, 'Stella', 'SYD', 'MKT2CBE', '8:00-12:00 Mon', '3.02'),
(2020123456, 'Alan', 'SYD', 'CSE1IOO', '14:00-18:00, Thur', '1.06'),
(2020123456, 'Alan', 'SYD', 'CSE2INE', '13:00-15:00, Wed', '1.14'),
(2020123456, 'Alan', 'SYD', 'MKT1MDP', '10:00-12:00 Wed', '2.02'),
(2020123456, 'Alan', 'SYD', 'MKT2CBE', '8:00-12:00 Mon', '3.02');

--
-- 转储表的索引
--

--
-- 表的索引 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`coursecode`);

--
-- 表的索引 `dunling_chat`
--
ALTER TABLE `dunling_chat`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerid`);

--
-- 表的索引 `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meetingID`);

--
-- 表的索引 `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`userID`);

--
-- 表的索引 `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`studentID`);

--
-- 表的索引 `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`studentID`,`coursecode`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `dunling_chat`
--
ALTER TABLE `dunling_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `manager`
--
ALTER TABLE `manager`
  MODIFY `managerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020555556;

--
-- 使用表AUTO_INCREMENT `student_list`
--
ALTER TABLE `student_list`
  MODIFY `studentID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020123457;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
