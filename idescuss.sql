-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 04:10 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idescuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(8) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_description` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_description`, `date`) VALUES
(1, 'Python', 'Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, includi', '2022-10-03 08:57:13'),
(2, 'JavaScript', 'JavaScript, often abbreviated to JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for webpage behavior, often incorporating thir', '2022-10-03 08:59:05'),
(3, 'MongoDB', 'MongoDB is a source-available cross-platform document-oriented database program. Classified as a NoSQL database program, MongoDB uses JSON-like documents with optional schemas. MongoDB is developed by MongoDB Inc. and licensed under the Server Side Public', '2022-10-04 19:38:00'),
(4, 'php', 'PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group. ', '2022-10-04 19:39:23'),
(5, 'Java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.', '2022-10-06 09:50:31'),
(6, 'C++', 'C++ is a general-purpose programming language created by Danish computer scientist Bjarne Stroustrup as an extension of the C programming language, or \"C with Classes\". \r\n', '2022-10-06 09:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(5, '6.04 is the best version for windows 11 ', 9, 0, '2022-10-08 22:19:09'),
(6, '4.6 is the best\r\n', 9, 0, '2022-10-08 22:41:32'),
(11, '1.Simple\r\n2.Secure \r\n3.Portable\r\n4.Object-Oriented\r\n5.Robus\r\n6.Multithreaded\r\n7.Interpreted\r\n8.High Performance\r\n9.Dynamic', 13, 0, '2022-12-24 07:48:47'),
(12, 'Distributed', 13, 0, '2022-12-24 07:49:56'),
(13, 'Dynamic', 13, 0, '2022-12-24 07:58:51'),
(15, 'what', 1, 0, '2022-12-24 08:06:32'),
(16, '1. Language Support Package', 16, 0, '2022-12-24 08:12:55'),
(17, '2.Utilities Package', 16, 0, '2022-12-24 08:13:18'),
(18, '3.Input/Output Package', 16, 0, '2022-12-24 08:13:41'),
(19, 'AWT Package', 16, 0, '2022-12-24 08:14:02'),
(20, 'Applet Package', 16, 0, '2022-12-24 08:14:24'),
(21, 'Collection of objects is called class.', 17, 0, '2022-12-24 08:16:02'),
(22, 'A keyword class is used to create a class.', 17, 0, '2022-12-24 08:16:45'),
(23, 'A constructor in Java is a special method that is used to initialize objects. The constructor is called when an object of a class is created.', 18, 0, '2022-12-24 08:19:19'),
(24, 'The this keyword refers to the current object in a method or constructor.', 19, 0, '2022-12-24 08:21:12'),
(25, 'The most common use of the this keyword is to eliminate the confusion between class attributes and parameters with the same name (because a class attribute is shadowed by a method or constructor parameter). If you omit the keyword in the example above, the output would be \"0\" instead of \"5\".', 19, 0, '2022-12-24 08:21:40'),
(26, 'this can also be used to:\r\n\r\nInvoke current class constructor\r\nInvoke current class method\r\nReturn the current class object\r\nPass an argument in the method call\r\nPass an argument in the constructor call\r\n', 19, 0, '2022-12-24 08:22:00'),
(27, 'The public keyword is an access modifier used for classes, attributes, methods and constructors, making them accessible by any other class.', 20, 0, '2022-12-24 08:23:22'),
(28, 'Go to Google ', 15, 0, '2022-12-24 08:27:41'),
(29, 'Event handlers can be used to handle and verify user input, user actions, and browser actions:', 22, 0, '2022-12-24 08:32:30'),
(30, 'Things that should be done every time a page loads,\r\nThings that should be done when the page is closed,\r\nAction that should be performed when a user clicks a button,\r\nContent that should be verified when a user inputs data.', 22, 0, '2022-12-24 08:33:05'),
(31, 'Object Oriented', 13, 0, '2022-12-24 08:36:02'),
(32, 'simple', 13, 0, '2022-12-24 12:19:11'),
(33, 'Portable', 13, 0, '2022-12-24 12:43:18'),
(34, 'Ok', 23, 0, '2022-12-24 12:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(8) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(8) NOT NULL,
  `thread_user_id` int(8) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(13, 'Features of java', '', 5, 0, '2022-12-24 07:46:38'),
(14, 'How to Install Python (Environment Set-Up)', '', 1, 0, '2022-12-24 07:53:18'),
(15, 'How to Install Python', '', 1, 0, '2022-12-24 08:09:52'),
(16, 'Built in Packages', '', 5, 0, '2022-12-24 08:12:23'),
(17, 'What is class?', '', 5, 0, '2022-12-24 08:15:38'),
(18, 'Constructor', '', 5, 0, '2022-12-24 08:18:18'),
(19, 'this keyword', '', 5, 0, '2022-12-24 08:20:03'),
(20, 'public keyword', '', 5, 0, '2022-12-24 08:22:59'),
(21, 'What is JavaScript ', '', 2, 0, '2022-12-24 08:24:37'),
(22, 'JavaScript Event Handlers', '', 2, 0, '2022-12-24 08:32:12'),
(23, 'What is inheritance?', '', 5, 0, '2022-12-24 12:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(8) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `user_email`, `user_pass`, `timestamp`) VALUES
(1, 'yash@gmail.com', '123', '2022-10-07 15:00:44'),
(2, 'chandu@01.com', '$2y$10$HKcp0o7L2cvCLWcmOooRi.KGfFLWDlD/tVOrJHwQbE1VQ8hDt3zD2', '2022-10-07 15:20:16'),
(3, 'yash0298@gmail.com', '$2y$10$WI3dJX0J8jESCCtIgJMDSumL7m200X7hyLxsEa9E2mcBNfLAAe2wa', '2022-10-08 22:04:58'),
(4, 'vishal@gmail.com', '$2y$10$GvXEd3z1kCwb3QSvpIms1OabPAakVWkydgSVoWfBfePwkKhnZaU9S', '2022-10-08 22:42:21'),
(5, 'demo@gmail.com', '$2y$10$z8QohL2EYN1SzCQOdjVu3u2kLBPbtTQNQal6dA.ZcUi.Majly/IMi', '2022-10-09 14:51:24'),
(6, 'aish@gmail.com', '$2y$10$VdSldKatkDwmtnbMcRL11.MUs6ohgj4E55Rj0qYMsAaEkKcycJM.K', '2022-10-14 12:12:29'),
(7, 'sandesh@gamil.com', '$2y$10$hzO6XzcAty56lKqPnWMcku35DErosnERJwmlrt7ZpjPvyp4uDNWuS', '2022-11-21 18:39:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
