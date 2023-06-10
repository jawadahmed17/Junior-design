-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 10:55 AM
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
-- Database: `cse299`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `bider_id` int(11) NOT NULL,
  `bider_name` varchar(50) NOT NULL,
  `bider_phone` int(15) NOT NULL,
  `starting_bid` int(50) NOT NULL,
  `bid_amount` int(50) NOT NULL,
  `biding_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `car_id`, `owner_id`, `bider_id`, `bider_name`, `bider_phone`, `starting_bid`, `bid_amount`, `biding_time`) VALUES
(1, 30, 3, 1, 'joy', 0, 70000, 90000000, '2023-05-10 10:07:53'),
(3, 30, 3, 1, 'jay', 0, 70000, 80000, '2023-05-10 10:12:37'),
(4, 30, 1, 1, 'joy ahmed', 1777777777, 70000, 2200000, '2023-05-17 05:18:39'),
(5, 30, 1, 1, 'joy ahmed', 1777777777, 70000, 2200000, '2023-05-17 05:18:40'),
(6, 30, 1, 1, 'joy ahmed', 1777777777, 70000, 2200000, '2023-05-17 05:18:43'),
(80, 50, 1, 9, 'kalam', 0, 3200000, 3200001, '2023-06-10 07:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `model_number` int(4) NOT NULL,
  `registration_number` int(25) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `condition` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `start_bid` int(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `user_id`, `type`, `model_name`, `model_number`, `registration_number`, `brand_name`, `condition`, `description`, `image1`, `image2`, `image3`, `price`, `start_bid`, `status`) VALUES
(34, 1, 1, 'Premio', 2022, 112233440, 'Toyota', 1, 'All auto, black, wooden interior.', 'premio 2022_3.jpg', 'premio 2022_2.jpg', 'premio 2022.jpg', 2500000, 2500000, 1),
(40, 1, 1, ' Allion', 2021, 112233441, 'Toyota', 1, 'All auto,brown, wooden interior', 'allion j.jpg', 'allion y.jpg', 'allkion 0.jpg', 2200000, 2200000, 1),
(41, 1, 1, 'Axio', 2020, 112233442, 'Toyota', 1, 'All auto, pearl white, wooden interior', 'axio j.jpg', 'axio o.jpg', 'axio y.jpg', 1500000, 1500000, 1),
(42, 1, 2, 'Alphard', 2022, 3211, 'Toyota', 1, 'All auto, pearl white, wooden interior', 'alphard.jpg', 'alphard y.jpg', 'alphard o.jpg', 2000000, 2000000, 1),
(43, 1, 2, 'Esquire', 2022, 3212, 'Toyota', 1, 'All auto, pearl white, wooden interior', 'micro j.jpg', 'micro o.jpg', 'micro y.jpg', 2000000, 2000000, 1),
(44, 1, 3, 'Prado', 2023, 3213, 'Toyota', 1, 'All auto, pearl white, wooden interior', 'prado y.jpg', 'prado o.jpg', 'prado y.jpg', 21000000, 21000000, 1),
(45, 1, 3, 'Patrol', 2023, 3214, 'nissan', 1, 'All auto, pearl white, wooden interior', 'patrol j.jpg', 'patrol o.jpg', 'patrol y.jpg', 21800000, 21800000, 1),
(46, 1, 4, 'Mazda', 2023, 3215, 'Mazda', 1, 'All auto, pearl white, wooden interior', 'mazda j.jpg', 'mazda o.jpg', 'mazda y.jpg', 3400000, 3400000, 1),
(47, 1, 1, 'Allion', 2004, 3216, 'Toyota', 2, 'All auto, pearl white, wooden interior', 'allion old j.jpg', 'allion old y.jpg', 'allion old o.jpg', 1100000, 1100000, 1),
(48, 1, 1, 'Premio', 2005, 3217, 'Toyota', 2, 'All auto, pearl white, wooden interior', 'premio old  j.jpg', 'premio old o.jpg', 'premio old y.jpg', 1200000, 1200000, 1),
(49, 1, 2, 'Noah', 2007, 3218, 'Toyota', 2, 'All auto, pearl white, wooden interior', 'noah j.jpg', 'noah o.jpg', 'noah y.jpg', 900000, 900000, 1),
(50, 1, 4, 'Supra', 2002, 3219, 'Toyota', 2, 'All auto, pearl white, wooden interior', 'supra o.jpg', 'supra j.jpg', 'supra y.jpg', 3200000, 3200000, 1),
(51, 1, 3, 'LandCruiser', 2003, 3220, 'Toyota', 2, 'All auto, pearl white, wooden interior', 'lancruiser j.jpg', 'lancruiser o.jpg', 'lancruiser y.jpg', 1500000, 1500000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_condition`
--

CREATE TABLE `car_condition` (
  `id` int(11) NOT NULL,
  `name` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_condition`
--

INSERT INTO `car_condition` (`id`, `name`) VALUES
(1, 'New'),
(2, 'Used');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type_name`, `status`) VALUES
(1, 'sedan', 1),
(2, 'micro', 1),
(3, 'SUV', 1),
(4, 'Sports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `dream_car` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `address`, `phone`, `profession`, `dream_car`) VALUES
(1, 'joy ahmed', 'joy@gmail.com', '123456', 'uttara, dhaka', 1777777777, 'business', 'Lamborghini'),
(2, 'jawad', 'jawad@gmail.com', '123456', 'uttara, dhaka', 1777776666, 'student', 'Honda Civic 2022'),
(3, 'rabbi', 'rabbi@gmail.com', '123456', 'uttara, dhaka', 1234567891, 'doctor', 'Farrari'),
(4, 'ahmed', 'jawad12@gmail.com', '123456', 'uttara, dhaka', 1987654321, 'Software Developer', 'Land Cruiser V8'),
(6, 'ayA', 'AYA@gmail.com', '123456', '', 0, '', ''),
(7, 'ayA1', 'AYA112@gmail.com', '123456', '', 0, '', ''),
(8, 'a', 'a@yahoo.com', '123456', '', 0, '', ''),
(9, 'kalam', 'kalam12@gmail.com', '123456', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`id`, `name`, `email`, `description`) VALUES
(7, 'joy', 'joy@gmail.com', 'abcdefghij'),
(8, 'siam', 'siam@gmail.com', 'ojojpop[kpokpokpokpokpo'),
(9, 'siam', 'siam@gmail.com', 'ojojpop[kpokpokpokpokpo'),
(10, 'joy', 'joy@gmail.com', 'i want help regarding car');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registration_number` (`registration_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `car_condition`
--
ALTER TABLE `car_condition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `user_query`
--
ALTER TABLE `user_query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `car_condition`
--
ALTER TABLE `car_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_query`
--
ALTER TABLE `user_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
