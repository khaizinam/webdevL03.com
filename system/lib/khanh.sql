-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 09, 2022 lúc 06:38 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
(37, 'Tai nghe Bluetooth', 200000, 1, 3, '08/05/2022 - 22:31', '0377407632', 'assasasadas'),
(43, 'Mũ trẻ em', 10000, 2, 3, '08/05/2022 - 22:31', '0377407632', 'assasasadas'),
(37, 'Tai nghe Bluetooth', 200000, 1, 7, '08/05/2022 - 22:34', '0377407632', 'asassdsadsasad'),
(43, 'Mũ trẻ em', 10000, 2, 7, '08/05/2022 - 22:34', '0377407632', 'asassdsadsasad'),
(37, 'Tai nghe Bluetooth', 200000, 1, 7, '08/05/2022 - 22:43', '0377407632', 'adasdsassa'),
(37, 'Tai nghe Bluetooth', 200000, 1, 3, '08/05/2022 - 22:45', '0377407632', 'KTX');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `type` int(2) NOT NULL,
  `p_number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `full_name`, `type`, `p_number`, `address`, `email`) VALUES
(1, 'khaizinam', 'khai', '', 1, '0', '', ''),
(3, 'khanhdeptrai', '12', 'Khanh', 1, '0377407632', 'KTX khu A', 'khanh@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
