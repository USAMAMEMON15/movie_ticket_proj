-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2025 at 02:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_ticket_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `discription`, `image`, `category`, `date`) VALUES
(4, 'James Gunn’s Superman Reboot: An Immigrant’s Journey', 'Super is a 2010 American dark comedy superhero film written and directed by James Gunn. It stars Rainn Wilson, Elliot Page,[a] Liv Tyler, Kevin Bacon, and Nathan Fillion. The film follows an ordinary man who becomes a masked superhero called the Crimson Bolt, uses savage violence to compensate for his lack of superhuman abilities, and sets out to rescue his wife from a drug dealer.', 'supernew.jpg', 'Superhero-Time Travel', '2025-09-25 00:00:00'),
(7, 'Jurassic World Rebirth Review: A Ferocious Revival', 'Jurassic World is a 2015 American science fiction action film directed by Colin Trevorrow, who co-wrote the screenplay with Rick Jaffa, Amanda Silver, and Derek Connolly from a story by Jaffa and Silver.[5] It is the first installment in the Jurassic World series and the fourth installment overall in the Jurassic Park film series, following Jurassic Park III (2001).', 'juranew.avif', 'Action-Adventure', '2025-04-16 00:00:00'),
(8, 'The Old Guard 2 Review: Immortality Fatigue  Walker, based...', 'The Old Guard 2 is a 2025 American superhero film directed by Victoria Mahoney, from a screenplay by Greg Rucka and Sarah L. Walker, based on his comic book The Old Guard. Serving as a sequel to the first film, the film stars Charlize Theron, KiKi Layne, Matthias Schoenaerts, Marwan Kenzari,', 'gard2.jpg', 'Action', '2025-04-20 00:00:00'),
(9, 'Money Laundering Tactics Inspired by Money Heist (La Casa De Papel)', 'Have you ever thought that a simple bank robbery can disturb the whole financial landscape? This is when the plot of the Money Heist takes a dramatic turn, as a carefully planned bank robbery which gives rise to money laundering.\r\n\r\n“Money is not part of the plan. But Money is the plan.”\r\n– The Professor', 'money-heist.jpg', 'Crime-season', '2025-05-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(11) NOT NULL,
  `name` int(11) DEFAULT NULL,
  `title` int(11) DEFAULT NULL,
  `booking_time` datetime DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_id`, `name`, `title`, `booking_time`, `total_amount`, `status`) VALUES
(1, 3, 1, '2025-07-10 14:43:28', 1000.00, 'booked'),
(2, 3, 1, '2025-07-10 14:54:30', 0.00, 'booked'),
(3, 6, 6, '2025-07-10 14:55:40', 0.00, 'booked'),
(4, 26, 6, '2025-07-10 14:56:35', 0.00, 'booked'),
(5, 26, 5, '2025-07-10 14:58:55', NULL, 'booked'),
(26, 3, 1, '2025-07-22 15:01:22', 1.00, 'booked'),
(27, 3, 1, '2025-07-22 15:01:37', 1.00, 'booked'),
(28, 3, 1, '2025-07-26 14:25:32', 1.00, 'booked'),
(29, 3, 1, '2025-07-26 14:26:32', 1.00, 'booked'),
(30, 3, 1, '2025-07-26 15:11:02', 1.00, 'booked'),
(31, 3, 1, '2025-08-05 23:18:30', 1.00, 'booked'),
(32, 3, 1, '2025-08-05 23:18:31', 1.00, 'booked'),
(33, 3, 1, '2025-08-05 23:19:39', 1.00, 'booked'),
(34, 3, 1, '2025-08-05 23:26:26', 1.00, 'booked'),
(35, 3, 1, '2025-08-17 07:16:21', 1.00, 'booked'),
(36, 3, 1, '2025-08-17 07:16:22', 1.00, 'booked'),
(37, 6, 1, '2025-08-17 07:19:38', 1.00, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `city`, `comment`) VALUES
(5, '', '', 0, '', ''),
(6, 'dadsadasdadas', 'shayan@gmail.com', 334307303, 'ada', 'dasdasdad'),
(7, 'dadsadasdadas', 'shayan@gmail.com', 334307303, 'ada', 'dasdasdad'),
(8, 'riaz', 'usama15memon@gmail.com', 334307304, 'eye', 'asdasd'),
(9, 'riaz', 'usama15memon@gmail.com', 334307304, 'eye', 'asdasd'),
(10, '', '', 0, '', ''),
(11, '', '', 0, '', ''),
(12, '', '', 0, '', ''),
(13, 'dasdas', 'umer@gmail.com', 334307303, 'eye', 'czxczx'),
(14, 'szdsad', 'shayan@gmail.com', 334307303, 'lonsdon', 'czdcszc'),
(15, 'usama', 'usama15memon@gmail.com', 334307304, 'lonsdon', 'sxdsadsa'),
(16, 'usama', 'usama15memon@gmail.com', 334307304, 'lonsdon', 'sxdsadsa'),
(17, 'usama', 'uzair@gmail.com', 334307303, 'eye', 'zczc'),
(18, 'fdsf', 'usamaextraacount@gmail.com', 334307303, 'ada', 'xfxdfsdfsd'),
(19, 'sadsada', 'sarim@gmail.com', 334307304, 'ada', 'sdsadsadsa'),
(20, 'riaz', 'usama15memon@gmail.com', 334307304, 'lonsdon', 'sdfasdfasfasf'),
(21, 'riaz', 'usama15memon@gmail.com', 334307304, '', 'sdfasdfasfasf');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `duration_min` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `release_date` date DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `duration_min`, `category`, `language`, `release_date`, `image`, `trailer`) VALUES
(3, 'fast and furious', 'Fast & Furious, also known as The Fast and the Furious, is an American action media franchise centered on a series of films revolving around street racing, heists, and spies. The franchise also includes short films, a television series, toys, video games, live shows, and theme park attractions.', 120, 'Action-Crime', 'english-urdu', '2025-06-20', 'F9_film_poster.jpg', 'Fast___Furious_9_–_Official_Trailer__Universal_Pictures__HD(480p).mp4'),
(15, 'Jurassic World  (2025)', 'Jurassic World is a 2015 American science fiction action film directed by Colin Trevorrow, who co-wrote the screenplay with Rick Jaffa, Amanda Silver, and Derek Connolly from a story by Jaffa and Silver.[5] It is the first installment in the Jurassic World series and the fourth installment overall in the Jurassic Park film series, following Jurassic Park III (2001). ', 120, 'Action', 'English-urdu', '2025-06-05', 'Jurassic_World_Rebirth_poster.jpg', 'Jurassic_World_Rebirth___Official_Trailer(480p).mp4'),
(16, 'Avengers: Endgame', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.', 120, 'Comedy-Romance', 'English-urdu_Dubbed', '2025-12-05', 'Avenn.jpg', 'Marvel_Studios__Avengers__Endgame_-_Official_Trailer(480p).mp4'),
(17, 'Final Destination 5 ', 'Final Destination is an American horror franchise that includes six films, ten novels, and two comic books. It is based on an unused spec script by Jeffrey Reddick, originally written for the television series The X-Files.', 80, 'Horror_Thriller', 'English-urdu', '2025-02-06', 'FD5_poster.jpg', 'Final_Destination_Bloodlines___Official_Teaser_Trailer(480p).mp4'),
(18, 'Deadpool and Wolverine (2024)', 'Deadpool is offered a place in the Marvel Cinematic Universe by the Time Variance Authority, but instead recruits a variant of Wolverine to save his universe from extinction.', 110, 'Comedy-Fighting', 'English-urdu_Dubbed', '2022-12-22', 'Deadpool-and-Wolverine-2024.jpg', 'Deadpool___Wolverine___Official_Trailer___In_Theaters_July_26(480p).mp4'),
(19, 'Kung Fu Panda 4 (2024)', 'After Po is tapped to become the Spiritual Leader of the Valley of Peace, he needs to find and train a new Dragon Warrior, while a wicked sorceress plans to re-summon all the master villains whom Po has vanquished to the spirit realm', 90, 'Animation-Fighting', 'English-urdu_Dubbed', '2024-02-24', 'Kung-Fu-Panda-4-2024.jpg', 'Kung_Fu_Panda___Official_Trailer(480p).mp4'),
(20, 'Superman (2025)', 'Superman must reconcile his alien Kryptonian heritage with his human upbringing as reporter Clark Kent', 100, 'Action , Adventure , Fantasy , Sci-Fi,', 'English', '2025-11-05', 'EJXKZ7HVHFAYDKN55DU5NRSOQY.avif', 'Superman___Official_Teaser_Trailer(480p).mp4'),
(21, ' The Amateur Season 2 (2025)', 'When his supervisors at the CIA refuse to take action after his wife is killed in a London terrorist attack, a decoder takes matters into his own hands.', 120, 'Action-Thriller-crime-Agent', 'English-urdu', '2025-11-05', 'The Amateur.jpg', 'The_Amateur___Official_Trailer(480p).mp4'),
(22, 'Countdown', 'Countdown starts following a suspicious murder in broad daylight, which leads to LAPD officer Mark Meachum being recruited to join a secret task force of undercover agents from all branches of law enforcemen', 150, 'Crime, Drama. Thriller.', ' Hindi ORG. English', '2025-02-05', 'Countdown.jpg', 'Countdown_-_Official_Trailer___Prime_Video(480p).mp4'),
(23, 'Ballard (2025)', 'Ballard is an American police procedural television series created by Michael Alaimo and Kendall Sherwood.[1][2] A spinoff of Bosch (2014–21) and Bosch: Legacy (2022–25), ', 150, 'Crime', ' Hindi ORG. English', '2023-11-07', 'Ballard.jpg', 'Materialists___Official_Trailer_HD___A24(480p).mp4'),
(24, 'Brick', 'A couple whose apartment building is suddenly surrounded by a mysterious brick wall must work with their neighbors to find a way out.', 120, 'Drama, Sci-Fi, Mystery, Thriller', ' Hindi ORG. English', '2025-10-07', 'Brick Mansions.jpg', 'Brick___Official_Trailer___Netflix(480p).mp4'),
(25, 'CHORRI 2', 'When a supernatural cult abducts her seven-year-old daughter, Sakshi must rescue her, while fighting the deep-rooted societal injustices that continue to haunt her and the young woman', 150, 'Horror/Thriller ', 'Hindi', '2025-11-02', 'images.jpeg', 'Chhorii_2_-_Official_Trailer___Prime_Video_India(480p).mp4');

-- --------------------------------------------------------

--
-- Table structure for table `screens`
--

CREATE TABLE `screens` (
  `id` int(11) NOT NULL,
  `theater_id` int(11) DEFAULT NULL,
  `screen_name` varchar(50) DEFAULT NULL,
  `total_seats` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `screens`
--

INSERT INTO `screens` (`id`, `theater_id`, `screen_name`, `total_seats`) VALUES
(1, 3, 'Hall 1', 30),
(4, 3, 'Hall 2', 30),
(5, 4, 'Hall 1', 20),
(6, 4, 'Hall 2', 20),
(7, 5, 'Hall 1', 50),
(8, 5, 'Hall 2', 50);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `screen_id` int(11) DEFAULT NULL,
  `show_time` datetime DEFAULT NULL,
  `ticket_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `movie_id`, `screen_id`, `show_time`, `ticket_price`) VALUES
