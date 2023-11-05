-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 03:26 PM
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
  `book_name` varchar(30) NOT NULL,
  `book_author` varchar(15) NOT NULL,
  `content` text NOT NULL,
  `crtby` varchar(20) NOT NULL,
  `crtdt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `content`, `crtby`, `crtdt`) VALUES
(1, 'Beauty and the Beast', '', 'Pada suatu waktu di sebuah desa kecil, hidup seorang gadis muda yang cantik dan baik hati bernama Belle. Belle adalah seorang pecinta buku yang selalu mencari petualangan dalam cerita-cerita yang dia baca. Meskipun ia dianggap aneh oleh penduduk desa karena kecintaannya pada buku dan pengetahuannya yang luas, Belle tetap bahagia dengan hidupnya.\n\nSuatu hari, ayah Belle pergi ke hutan untuk mengambil bunga mawar yang langka. Dia tersesat dan menemukan dirinya di depan sebuah istana yang tampak kosong. Tanpa izin, ayah Belle mencabut sebuah mawar dari taman istana untuk membawanya sebagai hadiah untuk putrinya. Namun, pemilik istana, seorang makhluk mengerikan yang disebut Beast, muncul dan marah karena mawar itu dicuri.\n\nBeast memberikan ultimatum kepada ayah Belle: ia harus tinggal di istana Beast sebagai gantinya. Belle mendengar tentang nasib ayahnya dan menawarkan diri untuk mengambil tempat ayahnya di penjara Beast. Beast setuju, dan ayah Belle dipulangkan.\n\nBelle menjadi tawanan di istana Beast, tetapi seiring berjalannya waktu, mereka mulai mengembangkan hubungan. Beast adalah makhluk yang kasar dan marah pada awalnya, tetapi Belle melihat bahwa di balik penampilan yang menakutkan, Beast adalah makhluk yang menderita dan kesepian. Mereka mulai berbicara, berbagi cerita, dan Belle belajar lebih banyak tentang Beast dan istana ajaib ini.\n\nSementara itu, di desa Belle, seorang pria tampan dan kasar bernama Gaston memutuskan bahwa dia akan menikahi Belle, meskipun Belle tidak tertarik padanya. Dia merencanakan untuk membawa Belle kembali ke desa dengan atau tanpa izinnya.\n\nDi istana Beast, Belle menemukan bahwa Beast memiliki perpustakaan besar yang luar biasa, yang menggembirakan gadis pecinta buku ini. Beast memberikan perpustakaan itu sebagai hadiah, dan Belle semakin dekat dengan Beast.\n\nNamun, Beast memiliki kutukan di atasnya. Kutukan itu bisa dipatahkan hanya jika seseorang mencintai Beast sejati, dan Beast mencintai mereka kembali sebelum bunga mawar terakhir yang dicuri ayah Belle layu. Gaston dan penduduk desa datang ke istana untuk menghadapi Beast, dan pertarungan sengit pun pecah.\n\nSementara itu, Belle tiba di desa dan mencoba memberi tahu penduduk tentang Beast dan kutukannya. Mereka awalnya tidak percaya padanya, tetapi mereka menyaksikan pertarungan di istana. Belle akhirnya menyatakan cintanya kepada Beast tepat pada saat terakhir, ketika bunga mawar terakhir hampir layu.\n\nCinta Belle mematahkan kutukan tersebut, dan Beast berubah kembali menjadi seorang pangeran yang tampan. Mereka hidup bahagia selamanya, dan desa menyadari bahwa Belle bukanlah gadis aneh, dan bahwa cinta sejati datang dalam berbagai bentuk.', 'System', '2023-11-05');

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
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
