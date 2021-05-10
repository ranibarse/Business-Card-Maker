-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2021 at 05:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `business_card_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE IF NOT EXISTS `card_details` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(999) NOT NULL,
  `Company_name` varchar(999) NOT NULL,
  `Company_website` varchar(999) NOT NULL,
  `Company_address` varchar(999) NOT NULL,
  `Company_services` varchar(999) NOT NULL,
  `Company_logo` varchar(999) NOT NULL,
  `Company_contact_person_name` varchar(999) NOT NULL,
  `Company_contact_person_designation` varchar(999) NOT NULL,
  `Company_contact_person_contact` varchar(999) NOT NULL,
  `Company_contact_person_emailid` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`ID`, `user_id`, `Company_name`, `Company_website`, `Company_address`, `Company_services`, `Company_logo`, `Company_contact_person_name`, `Company_contact_person_designation`, `Company_contact_person_contact`, `Company_contact_person_emailid`) VALUES
(2, '1', 'Imagine Script', 'www.imaginescript.com', 'Farshi Stop Amravati', 'WEb Development', 'Koala.jpg', 'Kushal', 'Founder', '9890546711', 'kushaldhole@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `email` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `name` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `email`, `password`, `name`, `contact`) VALUES
(1, 'admin@sdsdf.gh', 'admin2020', 'Kushal Dhole', '');
