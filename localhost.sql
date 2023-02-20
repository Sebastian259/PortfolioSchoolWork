-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2023 at 07:00 PM
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
-- Database: `footer_data`
--
CREATE DATABASE IF NOT EXISTS `footer_data` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `footer_data`;

-- --------------------------------------------------------

--
-- Table structure for table `footer_data_text`
--

CREATE TABLE `footer_data_text` (
  `logo_path` varchar(100) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `fb_path` varchar(100) NOT NULL,
  `ig_path` varchar(100) NOT NULL,
  `pinterest_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer_data_text`
--

INSERT INTO `footer_data_text` (`logo_path`, `copyright`, `fb_path`, `ig_path`, `pinterest_path`) VALUES
('Logo.png', 'copyright © 2023 ', 'icons/fb.png', 'icons/ig.png', 'icons/pinterest.png'),
('Logo.png', 'copyright © 2023 ', 'icons/fb.png', 'icons/ig.png', 'icons/pinterest.png');

-- --------------------------------------------------------

--
-- Table structure for table `recent_work_data`
--

CREATE TABLE `recent_work_data` (
  `img_id` text NOT NULL,
  `work_img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent_work_data`
--

INSERT INTO `recent_work_data` (`img_id`, `work_img_path`) VALUES
('web', 'work/design/design01.png'),
('models', 'work/models/mod01.png'),
('photo', 'work/photo/photo01.png'),
('models', 'work/models/mod02.png'),
('photo', 'work/photo/photo02.png'),
('models', 'work/models/mod03.png'),
('photo', 'work/photo/photo03.png'),
('models', 'work/models/mod04.png'),
('models', 'work/models/mod05.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
