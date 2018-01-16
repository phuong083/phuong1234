-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2018 lúc 06:01 AM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xomitdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `MABAIVIET` int(10) NOT NULL COMMENT 'Mã bài viết',
  `TIEUDE` varchar(70) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tiêu đề',
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung',
  `ANHDAIDIEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Ảnh đại diện',
  `NGAYVIET` datetime NOT NULL COMMENT 'Ngày viết',
  `MATHANHVIEN` int(10) NOT NULL COMMENT 'Mã thành viên',
  `MATHUMUC` int(10) NOT NULL COMMENT 'Mã thư mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`MABAIVIET`, `TIEUDE`, `NOIDUNG`, `ANHDAIDIEN`, `NGAYVIET`, `MATHANHVIEN`, `MATHUMUC`) VALUES
(1, '7 ngôn ngữ lập trình được săn đón trong năm 2018', 'Coding Dojo vừa mới công bố 7 ngôn ngữ lập trình được các nhà tuyển dụng săn đón nhất trong 2018 mà các lập trình viên nên biết.\r\n\r\n“Phát triển phần mềm là một lĩnh vực cực kì năng động. Các ngôn ngữ, framework và công nghệ mới có thể nổi lên sau đó biến mất trong một vài năm. Các nhà phát triển cần liên tục học những kỹ năng mới để duy trì sự nghiệp của mình”, Speros Misirlakis, người đứng đầu chương trình giảng dạy tại Coding Dojo, viết trong một bài báo.\r\n\r\nCông ty phân tích dữ liệu từ 25 ngôn ngữ lập trình, stacks, và frameworks để tìm ra 7 ngôn ngữ được yêu cầu nhiều nhất của nhà tuyển dụng.\r\n\r\nTheo dữ liệu, Java là ngôn ngữ yêu cầu cao nhất với 68.000 việc làm vào năm 2017, tuy nhiên, con số này dự kiến sẽ giảm trong 2018 xuống còn 62.000, theo Misirlakis.\r\n\r\nPython cũng có sự tiến bộ vượt bật khi từ vị trí thứ ba vào năm 2017 đến vị trí thứ hai trong năm nay. Theo dữ liệu, Python đã có 41.000 việc làm vào năm 2017 và dự kiến ​​sẽ tăng lên 46.000 vào năm 2018. Vì Python có ảnh hưởng khá lớn lên machine learning, do đó nhu cầu của nó sẽ tiếp tục tăng khi công nghệ machine learning phát triển.\r\n\r\nJavaScript chiếm vị trí thứ ba, với 40.000 việc làm vào năm 2017 nhưng sẽ giảm xuống còn 38.000 vào năm 2018. Trong khi đó, C ++ và C # lần lượt đứng thứ 4 và thứ 5. Có 33,000 công việc C ++ và 280000 C # vào năm 2017. Năm 2018 dự kiến ​​sẽ có 31,000 ví trí mở cho C + + và 27,000 cho C #.\r\n\r\nNgược lại, PHP và Perl lại có mức giảm đáng kể. Với chỉ 13,000 công việc PHP trong năm 2017 và dự kiến con số ​​sẽ tăng lên 14.000 vào năm 2018. Trong khi đó, có 17.000 việc làm Perl vào năm 2017, dự kiến ​​sẽ giảm xuống còn 14.000 vào năm 2018.\r\n\r\nNgoài ra, những ngôn ngữ không nằm trong danh sách, nhưng dự kiến ​​sẽ phát triển trong năm tới bao gồm Swift, R, và Rust. Hãng cũng liệt kê SQL, NET, Node và MEAN như các công nghệ mà các developer cần phải quen thuộc. Đây thường là các kỹ năng được liệt kê trên công việc đăng trên Indeed.com mặc dù chúng không phải là ngôn ngữ lập trình.\r\n\r\n', 'images/post/post01.png', '2018-01-13 00:00:00', 1, 1),
(2, '123', '123', 'index.png', '0000-00-00 00:00:00', 1, 1),
(3, '2132131213', '2132132321321313', 'images/post/._nang-cao-dan-tri1.jpg', '0000-00-00 00:00:00', 1, 1),
(4, '232213', '321321321321321', 'images/post/post01.png', '2018-01-13 12:40:44', 1, 1),
(7, '23213213', '213112312', 'images/post/.5D3_5839.jpg', '2018-01-13 02:02:37', 1, 10),
(8, '23213213', '213112312', 'images/post/.5D3_5839.jpg', '2018-01-13 02:03:01', 1, 10),
(10, '12312', '21332', 'images/123.png', '0000-00-00 00:00:00', 1, 8),
(11, 'Chúng ta có tiêu đề bài này rất là dài dài lắm nên cần rút gọn', 'demo:\r\ncho 1 vd...\r\nMình có 1 tiêu đề mẫu tin trên 20 ký tự..., vậy mình muốn khi xuất dữ liệu từ mysql ra ngoài thì cái \"tiêu đề mẫu tin\" đó ko dc hiển thị trên 10 ký tự mà chỉ dc đúng 10 thôi...\r\ndemo 2:\r\nqwe qwe qwe qwe qwe qwe qwe qwe \r\n==>\r\nqwe qwe qw ...\r\nho 1 vd...\r\nMình có 1 tiêu đề mẫu tin trên 20 ký tự..., vậy mình muốn khi xuất dữ liệu từ mysql ra ngoài thì cái \"tiêu đề mẫu tin\" đó ko dc hiển thị trên 10 ký tự mà chỉ dc đúng 10 thôi...\r\n', 'images/1234.png', '2018-01-15 12:59:05', 1, 3),
(13, 'ài viết cuối cùng', 'đây là bài viết cuối cùng của tui', 'images/chungminh.png', '2018-01-15 02:12:01', 1, 10),
(14, 'bài viết gần cuối nè quỹ hà', 'ewqewewqewqewqewqe', 'images/edit-icon.png', '2018-01-15 02:13:57', 1, 13),
(15, 'bài viết gần cuối nè quỹ hà', 'ewqewewqewqewqewqe', 'images/edit-icon.png', '2018-01-15 02:14:32', 1, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MABINHLUAN` int(10) NOT NULL COMMENT 'Mã bình luận',
  `NOIDUNG` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung',
  `NGAYVIET` datetime NOT NULL COMMENT 'Ngày viết',
  `MABAIVIET` int(10) NOT NULL COMMENT 'Mã bài viết',
  `MATHANHVIEN` int(10) NOT NULL COMMENT 'Mã thành viên',
  `THUTU` int(11) DEFAULT NULL COMMENT 'Thứ tự'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`MABINHLUAN`, `NOIDUNG`, `NGAYVIET`, `MABAIVIET`, `MATHANHVIEN`, `THUTU`) VALUES
