-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 10:33 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makos_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `dm_id` int(10) NOT NULL,
  `dm_name` varchar(500) NOT NULL,
  `dm_subrole` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`dm_id`, `dm_name`, `dm_subrole`) VALUES
(1, 'NEET', 'mechanical'),
(2, 'JEE', 'developer'),
(3, 'BANK', 'mba'),
(4, 'UPSC', 'developer'),
(5, 'RAILWAY', 'be'),
(6, 'ENGINEERING', 'be');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `intro_id` int(10) NOT NULL,
  `intro_data` mediumtext NOT NULL,
  `intro_comments` varchar(500) NOT NULL,
  `intro_date` varchar(100) NOT NULL,
  `intro_login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`intro_id`, `intro_data`, `intro_comments`, `intro_date`, `intro_login_id`) VALUES
(2, 'Hi There, I am Sahil Patel.,', 'fine.', '', 1),
(3, '', '', '', 0),
(4, 'ggvv', '', '07 Aug 2021', 6);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `subrole` varchar(100) NOT NULL,
  `interest` varchar(500) NOT NULL,
  `entry` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `email`, `password`, `role`, `subrole`, `interest`, `entry`) VALUES
(1, 'Sahil Patel', 'student@makos.com', 'student', 'student', '', 'JEE', 15),
(2, 'Manish Patel', 'admin@makos.com', 'admin', 'admin', 'mechanical', '', 1),
(3, 'Arun Patel', 'dev@g.c', '123', 'admin', 'developer', '', 5),
(4, 'Sachin Roy', 'mba@g.c', '123', 'admin', 'mba', '', 0),
(5, 'Pankaj Sahu', 'be@g.c', '123', 'admin', 'be', '', 0),
(6, 'Keval Rajak', 'st2@g.c', '123', 'student', '', 'NEET', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_qust`
--

CREATE TABLE `quiz_qust` (
  `qust_id` int(10) NOT NULL,
  `question` mediumtext NOT NULL,
  `opt1` varchar(1000) NOT NULL,
  `opt2` varchar(1000) NOT NULL,
  `opt3` varchar(1000) NOT NULL,
  `opt4` varchar(1000) NOT NULL,
  `correct1` varchar(5) NOT NULL,
  `correct2` varchar(5) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `series_id` int(10) NOT NULL,
  `type_id` int(10) NOT NULL,
  `domain_id` int(10) NOT NULL,
  `difficulty_level` int(2) NOT NULL,
  `flag_qust` varchar(10) NOT NULL,
  `flag_wrong` varchar(10) NOT NULL,
  `tags` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_qust`
--

INSERT INTO `quiz_qust` (`qust_id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `correct1`, `correct2`, `quiz_id`, `series_id`, `type_id`, `domain_id`, `difficulty_level`, `flag_qust`, `flag_wrong`, `tags`) VALUES
(10, 'ww', 'ww', 'ww', 'w', 'sww', 'c', 'd', 1, 4, 5, 3, 2, '', '', 'IQ'),
(11, 'rr', 'rr', 'rr', 'rr', 'rr', 'a', 'b', 1, 4, 1, 1, 5, '', '', 'IQ'),
(12, 'tt', 'rr', 'tt', 'rr', 'rr', 'a', 'd', 1, 1, 1, 1, 2, '', '', 'IQ'),
(13, 'tt', 'rr', 'tt', 'tt', 'rr', 'b', 'c', 1, 1, 1, 1, 1, '', '', 'IQ'),
(14, 'ff', 'ww', 'gg', 'bh', 'bb', 'a', 'b', 1, 1, 1, 2, 1, '', '', 'IQ'),
(15, 'tt', 'ee', 'ff', 'ff', 'bb', 'a', 'b', 3, 1, 1, 2, 2, '1', '1', 'IQ'),
(16, 'ff', 'cc', 'jj', 'ff', 'ff', 'a', 'b', 1, 1, 4, 2, 2, '', '', 'IQ'),
(17, 'tt', 'ff', ' hh', 'fff', ' bbb', 'b', 'c', 1, 1, 4, 2, 2, '', '', 'IQ'),
(18, 'ttuuh', 'hhh', 'bbn', 'ggg', 'vv', 'b', 'd', 1, 1, 4, 2, 2, '', '', 'IQ'),
(19, 'rtt', 'vvv', '   vggh', 'vvbn', 'jjkk', 'b', 'c', 1, 1, 4, 2, 3, '', '', 'IQ'),
(20, 'rr', 'hh', 'nn', 'gg', 'uu', 'b', 'c', 1, 1, 1, 4, 3, '', '', 'IQ'),
(21, 'rr', 'ff', 'bb', 'vv', 'yy', 'a', 'd', 1, 1, 4, 2, 2, '', '', 'IQ'),
(22, 'ttggjj', 'fgjj', 'tggh', 'nnm', 'hhhh', 'b', 'c', 1, 1, 4, 2, 2, '', '', 'IQ'),
(23, 'trfh', 'rggkjvvn', 'cvbnjh', 'fghh', 'vvbb', 'a', 'd', 1, 1, 4, 2, 4, '', '', 'IQ'),
(24, 'test', 'test', 'test', 'test', 'test', 'b', 'c', 2, 2, 1, 4, 3, '3', '2', 'IQ'),
(25, 'ted', 'ted', 'ted', 'ted', 'ted', 'a', 'c', 2, 2, 1, 2, 1, '2', '3', 'IQ'),
(26, 'ff', 'ff', 'hh', 'ff', 'kk', 'a', 'b', 2, 3, 4, 2, 2, '', '', 'IQ'),
(27, 'tt', 'gg', '6t', 'xx', 'vv', 'b', 'd', 3, 5, 2, 2, 2, '', '', 'IQ'),
(28, 'jj', 'gg', 'hh', 'gg', 'gg', 'b', 'd', 3, 6, 2, 2, 2, '', '', 'IQ'),
(29, 'ff', 'cc', 'cc', 'ss', 'vv', 'a', 'b', 3, 7, 2, 2, 2, '', '', 'IQ');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_topic`
--

CREATE TABLE `quiz_topic` (
  `quiz_id` int(10) NOT NULL,
  `quiz_title` varchar(500) NOT NULL,
  `no_of_qust` varchar(10) NOT NULL,
  `quiz_date` varchar(50) NOT NULL,
  `quiz_deadline` varchar(50) NOT NULL,
  `quiz_time` varchar(10) NOT NULL,
  `quiz_qust_limit` varchar(10) NOT NULL,
  `exam` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_topic`
