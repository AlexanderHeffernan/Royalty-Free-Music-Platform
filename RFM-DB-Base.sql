-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2021 at 01:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RFM`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `directory` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `artist` varchar(1000) NOT NULL,
  `cover` varchar(1000) NOT NULL,
  `listens` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `likes` int(111) NOT NULL,
  `duration` varchar(11) NOT NULL,
  `genre` varchar(11) NOT NULL,
  `mood` varchar(11) NOT NULL,
  `instrument` varchar(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `directory`, `title`, `artist`, `cover`, `listens`, `downloads`, `likes`, `duration`, `genre`, `mood`, `instrument`, `date`) VALUES
(85, 'resources/songs/audio/Illhearted2.mp3', 'Ill Hearted', 'Upwards', 'resources/songs/covers/AlbumCover6.png', 3, 0, 0, '3:26', 'Pop', 'Sad', 'Synth', '2021-08-26'),
(86, 'resources/songs/audio/so Fly.mp3', 'So Fly', 'Upwards', 'resources/songs/covers/AlbumCover7.png', 1, 0, 0, '3:22', 'Future bass', 'Chill', 'Synth', '2021-08-26'),
(90, 'resources/songs/audio/Flow Beat.mp3', 'Flow', 'Upwards', 'resources/songs/covers/AlbumCover4.png', 1, 0, 0, '2:53', 'Hip hop', 'Chill', 'Drums', '2021-08-26'),
(91, 'resources/songs/audio/Lost you beat.mp3', 'Lost you', 'Upwards', 'resources/songs/covers/AlbumCover5.png', 1, 0, 0, '1:04', 'Hip hop', 'Chill', 'Drums', '2021-08-26'),
(92, 'resources/songs/audio/Flip+-= (Cm 150).mp3', 'Flip', 'Upwards', 'resources/songs/covers/AlbumCover6.png', 1, 0, 0, '3:12', 'Hip hop', 'Intense', 'Drums', '2021-08-26'),
(93, 'resources/songs/audio/Deep and Dark.mp3', 'Deep and Dark', 'Upwards', 'resources/songs/covers/AlbumCover7.png', 2, 0, 0, '2:14', 'Hip hop', 'Intense', 'Drums', '2021-08-26'),
(94, 'resources/songs/audio/Launch beat.mp3', 'Launch', 'Upwards', 'resources/songs/covers/AlbumCover1.png', 1, 0, 0, '3:03', 'Hip hop', 'Chill', 'Drums', '2021-08-26'),
(95, 'resources/songs/audio/Feeling it better.mp3', 'Feeling it', 'Upwards', 'resources/songs/covers/AlbumCover2.png', 2, 0, 0, '2:03', 'Hip hop', 'Chill', 'Drums', '2021-08-26'),
(96, 'resources/songs/audio/Keep it low 4.mp3', 'Keep it low', 'Upwards', 'resources/songs/covers/AlbumCover4.png', 2, 0, 0, '2:34', 'None', 'Happy', 'Drums', '2021-08-26'),
(97, 'resources/songs/audio/Oracless (Quieter snare).mp3', 'Oracles', 'Upwards', 'resources/songs/covers/AlbumCover5.png', 2, 0, 0, '2:36', 'None', 'Happy', 'Synth', '2021-08-26'),
(98, 'resources/songs/audio/Lonely Vibes better.mp3', 'Lonely Vibes', 'Upwards', 'resources/songs/covers/AlbumCover6.png', 3, 0, 0, '2:08', 'None', 'Sad', 'Piano', '2021-08-26'),
(99, 'resources/songs/audio/chance (1).mp3', 'Chance', 'Yung Limp', 'resources/songs/covers/channels4_profile.jpg', 17, 0, 0, '3:53', 'Hip hop', 'Happy', 'Precussion', '2021-08-26'),
(100, 'resources/songs/audio/fiverrTeccaBeat(1).mp3', 'Tecca beat', 'Yung Limp', 'resources/songs/covers/channels4_profile.jpg', 5, 0, 0, '2:11', 'Pop', 'Chill', 'Synth', '2021-08-26'),
(101, 'resources/songs/audio/Strong_Beat.mp3', 'Strong Beat', 'Yung Limp', 'resources/songs/covers/channels4_profile.jpg', 11, 7, 0, '0:41', 'Pop', 'Chill', 'Piano', '2021-08-26'),
(103, 'resources/songs/audio/Benjidea3.mp3', 'Extra Cool Song', 'KiwiCowboy17', 'resources/songs/covers/images.jpeg', 6, 0, 0, '4:00', 'Cinematic', 'Intense', 'Drums', '2021-08-26'),
(104, 'resources/songs/audio/Original Tetris theme (Tetris Soundtrack).mp3', 'Tetris Theme Song', 'KiwiCowboy17', 'resources/songs/covers/tetris.png', 9, 1, 0, '1:23', 'Hip hop', 'Nostalgia', 'Synth', '2021-08-26'),
(106, 'resources/songs/audio/BTS (방탄소년단) - Dynamite (Lyrics).mp3', 'Dynamite', 'KiwiCowboy17', 'resources/songs/covers/dynamite.png', 12, 0, 0, '3:56', 'Pop', 'Joyful', 'Precussion', '2021-08-26'),
(107, 'resources/songs/audio/Boney M. - Rasputin (Sopot Festival 1979) (VOD).mp3', 'Rasputin', 'KiwiCowboy17', 'resources/songs/covers/rasputin.jpg', 16, 0, 0, '4:30', 'Hip hop', 'Joyful', 'Woodwind', '2021-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUsername` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPassword` varchar(128) NOT NULL,
  `usersPictureDirectory` varchar(1000) NOT NULL,
  `Playlists` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersUsername`, `usersEmail`, `usersPassword`, `usersPictureDirectory`, `Playlists`) VALUES
