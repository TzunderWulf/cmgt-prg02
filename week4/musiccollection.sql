-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 11:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musiccollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `albumName` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `tracks` int(11) NOT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `albumCover` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `albumName`, `artist`, `year`, `tracks`, `genre`, `albumCover`) VALUES
(1, 'A Fever You Can\'t Sweat Out', 'Panic! at the Disco', 2005, 13, 'Alternative/Indie', 'images/a_fever_you_cant_sweat_out.png'),
(2, 'Pretty. Odd.', 'Panic! at the Disco', 2008, 15, 'Pop/Rock', 'images/pretty_odd.jpg'),
(3, 'Vices & Virtues', 'Panic! at the Disco', 2011, 10, 'Pop', 'images/vices_and_virtues.jpg'),
(4, 'Too Weird to Live, Too Rare to Die!', 'Panic! at the Disco', 2013, 10, 'Alternative/Indie', 'images/too_weird_to_live_too_rare_to_die.jpg'),
(5, 'Death of a Bachelor', 'Panic! at the Disco', 2016, 11, 'Alternative/Indie', 'images/death_of_a_bachelor.jpg'),
(6, 'Pray for the Wicked', 'Panic! at the Disco', 2018, 11, 'Alternative/Indie', 'images/pray_for_the_wicked.jpg'),
(7, 'The Black Parade', 'My Chemical Romance', 2006, 11, 'Alternative/Punk/Indie', 'images/black_parade.jpg'),
(8, 'RAMMSTEIN', 'Rammstein', 2019, 11, 'Tanzmetall/Hardrock', 'images/rammstein.jpg'),
(9, 'Trench', 'Twenty One Pilots', 2018, 14, 'Rock', 'images/trench.jpg'),
(10, 'Blurryface', 'Twenty One Pilots', 2015, 14, 'Hip-Hop', 'images/blurryface.jpg'),
(11, 'I Am', 'Earth, Wind and Fire', 1979, 9, 'Disco/Soul', 'images/i_am.jpg'),
(12, 'Cruisin\'', 'Village People', 1978, 5, 'Disco', 'images/cruisin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
