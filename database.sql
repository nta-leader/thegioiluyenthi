-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 04, 2018 lúc 04:16 PM
-- Phiên bản máy phục vụ: 5.7.24-0ubuntu0.16.04.1
-- Phiên bản PHP: 7.2.11-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `noidung`) VALUES
(1, '<h3><tt><small>Giới Thiệu Về Shop</small></tt></h3>\r\n\r\n<h3><tt><small><strong>I.LỜI GIỚI THIỆU</strong></small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Ch&uacute;ng t&ocirc;i l&agrave; nh&agrave; cung cấp giống,sản phẩm trầm hương cao cấp cho thị trường Việt Nam v&agrave; thế giới trong suốt hơn 20 năm qua. Kh&aacute;ch h&agrave;ng của ch&uacute;ng t&ocirc;i trải d&agrave;i từ Nam ra Bắc, từ Nhật Bản, Trung Quốc, Đ&agrave;i Loan cho đến nước Mỹ xa x&ocirc;i.</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Sứ mệnh l&agrave; khơi nguồn năng lượng sống hạnh ph&uacute;c cho mọi người. Với ước mơ đ&oacute;, ch&uacute;ng t&ocirc;i lu&ocirc;n cố gắng ở mức cao nhất để phục vụ c&aacute;c bạn bằng sản phẩm tốt nhất về trầm hương &ndash; một sản phẩm phục vụ sức khỏe cả về thể chất lẫn tinh thần. Về sức khỏe, trầm hương c&oacute; những đặc điểm dược l&yacute; rất tốt cho cơ thể con người. Về tinh thần, trầm hương l&agrave; sản vật gi&uacute;p con người c&oacute; cảm nhận gần với Phật giới, với vũ trụ bao la nhất.</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Mục ti&ecirc;u của&nbsp;l&agrave; đồng h&agrave;nh c&ugrave;ng bạn trong cuộc sống sinh hoạt hằng ng&agrave;y cũng như những sinh hoạt t&acirc;m linh m&agrave; bạn đang hướng tới.Bầu kh&ocirc;ng kh&iacute; thoang thoảng hương trầm vừa gi&uacute;p l&agrave;m trong sạch m&ocirc;i trường xung quanh bạn, vừa gi&uacute;p bạn sảng kho&aacute;i tinh thần trong cả ng&agrave;y l&agrave;m việc v&agrave; trợ lực cho bạn trong những l&uacute;c bạn cần thư gi&atilde;n trong tĩnh lặng.</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Với kinh nghị&ecirc;m hơn&nbsp;20 năm trong nghề, ch&uacute;ng t&ocirc;i&nbsp;lu&ocirc;n lu&ocirc;m&nbsp;chọn lọc v&agrave; mang đến cho bạn c&aacute;c nh&oacute;m sản phẩm trầm hương cao cấp. Đến với <strong>SHOP</strong>&nbsp;bạn chắc chắn sẽ cảm nhận độ tinh khiết thật sự của trầm hương !</small></tt></h3>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><tt><small><strong>II.QUYỀN LỢI:</strong></small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Sản phẩm cam kết 100%&nbsp;chất lượng, đ&uacute;ng gi&aacute;, đ&uacute;ng mi&ecirc;u tả.</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Ho&agrave;n tiền 200% nếu ph&aacute;t hiện h&agrave;ng k&eacute;m chất lượng.</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Bảo h&agrave;nh 12 th&aacute;ng đối với mọi sản phẩm.</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Miễn ph&iacute; ship to&agrave;n quốc tất cả c&aacute;c sản phẩm. Kiểm tra h&agrave;ng mới thanh to&aacute;n.</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp; Bộ phận tư vấn&nbsp;nhiệt t&igrave;nh, chuy&ecirc;n nghiệp.</small></tt></h3>'),
(2, '<h3><tt><small>Ch&iacute;nh S&aacute;ch Bảo H&agrave;nh</small></tt></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h3><tt><small><strong>I. BẢO H&Agrave;NH</strong></small></tt></h3>\r\n	</li>\r\n	<li>\r\n	<h3><tt><small>-Ch&uacute;ng t&ocirc;i&nbsp;l&agrave; thương hiệu&nbsp;cung cấp sản phẩm&nbsp;đ&atilde; khẳng định được t&ecirc;n tuổi&nbsp;tr&ecirc;n&nbsp;khắp cả nước. Ch&uacute;ng t&ocirc;i ch&uacute; trọng giải quyết vấn đề nhanh gọn nhất v&agrave; tốt nhất cho kh&aacute;ch h&agrave;ng.Tất cả c&aacute;c sản phẩm đ&atilde; được chọn lọc v&agrave; kiểm định chất lượng. Trước khi gửi h&agrave;ng cho bạn, ch&uacute;ng t&ocirc;i lại kiểm tra lại lần nữa để hạn chế tối đa khả năng lỗi của sản phẩm chuyển đến tay bạn. Sản phẩm phải bảo h&agrave;nh sẽ được hướng dẫn chuyển về Shop v&agrave; được ch&uacute;ng t&ocirc;i&nbsp;giải quyết nhanh nhất c&oacute; thể.</small></tt></h3>\r\n	</li>\r\n	<li>\r\n	<h3><tt><small>-Thời gian bảo h&agrave;nh cho mọi sản phẩm l&agrave;&nbsp;<strong><em>12 th&aacute;ng</em></strong>.</small></tt></h3>\r\n	</li>\r\n</ul>'),
(3, '<h3><tt><small>1. MUA H&Agrave;NG TRỰC TIẾP</small></tt></h3>\r\n\r\n<h3><tt><small>Kh&aacute;ch h&agrave;ng đến trực tiếp của h&agrave;ng của ch&uacute;ng t&ocirc;i theo địa chỉ:&nbsp;<em>34 &Acirc;u Cơ, Li&ecirc;n Chiểu, Đ&agrave; Nẵng&nbsp;</em>để lựa chọn, kiểm tra v&agrave; mua h&agrave;ng.</small></tt></h3>\r\n\r\n<h3><tt><small>Thời Gian l&agrave;m việc từ&nbsp;<em>7h&nbsp;</em>đến&nbsp;<em>22h&nbsp;</em>hằng ng&agrave;y.</small></tt></h3>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><tt><small>2. MUA H&Agrave;NG ONLINE</small></tt></h3>\r\n\r\n<h3><tt><small>&ndash; Qu&yacute; kh&aacute;ch đặt h&agrave;ng th&ocirc;ng qua hotline, website, facebook,&hellip; Ch&uacute;ng t&ocirc;i sẽ li&ecirc;n hệ qu&yacute; kh&aacute;ch để x&aacute;c nhận đơn h&agrave;ng</small></tt></h3>\r\n\r\n<h3><tt><small>&ndash; Sau khi qu&yacute; kh&aacute;ch x&aacute;c nhận đặt h&agrave;ng, Shop sẽ chuẩn bị sản phẩm, đ&oacute;ng g&oacute;i cẩn thận gửi đến địa chỉ kh&aacute;ch h&agrave;ng</small></tt></h3>\r\n\r\n<h3><tt><small>&ndash; Qu&yacute; kh&aacute;ch lưu &yacute; để &yacute; số điện thoại li&ecirc;n hệ để nh&acirc;n vi&ecirc;n giao h&agrave;ng c&oacute; thể li&ecirc;n lạc để giao h&agrave;ng</small></tt></h3>\r\n\r\n<h3><tt><small>&ndash;&nbsp;Ph&iacute; vận chuyển:&nbsp;Miễn ph&iacute; to&agrave;n quốc</small></tt></h3>\r\n\r\n<h3><tt><small>&nbsp;&nbsp;<em>&nbsp;Nếu qu&yacute; kh&aacute;ch chuyển khoản trước sẽ được ưu đ&atilde;i nhận phần qu&agrave; từ shop hoặc giảm gi&aacute; sản phẩm (T&ugrave;y gi&aacute; trị sản phẩm sẽ c&oacute; ưu đ&atilde;i kh&aacute;c nhau).</em></small></tt></h3>\r\n\r\n<h3><tt><small>&ndash;&nbsp;H&igrave;nh thức vận chuyển:&nbsp; Ch&uacute;ng t&ocirc;i hợp t&aacute;c với&nbsp;đơn vị chuyển ph&aacute;t nhanh Viettelpost chuyển h&agrave;ng tận nh&agrave; qu&yacute; kh&aacute;ch,&nbsp;đảm bảo an to&agrave;n. Sau khi gửi h&agrave;ng, ch&uacute;ng t&ocirc;i sẽ gửi m&atilde; vận đơn cho qu&yacute; kh&aacute;ch theo d&otilde;i t&igrave;nh h&igrave;nh vận chuyển h&agrave;ng của qu&yacute; kh&aacute;ch. Qu&yacute; kh&aacute;ch check đường đi sản phẩm&nbsp;</small></tt></h3>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` text COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioithieu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `httt` int(1) NOT NULL,
  `nhanvien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `username`, `name`, `email`, `phone`, `address`, `comment`, `gioithieu`, `date`, `httt`, `nhanvien`, `active`) VALUES
(1, '\0anhnt', 'TRR-K20', 'theanh.a1k12@gmail.com', '0919419496', 'Da Nang', NULL, 'admin', '2018-11-04 15:30:21', 0, NULL, 0),
(2, 'anhnt', 'Nguyen The Anh', 'theanh.a1k12@gmail.com', '0919419496', 'Đà Nẵng', NULL, 'admin', '2018-11-04 16:15:11', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `namesp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `giam` int(2) NOT NULL,
  `chiase` int(2) DEFAULT NULL,
  `soluong` int(2) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `id_cart`, `id_sp`, `namesp`, `picture`, `gia`, `giam`, `chiase`, `soluong`, `active`) VALUES
