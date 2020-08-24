-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 12:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharepost`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `create_at`) VALUES
(2, 4, 'Lorem Ipsum – Generator, Origins and Meaning', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', '2020-08-23 20:08:46'),
(4, 2, 'An Example of a Google Bar Chart', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere laborum quasi itaque illo perferendis ducimus alias reprehenderit rerum corporis aperiam dolor voluptate officiis, magni vitae reiciendis! Sed quam beatae quia?', '2020-08-24 07:02:44'),
(5, 2, 'Viva Voce', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi voluptate similique rerum error corporis veritatis nemo quae eius illo. Explicabo laborum voluptatum pariatur. Nihil voluptatibus cupiditate nobis. Quae, placeat sed!', '2020-08-24 07:05:45'),
(6, 4, 'Professional lorem ipsum generator for typographers', 'Lorem Ipsum: usage Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It\'s also called placeholder (or filler) text. It\'s a convenient tool for mock-ups.', '2020-08-24 09:24:38'),
(9, 2, 'Lipsum generator: Lorem Ipsum', 'Search Results\r\nWeb result with site links\r\n\r\nLipsum generator: Lorem Ipsum - All the factswww.lipsum.com\r\nReference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.\r\nYou\'ve visited this page 3 times. Last visit: 8/14/20\r\nLorem ipsum dolor sit amet\r\nReference site about Lorem Ipsum, giving information on its origins ...\r\nLorem Ipsum\r\nReference site about Lorem Ipsum, giving information on its origins ...\r\nMore results from lipsum.com »\r\nWeb results\r\n\r\nLorem Ipsum – Generator, Origins and Meaningloremipsum.io\r\nLorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.', '2020-08-24 10:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `create_at`) VALUES
(2, 'Ashik', 'ashik@gmail.com', '$2y$10$bOXP3oJkQDPDlt1D.8Sq4OQ3hR6ylmBCiaKkl/H9ZaVKGDqEz9Nkq', '2020-08-23 11:00:14'),
(4, 'Saif Sony', 'sony@gmail.com', '$2y$10$wWWqBvrQZVmXZ4Vy1ORiIOgd5MWQTeENlY/eOsODt5k1NxRXNQq8q', '2020-08-23 15:33:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
