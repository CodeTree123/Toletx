-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 10:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toletx_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilboards`
--

CREATE TABLE `bilboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `hieght` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 22,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `building_size` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `floor` bigint(20) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `t_build` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 3,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `user_id`, `post_type`, `date`, `address`, `building_name`, `building_size`, `phone`, `floor`, `floor_size`, `road_width`, `s_charge`, `t_build`, `price`, `description`, `gas`, `water`, `electricity`, `lift`, `generator`, `parking`, `fire_exit`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(2, '6', 'Rent', '2023-01-29', 'MIRPUR 11 BUS STOP, Dhaka, Bangladesh', 'Building', '122', '01747477690', 13, '123', '122', '122', 'rcc', '123', 'cddddddddddddds', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'building2023012903014867-png', 'building2023012903014918-png', 'building2023012903014959-png', '', '', '', '', 'sdddddd', 1, 3, '2023-01-29 09:15:49', '2023-01-29 09:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `community__centers`
--

CREATE TABLE `community__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `seat` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 10,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exibution__centers`
--

CREATE TABLE `exibution__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 20,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_height` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `drainage_system` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 11,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `floor_level`, `floor_height`, `floor_size`, `road_width`, `price`, `fire_safety`, `lift`, `parking`, `drainage_system`, `gas`, `water`, `generator`, `electricity`, `ac`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '8', 'Rent', 'For rent a Factory Building', '2023-02-01', '01671399711', 'Call for details.', 'Eastern Housing Pallabi, Dhaka, Bangladesh', '5', '12', '36000', '10', '200000', 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'factory2023013003011734-jpg', 'factory2023013003011765-jpg', 'factorie-20230130153221.jpg', '', '', '', '', NULL, 1, 11, NULL, '2023-01-30 09:30:17', '2023-01-30 09:32:21');

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
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `flat_size` varchar(255) NOT NULL,
  `floor_level` bigint(20) NOT NULL,
  `bedrooms` bigint(20) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `kitchen` varchar(255) DEFAULT NULL,
  `drawing` varchar(255) DEFAULT NULL,
  `varanda` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `cable_tv` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 2,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `address`, `flat_size`, `floor_level`, `bedrooms`, `price`, `fire_exit`, `wifi`, `attached_toilet`, `kitchen`, `drawing`, `varanda`, `dining`, `lift`, `furnished`, `generator`, `hot_water`, `ac`, `cable_tv`, `gas`, `water`, `electricity`, `parking`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Want', 'flat lagbe', '2022-12-29', '01', '123', 'isydfgisdv', 'kumilla', '1325', 2, 2, '1234', 'on', 'on', '3', '1', '1', '1', '1', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2023-01-21 06:30:52', '2022-12-26 06:48:29', '2023-01-21 06:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `phone`, `package`, `company_name`, `company_address`, `massage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rafsan', 1, '3', 'sdfc', 'sdcf', 'sdf', 0, '2022-12-26 06:09:59', '2022-12-26 06:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `ghats`
--

CREATE TABLE `ghats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `y_price` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 15,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ghats`
--

