-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 07:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data1`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `balance`, `datetime`) VALUES
('Vivek Shah', 'Aman Jetani', 120, '2023-03-18'),
('Aman Jetani', 'Vivek Shah', 120, '2023-03-18'),
('Manav Khanna', 'Vivek Shah', 1000, '2023-03-18'),
('Aman Jetani', 'Vivek Shah', 120, '2023-03-18'),
('Aman Jetani', 'Vivek Shah', 120, '2023-03-18'),
('Vivek Shah', 'Manav Khanna', 120, '2023-03-18'),
('Aman Jetani', 'Manav Khanna', 120, '2023-03-19'),
('Aman Jetani', 'Manav Khanna', 640, '2023-03-19'),
('Vivek Shah', 'Manav Khanna', 120, '2023-03-20'),
('Vivek Shah', 'Aman Jetani', 100, '2023-03-20'),
('Heli Patel', 'Megha Chaturvedi', 100, '2023-03-20'),
('Megha Chaturvedi', 'Heli Patel', 100, '2023-03-20'),
('Nisha Benarji', 'Vivek Shah', 200, '2023-03-20'),
('Aman Jetani', 'Manav Khanna', 200, '2023-03-20'),
('Megha Chaturvedi', 'Manav Khanna', 200, '2023-03-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
