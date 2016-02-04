-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2016 at 11:29 PM
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
  `status` int(11) NOT NULL,
  `title` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `charity_name`, `description`, `address`, `contact_name`, `contact_number`, `contact_email`, `max_volunteers`, `date_created`, `status`, `title`) VALUES
(5, 'SHANE', 'nasfjnajgns', 'jnajnsjgajn', 'jngajngajn', 'gajnjgangja', 'anjgnajgn', 12, '2016-02-04 22:03:24', 1, 'CATCHY NAME'),
(6, 'SHANE', 'nasfjnajgns', 'jnajnsjgajn', 'jngajngajn', 'gajnjgangja', 'anjgnajgn', 12, '2016-02-04 22:03:47', 1, 'CATCHY NAME'),
(7, 'dfdfds', 'asdssds', 'wfdssdfdsd', 'qfdwdfdf', 'qwdwdw', 'qweewe', 12, '2016-02-04 22:13:25', 1, 'asfghjkkjhgfd');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
`id` int(11) NOT NULL,
  `person_name` varchar(100) NOT NULL,
  `charity_name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
