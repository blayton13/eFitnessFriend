-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 01:36 AM
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
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `userid` int(15) NOT NULL,
  `status` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `date` datetime NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `user_id`, `date`, `message`) VALUES
(31, 21, '2020-12-16 23:50:46', 'sdfdsfsd'),
(32, 21, '2020-12-16 23:50:50', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `user_dailythoughts`
--

CREATE TABLE `user_dailythoughts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_dailythoughts`
--

INSERT INTO `user_dailythoughts` (`id`, `user_id`, `date`, `comment`) VALUES
(7, 33, '2020-12-17 06:17:02', 'test comme '),
(11, 21, '2020-12-17 06:34:39', 'dfsf');

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
  `targetCalories` int(15) NOT NULL,
  `age` int(100) NOT NULL,
  `height` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `medicalConditions`, `currentWeight`, `targetWeight`, `bloodPressure`, `targetBloodPressure`, `heartRate`, `bloodSugar`, `targetBloodSugar`, `targetCalories`, `age`, `height`) VALUES
(24, 21, 'Hypertension', 350, 120, '185/100', '120/90', 0, 120, 100, 2500, 25, '5ft');

-- --------------------------------------------------------

--
-- Table structure for table `user_docinfo`
--

CREATE TABLE `user_docinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `docName` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_docinfo`
--

INSERT INTO `user_docinfo` (`id`, `user_id`, `docName`, `location`, `city`, `phone`) VALUES
(2, 21, 'Jessie Rose', '1234. Love LN', 'Charlotte ', '7049759762');

-- --------------------------------------------------------

--
-- Table structure for table `user_edata`
--

CREATE TABLE `user_edata` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bsug` int(11) NOT NULL,
  `wght` int(11) NOT NULL,
  `sbp` int(11) NOT NULL,
  `dbp` int(11) NOT NULL,
  `restHeart` int(11) NOT NULL,
  `minHeart` int(11) NOT NULL,
  `maxHeart` int(11) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_edata`
--

INSERT INTO `user_edata` (`id`, `user_id`, `bsug`, `wght`, `sbp`, `dbp`, `restHeart`, `minHeart`, `maxHeart`, `timestamp`) VALUES
(16, 21, 456, 6456, 654, 654, 65, 56, 56, '2020-12-16'),
(17, 21, 56, 56, 56, 56, 56, 56, 56, '2020-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `user_meals`
--

CREATE TABLE `user_meals` (
  `id` int(11) NOT NULL,
  `user_id` int(128) NOT NULL,
  `foodType` varchar(50) NOT NULL,
  `foodCalories` varchar(50) NOT NULL,
  `friedegg` varchar(50) NOT NULL,
  `berrysmoothie` varchar(50) NOT NULL,
  `burrito` varchar(50) NOT NULL,
  `chickensalad` varchar(50) NOT NULL,
  `tunamelt` varchar(50) NOT NULL,
  `riceandlentils` varchar(50) NOT NULL,
  `killet` varchar(50) NOT NULL,
  `chickenalfredo` varchar(50) NOT NULL,
  `shoyuramen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_meals`
--

INSERT INTO `user_meals` (`id`, `user_id`, `foodType`, `foodCalories`, `friedegg`, `berrysmoothie`, `burrito`, `chickensalad`, `tunamelt`, `riceandlentils`, `killet`, `chickenalfredo`, `shoyuramen`) VALUES
(17, 21, 'fuck you', '100', '', '', '', '', '', '', '', '', ''),
(18, 21, '', '234', '', '', '', '', '', '', '', '', ''),
(19, 21, '', '456', '', '', '', '', '', '', '', '', ''),
(20, 21, 'apple', '555', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nameOnCard` varchar(50) NOT NULL,
  `cardNumber` varchar(50) NOT NULL,
  `expirationDate` varchar(50) NOT NULL,
  `cVV` int(50) NOT NULL,
  `streetAddress` varchar(60) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipCode` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment`
--

INSERT INTO `user_payment` (`id`, `user_id`, `nameOnCard`, `cardNumber`, `expirationDate`, `cVV`, `streetAddress`, `city`, `state`, `zipCode`) VALUES
(1, 21, 'Chandler ', '1234-1234-1234', '12/02', 123, '12330 COPPER MOUNTAIN BLVD', 'CHARLOTTE', 'NC', 28277);

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `monthly` varchar(50) NOT NULL,
  `quartly` varchar(50) NOT NULL,
  `annual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `user_id`, `monthly`, `quartly`, `annual`) VALUES
(2, 21, 'Monthly', '', '');

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
(20, 21, 'cardio', '2', '420'),
(21, 21, 'cardio', '2', '420'),
(22, 21, 'cardio', '2', '260');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_dailythoughts`
--
ALTER TABLE `user_dailythoughts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_docinfo`
--
ALTER TABLE `user_docinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_edata`
--
ALTER TABLE `user_edata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_meals`
--
ALTER TABLE `user_meals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
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
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_dailythoughts`
--
ALTER TABLE `user_dailythoughts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_docinfo`
--
ALTER TABLE `user_docinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_edata`
--
ALTER TABLE `user_edata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_meals`
--
ALTER TABLE `user_meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_workouts`
--
ALTER TABLE `user_workouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- Constraints for table `user_docinfo`
--
ALTER TABLE `user_docinfo`
  ADD CONSTRAINT `user_docinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);

--
-- Constraints for table `user_meals`
--
ALTER TABLE `user_meals`
  ADD CONSTRAINT `user_meals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);

--
-- Constraints for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD CONSTRAINT `user_plans_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);

--
-- Constraints for table `user_workouts`
--
ALTER TABLE `user_workouts`
  ADD CONSTRAINT `user_workouts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`usersID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