(27, 'Upwards', 'upwards@gmail.com', '$2y$10$Z8DvkXb054DRAgMX8ggt9uCX0DyEOHTo3ikp23lza36nVCKGp7mMO', 'resources/users/profilePicture/Upwards.jpg', 'Liked Songs;79.107;Loved Songs;3.99;Cool Songs;79.99'),
(29, 'Redman Games', 'redmangamesstudio@gmail.com', '$2y$10$Z8DvkXb054DRAgMX8ggt9uCX0DyEOHTo3ikp23lza36nVCKGp7mMO', 'resources/users/profilePicture/Cloud Computing.jpg', ''),
(30, 'Blank_Account', 'blank@gmail.com', '$2y$10$MHWnhgUzcot9PNzoh4ayoO2Aq/iWFvMYAFA6yMyswjkpKwaZ4agim', 'resources/users/profilePicture/Avatar-2.png', ''),
(31, 'Alex_Heffernan', 'heffernan.alexander@icloud.com', '$2y$10$HeZ2paIzzuv8aM8v9kU7AefVzRBudkyzqCpU/Td1v3DOgtu7VoMBi', 'resources/users/profilePicture/Avatar-2.png', 'Liked Songs;99.96;Something;'),
(32, 'LokeshDhade', 'lokesh.dhade@gmail.com', '$2y$10$i31nDMD7emwDvBh6.9CFZuJ07T2gcwM8d9sjbN6BkN1WVOdMc/Csu', 'resources/users/profilePicture/', 'Liked Songs;;Cool songs;'),
(34, 'Yung Limp', 'yunglimp@gmail.com', '$2y$10$uG3P6zRxbbBTS4zk0HHNcOyhxtVGe/c/SYr17VxIXlQKBX0bT1Vti', 'resources/users/profilePicture/channels4_profile.jpg', 'Liked Songs;'),
(35, 'Ollie', 'ollie@ollie.com', '$2y$10$bUrAr4WBY3tZ9OvK0PEofOyS/odEOGhQlxV9VrUOIyc4YiM0CjZsq', 'resources/users/profilePicture/', 'Liked Songs;'),
(36, 'KiwiCowboy17', 'oliverheffernan@icloud.com', '$2y$10$svQfNBUrmJdH3aTSd5cf1.wvduckU7Fh9zqogpu9ENDHFN5ojPYUi', 'resources/users/profilePicture/', 'Liked Songs;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
