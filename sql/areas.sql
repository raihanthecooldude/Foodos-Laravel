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
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `aid` varchar(20) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `area_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`aid`, `area_name`, `area_link`) VALUES
('1', 'Gulshan 1', 'http://www.hungrynaki.com/restaurant-list/1/1/gulshan-1'),
('12', 'Niketan', 'http://www.hungrynaki.com/restaurant-list/1/12/niketan'),
('120', 'Khilgaon', 'http://www.hungrynaki.com/restaurant-list/1/120/khilgaon'),
('121', 'Chowdhurypara ', 'http://www.hungrynaki.com/restaurant-list/1/121/chowdhurypara-'),
('123', 'Basabo', 'http://www.hungrynaki.com/restaurant-list/1/123/basabo'),
('124', 'Goran', 'http://www.hungrynaki.com/restaurant-list/1/124/goran'),
('13', 'Dhanmondi', 'http://www.hungrynaki.com/restaurant-list/1/13/dhanmondi'),
('133', 'Green road', 'http://www.hungrynaki.com/restaurant-list/1/133/green-road'),
('134', 'Malibagh', 'http://www.hungrynaki.com/restaurant-list/1/134/malibagh'),
('135', 'Kakrail', 'http://www.hungrynaki.com/restaurant-list/1/135/kakrail'),
('136', 'Segunbagicha', 'http://www.hungrynaki.com/restaurant-list/1/136/segunbagicha'),
('14', 'Lalmatia', 'http://www.hungrynaki.com/restaurant-list/1/14/lalmatia'),
('142', 'Cantonment', 'http://www.hungrynaki.com/restaurant-list/1/142/cantonment'),
('15', 'Mohammadpur', 'http://www.hungrynaki.com/restaurant-list/1/15/mohammadpur'),
('150', 'Nikunjo - 1', 'http://www.hungrynaki.com/restaurant-list/1/150/nikunjo---1'),
('16', 'Shyamoli', 'http://www.hungrynaki.com/restaurant-list/1/16/shyamoli'),
('160', 'Shahjanpur', 'http://www.hungrynaki.com/restaurant-list/1/160/shahjanpur'),
('169', 'Maghbazar', 'http://www.hungrynaki.com/restaurant-list/1/169/maghbazar'),
('17', 'Mohakhali', 'http://www.hungrynaki.com/restaurant-list/1/17/mohakhali'),
('177', 'Zigatola', 'http://www.hungrynaki.com/restaurant-list/1/177/zigatola'),
('18', 'Bashundhara', 'http://www.hungrynaki.com/restaurant-list/1/18/bashundhara'),
('181', 'Shekhertek', 'http://www.hungrynaki.com/restaurant-list/1/181/shekhertek'),
('183', 'Adabor', 'http://www.hungrynaki.com/restaurant-list/1/183/adabor'),
('189', 'Nobodoy housing society', 'http://www.hungrynaki.com/restaurant-list/1/189/nobodoy-housing-society'),
('19', 'Mirpur dohs', 'http://www.hungrynaki.com/restaurant-list/1/19/mirpur-dohs'),
('192', 'Dhaka housing', 'http://www.hungrynaki.com/restaurant-list/1/192/dhaka-housing'),
('195', 'Monsurabad housing society', 'http://www.hungrynaki.com/restaurant-list/1/195/monsurabad-housing-society'),
('196', 'Baitul aman housing society', 'http://www.hungrynaki.com/restaurant-list/1/196/baitul-aman-housing-society'),
('2', 'Banani', 'http://www.hungrynaki.com/restaurant-list/1/2/banani'),
('202', 'Kallyanpur', 'http://www.hungrynaki.com/restaurant-list/1/202/kallyanpur'),
('205', 'Eastern housing project-2', 'http://www.hungrynaki.com/restaurant-list/1/205/eastern-housing-project-2'),
('208', 'Darus salam', 'http://www.hungrynaki.com/restaurant-list/1/208/darus-salam'),
('211', 'Agargaon', 'http://www.hungrynaki.com/restaurant-list/1/211/agargaon'),
('214', 'Sher-e-bangla nagar', 'http://www.hungrynaki.com/restaurant-list/1/214/sher-e-bangla-nagar'),
('219', 'Shyamoli 1-2-3-4', 'http://www.hungrynaki.com/restaurant-list/1/219/shyamoli-1-2-3-4'),
('223', 'Baridhara j block', 'http://www.hungrynaki.com/restaurant-list/1/223/baridhara-j-block'),
('225', 'Tejgaon', 'http://www.hungrynaki.com/restaurant-list/1/225/tejgaon'),
('232', 'Dhaka university area', 'http://www.hungrynaki.com/restaurant-list/1/232/dhaka-university-area'),
('236', 'Rayer bazar', 'http://www.hungrynaki.com/restaurant-list/1/236/rayer-bazar'),
('238', 'Kalabagan', 'http://www.hungrynaki.com/restaurant-list/1/238/kalabagan'),
('239', 'Monipuripara', 'http://www.hungrynaki.com/restaurant-list/1/239/monipuripara'),
('24', 'Bailey Road', 'http://www.hungrynaki.com/restaurant-list/1/24/bailey-road'),
('243', 'Kawran bazar', 'http://www.hungrynaki.com/restaurant-list/1/243/kawran-bazar'),
('246', 'Shahjadpur', 'http://www.hungrynaki.com/restaurant-list/1/246/shahjadpur'),
('248', 'Badda', 'http://www.hungrynaki.com/restaurant-list/1/248/badda'),
('25', 'Eskaton', 'http://www.hungrynaki.com/restaurant-list/1/25/eskaton'),
('26', 'Shantinagar', 'http://www.hungrynaki.com/restaurant-list/1/26/shantinagar'),
('27', 'Siddeshwari', 'http://www.hungrynaki.com/restaurant-list/1/27/siddeshwari'),
('28', 'Mirpur-2', 'http://www.hungrynaki.com/restaurant-list/1/28/mirpur-2'),
('29', 'Mirpur-6', 'http://www.hungrynaki.com/restaurant-list/1/29/mirpur-6'),
('3', 'Gulshan 2', 'http://www.hungrynaki.com/restaurant-list/1/3/gulshan-2'),
('30', 'Mirpur-10', 'http://www.hungrynaki.com/restaurant-list/1/30/mirpur-10'),
('31', 'Mirpur-11', 'http://www.hungrynaki.com/restaurant-list/1/31/mirpur-11'),
('32', 'Mirpur-12', 'http://www.hungrynaki.com/restaurant-list/1/32/mirpur-12'),
('33', 'Mirpur-Pallabi', 'http://www.hungrynaki.com/restaurant-list/1/33/mirpur-pallabi'),
('34', 'Mirpur-13', 'http://www.hungrynaki.com/restaurant-list/1/34/mirpur-13'),
('35', 'Mirpur-14', 'http://www.hungrynaki.com/restaurant-list/1/35/mirpur-14'),
('36', 'Elephant Road', 'http://www.hungrynaki.com/restaurant-list/1/36/elephant-road'),
('37', 'Hatirpul residential area', 'http://www.hungrynaki.com/restaurant-list/1/37/hatirpul-residential-area'),
('38', 'Katabon', 'http://www.hungrynaki.com/restaurant-list/1/38/katabon'),
('4', 'Baridhara', 'http://www.hungrynaki.com/restaurant-list/1/4/baridhara'),
('41', 'Mirpur-1', 'http://www.hungrynaki.com/restaurant-list/1/41/mirpur-1'),
('42', 'Mirpur-7', 'http://www.hungrynaki.com/restaurant-list/1/42/mirpur-7'),
('5', 'Uttara', 'http://www.hungrynaki.com/restaurant-list/1/5/uttara'),
('56', 'Khilgaon-taltola', 'http://www.hungrynaki.com/restaurant-list/1/56/khilgaon-taltola'),
('6', 'Mohakhali dohs', 'http://www.hungrynaki.com/restaurant-list/1/6/mohakhali-dohs'),
('69', 'Paribagh', 'http://www.hungrynaki.com/restaurant-list/1/69/paribagh'),
('7', 'Banani dohs', 'http://www.hungrynaki.com/restaurant-list/1/7/banani-dohs'),
('70', 'Panthapath', 'http://www.hungrynaki.com/restaurant-list/1/70/panthapath'),
('71', 'Indira road', 'http://www.hungrynaki.com/restaurant-list/1/71/indira-road'),
('72', 'Nikunjo - 2', 'http://www.hungrynaki.com/restaurant-list/1/72/nikunjo---2'),
('8', 'Baridhara dohs', 'http://www.hungrynaki.com/restaurant-list/1/8/baridhara-dohs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`aid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
