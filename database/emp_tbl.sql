-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2021 at 02:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CRUD-IN-CODEIGNITER`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_tbl`
--

CREATE TABLE `emp_tbl` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_tbl`
--

INSERT INTO `emp_tbl` (`emp_id`, `name`, `contact_no`, `address`, `designation`, `age`) VALUES
(1, 'John deo', 2147483647, '9307 NW. Creek Lane,Pleasanton, CA 94566', 'Deveops_engineer', 24),
(2, 'Jordyn Koch', 2147483647, '99 Henry Smith St.Mount Airy, MD 21771', 'Network_administrator', 32),
(3, 'Eve Mccormick', 2147483647, '521 Ridgewood St.Virginia Beach, VA 23451', 'SQL_developer', 28),
(4, 'Jordyn Koch', 2147483647, '28 Del Monte Court North Ridgeville, OH 44039', 'Web_designer', 38),
(5, 'Tucker Arellano', 2147483647, '521 Ridgewood St.Virginia Beach, VA 23451', 'Web_developer', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_tbl`
--
ALTER TABLE `emp_tbl`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_tbl`
--
ALTER TABLE `emp_tbl`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
