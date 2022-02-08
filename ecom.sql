-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2022 at 02:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'tanubiswas420@gmail.com', '$2y$10$cUVKJHIzn7z1hK1PolwX4OsGM6YZaTQpe/ge6JRWk0FuBjZ3Pl4aO', '2021-06-10 05:51:37', '2021-06-21 02:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `is_home`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hundai', '1627018272.png', 1, 1, '2021-07-06 07:16:41', '2021-07-22 23:31:12'),
(2, 'Maruti', '1627018288.png', 1, 1, '2021-07-06 07:52:54', '2021-07-22 23:31:28'),
(4, 'tesla', '1627018302.png', 1, 1, '2021-07-13 06:10:45', '2021-07-22 23:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_home` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `parent_category_id`, `category_image`, `is_home`, `created_at`, `status`, `updated_at`) VALUES
(1, 'Men', 'Men', 0, '1627710619.jpg', 1, '2021-06-23 01:01:11', 1, '2021-08-13 01:43:53'),
(2, 'Bag', 'bag', 0, '1627710748.jpg', 1, '2021-07-16 13:28:19', 1, '2021-08-09 11:40:56'),
(3, 'Women', 'Women', 1, '1627710802.jpg', 1, '2021-07-16 13:31:37', 1, '2021-08-13 01:42:05'),
(4, 'kids', 'Kids', 2, '1627710874.jpg', 1, '2021-07-21 11:07:34', 1, '2021-08-13 01:42:14'),
(15, 'Home', 'home', 1, NULL, 1, '2021-08-09 03:12:24', 1, '2021-08-13 01:42:27'),
(16, 'FootBall', 'FootBall', 1, '1644325396.jpg', 1, '2022-02-08 07:03:16', 1, '2022-02-08 07:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Green', 1, '2021-06-25 13:00:20', '2021-07-21 12:34:50'),
(3, 'Red', 1, '2021-08-17 06:19:09', '2021-08-17 06:19:09'),
(4, 'yellow', 1, '2021-08-17 06:19:21', '2021-08-17 06:19:21'),
(5, 'Marron', 1, '2021-08-18 00:20:56', '2021-08-18 00:24:52'),
(6, 'Skye', 1, '2021-08-18 00:21:12', '2021-08-18 00:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Value','Per') COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_order_amt` int(11) NOT NULL,
  `is_one_time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `title`, `code`, `value`, `type`, `min_order_amt`, `is_one_time`, `created_at`, `status`, `updated_at`) VALUES
