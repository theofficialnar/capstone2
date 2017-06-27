-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 03:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acolyte`
--

CREATE TABLE `acolyte` (
  `id` int(10) NOT NULL,
  `d_protect` int(10) NOT NULL,
  `d_bane` int(10) NOT NULL,
  `ruwach` int(10) NOT NULL,
  `pneuma` int(10) NOT NULL,
  `tele` int(10) NOT NULL,
  `w_portal` int(10) NOT NULL,
  `heal` int(10) NOT NULL,
  `i_agi` int(10) NOT NULL,
  `d_agi` int(10) NOT NULL,
  `a_benedicta` int(10) NOT NULL,
  `s_crucis` int(10) NOT NULL,
  `angelus` int(10) NOT NULL,
  `bless` int(10) NOT NULL,
  `cure` int(10) NOT NULL,
  `h_light` int(10) NOT NULL,
  `build_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archer`
--

CREATE TABLE `archer` (
  `id` int(10) NOT NULL,
  `o_eye` int(10) NOT NULL,
  `v_eye` int(10) NOT NULL,
  `atten_con` int(10) NOT NULL,
  `d_strafe` int(10) NOT NULL,
  `a_shower` int(10) NOT NULL,
  `m_arrow` int(10) NOT NULL,
  `c_arrow` int(10) NOT NULL,
  `build_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `builds`
--

CREATE TABLE `builds` (
  `id` int(10) NOT NULL,
  `acct_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `magician`
--

CREATE TABLE `magician` (
  `id` int(10) NOT NULL,
  `sp_rec` int(10) NOT NULL,
  `sight` int(10) NOT NULL,
  `nap_beat` int(10) NOT NULL,
  `s_wall` int(10) NOT NULL,
  `soul_strike` int(10) NOT NULL,
  `c_bolt` int(10) NOT NULL,
  `f_diver` int(10) NOT NULL,
  `s_curse` int(10) NOT NULL,
  `f_ball` int(10) NOT NULL,
  `f_wall` int(10) NOT NULL,
  `f_bolt` int(10) NOT NULL,
  `l_bolt` int(10) NOT NULL,
  `t_storm` int(10) NOT NULL,
  `e_coat` int(10) NOT NULL,
  `build_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `id` int(11) NOT NULL,
  `e_weight` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `overcharge` int(11) NOT NULL,
  `pcart` int(11) NOT NULL,
  `identify` int(11) NOT NULL,
  `vend` int(11) NOT NULL,
  `mammo` int(11) NOT NULL,
  `c_revo` int(11) NOT NULL,
  `c_cart` int(11) NOT NULL,
  `loud_exclam` int(11) NOT NULL,
  `buying` int(11) NOT NULL,
  `c_deco` int(11) NOT NULL,
  `build_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `novice`
--

CREATE TABLE `novice` (
  `id` int(10) NOT NULL,
  `basic` int(10) NOT NULL,
  `f_aid` int(10) NOT NULL,
  `t_dead` int(10) NOT NULL,
  `build_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `swordsman`
--

CREATE TABLE `swordsman` (
  `id` int(10) NOT NULL,
  `sword` int(10) NOT NULL,
  `two_hand_sword` int(10) NOT NULL,
  `hp_rec` int(10) NOT NULL,
  `bash` int(10) NOT NULL,
  `provoke` int(10) NOT NULL,
  `m_break` int(10) NOT NULL,
  `endure` int(10) NOT NULL,
  `m_hp_rec` int(10) NOT NULL,
  `f_blow` int(10) NOT NULL,
  `a_berserk` int(10) NOT NULL,
  `build_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thief`
--

CREATE TABLE `thief` (
  `id` int(10) NOT NULL,
  `d_attack` int(10) NOT NULL,
  `i_dodge` int(10) NOT NULL,
  `steal` int(10) NOT NULL,
  `hide` int(10) NOT NULL,
  `envenom` int(10) NOT NULL,
  `detox` int(10) NOT NULL,
  `s_sand` int(10) NOT NULL,
  `b_slide` int(10) NOT NULL,
  `p_stone` int(10) NOT NULL,
  `t_stone` int(10) NOT NULL,
  `build_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acolyte`
--
ALTER TABLE `acolyte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `archer`
--
ALTER TABLE `archer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `builds`
--
ALTER TABLE `builds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acct_id` (`acct_id`);

--
-- Indexes for table `magician`
--
ALTER TABLE `magician`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `novice`
--
ALTER TABLE `novice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acct_id` (`build_id`);

--
-- Indexes for table `swordsman`
--
ALTER TABLE `swordsman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acct_id` (`build_id`);

--
-- Indexes for table `thief`
--
ALTER TABLE `thief`
  ADD PRIMARY KEY (`id`),
  ADD KEY `build_id` (`build_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acolyte`
--
ALTER TABLE `acolyte`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `archer`
--
ALTER TABLE `archer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `builds`
--
ALTER TABLE `builds`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `magician`
--
ALTER TABLE `magician`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `novice`
--
ALTER TABLE `novice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `swordsman`
--
ALTER TABLE `swordsman`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thief`
--
ALTER TABLE `thief`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `acolyte`
--
ALTER TABLE `acolyte`
  ADD CONSTRAINT `acolyte_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`);

--
-- Constraints for table `archer`
--
ALTER TABLE `archer`
  ADD CONSTRAINT `archer_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`);

--
-- Constraints for table `builds`
--
ALTER TABLE `builds`
  ADD CONSTRAINT `builds_ibfk_1` FOREIGN KEY (`acct_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `magician`
--
ALTER TABLE `magician`
  ADD CONSTRAINT `magician_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`);

--
-- Constraints for table `merchant`
--
ALTER TABLE `merchant`
  ADD CONSTRAINT `merchant_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`);

--
-- Constraints for table `novice`
--
ALTER TABLE `novice`
  ADD CONSTRAINT `novice_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`);

--
-- Constraints for table `swordsman`
--
ALTER TABLE `swordsman`
  ADD CONSTRAINT `swordsman_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`);

--
-- Constraints for table `thief`
--
ALTER TABLE `thief`
  ADD CONSTRAINT `thief_ibfk_1` FOREIGN KEY (`build_id`) REFERENCES `builds` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