INSERT INTO `ghats` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `price`, `y_price`, `toilet`, `parking`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rent', 'ghat', '1997-07-06', '01', 'Eligendi molestiae o', 'Qui possimus delect', '419', '720', 'on', NULL, 'ghat-1-20230207073830.jpg', 'ghat-2-20230207073830.jpg', 'ghat-3-20230207073830.jfif', 'ghat-4-20230207073830.webp', 'ghat-5-20230207073830.jfif', 'ghat-6-20230207073830.jfif', 'ghat-7-20230207073830.webp', 'Officia quidem fugia', 1, 15, '2023-02-07 01:38:42', '2023-02-07 01:35:52', '2023-02-07 01:38:42'),
(2, '2', 'Rent', 'ghat', '1988-02-11', '01', 'In dolor dolorum in', 'Dolorem dolores dolo', '319', '849', NULL, 'on', 'ghat2023020707022616-jpg', 'ghat2023020707022630-jpg', 'ghat2023020707022653-jfif', 'ghat2023020707022636-webp', 'ghat2023020707022624-jfif', 'ghat2023020707022674-jfif', 'ghat2023020707022650-webp', 'Eius numquam odio al', 1, 15, '2023-02-07 01:49:50', '2023-02-07 01:39:26', '2023-02-07 01:49:50'),
(3, '2', 'Rent', 'ghat 1', '2020-04-03', '01', 'Eaque ad dolor commo', 'Et est excepteur qui', '17', '360', 'on', NULL, 'ghat202302070702528-jpg', 'ghat2023020707025289-jpg', 'ghat2023020707025220-jfif', 'ghat202302070702523-webp', 'ghat2023020707025282-jfif', 'ghat2023020707025225-jfif', 'ghat2023020707025234-webp', 'Dignissimos aut pari', 1, 15, '2023-02-07 01:49:53', '2023-02-07 01:44:52', '2023-02-07 01:49:53'),
(4, '2', 'Rent', 'Harum quis qui sit q', '1975-03-04', '01', 'Incidunt tempora ea', 'Sit consequatur Est', '676', '489', 'on', 'on', 'ghat-1-2023020707024158jpg', 'ghat-2-2023020707024135jpg', 'ghat-3-202302070702418jfif', 'ghat-4-2023020707024140webp', 'ghat-5-2023020707024147jfif', 'ghat-6-2023020707024143jfif', 'ghat-7-202302070702419webp', 'Quia qui eiusmod ab', 1, 15, '2023-02-07 01:59:01', '2023-02-07 01:50:41', '2023-02-07 01:59:01'),
(5, '2', 'Rent', 'Cum architecto cumqu', '1998-10-17', '01', 'In dolore ut at plac', 'Minima amet nostrum', '209', '60', 'on', 'on', 'ghat2023020707024326.jpg', 'ghat2023020707024323.jpg', 'ghat2023020707024370.jfif', 'ghat2023020707024347.webp', 'ghat2023020707024382.jfif', 'ghat2023020707024315.jfif', 'ghat2023020707024328.webp', 'Ut assumenda quasi l', 1, 15, '2023-02-07 02:00:13', '2023-02-07 01:59:44', '2023-02-07 02:00:13'),
(6, '2', 'Rent', 'Amet fugit laborio', '1981-06-02', '01', 'In ad qui voluptas e', 'Quos obcaecati proid', '420', '990', 'on', 'on', 'ghat-1-20230207080306.jpg', 'ghat-2-20230207080306.jpg', 'ghat-3-20230207080306.jfif', 'ghat-4-20230207080306.webp', 'ghat-5-20230207080306.jfif', 'ghat-6-20230207080306.jfif', 'ghat-7-20230207080306.webp', 'Nesciunt optio aut', 1, 15, '2023-02-07 02:04:03', '2023-02-07 02:03:06', '2023-02-07 02:04:03'),
(7, '2', 'Rent', 'Id rerum aut sapien', '1991-08-08', '01', 'Fugiat ab dolore eo', 'Culpa suscipit labo', '825', '127', 'on', 'on', 'ghat-1-20230207080453.jpg', 'ghat-2-20230207080453.jpg', 'ghat-3-20230207080453.jfif', 'ghat-4-20230207080453.webp', 'ghat-5-20230207080453.jfif', 'ghat-6-20230207080453.jfif', 'ghat-7-20230207080453.webp', 'Dolores voluptate co', 1, 15, NULL, '2023-02-07 02:04:53', '2023-02-07 02:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `pool` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `spa` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 6,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `bathroom` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `fire_exit` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 5,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `land_area` varchar(255) NOT NULL,
  `land_height` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `y_price` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `drainage_system` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 13,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marketings`
--

CREATE TABLE `marketings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `s_date` varchar(255) NOT NULL,
  `e_date` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2021_12_28_100841_create_rooms_table', 1),
(11, '2021_12_28_100923_create_parking__spots_table', 1),
(12, '2021_12_28_100955_create_hotels_table', 1),
(13, '2021_12_28_101015_create_offices_table', 1),
(14, '2021_12_28_101028_create_lands_table', 1),
(15, '2021_12_28_101053_create_community__centers_table', 1),
(16, '2021_12_28_101116_create_shooting__spots_table', 1),
(17, '2021_12_28_101132_create_shops_table', 1),
(18, '2021_12_28_101146_create_factories_table', 1),
(19, '2021_12_28_101205_create_warehouses_table', 1),
(20, '2021_12_28_101217_create_ponds_table', 1),
(21, '2021_12_28_101242_create_swimming__pools_table', 1),
(22, '2021_12_28_101257_create_bilboards_table', 1),
(23, '2021_12_28_101312_create_rooftops_table', 1),
(24, '2021_12_28_101333_create_restaurants_table', 1),
(25, '2021_12_28_101555_create_hostels_table', 1),
(26, '2022_01_09_104502_create_flats_table', 1),
(27, '2022_01_18_101557_create_exibution__centers_table', 1),
(28, '2022_01_18_101623_create_play_grounds_table', 1),
(29, '2022_02_28_171755_create_phoneotps_table', 1),
(30, '2022_04_03_063920_create_ghats_table', 1),
(31, '2022_04_03_064006_create_picnic__spots_table', 1),
(32, '2022_08_08_092856_create_buildings_table', 1),
(33, '2022_11_21_070618_create_marketings_table', 1),
(34, '2022_12_11_072305_create_forms_table', 1),
(35, '2022_12_13_111134_create_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('81c983d498e2ae5b3bc2fc1d2afa8018eb87c2d1fc1ceae5aa39f4af35652716d3f03a8e2a41ea76', 2, 1, 'MyApp', '[]', 0, '2022-12-27 23:49:04', '2022-12-27 23:49:04', '2023-12-28 05:49:04'),
('a09c4e3646790c1b30af32f1f59e2a7547c1fc99f700677094e62760a0d7ea2de56c1965eaeaf433', 2, 1, 'MyApp', '[]', 0, '2022-12-27 23:47:12', '2022-12-27 23:47:12', '2023-12-28 05:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'Hntf5JiRJyHelOoSbK63f3BZfWoVZtmKjPhyt6p2', NULL, 'http://localhost', 1, 0, 0, '2022-12-27 23:44:07', '2022-12-27 23:44:07'),
(2, NULL, 'Laravel Password Grant Client', 'xZU5T3EZ6pytYpHlT5joLCT95HJ0nm9TMjuGVB8k', 'users', 'http://localhost', 0, 1, 0, '2022-12-27 23:44:07', '2022-12-27 23:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-12-27 23:44:07', '2022-12-27 23:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `s_charge` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 8,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `s_charge`, `address`, `floor_level`, `floor_size`, `road_width`, `interior_condition`, `price`, `fire_safety`, `lift`, `ac`, `parking`, `generator`, `electricity`, `gas`, `water`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '3', 'Rent', 'Office space for Bank/NGO', '2023-02-01', '01818760049', 'Looking for a smart company who wants to take total floor.', '8000', 'Road no. 11, Banany, Dhaka', '7', '1600', '20', 'moderate', '75000', NULL, 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'office2023012210010660-jpg', 'office2023012210010760-jpg', 'office202301221001079-jpg', '', '', '', '', NULL, 1, 8, NULL, '2023-01-22 04:43:07', '2023-01-22 04:43:07'),
(2, '2', 'Rent', 'office hello', '2023-01-25', '01', 'asdfgsdfg', '123', 'Square Hospitals Limited, Panthapath, Dhaka, Bangladesh', '14', '123', '123', 'moderate', '123', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'office2023012510012349-webp', 'office2023012510012387-jpg', 'office2023012510012393-jpg', 'office2023012510012390-jpg', 'office2023012510012315-jfif', 'office202301251001233-webp', 'office2023012510012344-jfif', 'xngsfh', 1, 8, '2023-01-25 04:03:07', '2023-01-25 04:02:23', '2023-01-25 04:03:07'),
(3, '2', 'Rent', 'fas', '2023-01-26', '01', 'dfgdf', '324', 'dhaka', '11', '23', '23', 'moderate', '235', NULL, NULL, NULL, NULL, NULL, 'on', 'on', NULL, 'office2023012604012493-jpeg', 'office2023012604012562-jpg', 'office2023012604012578-jpg', 'office20230126040125100-jpeg', 'office2023012604012519-jpeg', 'office2023012604012598-jpg', 'office2023012604012574-jpg', 'mhgc', 1, 8, '2023-01-26 13:11:24', '2023-01-26 10:59:25', '2023-01-26 13:11:24'),
(4, '4', 'Rent', 'Small Office', '2023-01-27', '01710070606', 'Will be given rent from next month.', '1000', 'CODETREE, Road-13, Dhaka, Bangladesh', '2', '1200', '20', 'moderate', '12000', NULL, 'on', NULL, 'on', NULL, 'on', 'on', 'on', 'office2023012607011917-jpeg', '', '', '', '', '', '', NULL, 1, 8, NULL, '2023-01-26 13:23:20', '2023-01-26 13:23:20'),
(5, '6', 'Want', 'Office Vara hobe', '2023-02-01', '01747477690', 'vxzzzzzzzzzzzzz c', '134', 'Mirpur', '10', '123', '12', 'good', '12333', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 8, NULL, '2023-01-29 02:51:56', '2023-01-29 02:51:56'),
(6, '5', 'Rent', 'Small office for Startup company!', '2023-03-01', '01748669524', 'Small office for Startup company! Contract will be 2 years (minimum).', '2000', 'Gulshan 1, Dhaka.', '5', '250', '40', 'good', '12000', NULL, 'on', NULL, NULL, 'on', 'on', NULL, 'on', 'office-20230202104514.jpg', 'office-20230202111506.jpg', 'office-20230202111506.jpg', 'office-20230202111506.jpg', '', '', '', 'safdfvsdgv', 1, 8, NULL, '2023-02-02 03:53:17', '2023-02-02 05:15:06'),
(7, '2', 'Rent', 'Fugiat sit delectus', '1983-08-11', '01', 'Aut est tempor elit', '80', 'Aut quos dolorem off', '2', '18', '5', 'good', '207', 'on', NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'office2023020211024010-jpg', 'office-202302021753032.jpg', 'office-202302021753033.jpg', 'office-20230202174634.jpg', '', '', '', 'Qui cillum laudantiu', 1, 8, '2023-02-05 13:12:13', '2023-02-02 05:17:40', '2023-02-05 13:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `parking__spots`
--

CREATE TABLE `parking__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_height` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 4,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phoneotps`
--

CREATE TABLE `phoneotps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `isverified` tinyint(1) NOT NULL DEFAULT 0,
  `otp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phoneotps`
--

INSERT INTO `phoneotps` (`id`, `phone_number`, `isverified`, `otp`, `created_at`, `updated_at`) VALUES
(1, '01777074302', 1, '', '2022-12-27 07:31:16', '2023-01-21 06:28:18'),
(2, '01747477690', 1, '', '2022-12-27 23:47:11', '2023-01-29 02:49:05'),
(3, '123', 0, '9068', '2023-01-19 01:28:39', '2023-01-19 01:28:39'),
(4, '4235', 0, '9389', '2023-01-19 01:29:12', '2023-01-19 01:29:12'),
(6, '01818760049', 1, '', '2023-01-21 08:33:13', '2023-01-21 08:33:49'),
(7, '1710070606', 0, '5684', '2023-01-26 13:15:13', '2023-01-26 13:16:37'),
(8, '01710070606', 1, '', '2023-01-26 13:17:28', '2023-01-26 13:17:44'),
(9, '01748669524', 1, '', '2023-01-29 02:09:28', '2023-01-29 02:09:59'),
(10, '01715421545', 1, '', '2023-01-29 08:47:10', '2023-01-29 08:50:13'),
(11, '01671399711', 1, '', '2023-01-30 09:06:00', '2023-01-30 09:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `picnic__spots`
--

CREATE TABLE `picnic__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `land_area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 19,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `play_grounds`
--

CREATE TABLE `play_grounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 17,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ponds`
--

CREATE TABLE `ponds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `water_level` varchar(255) NOT NULL,
  `pond_area` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `y_price` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 14,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `mobile`, `email`, `topic`, `description`, `created_at`, `updated_at`) VALUES
(1, 'rsfs', '124', 'hgas@gmail.com', 'complain', 'sjdcvazdcv', '2022-12-26 06:53:04', '2022-12-26 06:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `resort_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `spa` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `swimmingpool` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 7,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `user_id`, `post_type`, `date`, `phone`, `s_charge`, `description`, `resort_name`, `address`, `room_type`, `price`, `wifi`, `attached_toilet`, `generator`, `lift`, `hot_water`, `laundry`, `ac`, `spa`, `parking`, `dining`, `gym`, `sports`, `swimmingpool`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rent', '1981-12-26', '01', '22', 'Dolor quos eos quos', 'Resort', 'Adipisicing laboris', 'Bungalow', '171', NULL, NULL, NULL, 'on', 'on', NULL, NULL, 'on', 'on', NULL, NULL, 'on', 'on', 'resturent2023010507014815-jpg', 'resturent2023010507014976-jpg', 'resturent2023010507014987-jpg', 'resturent2023010507014986-jpg', 'resturent202301050701491-jpg', 'resturent2023010507014970-jpg', 'resturent2023010507014929-jpg', 'Ea qui ipsa blandit', 1, 7, '2023-01-21 06:30:55', '2023-01-05 13:40:49', '2023-01-21 06:30:55'),
(2, '3', 'Rent', '2023-02-04', '01818760049', '00', 'Call for more details!', 'Bangla Ghor', 'Sreemangal Government College, College Road, Sreemangal, Bangladesh', 'coattage', '3000', 'on', 'on', 'on', NULL, 'on', NULL, 'on', NULL, 'on', 'on', NULL, NULL, NULL, 'resturent2023020308023429-jpg', 'resturent2023020308023425-jpg', 'resturent2023020308023494-jpg', 'resturent2023020308023487-jpg', '', '', '', 'sgdzethsrtj', 1, 7, '2023-02-05 12:20:14', '2023-02-03 02:40:34', '2023-02-05 12:20:14'),
(3, '3', 'Rent', '2023-03-01', '01818760049', '00', NULL, 'Bangla Ghor', 'Dinajpur, Rudropur', 'coattage', '3000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, 1, 7, '2023-02-05 12:19:52', '2023-02-05 12:19:16', '2023-02-05 12:19:52'),
(4, '3', 'Rent', '2023-03-01', '01818760049', '00', 'Bangla Ghor, 2 storied, 3 room each floor.', 'Bangla Ghor', 'Rudropur, Dinajpur.', 'coattage', '3000', 'on', 'on', 'on', NULL, NULL, NULL, 'on', NULL, 'on', 'on', NULL, NULL, NULL, 'resturent2023020506023137-jpg', 'restuarant-2-20230205190620.jpg', 'resturent2023020506023176-jpg', 'resturent2023020506023181-jpg', '', '', '', 'zdfcsdgbdshn', 1, 7, NULL, '2023-02-05 12:23:31', '2023-02-05 13:06:20'),
(5, '2', 'Rent', '2023-02-06', '01', '123', 'dafzaf', 'resvbvhn', 'Dhaka New Market, Mirpur Road, Dhaka, Bangladesh', 'Bungalow', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'on', NULL, 'on', NULL, 'resturent2023020506022135-png', 'resturent2023020506022187-png', 'resturent2023020506022119-png', 'resturent2023020506022162-png', 'resturent2023020506022195-png', '', '', 'zcdz', 1, 7, '2023-02-05 13:12:16', '2023-02-05 12:40:22', '2023-02-05 13:12:16'),
(6, '2', 'Rent', '2015-08-16', '01', '59', 'Nostrud reprehenderi', 'Rama Herrera', 'Consequatur est it', 'coattage', '238', NULL, NULL, 'on', 'on', 'on', NULL, 'on', 'on', NULL, 'on', NULL, NULL, NULL, 'restuarant-1-20230206114301.webp', 'restuarant-2-20230206114301.jfif', 'resturent22023020611023384-jpg', 'resturent32023020611023350-jpg', 'resturent4202302061102331-jpg', 'resturent52023020611023472-jpg', 'resturent62023020611023529-jpg', 'Et ea aliquid ea mai', 1, 7, '2023-02-06 05:43:19', '2023-02-06 05:41:35', '2023-02-06 05:43:19'),
(7, '2', 'Rent', '2020-08-19', '01', '62', 'Dignissimos nesciunt', 'Ira Key', 'Autem officia sapien', 'Bungalow', '813', NULL, NULL, 'on', NULL, NULL, 'on', 'on', NULL, NULL, 'on', NULL, NULL, NULL, 'resturent2023020611022963-jpg', 'resturent12023020611022958-webp', 'resturent22023020611022986-jpg', 'resturent32023020611022964-jpg', 'resturent42023020611022996-jfif', 'resturent52023020611022921-jpg', 'resturent62023020611022918-jpg', 'Dolore velit culpa', 1, 7, '2023-02-06 05:47:22', '2023-02-06 05:44:29', '2023-02-06 05:47:22'),
(8, '2', 'Rent', '1982-01-02', '01', '79', 'At enim porro veniam', 'Howard Parks', 'Iste eaque nisi ipsu', 'Bungalow', '817', NULL, NULL, NULL, 'on', 'on', 'on', 'on', 'on', NULL, 'on', NULL, 'on', 'on', 'resturent2023020611022946-jpg', 'resturent-1-2023020611022923-jpg', 'resturent-2-2023020611022975-jfif', 'resturent-3-2023020611022923-webp', 'resturent-4-202302061102294-jfif', 'resturent-5-2023020611022931-jfif', 'resturent-6-2023020611022911-webp', 'Voluptatibus nihil l', 1, 7, '2023-02-06 06:01:12', '2023-02-06 05:57:30', '2023-02-06 06:01:12'),
(9, '2', 'Rent', '1979-11-17', '01', '3', 'Tempor unde providen', 'Tarik Hopkins', 'Voluptatibus dolorib', 'Villa', '225', 'on', 'on', 'on', NULL, NULL, 'on', 'on', 'on', NULL, NULL, 'on', NULL, 'on', 'resturent-8-2023020612025212-jpg', 'resturent-1-2023020612025247-jpg', 'resturent-2-2023020612025277-jfif', 'resturent-3-2023020612025216-webp', 'resturent-4-2023020612025286-jfif', 'resturent-5-2023020612025247-jfif', 'resturent-6-2023020612025258-webp', 'Nisi quia dolor hic', 1, 7, '2023-02-07 01:49:56', '2023-02-06 06:01:53', '2023-02-07 01:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `rooftops`
--

CREATE TABLE `rooftops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `p_protection` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 21,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `s_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `guest_count` bigint(20) UNSIGNED DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `attached_toilet` varchar(255) DEFAULT NULL,
  `varanda` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `furnished` varchar(255) DEFAULT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `cable_tv` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `address`, `room_size`, `price`, `guest_count`, `wifi`, `attached_toilet`, `varanda`, `gas`, `water`, `electricity`, `lift`, `furnished`, `hot_water`, `ac`, `cable_tv`, `parking`, `generator`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Rent', 'room lagbe', '2022-12-27', '01', '200', 'ajckhvkahc', 'pabna', '123', '500', 5, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'room2022122612120338-jpg', '', '', '', '', '', '', NULL, 1, 1, '2022-12-26 06:32:50', '2022-12-26 06:32:03', '2022-12-26 06:32:50'),
(2, '2', 'Rent', 'dailam ekta', '2022-12-27', '01', '200', 'jdcgdsjc', 'pabna', '100', '500', 2, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'room-20230104114320.jpg', NULL, NULL, NULL, NULL, NULL, 'room-20230104112426.jpg', 'https://www.youtube.com/', 1, 1, '2023-01-21 06:30:48', '2022-12-26 06:35:21', '2023-01-21 06:30:48'),
(3, '2', 'Rent', 'Akeem Mccarty', '1984-12-29', '01', '38', 'Consequatur qui atq', 'Dhaka New Market, Mirpur Road, Dhaka, Bangladesh', 'Minus id ut sed omn', '250', 41, 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', 'on', 'on', NULL, 'on', NULL, 'room2023012112015559-jpg', '', '', '', '', '', '', 'Ipsum vel optio rep', 1, 1, '2023-01-21 06:32:12', '2023-01-21 06:31:55', '2023-01-21 06:32:12'),
(4, '2', 'Rent', 'Melyssa Kemp', '1996-01-10', '01', '25', 'Ut dolor quos reicie', 'Doloribus quia et fu', 'Incididunt voluptate', '122', 57, NULL, NULL, NULL, NULL, 'on', NULL, 'on', 'on', 'on', NULL, NULL, NULL, 'on', 'room2023020611022749-jpg', 'room2023020611022744-jpg', 'room2023020611022726-jfif', 'room2023020611022776-webp', 'room2023020611022872-jfif', 'room2023020611022897-jfif', 'room2023020611022871-webp', 'Nostrud sint libero', 1, 1, '2023-02-06 06:01:10', '2023-02-06 05:58:28', '2023-02-06 06:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `shooting__spots`
--

CREATE TABLE `shooting__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 18,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 9,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `swimming__pools`
--

CREATE TABLE `swimming__pools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `shed` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `change_room` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `toilet` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 16,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `admin_verify` varchar(255) NOT NULL DEFAULT '0',
  `n_photo1` varchar(255) DEFAULT NULL,
  `n_photo2` varchar(255) DEFAULT NULL,
  `fav_qt1` varchar(255) DEFAULT NULL,
  `fav_ans1` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `otp` int(11) DEFAULT NULL,
  `terms` int(11) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `phone`, `photo`, `email`, `nationality`, `father_name`, `mother_name`, `address`, `google_id`, `facebook_id`, `date_of_birth`, `gender`, `admin_verify`, `n_photo1`, `n_photo2`, `fav_qt1`, `fav_ans1`, `email_verified_at`, `password`, `role_id`, `otp`, `terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', '017', NULL, 'toletx@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '10/04/1986', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$Dz6WHWUdMUaT69ff.gLMBu01bualY3HHpSWpePv6wC..jNa5hwYQy', 1, NULL, NULL, NULL, '2022-12-26 05:51:39', '2022-12-26 05:51:39'),
(2, 'codetree-1234', 'Rafsan', '01', '2.jfif', 'rafsan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1986-10-04', 'Male', '1', NULL, NULL, NULL, NULL, NULL, '$2y$10$veQyRpCctGk7kZoDxsIj1.6aLwqqeGDApCoQ5/jrYWcLS/ubB2Ebm', 2, NULL, NULL, NULL, '2022-12-26 05:51:39', '2023-01-30 03:00:25'),
(3, 'Amir-21012023-3', 'Amir', '01818760049', '202301211435Amir Profile Pic.jpg', NULL, NULL, NULL, NULL, 'Section 10, Mirpur, Dhaka', NULL, NULL, '1999-06-10', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$wolS4wqYY.Y7uQoE9in9OuPuRo4CEAP/Apv2fJnRWb/coTXs5BXca', 2, NULL, 1, NULL, '2023-01-21 08:35:30', '2023-01-21 08:35:30'),
(4, 'Shah Razi Siddiqui-26012023-4', 'Shah Razi Siddiqui', '01710070606', NULL, 'razi@codetreebd.com', 'Bangladeshi', NULL, NULL, 'House 06 (Ground Floor), Road 30, Sector 07, Uttara Model Town, Dhaka-1230, Bangladesh.', NULL, NULL, '1991-12-30', 'Male', '0', '202301261920816661C7-CD79-4A4A-A163-F6AA5FFC20EB.jpeg', '2023012619204F973E31-598F-4A0C-8ECC-F4902AF29D6D.jpeg', NULL, NULL, NULL, '$2y$10$CGSc/SAlqgcdA5Fbi.T6BOArUYKjH.jev9J9jxwplmhl3sp77c/Qq', 2, NULL, 1, NULL, '2023-01-26 13:20:46', '2023-01-26 13:20:46'),
(5, 'Sharif Ahmed-29012023-5', 'Sharif Ahmed', '01748669524', '202301290816Sharif Ahmed.jpg', NULL, 'Bangladeshi', 'Jalal Ahmed', 'Salma Sultana', 'Mirpur 10, Dhaka', NULL, NULL, '2000-02-01', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$BXabzVweIkE/2LGUjO76yOHrmWJLSEkw9.JNdOY8DJ/x6d0QcU/zG', 2, NULL, 1, NULL, '2023-01-29 02:16:07', '2023-01-29 02:16:07'),
(6, 'faruk-29012023-6', 'faruk', '01747477690', '6.png', 'mofv14gci@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2009-01-29', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$CfDQ80DlQxa3HfPpQ7CwbebhDG4ejXxDH9QqeWzVvWqzc91VZtqs.', 2, NULL, 1, NULL, '2023-01-29 02:50:21', '2023-01-30 03:04:41'),
(7, 'jcl786-29012023-7', 'jcl786', '01715421545', '7.jpg', 'jcl786@gmail.com', NULL, NULL, NULL, 'Mohammadpur Town Hall Market, Asad Avenue, Dhaka, Bangladesh', NULL, NULL, '1980-09-10', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$qOUPuKEZoWBMKEL3oGc4H.fLQXUG1CgIhRfcmW7KmtTs.hqJYIcXa', 2, NULL, 1, NULL, '2023-01-29 08:52:03', '2023-01-29 11:23:42'),
(8, 'Shaon-30012023-8', 'Shaon', '01671399711', '8.JPG', 'shaon.rajbari@gmail.com', 'Bangledeshi', 'Abdul Hye Siddiqi', 'Shakera Khanam', 'Mirpur 13 Central Masjid, Road No 6, Dhaka, Bangladesh', NULL, NULL, '1986-12-25', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$xsfPHqFZ0utXcxl8xS7wXuOYBMmS8OsVldK32IQtqTNCWT1gWVjx.', 2, NULL, 1, NULL, '2023-01-30 09:10:08', '2023-01-30 09:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `building_condition` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `fire_safety` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `drainage_system` varchar(255) DEFAULT NULL,
  `gas` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `photo5` varchar(255) DEFAULT NULL,
  `photo6` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `table_api` bigint(20) NOT NULL DEFAULT 12,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilboards`
--
ALTER TABLE `bilboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community__centers`
--
ALTER TABLE `community__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghats`
--
ALTER TABLE `ghats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketings`
--
ALTER TABLE `marketings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking__spots`
--
ALTER TABLE `parking__spots`
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
-- Indexes for table `phoneotps`
--
ALTER TABLE `phoneotps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picnic__spots`
--
ALTER TABLE `picnic__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `play_grounds`
--
ALTER TABLE `play_grounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponds`
--
ALTER TABLE `ponds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooftops`
--
ALTER TABLE `rooftops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilboards`
--
ALTER TABLE `bilboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `community__centers`
--
ALTER TABLE `community__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exibution__centers`
--
ALTER TABLE `exibution__centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ghats`
--
ALTER TABLE `ghats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketings`
--
ALTER TABLE `marketings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parking__spots`
--
ALTER TABLE `parking__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phoneotps`
--
ALTER TABLE `phoneotps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `picnic__spots`
--
ALTER TABLE `picnic__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `play_grounds`
--
ALTER TABLE `play_grounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ponds`
--
ALTER TABLE `ponds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooftops`
--
ALTER TABLE `rooftops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
