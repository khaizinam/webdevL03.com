-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 03:08 PM
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
-- Database: `data_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `ID` int(10) NOT NULL,
  `productID` int(50) NOT NULL,
  `cate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`ID`, `productID`, `cate`) VALUES
(17, 29, 'ao'),
(18, 30, 'quan'),
(20, 31, 'giay'),
(21, 32, 'giay'),
(26, 37, 'giay'),
(32, 43, 'giay');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(10) NOT NULL,
  `author_ID` int(20) NOT NULL,
  `content` text NOT NULL,
  `reply_id` int(10) NOT NULL,
  `page_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `ID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `num` int(2) NOT NULL,
  `href` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`num`, `href`, `name`) VALUES
(1, 'sach', 'Sách'),
(2, 'ao', 'Áo'),
(5, 'giay', 'Giày'),
(7, 'quan', 'Quần'),
(8, 'game', 'Game'),
(10, 'gamepad', 'GamePad'),
(11, 'đienthoai', 'Điện Thoại');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(50) NOT NULL,
  `name` text NOT NULL,
  `cate` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `detail` text NOT NULL,
  `star` int(1) NOT NULL,
  `price` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `name`, `cate`, `img`, `amount`, `detail`, `star`, `price`) VALUES
(29, 'ADIDIS', 'sach', 'controller/assets/img/productimg/ADIDIS.jpg', 0, 'asdasdasd', 0, 123000),
(47, 'ADIDOS', 'sach', 'controller/assets/img/productimg/ADIDOS.jpg', 123, 'asdasdasda', 0, 123123),
(48, 'Máy tính', 'đienthoai', 'public/img/productimg/Máy tính.jpg', 0, '123', 0, 123123),
(49, 'ADIDOS', 'sach', 'controller/assets/img/productimg/ADIDOS.jpg', 0, 'asdasdasd', 0, 123123),
(50, 'zxczxf', 'quan', 'controller/assets/img/productimg/zxczxf.jpg', 0, 'asfdasdasd', 0, 123123),
(51, '123123asds', 'giay', 'controller/assets/img/productimg/123123asds.jpg', 0, 'asdasdasd', 0, 3123123),
(57, 'Adios203', 'game', 'public/img/productimg/Adios203.jpg', 0, 'asdasd', 0, 123123),
(62, 'BBC_TEMP', 'sach', 'public/img/productimg/BBC_TEMP.jpg', 0, 'asdasd', 0, 123123);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `type` int(2) NOT NULL,
  `p_number` int(15) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `full_name`, `type`, `p_number`, `address`, `email`) VALUES
(2, 'khaizinam2', 'khai', 'Khải LM', 1, 0, 'KTX A', 'khai@gmail.com'),
(5, 'hoangpro2', 'hoang', 'Hoàng Hà', 1, 0, 'KTX A', 'Hoang@gmail.com'),
(6, 'khanhpro2', 'khanh', 'Khánh Hồng', 0, 0, 'KTX A', 'Khanh@gmail.com'),
(7, 'tanpro2', 'Tân', 'Tân Nguyễn', 0, 0, 'KTX A', 'Tan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`num`),
  ADD UNIQUE KEY `href` (`href`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popular`
--
ALTER TABLE `popular`
  MODIFY `num` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
