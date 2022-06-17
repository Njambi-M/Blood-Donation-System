-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 08:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `donor_email` varchar(40) NOT NULL,
  `donor_password` varchar(225) NOT NULL,
  `donor_phoneNo` int(10) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `first_name`, `last_name`, `donor_email`, `donor_password`, `donor_phoneNo`, `gender`, `date_of_birth`) VALUES
(1, 'Christine', 'Mukami', 'mukami@gmail.com', '$2y$10$q8lCfp/JBKoO.DRGCaZ7N.ynCfFTH1nBLFUq5vdMdu/9.0HsHrHI6', 711223344, 'female', '1985-03-12'),
(2, 'Salem', 'Weru', 'samel@gmail.com', '$2y$10$H8T0YG6Il4r6tZWso/DBpuL48wlhD6K41vsuiQj1CG29RnGAgugt.', 711432432, 'male', '1990-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `hospital_email` varchar(50) NOT NULL,
  `hospital_password` varchar(225) NOT NULL,
  `hospital_phoneNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_email`, `hospital_password`, `hospital_phoneNo`) VALUES
(1, 'Nairobi West', 'nairobiwest@hospital.com', '$2y$10$NjVRS5AAfKsa9AN57gxqgOOX997zsFSd41zMQRmbTUUqm7W/qeQCy', 2020192492),
(2, 'Equator Meridian', 'meridian@hospital.com', '$2y$10$Ed1fkpm2q7SNgNw/rOnXu.Hz0ZL.Sjf4RCLxUYVvPQ42xbq0CBbUi', 2020908980);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
