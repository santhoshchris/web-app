-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2012 at 06:53 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chri0163`
--

-- --------------------------------------------------------

--
-- Table structure for table `groceries`
--

CREATE TABLE IF NOT EXISTS `groceries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `items` varchar(256) CHARACTER SET latin1 NOT NULL,
  `section` int(11) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `time_updated` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `groceries`
--

INSERT INTO `groceries` (`id`, `items`, `section`, `checked`, `time_updated`) VALUES
(1, 'apples', 1, 1, 1343068564),
(2, 'bananas', 1, 1, 1343068564),
(3, 'grapes', 1, 0, 0),
(4, 'oranges', 1, 0, 0),
(5, 'pineapple', 1, 0, 0),
(6, 'beans', 1, 0, 0),
(7, 'carrots', 1, 0, 0),
(8, 'celery', 1, 0, 0),
(9, 'potatoes', 1, 0, 0),
(10, 'tomatoes', 1, 0, 0),
(11, 'chicken', 2, 0, 0),
(12, 'fish', 2, 0, 0),
(13, 'eggs', 2, 0, 0),
(14, 'lamb', 2, 1, 1343068567),
(15, 'beef', 2, 1, 1343068567),
(16, 'milk', 3, 1, 1343068573),
(17, 'cheese', 3, 1, 1343068573),
(18, 'butter', 3, 0, 0),
(19, 'yogurt', 3, 0, 0),
(20, 'white', 3, 0, 0),
(21, 'wheat', 3, 0, 0),
(22, 'brown', 3, 0, 0),
(23, 'whole', 3, 0, 0),
(24, 'chips', 4, 0, 0),
(25, 'candy', 4, 1, 1343069581),
(26, 'cookies', 4, 0, 0),
(27, 'ketchup', 4, 0, 0),
(28, 'lollipop', 4, 0, 0),
(29, 'lobster', 2, 1, 1343068570),
(30, 'oyster', 2, 0, 0);
