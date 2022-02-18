-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 07:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivah`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `gotra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`gotra`) VALUES
('ddjdjueue'),
('jay'),
('asd'),
('vidhya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, 'Jaykumar', 'Ram@123gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`user_data`)),
  `user_data_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_data`, `user_data_type`) VALUES
(1, 1, '{\"profile_created_by\":\"self\",\"firstName\":\"Jaykumar\",\"gender\":\"male\",\"marital_status\":\"unmarried\",\"date_of_birth\":\"\",\"country\":\"india\",\"state\":\"self\",\"city\":\"self\",\"religion\":\"self\",\"mother_tounge\":\"self\",\"caste\":\"self\",\"mobile_no\":\"7083377371\"}', 'register'),
(2, 1, '{\"highesteducation\":\"doctor\",\"specialization\":\"specialization\",\"other\":\"\",\"occupation\":\"occupation\",\"inudstry\":\"industry\",\"designation\":\"designation\",\"annualincome\":\"annualincome\",\"familyincome\":\"familyincome\",\"manglik\":\"\",\"gotra\":\"ddjdjueue\",\"feet\":\"3\",\"inches\":\"4\",\"body_type\":\"\",\"smoking\":\"SMOKING\",\"drinking\":\"DRINKING\",\"food_habits\":\"FOOD HABITS\"}', 'education_profession'),
(3, 1, '{\"profile\":\"profile/.trashed-1621353502-IMG_20210418_212817.jpg\",\"adhar_card\":\"adhar_card/IMG_20210124_114455.jpg\",\"voter_id\":\"voter_id/.trashed-1621353502-IMG_20210418_212817.jpg\",\"pan_card\":\"pan_card/IMG_20210124_115747.jpg\",\"passport\":\"passport/IMG_20210305_200715.jpg\",\"divers_license\":\"divers_license/IMG_20210212_103255.jpg\"}', 'upload');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
