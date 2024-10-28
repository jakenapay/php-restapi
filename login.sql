-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 09:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Jake Napay', 'admin@gmail.com', '$2y$10$eImiTXuWVxfR5w4Nr8uZFu9zL7doSmqB8Iuj5h9wiPzK0vShOhe3i\n', ''),
(3, '', '', '', ''),
(4, 'test 1', 'test1@gmail.com', 'dGVzdDE=', ''),
(5, 'test2', 'test2@gmail.com', 'test2', ''),
(6, 'test 3', 'test3@gmail.com', '$2y$10$X8WrcGEAAOWeEE9dLInMKOU/H3oKW75DDYojM3zMUtxcfwpg/Et1q', ''),
(7, 'test 4', 'test4@gmail.com', '$2y$10$YVVaiODIXV.fCJXGXBFXz.pQYJb6LWYCHkLf.sENpXRv3QYf0v/Tm', 'admin'),
(8, 'test 4', 'Warning:  Undefined array key ', '$2y$10$Brw1BSZPKfRWgKdbW4vtVeegG8YEVUqP4n7tEEpkUhYK5fPNG1iM6', ''),
(9, 'Jake Napay', 'jake1@gmail.com', '$2y$10$IkJBnefhLu4qwozuj4S4eOAzTKhe6S3suU2M8TCMT53aUkbaQnflW', 'admin'),
(10, 'Jake Napay', 'jake2@gmail.com', '$2y$10$cLkVugKhuZ2Is8yPVsHET.MSUcsLrhdxKrv6ERA.EGDRVvB.AL9YG', 'user'),
(11, 'Jake Napay', 'Warning:  Undefined array key ', '$2y$10$w5hq0wd3nprXOM6vSoNfnun.4lvLZDnmlBWnDjHehNTyW/gOmCee2', ''),
(12, 'Jake Napay', 'jake3@gmail.com', '$2y$10$f4V/wamf9SR9KztrAn86L.UhW.ez132UBgUVl/6weTBRvfbiMOl.W', ''),
(13, 'Jake Napay', 'jake4@gmail.com', '$2y$10$I1yihIi0ZKKMxvcXMGbR.OPcO5ThfU8yAR7dcWsGC6haQlsQI5IRm', ''),
(14, 'Jake Napay', 'jake5@gmail.com', '$2y$10$CvZOGNc2776KFLgMVT4BBOJw3fWpYMSGATQXHqUVpbK3.YI.h7R0O', 'user'),
(15, 'Jake Napay', 'jake6@gmail.com', '$2y$10$FS9cmLxb/pyOUtYG.78RZ.zOcWJqeLGaolY3iIsRxf07JQHlNk.ue', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
