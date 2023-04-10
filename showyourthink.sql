-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 04:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showyourthink`
--

-- --------------------------------------------------------

--
-- Table structure for table `allthink`
--

CREATE TABLE `allthink` (
  `id` int(11) NOT NULL,
  `ttopic` varchar(50) NOT NULL,
  `tcontent` text NOT NULL,
  `twhowrite` varchar(100) NOT NULL,
  `twhonickname` varchar(100) NOT NULL,
  `tcansee` varchar(10) NOT NULL,
  `tdate` date NOT NULL,
  `tvote` bigint(20) NOT NULL,
  `timg` varchar(100) NOT NULL,
  `tcate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allthink`
--

INSERT INTO `allthink` (`id`, `ttopic`, `tcontent`, `twhowrite`, `twhonickname`, `tcansee`, `tdate`, `tvote`, `timg`, `tcate`) VALUES
(30, 'LONDON', 'ในเว็บไซต์นี้คุณสามารถทำได้ทุกอย่าง ไม่ว่าจะเป็นการแนะนำการไปต่างประเทศ การพูดคุยต่าง ๆ คุณจะเป็นอิสระบนเว็บไซต์แห่งนี้ จะไม่มีการเปิดเผยข้อมูลตัวตนของคุณ', 'ADMIN', 'ADMIN', '1', '2021-05-08', 1, 'https://twinfinite.net/wp-content/uploads/2020/08/Dragon-Ball-FighterZ-8.jpg', '9'),
(31, 'awda', 'รายละเอียดwdawdawda', '123456', '123456', '0', '2021-05-09', 0, 'https://i.pinimg.com/originals/0c/ab/69/0cab69ae2fef633271c5444bd0a423bc.jpg', '1'),
(32, 'TEST', 'TEST', 'SYSTEM', 'SYSTEM', '0', '0000-00-00', 0, 'https://cdn.wallpapersafari.com/10/43/NMDAo5.jpg', '9');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(11) NOT NULL,
  `announce` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `announce`) VALUES
(1, 'WELCOME TO SHOW YOUR THINK');

-- --------------------------------------------------------

--
-- Table structure for table `messagebox`
--

CREATE TABLE `messagebox` (
  `ownermes` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `messagebox` text NOT NULL,
  `whosend` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagebox`
--

INSERT INTO `messagebox` (`ownermes`, `topic`, `messagebox`, `whosend`, `date`) VALUES
('WEB MASTER', 'WEB MASTER', 'WEB MASTER', '123456', '2021-05-06'),
('123456', '123456', '123456', '123456', '2021-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `level` int(1) NOT NULL,
  `u_status` int(1) NOT NULL DEFAULT 0,
  `u_name` text NOT NULL,
  `u_nickname` text NOT NULL,
  `p_word` varchar(1000) NOT NULL,
  `e_mail` text NOT NULL,
  `U_SID` varchar(1000) NOT NULL,
  `user_img` varchar(100) DEFAULT NULL,
  `point` float DEFAULT 0,
  `reward` float NOT NULL DEFAULT 0,
  `follow` int(11) DEFAULT 0,
  `created` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `level`, `u_status`, `u_name`, `u_nickname`, `p_word`, `e_mail`, `U_SID`, `user_img`, `point`, `reward`, `follow`, `created`) VALUES
