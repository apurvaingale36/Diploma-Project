-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 09:52 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cm`
--

-- --------------------------------------------------------

--
-- Table structure for table `parentinfo`
--

CREATE TABLE `parentinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `sname` text NOT NULL,
  `eno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentinfo`
--

INSERT INTO `parentinfo` (`id`, `name`, `password`, `mobile`, `email`, `address`, `sname`, `eno`) VALUES
(1, 'Ajit', '123', '9730325138', 'ajit@gmail.com', 'pjne', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `domain` text NOT NULL,
  `class` text NOT NULL,
  `idno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `password`, `mobile`, `email`, `domain`, `class`, `idno`) VALUES
(1, 'ajit', '123', '9730325138', 'ajit.srccode@gmail.com', 'java', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `eno` varchar(10) DEFAULT NULL,
  `pno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `password`, `mobile`, `email`, `address`, `eno`, `pno`) VALUES
(1, 'ff', '123', '999999', 'rrrr', 'kkkk', '0', 0),
(21, 'tejas', 'tejas', '7350308031', 'tejas', 'pp', '0', 0),
(22, 'qq', 'qq', '9527413869', 'qq', 'oo', '0', 0),
(23, 'ss', 'ss', '7350308031', 'ss', 'ss', '0', 0),
(24, 'aa', 'aa', '7350308031', 'aa', 'aa', '0', 0),
(25, 'ajit', '123', '973032513', 'ajit.srccode@gmail.com', 'Pune', '123', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parentinfo`
--
ALTER TABLE `parentinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parentinfo`
--
ALTER TABLE `parentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
