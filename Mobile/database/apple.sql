-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2021 lúc 06:00 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `apple`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhslidesp`
--

CREATE TABLE `anhslidesp` (
  `id` int(10) NOT NULL,
  `AnhTren` varchar(255) COLLATE utf8_bin NOT NULL,
  `AnhDuoi` varchar(255) COLLATE utf8_bin NOT NULL,
  `idSP` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `anhslidesp`
--

INSERT INTO `anhslidesp` (`id`, `AnhTren`, `AnhDuoi`, `idSP`, `created_at`, `updated_at`) VALUES
(21, '1248111332_note20ultr1.png', '1383712143_note20ultra2.png', 27, '2021-06-02 00:12:13', '2021-06-02 00:12:13'),
(22, '1362404090_S21UltraBac-361x432 (1).png', '1028385027_S21UltraDen2.png', 28, '2021-06-02 00:12:33', '2021-06-02 00:12:33'),
(23, '1925435796_samsung-galaxy-a02s-1.jpg', '1968809898_samsung-galaxy-a02s-2.jpg', 29, '2021-06-02 00:12:47', '2021-06-02 00:12:47'),
(24, '1802873808_not201.png', '1586777209_note202.png', 25, '2021-06-02 00:15:47', '2021-06-02 00:15:47'),
(25, '2014402053_637191049692122812_oppo-find-x2-xanh-1__1_.png', '750293744_637194498955419635_oppo-find-x2-den-2.png', 30, '2021-06-02 00:31:14', '2021-06-02 00:31:14'),
(26, '710492966_637236639633196688_reno-3-pro-trang-1.png', '128639186_oppo-reno3-pro-den-2.png', 31, '2021-06-02 00:31:44', '2021-06-02 00:31:44'),
(27, '1563837266_637259998058295676_oppo-a92-2.jpg', '2065817796_637291105587337600_oppo-a92-tim (1).jpg', 34, '2021-06-02 00:32:02', '2021-06-02 00:32:02'),
(28, '1699279790_637365325837796763_oppo-A93-trang-1 (1).png', '924597069_637365325836295087_oppo-A93-trang-2.png', 33, '2021-06-02 00:32:21', '2021-06-02 00:32:21'),
(29, '417249545_oppo-a94-tim-4-1.jpg', '707608839_oppo-a94-tim-5-2.jpg', 32, '2021-06-02 00:32:38', '2021-06-02 00:32:38'),
(30, '2071184834__600x600__crop_600_asus_rog_phone2_min_1 (1).jpg', '29413289_rog_kunai_gamepad-2.jpg', 35, '2021-06-02 00:51:10', '2021-06-02 00:52:37'),
(31, '1695434639_asusrogzs1.jpg', '1878012733_asusrogzs2.jpg', 36, '2021-06-02 00:51:21', '2021-06-02 00:51:21'),
(32, '2132755934_asus-zenfone-max-1.jpg', '967968355_asus-zenfone-max-2.jpg', 37, '2021-06-02 00:51:39', '2021-06-02 00:51:39'),
(33, '1851664294_rog-phone-1.jpg', '1952412275_asus-rog-phone-2.jpg', 38, '2021-06-02 00:52:12', '2021-06-02 00:52:12'),
(34, '47613815_nokia-5.4-1_2.jpg', '1690307371_nokia-5-4-xanh_1.webp', 39, '2021-06-02 00:57:03', '2021-06-02 00:57:03'),
(35, '605039780_nokia-8000-4g-den-1-org.jpg', '1344602634_nokia-8000-4g-den-note.jpg', 40, '2021-06-02 01:06:17', '2021-06-02 01:06:17'),
(36, '1216008496_nokia-24-xanh-ngoc-1-org.jpg', '544521564_nokia-24-xam-1-2-org.jpg', 41, '2021-06-02 01:13:49', '2021-06-02 01:13:49'),
(37, '277762587_nokia-230-khong-the-xam-dam-1-org.jpg', '1317821567_nokia-230-2.jpg', 42, '2021-06-02 01:14:15', '2021-06-02 01:14:15'),
(38, '119599369_iphone-7-black_1.jpg', '15327144_iphone-7-gold_2.jpg', 45, '2021-06-02 01:29:54', '2021-06-02 01:29:54'),
(39, '136555807_iphone-12_mini1.jpg', '1641162330_iphone-12mini2.jpg', 44, '2021-06-02 01:30:11', '2021-06-02 01:30:11'),
(40, '1941018428_iphone-12-pro-max_1.jpg', '1176551456_iphone-12-pro-max_2.jpg', 43, '2021-06-02 01:30:24', '2021-06-02 01:30:24'),
(41, '1623484031_XR1.jpg', '1039120520_XR2.jpg', 46, '2021-06-02 01:30:36', '2021-06-02 01:30:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `Ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_bin NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `idSP` int(10) NOT NULL,
  `idQT` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `Ten`, `NoiDung`, `Hinh`, `TrangThai`, `idSP`, `idQT`, `created_at`, `updated_at`) VALUES
(4, 'Hình', 'đẹp', '2061058459_I0LC_IPX.jpg', 1, 43, 4, '2021-07-05 11:05:31', '2021-07-05 11:05:31'),
(5, 'BlackDay', 'Sản phẩm khuyến mãi,mua ngay tặng ưu đãi', '867736166_ZVxt_banner-1-1.jpg', 1, 25, 4, '2021-07-10 08:23:50', '2021-07-10 08:25:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT 1,
  `idKH` int(10) NOT NULL,
  `idSP` int(10) NOT NULL,
  `idQT` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `Gia` int(10) NOT NULL,
  `IMEI` int(20) DEFAULT 0,
  `idDH` int(10) NOT NULL,
  `idSP` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `SoLuong`, `Gia`, `IMEI`, `idDH`, `idSP`, `created_at`, `updated_at`) VALUES
