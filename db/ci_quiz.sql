-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 10:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `score` varchar(3) NOT NULL,
  `Answer` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `phone`, `score`, `Answer`) VALUES
(9, 'dasdf', 'a@g.com', '103214561431312', '2', ''),
(8, 'Md. Masudul Kabir', 'masud.ncse@gmail.com', '01676717945', '3', ''),
(7, 'Mahabubur Rahman', 'saurav@imeshbd.com', '12345679891', '4', ''),
(10, 'asdf', 'd@g.com', '012354564345', '5', ''),
(11, 'Shubham Upadhyay', 'shubham.upadhyay@pulsesolutions.net', '+919699671917', '6', ''),
(12, 'Shubham Upadhyay', 'shubham.upadhyay@pulsesolutions.com', '+91 9699671917', '7', ''),
(13, 'Shubham Upadhyay', 's=hubham.upadhyay@pulsesolutions.com', '+919699671999', '7', ''),
(14, 'Shubeham Upadhyay', 'sehubham.upadhyay@pulsesolutions.com', '+919699671444', '6', ''),
(15, 'Shub7ham Upadhyay', 'bham.upadhyay@pulsesolutions.net', '96996719156', '5', ''),
(16, 'Andrew Highfield', 'ahighfield@command51.com.au', '04373644444', '4', ''),
(17, 'Rupesh Kumar', 'anurag.singh@pulsesolutions.net', '86002951476', '3', ''),
(18, 'test customer', 'rupesh@pulsesolutions.net', '09999999999', '4', ''),
(19, 'Andrew Highfield', 'highfield@command51.com.au', '04873683528', '0', ''),
(20, 'test cust3omer', 'rupes44h@pulsesolutions.net', '099999999499', '8', 'False,,,60,Wolfgang Amadeus Mozart,Dwarf Fortress,Wolf,Tadashi Yamaguchi,Allan Alcorn,5th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
