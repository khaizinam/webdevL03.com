-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2022 lúc 09:03 AM
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
(1, 'ao', 'ÁO');

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

--
-- Đang đổ dữ liệu cho bảng `comment`
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
(23, 6, '132', 45),
(24, 2, 'Hii', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page`
--

CREATE TABLE `page` (
  `ID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` varchar(200) NOT NULL
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
(44, 'a111', 'ao', 'public/img/productimg/shoe.jpg', 0, 'a', 0, 120),
(45, 'akjsbrnas', 'ao', 'public/img/productimg/adisdas.jpg', 9, 'a', 0, 120),
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
(81, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(82, 'a111', 'ao', 'public/img/productimg/shoe.jpg', 0, 'a', 0, 120),
(83, 'akjsbrnas', 'ao', 'public/img/productimg/adisdas.jpg', 9, 'a', 0, 120),
(84, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(85, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(86, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(87, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(88, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(89, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(90, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(91, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(92, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(93, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(94, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(95, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(96, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(97, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(98, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(99, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(100, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(101, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(102, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(103, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(104, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(105, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(106, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(107, 'a111', 'ao', 'public/img/productimg/shoe.jpg', 0, 'a', 0, 120),
(108, 'akjsbrnas', 'ao', 'public/img/productimg/adisdas.jpg', 9, 'a', 0, 120),
(109, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(110, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(111, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(112, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(113, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(114, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(115, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(116, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(117, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(118, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(119, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(120, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(121, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(122, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(123, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(124, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(125, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(126, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(127, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(128, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(129, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(130, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(131, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(132, 'a111', 'ao', 'public/img/productimg/shoe.jpg', 0, 'a', 0, 120),
(133, 'akjsbrnas', 'ao', 'public/img/productimg/adisdas.jpg', 9, 'a', 0, 120),
(134, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(135, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(136, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(137, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(138, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(139, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120),
(140, 'Giày adidas UTM 120', 'ao', 'public/img/productimg/adisdas.jpg', 0, 'a', 0, 120);

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
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`) VALUES
(1, 'Tai nghe Bluetooth', 200000, 1, 1, '02/05/2022 - 16:26'),
(2, 'Mũ trẻ em', 10000, 2, 1, '02/05/2022 - 16:26'),
(1, 'Tai nghe Bluetooth', 200000, 1, 2, '02/05/2022 - 16:33'),
(2, 'Mũ trẻ em', 10000, 2, 2, '02/05/2022 - 16:33');

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
(2, 'khaizinam', '123', 'Nguyễn Hữu Khải', 0, '846141788', 'ktx khu A', 'khaizinam@gmail.hcmut.edu.vn'),
(3, 'khanhcute', '123', '', 1, '0', '', ''),
(4, 'ass', 'sss', '', 1, '0', '', ''),
(5, 'khai', '1', 'Nguyễn Hữu Khải', 1, '846141788', 'ktx khu A', 'khaizinam@gmail.com'),
(6, 'tantan', '123', '', 1, '0', '', '');

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
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