(1, 3, 1, '2025-10-06 01:30:00', 1000.00),
(5, 16, 5, '2025-07-08 17:57:00', 1000.00),
(6, 15, 4, '2025-07-10 16:30:00', 1000.00);

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `name`, `city`, `address`) VALUES
(3, 'Nuplex', 'karachi', 'The Place, Khayaban-e-Shaheen, DHA Karachi Phase VIII Zone B Zone B Phase 8 Defence Housing Authority, Karachi'),
(4, 'Hiper-Star-Mall', 'karachi', ' Dolmen Mall, Block 4 Clifton, Karachi'),
(5, 'Capri', 'Karachi', 'M.A. Jinnah Road in Saddar, Karachi, Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `phone_number`, `created_at`) VALUES
(3, 'shayan', 'shayanroghatia@gmail.com', ' 123', ' 0335664934', '2025-07-07 00:49:53'),
(6, 'usama', 'usama@gmail.com', ' 789', ' 03343066576', '2025-07-07 00:52:53'),
(26, 'hammad', 'hammad@gmail.com', '123', '03312543112', '2025-07-08 19:29:20'),
(37, 'usama', 'usama15memon@gmail.com', '$2y$10$EdWbeIpZl6JNYL9APaZE.OCupBKNK0.xXwaayd5DLldGjugF8F0P.', '123', '2025-08-15 06:10:22'),
(38, 'shayan', 'shayan@gmail.com', '$2y$10$/LptYhbGQ58EW6JXa5lxMeoyF3ttJPnG.a82XSegO3xNFAaHoZbbS', '123', '2025-08-15 06:12:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `user_id` (`name`),
  ADD KEY `show_id` (`title`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screens`
--
ALTER TABLE `screens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theater_id` (`theater_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `screen_id` (`screen_id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `screens`
--
ALTER TABLE `screens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`name`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`title`) REFERENCES `shows` (`id`);

--
-- Constraints for table `screens`
--
ALTER TABLE `screens`
  ADD CONSTRAINT `screens_ibfk_1` FOREIGN KEY (`theater_id`) REFERENCES `theaters` (`id`);

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`screen_id`) REFERENCES `screens` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
