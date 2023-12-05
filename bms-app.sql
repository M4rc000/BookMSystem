-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 05:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `genre` varchar(35) NOT NULL,
  `sheet` int(255) NOT NULL,
  `author` varchar(15) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `image` varchar(128) NOT NULL,
  `is_active` varchar(2) NOT NULL,
  `crtby` varchar(20) NOT NULL,
  `crtdt` date NOT NULL,
  `updby` varchar(35) NOT NULL,
  `upddt` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `genre`, `sheet`, `author`, `publisher`, `image`, `is_active`, `crtby`, `crtdt`, `updby`, `upddt`) VALUES
(1, 'Beauty and the Beast', 'Romance', 0, '', '', 'romance.jpg', '1', 'System', '2023-11-05', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(1, 'Afganistan '),
(2, 'Afrika Selatan '),
(3, 'Albania '),
(4, 'Aljazair '),
(5, 'Andorra '),
(6, 'Angola '),
(7, 'Antigua dan Barbuda '),
(8, 'Arab Saudi '),
(9, 'Argentina '),
(10, 'Armenia '),
(11, 'Australia '),
(12, 'Austria '),
(13, 'Azerbaijan '),
(14, 'Bahama '),
(15, 'Bahrain '),
(16, 'Bangladesh '),
(17, 'Barbados '),
(18, 'Belarus '),
(19, 'Belgia '),
(20, 'Belize '),
(21, 'Benin '),
(22, 'Bhutan '),
(23, 'Bolivia '),
(24, 'Bosnia dan Herzegovina '),
(25, 'Botswana '),
(26, 'Brasil '),
(27, 'Brunei '),
(28, 'Bulgaria '),
(29, 'Burkina Faso '),
(30, 'Burundi '),
(31, 'Chad '),
(32, 'Chili '),
(33, 'China '),
(34, 'Denmark '),
(35, 'Dominika '),
(36, 'Ekuador '),
(37, 'El Salvador '),
(38, 'Estonia '),
(39, 'Eswatini '),
(40, 'Fiji '),
(41, 'Filipina '),
(42, 'Finlandia '),
(43, 'Gabon '),
(44, 'Gambia '),
(45, 'Georgia '),
(46, 'Ghana '),
(47, 'Grenada '),
(48, 'Guatemala '),
(49, 'Guinea '),
(50, 'Guinea'),
(51, 'Guyana '),
(52, 'Haiti '),
(53, 'Honduras '),
(54, 'Hongaria '),
(55, 'India '),
(56, 'Indonesia '),
(57, 'Inggris '),
(58, 'Irak '),
(59, 'Iran '),
(60, 'Irlandia '),
(61, 'Islandia '),
(62, 'Israel '),
(63, 'Italia '),
(64, 'Jamaika '),
(65, 'Jepang '),
(66, 'Jerman '),
(67, 'Yaman '),
(68, 'Yordania '),
(69, 'Kaledonia Baru '),
(70, 'Kamerun '),
(71, 'Kanada '),
(72, 'Kap Verde '),
(73, 'Kazakhstan '),
(74, 'Kenya '),
(75, 'Kirgizstan '),
(76, 'Kiribati '),
(77, 'Kolombia '),
(78, 'Komoro '),
(79, 'Kongo '),
(80, 'Kosta Rika '),
(81, 'Kroasia '),
(82, 'Kuba '),
(83, 'Kuwait '),
(84, 'Laos '),
(85, 'Latvia '),
(86, 'Lebanon '),
(87, 'Lesotho '),
(88, 'Liberia '),
(89, 'Libia '),
(90, 'Liechtenstein '),
(91, 'Lituania '),
(92, 'Luksemburg '),
(93, 'Madagaskar '),
(94, 'Maladewa '),
(95, 'Malawi '),
(96, 'Malaysia '),
(97, 'Mali '),
(98, 'Malta '),
(99, 'Maroko '),
(100, 'Mauritania '),
(101, 'Mauritius '),
(102, 'Meksiko '),
(103, 'Mesir '),
(104, 'Mikronesia '),
(105, 'Moldova '),
(106, 'Monako '),
(107, 'Mongolia '),
(108, 'Montenegro '),
(109, 'Mozambik '),
(110, 'Myanmar (Burma) '),
(111, 'Namibia '),
(112, 'Nauru '),
(113, 'Nepal '),
(114, 'Niger '),
(115, 'Nigeria '),
(116, 'Nikaragua '),
(117, 'Norwegia '),
(118, 'Oman '),
(119, 'Pakistan '),
(120, 'Palau '),
(121, 'Palestina '),
(122, 'Panama '),
(123, 'Papua Nugini '),
(124, 'Paraguay '),
(125, 'Peru '),
(126, 'Polandia '),
(127, 'Portugal '),
(128, 'Prancis '),
(129, 'Qatar '),
(130, 'Republik Afrika Tengah '),
(131, 'Republik Ceko '),
(132, 'Republik Dominika '),
(133, 'Rumania '),
(134, 'Rusia '),
(135, 'Rwanda '),
(136, 'Saint Kitts dan Nevis '),
(137, 'Saint Lucia '),
(138, 'Saint Vincent dan Grenadines '),
(139, 'Samoa '),
(140, 'San Marino '),
(141, 'Sao Tome dan Principe '),
(142, 'Selandia Baru '),
(143, 'Senegal '),
(144, 'Serbia '),
(145, 'Seychelles '),
(146, 'Sierra Leone '),
(147, 'Singapura '),
(148, 'Slovakia '),
(149, 'Slovenia '),
(150, 'Solomon Islands '),
(151, 'Somalia '),
(152, 'Spanyol '),
(153, 'Sri Lanka '),
(154, 'Sudan '),
(155, 'Sudan Selatan '),
(156, 'Suriah '),
(157, 'Suriname '),
(158, 'Swedia '),
(159, 'Swiss '),
(160, 'Tadjikistan '),
(161, 'Taiwan '),
(162, 'Tanzania '),
(163, 'Thailand '),
(164, 'Timor Leste '),
(165, 'Togo '),
(166, 'Tonga '),
(167, 'Trinidad dan Tobago '),
(168, 'Tunisia '),
(169, 'Turki '),
(170, 'Turkmenistan '),
(171, 'Tuvalu '),
(172, 'Uganda '),
(173, 'Ukraina '),
(174, 'Uni Emirat Arab '),
(175, 'Uruguay '),
(176, 'Uzbekistan '),
(177, 'Vanuatu '),
(178, 'Venezuela '),
(179, 'Vietnam '),
(180, 'Yordania '),
(181, 'Yunani '),
(182, 'Zambia '),
(183, 'Zimbabwe '),
(184, 'Kosovo '),
(185, 'Timor'),
(186, 'Negara Federasi Mikronesia '),
(187, 'Palau '),
(188, 'Sahrawi Arab Democratic Republ'),
(189, 'Kepulauan Marshall '),
(190, 'Vatikan '),
(191, 'Kepulauan Solomon '),
(192, 'Kiribati '),
(193, 'Nauru '),
(194, 'Samoa '),
(195, 'Tonga ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(20) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `place_of_birth` varchar(10) DEFAULT NULL,
  `date_of_birth` varchar(15) DEFAULT NULL,
  `country` varchar(30) NOT NULL,
  `date_joined` varchar(30) NOT NULL,
  `is_active` int(2) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created_token` date DEFAULT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_code`, `name`, `username`, `email`, `password`, `image`, `gender`, `place_of_birth`, `date_of_birth`, `country`, `date_joined`, `is_active`, `token`, `date_created_token`, `role_id`) VALUES
(1, '', 'Marco', 'Prime', 'menggunakan392?gmail.com', '$2y$10$DMF.T6mKOkmOUmpuH9mTseHBoOtZj4hX2TVkt4B6DMieiROqdwXQi', 'default.webp', 'Male', 'Bogor', '03-11-2003', 'Indonesia', '22-10-2023 10:49:21', 1, '', NULL, 1),
(2, '', 'Robby', 'Robbs', 'robbyarsyadani@gmail.com', '$2y$10$DMF.T6mKOkmOUmpuH9mTseHBoOtZj4hX2TVkt4B6DMieiROqdwXQi', 'default.webp', 'Male', '', '', 'Indonesia', '22-10-2023 10:51:35', 1, '', NULL, 1),
(3, '', 'Hansen', 'Hnsz', 'Hansenhoswari@gmail.com', '$2y$10$DMF.T6mKOkmOUmpuH9mTseHBoOtZj4hX2TVkt4B6DMieiROqdwXQi', 'default.webp', 'Male', '', '', 'Indonesia', '22-10-2023 10:52:37', 1, '', NULL, 1),
(30, '', 'Antonio', 'Ant', 'marcoantoniomadgaskar@gmail.com', '$2y$10$6M0sY7DtA3cEdmQ/CeXkFeGZmJsZ4LPnjUcRjuXICvPsYY8ls9jcS', 'default.webp', '', '', '', '', '03-12-2023 15:47:18', 1, '620004', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(2) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 2),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Explore');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(2) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `title` varchar(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/', 'ti-dashboard', 1),
(2, 1, 'Manage User', 'admin/manage_user', 'mdi mdi-account-multiple', 1),
(3, 1, 'Manage Role', 'admin/manage_role', 'mdi mdi-account-key', 1),
(4, 1, 'Manage Menu', 'admin/manage_menu', 'ti-layout-tab', 1),
(5, 1, 'Manage Sub-menu', 'admin/manage_sub_menu', 'ti-view-list-alt', 1),
(6, 1, 'Manage Books', 'admin/manage_books', 'mdi mdi-book-open-page-variant', 1),
(7, 2, 'My Profile', 'user/', 'mdi mdi-account-card-details', 1),
(8, 2, 'Change Password', 'user/change_password', 'ti-unlock', 1),
(9, 3, 'My Books', 'explore/', 'ti-book', 1),
(10, 3, 'Explorations', 'explore/explorations', 'mdi mdi-compass-outline', 1),
(11, 3, 'Collaborations', 'explore/collaborations', 'mdi mdi-compass-outline', 1),
(12, 3, 'Explorations', 'explore/explorations', 'mdi mdi-compass-outline', 0),
(13, 3, 'Collaborations', 'explore/collaborations', 'mdi mdi-compass-outline', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
