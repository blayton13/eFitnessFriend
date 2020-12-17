-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 01:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_fitness_friend`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(15) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(21, 'Chandler H Godfrey', 'Cgodfr13@uncc.edu', 'thesocokid', '$2y$10$Y2okH2MLAZusfJ8uq3gdxu8i/uxELEIh3dSnafATIEqDQtgQY1Jve'),
(32, 'Chandler', 'rlfish7171@aol.com', 'Bob123', '$2y$10$cyf65lCuKHeeT0JP2oMuTe1CR/1dSPotRwL2EquSskHSiAnwFkt6W');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `user_id`, `comments`) VALUES
(11, 21, ' sdfsadf sadfa !');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(100) NOT NULL,
  `user_id` int(128) NOT NULL,
  `medicalConditions` varchar(128) NOT NULL,
  `currentWeight` int(15) NOT NULL,
  `targetWeight` int(15) NOT NULL,
  `bloodPressure` varchar(9) NOT NULL,
  `targetBloodPressure` varchar(9) NOT NULL,
  `heartRate` int(9) NOT NULL,
  `bloodSugar` int(128) NOT NULL,
  `targetBloodSugar` int(9) NOT NULL,
  `targetCalories` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `medicalConditions`, `currentWeight`, `targetWeight`, `bloodPressure`, `targetBloodPressure`, `heartRate`, `bloodSugar`, `targetBloodSugar`, `targetCalories`) VALUES
(22, 32, 'heart', 120, 200, '120', '120', 0, 120, 120, 2500),
(23, 21, 'Hypertension', 350, 240, '185/100', '120/90', 0, 150, 120, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user_meals`
--

CREATE TABLE `user_meals` (
  `id` int(11) NOT NULL,
  `user_id` int(128) NOT NULL,
  `timeOfDay` time(6) NOT NULL,
  `foodType` varchar(50) NOT NULL,
  `foodAmount` varchar(50) NOT NULL,
  `foodCalories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_workouts`
--

CREATE TABLE `user_workouts` (
  `id` int(11) NOT NULL,
  `user_id` int(128) NOT NULL,
  `userWorkout` varchar(50) NOT NULL,
  `userRepMiles` varchar(50) NOT NULL,
  `userCaloriesBurned` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_workouts`
--

INSERT INTO `user_workouts` (`id`, `user_id`, `userWorkout`, `userRepMiles`, `userCaloriesBurned`) VALUES
(17, 21, 'f', '2', '2'),
(18, 21, 'cardio', '2', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_meals`
--
ALTER TABLE `user_meals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_workouts`
--
ALTER TABLE `user_workouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_meals`
--
ALTER TABLE `user_meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_workouts`
--
ALTER TABLE `user_workouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD CONSTRAINT `user_comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);

--
-- Constraints for table `user_meals`
--
ALTER TABLE `user_meals`
  ADD CONSTRAINT `user_meals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);

--
-- Constraints for table `user_workouts`
--
ALTER TABLE `user_workouts`
  ADD CONSTRAINT `user_workouts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
