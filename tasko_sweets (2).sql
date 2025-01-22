-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 03:19 PM
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
-- Database: `tasko_sweets`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fk_I` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductFlavour` varchar(255) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductPrice` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductFlavour`, `ProductImage`, `ProductPrice`) VALUES
(8, 'MikeAndIke', 'Original', 'MikeAndIkeOriginal.jpeg', 20),
(9, 'MikeAndIke', 'Tropical Typhoon', 'MikeAndIkeTropicalTyphoon.jpeg', 20),
(10, 'MikeAndIke', 'Watermelon', 'MikeAndIkeWatermelon.jpeg', 20),
(11, 'FruitPastels', 'Original', 'FruitPastels.jpeg', 40),
(12, 'Skitttles', 'Tropical Fruit', 'SkittlesTropicalFruit.jpeg', 45),
(13, 'Prime', 'Meta moon', 'PrimeMetaMoon.jpeg', 20),
(20, 'Sour Patch Kids', 'Blue Rasberry', 'SourPatchBlueRasberry.jpeg', 35),
(21, 'Skittles', 'Wild Berry', 'SkittlesWildBerry.jpeg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `delivery_address1` varchar(255) NOT NULL,
  `delivery_address2` varchar(255) NOT NULL,
  `delivery_address3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `delivery_address1`, `delivery_address2`, `delivery_address3`) VALUES
(1, 'fxfxgx', 436475, 'desh1976g@gmail.com', 'dtgdhgd', 'htdfgdc', 'fhf', '4224'),
(2, 'Deshlan Subramani', 74, 'deshyboiplays@gmail.com', 'Deshy', 'Park 6 Unit 4 Moonstone Drive', 'Edenvale', '1609'),
(3, '', 0, '', '$2y$10$NTwGJ6zUotct3E0zUn0gS.qpIXOSZsbx7iHrkpf5b1rZ/3aiYFYl6', '', '', ''),
(4, '', 0, '', '$2y$10$fjXm9oUYUrUD6siWsz/kqONZOykvXu.aUMUZ/iU91bnSpFtdL3XwG', '', '', ''),
(5, '', 0, '', '$2y$10$ZwoPZX7EuxSK6.vHiPLAMuIdjq0g5NBCsVO0jQ6jnMJ60vzsvnqqW', '', '', ''),
(6, '', 0, '', '$2y$10$Og9geStb/HFpZGZWbfUyvuv87chGHod5oN5i62KREBUnCjBIam2Oa', '', '', ''),
(7, '', 0, '', '$2y$10$kTB6H0bTPEPk.mpURHB67.9D.IXoUL5HLhodQmt98U47LQ6hKOKKK', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_I` (`fk_I`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`fk_I`) REFERENCES `products` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
