-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 12:06 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_list`
--

CREATE TABLE `donor_list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_list`
--

INSERT INTO `donor_list` (`id`, `name`, `blood`, `address`, `email`, `contact`) VALUES
(1, 'jabir', 'A+ve', 'Chitwan', 'jabir@gmail.com', '9811111111'),
(2, 'test', 'A-Ve', 'Bhaktapur', 'abc@gmail.com', '9811111111'),
(3, 'raghib', 'A+ve', 'Chitwan', 'email@mail.com', '9811111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_list`
--
ALTER TABLE `donor_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_list`
--
ALTER TABLE `donor_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
