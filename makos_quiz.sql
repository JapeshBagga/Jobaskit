-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 03:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'Mechanical', ''),
(2, 'Computer Science', 'developer'),
(3, 'HR', ''),
(4, 'IT', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `intro_id` int(10) NOT NULL,
  `intro_data` mediumtext NOT NULL,
  `intro_comments` varchar(500) NOT NULL,
  `intro_file` varchar(100) NOT NULL,
  `intro_login_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`intro_id`, `intro_data`, `intro_comments`, `intro_file`, `intro_login_id`) VALUES
(1, '55', '', 'files/61039eae3423e7.51657811.pdf', 1);

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
  `entry` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `email`, `password`, `role`, `subrole`, `entry`) VALUES
(1, 'Sahil Patel', 'st@quiz.com', '123', 'student', '', 39),
(2, 'Manish Patel', 'mkp@g.c', '123', 'admin', '', 1),
(3, 'Arun Patel', 'dev@g.c', '123', 'admin', 'developer', 5);

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
  `tags` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_qust`
--

INSERT INTO `quiz_qust` (`qust_id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `correct1`, `correct2`, `quiz_id`, `series_id`, `type_id`, `domain_id`, `difficulty_level`, `tags`) VALUES
(10, 'ww', 'ww', 'ww', 'w', 'sww', 'c', 'd', 1, 4, 5, 3, 2, 'IQ'),
(11, 'rr', 'rr', 'rr', 'rr', 'rr', 'a', 'b', 1, 4, 1, 1, 5, 'IQ'),
(12, 'tt', 'rr', 'tt', 'rr', 'rr', 'a', 'd', 1, 1, 1, 1, 2, 'IQ'),
(13, 'tt', 'rr', 'tt', 'tt', 'rr', 'b', 'c', 1, 1, 1, 1, 1, 'IQ'),
(14, 'ff', 'ww', 'gg', 'bh', 'bb', 'a', 'b', 1, 1, 1, 2, 1, 'IQ'),
(15, 'tt', 'ee', 'ff', 'ff', 'bb', 'a', 'b', 3, 1, 1, 2, 2, 'IQ'),
(16, 'ff', 'cc', 'jj', 'ff', 'ff', 'a', 'b', 1, 1, 4, 2, 2, 'IQ'),
(17, 'tt', 'ff', ' hh', 'fff', ' bbb', 'b', 'c', 1, 1, 4, 2, 2, 'IQ'),
(18, 'ttuuh', 'hhh', 'bbn', 'ggg', 'vv', 'b', 'd', 1, 1, 4, 2, 2, 'IQ'),
(19, 'rtt', 'vvv', '   vggh', 'vvbn', 'jjkk', 'b', 'c', 1, 1, 4, 2, 3, 'IQ'),
(20, 'rr', 'hh', 'nn', 'gg', 'uu', 'b', 'c', 1, 1, 1, 4, 3, 'IQ');

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
  `quiz_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_topic`
--

INSERT INTO `quiz_topic` (`quiz_id`, `quiz_title`, `no_of_qust`, `quiz_date`, `quiz_deadline`, `quiz_time`) VALUES
(1, 'Frontend', '0', '30 Jul 2021', '05 Aug 2021', '1'),
(2, 'Arithmetic Progression', '', '', '', ''),
(3, 'Telnet Acqusition', '', '', '', '');

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

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `score_data`, `score_quiz_id`, `score_login_id`) VALUES
(1, '10', 1, 1),
(2, '0', 1, 1),
(3, '7', 1, 1),
(4, '6', 0, 2),
(5, '8', 0, 2),
(6, '1', 0, 0),
(7, '0', 1, 1),
(8, '1', 0, 0);

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
(1, 'series1'),
(2, 'series2'),
(3, 'Theory'),
(4, '1');

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
  `up_username` varchar(100) NOT NULL,
  `up_first_name` varchar(100) NOT NULL,
  `up_last_name` varchar(100) NOT NULL,
  `up_email` varchar(100) NOT NULL,
  `up_leading_score` varchar(10) NOT NULL,
  `up_address` varchar(500) NOT NULL,
  `up_city` varchar(100) NOT NULL,
  `up_state` varchar(100) NOT NULL,
  `up_postcode` varchar(10) NOT NULL,
  `up_about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`up_id`, `up_login_id`, `up_username`, `up_first_name`, `up_last_name`, `up_email`, `up_leading_score`, `up_address`, `up_city`, `up_state`, `up_postcode`, `up_about`) VALUES
(1, 0, 'mkp', 'm', 'p', 'mkp@d.c', '', 'Dau para', 'Bemetara', 'Chhattisgarh', '491338', 'rtt');

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
  MODIFY `dm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `intro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quiz_qust`
--
ALTER TABLE `quiz_qust`
  MODIFY `qust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `quiz_topic`
--
ALTER TABLE `quiz_topic`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `sr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
