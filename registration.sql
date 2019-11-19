-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 01:50 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `regist35_registration`
--
CREATE DATABASE IF NOT EXISTS `regist35_registration` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `regist35_registration`;

-- --------------------------------------------------------

--
-- Table structure for table `usrs`
--

CREATE TABLE IF NOT EXISTS `usrs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civilStatus` varchar(255) NOT NULL,
  `employmentAddress` varchar(255) NOT NULL,
  `currentWork` varchar(255) NOT NULL,
  `currentPosition` varchar(255) NOT NULL,
  `elementary` varchar(255) NOT NULL,
  `elementaryYearGraduated` varchar(255) NOT NULL,
  `highSchool` varchar(255) NOT NULL,
  `highSchoolYearGraduated` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `collegeYearGraduated` varchar(255) NOT NULL,
  `collegeDegree` varchar(255) NOT NULL,
  `graduate` varchar(255) NOT NULL,
  `graduateYearGraduated` varchar(255) NOT NULL,
  `graduateDegree` varchar(255) NOT NULL,
  `officeTelephoneNo` varchar(255) NOT NULL,
  `cellphoneNo` varchar(255) NOT NULL,
  `alumniChapterMembership` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usrname` varchar(255) NOT NULL,
  `pssword` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `tempPassword` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `usrs`
--

INSERT INTO `usrs` (`id`, `lastName`, `firstName`, `middleName`, `homeAddress`, `gender`, `civilStatus`, `employmentAddress`, `currentWork`, `currentPosition`, `elementary`, `elementaryYearGraduated`, `highSchool`, `highSchoolYearGraduated`, `college`, `collegeYearGraduated`, `collegeDegree`, `graduate`, `graduateYearGraduated`, `graduateDegree`, `officeTelephoneNo`, `cellphoneNo`, `alumniChapterMembership`, `email`, `usrname`, `pssword`, `account_type`, `tempPassword`, `img`) VALUES
(1, 'Duran', 'John Humbert', 'Tandog', 'Camanci Norte, Numancia, Aklan', 'male', 'single', 'Camanci Norte, Numancia, Aklan', 'N/A', 'N/A', 'Kalibo Pilot Elementary School', '2009', 'Aklan Catholic College High School Dept', '2013', 'Aklan Catholic College', '2019', 'BSIT', 'N/A', 'N/A', 'N/A', '09100705763', '09100705763', '', 'johnhumbertd@gmail.com', 'johnhumbert', 'password123', '2', '', 'img/9498_FB_IMG_15534333510265335.jpg'),
(2, 'Prosperidad', 'Juan', 'Proskato', 'Dimakita, Saan, Bulacan', 'female', 'married', 'N/A', 'N/A', 'N/A', 'elem', '2003', 'high', '2007', 'collegio', '2011', 'BSTAE', 'N/A', 'N/A', 'N/A', '(036)268-5936', '0953621564844', 'N/A', 'juan@protae.er', 'juanostalamus', 'passwordusJuanos', '2', '', ''),
(3, 'Prosperidad', 'Juan', 'Proskato', 'Dimakita, Saan, Bulacan', 'female', 'married', 'N/A', 'N/A', 'N/A', 'elem', '2003', 'high', '2007', 'collegio', '2011', 'BSTAE', 'N/A', 'N/A', 'N/A', '(036)268-5936', '0953621564844', 'N/A', 'juan@protae.er', 'juanostalamus', 'passwordusJuanos', '2', '', ''),
(4, 'hjg', 'hjg', 'jhg', 'jgj', 'female', 'single', 'ghj', 'ghj', 'gj', 'gj', 'gj', 'g', 'jg', 'jhg', 'jg', 'jg', 'jg', 'jg', 'jg', '09100705763', '09100705763', 'gj', 'ghj@dshfd.kf', 'uidsfusdhyifushdfis', 'kdhsgfsdgtufystudet', '2', '', ''),
(5, 'jlxcvhbvkyudhfkh', 'oyofgdogyfdoiuhy`', 'loiyufdiohjfkodfhldh', 'l;fjgloduifoguodfjg', 'female', 'married', 'ghj', 'ghj', 'gj', 'gj', 'gj', 'g', 'jg', 'jhg', 'jg', 'jg', 'jg', 'jg', 'jg', '09100705763', '09100705763', 'gj', 'ghj@dshfd.kf', 'uidsfusdhyifushdfis', 'kdhsgfsdgtufystudet', '2', '', ''),
(6, 'fsdkjfkjgh', 'hkgfjbdfjdghk', 'ghkhjdfkgfk', 'hklhjfdlkhl', 'male', 'married', 'N/A', 'N/A', 'N/A', 'ffsdfsdf', 'fdsfsdf', 'John Humbert T. Duran', '9067', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '09100705763', '09100705763', 'xsdfgsfsdfsd', 'johnhumbertd@gmail.com', 'fgvnhchdtgyd', 'fdhdthetrghyrt', '2', '', ''),
(7, 'ghdfbvc', 'hdfsds', 'iuiuiui', 'fdfd', 'male', 'single', 'N/A', 'N/A', 'N/A', 'ffsdfsdf', 'fdsfsdf', 'John Humbert T. Duran', '9067', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '09100705763', '09100705763', 'xsdfgsfsdfsd', 'johnhumbertd@gmail.com', 'fgvnhchdtgyd', 'fdhdthetrghyrt', '2', '', ''),
(8, 'hkidgsfkgh', 'hjkfdghskdfgj', 'khjfdksjfhKNFVKJH', 'kjhfvdkshjkh', 'female', 'single', 'Camanci Norte, Numancia, Aklan', 'N/A', 'N/A', 'dfkljglh', '9348793', 'fdkshjkh', '8643', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '09100705763', '09100705763', 'sdfvsdfsd', 'johnhumbertd@gmail.com', 'kjsdfhSLKDJFLJSLDFLSD', 'gsdfjkfghk', '2', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
