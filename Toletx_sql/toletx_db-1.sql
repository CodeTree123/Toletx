-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 11:38 AM
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
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `size` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
  `s_charge` bigint(20) NOT NULL,
  `s_per_charge` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `building_size` varchar(255) NOT NULL,
  `floor` bigint(20) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `t_build` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `community__centers`
--

CREATE TABLE `community__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `s_charge` bigint(20) NOT NULL,
  `s_per_price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exibution__centers`
--

CREATE TABLE `exibution__centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_height` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `s_charge` bigint(20) NOT NULL,
  `s_per_charge` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `flat_size` varchar(255) NOT NULL,
  `floor_level` bigint(20) NOT NULL,
  `bedrooms` bigint(20) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `ghats`
--

CREATE TABLE `ghats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `s_charge` bigint(20) NOT NULL,
  `s_per_price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
  `s_charge` bigint(20) NOT NULL,
  `s_per_price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `bathroom` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `room_type` varchar(255) NOT NULL,
  `hot_water` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `ac` varchar(255) DEFAULT NULL,
  `laundry` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `sports` varchar(255) DEFAULT NULL,
  `dining` varchar(255) DEFAULT NULL,
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
  `table_api` bigint(20) NOT NULL DEFAULT 5,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `user_id`, `post_type`, `post_title`, `date`, `phone`, `price`, `per_price`, `s_charge`, `s_per_price`, `description`, `hotel_name`, `location`, `bathroom`, `wifi`, `lift`, `room_type`, `hot_water`, `generator`, `parking`, `ac`, `laundry`, `gym`, `sports`, `dining`, `fire_exit`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Dolor repudiandae qu', '2023-03-23', 1, 597, 'day', 8, 'Choose Service Type', 'Officiis obcaecati v', 'Alec Duke', 'Dolore blanditiis in', 'on', 'on', 'on', 'Presidential Suite', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'hotel-1-20230323082550.jpg', 'hotel-2-20230323082550.jpg', 'hotel-3-20230323082550.jfif', 'hotel-4-20230323082550.webp', 'hotel-5-20230323082550.jfif', 'hotel-6-20230323082550.jfif', 'hotel-7-20230323082550.webp', 'Similique est volupt', 1, 5, '2023-03-23 02:25:50', '2023-03-23 02:25:50'),
