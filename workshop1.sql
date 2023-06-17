-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 01:19 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` varchar(8) NOT NULL,
  `album_name` varchar(40) DEFAULT NULL,
  `price` decimal(4,2) DEFAULT NULL,
  `no_stock` int(5) DEFAULT NULL,
  `release_year` int(5) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `artist_name` varchar(40) DEFAULT NULL,
  `rating` decimal(4,2) DEFAULT NULL,
  `album_location` varchar(5) DEFAULT NULL,
  `album_png` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `price`, `no_stock`, `release_year`, `genre`, `artist_name`, `rating`, `album_location`, `album_png`) VALUES
('A0001', 'DAMN', '26.50', 90, 2017, 'Hip-Hop', 'Kendrick Lamar', '8.50', 'H1', 'damn.png'),
('A0002', 'Chapters', '12.90', 180, 2016, 'RnB', 'Yuna', '7.59', 'H2', 'chapters.png'),
('A0003', 'Evolve', '18.75', 77, 2017, 'Pop Rock', 'Imagine Dragons', '5.70', 'H1', 'evolve.png'),
('A0004', 'LY: Answer', '35.90', 276, 2018, 'Pop', 'BTS', '7.75', 'M7', 'lya.png'),
('A0005', 'Red Pill Blues', '29.90', 70, 2017, 'Pop', 'Maroon 5', '5.60', 'H3', 'rpb.png'),
('A0006', 'Kamikaze', '26.50', 190, 2018, 'Hip-Hop', 'Eminem', '6.80', 'H2', 'emi.png'),
('A0007', 'Revival', '20.50', 33, 2017, 'Hip-Hop', 'Eminem', '4.20', 'K5', 'emir.png'),
('A0008', 'Flower Boy', '20.00', 74, 2017, 'Hip-Hop', 'Tyler The Creator', '8.70', 'K4', 'fb.png'),
('A0009', 'Voicenotes', '19.50', 220, 2018, 'Pop', 'Charlie Puth', '6.40', 'H3', 'cp.png'),
('A0010', 'Starboy', '25.00', 148, 2016, 'RnB', 'The Weeknd', '7.10', 'K6', 'sb.png'),
('S0001', 'Let It Be', '45.50', 173, 1970, 'Rock', 'The Beatles', '7.90', 'M8', 'lib.png');

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `album_id` varchar(8) NOT NULL,
  `staff_id` varchar(5) NOT NULL,
  `purchase_date` date NOT NULL,
  `amount` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`album_id`, `staff_id`, `purchase_date`, `amount`) VALUES
('A0001', 'S001', '2018-06-01', 50),
('A0001', 'S001', '2018-07-02', 50),
('A0001', 'S001', '2018-08-01', 50),
('A0001', 'S002', '2018-07-06', 50),
('A0001', 'S002', '2018-08-14', 10),
('A0002', 'S002', '2018-06-21', 10),
('A0002', 'S002', '2018-08-03', 20),
('A0002', 'S003', '2018-08-02', 40),
('A0003', 'S003', '2018-07-14', 23),
('A0004', 'S003', '2018-06-12', 34),
('A0004', 'S003', '2018-08-03', 50),
('A0005', 'S002', '2018-08-13', 13),
('A0005', 'S003', '2018-07-04', 20),
('A0005', 'S003', '2018-07-10', 12),
('A0006', 'S002', '2018-06-04', 30),
('A0006', 'S002', '2018-08-05', 20),
('A0007', 'S002', '2018-07-03', 60),
('A0007', 'S002', '2018-10-12', 10),
('A0008', 'S001', '2018-07-03', 21),
('A0008', 'S002', '2018-06-15', 10),
('A0009', 'S002', '2018-06-06', 10),
('A0010', 'S002', '2018-08-07', 30),
('A0010', 'S003', '2018-06-12', 12),
('S0001', 'S001', '2018-06-04', 5),
('S0001', 'S002', '2018-06-01', 50),
('S0001', 'S002', '2018-08-10', 12),
('S0001', 'S003', '2018-06-01', 10);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(5) NOT NULL,
  `staff_password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_password`) VALUES
('S001', 'abcdef'),
('S002', 's002'),
('S003', 'helloworld'),
('S004', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`album_id`,`staff_id`,`purchase_date`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
