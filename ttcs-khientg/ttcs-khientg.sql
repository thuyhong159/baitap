-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 22, 2019 lúc 09:34 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ttcs-khientg`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Khoa học'),
(2, 'Hợp tác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id_theloai` int(11) NOT NULL,
  `ten_theloai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id_theloai`, `ten_theloai`, `id_danhmuc`) VALUES
(1, 'Thông tin', 1),
(2, 'Đề tài', 1),
(3, 'Hội thảo', 1),
(4, 'Hợp tác doanh nghiệp', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id_tin` int(11) NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `id_theloai` int(11) NOT NULL,
  `url_hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`id_tin`, `tieude`, `tomtat`, `noidung`, `id_theloai`, `url_hinhanh`, `ngaydang`) VALUES
(1, 'td1', 'nd ngan- ĐẠI HỘI CÔNG ĐOÀN KHOA CNTT NHIỆM KỲ 2017 – 2022', 'ĐẠI HỘI CÔNG ĐOÀN KHOA CNTT NHIỆM KỲ 2017 – 2022 ĐẠI HỘI CÔNG ĐOÀN KHOA CNTT NHIỆM KỲ 2017 – 2022 \r\nĐẠI HỘI CÔNG ĐOÀN KHOA CNTT NHIỆM KỲ 2017 – 2022<br>\r\nĐẠI HỘI CÔNG ĐOÀN KHOA CNTT NHIỆM KỲ 2017 – 2022', 1, 'thinghiem.jpg', '2019-05-16'),
(2, 'tieu de 2', 'noi dung ngan 2', 'noi dung 2', 2, 'thinghiem.jpg', '2019-05-16'),
(3, 'tieu de 3', 'noi dung ngan 3', 'noi dung 3', 2, 'thinghiem.jpg', '2019-05-16'),
(4, 'tieu de 4', 'noi dung ngan 4', 'noi dung 4', 3, 'thinghiem.jpg', '2019-05-16'),
(5, 'td4', 'ndn4', 'nd4', 4, 'thinghiem.jpg', '2019-05-16'),
(7, 'td5', 'ndn5', 'nd5', 4, 'thinghiem.jpg', '2019-05-16'),
(8, 'td7', 'ndg7', 'nd7', 4, 'thinghiem.jpg', '2019-05-11'),
(9, 'td8', 'ndg8', 'nd8', 4, 'thinghiem.jpg', '2019-05-11'),
(10, 'td9', 'ndg9', 'nd9', 4, 'thinghiem.jpg', '2019-05-11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_theloai`),
  ADD KEY `fk_theloai_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id_tin`),
  ADD KEY `fk_theloai_tin` (`id_theloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id_theloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id_tin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD CONSTRAINT `fk_theloai_danhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`);

--
-- Các ràng buộc cho bảng `tin`
--
ALTER TABLE `tin`
  ADD CONSTRAINT `fk_theloai_tin` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id_theloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