(2, 2, 'Want', 'Hic natus eu non acc', '2023-03-23', 1, 347, 'day', 46, 'week', 'Cum ad laborum quia', 'Darrel Lott', 'Reprehenderit ducimu', NULL, 'on', 'on', 'Presidential Suite', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 5, '2023-03-23 02:26:09', '2023-03-23 02:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `land_area` varchar(255) NOT NULL,
  `land_height` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `land_area`, `land_height`, `road_width`, `price`, `per_price`, `electricity`, `gas`, `water`, `drainage_system`, `parking`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Ut laudantium exerc', '2023-03-23', 1, 'Molestiae sint aperi', 'Vel sapiente placeat', 'Quia fugiat totam oc', 'Tempor tempor sed es', 'Delectus vel ut qua', 42, 'day', 'on', 'on', 'on', 'on', 'on', 'land-1-20230323085742.jpg', 'land-2-20230323085742.jpg', 'land-3-20230323085742.jfif', 'land-4-20230323085742.webp', 'land-5-20230323085742.jfif', 'land-6-20230323085742.jfif', 'land-7-20230323085742.webp', 'Qui doloremque dolor', 1, 13, '2023-03-23 02:57:42', '2023-03-23 02:57:42'),
(2, 2, 'Want', 'Quae et tempore inv', '2023-03-23', 1, 'Quis rerum porro dol', 'In aut suscipit est', 'Voluptatem fugit vo', 'Dolorem consectetur', 'Voluptate quod fugit', 709, 'night', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 13, '2023-03-23 02:58:00', '2023-03-23 02:58:00');

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
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `s_charge` bigint(20) NOT NULL,
  `s_per_price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `interior_condition` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `s_charge`, `s_per_price`, `address`, `floor_level`, `floor_size`, `road_width`, `interior_condition`, `price`, `per_price`, `fire_safety`, `lift`, `ac`, `parking`, `generator`, `electricity`, `gas`, `water`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Saepe aut molestiae', '2023-03-23', 1, 'Sed do quis id accus', 33, 'year', 'Soluta voluptate sap', '15', 'In unde quam ex ut e', 'Ipsum odit ut aperia', 'good', 673, 'night', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'office-1-20230323091618.jpg', 'office-2-20230323091618.jpg', 'office-3-20230323091618.jfif', 'office-4-20230323091618.webp', 'office-5-20230323091618.jfif', 'office-6-20230323091618.jfif', 'office-7-20230323091618.webp', 'Commodo praesentium', 1, 8, '2023-03-23 03:16:18', '2023-03-23 03:16:18'),
(2, 2, 'Want', 'Nostrum voluptates u', '2023-03-23', 1, 'Magna ut illo et dol', 49, 'week', 'Ipsum porro minus t', '6', 'Facere odit sint omn', 'Magna et velit in si', 'moderate', 294, 'day', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 8, '2023-03-23 03:20:28', '2023-03-23 03:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `parking__spots`
--

CREATE TABLE `parking__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_height` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking__spots`
--

INSERT INTO `parking__spots` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `address`, `description`, `price`, `per_price`, `floor_level`, `floor_height`, `vehicle_type`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Jeanette Dotson', '2023-03-23', 1, 'Neque sequi cupidata', 'Molestias ad consequ', 271, 'week', 'Ground', 'Pariatur Nemo in de', 'Privet car', 'garage-1-20230323092526.jpg', 'garage-2-20230323092526.jpg', 'garage-3-20230323092526.jfif', 'garage-4-20230323092526.webp', 'garage-5-20230323092526.jfif', 'garage-6-20230323092526.jfif', 'garage-7-20230323092526.webp', 'Eligendi qui qui exp', 1, 4, '2023-03-23 03:25:26', '2023-03-23 03:25:26'),
(2, 2, 'Want', 'Ruth Gaines', '2023-03-23', 1, 'Architecto laboris r', 'Et asperiores quibus', 273, 'week', 'lavel 1', 'Quis ut modi aut ver', 'Motor bike', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 4, '2023-03-23 03:25:36', '2023-03-23 03:25:36');

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

-- --------------------------------------------------------

--
-- Table structure for table `picnic__spots`
--

CREATE TABLE `picnic__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `land_area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `picnic__spots`
--

INSERT INTO `picnic__spots` (`id`, `user_id`, `post_type`, `title`, `c_name`, `date`, `phone`, `description`, `land_area`, `address`, `price`, `per_price`, `electricity`, `gas`, `water`, `dining`, `shed`, `toilet`, `lift`, `parking`, `generator`, `change_room`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Ipsum iste velit nis', 'Jaquelyn Decker', '2023-03-23', 1, 'Consequatur rerum ma', 'Eiusmod voluptas inc', 'Est aperiam quasi re', 409, 'Choose Rent Type', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'picnic-1-20230323093542.jpg', 'picnic-2-20230323093542.jpg', 'picnic-3-20230323093542.jfif', 'picnic-4-20230323093542.webp', 'picnic-5-20230323093542.jfif', 'picnic-6-20230323093542.jfif', 'picnic-7-20230323093542.webp', 'Soluta iusto nemo ve', 1, 19, '2023-03-23 03:35:42', '2023-03-23 03:35:42'),
(2, 2, 'Rent', 'Voluptas eaque irure', 'Genevieve Parrish', '2023-03-23', 1, 'Voluptate nisi aut e', 'Et sit culpa tempori', 'Labore voluptatem O', 357, 'Choose Rent Type', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'picnic-1-20230323094010.jpg', 'picnic-2-20230323094010.jpg', 'picnic-3-20230323094010.jfif', 'picnic-4-20230323094010.webp', 'picnic-5-20230323094010.jfif', 'picnic-6-20230323094010.jfif', 'picnic-7-20230323094010.webp', 'Eos quo iure perspi', 1, 19, '2023-03-23 03:40:10', '2023-03-23 03:40:10'),
(3, 2, 'Want', 'Qui velit dolore ex', 'Helen Padilla', '2023-03-23', 1, 'Officia deserunt eiu', 'Maxime esse dolorib', 'Voluptatem quisquam', 528, 'night shift', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 19, '2023-03-23 03:40:24', '2023-03-23 03:40:24'),
(4, 2, 'Rent', 'Eos sed harum omnis', 'Whoopi Coffey', '2023-03-23', 1, 'Et temporibus tempor', 'A veniam porro est', 'Odit saepe Nam eveni', 774, 'hour', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'picnic-1-20230323094440.jpg', 'picnic-2-20230323094440.jpg', 'picnic-3-20230323094440.jfif', 'picnic-4-20230323094440.webp', 'picnic-5-20230323094440.jfif', 'picnic-6-20230323094440.jfif', 'picnic-7-20230323094440.webp', 'Impedit quia conseq', 1, 19, '2023-03-23 03:44:40', '2023-03-23 03:44:40'),
(5, 2, 'Want', 'Officiis assumenda e', 'Taylor Chambers', '2023-03-23', 1, 'Quibusdam labore ut', 'Cupiditate ex praese', 'At placeat magnam i', 228, 'hour', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 19, '2023-03-23 03:44:53', '2023-03-23 03:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `play_grounds`
--

CREATE TABLE `play_grounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `play_grounds`
--

INSERT INTO `play_grounds` (`id`, `user_id`, `post_type`, `title`, `c_name`, `date`, `phone`, `description`, `address`, `area`, `price`, `per_price`, `shed`, `toilet`, `change_room`, `parking`, `gym`, `generator`, `sports`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Do sapiente natus re', 'Lillith Walls', '2023-03-23', 1, 'Vitae quibusdam offi', 'Quo fuga In nobis q', 'Incididunt nisi sunt', 901, 'night shift', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'playground-1-20230323094558.jpg', 'playground-2-20230323094558.jpg', 'playground-3-20230323094558.jfif', 'playground-4-20230323094558.webp', 'playground-5-20230323094558.jfif', 'playground-6-20230323094558.jfif', 'playground-7-20230323094558.webp', 'Eum atque tempor qui', 1, 17, '2023-03-23 03:45:58', '2023-03-23 03:45:58'),
(2, 2, 'Want', 'Nobis mollit est sin', 'Lucas Rich', '2023-03-23', 1, 'Aliquid laboriosam', 'Fuga Dolorem fuga', 'Veniam unde quis qu', 662, 'full day', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 17, '2023-03-23 03:46:06', '2023-03-23 03:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `ponds`
--

CREATE TABLE `ponds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `water_level` varchar(255) NOT NULL,
  `pond_area` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ponds`
--

INSERT INTO `ponds` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `road_width`, `water_level`, `pond_area`, `price`, `per_price`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Harum dolor nostrum', '2023-03-23', 1, 'Porro perspiciatis', 'Debitis temporibus t', 'Aut ad aute enim in', 'Numquam et exercitat', 'Maxime pariatur Aut', 841, 'week', 'pond-1-20230323095142.jpg', 'pond-2-20230323095142.jpg', 'pond-3-20230323095142.jfif', 'pond-4-20230323095142.webp', 'pond-5-20230323095142.jfif', 'pond-6-20230323095142.jfif', 'pond-7-20230323095142.webp', 'Velit irure incidunt', 1, 14, '2023-03-23 03:51:42', '2023-03-23 03:51:42'),
(2, 2, 'Want', 'Vitae blanditiis con', '2023-03-23', 1, 'Nihil sed fugiat ve', 'Reiciendis exercitat', 'Eos aperiam rerum t', 'Quia culpa consequa', 'Dolor aut fugit qui', 499, 'year', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 14, '2023-03-23 03:51:53', '2023-03-23 03:51:53');

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

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `s_charge` bigint(20) NOT NULL,
  `s_per_price` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `resort_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `user_id`, `post_type`, `post_title`, `date`, `phone`, `s_charge`, `s_per_price`, `description`, `resort_name`, `address`, `room_type`, `price`, `per_price`, `wifi`, `attached_toilet`, `generator`, `lift`, `hot_water`, `laundry`, `ac`, `spa`, `parking`, `dining`, `gym`, `sports`, `swimmingpool`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Want', 'Minim et eos odit do', '2023-03-23', 1, 36, 'day', 'Culpa provident ill', 'Briar Haley', 'Rem voluptatem eaqu', 'Bungalow', 905, 'day', 'on', NULL, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 7, '2023-03-23 04:02:22', '2023-03-23 04:02:22'),
(2, 2, 'Rent', 'Elmo Gomez', '2023-03-23', 1, 98, 'Choose Service Type', 'Sunt debitis tempori', 'Charlotte Potts', 'Recusandae Culpa o', 'Choose...', 39, 'Choose Rent Type', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'resturent-1-20230323100301.jpg', 'resturent-2-20230323100301.jpg', 'resturent-3-20230323100301.jfif', 'resturent-4-20230323100301.webp', 'resturent-5-20230323100301.jfif', 'resturent-6-20230323100301.jfif', 'resturent-7-20230323100301.webp', 'Qui cupidatat culpa', 1, 7, '2023-03-23 04:03:01', '2023-03-23 04:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `rooftops`
--

CREATE TABLE `rooftops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooftops`
--

INSERT INTO `rooftops` (`id`, `user_id`, `post_type`, `title`, `c_name`, `date`, `phone`, `description`, `address`, `floor_area`, `price`, `per_price`, `toilet`, `p_protection`, `generator`, `lift`, `parking`, `water`, `electricity`, `shed`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Porro suscipit quis', 'Vera Clark', '2023-03-23', 1, 'Exercitation quae et', 'Soluta proident rem', 'Incidunt exercitati', 495, 'hour', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'rooftop-1-20230323100952.jpg', 'rooftop-2-20230323100952.jpg', '', '', '', '', '', 'Delectus odit nulla', 1, 21, '2023-03-23 04:09:52', '2023-03-23 04:09:53'),
(2, 2, 'Want', 'Autem dolorum corrup', 'Xavier Fitzpatrick', '2023-03-23', 1, 'Dolore dolorum eveni', 'Soluta veniam aut s', 'Labore quod architec', 18, 'month', 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 21, '2023-03-23 04:10:05', '2023-03-23 04:10:05'),
(3, 2, 'Want', 'Consectetur numquam', 'Savannah Berger', '2023-03-23', 1, 'Molestias facere qui', 'Non corrupti exerci', 'Ut voluptatem error', 760, 'day', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 21, '2023-03-23 04:11:33', '2023-03-23 04:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `s_charge` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `room_size` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `s_charge`, `description`, `address`, `room_size`, `price`, `guest_count`, `wifi`, `attached_toilet`, `varanda`, `gas`, `water`, `electricity`, `lift`, `furnished`, `hot_water`, `ac`, `cable_tv`, `parking`, `generator`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Want', 'zdsfvzsd', '2023-03-23', 1, 234, 'zdsfgasdg', 'zxdgzdf', '32423sdf', 234, 435, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-03-23 04:16:30', '2023-03-23 04:16:30'),
(2, 2, 'Want', 'Malcolm Cole', '2023-03-23', 1, 77, 'Voluptas dolores adi', 'Commodi inventore co', 'A perspiciatis eum', 955, 1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-03-23 04:17:40', '2023-03-23 04:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `shooting__spots`
--

CREATE TABLE `shooting__spots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shooting__spots`
--

INSERT INTO `shooting__spots` (`id`, `user_id`, `post_type`, `title`, `c_name`, `date`, `phone`, `description`, `address`, `floor_area`, `road_width`, `price`, `per_price`, `lift`, `parking`, `dining`, `electricity`, `toilet`, `shed`, `generator`, `gas`, `water`, `change_room`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Ea ut doloribus aute', 'Yen Welch', '2023-03-23', 1, 'Sint eu sed optio u', 'Rerum aut fuga Quae', 'In non magnam volupt', 'Cillum ipsa rem sun', 336, 'day shift', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'shooting-1-20230323102143.jpg', 'shooting-2-20230323102143.jpg', 'shooting-3-20230323102143.jfif', 'shooting-4-20230323102143.webp', 'shooting-5-20230323102143.jfif', 'shooting-6-20230323102143.jfif', 'shooting-7-20230323102143.webp', 'Nostrud vitae quo ut', 1, 18, '2023-03-23 04:21:43', '2023-03-23 04:21:43'),
(2, 2, 'Want', 'Ducimus eos quia a', 'Dolan Jarvis', '2023-03-23', 1, 'Quidem sint qui est', 'Quod voluptas quibus', 'Aut omnis quos sapie', 'Recusandae Sint se', 477, 'day shift', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 18, '2023-03-23 04:21:56', '2023-03-23 04:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `floor_level`, `floor_size`, `road_width`, `price`, `fire_safety`, `lift`, `parking`, `electricity`, `generator`, `gas`, `water`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Want', 'Obcaecati soluta dol', '2023-03-23', 1, 'Deleniti ab fugiat v', 'Nostrud blanditiis q', '15', 'Cum qui nesciunt au', 'Id inventore eum ma', 437, 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 9, '2023-03-23 04:25:37', '2023-03-23 04:25:37'),
(2, 2, 'Rent', 'Eos ex fugiat quo q', '2023-03-23', 1, 'Fugiat magna ipsam l', 'Incidunt voluptatem', '12', 'Quia labore ex quo p', 'Occaecat saepe cumqu', 229, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'shop-1-20230323102614.jpg', 'shop-2-20230323102614.jpg', 'shop-3-20230323102614.jfif', 'shop-4-20230323102614.webp', 'shop-5-20230323102614.jfif', 'shop-6-20230323102614.webp', 'shop-7-20230323102614.jpg', 'Ex quis et nihil qui', 1, 9, '2023-03-23 04:26:14', '2023-03-23 04:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `swimming__pools`
--

CREATE TABLE `swimming__pools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `per_price` varchar(255) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `swimming__pools`
--

INSERT INTO `swimming__pools` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `type`, `size`, `price`, `per_price`, `wifi`, `shed`, `laundry`, `change_room`, `generator`, `toilet`, `parking`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Quod cupiditate quo', '2023-03-23', 1, 'Enim rerum maxime no', 'Dolores in earum lab', 'swim', 'Dolorem aut impedit', 779, 'hour', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'swimmingpool-1-20230323102940.jpg', 'swimmingpool-2-20230323102940.jpg', 'swimmingpool-3-20230323102940.jfif', 'swimmingpool-4-20230323102940.webp', 'swimmingpool-5-20230323102940.jfif', 'swimmingpool-6-20230323102940.jfif', 'swimmingpool-7-20230323102940.webp', 'Officia ad commodo i', 1, 16, '2023-03-23 04:29:40', '2023-03-23 04:29:40'),
(2, 2, 'Want', 'Eos ratione numquam', '2023-03-23', 1, 'Qui in suscipit sit', 'Facere aliquid neces', 'swim', 'Libero voluptas assu', 420, 'full day', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 16, '2023-03-23 04:29:52', '2023-03-23 04:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
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

INSERT INTO `users` (`id`, `unique_id`, `name`, `phone`, `image`, `email`, `nationality`, `father_name`, `mother_name`, `address`, `google_id`, `facebook_id`, `date_of_birth`, `gender`, `admin_verify`, `n_photo1`, `n_photo2`, `fav_qt1`, `fav_ans1`, `email_verified_at`, `password`, `role_id`, `otp`, `terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', '017', NULL, 'toletx@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '10/04/1986', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$CK9eAIlnHuvJFlRzO7LQy./Io.xyuorHFkMC.snH9j/Q7DG759Uju', 1, NULL, NULL, NULL, '2023-03-23 02:23:53', '2023-03-23 02:23:53'),
(2, 'codetree-1234', 'Rafsan', '01', '2.jpg', 'rafsan@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '1986-10-04', 'Male', '0', NULL, NULL, NULL, NULL, NULL, '$2y$10$yr72KYqP2aPNrcMEhZSP1uGSGIejEht32Bl1mhzzOpjKY3kQXkek.', 2, NULL, NULL, NULL, '2023-03-23 02:23:53', '2023-03-23 02:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `floor_level` varchar(255) NOT NULL,
  `floor_size` varchar(255) NOT NULL,
  `road_width` varchar(255) NOT NULL,
  `building_condition` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `user_id`, `post_type`, `title`, `date`, `phone`, `description`, `address`, `type`, `floor_level`, `floor_size`, `road_width`, `building_condition`, `price`, `fire_safety`, `generator`, `lift`, `parking`, `drainage_system`, `gas`, `water`, `electricity`, `ac`, `photo`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `video`, `active`, `table_api`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rent', 'Et maiores adipisci', '2023-03-23', 1, 'Enim iste eum est do', 'Nihil sunt ut aliqu', 'camical', '14', 'Quod odit adipisci i', 'Fugit cupidatat vol', 'good', 743, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'warehouse-1-20230323103232.jpg', 'warehouse-2-20230323103232.jpg', 'warehouse-3-20230323103232.jfif', 'warehouse-4-20230323103232.webp', 'warehouse-5-20230323103232.jfif', 'warehouse-6-20230323103232.jfif', 'warehouse-7-20230323103232.webp', 'Consequatur quis ea', 1, 12, '2023-03-23 04:32:32', '2023-03-23 04:32:32'),
(2, 2, 'Want', 'Sunt rerum tenetur i', '2023-03-23', 1, 'Ut laborum Aut comm', 'Autem minus occaecat', 'readymade', '9', 'Laborum corporis mag', 'Id iste culpa nihil', 'moderate', 909, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 12, '2023-03-23 04:32:46', '2023-03-23 04:32:46');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghats`
--
ALTER TABLE `ghats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marketings`
--
ALTER TABLE `marketings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parking__spots`
--
ALTER TABLE `parking__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phoneotps`
--
ALTER TABLE `phoneotps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picnic__spots`
--
ALTER TABLE `picnic__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `play_grounds`
--
ALTER TABLE `play_grounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ponds`
--
ALTER TABLE `ponds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooftops`
--
ALTER TABLE `rooftops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shooting__spots`
--
ALTER TABLE `shooting__spots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `swimming__pools`
--
ALTER TABLE `swimming__pools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
