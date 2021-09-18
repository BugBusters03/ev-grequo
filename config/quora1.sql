-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 11:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quora1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `msg` text NOT NULL,
  `date_of` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `msg`, `date_of`) VALUES
(1, 're', 'ranjivg@gmail.com', 'fggg', 'jjjj', '0000-00-00 00:00:00'),
(2, 'hiii', 'ranjivg@gmail.com', 'hii', 'hii', '0000-00-00 00:00:00'),
(3, 'ranji', 'ranjivg.531@gmail.com', 'hii', 'good', '0000-00-00 00:00:00'),
(4, 'kushi', 'kushi.peera@gmail.com', 'test', 'vgood', '0000-00-00 00:00:00'),
(5, 'roop', 'roopa@gmail.com', 'hii', 'hiii', '0000-00-00 00:00:00'),
(6, 'abcd', 'abcd@gmail.com', 'qett', 'gyhh', '0000-00-00 00:00:00'),
(7, 'V G Ranji', 'ranjivg.531@gmail.com', 'about maintainance', 'good', '0000-00-00 00:00:00'),
(8, 'fgfg', 'fgfgf@gmail.com', 'hhgf', 'fghhfh', '0000-00-00 00:00:00'),
(9, 'sdf', 'dfdf@gmail.com', 'dffgg', 'good\r\n', '0000-00-00 00:00:00'),
(10, 'V G Ranji', 'dgd@gmail.com', 'dgf', 'sdgfrg', '2021-09-16 10:27:25'),
(11, 'sujan', 'sujan@gmail.com', 'website', 'nice', '2021-09-16 10:48:39'),
(12, 'sadik', 'sadik@gmail.com', 'nyc', 'good website', '2021-09-17 06:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'V G Ranji', 'Ranji', 'ranji123'),
(4, 'kudhidha', 'kushi', '04f3cbcd7ec4e1448774fc52b822b0e8'),
(5, 'Nithya', 'Nithya', 'abf55f49c5397eb06e85419b6034c8e9'),
(6, 'admin', 'admin', '0192023a7bbd73250516f069df18b500'),
(7, 'nithya', 'nithya', '1d0299daa287376370d943dfd4f1fc7e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `post_id` int(11) NOT NULL,
  `parent_post_id` int(11) NOT NULL,
  `post` varchar(200) NOT NULL,
  `post_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`post_id`, `parent_post_id`, `post`, `post_sender_name`, `date`) VALUES
(1, 0, 'csd', 'what is ur name', '2021-09-16 16:14:04'),
(2, 1, 'dasa', 'wsdd', '2021-09-16 16:14:18'),
(3, 0, 'gfhfgh', 'ghfgh', '2021-09-16 16:31:24'),
(4, 3, '', 'fgdfg', '2021-09-16 16:57:17'),
(5, 0, '', 'fdsf', '2021-09-16 17:49:42'),
(6, 0, '', 'ff', '2021-09-16 17:51:00'),
(7, 0, '', 'edas', '2021-09-17 04:20:01'),
(8, 0, '', 'dfr', '2021-09-17 04:21:54'),
(9, 0, '', 'aa', '2021-09-17 04:27:16'),
(10, 0, '', 'whats ur name', '2021-09-17 06:18:55'),
(11, 0, 'jdsuy', 'haj', '2021-09-17 06:38:05'),
(12, 0, 'agsj', 'hagj', '2021-09-17 08:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `question`, `answer`) VALUES
(2, 'which is the best EV in india?', 'Tata Nexon EV. With a 3 Phase Permanent Magnet Synchronous Motor, the Nexon EV is one of the most impressive EV SUVs out there. ...\r\n         MG ZS EV'),
(6, 'What is the status of the EV infrastructure in India?', 'EV charging infrastructure nomenclature and fundamental hardware and software components. EV\r\ncharging infrastructure, often referred to as electric\r\n'),
(7, 'Is it a good decision to buy an EV in India right now?', ' If you are looking for an electric car for your short daily commutes, \r\nthen an EV is worth the money as it will reduce your commute costs in the lon'),
(8, 'If we buy an EV in India, what are the options for charging?', 'Usually, an EV comes with charging options such as standard charging and fast-charging. \r\nInstalling a fast-charger is expensive, but it can charge th'),
(9, 'what is full form of EV?', 'Electric vehicals.'),
(10, 'As a person living in India, why should I buy an EV (electric vehicle) over a petrol/diesel vehicle?', 'You should buy an EV because:\r\n\r\nEVs have zero emission. They do not leave smoke and particulate matter in our cities like IC engines do. Yes, the ele');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'Ranji', 'ranjivg.531@gmail.com', 'a03fc5400dd7255e0c326221216b9f0f'),
(10, 'kushidha', 'kushidha@gmail.com', 'e04de789106392d107e2159a87847ee3'),
(11, 'Nithya', 'Nithya@gmail.com', 'e04de789106392d107e2159a87847ee3'),
(12, 'Sujan', 'sujan@gmail.com', 'f6849e471ced91d6c4e4a1770505fe68'),
(13, 'sadik', 'sadik@gmail.com', '2119eb59afc81b22cf8a4298047f9723');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
