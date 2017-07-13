-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 01:42 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u821983111_db`
--
CREATE DATABASE IF NOT EXISTS `u821983111_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `u821983111_db`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_author` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `comment`, `comment_author`, `date`) VALUES
(81, 79, 1, 'HTML stands for Hyper Text Markup Language\r\nA markup language is a set of markup tags\r\nHTML documents are described by HTML tags\r\nEach HTML tag describes different document content', '', '2016-03-26 00:10:40'),
(82, 79, 1, ' for learning HTML we recommend a text editor like Notepad (PC) or TextEdit (Mac).', 'Ravi Raj Kushvaha', '2016-03-26 00:12:05'),
(83, 80, 1, 'CSS is a stylesheet language that describes the presentation of an HTML (or XML) document.\r\n\r\nCSS describes how elements must be rendered on screen, on paper, or in other media.\r\n\r\nThis tutorial will teach you CSS from basic to advanced.', '', '2016-03-26 00:13:01'),
(84, 79, 1, 'CSS is a stylesheet language that describes the presentation of an HTML (or XML) document.\r\n\r\nCSS describes how elements must be rendered on screen, on paper, or in other media.\r\n\r\nThis tutorial will teach you CSS from basic to advanced.', '', '2016-03-26 00:13:01'),
(85, 81, 1, 'JavaScript is the programming language of HTML and the Web.\r\n\r\nProgramming makes computers do what you want them to do.\r\n\r\nJavaScript is easy to learn.', '', '2016-03-26 00:16:07'),
(86, 80, 1, 'JavaScript is the programming language of HTML and the Web.\r\n\r\nProgramming makes computers do what you want them to do.\r\n\r\nJavaScript is easy to learn.', '', '2016-03-26 00:16:07'),
(87, 79, 1, 'JavaScript is the programming language of HTML and the Web.\r\n\r\nProgramming makes computers do what you want them to do.\r\n\r\nJavaScript is easy to learn.', '', '2016-03-26 00:16:07'),
(88, 83, 1, 'SQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', '', '2016-03-26 00:17:14'),
(89, 82, 1, 'SQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', '', '2016-03-26 00:17:14'),
(90, 81, 1, 'SQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', '', '2016-03-26 00:17:14'),
(91, 80, 1, 'SQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', '', '2016-03-26 00:17:14'),
(92, 79, 1, 'SQL is a standard language for accessing databases.\r\n\r\nOur SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.', '', '2016-03-26 00:17:14'),
(93, 84, 1, 'Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first web sites.\r\n\r\nBootstrap is completely free to download and use!', '', '2016-03-26 00:18:06'),
(94, 83, 1, 'Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first web sites.\r\n\r\nBootstrap is completely free to download and use!', '', '2016-03-26 00:18:06'),
(95, 82, 1, 'Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first web sites.\r\n\r\nBootstrap is completely free to download and use!', '', '2016-03-26 00:18:06'),
(96, 81, 1, 'Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first web sites.\r\n\r\nBootstrap is completely free to download and use!', '', '2016-03-26 00:18:06'),
(97, 80, 1, 'Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first web sites.\r\n\r\nBootstrap is completely free to download and use!', '', '2016-03-26 00:18:06'),
(98, 85, 1, 'AngularJS extends HTML with new attributes.\r\n\r\nAngularJS is perfect for Single Page Applications (SPAs).\r\n\r\nAngularJS is easy to learn.', '', '2016-03-26 00:18:57'),
(99, 84, 1, 'AngularJS extends HTML with new attributes.\r\n\r\nAngularJS is perfect for Single Page Applications (SPAs).\r\n\r\nAngularJS is easy to learn.', '', '2016-03-26 00:18:57'),
(100, 83, 1, 'AngularJS extends HTML with new attributes.\r\n\r\nAngularJS is perfect for Single Page Applications (SPAs).\r\n\r\nAngularJS is easy to learn.', '', '2016-03-26 00:18:57'),
(101, 82, 1, 'AngularJS extends HTML with new attributes.\r\n\r\nAngularJS is perfect for Single Page Applications (SPAs).\r\n\r\nAngularJS is easy to learn.', '', '2016-03-26 00:18:57'),
(102, 81, 1, 'AngularJS extends HTML with new attributes.\r\n\r\nAngularJS is perfect for Single Page Applications (SPAs).\r\n\r\nAngularJS is easy to learn.', '', '2016-03-26 00:18:57'),
(103, 86, 1, 'jQuery is a JavaScript Library.\r\n\r\njQuery greatly simplifies JavaScript programming.\r\n\r\njQuery is easy to learn.', '', '2016-03-26 00:20:00'),
(104, 85, 1, 'jQuery is a JavaScript Library.\r\n\r\njQuery greatly simplifies JavaScript programming.\r\n\r\njQuery is easy to learn.', '', '2016-03-26 00:20:00'),
(105, 84, 1, 'jQuery is a JavaScript Library.\r\n\r\njQuery greatly simplifies JavaScript programming.\r\n\r\njQuery is easy to learn.', '', '2016-03-26 00:20:00'),
(106, 83, 1, 'jQuery is a JavaScript Library.\r\n\r\njQuery greatly simplifies JavaScript programming.\r\n\r\njQuery is easy to learn.', '', '2016-03-26 00:20:00'),
(107, 82, 1, 'jQuery is a JavaScript Library.\r\n\r\njQuery greatly simplifies JavaScript programming.\r\n\r\njQuery is easy to learn.', '', '2016-03-26 00:20:00'),
(108, 88, 1, 'AJAX is a developers dream, because you can:\r\n\r\nUpdate a web page without reloading the page\r\nRequest data from a server - after the page has loaded \r\nReceive data from a server - after the page has loaded\r\nSend data to a server - in the background\r\n', '', '2016-03-26 00:20:43'),
(109, 87, 1, 'AJAX is a developers dream, because you can:\r\n\r\nUpdate a web page without reloading the page\r\nRequest data from a server - after the page has loaded \r\nReceive data from a server - after the page has loaded\r\nSend data to a server - in the background\r\n', '', '2016-03-26 00:20:43'),
(110, 86, 1, 'AJAX is a developers dream, because you can:\r\n\r\nUpdate a web page without reloading the page\r\nRequest data from a server - after the page has loaded \r\nReceive data from a server - after the page has loaded\r\nSend data to a server - in the background\r\n', '', '2016-03-26 00:20:44'),
(111, 85, 1, 'AJAX is a developers dream, because you can:\r\n\r\nUpdate a web page without reloading the page\r\nRequest data from a server - after the page has loaded \r\nReceive data from a server - after the page has loaded\r\nSend data to a server - in the background\r\n', '', '2016-03-26 00:20:44'),
(112, 84, 1, 'AJAX is a developers dream, because you can:\r\n\r\nUpdate a web page without reloading the page\r\nRequest data from a server - after the page has loaded \r\nReceive data from a server - after the page has loaded\r\nSend data to a server - in the background\r\n', '', '2016-03-26 00:20:44'),
(113, 89, 1, 'ASP.NET 4 is a development framework for building web pages and web sites with HTML, CSS, JavaScript and server scripting.', '', '2016-03-26 00:21:49'),
(114, 88, 1, 'ASP.NET 4 is a development framework for building web pages and web sites with HTML, CSS, JavaScript and server scripting.', '', '2016-03-26 00:21:49'),
(115, 86, 1, 'ASP.NET 4 is a development framework for building web pages and web sites with HTML, CSS, JavaScript and server scripting.', '', '2016-03-26 00:21:49'),
(116, 85, 1, 'ASP.NET 4 is a development framework for building web pages and web sites with HTML, CSS, JavaScript and server scripting.', '', '2016-03-26 00:21:49'),
(117, 84, 1, 'ASP.NET 4 is a development framework for building web pages and web sites with HTML, CSS, JavaScript and server scripting.', '', '2016-03-26 00:21:49'),
(118, 89, 1, 'ASP .NET is a framework.', 'Ravi Raj Kushvaha', '2016-03-26 00:24:47'),
(119, 89, 1, 'It is very popular language..', 'Ravi Raj Kushvaha', '2016-03-26 00:29:59'),
(120, 88, 1, 'It is very popular language..', 'Ravi Raj Kushvaha', '2016-03-26 00:29:59'),
(121, 86, 1, 'It is very popular language..', 'Ravi Raj Kushvaha', '2016-03-26 00:29:59'),
(122, 85, 1, 'It is very popular language..', 'Ravi Raj Kushvaha', '2016-03-26 00:29:59'),
(123, 84, 1, 'It is very popular language..', 'Ravi Raj Kushvaha', '2016-03-26 00:29:59'),
(124, 90, 1, 'Hello', 'Ravi Raj Kushvaha', '2016-04-08 08:59:05'),
(125, 91, 1, 'Nobody is there?', 'Ravi Raj Kushvaha', '2016-05-03 05:52:28'),
(126, 90, 1, 'Nobody is there?', 'Ravi Raj Kushvaha', '2016-05-03 05:52:28'),
(127, 89, 1, 'Nobody is there?', 'Ravi Raj Kushvaha', '2016-05-03 05:52:28'),
(128, 88, 1, 'Nobody is there?', 'Ravi Raj Kushvaha', '2016-05-03 05:52:28'),
(129, 86, 1, 'Nobody is there?', 'Ravi Raj Kushvaha', '2016-05-03 05:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`) VALUES
(1, 0),
(2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_content` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `topic_id`, `post_title`, `post_content`, `post_date`) VALUES
(79, 1, 1, '', 'What is HTML?', '2016-03-26 00:10:24'),
(80, 1, 1, '', 'What is CSS?', '2016-03-26 00:12:47'),
(81, 1, 6, '', 'What is JavaScript?', '2016-03-26 00:15:50'),
(82, 1, 2, '', 'What is PHP?', '2016-03-26 00:16:35'),
(83, 1, 2, '', 'What is SQL?', '2016-03-26 00:17:05'),
(84, 1, 1, '', 'What is Bootsrap?', '2016-03-26 00:17:57'),
(85, 1, 6, '', 'What is Anguar JS?', '2016-03-26 00:18:46'),
(86, 1, 3, '', 'What is JQuery?', '2016-03-26 00:19:46'),
(88, 1, 3, '', 'What is AJAX?', '2016-03-26 00:20:35'),
(89, 1, 8, '', 'What is ASP .NET?', '2016-03-26 00:21:40'),
(90, 1, 0, '', 'Hello EveryOne', '2016-04-08 08:58:43'),
(91, 1, 1, '', 'Hey,Anybody is there?', '2016-05-03 05:52:01'),
(92, 12, 0, '', 'chitrket ', '2016-05-13 09:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_title` text NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_title`) VALUES
(1, 'HTML & CSS'),
(2, 'PHP & MYSQL'),
(3, 'AJAX'),
(4, 'RUBY'),
(5, 'PYTHON'),
(6, 'ANGULAR JS'),
(7, 'NODE JS'),
(8, '.Net');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_image` text NOT NULL,
  `register_date` date NOT NULL,
  `last_login` date NOT NULL,
  `status` text NOT NULL,
  `posts` text NOT NULL,
  `user_job` text NOT NULL,
  `user_followers` mediumtext NOT NULL,
  `user_followings` mediumtext NOT NULL,
  `user_friends` varchar(10000) NOT NULL,
  `user_education` varchar(200) NOT NULL,
  `user_location` varchar(200) NOT NULL,
  `user_notes` varchar(500) NOT NULL,
  `user_skill` multilinestring NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_image`, `register_date`, `last_login`, `status`, `posts`, `user_job`, `user_followers`, `user_followings`, `user_friends`, `user_education`, `user_location`, `user_notes`, `user_skill`) VALUES
(1, 'Ravi Raj Kushvaha', 'ravirajkushvaha@ymail.com', 'helloagain', 'default.jpg', '2016-03-04', '2016-03-07', 'unverified', 'yes', 'Web Developer / Graphics Designer', '987654', '17654', '1239', 'B.E Computer Science', 'Bhopal,India', 'Hello.I am Ravi Raj Kushvaha . I am web designer. :)', ''),
(10, 'Tinku kumar', 'tinkukumar@gmail.com', 'tinkukumar', 'default.jpg', '2016-03-07', '2016-03-07', 'unverified', 'yes', 'Software Engineer', '83783', '73736', '3673', 'BE', 'Bihar', 'Hello world', ''),
(12, 'Anshuman sinha', 'anshumansinha78@gmail.com', 'AnshumanAnshuman', 'default.jpg', '2016-03-07', '2016-03-07', 'unverified', 'yes', '', '', '', '', '', '', '', ''),
(13, 'pass', 'pass@gmail.com', '1234567', 'default.jpg', '2016-03-07', '2016-03-07', 'unverified', 'No', '', '', '', '', '', '', '', ''),
(14, 'Krishna Murari Pal', 'palkrishna0188@gmail.com', 'krishna', 'default.jpg', '2016-03-09', '2016-03-09', 'unverified', 'yes', 'JAVA DEVELOPER', '3332', '22222', '2222', 'BE', 'Bhopal', 'HElLO NOtes', ''),
(21, 'Udesh Yadav', 'udeshyadav@gmail.com', 'udeshyadav', 'default.jpg', '2016-03-11', '2016-03-11', 'unverified', 'No', '', '', '', '', '', '', '', ''),
(22, 'Chitraket Singh', 'chitraket@gnail.com', 'chitraket', 'default.jpg', '2016-03-13', '2016-03-13', 'unverified', 'yes', '', '', '', '', '', '', '', ''),
(23, 'arjun kumar', 'karjun500@gmail.com', '1234567', 'default.jpg', '2016-03-17', '2016-03-17', 'unverified', 'yes', '', '', '', '', '', '', '', ''),
(24, 'Nayan  Manjhi', 'nayanmanjhi@gmail.com', '1234567', 'default.jpg', '2016-03-21', '2016-03-21', 'unverified', 'yes', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
