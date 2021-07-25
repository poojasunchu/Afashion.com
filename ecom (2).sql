-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 01:52 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecom`
--
CREATE DATABASE IF NOT EXISTS `ecom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecom`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'pallavi', 'pallavi');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, '1', '46', '9'),
(2, '1', '46', '5'),
(3, '1', '46', '1'),
(5, '4', '48', '1');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(5, 'Readymade', 1),
(6, 'Dress Material', 1),
(7, 'Kurti', 1),
(8, 'Bottoms', 1),
(9, 'Branded Collection', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES
(1, 'pallavi', 'pallavigurram16@gmail.com', '1234567890', '', '2021-01-23 20:03:19'),
(2, 'vaishu', 'hanchevaishu@gmail.com', '0987654321', '', '0000-00-00 00:00:00'),
(4, 'test', 'test@gmail.com', '9990413778', 'test', '2020-05-01 09:21:37'),
(5, 'Shreya', 'shreyashirke22july@gmail.com', '9527610218', 'sample', '2029-03-21 00:00:00'),
(6, 'Shreya', 'shreyashirke22july@gmail.com', '9527610218', 'sample', '2029-03-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `deacivated_products`
--

CREATE TABLE IF NOT EXISTS `deacivated_products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categories` varchar(100) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `total_price` float NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `mihpayid` varchar(20) NOT NULL,
  `payu_status` varchar(10) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `address`, `city`, `pincode`, `payment_type`, `total_price`, `payment_status`, `order_status`, `txnid`, `mihpayid`, `payu_status`, `added_on`) VALUES
(1, 1, 'test', 'test', 110076, 'COD', 164299, 'Success', 3, 'eaad21770607ee0b25ba', '', '', '2020-05-15 10:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE IF NOT EXISTS `order_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `order_number` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`id`, `user_id`, `order_number`, `product_id`, `qty`, `payment_type`, `status`) VALUES
(3, '3', 'ORD443293', '46', '1', 'COD', 'Placed'),
(4, '3', 'ORD443293', '46', '1', 'COD', 'Placed'),
(5, '3', 'ORD173910', '46', '1', 'COD', 'Placed'),
(6, '3', 'ORD173910', '46', '1', 'COD', 'Placed'),
(7, '3', 'ORD254743', '46', '1', 'COD', 'Placed'),
(8, '3', 'ORD890941', '46', '1', 'COD', 'Placed'),
(9, '3', 'ORD282054', '46', '5', 'COD', 'Placed'),
(10, '3', 'ORD282054', '47', '1', 'COD', 'Placed'),
(11, '3', 'ORD441981', '47', '3', 'COD', 'Placed'),
(12, '3', 'ORD441981', '47', '1', 'COD', 'Placed'),
(13, '3', 'ORD483816', '46', '1', 'COD', 'Placed'),
(14, '3', 'ORD919595', '46', '1', 'COD', 'Placed'),
(15, '3', 'ORD168479', '46', '1', 'COD', 'Placed'),
(16, '4', 'ORD571240', '49', '1', 'COD', 'Placed');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(1, 1, 2, 1, 155800),
(2, 1, 1, 1, 8499);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Canceled'),
(5, 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL,
  `sub_categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `best_seller` int(11) NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `sub_categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `best_seller`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(46, 6, 5, 'A-line', 593, 1500, 365, '470471410_277714740_468580238_kurti.jpg', 'h', 'g', 0, 'tg', 'k', 'f', 1),
(47, 7, 0, 'Kurti', 200, 300, 5, 'IMG-20210402-WA0014.jpg', 'nice quality of product', 'great quality , light cloth', 0, '', '', '', 1),
(48, 7, 0, 'Grey Kurti', 500, 600, 10, 'IMG-20210402-WA0016.jpg', 'Nice cloth', 'great color', 0, '', '', '', 1),
(49, 7, 0, 'Pink Fliar', 300, 600, 5, 'IMG-20210402-WA0015.jpg', 'beautiful color', 'Light Weight cloth', 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE IF NOT EXISTS `shiprocket_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(500) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(1, 'asdas', '2020-05-17 20:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`) VALUES
(1, 'sample', 'one.jpeg'),
(2, 'sample slider', 'two.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL,
  `sub_categories` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categories_id`, `sub_categories`, `status`) VALUES
(4, 5, 'Chuddidar', 1),
(5, 5, 'Plazo', 1),
(6, 5, 'Pant', 1),
(7, 5, 'Salwar', 1),
(8, 6, 'Casual Wear', 1),
(9, 6, 'Party Wear', 1),
(10, 8, 'Pants', 1),
(11, 8, 'Plazoo', 1),
(12, 8, 'Leggins', 1),
(13, 7, 'Straight', 1),
(14, 7, 'Aline', 1),
(15, 7, 'Flared', 1),
(16, 8, 'Jeans', 1),
(17, 10, 'Nikhil', 1),
(18, 10, 'Gurbani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `mobile`, `address`, `city`, `pincode`, `state`, `country`) VALUES
(1, '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, 'abc@gmail.com', '1234', 'Ankita Ankam', '9371651163', 'vdfhvfbds cmdsjf', 'solapur', '413002', 'maharshtra', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `add1` varchar(500) NOT NULL,
  `add2` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `firstname`, `lastname`, `companyname`, `email`, `phone`, `country`, `add1`, `add2`, `city`, `state`, `zipcode`) VALUES
(1, '1', 'Shreya', 'shirke', 'Nwebzz', 'shreyashirke22july@gmail.com', '09527610218', 'India', 'Sanchar Press , Mohite Nagar,Blk 11', 'sanchar', 'Solapur', 'Saint Martin', '413003'),
(2, '3', 'Shreya', 'shirke', '', 'shreyashirke22july@gmail.com', '+619527610218', 'Bangladesh', 'Sanchar Press , Mohite Nagar,Blk 11', 'sanchar', 'Solapur', 'Barisal', '413003'),
(3, '4', 'ankita', 'ankam', 'abc', 'abc@gmail.com', '09876543210', 'India', 'solapur', '', 'solapur', 'Barisal', '413005');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `added_on`) VALUES
(16, 1, 4, '2020-05-13 08:54:24'),
(17, 1, 6, '2020-05-15 12:53:28'),
(18, 0, 46, '2031-03-21 00:00:00'),
(19, 0, 46, '2031-03-21 00:00:00'),
(20, 0, 46, '2031-03-21 00:00:00'),
(21, 0, 46, '2031-03-21 00:00:00'),
(22, 3, 46, '2031-03-21 00:00:00'),
(23, 0, 46, '2001-04-21 00:00:00'),
(24, 3, 46, '2001-04-21 00:00:00'),
(25, 3, 46, '2001-04-21 00:00:00'),
(26, 3, 0, '2002-04-21 00:00:00'),
(27, 0, 0, '2006-04-21 00:00:00'),
(28, 3, 0, '2006-04-21 00:00:00'),
(29, 3, 47, '2006-04-21 00:00:00'),
(30, 0, 0, '2014-05-21 00:00:00'),
(31, 3, 0, '2014-05-21 00:00:00'),
(32, 0, 0, '2014-05-21 00:00:00'),
(33, 3, 48, '2014-05-21 00:00:00'),
(34, 3, 48, '2014-05-21 00:00:00'),
(35, 3, 48, '2014-05-21 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