(1, 'test 120', 'test', '100', 'Value', 0, 0, '2021-06-24 00:30:31', 1, '2021-07-21 12:34:30'),
(2, 'Fade', 'Fade 12', '300', 'Value', 0, 0, '2021-06-24 00:32:14', 1, '2021-06-26 02:45:38'),
(3, 'New coupon', 'New', '100', 'Value', 300, 0, '2021-07-09 11:18:39', 1, '2021-07-09 11:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gstin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `address`, `city`, `state`, `zip`, `company`, `gstin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tonmoy', 'tanu@gmail.com', '999999999', 'tonmoy', 'address1', 'Kolkata', 'West Bengal', '700102', 'My Company Name', 'ABCDEGST', '1', '2021-05-03 06:43:04', '2021-07-13 00:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_txt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_banners`
--

INSERT INTO `home_banners` (`id`, `image`, `btn_txt`, `btn_link`, `status`, `created_at`, `updated_at`) VALUES
(2, '1627497238.jpg', 'Test1', 'https://www.google.com/', 1, '2021-07-28 12:34:00', '2021-07-28 12:34:00'),
(3, '1629028833.jpg', NULL, NULL, 1, '2021-07-28 12:36:07', '2021-08-15 06:00:33');

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
(1, '2021_06_08_101521_create_admins_table', 1),
(2, '2021_06_18_071802_create_categories_table', 2),
(3, '2021_06_24_051903_create_coupons_table', 3),
(4, '2021_06_25_062906_create_sizes_table', 4),
(5, '2021_06_24_052851_create_users_table', 5),
(6, '2021_06_25_183137_create_colors_table', 6),
(7, '2021_06_26_133717_create_products_table', 7),
(8, '2021_07_06_115732_create_brands_table', 8),
(9, '2021_07_09_194135_create_taxes_table', 9),
(10, '2021_07_13_054452_create_customers_table', 10),
(11, '2021_07_27_130800_create_home_banners_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keywords` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `technical_specification` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `uses` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `is_promo` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_discounted` int(11) NOT NULL,
  `is_tranding` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `image`, `brand`, `model`, `short_desc`, `desc`, `Keywords`, `technical_specification`, `uses`, `warranty`, `lead_time`, `tax_id`, `is_promo`, `is_featured`, `is_discounted`, `is_tranding`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Short Sleeve T-Shirt', 'Short Sleeve T-Shirt', '1629029052.jpg', '1', 'men', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac lectus in velit mattis rutrum non eget massa. Suspendisse potenti. Maecenas eu elementum lacus. Integer in consequat ex. Curabitur ac ultrices neque. Morbi at aliquam diam. Sed vehicula tellus eu sem imperdiet, at varius nulla egestas. Duis faucibus quam sed erat convallis tristique.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac lectus in velit mattis rutrum non eget massa. Suspendisse potenti. Maecenas eu elementum lacus. Integer in consequat ex. Curabitur ac ultrices neque. Morbi at aliquam diam. Sed vehicula tellus eu sem imperdiet, at varius nulla egestas. Duis faucibus quam sed erat convallis tristique.</p>', '#t-shirt #men', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac lectus in velit mattis rutrum non eget massa. Suspendisse potenti. Maecenas eu elementum lacus. Integer in consequat ex. Curabitur ac ultrices neque. Morbi at aliquam diam. Sed vehicula tellus eu sem imperdiet, at varius nulla egestas. Duis faucibus quam sed erat convallis tristique.</p>', 'No', '2 years', '2-3 days', 1, 1, 0, 1, 1, 1, '2021-07-06 08:23:33', '2021-08-16 10:18:30'),
(2, 1, 'SpotShield Stain Resistant Polo Shirts', 'SpotShield Stain Resistant Polo Shirts', '1626898029.jpg', '4', 'SpotShield Stain Resistant Polo Shirts', '<p>JERZEES Spot Shield men&#39;s short sleeve polo sports shirts are great for everyday wear and for jobs that get messy. Water and most oil-based liquids simply bead up and roll right off the fabric preventing staining. The magic behind these incredible shirts is our stain-resisting technology is designed to be long lasting and provide protection over the life of the shirt. Plus, the 50/50 blend reduces fading and shrinking for an even longer lasting look. Available up to 5XL in a variety of great colors.</p>', '<p>JERZEES Spot Shield men&#39;s short sleeve polo sports shirts are great for everyday wear and for jobs that get messy. Water and most oil-based liquids simply bead up and roll right off the fabric preventing staining. The magic behind these incredible shirts is our stain-resisting technology is designed to be long lasting and provide protection over the life of the shirt. Plus, the 50/50 blend reduces fading and shrinking for an even longer lasting look. Available up to 5XL in a variety of great colors.</p>', 'polo shirts, t-shirts', '<p>JERZEES Spot Shield men&#39;s short sleeve polo sports shirts are great for everyday wear and for jobs that get messy. Water and most oil-based liquids simply bead up and roll right off the fabric preventing staining. The magic behind these incredible shirts is our stain-resisting technology is designed to be long lasting and provide protection over the life of the shirt. Plus, the 50/50 blend reduces fading and shrinking for an even longer lasting look. Available up to 5XL in a variety of great colors.</p>', '2-3 Days', '1 years', '2-4 days', 1, 0, 1, 0, 0, 1, '2021-07-21 11:32:10', '2021-08-16 10:18:45'),
(3, 3, 'Young Women\'s Short Sleeve', 'Young Women\'s Short Sleeve', '1629029548.jpg', '2', 'Women', '<p>Arthur S. Levine&rsquo;s legacy on Seventh Avenue runs deep. For over 40 years, he&rsquo;s been at the helm of several of America&rsquo;s most important fashion lines. In 2001, he teamed his famed business acumen with elegant designs to create the now-celebrated label of Tahari Arthur S. Levine.</p>', '<p>Arthur S. Levine&rsquo;s legacy on Seventh Avenue runs deep. For over 40 years, he&rsquo;s been at the helm of several of America&rsquo;s most important fashion lines. In 2001, he teamed his famed business acumen with elegant designs to create the now-celebrated label of Tahari Arthur S. Levine.</p>', 'Women, Short Sleeve', '<p>Arthur S. Levine&rsquo;s legacy on Seventh Avenue runs deep. For over 40 years, he&rsquo;s been at the helm of several of America&rsquo;s most important fashion lines. In 2001, he teamed his famed business acumen with elegant designs to create the now-celebrated label of Tahari Arthur S. Levine.</p>', 'No', '6months', '2-3 days', 1, 1, 1, 1, 1, 1, '2021-07-21 12:40:11', '2021-08-15 06:12:28'),
(4, 1, 'Marron Polo t-shirt', 'Polo t-shirt', '1629268430.jpg', '2', 'A12', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper interdum elit, sit amet feugiat libero dapibus a. Cras accumsan vehicula feugiat. Proin mattis felis et nibh facilisis consequat.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper interdum elit, sit amet feugiat libero dapibus a. Cras accumsan vehicula feugiat. Proin mattis felis et nibh facilisis consequat.</p>', 't-shirt, polo shirt', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper interdum elit, sit amet feugiat libero dapibus a. Cras accumsan vehicula feugiat. Proin mattis felis et nibh facilisis consequat.</p>', 'No', '1 mothe', '2-3 days', 1, 0, 0, 1, 0, 1, '2021-08-18 00:33:13', '2021-08-18 00:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `products_attr`
--

CREATE TABLE `products_attr` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `attr_image` varchar(255) NOT NULL,
  `mrp` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_attr`
--

INSERT INTO `products_attr` (`id`, `product_id`, `sku`, `attr_image`, `mrp`, `price`, `qty`, `size_id`, `color_id`) VALUES
(1, 1, '210', '', 300, 210, 4, 1, 4),
(3, 2, '10', '', 100, 10, 6, 3, 1),
(5, 3, '511', '', 230, 511, 3, 3, 1),
(6, 1, '211', '', 300, 211, 3, 3, 3),
(7, 4, '203', '', 400, 203, 2, 6, 5),
(8, 4, '204', '1629268538.jpg', 400, 350, 5, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `products_id`, `images`) VALUES
(1, 13, '1625559294.jpg'),
(4, 16, '1625580356.jpg'),
(5, 1, '1629267622.jpg'),
(10, 2, '1626888730.jpg'),
(11, 1, '1629267862.jpg'),
(12, 4, '1629268431.jpg'),
(13, 4, '1629268431.jpg'),
(14, 4, '1629268393.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `status`, `created_at`, `updated_at`) VALUES
(1, 'xl', 1, '2021-06-25 01:42:46', '2021-07-04 07:56:15'),
(3, 'xxl', 1, '2021-07-04 08:14:17', '2021-07-04 08:14:17'),
(4, 'xxxl', 1, '2021-08-18 00:21:38', '2021-08-18 00:21:38'),
(5, 'L', 1, '2021-08-18 00:21:57', '2021-08-18 00:21:57'),
(6, 'M', 1, '2021-08-18 00:22:09', '2021-08-18 00:22:09'),
(7, 'S', 1, '2021-08-18 00:22:23', '2021-08-18 00:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `tax_desc`, `tax_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'GST 12%', '21', 1, '2021-07-09 15:03:54', '2021-07-09 15:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attr`
--
ALTER TABLE `products_attr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products_attr`
--
ALTER TABLE `products_attr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
