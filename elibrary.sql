-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 08:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_record`
--

DROP TABLE IF EXISTS `admin_record`;
CREATE TABLE `admin_record` (
  `Admin_id` varchar(15) NOT NULL,
  `Admin_Name` text NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Mail_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_record`
--

INSERT INTO `admin_record` (`Admin_id`, `Admin_Name`, `Password`, `Mail_id`) VALUES
('BCCSB1180167', 'KUSUM PAREEK', 'KUSUM@123', 'kp123@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `books_record`
--

DROP TABLE IF EXISTS `books_record`;
CREATE TABLE `books_record` (
  `Book_id` varchar(8) NOT NULL,
  `Book_name` varchar(100) NOT NULL,
  `Cover` varchar(50) NOT NULL,
  `Author` text NOT NULL,
  `Publication` text NOT NULL,
  `Category` text NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Sem` int(2) NOT NULL,
  `File_link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_record`
--

INSERT INTO `books_record` (`Book_id`, `Book_name`, `Cover`, `Author`, `Publication`, `Category`, `Course`, `Sem`, `File_link`) VALUES
('BCA2021', 'Let Us C', 'book.jpeg', 'Yashwant Kanetkar', 'BPB', 'Computer Science', 'BCA', 1, 'Yashavant Kanetkar - Let Us C-BPB Publications (2016).pdf'),
('BCA2022', 'Operating System', 'book.jpeg', 'Abraham ', 'DSA', 'Electrical', 'BTech', 1, 'OS_MainMemory.pdf'),
('BCA2023', 'Fundamentals Of Computer', 'lg3.jpeg', 'PK SINHA', 'VSDJ', 'Computer Science', 'BCA', 3, 'computer_fundamentals by sinha & sinha.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

DROP TABLE IF EXISTS `chatbot`;
CREATE TABLE `chatbot` (
  `id` int(5) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `reply` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `reply`) VALUES
(1, 'Hello', 'Hi There!'),
(2, 'Who are you?', 'I\'m E-LIBBOOKS Chatbot.'),
(3, 'What can you do for me?', 'You can ask me how to use this website,etc.'),
(4, 'How do I go back to my page?', 'Click the line below mychatbot and you\'ll be redirected back.'),
(5, 'Why you are here?', 'I\'m here to reply to your queries instantly.'),
(6, 'Hi', 'Hello there!');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
CREATE TABLE `queries` (
  `id` int(5) NOT NULL,
  `query` varchar(300) NOT NULL,
  `from_type` text NOT NULL,
  `reply` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `query`, `from_type`, `reply`) VALUES
(1, 'BCA VI SEM MIS BOOKS ARE NOT AVAILABLE YET.', 'STUDENT', ''),
(2, 'jjhhjh', 'STUDENT', ''),
(3, 'jjhhjh', 'STUDENT', ''),
(4, 'dbsdjvbdsvgs', 'STUDENT', ''),
(5, 'vhhfvgfdjgvd', 'TEACHER', ''),
(6, 'HELLO THIS IS STUDENT QUERY', 'STUDENT', ''),
(7, 'HELLO .I AM A STUDENT.UNABLE TO ACCESS BOOKS.', 'STUDENT', ''),
(8, 'Hello.I am a teacher.', 'TEACHER', ''),
(9, 'edition 5 of Software Engg is not available', 'TEACHER', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_record`
--

DROP TABLE IF EXISTS `user_record`;
CREATE TABLE `user_record` (
  `User_id` varchar(15) NOT NULL,
  `User_Name` text NOT NULL,
  `Type` text NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Department` text NOT NULL,
  `Semester` int(2) NOT NULL,
  `E-mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_record`
--

INSERT INTO `user_record` (`User_id`, `User_Name`, `Type`, `Password`, `Department`, `Semester`, `E-mail`) VALUES
('BCCSB1180168', 'KRITIKA GAJJA', 'TEACHER', 'KRITIKA@123', 'BCA', 5, 'kg123@email.com'),
('BCCSB1180169', 'KULDEEP VYAS', 'STUDENT', 'KULDEEP@123', 'BCA', 3, 'kv123@email.com'),
('BCCSB1180170', 'HIMANSHI BHATI', 'STUDENT', 'HIMANSHI@123', 'BCA', 1, 'hb123@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_record`
--
ALTER TABLE `admin_record`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `books_record`
--
ALTER TABLE `books_record`
  ADD PRIMARY KEY (`Book_id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_record`
--
ALTER TABLE `user_record`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
