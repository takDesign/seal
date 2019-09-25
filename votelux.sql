-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2019 at 08:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votelux`
--

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--
-- Error reading structure for table votelux.suggestions: #1932 - Table 'votelux.suggestions' doesn't exist in engine
-- Error reading data for table votelux.suggestions: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `votelux`.`suggestions`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(50) NOT NULL,
  `strFirstName` varchar(255) NOT NULL,
  `strLastName` varchar(255) NOT NULL,
  `strEmail` varchar(255) NOT NULL,
  `strUserName` varchar(255) NOT NULL,
  `strPassword` varchar(255) NOT NULL,
  `nPoints` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `strFirstName`, `strLastName`, `strEmail`, `strUserName`, `strPassword`, `nPoints`) VALUES
(1, 'Admin', 'Lastname', 'admin@admin.com', 'a', 'a', 20),
(2, 'Bob', 'Dylan', 'bob@bob.com', 'bob', 'a', 10),
(9, 'Jonathan', 'Sheppard', 'jonathan@vanarts.com', 'jonathan', 'a', 10),
(10, 'Carolina', 'Uriarte', 'caroline@vanarts.com', 'carolina', 'a', 10),
(11, 'Sam', 'Kelley', 'sam@vanarts.com', 'sam', 'a', 10),
(12, 'Sham', 'Dhari', 'sham@vanarts.com', 'sham', 'a', 10),
(15, 'Quinn', 'MacAskill', 'quinn@vanarts.com', 'quinn', 'a', 6),
(16, 'Elisa', 'Cruz', 'elisa@vanarts.com', 'elisa', 'a', 7),
(17, 'Nathan', 'Laggatt', 'nathan@vanarts.com', 'nathan', 'hotpink', 10);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--
-- Error reading structure for table votelux.votes: #1932 - Table 'votelux.votes' doesn't exist in engine
-- Error reading data for table votelux.votes: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `votelux`.`votes`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` mediumint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
