-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 10:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tri-exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`, `RegDate`) VALUES
(1, 'johnpels', '70d6e9549d5e066aa5aaa0b9e8fdbf17c31b2b97', '2019-04-20 00:00:04'),
(2, 'joshtom', '3f363c470dbc20c1e34c768fb2c94c2212e6a309', '2019-04-20 00:00:46'),
(3, 'samuel', 'c16aab9fe3288df0fb8fc1d24990a300b6b8f299', '2019-04-20 00:03:40');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `sortname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `sortname`) VALUES
(1, 'Science Class', 'SC'),
(2, 'Art Class', 'AT'),
(3, 'Commercial Class', 'CM');

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE `instruction` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruction`
--

INSERT INTO `instruction` (`id`, `text`, `date`) VALUES
(1, 'You are required to comply with the directions given by the head invigilator at the examination venue.', '2019-05-08 13:48:15'),
(2, 'Your student identity card or other valid photo identification must be visible on your desk during the entire examination (Student ID App with photo is not valid as identification).', '2019-05-08 13:48:15'),
(3, 'You may keep food and drink on or by the desk during the entire examination. You may eat and drink whenever you want.', '2019-05-08 13:48:47'),
(4, 'You are not permitted to leave the venue for a break before 9.30 a.m.   If you wish to withdraw from the examination, please note that you are not permitted to leave the venue before 10 a.m. at the earliest, see below, Withdrawing from an examination.', '2019-05-08 13:48:47'),
(5, 'If anything in the examination question paper is unclear, you can contact the lecturer visiting the venue. Such contact is facilitated by the head invigilator at the venue.\r\nLaw: The student representatives do not represent the faculty, but if anything in the examination question paper is unclear the student representative at the venue can pass on the query to the right person(s) in charge.', '2019-05-08 13:49:20'),
(6, 'Papers and computer/laptop are to be covered when you leave your place.', '2019-05-08 13:49:20'),
(7, 'If you experience technical problems during a digital examination, you must immediately contact one of the invigilators. The invigilator will call for technical support. Failure to report such technical problems might be treated as cheating or an attempt to cheat.  ', '2019-05-08 13:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `class_id` int(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `question_desc` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `true_answer` text NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `class_id`, `subject_id`, `question_desc`, `option1`, `option2`, `option3`, `option4`, `true_answer`, `uploaded_date`) VALUES
(1, 1, 2, '<p>What is Chemistry?</p>\r\n', 'It is part of Science subjects', 'It is part of life &lt;&gt;', 'It is part of life &lt;&gt;', 'It is part of life &lt;&gt;', 'It is study of chemical and its properties.', '2019-03-12 18:38:34'),
(2, 2, 10, '<p>How many local governments are there in Nigeria?</p>\r\n', '120 @', '150', '770', '774', '774', '2019-03-12 18:49:31'),
(3, 2, 12, '<p>What is the name of the father of Jesus Christ?</p>\r\n', 'Zechariah &lt;sup&gt;2&lt;/sup&gt;', 'Joseph', 'david', 'john', 'joseph', '2019-03-12 18:53:52'),
(4, 3, 18, '<p>What is commmerce?</p>\r\n', 'it is study of bank', 'it is the study of trade and commerce', 'it is the study of commercial related affairs', 'it is the study of commercial related affairs', 'it is the study of commercial related affairs', '2019-03-12 19:05:53'),
(5, 2, 10, '&lt;p&gt;What is the capital of Lagos state?&lt;/p&gt;\r\n', 'Oyo', 'Lagos', 'Osun', 'Zamfara', 'Lagos', '2019-03-12 19:13:47'),
(6, 2, 10, '&lt;p&gt;What is the name of the first president of federal republic of Nigeria?&lt;/p&gt;\n', 'Tafawa Balewa', 'Nnamdi Azikiwe', 'Muhammadu Buhari', 'Goodluck Jonathan', 'Nnamdi Azikiwe', '2019-04-19 22:55:44'),
(7, 3, 17, '&lt;p&gt;What is Accounting?&lt;/p&gt;\r\n', 'Study of Life', 'Study of Chemical', 'Study of money', 'Study of body metabolism', 'Study of money', '2019-04-19 23:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `middle` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `first`, `middle`, `last`, `phone`, `image`, `reg_no`, `level`, `dept`, `reg_date`) VALUES
(1, 'olajide', 'tomiwa', 'joshua', '08136023230', 'uploads/IMG-20190208-WA0023.jpg', 'tri8982726', '500L', 'Computer Science', '2019-03-09 20:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `class_id`, `sub_name`, `sub_regdate`, `status`) VALUES
(1, 1, 'Physics', '2019-04-29 19:44:47', 'Disabled'),
(2, 1, 'Chemistry', '2019-04-29 19:51:48', 'Disabled'),
(3, 1, 'Biology', '2019-04-29 19:29:46', 'Disabled'),
(4, 1, 'Mathematics', '2019-04-29 19:29:46', 'Disabled'),
(5, 1, 'Further Mathematics', '2019-04-30 05:52:55', 'Disabled'),
(6, 1, 'Use of English ', '2019-04-29 19:29:46', 'Disabled'),
(7, 1, 'Agricultural Science', '2019-04-29 19:29:46', 'Disabled'),
(8, 1, 'Geography', '2019-04-29 19:29:46', 'Disabled'),
(9, 1, 'Economics', '2019-04-29 19:29:46', 'Disabled'),
(10, 2, 'Government', '2019-04-29 19:48:35', 'Disabled'),
(11, 2, 'I.R.S', '2019-04-29 19:29:46', 'Disabled'),
(12, 2, 'C.R.S', '2019-04-29 19:29:46', 'Disabled'),
(13, 2, 'Literature in English', '2019-04-29 19:29:46', 'Disabled'),
(14, 2, 'Use of English', '2019-04-29 19:29:46', 'Disabled'),
(15, 3, 'Mathematics', '2019-04-29 19:29:46', 'Disabled'),
(16, 3, 'Use of English', '2019-04-29 19:29:46', 'Disabled'),
(17, 3, 'Account', '2019-04-29 19:29:46', 'Disabled'),
(18, 3, 'Commerce', '2019-04-29 19:29:46', 'Disabled'),
(19, 3, 'Government', '2019-04-29 19:29:46', 'Disabled'),
(20, 3, 'Economics', '2019-04-29 19:29:46', 'Disabled'),
(21, 2, 'Mathematics', '2019-04-29 19:29:46', 'Disabled'),
(22, 2, 'Economics', '2019-04-29 19:29:46', 'Disabled'),
(23, 1, 'Computer Studies', '2019-04-29 19:29:46', 'Disabled'),
(24, 2, 'Computer Studies', '2019-04-29 19:29:46', 'Disabled'),
(25, 3, 'Computer Studies', '2019-04-29 19:29:46', 'Disabled'),
(26, 2, 'French Language', '2019-04-29 19:29:46', 'Disabled'),
(27, 2, 'History', '2019-04-29 19:29:46', 'Disabled'),
(28, 2, 'Fine and Applied Arts', '2019-04-29 19:29:46', 'Disabled'),
(29, 2, 'Yoruba Language', '2019-04-29 19:29:46', 'Disabled'),
(30, 1, 'Yoruba language', '2019-04-29 19:29:46', 'Disabled'),
(31, 3, 'Yoruba Language', '2019-04-29 19:29:46', 'Disabled'),
(32, 1, 'Igbo Language', '2019-04-29 19:29:46', 'Disabled'),
(33, 2, 'Igbo Language', '2019-04-29 19:29:46', 'Disabled'),
(34, 3, 'Igbo Language', '2019-04-29 19:29:46', 'Disabled');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `timer_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `timer` varchar(50) NOT NULL,
  `duration` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`timer_id`, `student_id`, `timer`, `duration`) VALUES
(1, '1', '10:50:17', 0),
(2, '2', '10:50:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`timer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `instruction`
--
ALTER TABLE `instruction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
