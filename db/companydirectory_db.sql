-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 12:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companydirectory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hod` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `description` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `name`, `hod`, `email`, `phone`, `description`, `date`) VALUES
('DEPT-27022303', 'operation-production', '', '', '', 'Manage day to day operations and production processes', '2023-09-27'),
('DEPT-27032303', 'Sale', '', '', '', 'Responsible for selling the organization product and services', '2023-09-27'),
('DEPT-27042303', 'marketing', '', '', '', 'Focuses on promoting the organization product and services, market research', '2023-09-27'),
('DEPT-27062303', 'human-resources', '', '', '', 'Responsible for personnel management, recruitment, training, e.t.c', '2023-09-27'),
('DEPT-27372301', 'finance', 'Edosomwan Ganiyat', 'ganny@gmail.com', '09013829585', 'Manages financialtransaction,budgeting, payrol, e.t.c', '2023-09-27'),
('DEPT-27382301', 'quality-assurance', 'Shosanya razaq oluwaseyi', 'skylinesnow07@gmail.com', '09013829585', 'Ensuring the quality and consistency of product and services', '2023-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `fullname`, `address`, `email`, `phone`, `department`, `job_title`, `salary`, `location`, `reg_date`) VALUES
('EPY-131807', 'John Doe', 'north', 'johndoe@gmail.com', '09013829585', 'DEPT-27062303', 'coordinator', 0, 'LOC-17231106', '2023-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_id` varchar(20) NOT NULL,
  `loc_name` varchar(30) NOT NULL,
  `manager` varchar(30) NOT NULL,
  `loc_address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `loc_name`, `manager`, `loc_address`, `state`, `country`, `contact`, `date`) VALUES
('LOC-17231106', 'Agege Branch', 'Shosanya Oluwaseyi', 'Orile Iganmu Agege', 'Ogun', 'Ghana', '09013829585', '2023-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `status`) VALUES
('admin@admin.com', '1111', 'admin', 'yes'),
('johndoe@gmail.com', 'johndoe@gmail.com', 'finance', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
