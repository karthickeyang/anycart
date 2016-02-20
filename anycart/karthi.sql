-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2016 at 09:43 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_table`
--

CREATE TABLE IF NOT EXISTS `country_table` (
  `id` int(11) NOT NULL,
  `country` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_table`
--

INSERT INTO `country_table` (`id`, `country`) VALUES
(1, 'india'),
(2, 'united states'),
(3, 'canada');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(100) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `region/state` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `telephone`, `fax`, `company`, `address1`, `address2`, `city`, `postal_code`, `country`, `region/state`, `password`) VALUES
(0, 'karthickeyan2', 'ganesan', 'karthic200@gmail.com', '9585989741', '56465516516', 'irs software', '62/75, Rajaganapthi street', 'ammapet', 'salem', '636003', 'india', 'tamilnadu', 'iamgktheboss'),
(1, 'selva', 'mani', 'selvamaniirs@gmail.com', '', '', '', '', '', '', '', '', '', ''),
(2, 'selva', 'mani', 'selvamaniirs@gmail.com', '', '', '', '', '', '', '', '', '', ''),
(3, 'fdg', 'fdgdfg', 'fdgdfg@gmail.com', '6655445', '5463543', '543345', 'thfgh', 'gfhdfh', 'hgfgh', '54656', 'dfgdfsg', 'fgdfg', ''),
(4, 'fdg', 'fdgdfg', 'fdgdfg@gmail.com', '6655445', '5463543', '543345', 'thfgh', 'gfhdfh', 'hgfgh', '54656', 'dfgdfsg', 'fgdfg', ''),
(5, 'gokulakannan', 'g', 'kk@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', 'fgdfg', 'chenni', '600079', 'India', 'Tamil Nadu', 'gdfsgfd'),
(6, 'gokulakannan', 'g', 'kk1@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', 'fgdfg', 'chenni', '600079', 'India', 'Tamil Nadu', 'gdfsgfd'),
(7, 'selva', 'mani', 'selvamaniirs@gmail.com', '09876543210', '09876543210', 'dsfsdf', 'Wall Tax Road', 'gdsfgdf', 'chennai', '600079', 'India', 'Tamil Nadu', 'dsfad'),
(8, 'selva', 'mani', 'selvamaniirs@gmail.com', '09876543210', '09876543210', 'dsfsdf', 'Wall Tax Road', 'gdsfgdf', 'chennai', '600079', 'India', 'Tamil Nadu', 'dsfad'),
(9, 'selva', 'mani', 'selvamaniirs@gmail.com', '09876543210', '09876543210', 'dsfsdf', 'Wall Tax Road', 'gdsfgdf', 'chennai', '600079', 'India', 'Tamil Nadu', 'dsfad'),
(10, 'selva', 'mani', 'selvamaniirs@gmail.com', '09876543210', '09876543210', 'dsfsdf', 'Wall Tax Road', 'gdsfgdf', 'chennai', '600079', 'India', 'Tamil Nadu', 'dsfad'),
(11, 'selva', 'mani', '', '09876543210', '09876543210', 'dsfsdf', 'Wall Tax Road', '', 'chennai', '600079', 'India', 'Tamil Nadu', ''),
(12, 'selva', 'mani', 'selvamaniirs@gmail.com', '09876543210', '09876543210', 'dsfsdf', 'Wall Tax Road', '', 'chennai', '600079', '', 'tamilnadu', 'dsfsd'),
(13, 'selva', 'mani', 'selvamaniirs@gmail.com', '09876543210', '09876543210', 'dsfsdf', 'Wall Tax Road', '', 'chennai', '600079', '', 'tamilnadu', 'dsfsd'),
(14, 'gokulakannan', 'g', 'kk1@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', '', 'chenni', '600079', 'india', 'delhi', 'hkjhjk'),
(15, 'gokulakannan', 'g', 'kk1@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', '', 'chenni', '600079', 'india', 'delhi', 'hkjhjk'),
(16, 'gokulakannan', 'g', 'kk1@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', '', 'chenni', '600079', 'india', 'delhi', 'hkjhjk'),
(17, 'gokulakannan', 'g', 'kk1@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', '', 'chenni', '600079', 'india', 'delhi', 'hkjhjk'),
(18, 'gokulakannan', 'g', 'kk1@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', '', 'chenni', '600079', 'india', 'delhi', 'hkjhjk'),
(19, 'gokulakannan', 'g', 'kk1@gmail.com', '09262055850', '09262055850', 'fdgd', 'sivananam street,mambalam', '', 'chenni', '600079', 'india', 'delhi', '123456'),
(20, 'hdgh', 'ghgfh', 'ghfghfg@hfg', '9585989741', '', 'vzxcvzcxv', 'cxvbdbcvb', '', 'vbcvb', '636003', 'india', 'tamilnadu', 'iamgktheboss'),
(22, 'dharanraj123', 'gunasekaran', 'dharanrajg@gmail.com', '9585989741', '123456789', 'infoview technologies', 'Wall Tax Road', 'pallikaranai', 'chennai', '600079', 'pakistan', 'delhi', '123456'),
(23, 'dineshkumar', 'kamal', 'dinesh@gmail.com', '9585989741', '123456789', 'irs software', 'Wall Tax Road', 'chrompet', 'chennai', '636003', '1', '1', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `states_table`
--

CREATE TABLE IF NOT EXISTS `states_table` (
  `id` int(11) NOT NULL,
  `country_id` int(10) NOT NULL,
  `states` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states_table`
--

INSERT INTO `states_table` (`id`, `country_id`, `states`) VALUES
(1, 1, 'tamilnadu'),
(2, 1, 'karnataka'),
(3, 1, 'kerala'),
(4, 2, 'califonia'),
(5, 2, 'florida'),
(6, 2, 'newyork'),
(7, 3, 'Ontario'),
(8, 3, 'Quebec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_table`
--
ALTER TABLE `country_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states_table`
--
ALTER TABLE `states_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_table`
--
ALTER TABLE `country_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `states_table`
--
ALTER TABLE `states_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `states_table`
--
ALTER TABLE `states_table`
  ADD CONSTRAINT `states_table_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country_table` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
