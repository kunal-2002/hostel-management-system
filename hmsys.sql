-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 07:02 PM
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
-- Database: `hmsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `employeeid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`employeeid`, `password`) VALUES
('54671', 'bnWhD2Y$)XznshX#');

-- --------------------------------------------------------

--
-- Table structure for table `leaverequests`
--

CREATE TABLE `leaverequests` (
  `name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leaverequests`
--

INSERT INTO `leaverequests` (`name`, `regno`, `block`, `roomno`, `fromdate`, `todate`, `reason`, `status`) VALUES
('Kunal Kathpal', '2013761121', 'ablock', '1', '2023-05-04', '2023-05-07', 'Interview Purpopse', 'rejected'),
('Abhay Solanki', '2013761102', 'ablock', '1', '2023-05-10', '2023-05-25', 'Interview Purpopse', 'approved'),
('Abhinav Sharma', '2013761103', 'ablock', '1', '2023-05-18', '2023-05-25', 'Interview Purpopse', 'approved'),
('Adarsh Tiwari', '2013761105', 'ablock', '1', '2023-05-18', '2023-05-24', 'Interview Purpopse', 'approved'),
('Aishwarya Yadav', '2013761107', 'bblock', '1', '2023-05-17', '2023-05-19', 'Interview Purpopse', 'approved'),
('Ankita', '2013761120', 'bblock', '1', '2023-05-10', '2023-05-19', 'Festival', 'approved'),
('Aarti', '2013761122', 'bblock', '1', '2023-05-08', '2023-05-18', 'Going Home', 'rejected'),
('Harshit', '2013761126', 'ablock', '2', '2023-05-16', '2023-05-27', 'Interview Purpopse', 'rejected'),
('Rishika', '2013761180', 'bblock', '1', '2023-05-17', '2023-05-25', 'Going for outing', 'approved'),
('Bharti', '2013761190', 'bblock', '2', '2023-05-15', '2023-05-24', 'Interview Purpopse', 'approved'),
('Kunal Kathpal', '2013761121', 'ablock', '1', '2023-06-08', '2023-06-22', 'Interview Purpopse', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `block` varchar(100) DEFAULT NULL,
  `roomno` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `regno`, `email`, `phoneno`, `password`, `gender`, `block`, `roomno`) VALUES
('Abhay Solanki', '2013761102', 'abhay.solanki@gmail.com', '5656565656', 'Abhay@4321', 'male', 'ablock', 1),
('Abhinav Sharma', '2013761103', 'abhinav@gmail.com', '4545454545', 'Abhinav@4321', 'male', 'ablock', 1),
('Adarsh Tiwari', '2013761105', 'adarshtiwari1100@gmail.com', '9999999999', 'Adarsh@4321', 'male', 'ablock', 1),
('Aishwarya Yadav', '2013761107', 'aishwaryayadav@gmail.com', '9898989898', 'Aishwarya@4321', 'female', 'bblock', 1),
('Ankita', '2013761120', 'ankita@gmail.com', '7878787878', 'Ankita@4321', 'female', 'bblock', 1),
('Kunal Kathpal', '2013761121', 'knlkathpal2002@gmail.com', '7206128391', 'SsDn@4321', 'male', 'ablock', 1),
('Aarti', '2013761122', 'aarti@gmail.com', '5656565656', 'Aarti@4321', 'female', 'bblock', 1),
('Harshit', '2013761126', 'harshit@gmail.com', '3434343434', 'Harshit@4321', 'male', 'ablock', 2),
('Rishika', '2013761180', 'rishika@gmail.com', '7272727272', 'Rishika@4321', 'female', 'bblock', 1),
('Bharti', '2013761190', 'bharti@gmail.com', '3232323232', 'Bharti@4321', 'female', 'bblock', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
