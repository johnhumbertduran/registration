-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 04:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE `admin_post` (
  `id` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`id`, `post`, `img`, `date`, `time`) VALUES
(1, 'Hellooooo', 'imgs/8675_19-190572_cartoon-mom-png-mother-cartoon-transparent.png', '01/02/2020', '10:03 pm'),
(2, 'hay hahahaha\r\n', 'imgs/images (1).jpg', '01/02/2020', '10:37 pm'),
(3, 'sdsdsd', 'imgs/ISECURE-SITE-300x150.png', '01/03/2020', '08:27 pm'),
(4, 'dfcvbvbvbv\r\ncxcx', 'imgs/2000px-Brother_logo.svg.png', '01/03/2020', '08:27 pm'),
(5, 'hay nano hahahaha', 'imgs/Back_Black.jpg', '01/06/2020', '09:46 pm');

-- --------------------------------------------------------

--
-- Table structure for table `usrs`
--

CREATE TABLE `usrs` (
  `id` int(11) NOT NULL,
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
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usrs`
--

INSERT INTO `usrs` (`id`, `lastName`, `firstName`, `middleName`, `homeAddress`, `gender`, `civilStatus`, `employmentAddress`, `currentWork`, `currentPosition`, `elementary`, `elementaryYearGraduated`, `highSchool`, `highSchoolYearGraduated`, `college`, `collegeYearGraduated`, `collegeDegree`, `graduate`, `graduateYearGraduated`, `graduateDegree`, `officeTelephoneNo`, `cellphoneNo`, `alumniChapterMembership`, `email`, `usrname`, `pssword`, `account_type`, `tempPassword`, `img`) VALUES
(1, 'Duran', 'John Humbert', 'Tandog', 'Camanci Norte, Numancia, Aklan', 'male', 'single', 'Camanci Norte, Numancia, Aklan', 'N/A', 'N/A', 'Kalibo Pilot Elementary School', '2009', 'Aklan Catholic College High School Dept', '2013', 'Aklan Catholic College', '2019', 'BSIT', 'N/A', 'N/A', 'N/A', '09100705763', '09100705763', '', 'johnhumbertd@gmail.com', 'humbert1', 'bert', '2', '', ''),
(2, 'Prosperidad', 'Juan', 'Proskato', 'Dimakita, Saan, Bulacan', 'female', 'married', 'N/A', 'N/A', 'N/A', 'elem', '2003', 'high', '2007', 'collegio', '2011', 'BSTAE', 'N/A', 'N/A', 'N/A', '(036)268-5936', '0953621564844', 'N/A', 'juan@protae.er', 'humbert11', 'passwordusJuanos', '2', '', ''),
(3, 'Prosperidad', 'Juan', 'Proskato', 'Dimakita, Saan, Bulacan', 'female', 'married', 'N/A', 'N/A', 'N/A', 'elem', '2003', 'high', '2007', 'collegio', '2011', 'BSTAE', 'N/A', 'N/A', 'N/A', '(036)268-5936', '0953621564844', 'N/A', 'juan@protae.er', 'humbert123', 'password123', '1', '', 'imgs/2166_Canon_logo.png'),
(4, 'ishhh', 'hahaha', 'new mid', 'aklan', 'male', 'married', 'kalibo', 'layout', 'artist', 'pilot', '2015', 'ACC', '2013', 'acc', '2019', 'BSIT', 'laaah', '2020', 'bsit', '09100705764', '09100705766', 'kalibo', 'john@dshfd.kf', 'luhhh', 'luh', '2', '', ''),
(5, 'jlxcvhbvkyudhfkh', 'oyofgdogyfdoiuhy`', 'loiyufdiohjfkodfhldh', 'l;fjgloduifoguodfjg', 'female', 'married', 'ghj', 'ghj', 'gj', 'gj', 'gj', 'g', 'jg', 'jhg', 'jg', 'jg', 'jg', 'jg', 'jg', '09100705763', '09100705763', 'gj', 'ghj@dshfd.kf', 'kigge', 'kdhsgfsdgtufystudet', '2', '', ''),
(6, 'fsdkjfkjgh', 'hkgfjbdfjdghk', 'ghkhjdfkgfk', 'hklhjfdlkhl', 'male', 'married', 'N/A', 'N/A', 'N/A', 'ffsdfsdf', 'fdsfsdf', 'John Humbert T. Duran', '9067', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '09100705763', '09100705763', 'xsdfgsfsdfsd', 'johnhumbertd@gmail.com', 'bertings', 'fdhdthetrghyrt', '2', '', ''),
(7, 'ghdfbvc', 'hdfsds', 'iuiuiui', 'fdfd', 'male', 'single', 'N/A', 'N/A', 'N/A', 'ffsdfsdf', 'fdsfsdf', 'John Humbert T. Duran', '9067', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '09100705763', '09100705763', 'xsdfgsfsdfsd', 'johnhumbertd@gmail.com', 'flayetr', 'fdhdthetrghyrt', '2', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_post`
--
ALTER TABLE `admin_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usrs`
--
ALTER TABLE `usrs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_post`
--
ALTER TABLE `admin_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usrs`
--
ALTER TABLE `usrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
