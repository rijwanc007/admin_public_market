-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 10:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_public_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_pricings`
--

CREATE TABLE `ads_pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads_pricings`
--

INSERT INTO `ads_pricings` (`id`, `user_id`, `date`, `title`, `description`, `approve`, `created_at`, `updated_at`) VALUES
(3, '1', '2021-12-15', '৳300 (per month)', 'If your product, Item price range is ৳1,000-20,000. Then Ads value is 300 Tk.', '1', '2021-12-15 02:29:42', '2021-12-15 02:36:05'),
(4, '1', '2021-12-15', '৳500 (per month)', 'If your product, Item price range is ৳20,000-50,000. Then Ads value is 500 Tk.', '1', '2021-12-15 02:37:55', '2021-12-15 02:44:36'),
(5, '1', '2021-12-15', '৳1,000 (per month)', 'If your product, Item price range is ৳50,000-5,00,000. Then Ads value is 1,000 Tk.', '1', '2021-12-15 02:38:36', '2021-12-15 02:44:44'),
(6, '1', '2021-12-15', '৳1,500 (per month)', 'If your product, Item price range is ৳5,00,000-50,00,000. Then Ads value is 1,500 Tk.', '0', '2021-12-15 02:39:02', '2021-12-15 02:39:02'),
(7, '1', '2021-12-15', '৳3,000 (per month)', 'your product, Item price range is ৳50,00,000-Above. Then Ads value is 3,000 Tk.', '0', '2021-12-15 02:39:27', '2021-12-15 02:39:27'),
(8, '1', '2021-12-15', '৳1,000 ( per month)', 'Business & Industry, Tour & Travels, Personal Ads & To-Let, Education, Service, Resort & Hotel, Others.', '1', '2021-12-15 02:39:49', '2021-12-15 02:44:40'),
(9, '1', '2021-12-15', '৳200 (yearly)', 'CV Upload', '0', '2021-12-15 02:40:13', '2021-12-15 02:40:13'),
(10, '1', '2021-12-15', '৳1,000 (per month)', 'Job Announcement', '1', '2021-12-15 02:40:34', '2021-12-15 02:45:30'),
(11, '1', '2021-12-15', '৳1,200 (per month)', 'Companies product branding', '0', '2021-12-15 02:41:02', '2021-12-15 02:41:02'),
(12, '1', '2021-12-15', '৳500 (per month)', 'PM Food bank & Restaurant', '0', '2021-12-15 02:41:24', '2021-12-15 02:41:24'),
(13, '1', '2021-12-15', '৳1,000 (per month) &৳ 8,000 (yearly)', 'TVC', '1', '2021-12-15 02:41:51', '2021-12-15 02:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `agriculture_agro_products`
--

CREATE TABLE `agriculture_agro_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agriculture_agro_products`
--

INSERT INTO `agriculture_agro_products` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-22', 'Lorem ipsum dolor sit', 'Lorem ', 'Lorem ', '1', 'Lorem', '2000', 'Lorem ipsum dolor sit', 'Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sitLorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sitLorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sitLorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit', '1', '[\"1214499197.jpg\"]', '0', '1', '2021-11-22 03:13:11', '2021-11-22 03:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `auto_tvs`
--

CREATE TABLE `auto_tvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto_tvs`
--

INSERT INTO `auto_tvs` (`id`, `user_id`, `date`, `video`, `approve`, `created_at`, `updated_at`) VALUES
(2, '1', '2021-12-12', '1086540322.mp4', '1', '2021-12-12 04:11:13', '2021-12-12 04:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `business_industries`
--

CREATE TABLE `business_industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_industries`
--

INSERT INTO `business_industries` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `item_type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-22', 'Reference site about Lorem Ipsum', 'Reference', 'Reference', '1', 'lorem', '15000', 'Reference site about Lorem Ipsum', 'Reference site about Lorem IpsumReference site about Lorem IpsumReference site about Lorem IpsumReference site about Lorem IpsumReference site about Lorem IpsumReference site about Lorem Ipsum', '1', '[\"1356480706.jpg\"]', '0', '1', '2021-11-22 04:07:33', '2021-11-22 04:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `company_product_brandings`
--

CREATE TABLE `company_product_brandings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_product_brandings`
--

INSERT INTO `company_product_brandings` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `item_type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-23', 'Lorem ipsum, or lipsum as it is', 'Lorem', 'Lorem', '1', 'Lorem Ipsum is simply dummy text', '15000', 'Lorem Ipsum is simply', 'Lorem ipsum, or lipsum as it is Lorem ipsum, or lipsum as it is Lorem ipsum, or lipsum as it isLorem ipsum, or lipsum as it is', '1', '[\"1311689629.jpg\"]', '0', '1', '2021-11-23 00:40:31', '2021-11-23 00:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `cv_uploads`
--

CREATE TABLE `cv_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `expected_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cv_uploads`
--

INSERT INTO `cv_uploads` (`id`, `user_id`, `date`, `first_name`, `last_name`, `email`, `phone`, `expected_salary`, `file`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(6, '1', '2021-12-07', 'Golam', 'Rabbi', 'rabbi@gmail.com', '01758152475', '20000', '448730448.pdf', '0', '1', '2021-12-07 00:02:45', '2021-12-07 01:02:06'),
(7, '1', '2021-12-11', 'test', 'test', 'test@gmail.com', '01758152475', '100', '1457270392.pdf', '0', '1', '2021-12-11 03:35:20', '2021-12-11 03:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `daily_essential_products`
--

CREATE TABLE `daily_essential_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_essential_products`
--

INSERT INTO `daily_essential_products` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `item_type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-18', 'Lorem Ipsum is simply dummy text', 'Lorem ', 'Lorem', '1', 'Lorem Ipsum is  text', '500000', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text', '1', '[\"1494486818.jpg\"]', '0', '1', '2021-11-18 00:44:07', '2021-11-18 00:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Bogura', 16, '530903914.png', '2021-12-06 23:18:24', '2021-12-06 23:18:24'),
(7, 'Dhaka', 19, '498924349.png', '2021-12-07 00:11:14', '2021-12-07 00:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(12, 'Barishal', '105884783.jpg', '2021-12-06 23:09:16', '2021-12-06 23:09:16'),
(13, 'Chittagong', '1438070377.jpg', '2021-12-06 23:09:39', '2021-12-06 23:09:39'),
(14, 'Khulna', '597642018.jpg', '2021-12-06 23:10:04', '2021-12-06 23:10:04'),
(15, 'Mymensingh', '1571013011.jpg', '2021-12-06 23:10:50', '2021-12-06 23:10:50'),
(16, 'Rajshahi', '1392025102.jpg', '2021-12-06 23:11:17', '2021-12-06 23:11:17'),
(17, 'Rangpur', '1051678807.jpg', '2021-12-06 23:11:45', '2021-12-06 23:11:45'),
(18, 'Sylhet', '1859470405.jpg', '2021-12-06 23:12:05', '2021-12-06 23:12:05'),
(19, 'Dhaka', '184048300.jpg', '2021-12-07 00:09:34', '2021-12-07 00:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `date`, `title`, `product_name`, `condition`, `item_type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(3, '1', '2021-11-22', 'Lorem ipsum, or lipsum as it', 'Lorem', '1', 'Lorem ipsum, or lipsum as it', '400', 'Lorem ipsum, or lipsum as it', 'Lorem ipsum, or lipsum as it Lorem ipsum, or lipsum as it Lorem ipsum, or lipsum as it', '1', '[\"1287581174.jpg\"]', '0', '1', '2021-11-22 04:42:13', '2021-11-22 04:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `model`, `condition`, `color`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(2, '1', '2021-11-18', 'Lorem Ipsum is simply dummy text', 'Lorem ', 'Lorem', 'Lorem', '2', 'Lorem', '5000', 'Lorem Ipsum is simply dummy text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', '[\"1505858318.png\",\"1484635437.jpeg\"]', '0', '1', '2021-11-17 23:11:55', '2021-12-06 06:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_banners`
--

CREATE TABLE `footer_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_banners`
--

INSERT INTO `footer_banners` (`id`, `user_id`, `date`, `company_name`, `title`, `description`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(5, '1', '2021-12-13', 'Lorem Ipsum', 'Lorem Ipsum', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '529049765.jpg', '0', '1', '2021-12-12 22:38:06', '2021-12-12 22:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_oil_gases`
--

CREATE TABLE `fuel_oil_gases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuel_oil_gases`
--

INSERT INTO `fuel_oil_gases` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-23', 'Lorem ipsum, or lipsum as it', 'Lorem', 'Lorem', '5000', 'Lorem ipsum, or lipsum as it', 'Lorem ipsum, or lipsum as it Lorem ipsum, or lipsum as it Lorem ipsum, or lipsum as it', '1', '[\"2056197800.jpeg\"]', '0', '1', '2021-11-22 22:07:37', '2021-12-06 06:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `garments_clothing`
--

CREATE TABLE `garments_clothing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `garments_clothing`
--

INSERT INTO `garments_clothing` (`id`, `user_id`, `date`, `title`, `product_name`, `color`, `brand`, `item_size`, `condition`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-18', 'Lorem Ipsum is simply dummy text', 'Lorem', 'White', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text', '1', '3000', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text', '1', '[\"575554601.jpg\"]', '0', '1', '2021-11-18 03:30:53', '2021-11-18 03:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `health_beauties`
--

CREATE TABLE `health_beauties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_beauties`
--

INSERT INTO `health_beauties` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `item_type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-18', 'Lorem Ipsum is simply dummy text', 'Lorem', 'Lorem Ipsum', '1', 'Lorem Ipsum is simply dummy text', '2000', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text', '1', '[\"284100820.jpg\"]', '0', '1', '2021-11-18 02:34:23', '2021-11-18 02:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `hobby_sport_babies`
--

CREATE TABLE `hobby_sport_babies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hobby_sport_babies`
--

INSERT INTO `hobby_sport_babies` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `item_type`, `price`, `color`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-18', 'Lorem Ipsum is simply dummy text', 'Lorem ', 'Lorem', '1', 'Lorem Ipsum is simply dummy text', '900', 'White', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text\r\nLorem Ipsum is simply dummy textLorem Ipsum is simply dummy text', '1', '[\"399638409.jpg\"]', '0', '1', '2021-11-18 05:48:08', '2021-11-18 05:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `home_livings`
--

CREATE TABLE `home_livings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_livings`
--

INSERT INTO `home_livings` (`id`, `user_id`, `date`, `title`, `product_name`, `item_size`, `condition`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-18', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text', '2', '500000', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text', '1', '[\"292418423.jpg\"]', '0', '1', '2021-11-17 23:56:16', '2021-11-18 00:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `left_feature_ads`
--

CREATE TABLE `left_feature_ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `left_feature_ads`
--

INSERT INTO `left_feature_ads` (`id`, `user_id`, `date`, `company_name`, `title`, `description`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(2, '1', '2021-12-13', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.', '1606802127.jpg', '0', '1', '2021-12-13 00:50:42', '2021-12-13 00:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `local_business_points`
--

CREATE TABLE `local_business_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `characteristic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `advantages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `challenges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `marketing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `contribution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sources` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `local_business_points`
--

INSERT INTO `local_business_points` (`id`, `user_id`, `date`, `title`, `characteristic`, `advantages`, `challenges`, `marketing`, `contribution`, `sources`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-23', 'Lorem ipsum, or lipsum as it is sometimes', 'Lorem ipsum, or lipsum as it is sometimes', 'Lorem ipsum, or lipsum as it is sometimes', 'Lorem ipsum, or lipsum as it is sometimes', 'Lorem ipsum, or lipsum as it is sometimes', 'Lorem ipsum, or lipsum as it is sometimes', 'Lorem ipsum, or lipsum as it is sometimes', '500000', 'Lorem ipsum, or lipsum as it is sometimes', 'Lorem ipsum, or lipsum as it is sometimes  Lorem ipsum, or lipsum as it is sometimes Lorem ipsum, or lipsum as it is sometimes', '1', '[\"218270667.jpg\"]', '0', '1', '2021-11-23 06:27:19', '2021-11-23 06:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(60, '2021_11_17_061611_create_mobiles_table', 2),
(61, '2021_11_18_041749_create_electronics_table', 3),
(62, '2021_11_18_053129_create_home_livings_table', 4),
(63, '2021_11_18_061526_create_daily_essential_products_table', 5),
(64, '2021_11_18_070338_create_health_beauties_table', 6),
(65, '2021_11_18_084626_create_garments_clothing_table', 7),
(66, '2021_11_18_103526_create_hobby_sport_babies_table', 8),
(67, '2021_11_18_115913_create_agriculture_agro_products_table', 9),
(68, '2021_11_22_091714_create_business_industries_table', 10),
(69, '2021_11_22_101504_create_education_table', 11),
(70, '2021_11_23_034524_create_fuel_oil_gases_table', 12),
(71, '2021_11_23_042932_create_pet_animals_table', 13),
(72, '2021_11_23_052516_create_pm_food_bank_restaurants_table', 14),
(73, '2021_11_23_055905_create_company_product_brandings_table', 15),
(74, '2021_11_23_065135_create_services_table', 16),
(75, '2021_11_23_091446_create_tour_travel_table', 17),
(76, '2021_11_23_115617_create_local_business_points_table', 18),
(77, '2021_11_24_033646_create_resort_hotel_communities_table', 19),
(78, '2021_11_24_041723_create_rent_to_lets_table', 20),
(79, '2021_11_24_045347_create_others_table', 21),
(80, '2021_11_24_052552_create_vehicle_transportations_table', 22),
(81, '2021_11_24_061405_create_real_state_properties_table', 23),
(82, '2021_11_24_065514_create_personal_advertisements_table', 24),
(83, '2021_11_24_101352_create_divisions_table', 25),
(84, '2021_11_24_115621_create_districts_table', 26),
(86, '2021_11_25_040816_create_cv_uploads_table', 27),
(90, '2021_11_27_035125_create_vacancy_announcements_table', 28),
(91, '2021_11_28_085305_create_subscribes_table', 29),
(92, '2021_11_30_045841_create_tvcs_table', 30),
(94, '2021_12_12_090337_create_auto_tvs_table', 31),
(95, '2021_12_12_122013_create_footer_banners_table', 32),
(98, '2021_12_12_122144_create_left_feature_ads_table', 33),
(99, '2021_12_12_122216_create_right_banners_table', 34),
(100, '2021_12_14_065225_create_top_banners_table', 35),
(101, '2021_12_15_044602_create_ads_pricings_table', 36);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charging_power` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connectivity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `processor`, `storage`, `color`, `battery`, `charging_power`, `display`, `camera`, `connectivity`, `feature`, `weight`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(3, '1', '2021-11-18', 'Vivo y20 2021 new version', 'Vivo y20', 'Vivo', '1', 'Helio P35', '64GB', 'Black', '5000mAh (TYP)', '10W', '6.51-inch', 'Front 8MP/Rear 13MP+2MP+2MP', 'Wi-Fi: 2.4GHz /5GHz, Bluetooth 5.0', 'lorem ipsum', 'Lorem Ipsum is simply', '15000', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply Lorem Ipsum is simply Lorem Ipsum is simply Lorem Ipsum is simply', '1', '[\"1795502893.png\",\"632688815.jpg\",\"646546453.jpg\"]', NULL, '1', '2021-11-17 22:05:58', '2021-11-17 22:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `user_id`, `date`, `title`, `product_name`, `condition`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(3, '1', '2021-12-07', 'Lorem ipsum, or lipsum as it is sometimes known', 'Lorem', '2', '2000', 'Lorem ipsum, or lipsum as it is sometimes known', 'Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known', '1', '[\"2028629500.jpg\"]', '0', '1', '2021-12-07 01:07:22', '2021-12-07 01:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_advertisements`
--

CREATE TABLE `personal_advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `training` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `current_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_advertisements`
--

INSERT INTO `personal_advertisements` (`id`, `user_id`, `date`, `title`, `name`, `email`, `phone`, `education`, `training`, `current_position`, `country`, `city`, `gender`, `experience`, `price`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(2, '1', '2021-11-24', 'The Lorem ipum filling text is used', 'Golam Rabbi', 'rabbi@gmail.com', '01758152475', 'The Lorem ipum filling text is used', 'The Lorem ipum filling text is used', 'The Lorem ipum filling text is used', 'Bangladesh', 'dhaka', 'male', 'The Lorem ipum filling text is used', '500000', 'The Lorem ipum filling text is used\r\nThe Lorem ipum filling text is used\r\nThe Lorem ipum filling text is used\r\nThe Lorem ipum filling text is used', '1', '[\"922001502.jpg\"]', '0', '1', '2021-11-24 03:18:06', '2021-11-24 03:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `pet_animals`
--

CREATE TABLE `pet_animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pet_animals`
--

INSERT INTO `pet_animals` (`id`, `user_id`, `date`, `title`, `product_name`, `color`, `type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(2, '1', '2021-12-07', 'Lorem ipsum, or lipsum as it is sometimes known', 'Lorem', 'Black', 'Lorem', '500000', 'Lorem ipsum, or lipsum as it is sometimes known', 'Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known', '1', '[\"165787554.jpg\"]', '0', '1', '2021-12-07 01:12:28', '2021-12-11 01:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `pm_food_bank_restaurants`
--

CREATE TABLE `pm_food_bank_restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pm_food_bank_restaurants`
--

INSERT INTO `pm_food_bank_restaurants` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-23', 'Lorem ipsum, or lipsum as it is', 'Lorem', 'Lorem', '15000', 'Lorem ipsum, or lipsum as it is', 'Lorem ipsum, or lipsum as it is Lorem ipsum, or lipsum as it is Lorem ipsum, or lipsum as it is', '1', '[\"1138086561.jpg\"]', '0', '1', '2021-11-22 23:44:23', '2021-11-22 23:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `real_state_properties`
--

CREATE TABLE `real_state_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `beds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `baths` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `land_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `land_size_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `house_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `house_size_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `real_state_properties`
--

INSERT INTO `real_state_properties` (`id`, `user_id`, `date`, `title`, `beds`, `baths`, `land_size`, `land_size_unit`, `address`, `house_size`, `house_size_unit`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 'The Lorem ipum filling text is used', '6', '2', '10', 'acres', 'Dhaka', '10', 'acres', '500000', 'Lorem ipsum, or lipsum as it is', 'The Lorem ipum filling text is used\r\nThe Lorem ipum filling text is used\r\nThe Lorem ipum filling text is used', '1', '[\"866371385.jpg\"]', '0', '1', '2021-11-24 00:47:57', '2021-11-28 01:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `rent_to_lets`
--

CREATE TABLE `rent_to_lets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `beds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `baths` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `land_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `land_size_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `house_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `house_size_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent_to_lets`
--

INSERT INTO `rent_to_lets` (`id`, `user_id`, `date`, `title`, `beds`, `baths`, `land_size`, `land_size_unit`, `address`, `house_size`, `house_size_unit`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-24', 'Lorem ipsum is a pseudo-Latin text', '6', '2', '10', 'katha', 'Paltan', '10', 'katha', '500000', 'Lorem ipsum, or lipsum as it', 'Lorem ipsum is a pseudo-Latin text Lorem ipsum is a pseudo-Latin text Lorem ipsum is a pseudo-Latin text', '1', '[\"1222088712.jpg\"]', '0', '1', '2021-11-23 22:49:22', '2021-11-23 22:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `resort_hotel_communities`
--

CREATE TABLE `resort_hotel_communities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resort_hotel_communities`
--

INSERT INTO `resort_hotel_communities` (`id`, `user_id`, `date`, `title`, `condition`, `type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-24', 'Lorem ipsum, or lipsum as it is sometimes known', 'Lorem', 'Lorem', '500000', 'Lorem ipsum, or lipsum as it is', 'Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known', '1', '[\"312333465.jpg\"]', '0', '1', '2021-11-23 22:04:31', '2021-12-11 01:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `right_banners`
--

CREATE TABLE `right_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `right_banners`
--

INSERT INTO `right_banners` (`id`, `user_id`, `date`, `company_name`, `title`, `description`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(2, '1', '2021-12-13', 'Lorem Ipsum', 'Reference site about', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown', '1468359817.jpg', '0', '1', '2021-12-13 03:17:36', '2021-12-13 03:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `date`, `title`, `product_name`, `item_type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(2, '1', '2021-11-28', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text', 'Lorem', 'Lorem ipsum, or lipsum as it', '2000', 'Lorem ipsum, or lipsum as it is some', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text\r\nLorem ipsum, or lipsum as it is sometimes known, is dummy textLorem ipsum, or lipsum as it is sometimes known, is dummy text', '1', '[\"2070120203.png\"]', '0', '1', '2021-11-28 00:37:42', '2021-12-11 01:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'rabbi@gmail.com', '2021-11-28 03:19:12', '2021-11-28 03:19:12'),
(3, 'rijwanc007@gmail.com', '2021-11-28 04:57:29', '2021-11-28 04:57:29'),
(5, 'Rubel-454@skrp.com', '2021-12-07 00:13:32', '2021-12-07 00:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `top_banners`
--

CREATE TABLE `top_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `top_banners`
--

INSERT INTO `top_banners` (`id`, `user_id`, `date`, `company_name`, `title`, `description`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-12-14', 'Lorem Ipsum', 'Lorem Ipsum', 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator. Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.', '78426787.jpg', '0', '1', '2021-12-14 03:00:00', '2021-12-14 03:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `tour_travel`
--

CREATE TABLE `tour_travel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_travel`
--

INSERT INTO `tour_travel` (`id`, `user_id`, `date`, `title`, `from`, `destination`, `condition`, `type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(3, '1', '2021-12-07', 'Lorem ipsum, or lipsum as it is sometimes known', 'Bogura', 'Dhaka', 'Lorem', 'Lorem', '400', 'Lorem ipsum, or lipsum as it is sometimes known', 'Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known Lorem ipsum, or lipsum as it is sometimes known', '1', '[\"273170261.png\"]', '0', '1', '2021-12-07 01:15:50', '2021-12-07 01:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `tvcs`
--

CREATE TABLE `tvcs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tvc_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tvcs`
--

INSERT INTO `tvcs` (`id`, `user_id`, `date`, `company_name`, `tvc_title`, `description`, `video`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(11, '1', '2021-12-07', 'Lorem Ipsum', 'Lorem ipsum, or lipsum as it is sometime', 'Lorem ipsum, or lipsum as it is sometime Lorem ipsum, or lipsum as it is sometime Lorem ipsum, or lipsum as it is sometime Lorem ipsum, or lipsum as it is sometime Lorem ipsum, or lipsum as it is sometime', '1289650011.mp4', '0', '1', '2021-12-06 23:45:49', '2021-12-06 23:45:52'),
(18, '1', '2021-12-09', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', '125700151.mp4', '0', '1', '2021-12-09 05:35:34', '2021-12-09 05:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `phone`, `address`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rijwan Chowdhury', '1317980145.jpg', 'rijwanc007@gmail.com', '01401157055', 'Bashundhara Dhaka Bangladesh', 'admin', NULL, '$2y$10$C2IJwDAdhIEJEW00Fh6LtOIxD3waITeGzc562Fb3pMhfi3ERYtTV2', NULL, '2021-03-06 00:07:40', '2021-03-20 01:03:03'),
(13, 'Mehedy Hassan', '853883206.jpg', 'mehedy@gmail.com', '01515600523', 'Dhaka', 'admin', NULL, '$2y$10$GWViUSy6FtNzzluDm00UUeM4NLfC4cMssuhgd1Ft5rQpPyPHajQ9K', NULL, '2021-12-06 05:59:22', '2021-12-06 05:59:22'),
(14, 'Feroz', '1735997513.jpg', 'reroz@gmail.com', '01731804669', 'Dhaka', 'admin', NULL, '$2y$10$GxGvxv9pSCQtAQ6yYbk.TuTkbF96Xe6cZsqJpA8fbOdJnW.ESUT/G', NULL, '2021-12-06 06:03:32', '2021-12-06 06:03:32'),
(15, 'Nadim Bhuiyan', '996350092.jpg', 'dami@gmail.com', '01401157050', 'Dhaka', 'admin', NULL, '$2y$10$CvDiUs9XkddOFFyogQeKIu93rkqtYE.ubLEK4Dq/mardXEZBAxfWi', NULL, '2021-12-06 06:08:22', '2021-12-06 06:08:22'),
(16, 'Golam Rabbi', '1714088853.jpg', 'rabbi@gmail.com', '01758152475', 'Bogura', 'admin', NULL, '$2y$10$5Zh6ks./PCLijkcIbHiCW.E50GoyXvidrY.zafkU6jpfJKi95M.W.', NULL, '2021-12-06 06:47:36', '2021-12-06 06:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy_announcements`
--

CREATE TABLE `vacancy_announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `vacancy` int(11) DEFAULT 0,
  `qualification_requirement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `employment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `workplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `salary` int(11) DEFAULT 0,
  `experience_requirement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `fresher_encouraged` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `job_context` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `responsibility_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `additional_requirements` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `compensation_other_benefits` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `perks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vacancy_announcements`
--

INSERT INTO `vacancy_announcements` (`id`, `user_id`, `date`, `company_name`, `position`, `vacancy`, `qualification_requirement`, `job_location`, `employment_status`, `workplace`, `salary`, `experience_requirement`, `fresher_encouraged`, `description`, `job_context`, `responsibility_description`, `additional_requirements`, `compensation_other_benefits`, `perks`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(4, '1', '2021-11-30', 'Lorem ipsum, or lipsum as it is sometime', 'Lorem Ipsum', 5, 'Lorem Ipsum', 'Dhaka', 'Lorem Ipsum', 'Lorem Ipsum', 10000, 'Lorem Ipsum', '1', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknow', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknow', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknow', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknow', '[\"Festival Bonus\",\"Unlimited Snacks\",\"Monthly Awards\"]', '0', '1', '2021-11-30 03:17:17', '2021-12-06 22:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_transportations`
--

CREATE TABLE `vehicle_transportations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `edition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `year_of_manufacture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `kilometers_run` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `engine_capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `segment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `wheel_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `item_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price_on_call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `approve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_transportations`
--

INSERT INTO `vehicle_transportations` (`id`, `user_id`, `date`, `title`, `product_name`, `brand`, `condition`, `model`, `edition`, `year_of_manufacture`, `kilometers_run`, `engine_capacity`, `segment`, `wheel_size`, `color`, `item_type`, `price`, `others`, `description`, `price_on_call`, `image`, `location`, `approve`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-11-24', 'Lorem ipsum is a pseudo-Latin text', 'Lorem', 'Lorem', '1', 'Lorem', 'Lorem ipsum is a pseudo-Latin text', 'Lorem ipsum is a pseudo-Latin text', '10', '150', 'Lorem ipsum is a pseudo-Latin text', '100', 'White', 'Lorem ipsum, or lipsum as it is', '3500000', 'Lorem Ipsum is simply', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1', '[\"1276665486.jpg\"]', '0', '1', '2021-11-24 00:04:37', '2021-12-06 06:16:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_pricings`
--
ALTER TABLE `ads_pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agriculture_agro_products`
--
ALTER TABLE `agriculture_agro_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_tvs`
--
ALTER TABLE `auto_tvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_industries`
--
ALTER TABLE `business_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_product_brandings`
--
ALTER TABLE `company_product_brandings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_uploads`
--
ALTER TABLE `cv_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_essential_products`
--
ALTER TABLE `daily_essential_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_banners`
--
ALTER TABLE `footer_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_oil_gases`
--
ALTER TABLE `fuel_oil_gases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garments_clothing`
--
ALTER TABLE `garments_clothing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_beauties`
--
ALTER TABLE `health_beauties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobby_sport_babies`
--
ALTER TABLE `hobby_sport_babies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_livings`
--
ALTER TABLE `home_livings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `left_feature_ads`
--
ALTER TABLE `left_feature_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_business_points`
--
ALTER TABLE `local_business_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_advertisements`
--
ALTER TABLE `personal_advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_animals`
--
ALTER TABLE `pet_animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm_food_bank_restaurants`
--
ALTER TABLE `pm_food_bank_restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_state_properties`
--
ALTER TABLE `real_state_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_to_lets`
--
ALTER TABLE `rent_to_lets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resort_hotel_communities`
--
ALTER TABLE `resort_hotel_communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `right_banners`
--
ALTER TABLE `right_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `top_banners`
--
ALTER TABLE `top_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_travel`
--
ALTER TABLE `tour_travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tvcs`
--
ALTER TABLE `tvcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vacancy_announcements`
--
ALTER TABLE `vacancy_announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_transportations`
--
ALTER TABLE `vehicle_transportations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_pricings`
--
ALTER TABLE `ads_pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `agriculture_agro_products`
--
ALTER TABLE `agriculture_agro_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auto_tvs`
--
ALTER TABLE `auto_tvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_industries`
--
ALTER TABLE `business_industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_product_brandings`
--
ALTER TABLE `company_product_brandings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cv_uploads`
--
ALTER TABLE `cv_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daily_essential_products`
--
ALTER TABLE `daily_essential_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_banners`
--
ALTER TABLE `footer_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fuel_oil_gases`
--
ALTER TABLE `fuel_oil_gases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `garments_clothing`
--
ALTER TABLE `garments_clothing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `health_beauties`
--
ALTER TABLE `health_beauties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hobby_sport_babies`
--
ALTER TABLE `hobby_sport_babies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_livings`
--
ALTER TABLE `home_livings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `left_feature_ads`
--
ALTER TABLE `left_feature_ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `local_business_points`
--
ALTER TABLE `local_business_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_advertisements`
--
ALTER TABLE `personal_advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_animals`
--
ALTER TABLE `pet_animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pm_food_bank_restaurants`
--
ALTER TABLE `pm_food_bank_restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `real_state_properties`
--
ALTER TABLE `real_state_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rent_to_lets`
--
ALTER TABLE `rent_to_lets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resort_hotel_communities`
--
ALTER TABLE `resort_hotel_communities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `right_banners`
--
ALTER TABLE `right_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `top_banners`
--
ALTER TABLE `top_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tour_travel`
--
ALTER TABLE `tour_travel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tvcs`
--
ALTER TABLE `tvcs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vacancy_announcements`
--
ALTER TABLE `vacancy_announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_transportations`
--
ALTER TABLE `vehicle_transportations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