(1, 1, 65, 'bí quyết chinh phục môn ngữ văn bằng sơ đồ tư duy', 'CbI4YzL2wmM86z3kO9KEfRgkO5NfZZKiCxFcBnyA.jpeg', 150000, 10, 12, 1, 1),
(2, 2, 65, 'bí quyết chinh phục môn ngữ văn bằng sơ đồ tư duy', 'CbI4YzL2wmM86z3kO9KEfRgkO5NfZZKiCxFcBnyA.jpeg', 150000, 10, 12, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat`
--

CREATE TABLE `cat` (
  `id_cat` int(11) NOT NULL,
  `namecat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cat`
--

INSERT INTO `cat` (`id_cat`, `namecat`, `parent_id`) VALUES
(20, 'SÁCH LOVEBOOK', 0),
(25, 'SÁCH MEGABOOK', 0),
(31, 'SÁCH SPBOOK', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_cm` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `id_new` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_cm`, `username`, `id_sp`, `id_new`, `content`, `parent_id`) VALUES
(8, 'admin', NULL, 7, 'Con hang khong ad', 0),
(9, 'admin', NULL, 7, ' van con nha', 0),
(11, 'admin', NULL, 7, 'nhieu la dang khak', 8),
(12, 'anh', NULL, 7, 'hay nha', 0),
(13, 'anh', NULL, 7, 'kakak', 12),
(15, 'anh', NULL, 7, 'hay qua anh oi', 0),
(16, 'anh', NULL, 7, 'dung roi anh', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_ct` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_new` int(11) NOT NULL,
  `namenew` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `preview_text` text COLLATE utf8_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `count_number` int(11) DEFAULT NULL,
  `active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_new`, `namenew`, `preview_text`, `detail_text`, `picture`, `count_number`, `active`) VALUES
(1, 'Trung Quốc điều thêm 17 tàu đến khu vực giàn khoan', '<p>Để bảo vệ gi&agrave;n khoan, Trung Quốc đ&atilde; điều th&ecirc;m 17 t&agrave;u c&aacute;c loại so với h&ocirc;m trước, sẵn s&agrave;ng đ&acirc;m va v&agrave;o t&agrave;u Việt Nam.</p>', '<p>Để bảo vệ gi&agrave;n khoan, Trung Quốc đ&atilde; điều th&ecirc;m 17 t&agrave;u c&aacute;c loại so với h&ocirc;m trước, sẵn s&agrave;ng đ&acirc;m va v&agrave;o t&agrave;u Việt Nam. Để bảo vệ gi&agrave;n khoan, Trung Quốc đ&atilde; điều th&ecirc;m 17 t&agrave;u c&aacute;c loại so với h&ocirc;m trước, sẵn s&agrave;ng đ&acirc;m va v&agrave;o t&agrave;u Việt Nam.</p>', '0Tn7mD9ibRVXXFkutHp7gdnJf10g6Dia39Y4jSCI.jpeg', 4, 1),
(2, 'Trọng tài - vết đen của kỳ World Cup sôi động', '<p>World Cup 2014 chưa đi hết lượt đầu v&ograve;ng bảng nhưng c&aacute;c trọng t&agrave;i đẳng cấp FIFA đ&atilde; c&oacute; tới bốn trận bị chỉ tr&iacute;ch dữ dội.</p>', '<p>World Cup 2014 chưa đi hết lượt đầu v&ograve;ng bảng nhưng c&aacute;c trọng t&agrave;i đẳng cấp FIFA đ&atilde; c&oacute; tới bốn trận bị chỉ tr&iacute;ch dữ dội. World Cup 2014 chưa đi hết lượt đầu v&ograve;ng bảng nhưng c&aacute;c trọng t&agrave;i đẳng cấp FIFA đ&atilde; c&oacute; tới bốn trận bị chỉ tr&iacute;ch dữ dội.</p>', 'H6bJpAZBQUnhAieq1MIJCgcEuDb349VrHMlG15PG.jpeg', 1, 1),
(3, 'Những mỹ nhân Việt duyên dáng ở tuổi tứ tuần', '<p>Để bảo vệ gi&agrave;n khoan, Trung Quốc đ&atilde; điều th&ecirc;m 17 t&agrave;u c&aacute;c loại so với h&ocirc;m trước, sẵn s&agrave;ng đ&acirc;m va v&agrave;o t&agrave;u Việt Nam.</p>', '<p>Để bảo vệ gi&agrave;n khoan, Trung Quốc đ&atilde; điều th&ecirc;m 17 t&agrave;u c&aacute;c loại so với h&ocirc;m trước, sẵn s&agrave;ng đ&acirc;m va v&agrave;o t&agrave;u Việt Nam. Để bảo vệ gi&agrave;n khoan, Trung Quốc đ&atilde; điều th&ecirc;m 17 t&agrave;u c&aacute;c loại so với h&ocirc;m trước, sẵn s&agrave;ng đ&acirc;m va v&agrave;o t&agrave;u Việt Nam.</p>', 'C6UwRCR6hZ1bTxLhCVwV5FwLzVnBN0qfAPeIUlFd.jpeg', 0, 1),
(4, 'Chuyển nhượng 17/6: Arsenal mua Balotelli, tráo hàng Man Utd', '<p>Đội b&oacute;ng th&agrave;nh London đang đẩy mạnh việc tuyển lựa những vị tr&iacute; c&ograve;n yếu trong đội h&igrave;nh ở cả ba tuyến.</p>', '<p>Đội b&oacute;ng th&agrave;nh London đang đẩy mạnh việc tuyển lựa những vị tr&iacute; c&ograve;n yếu trong đội h&igrave;nh ở cả ba tuyến. Đội b&oacute;ng th&agrave;nh London đang đẩy mạnh việc tuyển lựa những vị tr&iacute; c&ograve;n yếu trong đội h&igrave;nh ở cả ba tuyến.</p>', 'zszGVrrMgl6o3VcJKaWTDA6jEQGPTLpd62rHpFqt.jpeg', 8, 1),
(5, 'Chuyên gia Anh tin chắc vị trí MH370 rơi', '<p>Các chuyên gia thuộc công ty viễn thông Anh Inmarsat cho rằng họ xác định được vị trí chiếc máy bay MH370 đã rơi xuống trên Ấn Độ Dương, tuy nhiên đội.</p>', '<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p dir="ltr"><strong>Ảnh s&aacute;ch :</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>Giới thiệu : </strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p dir="ltr"><strong><img src="https://lh6.googleusercontent.com/Z1I8BZQ-Yv6GjSpUO1j1cjmEEXJBg3iNUNJxQF_EfDzrGBW9dkmQ9ZhRtg7J6w19URJCKN4Ypdw7TVhe4AWbfF5U80HYgEnQqGoDwQAKVJP2u5c0TAW-RjGNm3WD0y_AZQ" style="height:725px; width:505px" /></strong></p>\r\n\r\n			<p dir="ltr"><strong><a href="https://newshop.vn/cong-pha-toan.html">Đọc thử</a></strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>C&ocirc;ng Ph&aacute; To&aacute;n</strong></p>\r\n\r\n			<p dir="ltr"><strong>Ngọc Huyền LB</strong></p>\r\n\r\n			<p dir="ltr">&nbsp;</p>\r\n\r\n			<p dir="ltr"><strong>&nbsp;</strong></p>\r\n\r\n			<p dir="ltr"><strong>Đ&acirc;y l&agrave; cuốn s&aacute;ch luyện thi mới nhất củanh&agrave; s&aacute;ch Lovebookgi&uacute;p c&aacute;c em học sinh nắm chắc tư duy giải nhanh c&aacute;c dạng to&aacute;n 12 v&agrave; th&acirc;u t&oacute;m to&agrave;n bộ b&agrave;i tập chọn lọc b&agrave;i tập từ 200 đề thi thử mới nhất. Cuốn s&aacute;ch l&agrave; đứa con tinh thần của bạn Ngọc Huyền - một sinh vi&ecirc;n ưu t&uacute; của ng&ocirc;i trường l&agrave; c&aacute;i n&ocirc;i của biết bao thế hệ giảng vi&ecirc;n xuất sắc, trường Đại Học Sư phạm H&agrave; Nội. T&aacute;c giả l&agrave; sinh vi&ecirc;n c&oacute; những th&agrave;nh t&iacute;ch cao trong học tập v&agrave; cũng ch&iacute;nh nhiệt huyết của tuổi trẻ đ&atilde; mang đến cho bạn đọc những kinh nghiệm của bản th&acirc;n, chia sẻ tri thức, phần n&agrave;o gi&uacute;p c&aacute;c em học sinh hiện nay tự tin hơn khi luyện thi m&ocirc;n To&aacute;n. Với t&acirc;m th&aacute;i đ&oacute;, t&aacute;c giả dễ d&agrave;ng nắm bắt t&acirc;m l&iacute; học tập v&agrave; lối tư duy của c&aacute;c em để bi&ecirc;n soạn n&ecirc;n cuốn s&aacute;ch n&agrave;y với những phương ph&aacute;p v&agrave; kĩ năng l&agrave;m b&agrave;i dễ hiểu v&agrave; dễ &aacute;p dụng, tối ưu h&oacute;a được thời gian khi l&agrave;m b&agrave;i.</strong></p>\r\n\r\n			<p dir="ltr"><strong>&nbsp;</strong></p>\r\n\r\n			<p dir="ltr"><strong>C&ocirc;ng ph&aacute; To&aacute;n gi&uacute;p c&aacute;c em được những g&igrave;?</strong></p>\r\n\r\n			<p dir="ltr"><strong>&nbsp;</strong></p>\r\n\r\n			<p dir="ltr">&nbsp;</p>\r\n\r\n			<ul>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>Hệ thống to&agrave;n bộ phương ph&aacute;p, tư duy giải to&aacute;n cần thiết trong chương tr&iacute;nh lớp 12, những lưu &yacute; cho c&aacute;c em thường hay nhầm lẫn trong qu&aacute; tr&igrave;nh l&agrave;m b&agrave;i.</strong></p>\r\n				</li>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>Nắm vững to&agrave;n bộ những vấn đề hay nhất, cần thiết nhất g&oacute;i gọn trong 200 đề thi thử được tr&iacute;ch từ c&aacute;c trường chuy&ecirc;n tr&ecirc;n to&agrave;n quốc, với ti&ecirc;u ch&iacute; b&aacute;m s&aacute;t cấu tr&uacute;c đề thi của Bộ GD v&agrave; ĐT. Cuốn s&aacute;ch sẽ gi&uacute;p c&aacute;c em s&agrave;ng lọc những vấn đề quan trọng v&agrave; cần phải học để tiết kiệm thời gian. </strong></p>\r\n				</li>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>Nắm vững được những kĩ năng xử l&iacute; b&agrave;i tập tr&ecirc;n m&aacute;y t&iacute;nh cầm tay CASIO dự tr&ecirc;n hướng tư duy cho mỗi b&agrave;i to&aacute;n</strong></p>\r\n				</li>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>T&iacute;ch hợp hệ thống gửi t&agrave;i liệu qua mail, mail đ&aacute;p &aacute;n chi tiết 10 đề tự luyện theo tr&igrave;nh tự thời gian</strong></p>\r\n				</li>\r\n			</ul>\r\n\r\n			<p dir="ltr"><strong>Cuốn s&aacute;ch được chia th&agrave;nh 2 phần ch&iacute;nh như sau:</strong></p>\r\n\r\n			<p dir="ltr"><strong>&nbsp;</strong></p>\r\n\r\n			<p dir="ltr"><strong>1. Phần 1: </strong></p>\r\n\r\n			<p dir="ltr">&nbsp;</p>\r\n\r\n			<ul>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>Hệ thống tư duy, phương ph&aacute;p giải to&aacute;n theo chuy&ecirc;n đề</strong></p>\r\n				</li>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>Hệ thống v&iacute; dụ, b&agrave;i tập minh họa điển h&igrave;nh k&egrave;m ph&acirc;n t&iacute;ch, đ&aacute;nh gi&aacute;, mở rộng</strong></p>\r\n				</li>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>Hệ thống b&agrave;i tập r&egrave;n luyện k&egrave;m lời giải th&iacute;ch chi tiết </strong></p>\r\n				</li>\r\n			</ul>\r\n\r\n			<p dir="ltr"><strong>&nbsp;</strong></p>\r\n\r\n			<p dir="ltr"><strong>2. Phần 2:</strong></p>\r\n\r\n			<p dir="ltr"><strong>&nbsp;</strong></p>\r\n\r\n			<p dir="ltr"><strong>11 b&agrave;i kiểm tra tổng &ocirc;n luyện sau mỗi chủ đề. Đ&aacute;p &aacute;n v&agrave; lời giải chi tiết được Ngọc Huyền v&agrave; nh&agrave; ph&aacute;t h&agrave;nh gửi qua mail.</strong></p>\r\n\r\n			<p dir="ltr"><strong>&nbsp;</strong></p>\r\n\r\n			<ul>\r\n				<li dir="ltr">\r\n				<p dir="ltr"><strong>Chắc chắn đ&acirc;y sẽ l&agrave; một cuốn cẩm nang qu&yacute; b&aacute;u cho c&aacute;c em học sinh đang v&agrave; sẽ l&ecirc;n lớp 12, &nbsp;c&aacute;c sỉ tử đang chuẩn bị h&agrave;nh trang vững bước v&agrave;o c&aacute;nh cổng Đại Học, gi&uacute;p c&aacute;c em củng cố kiến thức, r&egrave;n luyện chuy&ecirc;n cần kĩ năng l&agrave;m b&agrave;i nhanh hơn, ch&iacute;nh x&aacute;c v&agrave; c&oacute; được một kết quả tốt trong qu&aacute; tr&igrave;nh học tập, &ocirc;n luyện v&agrave; &nbsp;k&igrave; thi THPT Quốc gia sắp tới.</strong></p>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'MzzTDFtofh7jSlIMCMlFdPEvdiXbMXMTa4QeLvLg.jpeg', 2, 1),
(7, 'Công Phượng ghi tuyệt phẩm trong chiến thắng của Việt Nam', 'Thầy trò HLV Park Hang-seo khởi đầu thuận lợi ở giải giao hữu U23 quốc tế bằng chiến thắng 2-1 trước Palestine, trên sân Mỹ Đình tối 3/8.', '<p dir="ltr"><strong>Em h&atilde;y click v&agrave;o t&ecirc;n s&aacute;ch để xem giới thiệu chi tiết. Khi đặt mua, em chỉ cần đọc m&atilde; l&agrave; anh sẽ biết đ&oacute; l&agrave; cuốn n&agrave;o</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong>Lớp 12</strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>T&aacute;c giả</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>M&atilde;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>Gi&aacute; b&aacute;N</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1Wk790GoRfFbh3LhbVZ7z1lRoVCVp9o0bfgOvXgMSb5o/edit?usp=sharing">Đột ph&aacute; m&ocirc;n To&aacute;n bằng CASIO FX570 PLUS</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Tkbook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T405</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>35k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong>Giải nhanh đề thi trắc nghiệm m&ocirc;n To&aacute;n bằng m&aacute;y t&iacute;nh CASIO - VINACAL</strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Đ&agrave;o Trọng Anh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T412</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>40k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong>Tuyệt kỹ CASIO 2018</strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Thế Lực</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T424</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>70k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong>CASIO luyện đề</strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Thế Lực</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T434</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>55k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong>COMBO (T424+T434)</strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Thế Lực</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>CB01</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>110k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1AWam9kujdM2LJjo9JYZx_QTsxiFMfbBZH66NuJddpN4/edit?usp=sharing">Mega luyện đề 2018 m&ocirc;n To&aacute;n</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Megabook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>MG01</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>65k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1hDHeqpZStUzK4cyd17xH_iqT0HWkLxvegSoobzrFWto/edit?usp=sharing">C&ocirc;ng ph&aacute; đề To&aacute;n 2018</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Lovebook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>LB81</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>65k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1_wsfcNywZzy763jnkrY61pHmdmMlYzY3vnlIP4Yiw64/edit?usp=sharing">Chinh phục điểm 8, 9, 10 b&agrave;i tập TN H&igrave;nh học</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Mẫn Ngọc Quang</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T421</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>45k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1aiKCaH2_d-CMhVZRPr570gBsTJjP7HSJT98m19gkmwk/edit?usp=sharing">Tư duy giải nhanh TN H&igrave;nh học kh&ocirc;ng gian</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Trần Duy Th&uacute;c</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T430</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>35k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1KTPiPfFybQDmiRn-QvkC4lfvYiGpEQTYKF10WfMCXhc/edit?usp=sharing">N&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm - 100% dạng b&agrave;i- H&igrave;nh học trong kh&ocirc;ng gian - tọa độ trong kh&ocirc;ng gian</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Megabook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>MG29</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>40k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/13eaToZ0l2qnqadQfxhOByrtwIbXgdGLTA8JwXeuRhfo/edit?usp=sharing">N&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm - 100% dạng b&agrave;i- Mũ logarit - Số phức</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Megabook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>MG28</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>40k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1Ac9LNcimo8vQfW38DlNmQsa6FTZSctySvNrqaVUDAbI/edit">N&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm - 100% dạng b&agrave;i- Nguy&ecirc;n H&agrave;m, T&iacute;ch Ph&acirc;n v&agrave; ứng dụng</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Megabook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>MG27</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>30k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1mSoGESeNF4K6JVUviCsNDX-x06Edc0B3ZEWNeS-olBs/edit?usp=sharing">N&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm - 100% dạng b&agrave;i- H&agrave;m số v&agrave; c&aacute;c b&agrave;i to&aacute;n li&ecirc;n quan</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Megabook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>MG26</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>30k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1DknwUj1cEHcAmN4w878dd1HqSip8PobYRWleDt-s7hI/edit?usp=sharing">Phương ph&aacute;p si&ecirc;u tốc giải trắc nghệm m&ocirc;n To&aacute;n - chuy&ecirc;n đề H&igrave;nh học giải t&iacute;ch trong kh&ocirc;ng gian</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>SPBOOK</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T396</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>60k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1X7u2R-Y0rl8_9fgpz0modo580Z_g_mk_dmicRUDoras/edit?usp=sharing">Tiếp cận phương ph&aacute;p v&agrave; vận dụng cao trong trắc nghiệm b&agrave;i to&aacute;n thực tế</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Megabook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T406</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>70k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1KWEcN7yUjqvQtaXzNkuClhsNL0UNOIRxckZqDtZJA6g/edit">Chinh Phục C&aacute;c Dạng B&agrave;i Tập Trắc Nghiệm H&agrave;m Số - Số Phức</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Trần Minh Tiến</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T389</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>45k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/13erFlEKPCXpQF8ZKLV-KAt0n_EKqS4wfTFNfGKzSkj8/edit?usp=sharing">Chinh Phục C&aacute;c Dạng B&agrave;i Tập Trắc Nghiệm Mũ - Logarit - T&iacute;ch Ph&acirc;n - B&agrave;i To&aacute;n L&atilde;i Suất </a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Trần Minh Tiến</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T391</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>50k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/16krbZC2um0SHz2GTVxFPmMXP3pNYSnVwYAerQ9SG88k/edit?usp=sharing">Luyện Tốc Độ Giải Nhanh Trắc Nghiệm H&agrave;m Số - Mũ V&agrave; Logarit</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Mẫn Ngọc Quang</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T388</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>75k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1qosoXws6_9c0_-NZBym3JxAh8HPRKkfHR5a6vgj6KzQ/edit?usp=sharing">L&agrave;m Chủ B&agrave;i Tập Trắc Nghiệm Mũ - Logarit - Số Phức V&agrave; B&agrave;i To&aacute;n L&atilde;i Suất K&eacute;p</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nhiều t&aacute;c giả</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T387</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>60k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/13VGrohSReoVF5Ug_Mxv_LWcecKKSmjkBzmsCAeIzlAQ/edit?usp=sharing">Luyện tốc độ giải nhanh trắc nghiệm h&igrave;nh học kh&ocirc;ng gian OXYZ</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Mẫn Ngọc Quang</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T395</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>80k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1MrgUzt8sO8Wrlag3xjTAfM_XaWgPVkiYz4fURE02oWk/edit?usp=sharing">L&agrave;m chủ c&aacute;c dạng b&agrave;i tập TN h&igrave;nh học kh&ocirc;ng gian v&agrave; tọa độ kh&ocirc;ng gian OXYZ</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nhiều t&aacute;c giả</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T384</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>50k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1vEacWniIKaKnkypTMmPSEdxFvZDj0hHhHKq6Eask3i8/edit?usp=sharing">L&agrave;m chủ b&agrave;i tập TN H&agrave;m số v&agrave; ứng dụng</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Trần Duy Th&uacute;c</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T408</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>55k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1sqhBTHwjLoxEGPnSXMxn3wtaAcwZv2c_LKNvg8RymT4/edit">Chinh phục kỳ thi THPT TN To&aacute;n - H&igrave;nh học kh&ocirc;ng gian cổ điển v&agrave; PP tọa độ trong KG</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nhiều t&aacute;c giả</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T383</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>50k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1U2O2YEl1cJ8yoLTNIBXN12Gf8jeIQscX9mHyqTqY960/edit?usp=sharing">Chinh phục kỳ thi THPT TN To&aacute;n - Ứng dụng đạo h&agrave;m để khảo s&aacute;t v&agrave; vẽ đồ thị h&agrave;m số</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nhiều t&aacute;c giả</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T407</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>50k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/18A5fuhakNR2r2cj1J7Am1RkUw2kUxFAgXb8fCJfOUP8/edit?usp=sharing">Tiếp Cận 11 CĐ Trọng T&acirc;m Giải Nhanh TN To&aacute;n</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Megabook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T376</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>70k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1zZoVZ97w-m6XqMvmpFu7HIqtJP0ozYRneQaap4RHT8g/edit?usp=sharing">L&agrave;m chủ m&ocirc;n To&aacute;n trong 30 ng&agrave;y H&igrave;nh học 12</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>L&ecirc; Hồng Đức</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T427</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>60k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1-AeJE0gW0_XEVXzGf4lDxdInI3E3RXCwpeIY3jmwdtM/edit?usp=sharing">Học tốt m&ocirc;n To&aacute;n 12 h&igrave;nh học</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nguyễn Thị Lanh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T418</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>50k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1wAKCoHmLNnn898ek5Tqjt691KJHnIajbEkoljzDzJqc/edit?usp=sharing">Học tốt m&ocirc;n To&aacute;n 12 giải t&iacute;ch</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nguyễn Thị Lanh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T417</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>60k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1Z6vnsSHCbpqHrshzM2zNO9CNc22Sb_xsAv6eJo0krXo/edit?usp=sharing">Thủ Thu&acirc;̣t Giải Nhanh Đ&ecirc;̀ Thi TN M&ocirc;n Toán 12 </a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nguyễn Ph&uacute; Kh&aacute;nh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T385</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>35k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1YXTotRRerUi7A_MBehAxu_XSfSe3oUslNjRNCauZsBM/edit?usp=sharing">C&acirc;u hỏi v&agrave; b&agrave;i tập to&aacute;n 12</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Nguyễn Ph&uacute; Kh&aacute;nh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T373</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>45k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1vWgjByDv0xbc_mMajtiydwhm3zP8QllKx_TcSoTsdsA/edit">C&ocirc;ng ph&aacute; to&aacute;n 3</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Lovebook</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>LB53</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>70k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1ImHiOGpEbxCiKrmLzyc9mbgFXDL3A9e7828ohJ_mmfc/edit?usp=sharing">L&agrave;m Chủ M&ocirc;n To&aacute;n Trong 30 Ng&agrave;y - Giải T&iacute;ch 12 Tập 2</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Đ&agrave;o Thị Ngọc H&agrave;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T433</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>65k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1IavmH9sHKh0CnNUx4T1xv9dvgkucwXmrEcO7_zLvTL0/edit">L&agrave;m Chủ M&ocirc;n To&aacute;n Trong 30 Ng&agrave;y - Giải T&iacute;ch 12 Tập 1</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>Đ&agrave;o Thị Ngọc H&agrave;</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T432</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>85k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong><a href="https://docs.google.com/document/d/1KBZtqm18myz0eGtbc0JOlPoBJIQZMIsVsjGw3kJGIUs/edit?usp=sharing">Đột Ph&aacute; 8+: K&igrave; Thi THPT Quốc Gia M&ocirc;n To&aacute;n - Tập 1: Đại Số V&agrave; Giải T&iacute;ch</a></strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>L&ecirc; Phương Anh</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>T448</strong></p>\r\n			</td>\r\n			<td>\r\n			<p dir="ltr"><strong>55k</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="6">\r\n			<p dir="ltr"><strong>Đột Ph&aacute; 8+: K&igrave; Thi THPT Quốc Gia - M&ocirc;n To&aacute;n - Tập 2: H&igrave;nh Học</strong></p>\r\n			</td>\r\n			<td colspan="2">\r\n			<p dir="ltr"><strong>L&ecirc; Phương Anh</strong></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'gglTk2vbM7S9HI10xGVyiOrmW97iaafeS7LzhgKa.jpeg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `picture`
--

CREATE TABLE `picture` (
  `id_p` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `namep` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `namesp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chiase` int(2) DEFAULT NULL,
  `preview_text` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8_unicode_ci NOT NULL,
  `id_cat` int(11) NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `giamgia` int(2) NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `count_number` int(11) DEFAULT NULL,
  `daban` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `slide` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `namesp`, `gia`, `chiase`, `preview_text`, `detail_text`, `id_cat`, `picture`, `giamgia`, `date`, `count_number`, `daban`, `active`, `slide`) VALUES
(1, 'Công phá lý thuyết sinh', '150000', 10, 'Công phá lý thuyết sinh', '<p>C&ocirc;ng ph&aacute; l&yacute; thuyết sinh</p>', 20, 'wRszWRor7iTn2fN7LMtzAnolw89jFjgbT70MBAAH.png', 5, '2018-11-04 12:23:35', 0, 0, 1, NULL),
(2, 'Công phá bài tập sinh', '150000', 0, 'Công phá bài tập sinh', '<p>C&ocirc;ng ph&aacute; b&agrave;i tập sinh</p>', 20, 'LDVypD60NsiAuXf2rMppNPM6J8cPuvLyhfpS4r6G.png', 3, '2018-11-04 12:25:17', 0, 0, 1, NULL),
(3, 'Công phá bài tập hóa', '150000', 0, 'Công phá bài tập hóa', '<p>C&ocirc;ng ph&aacute; b&agrave;i tập h&oacute;a</p>', 20, '4W82dzWKtjUTCbtstgQLA19RtS4hoTYAz8a9YYJS.png', 0, '2018-11-04 12:41:25', 0, 0, 1, NULL),
(4, 'Công phá lý thuyết hóa', '150000', 0, 'Công phá lý thuyết hóa', '<p>C&ocirc;ng ph&aacute; l&yacute; thuyết h&oacute;a</p>', 20, 'tmBIPbXTJG6kMCN6Dyf3OxJPP9IxXLxQsUaY9HG3.png', 0, '2018-11-04 12:42:25', 0, 0, 1, NULL),
(5, 'Công phá lý 1', '150000', 0, 'Công phá lý 1', '<p>C&ocirc;ng ph&aacute; l&yacute; 1</p>', 20, 'oipCo3NpfgRGqwdLlm25CT83TNUGRJK5JWuZi3Fh.png', 0, '2018-11-04 12:43:28', 0, 0, 1, NULL),
(6, 'Công phá lý 2', '150000', 5, 'Công phá lý 2', '<p>C&ocirc;ng ph&aacute; l&yacute; 2</p>', 20, '0TkjlQwz4mHI5MAa7HCNjXBSOA0oVVc5n6yWdYCb.png', 1, '2018-11-04 12:44:12', 0, 0, 1, NULL),
(7, 'Công phá tiếng anh 3', '150000', 0, 'Công phá tiếng anh 3', '<p>C&ocirc;ng ph&aacute; tiếng anh 3</p>', 20, 'x9z5NeY8Q5as2y9SyxxTrJhoT3ves5B8jJzCH3Uc.png', 10, '2018-11-04 12:45:15', 0, 0, 1, NULL),
(8, 'Công phá tiếng anh 2', '150000', 0, 'Công phá tiếng anh 2', '<p>C&ocirc;ng ph&aacute; tiếng anh 2</p>', 20, 'ZyhUoft6kahcxcMA73Mdlz5KvAekc3adSeg9Bphw.png', 0, '2018-11-04 12:46:29', 0, 0, 1, NULL),
(9, 'Công phá tiếng anh 1', '150000', 10, 'Công phá tiếng anh 1', '<p>C&ocirc;ng ph&aacute; tiếng anh 1</p>', 20, 'KeYXeGDmhd6XzdTgXhBsXkFwChycodJN3cHyw1Qt.png', 10, '2018-11-04 12:48:15', 0, 0, 1, NULL),
(10, 'Công phá toán 1', '150000', 0, 'Công phá toán 1', '<p>C&ocirc;ng ph&aacute; to&aacute;n 1</p>', 20, 'NrdPtmY0GvTPVm72As5kSk75jT5XOGXGOAELJx8Y.png', 0, '2018-11-04 12:50:19', 0, 0, 1, NULL),
(11, 'Công phá toán 2', '150000', 0, 'Công phá toán 2', '<p>C&ocirc;ng ph&aacute; to&aacute;n 2</p>', 20, 'qVOTc3J44vMFAsUJa9re6jakUNaGuJRs9hipf4dm.png', 0, '2018-11-04 12:52:54', 0, 0, 1, NULL),
(12, 'Công phá toán 3', '150000', 0, 'Công phá toán 3', '<p>C&ocirc;ng ph&aacute; to&aacute;n 3</p>', 20, 'OJFgKyKPQmG7DQ8EEOue3C1dsvhVVqaBtk1o26Nf.png', 0, '2018-11-04 12:53:17', 0, 0, 1, NULL),
(13, 'Công phá ly 3', '150000', 0, 'Công phá lý 3', '<p>C&ocirc;ng ph&aacute; l&yacute; 3</p>', 20, 'NcOkWomE8pUVn0oqfPT0mOygJPxnewuy07BJL6PP.jpeg', 0, '2018-11-04 12:54:41', 0, 0, 1, NULL),
(14, 'Công phá đề văn 2018', '150000', 0, 'Công phá đề văn 2018', '<p>C&ocirc;ng ph&aacute; đề văn 2018</p>', 20, 'geTwH71ziThBUjT3YMbxcuvYpzDhRKKpuMM0i3Rx.jpeg', 0, '2018-11-04 12:56:02', 0, 0, 1, NULL),
(15, 'Công phá đề thi tiếng anh 2018', '150000', 0, 'Công phá đề thi tiếng anh 2018', '<p>C&ocirc;ng ph&aacute; đề thi tiếng anh 2018</p>', 20, 'gjmfuGEQTJa4teBAdYr7HYCxJoEX5dk6NwhbzffS.jpeg', 0, '2018-11-04 12:56:58', 0, 0, 1, NULL),
(16, 'Công phá đề sinh 2018', '150000', 0, 'Công phá đề sinh 2018', '<p>C&ocirc;ng ph&aacute; đề sinh 2018</p>', 20, 'vPeT1bzBkevMbosFDJSzNiknXMzitbKWZda45NbI.jpeg', 0, '2018-11-04 12:58:03', 0, 0, 1, NULL),
(17, 'Công phá đề hóa 2018', '150000', 0, 'Công phá đề hóa 2018', '<p>C&ocirc;ng ph&aacute; đề h&oacute;a 2018</p>', 20, 'OoYs5pwSs7sjFcBi2PRSY0jwhoMVTcO89SX1wsuN.jpeg', 0, '2018-11-04 12:58:54', 0, 0, 1, NULL),
(18, 'Công phá đề lý 2018', '150000', 0, 'Công phá đề lý 2018', '<p>C&ocirc;ng ph&aacute; đề l&yacute; 2018</p>', 20, 'CynzLZ3yuhV306Fqc2eofXLbTLEXmS9bYQohbZpS.jpeg', 0, '2018-11-04 12:59:30', 0, 0, 1, NULL),
(19, 'Công phá đề toán 2018', '150000', 0, 'Công phá đề toán 2018', '<p>C&ocirc;ng ph&aacute; đề to&aacute;n 2018</p>', 20, 'IpPHeKgic6n3XCUcz6UEROnfxEXWspnlKGbUUbH4.jpeg', 0, '2018-11-04 12:59:58', 0, 0, 1, NULL),
(20, 'Công phá hóa học', '150000', 0, 'Công phá hóa học', '<p>C&ocirc;ng ph&aacute; h&oacute;a học</p>', 20, 'wAxF937i08Exx5IG6Vlb3wZIIErzyXVa2eqtPTMx.png', 0, '2018-11-04 13:01:15', 0, 0, 1, NULL),
(21, 'Bộ đề thi thử THPT Quốc Gia môn sinh', '150000', 0, 'Bộ đề thi thử THPT Quốc Gia môn sinh', '<p>Bộ đề thi thử THPT Quốc Gia m&ocirc;n sinh</p>', 20, 'qjCMI0Y7RO2pG9l7zK9gicjg3cKlYKsej7i6tmvK.png', 0, '2018-11-04 13:04:41', 0, 0, 1, NULL),
(22, 'Bí quyết chinh phục - kỹ năng đọc hiểu tiếng anh', '149998', 0, 'Bí quyết chinh phục - kỹ năng đọc hiểu tiếng anh', '<p>B&iacute; quyết chinh phục - kỹ năng đọc hiểu tiếng anh</p>', 25, '22IgNfKHWF4vKKXliedflkTLwrwNBklWtpAIfv3M.jpeg', 0, '2018-11-04 13:21:55', 0, 0, 1, NULL),
(23, 'mega luyện đề THPT quốc gia 2018 môn lí', '150000', 10, 'mega luyện đề THPT quốc gia 2018 môn lí', '<p>mega luyện đề THPT quốc gia 2018 m&ocirc;n l&iacute;</p>', 25, 'fqiutmBiFPMi4qLhdQR6Ju2LWjCOqgJ8H417tGMv.png', 0, '2018-11-04 13:22:56', 0, 0, 1, NULL),
(24, 'tiếp cận phương pháp và vận dụng cao trong trắc nghiệm bài toán thực tế', '150000', 0, 'tiếp cận phương pháp và vận dụng cao trong trắc nghiệm bài toán thực tế', '<p>tiếp cận phương ph&aacute;p v&agrave; vận dụng cao trong trắc nghiệm b&agrave;i to&aacute;n thực tế</p>', 25, 'm4WM8BxY0BrV6h8L9snMnsu79zRNcwj2joc52nUV.jpeg', 0, '2018-11-04 13:24:15', 0, 0, 1, NULL),
(25, 'tiếp cận 11 chuyên đề trọng tâm giải nhanh trắc nghiệm toán', '150000', 0, 'tiếp cận 11 chuyên đề trọng tâm giải nhanh trắc nghiệm toán', '<p>tiếp cận 11 chuy&ecirc;n đề trọng t&acirc;m giải nhanh trắc nghiệm to&aacute;n</p>', 25, '7xwF9MLmelqz3DAEVbPZlEzAdSEYHJjpxUj0Ie5t.jpeg', 0, '2018-11-04 13:24:51', 0, 0, 1, NULL),
(26, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài hình học không gian - tọa độ trong không gian', '150000', 0, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài hình học không gian - tọa độ trong không gian', '<p>n&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm 100% dạng b&agrave;i h&igrave;nh học kh&ocirc;ng gian - tọa độ trong kh&ocirc;ng gian</p>', 25, 'EAKpRzD2p4cas9xG50iW3W3jtWL29YAwmkjrlqMs.jpeg', 0, '2018-11-04 13:25:45', 0, 0, 1, NULL),
(27, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài mũ - logarit - số phức', '150000', 0, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài mũ - logarit - số phức', '<p>n&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm 100% dạng b&agrave;i mũ - logarit - số phức</p>', 25, 'kh8E6gKTnE1iVbEbppHzjPf5ilXKVOxuTD9xJOWa.jpeg', 0, '2018-11-04 13:26:38', 0, 0, 1, NULL),
(28, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài nguyên hàm, tích phân và ứng dụng', '150000', 0, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài nguyên hàm, tích phân và ứng dụng', '<p>n&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm 100% dạng b&agrave;i nguy&ecirc;n h&agrave;m, t&iacute;ch ph&acirc;n v&agrave; ứng dụng</p>', 25, 'wrBiAVYCdC7AOeNLc6kHaE1mRvv71eKgihgtSEUW.jpeg', 0, '2018-11-04 13:27:17', 0, 0, 1, NULL),
(29, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài hàm số và các bài toán liên quan', '150000', 0, 'nâng cao kỹ năng giải toán trắc nghiệm 100% dạng bài hàm số và các bài toán liên quan', '<p>n&acirc;ng cao kỹ năng giải to&aacute;n trắc nghiệm 100% dạng b&agrave;i h&agrave;m số v&agrave; c&aacute;c b&agrave;i to&aacute;n li&ecirc;n quan</p>', 25, 'kAEbnQ8zqrrdq4yaDVaiwrbI43cjqFFyKuiU1T2J.jpeg', 0, '2018-11-04 13:31:01', 0, 0, 1, NULL),
(30, 'mega luyện đề THPT quốc gia 2018 môn toán', '150000', 0, 'mega luyện đề THPT quốc gia 2018 môn toán', '<p>mega luyện đề THPT quốc gia 2018 m&ocirc;n to&aacute;n</p>', 25, 'wBG2LKUuPyufyCZPn4mCl661I9tOIzBCMdPQjvyx.png', 0, '2018-11-04 13:31:38', 0, 0, 1, NULL),
(31, 'tiếp cận 23 phương pháp giải nhanh hiện đại hóa học', '150000', 0, 'tiếp cận 23 phương pháp giải nhanh hiện đại hóa học', '<p>tiếp cận 23 phương ph&aacute;p giải nhanh hiện đại h&oacute;a học</p>', 25, 'swcl0Mg5M4r7RRzj15NtpnXlnSjToE47PRG0tOvW.jpeg', 0, '2018-11-04 13:32:52', 0, 0, 1, NULL),
(32, 'mega luyện đề THPT quốc gia 2018 môn sinh học', '150000', 0, 'mega luyện đề THPT quốc gia 2018 môn sinh học', '<p>mega luyện đề THPT quốc gia 2018 m&ocirc;n sinh học</p>', 25, 'J4khw4oPIbeZIcZPb0q0pggG7a3Hxb3tEeJeQT5d.png', 0, '2018-11-04 13:33:28', 0, 0, 1, NULL),
(33, 'chiến lược luyện thi ngữ văn chuyên đề nghị luận văn học tập 2', '150000', 0, 'chiến lược luyện thi ngữ văn chuyên đề nghị luận văn học tập 2', '<p>chiến lược luyện thi ngữ văn chuy&ecirc;n đề nghị luận văn học tập 2</p>', 25, 'EOzZlFDn7ymfxksZo00wxkaVHyDnLjsI30o25W6G.jpeg', 0, '2018-11-04 13:37:13', 0, 0, 1, NULL),
(34, 'chiến lược luyện thi ngữ văn chuyên đề nghị luận văn học tập 1', '150000', 0, 'chiến lược luyện thi ngữ văn chuyên đề nghị luận văn học tập 1', '<p>chiến lược luyện thi ngữ văn chuy&ecirc;n đề nghị luận văn học tập 1</p>', 25, 'SV4y4T1ElXEqBwaRyHwkPXx2MypTgrKJIRxLIEl1.jpeg', 0, '2018-11-04 13:37:38', 0, 0, 1, NULL),
(35, 'Mega luyện giải đề tổ hợp KHXH  sử + địa + GDCD', '150000', 0, 'Mega luyện giải đề tổ hợp KHXH  sử + địa + GDCD', '<p>Mega luyện giải đề tổ hợp KHXH sử + địa + GDCD</p>', 25, 'HHOplLQ71ZNd0Ewo2Djx0Is0pVWiXBMepfIyzqPP.jpeg', 0, '2018-11-04 13:41:10', 0, 0, 1, NULL),
(36, 'tự học đột phá kỹ năng viết lại câu tiếng anh', '150000', 0, 'tự học đột phá kỹ năng viết lại câu tiếng anh', '<p>tự học đột ph&aacute; kỹ năng viết lại c&acirc;u tiếng anh</p>', 25, 'frfYHGfXa1yrpbw4pgPJ2GfBwDHMXqSlEak37FWs.jpeg', 0, '2018-11-04 13:41:43', 0, 0, 1, NULL),
(37, 'bí quyết chinh phục kỹ năng viết luận tiếng anh', '150000', 0, 'bí quyết chinh phục kỹ năng viết luận tiếng anh', '<p>b&iacute; quyết chinh phục kỹ năng viết luận tiếng anh</p>', 25, 'ycZqLlxPqszWKsEFT0VL9gZ2OfgpMxZyZWIcnDK8.jpeg', 0, '2018-11-04 13:42:28', 0, 0, 1, NULL),
(38, 'bí quyết chinh phục ngữ pháp tiếng anh nâng cao', '150000', 0, 'bí quyết chinh phục ngữ pháp tiếng anh nâng cao', '<p>b&iacute; quyết chinh phục ngữ ph&aacute;p tiếng anh n&acirc;ng cao</p>', 25, 'PvAzle3UTKc7hj0kC6IPzwpAcwtW1ozKMuw2AAwb.jpeg', 0, '2018-11-04 13:43:44', 0, 0, 1, NULL),
(39, 'bí quyết chinh phục ngữ pháp tiếng anh cơ bản', '150000', 0, 'bí quyết chinh phục ngữ pháp tiếng anh cơ bản', '<p>b&iacute; quyết chinh phục ngữ ph&aacute;p tiếng anh cơ bản</p>', 25, 'GjwxrxgtKL4kT9Qv6dF4SnNvTAJHk2eYVwz4Tqom.jpeg', 0, '2018-11-04 13:44:22', 0, 0, 1, NULL),
(40, 'tự học đột phá chuyên đề ngữ pháp tiếng anh', '150000', 0, 'tự học đột phá chuyên đề ngữ pháp tiếng anh', '<p>tự học đột ph&aacute; chuy&ecirc;n đề ngữ ph&aacute;p tiếng anh</p>', 25, 'qaCiEDmYIhPjAxPHoTAgYfpsFtqzpJh7EApZbyqX.jpeg', 0, '2018-11-04 13:46:25', 0, 0, 1, NULL),
(41, 'tự học đột phá trọng âm - phát âm tiếng anh', '150000', 0, 'tự học đột phá trọng âm - phát âm tiếng anh', '<p>tự học đột ph&aacute; trọng &acirc;m - ph&aacute;t &acirc;m tiếng anh</p>', 25, 'zA6KcTP53O1s4uftgtabTZ4ozDLuT9yqN4MnICTk.jpeg', 0, '2018-11-04 13:46:52', 0, 0, 1, NULL),
(42, 'tự học đột phá chuyên đề đọc hiểu tiếng anh', '150000', 0, 'tự học đột phá chuyên đề đọc hiểu tiếng anh', '<p>tự học đột ph&aacute; chuy&ecirc;n đề đọc hiểu tiếng anh</p>', 25, 'RY3xgBrm4LH7AbjhliXaNnifDva27RO2o0zZlupS.jpeg', 0, '2018-11-04 13:47:31', 0, 0, 1, NULL),
(43, 'mega luyện đề thpt quốc gia môn tiếng anh 2018', '150000', 0, 'mega luyện đề thpt quốc gia môn tiếng anh 2018', '<p>mega luyện đề thpt quốc gia m&ocirc;n tiếng anh 2018</p>', 20, 'VEMZ0C04NjLO1btnRiOWhnFzMiDpdKPVYRTQZi6S.png', 0, '2018-11-04 13:48:21', 0, 0, 1, NULL),
(44, 'ÔN LUYỆN THI TRẮC NGHIÊM THPT MÔN ĐỊA LÝ', '150000', 0, 'ÔN LUYỆN THI TRẮC NGHIÊM THPT MÔN ĐỊA LÝ', '<p>&Ocirc;N LUYỆN THI TRẮC NGHI&Ecirc;M THPT M&Ocirc;N ĐỊA L&Yacute;</p>', 31, 'uOIhJaULSqNLPimlRj2ptOdJ2rvZ5zcXSyZ7cZ0D.jpeg', 0, '2018-11-04 13:50:52', 0, 0, 1, NULL),
(45, 'ÔN LUYỆN THI TRẮC NGHIỆM MÔN LỊCH SỬ', '150000', 0, 'ÔN LUYỆN THI TRẮC NGHIỆM MÔN LỊCH SỬ', '<p>&Ocirc;N LUYỆN THI TRẮC NGHIỆM M&Ocirc;N LỊCH SỬ</p>', 31, 'qCDiN0fc8v7CJsrDq60TzF96gKghu8W3e9T5RE9K.jpeg', 0, '2018-11-04 13:51:14', 0, 0, 1, NULL),
(46, 'Làm Chủ Môn Toán 30 ngày 11 đại số và giải tích tập 2', '150000', 0, 'Làm Chủ Môn Toán 30 ngày 11 đại số và giải tích tập 2', '<p>L&agrave;m Chủ M&ocirc;n To&aacute;n 30 ng&agrave;y 11 đại số v&agrave; giải t&iacute;ch tập 2</p>', 31, 'qI2iAg4ptyBYts0VnXJK8mnzGq7t6Br4SR54UjoG.jpeg', 0, '2018-11-04 13:51:41', 0, 0, 1, NULL),
(47, 'làm chủ môn toán trong 30 ngày - giải tích 12 tập 2', '150000', 0, 'làm chủ môn toán trong 30 ngày - giải tích 12 tập 2', '<p>l&agrave;m chủ m&ocirc;n to&aacute;n trong 30 ng&agrave;y - giải t&iacute;ch 12 tập 2</p>', 31, 'Kd4oV9VuGuysip1uO2vVcDcDgm7ZUH8u3FLzXZ59.jpeg', 0, '2018-11-04 13:53:04', 0, 0, 1, NULL),
(48, 'làm chủ môn toán trong 30 ngày - giải tích 12 tập 1', '150000', 0, 'làm chủ môn toán trong 30 ngày - giải tích 12 tập 1', '<p>l&agrave;m chủ m&ocirc;n to&aacute;n trong 30 ng&agrave;y - giải t&iacute;ch 12 tập 1</p>', 31, 'SEJQraYypgaJuF0TycsSMNiiGvYibWg6xNrBSN5t.jpeg', 0, '2018-11-04 13:53:43', 0, 0, 1, NULL),
(49, 'bí quyết 6.0 chinh phục môn vật lý tập 2', '150000', 0, 'bí quyết 6.0 chinh phục môn vật lý tập 2', '<p>b&iacute; quyết 6.0 chinh phục m&ocirc;n vật l&yacute; tập 2</p>', 31, 'yC1FmNl6B1PoPQeO2k96GGChOATzkOmsck4S8i2g.jpeg', 0, '2018-11-04 13:54:37', 0, 0, 1, NULL),
(50, 'làm chủ môn toán trong 30 ngày hình học 12', '150000', 0, 'làm chủ môn toán trong 30 ngày hình học 12', '<p>l&agrave;m chủ m&ocirc;n to&aacute;n trong 30 ng&agrave;y h&igrave;nh học 12</p>', 31, 'PpbesvF559zltSxpHMsiJiwZFVgelpZxWbq6fAZj.jpeg', 0, '2018-11-04 13:55:19', 0, 0, 1, NULL),
(51, 'làm chủ môn toán trong 30 ngày hình học 11', '150000', 0, 'làm chủ môn toán trong 30 ngày hình học 11', '<p>l&agrave;m chủ m&ocirc;n to&aacute;n trong 30 ng&agrave;y h&igrave;nh học 11</p>', 31, '7tQlqlnoiBv6dxb79IPrCF4sgLR3j2ZnS76gCJmc.jpeg', 0, '2018-11-04 13:56:35', 0, 0, 1, NULL),
(52, 'bí quyết 6.0 chinh phục môn vật lý tập 1', '150000', 0, 'bí quyết 6.0 chinh phục môn vật lý tập 1', '<p>b&iacute; quyết 6.0 chinh phục m&ocirc;n vật l&yacute; tập 1</p>', 31, 'xL0GUhd12MV0pZCm4RQLsjCyi3ilfaEBmpcQdBOH.jpeg', 0, '2018-11-04 13:57:12', 0, 0, 1, NULL),
(54, 'làm chủ môn toán trong 30 ngày đại số và giải tích - tập 1 lớp 11', '150000', 0, 'làm chủ môn toán trong 30 ngày đại số và giải tích - tập 1 lớp 11', '<p>l&agrave;m chủ m&ocirc;n to&aacute;n trong 30 ng&agrave;y đại số v&agrave; giải t&iacute;ch - tập 1 lớp 11</p>', 31, 'vSxPb10KaELXb1RjMQdeOtbaDyXQuCOjjjUdsaIj.jpeg', 0, '2018-11-04 14:00:39', 0, 0, 1, NULL),
(55, 'làm chủ môn toán trong 30 ngày hình học 10', '150000', 0, 'làm chủ môn toán trong 30 ngày hình học 10', '<p>l&agrave;m chủ m&ocirc;n to&aacute;n trong 30 ng&agrave;y h&igrave;nh học 10</p>', 31, 'Cv3UeyFomoDYnDOjteBKnwDKBMEX7fGdohFF58f4.jpeg', 0, '2018-11-04 14:01:23', 0, 0, 1, NULL),
(56, 'làm chủ môn toán trong 30 ngày đại số 10', '150000', 0, 'làm chủ môn toán trong 30 ngày đại số 10', '<p>l&agrave;m chủ m&ocirc;n to&aacute;n trong 30 ng&agrave;y đại số 10</p>', 31, '4ZOdKzZePIFiWj193TJUTnwx0kQMkPpMAyOwtoEa.jpeg', 0, '2018-11-04 14:02:05', 0, 0, 1, NULL),
(57, 'phương pháp siêu tốc giải trắc nghiệm môn toán', '150000', 0, 'phương pháp siêu tốc giải trắc nghiệm môn toán', '<p>phương ph&aacute;p si&ecirc;u tốc giải trắc nghiệm m&ocirc;n to&aacute;n</p>', 31, 'uYMakiHhzrgaHJNftizlgCJH5RfFA4NS1qijBBaT.jpeg', 0, '2018-11-04 14:02:53', 0, 0, 1, NULL),
(58, 'phương pháp siêu tốc giải nhanh trắc nghiệm khoa học tự nhiên môn vật lý tập 1', '150000', 0, 'phương pháp siêu tốc giải nhanh trắc nghiệm khoa học tự nhiên môn vật lý tập 1', '<p>phương ph&aacute;p si&ecirc;u tốc giải nhanh trắc nghiệm khoa học tự nhi&ecirc;n m&ocirc;n vật l&yacute; tập 1</p>', 31, 'xCABtcagXG87NJkZkEQxLjA52RWLKAiiAYqOI8xi.jpeg', 0, '2018-11-04 14:03:22', 0, 0, 1, NULL),
(59, 'bí quyết chinh phục lý thuyết sinh học', '150000', 0, 'bí quyết chinh phục lý thuyết sinh học', '<p>b&iacute; quyết chinh phục l&yacute; thuyết sinh học</p>', 31, 'cg3r2qOWwQAM698DqraWwUDBP0clGjdCaMwNIjm1.jpeg', 0, '2018-11-04 14:04:02', 0, 0, 1, NULL),
(60, 'phương pháp siêu tốc giải trắc nghiệm sinh học tập 2', '150000', 0, 'phương pháp siêu tốc giải trắc nghiệm sinh học tập 2', '<p>phương ph&aacute;p si&ecirc;u tốc giải trắc nghiệm sinh học tập 2</p>', 31, 'IHzRQunnmk29Xt7YiiCRGHQUbWrKcqQd6wDnbe8E.jpeg', 0, '2018-11-04 14:05:02', 0, 0, 1, NULL),
(61, 'phương pháp siêu tốc giải trắc nghiệm sinh học tập 1', '150000', 0, 'phương pháp siêu tốc giải trắc nghiệm sinh học tập 1', '<p>phương ph&aacute;p si&ecirc;u tốc giải trắc nghiệm sinh học tập 1</p>', 31, 'oR2mE1V5pkkzludXI5YNiQvw0lEprm9riaAQnz1J.jpeg', 0, '2018-11-04 14:05:28', 0, 0, 1, NULL),
(62, 'bộ đề ôn luyên thi trắc nghiệm môn sinh học', '150000', 0, 'bộ đề ôn luyên thi trắc nghiệm môn sinh học', '<p>bộ đề &ocirc;n luy&ecirc;n thi trắc nghiệm m&ocirc;n sinh học</p>', 31, 'kmwJhs5qTleT9xdBCHYRLccMZdJIhCtYoqZKupEq.jpeg', 0, '2018-11-04 14:06:12', 0, 0, 1, NULL),
(63, 'làm chủ môn sinh trong 30 ngày', '150000', 0, 'làm chủ môn sinh trong 30 ngày', '<p>l&agrave;m chủ m&ocirc;n sinh trong 30 ng&agrave;y</p>', 31, 'hnzqqFtyj1NbjiJTPWdy6KfepupraCrarSeg9Yav.jpeg', 0, '2018-11-04 14:07:15', 0, 0, 1, NULL),
(64, 'phương pháp siêu tốc giải trắc nghiệm khoa học tự nhiên môn hóa học tập 1', '150000', 0, 'phương pháp siêu tốc giải trắc nghiệm khoa học tự nhiên môn hóa học tập 1', '<p>phương ph&aacute;p si&ecirc;u tốc giải trắc nghiệm khoa học tự nhi&ecirc;n m&ocirc;n h&oacute;a học tập 1</p>', 31, '19vtiAXgGzDZwE1Vmbb5UPpo1gL0mrvySKvVYLFM.jpeg', 0, '2018-11-04 14:07:56', 0, 0, 1, NULL),
(65, 'bí quyết chinh phục môn ngữ văn bằng sơ đồ tư duy', '150000', 12, 'bí quyết chinh phục môn ngữ văn bằng sơ đồ tư duy', '<p>b&iacute; quyết chinh phục m&ocirc;n ngữ văn bằng sơ đồ tư duy</p>', 31, 'CbI4YzL2wmM86z3kO9KEfRgkO5NfZZKiCxFcBnyA.jpeg', 10, '2018-11-04 14:08:40', 0, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `money` int(11) NOT NULL,
  `chucvu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `address`, `money`, `chucvu`) VALUES
