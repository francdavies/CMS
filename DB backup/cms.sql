-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2025 at 08:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Home'),
(2, 'Blogs'),
(3, 'Services'),
(4, 'About'),
(5, 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(9, 4, 'Joh Doe', 'johndoe@gmail.com', 'This is a testing comment on the post', 'approved', '2025-10-19'),
(10, 5, 'Joh Doe', 'jd@gmail.com', 'Woow jake man has joined the army', 'unapproved', '2025-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(20) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(4, 1, 'Healthy Living', 'Jake Thompson', '2025-10-19', 'card-top.jpg', 'You have successfully installed XAMPP on this system! Now you can start using Apache, MariaDB, PHP and other components. You can find more info in the FAQs section or check the HOW-TO Guides for getting started with PHP applications. XAMPP is meant only for development purposes. It has certain configuration settings that make it easy to develop locally but that are insecure if you want to have your installation accessible to others. Start the XAMPP Control Panel to check the server status.', 'healthy, living, jake, thompson ', 1, 'published'),
(5, 1, 'Jake In The Army', 'Jake Thompson', '2025-10-19', 'kakao.jpg', 'This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there. This is to tell you all how jake finally joied the army and his job in the army althrough his days there.', 'jake, thompson, test, post, army, in, the', 1, 'published'),
(6, 1, 'Chin Chin Pie', 'Don Kay', '2025-10-25', 'blog-3.jpg', 'Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie Chin Chin Pie ', 'chin, chin, pie, don, kay', 0, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(5, 'tmglobal', '1234', 'TM', 'Global', 'tmglobal@gmail.com', 'blog-3.jpg', 'subscriber', ''),
(6, 'tmglobal', '1234', 'TM', 'Global', 'tmglobal@gmail.com', 'blog-3.jpg', 'subscriber', ''),
(7, 'jennyblake', '$2y$10$sqTPkrpl3rMpARR.ohBtKuFWGBxqY0cH0si26kW3EANvmOt/pxbE2', 'Jenny', 'Blake', 'jennyblake@gmail.com', '003.png', 'admin', ''),
(8, 'danken', '$2y$10$7w50RzByOvL8EoyBDUK/e.I2aaQulUTlftYrmLUgvFXruyBPOOfQO', 'Danny', 'Ken', 'danken@gmail.com', 'card-top.jpg', 'admin', ''),
(9, 'jackmerl', '$2y$10$pUe60cZFDuoMf2NgagJZf./RgXLK1dr27Cv8w7UB9.4Hwxi0FqS8O', 'Jack', 'Merlin', 'jackmerlin@email.com', 'default-avatar.png', 'subscriber', ''),
(10, 'chandler', '$2y$10$ZPOMPIxduo3qTywryx5WzOY/g18El4NE8LlEgWy8Gbf8AH.pGo8Ha', 'Chandler', 'Bing', 'chandlerbing@gmail.com', 'default-avatar.png', 'admin', ''),
(11, 'joeytrib', '$2y$10$H/LQeXc38Hu3aXQTI5osi.6A4B0LaWw8iRfq1dYpQTBtJqoZkklIq', 'Joey', 'Trib', 'joeytrib@gmail.com', 'default-avatar.png', 'admin', ''),
(12, 'rossg', '$2y$10$j8hRqugA4zpaphOaFXQRUOx.UiN3KT00ft1eF8xgywH8qAZwMtTHK', 'Ross', 'Geller', 'rossgeller@gmail.com', 'default-avatar.png', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
