-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 04:03 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodos`
--

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `hid` int(20) NOT NULL,
  `area` varchar(500) NOT NULL,
  `foodName` varchar(500) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`hid`, `area`, `foodName`, `price`) VALUES
(1, ' Dhanmondi', ' Sea Food', '500'),
(2, ' Dhanmondi', '  Fish N Fries', '200'),
(3, ' Dhaka housing', '  Chicken Tikka ', '500'),
(4, ' Bashundhara', '  Felafel Shawarma', '500'),
(5, ' Dhanmondi', ' Sea Food', '500'),
(6, ' Dhanmondi', ' Sea Food', '500'),
(7, ' Dhanmondi', ' Sea Food', '500'),
(8, ' Dhanmondi', ' Sea Food', '500'),
(9, ' Dhanmondi', ' Sea Food', '500'),
(10, ' Dhanmondi', ' Sea Food', '500'),
(11, ' Dhanmondi', ' Sea Food', '500'),
(12, ' Dhanmondi', ' Sea Food', '500'),
(13, ' Dhanmondi', ' Sea Food', '500'),
(14, ' Dhanmondi', ' Sea Food', '500'),
(15, ' Dhanmondi', ' Sea Food', '500'),
(16, ' Dhanmondi', ' Sea Food', '500'),
(17, ' Cantonment', '  Chicken Shashilk', '1000'),
(18, ' Dhanmondi', ' Sea Food', '500'),
(19, ' Dhanmondi', ' Sea Food', '500'),
(20, ' Dhanmondi', ' Sea Food', '500'),
(21, ' Dhanmondi', ' Sea Food', '500'),
(22, ' Dhanmondi', ' Sea Food', '500'),
(23, ' Dhanmondi', ' Sea Food', '500'),
(24, ' Dhanmondi', ' Sea Food', '500'),
(25, ' Dhanmondi', ' Sea Food', '500'),
(26, ' Dhanmondi', ' Sea Food', '500'),
(27, ' Dhanmondi', ' Sea Food', '500'),
(28, ' Dhanmondi', ' Sea Food', '500'),
(29, ' Dhanmondi', ' Sea Food', '500'),
(30, ' Dhaka university area', '  Felafel Shawarma', '213'),
(31, ' Dhanmondi', ' Sea Food', '500'),
(32, ' Dhanmondi', ' Sea Food', '500'),
(33, ' Dhanmondi', ' Sea Food', '500'),
(34, 'Dhanmondi', 'Sea Food', '500'),
(35, 'Dhanmondi', 'Sea Bass', '500'),
(36, 'Dhanmondi', 'Sea Bass', '5000'),
(37, 'Dhanmondi', 'Sea Bass', '5000'),
(38, 'Dhanmondi', 'Sea Food', '500'),
(39, 'Darus salam', ' Felafel Shawarma', '78'),
(40, 'Dhanmondi', 'Sea Food', '500'),
(41, 'Dhaka housing', ' Creamy Double Cheeseburger', '3456'),
(42, 'Dhanmondi', ' Chicken Shashilk', '5678'),
(43, 'Dhanmondi', 'Sea Food', '500'),
(44, 'Dhanmondi', 'Sea Food', '500'),
(45, 'Dhanmondi', 'Sea Food', '500'),
(46, 'Dhanmondi', 'Sea Food', '500'),
(47, 'Dhanmondi', 'Sea Food', '500'),
(48, 'Khilgaon', 'Steak', '456'),
(49, 'Dhanmondi', 'Beef Burger', '500'),
(50, 'Dhanmondi', 'Beef Burger', '500'),
(51, 'Mohammadpur', 'Steak', '500'),
(52, 'Dhanmondi', 'Steak', '1000'),
(53, 'Dhanmondi', 'Beef', '1000'),
(54, 'Niketan', 'Steak', '1000'),
(55, 'Mohammadpur', 'Steak', '1000'),
(56, 'Shyamoli', 'Steak', '1000'),
(57, 'Dhanmondi', 'Grilled Fajitas', '1000'),
(58, 'Mohammadpur', 'Beef and Bean', '1000'),
(59, 'Dhanmondi', 'Seafood Burrito', '500'),
(60, 'Dhanmondi', 'Steak', '2000'),
(61, 'Banani', 'Beef Burger', '500'),
(62, 'Dhanmondi', 'Egg Fried Rice', '1000'),
(63, 'Dhanmondi', 'Chicken Fried Rice', '1000'),
(64, 'Dhanmondi', 'Kacchi Biryani', '1000'),
(65, 'Banani', 'Kacchi Biryani', '1000'),
(66, 'Dhanmondi', 'Kacchi Biryani', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`hid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `hid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
