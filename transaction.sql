-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 03, 2022 lúc 01:43 CH
-- Phiên bản máy phục vụ: 5.7.11
-- Phiên bản PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `increase` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `customer` int(20) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`increase`, `ID`, `product_name`, `price`, `quantity`, `customer`, `time`) VALUES
(2, 2, 'Tai nghe asjdn aasjhdousando jasndsa sasdsadsas', 10000000, 1, 2, '02/05/2022 - 09:30'),
(3, 2, 'MÅ©', 10, 1, 2, '02/05/2022 - 09:37'),
(4, 2, 'MÅ©', 10, 1, 2, '02/05/2022 - 09:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`increase`),
  ADD KEY `product_name` (`product_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `increase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
