-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2020 lúc 12:39 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banacc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accs`
--

CREATE TABLE `accs` (
  `id` int(11) UNSIGNED NOT NULL,
  `accname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `accpass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `accstatus` int(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accs`
--

INSERT INTO `accs` (`id`, `accname`, `accpass`, `notes`, `catalog_id`, `accstatus`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'acc@mail.com', '123', '', 1, 1, 0, '2020-04-19 14:53:46', '2020-04-19 14:53:46'),
(2, 'acc1@mail.com', '123', '', 2, 1, 0, '2020-04-19 14:53:52', '2020-04-19 10:08:38'),
(3, 'acc2@mail.com', '123', '', 1, 1, 0, '2020-04-19 14:54:10', '2020-04-19 14:54:10'),
(4, 'acc3@mail.com', '123', '', 2, 1, 0, '2020-04-19 14:54:11', '2020-04-19 10:08:38'),
(5, 'acc4@mail.com', '123', '', 2, 1, 0, '2020-04-19 14:54:12', '2020-04-19 10:08:38'),
(6, 'acc5@mail.com', '123', '', 2, 1, 0, '2020-04-19 14:54:13', '2020-04-19 14:54:13'),
(7, 'acc6@mail.com', '123', '', 1, 1, 0, '2020-04-19 14:54:13', '2020-04-19 14:54:13'),
(8, 'acc7@mail.com', '123', '', 1, 1, 0, '2020-04-19 14:54:15', '2020-04-19 14:54:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalogchild`
--

CREATE TABLE `catalogchild` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_catalog` int(10) UNSIGNED NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalogchild`
--

INSERT INTO `catalogchild` (`id`, `name`, `id_catalog`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Mua HotMail child', 3, '200000', '2020-04-18 22:34:03', '2020-04-18 22:34:03'),
(2, 'Mua HotMail child 1', 3, '30000', '2020-04-18 23:21:58', '2020-04-18 23:21:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `linkfacebook` text COLLATE utf8_unicode_ci NOT NULL,
  `linkzalo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giahotmail`
--

CREATE TABLE `giahotmail` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giahotmail`
--

INSERT INTO `giahotmail` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'HotMail Random', '80', '2020-04-19 13:58:42', '2020-04-19 13:58:42'),
(2, 'HotMail Reg Theo Yêu Cầu', '100', '2020-04-19 13:58:42', '2020-04-19 13:58:42'),
(3, 'HotMail Đuôi Miền .COM .ES, UK, US, KR.FR', '200', '2020-04-19 13:58:42', '2020-04-19 13:58:42'),
(4, 'HotMail Veri Phone', '1000', '2020-04-19 13:58:42', '2020-04-19 13:58:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_19_031820_catalog_child', 2),
(5, '2020_04_19_033041_add_paid_to_users_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parentcatalogs`
--

CREATE TABLE `parentcatalogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `catalogname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `catalogstatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parentcatalogs`
--

INSERT INTO `parentcatalogs` (`id`, `catalogname`, `notes`, `catalogstatus`) VALUES
(3, 'Mua HotMail', 'aaaaaaa', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `total_money` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `level`, `total_money`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lê Mạnh Hùng', 'hung0210pro@gmail.com', NULL, '$2y$10$M.Ab6PcovUI7d5jHKFKBuOPIgrwsqPlk4pMqad4aqtqkkAZI0mCNy', '0357474170', 1, '200000', 'tNttUcdJdHQDuOOa3w8mWVMXF3u2qV1s51cXshh0OPQc6HfAO4iVhhaBVpzE', '2020-04-18 02:28:44', '2020-04-19 03:08:38'),
(2, 'test test33', 'hung0210123pro@gmail.com', NULL, '$2y$10$z3pTDZRCs84Vay5AqvYB..CwymPmCxwgRRlH3DuoHQ2xtxHve/HH2', '0357474222', 0, '10000', NULL, '2020-04-18 03:08:13', '2020-04-19 00:34:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accs`
--
ALTER TABLE `accs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalogchild`
--
ALTER TABLE `catalogchild`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giahotmail`
--
ALTER TABLE `giahotmail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `parentcatalogs`
--
ALTER TABLE `parentcatalogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT cho bảng `accs`
--
ALTER TABLE `accs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `catalogchild`
--
ALTER TABLE `catalogchild`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giahotmail`
--
ALTER TABLE `giahotmail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `parentcatalogs`
--
ALTER TABLE `parentcatalogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
