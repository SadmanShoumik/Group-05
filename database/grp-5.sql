-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grp-5`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `pass`) VALUES
(1, 'Nabila', '1234'),
(2, 'Sadman', '1234'),
(3, 'Shanto', '1234'),
(4, 'Siddik', '1234'),
(5, 'Shoumik', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(32) NOT NULL,
  `cart` int(32) NOT NULL,
  `user` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `cart`, `user`) VALUES
(22, 1, 2),
(23, 6, 2),
(24, 10, 2),
(37, 1, 7),
(38, 8, 7),
(39, 13, 7),
(40, 10, 9),
(41, 14, 9),
(42, 7, 9),
(46, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `addr` varchar(32) NOT NULL,
  `payment` varchar(32) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `pass`, `email`, `addr`, `payment`, `phone`) VALUES
(1, 'Nabila', '1234', 'nabila@gmail.com', 'Barguna', '', '01711111111'),
(2, 'Sadman', '1234', 'sadman@gmail.com', 'Jahangirnagar University', '', '01711111111'),
(3, 'Shanto', '1234', 'shanto@gmail.com', 'Jahangirnagar University', '', '01711111111'),
(4, 'Siddik', '1234', 'siddik@gmail.com', 'Barisal', '', '01722222222'),
(5, 'Shoumik', '1234', 'shoumik@gmail.com', 'Jahangirnagar University', '', '01711111111'),
(7, 'Tasnim', '1234', 'tasnim@gmail.com', 'Mirpur', '', '01711111111'),
(8, 'Himel', '1234', 'himel@gmail.com', 'Kallyanpur', '', '01711111111'),
(9, 'Rifa', '1234', 'rifa@gmail.com', 'Tangail', '', '01711111111'),
(10, 'Shimul', '1234', 'shimul@gmail.com', 'Mymensingh', '', '01711111111'),
(11, 'Shakil', '1234', 'shakil@gmail.com', 'Mirpur', '', '01711111111'),
(12, 'Safi', '1234', 'safi@gmail.com', 'Comilla', '', '01711111111'),
(13, 'Mahin', '1234', 'mahin@gmail.com', 'Comilla', '', '01711111111'),
(14, 'Maruf', '5678', 'maruf2@gmail.com', 'Gazipur', '', '01711111111'),
(15, 'Parvez', '1234', 'parvez@gmail.com', 'Savar', '', '01711111111'),
(16, 'Tahi', '1234', 'tahi@gmail.com', 'Noakhali', '', '01711111111');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(32) NOT NULL,
  `bkash` int(32) NOT NULL,
  `bpin` int(32) NOT NULL,
  `rocket` int(32) NOT NULL,
  `rpin` int(32) NOT NULL,
  `nagad` int(32) NOT NULL,
  `npin` int(32) NOT NULL,
  `c_name` varchar(32) NOT NULL,
  `c_addr` varchar(32) NOT NULL,
  `c_num` int(32) NOT NULL,
  `user` int(11) NOT NULL,
  `uname` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `bkash`, `bpin`, `rocket`, `rpin`, `nagad`, `npin`, `c_name`, `c_addr`, `c_num`, `user`, `uname`) VALUES
(6, 1711111111, 1234, 0, 0, 0, 0, '', '', 0, 4, 'Siddik'),
(8, 0, 0, 1711111111, 1234, 0, 0, '', '', 0, 4, 'Siddik'),
(9, 0, 0, 0, 0, 0, 0, 'Tasnim', 'Savar', 1711111111, 7, 'Tasnim'),
(10, 0, 0, 0, 0, 0, 0, '', 'Savar', 1711111111, 7, 'Tasnim'),
(11, 0, 0, 0, 0, 0, 0, 'Himel', 'Savar', 1711111111, 7, 'Tasnim'),
(12, 0, 0, 0, 0, 0, 0, 'Siddik', 'Savar', 1711111111, 14, 'Maruf');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(32) NOT NULL,
  `p_name` varchar(32) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `price` int(32) NOT NULL,
  `img` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `brand`, `type`, `price`, `img`) VALUES
(1, '1More G456', '1More', 'Headphone', 400, '1MORE1.jpg'),
(2, 'Corsair 34K', 'Corsair', 'Headphone', 500, 'Corsair1.jpg'),
(3, 'Dareu GT-3', 'Dareu', 'Headphone', 500, 'Dareu1.jpg'),
(4, 'Edifier H450', 'Edifier', 'Headphone', 800, 'Edifier1.jpg'),
(5, 'Edifier U880', 'Edifier', 'Headphone', 700, 'Edifier2.jpg'),
(6, 'EKSA NX1', 'EKSA', 'Headphone', 1000, 'EKSA1.jpg'),
(7, 'Havit Y90', 'Havit', 'Headphone', 1100, 'Havit1.jpg'),
(8, 'Lenovo YT22', 'Lenovo', 'Headphone', 650, 'Lenovo1.jpg'),
(9, 'Razer Pro 15', 'Razer', 'Keyboard', 2000, '1Razer.jpg'),
(10, 'Razer H55', 'Razer', 'Keyboard', 1500, '2 Razer.jpg'),
(11, 'Gamdias 860', 'Gamdias', 'Keyboard', 1650, '6 Gamdias.jpg'),
(12, 'Gamdias 99 Pro', 'Gamdias', 'Keyboard', 2200, '7 Gamdias.jpg'),
(13, 'Gamdias 1K Orange', 'Gamdias', 'Keyboard', 1900, '8 Gamdias.jpg'),
(14, 'Keychron GH 4', 'Keychron', 'Keyboard', 2000, '11 Keychron.jpg'),
(15, 'Havit Invoker 322', 'Havit', 'Keyboard', 2300, '14 Havit.jpg'),
(16, 'Logitecg BN 55', 'Logitech', 'Keyboard', 1900, '20 Logitech.jpg'),
(17, 'Asus VX 585', 'Asus', 'Mouse', 800, 'Asus 1.jpg'),
(18, 'Asus Rog 120', 'Asus', 'Mouse', 1200, 'Asus 2.jpg'),
(19, 'Fantech ES', 'Fantech', 'Mouse', 1300, 'Fantech 1.jpg'),
(20, 'Fantech SB', 'Fantech', 'Mouse', 1500, 'Fantech 2.jpg'),
(21, 'Havit DW 12', 'Havit', 'Mouse', 1800, 'Havit 1.jpg'),
(22, 'Havit 550 Pro', 'Havit', 'Mouse', 2200, 'Havit 3.jpg'),
(23, 'Logitech G6', 'Logitech', 'Mouse', 600, 'Logitech 1.jpg'),
(24, 'Razer Snake 78', 'Razer', 'Mouse', 2500, 'Razer 2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user`) REFERENCES `customer` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