(1, '123', '2018-01-16 05:06:24', 11, 1, 0),
(2, 'qưeewqe', '2018-01-16 05:07:32', 11, 1, 0),
(3, 'qưeqwe', '2018-01-16 05:08:23', 11, 1, 0),
(4, 'qewqeqwee', '2018-01-16 05:22:14', 11, 1, 0),
(5, 'ahihi', '2018-01-16 05:22:20', 11, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capbac`
--

CREATE TABLE `capbac` (
  `MACAPBAC` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã cấp bậc',
  `TENCAPBAC` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên cấp bậc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `capbac`
--

INSERT INTO `capbac` (`MACAPBAC`, `TENCAPBAC`) VALUES
('01', 'Admintrastor'),
('02', 'Moderator'),
('03', 'Member');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKHACHHANG` int(10) NOT NULL COMMENT 'Mã khách hàng',
  `TENKHACHHANG` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `MAQUANGCAO` int(10) NOT NULL COMMENT 'Mã quảng cáo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `MAQUANGCAO` int(10) NOT NULL COMMENT 'Mã quảng cáo',
  `CHUTHICH` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HINHANH` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `VITRI` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng quảng cáo';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MATHANHVIEN` int(10) NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `TENTHANHVIEN` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DIACHI` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `MACAPBAC` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng lưu thông tin thành viên';

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MATHANHVIEN`, `EMAIL`, `MATKHAU`, `TENTHANHVIEN`, `DIACHI`, `SDT`, `MACAPBAC`) VALUES
(1, 'xuantruong.k15@gmail.com', 'admin', 'Admin', 'Thủ Đức', '01682420381', '01'),
(3, '21321321', '23213131', '232131321', '213213', '21321323', '03'),
(7, '123', '123', '123', '', '123', '03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thumuc`
--

CREATE TABLE `thumuc` (
  `MATHUMUC` int(10) NOT NULL COMMENT 'Mã thư muc',
  `TENTHUMUC` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên thư mục',
  `GHICHU` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Ghi chú',
  `LOP` int(11) NOT NULL COMMENT 'Lớp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thumuc`
--

INSERT INTO `thumuc` (`MATHUMUC`, `TENTHUMUC`, `GHICHU`, `LOP`) VALUES
(1, 'Lập trình', 'Khu vực lập trình phần mềm', 1),
(2, 'Website', 'Khu vực lập trình Web', 11),
(3, 'Application', 'Khu vực lập trình ứng dụng', 12),
(4, 'Game', 'Khu vực lập trình game', 13),
(5, 'Công cụ', 'Hướng dẫn sử dụng các phần mềm', 2),
(6, 'Microsoft Office', 'Bộ ứng dụng văn phòng của Microsoft', 21),
(7, 'Chỉnh sửa hình ảnh', 'Các phần mềm chỉnh sửa hình ảnh', 22),
(8, 'Xây dựng video', 'Các phần mềm chỉnh sửa và xây dựng video', 23),
(9, 'Khác', 'Các khu vực khác trong công cụ', 24),
(10, 'Mạng máy tính', 'Các kiến thức về mạng', 3),
(11, 'Quản trị mạng', 'Quản trị mạng', 31),
(12, 'Bảo mật thông tin', 'Bảo mật thông tin', 32),
(13, 'Truyền dữ liệu', 'Truyền dữ liệu', 33),
(14, 'Mẹo vặt', 'Mẹo vặt về tin học', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`MABAIVIET`),
  ADD KEY `BAIVIET_THANHVIEN` (`MATHANHVIEN`),
  ADD KEY `BAIVIET_THUMUC` (`MATHUMUC`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MABINHLUAN`),
  ADD KEY `BINHLUAN_BAIVIET` (`MABAIVIET`),
  ADD KEY `BINHLUAN_THANHVIEN` (`MATHANHVIEN`);

--
-- Chỉ mục cho bảng `capbac`
--
ALTER TABLE `capbac`
  ADD PRIMARY KEY (`MACAPBAC`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKHACHHANG`),
  ADD KEY `KHACHHANG_QUANGCAO` (`MAQUANGCAO`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`MAQUANGCAO`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MATHANHVIEN`),
  ADD KEY `THANHVIEN_CAPBAC` (`MACAPBAC`);

--
-- Chỉ mục cho bảng `thumuc`
--
ALTER TABLE `thumuc`
  ADD PRIMARY KEY (`MATHUMUC`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `MABAIVIET` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã bài viết', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MABINHLUAN` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKHACHHANG` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã khách hàng';

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `MAQUANGCAO` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã quảng cáo';

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `MATHANHVIEN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321330;

--
-- AUTO_INCREMENT cho bảng `thumuc`
--
ALTER TABLE `thumuc`
  MODIFY `MATHUMUC` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Mã thư muc', AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `BAIVIET_THANHVIEN` FOREIGN KEY (`MATHANHVIEN`) REFERENCES `thanhvien` (`MATHANHVIEN`),
  ADD CONSTRAINT `BAIVIET_THUMUC` FOREIGN KEY (`MATHUMUC`) REFERENCES `thumuc` (`MATHUMUC`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `BINHLUAN_BAIVIET` FOREIGN KEY (`MABAIVIET`) REFERENCES `baiviet` (`MABAIVIET`),
  ADD CONSTRAINT `BINHLUAN_THANHVIEN` FOREIGN KEY (`MATHANHVIEN`) REFERENCES `thanhvien` (`MATHANHVIEN`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `KHACHHANG_QUANGCAO` FOREIGN KEY (`MAQUANGCAO`) REFERENCES `quangcao` (`MAQUANGCAO`);

--
-- Các ràng buộc cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `THANHVIEN_CAPBAC` FOREIGN KEY (`MACAPBAC`) REFERENCES `capbac` (`MACAPBAC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
