-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2022 at 10:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sstho`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_long_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_heading`, `about_short_desc`, `about_long_desc`) VALUES
(1, 'About Us ', '<p>Sacred Stitch Trendy and Hip (SSTH) is a company that sells trendy outfits for the ladies that can be worn every day. All the ladies outfits are designed in Germany and ethically manufactured owned by Abdul Afif bin Yusoff which is located at Taman Mahsuri, JItra, Kedah. SSTH has been formally operating since 2017. It has several small branches around Malaysia which located in Pulau Pinang, Perak and Perlis.&nbsp;</p>', '<p>Now, even though SSTH only have 5 years of experience, we still survive in the Malaysia fashion market and always strives to improve the quality of their outfits so it is always being the Malaysian choices.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Vission:</strong> \"To be a global fashion-trendy leader by empowering innovation and design to give complete client satisfaction.\"</p>\r\n<p><strong>Mission: </strong>\"Making a difference in the branding industry by innovating and improving high-quality products and services for worldwide clients. Next, always stay ahead in fashion-trends, global changes, and up-to-date-technology.\"</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_street` text NOT NULL,
  `admin_zip` varchar(10) NOT NULL,
  `admin_state` text NOT NULL,
  `admin_position` varchar(255) NOT NULL,
  `admin_about` text NOT NULL,
  `admin_image` text DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_email`, `admin_pass`, `admin_contact`, `admin_street`, `admin_zip`, `admin_state`, `admin_position`, `admin_about`, `admin_image`, `created_date`) VALUES
(1, 'Nur Siri Aufa', 'Jalaluddin', 'admin@mail.com', 'Password@123', '013-498746', 'No. 65, Taman Seri Murni, Jitra', '06000', 'Kedah', 'Accountant', 'I had work in this company starting from year 2008 and I am responsible for the managing the company financial resources. ', 'Admin Profile Image SSTHO.png', '2021-11-30 18:09:04'),
(10, 'Nur Amelia', 'Hudson', 'amelia@mail.com', '123', '013-4798365', 'Teres 1 Tingkat, No.427, Lorong Ceria 8, Bandar Utama, Sungai Petani', '08000', 'Kedah', 'Head of Department of Sales and Marketing Department', 'I began my work in the year of 2012 as sales manager and now, I had became the HOD of Sales and Marketing Department. ', 'AmeliaHenderson.jpg', '2021-12-13 18:09:12'),
(11, 'Nur Alissa', 'Akhiruddin', 'alissa@mail.com', 'password123', '016-4578912', 'Jalan Bukit Segar 1, Taman Bukit Segar, Cheras', '56000', 'Kuala Lumpur', 'Chief Executing Officer', 'I owned this company and wanted to expand this company globally.', 'photo843482.jpg', '2022-01-01 18:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `carrier_id` int(11) NOT NULL,
  `carrier_name` varchar(255) NOT NULL,
  `carrier_link` text NOT NULL,
  `carrier_rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`carrier_id`, `carrier_name`, `carrier_link`, `carrier_rate`) VALUES
(3, 'Line Clear', 'https://www.tracking.my/lineclear', '8.00'),
(5, 'City-Link', 'https://www.tracking.my/citylink', '7.50'),
(6, 'GDExpress', 'https://www.tracking.my/gdex', '8.00');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `order_qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `p_variations_id` text NOT NULL,
  `carrier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `store_street` text NOT NULL,
  `store_zip` varchar(255) NOT NULL,
  `store_state` text NOT NULL,
  `contact_email` text NOT NULL,
  `store_day` varchar(255) NOT NULL,
  `store_hours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_no`, `store_street`, `store_zip`, `store_state`, `contact_email`, `store_day`, `store_hours`) VALUES
