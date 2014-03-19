-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2014 at 03:19 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `send_details`
--

CREATE TABLE IF NOT EXISTS `send_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `email3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `send_details`
--

INSERT INTO `send_details` (`id`, `uid`, `email1`, `email2`, `email3`) VALUES
(1, 1, 'ujju@ujju.com', '', ''),
(2, 1, 'ujju@ujju.com', 'ujju@ujju.com', ''),
(3, 1, 'ujju@ujju.com', 'ujju@ujju.com', 'ujju@ujju.com'),
(4, 1, '', '', ''),
(5, 1, '', '', ''),
(6, 8, 't@t.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `pass`) VALUES
(1, 'manishajn91@gmail.com', 'fg', 'fe', '5ebf8364d17c8df7e4afd586c24f84a0'),
(2, 'atul@gmail.com', 'atul', 'khanna', '41fa3925a7ec42ce029c43d6676e4b2c'),
(3, 'ashu@gmail.com', 'ashish', 'kumar', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'P@P.com', 'p', 'p', '83878c91171338902e0fe0fb97a8c47a'),
(5, 'R@R', 'r', 'r', '4b43b0aee35624cd95b910189b3dc231'),
(6, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'ujju@ujju.com', 'ujju', 'ujju', '000e89f0638e13f7f2b7de7805dcb52f'),
(8, 'P1@P.com', 'dw', 'wd', '202cb962ac59075b964b07152d234b70'),
(9, 'P4@P.com', 'drrg', 'rge', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `usrmsg`
--

CREATE TABLE IF NOT EXISTS `usrmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `msg` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usrmsg`
--

INSERT INTO `usrmsg` (`id`, `uid`, `msg`, `timestamp`) VALUES
(3, 1, 'CALL 123', '2014-03-02 00:47:02'),
(4, 8, '4t4t', '2014-03-02 00:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `usrvoice`
--

CREATE TABLE IF NOT EXISTS `usrvoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usid` int(11) NOT NULL,
  `path` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usrvoice`
--

INSERT INTO `usrvoice` (`id`, `usid`, `path`) VALUES
(1, 8, 'uploaded/aashiqui2-_hpHG6K3R.mp3'),
(2, 9, ' ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
