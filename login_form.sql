-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `userid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `selectstate` varchar(100) NOT NULL,
  `language` varchar(50) NOT NULL,
  `dbo` date NOT NULL DEFAULT current_timestamp(),
  `file_loca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`userid`, `name`, `email`, `gender`, `selectstate`, `language`, `dbo`, `file_loca`) VALUES
(1, 'AMIR HUSAIN', 'amirhusain3694@gmail.com', 'Male', 'Bihar', 'Hindi', '2024-02-14', 'img/.profile-pic.jpg'),
(2, 'kamil ansari   ', 'ki123@gmail.com', 'Male', 'Maharastra', 'Hindi,English', '2024-02-08', 'img/.alamy-1705566949.jpg'),
(3, 'shayam bhai', 'shayam@gmail.com', 'Male', 'Maharastra', 'Hindi', '2024-02-23', 'img/.smoking1.jpg2.jpg'),
(4, 'Dangous', 'HD@GMAIL.COM', 'Male', 'Maharastra', 'Hindi', '2024-02-17', 'img/.ecertificate.jpg'),
(5, 'anita agarwal', 'anita@gmail.com', 'Female', 'Utter Pradesh', 'Hindi,English', '2024-02-13', 'img/.rent car.jpg'),
(6, 'gmail Brother', 'gmail@gmail.com', 'Female', 'Maharastra', 'Hindi', '2024-02-29', 'img/.smoking.jpg'),
(7, 'tejaswini', 'tejaswini@gmail.com', 'Female', 'Utter Pradesh', 'English', '2024-02-15', 'img/.makarsakranti (2).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
