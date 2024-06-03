-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2024 lúc 04:13 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtbdt2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_dh` int(9) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `tongdh` double DEFAULT 0,
  `phuongthucthanhtoan` tinyint(1) NOT NULL DEFAULT 1,
  `id_user` int(4) NOT NULL,
  `address` varchar(100) NOT NULL,
  `duyetdh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_dh`, `madh`, `tongdh`, `phuongthucthanhtoan`, `id_user`, `address`, `duyetdh`) VALUES
(71, 'QPQ311041', 43.96, 1, 8, 'ZT', 0),
(72, 'QPQ590229', 8.99, 1, 8, 'ZT', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(9) NOT NULL,
  `id_dh` int(9) NOT NULL,
  `id_sp` char(5) NOT NULL,
  `soluong` int(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `id_dh`, `id_sp`, `soluong`) VALUES
(41, 71, '1004', 1),
(42, 71, '1003', 2),
(43, 71, '1001', 1),
(44, 72, '1004', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id_loai` char(5) NOT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `thutu` tinyint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id_loai`, `ten`, `thutu`) VALUES
('1', 'Điện thoại', 1),
('2', 'Laptop', 2),
('3', 'Ti vi', 3),
('4', 'Tai nghe', 4),
('5', 'Tủ lạnh', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` char(5) NOT NULL,
  `tensp` varchar(50) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `id_loai` char(5) DEFAULT NULL,
  `hinhanh` varchar(80) DEFAULT NULL,
  `mota` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `gia`, `id_loai`, `hinhanh`, `mota`) VALUES
