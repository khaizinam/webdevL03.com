-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2022 at 08:13 AM
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
  `no` int(5) NOT NULL,
  `href` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`no`, `href`, `name`) VALUES
(1, 'ao', 'ÁO');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(10) NOT NULL,
  `author_ID` int(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `author_ID`, `content`, `product_id`) VALUES
(1, 1, 'Hàng đẹp, giao hàng nhanh', 46),
(2, 2, 'Nhìn khá đc nhưng giầy hơi nhỏ', 46),
(3, 3, 'sản phẩm cũng khá ok, đẹp phù hợp với giá tiền.', 46),
(4, 4, 'sản phẩm đúng chất lượng', 46),
(7, 6, 'alo', 46),
(8, 6, 'Nhìn khá đc', 46),
(9, 6, 'alo', 46),
(10, 6, 'dc day', 44),
(11, 6, 'alo', 44),
(12, 6, 'ngon', 44),
(13, 6, 'yes', 44),
(14, 6, 'gg', 44),
(15, 6, 'yesyes', 44),
(16, 6, 'gogo', 44),
(17, 6, 'letsgo', 44),
(18, 6, 'yessir', 45),
(19, 6, 'gg', 45),
(20, 6, 'alo', 45),
(21, 6, 'dc dc', 45),
(22, 6, 'letsgo', 45),
(23, 6, '132', 45);

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
(44, 'aaiiiiiiiiiiiiiiiiiiiiiiss1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', 'ao', 'public/img/productimg/shoe.jpg', 0, 'a', 0, 120),
(45, 'aaiiiiiiiiiiiiiiiiiiiiiiss1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(46, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(47, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(48, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(49, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(50, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(51, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(52, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(53, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(54, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(55, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(56, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(57, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(58, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(59, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(60, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(61, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(62, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(63, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(64, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(65, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(66, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(67, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(68, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(69, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(70, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(71, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(72, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(73, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(74, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(75, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(76, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(77, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(78, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(79, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(80, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(81, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(20) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `customer` int(20) NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`) VALUES
(1, 'Tai nghe Bluetooth', 200000, 1, 1, '02/05/2022 - 16:26'),
(2, 'Mũ trẻ em', 10000, 2, 1, '02/05/2022 - 16:26'),
(1, 'Tai nghe Bluetooth', 200000, 1, 2, '02/05/2022 - 16:33'),
(2, 'Mũ trẻ em', 10000, 2, 2, '02/05/2022 - 16:33');

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
(1, 'khaizinam', 'khai', '', 1, 0, '', ''),
(2, 'khaizinam', '123', 'Nguyễn Hữu Khải', 0, 846141788, 'ktx khu A', 'khaizinam@gmail.hcmut.edu.vn'),
(3, 'khanhcute', '123', '', 1, 0, '', ''),
(4, 'ass', 'sss', '', 1, 0, '', ''),
(5, 'khai', '1', 'Nguyễn Hữu Khải', 1, 846141788, 'ktx khu A', 'khaizinam@gmail.com'),
(6, 'tantan', '123', '', 1, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