(1, 7, 1, '123456', '123456', 'MTIzNDU2', '123456@hotmail.com', 'MGM4OGQ1NjY5NGMyZmIzYmNjNDE2ZTEyMmMxMDcyZWI=', 'https://sun9-54.userapi.com/c9658/u126550760/a_debed71e.jpg', 0, 0, 1000000, 101),
(2, 0, 1, 'tneye1', 'Eye', 'dG5leWUx', 'tneye1@hotmail.com', 'ZjJjNjJjYmZlNzM5OWE4NTRjNjJhNDBiMjYyMGNkOGQ=', '', 0, 0, 0, 0),
(3, 0, 1, 'testregister', 'TEST', 'dGVzdHJlZ2lzdGVy', 'testregister@hotmail.com', 'MmNlZjA0Yzk5MTM0NDJjYzg5YTRkYmExZjRjMzQ0OTM=', '', 0, 0, 0, 0),
(4, 0, 1, 'TESTREGISTER1', 'TESTREGIS', 'VEVTVFJFR0lTVEVSMQ==', 'TESTREGISTER1@hotmail.com', 'YmVhNTUwZjIzNjJhMmQ0ZmJjNmVjY2E1YmQ2ZTBkNGU=', '', 0, 0, 0, 0),
(5, 0, 1, 'adminmix', '♥♣☺Y♣9WEB', 'MDIzNzg2MjEzMXph', 'adminmix@hotmail.com', 'Y2QzYmVmZDY0ZTg1MjEwYjkxNWMwZTVkYWZiNDI2Zjc=', 'https://www.pngitem.com/pimgs/m/122-1223088_one-bot-discord-avatar-hd-png-download.png', 0, 0, 1000000, 5),
(57, 0, 1, 'testwebsite', 'TESTWEB', 'dGVzdHdlYnNpdGU=', 'testwebsite@gmail.com', 'M2EzNDM3YzUyNDM1ZmY0MTVhNGNhNjc2OTI2MzViNmI=', '', 0, 0, 0, 0),
(60, 0, 0, 'TESTTTTTTTTT', 'MAFAKER', 'VEVTVFRUVFRUVFRU', 'TESTTTTTTTTT@hotmail.com', 'ZDYzZjFiZTI0NmZkYTQ2ODRhMTNjNGY5OTUwYTIzZjQ=', '', 0, 0, 0, 0),
(61, 0, 0, 'TESTWEBSITESHOWYOURTHINK', 'สวัสดีค้าบบบบบบบบบบบบบบบ', 'VEVTVFdFQlNJVEVTSE9XWU9VUlRISU5L', 'TESTWEBSITESHOWYOURTHINK@hotmail.com', 'N2YzMjhjNjkzNGU0ZWVlZDYyMDBkYjFjYjNiZTRjNjc=', '', 0, 0, 0, 0),
(62, 0, 1, 'SHOWYOURTHINK', 'WEB TESTER', 'U0hPV1lPVVJUSElOSw==', 'SHOWYOURTHINK@gmail.com', 'MTA0ZmIyYzgzZDQ1NWQ1MjVhOWYwZGIzYjRlNDE4YWQ=', '', 0, 0, 0, 0),
(63, 0, 1, 'HOWTOUSE', 'HOWTOUSE', 'SE9XVE9VU0U=', 'HOWTOUSE@hotmail.com', 'OGE5ZDkwYjkwMjAyNWZjZTE0ZjFlYTQ0MGNkOGIzNzE=', '', 0, 0, 0, 0),
(64, 0, 1, 'HOWTOUSE2', 'HOWTOUSE2', 'SE9XVE9VU0Uy', 'HOWTOUSE2@hotmail.com', 'ZjU5MzIzZTU2YjBkMzEzMDBlNTZkMmQzNmU2ZDhmOTg=', '', 0, 0, 0, 0),
(65, 0, 1, 'HOWTOUSE3', 'HOWTOUSE3', 'SE9XVE9VU0Uz', 'HOWTOUSE3@hotmail.com', 'NjdmNThlMzI4M2UxZjViYzc4MWUyZTEyNzI1ODBhOGY=', '', 0, 0, 0, 0),
(66, 0, 0, 'TEST', 'TEST', 'VEVTVA==', 'testtttt@hotmail.com', 'OGQ1NWVkMDQ4NDM1YmQyMTcxZmI5NzYzNzRhY2M3YTM=', '', 0, 0, 0, 0),
(67, 0, 1, 'ADMIN', 'ADMIN', 'QURNSU4=', 'ADMIN@hotmail.com', 'OTc4ZDIyYzQ1N2U3OWQyNGY1YWFkMDhhZmU3MDc0OWI=', '', 0, 0, 0, 150),
(68, 0, 1, 'SYT | SYSTEM', 'SYT | SYSTEM', 'QURNSU4=', 'SYT@hotmail.com', '', 'https://www.pngitem.com/pimgs/m/122-1223088_one-bot-discord-avatar-hd-png-download.png', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_voted`
--

CREATE TABLE `user_voted` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `idvote` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_voted`
--

INSERT INTO `user_voted` (`id`, `user`, `idvote`, `status`) VALUES
(21, 'HOWTOUSE', 19, 1),
(22, 'HOWTOUSE', 18, 1),
(23, 'HOWTOUSE3', 19, 1),
(24, 'HOWTOUSE3', 18, 1),
(25, 'HOWTOUSE3', 20, 1),
(26, 'HOWTOUSE3', 28, 1),
(27, 'ADMIN', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_activity`
--

CREATE TABLE `web_activity` (
  `id` int(11) NOT NULL,
  `acbackground` varchar(100) NOT NULL,
  `actopic` varchar(100) NOT NULL,
  `actext` varchar(1000) NOT NULL,
  `acday` varchar(100) NOT NULL,
  `actype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_activity`
--

INSERT INTO `web_activity` (`id`, `acbackground`, `actopic`, `actext`, `acday`, `actype`) VALUES
(1, 'blog-1.jpg', 'TEST BLOGGGG', 'TEST', '28/04/2564', 'Activity'),
(2, 'blog-2.jpg', 'blog2', 'blog2', '01/04/2564', 'Activity'),
(3, 'blog-3.jpg', 'blog3', 'blog3', '01/04/2564', 'Activity'),
(4, 'blog-4.jpg', 'blog4', 'blog4', '01/04/2564', 'Activity');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(11) NOT NULL,
  `web_name` varchar(100) NOT NULL,
  `web_topic` varchar(100) NOT NULL,
  `web_version` varchar(100) NOT NULL,
  `web_status` varchar(100) NOT NULL,
  `dashboardads` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `web_name`, `web_topic`, `web_version`, `web_status`, `dashboardads`) VALUES
(1, 'SYT', 'SHOW YOUR THINK', '1.0.1', '1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWMuKv6VxVDHsua3XYjYQuufJxIZ26XyLdiw&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `worldmessage`
--

CREATE TABLE `worldmessage` (
  `id` int(11) NOT NULL,
  `msgtext` text NOT NULL,
  `whosend` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worldmessage`
--

INSERT INTO `worldmessage` (`id`, `msgtext`, `whosend`) VALUES
(25, 'WELCOME TO SHOW YOUR THINK  ♥', 'ADMIN'),
(26, 'ยินดีต้อนรับSYT | SYSTEM เข้าสู่ SYT', 'SYT | SYSTEM'),
(27, 'ยินดีต้อนรับ  adminmix เข้าสู่ SYT', 'SYT | SYSTEM'),
(28, 'ผู้ใช้ : awdwadawdaw ได้เป็นส่วนหนึ่งของ SYT แล้ว', 'SYT | SYSTEM'),
(29, 'สวัสดีครับทุกคน', '♥♣☺Y♣9WEB'),
(30, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(32, 'ยินดีต้อนรับ  ADMIN เข้าสู่ SYT', 'SYT | SYSTEM'),
(34, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(35, 'ยินดีต้อนรับ  ADMIN เข้าสู่ SYT', 'SYT | SYSTEM'),
(42, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(43, 'ยินดีต้อนรับ  ADMIN เข้าสู่ SYT', 'SYT | SYSTEM'),
(44, 'WEB MASTER', 'ADMIN'),
(45, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(46, 'TEST REALTIME CHAT', '123456'),
(47, 'ยินดีต้อนรับ  ADMIN เข้าสู่ SYT', 'SYT | SYSTEM'),
(48, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(49, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(50, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(51, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(52, '123456 ได้ออกจาก SYT', 'SYT | SYSTEM'),
(53, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM'),
(54, '123456 ได้ออกจาก SYT', 'SYT | SYSTEM'),
(55, 'ยินดีต้อนรับ  123456 เข้าสู่ SYT', 'SYT | SYSTEM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allthink`
--
ALTER TABLE `allthink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_voted`
--
ALTER TABLE `user_voted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_activity`
--
ALTER TABLE `web_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worldmessage`
--
ALTER TABLE `worldmessage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allthink`
--
ALTER TABLE `allthink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_voted`
--
ALTER TABLE `user_voted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `web_activity`
--
ALTER TABLE `web_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `worldmessage`
--
ALTER TABLE `worldmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
