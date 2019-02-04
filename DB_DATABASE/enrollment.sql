-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 12:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$YUe8Drv7A3z7uZOjX5muEe3qMLq5RDCysqvOWf86zIM7n/HNUIKyC', '01745987458', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_11_28_144554_create_students_table', 1),
(2, '2018_11_28_155207_create_admin_table', 2),
(3, '2018_11_30_170604_create_students_table', 3),
(4, '2018_12_23_115933_create_teachers_table', 4),
(5, '2018_12_23_120307_create_teachers_table', 5),
(6, '2018_12_23_120532_create_teachers_table', 6),
(7, '2018_12_23_130131_create_teachers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admissionyear` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `email`, `password`, `phone`, `fathername`, `mothername`, `image`, `address`, `department`, `admissionyear`, `created_at`, `updated_at`) VALUES
(2, 'Mahfuz', '4680', 'mahfuz@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '01768094971', 'Saker Ali', 'Mahfuza', 'image/opIweBxgA907pkn6jesc.png', 'Dhanmondi, Dhaka', 'CSE', '2018-12-14', NULL, NULL),
(3, 'Asif', '4612', 'asif@gmail.com', '202cb962ac59075b964b07152d234b70', '01944610609', 'Kabir Shekh', 'Keya Rahman', 'image/WVLUSfwRo3KkWGWBNX3i.jpg', 'Mirpur, Dhaka', 'EEE', '2018-12-19', NULL, NULL),
(4, 'Akib', '1562', 'akib@gmail.com', '202cb962ac59075b964b07152d234b70', '687168', 'ferfrf', 'rfreferf', 'image/AqanCbGJNF9B6D9j7qKU.jpg', 'rfrfr', 'EEE', '2018-12-20', NULL, NULL),
(5, 'Feroz', '524', 'feroz@gmail.com', '202cb962ac59075b964b07152d234b70', '533', 'nfgn', 'gng', 'image/oZq3uzRTVf3Yh1xFpqtc.png', 'gngngn', 'CSE', '2018-12-12', NULL, NULL),
(8, 'Mimi', '4680', 'mimi@gmail.com', '$2y$10$MHNwkXwFVNZmiBhu69jKKOE7X2YktcfmTh5jJ6JgT3NTjrnGHXDF2', '01768094971', 'Rased Ali', 'Moriom', '', 'Dhanmondi-15, Dhaka', 'Cse', '2018', NULL, NULL),
(9, 'Rimi', '53432', 'rimi@gmail.com', '$2y$10$UIf91/ykIspNEFtW66bvz.WHVIKwC876u2G6GL2u9zlZycJeb2q1q', '019152564611', 'Riyad Ahmed', 'Rehana', 'image/Gcc2yRlB9a2s2Tr8EuJT.png', 'Dhaka', 'EEE', '2019-02-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `teacher_id`, `department`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Mahfuz', '100', 'CSE', 'mahfuz@gmail.com', '202cb962ac59075b964b07152d234b70', 'image/ywenutNlFwufh7W7G03t.png', NULL, NULL),
(2, 'Kabir', '150', 'EEE', 'kabir@gmail.com', '202cb962ac59075b964b07152d234b70', 'image/XiHxHOn1nasagG1SN1AF.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
