-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 03:49 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(3, 'Commercial Class', 'CM'),
(4, 'Dew', 'dw');

-- --------------------------------------------------------

--
-- Table structure for table `dosubject`
--

CREATE TABLE `dosubject` (
  `id` int(11) NOT NULL,
  `dostd_id` int(11) NOT NULL,
  `doclass_id` int(11) NOT NULL,
  `dosub_id` int(11) NOT NULL,
  `time` varchar(1000) NOT NULL,
  `duration` int(11) NOT NULL,
  `istaken` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='To check if subject has been done or not';

--
-- Dumping data for table `dosubject`
--

INSERT INTO `dosubject` (`id`, `dostd_id`, `doclass_id`, `dosub_id`, `time`, `duration`, `istaken`) VALUES
(1, 2, 2, 10, '2019-06-05 23:36:16', 0, 0);

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
(7, 3, 17, '&lt;p&gt;What is Accounting?&lt;/p&gt;\r\n', 'Study of Life', 'Study of Chemical', 'Study of money', 'Study of body metabolism', 'Study of money', '2019-04-19 23:02:32'),
(8, 1, 2, '\r\nWhat is the first element on the periodic table?', 'Hydrogen', 'Helium', 'Lithium', 'Berelium', 'Hydrogen', '2019-06-04 10:40:31'),
(9, 1, 2, 'What is the centre of an atom called?', ' A nucleus', 'Mercury', 'Nuclear', 'Nuclear fission', ' A nucleus', '2019-05-27 10:39:15'),
(10, 4, 35, '&lt;p&gt;What is SEO&lt;/p&gt;\r\n', 'Beans', 'Rice', 'Yam', 'Garri', 'Beans', '2019-05-27 15:18:49'),
(11, 1, 3, 'What is biology', 'Study of life', 'Study of math', 'Study of Checmistry', 'Study', 'Study of life', '2019-06-06 00:24:52'),
(12, 1, 3, 'What is the Osmosis', 'alaye', 'Wossss!', 'Omo Oloja!!!!', 'It is the study of Nose', 'alaye', '2019-06-06 00:24:52'),
(13, 1, 23, 'What is a computer?', 'it is a machine', 'It is a food', 'It is a table', 'It is a cat', 'it is a machine', '2019-06-06 00:36:55'),
(14, 1, 23, 'Example of a hard drive', 'HDD', 'YYD', 'DDS', 'SSE', 'HDD', '2019-06-06 00:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `surname` varchar(300) NOT NULL,
  `otherNames` varchar(300) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `phoneNumber` varchar(300) NOT NULL,
  `DateOfBirth` varchar(300) NOT NULL,
  `department` varchar(300) NOT NULL,
  `level` varchar(300) NOT NULL,
  `passport` varchar(300) NOT NULL,
  `subject1` varchar(300) NOT NULL,
  `subject2` varchar(300) NOT NULL,
  `subject3` varchar(300) NOT NULL,
  `subject4` varchar(300) NOT NULL,
  `subject5` varchar(300) NOT NULL,
  `subject6` varchar(300) NOT NULL,
  `subject7` varchar(300) NOT NULL,
  `subject8` varchar(300) NOT NULL,
  `subject9` varchar(300) NOT NULL,
  `examNumber` varchar(300) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `surname`, `otherNames`, `gender`, `phoneNumber`, `DateOfBirth`, `department`, `level`, `passport`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `examNumber`, `regDate`) VALUES
(1, 'Ajeigbe', 'John Oluwaseyi', 'Male', '08188974303', '1999-04-13', '1', 'S.S.S 3', '../images/Student_Images/Ajeigbe John Oluwaseyi.jpg', 'Biology', 'Biology', 'Agricultural Science', 'Biology', 'Biology', 'Biology', 'Biology', 'Biology', 'Biology', '37102095TECH', '2019-05-21 10:42:32'),
(2, 'Olajide', 'Joshua Tomiwa', 'Male', '08327438759', '1994-05-07', '2', 'S.S.S 2', '../images/Student_Images/Olajide Joshua Tomiwa.jpg', 'C.R.S', 'Computer Studies', 'Economics', 'Fine and Applied Arts', 'French Language', 'Government', 'History', 'History', 'Yoruba Language', '84434651TECH', '2019-05-21 11:42:43'),
(3, 'Adegoke', 'Peter Adewale', 'Male', '0808237847', '2000-03-05', '3', 'S.S.S 2', '../images/Student_Images/Adegoke Peter Adewale.jpg', 'Account', 'Commerce', 'Computer Studies', 'Government', 'Government', 'Computer Studies', 'Commerce', 'Computer Studies', 'Economics', '62947691TECH', '2019-05-21 11:46:34'),
(4, 'olajide', 'Joshua', 'Male', '8136023230', '2019-05-08', '1', 'S.S.S 3', '../images/Student_Images/olajide Joshua.png', 'Use of English ', 'Biology', 'Mathematics', 'Chemistry', 'Physics', 'Computer Studies', 'Further Mathematics', 'Geography', 'Economics', '88530877TECH', '2019-05-24 13:24:44'),
(5, 'Olorunfemi', 'DOminion', 'Male', '2349091652799', '1997-04-21', '4', 'S.S.S 3', '', 'SEO ', 'Select Subjects', 'Select Subjects', 'Select Subjects', 'Select Subjects', 'Select Subjects', 'Select Subjects', 'Select Subjects', 'Select Subjects', '15840303TECH', '2019-05-27 14:59:30'),
(6, 'olajide', 'vhfkjvf', 'Select...', '8136023230', '', 'Select...', 'S.S.S 1', '../images/Student_Images/olajide vhfkjvf.jpg', '', '', '', '', '', '', '', '', '', '45600035TECH', '2019-06-06 15:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `std_result`
--

CREATE TABLE `std_result` (
  `id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `subject1` varchar(200) NOT NULL,
  `subject2` varchar(200) NOT NULL,
  `subject3` varchar(200) NOT NULL,
  `subject4` varchar(200) NOT NULL,
  `subject5` varchar(200) NOT NULL,
  `subject6` varchar(200) NOT NULL,
  `subject7` varchar(200) NOT NULL,
  `subject8` varchar(200) NOT NULL,
  `subject9` varchar(200) NOT NULL,
  `subject1_score` int(11) NOT NULL,
  `subject2_score` int(11) NOT NULL,
  `subject3_score` int(11) NOT NULL,
  `subject4_score` int(11) NOT NULL,
  `subject5_score` int(11) NOT NULL,
  `subject6_score` int(11) NOT NULL,
  `subject7_score` int(11) NOT NULL,
  `subject8_score` int(11) NOT NULL,
  `subject9_score` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `resultdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_result`
--

INSERT INTO `std_result` (`id`, `student_id`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject1_score`, `subject2_score`, `subject3_score`, `subject4_score`, `subject5_score`, `subject6_score`, `subject7_score`, `subject8_score`, `subject9_score`, `total`, `resultdate`) VALUES
(1, '4', '', '', '', 'Chemistry', '', '', '', '', '', 0, 0, 0, 40, 0, 0, 0, 0, 0, 0, '2019-06-06 01:56:33'),
(2, '2', '', '', '', '', '', 'Government', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-06 01:59:04'),
(3, '2', '', '', '', '', '', 'Government', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-06 02:01:31'),
(4, '2', '', '', '', '', '', 'Government', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-09 14:43:15'),
(5, '2', '', '', '', '', '', 'Government', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-06-09 14:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_duration` int(200) NOT NULL,
  `sub_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `class_id`, `sub_name`, `sub_duration`, `sub_regdate`, `status`) VALUES
(1, 1, 'Physics', 102, '2019-05-28 11:34:08', 'Disabled'),
(2, 1, 'Chemistry', 100, '2019-05-28 11:34:25', 'Disabled'),
(3, 1, 'Biology', 60, '2019-05-28 11:34:32', 'Disabled'),
(4, 1, 'Mathematics', 10, '2019-05-30 03:58:25', 'Disabled'),
(5, 1, 'Further Mathematics', 20, '2019-05-30 03:58:34', 'Disabled'),
(6, 1, 'Use of English ', 60, '2019-05-30 03:58:45', 'Disabled'),
(7, 1, 'Agricultural Science', 45, '2019-05-30 03:58:57', 'Disabled'),
(8, 1, 'Geography', 0, '2019-04-29 19:29:46', 'Disabled'),
(9, 1, 'Economics', 0, '2019-04-29 19:29:46', 'Disabled'),
(10, 2, 'Government', 0, '2019-04-29 19:48:35', 'Disabled'),
(11, 2, 'I.R.S', 0, '2019-04-29 19:29:46', 'Disabled'),
(12, 2, 'C.R.S', 0, '2019-04-29 19:29:46', 'Disabled'),
(13, 2, 'Literature in English', 0, '2019-04-29 19:29:46', 'Disabled'),
(14, 2, 'Use of English', 0, '2019-04-29 19:29:46', 'Disabled'),
(15, 3, 'Mathematics', 0, '2019-04-29 19:29:46', 'Disabled'),
(16, 3, 'Use of English', 0, '2019-04-29 19:29:46', 'Disabled'),
(17, 3, 'Account', 0, '2019-04-29 19:29:46', 'Disabled'),
(18, 3, 'Commerce', 0, '2019-04-29 19:29:46', 'Disabled'),
(19, 3, 'Government', 0, '2019-04-29 19:29:46', 'Disabled'),
(20, 3, 'Economics', 0, '2019-04-29 19:29:46', 'Disabled'),
(21, 2, 'Mathematics', 0, '2019-04-29 19:29:46', 'Disabled'),
(22, 2, 'Economics', 0, '2019-04-29 19:29:46', 'Disabled'),
(23, 1, 'Computer Studies', 0, '2019-04-29 19:29:46', 'Disabled'),
(24, 2, 'Computer Studies', 0, '2019-04-29 19:29:46', 'Disabled'),
(25, 3, 'Computer Studies', 0, '2019-04-29 19:29:46', 'Disabled'),
(26, 2, 'French Language', 0, '2019-04-29 19:29:46', 'Disabled'),
(27, 2, 'History', 0, '2019-04-29 19:29:46', 'Disabled'),
(28, 2, 'Fine and Applied Arts', 0, '2019-04-29 19:29:46', 'Disabled'),
(29, 2, 'Yoruba Language', 60, '2019-05-28 15:28:08', 'Disabled'),
(30, 1, 'Yoruba language', 60, '2019-05-28 15:28:02', 'Disabled'),
(31, 3, 'Yoruba Language', 60, '2019-05-28 15:28:12', 'Disabled'),
(32, 1, 'Igbo Language', 0, '2019-04-29 19:29:46', 'Disabled'),
(33, 2, 'Igbo Language', 0, '2019-04-29 19:29:46', 'Disabled'),
(34, 3, 'Igbo Language', 0, '2019-04-29 19:29:46', 'Disabled'),
(35, 4, 'SEO ', 0, '2019-05-27 14:53:32', 'Disabled');

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
-- Indexes for table `dosubject`
--
ALTER TABLE `dosubject`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_result`
--
ALTER TABLE `std_result`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dosubject`
--
ALTER TABLE `dosubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `instruction`
--
ALTER TABLE `instruction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `std_result`
--
ALTER TABLE `std_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
