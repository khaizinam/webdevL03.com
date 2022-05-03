-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 03, 2022 lúc 02:24 CH
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
  `ID` int(20) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `customer` int(20) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`, `phone_number`, `address`) VALUES
(2, 'MÅ© tráº» em', 10000, 2, 1, '03/05/2022 - 21:23', '0123456789', 'Nhaf tieng'),
(1, 'Tai nghe Bluetooth', 200000, 1, 1, '03/05/2022 - 21:23', '0123456789', 'Nhaf tieng');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
