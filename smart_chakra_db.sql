-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 06:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_chakra_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kid_details`
--

CREATE TABLE `kid_details` (
  `kid_id` int(200) NOT NULL,
  `id` bigint(200) NOT NULL,
  `image` varchar(400) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `state` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `orgname` varchar(200) NOT NULL,
  `class` bigint(100) DEFAULT NULL,
  `disability` varchar(50) DEFAULT NULL,
  `typedis` varchar(100) DEFAULT NULL,
  `sibling` varchar(50) DEFAULT NULL,
  `siblname` varchar(200) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kid_details`
--

INSERT INTO `kid_details` (`kid_id`, `id`, `image`, `name`, `age`, `gender`, `state`, `district`, `orgname`, `class`, `disability`, `typedis`, `sibling`, `siblname`, `description`) VALUES
(1, 2, 'kid_image/th2.jpg', 'Nandish S', 21, 'male', 'Karnataka', 'Bagalkot', 'gnyana Organization', 12, 'n0 ', ' ', 'yes', 'ravu ', 'he is a good kid '),
(9933, 6256, 'kid_image/cute-1741376_960_720.jpg', 'rahul', 6, 'male', 'Karnataka', 'Vijayapura', 'shantala Organisation', 8, 'no ', ' ', 'yes', 'raghav ', 'he is a good kid with good rembering'),
(77139, 92215495121, 'kid_image/child_boy_cool_happy_kid_young_male_happy_child-845498.jpeg', 'suresh', 7, 'male', 'Karnataka', 'Bagalkot', 'ravi organisation', 7, 'no ', ' ', 'yes', 'ramya ', 'he is a good kid '),
(85481, 877272570077, 'kid_image/calc1.jpg', 'Ravi', 13, 'male', 'Karnataka', 'Bagalkot', 'gnyana Organization', 12, '', ' ', '', ' ', 'he is a good kid '),
(42171758, 961540389381346705, 'kid_image/calc1.jpg', 'rahul', 12, 'male', 'Gujarat', 'Dang', 'jyathu organisation', 7, 'n0 ', ' ', 'yes', '2 ', 'he is a good kid with good rembering'),
(722898953, 5855, 'kid_image/cute-1741376_960_720.jpg', 'ravi', 12, 'male', 'Karnataka', 'Vijayapura', 'ravi organisation', 12, 'no ', ' ', 'yes', 'ramya ', 'he is a good kid ');

-- --------------------------------------------------------

--
-- Table structure for table `parent_user`
--

CREATE TABLE `parent_user` (
  `users_id` bigint(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phnumber` int(50) NOT NULL,
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent_user`
--

INSERT INTO `parent_user` (`users_id`, `user_name`, `email`, `phnumber`, `password`) VALUES
(9696, 'lovely', 'mca123@gmail.com', 2147483647, 123),
(972665, 'Naman', 'nama@gmail.com', 2147483647, 1234),
(66897804176, 'raghu', 'gg6754@gmail.com', 2147483647, 123),
(81791843086, 'Raghuveer', 'raghu@gmail.com', 2147483647, 1234),
(7025489414, 'Rajesh', 'rav@gmai.com', 2147483647, 1234),
(935271145, 'Raju', 'raj@gmail.com', 2147483647, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `img_user` varchar(400) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phnumber` int(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `state` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `orgname` varchar(200) DEFAULT NULL,
  `orgdesc` longtext DEFAULT NULL,
  `jobrole` varchar(200) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img_user`, `user_id`, `user_name`, `Email`, `phnumber`, `password`, `state`, `district`, `orgname`, `orgdesc`, `jobrole`, `date`) VALUES
(16, '', 176, '123nan', 'nandunandish10@gmail.com', 0, '123456', NULL, NULL, NULL, NULL, NULL, '2024-01-03 15:56:20'),
(0, 'images1/download.jpg', 5855, 'rajkumar', 'raj@gmail.com', 2147483647, '1234', 'Karnataka', 'Vijayapura', 'ravi organisation', 'we have good facilities in our organisation', 'receptionist', '2024-02-28 16:58:29'),
(0, 'images1/download.jpg', 6256, 'Rahul', 'rahul@gmail.com', 2147483647, '1234', 'Karnataka', 'Vijayapura', 'shantala Organisation', 'we have good facilities in our organization where kid learn many things', 'atendent', '2024-02-28 16:34:32'),
(17, '', 12705383, '123nan', 'nandunandish10@gmail.com', 0, '1234', NULL, NULL, NULL, NULL, NULL, '2024-01-03 15:57:06'),
(7, 'images1/Anime-Wallpapers-For-Laptop-021.jpg', 492225135, 'loki', 'mca.nandishs@gmail.com', 0, '123', NULL, NULL, NULL, NULL, NULL, '2023-11-09 09:02:51'),
(6, 'images1/IMG_20230520_180359.jpg', 47566459202, 'Rajeshkana', 'nandunandish10@gmail.com', 0, '12345', NULL, NULL, NULL, NULL, NULL, '2023-11-08 08:59:30'),
(0, 'images1/download.jpg', 92215495121, 'Nandi', 'nandunandish10@gmail.com', 2147483647, '1234', 'Karnataka', 'Chamarajanagar', 'ravi organisation', 'we have good facilities in our organisation', 'receptionist', '2024-02-28 16:45:03'),
(14, '', 443228442550, 'Ramesh', 'mca.nandishs@gmail.com', 0, '123', NULL, NULL, NULL, NULL, NULL, '2023-11-07 13:12:49'),
(2, 'images1/Blue Elegant Watercolor Texture Save The Date Invitation (5).png', 877272570077, 'Nandish', 'nandunandish10@gmail.com', 2147483647, '123', 'Karnataka', 'Bagalkot', 'gnyana Organization', 'we have goog facilities in', 'atendent', '2024-02-14 15:03:31'),
(0, '', 7288715437701816, 'sahana', 'mca.nandishs@gmail.com', 0, '1234', NULL, NULL, NULL, NULL, NULL, '2024-02-05 15:02:06'),
(0, '', 426417147426383672, 'admin', 'ad@gmail.com', 0, '1234', NULL, NULL, NULL, NULL, NULL, '2024-02-28 17:07:09'),
(13, '', 900566642532176477, 'Raghu', 'mca.nandishs@gmail.com', 0, '123', NULL, NULL, NULL, NULL, NULL, '2023-11-03 11:30:34'),
(18, '', 961540389381346705, 'nan02', 'nandunandish10@gmail.com', 0, '1234', NULL, NULL, NULL, NULL, NULL, '2024-01-03 15:58:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kid_details`
--
ALTER TABLE `kid_details`
  ADD PRIMARY KEY (`kid_id`),
  ADD KEY `user_id` (`id`) USING BTREE;

--
-- Indexes for table `parent_user`
--
ALTER TABLE `parent_user`
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kid_details`
--
ALTER TABLE `kid_details`
  MODIFY `kid_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
