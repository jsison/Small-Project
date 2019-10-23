-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 06:37 AM
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
-- Database: `sample project`
--

-- --------------------------------------------------------

--
-- Table structure for table `angular upgrade`
--

CREATE TABLE `angular upgrade` (
  `task_name` text NOT NULL,
  `assigned` text NOT NULL,
  `est_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angular upgrade`
--

INSERT INTO `angular upgrade` (`task_name`, `assigned`, `est_hours`) VALUES
('Upgrade Angular', 'Lan', 15),
('Fix Broken Things', 'Stuart', 10),
('Test', 'Lan', 10);

-- --------------------------------------------------------

--
-- Table structure for table `e-commerce website`
--

CREATE TABLE `e-commerce website` (
  `task_name` text NOT NULL,
  `assigned` text NOT NULL,
  `est_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e-commerce website`
--

INSERT INTO `e-commerce website` (`task_name`, `assigned`, `est_hours`) VALUES
('Product Pages', 'Adam', 5),
('Shopping Cart', 'Tyler', 10),
('My Account', 'Adam', 5);

-- --------------------------------------------------------

--
-- Table structure for table `project_list`
--

CREATE TABLE `project_list` (
  `proj_name` text NOT NULL,
  `users` text NOT NULL,
  `est_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_list`
--

INSERT INTO `project_list` (`proj_name`, `users`, `est_hours`) VALUES
('Websocket Updates', 'Stuart', 10),
('Angular Upgrade', 'Lan, Stuart', 35),
('E-Commerce Website', 'Adam, Tyler', 20);

-- --------------------------------------------------------

--
-- Table structure for table `websocket updates`
--

CREATE TABLE `websocket updates` (
  `task_name` text NOT NULL,
  `assigned` text NOT NULL,
  `est_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websocket updates`
--

INSERT INTO `websocket updates` (`task_name`, `assigned`, `est_hours`) VALUES
('Add to Socket.IO', 'Stuart', 2),
('Enable Broadcasting', 'Stuart', 5),
('Adjust Interface', 'Stuart', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_list`
--
ALTER TABLE `project_list`
  ADD UNIQUE KEY `name` (`proj_name`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
