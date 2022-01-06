-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 10:22 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `monhoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `môn học`
--

CREATE TABLE `môn học` (
  `mamh` int(5) NOT NULL,
  `ten_mh` varchar(20) NOT NULL,
  `sotinchi` int(3) NOT NULL,
  `sotiet_It` int(3) NOT NULL,
  `sotiet_bt` int(3) NOT NULL,
  `sotiet_thtn` int(3) NOT NULL,
  `sogio_tuhoc` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `môn học`
--

INSERT INTO `môn học` (`mamh`, `ten_mh`, `sotinchi`, `sotiet_It`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) VALUES
(1, 'cong nghe web', 3, 45, 10, 10, 5),
(2, 'kinh te chinh tri', 4, 60, 5, 6, 3),
(1, 'cong nghe web', 3, 45, 10, 10, 5),
(2, 'kinh te chinh tri', 4, 60, 5, 6, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
