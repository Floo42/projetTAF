-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 12:35 PM
-- Server version: 5.7.12
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ynov-taf`
--

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `contract_type` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(150) NOT NULL,
  `course` varchar(100) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `education_level` int(11) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `contract_type`, `description`, `title`, `course`, `start`, `end`, `education_level`, `speciality`, `url`) VALUES
(1, 'stage', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie erat sem, in euismod nunc lobortis a. Praesent tincidunt urna sed mauris interdum aliquam. Quisque porta diam sit amet enim sagittis congue. Morbi maximus auctor imperdiet. Integer et pulvinar eros. Mauris sagittis eu mauris ac faucibus. Integer aliquet diam eget nisi finibus, at luctus justo tempus. Fusce mollis fringilla arcu, a porta tellus imperdiet vel. Ut quis imperdiet mauris. Ut fringilla porttitor tincidunt. Pellentesque cursus sodales eros. Aliquam suscipit ligula ac orci venenatis posuere. Nulla nunc lacus, porta quis lacinia ut, tempus et mi. ', 'Développeur web', 'informatique', 1527485376, 1527785376, 2, 'IT', 'developpeur-web-99876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