(1, '+604-1549874', 'No. 20, Taman Mahsuri Fasa 2A, Jitra', '06000', 'Kedah Darul Aman', 'enquiry@sstho.com', 'Monday - Friday', '10.00 AM - 9.00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_price` decimal(10,2) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_name`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(5, 5, 'Sale', '10.00', 'SSTHOA  ', 20, 2),
(6, 14, 'Sale', '5.00', 'SSTHOB', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(10) NOT NULL,
  `cust_fname` varchar(255) NOT NULL,
  `cust_lname` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_pass` varchar(255) NOT NULL,
  `cust_contact` varchar(255) NOT NULL,
  `cust_street` text NOT NULL,
  `cust_zip` varchar(12) NOT NULL,
  `cust_state` text NOT NULL,
  `cust_image` text NOT NULL,
  `cust_ip` varchar(255) NOT NULL,
  `cust_confirm_code` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_fname`, `cust_lname`, `cust_email`, `cust_pass`, `cust_contact`, `cust_street`, `cust_zip`, `cust_state`, `cust_image`, `cust_ip`, `cust_confirm_code`, `created_date`) VALUES
(2, 'Sarah ', 'Raisuddin', 'sara@mail.com', '123', '011-2345678', 'No. 1, Jalan 1, Taman 1, Seri Kembangan,', '43300', 'Kedah', 'ariana.jpg', '::1', '', '2022-01-17 16:00:22'),
(3, 'Damia Amalina', 'Khairuddin', 'damia@mail.com', 'Password123', '012-2345678', 'No. 2, Jalan 2, Taman 2, Seri Kembangan, ', '43300', 'Selangor', 'sample_image.jpg', '::1', '', '2020-12-24 16:15:08'),
(4, 'Alisa Raysa', 'Mohd Amri', 'alisa@mail.com', 'Password123', '013-2345678', 'No. 3, Jalan 3, Taman 3, Seri Kembangan,', '43300', 'Selangor', 'user.png', '::1', '1427053935', '2021-12-31 16:15:08'),
(5, 'Fika An-Nur Fitrina', 'Mohd Amsyar', 'fika@mail.com', 'Password123', '014-2345678', 'No. 4, Jalan 4, Taman 4, Seri Kembangan,', '43300', 'Selangor', 'user.png', '::1', '1634138674', '2022-01-09 16:15:08'),
(6, 'Alya Siti Sarah', 'Ryyan Mokhtar', 'alya@mail.com', 'Password123', '015-2345678', 'No. 5, Jalan 5, Taman 5, Jitra, ', '06000', 'Kedah', 'user.png', '::1', '174829126', '2022-01-14 16:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `cust_feedbacks`
--

CREATE TABLE `cust_feedbacks` (
  `feedback_id` int(10) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `feedback_rating` varchar(50) NOT NULL,
  `feedback_description` varchar(255) NOT NULL,
  `feedback_date` date NOT NULL DEFAULT current_timestamp(),
  `cust_fname` text NOT NULL,
  `cust_email` text NOT NULL,
  `cust_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_feedbacks`
--

INSERT INTO `cust_feedbacks` (`feedback_id`, `invoice_no`, `feedback_rating`, `feedback_description`, `feedback_date`, `cust_fname`, `cust_email`, `cust_contact`) VALUES
(2, 1715523401, 'Excellent', '', '2021-01-05', 'Fika An-Nur Fitrina', 'fika@mail.com', '014-2345678'),
(3, 1762810884, 'Good', '', '2021-02-08', 'Alya Siti Sarah', 'alya@mail.com', '015-2345678'),
(4, 1972602052, 'Poor', '', '2021-03-12', 'Alya Siti Sarah', 'alya@mail.com', '015-2345678'),
(5, 2008540778, 'Excellent', 'Very nice product and quality', '2021-04-07', 'Damia Amalina', 'damia@mail.com', '012-2345678'),
(6, 858195683, 'Neutral', 'It\'s quite good for me.', '2022-01-04', 'Damia Amalina', 'damia@mail.com', '012-2345678'),
(7, 361540113, 'Good', 'Good!', '2022-01-04', 'Sarah', 'sara@mail.com', '011-2345678'),
(12, 2138906686, 'Good', 'The material of the product is in a good quality!', '2022-01-13', 'Alisa Raysa', 'alisa@mail.com', '013-2345678'),
(19, 901707655, 'Excellent', 'I love the quality of this product. It is comfortable!', '2022-01-14', 'Fika An-Nur Fitrina', 'fika@mail.com', '014-2345678');

-- --------------------------------------------------------

--
-- Table structure for table `cust_orders`
--

CREATE TABLE `cust_orders` (
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `p_variations_id` int(11) NOT NULL,
  `carrier_id` int(11) NOT NULL,
  `order_amount` decimal(10,2) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `order_qty` int(10) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_orders`
--

INSERT INTO `cust_orders` (`order_id`, `cust_id`, `p_variations_id`, `carrier_id`, `order_amount`, `invoice_no`, `order_qty`, `order_date`, `order_status`) VALUES
(17, 2, 16, 3, '80.00', 1715523401, 2, '2022-01-18 19:31:32', 'Complete'),
(23, 3, 21, 3, '210.00', 1762810884, 4, '2022-01-18 19:31:34', 'Complete'),
(24, 4, 8, 5, '70.00', 1972602052, 2, '2022-01-18 19:31:36', 'Complete'),
(25, 4, 13, 6, '60.00', 2008540778, 3, '2022-01-18 19:31:38', 'pending'),
(27, 5, 10, 3, '50.00', 2138906686, 1, '2022-01-18 19:31:44', 'Complete'),
(28, 5, 13, 6, '180.00', 361540113, 2, '2022-01-18 19:31:45', 'Complete'),
(29, 3, 4, 5, '100.00', 858195683, 1, '2022-01-18 19:31:47', 'Complete'),
(31, 6, 21, 3, '245.00', 901707655, 1, '2022-01-18 19:31:49', 'Complete'),
(32, 6, 16, 5, '75.00', 2125554712, 1, '2022-01-18 19:31:59', 'pending'),
(40, 2, 21, 5, '42.00', 1505972905, 1, '2022-01-18 19:32:01', 'Complete'),
(41, 2, 19, 6, '38.00', 646582944, 1, '2022-01-18 19:32:03', 'pending'),
(42, 2, 20, 3, '38.00', 557752034, 1, '2022-01-18 19:32:04', 'pending'),
(44, 2, 16, 6, '38.00', 571854863, 1, '2022-01-18 19:32:15', 'Complete'),
(45, 2, 8, 6, '35.00', 924314471, 1, '2022-01-18 19:32:17', 'pending'),
(46, 2, 12, 6, '38.00', 9395308, 1, '2022-01-18 19:32:18', 'pending'),
(47, 2, 20, 3, '35.00', 153555219, 1, '2022-01-18 19:32:20', 'pending'),
(48, 2, 20, 3, '84.00', 1361592411, 2, '2022-01-18 19:32:22', 'pending'),
(49, 2, 17, 3, '38.00', 1851041836, 1, '2022-01-18 19:32:23', 'pending'),
(57, 2, 6, 3, '35.00', 126611043, 1, '2022-01-19 05:37:02', 'pending'),
(68, 2, 6, 3, '35.00', 243616840, 1, '2022-01-19 06:28:50', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_shipping`
--

CREATE TABLE `delivery_shipping` (
  `delivery_id` int(10) NOT NULL,
  `delivery_heading` text NOT NULL,
  `delivery_short_desc` text NOT NULL,
  `delivery_long_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_shipping`
--

INSERT INTO `delivery_shipping` (`delivery_id`, `delivery_heading`, `delivery_short_desc`, `delivery_long_desc`) VALUES
(1, 'Delivery & Shipping', '<p><strong>DELIVERY POLICY</strong></p>\r\n<p>SSTHO can only send address to street address in Malaysia.</p>', '<p><strong>DELIVERY LEAD TIME</strong></p>\r\n<p>Delivery lead times are as follows:-</p>\r\n<p>- Peninsula Malaysia: 3-5 working days for your order to arrive.</p>\r\n<p>- Sabah/Sarawak: 5-7 working days for your order to arrive.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>SALE/PROMOTIONAL PERIODS</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>SHIPPING CHARGES</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqs_id` int(10) NOT NULL,
  `faqs_heading` text NOT NULL,
  `faqs_short_desc` text NOT NULL,
  `faqs_long_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faqs_id`, `faqs_heading`, `faqs_short_desc`, `faqs_long_desc`) VALUES
(1, 'FAQs', '<p>1. Account Registration &amp; Password Retrieval</p>\r\n<p>2. Shopping at SSTHO</p>\r\n<p>3. How to Make Payment</p>\r\n<p>4. Vouchers, Discount &amp; Promo Codes</p>\r\n<p>5. Delivery &amp; Shipping</p>\r\n<p>6. Your Protection</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `emailaddress` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `emailaddress`) VALUES
(1, 'syafqda@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(2, 1607603019, '447.00', 'Online Banking', 5678, '2021-01-13'),
(3, 314788500, '345.00', 'Online Banking', 443, '2021-02-12'),
(5, 10023, '20.00', 'Online Banking', 1000010101, '2021-10-20'),
(6, 69088, '100.00', 'Online Banking', 1010101022, '2021-02-27'),
(7, 1835758347, '480.00', 'Online Banking', 1785002101, '2021-03-31'),
(8, 1835758347, '480.00', 'Credit/Debit Card', 1012125550, '2021-03-26'),
(9, 1144520, '480.00', 'Credit/Debit Card', 1025000020, '2021-04-02'),
(10, 2145000000, '480.00', 'Online Banking', 2147483647, '2022-04-30'),
(20, 858195683, '100.00', 'Credit/Debit Card', 1400256000, '2021-04-30'),
(21, 2138906686, '120.00', 'Online Banking', 1455000020, '2021-05-10'),
(22, 2138906686, '120.00', 'Credit/Debit Card', 1450000020, '2021-05-11'),
(23, 361540113, '180.00', 'Online Banking', 1470000020, '2021-01-12'),
(24, 361540113, '180.00', 'Online Banking', 1258886650, '2021-05-16'),
(25, 901707655, '245.00', 'Online Banking', 1200002588, '2021-08-09'),
(29, 1715523401, '80.00', 'Online Banking', 6857999, '2021-12-31'),
(30, 1715523401, '80.00', 'Online Banking', 6857999, '2022-01-01'),
(31, 571854863, '38.00', 'Online Banking', 682949, '2022-01-17'),
(32, 1505972905, '60.00', 'Online Banking', 0, '2022-01-19'),
(33, 1505972905, '60.00', 'Online Banking', 0, '2022-01-19'),
(34, 1505972905, '60.00', 'Online Banking', 0, '2022-01-19'),
(35, 1505972905, '60.00', 'Online Banking', 0, '2022-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `p_variations_id` int(11) NOT NULL,
  `carrier_id` int(11) NOT NULL,
  `order_qty` int(10) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `cust_id`, `invoice_no`, `product_id`, `p_variations_id`, `carrier_id`, `order_qty`, `order_date`, `order_status`) VALUES
(17, 2, 1715523401, '15', 16, 3, 6, '2022-01-19 06:33:55', 'Complete'),
(23, 3, 1762810884, '12', 21, 3, 1, '2022-01-19 06:33:56', 'Complete'),
(24, 4, 1972602052, '5', 8, 5, 1, '2022-01-19 06:33:58', 'Complete'),
(25, 4, 2008540778, '13', 13, 6, 1, '2022-01-19 06:34:00', 'pending'),
(27, 5, 2138906686, '14', 10, 3, 1, '2022-01-19 06:34:07', 'Complete'),
(28, 5, 361540113, '13', 13, 6, 2, '2022-01-19 06:34:09', 'Complete'),
(29, 3, 858195683, '5', 4, 5, 1, '2022-01-19 06:34:11', 'Complete'),
(31, 6, 901707655, '12', 21, 3, 1, '2022-01-19 06:34:13', 'Complete'),
(32, 6, 2125554712, '15', 16, 5, 1, '2022-01-19 06:34:22', 'pending'),
(40, 2, 1505972905, '13', 21, 5, 1, '2022-01-19 06:34:24', 'Complete'),
(41, 2, 646582944, '14', 19, 6, 1, '2022-01-19 06:34:26', 'pending'),
(42, 2, 557752034, '14', 20, 3, 1, '2022-01-19 06:34:27', 'pending'),
(44, 2, 571854863, '14', 16, 6, 1, '2022-01-19 06:34:33', 'Complete'),
(45, 2, 924314471, '5', 8, 6, 1, '2022-01-19 06:34:35', 'pending'),
(46, 2, 9395308, '14', 12, 6, 1, '2022-01-19 06:34:36', 'pending'),
(47, 2, 153555219, '5', 20, 3, 1, '2022-01-19 06:34:38', 'pending'),
(48, 2, 1361592411, '13', 20, 3, 2, '2022-01-19 06:34:39', 'pending'),
(49, 2, 1851041836, '14', 17, 3, 1, '2022-01-19 06:34:44', 'pending'),
(57, 2, 126611043, '5', 6, 3, 1, '2022-01-19 06:34:46', 'pending'),
(68, 2, 243616840, '5', 6, 3, 1, '2022-01-19 06:34:48', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_features`) VALUES
(5, 7, '2022-01-17 12:40:38', 'Cartoon Oversized Sweatshirt', 'cartoon-sweatshirt', 'sad-green.jpeg', 'sad-blue.jpeg', 'sad-all.jpeg', '35.00', '<p>o The real colour of the item may be slightly different from the pictures shown on website, caused by many factors such as brightness etc</p>\r\n<p>o Please allow slight (&plusmn;3cm) manual measurement deviation for the data.</p>\r\n<p>o Can insert special notes for your loved ones.</p>\r\n<p>o For any inquiries or bulk orders, please whatsapp to 013-5288494.</p>', '<p>Color: Blue, Green, Pink, Yellow</p>\r\n<p>Size: S, M , L, XL</p>\r\n<p>&nbsp;</p>\r\n<p>Measurement: [Unit of Size (cm) 1cm = 0.39 inch]</p>\r\n<p>S: Shoulder 46 Length 61 Sleeve 60 Bust 96</p>\r\n<p>M: Shoulder 48 Length 63 Sleeve 62 Bust 100</p>\r\n<p>L: Shoulder 50 Length 65 Sleeve 64 Bust 104</p>\r\n<p>XL: Shoulder 50 Length 65 Sleeve 64 Bust 104</p>'),
(12, 6, '2022-01-17 12:44:48', 'Autumn Casual High Waist Jumpsuit', 'high-waist-jumpsuit', 'jumpsuit-1.jpg', 'jumpsuit-2.jpg', 'jumpsuit-3.jpg', '54.00', '<p>o The real colour of the item may be slightly different from the pictures shown on website, caused by many factors such as brightness etc.</p>\r\n<p>o Please allow slight (&plusmn;3cm) manual measurement deviation for the data.</p>\r\n<p>o Can insert special notes for your loved ones.</p>\r\n<p>o For any inquiries or bulk orders, please whatsapp to 013-5288494.</p>', '<p><span style=\"color: black;\">Color: Black</span></p>\r\n<p><span style=\"color: black;\">Size: S, M, L</span></p>\r\n<p><span style=\"color: black;\">&nbsp;</span></p>\r\n<p><span style=\"color: black;\">Measurement:</span></p>\r\n<p><span style=\"color: black;\">[Unit of Size (cm) 1cm = 0.39 inch]</span></p>\r\n<p style=\"font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"color: black;\">S: Length 111cm/43.7inch<span style=\"mso-spacerun: yes;\">&nbsp; </span>Hip 84cm/33.1inch<span style=\"mso-spacerun: yes;\">&nbsp; </span></span></p>\r\n<p><span style=\"color: black;\">M: Length 112cm/44.1inch<span style=\"mso-spacerun: yes;\">&nbsp; </span>Hip 96cm/37.8inch </span></p>\r\n<p><span style=\"color: black;\">L: Length 113cm/44.5inch<span style=\"mso-spacerun: yes;\">&nbsp; </span>Hip 100cm/39.4inch</span></p>'),
(13, 4, '2022-01-17 12:46:09', 'Elegant Summer Floral Dress ', 'floral-dress', 'floral-1.jpg', 'floral-2.jpeg', 'floral-3.jpeg', '42.00', '<p>o The real colour of the item may be slightly different from the pictures shown on website, caused by many factors such as brightness etc.</p>\r\n<p>o Please allow slight (&plusmn;3cm) manual measurement deviation for the data.</p>\r\n<p>o Can insert special notes for your loved ones.</p>\r\n<p>o For any inquiries or bulk orders, please whatsapp to 013-5288494.</p>', '<p><span style=\"color: black;\">Size : S, M, L</span></p>\r\n<p><span style=\"color: black;\">&nbsp;</span></p>\r\n<p><span style=\"color: black;\">Measurement:</span></p>\r\n<p><span style=\"color: black;\">[Unit of Size (cm) 1cm = 0.39 inch]</span></p>\r\n<p style=\"font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; word-spacing: 0px;\"><span style=\"color: black;\">S: Length 111cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Shoulder 38cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Sleeve 16cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Bust 88cm</span></p>\r\n<p><span style=\"color: black;\">M: Length 112cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Shoulder 39.4cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Sleeve 16.5cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Bust 92cm</span></p>\r\n<p><span style=\"color: black;\">L: Length 113cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Shoulder 41cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Sleeve 17cm<span style=\"mso-spacerun: yes;\">&nbsp; </span>Bust 96cm</span></p>'),
(14, 9, '2022-01-17 12:47:29', 'Chiffon Wide Leg Culotte Pants', 'chiffon-pants', 'pants-1.jpg', 'pants-2.jpeg', 'pants-3.jpeg', '38.00', '<p>o The real colour of the item may be slightly different from the pictures shown on website, caused by many factors such as brightness etc.</p>\r\n<p>o Please allow slight (&plusmn;3cm) manual measurement deviation for the data.</p>\r\n<p>o Can insert special notes for your loved ones.</p>\r\n<p>o For any inquiries or bulk orders, please whatsapp to 013-5288494.</p>', '<p><span style=\"color: black;\">Color: Beige, Dark blue, Green</span></p>\r\n<p><span style=\"color: black;\">Size: S, M, L</span></p>\r\n<p><span style=\"color: black;\">&nbsp;</span></p>\r\n<p><span style=\"color: black;\">Measurement:</span></p>\r\n<p><span style=\"color: black;\">S: 30-40kg</span></p>\r\n<p><span style=\"color: black;\">M: 40-50kg</span></p>\r\n<p><span style=\"color: black;\">L: 50-60kg</span></p>'),
(15, 5, '2022-01-17 12:48:28', 'Aesthetic College Knitted Vest', 'knitted-vest', 'knitvest-1.jpg', 'knitvest-2.jpg', 'knitvest-3.jpg', '30.00', '<p>o The real colour of the item may be slightly different from the pictures shown on website, caused by many factors such as brightness etc.</p>\r\n<p>o Please allow slight (&plusmn;3cm) manual measurement deviation for the data.</p>\r\n<p>o Can insert special notes for your loved ones.</p>\r\n<p>o For any inquiries or bulk orders, please whatsapp to 013-5288494.</p>', '<p><span style=\"color: black;\">Color: Beige</span></p>\r\n<p><span style=\"color: black;\">Size: S, M, L</span></p>\r\n<p><span style=\"color: black;\">&nbsp;</span></p>\r\n<p><span style=\"color: black;\">Measurement:</span></p>\r\n<p><span style=\"color: black;\">S: 40-42.5 kg</span></p>\r\n<p><span style=\"color: black;\">M: 42.5-52.5 kg</span></p>\r\n<p><span style=\"color: black;\">L: 52.5-58 kg</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`) VALUES
(4, 'Dress'),
(5, 'Top'),
(6, 'Jumpsuit'),
(7, 'Outwear'),
(9, 'Pants');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `p_variations_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_variations` varchar(255) NOT NULL,
  `product_size` varchar(10) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`p_variations_id`, `product_id`, `product_variations`, `product_size`, `product_quantity`) VALUES
(1, 5, 'Green', 'S', 50),
(4, 5, 'Green', 'M', 50),
(5, 5, 'Green', 'L', 50),
(6, 5, 'Blue', 'S', 65),
(7, 14, 'Green', 'S', 90),
(8, 5, 'Green', 'XL', 10),
(9, 5, 'Blue', 'M', 20),
(10, 14, 'Green', 'M', 35),
(11, 5, 'Blue', 'L', 50),
(12, 5, 'Blue', 'XL', 85),
(13, 5, 'Pink', 'M', 10),
(14, 5, 'Pink', 'L', 15),
(15, 5, 'Yellow', 'XL', 5),
(16, 15, 'Beige', 'M', 100),
(17, 14, 'Beige', 'S', 15),
(18, 14, 'Dark Blue', 'M', 56),
(19, 14, 'Dark Blue', 'L', 41),
(20, 13, 'Floral Pink', 'S', 14),
(21, 12, 'Black', 'M', 105);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `carrier_id` int(11) NOT NULL,
  `tracking_no` int(11) NOT NULL,
  `shipment_status` varchar(259) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `order_id`, `cust_id`, `carrier_id`, `tracking_no`, `shipment_status`) VALUES
(1, 17, 2, 3, 604595266, 'Completed'),
(2, 23, 3, 3, 625984717, 'Completed'),
(3, 24, 4, 5, 80056498, 'Completed'),
(5, 25, 4, 6, 56894126, 'To receive'),
(6, 27, 5, 3, 60569821, 'Completed'),
(7, 28, 5, 6, 56982364, 'Completed'),
(8, 29, 3, 5, 80562314, 'Completed'),
(9, 31, 6, 3, 60326514, 'Completed'),
(10, 32, 6, 5, 80265136, 'To ship'),
(11, 40, 2, 5, 60569847, 'To ship'),
(12, 41, 2, 6, 6259478, 'To receive'),
(13, 42, 2, 3, 80265497, 'To ship'),
(14, 44, 2, 6, 80625947, 'Completed'),
(15, 45, 2, 6, 89652345, 'To receive'),
(16, 46, 2, 6, 65981645, 'To receive'),
(17, 47, 2, 3, 80569487, 'To receive'),
(18, 48, 2, 3, 65984126, 'To ship'),
(19, 49, 2, 3, 6952647, 'To ship'),
(24, 57, 2, 3, 45655, 'To receive');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `slider_img1` text NOT NULL,
  `slider_img2` text NOT NULL,
  `slider_img3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_img1`, `slider_img2`, `slider_img3`) VALUES
(1, 'slider1.png', 'slider5.png', 'slider4.png');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `terms_id` int(10) NOT NULL,
  `terms_heading` text NOT NULL,
  `terms_short_desc` text NOT NULL,
  `terms_long_desc` text NOT NULL,
  `terms_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`terms_id`, `terms_heading`, `terms_short_desc`, `terms_long_desc`, `terms_link`) VALUES
(1, 'Terms & Conditions', '<p><strong>PLEASE READ THE FOLLOWING TERMS AND CONDITIONS AND THE GENERAL TERMS AND CONDITION OF SALE CAREFULLY AS THEY APPLY TO YOUR USE OF THIS WEBSITE AND SALE OF PRODUCTS THROUGH THIS WEBSITE.</strong></p>', '<p>These terms and conditions are intended to set the basic terms and conditions between you and Sacred Stitch Trendy and Hip Sdn. Bhd. or its affiliated companies. All the contents residing in this website such as text, graphics, logo, and images are the properties of Sacred Stitch Trendy and Hip Sdn. Bhd.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `track_order`
--

CREATE TABLE `track_order` (
  `track_id` int(11) NOT NULL,
  `track_heading` varchar(255) NOT NULL,
  `track_short_desc` text NOT NULL,
  `track_long_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track_order`
--

INSERT INTO `track_order` (`track_id`, `track_heading`, `track_short_desc`, `track_long_desc`) VALUES
(1, 'HOW TO TRACK YOUR ORDER', '<p>Please locate your tracking number from the delivery confirmation email or by logging into your user account. You can visit the carrier website and enter your tracking number in the tracking widget to see the status of your order delivery.</p>', '<p>Please allow a few hours after your receive the delivery confirmation email for the system to relect the status of your order delivery.&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `cust_id`, `product_id`) VALUES
(3, 5, 13),
(4, 3, 13),
(5, 6, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`carrier_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `cust_feedbacks`
--
ALTER TABLE `cust_feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `cust_orders`
--
ALTER TABLE `cust_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `delivery_shipping`
--
ALTER TABLE `delivery_shipping`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqs_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`p_variations_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`terms_id`);

--
-- Indexes for table `track_order`
--
ALTER TABLE `track_order`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `carrier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cust_feedbacks`
--
ALTER TABLE `cust_feedbacks`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cust_orders`
--
ALTER TABLE `cust_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `delivery_shipping`
--
ALTER TABLE `delivery_shipping`
  MODIFY `delivery_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `p_variations_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `terms_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `track_order`
--
ALTER TABLE `track_order`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
