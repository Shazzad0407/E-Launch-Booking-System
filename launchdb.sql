-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 03:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `launchdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bkash`
--

CREATE TABLE `bkash` (
  `transactionId` varchar(100) NOT NULL,
  `trackingId` varchar(50) NOT NULL,
  `sender` varchar(15) NOT NULL,
  `amount` float NOT NULL,
  `paymentTime` datetime NOT NULL,
  `booking_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bkash`
--

INSERT INTO `bkash` (`transactionId`, `trackingId`, `sender`, `amount`, `paymentTime`, `booking_id`) VALUES
('', 'BK076209', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c17d5f39c3206.49685974'),
('', 'BK102239', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c17e64eaf7b57.86691495'),
('', 'BK145424', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c1ec9d823f647.21084024'),
('', 'BK397310', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c1eca02aa2614.91120976'),
('', 'BK435805', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c17d5ab7203f6.40154217'),
('', 'BK453210', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5d9856420fcac0.20388872'),
('', 'BK479762', '', 0, '0000-00-00 00:00:00', 's.shazzad@gmail.com5c163401082df9.92374227'),
('', 'BK524355', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c1ec9c41b49f9.69146864'),
('', 'BK546260', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c17da49d59d11.77685948'),
('', 'BK848941', '', 0, '0000-00-00 00:00:00', 'ashrafuddinshahed.cse@gmail.com5c1f252b65b049.21711591'),
('', 'BK910906', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c1eb0c618c6d7.96565502'),
('', 'BK910911', '', 0, '0000-00-00 00:00:00', 'ashrafuddinshahed.cse@gmail.com5c1f2701f0e5d3.83495046'),
('', 'BK956963', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c1ec6b9951816.53785665'),
('', 'BK971466', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c1f1d1fe4a378.00967094'),
('', 'BK997942', '', 0, '0000-00-00 00:00:00', 'ritu@gmail.com5c1f1f44477ae8.78831739'),
('11111', 'BK479762', '01681858239', 1200, '2018-12-03 00:00:00', 's.shazzad@gmail.com5c163401082df9.92374227'),
('22222', 'BK479762', '016111222333', 500, '2018-12-07 00:00:00', 's.shazzad@gmail.com5c163401082df9.92374227'),
('55555', 'BK479762', '016111222333', 700, '2018-12-07 00:00:00', 's.shazzad@gmail.com5c163401082df9.92374227'),
('666666', 'BK102239', '01681858239', 2000, '2018-12-16 00:00:00', 'ritu@gmail.com5c17e64eaf7b57.86691495'),
('77777', 'BK479762', '01681858239', 1500, '2018-12-16 00:00:00', 's.shazzad@gmail.com5c163401082df9.92374227');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `booking_id` varchar(100) NOT NULL,
  `cabin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`booking_id`, `cabin_id`) VALUES
('ashrafuddinshahed.cse@gmail.com5c1f252b65b049.21711591', 14),
('ashrafuddinshahed.cse@gmail.com5c1f2701f0e5d3.83495046', 14),
('ritu@gmail.com5c17d5ab7203f6.40154217', 11),
('ritu@gmail.com5c17d5f39c3206.49685974', 1),
('ritu@gmail.com5c17d5f39c3206.49685974', 2),
('ritu@gmail.com5c17da49d59d11.77685948', 3),
('ritu@gmail.com5c17da49d59d11.77685948', 4),
('ritu@gmail.com5c17e64eaf7b57.86691495', 6),
('ritu@gmail.com5c17e64eaf7b57.86691495', 7),
('ritu@gmail.com5c1eb0c618c6d7.96565502', 11),
('ritu@gmail.com5c1eb0c618c6d7.96565502', 12),
('ritu@gmail.com5c1ec6b9951816.53785665', 1),
('ritu@gmail.com5c1ec6b9951816.53785665', 2),
('ritu@gmail.com5c1ec9c41b49f9.69146864', 1),
('ritu@gmail.com5c1ec9c41b49f9.69146864', 2),
('ritu@gmail.com5c1ec9d823f647.21084024', 1),
('ritu@gmail.com5c1ec9d823f647.21084024', 2),
('ritu@gmail.com5c1eca02aa2614.91120976', 1),
('ritu@gmail.com5c1eca02aa2614.91120976', 2),
('ritu@gmail.com5c1f1d1fe4a378.00967094', 14),
('ritu@gmail.com5c1f1f44477ae8.78831739', 1),
('ritu@gmail.com5d9856420fcac0.20388872', 6),
('ritu@gmail.com5d9856420fcac0.20388872', 7),
('s.shazzad@gmail.com5c163401082df9.92374227', 22);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` varchar(100) NOT NULL,
  `booking_date` datetime DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `launch_id` varchar(50) DEFAULT NULL,
  `passenger_email` varchar(50) DEFAULT NULL,
  `status_of_Booking` varchar(50) NOT NULL,
  `paymentType` varchar(20) NOT NULL,
  `bill` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_date`, `schedule_date`, `launch_id`, `passenger_email`, `status_of_Booking`, `paymentType`, `bill`) VALUES
('ashrafuddinshahed.cse@gmail.com5c1f252b65b049.21711591', '2018-12-23 12:03:23', '2019-01-01', 'MVSB-9', 'ashrafuddinshahed.cse@gmail.com', 'processing', 'bKash', 2360),
('ashrafuddinshahed.cse@gmail.com5c1f2701f0e5d3.83495046', '2018-12-23 12:11:13', '2019-01-01', 'MVSB-9', 'ashrafuddinshahed.cse@gmail.com', 'processing', 'bKash', 2360),
('ritu@gmail.com5c17d5ab7203f6.40154217', '2018-12-17 22:58:19', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'prcesseing', 'bKash', 2300),
('ritu@gmail.com5c17d5f39c3206.49685974', '2018-12-17 22:59:31', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'cancel', 'bKash', 1200),
('ritu@gmail.com5c17da49d59d11.77685948', '2018-12-17 23:18:01', '2019-01-03', 'MVSB-9', 'ritu@gmail.com', 'prcesseing', 'bKash', 1200),
('ritu@gmail.com5c17e64eaf7b57.86691495', '2018-12-18 00:09:18', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'completed', 'bKash', 2000),
('ritu@gmail.com5c1eb0c618c6d7.96565502', '2018-12-23 03:46:46', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 4645),
('ritu@gmail.com5c1ec6b9951816.53785665', '2018-12-23 05:20:25', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 2445),
('ritu@gmail.com5c1ec9c41b49f9.69146864', '2018-12-23 05:33:24', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 2445),
('ritu@gmail.com5c1ec9d823f647.21084024', '2018-12-23 05:33:44', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 2445),
('ritu@gmail.com5c1eca02aa2614.91120976', '2018-12-23 05:34:26', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 2445),
('ritu@gmail.com5c1f1d1fe4a378.00967094', '2018-12-23 11:29:03', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 2345),
('ritu@gmail.com5c1f1f44477ae8.78831739', '2018-12-23 11:38:12', '2019-01-01', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 1260),
('ritu@gmail.com5d9856420fcac0.20388872', '2019-10-05 14:37:22', '2019-10-31', 'MVSB-9', 'ritu@gmail.com', 'processing', 'bKash', 2060),
('s.shazzad@gmail.com5c163401082df9.92374227', '2018-12-16 17:16:17', '2019-01-01', 'MVSB-9', 's.shazzad@gmail.com', 'completed', 'bKash', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `cabin`
--

CREATE TABLE `cabin` (
  `cabin_id` int(11) NOT NULL,
  `cabinName` varchar(50) NOT NULL,
  `cabin_type` varchar(50) DEFAULT NULL,
  `ac_non` varchar(10) DEFAULT NULL,
  `cabin_floor` decimal(2,0) DEFAULT NULL,
  `cabin_cost` decimal(6,2) DEFAULT NULL,
  `launch_id` varchar(50) NOT NULL,
  `cabin_seat` int(11) NOT NULL,
  `attachBathroom` tinyint(1) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabin`
--

INSERT INTO `cabin` (`cabin_id`, `cabinName`, `cabin_type`, `ac_non`, `cabin_floor`, `cabin_cost`, `launch_id`, `cabin_seat`, `attachBathroom`, `balcony`, `description`) VALUES
(1, '323SB', 'single', 'AC', '2', '1200.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(2, '325SB', 'single', 'AC', '2', '1200.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(3, '327SB', 'single', 'AC', '2', '1200.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(4, '329SB', 'single', 'AC', '3', '1200.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(5, '331SB', 'single', 'AC', '3', '1200.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(6, '324SB', 'single', 'Non AC', '2', '1000.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(7, '326SB', 'single', 'Non AC', '2', '1000.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(8, '328SB', 'single', 'Non AC', '3', '1000.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(9, '330SB', 'single', 'Non AC', '3', '1000.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(10, '332SB', 'single', 'Non AC', '3', '1000.00', 'MVSB-9', 1, 0, 0, 'A very comfortable cabinet for one person'),
(11, '301SB', 'double', 'AC', '2', '2300.00', 'MVSB-9', 2, 1, 0, 'A very comfortable cabinet for two person'),
(12, '302SB', 'double', 'AC', '2', '2300.00', 'MVSB-9', 2, 1, 0, 'A very comfortable cabinet for two person'),
(13, '303SB', 'double', 'AC', '2', '2300.00', 'MVSB-9', 2, 1, 0, 'A very comfortable cabinet for two person'),
(14, '304SB', 'double', 'AC', '3', '2300.00', 'MVSB-9', 2, 1, 0, 'A very comfortable cabinet for two person'),
(15, '305SB', 'double', 'AC', '3', '2300.00', 'MVSB-9', 2, 1, 0, 'A very comfortable cabinet for two person'),
(16, '306SB', 'double', 'AC', '2', '2300.00', 'MVSB-9', 2, 1, 0, 'A very comfortable cabinet for two person'),
(17, '307SB', 'double', 'AC', '2', '2300.00', 'MVSB-9', 2, 1, 0, 'A very comfortable cabinet for two person'),
(18, '308SB', 'double', 'Non AC', '3', '2000.00', 'MVSB-9', 2, 0, 0, 'A very comfortable cabinet for two person'),
(19, '309SB', 'double', 'Non AC', '3', '2000.00', 'MVSB-9', 2, 0, 0, 'A very comfortable cabinet for two person'),
(20, '310SB', 'double', 'Non AC', '3', '2000.00', 'MVSB-9', 2, 0, 0, 'A very comfortable cabinet for two person'),
(21, '311SB', 'VIP', 'AC', '2', '3000.00', 'MVSB-9', 3, 1, 1, 'A very comfortable cabinet for three person'),
(22, '312SB', 'VIP', 'AC', '3', '3000.00', 'MVSB-9', 3, 1, 1, 'A very comfortable cabinet for three person'),
(23, '313SB', 'VIP', 'AC', '3', '3000.00', 'MVSB-9', 3, 1, 1, 'A very comfortable cabinet for three person'),
(24, '314SB', 'VIP', 'AC', '3', '3000.00', 'MVSB-9', 3, 1, 1, 'A very comfortable cabinet for three person');

-- --------------------------------------------------------

--
-- Table structure for table `cabincomment`
--

CREATE TABLE `cabincomment` (
  `cabinCommentId` int(11) NOT NULL,
  `cabin_id` int(11) NOT NULL,
  `passenger_email` varchar(100) NOT NULL,
  `commentDescription` text NOT NULL,
  `commnetTime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabincomment`
--

INSERT INTO `cabincomment` (`cabinCommentId`, `cabin_id`, `passenger_email`, `commentDescription`, `commnetTime`) VALUES
(1, 21, 'ritu@gmail.com', 'fantastic', '2018-12-18 19:53:38'),
(2, 21, 'saki@gmail.com', 'wow', '2018-12-18 19:53:38'),
(3, 21, 'shdfxsx@gmail.com', 'zzzzz', '2018-12-18 19:53:38'),
(4, 21, 's.shazzad@gmail.com', 'nice', '2018-12-18 19:53:38'),
(5, 21, 'shahed@gmail.com', 'lame', '2018-12-18 19:53:38'),
(6, 21, 's.shazzad@gmail.com', 'great journey', '2018-12-18 20:16:57'),
(7, 1, 'saki@gmail.com', 'good room', '2018-12-18 20:23:21'),
(8, 11, 'ritu@gmail.com', 'nice room', '2018-12-18 20:30:19'),
(17, 21, 'ritu@gmail.com', 'seeeeei', '2018-12-19 02:46:45'),
(18, 21, 'ritu@gmail.com', 'ghfghg', '2018-12-19 03:24:26'),
(20, 20, 's.shazzad@gmail.com', 'Hello world', '2018-12-19 20:06:33'),
(21, 20, 's.shazzad@gmail.com', 'is it working', '2018-12-19 20:20:14'),
(22, 7, 's.shazzad@gmail.com', 'woa', '2018-12-19 20:43:46'),
(23, 21, 'ashrafuddinshahed.cse@gmail.com', 'very goood journey', '2018-12-23 12:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `cabincommentlike`
--

CREATE TABLE `cabincommentlike` (
  `id` int(11) NOT NULL,
  `passenger_email` varchar(100) NOT NULL,
  `cabinCommentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabincommentlike`
--

INSERT INTO `cabincommentlike` (`id`, `passenger_email`, `cabinCommentId`) VALUES
(0, 'shdfxsx@gmail.com', 4),
(2, 'saki@gmail.com', 4),
(3, 'shahed@gmail.com', 18),
(6, 'shdfxsx@gmail.com', 2),
(7, 'shahed@gmail.com', 5),
(51, 'ritu@gmail.com', 2),
(64, 'ritu@gmail.com', 17),
(71, 'ritu@gmail.com', 18),
(72, 'ashrafuddinshahed.cse@gmail.com', 23);

-- --------------------------------------------------------

--
-- Table structure for table `cabincommentreply`
--

CREATE TABLE `cabincommentreply` (
  `cabinCommentReplyId` int(11) NOT NULL,
  `cabinCommentId` int(11) NOT NULL,
  `passenger_email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `commnetTime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabincommentreply`
--

INSERT INTO `cabincommentreply` (`cabinCommentReplyId`, `cabinCommentId`, `passenger_email`, `comment`, `commnetTime`) VALUES
(1, 18, 'shdfxsx@gmail.com', 'great', '2018-12-23 01:08:58'),
(2, 18, 'shahed@gmail.com', 'wao', '2018-12-23 01:09:20'),
(3, 17, 'ritu@gmail.com', 'hello', '2018-12-23 01:44:30'),
(4, 1, 'ritu@gmail.com', 'yes', '2018-12-23 01:44:50'),
(5, 1, 'ritu@gmail.com', 'yes', '2018-12-23 01:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `cabincommentreplylike`
--

CREATE TABLE `cabincommentreplylike` (
  `id` int(11) NOT NULL,
  `cabinCommentReplyId` int(11) NOT NULL,
  `passenger_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabinratingbyuser`
--

CREATE TABLE `cabinratingbyuser` (
  `cabinRatingId` int(11) NOT NULL,
  `passenger_email` varchar(100) NOT NULL,
  `cabin_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinratingbyuser`
--

INSERT INTO `cabinratingbyuser` (`cabinRatingId`, `passenger_email`, `cabin_id`, `rating`) VALUES
(1, 'ritu@gmail.com', 21, 5),
(2, 'ritu@gmail.com', 13, 4),
(3, 's.shazzad@gmail.com', 21, 4),
(4, 's.shazzad@gmail.com', 1, 3),
(5, 's.shazzad@gmail.com', 3, 5),
(6, 'shdfxsx@gmail.com', 1, 3),
(7, 'saki@gmail.com', 17, 4),
(9, 'shdfxsx@gmail.com', 21, 4),
(10, 'shahed@gmail.com', 21, 2),
(11, 'saki@gmail.com', 21, 1),
(12, 'ashrafuddinshahed.cse@gmail.com', 21, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cabin_img`
--

CREATE TABLE `cabin_img` (
  `img_path` varchar(100) NOT NULL,
  `cabin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabin_img`
--

INSERT INTO `cabin_img` (`img_path`, `cabin_id`) VALUES
('images/launches/M V Sundorbon-9/cabin/dc.jpg', 21),
('images/launches/M V Sundorbon-9/cabin/mv9_1.jpg', 21),
('images/launches/M V Sundorbon-9/cabin/s11.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `passenger_email` varchar(100) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `passenger_email`, `discount`) VALUES
(5, 'ashrafuddinshahed.cse@gmail.com', 500);

-- --------------------------------------------------------

--
-- Table structure for table `launch`
--

CREATE TABLE `launch` (
  `launch_id` varchar(50) NOT NULL,
  `launch_name` varchar(100) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `arrTime` varchar(20) DEFAULT NULL,
  `depTime` varchar(20) DEFAULT NULL,
  `low_price` int(11) DEFAULT NULL,
  `high_price` int(11) DEFAULT NULL,
  `capacity` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launch`
--

INSERT INTO `launch` (`launch_id`, `launch_name`, `reg_date`, `arrTime`, `depTime`, `low_price`, `high_price`, `capacity`) VALUES
('MVBD-2', 'M V Bogdhadia-2', '2015-01-01', '10:00 AM', '06:00 AM', 100, 1200, '350'),
('MVBL-1', 'M V Bhola-1', '2012-12-12', '06:00 AM', '07:30 PM', 200, 5500, '1100'),
('MVGL-2', 'M V Green Line-2', '2016-06-06', '02:00 PM', '09:00 AM', 700, 2000, '400'),
('MVKF-4', 'M V Karnofuli-4', '2009-10-12', '06:00 AM', '08:00 PM', 200, 5500, '900'),
('MVKF-9', 'M V Karnofuli-9', '2013-03-07', '06:00 AM', '08:00 PM', 250, 7000, '1100'),
('MVKK-4', 'M V Kirtonkhol-4', '2010-07-07', '05:00 AM', '08:30 PM', 200, 6000, '1100'),
('MVMR-7', 'M V Mayur-7', '2016-11-11', '12:00 PM', '08:00 AM', 100, 2000, '400'),
('MVMT-3', 'M V Mitali-3', '2010-05-11', '12:00 PM', '08:00 AM', 100, 1500, '400'),
('MVPV-2', 'M V Paravat-2', '2011-01-01', '07:00 AM', '06:30 PM', 200, 5500, '1200'),
('MVRF-5', 'M V Rofrof-5', '2016-09-09', '06:00 PM', '02:00 PM', 100, 1000, '350'),
('MVSB-7', 'M V Sundorbon-7', '2014-10-10', '04:00 AM', '08:00 PM', 200, 7000, '1300'),
('MVSB-9', 'M V Sundorbon-9', '2016-06-08', '04:00 AM', '08:00 PM', 250, 7000, '1300'),
('MVSN-7', 'M V Srinagar-7', '2015-05-05', '06:00 AM', '08:00 PM', 200, 6000, '1050'),
('MVTP-4', 'M V Tipu-4', '2016-05-06', '06:00 AM', '05:30 PM', 200, 6000, '1200'),
('MVTR-1', 'M V Tasrif-1', '2017-06-07', '06:00 AM', '06:00 PM', 200, 6500, '1200'),
('MVTR-2', 'M V Tasrif-2', '2017-06-07', '06:00 AM', '06:00 PM', 200, 6500, '1200');

-- --------------------------------------------------------

--
-- Table structure for table `launch_img`
--

CREATE TABLE `launch_img` (
  `img_path` varchar(100) NOT NULL,
  `launch_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launch_img`
--

INSERT INTO `launch_img` (`img_path`, `launch_id`) VALUES
('images/launches/M V Karnofuli-4/k4_1.jpg', 'MVKF-4'),
('images/launches/M V Karnofuli-4/k4_2.jpg', 'MVKF-4'),
('images/launches/M V Karnofuli-4/k4_3.jpg', 'MVKF-4'),
('images/launches/M V Karnofuli-4/k4_4.jpg', 'MVKF-4'),
('images/launches/M V Karnofuli-4/k4_5.jpg', 'MVKF-4'),
('images/launches/M V Karnofuli-4/k4_6.jpg', 'MVKF-4'),
('images/launches/M V Karnofuli-9/k9_1.jpg', 'MVKF-9'),
('images/launches/M V Karnofuli-9/k9_2.jpg', 'MVKF-9'),
('images/launches/M V Karnofuli-9/k9_3.jpg', 'MVKF-9'),
('images/launches/M V Karnofuli-9/k9_4.jpg', 'MVKF-9'),
('images/launches/M V Karnofuli-9/k9_5.jpg', 'MVKF-9'),
('images/launches/M V Karnofuli-9/k9_6.jpg', 'MVKF-9'),
('images/launches/M V Karnofuli-9/k9_7.jpg', 'MVKF-9'),
('images/launches/M V Karnofuli-9/k9_8.jpg', 'MVKF-9');

-- --------------------------------------------------------

--
-- Table structure for table `launch_pac`
--

CREATE TABLE `launch_pac` (
  `img_path` varchar(100) DEFAULT NULL,
  `launch_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `launch_schedule`
--

CREATE TABLE `launch_schedule` (
  `schedule_date` date NOT NULL,
  `launch_id` varchar(50) NOT NULL,
  `start_terminal_id` int(11) DEFAULT NULL,
  `destination_terminal_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launch_schedule`
--

INSERT INTO `launch_schedule` (`schedule_date`, `launch_id`, `start_terminal_id`, `destination_terminal_id`) VALUES
('2019-01-01', 'MVGL-2', 1, 2),
('2019-01-01', 'MVKK-4', 2, 1),
('2019-01-01', 'MVSB-7', 1, 2),
('2019-01-01', 'MVSB-9', 1, 2),
('2019-01-02', 'MVKF-4', 1, 3),
('2019-01-02', 'MVKK-4', 1, 2),
('2019-01-02', 'MVSB-7', 2, 1),
('2019-01-02', 'MVSB-9', 2, 1),
('2019-01-03', 'MVKF-4', 3, 1),
('2019-01-03', 'MVSB-9', 1, 2),
('2019-01-04', 'MVKF-4', 1, 3),
('2019-01-04', 'MVKK-4', 2, 1),
('2019-01-04', 'MVSB-7', 1, 2),
('2019-01-05', 'MVKF-4', 3, 1),
('2019-01-05', 'MVKK-4', 1, 2),
('2019-01-05', 'MVSB-7', 2, 1),
('2019-01-07', 'MVKF-4', 3, 1),
('2019-01-07', 'MVKK-4', 1, 2),
('2019-01-07', 'MVSB-7', 1, 2),
('2019-01-08', 'MVKK-4', 1, 2),
('2019-01-08', 'MVSB-7', 2, 1),
('2019-01-09', 'MVKK-4', 1, 3),
('2019-01-10', 'MVKK-4', 2, 1),
('2019-01-10', 'MVSB-7', 1, 2),
('2019-01-11', 'MVKF-4', 3, 1),
('2019-01-11', 'MVKK-4', 1, 2),
('2019-01-11', 'MVSB-7', 2, 1),
('2019-01-13', 'MVKF-4', 1, 3),
('2019-01-13', 'MVKK-4', 2, 1),
('2019-01-13', 'MVSB-7', 1, 2),
('2019-01-14', 'MVKF-4', 3, 1),
('2019-01-14', 'MVKK-4', 1, 2),
('2019-01-14', 'MVSB-7', 2, 1),
('2019-01-15', 'MVKF-4', 1, 3),
('2019-01-16', 'MVKK-4', 2, 1),
('2019-01-16', 'MVSB-7', 1, 2),
('2019-01-17', 'MVKK-4', 1, 2),
('2019-01-17', 'MVSB-7', 2, 1),
('2019-01-19', 'MVKK-4', 2, 1),
('2019-01-19', 'MVSB-7', 1, 2),
('2019-01-20', 'MVKK-4', 1, 2),
('2019-01-20', 'MVSB-7', 2, 1),
('2019-01-22', 'MVKK-4', 2, 1),
('2019-01-22', 'MVSB-7', 1, 2),
('2019-01-23', 'MVKK-4', 1, 2),
('2019-01-23', 'MVSB-7', 2, 1),
('2019-01-25', 'MVKK-4', 2, 1),
('2019-01-25', 'MVSB-7', 1, 2),
('2019-01-26', 'MVKK-4', 1, 2),
('2019-01-26', 'MVSB-7', 2, 1),
('2019-01-28', 'MVKK-4', 2, 1),
('2019-01-28', 'MVSB-7', 1, 2),
('2019-01-29', 'MVKK-4', 1, 2),
('2019-01-29', 'MVSB-7', 2, 1),
('2019-01-31', 'MVKK-4', 2, 1),
('2019-01-31', 'MVSB-7', 1, 2),
('2019-10-31', 'MVBD-2', 2, 1),
('2019-10-31', 'MVGL-2', 2, 1),
('2019-10-31', 'MVMT-3', 1, 2),
('2019-10-31', 'MVSB-9', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` varchar(50) NOT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_heading` varchar(100) DEFAULT NULL,
  `notice_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` varchar(50) NOT NULL,
  `offer_date` date DEFAULT NULL,
  `offer_img` varchar(500) DEFAULT NULL,
  `offer_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_first_name` varchar(100) DEFAULT NULL,
  `passenger_last_name` varchar(100) DEFAULT NULL,
  `passenger_email` varchar(100) NOT NULL,
  `passenger_password` varchar(50) DEFAULT NULL,
  `passenger_mobile_no` int(15) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_first_name`, `passenger_last_name`, `passenger_email`, `passenger_password`, `passenger_mobile_no`, `gender`, `age`) VALUES
('Ashraf', 'Uddin', 'ashrafuddinshahed.cse@gmail.com', '12345', 1622246008, 'male', 23),
('Shamima', 'RItu', 'ritu@gmail.com', 'ritupurna', 1987654321, 'female', 21),
('Shazzad', 'Hossain', 's.shazzad@gmail.com', '1234567', 1677084370, 'male', 23),
('Fariha', 'Ahmed', 'saki@gmail.com', '222aaa', 1123456789, 'female', 21),
('Abdur', 'Rahman', 'sakibultimate@gmail.com', 's', 1234, 'male', 23),
('Shahed', 'Ahmed', 'shahed@gmail.com', '111aaa', 1715917130, 'male', 22),
('Ovee', 'Hasan', 'shdfxsx@gmail.com', '11ggd', 1713917130, 'male', 22);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_get_offer`
--

CREATE TABLE `passenger_get_offer` (
  `offer_id` varchar(50) NOT NULL,
  `offer_date` date DEFAULT NULL,
  `offer_img` varchar(500) DEFAULT NULL,
  `offer_description` text DEFAULT NULL,
  `passenger_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `terminal_id` int(11) NOT NULL,
  `launch_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`terminal_id`, `launch_id`) VALUES
(1, 'MVBD-2'),
(1, 'MVBL-1'),
(1, 'MVGL-2'),
(1, 'MVKF-4'),
(1, 'MVKF-9'),
(1, 'MVKK-4'),
(1, 'MVMR-7'),
(1, 'MVMT-3'),
(1, 'MVPV-2'),
(1, 'MVRF-5'),
(1, 'MVSB-7'),
(1, 'MVSB-9'),
(1, 'MVSN-7'),
(1, 'MVTP-4'),
(1, 'MVTR-1'),
(1, 'MVTR-2'),
(2, 'MVGL-2'),
(2, 'MVKK-4'),
(2, 'MVSB-7'),
(2, 'MVSB-9'),
(3, 'MVBL-1'),
(3, 'MVKF-4'),
(3, 'MVKF-9'),
(3, 'MVSN-7'),
(4, 'MVBD-2'),
(4, 'MVMR-7'),
(4, 'MVMT-3'),
(4, 'MVRF-5'),
(5, 'MVPV-2'),
(5, 'MVTP-4'),
(5, 'MVTR-1'),
(5, 'MVTR-2');

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

CREATE TABLE `terminal` (
  `terminal_id` int(11) NOT NULL,
  `terminal_name` varchar(100) DEFAULT NULL,
  `terminal_latitude` varchar(200) DEFAULT NULL,
  `terminal_longitude` varchar(200) DEFAULT NULL,
  `zip_code` decimal(4,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`terminal_id`, `terminal_name`, `terminal_latitude`, `terminal_longitude`, `zip_code`) VALUES
(1, 'Dhaka', '23.8103 N', '90.4125 E', '1000'),
(2, 'Barishal', '22.7010 N', '90.3535 E', '8200'),
(3, 'Bhola', '22.1785 N', '90.7101 E', '8300'),
(4, 'Chandpur', '23.2513 N', '90.8518 E', '3600'),
(5, 'Monpura', '22.1999 N', '90.9534 E', '8360');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkash`
--
ALTER TABLE `bkash`
  ADD PRIMARY KEY (`transactionId`,`trackingId`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`booking_id`,`cabin_id`),
  ADD KEY `cabin_id` (`cabin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `passenger_email` (`passenger_email`),
  ADD KEY `schedule_date` (`schedule_date`),
  ADD KEY `launch_id` (`launch_id`);

--
-- Indexes for table `cabin`
--
ALTER TABLE `cabin`
  ADD PRIMARY KEY (`cabin_id`,`launch_id`),
  ADD KEY `launch_id` (`launch_id`);

--
-- Indexes for table `cabincomment`
--
ALTER TABLE `cabincomment`
  ADD PRIMARY KEY (`cabinCommentId`),
  ADD KEY `cabin_id` (`cabin_id`),
  ADD KEY `passenger_email` (`passenger_email`);

--
-- Indexes for table `cabincommentlike`
--
ALTER TABLE `cabincommentlike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cabinCommentId` (`cabinCommentId`),
  ADD KEY `passenger_email` (`passenger_email`);

--
-- Indexes for table `cabincommentreply`
--
ALTER TABLE `cabincommentreply`
  ADD PRIMARY KEY (`cabinCommentReplyId`),
  ADD KEY `cabinCommentId` (`cabinCommentId`),
  ADD KEY `passenger_email` (`passenger_email`);

--
-- Indexes for table `cabincommentreplylike`
--
ALTER TABLE `cabincommentreplylike`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cabinCommentReplyId` (`cabinCommentReplyId`),
  ADD KEY `passenger_email` (`passenger_email`);

--
-- Indexes for table `cabinratingbyuser`
--
ALTER TABLE `cabinratingbyuser`
  ADD PRIMARY KEY (`cabinRatingId`),
  ADD KEY `cabin_id` (`cabin_id`),
  ADD KEY `passenger_email` (`passenger_email`);

--
-- Indexes for table `cabin_img`
--
ALTER TABLE `cabin_img`
  ADD PRIMARY KEY (`img_path`,`cabin_id`),
  ADD KEY `cabin_id` (`cabin_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `launch`
--
ALTER TABLE `launch`
  ADD PRIMARY KEY (`launch_id`);

--
-- Indexes for table `launch_img`
--
ALTER TABLE `launch_img`
  ADD PRIMARY KEY (`img_path`),
  ADD KEY `launch_id` (`launch_id`);

--
-- Indexes for table `launch_pac`
--
ALTER TABLE `launch_pac`
  ADD KEY `launch_id` (`launch_id`);

--
-- Indexes for table `launch_schedule`
--
ALTER TABLE `launch_schedule`
  ADD PRIMARY KEY (`schedule_date`,`launch_id`),
  ADD KEY `start_terminal_id` (`start_terminal_id`),
  ADD KEY `destination_terminal_id` (`destination_terminal_id`),
  ADD KEY `launch_id` (`launch_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_email`);

--
-- Indexes for table `passenger_get_offer`
--
ALTER TABLE `passenger_get_offer`
  ADD PRIMARY KEY (`offer_id`,`passenger_email`),
  ADD KEY `passenger_email` (`passenger_email`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`terminal_id`,`launch_id`),
  ADD KEY `launch_id` (`launch_id`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`terminal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabin`
--
ALTER TABLE `cabin`
  MODIFY `cabin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cabincomment`
--
ALTER TABLE `cabincomment`
  MODIFY `cabinCommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cabincommentlike`
--
ALTER TABLE `cabincommentlike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `cabincommentreply`
--
ALTER TABLE `cabincommentreply`
  MODIFY `cabinCommentReplyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cabincommentreplylike`
--
ALTER TABLE `cabincommentreplylike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cabinratingbyuser`
--
ALTER TABLE `cabinratingbyuser`
  MODIFY `cabinRatingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cabin_img`
--
ALTER TABLE `cabin_img`
  MODIFY `cabin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `terminal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `terminal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bkash`
--
ALTER TABLE `bkash`
  ADD CONSTRAINT `bkash_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);

--
-- Constraints for table `booked`
--
ALTER TABLE `booked`
  ADD CONSTRAINT `booked_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`),
  ADD CONSTRAINT `booked_ibfk_2` FOREIGN KEY (`cabin_id`) REFERENCES `cabin` (`cabin_id`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`passenger_email`) REFERENCES `passenger` (`passenger_email`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`schedule_date`) REFERENCES `launch_schedule` (`schedule_date`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`launch_id`) REFERENCES `launch` (`launch_id`);

--
-- Constraints for table `cabin`
--
ALTER TABLE `cabin`
  ADD CONSTRAINT `cabin_ibfk_1` FOREIGN KEY (`launch_id`) REFERENCES `launch` (`launch_id`);

--
-- Constraints for table `cabincomment`
--
ALTER TABLE `cabincomment`
  ADD CONSTRAINT `cabincomment_ibfk_1` FOREIGN KEY (`cabin_id`) REFERENCES `cabin` (`cabin_id`),
  ADD CONSTRAINT `cabincomment_ibfk_2` FOREIGN KEY (`passenger_email`) REFERENCES `passenger` (`passenger_email`);

--
-- Constraints for table `cabincommentlike`
--
ALTER TABLE `cabincommentlike`
  ADD CONSTRAINT `cabincommentlike_ibfk_1` FOREIGN KEY (`cabinCommentId`) REFERENCES `cabincomment` (`cabinCommentId`),
  ADD CONSTRAINT `cabincommentlike_ibfk_2` FOREIGN KEY (`passenger_email`) REFERENCES `passenger` (`passenger_email`);

--
-- Constraints for table `cabincommentreply`
--
ALTER TABLE `cabincommentreply`
  ADD CONSTRAINT `cabincommentreply_ibfk_1` FOREIGN KEY (`cabinCommentId`) REFERENCES `cabincomment` (`cabinCommentId`),
  ADD CONSTRAINT `cabincommentreply_ibfk_2` FOREIGN KEY (`passenger_email`) REFERENCES `passenger` (`passenger_email`);

--
-- Constraints for table `cabincommentreplylike`
--
ALTER TABLE `cabincommentreplylike`
  ADD CONSTRAINT `cabincommentreplylike_ibfk_1` FOREIGN KEY (`cabinCommentReplyId`) REFERENCES `cabincommentreply` (`cabinCommentReplyId`),
  ADD CONSTRAINT `cabincommentreplylike_ibfk_2` FOREIGN KEY (`passenger_email`) REFERENCES `passenger` (`passenger_email`);

--
-- Constraints for table `cabinratingbyuser`
--
ALTER TABLE `cabinratingbyuser`
  ADD CONSTRAINT `cabinratingbyuser_ibfk_1` FOREIGN KEY (`cabin_id`) REFERENCES `cabin` (`cabin_id`),
  ADD CONSTRAINT `cabinratingbyuser_ibfk_2` FOREIGN KEY (`passenger_email`) REFERENCES `passenger` (`passenger_email`);

--
-- Constraints for table `cabin_img`
--
ALTER TABLE `cabin_img`
  ADD CONSTRAINT `cabin_img_ibfk_2` FOREIGN KEY (`cabin_id`) REFERENCES `cabin` (`cabin_id`);

--
-- Constraints for table `launch_img`
--
ALTER TABLE `launch_img`
  ADD CONSTRAINT `launch_img_ibfk_1` FOREIGN KEY (`launch_id`) REFERENCES `launch` (`launch_id`);

--
-- Constraints for table `launch_pac`
--
ALTER TABLE `launch_pac`
  ADD CONSTRAINT `launch_pac_ibfk_1` FOREIGN KEY (`launch_id`) REFERENCES `launch` (`launch_id`);

--
-- Constraints for table `launch_schedule`
--
ALTER TABLE `launch_schedule`
  ADD CONSTRAINT `launch_schedule_ibfk_1` FOREIGN KEY (`start_terminal_id`) REFERENCES `terminal` (`terminal_id`),
  ADD CONSTRAINT `launch_schedule_ibfk_2` FOREIGN KEY (`destination_terminal_id`) REFERENCES `terminal` (`terminal_id`),
  ADD CONSTRAINT `launch_schedule_ibfk_3` FOREIGN KEY (`launch_id`) REFERENCES `launch` (`launch_id`);

--
-- Constraints for table `passenger_get_offer`
--
ALTER TABLE `passenger_get_offer`
  ADD CONSTRAINT `passenger_get_offer_ibfk_1` FOREIGN KEY (`passenger_email`) REFERENCES `passenger` (`passenger_email`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`terminal_id`) REFERENCES `terminal` (`terminal_id`),
  ADD CONSTRAINT `route_ibfk_2` FOREIGN KEY (`launch_id`) REFERENCES `launch` (`launch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
