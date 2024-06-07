-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2024 at 06:45 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u763050432_ratemycoach`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylogs`
--

CREATE TABLE `activitylogs` (
  `id` int(11) NOT NULL,
  `activity` text DEFAULT NULL,
  `auth_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activitylogs`
--

INSERT INTO `activitylogs` (`id`, `activity`, `auth_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Reviews deleted', 1, 1, '2024-05-01 01:37:42', '2024-05-01 01:37:42'),
(2, 'Accepted Coach', 1, 1, '2024-05-01 01:40:34', '2024-05-01 01:40:34'),
(3, 'Rejected Coach', 1, 1, '2024-05-01 01:40:36', '2024-05-01 01:40:36'),
(4, 'Reviews deleted', 1, 1, '2024-05-02 21:56:21', '2024-05-02 21:56:21'),
(5, 'Accepted Coach', 1, 1, '2024-05-02 21:58:01', '2024-05-02 21:58:01'),
(6, 'Coach Changed', 1, 1, '2024-05-02 22:00:12', '2024-05-02 22:00:12'),
(7, 'School Changed', 1, 1, '2024-05-02 22:00:49', '2024-05-02 22:00:49'),
(8, 'New Coach Added', 1, 1, '2024-05-09 21:37:37', '2024-05-09 21:37:37'),
(9, 'Coach Changed', 1, 1, '2024-05-09 21:38:35', '2024-05-09 21:38:35'),
(10, 'Coach Changed', 1, 1, '2024-05-09 21:39:33', '2024-05-09 21:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`, `status`) VALUES
(1, '2023-06-05 05:06:41', '2023-06-05 16:50:18', 'Banner 1', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span>  </p>', '/upload_files/banner/banner1.jpg', 1),
(2, '2023-06-05 23:09:39', '2023-06-05 23:09:39', 'Banner 2', '<span style=\"color: rgb(49, 49, 49); font-family: CoreSansNRCond, Didot, &quot;Didot LT STD&quot;, &quot;Hoefler Text&quot;, Garamond, &quot;Calisto MT&quot;, &quot;Times New Roman&quot;, serif; font-size: 15px; text-align: justify; background-color: rgb(242, 242, 242);\">The secret to their success does not lie in precise astrological predictions or mischievous and blatant employ of corporate espionage, but rather in a dedication to quality and constant pursuit of excellence.</span>', '/upload_files/banner/about.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blogname` varchar(255) DEFAULT NULL,
  `blogshortdescription` text DEFAULT NULL,
  `bloglongdescription` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `blogname`, `blogshortdescription`, `bloglongdescription`, `image`, `status`) VALUES
(1, '2023-06-07 01:01:20', '2023-06-07 01:01:20', 'Blog Name 1', '<span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeho</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">lder before final copy is available.</span>', '<span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span>', '/upload_files/blog/no_image.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_at`, `updated_at`, `name`, `image`, `description`, `status`) VALUES
(1, '2023-06-05 22:09:46', '2023-06-05 22:34:04', 'Category 1', '/upload_files/category/mercedes-benz-c-class-mojave-silver.jpg', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span>  </p>', 1),
(2, '2023-06-05 22:37:09', '2023-06-05 23:13:52', 'Category 2', '/upload_files/category/BMW_4-Series-Coupe-2020_main.jpg', '<p><span style=\"color: rgb(49, 49, 49); font-family: CoreSansNRCond, Didot, \" didot=\"\" lt=\"\" std\",=\"\" \"hoefler=\"\" text\",=\"\" garamond,=\"\" \"calisto=\"\" mt\",=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(242,=\"\" 242,=\"\" 242);\"=\"\">BMW does not stand for Best Motors in the World company. Sure, BMW-branded automobiles are regarded as being some of the few engineering forms close to perfection, but the letters stand for something less boisterous and more good-natured: Bayerische Motoren Werke or Bavarian Motor Works. xcxcxc</span><br style=\"margin: 0px; padding: 0px; margin-block: 0px; margin-inline: 0px; color: rgb(49, 49, 49); font-family: CoreSansNRCond, Didot, \" didot=\"\" lt=\"\" std\",=\"\" \"hoefler=\"\" text\",=\"\" garamond,=\"\" \"calisto=\"\" mt\",=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;=\"\" background-color:=\"\" rgb(242,=\"\" 242,=\"\" 242);\"=\"\"> </p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coachchanges`
--

CREATE TABLE `coachchanges` (
  `id` int(11) NOT NULL,
  `old_coach` text DEFAULT NULL,
  `old_school` text DEFAULT NULL,
  `old_sports` text DEFAULT NULL,
  `new_coach` text DEFAULT NULL,
  `new_school` text DEFAULT NULL,
  `new_sports` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `is_approve` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coachchanges`
--

INSERT INTO `coachchanges` (`id`, `old_coach`, `old_school`, `old_sports`, `new_coach`, `new_school`, `new_sports`, `email`, `is_approve`, `status`, `created_at`, `updated_at`) VALUES
(1, '7', '7', '51', '7', '7', '51', 'james001@gmail.com', 1, 1, '2024-04-24 21:28:02', '2024-04-24 21:28:02'),
(2, '3', '11', '51', '4', '8', '51', 'james12345@gmail.com', 1, 1, '2024-04-25 22:39:36', '2024-04-25 22:39:36'),
(3, '11', '11', '51', '3', '11', '51', 'james123456@gmail.com', 2, 1, '2024-04-25 22:40:27', '2024-04-25 22:40:27'),
(4, '5', '8', '51', '4', '8', '51', 'ethanturner@gmail.com', 2, 1, '2024-05-01 01:40:11', '2024-05-01 01:40:11'),
(5, '5', '8', '51', '6', '2', '51', 'ethanturner123@gmail.com', 1, 1, '2024-05-01 01:40:23', '2024-05-01 01:40:23'),
(6, '3', '1', '51', '3', '1', '51', 'test@gmail.com', 1, 1, '2024-05-02 21:52:08', '2024-05-02 21:52:08'),
(7, '2', '8', '51', '5', '7', '51', 'info@admin.com', 0, 1, '2024-05-29 01:24:46', '2024-05-29 01:24:46'),
(8, '2', '8', '51', '5', '7', '51', 'info@admin.com', 0, 1, '2024-05-29 01:25:03', '2024-05-29 01:25:03'),
(9, '5', '7', '51', '2', '8', '51', 'noah123@gmail.com', 0, 1, '2024-05-29 01:25:56', '2024-05-29 01:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `created_at`, `updated_at`, `color`, `status`) VALUES
(1, '2023-06-15 22:16:42', '2023-06-15 23:18:13', '#ffdd00', '1'),
(2, '2023-06-15 23:28:17', '2023-06-15 23:28:17', '#fa0000', '1'),
(3, '2023-06-15 23:39:14', '2023-07-03 10:54:22', '#0d2d8c', '1');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `code_label` varchar(255) DEFAULT NULL,
  `code_value` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_config` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `created_at`, `updated_at`, `code`, `code_label`, `code_value`, `image`, `status`, `is_config`) VALUES
(1, '2023-07-11 10:28:15', '2023-07-11 10:35:34', 'facebook', 'Facebook', 'https://www.facebook.com/', '/upload_files/config/facebook.png', 1, 1),
(2, '2023-07-11 10:41:10', '2023-07-11 10:41:10', 'youtube', 'YouTube', 'https://www.youtube.com/', NULL, 1, 1),
(3, '2023-07-11 10:28:15', '2023-07-11 10:35:34', 'twitter', 'Twitter', 'https://www.twitter.com/', '/upload_files/config/facebook.png', 1, 1),
(4, '2023-07-11 10:41:10', '2023-07-11 10:41:10', 'instagram', 'Instagram', 'https://www.instagram.com/', NULL, 1, 1),
(5, '2023-07-11 10:28:15', '2023-07-11 10:35:34', 'linkedin', 'LinkedIn', 'https://www.linkedin.com/', '', 1, 1),
(6, '2023-07-11 10:41:10', '2023-07-11 10:41:10', 'sanpchat', 'Sanpchat', 'https://www.sanpchat.com/', NULL, 1, 1),
(7, '2023-07-11 10:41:10', '2023-07-11 10:41:10', 'footer', 'Footer', '2023-2024', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `config_flags`
--

CREATE TABLE `config_flags` (
  `id` int(11) NOT NULL,
  `code` text NOT NULL,
  `code_label` text NOT NULL,
  `code_value` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `is_config` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_flags`
--

INSERT INTO `config_flags` (`id`, `code`, `code_label`, `code_value`, `image`, `status`, `is_config`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'Face Book', 'https://www.facebook.com/', 'http://localhost:8000/', 1, 1, '2022-12-12 08:12:12', '2022-12-21 01:11:27'),
(2, 'youtube', 'YouTube', 'https://www.youtube.com/', NULL, 1, 1, '2022-12-14 03:52:48', '2022-12-14 04:52:03'),
(3, 'facebook', 'Face Book', 'https://www.facebook.com/', '/upload_files/configs/fb_icon_325x325.png', 1, 1, '2022-12-14 03:54:49', '2022-12-14 05:48:34'),
(4, 'linkedin', 'Linked In', 'https://pk.linkedin.com/', NULL, 1, 0, '2022-12-14 04:59:34', '2022-12-14 05:00:32'),
(5, 'phone', 'Phone', '(214)695-2144', '/upload_files/configs/phone.png', 1, 1, '2022-12-14 05:13:08', '2022-12-14 05:13:08'),
(6, 'whatsapp', 'WhatsApp', '(559)847-6188', '/upload_files/configs/174879.png', 1, 1, '2022-12-14 05:14:06', '2022-12-14 05:42:08'),
(8, 'Copyright', 'Copyright', '2023-2024', 'http://localhost:8000/', 1, 1, '2022-12-14 05:14:06', '2022-12-21 01:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`, `question`, `answer`, `status`) VALUES
(1, '2023-06-07 00:39:14', '2023-06-07 00:42:40', 'whats is your country name ?', 'my country name is Pakistan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `innerbanners`
--

CREATE TABLE `innerbanners` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `innerbanners`
--

INSERT INTO `innerbanners` (`id`, `created_at`, `updated_at`, `title`, `description`, `image`, `status`) VALUES
(1, '2023-06-05 05:22:54', '2023-06-05 16:59:42', 'Inner Banner 1', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"> </span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"> </span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"> </span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span>  </p>', '/upload_files/innerbanner/full_coverphoto_facebook new.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `formname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isread` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` text DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `created_at`, `updated_at`, `formname`, `fname`, `lname`, `email`, `isread`, `message`, `status`) VALUES
(1, '2023-06-06 23:46:45', '2023-06-07 00:18:48', 'contact', 'david', 'smith', 'david@gmail.com', '0', 'hello', '1'),
(2, '2023-06-06 23:59:26', '2023-06-06 23:59:26', 'Contact', 'dany', 'jamith', 'daniyal@gmail.com', '0', 'Hello Daniyal 2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `created_at`, `updated_at`, `type`, `image`, `status`) VALUES
(1, '2023-06-03 01:35:03', '2023-06-05 17:21:45', 'logo', '/upload_files/logo/Hafiz Mohammad Aamir.PNG', '1'),
(2, '2023-06-03 01:40:01', '2023-06-05 17:24:26', 'favicon', '/upload_files/logo/Hafiz Mohammad Aamir.PNG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `log_status` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `country_ip_address` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `latitude` text DEFAULT NULL,
  `longitude` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `created_at`, `updated_at`, `user_id`, `details`, `log_status`, `status`, `country_ip_address`, `country`, `city`, `latitude`, `longitude`) VALUES
(1, '2023-06-28 17:59:19', '2023-06-28 17:59:19', '5', 'Logged-In', '1', 1, NULL, NULL, NULL, NULL, NULL),
(2, '2023-06-28 20:05:55', '2023-06-28 20:05:55', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(3, '2023-06-28 20:06:56', '2023-06-28 20:06:56', '5', 'Logged-In', '1', 1, NULL, NULL, NULL, NULL, NULL),
(4, '2023-06-28 20:07:04', '2023-06-28 20:07:04', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(5, '2023-06-28 20:07:44', '2023-06-28 20:07:44', '5', 'Logged-In', '1', 1, NULL, NULL, NULL, NULL, NULL),
(6, '2023-06-28 20:34:25', '2023-06-28 20:34:25', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(7, '2023-06-28 20:34:48', '2023-06-28 20:34:48', '5', 'Logged-In', '1', 1, NULL, NULL, NULL, NULL, NULL),
(8, '2023-06-28 20:59:22', '2023-06-28 20:59:22', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(9, '2023-06-28 21:01:33', '2023-06-28 21:01:33', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(10, '2023-06-28 21:01:48', '2023-06-28 21:01:48', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:28d8:408e:a2e5:9183', NULL, NULL, NULL, NULL),
(11, '2023-06-28 21:20:30', '2023-06-28 21:20:30', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(12, '2023-06-28 21:22:51', '2023-06-28 21:22:51', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(13, '2023-06-28 21:24:19', '2023-06-28 21:24:19', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:28d8:408e:a2e5:9183', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(14, '2023-06-28 21:31:41', '2023-06-28 21:31:41', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(15, '2023-06-28 21:33:27', '2023-06-28 21:33:27', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(16, '2023-06-28 21:38:05', '2023-06-28 21:38:05', '5', 'Logged-Out', '0', 1, NULL, NULL, NULL, NULL, NULL),
(17, '2023-06-28 21:38:59', '2023-06-28 21:38:59', '5', 'Logged-In', '1', 1, '51.158.238.226', 'France', 'Paris', '48.8323', '2.4075'),
(18, '2023-06-28 21:41:50', '2023-06-28 21:41:50', '5', 'Logged-Out', '0', 1, '51.158.238.226', 'France', 'Paris', '48.8323', '2.4075'),
(19, '2023-06-29 16:32:06', '2023-06-29 16:32:06', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:a1ed:f725:3436:1c6c', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(20, '2023-06-29 18:13:02', '2023-06-29 18:13:02', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:a1ed:f725:3436:1c6c', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(21, '2023-07-03 09:22:03', '2023-07-03 09:22:03', '5', 'Logged-In', '1', 1, '2400:adc1:188:d300:ed0c:b459:5206:5398', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(22, '2023-07-03 10:03:18', '2023-07-03 10:03:18', '5', 'Logged-Out', '0', 1, '2400:adc1:188:d300:ed0c:b459:5206:5398', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(23, '2023-07-03 10:03:46', '2023-07-03 10:03:46', '5', 'Logged-In', '1', 1, '2400:adc1:188:d300:ed0c:b459:5206:5398', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(24, '2023-07-03 10:43:27', '2023-07-03 10:43:27', '5', 'Logged-Out', '0', 1, '2400:adc1:188:d300:ed0c:b459:5206:5398', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(25, '2023-07-04 02:51:34', '2023-07-04 02:51:34', '1', 'Logged-In', '1', 1, '2400:adc1:188:d300:ed0c:b459:5206:5398', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(26, '2023-07-04 02:54:02', '2023-07-04 02:54:02', '1', 'Logged-Out', '0', 1, '2400:adc1:188:d300:ed0c:b459:5206:5398', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(27, '2023-07-04 03:35:48', '2023-07-04 03:35:48', '5', 'Logged-In', '1', 1, '2400:adc1:188:d300:ed0c:b459:5206:5398', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(28, '2023-07-04 11:03:15', '2023-07-04 11:03:15', '5', 'Logged-Out', '0', 1, '2400:adc1:188:d300:19ee:f6b:d001:5715', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(29, '2023-07-04 16:51:02', '2023-07-04 16:51:02', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:1c62:5b93:851:24d6', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(30, '2023-07-04 17:02:00', '2023-07-04 17:02:00', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:1c62:5b93:851:24d6', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(31, '2023-07-05 02:58:10', '2023-07-05 02:58:10', '5', 'Logged-In', '1', 1, '2400:adc1:188:d300:19ee:f6b:d001:5715', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(32, '2023-07-05 08:37:43', '2023-07-05 08:37:43', '5', 'Logged-Out', '0', 1, '2400:adc1:188:d300:9db4:d2c8:124:5e26', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(33, '2023-07-07 04:22:04', '2023-07-07 04:22:04', '5', 'Logged-In', '1', 1, '2400:adc1:188:d300:b4e5:29d0:316a:ce10', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(34, '2023-07-07 11:00:03', '2023-07-07 11:00:03', '5', 'Logged-Out', '0', 1, '2400:adc1:188:d300:61a3:213a:995a:a2af', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(35, '2023-07-07 11:00:30', '2023-07-07 11:00:30', '5', 'Logged-In', '1', 1, '2400:adc1:188:d300:61a3:213a:995a:a2af', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(36, '2023-07-07 11:00:59', '2023-07-07 11:00:59', '5', 'Logged-Out', '0', 1, '2400:adc1:188:d300:61a3:213a:995a:a2af', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(37, '2023-07-07 19:05:43', '2023-07-07 19:05:43', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:6c71:9aa:3b43:8606', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(38, '2023-07-07 19:07:52', '2023-07-07 19:07:52', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:6c71:9aa:3b43:8606', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(39, '2023-07-07 19:14:09', '2023-07-07 19:14:09', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:6c71:9aa:3b43:8606', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(40, '2023-07-07 19:16:00', '2023-07-07 19:16:00', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:6c71:9aa:3b43:8606', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(41, '2023-07-07 20:11:34', '2023-07-07 20:11:34', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:6c71:9aa:3b43:8606', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(42, '2023-07-07 20:17:47', '2023-07-07 20:17:47', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:6c71:9aa:3b43:8606', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(43, '2023-07-10 17:26:13', '2023-07-10 17:26:13', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(44, '2023-07-10 17:26:29', '2023-07-10 17:26:29', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(45, '2023-07-10 17:26:48', '2023-07-10 17:26:48', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(46, '2023-07-10 17:27:17', '2023-07-10 17:27:17', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(47, '2023-07-10 17:27:40', '2023-07-10 17:27:40', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(48, '2023-07-10 19:49:14', '2023-07-10 19:49:14', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(49, '2023-07-10 19:49:27', '2023-07-10 19:49:27', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(50, '2023-07-10 19:50:12', '2023-07-10 19:50:12', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(51, '2023-07-10 22:21:13', '2023-07-10 22:21:13', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(52, '2023-07-10 22:21:16', '2023-07-10 22:21:16', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(53, '2023-07-10 22:37:15', '2023-07-10 22:37:15', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(54, '2023-07-10 22:37:18', '2023-07-10 22:37:18', '5', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(55, '2023-07-10 23:08:57', '2023-07-10 23:08:57', '6', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(56, '2023-07-10 23:09:14', '2023-07-10 23:09:14', '6', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(57, '2023-07-10 23:45:16', '2023-07-10 23:45:16', '6', 'Logged-In', '1', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(58, '2023-07-10 23:45:20', '2023-07-10 23:45:20', '6', 'Logged-Out', '0', 1, '2400:adc1:115:4a00:e8af:8703:1265:817f', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(59, '2023-07-11 04:38:52', '2023-07-11 04:38:52', '5', 'Logged-In', '1', 1, '2400:adc1:188:d300:4d5d:6ba6:127a:26e7', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(60, '2023-07-11 04:58:33', '2023-07-11 04:58:33', '5', 'Logged-Out', '0', 1, '2400:adc1:188:d300:4d5d:6ba6:127a:26e7', 'Pakistan', 'Karachi', '24.8591', '66.9983'),
(61, '2023-07-18 01:09:31', '2023-07-18 01:09:31', '5', 'Logged-In', '1', 1, '2400:adc1:115:4a00:59d3:a6ab:d40b:8b6d', 'Pakistan', 'Karachi', '24.8591', '66.9983');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2016_01_01_193651_create_roles_permissions_tables', 2),
(6, '2018_08_01_183154_create_pages_table', 2),
(7, '2018_08_04_122319_create_settings_table', 2),
(8, '2023_05_26_231055_create_posts_table', 3),
(9, '2023_05_27_003836_create_posts_table', 4),
(10, '2023_05_29_170451_create_brands_table', 5),
(11, '2023_05_29_174739_create_post_twos_table', 6),
(12, '2023_05_30_093940_create_new_cruds_table', 7),
(13, '2023_05_30_094209_create_newcrudgens_table', 8),
(14, '2023_05_30_095331_create_newcrudds_table', 9),
(15, '2023_05_30_175411_create_posts_table', 10),
(16, '2023_05_30_182201_create_brands_table', 10),
(17, '2023_06_01_210012_create_sections_table', 10),
(18, '2023_06_02_223837_create_logos_table', 11),
(19, '2023_06_02_224816_create_logos_table', 12),
(20, '2023_06_02_230900_create_logos_table', 13),
(21, '2023_06_03_000018_create_logos_table', 14),
(22, '2023_06_03_010503_create_logos_table', 15),
(23, '2023_06_03_012143_create_logos_table', 16),
(24, '2023_06_03_012855_create_logos_table', 17),
(25, '2023_06_03_013219_create_logos_table', 18),
(26, '2023_06_05_044909_create_banners_table', 19),
(27, '2023_06_05_051556_create_innerbanners_table', 20),
(28, '2023_06_05_215603_create_categories_table', 21),
(29, '2023_06_05_235003_create_products_table', 22),
(30, '2023_06_06_034801_create_uploadimages_table', 23),
(31, '2023_06_06_234428_create_inquiries_table', 24),
(32, '2023_06_07_001111_create_newsletters_table', 25),
(33, '2023_06_07_002517_create_faqs_table', 26),
(34, '2023_06_07_004542_create_blogs_table', 27),
(35, '2023_06_07_203622_create_subcategories_table', 28),
(36, '2023_06_13_043554_create_testimonials_table', 29),
(37, '2023_06_15_213246_create_colors_table', 30),
(38, '2023_06_16_000003_create_sizes_table', 31),
(39, '2023_06_20_010317_create_orders_table', 32),
(40, '2023_06_22_184706_create_orderproducts_table', 33),
(41, '2023_06_28_175621_create_logs_table', 34),
(42, '2023_07_10_204438_create_user2s_table', 35),
(43, '2023_07_11_095959_create_configs_table', 36);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `created_at`, `updated_at`, `name`, `email`, `status`) VALUES
(1, '2023-06-07 00:12:58', '2023-06-07 00:19:00', 'Herry', 'harry@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `order_product_id` varchar(255) DEFAULT NULL,
  `order_product_name` varchar(255) DEFAULT NULL,
  `order_product_price` varchar(255) DEFAULT NULL,
  `order_product_qty` varchar(255) DEFAULT NULL,
  `order_product_subtotal` varchar(255) DEFAULT NULL,
  `order_user_id` varchar(255) DEFAULT NULL,
  `variation_price` varchar(255) DEFAULT NULL,
  `variants` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `order_shipped_or_pending` text DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderproducts`
--

INSERT INTO `orderproducts` (`id`, `created_at`, `updated_at`, `order_id`, `order_product_id`, `order_product_name`, `order_product_price`, `order_product_qty`, `order_product_subtotal`, `order_user_id`, `variation_price`, `variants`, `image`, `status`, `order_shipped_or_pending`) VALUES
(1, '2023-07-07 07:43:31', '2023-07-07 07:43:31', '1', '1', 'product 1', '2600', '1', '2600', '5', NULL, NULL, '/upload_files/product/download.jpg', 1, 'Pending'),
(2, '2023-07-07 07:43:31', '2023-07-07 07:43:31', '1', '3', 'Product 3', '4500', '1', '4500', '5', NULL, NULL, '/upload_files/product/toyotta1.jpg', 1, 'Pending'),
(3, '2023-07-07 07:49:03', '2023-07-07 07:49:03', '2', '4', 'Rolls Roys 2', '10000', '1', '10000', '5', NULL, NULL, '/upload_files/product/rolls_roys.jpg', 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `order_email` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `order_notes` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `customer_id` text DEFAULT NULL,
  `card_payment` text DEFAULT NULL,
  `token` text DEFAULT NULL,
  `invoice_number` text DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `tracking_no` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `receipt_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `first_name`, `country`, `city`, `state`, `address`, `zipcode`, `phoneno`, `total`, `user_id`, `order_email`, `order_status`, `order_notes`, `transaction_id`, `customer_id`, `card_payment`, `token`, `invoice_number`, `payment_method`, `tracking_no`, `status`, `receipt_url`) VALUES
(1, '2023-07-07 07:43:31', '2023-07-07 07:43:31', 'Herry Maclister', 'pakistan', 'karachi', 'sindh', 'demo demo', '75800', '03170235868', '7100', '5', 'harry.maclister@designsefficient.com', 'succeeded', 'demo demo', 'txn_3NR9KBAoHKxcLwIQ1BQ6gNLC', 'cus_ODaV4SIxDnBJz3', 'card_1NR9K8AoHKxcLwIQbjATc5XI', 'tok_1NR9K8AoHKxcLwIQbeAHqEXj', '623184', 'stripe', '526941992592408', 1, 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xTkdyTldBb0hLeGNMd0lRKKOEn6UGMgZg561mA386LBZzcUIOzt_x5VU-v6BABhy1k_0h1EFzLENZKrJW9VFQiGlBf4U0s0w5IhRp'),
(2, '2023-07-07 07:49:03', '2023-07-07 07:49:03', 'Herry Maclister', 'pakistan', 'karachi', 'sindh', 'demo', '75800', '03170235868', '10000', '5', 'harry.maclister@designsefficient.com', 'succeeded', 'demo', '60222602654', 'P59V4S', 'Authorize .Net', 'N/A', '494804', 'Authorize .Net', '798628391223163', 1, 'https://sandbox.authorize.net/ui/themes/sandbox/Transaction/TransactionReceipt.aspx?transid=60222602654');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Home', '<span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"> </span>', '/upload_files/pages/Youtube Banner.PNG', 1, NULL, '2023-06-01 20:37:11', '2023-06-05 18:43:04'),
(2, 'About', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available </span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">available</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"> </span></p>', '/upload_files/pages/about.jpg', 1, NULL, '2023-06-01 20:44:05', '2023-06-06 21:34:31'),
(3, 'Contact', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span><br></p>', '/upload_files/pages/no_image.png', 1, NULL, '2023-06-06 18:45:29', '2023-06-06 18:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `subcategory` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `oldprice` varchar(255) DEFAULT NULL,
  `shortdescription` text DEFAULT NULL,
  `longdescription` text DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `added_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `title`, `slug`, `category`, `subcategory`, `price`, `oldprice`, `shortdescription`, `longdescription`, `sku`, `quantity`, `image`, `status`, `added_by`) VALUES
(1, '2023-06-06 00:09:57', '2023-06-07 23:14:22', 'product 1', 'product-1', '1', 1, '2600', '3000', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span>  </p>', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span>  </p>', 'PRO-1245', 25, '/upload_files/product/download.jpg', 1, '1'),
(3, '2023-06-06 08:14:09', '2023-06-07 23:10:21', 'Product 3', 'product-3', '1', 3, '4500', '5000', '<span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. </span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span>', '<span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. </span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span>', 'PRO-142147', 15, '/upload_files/product/toyotta1.jpg', 1, '5'),
(4, '2023-06-15 18:35:24', '2023-06-15 20:03:59', 'Rolls Roys 2', 'rolls-roy-2', '1', 3, '10000', '8500', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be a placeholder before the final copy is available.</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be a placeholder before the final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span>  </p>', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be a placeholder before the final copy is available.</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be a placeholder before the final copy is available.</span></p>', 'rollsroys-14524', 20, '/upload_files/product/rolls_roys.jpg', 1, '5'),
(5, '2023-06-23 03:05:39', '2023-07-10 19:08:00', 'Land Cruiser 300', 'land-cruiser-300', '1', 0, '3500', '4000', '<div>Latest prices of Toyota Land Cruiser 300 in Pakistan</div><div>AUTOMOTIVE</div><div>Latest prices of Toyota Land Cruiser 300 in Pakistan</div><div>May 16, 2023</div><div>Following are the latest prices of Toyota Land Cruiser 300 in Pakistan. The Land Cruiser 300 offers a combination of luxury, off-road capability, and durability.</div><div><br></div><div>The given prices were last updated by Indus Motors on April 03, 2023 and have remained unchanged since then.</div><div><br></div><div>Available exterior colors of Land Cruiser 300:</div><div><br></div><div>The SUV is available in colors including Super White, White Pearl, Precious White Pearl, Dark Red Mica Metallic, Dark Blue Mica, Silver Me, Grey Metallic, Black, Avant-Garde Bronze Metallic and Attitude Black.</div>', '<div><font color=\"#000000\" face=\"Open Sans\">Latest prices of Toyota Land Cruiser 300 in Pakistan</font></div><div><font color=\"#000000\" face=\"Open Sans\">AUTOMOTIVE</font></div><div><font color=\"#000000\" face=\"Open Sans\">Latest prices of Toyota Land Cruiser 300 in Pakistan</font></div><div><font color=\"#000000\" face=\"Open Sans\">May 16, 2023</font></div><div><font color=\"#000000\" face=\"Open Sans\">Following are the latest prices of Toyota Land Cruiser 300 in Pakistan. The Land Cruiser 300 offers a combination of luxury, off-road capability, and durability.</font></div><div><font color=\"#000000\" face=\"Open Sans\"><br></font></div><div><font color=\"#000000\" face=\"Open Sans\">The given prices were last updated by Indus Motors on April 03, 2023 and have remained unchanged since then.</font></div><div><font color=\"#000000\" face=\"Open Sans\"><br></font></div><div><font color=\"#000000\" face=\"Open Sans\">Available exterior colors of Land Cruiser 300:</font></div><div><font color=\"#000000\" face=\"Open Sans\"><br></font></div><div><font color=\"#000000\" face=\"Open Sans\">The SUV is available in colors including Super White, White Pearl, Precious White Pearl, Dark Red Mica Metallic, Dark Blue Mica, Silver Me, Grey Metallic, Black, Avant-Garde Bronze Metallic and Attitude Black.</font></div>', 'LND-142514', 5, '/upload_files/product/Land-Cruiser-300-ZX.jpg', 1, '5'),
(7, '2023-07-04 05:07:17', '2023-07-04 05:07:17', 'Ferrari 1', 'ferrari-1', '1', 3, '25000', '30000', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&nbsp;</span>', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.&nbsp;</span>', 'fer-01-fg', 5, '/upload_files/product/ferrari.jpg', 1, '1'),
(8, '2023-07-05 07:27:01', '2023-07-05 07:28:41', 'BMW i8', 'bmw-i8', '1', 2, '30000', '35000', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'PRO-14251', 26, '/upload_files/product/bmw-i8-coupe.jpg', 1, '5');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `coach_id` text DEFAULT NULL,
  `school_id` text DEFAULT NULL,
  `sports_id` text DEFAULT NULL,
  `iq` text DEFAULT NULL,
  `ethical` text DEFAULT NULL,
  `communication` text DEFAULT NULL,
  `staff` text DEFAULT NULL,
  `individual_development` text DEFAULT NULL,
  `academics` text DEFAULT NULL,
  `rate_description` text DEFAULT NULL,
  `flag_rate_description` text DEFAULT NULL,
  `is_flag` int(11) DEFAULT 0,
  `other_q_1` text DEFAULT NULL,
  `other_q_2` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `coach_id`, `school_id`, `sports_id`, `iq`, `ethical`, `communication`, `staff`, `individual_development`, `academics`, `rate_description`, `flag_rate_description`, `is_flag`, `other_q_1`, `other_q_2`, `status`, `created_at`, `updated_at`) VALUES
(2, '7', '7', '51', '2', '2', '1', '1', '1', '5', 'Non perspiciatis ab', 'Porro ad eveniet qu', 1, '1', '0', 1, '2024-04-24 21:27:22', '2024-04-24 21:27:22'),
(3, '3', '11', '51', '1', '2', '3', '2', '3', '3', 'demo demo', 'Nee Flag Entry', 1, '1', '1', 1, '2024-04-25 22:39:12', '2024-04-25 22:39:12'),
(6, '4', '2', '51', '1', '2', '3', '4', '4', '3', 'new demo demo', 'This is bad.', 1, '1', '1', 1, '2024-05-03 00:49:07', '2024-05-03 00:49:07'),
(7, '3', '8', '51', '1', '2', '3', '3', '4', '5', 'new rating demo 2', 'New Flag', 1, '1', '1', 1, '2024-05-03 00:52:52', '2024-05-03 00:52:52'),
(8, '6', '2', '51', '1', '1', '2', '3', '4', '5', 'hello', NULL, 0, '1', '1', 1, '2024-05-18 01:58:58', '2024-05-18 01:58:58'),
(9, '6', '2', '51', '1', '1', '1', '1', '1', '1', 'Hello', NULL, 0, '1', '1', 1, '2024-05-18 02:00:23', '2024-05-18 02:00:23'),
(10, '6', '2', '51', '2', '1', '1', '1', '2', '2', 'nice', NULL, 0, '1', '1', 1, '2024-05-18 02:01:59', '2024-05-18 02:01:59'),
(11, '3', '8', '51', '2', '1', '1', '2', '1', '3', 'Ne Reviews', 'He should get 5 stars', 1, '1', '1', 1, '2024-05-18 02:17:27', '2024-05-18 02:17:27'),
(12, '2', '8', '51', '2', '3', '4', '3', '3', '3', 'Hello', 'Hello', 1, '1', '1', 1, '2024-05-23 01:41:39', '2024-05-23 01:41:39'),
(13, '2', '8', '51', '2', '3', '4', '5', '3', '2', '2nd comment', NULL, 0, '1', '1', 1, '2024-05-23 01:51:36', '2024-05-23 01:51:36'),
(14, '2', '8', '51', '3', '3', '3', '4', '4', '4', '3rd comments', NULL, 0, '1', '1', 1, '2024-05-23 01:54:54', '2024-05-23 01:54:54'),
(15, '12', '8', '51', '2', '2', '3', '3', '4', '5', '1st rating', NULL, 0, '1', '1', 1, '2024-05-23 01:57:16', '2024-05-23 01:57:16'),
(16, '13', '8', '51', '3', '3', '3', '4', '4', '4', '1st', NULL, 0, '1', '1', 1, '2024-05-23 01:58:38', '2024-05-23 01:58:38'),
(17, '13', '8', '51', '2', '2', '2', '3', '2', '3', '2nd', NULL, 0, '1', '1', 1, '2024-05-23 01:59:01', '2024-05-23 01:59:01'),
(18, '13', '8', '51', '3', '3', '4', '3', '2', '4', '3rd', NULL, 0, '1', '1', 1, '2024-05-23 01:59:21', '2024-05-23 01:59:21'),
(19, '13', '8', '51', '2', '2', '2', '3', '4', '5', '4th', NULL, 0, '1', '1', 1, '2024-05-23 01:59:43', '2024-05-23 01:59:43'),
(20, '2', '8', '51', '3', '4', '2', '3', '2', '3', 'New rate', NULL, 0, '1', '1', 1, '2024-05-29 01:53:14', '2024-05-29 01:53:14'),
(21, '14', '1', '51', '4', '2', '3', '4', '4', '3', 'demo demo', NULL, 0, '1', '1', 1, '2024-05-29 18:35:47', '2024-05-29 18:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `page_id` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `created_at`, `updated_at`, `label`, `slug`, `type`, `value`, `page_id`, `status`) VALUES
(5, '2023-06-01 22:46:59', '2023-06-05 18:27:04', 'Section 1', 'section-1', 'text', 'Section 1', '1', 1),
(6, '2023-06-01 22:59:35', '2023-06-05 18:27:28', 'Section 2', 'section-2', 'text', 'Section 2', '1', 1),
(7, '2023-06-01 23:48:48', '2023-06-01 23:48:48', 'Section 3', 'section-3', 'textarea', 'Section 3', '1', 1),
(10, '2023-06-01 23:58:59', '2023-06-05 18:27:23', 'Section 4', 'section-4', 'image', '/upload_files/pages/35.jpg', '1', 1),
(11, '2023-06-06 18:56:02', '2023-06-06 18:56:02', 'Section 1', 'section-1', 'text', 'About Us', '2', 1),
(12, '2023-06-06 22:05:59', '2023-06-06 22:53:39', 'Section 2', 'section-2', 'text', 'About Section 2', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `created_at`, `updated_at`, `size`, `status`) VALUES
(1, '2023-06-16 00:06:14', '2023-06-16 00:06:14', 'small', 1),
(2, '2023-06-16 00:06:54', '2023-06-16 00:07:15', 'medium', 1),
(3, '2023-06-16 00:07:24', '2023-06-16 00:07:24', 'large', 1),
(4, '2023-06-16 00:07:36', '2023-06-16 00:07:36', 'extra large', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `created_at`, `updated_at`, `category_id`, `name`, `slug`, `image`, `status`) VALUES
(1, '2023-06-07 20:39:55', '2023-06-07 22:35:26', 2, 'Subcategory 1', 'subcategory-1', '/upload_files/subcategory/Youtube Banner.PNG', 1),
(2, '2023-06-07 21:35:12', '2023-06-07 22:45:17', 1, 'Subcategory 2', 'subcategory-2', '/upload_files/subcategory/no_image.png', 1),
(3, '2023-06-07 22:08:16', '2023-06-08 04:14:20', 2, 'Subcategory 3', 'subcategory-3', '/upload_files/subcategory/20230321095936.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `created_at`, `updated_at`, `name`, `designation`, `description`, `image`, `status`) VALUES
(1, '2023-06-13 04:39:02', '2023-06-13 05:20:10', 'James', 'Accountant', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></p><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\"><br></span>  </p>', '/upload_files/testimonial/pr.PNG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uploadimages`
--

CREATE TABLE `uploadimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `uploaded_by_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploadimages`
--

INSERT INTO `uploadimages` (`id`, `created_at`, `updated_at`, `product`, `image`, `uploaded_by_id`, `status`) VALUES
(1, '2023-06-06 04:13:17', '2023-06-06 04:13:17', '1', '/upload_files/uploadimage/m1.jpg', NULL, 1),
(3, '2023-06-06 04:50:50', '2023-06-06 04:50:50', '1', '/upload_files/uploadimage/m2.jpg', NULL, 1),
(4, '2023-06-06 05:31:58', '2023-06-06 05:31:58', '2', '/upload_files/uploadimage/bmw1.jpg', NULL, 1),
(6, '2023-06-06 06:37:35', '2023-06-06 06:37:35', '2', '/upload_files/uploadimage/bmw2.jpeg', NULL, 1),
(7, '2023-06-06 06:39:46', '2023-06-06 06:39:46', '2', '/upload_files/uploadimage/bmw3.jpg', NULL, 1),
(8, '2023-06-06 06:46:26', '2023-06-06 06:46:26', '2', '/upload_files/uploadimage/bmw3.jpg', NULL, 1),
(9, '2023-06-06 07:57:54', '2023-06-06 07:57:54', '1', '/upload_files/uploadimage/m3.jpeg', NULL, 1),
(10, '2023-06-06 07:58:04', '2023-06-06 07:58:04', '1', '/upload_files/uploadimage/m4.jpg', NULL, 1),
(11, '2023-06-06 08:14:31', '2023-06-06 08:14:31', '3', '/upload_files/uploadimage/toyotta1.jpg', NULL, 1),
(12, '2023-06-06 08:14:44', '2023-06-06 08:14:44', '3', '/upload_files/uploadimage/toyotta2.jpg', NULL, 1),
(22, '2023-06-15 18:51:36', '2023-06-15 18:51:36', '4', '/upload_files/uploadimage/rolls_roys_1.jpg', NULL, 1),
(23, '2023-06-15 18:51:45', '2023-06-15 18:51:45', '4', '/upload_files/uploadimage/rolls_roys_2.jpg', NULL, 1),
(24, '2023-06-15 18:51:53', '2023-06-15 18:51:53', '4', '/upload_files/uploadimage/rolls_roys_3.jpg', NULL, 1),
(25, '2023-06-15 18:52:03', '2023-06-15 18:52:03', '4', '/upload_files/uploadimage/rolls_roys_4.jpg', NULL, 1),
(28, '2023-07-07 05:31:53', '2023-07-07 05:31:53', '3', '/upload_files/uploadimage/yaris.jpg', 5, 1),
(34, '2023-07-11 04:42:12', '2023-07-11 04:42:12', '8', '/upload_files/uploadimage/Land-Cruiser-300-ZX.jpg', 5, 1),
(35, '2023-07-11 04:42:43', '2023-07-11 04:42:43', '8', '/upload_files/uploadimage/Land-Cruiser-300-ZX.jpg', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'info@ratemycollage.com', NULL, '$2y$10$/CHLSi8Sd.RrJYzMqj3pIOHlUgs8fzzbA0VG3JawqIK48Xp65Cayi', 2, '/upload_files/user/Aamir_Picture-removebg-preview.png', 1, 'GKDbcCqDSDULi8acBSQXSHSOcWbpzBXNijTey7mCsiuO5kOu3RUfzh9VGzpL', '2023-05-25 18:40:08', '2023-07-11 05:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `wp_coaches`
--

CREATE TABLE `wp_coaches` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `sports_id` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `old_coach_id` text DEFAULT NULL,
  `old_school_id` text DEFAULT NULL,
  `old_sport_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `wp_coaches`
--

INSERT INTO `wp_coaches` (`id`, `name`, `school_id`, `gender_id`, `sports_id`, `status`, `old_coach_id`, `old_school_id`, `old_sport_id`, `created_at`, `updated_at`) VALUES
(2, 'David Harry', 8, 1, '51', 1, '', '', '51', '2024-04-23 20:08:40', '2024-04-24 22:00:06'),
(3, 'Jayson King', 8, 1, '51', 1, '', '', '51', '2024-04-23 20:09:51', '2024-05-09 21:38:35'),
(4, 'Kevin Leighton', 2, 1, '51', 1, '3', '1', '51', '2024-04-23 20:10:08', '2024-05-02 22:00:12'),
(5, 'Bob McKillop', 7, 1, '51', 1, '3', '7', '51', '2024-04-23 20:10:20', '2024-05-09 21:39:33'),
(6, 'Anthony Grant', 2, 1, '51', 1, NULL, NULL, NULL, '2024-04-23 20:10:35', '2024-04-23 20:10:35'),
(7, 'Nicolas', 13, 1, '51', 1, '13', '13', '51', '2024-04-24 19:22:32', '2024-04-25 22:59:03'),
(11, 'Robert Michael', 4, 1, '51', 1, NULL, NULL, NULL, '2024-04-24 23:04:05', '2024-04-24 23:04:05'),
(12, 'Joseph Charles', 8, 1, '51', 1, '', '', '51', '2024-04-24 23:06:58', '2024-04-25 22:44:49'),
(13, 'Cristopher brown', 8, 1, '51', 1, '', '', NULL, '2024-04-25 22:56:35', '2024-04-25 22:56:35'),
(14, 'Test 1', 1, 1, '51', 1, NULL, NULL, NULL, '2024-05-09 21:37:37', '2024-05-09 21:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `wp_conference`
--

CREATE TABLE `wp_conference` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_conference`
--

INSERT INTO `wp_conference` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'National Collegiate Athletic Association (NCAA)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(2, 'Ivy League', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(3, 'Big Ten Conference', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(4, 'Pac-12 Conference ', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(5, 'Southeastern Conference (SEC) ', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(6, 'Atlantic Coast Conference (ACC)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(7, 'Colonial Athletic Association (CAA)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(8, 'Big 12 Conference', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(9, 'American Athletic Conference (AAC)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(10, 'Conference USA (C-USA) ', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(11, 'Western Athletic Conference (WAC)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(12, 'Sun Belt Conference', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(13, 'Mid-American Conference (MAC) ', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(14, 'Mountain West Conference (MWC)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(15, 'Patriot League', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(16, 'Atlantic 10 Conference (A-10) ', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(17, 'Missouri Valley Conference (MVC)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(18, 'Big 12 Conference', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(19, 'American East Conference ', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43'),
(20, 'Ohio Valley Conference (OVC)', 1, '2024-04-12 23:56:43', '2024-04-12 23:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `wp_gender`
--

CREATE TABLE `wp_gender` (
  `id` int(11) NOT NULL,
  `gender` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_gender`
--

INSERT INTO `wp_gender` (`id`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Male', 1, '2024-04-12 23:21:27', '2024-04-12 23:21:27'),
(2, 'Female', 1, '2024-04-12 23:21:35', '2024-04-12 23:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `wp_schools`
--

CREATE TABLE `wp_schools` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `conference_id` text DEFAULT NULL,
  `sports_id` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `wp_schools`
--

INSERT INTO `wp_schools` (`id`, `name`, `address`, `conference_id`, `sports_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'St. Bonaventure University', '530 NE Glen Oak Ave', NULL, '51,52,53,54', 1, '2024-04-23 19:54:14', '2024-04-23 19:54:14'),
(2, 'Saint Louis University', '530 NE Glen Oak Ave', NULL, '51,52,53,54', 1, '2024-04-23 19:54:59', '2024-04-23 19:54:59'),
(3, 'Saint Joseph\'s University', '530 NE Glen Oak Ave', NULL, '51,52,53,54', 1, '2024-04-23 19:54:59', '2024-04-23 19:54:59'),
(4, 'Richmond, University Of', '2095 W Kennedy St', NULL, '51,52,53,54', 1, '2024-04-23 19:54:14', '2024-04-23 19:54:14'),
(5, 'Southern Indiana, University Of', '2095 W Kennedy St', NULL, '51,52,53,54', 1, '2024-04-23 19:54:14', '2024-04-23 19:54:14'),
(7, 'Columbia University', 'Address: 116th St & Broadway, New York, NY 10027, USA', NULL, '51,52,53,54', 1, '2024-04-24 18:54:31', '2024-04-24 18:54:31'),
(8, 'Not Assign', 'N/A', NULL, '51,52,53,54', 1, '2024-04-24 20:55:38', '2024-04-24 20:55:38'),
(11, 'Stanford University', '450 Serra Mall, Stanford, CA 94305, United States', NULL, '51,52,53,54', 1, '2024-04-24 22:53:29', '2024-04-24 22:53:29'),
(12, 'Massachusetts Institute of Technology (MIT)', '77 Massachusetts Ave, Cambridge, MA 02139, United States', NULL, '51,52,53,54', 1, '2024-04-24 23:06:13', '2024-04-24 23:06:13'),
(13, 'Grace Santos', 'plot no ### demo demo', NULL, '51,52,53', 1, '2024-04-25 22:55:57', '2024-04-25 22:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `wp_sports`
--

CREATE TABLE `wp_sports` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `wp_sports`
--

INSERT INTO `wp_sports` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(51, 'Men\'s Baseball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(52, 'Men\'s Basketball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(53, 'Men\'s Lacrosse', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(54, 'Women\'s Basketball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(55, 'Men\'s Bowling', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(56, 'Women\'s Bowling', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(57, 'Women\'s Cheerleading', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(58, 'Men\'s Crew/Rowing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(59, 'Women\'s Crew/Rowing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(60, 'Men\'s Cross Country', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(61, 'Women\'s Cross Country', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(62, 'Men\'s Fencing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(63, 'Women\'s Fencing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(64, 'Women\'s Field Hockey', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(65, 'Men\'s Football', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(66, 'Men\'s Golf', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(67, 'Women\'s Golf', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(68, 'Men\'s Gymnastics', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(69, 'Women\'s Gymnastics', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(70, 'Men\'s Ice Hockey', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(71, 'Women\'s Ice Hockey', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(73, 'Women\'s Lacrosse', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(74, 'Men\'s Rifle', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(75, 'Women\'s Rifle', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(76, 'Men\'s Skiing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(77, 'Women\'s Skiing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(78, 'Men\'s Soccer', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(79, 'Women\'s Soccer', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(80, 'Women\'s Softball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(81, 'Men\'s Swimming &amp; Diving', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(82, 'Women\'s Swimming &amp; Diving', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(83, 'Men\'s Tennis', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(84, 'Women\'s Tennis', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(85, 'Men\'s Track &amp; Field', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(86, 'Women\'s Track &amp; Field', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(87, 'Men\'s Volleyball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(88, 'Women\'s Volleyball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(89, 'Men\'s Water Polo', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(90, 'Women\'s Water Polo', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(91, 'Men\'s Wrestling', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(92, 'Women\'s Wrestling', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(93, 'Women\'s Acrobatics &amp; Tumbling, in American Southwest', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(94, 'Women\'s Acrobatics &amp; Tumbling, in Conference Carolinas', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(95, 'Women\'s Acrobatics &amp; Tumbling, in Nat\'l Collegiate Acrobatics &amp; Tumbling Assn.', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(96, 'Men\'s Archery', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(97, 'Women\'s Archery', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(98, 'Women\'s Badminton', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(99, 'Women\'s Beach Volleyball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(100, 'Men\'s Cycling/Biking', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(101, 'Women\'s Cycling/Biking', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(102, 'Women\'s Dance', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(103, 'Men\'s Equestrian', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(104, 'Women\'s Equestrian', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(105, 'Men\'s Polo', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(106, 'Women\'s Polo', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(107, 'Men\'s Rodeo', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(108, 'Women\'s Rodeo', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(109, 'Men\'s Rugby', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(110, 'Women\'s Rugby', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(111, 'Men\'s Sailing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(112, 'Women\'s Sailing', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(113, 'Men\'s Sprint Football', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(114, 'Men\'s Squash', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(115, 'Women\'s Sqaush', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(116, 'Women\'s Synchronized Swimming', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(117, 'Men\'s Triathlon', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(118, 'WoMen\'s Triathlon', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(119, 'module', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(120, 'Footer Menu', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(121, 'row', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(122, 'Men\'s Basketball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(123, 'Football', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(124, 'Women\'s Basketball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(125, 'Men\'s Soccer', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(126, 'Women\'s Soccer', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(127, 'Women\'s Volleyball', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(128, 'Men\'s Golf', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(129, 'Women\'s Golf', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(130, 'College', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(131, 'Collegiate Sports', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(132, 'Big 12', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(133, 'NCAA Football', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(134, 'ACC', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(135, 'SEC', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(136, 'Big 10', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(137, 'Pac-12', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(138, 'Championship', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(139, 'FCS', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(140, 'CFP', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(141, 'Power 5', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48'),
(142, 'Group of 5', 1, '2024-04-08 20:46:48', '2024-04-08 20:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `wp_submit_corrections`
--

CREATE TABLE `wp_submit_corrections` (
  `id` int(11) NOT NULL,
  `sport_id` text DEFAULT NULL,
  `new_coach_id` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_submit_corrections`
--

INSERT INTO `wp_submit_corrections` (`id`, `sport_id`, `new_coach_id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '51', 'John marshal', 'john.marshal@gmail.com', 1, '2024-05-29 00:51:40', '2024-05-29 00:51:40'),
(2, '52', 'John marshal', 'john.marshal@gmail.com', 1, '2024-05-29 00:57:06', '2024-05-29 00:57:06'),
(3, '53', 'hamoh', 'hamoh@mailinator.com', 1, '2024-05-29 01:14:31', '2024-05-29 01:14:31'),
(4, '53', 'John marshal', 'hamoh@mailinator.com', 1, '2024-05-29 01:40:43', '2024-05-29 01:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`id`, `email`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'telbert@rew.rew', 'Tia Elbert', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(2, 'mdhirst@gmail.com', 'Matt Hirst', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(3, 'daniellemwilliams44@gmail.com', 'Danielle Williams', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(6, 'tony.jaramillo@my.tccd.edu', 'Tony Jaramillo', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(7, 'derdrickwhite95@gmail.com', 'Derdrick White', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(8, 'CharlesSmith4@my.unt.edu', 'Charles Smith', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(9, 'ian.kayanja@pop.belmont.edu', 'Ian Kayanja', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(10, 'tforeman@rew.rew', 'Thurman Foreman', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(12, 'mijay870@gmail.com', 'JaDason Morris', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(13, 'julieann.challacombe@pop.belmont.edu', 'Julieann Challacombe', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(14, 'danieljosiahcollins@gmail.com', 'Daniel Josiah Collins', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(15, 'landinjackson@gmail.com', 'Landin Jackson', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(16, 'dylanry697@gmail.com', 'Dylan Ryan', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(17, '16lalvarez@gmail.com', 'Lucas Alvarez', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(18, 'bgadaleta@verizon.net', 'Brianna Gadaleta', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(19, 'evan.starr14@gmail.com', 'Evan Starr', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(20, 'tsenerchia22@gmail.com', 'Thomas Senerchia', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(21, 'elijahhamilton27@gmail.com', 'Elijah Hamilton', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(22, 'thedavidofowen@gmail.com', 'David Owen', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(23, 'waldhaley1@gmail.com', 'Haley Wald', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(24, 'torischutz15@gmail.com', 'Victoria Schutz', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(25, 'cjohnson7654@gmail.com', 'Chris Johnson', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(26, 'abhinaviyer05@gmail.com', 'Abhi Iyer', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(27, 'kairacabato@gmail.com', 'Kaira Cabato', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(28, 'oacevedo@su.suffolk.edu', 'Olivia Acevedo', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(29, 'christian.pasley@gmail.com', 'Christian Pasley', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40'),
(30, 'pashaosamaa@gmail.com', 'Review Manager', 1, '2024-04-08 20:27:40', '2024-04-08 20:27:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylogs`
--
ALTER TABLE `activitylogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coachchanges`
--
ALTER TABLE `coachchanges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `color` (`color`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config_flags`
--
ALTER TABLE `config_flags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `innerbanners`
--
ALTER TABLE `innerbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadimages`
--
ALTER TABLE `uploadimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wp_coaches`
--
ALTER TABLE `wp_coaches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indexes for table `wp_conference`
--
ALTER TABLE `wp_conference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_gender`
--
ALTER TABLE `wp_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_schools`
--
ALTER TABLE `wp_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_sports`
--
ALTER TABLE `wp_sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_submit_corrections`
--
ALTER TABLE `wp_submit_corrections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylogs`
--
ALTER TABLE `activitylogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coachchanges`
--
ALTER TABLE `coachchanges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `config_flags`
--
ALTER TABLE `config_flags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `innerbanners`
--
ALTER TABLE `innerbanners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uploadimages`
--
ALTER TABLE `uploadimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wp_coaches`
--
ALTER TABLE `wp_coaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wp_conference`
--
ALTER TABLE `wp_conference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wp_gender`
--
ALTER TABLE `wp_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_schools`
--
ALTER TABLE `wp_schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wp_sports`
--
ALTER TABLE `wp_sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `wp_submit_corrections`
--
ALTER TABLE `wp_submit_corrections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wp_coaches`
--
ALTER TABLE `wp_coaches`
  ADD CONSTRAINT `wp_coaches_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `wp_schools` (`id`),
  ADD CONSTRAINT `wp_coaches_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `wp_gender` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
