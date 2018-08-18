-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 12:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_bbc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_num` varchar(200) NOT NULL,
  `admin_type` varchar(5) NOT NULL,
  `image` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `phone_num`, `admin_type`, `image`, `password`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', '01731909035', 'a', 'libs/upload_pic/admin_image/12985384295b6ecf3809186.png', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'arup', 'arup_admin', 'arupkumerbose@gmail.com', '01731909035', 'd', 'libs/upload_pic/admin_image/5565868935b52c4c77cb20.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'bose5', 'sm18888', 'charulatachaity@gmail.com', '01731909035', 'a', 'libs/upload_pic/admin_image/5257322145b52c4eea7fb9.jpg', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'arup', 'arup', 'arup@gmail.com', '01234567989', 'a', 'libs/upload_pic/admin_image/3425715135b6ec69f4137f.png', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'a'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `description`, `status`) VALUES
(1, 'Dhaka', 'Dhaka mirpur 11', 'd'),
(2, 'sherput', 'sherpur distruct', 'a'),
(3, 'mymnshing', 'mymnshing District ', 'a'),
(4, 'jamalpur', 'jamalpur district ', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `area_room_types`
--

CREATE TABLE `area_room_types` (
  `id` int(20) UNSIGNED NOT NULL,
  `area_id` int(20) UNSIGNED NOT NULL,
  `room_type_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area_room_types`
--

INSERT INTO `area_room_types` (`id`, `area_id`, `room_type_id`) VALUES
(1, 3, 2),
(2, 4, 1),
(3, 3, 1),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) UNSIGNED NOT NULL,
  `persone_name` varchar(250) DEFAULT NULL,
  `cmpy_name` varchar(200) DEFAULT NULL,
  `phone_num` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `reference` varchar(250) DEFAULT NULL,
  `area_id` int(20) UNSIGNED DEFAULT NULL,
  `room_type` int(20) UNSIGNED DEFAULT NULL,
  `room_qty` int(20) UNSIGNED DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `adults` int(20) UNSIGNED DEFAULT NULL,
  `children` int(20) UNSIGNED DEFAULT NULL,
  `status` varchar(5) DEFAULT 'a'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `persone_name`, `cmpy_name`, `phone_num`, `email`, `reference`, `area_id`, `room_type`, `room_qty`, `start_date`, `end_date`, `adults`, `children`, `status`) VALUES
(1, 'Arup Kumer Bose', 'Link Up Technology', '01731909035', 'arupkumerbose@gmail.com', 'Otish', 3, 1, 4, '2018-08-09', '2018-08-24', 4, 6, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(20) NOT NULL,
  `g_title` varchar(200) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `g_title`, `image`) VALUES
(4, 'printing Machine  ', 'libs/upload_pic/gallery_image/10246269585b6c1e70c9910.jpg'),
(5, 'laxurey room', 'libs/upload_pic/gallery_image/2854159135b767c012fe2d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone_no`, `message`) VALUES
(1, 'Md. Mozammel Hossain', '0123456789', ''),
(2, 'Md. Mozammel Hossain', '0123456789', ''),
(3, 'Md. Mozammel Hossain', '0123456789', ''),
(4, 'Md. Mozammel Hossain', '0123456789', ''),
(5, 'Md. Mozammel Hossain', '0123456789', ''),
(6, 'Md. Mozammel Hossain', '0123456789', ''),
(7, 'Md. Mozammel ', '0123456789', ''),
(8, 'Md. Mozammel ', '0123456789', ''),
(9, 'arup', '0123456789', 'dsfsdfsdf'),
(10, 'boser', '0123456789', 'asdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` int(20) NOT NULL,
  `description` text NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `price`, `description`, `image`) VALUES
