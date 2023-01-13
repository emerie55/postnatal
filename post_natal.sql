-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 08:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `post_natal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_in`
--

CREATE TABLE IF NOT EXISTS `ad_in` (
`id` int(11) NOT NULL,
  `use_r` varchar(50) NOT NULL,
  `pas` varchar(50) NOT NULL,
  `stage` text NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_in`
--

INSERT INTO `ad_in` (`id`, `use_r`, `pas`, `stage`, `fullname`, `phone`) VALUES
(2, 'inno@gmail.com', '1234', 'Postnatal', 'Innocent Chiemerie', '08164269945');

-- --------------------------------------------------------

--
-- Table structure for table `book_app`
--

CREATE TABLE IF NOT EXISTS `book_app` (
`id` int(11) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `appdate` varchar(50) NOT NULL,
  `apptime` varchar(50) NOT NULL,
  `appnote` varchar(10000) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_app`
--

INSERT INTO `book_app` (`id`, `docname`, `dept`, `fullname`, `phone`, `email`, `appdate`, `apptime`, `appnote`, `status`) VALUES
(1, 'Innocent Chiemerie', 'Postnatal', 'Onyejiri Gift chibuzo', '08104618161', 'gift@yahoo.com', '2021-04-01', '12:00', 'i will come to see you sir', 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `no_te`
--

CREATE TABLE IF NOT EXISTS `no_te` (
`id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pd_f`
--

CREATE TABLE IF NOT EXISTS `pd_f` (
`id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pd_f`
--

INSERT INTO `pd_f` (`id`, `level`, `title`, `path`) VALUES
(1, 'Nursery 2 Diamond', 'Language 1', 'pdf/LANGUAGE WEEK I.docx'),
(2, 'Nursery 2 Diamond', 'Grammer', 'pdf/ENGLISH GRAMMAR 2.pdf'),
(3, 'Nursery 2 Diamond', 'Bible', 'pdf/CRK- JESUS IS WITH US.docx');

-- --------------------------------------------------------

--
-- Table structure for table `pick_off`
--

CREATE TABLE IF NOT EXISTS `pick_off` (
`id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `link_in` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pick_off`
--

INSERT INTO `pick_off` (`id`, `user_id`, `link_in`) VALUES
(17, 'PN/2021/7267118', '#');

-- --------------------------------------------------------

--
-- Table structure for table `que_st`
--

CREATE TABLE IF NOT EXISTS `que_st` (
`id` int(11) NOT NULL,
  `stage` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `question` varchar(10000) NOT NULL,
  `fullname` varchar(70) NOT NULL,
  `questdate` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'No Reply',
  `ans` varchar(10000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que_st`
--

INSERT INTO `que_st` (`id`, `stage`, `title`, `question`, `fullname`, `questdate`, `email`, `status`, `ans`) VALUES
(4, 'Postnatal', 'sick', 'please help me', 'Onyejiri Gift chibuzo', '19 Mar, 2021', 'gift@yahoo.com', 'Replied', 'Ok ma'),
(5, 'Postnatal', 'am here', 'am at your office sir', 'Onyejiri Gift chibuzo', '19 Mar, 2021', 'gift@yahoo.com', 'No Reply', '');

-- --------------------------------------------------------

--
-- Table structure for table `text_tutor`
--

CREATE TABLE IF NOT EXISTS `text_tutor` (
`id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `topic` text NOT NULL,
  `body` text NOT NULL,
  `uniqlearn` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE IF NOT EXISTS `usr` (
`id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `stage` varchar(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `passhash` varchar(100) NOT NULL,
  `profile_p` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr`
--

INSERT INTO `usr` (`id`, `user_id`, `sname`, `fname`, `mname`, `email`, `stage`, `state`, `addr`, `phone`, `user`, `pass`, `passhash`, `profile_p`) VALUES
(1, 'PN/2021/7267118', 'Onyejiri', 'Gift', 'chibuzo', 'gift@yahoo.com', 'Postnatal', 'Imo', 'No 10, mela street', '08104618161', 'chigift', '12345', '$2y$10$dWQfP.YgDBURxgYOO15vYOoEkECW/aQ51a9Vs1CKOYNJqnmnsP6yC', '');

-- --------------------------------------------------------

--
-- Table structure for table `vidl_ink`
--

CREATE TABLE IF NOT EXISTS `vidl_ink` (
`id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `vid_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vi_d`
--

CREATE TABLE IF NOT EXISTS `vi_d` (
`id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `vid_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_in`
--
ALTER TABLE `ad_in`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_app`
--
ALTER TABLE `book_app`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `no_te`
--
ALTER TABLE `no_te`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pd_f`
--
ALTER TABLE `pd_f`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pick_off`
--
ALTER TABLE `pick_off`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `que_st`
--
ALTER TABLE `que_st`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_tutor`
--
ALTER TABLE `text_tutor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vidl_ink`
--
ALTER TABLE `vidl_ink`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vi_d`
--
ALTER TABLE `vi_d`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_in`
--
ALTER TABLE `ad_in`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book_app`
--
ALTER TABLE `book_app`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `no_te`
--
ALTER TABLE `no_te`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pd_f`
--
ALTER TABLE `pd_f`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pick_off`
--
ALTER TABLE `pick_off`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `que_st`
--
ALTER TABLE `que_st`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `text_tutor`
--
ALTER TABLE `text_tutor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usr`
--
ALTER TABLE `usr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vidl_ink`
--
ALTER TABLE `vidl_ink`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vi_d`
--
ALTER TABLE `vi_d`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
