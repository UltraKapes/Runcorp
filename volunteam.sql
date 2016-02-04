-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2016 at 12:27 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `charity_name`, `description`, `address`, `contact_name`, `contact_number`, `contact_email`, `max_volunteers`, `date_created`, `status`, `title`) VALUES
(8, 'FRIENDS OF MAROOCHY REGIONAL BUSHLAND BOTANIC GARDENS', 'Garden bed development and maintenance; planting, including watering, weeding, pruning, transplanting and propagating. Light construction of concrete paths and track maintenance', 'TANAWHA, QLD', 'Matt Smith', '044888345', 'mattsmith@gmail.com', 100, '2016-02-04 22:54:16', 1, 'ENVIRONMENT VOLUNTEERING'),
(9, 'SURFRIDER FOUNDATION SUNSHINE COAST', 'Hi there!! We need a few leaders up and down the coast, to oversee, or be part of, our beach cleanup activities. It is a very easy job, and has been going for years. We are expanding, and would like to allocate individual areas of coastline, to various sub groups, of the Sunshine Coast Surfrider foundation. We usually run the clean-ups every 3rd Sunday of the month, and we will be rotating the areas to be cleaned, from now on!!', 'BUDDINA, QLD', 'Mei Chan', '04777634', 'meichan@gmail.com', 50, '2016-02-04 22:57:37', 1, 'MONTHLY BEACH CLEANUP'),
(10, 'CONSERVATION VOLUNTEERS AUSTRALIA', 'Help us to conserve the natural areas in this fabulous tropical city. Creekwatch - join the team on Tuesdays or Wednesdays in the field or help out in the office with database entry on Mondays.', 'PALLARENDA, QLD', 'John Henry', '0464999123', 'johnhenry@gmail.com', 20, '2016-02-04 23:00:44', 1, 'CONSERVATION ACTIVITIES'),
(11, 'TAMBORINE BUSH VOLUNTEERS', 'The Tamborine Bush Volunteers was formed in 1988 with the aim of establishing a community-group to work with the Queensland Parks and Wildlife Service on park maintenance in Tamborine National Park. The role of the group is to remove weed from the national park and to replant rainforest trees.', 'TAMBORINE, QLD', 'Boris Putin', '0405677891', 'borisputin@gmail.com', 50, '2016-02-04 23:06:25', 1, 'RAINFOREST REGENERATION');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `person_name`, `charity_name`, `comment`, `image`, `created`) VALUES
(1, 'Billy Howard', 'CONSERVATION VOLUNTEERS AUSTRALIA', 'Having a great time participating in this event !', 'img/volunteam1.jpg', '2016-02-04 23:13:54'),
(2, 'Pete Lombard', 'SURFRIDER FOUNDATION SUNSHINE COAST', 'Feels great giving back to the community I love :)', 'img/volunteam2.jpg', '2016-02-04 23:15:28'),
(3, 'Sara Yema', 'SAVE THE WORLD', 'Hard work but so rewarding. Will sleep well tonight', 'img/volunteam3.jpg', '2016-02-04 23:16:32'),
(4, 'Jenny Mioh', 'EDUCATION NATION', 'Thank you VolunTeam for helping me get excited about volunteering', 'img/volunteam4.jpg', '2016-02-04 23:18:03');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
