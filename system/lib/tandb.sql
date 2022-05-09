-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2022 at 01:49 PM
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
(15, 27, 'quan'),
(16, 28, 'giay'),
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
  `content` char(255) NOT NULL,
  `star` int(10) NOT NULL,
  `page_id` int(100) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `author_ID`, `content`, `star`, `page_id`, `productID`) VALUES
(1, 1, 'Sản phẩm rất đẹp', 5, 1, 28),
(2, 2, 'Giày đẹp lắm nha mọi người, rẻ nhưng rất chất lượng luôn ý', 4, 1, 28),
(3, 3, 'Sản phẩm rất ưng ý với mình nha, tuy giày hơi nặng tí nhưng khá xịn.', 3, 1, 28),
(4, 2, 'Nên mua sản phẩm đá giày cao thích hợp cho các bạn nữa', 5, 2, 28),
(5, 1, 'Giày đẹp lên from chuẩn. Đi êm chân. Nói chung là rất ưng.', 4, 2, 28);

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
(1, 'index.php?cate=book', 'BOOK'),
(3, 'index.php?cate=cloth', 'Áo Quần');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(50) NOT NULL,
  `name` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `amount` int(10) NOT NULL,
  `detail` text NOT NULL,
  `star` int(1) NOT NULL,
  `price` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `name`, `img`, `amount`, `detail`, `star`, `price`) VALUES
(27, 'ADUDIS', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/d5f168f9-f953-4419-ac7a-f0def128176', 0, 'asdasdasdasdasd', 0, 60000),
(28, 'ADODAS', 'https://assets.adidas.com/images/w_600,f_auto,q_auto/7ed0855435194229a525aad6009a0497_9366/Giay_Supe', 0, 'bruh', 4, 69900),
(29, 'ADIDIS', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/d5f168f9-f953-4419-ac7a-f0def128176', 0, 'asdasdasd', 0, 123000),
(30, 'ADUDUS', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/d5f168f9-f953-4419-ac7a-f0def128176', 0, 'asdasddas', 0, 690000),
(31, 'ADIDUS', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/d5f168f9-f953-4419-ac7a-f0def128176', 0, 'asdasdasd', 0, 123303),
(32, 'ADODOS', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/d5f168f9-f953-4419-ac7a-f0def128176', 0, 'asdasdads', 0, 123123),
(37, 'ADISUS', 'controller/assets/img/productimg/', 0, 'asdasdad', 0, 12343),
(43, 'BBC_TEMPasdasd', 'controller/assets/img/productimg/', 123, 'asdasd', 0, 123123);

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
(2, 'khaizinam', 'khai', '', 0, 0, '', ''),
(3, 'tan123', '123', '', 1, 0, '', '');

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
  ADD PRIMARY KEY (`num`);

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
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `popular`
--
ALTER TABLE `popular`
  MODIFY `num` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
