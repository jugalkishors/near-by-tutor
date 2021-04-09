-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 05:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `join`
--

CREATE TABLE `join` (
  `id` int(254) NOT NULL,
  `stid` varchar(254) NOT NULL,
  `tchid` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join`
--

INSERT INTO `join` (`id`, `stid`, `tchid`) VALUES
(2, '', ''),
(6, '5', '4');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` varchar(13) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(14) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `password` varchar(13) NOT NULL,
  `class` varchar(30) NOT NULL,
  `medium` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `roll` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `dob`, `gender`, `contact`, `pincode`, `password`, `class`, `medium`, `city`, `address`, `state`, `roll`) VALUES
(1, 'Chirag Vishvakrma', 'chirag@gmail.com', '23-Aug-2005', 'Male', '75342324', '307001', 'chirag', '', '', '', '', '', 'student'),
(5, 'Ankit Oza', 'ankit@gmail.com', '1-Jan-1985', 'Male', '88977675', '302001', 'ankit', '', '', '', '', '', 'student'),
(6, 'Akshat Sharma', 'akshat@gmail.com', '10-Apr-2008', 'Male', '978676564', '302001', 'akshat', '', '', '', '', '', 'student'),
(7, 'Tarun Suthar', 'tksuthar@gmail.com', '', 'Male', '955654885', '307001', 'tarun', '', '', '', '', '', 'student'),
(8, 'Mukul ', 'mukul@gmail.com', '', 'Male', '995875211', '302154', 'mukul', '', '', '', '', '', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `subject1` varchar(100) NOT NULL,
  `subject2` varchar(100) NOT NULL,
  `subject3` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `board` varchar(25) NOT NULL,
  `medium` varchar(40) NOT NULL,
  `dob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `class`, `image`, `email`, `contact`, `Qualification`, `Experience`, `address`, `city`, `password`, `subject1`, `subject2`, `subject3`, `gender`, `board`, `medium`, `dob`) VALUES
(1, 'Anirudh Sharma', '7th to 8th class', 'upload/IMG-20180919-WA0050.jpg', '2018pgicsanirudh007@poornima.org', '999776655', 'B.tech under-graduation', '2-year', '11/87, near my house', 'Alwar', '1234', 'Mathametics', 'Science', 'None', '', '', '', ''),
(2, 'Divyesh Mali', '11th to 12th (Science Math)', 'upload/IMG_20180630_192302.jpg', 'divyeshmali@gmail.com', '2147483647', 'B.Sc. in Mathametics', '2 year', '21/326, Housing Board', 'Sirohi', 'jksuth', '', '', '', '', '', '', ''),
(3, 'Nirmal Mali', '9th to 10th class ', 'upload/IMG_20180426_190037.jpg', 'nirmalmali@gmail.com', '8058583952', 'B.Sc. in Mathametics', '2 year', 'Barloot', 'Sirohi', 'nirmal', '', '', '', '', '', '', ''),
(4, 'Dilip Suthar', '11th to 12th (Science Biology)', 'upload/IMG_20190103_174017.jpg', 'dilipbabu@gmail.com', '543245', 'B.Sc. in Physics', '2 year', 'Vaidhyanath colony', 'Sirohi', '1234', 'Physics', 'Math', 'Science', '', '', '', ''),
(5, 'Yogesh Malviya', '11th to 12th (Science Biology)', 'upload/IMG_20180428_210704.jpg', 'yogesh@gmail.com', '953322445', 'B. Pharma', '1 year', 'kailashnagar', 'Sirohi', 'yogesh', 'Physics', 'Biology', 'Chemistry', 'Male', 'Local State Board', 'Hindi Medium', ''),
(6, 'Bharat Sharma', '9th to 10th class ', 'img_avatar.png', 'bharat@gmail.com', '2147483647', 'B.tech CSE', '1 year', 'jaipur', 'Jaipur', 'bharat', '', '', '', '', '', '', ''),
(8, 'Tarun Suthar', '11th to 12th (Science Math)', 'upload/IMG-20190101-WA0026 (1).jpg', 'tarun@gmail.com', '98987656', 'B.tech CSE - (Under- Graduation)', '1 year', 'Aahor', 'Jalore', 'tarun', 'Mathametics', 'Chemistry', 'None', 'Male', 'ICSE', 'Hindi Medium', ''),
(9, 'Jksuthar', 'Nursary to 6th', 'upload/IMG_20180708_200103_837.jpg', 'chirag@gmail.com', '44553234', 'B.Sc. in Mathametics', '1 year', '21/326, Housing Board', 'Jaipur', 'chirag', 'None', 'Chemistry', 'None', 'Male', 'Local State Board', 'Hindi Medium', ''),
(10, 'Jugal Kishor', '11th to 12th (Science Math)', 'upload/IMG_20180708_200103_837.jpg', 'jugal@gmail.com', '8890209205', 'B.tech CSE - (Under- Graduation)', '2 year', 'Krishnapuri, Sirohi', 'Jaipur', 'jugal', 'General Science', 'Physics', 'Chemistry', 'Male', 'Local State Board', 'Hindi Medium', '2001-08-05'),
(11, 'Chinmay ', '11th to 12th (Science Math)', 'upload/img_avatar.png', 'chinmay@gmail.com', '9955642364', 'B.tech CSE - (Under- Graduation)', '2', 'Udaipur', 'Jaipur', 'chinmay', 'General Science', 'Physics', 'Chemistry', 'Male', 'Local State Board', 'Hindi Medium', '2001-08-05'),
(12, 'Mukul ', '11th to 12th (Science Biology)', 'upload/img_avatar.png', 'mukul@gmail.com', '654852221', 'B.tech EE - (Under- Graduation)', '2 year', 'Udaipur', 'Bikaner', 'mukul', 'Sanskrit', 'Mathametics', 'English', 'Male', 'Local State Board', 'Hindi Medium', '2019-08-17'),
(13, 'Pravin Jangid', '9th to 10th class ', 'upload/img_avatar.png', 'pravin@gmail.com', '112233545', 'B.tech', '2 year', 'Mandava', 'Jaipur', '1234', 'Physics', 'General Science', 'None', 'Male', 'ICSE', 'Hindi Medium', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `join`
--
ALTER TABLE `join`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `join`
--
ALTER TABLE `join`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
