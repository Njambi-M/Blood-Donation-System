-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 09:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
-- Table structure for table `blood_drive`
--

CREATE TABLE `blood_drive` (
  `blood_drive_id` int(11) NOT NULL,
  `blood_drive_name` varchar(150) NOT NULL,
  `blood_drive_location` varchar(100) NOT NULL,
  `date_from` datetime NOT NULL,
  `date_to` datetime NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_drive`
--

INSERT INTO `blood_drive` (`blood_drive_id`, `blood_drive_name`, `blood_drive_location`, `date_from`, `date_to`, `hospital_id`) VALUES
(2, 'Meridian Drive', 'Uhuru Gardens', '2022-07-19 08:30:00', '2022-07-26 18:00:00', 2);

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
(2, 'Salem', 'Weru', 'samel@gmail.com', '$2y$10$H8T0YG6Il4r6tZWso/DBpuL48wlhD6K41vsuiQj1CG29RnGAgugt.', 711432432, 'male', '1990-09-09'),
(3, 'Solomon', 'Mkubwa', 'mk@gmail.com', '$2y$10$gRJHTckc8S.jgCKvBIN81OQBKtQlTOaoVj3dNoFpO5JEfOx/OlEhW', 722334432, 'male', '1993-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `drive_booking`
--

CREATE TABLE `drive_booking` (
  `drive_booking_id` int(11) NOT NULL,
  `donor_id` int(11) DEFAULT NULL,
  `blood_drive_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drive_booking`
--

INSERT INTO `drive_booking` (`drive_booking_id`, `donor_id`, `blood_drive_id`) VALUES
(1, 1, 2),
(2, 1, 2),
(3, 1, 2),
(4, 3, 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `hospital_appointment`
--

CREATE TABLE `hospital_appointment` (
  `appointment_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'not yet seen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_appointment`
--

INSERT INTO `hospital_appointment` (`appointment_id`, `donor_id`, `hospital_id`, `date`, `time`, `status`) VALUES
(1, 1, 1, '2022-07-26', '12:30:00', 'not yet seen'),
(7, 2, 1, '2022-06-30', '11:40:00', 'not yet seen'),
(8, 3, 2, '2022-06-28', '15:00:00', 'seen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_drive`
--
ALTER TABLE `blood_drive`
  ADD PRIMARY KEY (`blood_drive_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `drive_booking`
--
ALTER TABLE `drive_booking`
  ADD PRIMARY KEY (`drive_booking_id`),
  ADD KEY `donor_id` (`donor_id`),
  ADD KEY `blood_drive_id` (`blood_drive_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `hospital_appointment`
--
ALTER TABLE `hospital_appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `donor_id` (`donor_id`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_drive`
--
ALTER TABLE `blood_drive`
  MODIFY `blood_drive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drive_booking`
--
ALTER TABLE `drive_booking`
  MODIFY `drive_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital_appointment`
--
ALTER TABLE `hospital_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_drive`
--
ALTER TABLE `blood_drive`
  ADD CONSTRAINT `blood_drive_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);

--
-- Constraints for table `drive_booking`
--
ALTER TABLE `drive_booking`
  ADD CONSTRAINT `drive_booking_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`),
  ADD CONSTRAINT `drive_booking_ibfk_2` FOREIGN KEY (`blood_drive_id`) REFERENCES `blood_drive` (`blood_drive_id`);

--
-- Constraints for table `hospital_appointment`
--
ALTER TABLE `hospital_appointment`
  ADD CONSTRAINT `donor_id` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`),
  ADD CONSTRAINT `hospital_id` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
