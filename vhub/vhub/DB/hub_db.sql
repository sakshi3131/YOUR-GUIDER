-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 03:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14324599_hub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` int(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `uname`, `upwd`) VALUES
(1, 'faculty1', '123456'),
(2, 'ssk', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) NOT NULL,
  `keyword` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `size` int(10) NOT NULL,
  `downloads` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `keyword`, `name`, `size`, `downloads`) VALUES
(1, '', 'skeleton_to send (2) (1).', 15672, '0'),
(2, 'ccc', 'sssss.docx', 15672, '0'),
(3, 'ccc', 'skeleton_to send (2).docx', 15672, '0'),
(4, 'MNM', 'skeleton_to send (2).docx', 15672, '0'),
(5, 'MNM', 'skeleton_to send (2).docx', 15672, '0'),
(6, 'MNMN', 'skeleton_to send (2).docx', 15672, '0');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `upwd` varchar(20) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uname`, `email`, `phone`, `upwd`, `fid`) VALUES
('ssss', 'ssss@gmail.com', 2587854, '1122334455', 0),
('spoorthi', 'sk@gmail.com', 2147483647, '123456666', 0),
('Damodar', 'damodar@gmail.com', 2147483647, '12345678', 0),
('Meghana', 'josh.megna@gmail.com', 2147483647, '123456789', 0),
('Meghana', 'josh.megna@gmail.com', 2147483647, '1234567890', 0),
('motu', 'motu@gmail.com', 8564748, 'a1234', 0),
('Damodar BHat', 'damodarbhat@gmail.co', 2147483647, 'damodar123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `vid` int(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `fid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`vid`, `url`, `keyword`, `fid`) VALUES
(1, 'https://goo.gl', 'Artificial intelligent', 0),
(2, 'https://goo1', 'Natural language', 0),
(3, 'https://goo.gl', 'Artificial intelligent', 0),
(4, 'https://www.simplilearn.com', 'machine learning', 0),
(5, 'https://www.simplilearn.com', 'machine learning', 0),
(6, 'https://www.simplilearn.com', 'machine learning', 0),
(7, 'https://www.simplilearn.com', 'machine learning', 0),
(8, 'www.google.com', 'Artificial intelligent', 0),
(9, 'https://www.simplilearn.com', 'web tech', 0),
(10, 'https://goo.gl', 'Artificial intelligent', 0),
(11, 'https://youtu.be/HZ7PAyCDwEg', 'DS', 0),
(12, 'https://youtu.be/HZ7PAyCDwEg', 'ccc1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `files` ADD FULLTEXT KEY `keyword` (`keyword`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`upwd`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `vid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
