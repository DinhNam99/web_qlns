-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2020 lúc 04:14 PM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hus_staff`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `photo`, `name`, `role`) VALUES
(1, 'Admin', 'admin', 'profile.jpg', 'Admin', 1),
(2, 'user1', '123456', '1.png', 'Hello', 0),
(9, 'user3', '123456', 'avatar.png', 'Ta ta', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bacluong`
--

CREATE TABLE `bacluong` (
  `mabacluong` int(11) NOT NULL,
  `hesoluong` float DEFAULT NULL,
  `phucap` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bacluong`
--

INSERT INTO `bacluong` (`mabacluong`, `hesoluong`, `phucap`) VALUES
(1, 2.34, 0),
(2, 2.67, 0),
(3, 3, 0),
(4, 3.33, 0),
(5, 3.66, 0),
(6, 3.99, 0),
(7, 4.32, 0),
(8, 4.65, 0),
(9, 4.98, 0),
(10, 4.98, 0.05),
(11, 4.98, 0.06);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bomon`
--

CREATE TABLE `bomon` (
  `id` int(11) NOT NULL,
  `matruong` int(11) NOT NULL,
  `makhoa` int(11) NOT NULL,
  `tenbomon` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bomon`
--

INSERT INTO `bomon` (`id`, `matruong`, `makhoa`, `tenbomon`) VALUES
(6, 1, 6, 'Giải tích'),
(8, 1, 6, 'Đại số'),
(9, 1, 6, 'Tin học'),
(10, 1, 6, 'Xác suất - Thống kê'),
(11, 1, 6, 'Khoa học dữ liệu'),
(12, 1, 7, 'Vật lý hạt nhân'),
(13, 1, 7, 'Quang lượng tử'),
(14, 1, 7, 'Vật lý vô tuyến'),
(15, 1, 7, 'Tin học Vật lý'),
(16, 1, 8, 'Hóa hữ cơ'),
(17, 1, 8, 'Hóa Dầu mỏ'),
(18, 1, 8, 'Hóa vô cơ'),
(19, 1, 8, 'Hóa lý'),
(20, 1, 9, 'Di truyền học'),
(21, 1, 9, 'Sinh học Tế bào'),
(22, 1, 9, 'Vi sinh vật học'),
(23, 1, 9, 'Dộng vật học ứng dụng'),
(24, 1, 10, 'Bản Đồ - Viễn Thám'),
(25, 1, 10, 'Công nghệ địa chính'),
(26, 1, 10, 'Địa chính'),
(27, 1, 10, 'Địa mạo và Địa lý - Môi trường biển'),
(28, 1, 11, 'Trầm tích và Địa chất Biển'),
(29, 1, 11, 'Địa chất Dầu khí'),
(30, 1, 11, 'Khoa học và Công nghệ Địa chấ'),
(31, 1, 11, 'Địa vật lý ứng dụng'),
(32, 1, 12, 'Quản lý Môi trường'),
(33, 1, 12, 'Sinh thái Môi trường'),
(34, 1, 12, 'Tài nguyên và Môi trường Đất'),
(35, 1, 13, 'Khí tượng'),
(36, 1, 13, 'Thủy Văn'),
(37, 1, 13, 'Hải dương'),
(38, 2, 14, 'Văn hóa và Địa lý Du lịch'),
(39, 2, 14, 'Quản lý Du lịch'),
(40, 2, 14, 'Quản trị sự kiện'),
(41, 2, 14, 'Ấn Độ học'),
(42, 2, 14, 'Đông Nam Á học'),
(43, 2, 14, 'Korea học'),
(44, 2, 16, 'Chính trị học'),
(45, 2, 16, 'Hồ Chí Minh học'),
(46, 2, 16, 'Chính trị truyền thông'),
(47, 2, 17, 'Chính sách Công'),
(48, 2, 17, 'Quản lý Xã hội'),
(49, 2, 17, 'Sở hữu trí tuệ'),
(50, 2, 18, 'Khảo cổ học'),
(51, 2, 18, 'Lịch sử Việt Nam Cổ - Trung đại'),
(52, 2, 18, 'Lịch sử Đảng CSVN'),
(53, 2, 19, 'Lưu trữ học'),
(54, 2, 19, 'Quản trị Văn phòng'),
(55, 2, 19, 'Văn bản Hành chính học'),
(56, 2, 20, 'Việt ngữ học'),
(57, 2, 20, 'Ngôn ngữ học so sánh - đối chiếu'),
(58, 2, 20, 'Ngôn ngữ và Văn hóa các dân tộc Việt Nam'),
(59, 2, 21, 'Nhân học Kinh tế - Xã hội'),
(60, 2, 21, 'Nhân học Văn hóa'),
(61, 2, 21, 'Nhân học Phát triển'),
(62, 2, 22, 'Quan hệ Quốc tế'),
(63, 2, 22, 'Nghiên Cứu Châu Âu'),
(64, 2, 22, 'Nghiên cứu Châu Mỹ'),
(65, 2, 23, 'Tâm lý học Xã hội'),
(66, 2, 23, 'Tâm lý học Phát triển'),
(67, 2, 23, 'Tâm lý học Lâm sàng'),
(68, 2, 24, 'Thông tin - Tư liệu'),
(69, 2, 24, 'Thư viện - Thư mục'),
(70, 2, 24, 'Tin học cơ sở và Ứng dụng'),
(71, 2, 25, 'Triết học Mác - Lênin'),
(72, 2, 25, 'Lịch sử Triết học'),
(73, 2, 25, 'Chủ nghĩa Xã hội Khoa học'),
(76, 3, 26, 'Công nghệ phần mềm'),
(77, 3, 26, 'Khoa học Máy tính'),
(78, 3, 26, 'Hệ thống nhúng'),
(79, 3, 27, 'Điện tử và Kỹ thuật Máy tính'),
(80, 3, 27, 'Thông tin Vô tuyến'),
(81, 3, 27, 'Vi cơ Điện tử và Vi hệ thống'),
(82, 3, 28, 'Công nghệ nano sinh học'),
(83, 3, 28, 'Công nghệ quang tử'),
(84, 3, 28, 'Vật liệu và linh kiện bán dẫn nano'),
(85, 3, 29, 'Cơ điện tử - Tự động hóa'),
(86, 3, 29, 'Công nghệ hàng không vũ trụ'),
(87, 3, 30, 'Hàng không vũ trụ'),
(88, 4, 31, 'Ngôn ngữ Anh'),
(89, 4, 32, 'Ngôn ngữ Pháp'),
(90, 4, 33, 'Ngôn ngữ Nga'),
(91, 4, 34, 'Ngôn ngữ Trung'),
(92, 4, 35, 'Ngôn ngữ Nhật'),
(93, 4, 36, 'Ngôn ngữ Hàn'),
(94, 5, 35, 'Kế toán'),
(95, 5, 35, 'Kiểm toán'),
(96, 5, 36, 'Kinh tế Chính trị'),
(97, 5, 37, 'Kinh tế phát triển'),
(98, 5, 40, 'Tài chính'),
(99, 5, 41, 'Kinh doanh quốc tế'),
(100, 6, 42, 'Sư phạm Toán'),
(101, 6, 42, 'Sư phạm Lý'),
(102, 6, 42, 'Sư phạm Hóa'),
(103, 6, 43, 'Khoa học Giáo dục'),
(104, 6, 43, 'Tham vấn học đường'),
(105, 6, 45, 'Quản trị Chất lượng Giáo dục'),
(106, 6, 45, 'Đánh giá trong giáo dục'),
(107, 6, 44, 'Công nghệ giáo dục'),
(108, 8, 1, 'Y dược'),
(109, 8, 2, 'Luật'),
(110, 8, 3, 'Quốc tế'),
(111, 8, 4, 'Quản trị Kinh doanh'),
(112, 8, 5, 'Khoa học'),
(113, 8, 2, 'Luật quốc tế'),
(114, 5, 38, 'Giải tích');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `macb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioiTinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailkhac` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `didong` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noiohientai` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dantoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tongiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `socmnd` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaycapcmnd` date DEFAULT NULL,
  `noicapcmnd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngoaingu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khenthuong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobhxh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kiluat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytuyendung` date DEFAULT NULL,
  `mabomon` int(11) DEFAULT NULL,
  `mabacLuong` int(11) DEFAULT NULL,
  `hocvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hocham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `malinhvuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`macb`, `hoten`, `ngaysinh`, `gioiTinh`, `email`, `emailkhac`, `didong`, `quequan`, `noiohientai`, `dantoc`, `tongiao`, `socmnd`, `ngaycapcmnd`, `noicapcmnd`, `ngoaingu`, `khenthuong`, `sobhxh`, `kiluat`, `ngaytuyendung`, `mabomon`, `mabacLuong`, `hocvi`, `hocham`, `malinhvuc`) VALUES
('CB1', 'Nguyễn Văn A', '1980-10-07', 'Nam', 'nguyenvana@gmail.com', NULL, '0333333333', 'Hà Nội', 'Thanh Xuân, Hà Nội', 'Kinh', NULL, '113562756', '1995-04-04', 'Hà Nội', 'Anh, Pháp', NULL, NULL, NULL, '2010-10-09', 6, 1, 'Tiến sĩ', NULL, 2),
('CB2', 'Trần Thu B', '1985-09-07', 'Nu', 'tranthub@gmail.com', NULL, '0956214753', 'Hà Tĩnh', 'Cầu Giấy, Hà Nội', 'Kinh', 'Phật Giáo', '015234795', '2000-05-05', 'Hà Tĩnh', 'Anh', 'Bằng Thi đua hạng nhì', '328412384189267', NULL, '2007-09-07', 96, 4, 'Thạc sĩ', NULL, 12),
('CB345', 'Le Thi He', '1990-12-09', 'Nu', 'lethina@gmail.com', '', '0987654321', 'Hải Dương', 'Thanh Xuân, Hà Nội', 'Kinh', '', '113456789', '2005-05-05', 'Hải Dương', 'Anh', '', '', '', '2025-01-09', 44, 4, 'Thạc sĩ', '', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyenmon`
--

CREATE TABLE `chuyenmon` (
  `id` int(11) NOT NULL,
  `macb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `malinhvuc` int(11) NOT NULL,
  `nganhdaotao` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyenmon`
--

INSERT INTO `chuyenmon` (`id`, `macb`, `malinhvuc`, `nganhdaotao`) VALUES
(1, 'CB1', 2, 'Giải tích'),
(2, 'CB1', 2, 'Thống kê ứng dụng'),
(3, 'CB2', 12, 'Kinh tế quốc tế'),
(4, 'CB2', 12, 'Quản trị Kinh Doanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dantoc`
--

CREATE TABLE `dantoc` (
  `id` int(11) NOT NULL,
  `tendantoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dantoc`
--

INSERT INTO `dantoc` (`id`, `tendantoc`) VALUES
(1, 'Mường'),
(2, 'Nùng'),
(3, 'Kinh'),
(4, 'Ê đê'),
(5, 'Tày');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `mahopdong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `macb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matruong` int(11) NOT NULL,
  `tenhopdong` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucVu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaihopdong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngayKy` date DEFAULT NULL,
  `tuNgay` date DEFAULT NULL,
  `denNgay` date DEFAULT NULL,
  `trichYeuNoiDung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hopdong`
--

INSERT INTO `hopdong` (`mahopdong`, `macb`, `matruong`, `tenhopdong`, `chucVu`, `loaihopdong`, `ngayKy`, `tuNgay`, `denNgay`, `trichYeuNoiDung`) VALUES
('HDCB', 'CB1', 1, 'Hợp đồng cán bộ', 'Giảng viên', 'Hợp đồng lao động 12 tháng', '2020-01-01', '2020-01-01', '2020-12-31', 'Quyết định ký hợp đồng cán bộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` int(11) NOT NULL,
  `matruong` int(11) NOT NULL,
  `tenkhoa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `matruong`, `tenkhoa`) VALUES
(1, 8, 'Khoa Y dược'),
(2, 8, 'Khoa Luật'),
(3, 8, 'Khoa Quốc Tế'),
(4, 8, 'Khoa Quản trị và Kinh doanh'),
(5, 8, 'Khoa các Khoa học liên ngành'),
(6, 1, 'Khoa Toán - Cơ - Tin học'),
(7, 1, 'Khoa Vật lý'),
(8, 1, 'Khoa Hóa học'),
(9, 1, 'Khoa Sinh học'),
(10, 1, 'Khoa Địa lý'),
(11, 1, 'Khoa Địa chất'),
(12, 1, 'Khoa Môi trường'),
(13, 1, 'Khoa Khí tượng Thủy văn và Hải dương học'),
(14, 2, 'Du lịch học'),
(15, 2, 'Đông phương học'),
(16, 2, 'Chính trị'),
(17, 2, 'Quản lý'),
(18, 2, 'Lịch sử'),
(19, 2, 'Lưu trữ và Quản trị văn phòng'),
(20, 2, 'Ngôn ngữ học'),
(21, 2, 'Nhân học'),
(22, 2, 'Quốc tế học'),
(23, 2, 'Tâm lý học'),
(24, 2, 'Thông tin -Thư viện'),
(25, 2, 'Triết học'),
(26, 3, 'Khoa Công nghệ thông tin'),
(27, 3, 'Khoa Điện tử viễn thông'),
(28, 3, 'Khoa Vật lý kỹ thuật và Công nghệ Nano'),
(29, 3, 'Khoa tự động hóa'),
(30, 3, 'Khoa Công nghệ Hàng không Vũ trụ'),
(31, 4, 'Khoa Tiếng anh'),
(32, 4, 'Khoa NN và VH Pháp'),
(33, 4, 'Khoa NN và VH Nga'),
(34, 4, 'Khoa NN và VH Trung Quốc'),
(35, 4, 'Khoa NN và VH Nhật Bản'),
(36, 4, 'Khoa NN và VH Hàn Quốc'),
(37, 5, 'Khoa Kế toán - Kiểm toán'),
(38, 5, 'Khoa Kinh tế chính trị'),
(39, 5, 'Khoa Kinh tế phát triển'),
(40, 5, 'Khoa Tài chính - Ngân hàng'),
(41, 5, 'Khoa Kinh tế và Kinh doanh Quốc tế'),
(42, 6, 'Khoa Sư phạm'),
(43, 6, 'Khoa Quản lý Giáo dục'),
(44, 6, 'Khoa Công nghệ Giáo dục'),
(45, 6, 'Khoa Quản trị chất lượng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc`
--

CREATE TABLE `linhvuc` (
  `malinhvuc` int(11) NOT NULL,
  `linhvuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `linhvuc`
--

INSERT INTO `linhvuc` (`malinhvuc`, `linhvuc`) VALUES
(1, 'Khoa học máy tính'),
(2, 'Toán học'),
(3, 'Mạng máy tính'),
(4, 'Hạt nhân'),
(5, 'Quang lượng Tử'),
(6, 'Cơ học'),
(7, 'Vô cơ'),
(8, 'Hữu cơ'),
(9, 'Triết học'),
(10, 'Tâm lý học'),
(11, 'Ngôn ngữ'),
(12, 'Kinh tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihopdong`
--

CREATE TABLE `loaihopdong` (
  `id` int(11) NOT NULL,
  `tenLoaiHopDong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihopdong`
--

INSERT INTO `loaihopdong` (`id`, `tenLoaiHopDong`) VALUES
(1, 'Hợp đồng làm việc không xác định thời hạn'),
(2, 'Hợp đồng lao động 12 tháng'),
(3, 'Hợp đồng thử việc'),
(4, 'Hợp đồng lao động 3 tháng'),
(5, 'Hợp đồng lao động 5 tháng'),
(6, 'Hợp đồng lao động 24tháng'),
(7, 'Hợp đồng lao động 36 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quequan`
--

CREATE TABLE `quequan` (
  `id` int(11) NOT NULL,
  `tinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quequan`
--

INSERT INTO `quequan` (`id`, `tinh`) VALUES
(1, 'An Giang'),
(2, 'Bà Rịa - Vũng Tàu'),
(3, 'Bạc Liêu'),
(4, 'Bắc Cạn'),
(5, 'Bắc Giang'),
(6, 'Bắc Ninh'),
(7, 'Bến Tre'),
(8, 'Bình Dương'),
(9, 'Bình Định'),
(10, 'Bình Phước'),
(11, 'Bình Thuận'),
(12, 'Cà Mau'),
(13, 'Cao Bằng'),
(14, 'Cần Thơ'),
(15, 'Đà Nẵng'),
(16, 'Đắk Lắk'),
(17, 'Đắk Nông'),
(18, 'Điện Biên'),
(19, 'Đồng Nai'),
(20, 'Đồng Tháp'),
(21, 'Gia Lai'),
(22, 'Hà Giang'),
(23, 'Hà Nam'),
(24, 'Hà Nội'),
(25, 'Hà Tây'),
(26, 'Hà Tĩnh'),
(27, 'Hải Dương'),
(28, 'Hải Phòng'),
(29, 'Hòa Bình'),
(30, 'Hồ Chí Minh'),
(31, 'Hậu Giang'),
(32, 'Hưng Yên'),
(33, 'Khánh Hòa'),
(34, 'Kiên Giang'),
(35, 'Kon Tum'),
(36, 'Lai Châu'),
(37, 'Lào Cai'),
(38, 'Lạng Sơn'),
(39, 'Lâm Đồng'),
(40, 'Long An'),
(41, 'Nam Định'),
(42, 'Nghệ An'),
(43, 'Ninh Bình'),
(44, 'Ninh Thuận'),
(45, 'Phú Thọ'),
(46, 'Phú Yên'),
(47, 'Quảng Bình'),
(48, 'Quảng Nam'),
(49, 'Quảng Ngãi'),
(50, 'Quảng Ninh'),
(51, 'Quảng Trị'),
(52, 'Sóc Trăng'),
(53, 'Sơn La'),
(54, 'Tây Ninh'),
(55, 'Thái Bình'),
(56, 'Thái Nguyên'),
(57, 'Thanh Hóa'),
(58, 'Thừa Thiên - Huế'),
(59, 'Tiền Giang'),
(60, 'Trà Vinh'),
(61, 'Tuyên Quang'),
(62, 'Vĩnh Long'),
(63, 'Vĩnh Phúc'),
(64, 'Yên Bái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tongiao`
--

CREATE TABLE `tongiao` (
  `id` int(11) NOT NULL,
  `tentongiao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tongiao`
--

INSERT INTO `tongiao` (`id`, `tentongiao`) VALUES
(1, 'Không'),
(2, 'Thiên chúa giáo'),
(3, 'Phật giáo'),
(5, 'Tin lành'),
(6, 'Cao đài');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truong`
--

CREATE TABLE `truong` (
  `matruong` int(11) NOT NULL,
  `tentruong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truong`
--

INSERT INTO `truong` (`matruong`, `tentruong`) VALUES
(1, 'Trường Đại học Khoa học Tự nhiên'),
(2, 'Trường Đại học Khoa học Xã hội và Nhân văn'),
(3, 'Trường Đại học Công nghệ'),
(4, 'Trường Đại học Ngoại ngữ'),
(5, 'Trường Đại học Kinh Tế'),
(6, 'Trường Đại học Giáo dục'),
(7, 'Trường Đại học Việt - Nhật'),
(8, 'Khoa trực thuộc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bacluong`
--
ALTER TABLE `bacluong`
  ADD PRIMARY KEY (`mabacluong`);

--
-- Chỉ mục cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matruong_pk` (`matruong`),
  ADD KEY `UK_38ga44by1w5vgpyqmci4t96mj` (`makhoa`) USING BTREE;

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`macb`),
  ADD KEY `bacluong_pk` (`mabacLuong`),
  ADD KEY `bomon_pk` (`mabomon`),
  ADD KEY `malinhvuc_pk` (`malinhvuc`);

--
-- Chỉ mục cho bảng `chuyenmon`
--
ALTER TABLE `chuyenmon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_macb` (`macb`),
  ADD KEY `pk_malinhvuc` (`malinhvuc`);

--
-- Chỉ mục cho bảng `dantoc`
--
ALTER TABLE `dantoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`mahopdong`),
  ADD KEY `cb_pk` (`macb`),
  ADD KEY `truong_pk` (`matruong`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`),
  ADD KEY `matruong` (`matruong`);

--
-- Chỉ mục cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`malinhvuc`);

--
-- Chỉ mục cho bảng `loaihopdong`
--
ALTER TABLE `loaihopdong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quequan`
--
ALTER TABLE `quequan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tongiao`
--
ALTER TABLE `tongiao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `truong`
--
ALTER TABLE `truong`
  ADD PRIMARY KEY (`matruong`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `bacluong`
--
ALTER TABLE `bacluong`
  MODIFY `mabacluong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `bomon`
--
ALTER TABLE `bomon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `chuyenmon`
--
ALTER TABLE `chuyenmon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dantoc`
--
ALTER TABLE `dantoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `makhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `malinhvuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaihopdong`
--
ALTER TABLE `loaihopdong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `quequan`
--
ALTER TABLE `quequan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `tongiao`
--
ALTER TABLE `tongiao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bomon`
--
ALTER TABLE `bomon`
  ADD CONSTRAINT `makhoa_pk` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`),
  ADD CONSTRAINT `matruong_pk` FOREIGN KEY (`matruong`) REFERENCES `truong` (`matruong`);

--
-- Các ràng buộc cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD CONSTRAINT `bacluong_pk` FOREIGN KEY (`mabacLuong`) REFERENCES `bacluong` (`mabacluong`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bomon_pk` FOREIGN KEY (`mabomon`) REFERENCES `bomon` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `malinhvuc_pk` FOREIGN KEY (`malinhvuc`) REFERENCES `linhvuc` (`malinhvuc`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chuyenmon`
--
ALTER TABLE `chuyenmon`
  ADD CONSTRAINT `pk_macb` FOREIGN KEY (`macb`) REFERENCES `canbo` (`macb`),
  ADD CONSTRAINT `pk_malinhvuc` FOREIGN KEY (`malinhvuc`) REFERENCES `linhvuc` (`malinhvuc`);

--
-- Các ràng buộc cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `cb_pk` FOREIGN KEY (`macb`) REFERENCES `canbo` (`macb`);

--
-- Các ràng buộc cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD CONSTRAINT `matruong` FOREIGN KEY (`matruong`) REFERENCES `truong` (`matruong`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
