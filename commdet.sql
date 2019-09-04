-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 04:35 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hsereg`
--

-- --------------------------------------------------------

--
-- Table structure for table `commdet`
--

CREATE TABLE IF NOT EXISTS `commdet` (
  `standNo` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `idNum` varchar(100) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `date2` varchar(100) DEFAULT NULL,
  `combo1` varchar(100) DEFAULT NULL,
  `yrsOfResi` varchar(100) DEFAULT NULL,
  `income1` varchar(100) DEFAULT NULL,
  `prevStnd` varchar(100) DEFAULT NULL,
  `amtOfCap` varchar(100) DEFAULT NULL,
  `otherInf` varchar(100) DEFAULT NULL,
  `otherComm` varchar(500) DEFAULT NULL,
  `nameOfRef` varchar(100) DEFAULT NULL,
  `addRef` varchar(100) DEFAULT NULL,
  `contctRef` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commdet`
--

INSERT INTO `commdet` (`standNo`, `name`, `sname`, `idNum`, `address1`, `date2`, `combo1`, `yrsOfResi`, `income1`, `prevStnd`, `amtOfCap`, `otherInf`, `otherComm`, `nameOfRef`, `addRef`, `contctRef`, `gender`) VALUES
(2, 'Leen', 'first', '12345', 'HRDC', 'Wed Mar 08 13:52:58 CAT 1995', 'high density Commercial', '2', '123', 'nil', '126', 'nil', 'one', 'Referee', 'westview ext', '077199223', 'female'),
(3, 'Lewis', 'honye', '3809', '3830 coldstream', 'null', 'high density Commercial', '2', '75', 'nil', '1200', 'resident in Harare', 'none', 'tau', 'muno Mkaroi', '077932', 'male'),
(4, 'romeo', 'mine', '09832', 'romero pennislavia', 'null', 'low density Commercial', '1', '9000', 'none', '1599', 'recently moved from DC', 'none', 'Mariah Carey', 'boston cy', '8998', 'female'),
(5, 'pana', 'velaz', '908', '4680 chiedza Karoi', 'null', 'medium density Commercial', '0', '239', '90 grnanry', '789', 'no more u shld know', 'none', 'restricted', 'reducted', '9087', 'male'),
(6, 'leona', 'ndlovu', '168', '378 claudious nj', 'null', 'Commercial', '0', '890', 'NONE', '8900', 'none much', 'none', 'reducted', 'gvt', 'gvt', 'female'),
(7, 'bridget', 'chigs', '23839', 'chiedza b', 'Wed Apr 05 00:00:00 CAT 1989', 'high density Commercial', '2', '150', 'none', '1900', 'none ', 'none', 'lee', 'chiedza infill', 'reducted', 'female'),
(8, 'jsdj', 'jjxjx', '21e', '74 hsdhd', 'Fri Jan 19 09:27:31 CAT 2018', 'medium density Commercial', '1', '1500', 'none', '1278', 'none', 'nil', 'restricteed', 'rest', 'rest', 'female'),
(9, 'Lesley', 'marimba', '890', 'marimba new ', 'null', 'high density Commercial', '0', '1900', 'none', '1990', 'nil', 'nil', 'lee', 'lee parks', 'restricted', 'male'),
(10, 'lewis', 'honye', '3809', '3830 coldstream', 'null', 'Commercial', '2', '75', 'nil', '1200', 'resident in Harare', 'none', 'tau', 'muno Mkaroi', '077932', 'male'),
(11, 'MITCHY', 'wekwa Grout', '283781', 'Kazangarare mountains', 'null', 'low density Commercial', '14', '75', 'nil', '1', 'restricted', 'none', 'kukue dzidzie', 'karoi k14', '0771', 'female'),
(12, 'MITCHY', 'wekwa Grout', '283781', 'Kazangarare mountains', 'Wed Feb 21 00:00:00 CAT 2018', 'Low Density', '14', '75', 'nil', '1', 'restricted', 'none', 'kukue dzidzie', 'karoi k14', '0771', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commdet`
--
ALTER TABLE `commdet`
  ADD PRIMARY KEY (`standNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commdet`
--
ALTER TABLE `commdet`
  MODIFY `standNo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
