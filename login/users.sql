-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12. Mar, 2015 08:08 
-- Server-versjon: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `dag` varchar(32) NOT NULL,
  `tid` int(11) NOT NULL,
  `prosjektor` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `book`
--

INSERT INTO `book` (`dag`, `tid`, `prosjektor`) VALUES
('tirsdag', 0, ''),
('tirsdag', 14, ''),
('tirsdag', 14, ''),
('tirsdag', 14, ''),
('tirsdag', 12, ''),
('tirsdag', 123, 'ja'),
('tirsdag', 12, 'ja'),
('we', 232, 'ja'),
('', 0, ''),
('', 0, ''),
('qwr', 0, 'ewtwe'),
('', 0, ''),
('', 0, ''),
('tirsdag', 12, 'ja'),
('', 0, ''),
('rdg', 0, 'rgted'),
('', 0, '');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `active`) VALUES
(1, 'jo', '5f4dcc3b5aa765d61d8327deb882cf99', 'jo', 'wium', 'jo_weum123@hotmail.com', 1),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', '', '', '', 1),
(3, 'pass', 'pass', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
