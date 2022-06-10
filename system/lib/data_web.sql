-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 05:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
(2, 'giay', 'Giày'),
(3, 'aothethao', 'Áo thể thao'),
(4, 'aotennis', 'Áo tennis'),
(5, 'quansortthethao', 'Quần sort thể thao');

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
(25, 1, 'Giày tốt', 141),
(26, 1, 'Nice bra, not ideal for women with bigger chests, it squeezes the girl', 151),
(27, 1, 'Very comfortable indeed, hardly know that you are wearing it. Lovely and soft material too!', 151);

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
(141, 'Giày adidas 4DFWD Pulse', 'giay', 'public/img/productimg/Giày adidas 4DFWD Pulse.jpg', 2, 'Các đặc điểm nổi bật\r\nBiến vấn đề thành giải pháp\r\n\r\nSản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.\r\nĐế giữa adidas 4D\r\n\r\nCác vùng hiệu năng tinh chỉnh kết hợp giữa độ ổn định, thoải mái và hấp thụ lực tốt nhất giúp bạn chinh phục các bề mặt đường phố khó lường.\r\nThân giày linh hoạt\r\n\r\nThân giày bằng vải dệt mềm mại, co giãn và thoải mái.\r\nSiêu bám\r\n\r\nĐế ngoài siêu bám cho cảm giác vững chãi tuyệt vời.', 0, 4500000),
(142, 'Giày fluitFlow 2.0', 'giay', 'public/img/productimg/Giày fluitFlow 2.0.jpg', 2, '    Có dây buộc\r\n    Thân giày bằng vải dệt kim\r\n    Cảm giác thoáng khí\r\n    Lớp lót bằng vải dệt\r\n\r\n    Đế giữa công nghệ Bounce\r\n    Đế ngoài bằng chất liệu tổng hợp\r\n    Màu sản phẩm: Core Black / Grey Six / Core Black\r\n    Mã sản phẩm: FZ1985', 0, 2200000),
(143, 'Giày Ultraboost 22', 'giay', 'public/img/productimg/Giày Ultraboost 22.jpg', 0, '    Dáng regular fit\r\n    Có dây giày\r\n    Thân giày bằng vải dệt adidas PRIMEKNIT\r\n    Gót giày mềm mại\r\n    Hệ thống Linear Energy Push\r\n    Đế giữa BOOST\r\n\r\n    Trọng lượng: 333 g (size UK 8.5)\r\n    Đế ngoài Stretchweb làm từ cao su Continental™ Better Rubber\r\n    Thân giày làm từ sợi dệt có chứa ít nhất 50% chất liệu Parley Ocean Plastic và 50% polyester tái chế\r\n    Màu sản phẩm: Core Black / Turbo / Flash Orange\r\n    Mã sản phẩm: GX5464', 0, 5200000),
(144, 'Giày Questar', 'giay', 'public/img/productimg/Giày Questar.jpg', 0, '    Dáng regular fit\r\n    Có dây giày\r\n    Thân giày bằng vải dệt\r\n    Cổ giày lót đệm Geofit\r\n    Lớp lót bằng vải dệt\r\n\r\n    Đế giữa Bounce\r\n    Đế ngoài bằng cao su\r\n    Thân giày có chứa tối thiểu 50% thành phần tái chế\r\n    Màu sản phẩm: Core Black / Grey Six / Pulse Lime\r\n    Mã sản phẩm: GZ0621', 0, 2200000),
(145, 'Áo Bra Light Support adidas x Karlie Kloss', 'aothethao', 'public/img/productimg/Áo Bra Light Support adidas x Karlie Kloss.jpg', 0, '    Dáng tight fit\r\n    Thiết kế chui đầu và cổ rộng\r\n    Vải dệt interlock làm từ 79% polyester tái chế, 21% elastane\r\n    Cảm giác co giãn\r\n    Công nghệ AEROREADY thấm hút ẩm\r\n    Đệm mút rời\r\n\r\n    Quai áo tùy chỉnh\r\n    Lưng áo nhiều dây\r\n    Hỗ trợ vận động nhẹ\r\n    Màu sản phẩm: Light Flash Yellow\r\n    Mã sản phẩm: HC1438', 0, 1050000),
(146, 'Áo Bra Tập Luyện High Support Impact adidas TLRD', 'aothethao', 'public/img/productimg/Áo Bra Tập Luyện High Support Impact adidas TLRD.jpg', 0, '    Dáng tight fit\r\n    Thiết kế chui đầu và cổ rộng\r\n    Vải dệt interlock làm từ 79% polyester tái chế, 21% elastane\r\n    Cảm giác co giãn\r\n    Công nghệ AEROREADY thấm hút ẩm\r\n    Đệm mút rời\r\n\r\n    Quai áo tùy chỉnh\r\n    Lưng áo nhiều dây\r\n    Hỗ trợ vận động nhẹ\r\n    Màu sản phẩm: Light Flash Yellow\r\n    Mã sản phẩm: HC1438', 0, 1300000),
(147, 'Áo Thun Tennis Club', 'aotennis', 'public/img/productimg/Áo Thun Tennis Club.jpg', 0, '      Dáng regular fit\r\n    Cổ tròn\r\n    Vải dệt interlock làm từ 100% polyester tái chế\r\n    Các mảng lưới bên hông\r\n\r\n    Công nghệ AEROREADY thấm hút ẩm\r\n    Miếng can dưới cánh tay\r\n    Màu sản phẩm: Wonder Mauve / Black\r\n    Mã sản phẩm: HF1787', 0, 750000),
(148, 'Áo Thun Winners 3.0 Future Icons adidas Sportswear', 'aothethao', 'public/img/productimg/Áo Thun Winners 3.0 Future Icons adidas Sportswear.jpg', 0, '      Dáng regular fit\r\n    Cổ tròn\r\n    Vải dệt interlock làm từ 100% polyester tái chế\r\n    Các mảng lưới bên hông\r\n\r\n    Công nghệ AEROREADY thấm hút ẩm\r\n    Miếng can dưới cánh tay\r\n    Màu sản phẩm: Wonder Mauve / Black\r\n    Mã sản phẩm: HF1787', 0, 850000),
(149, 'Quần Short 3 Sọc Future Icons adidas Sportswear', 'quansortthethao', 'public/img/productimg/Quần Short 3 Sọc Future Icons adidas Sportswear.jpg', 0, '      Dáng regular fit\r\n    Cổ tròn\r\n    Vải dệt interlock làm từ 100% polyester tái chế\r\n    Các mảng lưới bên hông\r\n\r\n    Công nghệ AEROREADY thấm hút ẩm\r\n    Miếng can dưới cánh tay\r\n    Màu sản phẩm: Wonder Mauve / Black\r\n    Mã sản phẩm: HF1787', 0, 850000),
(150, 'Áo Thun Tập Luyện Dài Tay Hyperglam', 'aothethao', 'public/img/productimg/Áo Thun Tập Luyện Dài Tay Hyperglam.jpg', 0, '      Dáng regular fit\r\n    Cổ tròn\r\n    Vải dệt interlock làm từ 100% polyester tái chế\r\n    Các mảng lưới bên hông\r\n\r\n    Công nghệ AEROREADY thấm hút ẩm\r\n    Miếng can dưới cánh tay\r\n    Màu sản phẩm: Wonder Mauve / Black\r\n    Mã sản phẩm: HF1787', 0, 712000),
(151, 'Áo Bra Hỗ Trợ Vận Động Nhẹ adidas Purebare', 'aothethao', 'public/img/productimg/Áo Bra Hỗ Trợ Vận Động Nhẹ adidas Purebare.jpg', 100, '      Dáng regular fit\r\n    Cổ tròn\r\n    Vải dệt interlock làm từ 100% polyester tái chế\r\n    Các mảng lưới bên hông\r\n\r\n    Công nghệ AEROREADY thấm hút ẩm\r\n    Miếng can dưới cánh tay\r\n    Màu sản phẩm: Wonder Mauve / Black\r\n    Mã sản phẩm: HF1787', 0, 712000);

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
  `time` varchar(25) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `product_name`, `price`, `quantity`, `customer`, `time`, `phone_number`, `address`) VALUES
(142, 'Giày hộp sữa', 200000, 2, 8, '09/06/2022 - 13:28', '0123456789', 'KTX khu A'),
(141, 'Giày Adidas', 210000, 1, 8, '09/06/2022 - 13:29', '0123456789', 'KTX khu A');

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
  `p_number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `full_name`, `type`, `p_number`, `address`, `email`) VALUES
(1, 'admin', 'admin', 'Nguyễn Hữu Khải', 0, '0846141788', 'ktx khu A', 'khaizinam@gmail.hcmut.edu.vn'),
(8, 'khanh', '123', '', 1, '', '', ''),
(9, 'abc', '123', '', 1, '', '', '');

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
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
