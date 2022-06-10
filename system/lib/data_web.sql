-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2022 lúc 10:33 AM
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
-- Cấu trúc bảng cho bảng `cate`
--

CREATE TABLE `cate` (
  `no` int(5) NOT NULL,
  `href` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cate`
--

INSERT INTO `cate` (`no`, `href`, `name`) VALUES
(2, 'giay', 'Giày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `ID` int(10) NOT NULL,
  `author_ID` int(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
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
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `name`, `cate`, `img`, `amount`, `detail`, `star`, `price`) VALUES
(141, 'Giày Adidas', 'giay', 'public/img/productimg/Giày Adidas.jpg', 2, '', 0, 210000),
(142, 'Giày hộp sữa', 'giay', 'public/img/productimg/Giày hộp sữa.jpg', 2, '', 0, 200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(20) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `customer` int(20) NOT NULL,
  `time` varchar(25) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`, `phone_number`, `address`) VALUES
(142, 'Giày hộp sữa', 200000, 2, 8, '09/06/2022 - 13:28', '0123456789', 'KTX khu A'),
(141, 'Giày Adidas', 210000, 1, 8, '09/06/2022 - 13:29', '0123456789', 'KTX khu A');

-- --------------------------------------------------------

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
(1, 'admin', 'admin', 'Nguyễn Hữu Khải', 0, '0846141788', 'ktx khu A', 'khaizinam@gmail.hcmut.edu.vn'),
(8, 'khanh', '123', '', 1, '', '', ''),
(9, 'abc', '123', '', 1, '', '', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`no`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cate`
--
ALTER TABLE `cate`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
