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
-- Database: `fojtik_matura_data`
--
CREATE DATABASE IF NOT EXISTS `fojtik_matura_data` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fojtik_matura_data`;

-- --------------------------------------------------------

--
-- Table structure for table `footer_data_text`
--

CREATE TABLE `footer_data_text` (
  `id` INT(16) NOT NULL AUTO_INCREMENT,
  `logo_path` varchar(100) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `fb_path` varchar(100) NOT NULL,
  `ig_path` varchar(100) NOT NULL,
  `pinterest_path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Dumping data for table `footer_data_text`
--

INSERT INTO `footer_data_text` (`id`, `logo_path`, `copyright`, `fb_path`, `ig_path`, `pinterest_path`) VALUES
(NULL, 'Logo.png', 'copyright © 2023 ', 'icons/fb.png', 'icons/ig.png', 'icons/pinterest.png');

-- --------------------------------------------------------

--
-- Table structure for table `recent_work_data`
-- 

CREATE TABLE `recent_work_data` (
  `id` INT(16) NOT NULL AUTO_INCREMENT,
  `img_id` text NOT NULL,
  `work_img_path` text NOT NULL,
  PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent_work_data`
--

INSERT INTO `recent_work_data` (`id`, `img_id`, `work_img_path`) VALUES
(NULL, 'web', 'work/design/design01.png'),
(NULL, 'models', 'work/models/mod01.png'),
(NULL, 'photo', 'work/photo/photo01.png'),
(NULL, 'models', 'work/models/mod02.png'),
(NULL, 'photo', 'work/photo/photo02.png'),
(NULL, 'models', 'work/models/mod03.png'),
(NULL, 'photo', 'work/photo/photo03.png'),
(NULL, 'models', 'work/models/mod04.png'),
(NULL, 'models', 'work/models/mod05.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
