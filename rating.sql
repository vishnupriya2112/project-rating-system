-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 04:41 AM
-- Server version: 10.4.8-MariaDB
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
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(30) NOT NULL,
  `ptitle` text NOT NULL,
  `team_leader` char(30) NOT NULL,
  `member1` char(30) NOT NULL,
  `member2` char(30) NOT NULL,
  `member3` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `ptitle`, `team_leader`, `member1`, `member2`, `member3`) VALUES
(1, 'FLAPPY BIRD', 'AJITHA K', 'DHARANI M', 'DHURGA R', '-'),
(2, 'STREET LIGHT AUTOMATION', 'JAYASRI T', 'BRINDHA S', 'ARTHY M', 'NADHA M A'),
(3, 'PREPAID ELECTRICITY', 'KEERTHANA R', 'KRITHI N T', 'LEKHA L', '-'),
(4, 'MULTI VEDIO SYNCHRONIZED PLAYER', 'DHIVAKAR L', 'ARVINTH S', 'JAI ASWATH R G', '-'),
(5, 'IOT BASED LIGHT ON AND OFF FROM AWAY DISTANCE', 'ADHARSH KUMAR E', 'ARAVINDBABU S', 'KALPANA S', '-'),
(6, 'BRAKE FAILURE INDICATOR', 'PRAVEENA M', 'TAARANI T', 'SHOBIYA K', 'YOGESHWARI K'),
(7, 'GPS', 'Vishnu', 'Sathya', 'sabari', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `pid` int(5) NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`pid`, `rating`) VALUES
(1, 5),
(2, 4),
(3, 5),
(4, 4),
(5, 5),
(6, 4),
(7, 5),
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1),
(6, 0),
(7, 0),
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1),
(6, 0),
(7, 0),
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1),
(6, 2),
(7, 3),
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1),
(6, 2),
(7, 3),
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1),
(6, 2),
(7, 3),
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(1, 5),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(1, 3),
(2, 4),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5),
(1, 5),
(2, 4),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(1, 0),
(2, 0),
(3, 0),
(4, 5),
(5, 5),
(6, 0),
(7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `topper`
--

CREATE TABLE `topper` (
  `pid` int(5) NOT NULL,
  `total_rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topper`
--

INSERT INTO `topper` (`pid`, `total_rate`) VALUES
(1, 11),
(2, 10),
(3, 6),
(4, 11),
(5, 11),
(6, 6),
(7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dept_id` varchar(10) NOT NULL,
  `priority` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `password`, `dept_id`, `priority`) VALUES
('admin', 'admin', 'examsec', 'a'),
('IT', '0d149b90e7394297301c90191ae775f0', 'IT', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `institution` char(50) NOT NULL,
  `location` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewer`
--

INSERT INTO `viewer` (`id`, `name`, `institution`, `location`) VALUES
(93, 'vishnu ', 'avps', 'erode');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `topper`
--
ALTER TABLE `topper`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
