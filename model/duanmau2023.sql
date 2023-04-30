-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 29, 2023 at 07:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán trực tiếp 2.Chuyển khoản 3.Thanh toán Online',
  `ngaydh` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới 1.Đang xử lý 2.Đang giao hàng 3.Đã giao hàng',
  `receive_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `receive_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `receive_tel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydh`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(30, 0, 'sam', 'HCM', '0377386391', 'quanq1409@gmail.com', 1, '04:41:52am 29/04/2023', 100, 0, NULL, NULL, NULL),
(31, 0, 'sam', 'HCM', '0377386391', 'quanq1409@gmail.com', 0, '04:49:11am 29/04/2023', 100, 0, NULL, NULL, NULL),
(32, 0, 'sam', 'HCM', '0377386391', 'quanq1409@gmail.com', 0, '04:53:18am 29/04/2023', 100, 0, NULL, NULL, NULL),
(33, 0, 'Nguyen', 'Binh Thanh', '0908724424', 'tuannguyenqc60@yahoo.com', 0, '05:27:19am 29/04/2023', 250, 0, NULL, NULL, NULL),
(34, 3, 'sam', 'TPHCM', '0908724424', 'quanq1409@gmail.com', 0, '05:56:01am 29/04/2023', 550, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(2, 'Sản phẩm chất lg lắm nha shop', 2, 16, '07:04:37am 25/04/2023'),
(5, 'Mũ đẹp lắm shop!', 2, 15, '06:31:59pm 25/04/2023'),
(6, 'Máy ảnh chụp đẹp, xịn xò!!', 3, 14, '06:33:42pm 25/04/2023'),
(7, 'giá khá chát nhưng quality nha mn!', 2, 9, '01:52:21pm 26/04/2023');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gia` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `gia`, `soluong`, `thanhtien`, `idbill`) VALUES
(15, 2, 16, '1121.gif', 'Quat ong dung', 100, 1, 100, 30),
(16, 2, 16, '1121.gif', 'Quat ong dung', 100, 1, 100, 31),
(17, 2, 16, '1121.gif', 'Quat ong dung', 100, 1, 100, 32),
(18, 3, 8, 'ssj7.jfif', 'J7', 100, 1, 100, 33),
(19, 3, 7, '1667387310_ssa11.jfif', 'A11', 150, 1, 150, 33),
(20, 3, 8, 'ssj7.jfif', 'J7', 100, 1, 100, 34),
(21, 3, 7, '1667387310_ssa11.jfif', 'A11', 150, 1, 150, 34),
(22, 3, 14, '1050.jpg', 'Nikon', 300, 1, 300, 34);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`) VALUES
(7, 'Iphone'),
(8, 'May lanh'),
(11, 'Samsung'),
(13, 'Dong ho'),
(14, 'Xe may'),
(15, 'Mu'),
(16, 'Quat'),
(17, 'Laptop'),
(18, 'Vali'),
(19, 'Xe may'),
(20, 'May anh');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` double(10,2) DEFAULT 0.00,
  `hinh` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `hinh`, `mota`, `luotxem`, `iddm`) VALUES
(7, 'A11', 150.00, '1667387310_ssa11.jfif', 'San pham re', 100, 11),
(8, 'J7', 100.00, 'ssj7.jfif', 'San pham ban chay', 200, 11),
(9, 'Rolex', 1000.00, '1001.jpg', 'San pham dat hang', 500, 13),
(10, 'Wave SX', 1100.00, '1097.jpg', 'Pho bien', 5, 14),
(11, 'Quat dung', 50.00, '1119.jpg', 'San pham gia dung ', 50, 16),
(12, 'Laptop Asus', 250.00, '1006.jpg', 'San pham ben', 20, 17),
(13, 'Laptop Dell', 150.00, '1003.jpg', 'Dung cho sinh vien', 100, 17),
(14, 'Nikon', 300.00, '1050.jpg', 'Cho nhiep anh gia chuyen nghiep', 5, 20),
(15, 'Mu luoi trai', 3.00, '1051.jpg', 'Hang sida', 15, 15),
(16, 'Quat ong dung', 100.00, '1121.gif', 'Gia dung', 10, 16);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin@gmail.com', 'a@1', 'admin@gmail.com', NULL, NULL, 1),
(2, 'sam', 'abc@123', 'quanq1409@gmail.com', 'HCM', '0377386391', 0),
(3, 'Nguyen', 'ab@12', 'tuannguyenqc60@yahoo.com', NULL, NULL, 0),
(4, 'cao tuan anh', 'b24331b1a138cde62aa1f679164fc62f', 'tuananh1980@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`) USING BTREE,
  ADD KEY `cart_user` (`iduser`),
  ADD KEY `cart_sanpham` (`idpro`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `cart_user` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