--

INSERT INTO `quiz_topic` (`quiz_id`, `quiz_title`, `no_of_qust`, `quiz_date`, `quiz_deadline`, `quiz_time`, `quiz_qust_limit`, `exam`) VALUES
(1, 'Frontend', '0', '30 Jul 2021', '05 Aug 2021', '1', '', 'UPSC'),
(2, 'Arithmetic Progression', '3', '', '', '', '', 'JEE'),
(3, 'Telnet Acqusition', '3', '', '', '', '', 'NEET');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(10) NOT NULL,
  `score_data` varchar(10) NOT NULL,
  `score_quiz_id` int(10) NOT NULL,
  `score_login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `sr_id` int(10) NOT NULL,
  `sr_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`sr_id`, `sr_name`) VALUES
(1, 'Aptitude'),
(2, 'Technical'),
(3, 'General Knowledge'),
(4, 'Newspaper'),
(6, 'CA'),
(7, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(10) NOT NULL,
  `type_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Engineering'),
(2, 'MBA'),
(3, 'BCA'),
(4, 'Sports'),
(5, 'Financial');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `up_id` int(10) NOT NULL,
  `up_login_id` int(10) NOT NULL,
  `up_fullname` varchar(500) NOT NULL,
  `up_father` varchar(500) NOT NULL,
  `up_mother` varchar(500) NOT NULL,
  `up_email` varchar(100) NOT NULL,
  `up_age` varchar(10) NOT NULL,
  `up_gender` varchar(10) NOT NULL,
  `up_height` varchar(50) NOT NULL,
  `up_hobbies` varchar(500) NOT NULL,
  `up_dob` varchar(50) NOT NULL,
  `up_phone` varchar(20) NOT NULL,
  `up_married` varchar(50) NOT NULL,
  `up_religion` varchar(100) NOT NULL,
  `up_about` mediumtext NOT NULL,
  `up_image` varchar(100) NOT NULL,
  `up_address` varchar(500) NOT NULL,
  `up_city` varchar(100) NOT NULL,
  `up_state` varchar(100) NOT NULL,
  `up_postcode` varchar(10) NOT NULL,
  `up_nationality` varchar(200) NOT NULL,
  `up_10_school` varchar(500) NOT NULL,
  `up_10_city` varchar(100) NOT NULL,
  `up_10_state` varchar(100) NOT NULL,
  `up_10_cgpa` varchar(10) NOT NULL,
  `up_10_board` varchar(100) NOT NULL,
  `up_10_yop` varchar(20) NOT NULL,
  `up_12_school` varchar(500) NOT NULL,
  `up_12_city` varchar(100) NOT NULL,
  `up_12_state` varchar(100) NOT NULL,
  `up_12_cgpa` varchar(10) NOT NULL,
  `up_12_board` varchar(100) NOT NULL,
  `up_12_yop` varchar(20) NOT NULL,
  `up_ug_college` varchar(500) NOT NULL,
  `up_ug_city` varchar(100) NOT NULL,
  `up_ug_state` varchar(100) NOT NULL,
  `up_ug_cgpa` varchar(10) NOT NULL,
  `up_ug_university` varchar(200) NOT NULL,
  `up_ug_yop` varchar(50) NOT NULL,
  `up_pg_college` varchar(100) NOT NULL,
  `up_pg_city` varchar(100) NOT NULL,
  `up_pg_state` varchar(100) NOT NULL,
  `up_pg_cgpa` varchar(10) NOT NULL,
  `up_pg_university` varchar(100) NOT NULL,
  `up_pg_yop` varchar(50) NOT NULL,
  `up_work_designation` varchar(500) NOT NULL,
  `up_work_company` varchar(500) NOT NULL,
  `up_work_address` varchar(500) NOT NULL,
  `up_work_start` varchar(50) NOT NULL,
  `up_work_end` varchar(50) NOT NULL,
  `up_work_desc` varchar(1000) NOT NULL,
  `up_work_resume` varchar(100) NOT NULL,
  `up_career` mediumtext NOT NULL,
  `up_por` varchar(500) NOT NULL,
  `up_interest` varchar(500) NOT NULL,
  `up_leading_score` varchar(10) NOT NULL,
  `up_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`up_id`, `up_login_id`, `up_fullname`, `up_father`, `up_mother`, `up_email`, `up_age`, `up_gender`, `up_height`, `up_hobbies`, `up_dob`, `up_phone`, `up_married`, `up_religion`, `up_about`, `up_image`, `up_address`, `up_city`, `up_state`, `up_postcode`, `up_nationality`, `up_10_school`, `up_10_city`, `up_10_state`, `up_10_cgpa`, `up_10_board`, `up_10_yop`, `up_12_school`, `up_12_city`, `up_12_state`, `up_12_cgpa`, `up_12_board`, `up_12_yop`, `up_ug_college`, `up_ug_city`, `up_ug_state`, `up_ug_cgpa`, `up_ug_university`, `up_ug_yop`, `up_pg_college`, `up_pg_city`, `up_pg_state`, `up_pg_cgpa`, `up_pg_university`, `up_pg_yop`, `up_work_designation`, `up_work_company`, `up_work_address`, `up_work_start`, `up_work_end`, `up_work_desc`, `up_work_resume`, `up_career`, `up_por`, `up_interest`, `up_leading_score`, `up_date`) VALUES
