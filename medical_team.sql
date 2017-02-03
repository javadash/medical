-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 07:37 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_team`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patientregister`
--

CREATE TABLE `tbl_patientregister` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `complaint` text NOT NULL,
  `examination` text NOT NULL,
  `diagnosis` text NOT NULL,
  `treatment` text NOT NULL,
  `doctor` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_patientregister`
--

INSERT INTO `tbl_patientregister` (`id`, `name`, `dateOfBirth`, `gender`, `complaint`, `examination`, `diagnosis`, `treatment`, `doctor`, `date`) VALUES
(1, 'sdfsd', '0000-00-00', '6', 'dfsfd', 'sdf', 'sdfs', 'dfs', '45f678b147fdf275c35b60bac2360984', '2016-05-08 21:36:45'),
(2, 'dfgd', '0000-00-00', '6', 'fdf', 'dfdfd', 'fgdgf', 'fgf', '45f678b147fdf275c35b60bac2360984', '2016-05-08 21:37:13'),
(3, 'dfdff', '0000-00-00', '6', 'sdffsd', 'dsdf', 'dfsd', 'fsdfsdff', '45f678b147fdf275c35b60bac2360984', '2016-05-08 21:39:38'),
(4, 'cxvvxv', '0000-00-00', 'M', 'cvcxvc', 'xcvcxv', 'xcvx', 'xcvxvc', 'doctor1', '2016-05-08 21:43:05'),
(5, 'sdasdasdsasdasds', '0000-00-00', 'F', 'sdfs', 'dsdfscx', 'xcvxc', 'vxcv', 'doctor2', '2016-05-08 21:54:29'),
(6, '', '0000-00-00', 'M', '', '', '', '', 'doctor1', '2016-05-10 20:09:52'),
(7, 'Ayodeji Oyinloye', '0000-00-00', 'M', 'nothing', 'nothim', 'dsafdas', 'sdfsdf', 'doctor 1', '2016-05-15 17:12:40'),
(8, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:17'),
(9, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:21'),
(10, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:23'),
(11, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:24'),
(12, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:26'),
(13, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:27'),
(14, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:28'),
(15, '', '0000-00-00', 'M', '', '', '', '', 'doctor 1', '2016-05-20 09:41:29'),
(16, 'dsdfsdf', '2016-05-02', 'M', 'dsafdasfd', 'fsadfsadfds', 'sdfsdf', 'dsfdfsd', 'doctor 1', '2016-05-21 18:16:04'),
(17, 'sdfsdf', '2016-05-02', 'M', 'sdfdfsd', 'dsfdfds', 'sadfssdf', 'sdfasdfs', 'doctor 1', '2016-05-21 18:16:15'),
(18, 'adfsad', '2016-05-03', 'M', 'sdfasdf', 'sdfdsfdsdfd', 'sdfsdf', 'dsfsdfsd', 'doctor 1', '2016-05-21 18:19:02'),
(19, 'sdfds', '2036-05-07', 'M', 'sdfsdfs', 'dsfdsd', 'sdfsdfs', 'dfsdfsd', 'doctor 1', '2016-05-21 18:21:39'),
(20, 'hey', '2016-05-03', 'M', 'sdsd', 'sdsdsd', 'sdsdsd', 'dsdsdsd', 'doctor 1', '2016-05-21 18:36:15'),
(21, 'Ayodeji Oyinloye', '2016-05-04', 'M', 'sdfsdfsd', 'sadfsdsad', 'sdsdssfddd', 'sdfsdfsdf', 'doctor 1', '2016-05-21 18:53:58'),
(22, 'fsdsad', '2016-05-02', 'M', 'sdsdsdsd', 'sdsdsd', 'sdsdsd', 'dsdsdfsdd', 'doctor 1', '2016-05-21 19:49:33'),
(23, 'fsdsad', '2016-05-02', 'M', 'sdsdsdsd', 'sdsdsd', 'sdsdsd', 'dsdsdfsdd', 'doctor 1', '2016-05-21 19:50:01'),
(24, 'qedsd', '2016-05-04', 'F', 'dsfsdfsdf', 'dsdfsdf', 'sdfsdf', 'sdsfd', 'doctor 2', '2016-05-21 20:04:35'),
(25, 'sffdfsd', '2016-05-04', 'F', 'dsdfs', 'dfdsfdfsd', 'sdfadsf', 'sdfadsfds', 'doctor 1', '2016-05-21 20:09:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_patientregister`
--
ALTER TABLE `tbl_patientregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_patientregister`
--
ALTER TABLE `tbl_patientregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
