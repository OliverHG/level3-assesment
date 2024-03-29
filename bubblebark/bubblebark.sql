-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2022 at 10:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bubblebark`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `activation_code`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com', ''),
(2, 'og16', '$2y$10$ScQ6izm1OSRoFNcq86avhOa.bXgPudBBta6N.F5CUwh4SRYrOW8Rm', 'og16@mahurangi.school.nz', '62fa18a2b3c13'),
(3, 'mp42', '$2y$10$nw1Yyo0k2Io4GutJfcCliusNoED.XnB3u8P6yh2Vutw.hriILDrd2', 'mp42@mahurangi.school.nz', '62fa192e98721'),
(4, 'jessescool', '$2y$10$8iyZiBzTfjauw49UCv8lfeAHg6jn82XkO/Xhwlx16JWKGM87eppkK', 'ja54@mahurangi.school.nz', '62fac4bc3ce38'),
(5, 'admin', '$2y$10$n/P9OHjcinrwLsr6DW0TluhK6FIQ4E19E1V6Kd/Cgs0KMA1/9OBp.', 'admin@mail.com', '62fc2a51ad3ac');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(6, 'test for evidence', 'test@email.com', 'test', 'message');

-- --------------------------------------------------------

--
-- Table structure for table `core`
--

CREATE TABLE `core` (
  `core_id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `ad1` varchar(50) NOT NULL,
  `ad2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `core`
--

INSERT INTO `core` (`core_id`, `surname`, `firstname`, `ph`, `ad1`, `ad2`) VALUES
(1, 'Oliver', 'Graham', '0204585855', '262 Smyth Road', 'Warkworth');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `para1` text NOT NULL,
  `image1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title1`, `para1`, `image1`) VALUES
(1, 'About Us', 'We are a small local business run by a group of Year 13 students from Mahurangi College. We have designed a sustainable, eco-friendly and Allergen-free dog soap shampoo to offer to all dogs throughout New Zealand.', 'about-1-570x350.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `price`, `description`) VALUES
(1, 'Citronella', 'cit-pro-img.JPEG', '15.95', 'For our farm pups, we have our beautiful citronella scent to keep those pesky bugs away!'),
(2, 'Coconut and Lime', 'coc-pro-img.JPEG', '15.95', 'Enjoy this flavour of summer with fresh lime and tropical coconut making for a bright uplifting scent!'),
(3, 'Japanese Cherry Blossum', 'jap-pro-img.JPEG', '15.95', 'Be transported to springtime with this magnolia and rose intertwined scent.'),
(4, 'Mango and Tangerine', 'man-pro-img.JPEG', '15.95', 'This fruity blend is a summer essential with sweet fresh mango and tangy ripe tangerine leaving your pup smelling divine!'),
(5, 'Strawberry Guava', 'str-pro-img.JPEG', '15.95', 'This mouth-watering, juicy fragrance will have your pup smelling delicious!');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `results_id` int(11) NOT NULL,
  `standardnum` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `core_id` int(11) NOT NULL,
  `result` varchar(1) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`results_id`, `standardnum`, `title`, `core_id`, `result`, `date`) VALUES
(1, 91900, 'Inquiry', 1, '', NULL),
(2, 91902, 'Database', 1, '', NULL),
(3, 91903, 'Website', 1, 'E', '2022-02-10'),
(4, 91909, 'External - Reflection', 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Smart Watch', '<p>Unique watch made with stainless steel, ideal for those that prefer interative watches.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Powered by Android with built-in apps.</li>\r\n<li>Adjustable to fit most.</li>\r\n<li>Long battery life, continuous wear for up to 2 days.</li>\r\n<li>Lightweight design, comfort on your wrist.</li>\r\n</ul>', '29.99', '0.00', 10, 'watch.jpg', '2019-03-13 17:55:22'),
(2, 'Wallet', '', '14.99', '19.99', 34, 'wallet.jpg', '2019-03-13 18:52:49'),
(3, 'Headphones', '', '19.99', '0.00', 23, 'headphones.jpg', '2019-03-13 18:47:56'),
(4, 'Digital Camera', '', '69.99', '0.00', 7, 'camera.jpg', '2019-03-13 17:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core`
--
ALTER TABLE `core`
  ADD PRIMARY KEY (`core_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`results_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core`
--
ALTER TABLE `core`
  MODIFY `core_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `results_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