(1, 0, 'm', 'p', '', '', '', '', '', '', '', 'mkp@d.c', '', '', '', '', 'Dau para', 'Bemetara', 'Chhattisgarh', '491338', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'Sahil Patel', 'Ram', 'ttt', 'st@quiz.com', '18', 'male', '6', 'enter', '2018-11-23', '675755348', 'married', 'indian', 'how', 'files/610e7385227a62.95170398.jpg', 'Dau para', 'ggg', 'ggh', '366667', 'iii', 'fhhj', 'yhh', 'fff', '80', 'gg', '2021-01', 'tt', 'ccv', 'dgh', '80', 'ccg', '2021-01', 'ggn', 'vvb', 'hhj', '80', 'fgg', '2021-01', 'ffh', ' ggg', 'rtgg', '80', 'ghh', '2021-01', 'cvv', 'ccg', 'fhh', '2014-06-23', '2020-06-23', 'fbb', 'files/610e7385227a62.64226630.jpg', 'gb', 'jjj', 'ggh', '80', '17:20 PM 07 Aug 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`intro_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `quiz_qust`
--
ALTER TABLE `quiz_qust`
  ADD PRIMARY KEY (`qust_id`);

--
-- Indexes for table `quiz_topic`
--
ALTER TABLE `quiz_topic`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`up_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `dm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `intro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz_qust`
--
ALTER TABLE `quiz_qust`
  MODIFY `qust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `quiz_topic`
--
ALTER TABLE `quiz_topic`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `sr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
