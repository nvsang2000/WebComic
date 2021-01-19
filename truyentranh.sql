-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2020 lúc 10:34 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `truyentranh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

CREATE TABLE `truyen` (
  `id` int(20) UNSIGNED NOT NULL,
  `tentruyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chitiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idchitiet` int(20) NOT NULL,
  `idtheloai` int(20) NOT NULL,
  `iddanhmuc` int(20) NOT NULL,
  `view` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`id`, `tentruyen`, `hinh`, `chitiet`, `trangthai`, `idchitiet`, `idtheloai`, `iddanhmuc`, `view`, `sl`, `created_at`, `updated_at`) VALUES
(16, 'Game Thủ Có Bàn Tay Vàng Mạnh Nhất', 'game-thu-co-ban-tay-vang-manh-nhat_1576395365.jpg', 'Thiếu niên hách khải xuyên không thành nhân vật có bàn tay vàng trong game “Hiệp Hành Thiên Hạ”. Người tuy đã trong game nhưng “bàn tay vàng” vẫn chưa dùng được.Vì vậy, ở thế giới võ tu thần kỳ này, hắn chỉ có thể tiến về phía trước, đánh quái thăng cấp, cùng võ đoàn mạnh nhất, là ao ước của huynh đệ và bản thân bước trên con đường du ngoạn thiên hạ…', '1', 0, 6, 7, 0, 0, '2019-12-15 14:58:01', '2019-12-15 14:58:01'),
(17, 'Âm Gian Thải', 'am-gian-thai_1576233102.jpg', 'Hệ thống ngân hàng địa phủ', '3', 0, 6, 4, 0, 0, '2019-12-15 14:59:03', '2019-12-16 03:42:08'),
(21, 'Thần Nhãn Giám Định Sư', 'than-nhan-giam-dinh-su_1573786799.jpg', 'Một ngọn lửa thiêu rụi ánh mắt của anh, anh ấy tuyệt vọng, Dục Hỏa Trọng Sinh lại để cho ánh mắt của anh có thể xem xét công năng, giám bảo giám thiên mà có thể Xem xét vạn vật, Thần Nhãn nhìn thấu, tung hoành trận đồ cổ', '1', 0, 10, 3, 0, 0, '2019-12-15 15:02:15', '2019-12-15 15:02:15'),
(22, 'Arifureta Shokugyou De Sekai Saikyou Zero', 'arifureta-shokugyou-de-sekai-saikyou-zero_1573351315.jpg', 'Đây là câu truyện diễn ra trước khi những đứa trẻ ở trái đất đến thế giới Tortus. Oscar Orcus người không muốn dính vào những cuộc chiến vô nghĩa. anh ấy sống một cuộc sống đơn giản như là một thuật sư chế tạo. và khi một pháp sư đầy quyền năng Miledi Reisen vô tình đan xen vào cuộc sống của anh. cuộc chạm mặt đó là mở đầu cho cuộc chiến đầy máu và nước mắt', '3', 0, 6, 2, 0, 0, '2019-12-15 15:03:19', '2019-12-16 03:42:40'),
(28, 'Liên Thành Quyết', 'lien-thanh-quyet_1571034265.jpg', 'Nội dung truyện kể về cuộc phiêu lưu của chàng Địch Vân giữa sóng gió giang hồ, nơi đang tranh giành một bí kíp võ công cùng với một kho báu vật trị giá liên thành. Địch Vân trung hậu ngay thật nhưng vô cớ bị hàm oan tù đày chỉ vì có một người sư muội quá xinh đẹp là Thích Phương.', '3', 0, 15, 7, 0, 0, '2019-12-16 08:07:06', '2019-12-16 08:07:06'),
(29, 'Tuyệt Thế Binh Vương', 'tuyet-the-binh-vuong_1561039365.jpg', 'Tiếp tục làm binh vương đi. Không muốn. Cho ngươi thăng chức tăng lương. Không muốn. Vậy ngươi muốn cái gì? Ta muốn một cái tuyệt thế mỹ nữ. Lục nam phong vạn vạn không nghĩ tới, hắn mộng đẹp thành sự thật, chỉ bất quá cái này mỹ nữ......', '3', 0, 16, 2, 0, 0, '2019-12-16 08:07:30', '2019-12-16 08:07:30'),
(30, 'Vạn Cổ Thần Vương', 'van-co-than-vuong_1564498925.jpg', 'Kiếp trước bởi vì Đế Tôn hãm hại mà bỏ mình, trùng sinh đến thời trung học, đúng lúc gặp linh khí khôi phục, thiên địa biến đổi lớn. Tái sinh thời niên thiếu, lại đi trên con đường tu hành, một thế này, hắn bảo vệ bằng hữu của mình, thân nhân, hắn đương không lưu tiếc nuối, hắn đương một đường quét ...', '0', 0, 10, 2, 0, 0, '2019-12-16 08:08:18', '2019-12-16 08:08:18'),
(34, 'Yêu Giả Vi Vương', 'yeu-gia-vi-vuong_1540355440.jpg', 'Truyện Yêu Giả Vi Vương Đây là một nam tử yêu khí lẫm nhiên, vì nữ nhân yêu quý, vì đạo nghĩa trong lòng, không tiếc đối địch toàn thiên hạ, bước lên câu truyện đồ thần! Nhiệt huyết và truyền kỳ, kích tình và cảm động...', '1', 0, 9, 1, 0, 0, '2019-12-16 08:14:03', '2019-12-16 08:14:03'),
(41, 'người đến từ tương lai', '1.jpg', '<p>Khufu c&ugrave;ng vong linh hệ cấm ch&uacute; ph&aacute;p sư Hopper cấu kết.<br />\r\n<br />\r\nM&agrave; liệp kh&ocirc;i Hopper, ch&iacute;nh l&agrave; kẻ cầm đầu đem đ&ocirc;ng đảo Cấm Ch&uacute; hội th&agrave;nh vi&ecirc;n v&acirc;y ở b&ecirc;n trong Kim Tự Th&aacute;p.<br />\r\n<br />\r\nNguy&ecirc;n bản Pharaoh nguồn suối cần đầy đủ ph&acirc;n lượng mới c&oacute; thể phục sinh Medusa chi mẫu, lại bởi v&igrave; vong linh hệ cấm ch&uacute; của hắn, trước thời gian xuất hiện ở ngo&agrave;i Cairo th&agrave;nh.</p>', '1', 0, 5, 3, 0, 0, '2020-08-28 05:24:18', '2020-08-28 05:24:18'),
(42, 'người đến từ tương lai 1', '1.jpg', '<p>Khufu c&ugrave;ng vong linh hệ cấm ch&uacute; ph&aacute;p sư Hopper cấu kết.<br />\r\n<br />\r\nM&agrave; liệp kh&ocirc;i Hopper, ch&iacute;nh l&agrave; kẻ cầm đầu đem đ&ocirc;ng đảo Cấm Ch&uacute; hội th&agrave;nh vi&ecirc;n v&acirc;y ở b&ecirc;n trong Kim Tự Th&aacute;p.<br />\r\n<br />\r\nNguy&ecirc;n bản Pharaoh nguồn suối cần đầy đủ ph&acirc;n lượng mới c&oacute; thể phục sinh Medusa chi mẫu, lại bởi v&igrave; vong linh hệ cấm ch&uacute; của hắn, trước thời gian xuất hiện ở ngo&agrave;i Cairo th&agrave;nh.</p>', '1', 0, 3, 3, 0, 0, '2020-08-28 05:25:45', '2020-08-28 05:25:45'),
(45, 'Kiếm hiệp 1223', '2.png', '<p>wdasdadasda</p>', '1', 0, 7, 1, 0, 0, '2020-08-28 07:58:12', '2020-08-28 07:58:12'),
(46, 'Kiếm hiệp 12343', '1.png', '<p>dadasdasda</p>', '1', 0, 9, 1, 0, 0, '2020-08-28 07:59:53', '2020-08-28 07:59:53'),
(47, 'đại quản gia là ma hoàng', '000 đại quản gia là ma hoàng.jpg', '<p>adasdasdadada</p>', '1', 0, 8, 2, 0, 0, '2020-08-29 01:16:27', '2020-08-29 01:16:27'),
(48, 'Cứu thế giới đi, ông chú 134', '000 hệ thống chí tôn cuồng đế.jpg', '<p>kjhkjhkjhkj</p>', '1', 0, 6, 2, 0, 0, '2020-08-29 08:21:31', '2020-08-29 08:21:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
