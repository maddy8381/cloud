-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 06:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secured_cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_name` varchar(256) NOT NULL,
  `file_extension` varchar(5) NOT NULL,
  `user` varchar(50) NOT NULL,
  `folder_name` varchar(256) NOT NULL,
  `noOfFileParts` int(11) NOT NULL,
  `file_size` float NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `destination_ip` varchar(50) NOT NULL,
  `destination_path` varchar(700) NOT NULL,
  `source_path` varchar(700) NOT NULL,
  `uploaded_from_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_name`, `file_extension`, `user`, `folder_name`, `noOfFileParts`, `file_size`, `file_type`, `destination_ip`, `destination_path`, `source_path`, `uploaded_from_path`) VALUES
('forensics', '.pdf', 'sgmadankar@gmail.com', 'Folder 1', 1, 53489, '1', '192.168.43.38', 'Documents/', '', ''),
('forensics', '.pdf', 'sm@gmail.com', 'Folder 1', 1, 53489, '1', '192.168.43.38', 'Documents/', '', ''),
('abstract-business-code-276452', '.jpg', 'sm@gmail.com', 'Folder 2', 2, 199105, '1', '192.168.43.38', 'Documents/', '', ''),
('access-close-up-computer-306198', '.jpg', 'sm@gmail.com', 'Folder 1', 13, 1243550, '1', '192.168.43.38', 'Documents/', '', ''),
('access-close-up-computer-306198', '.jpg', 'sgmadankar@gmail.com', 'Folder 2', 13, 1243550, '1', '192.168.43.38', 'Documents/', '', ''),
('forensics', '.pdf', 'sgmadankar@gmail.com', 'Folder 2', 1, 53489, '1', '192.168.43.38', 'Documents/', '', ''),
('module1', '.pdf', 'sgmadankar@gmail.com', 'Folder 1', 4, 367919, '1', '192.168.43.38', 'Documents/', '', ''),
('nodejs_tutorial', '.pdf', 'sgmadankar@gmail.com', 'Folder 1', 11, 1064720, '1', '192.168.43.38', 'Documents/', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `folder_name` varchar(256) NOT NULL,
  `user` varchar(50) NOT NULL,
  `creation_date` date NOT NULL,
  `folder_size` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`folder_name`, `user`, `creation_date`, `folder_size`) VALUES
('Folder 1', 'sgmadankar@gmail.com', '2019-02-26', 0),
('Folder 2', 'sgmadankar@gmail.com', '2019-02-26', 0),
('Folder 1', 'sm@gmail.com', '2019-02-26', 0),
('Folder 2', 'sm@gmail.com', '2019-02-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `activity_type` varchar(100) NOT NULL,
  `file_name` varchar(256) NOT NULL,
  `user` varchar(50) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(30) NOT NULL,
  `plan_cost` int(11) NOT NULL,
  `plan_description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(60) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `plan_id` int(3) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `f_name`, `l_name`, `mobile_no`, `plan_id`, `registration_date`) VALUES
('sgmadankar@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Shubham', 'Madankar', '7385733671', 1, '0000-00-00'),
('sm@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Sakshi', 'Sable', '8381081869', 1, '0000-00-00'),
('vaibhav8186@gmail.com', '4b306bc83ee0e73f9235f37226e3199e', 'Vaibhav ', 'Thombare', '9823680503', 1, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
