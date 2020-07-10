-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 01:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `confusion`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `name` varchar(30) NOT NULL,
  `guest` varchar(5) NOT NULL,
  `smoke` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`name`, `guest`, `smoke`, `date`, `time`) VALUES
('Syed Tafreed Numan', '2', 'No-Smoking', '2020-07-19', '15:55'),
('John Denver', '5', 'Smoking', '2020-07-12', '14:33'),
('John Lenon', '5', 'Smoking', '2020-07-13', '14:33'),
('Sam', '5', 'No-Smoking', '2020-07-19', '15:35'),
('Jackson', '4', 'Smoking', '2020-07-12', '15:45'),
('Scarlett', '4', 'Smoking', '2020-07-11', '14:31'),
('Madison', '5', 'No-Smoking', '2020-07-14', '18:30'),
('Sam', '3', 'No-Smoking', '2020-07-10', '21:40'),
('Xyz', '3', 'No-Smoking', '2020-07-11', '07:06'),
('Abc', '4', 'No-Smoking', '2020-07-10', '21:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
