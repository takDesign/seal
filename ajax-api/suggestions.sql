-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2019 at 02:49 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suggestions`
--

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE IF NOT EXISTS `suggestion` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `strName` varchar(255) NOT NULL,
  `strSuggestion` longtext NOT NULL,
  `nUsersID` mediumint(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `strName`, `strSuggestion`, `nUsersID`) VALUES
(1, 'Donuts Every Morning', 'I think we should have donuts every morning, specifically coconut cream donuts...', 1),
(3, 'All Desks Should Be Wood', 'And they should be white... and have flowers', 1),
(4, 'Kitchen Sink', 'we should have a sink in the cafe/lunch room', 1),
(5, 'test', 'test', 1),
(6, 'test', 'test', 1),
(7, 'new suggestion', 'test', 1),
(8, 'Cool Suggestion', 'test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `strEmail` varchar(255) NOT NULL,
  `strPassword` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `strEmail`, `strPassword`) VALUES
(1, 'nathan@vanarts.com', '123123'),
(2, 'bob@bob.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `id` mediumint(50) NOT NULL AUTO_INCREMENT,
  `nSuggestionID` mediumint(50) NOT NULL,
  `nVote` int(1) NOT NULL,
  `nUserID` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `nSuggestionID`, `nVote`, `nUserID`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 1, -1, 55),
(4, 1, 1, 1),
(5, 1, 1, 1),
(6, 1, 1, 1),
(7, 1, 1, 1),
(8, 1, 1, 1),
(9, 1, 1, 1),
(10, 1, 1, 1),
(11, 1, 1, 1),
(12, 1, 1, 1),
(13, 1, 1, 1),
(14, 1, 1, 1),
(15, 1, 1, 1),
(16, 1, -1, 1),
(17, 1, -1, 1),
(18, 1, -1, 1),
(19, 1, -1, 1),
(20, 1, 1, 1),
(21, 1, 1, 1),
(22, 1, 1, 1),
(23, 1, -1, 1),
(24, 1, -1, 1),
(25, 1, 1, 1),
(26, 1, 1, 1),
(27, 1, 1, 1),
(28, 1, -1, 1),
(29, 1, -1, 1),
(30, 1, 1, 1),
(31, 1, 1, 1),
(32, 1, 1, 1),
(33, 1, -1, 1),
(34, 1, -1, 1),
(35, 1, 1, 1),
(36, 1, 1, 1),
(37, 1, -1, 1),
(38, 1, -1, 1),
(39, 1, -1, 1),
(40, 1, 1, 1),
(41, 1, 1, 1),
(42, 1, -1, 1),
(43, 1, -1, 1),
(44, 1, 1, 1),
(45, 1, 1, 1),
(46, 1, -1, 1),
(47, 1, 1, 1),
(48, 1, 1, 1),
(49, 1, 1, 1),
(50, 1, 1, 1),
(51, 1, 1, 1),
(52, 1, 1, 1),
(53, 1, 1, 1),
(54, 1, 1, 1),
(55, 1, 1, 1),
(56, 1, 1, 1),
(57, 1, 1, 1),
(58, 1, 1, 1),
(59, 1, -1, 1),
(60, 1, -1, 1),
(61, 1, -1, 1),
(62, 4, -1, 1),
(63, 4, 1, 1),
(64, 4, -1, 1),
(65, 4, 1, 1),
(66, 4, 1, 1),
(67, 4, 1, 1),
(68, 4, 1, 1),
(69, 3, 1, 1),
(70, 3, 1, 1),
(71, 3, -1, 1),
(72, 3, -1, 1),
(73, 3, -1, 1),
(74, 3, -1, 1),
(75, 3, -1, 1),
(76, 3, -1, 1),
(77, 3, 1, 1),
(78, 3, 1, 1),
(79, 3, -1, 1),
(80, 3, -1, 1),
(81, 3, 1, 1),
(82, 3, 1, 1),
(83, 3, -1, 1),
(84, 3, -1, 1),
(85, 3, 1, 1),
(86, 3, 1, 1),
(87, 3, -1, 1),
(88, 3, -1, 1),
(89, 3, 1, 1),
(90, 3, 1, 1),
(91, 3, -1, 1),
(92, 3, -1, 1),
(93, 3, 1, 1),
(94, 3, 1, 1),
(95, 3, 1, 1),
(96, 3, 1, 1),
(97, 3, 1, 1),
(98, 3, 1, 1),
(99, 3, 1, 1),
(100, 3, 1, 1),
(101, 3, 1, 1),
(102, 3, 1, 1),
(103, 6, 1, 1),
(104, 6, -1, 1),
(105, 6, -1, 1),
(106, 6, 1, 1),
(107, 6, 1, 1),
(108, 7, 1, 1),
(109, 7, -1, 1),
(110, 0, 1, 1),
(111, 0, -1, 1),
(112, 0, 1, 1),
(113, 0, 1, 1),
(114, 0, 1, 1),
(115, 0, 1, 1),
(116, 0, 1, 1),
(117, 1, 1, 1),
(118, 1, 1, 1),
(119, 1, 1, 1),
(120, 1, 1, 1),
(121, 1, 1, 1),
(122, 1, -1, 1),
(123, 1, -1, 1),
(124, 1, -1, 1),
(125, 1, -1, 1),
(126, 1, -1, 1),
(127, 1, -1, 1),
(128, 1, 1, 1),
(129, 1, 1, 1),
(130, 1, 1, 1),
(131, 1, -1, 1),
(132, 1, -1, 1),
(133, 1, -1, 1),
(134, 1, -1, 1),
(135, 1, 1, 1),
(136, 1, 1, 1),
(137, 1, -1, 1),
(138, 1, -1, 1),
(139, 1, 1, 1),
(140, 1, 1, 1),
(141, 1, -1, 1),
(142, 1, -1, 1),
(143, 8, 1, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
