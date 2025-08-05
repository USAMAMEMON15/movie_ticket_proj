-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2025 at 01:29 AM
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
(6, 26, 5, '2025-07-10 15:00:11', NULL, 'booked'),
(7, 3, 1, '2025-07-10 15:01:06', 0.00, 'booked'),
(8, 26, 6, '2025-07-10 15:03:20', 0.00, 'booked'),
(9, 6, 6, '2025-07-10 15:03:41', 0.00, 'booked'),
(10, 6, 5, '2025-07-10 15:04:07', 789.00, 'booked'),
(11, 3, 1, '2025-07-10 15:07:24', 0.00, 'booked'),
(12, 6, 6, '2025-07-10 15:13:40', 32.00, 'booked'),
(13, 6, 6, '2025-07-12 14:33:13', 2.00, 'booked'),
(14, 6, 5, '2025-07-12 14:34:14', 2.00, 'booked'),
(15, 3, 1, '2025-07-22 14:51:18', 1.00, 'booked'),
(16, 3, 1, '2025-07-22 14:54:51', 1.00, 'booked'),
(17, 3, 1, '2025-07-22 14:57:20', 1.00, 'booked'),
(18, 3, 1, '2025-07-22 14:57:44', 1.00, 'booked'),
(19, 3, 1, '2025-07-22 14:58:06', 1.00, 'booked'),
(20, 3, 1, '2025-07-22 14:58:34', 1.00, 'booked'),
(21, 3, 1, '2025-07-22 14:58:49', 1.00, 'booked'),
(22, 3, 1, '2025-07-22 15:01:07', 1.00, 'booked'),
(23, 3, 1, '2025-07-22 15:01:09', 1.00, 'booked'),
(24, 3, 1, '2025-07-22 15:01:11', 1.00, 'booked'),
(25, 3, 1, '2025-07-22 15:01:12', 1.00, 'booked'),
(26, 3, 1, '2025-07-22 15:01:22', 1.00, 'booked'),
(27, 3, 1, '2025-07-22 15:01:37', 1.00, 'booked'),
(28, 3, 1, '2025-07-26 14:25:32', 1.00, 'booked'),
(29, 3, 1, '2025-07-26 14:26:32', 1.00, 'booked'),
(30, 3, 1, '2025-07-26 15:11:02', 1.00, 'booked');

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
(1, 'shayan', 'shayanroghatia@gmail.com', 2147483647, ' lahore', ' love you'),
(3, 'usama', 'usama@gmail.com', 2147483647, 'karachi', '123'),
(4, 'usama', 'usama15memon@gmail.com', 334307304, 'lonsdon', 'i need a job'),
(5, '', '', 0, '', ''),
(6, 'dadsadasdadas', 'shayan@gmail.com', 334307303, 'ada', 'dasdasdad'),
(7, 'dadsadasdadas', 'shayan@gmail.com', 334307303, 'ada', 'dasdasdad'),
(8, 'riaz', 'usama15memon@gmail.com', 334307304, 'eye', 'asdasd'),
(9, 'riaz', 'usama15memon@gmail.com', 334307304, 'eye', 'asdasd'),
(10, '', '', 0, '', ''),
(11, '', '', 0, '', ''),
(12, '', '', 0, '', ''),
(13, 'dasdas', 'umer@gmail.com', 334307303, 'eye', 'czxczx'),
(14, 'szdsad', 'shayan@gmail.com', 334307303, 'lonsdon', 'czdcszc');

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
(27, 'shayan', 'shayan@gmail.com', '$2y$10$lMtCA3OCSmwNLGKxsc5CUeBp.v.mlyBn.tpYrg0VXPVCw27OKKvUy', '0334307304', '2025-07-12 14:41:17'),
(28, 'uzair', 'uzair@gmail.com', '$2y$10$tZvTuSYaNnCDSekekb6sVu4D.RqNZQmwhutb25CnBPwhNjoVRVv/K', '0334307304', '2025-07-22 15:11:30'),
(29, 'dasdasd', 'dasda@gmail.com', '$2y$10$aAgKFKBHEXF.pABSuT2CdOnwKzWfVviN3S6Ui2OFLazM2VFiXaSUy', '0334307304', '2025-07-22 15:24:53'),
(30, 'dasdas', 'adasdasd@gmail.com', '$2y$10$.cu2/sGScLWaKzsPpj.QaeBQw5iVS0tW0GwO0UoWFR8T7jBohQ6Ey', '0334307304', '2025-07-22 15:27:30'),
(31, 'junaid', 'junaid@gmail.com', '$2y$10$Lors5pGEkyi.D5Hxlu8EOuhjy9MQgk7/rxX9FGcY5K.A39tYwe2vy', '0334307303', '2025-07-26 14:28:52'),
(32, 'usama', 'usama15memon@gmail.com', '$2y$10$ANlMeIDNjrXM6KKcKHwW8uK5ZmN5HKWbXr8GfnFj5bDdbA3kDEUre', '0334307304', '2025-07-26 14:36:51'),
(33, 'chutia', 'chutia@gmail.com', '$2y$10$KTVsZF/s4gKKwQZzASun4eRmDuU9mxCPg3/SNjcDavzeYq.ID.QzW', '0334307304', '2025-07-26 14:43:46'),
(34, 'usama', 'Riaz@gamail.com', '$2y$10$cbe1BWc9YrkYgTUXOxZgWu8xcCBdn3BWA/X1DrcHosphz7g4dfxG.', '0334307303', '2025-07-26 14:44:38'),
(35, 'sarim', 'sarim@gmail.com', '$2y$10$wX5O9VNkJU3/pEJnZyRUquqJKQNLL1EINIOd5cFbkLgXXxQqxdVyG', '0334307304', '2025-07-26 14:58:29');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
