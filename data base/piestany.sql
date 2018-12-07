-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 11:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piestany`
--

-- --------------------------------------------------------

--
-- Table structure for table `adaption`
--

CREATE TABLE `adaption` (
  `adaption_id` int(5) NOT NULL,
  `adaption_name` varchar(20) DEFAULT NULL,
  `adaption_kind` varchar(20) DEFAULT NULL,
  `adaption_address` varchar(20) DEFAULT NULL,
  `adaption_email` varchar(20) DEFAULT NULL,
  `adaption_replacement` varchar(20) DEFAULT NULL,
  `adaption_other_pets` varchar(20) DEFAULT NULL,
  `adaption_caption` int(5) DEFAULT NULL,
  `adaption_kind_of_pets` varchar(20) DEFAULT NULL,
  `telephone_number1` int(20) DEFAULT NULL,
  `telephone_number2` int(20) DEFAULT NULL,
  `other_pet` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(20) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` date DEFAULT NULL,
  `castration` varchar(20) DEFAULT NULL,
  `cat_user_id` varchar(5) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `fk_image_cat` smallint(5) UNSIGNED DEFAULT NULL,
  `fk_supporter` smallint(5) UNSIGNED DEFAULT NULL,
  `fk_adaption` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `dog_id` int(5) NOT NULL,
  `dog_name` varchar(20) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `born_date` date DEFAULT NULL,
  `castration` varchar(20) DEFAULT NULL,
  `dog_user_id` varchar(5) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `fk_image_dog` smallint(5) NOT NULL,
  `fk_supporter` smallint(5) UNSIGNED DEFAULT NULL,
  `fk_adaption` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_cat`
--

CREATE TABLE `image_cat` (
  `image_cat_id` int(5) NOT NULL,
  `image_cat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image_dog`
--

CREATE TABLE `image_dog` (
  `image_dog_id` int(5) NOT NULL,
  `image_dog` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supporter`
--

CREATE TABLE `supporter` (
  `supporter_id` int(5) NOT NULL,
  `city` varchar(25) DEFAULT NULL,
  `street` varchar(25) DEFAULT NULL,
  `zip` int(10) DEFAULT NULL,
  `tel` int(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(5) NOT NULL,
  `users_email` varchar(25) DEFAULT NULL,
  `users_name` varchar(25) DEFAULT NULL,
  `users_pass` int(10) DEFAULT NULL,
  `users_role` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adaption`
--
ALTER TABLE `adaption`
  ADD PRIMARY KEY (`adaption_id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`dog_id`),
  ADD KEY `fk_image_dog` (`fk_image_dog`),
  ADD KEY `fk_supporter` (`fk_supporter`),
  ADD KEY `fk_adaption` (`fk_adaption`);

--
-- Indexes for table `image_cat`
--
ALTER TABLE `image_cat`
  ADD PRIMARY KEY (`image_cat_id`);

--
-- Indexes for table `image_dog`
--
ALTER TABLE `image_dog`
  ADD PRIMARY KEY (`image_dog_id`);

--
-- Indexes for table `supporter`
--
ALTER TABLE `supporter`
  ADD PRIMARY KEY (`supporter_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adaption`
--
ALTER TABLE `adaption`
  MODIFY `adaption_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `dog_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_cat`
--
ALTER TABLE `image_cat`
  MODIFY `image_cat_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_dog`
--
ALTER TABLE `image_dog`
  MODIFY `image_dog_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supporter`
--
ALTER TABLE `supporter`
  MODIFY `supporter_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
