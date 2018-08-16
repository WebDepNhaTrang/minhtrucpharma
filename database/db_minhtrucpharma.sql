-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 16, 2018 lúc 05:46 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_minhtrucpharma`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `text_btn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_btn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `text_btn`, `link_btn`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Banner Demo 1', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'Nút 1', '#', 'banners\\August2018\\Z0YETN0zJJ9m50WwuM7Q.jpg', '2018-08-15 23:22:00', '2018-08-15 23:52:30'),
(2, 'Banner Demo 2', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'Nút 2', '#', 'banners\\August2018\\gWmzBWFFK0Th8dg8CsQu.jpg', '2018-08-15 23:22:51', '2018-08-15 23:22:51'),
(3, 'Banner Demo 3', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'Nút 3', '#', 'banners\\August2018\\0RcRZDNmqXikGz6tML77.jpg', '2018-08-15 23:23:17', '2018-08-15 23:23:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Hoạt Động Nổi Bật', 'cate-hoat-dong-noi-bat', '2018-08-15 20:27:40', '2018-08-16 02:18:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, '', 12),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '', 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, '', 9),
(23, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(24, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(25, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(26, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 4),
(27, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(28, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '', 6),
(29, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 7),
(30, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(31, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2),
(32, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3),
(33, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4),
(34, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, '', 5),
(35, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6),
(36, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(37, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(38, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, '', 9),
(39, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, '', 10),
(40, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(41, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '', 12),
(42, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 13),
(43, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '', 14),
(44, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '', 15),
(45, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(46, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, '', 2),
(47, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 3),
(48, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, '', 4),
(49, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 5),
(50, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(51, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, '', 7),
(52, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, '', 8),
(53, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(54, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, '', 10),
(55, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, '', 11),
(56, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, '', 12),
(57, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(58, 7, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(59, 7, 'description', 'rich_text_box', 'Description', 0, 1, 1, 1, 1, 1, NULL, 4),
(60, 7, 'text_btn', 'text', 'Text Btn', 0, 1, 1, 1, 1, 1, NULL, 5),
(61, 7, 'link_btn', 'text', 'Link Btn', 0, 1, 1, 1, 1, 1, NULL, 6),
(62, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, NULL, 2),
(63, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 7),
(64, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 8),
(65, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(66, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(67, 8, 'job', 'text', 'Job', 0, 1, 1, 1, 1, 1, NULL, 3),
(68, 8, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 4),
(69, 8, 'content', 'rich_text_box', 'Content', 0, 1, 1, 1, 1, 1, NULL, 5),
(70, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 6),
(71, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2018-08-15 20:27:36', '2018-08-15 20:27:36'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-08-15 20:27:36', '2018-08-15 20:27:36'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-08-15 20:27:36', '2018-08-15 20:27:36'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2018-08-15 20:27:40', '2018-08-15 20:27:40'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2018-08-15 20:27:41', '2018-08-15 20:27:41'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(7, 'banners', 'banners', 'Banner', 'Banners', 'voyager-photo', 'App\\Banner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-08-15 23:14:50', '2018-08-15 23:14:50'),
(8, 'testimonials', 'testimonials', 'Testimonial', 'Testimonials', 'voyager-chat', 'App\\Testimonial', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-08-16 01:56:22', '2018-08-16 01:56:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-08-15 20:27:37', '2018-08-15 20:27:37'),
(2, 'frontend', '2018-08-15 20:28:56', '2018-08-15 20:28:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-08-15 20:27:37', '2018-08-15 20:27:37', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, 5, 3, '2018-08-15 20:27:37', '2018-08-15 23:09:47', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, 5, 2, '2018-08-15 20:27:37', '2018-08-15 23:09:43', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 5, 1, '2018-08-15 20:27:37', '2018-08-15 23:09:42', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 3, '2018-08-15 20:27:37', '2018-08-15 23:09:47', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 4, '2018-08-15 20:27:37', '2018-08-15 23:09:47', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 5, '2018-08-15 20:27:37', '2018-08-15 23:09:47', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 6, '2018-08-15 20:27:37', '2018-08-15 23:09:47', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 7, '2018-08-15 20:27:37', '2018-08-15 23:09:47', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 18, 6, '2018-08-15 20:27:38', '2018-08-16 01:56:43', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 18, 4, '2018-08-15 20:27:40', '2018-08-16 01:56:43', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, 18, 3, '2018-08-15 20:27:41', '2018-08-16 01:56:43', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, 18, 5, '2018-08-15 20:27:42', '2018-08-16 01:56:43', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 8, '2018-08-15 20:27:44', '2018-08-15 23:09:47', 'voyager.hooks', NULL),
(15, 2, 'Trang Chủ', '', '_self', NULL, '#000000', NULL, 1, '2018-08-15 20:29:11', '2018-08-16 00:46:02', 'frontend.pages.home', NULL),
(16, 2, 'Giới Thiệu', '', '_self', NULL, '#000000', NULL, 2, '2018-08-15 20:29:22', '2018-08-16 00:46:02', 'frontend.pages.about', NULL),
(17, 2, 'Liên Hệ', '', '_self', NULL, '#000000', NULL, 5, '2018-08-15 20:41:38', '2018-08-16 02:24:24', 'frontend.pages.contact', NULL),
(18, 1, 'Frontend Custom', '#', '_self', 'voyager-brush', '#000000', NULL, 2, '2018-08-15 23:09:03', '2018-08-15 23:10:34', NULL, ''),
(19, 1, 'Banners', '', '_self', 'voyager-photo', NULL, 18, 1, '2018-08-15 23:14:51', '2018-08-15 23:19:46', 'voyager.banners.index', NULL),
(20, 2, 'Sản Phẩm', '', '_self', NULL, '#000000', NULL, 3, '2018-08-16 00:45:56', '2018-08-16 00:46:02', 'frontend.pages.product', NULL),
(21, 1, 'Testimonials', '', '_self', 'voyager-chat', NULL, 18, 2, '2018-08-16 01:56:23', '2018-08-16 01:56:43', 'voyager.testimonials.index', NULL),
(22, 2, 'Hoạt Động Nổi Bật', '', '_self', NULL, '#000000', NULL, 4, '2018-08-16 02:24:18', '2018-08-16 02:24:24', 'frontend.pages.news', NULL),
(23, 2, 'Tuyển Dụng', '#', '_self', NULL, '#000000', NULL, 6, '2018-08-16 06:53:26', '2018-08-16 06:53:26', NULL, '');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2018-08-15 20:27:42', '2018-08-15 20:27:42');

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
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(2, 'browse_bread', NULL, '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(3, 'browse_database', NULL, '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(4, 'browse_media', NULL, '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(5, 'browse_compass', NULL, '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(6, 'browse_menus', 'menus', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(7, 'read_menus', 'menus', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(8, 'edit_menus', 'menus', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(9, 'add_menus', 'menus', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(10, 'delete_menus', 'menus', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(11, 'browse_roles', 'roles', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(12, 'read_roles', 'roles', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(13, 'edit_roles', 'roles', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(14, 'add_roles', 'roles', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(15, 'delete_roles', 'roles', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(16, 'browse_users', 'users', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(17, 'read_users', 'users', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(18, 'edit_users', 'users', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(19, 'add_users', 'users', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(20, 'delete_users', 'users', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(21, 'browse_settings', 'settings', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(22, 'read_settings', 'settings', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(23, 'edit_settings', 'settings', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(24, 'add_settings', 'settings', '2018-08-15 20:27:39', '2018-08-15 20:27:39'),
(25, 'delete_settings', 'settings', '2018-08-15 20:27:39', '2018-08-15 20:27:39'),
(26, 'browse_categories', 'categories', '2018-08-15 20:27:40', '2018-08-15 20:27:40'),
(27, 'read_categories', 'categories', '2018-08-15 20:27:40', '2018-08-15 20:27:40'),
(28, 'edit_categories', 'categories', '2018-08-15 20:27:40', '2018-08-15 20:27:40'),
(29, 'add_categories', 'categories', '2018-08-15 20:27:40', '2018-08-15 20:27:40'),
(30, 'delete_categories', 'categories', '2018-08-15 20:27:40', '2018-08-15 20:27:40'),
(31, 'browse_posts', 'posts', '2018-08-15 20:27:41', '2018-08-15 20:27:41'),
(32, 'read_posts', 'posts', '2018-08-15 20:27:41', '2018-08-15 20:27:41'),
(33, 'edit_posts', 'posts', '2018-08-15 20:27:41', '2018-08-15 20:27:41'),
(34, 'add_posts', 'posts', '2018-08-15 20:27:41', '2018-08-15 20:27:41'),
(35, 'delete_posts', 'posts', '2018-08-15 20:27:41', '2018-08-15 20:27:41'),
(36, 'browse_pages', 'pages', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(37, 'read_pages', 'pages', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(38, 'edit_pages', 'pages', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(39, 'add_pages', 'pages', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(40, 'delete_pages', 'pages', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(41, 'browse_hooks', NULL, '2018-08-15 20:27:44', '2018-08-15 20:27:44'),
(42, 'browse_banners', 'banners', '2018-08-15 23:14:50', '2018-08-15 23:14:50'),
(43, 'read_banners', 'banners', '2018-08-15 23:14:50', '2018-08-15 23:14:50'),
(44, 'edit_banners', 'banners', '2018-08-15 23:14:50', '2018-08-15 23:14:50'),
(45, 'add_banners', 'banners', '2018-08-15 23:14:50', '2018-08-15 23:14:50'),
(46, 'delete_banners', 'banners', '2018-08-15 23:14:50', '2018-08-15 23:14:50'),
(47, 'browse_testimonials', 'testimonials', '2018-08-16 01:56:23', '2018-08-16 01:56:23'),
(48, 'read_testimonials', 'testimonials', '2018-08-16 01:56:23', '2018-08-16 01:56:23'),
(49, 'edit_testimonials', 'testimonials', '2018-08-16 01:56:23', '2018-08-16 01:56:23'),
(50, 'add_testimonials', 'testimonials', '2018-08-16 01:56:23', '2018-08-16 01:56:23'),
(51, 'delete_testimonials', 'testimonials', '2018-08-16 01:56:23', '2018-08-16 01:56:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 'Hoạt Động Nổi Bật 1', NULL, 'Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'posts/August2018/S4E32jk0qeLSCY9erGGD.jpg', 'hoat-dong-noi-bat-1', NULL, NULL, 'PUBLISHED', 0, '2018-08-16 06:10:35', '2018-08-16 06:10:35'),
(6, 1, 1, 'Hoạt Động Nổi Bật 2', NULL, 'Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'posts/August2018/UDM1CTpCdt0wS3yXflLs.jpg', 'hoat-dong-noi-bat-2', NULL, NULL, 'PUBLISHED', 0, '2018-08-16 06:11:17', '2018-08-16 06:11:17'),
(7, 1, 1, 'Hoạt Động Nổi Bật 3', NULL, 'Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'posts/August2018/UAXI5uzYikgETNTiKUBe.jpg', 'hoat-dong-noi-bat-3', NULL, NULL, 'PUBLISHED', 0, '2018-08-16 06:11:50', '2018-08-16 06:11:50'),
(8, 1, 1, 'Hoạt Động Nổi Bật 4', NULL, 'Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'posts/August2018/VluBt6K72Pep0ylaThJ2.jpg', 'hoat-dong-noi-bat-4', NULL, NULL, 'PUBLISHED', 0, '2018-08-16 06:12:25', '2018-08-16 06:12:25'),
(9, 1, 1, 'Hoạt Động Nổi Bật 5', NULL, 'Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', 'posts/August2018/9u3B66Zocz1agL3iIP1n.jpg', 'hoat-dong-noi-bat-5', NULL, NULL, 'PUBLISHED', 0, '2018-08-16 06:12:50', '2018-08-16 06:12:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-08-15 20:27:38', '2018-08-15 20:27:38'),
(2, 'user', 'Normal User', '2018-08-15 20:27:38', '2018-08-15 20:27:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Minh Trúc Pharma', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Minh Trúc Pharma', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\August2018\\Dy6uxaZSqWX0Wwfccnk3.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Minh Trúc Pharma', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Minh Trúc Pharma', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(12, 'contact.google_place_id', 'Google Map - Place ID', 'ChIJb4jMEXhncDERudweqAq8S1w', NULL, 'text', 10, 'Contact'),
(13, 'contact.address', 'Address', '123 Nha Trang, Khánh Hòa', NULL, 'text', 6, 'Contact'),
(14, 'contact.email', 'Email', 'info@minhtrucpharma.com', NULL, 'text', 7, 'Contact'),
(15, 'contact.phone', 'Phone', '+84 999 999 999', NULL, 'text', 8, 'Contact'),
(16, 'contact.google_api_key', 'Google Map - API Key', 'AIzaSyAqzbw4yIUcASpNWpMPiPCVFIV9GLbWYdE', NULL, 'text', 16, 'Contact'),
(17, 'about.st_about_content', 'About Section - Content', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>\r\n<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', NULL, 'rich_text_box', 12, 'About'),
(18, 'about.st_about_image', 'About Section - Image', 'settings\\August2018\\arZvMwsUkd628RV6Urml.png', NULL, 'image', 13, 'About'),
(19, 'about.about_page_banner', 'About Page - Banner', 'settings\\August2018\\fTKPUgij6c1tn45he9NS.jpg', NULL, 'image', 11, 'About'),
(20, 'about.st_testimonial_title', 'Testimonial Section - Title', 'Đánh Giá Của Khách Hàng', NULL, 'text', 14, 'About'),
(21, 'about.st_testimonial_description', 'Testimonial Section - Description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', NULL, 'text_area', 15, 'About'),
(22, 'contact.business_hours', 'Business Hours', 'T2 - T7: 7:00 - 17:00', NULL, 'text', 9, 'Contact'),
(23, 'site.footer_info', 'Footer - Info', '<p>MediCo. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat . wisi enim ad minim veniam, quis tation.</p>', NULL, 'rich_text_box', 17, 'Site'),
(24, 'site.footer_logo', 'Footer - Logo', 'settings\\August2018\\4T4NsQmcg6yM6348YmSS.png', NULL, 'image', 18, 'Site'),
(25, 'site.footer_bg', 'Footer - Background', 'settings\\August2018\\MVJFW9riKRGdR9c0vEdO.jpg', NULL, 'image', 19, 'Site'),
(26, 'news.title', 'Title', 'Hoạt Động Nổi Bật', NULL, 'text', 20, 'News'),
(27, 'news.background', 'Background', 'settings/August2018/ENIvGwzM3VrKxH7UfQEV.jpg', NULL, 'image', 22, 'News'),
(28, 'news.paginate', 'Paginate', '3', NULL, 'text', 23, 'News'),
(29, 'news.description', 'Description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry\'s standard dummy text ever since the been when an unknown printer.', NULL, 'text_area', 21, 'News');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `avatar`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Customer 1', 'Student', 'testimonials\\August2018\\t4jnIVtVLt1aXH0BBF96.jpg', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', '2018-08-16 01:58:33', '2018-08-16 01:58:33'),
(2, 'Customer 2', 'Student', 'testimonials\\August2018\\MwbMkoXYuit66lIWg6Z8.jpg', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', '2018-08-16 01:58:54', '2018-08-16 01:58:54'),
(3, 'Customer 3', 'Student', 'testimonials\\August2018\\xYusKw1yaxqsQQDNvOLp.jpg', '<p>Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật. Dữ liệu đang được cập nhật.&nbsp;</p>', '2018-08-16 01:59:09', '2018-08-16 01:59:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2018-08-15 20:27:42', '2018-08-15 20:27:42'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2018-08-15 20:27:43', '2018-08-15 20:27:43'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2018-08-15 20:27:43', '2018-08-15 20:27:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', '$2y$10$9Ag9VYGkdsGeTQp8XL2muu8Dv9PxLsLROtNyyTqScTR9gt1FW5xu.', 'akBRpnuUkH9ftTYvfdeadma5uDLEWmzisN1xSEQ3Nv08Xy6egnB8TQ4FhOTJ', NULL, '2018-08-15 20:27:41', '2018-08-15 20:27:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Chỉ mục cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Chỉ mục cho bảng `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Chỉ mục cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Chỉ mục cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
