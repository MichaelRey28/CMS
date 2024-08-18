-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 04:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmstest`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `h2` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `span1` varchar(255) NOT NULL,
  `span2` varchar(255) NOT NULL,
  `span3` varchar(255) NOT NULL,
  `p2` varchar(500) NOT NULL,
  `btn` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `h2`, `p1`, `span1`, `span2`, `span3`, `p2`, `btn`) VALUES
(1, 'THIS IS ABOUT PAGE', 'ABOUT PAGE WORKS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'What is Lorem Ipsum?', 'Where does it come from?', 'Where can I get some?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bono', 'Read More');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `pass` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `h2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_det` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_det` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_det` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `h2`, `address`, `address_det`, `phone`, `phone_det`, `email`, `email_det`) VALUES
(1, 'THIS IS CONTACT PAGE', 'CONTACT PAGE WORKS', 'ADDRESS', 'Unit D, 2nd Floor Plaza Victoria Bldg., Sto. Rosario St., Sto. Domingo, Angeles City 2009 Philippines', 'PHONE', '+63 45 963 2025', 'EMAIL', 'info@bb88advertising.com');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `p` varchar(255) NOT NULL,
  `span1` varchar(255) NOT NULL,
  `span2` varchar(255) NOT NULL,
  `strong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `p`, `span1`, `span2`, `strong`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Copyright', 'All Rights Reserved.', 'Michael');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `nav1` varchar(255) DEFAULT NULL,
  `nav2` varchar(255) DEFAULT NULL,
  `nav3` varchar(255) DEFAULT NULL,
  `nav4` varchar(255) DEFAULT NULL,
  `nav5` varchar(255) DEFAULT NULL,
  `nav6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `logo`, `nav1`, `nav2`, `nav3`, `nav4`, `nav5`, `nav6`) VALUES
(1, 'bb88logo1.png', 'HOME', 'ABOUT', 'SERVICES', 'CONTACT', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(11) NOT NULL,
  `h2` varchar(255) DEFAULT NULL,
  `span` varchar(255) DEFAULT NULL,
  `p` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `btn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `h2`, `span`, `p`, `content`, `btn`) VALUES
(1, 'Content Management', 'System', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'HELKLO', 'Know More');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `h2` varchar(255) NOT NULL,
  `service1` varchar(255) NOT NULL,
  `service1p` varchar(255) NOT NULL,
  `service2` varchar(255) NOT NULL,
  `service2p` varchar(255) NOT NULL,
  `service3` varchar(255) NOT NULL,
  `service3p` varchar(255) NOT NULL,
  `service4` varchar(255) NOT NULL,
  `service4p` varchar(255) NOT NULL,
  `service5` varchar(255) NOT NULL,
  `service5p` varchar(255) NOT NULL,
  `service6` varchar(255) NOT NULL,
  `service6p` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `h2`, `service1`, `service1p`, `service2`, `service2p`, `service3`, `service3p`, `service4`, `service4p`, `service5`, `service5p`, `service6`, `service6p`) VALUES
(1, 'THIS IS SERVICE PAGE', 'SERVICES PAGE WORKS', 'What is Lorem Ipsum? ewan', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, yo', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