(1, 'admin', '$2y$10$l1aZT4QqQcAB11FeuULNAelnl8JNA5.A/EvQvp4oli0uc0uf61emW', 'Theanh', NULL, NULL, NULL, 0, 0),
(2, 'mod', '$2y$10$l1aZT4QqQcAB11FeuULNAelnl8JNA5.A/EvQvp4oli0uc0uf61emW', 'mod', NULL, NULL, NULL, 0, 2),
(3, 'anh', '$2y$10$l1aZT4QqQcAB11FeuULNAelnl8JNA5.A/EvQvp4oli0uc0uf61emW', 'anh', NULL, NULL, NULL, 0, 2),
(4, 'anhnt', '$2y$10$herZcHop6DRfcLnLncZ7reEB1p0mzZE2wK.SSILP4l49T2punVCsW', 'Anh', NULL, NULL, NULL, 234542, 2),
(5, 'theanh', '$2y$10$pxQOdpGjENg8RN4xUcoZ1ucdLTG22qXzwiVWRZLVI55e4OQW82IvW', 'Nguyen The Anh', 'theanh.a1k12@gmail.com', '0919419496', 'Da Nang', 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_history`
--

CREATE TABLE `user_history` (
  `id_history` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nhanvien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cm`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_ct`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Chỉ mục cho bảng `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id_p`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`id_history`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `cat`
--
ALTER TABLE `cat`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_ct` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `picture`
--
ALTER TABLE `picture`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `user_history`
--
ALTER TABLE `user_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
