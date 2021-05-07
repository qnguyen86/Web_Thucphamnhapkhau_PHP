-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 04:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php54_bt`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `displayhomepage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `displayhomepage`) VALUES
(1, 0, 'Contact', 0),
(4, 0, 'Pages', 1),
(7, 0, 'Faqs', 0),
(10, 0, 'HouseHold', 0),
(11, 0, 'Kitchen', 0),
(13, 11, 'Bakery', 0),
(14, 11, 'Baking Supplies', 0),
(15, 11, 'Coffe,Tea &Beverages', 0),
(16, 11, 'Dried Fruits, Nuts', 0),
(17, 11, 'Sweets, Chocolate', 0),
(18, 11, 'Spices & Masalas', 0),
(19, 11, 'Jams,Honey & Spreads', 0),
(20, 11, 'Pickles', 0),
(21, 11, 'Pasta & Noodles', 0),
(22, 11, 'Rice, Flour & Pulses', 0),
(23, 11, 'Sauces & Cooking Pastes', 0),
(24, 11, 'Snack Foods', 0),
(25, 11, 'Oils, Vinegars', 0),
(26, 11, 'Meat,Poultry & Seafood', 0),
(27, 4, 'Web Icons', 0),
(28, 4, 'Typography', 0),
(29, 10, 'Kitchen & Dining', 0),
(30, 10, 'Detergents', 0),
(31, 10, 'Utensil Cleaners', 0),
(32, 10, 'Floor & Other Cleaners', 0),
(33, 10, 'Disposables, Garbage Bag', 0),
(34, 10, 'Repellents & Fresheners', 0),
(35, 10, 'Dishwash', 0),
(36, 10, 'Pet Care', 0),
(37, 10, 'Cleaning Accessories', 0),
(38, 10, 'Pooja Needs', 0),
(39, 10, 'Crackers', 0),
(40, 10, 'Festive Decoratives', 0),
(41, 10, 'Plasticware', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `content`, `hot`, `photo`) VALUES
(1, ' Ngu coc noi bat', '<p> Ngu coc cua Hana la loai ngu coc noi tieng voi nhieu cong dung khac nhau </p>', '<p> Ngu coc nay duoc tong hop tu nhieu loai hat</p>\r\n<p> Giau cac chat dinh duong</p>', 1, '1616115414_mk9.jpg'),
(2, 'Loai gao ngon nhat', '<p>Day la loai gao ngon nhat the gioi</p>', '<p> Duoc bau chon la loai gao ngon nhat voi nhieu cong dung</p>', 1, '1616115394_k1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `hot`, `photo`, `price`, `discount`, `category_id`) VALUES
(3, 'Maiyas Gulab Jamun', '<p>San pham tao do chat luong cao</p>', '<p>Mot hop </p>', 1, '1616114622_k2.jpg', 420, 30, 13),
(4, 'Zeeba Basmati Rice', '<p> Loai gao noi bat cua Zeeba</p>', '<p>Best for Biryani and Pulao.\r\nAfter cooking, Zeeba Basmati rice grains attain an extra ordinary length of upto 2.4 cm/~1 inch.\r\nZeeba Basmati rice adheres to the highest food afety standards as your health is paramount to us.\r\nContains only the best and purest grade of basmati rice grain of Export quality</p>', 1, '1616114420_k1.jpg', 950, 25, 13),
(5, 'Lipton Green Tea', '<p>San pham noi tieng cua Lipton</p>', '<p>Lam tu loai tra dac biet</p>', 0, '1616114699_k3.jpg', 384, 10, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'aa', 'nva@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'tentoila', 'nvb@gmail.com', ''),
(3, 'nvc', 'nvc@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'ddd', 'nvd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'nve', 'nve@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'nvf', 'nvf@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