('1001', 'iPhone 15 Xanh Dương 128GB', 19.99, '1', 'iphone15xanhduong128gb.jpeg', '<p>*Mô tả:</p><p>1. Mặt lưng dễ dàng tháo lắp: Mặt lưng của iPhone 15 Pro Max đã được thiết kế lại để dễ dàng tháo lắp, giúp quá trình sửa chữa trở nên tiện lợi hơn. </p><p>2. Khung viền bo tròn hơn: Điện thoại iPhone 15 Pro Max với các góc cạnh được bo cong hơn so với \r\nphiên bản tiền nhiệm, mang tới tổng thể thiết kế liền mạch và hạn chế được phần lớn cảm giác cấn tay khi cầm. Các góc bo tròn cũng giúp giảm áp lực lên ngón tay khi người dùng cầm điện thoại trong một thời gian dài.</p><p>3. Nút Action đa dạng tính năng tùy chọn: Nút Action là một trong những trang bị hoàn toàn mới thay thế cho cần gạt rung trên iPhone 14 Pro Max. Action Button có thể hỗ trợ tới 9 tính năng khác nhau thay vì chỉ một tính năng Im lặng như cần gạt rung. </p>'),
('1002', 'iPhone 15 Pro Max Titan Tự Nhiên 256GB', 30.99, '1', 'iphone15promaxtitantunhien256gb.jpeg', ''),
('1003', 'Samsung Galaxy A34 5G SILVER', 7.49, '1', 'samsunggalaxya345gsilver.jpeg', ''),
('1004', 'Samsung Galaxy A54 5G Black 8/128GB', 8.99, '1', 'samsunggalaxya545gblack.jpeg', ''),
('1005', 'Samsung Galaxy A55 5G 8/128GB', 9.99, '1', 'A55-navy1.jpg', ''),
('1006', 'Samsung Galaxy A35 5G 8/128GB', 8.29, '1', 'A35-ice1.jpg', ''),
('1007', 'iPhone 15 Plus 128GB  ', 22.99, '1', '20881318381625574770.jpeg', ''),
('1008', 'Xiaomi Redmi 13C ', 3.29, '1', 'Xiaomi-Redmi-13C-grn1.jpg', ''),
('2001', 'MTXT Dell Latitude 3420 Core i5', 14.99, '2', 'mtxtdelllatitude3420.jpg', ''),
('2002', 'MTXT HP 15-fd0237TU Core i5', 17.79, '2', 'mtxthp15.jpg', ''),
('2003', 'Laptop Apple Macbook Air M2 ', 25.99, '2', 'macbookairm2.jpg', ''),
('2004', 'MTXT DELL Inspiron 15 3530', 12.29, '2', 'mtxtdell153530i3.jpg', ''),
('2005', 'Acer Aspire 3 A315-44P-R5QG R7-5700U', 11.99, '2', '637822539982260044_acer-aspire-3-a315-58-bac-dd.webp', ''),
('2006', 'Laptop Asus TUF Gaming FX507ZC4-HN095W i5 12500H', 19.49, '2', '638240754748140607_asus-tuf-gaming-fx507-xam-dd.webp', ''),
('2007', 'Laptop Dell Inspiron 15 N3530 i5 1335U', 19.99, '2', '638298600173027154_dell-inspiron-15-n3530-bac-dd.webp', ''),
('2008', 'Laptop Asus Vivobook X1404ZA-NK387W i3 1215U', 9.99, '2', '638266772281752654_asus-vivobook-x1404za-nk075w-i3-1215u-xanh-dd.webp', ''),
('3001', 'Tivi Toshiba smart 4K ', 31.29, '3', 'tivitoshibasmart4k.jpg', ''),
('3002', 'Tivi Samsung QLED 85 inch ', 36.59, '3', 'tivisamsungqled85inch.jpg', ''),
('3003', 'Tivi Samsung Neo Qled 4K 50 inch', 36.99, '3', 'tivisamsungneoqled4k50inch.jpg', ''),
('3004', 'Tivi Samsung OLED 65 inch', 36.99, '3', 'tivisamsungoled65inch.jpg', ''),
('3005', 'Tivi Xiaomi TV P1 55', 9.49, '3', 'Tivi-xiaomi-TV-P1-xx-(LxxM6-6ARG)-11437790129.jpg', ''),
('3006', 'Tivi Xiaomi A2 32inch', 5.99, '3', 'Xiaomi-A2-43-32-1.jpg', ''),
('3007', 'Tivi Samsung UHD 50 inch', 8.99, '3', 'AU7002.1705834339.jpg', ''),
('3008', 'Tivi Samsung UHD 85 inch', 43.49, '3', 'Smart-Home-BU8000.12057614851.jpg', ''),
('4001', 'Tai nghe AirPods Pro (Gen 2)', 5.49, '4', 'airpodsprogen2.jpg', ''),
('4002', 'Tai nghe Apple AirPods 3', 4.49, '4', 'appleairpods3.jpg', ''),
('4003', 'Tai nghe có dây Samsung AKG Type C', 39, '4', 'tainghesamsungcoday.jpg', ''),
('4004', 'Tai Nghe Samsung IA500', 19, '4', 'tainghesamsungia500.jpg', ''),
('4005', 'Tai nghe PIONEER SE-C3T', 36, '4', 'SE-C3T-blk-1.jpg', ''),
('4006', 'Tai nghe Jellico Heavy Bass Earphone CT19', 22, '4', 'TN-day-Jellico-CT19-6.jpg', ''),
('4007', 'Tai nghe PIONEER SE-S3BT', 1.19, '4', 'Tai-nghe-PIONEER-SE-S3BT-BLE1.jpg', ''),
('4008', 'Tai nghe BT myFirst CareBuds', 1.09, '4', 'tai-nghe-care-buds-pink.jpg', ''),
('5001', 'Tủ lạnh Toshiba Inverter 180 lít', 4.99, '5', 'toshibainverter180l.jpg', ''),
('5002', 'Tủ lạnh LG Inverter 519 lít ', 14.49, '5', 'lginverter519l.jpg', ''),
('5003', 'Tủ lạnh Panasonic Inverter 170 lít', 6.79, '5', 'panasonic170l.jpg', ''),
('5004', 'Tủ lạnh Sharp Inverter 401 lít', 14.98, '5', 'sharp401l.jpg', ''),
('5005', 'Tủ lạnh Aqua Inverter 456 lít', 14.99, '5', 'tu-lanh-aqua-inverter-456-lit-aqr-m525xa-fb-600x600.jpg', ''),
('5006', 'Tủ lạnh LG Inverter 635 lít ', 25.99, '5', 'lg-inverter-635-lit-gr-d257wb-1.-600x600.jpg', ''),
('5007', 'Tủ lạnh Panasonic Inverter 405 lít', 14.59, '5', 'panasonic-inverter-405-lit-nr-tx461gpkv-300x300.jpg', ''),
('5008', 'Tủ lạnh Aqua Inverter 320 lít', 10.49, '5', 'aqua-aqr-b399ma-whb-300x300.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `sdt` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `address`, `email`, `user`, `pass`, `role`, `sdt`) VALUES
(1, 'Cần Thơ', 'admin@gmail.com', 'admin', '123', 1, 917861848),
(6, 'Đồng Tháp', 'a@gmail.com', 'quang', '1', 0, 388766756),
(8, 'Kiên Giang', 'thphuc@gmail.com', 'phúc', '1', 0, 835593990);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `fk_iduser` (`id_user`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `fk_iddh` (`id_dh`),
  ADD KEY `fk_idsp` (`id_sp`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_dh` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_iddh` FOREIGN KEY (`id_dh`) REFERENCES `donhang` (`id_dh`),
  ADD CONSTRAINT `fk_idsp` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai` (`id_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
