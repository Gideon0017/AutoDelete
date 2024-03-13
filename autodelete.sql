-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 04:15 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autodelete`
--

-- --------------------------------------------------------

--
-- Table structure for table `prod_list`
--

CREATE TABLE `prod_list` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `expiry` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_list`
--

INSERT INTO `prod_list` (`id`, `product`, `description`, `expiry`) VALUES
(4, 'Sample Prod', 'Can Goods', '2016/12/09'),
(3, 'Sample', 'Delete', '2016/12/08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prod_list`
--
ALTER TABLE `prod_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prod_list`
--
ALTER TABLE `prod_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
