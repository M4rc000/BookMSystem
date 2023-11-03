-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 07:39 PM
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
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(10) NOT NULL,
  `menu_url` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`) VALUES
(1, 'Admin', 'admin'),
(2, 'User', 'user'),
(3, 'Explore', 'explore');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(2) NOT NULL,
  `role_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `role_access_menu`
--

CREATE TABLE `role_access_menu` (
  `role_access_menu_id` int(2) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_access_menu`
--

INSERT INTO `role_access_menu` (`role_access_menu_id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 2),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `submenu_id` int(11) NOT NULL,
  `menu_id` int(2) NOT NULL,
  `submenu_name` varchar(20) NOT NULL,
  `submenu_url` varchar(50) NOT NULL,
  `submenu_icon` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`submenu_id`, `menu_id`, `submenu_name`, `submenu_url`, `submenu_icon`, `is_active`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `place_of_birth` varchar(10) DEFAULT NULL,
  `date_of_birth` varchar(15) DEFAULT NULL,
  `date_joined` varchar(30) NOT NULL,
  `is_active` int(2) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `image`, `gender`, `place_of_birth`, `date_of_birth`, `date_joined`, `is_active`, `role_id`) VALUES
(1, 'Marco', 'Prime', 'marcoantoniomadgaskar@gmail.com', '$2y$10$fBSRG6NDyZGRe', 'default.jpg', 'Male', '', '', '22-10-2023 10:49:21', 1, 1),
(2, 'Robby', 'Robbs', 'robbyarsyadani@gmail.com', '$2y$10$5bo924uVR0Rkp', 'default.jpg', 'Male', '', '', '22-10-2023 10:51:35', 1, 1),
(3, 'Hansen', 'Hnsz', 'Hansenhoswari@gmail.com', '$2y$10$EYlyliOHGqTb0', 'default.jpg', '', '', '', '22-10-2023 10:52:37', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_access_menu`
--
ALTER TABLE `role_access_menu`
  ADD PRIMARY KEY (`role_access_menu_id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_access_menu`
--
ALTER TABLE `role_access_menu`
  MODIFY `role_access_menu_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