(1, 'Lauxery', 1200, 'this id demo', 'libs/upload_pic/package_image/2157466215b767713709a4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) DEFAULT 'a'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `title`, `description`, `status`) VALUES
(1, 'Double Room', 'Double Bed Room', 'a'),
(2, 'Singel bed', 'single bed room', 'a'),
(3, 'Hoal room', 'hoajaksdfjdaf', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `servies`
--

CREATE TABLE `servies` (
  `id` int(20) UNSIGNED NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `price` float(10,2) DEFAULT NULL,
  `image` text,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servies`
--

INSERT INTO `servies` (`id`, `s_title`, `price`, `image`, `description`) VALUES
(2, 'We are the best choose for your water pump', 1200.00, './libs/upload_pic/service_image/13594560685b6e6e008a74f.jpg', 'dsfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(20) UNSIGNED NOT NULL,
  `s_title` varchar(200) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `s_title`, `image`) VALUES
(2, 'We are the best choose for your Pana Printing', 'libs/upload_pic/slider_image/9739124685b6c1e7ae9d58.jpg'),
(3, 'We are the best choose for your Pana Printing', 'libs/upload_pic/slider_image/1561138925b6fc7d2118ba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(20) UNSIGNED NOT NULL,
  `field_name` varchar(250) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `field_name`, `value`) VALUES
(1, 'address', 'House:16, Road:01, Mirpur 10'),
(2, 'phone', '01911978897'),
(3, 'email', 'mail@linktechbd.com'),
(4, 'about_us', '<div>hellow all ..........Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur. Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.</div>'),
(5, 'wellcome_note', 'We are the company providing the best solution regarding pump sector such as distributing water or any other liquids in various fields<b>.</b><span><span>Having developed in the Bangladesh market, without doubt the international centre of motor-driven pump production, Momen is now one of the leading company in terms of specific turnover.<br>In the near future, expansions of the range and the launch of new products designed to satisfy a demanding and selective clientele accustomed to insisting not just on excellent quality, but also on a constant drive towards innovation and research into avant-garde solutions innovation and research into avant-garde solutions will lead to further growth in sales and reinforcement of market share.</span><b><br></b><br></span>'),
(6, 'md_name', 'Jahangir Alom'),
(7, 'md_desig', 'Managing Director'),
(8, 'md_image', 'libs/upload_pic/template/19079404955b6ffc41ea1f9.jpg'),
(9, 'md_message', '<i>I take this opportunity to thank our valued customers, whose continued patronage and confidence in our products inspires us to extend the best of services and enables us to provide value for their money.</i><span><br><i>Being dedicated to taking Electronics, Energy and Information Technology to rural areas, we are focused at addressing the needs of our customers through rugged, efficient, reliable and economic milk analysis and automation solutions and products, in line with the world’s best, while maintaining continuous interaction with them to assess their emerging requirement, so as to be ready when the needs arise.</i><br>&nbsp;</span><span>We believe that technology holds the key to food safety, energy security, access to information, and economic freedom, which are necessary for empowering our rural brethren.<br>&nbsp;</span><span>We are committed to total customer satisfaction by identifying their specific needs, translating them into Quality products and providing dependable after-sales-services. This commitment is the corner stone of our Quality Policy and Green REIL Policy and we strive to achieve it by putting into place a Quality System, which adheres to the ISO 9001 Quality Standard, and an environmental management system which adheres to the ISO 14001:2004 EMS standard<br>&nbsp;</span><span>We plan to achieve this goal through our strength - the Employees; and seek their continuous involvement in achieving the Company\'s objectives.<br><br>The organization is also committed to its shareholders by way of maximizing the wealth through sustained growth under the overall ambit of the spirit of a Public Sector Unit, to optimally balance the commercial objectives and the goals of social service to the nation at large.<br><br>I therefore, seek continued patronage of our valued customers, cooperation of our employees and thank our well-wishers who have contributed to the growth of the organization.</span>'),
(16, 'logo', 'libs/upload_pic/template/18149037145b6faa6a94e3a.png'),
(17, 'our_service', '<h1 style=\"font-size: 14px; margin-top: 18px; margin-bottom: 0px; font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; line-height: 1.6; color: rgb(114, 114, 114);\">Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.Welcome to Momen enterprise. we are a biggest trading company in Bangladesh. we have 50 years of experience on Trading in Nowabpur.</h1>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_num` varchar(200) NOT NULL,
  `message` text,
  `password` text NOT NULL,
  `user_type` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone_num`, `message`, `password`, `user_type`) VALUES
(1, 'arup', '', 'arupkumerbose@gmail.com', '01731909035', 'this is testimg message', '', NULL),
(2, 'Md. Mozammel Hossain', '', 'mail@linktechbd.com', '01731909035', 'this is test message', '', NULL),
(3, 'arup', '', 'arupkumerbose@gmail.com', '01731909035', 'asdfasdfsadf', '', NULL),
(4, 'arup', '', 'arupkumerbose@gmail.com', '01731909035', 'asfsdf afdsdf a asdfsdf', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_room_types`
--
ALTER TABLE `area_room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servies`
--
ALTER TABLE `servies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
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
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `area_room_types`
--
ALTER TABLE `area_room_types`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servies`
--
ALTER TABLE `servies`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
