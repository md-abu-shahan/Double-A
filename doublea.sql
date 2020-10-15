-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doublea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_contact`) VALUES
(1, 'Md Abu Hanif', 'hanif@gmail.com', '123', 'motu.jpg', 'Bangladesh', '+8801733700745'),
(2, 'Abu Shahan', 'shahan@gmail.com', '123', 'profile.jpg', 'India', '+8801613700745');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(14, '::1', 1, 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', ''),
(2, 'Women', ''),
(3, 'Kids', ''),
(4, 'Other', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_address`, `customer_contact`, `customer_image`, `customer_ip`) VALUES
(10, 'Abu Hanif', 'hanif@gmail.com', '123', 'modina market', '01712030863', 'PicsArt_05-02-05.45.46.jpg', '::1'),
(12, 'shahhan', 'handif@gmail.com', '123', 'dsfwsf', '01712030863', 'IMG_0091.JPG', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(9, 10, 200, 1664066800, 1, 'Small', '2020-10-15', 'Complete'),
(10, 10, 1140, 1664066800, 1, 'Small', '2020-10-15', 'Complete'),
(11, 13, 150, 1127096024, 1, 'Small', '2020-10-15', 'Complete'),
(12, 13, 100, 1127096024, 1, 'Small', '2020-10-15', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(5, 0, 1, 'Back Code', 1, 0, '1'),
(6, 2131321, 1000, 'Western Union', 0, 0, '30.10.20'),
(7, 13214324, 100, 'Payoneer', 0, 0, '10-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(9, 10, 1664066800, '12', 1, 'Small', 'Complete'),
(10, 10, 1664066800, '14', 1, 'Small', 'Complete'),
(11, 13, 1127096024, '11', 1, 'Small', 'Complete'),
(12, 13, 1127096024, '15', 1, 'Small', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(1, 1, 2, '2019-07-10 09:22:08', 'Tokichoi Front Pocket Collared ', 'wo_jeck1.jpg', 'wo_jeck2.jpg', 'wo_jeck3.jpg', 66, 'Dress', ''),
(2, 1, 1, '2019-07-10 16:50:20', 'Boys Puffer Coat With Detachable Hood', 'boys-Puffer-Coat-With-Detachable-Hood-1.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-2.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-3.jpg', 121, 'Hood', ''),
(3, 5, 1, '2019-07-10 17:01:44', 'Grey Man', 'grey-man-1.jpg', 'grey-man-2.jpg', 'grey-man-3.jpg', 200, 'grey', ''),
(4, 2, 2, '2019-07-10 17:06:30', 'Women Diamond Heart Ring', 'women-diamond-heart-ring-1.jpg', 'women-diamond-heart-ring-2.jpg', 'women-diamond-heart-ring-3.jpg', 111, 'ring diamond heart', ''),
(5, 4, 2, '2019-07-10 17:08:03', 'Waxed Cotton Coat Woman', 'waxed-cotton-coat-woman-1.jpg', 'waxed-cotton-coat-woman-2.jpg', 'waxed-cotton-coat-woman-3.jpg', 112, 'cotton coat woman', ''),
(6, 1, 2, '2019-07-10 17:09:29', 'Red Winter Jacket', 'Red-Winter-jacket-1.jpg', 'Red-Winter-jacket-2.jpg', 'Red-Winter-jacket-3.jpg', 113, 'Red Winter Jacket', ''),
(7, 5, 2, '2019-07-10 17:11:12', 'Girls Polos Tshirt', 'g-polos-tshirt-1.jpg', 'g-polos-tshirt-2.jpg', '', 114, 'girls tshirt', ''),
(8, 3, 2, '2019-07-10 17:12:34', 'High Heels Women Pantofel Brukat', 'High Heels Women Pantofel Brukat-1.jpg', 'High Heels Women Pantofel Brukat-2.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 115, 'Heels shoes women', ''),
(9, 3, 1, '2019-07-10 17:14:05', 'Man Adidas Suarez Slop', 'Man-Adidas-Suarez-Slop-On-1.jpg', 'Man-Adidas-Suarez-Slop-On-2.jpg', 'Man-Adidas-Suarez-Slop-On-3.jpg', 231, 'man shoes ', ''),
(10, 5, 1, '2019-07-10 17:17:03', 'Man Polo', 'Man-Polo-1.jpg', 'Man-Polo-2.jpg', 'Man-Polo-3.jpg', 500, 'man shirt polo', ''),
(11, 2, 1, '2019-09-17 23:40:12', 'Belt man', 'Mont-Blanc-Belt-man-1.jpg', 'Mont-Blanc-Belt-man-2.jpg', 'Mont-Blanc-Belt-man-3.jpg', 150, 'belt', '<p>Very Nice Belt :)</p>'),
(12, 2, 4, '2019-09-14 08:02:31', 'Pendrive', 'product-5a.jpg', 'product-5b.jpg', 'product-5c.jpg', 200, 'pendrive', ''),
(14, 2, 1, '2019-09-15 04:53:02', 'Watch', 'watch1.jpg', 'watch2.jpg', 'watch3.jpg', 1140, 'watch', '<p>This watch is so nice . looking so gorgeous .</p>'),
(15, 5, 1, '2020-10-15 04:42:57', 'shirt', '3.jpg', '', '', 100, 'd300', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, ' Jackets ', 'A smartphone is a mobile phone that includes advanced functionality beyond making phone calls and sending text messages. Most smartphones have the capability to display photos, play videos, check and send e-mail, and surf the Web.'),
(2, 'Accessories', 'A fashion accessory is a decorative item that supplements one\'s outfit. Items such as such as jewellery, gloves, handbags, hats, belts, scarves, watches, sunglasses, pins, stockings, bow ties, leggings, ties, suspenders, and tights.'),
(3, 'Shoes', 'A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. ... Some shoes are worn as safety equipment, such as steel-soled boots which are required on construction sites.'),
(4, 'Coats', 'A smartphone is a mobile phone that includes advanced functionality beyond making phone calls and sending text messages. Most smartphones have the capability to display photos, play videos, check and send e-mail, and surf the Web.'),
(5, 'T-Shirt', 'A smartphone is a mobile phone that includes advanced functionality beyond making phone calls and sending text messages. Most smartphones have the capability to display photos, play videos, check and send e-mail, and surf the Web.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'slide number 1', 'slide-1.jpg'),
(2, 'slide number 2', 'slide-2.jpg'),
(3, 'slide number 3', 'slide-3.jpg'),
(4, 'slide number 4', 'slide-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
