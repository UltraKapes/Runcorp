-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2016 at 10:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `volunteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
`id` int(11) NOT NULL,
  `charity_name` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `max_volunteers` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `charity_name`, `description`, `address`, `contact_name`, `contact_number`, `contact_email`, `max_volunteers`, `date_created`, `status`) VALUES
(1, 'asdasdas', 'asdasda', 'asdasdasd', 'asdasd', 'asdasd', 'asdasd', 12, '2016-02-04 11:08:38', 1),
(2, 'SHANE', 'SHANE', 'SHANE', 'SHANE', '18248124', 'SHANE', 12, '2016-02-04 21:32:24', 1),
(3, 'nnnnnnnn', 'nnnnnnnn', 'nnnnnnnn', 'nnnnnnnn', 'nnnnnnnnn', 'nnnnnnnn', 50, '2016-02-04 21:37:57', 1),
(4, 'mmmmmmmmm', 'mmmmmmmmm', 'mmmmmmmmm', 'mmmmmmmmm', 'mmmmmmmmm', 'mmmmmmmmm', 1, '2016-02-04 21:38:56', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
