-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2017 at 11:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `besttot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(260) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1-superadmin,2-admin',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `role`, `status`) VALUES
(11, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 8904722440, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `announcement_title` varchar(255) NOT NULL,
  `announcement_date` varchar(255) NOT NULL,
  `announcement_desc` text NOT NULL,
  `announcement_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `date_created`, `date_updated`, `announcement_title`, `announcement_date`, `announcement_desc`, `announcement_image`, `deleted`) VALUES
(2, '2017-08-04 12:27:53', '2017-08-04 12:37:38', 'batch 1', '04-aug-2017', 'hi new batch will be started on 04-aug-2017', '15018304589.jpg', 0),
(3, '2017-08-04 13:38:16', '0000-00-00 00:00:00', 'Summer Batch', '25-apr-2018', 'hi dshg gh; sgdiu dsfh sdukfyt fdsf.ul fsdl  dsfoy svdfotyl dsfo.l', '1501834096', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `blog_title` varchar(225) NOT NULL,
  `blog_image` varchar(225) NOT NULL,
  `blog_image_details` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date_created`, `date_updated`, `blog_title`, `blog_image`, `blog_image_details`, `deleted`) VALUES
(34, '2017-08-04 14:30:53', '2017-08-04 14:40:32', 'blog 1', '15018378329.jpg', '15018378329.jpg', 0),
(35, '2017-08-04 14:39:40', '2017-08-04 14:40:53', 'blog 2', '15018378447.jpg', '15018378447.jpg', 0),
(36, '2017-08-04 14:42:21', '0000-00-00 00:00:00', 'blog 3', '15018379416.jpg', '15018379416.jpg', 0),
(37, '2017-08-04 14:57:02', '0000-00-00 00:00:00', 'blog 4', '15018388223.jpg', '15018388223.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `contact_name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `map` varchar(225) NOT NULL,
  `phone_no` varchar(225) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `date_created`, `date_updated`, `contact_name`, `email`, `address`, `map`, `phone_no`, `deleted`) VALUES
(1, '2014-11-23', '2017-01-04', 'Contact Us', 'test@gmail.com', 'TN Subhadra Devi, #16/15 2nd Main, Marrenhalli, ViyaNagar , Bangalore : -560040', 'Bangalore', '21474836472', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_form`
--

CREATE TABLE IF NOT EXISTS `enquiry_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE IF NOT EXISTS `facts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `facts_title` varchar(225) NOT NULL,
  `facts_desc` text NOT NULL,
  `facts_image` varchar(225) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `date_created`, `date_updated`, `facts_title`, `facts_desc`, `facts_image`, `deleted`) VALUES
(1, '2017-01-05 17:07:23', '2017-02-21 09:30:36', 'Aravind', 'â€œSafety record â€” I would consider that a good piece of info. One of the reasons I think people buy expensive cars is that they will protect them more in an accident or help them prevent an accident. ... This is actually more precise information. This is not a sales pitch. This term, â€˜crumple zone,â€™ I would find use for in my article... about the lights, these are all high-tech things that I think readers would find interesting. Those are the kinds of specifics I would be looking for.â€', '1484987771tip1.jpg', 0),
(12, '2017-01-06 17:44:11', '2017-01-21 14:08:54', 'Tour information', 'saccscasc', '1484987795tip2.jpg', 0),
(13, '2017-01-07 11:59:42', '2017-01-21 14:07:32', 'vasim tital', 'test', '1484987852tip7.jpg', 0),
(21, '2017-01-07 13:11:39', '2017-01-21 14:07:19', 'qqqaa', 'qaqaqa', '1484987839tip5.jpg', 0),
(32, '2017-01-09 16:07:11', '2017-01-31 12:59:32', 'anil', 'demo', '1484987808tip3.jpg', 0),
(35, '2017-01-13 13:09:05', '2017-08-03 15:32:39', 'vdkg blohn   thdkljh ;/nmhgdp pjhd''', 'nbhdpoj djr'' po jk[', '1484987865tip8.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `date_created`, `name`, `email`) VALUES
(1, '2017-07-19 11:51:36', 'a1a', 'aa0aaa0@gmail.com'),
(2, '2017-08-04 12:41:10', 'anil Janawad', 'janawadanil@gmail.com'),
(3, '2017-08-04 12:42:00', 'anil', 'janawadanil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_qulification` varchar(500) NOT NULL,
  `staff_desc` text NOT NULL,
  `staff_image` varchar(250) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `date_created`, `date_updated`, `staff_name`, `staff_qulification`, `staff_desc`, `staff_image`, `deleted`) VALUES
(3, '2017-08-02 17:56:31', '0000-00-00 00:00:00', 's', 's', 's', '15016767919.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `staff_details_title` varchar(255) NOT NULL,
  `staff_details_desc` text NOT NULL,
  `staff_details_desc1` varchar(255) NOT NULL,
  `staff_details_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `date_created`, `date_updated`, `staff_details_title`, `staff_details_desc`, `staff_details_desc1`, `staff_details_image`, `deleted`) VALUES
(3, '2017-08-04 11:24:34', '2017-08-04 12:03:08', 'Anil', 'Working in Macle grafics pvt ltd bangalore', 'BE', '15018283884.jpg', 0),
(5, '2017-08-04 12:59:34', '0000-00-00 00:00:00', 'sadf', 'fg ', 'dg', '15018317742.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `testimonials_name` varchar(255) NOT NULL,
  `position` varchar(250) NOT NULL,
  `testimonials_desc` text NOT NULL,
  `testimonials_image` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 = active , 0 = inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `date_created`, `date_updated`, `testimonials_name`, `position`, `testimonials_desc`, `testimonials_image`, `deleted`) VALUES
(16, '2017-07-18 14:45:24', '0000-00-00 00:00:00', 'Anil', 'Trainer', 'We combine various fields of study and lessons in order to fortify creativity, analytical thinking, expression, and inquisitiveness.', '15003693244.jpg', 1),
(17, '2017-07-18 14:46:21', '0000-00-00 00:00:00', 'Bharat', 'Head Trainer', 'We have created a learning environment that fosters various learning methodologies.', '1500369381couple-2.jpg', 1),
(18, '2017-07-18 14:47:12', '2017-08-04 12:40:48', 'Vinay', 'Trainer', 'We focus on overall student growth, which goes much beyond the textbooks.', '1500369432private-tours.jpg', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
