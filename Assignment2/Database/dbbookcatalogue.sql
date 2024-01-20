-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2023 at 04:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbookcatalogue`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `image_path`) VALUES
(1, 'The Power of Habit', 'Charles Duhigg', 'SelfHelp', '/Assignment 2/BooksPhotos/SelfHelp/powerofhabit.jpg'),
(2, 'The Laws of Human Nature', 'Robert Greene', 'SelfHelp', '/Assignment 2/BooksPhotos/SelfHelp/lawofhumannature.jpg'),
(3, 'Atomic Habits', 'James Clear', 'SelfHelp', '/Assignment 2/BooksPhotos/SelfHelp/AtomicHabit.jpg'),
(4, 'The Power of Now', 'Eckhart Tolle', 'SelfHelp', '/Assignment 2/BooksPhotos/SelfHelp/ThePowerOfNow.jpg'),
(5, 'DeathNote', 'Ohba Tsugumi', 'Mystery', '/Assignment 2/BooksPhotos/Mystery/Death_Note_Vol_1.jpg'),
(6, 'Liar Game', 'Shinobu Kaitani', 'Mystery', '/Assignment 2/BooksPhotos/Mystery/lgcover2.jpg'),
(7, 'Sherlock Holmes', 'Conan Doyle', 'Mystery', '/Assignment 2/BooksPhotos/Mystery/the-rivals-of-sherlock-holmes-9781643130712_hr.jpg'),
(8, 'The Fable', 'Katsuhisa Minami', 'Mystery', '/Assignment 2/BooksPhotos/Mystery/The_Fable_manga_vol._1.png'),
(9, 'The Hobbit', 'J.R.R Tolkien', 'Fantasy', '/Assignment 2/BooksPhotos/Fantasy/71V2v2GtAtL._AC_UF894,1000_QL80_.jpg'),
(10, 'Mistborn', 'Brandon Sanderson', 'Fantasy', '/Assignment 2/BooksPhotos/Fantasy/81dM5-PSE3L._AC_UF1000,1000_QL80_.jpg'),
(11, 'Game of Thrones', 'George R. R. Martin', 'Fantasy', '/Assignment 2/BooksPhotos/Fantasy/91iY86ZIuOL._AC_UF894,1000_QL80_.jpg'),
(12, 'Harry Potter', 'J.K Rowling', 'Fantasy', '/Assignment 2/BooksPhotos/Fantasy/English_Harry_Potter_3_Epub_9781781100233.jpg'),
(13, 'The Nightingale', 'Kristin Hannah', 'Historical', '/Assignment 2/BooksPhotos/Historical/21853621.jpg'),
(14, 'All The Light We Cannot See', 'Anthony Doerr', 'Historical', '/Assignment 2/BooksPhotos/Historical/All_the_Light_We_Cannot_See_(Doerr_novel).jpg'),
(15, 'The Pillars of The Earth', 'Ken Follett', 'Historical', '/Assignment 2/BooksPhotos/Historical/download.jpeg'),
(16, 'The Book Thief', 'Markus Zusak', 'Historical', '/Assignment 2/BooksPhotos/Historical/The_Book_Thief_by_Markus_Zusak_book_cover.jpg'),
(17, 'The Hunger Games', 'Suzanne Collins', 'ScienceFiction', '/Assignment 2/BooksPhotos/ScienceFiction/61+t8dh4BEL._AC_UF894,1000_QL80_.jpg'),
(18, 'Dune', 'Frank Herbert', 'ScienceFiction', '/Assignment 2/BooksPhotos/ScienceFiction/download.jpeg'),
(19, 'Mockingjay', 'Suzanne Collins', 'ScienceFiction', '/Assignment 2/BooksPhotos/ScienceFiction/Mockingjay.jpeg'),
(20, 'Snow Crash', 'Neal Stephenson', 'ScienceFiction', '/Assignment 2/BooksPhotos/ScienceFiction/Snowcrash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_address`, `user_name`, `phone_number`, `password`) VALUES
(4, 'Bob', 'patel', 'bobpatel@hotmail.com', 'Patelbob', '345-656-2321', '659$Patel'),
(6, 'Mike', 'Smith', 'mikesmith@hotmail.com', 'smitmik', '352-231-5345', 'sdk-Pasd'),
(7, 'Peter', 'Brown', 'peterbrown@gmail.com', 'browpet', '565-343-2312', 'browpet$23'),
(8, 'Jessica', 'Lane', 'jesslane@yahoo.com', 'lanejess', '764-343-6562', 'Lane$323'),
(16, 'Tom', 'villa', 'tom@gmail.com', 'tom123', '613-909-8765', 'abcD1234.'),
(17, 'Ramaswami', 'Nambiar', 'ramanam123@algonquinlive.com', 'ramanam', '613-908-8765', 'Abcd1234!'),
(18, 'sdsdfdafdfaadf', 'sdfasdfasdfasdf', 'bobpatel@hotmail.com', 'lanejess', '613-809-6534', 'Adam123@123'),
(19, 'Alex', 'Robinson', 'peterbrown@gmail.com', 'patelbob', '416-786-2345', 'Browpet$23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
