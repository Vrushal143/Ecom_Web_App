-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 01:00 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(73, 4, 32, 1, '2023-01-05 07:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(25, 'Mobiles', 'mobiles', 'Mobile Phones Year End Sale', 0, 1, 'Mobiles.webp', 'Mobiles', 'Mobile Phones Year End Sale', 'Mobile Phones Year End Sale', '2022-12-30 12:55:18'),
(26, 'Laptops', 'laptops', 'All Kinds of Laptops', 0, 1, 'Laptops.png', 'Laptops', 'All Kinds of Laptops                                                     ', 'All Kinds of Laptops                                                            ', '2022-12-30 12:57:40'),
(27, 'Fashion', 'fashion', 'All Kinds of Fashion\r\n', 0, 1, 'Fashion.webp', 'Fashion', 'All Kinds of Fashion', 'All Kinds of Fashion', '2022-12-30 12:59:00'),
(28, 'Appliances', 'appliances', 'All Kinds of Appliances', 0, 1, 'Appliances.webp', 'Appliances', 'All Kinds of Appliances', 'All Kinds of Appliances', '2022-12-30 13:00:50'),
(29, 'Grocery', 'grocery', 'All Kinds of Grocery', 0, 1, 'Grocery.webp', 'Grocery', 'All Kinds of Grocery', 'All Kinds of Grocery', '2022-12-30 13:03:25'),
(30, 'Books & More', ' books & More', 'All Kinds of Books and More', 0, 1, 'Books & More.webp', ' Books & More', 'All Kinds of Books and More                                            ', 'All Kinds of Books and More                                    ', '2022-12-30 13:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(8, 'vrushalcoder624076543210', 2, 'admin', 'admin@gmail.com', '9876543210', 'xyz india ', 441904, 129879, 'COD', '', 0, NULL, '2023-01-04 13:00:39'),
(9, 'vrushalcoder837812446529', 4, 'user', 'user@gmail.com', '9112446529', '24 street vyenketesh recidency khat road Bhandara', 441906, 62389, 'COD', '', 0, NULL, '2023-01-04 13:19:29'),
(10, 'vrushalcoder631876543210', 4, 'user', 'user@gmail.com', '9876543210', 'Flat no 105  Wing B Vyenketesh Reesidency Rajni Nagar Khat Road', 441904, 7399, 'COD', '', 1, NULL, '2023-01-05 07:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(14, 8, 36, 1, 54990, '2023-01-04 13:00:39'),
(15, 8, 32, 1, 67490, '2023-01-04 13:00:39'),
(16, 8, 31, 1, 7399, '2023-01-04 13:00:39'),
(17, 9, 36, 1, 54990, '2023-01-04 13:19:29'),
(18, 9, 31, 1, 7399, '2023-01-04 13:19:29'),
(19, 10, 31, 1, 7399, '2023-01-05 07:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(31, 25, 'POCO C31', 'poco-c31', ' The phone comes with a 6.53-inch touchscreen display offering a resolution of 720x1600 pixels and an aspect ratio of 20:9. Poco C31 is powered by an octa-core MediaTek Helio G35 processor. It comes with 3GB, 4GB of RAM. The Poco C31 runs Android 10 and is powered by a 5000mAh battery.', 'Xiaomi Poco C31 ; Display, Type ; Size, 6.53 inches, 102.9 cm2 (~81.0% screen-to-body ratio) ; Resolution, 720 x 1600 pixels, 20:9 ratio (~269 ppi density) \r\nInternal: 32GB 3GB RAM, 64GB 4GB RAM\r\nMain Camera: Triple\r\nChipset: MediaTek MT6765G Helio G35', 11999, 7399, 'POCO C31.webp', 1, 0, 1, 'POCO C31', 'The phone comes with a 6.53-inch touchscreen display offering a resolution of 720x1600 pixels and an aspect ratio of 20:9. Poco C31 is powered by an octa-core MediaTek Helio G35 processor. It comes with 3GB, 4GB of RAM. The Poco C31 runs Android 10 and is powered by a 5000mAh battery.                                            ', 'The phone comes with a 6.53-inch touchscreen display offering a resolution of 720x1600 pixels and an aspect ratio of 20:9. Poco C31 is powered by an octa-core MediaTek Helio G35 processor. It comes with 3GB, 4GB of RAM. The Poco C31 runs Android 10 and is powered by a 5000mAh battery.                                            ', '2023-01-03 07:34:07'),
(32, 26, 'HP Pavilion Ryzen 5 ', 'hp-pavilion-ryzen-5-hexa-core -AMD-R5-5600H', '  Hexa Core AMD R5-5600H - (8 GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA GeForce RTX 3050/144 Hz) 15-EC2145AX Gaming Laptop  (15.6 inch, Shadow Black & Ultra Violet, 1.98 kg)', 'Build quality is ok ok. You can notice the fan s speed if you are in a quite room. display is buttery smooth . Battery is average and can survive for basic works (not if gpu is in hectic condition). Plastic quality is normal and fluxing is evident, also its a fingerprint magnet 🫢. Overall the purchase is value for money if you consider the other options with RTX 3050. Aspire 7 with 12th 1240p is in par performance with this as I have both. The tgp in this is much higher and gives the performance of aspire 7 with a 144hz refresh rate.', 81869, 67490, 'Lenovo IdeaPad Gaming 3.webp', 8, 0, 1, 'HP Pavilion Ryzen 5 ', 'Hexa Core AMD R5-5600H - (8 GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA GeForce RTX 3050/144 Hz) 15-EC2145AX Gaming Laptop  (15.6 inch, Shadow Black & Ultra Violet, 1.98 kg)                                                                                        ', 'Hexa Core AMD R5-5600H - (8 GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA GeForce RTX 3050/144 Hz) 15-EC2145AX Gaming Laptop  (15.6 inch, Shadow Black & Ultra Violet, 1.98 kg)                                                                                        ', '2023-01-03 07:36:47'),
(33, 27, 'Men Regular Fit Solid Button Down Collar Formal Shirt', 'Men Regular Fit Solid Button Down Collar Formal Shirt', ' Men Shirt', 'Men Shirt', 1849, 479, 'xxl-frml-st2-vebnor-original-imag6at4hgjrvyun.webp', 7, 0, 1, 'Men Regular Fit Solid Button Down Collar Formal Shirt', 'Men Shirt                                            ', 'Men Shirt                                            ', '2023-01-03 11:14:18'),
(36, 28, 'Vu GloLED', 'Vu-Glo-LED', 'Android TV', '55 inches android telivesion ', 63500, 54990, 'Vu GloLED.webp', 4, 0, 1, 'Vu GloLED', '55 inches android telivesion ', '55 inches android telivesion ', '2023-01-04 09:01:48'),
(37, 27, 'Men hoddy', 'men-typography-hoddy', 'Men Typography Hooded ', 'Neck White, Black T-Shirt', 999, 399, 'Men Typography Hooded Neck White, Black T-Shirt.webp', 12, 0, 1, 'Men hoddy', 'Neck White, Black T-Shirt', 'Neck White, Black T-Shirt', '2023-01-13 07:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role_as`, `created_at`) VALUES
(2, 'admin', 'admin@gmail.com', 123456789, '12345', 1, '2022-12-15 08:11:13'),
(4, 'user', 'user@gmail.com', 2147483647, 'user12345', 0, '2022-12-21 11:34:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
