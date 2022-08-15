-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 15, 2022 lúc 11:53 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cotocota`
--
CREATE DATABASE IF NOT EXISTS `cotocota` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cotocota`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1660294800),
('m220812_085032_create_user_table', 1660294802),
('m220812_085158_create_temporary_user_table', 1660294822);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `temporary_user`
--

CREATE TABLE `temporary_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `temporary_user`
--

INSERT INTO `temporary_user` (`id`, `username`, `password`, `country_code`, `number`) VALUES
(1, 'admin', '$2y$13$QXSPSdCDryeNo2zRHp68HuJqvhxSUyF9etpD6Op88lGE6Qj.5VlIW', '64', '001'),
(4, 'admin', '$2y$13$TVsM5TWayZY2tXBil.zsL.WVdl91Xo0n7sqlKNeb6dVUnlkW3GKTO', '64', '001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `access_token` text DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `access_token`, `verified`) VALUES
(1, 'admin', '$2y$13$TVsM5TWayZY2tXBil.zsL.WVdl91Xo0n7sqlKNeb6dVUnlkW3GKTO', 'G6PelW7edcq--KEVytJgQNAtnfGXcMkA', 'Jm_Tj_7O9FfRfFVixIgiTkNZ3oDM5noH', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `_tree_`
--

CREATE TABLE `_tree_` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL COMMENT 'the textual name of the node',
  `subtitle` varchar(128) DEFAULT '',
  `description` text DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT 0 COMMENT 'the nodes parent - pretty clasic',
  `seqid` int(11) NOT NULL DEFAULT 0 COMMENT 'the generated order item for the whole tree',
  `depth` int(11) NOT NULL DEFAULT 0 COMMENT 'how deep the node is (usefull for indenting)',
  `leaf` int(1) NOT NULL DEFAULT 0 COMMENT ' is it a leaf node (eg. has no children) - usefull for icons',
  `fullpath` text DEFAULT '',
  `url` text DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `_tree_`
--

INSERT INTO `_tree_` (`id`, `name`, `subtitle`, `description`, `parent_id`, `seqid`, `depth`, `leaf`, `fullpath`, `url`) VALUES
(1, 'Home', '', '', 0, 19, 0, 0, 'Home', ''),
(2, 'Home1', '', '', 1, 21, 1, 1, 'Home:Home1', ''),
(3, 'Home2', '', '', 1, 20, 1, 1, 'Home:Home2', ''),
(4, 'Services', '', '', 0, 16, 0, 0, 'Services', ''),
(5, 'Our Service', '', '', 4, 18, 1, 1, 'Services:Our Service', ''),
(6, 'Service Single', '', '', 4, 17, 1, 1, 'Services:Service Single', ''),
(7, 'Pages', '', '', 0, 0, 0, 0, 'Pages', ''),
(8, 'About us', '', '', 7, 15, 1, 1, 'Pages:About us', ''),
(9, 'Feature Item', '', '', 7, 14, 1, 1, 'Pages:Feature Item', ''),
(10, 'Gallery', '', '', 7, 13, 1, 1, 'Pages:Gallery', ''),
(11, 'Search By Location', '', '', 7, 12, 1, 1, 'Pages:Search By Location', ''),
(12, 'Make Reservation', '', '', 7, 11, 1, 1, 'Pages:Make Reservation', ''),
(13, 'Our App', '', '', 7, 10, 1, 1, 'Pages:Our App', ''),
(14, 'Testimonials', '', '', 7, 9, 1, 1, 'Pages:Testimonials', ''),
(15, 'FAQ', '', '', 7, 8, 1, 1, 'Pages:FAQ', ''),
(16, 'User', '', '', 7, 4, 1, 0, 'Pages:User', ''),
(17, 'Login', '', '', 16, 7, 2, 1, 'Pages:User:Login', ''),
(18, 'Register', '', '', 16, 6, 2, 1, 'Pages:User:Register', ''),
(19, 'Forgot Password', '', '', 16, 5, 2, 1, 'Pages:User:Forgot Password', ''),
(20, 'Privacy Policy', '', '', 7, 3, 1, 1, 'Pages:Privacy Policy', ''),
(21, 'Terms; Conditions', '', '', 7, 2, 1, 1, 'Pages:Terms; Conditions', ''),
(22, '404 Error', '', '', 7, 1, 1, 1, 'Pages:404 Error', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `temporary_user`
--
ALTER TABLE `temporary_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `_tree_`
--
ALTER TABLE `_tree_`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qlookup` (`parent_id`,`seqid`,`depth`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `temporary_user`
--
ALTER TABLE `temporary_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `_tree_`
--
ALTER TABLE `_tree_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
