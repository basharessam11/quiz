-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 09:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` int(1) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `name`) VALUES
(1, 'مسابقة رمضانية');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_a`
--

CREATE TABLE `quiz_a` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `num` int(1) NOT NULL DEFAULT 0,
  `ok` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_a`
--

INSERT INTO `quiz_a` (`id`, `name`, `num`, `ok`) VALUES
(6, 'مسابقة رمضانية اليوم الاول', 26, 1),
(9, 'مسابقة رمضانية اليوم الثاني', 20, 1),
(12, 'مسابقة رمضانية اليوم الثالث', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_b`
--

CREATE TABLE `quiz_b` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `quiz_a` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_b`
--

INSERT INTO `quiz_b` (`id`, `name`, `quiz_a`) VALUES
(22, 'من هو النبي الذي لُقب بـ أبي الأنبياء؟\n\n', 6),
(23, 'bashar', 6),
(24, 'ghjgvbjhjk', 6),
(25, 'kkkk', 6),
(26, 'من هو النبي الذي اختصه الله عز وجل بقتل المسيح الدجال في آخر الزمان بعد فتنة البشر به؟', 9),
(27, 'من هي زوجة الرسول التي تسمى “والهة”؟', 9),
(28, 'من هو النبي الذي آمن جميع قومه به؟', 9);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_c`
--

CREATE TABLE `quiz_c` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `quiz_b` int(1) NOT NULL,
  `ok` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_c`
--

INSERT INTO `quiz_c` (`id`, `name`, `quiz_b`, `ok`) VALUES
(77, 'نبي الله موسى.\n', 22, 1),
(78, 'نبي الله إبراهيم.\n', 22, 0),
(79, 'نبي الله محمد.\n', 22, 0),
(80, 'سيدنا إبراهيم.', 22, 0),
(81, 'a4', 23, 1),
(82, 'a4', 23, 0),
(83, 'a4', 23, 0),
(84, 'a4', 23, 0),
(85, 'as', 24, 1),
(86, 'adf', 24, 0),
(87, 'aqse', 24, 0),
(88, 'sdfgh', 24, 0),
(89, 'as', 25, 1),
(90, 'adf', 25, 0),
(91, 'aqse', 25, 0),
(92, 'sdfgh', 25, 0),
(93, 'سيدنا إبراهيم عليه السلام.', 26, 0),
(94, 'سيدنا محمد صلي الله علية وسلم.', 26, 0),
(95, 'سيدنا عيسى عليه السلام.', 26, 1),
(96, 'سيدنا يونس عليه السلام.', 26, 0),
(97, 'زوجة سيدنا نوح عليه السلام.', 27, 0),
(98, 'زوجة سيدنا لوط عليه السلام.', 27, 1),
(99, 'زوجة سيدنا إبراهيم عليه السلام.', 27, 0),
(100, 'زوجة سيدنا موسي عليه السلام.', 27, 0),
(101, 'سيدنا هود عليه السلام.', 28, 0),
(102, 'سيدنا إبراهيم عليه السلام.', 28, 0),
(103, 'سيدنا يونس عليه السلام.', 28, 1),
(104, 'سيدنا موسي عليه السلام.', 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(1) NOT NULL,
  `user_id` int(1) NOT NULL,
  `quiz_a` int(1) NOT NULL,
  `num_b` int(1) NOT NULL,
  `yes` int(1) NOT NULL,
  `no` int(1) NOT NULL,
  `ok` int(1) NOT NULL,
  `date` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(155) NOT NULL,
  `pr` int(1) NOT NULL DEFAULT 2,
  `yes` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `pr`, `yes`) VALUES
(2, 'admin2', 'basharessam4@gmail.com', '01064696894', '25d55ad283aa400af464c76d713c07ad', 2, 0),
(6, 'admin1', '', '01064696895', '25d55ad283aa400af464c76d713c07ad', 1, 0),
(32, 'admin3', 'basharessam9@gmail.com', '01064696898', '25d55ad283aa400af464c76d713c07ad', 2, 0),
(33, 'admin4', 'basharessam74@gmail.com', '01064696899', '25d55ad283aa400af464c76d713c07ad', 2, 0),
(34, 'admin5', 'basharessam46@gmail.com', '01064696894', '25d55ad283aa400af464c76d713c07ad', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_a`
--
ALTER TABLE `quiz_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_b`
--
ALTER TABLE `quiz_b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_a` (`quiz_a`);

--
-- Indexes for table `quiz_c`
--
ALTER TABLE `quiz_c`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_b` (`quiz_b`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `quiz_a` (`quiz_a`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_a`
--
ALTER TABLE `quiz_a`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quiz_b`
--
ALTER TABLE `quiz_b`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `quiz_c`
--
ALTER TABLE `quiz_c`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz_b`
--
ALTER TABLE `quiz_b`
  ADD CONSTRAINT `quiz_b_ibfk_1` FOREIGN KEY (`quiz_a`) REFERENCES `quiz_a` (`id`);

--
-- Constraints for table `quiz_c`
--
ALTER TABLE `quiz_c`
  ADD CONSTRAINT `quiz_c_ibfk_1` FOREIGN KEY (`quiz_b`) REFERENCES `quiz_b` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`quiz_a`) REFERENCES `quiz_a` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
