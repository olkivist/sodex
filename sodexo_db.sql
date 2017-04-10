-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2017 at 11:29 AM
-- Server version: 5.5.53-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sodex_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(11) NOT NULL,
  `course_name` varchar(80) NOT NULL,
  `category` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `category`, `count`) VALUES
(1, 'Kana-nuudelikeitto', 'Inspiring', 4),
(2, 'Kikherne-kasviscurry', 'Vegetarian', 1),
(3, 'Tomaattikeitto', 'Soup', 2),
(4, 'Broilerisalaatti', 'Salad', 1),
(5, 'Tomaatti-mozzarella patonki', 'Sandwich', 1),
(6, 'Marjarahka', 'Sweet', 5),
(7, 'Jauhelihalasagnette', 'Popular', 1),
(8, 'Kana-nuudelikeitto', 'Inspiring', 3),
(9, 'Kikherne-kasviscurry', 'Vegaani', 1),
(10, 'Tomaattikeitto', 'Soup', 2),
(11, 'Kotijuusto', 'Salad', 1),
(12, 'Tomaatti-mozzarellapatonki', 'Sandwich', 3),
(13, 'Mustikkarahka', 'Sweet', 1),
(14, 'Jauhelihalasagnette', 'Popular', 14),
(15, 'Kikherne-kasviscurry', 'Vegetarian', 1),
(16, 'Kampelaa sitruunakastikeessa', 'Special lunch', 1),
(17, 'Tomaattikeitto', 'Soup', 1),
(18, 'Kokoa salaattiannos haluamistasi raaka-aineista', 'Salad', 1),
(19, 'Jauhelihalasagnette', 'Popular', 1),
(20, 'Kana-nuudelikeitto', 'Inspiring', 1),
(21, 'Kikherne-kasviskastike', 'Vegetarian', 1),
(22, 'Tomaattikeitto', 'Soup', 1),
(23, 'Tonnikala', 'Salad', 1),
(24, 'Mustikkarahka', 'Sweet', 1),
(25, 'Tomaatti-mozzarellapatonki', 'Sandwich', 1),
(47, 'Jauheliha lasagnette', 'Popular', 1),
(48, 'Liha-makaroonilaatikko', 'Popular', 1),
(49, 'Liha-makaroonilaatikko', 'Popular', 1),
(50, 'Liha-makaroonilaatikko', 'Popular', 1),
(51, 'Liha-makaroonilaatikko', 'Popular', 1),
(52, 'Liha-makaroonilaatikko', 'Popular', 1),
(53, 'Liha-makaroonilaatikko', 'Popular', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
