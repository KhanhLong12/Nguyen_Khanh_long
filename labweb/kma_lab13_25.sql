-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 03:39 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kma_lab13_25`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(255) DEFAULT NULL,
  `ClassDescription` varchar(255) DEFAULT NULL,
  `NumOfStudents` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `ClassName`, `ClassDescription`, `NumOfStudents`) VALUES
(1, 'PHP001', 'lỚP PHP001', 50),
(2, '0908M', 'LỚP 0908M', 50),
(3, '0908L', 'LỚP 0908L', 50),
(4, '09A3G', 'LỚP 09A3G', 50),
(5, '09A1H', 'LỚP 09A1H', 50);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `StudentGender` varchar(10) NOT NULL,
  `StudentAddress` varchar(255) NOT NULL,
  `StudentImage` varchar(255) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `StudentName`, `StudentGender`, `StudentAddress`, `StudentImage`, `ClassId`, `description`, `phone`) VALUES
(4, 'Trung Quân 4 "lớp 09A3G id lớp =4"', '1', 'Thanh Hóa', '', 4, '', ''),
(5, 'Trung Quân 5 "lớp 09A1H id lớp =5"', '1', 'Thanh Hóa', '', 5, '', ''),
(41, 'Trung Quân Handsome', '0', 'Thanh Hóa', 'IMG_2568.jpg', 1, '<p>Đẹp Trai 1</p>\r\n', ''),
(42, 'Trung Quân Handsome', '1', 'Thanh Hóa', 'anh1.jpg', 1, '', ''),
(43, 'Trung Quân Handsome', '1', 'Thanh Hóa', 'anh1.jpg', 1, '', ''),
(44, 'Trung Quân Handsome', '1', 'Thanh Hóa', 'anh1.jpg', 1, '', ''),
(45, 'Trung Quân Handsome', '1', 'Thanh Hóa', 'anh1.jpg', 1, '', ''),
(46, 'Trung Quân Handsome', '1', 'Thanh Hóa', 'anh1.jpg', 1, '', ''),
(47, 'Trung Quân Handsome', '1', 'Thanh Hóa', 'anh1.jpg', 1, '', ''),
(48, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(49, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(50, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(51, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(52, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(53, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(54, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(55, 'Trung Quân Handsome 2', '1', 'Hà Nội', 'IMG_2568.jpg', 2, '', ''),
(56, 'Trung Quân Handsome 3', '1', 'Thanh Hóa', 'IMG_2594.jpg', 3, '', ''),
(57, 'Trung Quân Handsome 3', '1', 'Thanh Hóa', 'IMG_2594.jpg', 3, '', ''),
(58, 'Trung Quân Handsome 3', '1', 'Thanh Hóa', 'IMG_2594.jpg', 3, '', ''),
(59, 'Trung Quân Handsome 3', '1', 'Thanh Hóa', 'IMG_2594.jpg', 3, '', ''),
(60, 'Trung Quân Handsome 3', '1', 'Thanh Hóa', 'IMG_2594.jpg', 3, '', ''),
(61, 'Trung Quân Handsome 3', '1', 'Thanh Hóa', 'IMG_2594.jpg', 1, '', ''),
(62, 'Trung Quân Handsome 11', '1', 'Thanh Hóa', 'IMG_2525-2.jpg', 1, '<p>Very Handsome</p>\r\n', '+84163630800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ClassId` (`ClassId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`ClassId`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
