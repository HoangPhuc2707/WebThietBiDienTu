-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 10, 2024 lúc 03:52 PM
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
-- Cơ sở dữ liệu: `thietbidientu`
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
  `sdt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(9) NOT NULL,
  `id_dh` int(9) NOT NULL,
  `id_sp` char(5) NOT NULL,
  `soluong` int(9) NOT NULL DEFAULT 0,
  `dongia` double NOT NULL DEFAULT 0,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `id_gioitinh` int(10) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `thutu` tinyint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`id_gioitinh`, `gioitinh`, `thutu`) VALUES
(0, 'THỜI TRANG NỮ', 0),
(1, 'THỜI TRANG NAM', 1),
(2, 'UNISEX', 2);

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
('2', 'Tủ lạnh', 2),
('3', 'Ti vi', 3),
('4', 'Tai nghe', 4);

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
  `id_gioitinh` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `gia`, `id_loai`, `hinhanh`, `id_gioitinh`) VALUES
('1001', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2),
('1002', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2),
('1003', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2),
('1004', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2),
('1005', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2),
('1006', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2),
('1007', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2),
('1008', 'iPhone 15 Pro Trắng 128GB', 26.59, '1', 'iphone15pro128gb.webp', 2);

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
(1, NULL, NULL, 'admin', '123', 1, NULL),
(2, 'kiên giang', 'thphuc2100139@student.ctuet.edu.vn', 'phuc', '1', 0, 917861848),
(5, 'abc', 'a@gmail.com', 'xuyen', '1', 0, 2147483647);

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
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`id_gioitinh`);

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
  ADD KEY `id_loai` (`id_loai`),
  ADD KEY `sanpham_ibfk_2` (`id_gioitinh`);

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
  MODIFY `id_dh` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loai` (`id_loai`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`id_gioitinh`) REFERENCES `gioitinh` (`id_gioitinh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