(50, 1, 4000000, 0, 122, 45, '2021-07-09 16:47:41', '2021-07-09 16:47:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkhuyenmai`
--

CREATE TABLE `chitietkhuyenmai` (
  `id` int(10) NOT NULL,
  `ChiTiet` varchar(255) COLLATE utf8_bin NOT NULL,
  `idSP` int(10) NOT NULL,
  `idKM` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthuoctinh`
--

CREATE TABLE `chitietthuoctinh` (
  `id` int(10) NOT NULL,
  `ChiTiet` varchar(255) COLLATE utf8_bin NOT NULL,
  `idTT` int(10) NOT NULL,
  `idSP` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `TongTien` int(20) NOT NULL,
  `GhiChu` text COLLATE utf8_bin DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0,
  `idQT` int(10) NOT NULL,
  `idKH` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `TongTien`, `GhiChu`, `TrangThai`, `idQT`, `idKH`, `created_at`, `updated_at`) VALUES
(122, 4000000, NULL, 0, 2, 34, '2021-07-09 16:47:41', '2021-07-09 16:47:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `id` int(10) NOT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `idKH` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `gopy`
--

INSERT INTO `gopy` (`id`, `NoiDung`, `TrangThai`, `idKH`, `created_at`, `updated`) VALUES
(1, 'Cửa hàng tư vấn nhiệt tình.Bán hàng chất lượng.Nhân viên phục vụ tốt.', 1, 1, '2019-11-12 17:05:22', '2019-11-12 17:05:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `SoDienThoai` int(20) NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_bin NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `code` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `Email`, `password`, `SoDienThoai`, `HoTen`, `DiaChi`, `active`, `code`, `created_at`, `updated_at`) VALUES
(1, 'thaisang@gmail.com', '$2y$10$yZkX9Vly4/YckbfppQa0vu5Ch5nfGqOLaEQQIHWB2rcVZyMmBy8mi', 772818495, 'Lương Thái Sang', '270 TTT P3 Q4', 0, '', '2019-11-12 09:45:44', '2019-11-12 09:50:34'),
(2, '123@gmail.com', '$2y$10$le9xd1vgwAofRpegkh2K5eG69FM.gl8DA5WhHHHdaHIFwk7UbSG4K', 772818495, 'Van Teo', '270 TTT P3 Q4', 0, '', '2019-11-17 03:19:04', '2019-11-17 03:19:04'),
(19, 'sang@gmail.com', '$2y$10$q.17oayOI/cySYfthBBF/um99p/8QzLHhnwJyWhXCEBpl.A3e1wwO', 975755326, 'Lương Sang', '889 pham the hien', 0, '$2y$10$vfq/gfVh1.u9XSQhmiQCTOC0ukA1oG3drH6Z3G2RsMilrxtnQidxy', '2021-06-02 01:48:33', '2021-06-02 01:48:33'),
(28, 'sang1997@gmail.com', '$2y$10$hhge7IO.Wj0vGVBzD66v1Oo9guWj1lWBGoQlsyQ1GBSKGXy6DOqji', 975755326, 'Thái Sang', '889 pham the hien', 1, '$2y$10$FBci4g0lEVPy4hgpI.3Yi.5X947e2H2q28Cvufr99LfJQLIcTEJxW', '2021-06-11 17:40:21', '2021-06-11 17:40:21'),
(31, 'nhinho460@gmail.com', '$2y$10$FfFRgSxiGD/IPIkjxLz.cuRCFC6MInYoMQbKa3oHQAhLtb6Md5c9a', 989865842, 'Thái Sang', 'sangsang889', 0, '$2y$10$l54hRndBdyGg3dKQ0QAwjemqL7itH7iaeLM6rMfXOBsD/Lck6Vnqq', '2021-06-16 07:34:09', '2021-06-16 07:34:09'),
(34, 'nhinho260@gmail.com', '$2y$10$f6jQjMUEIx0Qi95SYhhOZOj8.NDpfnwGKKTkAwA17hwgR8ndVX3nq', 975755326, 'lang mac', '889 pham the hien,p4,q8', 0, '$2y$10$O0rxRUxQY0AjhZqgcBgBFO0xsRWyoSAsMilibbIVykNzDLV8DUDSW', '2021-07-09 16:12:44', '2021-07-10 08:38:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(10) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_bin NOT NULL,
  `Ten_KhongDau` varchar(255) COLLATE utf8_bin NOT NULL,
  `NgayKetThuc` date DEFAULT '0000-00-00',
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `idQT` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `Ten`, `Ten_KhongDau`, `NgayKetThuc`, `NoiDung`, `TrangThai`, `idQT`, `created_at`, `updated_at`) VALUES
(1, 'Khuyễn mãi đặt trước iphone 11 pro.', 'khuyen-mai-dat-truoc-iphone-11-pro-', '2019-11-30', '<p>Đặt trước iphone 11pro giảm ngay 2 triệu tiền mặt và tặng kèm thêm tai nghe airpod 2</p>', 1, 3, '2019-11-12 21:51:26', '2019-11-13 08:34:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_transaction_id` int(11) DEFAULT NULL,
  `p_user_id` int(11) DEFAULT NULL,
  `p_money` double DEFAULT NULL COMMENT 'số tiền thanh toán',
  `p_transaction_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'số tiền thanh toán',
  `p_vnp_response_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mã phản hồi',
  `p_code_vnpay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mã giao dịch vnpay',
  `p_code_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mã ngân hàng',
  `p_time` datetime DEFAULT NULL COMMENT 'Thời gian chuyển khoản',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `p_transaction_id`, `p_user_id`, `p_money`, `p_transaction_code`, `p_note`, `p_vnp_response_code`, `p_code_vnpay`, `p_code_bank`, `p_time`, `created_at`, `updated_at`) VALUES
(12, 2, 19, 17990000, '20210627091100', 'Thanh toán hóa đơn phí dich vụ', '00', '13533019', 'NCB', '2021-06-27 09:11:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri`
--

CREATE TABLE `quantri` (
  `id` int(10) NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  `SoDienThoai` int(20) NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Quyen` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `quantri`
--

INSERT INTO `quantri` (`id`, `Email`, `password`, `SoDienThoai`, `HoTen`, `Quyen`, `created_at`, `updated_at`) VALUES
(2, 'sang@gmail.com', '$2y$10$R3PN5YUxWT7nxJXdqCiOrOR9LLIJ3374R8XG71MFQatQT.Y3LPUVW', 113, 'Van Teo', 3, '2019-11-05 21:09:00', '2019-11-05 21:47:49'),
(3, '1234@gmail.com', '$2y$10$WV7CExQHugEXNv1GBOPYK.5/sYxZ6uD6vOy/ExKhpBAMpdfX/3.y2', 113, 'Van Ti', 2, '2019-11-05 21:45:58', '2019-11-13 22:39:19'),
(4, 'thaisang@gmail.com', '$2y$10$uRaNTSMWZ8JMJYqmcwL2S.j8JtIGZsg0PZ4VZJG9..H.QGoFiFI3C', 975755326, 'Lương Thái Sang', 1, '2020-11-24 06:46:49', '2021-05-29 07:47:00'),
(5, '123@gmail.com', '$2y$10$YvFO6p/jUW2TpasmYMZMxOg9Y6NHwDrGrtey0AFggTT/JhYaXMIDq', 812288979, 'Tý', 0, '2020-11-24 06:47:20', '2020-11-24 06:47:20'),
(7, 'nhinho360@gmail.com', '$2y$10$nHiRDkULCTfu3tz/oXrhOuzTFABY7JXd75PcN7cRbL6o1Pe06OQEO', 975755327, 'laravel', 0, '2021-05-29 07:40:50', '2021-05-29 07:40:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `Ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_KhongDau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CauHinh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_bin NOT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BanChay` tinyint(1) NOT NULL,
  `pay` int(10) DEFAULT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `idTL` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `Ten`, `Ten_KhongDau`, `TomTat`, `CauHinh`, `Gia`, `SoLuong`, `Hinh`, `NoiDung`, `BanChay`, `pay`, `TrangThai`, `idTL`, `created_at`, `updated_at`) VALUES
(25, 'Samsung Galaxy Note 20', 'Samsung Galaxy Note 20', 'Camera cụm hình chữ nhật độc đáo cùng thiết kế mạnh mẽ', '<li><span>Ram : 8GB</span></li>\r\n            <li><span>Bộ nhớ trong: 258GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 10            </span></li>\r\n            <li><span>Camera sau: Chính 64 MP & Phụ 12 MP,12 MP</span></li>\r\n            <li><span>Camera trước: 10 MP</span></li>\r\n                 <li><span>Sim: Nano Sim</span></li>\r\n            <li><span>Dung lượng pin: 4300 mAH</span></li>\r\n', 15190000, 4, '1185953555_note20.png', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Màn hình với tai thỏ thời thượng</h6>\r\n                                            <p>Tháng 8/2020, Galaxy Note 20 chính thức được lên kệ, với thiết kế camera trước nốt ruồi quen thuộc, cụm camera hình chữ nhật mới lạ cùng với vi xử lý Exynos 990 cao cấp của chính Samsung chắc hẳn sẽ mang lại một trải nghiệm thú vị cùng hiệu năng mạnh mẽ.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera cụm hình chữ nhật độc đáo cùng thiết kế mạnh mẽ</h6>\r\n                                            <p>Điện thoại sở hữu thiết kế khung kim loại chắc chắn, mặt lưng nhựa bóng bẩy, kiểu dáng mạnh mẽ với những góc cạnh vuông vức nhưng vẫn mang lại cảm giác cầm nắm thoải mái.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/samsung-galaxy-note-20.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Hiệu năng mạnh mẽ với chip Apple A11</h6>\r\n                                            <p>Camera của Galaxy Note 20 được thiết kế trong cụm hình chữ nhật được đặt gọn ở phía sau bao gồm 1 camera chính 64 MP, camera góc siêu rộng 12 MP và camera tele 12 MP hỗ trợ người dùng dễ dàng lưu lại sắc nét những khoảng khắc đáng nhớ cùng gia đình và bạn bè.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thiết kế đột phá với 2 mặt kính trước và sau</h6>\r\n                                            <p>Camera Galaxy Note 20 hỗ trợ zoom đến 30x ở chế độ chụp bình thường, trong khi đó, ở chế độ chụp ban đêm, máy vẫn hỗ trợ zoom đến 10x, chi tiết trong điều kiện thiếu sáng nhiều nhưng vẫn cho chất lượng hình tốt và chi tiết.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/note20.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\" images /anhchitiet/ samsung-galaxy-note-20-230720-020730.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thao tác vuốt và vuốt</h6>\r\n                                            <p> Samsung Note 20 sở hữu camera trước 10 MP trong thiết kế nốt ruồi quen thuộc giúp khung màn hình 6.7 inch được sử dụng tối đa giúp cho việc xem phim hay chơi game đã mắt và tập trung hơn.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 2, '2021-06-01 00:34:38', '2021-06-04 07:56:46'),
(27, 'Samsung Galaxy Note 20 Ultra', 'Samsung Galaxy Note 20 Ultra', 'sang trọng', '            <li><span>Ram : 8GB</span></li>\r\n            <li><span>Bộ nhớ trong: 258GBspan></li>\r\n            <li><span>Hệ Điều Hành: Android 10            </span></li>\r\n            <li><span>Camera sau: Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF</span></li>\r\n            <li><span>Camera trước: 10 MP</span></li>\r\n            \r\n            <li><span>Sim: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 4G</span></li>\r\n            <li><span>Dung lượng pin: 4500 mAh25 W</span></li>\r\n', 16999000, 3, '830877899_note20ultra.png', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Màn hình với tai thỏ thời thượng</h6>\r\n                                            <p>Sau Galaxy Note 20 thì Galaxy Note 20 Ultra là phiên bản tiếp theo cao cấp hơn thuộc dòng Note 20 Series của Samsung, với nhiều thay đổi, từ cụm camera hỗ trợ lấy nét laser AF cùng ống kính góc rộng mới, màn hình tràn viền lên đến 6.9 inch.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera cụm hình chữ nhật độc đáo cùng thiết kế mạnh mẽ</h6>\r\n                                            <p>Màn hình tràn viền góc cạnh tối đa, kế thừa những đặc tính từ thế hệ trước, công nghệ màn hình Dynamic AMOLED 2X cho gam màu chính xác chuẩn điện ảnh cho bạn những trải nghiệm những thước phim chân thật trên chính smartphone của mình.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/samsung-galaxy-note-20-ultra3.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Hiệu năng mạnh mẽ với chip Apple A11</h6>\r\n                                            <p>Giới hạn khuyết điểm màn hình ở mức tối đa cũng mang đến tỷ lệ hiển thị cao nhất, cao hơn so với những smartphone thiết kế tai thỏ hay giọt nước đã quá phổ biến trên thị trường, máy cũng sở hữu mặt kính cảm ứng Corning Gorilla Glass Victus bền bỉ, chắc chắn với khả năng giảm thiểu trầy xước cao.\r\nMặt trước vẫn là camera selfie có độ phân giải lên đến 10 MP đặt ở vị trí trung tâm, tuy nhiên nếu để ý kỹ bạn sẽ thấy kích thước nốt ruồi đã được tối giản và trông nhỏ hơn so với phiên bản tiền nhiệm.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thiết kế đột phá với 2 mặt kính trước và sau</h6>\r\n                                            <p>Tất nhiên một smartphone với thiết kế đỉnh cao thì sẽ không thiếu đi sức mạnh phần cứng, Galaxy Note 20 Ultra sử dụng con chip Exynos 990 8 nhân mạnh mẽ, đảm nhiệm gần như hoàn hảo mọi tác vụ từ lướt web, xem phim, phát họa hình ảnh hay edit video độ phân giải cao.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/note20.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\" images /anhchitiet/ samsung-galaxy-note-20-ultra-254320-084302.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thao tác vuốt và vuốt</h6>\r\n                                            <p> Với bộ nhớ RAM 8 GB, 256 GB ROM thì máy có thể thừa sức đa nhiệm tốt mọi tác vụ và lưu trữ số lượng lớn hình ảnh hay video, tài liệu nặng, với điểm số hiệu năng AnTuTu cao ngất ngưỡng gần 500.000 điểm, Galaxy Note 20 Ultra hoàn toàn thoải mái cân mọi tác vụ.\r\nVới cấu hình mạnh như vậy giúp điện thoại chơi game luôn luôn được ổn định với mức setting cao nhất, đảm bảo mọi trải nghiệm luôn được hoàn hảo.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 2, '2021-06-02 00:07:54', '2021-06-02 00:07:54'),
(28, 'Samsung Galaxy S21+ 128GB 5G', 'Samsung Galaxy S21+ 128GB 5G', 'Thiết kế mới, tinh tế đến từng chi tiết', '            <li><span>Ram : 12 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 128 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 11</span></li>\r\n           <li><span>Camera sau: Ống kính chính góc rộng: 108MP, f/1.8, Cảm biến siêu rộng: 12MP, f/2.2</span></li>\r\n            <li><span>Camera trước: 40 MP, f/2.2</span></li>\r\n            <li><span>Sim: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 4G</span></li>\r\n            <li><span>Dung lượng pin: 5,000mAh</span></li>\r\n', 18990000, 2, '272910076_S21UltraBac-361x432.png', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Đột phá trong thiết kế thời thượng\r\n</h6>\r\n                                            <p>Sự đẳng cấp được Samsung gửi gắm thông qua chiếc smartphone Galaxy S21 Ultra 5G với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong, hứa hẹn đáp ứng trọn vẹn nhu cầu ngày càng cao của người dùng.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thỏa mãn thị giác hơn bao giờ hết\r\n</h6>\r\n                                            <p>Không chỉ đơn thuần phục vụ giao tiếp và giải trí, Samsung Galaxy S21 Ultra 5G còn chính là món phụ kiện thời trang khẳng định vị thế của người sở hữu. Vẻ ngoài mảnh mai và thon gọn đến bất ngờ chỉ 165.1 x 75.6 x 8.9 mm và trọng lượng 228 g dù phải “vác” một viên pin lớn.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/samsung-galaxy-s21-ultra-0023.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Sức mạnh kinh khủng từ chip Exynos 2100\r\n</h6>\r\n                                            <p>Samsung Galaxy S21 Ultra 5G được tích hợp vi xử lý Exynos 2100, sản xuất trên tiến trình 5 nm bao gồm 8 lõi có tốc độ xung nhịp lên đến 2.9 GHz, tối ưu hóa hiệu suất năng lượng đồng thời tiết kiệm điện năng hết sức có thể. Chipset này cải thiện hiệu suất AI nhanh hơn 2 lần, CPU tăng 20% và GPU tăng 35% so với Exynos 990. Ngoài ra, máy sử dụng RAM 12 GB cho bạn đa nhiệm mượt mà và bộ nhớ trong 128 GB mang đến không gian lưu trữ rộng lớn .\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thiết kế đột phá với 2 mặt kính trước và sau</h6>\r\n                                            <p>Thỏa thích khám phá góc nhìn rộng hơn với camera góc siêu rộng 12 MP có khẩu độ f/2.2. Giờ đây, người dùng không phải lo lắng hình ảnh bị nhòe đi với camera tele 10 MP có khẩu độ f/2.4 giúp zoom quang học 3x và camera tele tiềm vọng 10 MP có khẩu độ f/4.9 cho khả năng zoom quang 10x hoặc zoom kỹ thuật số 100x.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    \r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thao tác vuốt và vuốt</h6>\r\n                                            <p> Máy sẽ chỉ đi kèm phụ kiện là cáp Type-C, không kèm theo củ sạc rời. Do đó, người dùng sẽ có thể mua bộ sạc nhanh 25 W hay sạc không dây Qi 15 W để hưởng những tiện ích mà nó mang lại.\r\n\r\nSamsung Galaxy S21 Ultra 5G có thể được coi là ví dụ tiêu biểu cho sự phá cách trong thế giới Android đầu năm nay mang lại cho người dùng những trải nghiệm chưa từng có trên chiếc smartphone này.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 2, '2021-06-02 00:09:52', '2021-06-02 00:09:52'),
(29, 'Samsung Galaxy A02s ', 'Samsung Galaxy A02s ', 'Thiết kế tối giản nhưng không kém phần hút mắt', '            <li><span>Ram : 3 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 32 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 10 </span></li>\r\n           <li><span>Camera sau: Chính 13 MP & Phụ 2 MP, 2 MP </span></li>\r\n            <li><span>Camera trước5 MP</span></li>\r\n            <li><span>Sim: 2 Nano SIMHỗ trợ 4G</span></li>\r\n            <li><span>Dung lượng pin: 5000 mAh</span></li>\r\n', 2890000, 6, '206863335_samsung-galaxy-a02s-4.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thiết kế tối giản nhưng không kém phần hút mắt\r\n</h6>\r\n                                            <p>Samsung Galaxy A02s sở hữu thiết kế trẻ trung bắt mắt, thân máy với các cạnh viền được bo cong mềm mại, mang đến cảm giác vừa vặn, dễ dàng thao tác và tiện lợi khi sử dụng.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Đáp ứng tốt mọi tác vụ hàng ngày\r\n</h6>\r\n                                            <p>Samsung Galaxy A02s được tích hợp chip xử lý Snapdragon 450 gồm 8 lõi với tốc độ 1.8 GHz, kết hợp cùng 3 GB RAM cho khả năng đa nhiệm và xử lý các tác vụ như xem phim, chơi game, lướt web mà không gặp tình trạng giật lag khi thực hiện.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/samsung-galaxy-a02s-292420-022404.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Khám phá mọi thứ nhờ cụm camera ấn tượng\r\n</h6>\r\n                                            <p>Camera trước của Samsung Galaxy A02s sở hữu cảm biến 5 MP với các tiện ích hỗ trợ đem đến cho bạn những bức ảnh selfie đẹp để có thể chia sẻ cùng mọi người.\r\nCụm camera sau bắt mắt được đặt ở góc trái của mặt sau gồm 3 camera và đèn LED với lối thiết kế quen thuộc nằm trong mô-đun hình chữ nhật bắt mắt.\r\n\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Trải nghiệm ngày dài, không lo về pin\r\n</h6>\r\n                                            <p>Điểm cộng lớn cho Samsung Galaxy A02s là được tích hợp viên pin có dung lượng khủng 5000 mAh, một con số khá ấn tượng so với những smartphone khác trong phân khúc giá rẻ.\r\nVới dung lượng pin khó tin như vậy, chỉ cần một lần sạc thiết bị có thể cho thời gian sử dụng cả ngày dài. Để sạc đầy cho viên pin khủng này, Samsung đã trang bị công nghệ sạc pin nhanh 15 W giúp bạn rút ngắn tối đa thời gian sạc.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/samsung-galaxy-a02s-291720-021738.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thao tác vuốt và vuốt</h6>\r\n                                            <p> Nếu bạn đang cần một điện thoại pin trâu thuộc giá rẻ và màn hình kích thước lớn để phục vụ nhu cầu công việc cũng như chơi game giải trí ổn định, mượt mà thì nhất định không thể bỏ qua Samsung Galaxy A02s tuyệt vời này.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, 1, 1, 2, '2021-06-02 00:11:15', '2021-06-16 07:09:52'),
(30, 'Oppo Find X2', 'Oppo Find X2', 'Trải nghiệm thị giác tuyệt vời', '            <li><span>Ram : 12 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 256 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 10 </span></li>\r\n           <li><span>Camera sau: Chính 48 MP </span></li>\r\n            <li><span>Camera trước: Phụ 13 MP, 12 MP, 32 MP</span></li>\r\n            <li><span>Sim: 2 Nano SIM</span></li>\r\n            <li><span>Dung lượng pin: 4200 mAh</span></li>\r\n', 23990000, 6, '779261759_oppofind.png', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Oppo Find X2 – Hiệu năng đỉnh cao, màn hình chiếm trọn mặt trước\r\n</h6>\r\n                                            <p>Oppo Find X2 và Find X2 Pro là chiếc điện thoại thuộc phân khúc cao cấp vừa được Oppo ra mắt, tiếp nối sự thành công vang dội của người tiền nhiệm Oppo Find X. Đây là mẫu sản phẩm điện thoại Oppo được thừa hưởng những công nghệ mới và tốt nhất ở thời điểm hiện tại so với các đối thủ cùng phân khúc. Ngoài ra, bạn cũng có thể tham khảo điện thoại Oppo Find X3 với nhiều nâng cấp về cấu hình, thiết kế, camera cũng như dung lượng pin.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thiết kế chuyển màu nổi bật, cho cảm giác cực kì nhẹ nhàng\r\n</h6>\r\n                                            <p>Oppo Find X2 nổi bật với mặt sau làm từ chất liệu nhựa nhưng vẫn thể hiện lên tính sang trọng của máy bởi phần màu sắc. Màu sắc gradient ấn tượng xanh đam mê. Đây là màu sắc được lấy cảm hứng từ những màu sắc tự nhiên với sự chuyển màu mượt mà dưới ánh sáng và kiểu thiết kế đối xứng.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/oppo-find-x2-3.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Màn hình OLED 6,7 inch Quad-HD+ cho khả năng hiển thị sắc nét, sống động\r\n</h6>\r\n                                            <p>Oppo Find X2 nổi bật nhất có lẽ chính là mặt trước với một màn hình 93,1%, gần như chiếm trọn mặt trước với tỉ lệ hiển thị đạt gần 93.1%. Màn hình có kích thước 6,7 inch với tần số quét 120Hz siêu mượt cùng độ phân giải Quad-HD+ mang đến trải nghiệm hình ảnh tuyệt vời cho người dùng.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Cấu hình mạnh mẽ với vi xử lý Snapdragon 865 đi kèm 12GB RAM\r\n</h6>\r\n                                            <p>Cung cấp sức mạnh cho chiếc điện thoại Oppo Find X2 là con chip là Snapdragon 865 mới nhất hiện nay. Vi xử lý này cho hiệu năng cải thiện 15% đồng thời tiết kiệm pin tới 14% so với những máy dùng Snapdragon 660, có thể trải nghiệm tốt nhiều tựa game.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/oppo-find-x2-4.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Dung lượng pin lên đến 4200mAh, có khả năng cho thiết bị khác\r\n</h6>\r\n                                            <p> Oppo Find X2 sở hữu viên pin có dung lượng lên đến 4200mAh, sẽ cho một thời gian sử dụng thoải mái trong một ngày. Đủ làm hài lòng bất cứ đối tượng người dùng nào, từ những người dùng phổ thông cho đến những game thủ cày game liên tục. Công nghệ pin Li-Po giúp cho người dùng có thể thực sự yên tâm về sự an toàn của pin trong những lần sạc.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 4, '2021-06-02 00:18:24', '2021-06-02 00:18:24'),
(31, 'Oppo Reno 3 Pro', 'Oppo Reno 3 Pro', 'Màn hình nốt ruồi kép, siêu mượt 90Hz', '\r\n            <li><span>Ram : 8 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 256 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 10.0; ColorOS 7</span></li>\r\n           <li><span>Camera sau: Camera chính:64 MP, f/1.7, 27mm</span></li>\r\n            <li><span>Camera trước: Camera chính: 44 MP, f/2.4, 26mm (wide), 1/2.65\", 0.7µm</span></li>\r\n            <li><span>Sim: 2 SIM (Nano-SIM)</span></li>\r\n            <li><span>Dung lượng pin: 4025 mAh</span></li>\r\n', 14990000, 3, '1164199229_reno3.png', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thiết kế tinh tế, hiện đại\r\n\r\n</h6>\r\n                                            <p>Về thiết kế, Oppo Reno 3 Pro giống như mọi điện thoại thông minh hiện đại ngoài kia. Kính được trang bị ở mặt trước và sau. Tuy nhiên, mặt sau không phải là kính thực tế mà là polycarbonate. Có lẽ đó là lý do tại sao khi cầm điện thoại mang lại cảm giác rất nhẹ.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Màn hình sáng với lỗ đục kép\r\n</h6>\r\n                                            <p>Điện thoại Oppo Reno 3 Pro có màn hình Super AMOLED rộng 6.4 inch, cao 20: 9 với độ phân giải 1080 x 2400 pixel. Màn hình này tự hào có độ sáng cao tối đa, đặc biệt dễ dàng đánh bại một số flagship tốt nhất từ năm 2019. Oppo cho biết bảng điều khiển có thể tăng tối đa 500 nits ở độ sáng tối đa và trong môi trường thực sự sáng, màn hình có thể tăng tới 800 nits.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/dt-oppo-reno-3-pro-didongviet.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">ColorOS 7 hoàn toàn mới dựa trên Android 10\r\n\r\n</h6>\r\n                                            <p>Oppo Reno 3 Pro sẽ được chạy trên giao diện ColorOS 7. Như Oppo đã hứa, giao diện này phù hợp hơn một chút với giao diện của Android, nhưng nó vẫn cung cấp hàng tấn tùy chọn tùy chỉnh. ColorOS 7 được tích hợp rất nhiều tính năng trong khi hoạt động khá tốt về hiệu năng hàng ngày. Do đó, người dùng sẽ có được nhiều tính năng mới hấp dẫn hơn.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Hiệu suất nhanh, mượt mà\r\n</h6>\r\n                                            <p>Điện thoại được sử dụng chipset MediaTek P95 được phát hành gần đây, không hoàn toàn mới vì nó dựa trên chipset P90 đã quen thuộc với một tinh chỉnh nhỏ trong bộ phận GPU. Chipset này được cho là cung cấp hiệu suất tăng 6% so với bản trước đó.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/thiet-ke-oppo-reno-3-pro-didongviet.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera chụp hình ổn\r\n</h6>\r\n                                            <p> Oppo Reno3 Pro được trang bị đầy đủ tất cả các yếu tố cần thiết để mang đến hình ảnh chất lượng. Gồm một camera chính Quad-Bayer tiêu chuẩn 64MP, ống kính siêu rộng 13MP, camera tele 8MP và cảm biến trắng đen 2MP bổ sung.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 4, '2021-06-02 00:23:14', '2021-06-02 00:23:14'),
(32, 'OPPO A94', 'OPPO A94', 'Mẫu smartphone tầm trung mới của OPPO - OPPO A94 đã chính thức được giới thiệu đến người dùng với nhiều cải tiến nổi trội về thiết kế, pin và camera', '            <li><span>Ram : 8 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 128 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 11</span></li>\r\n           <li><span>Camera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP</span></li>\r\n            <li><span>Camera trước: 32 MP</span></li>\r\n            <li><span>Sim: 2 Nano SIM Hỗ trợ 4G </span></li>\r\n            <li><span>Dung lượng pin: 4310 mAh</span></li>\r\n', 6850000, 10, '1905796246_oppo-a94-den-1-org.jpg', 'Thiết kế cao cấp với mặt lưng bóng bẩy', 1, NULL, 1, 4, '2021-06-02 00:25:48', '2021-06-02 00:25:48'),
(33, 'Oppo A93', 'Oppo A93', 'Hiệu năng vượt trội cùng với Helio P95', '            <li><span>Ram : 8 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 128 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 10 </span></li>\r\n           <li><span>Camera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP </span></li>\r\n            <li><span>Camera trước: Chính 16 MP & Phụ 2 MP </span></li>\r\n            <li><span>Sim: 2 Nano SIM Hỗ trợ 4G </span></li>\r\n            <li><span>Dung lượng pin: 4000 mAh </span></li>\r\n', 5590000, 6, '1001558614_637365325837796763_oppo-A93-trang-1.png', 'Hiệu năng vượt trội cùng với Helio P95', 1, NULL, 1, 4, '2021-06-02 00:28:20', '2021-06-02 00:28:20'),
(34, 'Oppo A92', 'Oppo A92', 'Hiệu năng mạnh mẽ trên Snapdragon', '\r\n            <li><span>Ram : 8 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 128 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 10 </span></li>\r\n           <li><span>Camera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP </span></li>\r\n            <li><span>Camera trước: 16 MP </span></li>\r\n            <li><span>Sim: 2 Nano SIM Hỗ trợ 4G </span></li>\r\n            <li><span>Dung lượng pin: 5000 mAh </span></li>\r\n', 5690000, 4, '584196364_637291105587337600_oppo-a92-tim.jpg', 'Hiệu năng mạnh mẽ trên Snapdragon', 1, NULL, 1, 4, '2021-06-02 00:30:13', '2021-06-02 00:30:13'),
(35, 'ASUS ROG Phone 2 512GB', 'ASUS ROG Phone 2 512GB', 'Asus Rog Phone 2 – hiệu năng mạnh mẽ cùng màn hình tần số quét 120Hz', '<li><span>Ram : 12 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 128 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 9.0 (Pie) </span></li>\r\n           <li><span>Camera sau: 48 MP + 13 MP </span></li>\r\n            <li><span>Camera trước: 24 MP </span></li>\r\n            <li><span>Sim: Nano-SIM </span></li>\r\n            <li><span>Dung lượng pin: 6000mAh </span></li>', 20490000, 8, '678310980_1030452567_800276368__600x600__crop_600_asus_rog_phone2_min_1.jpg', 'Asus Rog Phone 2 – hiệu năng mạnh mẽ cùng màn hình tần số quét 120Hz', 1, NULL, 1, 5, '2021-06-02 00:37:00', '2021-07-10 08:36:41'),
(36, 'Asus Zenfone Max Pro M1', 'Asus Zenfone Max Pro M1', 'cảm giác tinh tế hơn, cầm nắm dễ chịu, chắc chắn.', '            <li><span>Ram : 3 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 32 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 9.0 (Pie) </span></li>\r\n           <li><span>Camera sau: Chính 13 MP & Phụ 5 MP </span></li>\r\n            <li><span>Camera trước: 8 MP </span></li>\r\n            <li><span>Sim: 2 Nano SIM Hỗ trợ 4G </span></li>\r\n            <li><span>Dung lượng pin: 5000 mAh </span></li>\r\n', 6490000, 2, '141289920_zenfone max.png', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thay đổi trong thiết kế\r\n\r\n\r\n</h6>\r\n                                            <p>ASUS Zenfone Max Pro M1 sở hữu một thiết kế khá sang trọng, hiện đại đến từ chất liệu hợp kim nhôm với cụm camera kép đặt dọc như trên iPhone X, đây được xem như là một xu thế mới trong năm 2018.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Xu hướng màn hình 18:9\r\n\r\n</h6>\r\n                                            <p>Asus cũng đã biết cách tự làm mới mình từ việc trang bị cho Zenfone Max Pro M1 một màn hình 6 inch với tỉ lệ 18:9 đem lại một không gian hiển thị rộng rãi và sẽ làm bạn cảm thấy hài lòng hơn khi xem phim hay lướt web.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/asus-zenfone-max-pro-m1-gold-8.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Điểm nhấn về hiệu năng\r\n\r\n</h6>\r\n                                            <p>Sức mạnh của máy cũng được cải thiện đáng kể nhờ con chip Qualcomm Snapdragon 636 mang lại một hiệu năng ổn định, mượt mà giúp bạn hoàn thành nhanh chóng các thao tác cơ bản hằng ngày.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera kép xóa phông\r\n</h6>\r\n                                            <p>Zenfone Max Pro M1 được trang bị cụm camera kép phía sau gồm một ống kính chính 13 MP và một chiếc ống kính phụ 5 MP tạo ra hiệu ứng ảnh chụp bokeh và chân dung sẽ mang đến cho bạn nhiều bức ảnh thú vị hơn trong cuộc sống.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/asus-zenfone-max-pro-m1-gold-9.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Dung lượng pin khủng\r\n</h6>\r\n                                            <p> Đúng như cái tên \"Max Pro\" tạo nên điểm nhấn cho sự mạnh mẽ đến từ viên pin có dung lượng 5000 mAh, chiếc điện thoại pin trâu này hứa hẹn sẽ đáp ứng cho bạn một thời gian trải nghiệm bền bỉ trong khoảng 2 ngày với các tác vụ cơ bản.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 5, '2021-06-02 00:41:27', '2021-06-02 00:41:27'),
(37, 'ASUS ROG Phone', 'ASUS ROG Phone', 'bền bỉ, trang nhã', '\r\n            <li><span>Ram : 12 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 512 GB </span></li>\r\n            <li><span>Hệ Điều Hành: Android 10, ROG UI</span></li>\r\n           <li><span>Camera sau: Camera chính góc rộng 64 MP, f/1.8, lấy nét theo pha kép PDAF</span></li>\r\n            <li><span>Camera trước: Ống kính góc rộng 24 MP, f/2.0</span></li>\r\n            <li><span>Sim: 2 SIM (Nano-SIM) </span></li>\r\n            <li><span>Dung lượng pin: 6000 mAh</span></li>\r\n', 18515000, 3, '2145999769_asusrogzs600.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thay đổi trong thiết kế\r\n\r\n\r\n</h6>\r\n                                            <p>ASUS Zenfone Max Pro M1 sở hữu một thiết kế khá sang trọng, hiện đại đến từ chất liệu hợp kim nhôm với cụm camera kép đặt dọc như trên iPhone X, đây được xem như là một xu thế mới trong năm 2018.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Xu hướng màn hình 18:9\r\n\r\n</h6>\r\n                                            <p>Asus cũng đã biết cách tự làm mới mình từ việc trang bị cho Zenfone Max Pro M1 một màn hình 6 inch với tỉ lệ 18:9 đem lại một không gian hiển thị rộng rãi và sẽ làm bạn cảm thấy hài lòng hơn khi xem phim hay lướt web.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/asus-zenfone-max-pro-m1-gold-8.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Điểm nhấn về hiệu năng\r\n\r\n</h6>\r\n                                            <p>Sức mạnh của máy cũng được cải thiện đáng kể nhờ con chip Qualcomm Snapdragon 636 mang lại một hiệu năng ổn định, mượt mà giúp bạn hoàn thành nhanh chóng các thao tác cơ bản hằng ngày.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera kép xóa phông\r\n</h6>\r\n                                            <p>Zenfone Max Pro M1 được trang bị cụm camera kép phía sau gồm một ống kính chính 13 MP và một chiếc ống kính phụ 5 MP tạo ra hiệu ứng ảnh chụp bokeh và chân dung sẽ mang đến cho bạn nhiều bức ảnh thú vị hơn trong cuộc sống.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/asus-zenfone-max-pro-m1-gold-9.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Dung lượng pin khủng\r\n</h6>\r\n                                            <p> Đúng như cái tên \"Max Pro\" tạo nên điểm nhấn cho sự mạnh mẽ đến từ viên pin có dung lượng 5000 mAh, chiếc điện thoại pin trâu này hứa hẹn sẽ đáp ứng cho bạn một thời gian trải nghiệm bền bỉ trong khoảng 2 ngày với các tác vụ cơ bản.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 4, '2021-06-02 00:46:25', '2021-06-02 00:46:25');
INSERT INTO `sanpham` (`id`, `Ten`, `Ten_KhongDau`, `TomTat`, `CauHinh`, `Gia`, `SoLuong`, `Hinh`, `NoiDung`, `BanChay`, `pay`, `TrangThai`, `idTL`, `created_at`, `updated_at`) VALUES
(38, 'Asus ROG Phone 5', 'Asus ROG Phone 5', 'ASUS ROG Phone 5 - Mang đến trải nghiệm tốt hơn cho người dùng', '            <li><span>Ram : 16 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 256 GB</span></li>\r\n            <li><span>Hệ Điều Hành: Android 10, ROG UI</span></li>\r\n           <li><span>Camera sau: Camera góc rộng: 64 MP, f/1.8, 26mm, 1/1.73\", 0.8µm, PDAF</span></li>\r\n            <li><span>Camera trước: 24 MP, f/2.5, 27mm (wide), 0.9µm</span></li>\r\n            <li><span>Sim: 2 SIM (Nano-SIM) </span></li>\r\n            <li><span>Dung lượng pin: 6000 mAh</span></li>\r\n', 14690000, 4, '1772585609_rog-phone-5_1616470362_1.png', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thay đổi trong thiết kế\r\n\r\n\r\n</h6>\r\n                                            <p>ASUS Zenfone Max Pro M1 sở hữu một thiết kế khá sang trọng, hiện đại đến từ chất liệu hợp kim nhôm với cụm camera kép đặt dọc như trên iPhone X, đây được xem như là một xu thế mới trong năm 2018.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Xu hướng màn hình 18:9\r\n\r\n</h6>\r\n                                            <p>Asus cũng đã biết cách tự làm mới mình từ việc trang bị cho Zenfone Max Pro M1 một màn hình 6 inch với tỉ lệ 18:9 đem lại một không gian hiển thị rộng rãi và sẽ làm bạn cảm thấy hài lòng hơn khi xem phim hay lướt web.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/asus-zenfone-max-pro-m1-gold-8.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Điểm nhấn về hiệu năng\r\n\r\n</h6>\r\n                                            <p>Sức mạnh của máy cũng được cải thiện đáng kể nhờ con chip Qualcomm Snapdragon 636 mang lại một hiệu năng ổn định, mượt mà giúp bạn hoàn thành nhanh chóng các thao tác cơ bản hằng ngày.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera kép xóa phông\r\n</h6>\r\n                                            <p>Zenfone Max Pro M1 được trang bị cụm camera kép phía sau gồm một ống kính chính 13 MP và một chiếc ống kính phụ 5 MP tạo ra hiệu ứng ảnh chụp bokeh và chân dung sẽ mang đến cho bạn nhiều bức ảnh thú vị hơn trong cuộc sống.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/asus-zenfone-max-pro-m1-gold-9.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Dung lượng pin khủng\r\n</h6>\r\n                                            <p> Đúng như cái tên \"Max Pro\" tạo nên điểm nhấn cho sự mạnh mẽ đến từ viên pin có dung lượng 5000 mAh, chiếc điện thoại pin trâu này hứa hẹn sẽ đáp ứng cho bạn một thời gian trải nghiệm bền bỉ trong khoảng 2 ngày với các tác vụ cơ bản.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 5, '2021-06-02 00:50:46', '2021-06-02 00:50:46'),
(39, 'Nokia 5.4', 'Nokia 5.4', 'Thiết kế nguyên khối bền bỉ, màn hình IPS LCD 6.39 inch sắc nét', '128 GB,Camera sau	48 MP, f/1.8, (wide), 13mm (ultrawide)2 MP, (macro)2 MP, Camera trước	16 MP, f/2.0, (wide)', 2990000, 2, '279767722_nokia-5-4-xanh_1.webp', 'Thiết kế nguyên khối bền bỉ, màn hình IPS LCD 6.39 inch sắc nét', 1, NULL, 1, 3, '2021-06-02 00:56:21', '2021-06-02 00:56:21'),
(40, 'Điện thoại Nokia 8000', 'Điện thoại Nokia 8000', 'Lớp hoàn thiện khung giữa mạ chrome sang trọng hoàn thiện vẻ ngoài.', '\r\n            <li><span>Ram : Qualcomm® SnapdragonTM 210</span></li>\r\n            <li><span>Bộ nhớ trong: 4 GB </span></li>\r\n            <li><span>Hệ Điều Hành: KaiOS</span></li>\r\n           <li><span>Camera sau: 2MP, đèn pin đồng thời là đèn flash</span></li>\r\n            <li><span>Camera trước:  không </span></li>\r\n            <li><span>Sim: 1 SIM </span></li>\r\n            <li><span>Dung lượng pin: 1500mA</span></li>\r\n', 1590000, 3, '208367901_nokia-8000-den-new-600x600-600x600.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Điểm nhấn phong cách\r\n\r\n\r\n</h6>\r\n                                            <p>Chiếc điện thoại có khung và mặt lưng được làm từ nhựa với lớp vỏ sáng bóng như thủy tinh cao cấp và các màu sắc lấy cảm hứng từ đá quý, Nokia 8000 4G được thiết kế để tỏa sáng. Lớp hoàn thiện khung giữa mạ chrome sang trọng hoàn thiện vẻ ngoài.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Kết nối 4G trên một chiếc điện thoại giá rẻ\r\n\r\n</h6>\r\n                                            <p> Bàn phím cong 3D cho kiểu dáng cứng cáp được bao bọc ở các góc cạnh cho cảm giác cầm nắm thoải mái.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/ nokia-8000-4g-252520-102558.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Hiệu năng xử lý từ Snapdragon 210\r\n\r\n\r\n</h6>\r\n                                            <p> Phần RAM 512 MB đủ dùng trên thiết bị phổ thông cùng với đó bộ nhớ trong 4 GB và hỗ trợ thẻ nhớ ngoài MicroSD 32 GB giúp cho việc lưu trữ hình ảnh, nhạc và số liên lạc được thoải mái hơn.\r\nKhông những thế, máy còn có Google Assistant giúp bạn tìm kiếm các công thức nấu ăn mới lạ hay thực hiện các cuộc gọi tất cả đều đơn giản với một người bạn trợ giúp ảo.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\"> khá sang trọng trong tầm giá phổ thông hấp dẫn\r\n\r\n</h6>\r\n                                            <p> Nokia 8000 4G trang bị chip xử lý Snapdragon 210 4 nhân mang hiệu năng vừa đủ để thao tác dễ dàng các tác vụ trên điện thoại.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/ nokia-8000-4g-253620-103608.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">\r\nDung lượng pin đủ dùng\r\n</h6>\r\n                                            <p> Viên pin 1500 mAh khá lớn, ở chế độ chờ kéo dài lên đến 28 ngày và cục pin có thể tháo rời thuận tiện cho việc lắp đặt hoặc thay thế khi gặp trục trặc.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 3, '2021-06-02 01:05:41', '2021-06-02 01:05:41'),
(41, 'Điện thoại Nokia 2.4', 'Điện thoại Nokia 2.4', 'hiết kế mới, trẻ trung, năng động nhiều màu sắc', 'Bộ nhớ trong:32 GB,Camera sau:Chính 13 MP & Phụ 2 MP,Camera trước:5 MP', 2390000, 4, '2120460161_nokia-24-xam-600x600.jpg', 'hiết kế mới, trẻ trung, năng động nhiều màu sắc', 1, NULL, 1, 3, '2021-06-02 01:10:32', '2021-06-02 01:10:32'),
(42, 'Nokia 230', 'Nokia 230', 'hiết kế mới, trẻ trung, năng động nhiều màu sắc', '           <li><span>Camera sau: 2 MP</span></li>\r\n            <li><span>Camera trước:  2 MP </span></li>\r\n            <li><span>Sim2 SIM thường</span></li>\r\n            <li><span>Dung lượng pin: 1200 mAh</span></li>\r\n', 1250000, 8, '1382406006_nokia-230-xam-dam-600x600-600x600.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thiết kế tỉ mỉ hơn của Nokia 230 Dual SIM\r\n\r\n\r\n</h6>\r\n                                            <p>Điểm nổi bật nhất trên chiếc điện thoại Nokia này là mặt lưng được làm từ nhôm nhìn khá đẹp mắt, tạo sự cứng cáp và tinh tế hơn cho máy.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Kết nối 4G trên một chiếc điện thoại giá rẻ\r\n\r\n</h6>\r\n                                            <p> Bàn phím cong 3D cho kiểu dáng cứng cáp được bao bọc ở các góc cạnh cho cảm giác cầm nắm thoải mái.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/ nokia-230-khong-the-tgdd-4.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera selfie có cả đèn Flash hỗ trợ\r\n\r\n\r\n</h6>\r\n                                            <p> Camera chính của máy cũng có độ phân giải 2 MP, giúp bạn chụp nhanh được những khoảnh khắc bạn yêu thích (Ảnh: Nguyễn Hà Nam)\r\nMáy có các giải trí đa phương tiện cho người dùng như nghe radio, nghe nhạc, gắn thẻ nhớ tối đa 32 GB, sử dụng 2 sim và kết nối mạng 2G, bluetooth và có sẵn Facebook.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\"> khá sang trọng trong tầm giá phổ thông hấp dẫn\r\n\r\n</h6>\r\n                                            <p> Nokia 8000 4G trang bị chip xử lý Snapdragon 210 4 nhân mang hiệu năng vừa đủ để thao tác dễ dàng các tác vụ trên điện thoại.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/ nokia-230-khong-the-tgdd-2.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">\r\nDung lượng pin đủ dùng\r\n</h6>\r\n                                            <p> Viên pin 1500 mAh khá lớn, ở chế độ chờ kéo dài lên đến 28 ngày và cục pin có thể tháo rời thuận tiện cho việc lắp đặt hoặc thay thế khi gặp trục trặc.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 3, '2021-06-02 01:13:23', '2021-06-02 01:13:23'),
(43, 'iPhone 12 Pro Max', 'iPhone 12 Pro Max', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng', '            <li><span>Ram: 6 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 128 GB</span></li>\r\n            <li><span>Hệ Điều Hành: iOS 14</span></li>\r\n           <li><span>Camera sau: 3 camera 12 MP</span></li>\r\n            <li><span>Camera trước:  12 MP</span></li>\r\n            <li><span>Sim: 1 Nano SIM & 1 eSIM Hỗ trợ 5G</span></li>\r\n            <li><span>Dung lượng pin: 3687 mAh</span></li>\r\n', 29300000, 10, '1011962565_iphone-12-pro-max_1__7.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thay đổi thiết kế mới sau 6 năm\r\n\r\n</h6>\r\n                                            <p>Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.\r\niPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Tai thỏ được thu gọn đáng kể\r\n\r\n</h6>\r\n                                            <p>Qua đến iPhone 12, thì phần khuyết được Apple thu gọn đi rất nhiều, điều này giúp tăng diện tích hiển thị đồng thời nâng cao trải nghiệm hình ảnh đáng kể.\r\niPhone 12 Pro Max được trang bị màn hình OLED với công nghệ Super Retina XDR mang đến chất lượng hình ảnh sắc nét, màu sắc được tái tạo chuẩn xác, độ tương phản cao, màu đen sâu tiết kiệm pin hơn.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/iph.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple.\r\n\r\n</h6>\r\n                                            <p>Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Cụm camera sau được nâng cấp mạnh mẽ\r\n\r\n</h6>\r\n                                            <p>Cụm camera iPhone 12 Pro Max tiếp tục sẽ là phần được mong chờ nhất cũng là phần quan trọng mà Apple tập trung nâng cấp qua các thế hệ iPhone.\r\niPhone 12 Pro Max vẫn sử dụng hệ thống camera hình vuông ở phía sau đồng thời bổ sung thêm cảm biến LiDAR tạo thành 1 hệ thống 3 camera chất lượng.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/ip.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Hiệu năng khủng từ “quái vật” A14 Bionic\r\n</h6>\r\n                                            <p> A14 Bionic sẽ là vi xử lý được trên bị trên iPhone 12 Pro Max với 6 nhân xung nhịp lên tới 3.1 GHz hứa hẹn một hiệu năng mạnh nhất từ trước đến nay trên các thiết bị Apple.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 1, '2021-06-02 01:22:06', '2021-06-02 01:22:06'),
(44, 'iPhone 12 mini', 'iPhone 12 mini', 'nhỏ bé nhưng vô cùng mạnh mẽ', '\r\n            <li><span>Ram: 4 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 64 GB</span></li>\r\n            <li><span>Hệ Điều Hành: iOS 14</span></li>\r\n           <li><span>Camera sau: 2 camera 12 MP</span></li>\r\n            <li><span>Camera trước:  12 MP</span></li>\r\n            <li><span>Sim: 1 Nano SIM & 1 eSIM Hỗ trợ 5G</span></li>\r\n            <li><span>Dung lượng pin: 2227mAh</span></li>\r\n', 17990000, 7, '581607509_iphone-12_mini2.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thay đổi thiết kế mới sau 6 năm\r\n\r\n</h6>\r\n                                            <p>Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.\r\niPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Tai thỏ được thu gọn đáng kể\r\n\r\n</h6>\r\n                                            <p>Qua đến iPhone 12, thì phần khuyết được Apple thu gọn đi rất nhiều, điều này giúp tăng diện tích hiển thị đồng thời nâng cao trải nghiệm hình ảnh đáng kể.\r\niPhone 12 Pro Max được trang bị màn hình OLED với công nghệ Super Retina XDR mang đến chất lượng hình ảnh sắc nét, màu sắc được tái tạo chuẩn xác, độ tương phản cao, màu đen sâu tiết kiệm pin hơn.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/thiet-ke-iphone-12-mini-64gb-mau-tim-purple-didongviet.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">iPhone 12 Pro mini một siêu phẩm smartphone đến từ Apple.\r\n\r\n</h6>\r\n                                            <p>Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Cụm camera sau được nâng cấp mạnh mẽ\r\n\r\n</h6>\r\n                                            <p>Cụm camera iPhone 12 Pro Max tiếp tục sẽ là phần được mong chờ nhất cũng là phần quan trọng mà Apple tập trung nâng cấp qua các thế hệ iPhone.\r\niPhone 12 Pro Max vẫn sử dụng hệ thống camera hình vuông ở phía sau đồng thời bổ sung thêm cảm biến LiDAR tạo thành 1 hệ thống 3 camera chất lượng.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/ip.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Hiệu năng khủng từ “quái vật” A14 Bionic\r\n</h6>\r\n                                            <p> A14 Bionic sẽ là vi xử lý được trên bị trên iPhone 12 Pro Max với 6 nhân xung nhịp lên tới 3.1 GHz hứa hẹn một hiệu năng mạnh nhất từ trước đến nay trên các thiết bị Apple.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 1, '2021-06-02 01:25:03', '2021-06-02 01:25:03'),
(45, 'iPhone 7', 'iPhone 7', 'toát lên vẻ sang trọng', '            <li><span>Ram: 2 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 32 GB</span></li>\r\n            <li><span>Hệ Điều Hành: iOS 14</span></li>\r\n           <li><span>Camera sau: camera 12 MP</span></li>\r\n            <li><span>Camera trước:  7 MP</span></li>\r\n            <li><span>Sim: 1 Nano SIM Hỗ trợ 4G</span></li>\r\n            <li><span>Dung lượng pin: 1960 mAh</span></li>\r\n', 4000000, 5, '434855652_iphone-12-pro-max_1__7.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Camera trước tăng lên 7 MP\r\n\r\n</h6>\r\n                                            <p>Một sự cải thiện đáng kể so với iPhone 6s trước đó, những tấm ảnh chụp selfie của bạn càng thêm độ chi tiết và sắc nét.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Âm thanh stereo phát ra từ 2 phía\r\n</h6>\r\n                                            <p>Không còn khó chịu khi bạn cầm máy chơi game nhưng bị bít loa như ở những phiên bản trước đó.</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/iphone-7-tgdd-12.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Cảm biến vân tay nhanh nhạy hơn\r\n\r\n</h6>\r\n                                            <p>Giúp bạn mở khóa máy chỉ trong vài nốt nhạc, giúp tiết kiệm thời gian cũng như bảo mật cao dữ liệu trong máy.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Màn hình 4.7 inch càng thêm sắc nét\r\n</h6>\r\n                                            <p>Cùng với đó là khả năng hiển thị tốt hơn dưới trời nắng, góc nhìn nghiêng không bị mất màu.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/iphone-7-tgdd-15.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Cấu hình mạnh mẽ thoải mái chiến game\r\n\r\n</h6>\r\n                                            <p> Máy tích hợp chip xử lý A10 mới nhất, RAM 2 GB giúp điện thoại chơi game mượt mà và ổn định, cùng hệ điều hành iOS luôn được cập nhật mới giúp vận hành nhẹ nhàng và nhanh nhạy.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 1, '2021-06-02 01:27:09', '2021-06-02 01:27:09'),
(46, 'iPhone XR', 'iPhone XR', 'Smartphone thiết kế tinh tế, nhiều màu sắc', '            <li><span>Ram: 3 GB</span></li>\r\n            <li><span>Bộ nhớ trong: 64GB</span></li>\r\n            <li><span>Hệ Điều Hành: iOS 14</span></li>\r\n           <li><span>Camera sau: camera 12 MP</span></li>\r\n            <li><span>Camera trước:  7 MP</span></li>\r\n            <li><span>Sim: 1 Nano SIM & 1 eSIMHỗ trợ 4G</span></li>\r\n            <li><span>Dung lượng pin: 2942 mAh</span></li>\r\n', 13690000, 6, '194398109_apple-iphone-xr-64-gb-chinh-hang-vn_1__1.jpg', '<div class=\"flat-grid-box col2 border-width border-width-1 has-padding clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Thay đổi thiết kế mới sau 6 năm\r\n\r\n</h6>\r\n                                            <p>Theo chu kỳ cứ mỗi 3 năm thì iPhone lại thay đổi thiết kế và 2020 là năm đánh dấu cột mốc quan trong này, vì thế rất có thể đây là thời điểm các mẫu iPhone 12 sẽ có một sự thay đổi mạnh mẽ về thiết kế.\r\niPhone 12 Pro Max sở hữu diện mạo mới mới với khung viền được vát thẳng và mạnh mẽ như trên iPad Pro 2020, chấm dứt hơn 6 năm với kiểu thiết kế bo cong trên iPhone 6 được ra mắt lần đầu tiên vào năm 2014.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right padding-bottom-48 clearfix\">                                                   \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Tai thỏ được thu gọn đáng kể\r\n\r\n</h6>\r\n                                            <p>Qua đến iPhone 12, thì phần khuyết được Apple thu gọn đi rất nhiều, điều này giúp tăng diện tích hiển thị đồng thời nâng cao trải nghiệm hình ảnh đáng kể.\r\niPhone 12 Pro Max được trang bị màn hình OLED với công nghệ Super Retina XDR mang đến chất lượng hình ảnh sắc nét, màu sắc được tái tạo chuẩn xác, độ tương phản cao, màu đen sâu tiết kiệm pin hơn.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/iphone-xr-tgdd-3.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\"> Màn hình tai thỏ tràn viền công nghệ LCD\r\n</h6>\r\n                                            <p>Khác với iPhone Xs hay Xs Max, chiếc smartphone này sở hữu màn hình LCD.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                                <div class=\"grid-row image-right clearfix\">                                                 \r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Cụm camera sau được nâng cấp mạnh mẽ\r\n\r\n</h6>\r\n                                            <p>Cụm camera iPhone 12 Pro Max tiếp tục sẽ là phần được mong chờ nhất cũng là phần quan trọng mà Apple tập trung nâng cấp qua các thế hệ iPhone.\r\niPhone 12 Pro Max vẫn sử dụng hệ thống camera hình vuông ở phía sau đồng thời bổ sung thêm cảm biến LiDAR tạo thành 1 hệ thống 3 camera chất lượng.\r\n</p>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"thumb text-center\">\r\n                                            <img src=\"images/anhchitiet/iphone-xr-tgdd-7.jpg\" alt=\"Image\">\r\n                                        </div>                                                  \r\n                                    </div><!-- /.grid-item -->\r\n                                </div><!-- /.grid-row -->\r\n                                \r\n                                <div class=\"grid-row image-left padding-bottom-48 clearfix\">\r\n                                    <div class=\"grid-item\">\r\n                                        <div class=\"text-wrap\">\r\n                                            <h6 class=\"title\">Mạnh mẽ bậc nhất với chip Apple A12\r\n</h6>\r\n                                            <p> Với mỗi lần ra mắt, Apple lại giới thiệu một con chip mới và Apple A12 Bionic là con chip đầu tiên sản xuất với tiến trình 7nm được tích hợp trên iPhone Xr.</p>\r\n                                        </div>\r\n                                    </div>\r\n                                </div><!-- /.grid-row -->\r\n\r\n                            </div>\r\n', 1, NULL, 1, 1, '2021-06-02 01:29:30', '2021-06-02 01:29:30'),
(47, 'asus222', 'asus222', 'thiết kế sang trọng', 'khong', 22222222, 2, '1440635415_800276368__600x600__crop_600_asus_rog_phone2_min_1.jpg', 'chào bạn', 1, NULL, 1, 5, '2021-06-12 14:59:47', '2021-07-03 16:22:17'),
(48, 'Samsung Galaxy Note 21', 'samsung-galaxy-note-21', 'a', '8GB', 2000000, 4, '218041376_1001558614_637365325837796763_oppo-A93-trang-1.png', 'không', 1, NULL, 1, 2, '2021-07-10 08:37:41', '2021-07-10 08:37:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_bin NOT NULL,
  `Ten_KhongDau` varchar(255) COLLATE utf8_bin NOT NULL,
  `TrangChu` tinyint(1) NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `Ten`, `Ten_KhongDau`, `TrangChu`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 'IPHONE', 'iphone', 1, 1, '2021-06-11 12:24:28', '2021-06-11 12:24:28'),
(2, 'SAMSUNG', 'SamSung', 1, 1, '2021-06-04 06:34:56', '2021-06-04 06:34:56'),
(3, 'NOKIA', 'Nokia', 1, 1, '2021-06-04 06:35:04', '2021-06-04 06:35:04'),
(4, 'OPPO', 'OPPO', 1, 1, '2021-05-30 01:37:23', '2021-05-29 18:37:23'),
(5, 'ASUS', 'Asus', 1, 1, '2021-06-04 06:35:11', '2021-06-04 06:35:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinh`
--

CREATE TABLE `thuoctinh` (
  `id` int(10) NOT NULL,
  `Sim` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `DungLuong` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `MauSac` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Ram` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `thuoctinh`
--

INSERT INTO `thuoctinh` (`id`, `Sim`, `DungLuong`, `MauSac`, `Ram`, `created_at`, `updated_at`) VALUES
(1, '1sim', '64GB', 'white', '2GB', '2019-11-10 00:00:24', '2019-11-18 09:02:29'),
(2, '1sim', '256GB', 'white', '2GB', '2019-11-10 00:01:45', '2019-11-18 09:02:35'),
(3, '1sim', '512GB', 'white', '2GB', '2019-11-10 00:02:18', '2019-11-18 09:02:40'),
(4, '2sim', '64GB', 'white', '2GB', '2019-11-10 00:02:43', '2019-11-18 09:02:52'),
(5, '2sim', '256GB', 'white', '2GB', '2019-11-20 07:59:15', '2019-11-20 07:59:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(10) NOT NULL,
  `TieuDe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TieuDe_KhongDau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(255) COLLATE utf8_bin NOT NULL,
  `idQT` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `TieuDe`, `TieuDe_KhongDau`, `NoiDung`, `Hinh`, `idQT`, `created_at`, `updated_at`) VALUES
(2, 'sản phẩm', 'san-pham', '<p>chơi game thả ga với dung lượng pin siêu cấp</p>', '2043173199_4-6.jpg', 4, '2019-11-05 23:17:27', '2021-07-10 08:28:58'),
(6, 'Thế Hệ Mới', 'the-he-moi', 'Sản Phẩm mới nhất hiện nay', '1608355355_1263422876__600x600__crop_600_asus_rog_phone2_min_1.jpg', 4, '2021-06-05 09:21:18', '2021-07-10 08:27:44'),
(7, 'Đa Năng', 'Đa Năng', 'Tích hợp công nghệ tiên tiến hiện nay', '209294749_photo-1-15502346559642798959.jpg', 5, '2021-07-10 08:29:33', '2021-07-10 08:29:33'),
(8, 'Xã hội', 'Xã hội', 'phát triển đa năng, công nghệ tiên tiến, mượt ,sang torng5', '417826686_so-sanh-toc-do-face-1-750x536.jpg', 4, '2021-07-10 08:30:24', '2021-07-10 08:30:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `provider`, `provider_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thái Sang', 'nhinho260@yahoo.com.vn', 'facebook', '2008007256019940', NULL, NULL, NULL, '2021-06-03 06:12:09', '2021-06-03 06:12:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anhslidesp`
--
ALTER TABLE `anhslidesp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSP` (`idSP`),
  ADD KEY `idQT` (`idQT`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKH` (`idKH`),
  ADD KEY `idSP` (`idSP`),
  ADD KEY `idQT` (`idQT`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSP` (`idSP`),
  ADD KEY `idDH` (`idDH`);

--
-- Chỉ mục cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSP` (`idSP`),
  ADD KEY `idKM` (`idKM`);

--
-- Chỉ mục cho bảng `chitietthuoctinh`
--
ALTER TABLE `chitietthuoctinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTT` (`idTT`),
  ADD KEY `idSP` (`idSP`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idQT` (`idQT`),
  ADD KEY `idKH` (`idKH`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKH` (`idKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idQT` (`idQT`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTL` (`idTL`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuoctinh`
--
ALTER TABLE `thuoctinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idQT` (`idQT`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anhslidesp`
--
ALTER TABLE `anhslidesp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietthuoctinh`
--
ALTER TABLE `chitietthuoctinh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT cho bảng `gopy`
--
ALTER TABLE `gopy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `quantri`
--
ALTER TABLE `quantri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `thuoctinh`
--
ALTER TABLE `thuoctinh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anhslidesp`
--
ALTER TABLE `anhslidesp`
  ADD CONSTRAINT `anhslidesp_ibfk_1` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`idQT`) REFERENCES `quantri` (`id`),
  ADD CONSTRAINT `banner_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idQT`) REFERENCES `quantri` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_3` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`idDH`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_1` FOREIGN KEY (`idKM`) REFERENCES `khuyenmai` (`id`),
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chitietthuoctinh`
--
ALTER TABLE `chitietthuoctinh`
  ADD CONSTRAINT `chitietthuoctinh_ibfk_1` FOREIGN KEY (`idTT`) REFERENCES `thuoctinh` (`id`),
  ADD CONSTRAINT `chitietthuoctinh_ibfk_2` FOREIGN KEY (`idSP`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idQT`) REFERENCES `quantri` (`id`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD CONSTRAINT `gopy_ibfk_1` FOREIGN KEY (`idKH`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`idQT`) REFERENCES `quantri` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idTL`) REFERENCES `theloai` (`id`);

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`idQT`) REFERENCES `quantri` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
