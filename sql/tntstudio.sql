-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2018 lúc 05:03 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tntstudio`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_chi_tiet`
--

CREATE TABLE `anh_chi_tiet` (
  `id_anh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `ten_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bl_sp`
--

CREATE TABLE `bl_sp` (
  `id_bl` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `binh_luan` longtext COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bl_sp`
--

INSERT INTO `bl_sp` (`id_bl`, `id_sp`, `id_thanhvien`, `binh_luan`, `time`) VALUES
(1, 1, 3, 'sản phẩm tốt, bền', '21:02:51 - 19/06/2018'),
(2, 1, 3, 'sản phẩm tốt bền', '21:03:52 - 19/06/2018'),
(3, 1, 3, 'tốt', '21:07:12 - 19/06/2018'),
(4, 1, 3, 'ngon', '21:11:31 - 19/06/2018'),
(5, 1, 3, 'sản phẩm tốt', '21:14:58 - 19/06/2018'),
(6, 1, 3, 'sản phẩm tuyệt', '21:15:18 - 19/06/2018'),
(8, 1, 3, 'sản phẩm tuyệt', '21:16:52 - 19/06/2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmc_sp`
--

CREATE TABLE `dmc_sp` (
  `id_dmc` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ten_dmc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dmc_sp`
--

INSERT INTO `dmc_sp` (`id_dmc`, `id_dm`, `ten_dmc`) VALUES
(1, 1, 'Điện thoại di dộng'),
(2, 1, 'Camera giám sát'),
(3, 1, 'Flycam & Aquater'),
(4, 1, 'Máy tính bảng'),
(5, 1, 'Action camera'),
(6, 1, 'Thiết bị 4.0'),
(7, 1, 'Laptop và Máy tính để bàn'),
(8, 1, 'Máy văn phòng'),
(9, 1, 'Dụng cụ thông minh'),
(10, 1, 'Âm thanh'),
(11, 1, 'Thiết bị lưu trữ'),
(12, 1, 'Linh kiện máy tính'),
(13, 1, 'Máy chơi game'),
(14, 1, 'Thiết bị điện gia dụng'),
(15, 1, 'Phụ kiện điện tử'),
(16, 2, 'Trang điểm'),
(17, 2, 'Chăm sóc da'),
(18, 2, 'Chăm sóc tóc'),
(19, 2, 'Dụng cụ làm đẹp'),
(20, 2, 'Nước hoa'),
(21, 3, 'Trang phục nữ'),
(22, 3, 'Trang phục Nam'),
(23, 3, 'Giày nam'),
(24, 3, 'Giày nữ'),
(25, 3, 'Phụ kiện bé gái'),
(26, 3, 'Phụ kiện bé trai'),
(27, 3, 'Túi trẻ em'),
(28, 3, 'Đồ ngủ & nội y'),
(29, 3, 'Phụ kiện thời trang'),
(30, 3, 'Trang sức'),
(31, 4, 'Thiết bị y tế'),
(32, 4, 'Thực phẩm chức năng'),
(33, 4, 'Chăm sóc cơ thể'),
(34, 5, 'Chăm sóc trẻ sơ sinh trẻ nhỏ'),
(35, 5, 'Đồ dùng bú sữa'),
(36, 5, 'Quần áo & phụ kiện'),
(37, 5, 'Tã dụng cụ vệ sinh'),
(38, 5, 'Tắm & chắm sóc cơ thể'),
(39, 5, 'Xe , ghế, địu, nôi'),
(40, 5, 'Đồ chơi'),
(41, 5, 'Xe điều khiển từ xa'),
(42, 6, 'Vali & túi du lịch'),
(43, 6, 'Hoạt động dã ngoại'),
(44, 6, 'Lều bạt'),
(45, 6, 'Dụng cụ bảo hộ'),
(46, 6, 'Thuê đồ'),
(47, 6, 'Túi ngủ'),
(48, 7, 'Ô tô'),
(49, 7, 'Xe máy'),
(50, 7, 'Xe đạp'),
(51, 7, 'Phụ kiện ô tô'),
(52, 7, 'Phụ kiện xe máy'),
(53, 7, 'Phụ kiện xe đạp'),
(54, 7, 'Balo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dm_sp`
--

CREATE TABLE `dm_sp` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_dm` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dm_sp`
--

INSERT INTO `dm_sp` (`id_dm`, `ten_dm`, `anh_dm`) VALUES
(1, 'Đồ điện tử', 'Do dien tu.png'),
(2, 'Sức khỏe', 'Suc khoe.png'),
(3, 'Thời trang', 'Thoi trang.png'),
(4, 'Làm đẹp', 'Lam dep.png'),
(5, 'Đồ chơi', 'Do choi.png'),
(6, 'Du lịch', 'Du lich.png'),
(7, 'Tạp hóa', 'Tap hoa.png'),
(8, 'Đổi trả', 'Doi tra.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int(11) NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `ten_kh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flyer`
--

CREATE TABLE `flyer` (
  `id_flyer` int(11) NOT NULL,
  `ten_flyer` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id_quangcao` int(11) NOT NULL,
  `loai_quangcao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_quangcao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuong_trinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`id_quangcao`, `loai_quangcao`, `anh_quangcao`, `chuong_trinh`) VALUES
(1, 'flyer', 'flyer1.png', ''),
(2, 'flyer', 'flyer2.png', ''),
(4, 'slider', 'slide1.png', ''),
(5, 'slider', 'slide2.png', ''),
(6, 'slider', 'slide3.png', ''),
(7, 'slider', 'slide4.png', ''),
(8, 'slider', 'slide5.png', ''),
(9, 'slider', 'slide6.png', ''),
(10, 'banner', 'banner1.png', ''),
(11, 'banner', 'banner2.png', ''),
(12, 'banner', 'banner3.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `ten_slide` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp`
--

CREATE TABLE `sp` (
  `id_sp` int(11) NOT NULL,
  `id_cty` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia_goc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bao_hanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `khuyen_mai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chi_tiet` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sp`
--

INSERT INTO `sp` (`id_sp`, `id_cty`, `id_dm`, `ten_sp`, `anh_sp`, `gia`, `gia_goc`, `bao_hanh`, `trang_thai`, `tinh_trang`, `khuyen_mai`, `chi_tiet`) VALUES
(1, 1, 1, 'iphone 6 plus 32 GB', 'iphone6-32gb.jpg', '10000000', '0', '12 Tháng', 'Còn hàng', 'Máy Mới 100%', 'Dán Màn hình 3 lớp', '<p>iphone 6 plus 32 GB</p>\r\n'),
(2, 1, 2, 'Lens cho iphone 6', 'product17.jpg', '100000', '', '12 Tháng', 'Còn hàng', 'Mới 100%', 'Mua 1 tặng 1', ''),
(3, 2, 6, 'Gậy tự sướng mini', 'product3.jpg', '120000', '', '12 Tháng', 'Còn hàng', 'Mới 100%', 'Tặng 1 quả qin con thỏ', ''),
(4, 3, 54, 'Balo con cóc', 'product19.jpg', '355000', '', '12 Tháng', 'Còn hàng', 'Mới 100%', 'Dán Màn hình 3 lớp', ''),
(5, 4, 54, 'Balo chống sốc', 'product11.jpg', '455000', '', '12 Tháng', 'Còn hàng', 'Mới 100%', 'Dán Màn hình 3 lớp', ''),
(6, 5, 3, 'Flycam iv 3567 Made in Việt Nam', 'product4.jpg', '1999000', '', '12 Tháng', 'Còn hàng', 'Máy Mới 100%', '1 Quả pin chính hãng', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sp_chinhhang`
--

CREATE TABLE `sp_chinhhang` (
  `id_cty` int(11) NOT NULL,
  `ten_cty` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sp_chinhhang`
--

INSERT INTO `sp_chinhhang` (`id_cty`, `ten_cty`) VALUES
(1, 'iphone'),
(2, 'samsung'),
(3, 'àgeg'),
(4, 'àvrg'),
(5, 'xzvdg'),
(6, 'ávdaer'),
(7, 'ádger'),
(8, 'dfgtrg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `id_thanhvien` int(255) NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `than_thiet` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanh_vien`
--

INSERT INTO `thanh_vien` (`id_thanhvien`, `ho_ten`, `mail`, `mat_khau`, `sdt`, `dia_chi`, `gioi_tinh`, `than_thiet`, `level`) VALUES
(1, 'Nghiêm Tiến Tuân', 'tuannghiemtien97@gmail.com', 'Nghiemtuan1997', 1683696981, 'Thanh Lâm - An Thịnh - Lương Tài - Bắc Ninh', 'Nam', 0, 2),
(2, 'Nghiêm Thị Ha Chi', 'nghiemthihachi@gmail.com', 'Hachi2014', 1683696981, 'Số 4 ngách 32/236 Đường Khương Đình - Phường Hạ Đình - Quận Thanh Xuân - Hà Nội', 'Nữ', 0, 1),
(3, 'Nghiêm Thị Phương Linh', 'nghiemthiphuonglinh@gmail.com', 'Phuonglinh2008', 1683696981, 'Số 5/326 Đường Láng - Quận Cầu Giấy - Hà Nội', 'Nữ', 0, 0),
(4, 'Nguyễn Quang Hưởng', 'nguyenquanghuong@gmail.com', 'Quanghuong1998', 978965916, 'số 8 ngõ 24 Đại la - quận Hai Bà Trưng - Hà Nội', 'Nam', 1, 0),
(5, 'Nguyễn Văn Quang', 'nguyenvanquang@gmail.com', 'VanQuang1997', 978965916, 'Số 8 ngách 32 Đường Láng - Quận Cầu Giấy - Hà Nội', 'Nam', 2, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_chi_tiet`
--
ALTER TABLE `anh_chi_tiet`
  ADD PRIMARY KEY (`id_anh`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `bl_sp`
--
ALTER TABLE `bl_sp`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `dmc_sp`
--
ALTER TABLE `dmc_sp`
  ADD PRIMARY KEY (`id_dmc`);

--
-- Chỉ mục cho bảng `dm_sp`
--
ALTER TABLE `dm_sp`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `flyer`
--
ALTER TABLE `flyer`
  ADD PRIMARY KEY (`id_flyer`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id_quangcao`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Chỉ mục cho bảng `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `sp_chinhhang`
--
ALTER TABLE `sp_chinhhang`
  ADD PRIMARY KEY (`id_cty`);

--
-- Chỉ mục cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`id_thanhvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_chi_tiet`
--
ALTER TABLE `anh_chi_tiet`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bl_sp`
--
ALTER TABLE `bl_sp`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `dmc_sp`
--
ALTER TABLE `dmc_sp`
  MODIFY `id_dmc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `dm_sp`
--
ALTER TABLE `dm_sp`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `flyer`
--
ALTER TABLE `flyer`
  MODIFY `id_flyer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id_quangcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sp`
--
ALTER TABLE `sp`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sp_chinhhang`
--
ALTER TABLE `sp_chinhhang`
  MODIFY `id_cty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `id_thanhvien` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
