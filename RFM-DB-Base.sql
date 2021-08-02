-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2021 at 03:13 AM
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
  `duration` varchar(11) NOT NULL,
  `genre` varchar(11) NOT NULL,
  `mood` varchar(11) NOT NULL,
  `instrument` varchar(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `directory`, `title`, `artist`, `cover`, `listens`, `downloads`, `duration`, `genre`, `mood`, `instrument`, `date`) VALUES
(1, 'resources/songs/audio/tobe.mp3', 'Comptine d\'un autre été', 'Upwards', 'resources/songs/covers/Album Cover 1.png', 166, 1, '', 'EDM', '', '', '2021-06-16'),
(2, 'resources/songs/audio/so_Fly.mp3', 'So Fly', 'Upwards', 'resources/songs/covers/Album Cover 2.png', 19, 0, '', '', '', '', '2021-06-16'),
(3, 'resources/songs/audio/Insomnia_2.0.mp3', 'Insomnia', 'Upwards', 'resources/songs/covers/Album Cover 3.png', 6, 0, '', '', '', '', '2021-06-16'),
(54, 'resources/songs/audio/PstMlonebeat1.mp3', 'PstMlonebeat1', 'Upwards', 'resources/songs/covers/AlbumCover4.png', 1, 0, '2:31', 'None', 'None', 'None', '2021-06-16'),
(55, 'resources/songs/audio/The New Unkown (Chill Future Bass).mp3', 'The New Unknown (Chill Future Bass)', 'Upwards', 'resources/songs/covers/AlbumCover5.png', 4, 0, '3:39', 'None', 'None', 'None', '2021-06-16'),
(56, 'resources/songs/audio/Shadow of the war v4.mp3', 'Shadow of the war', 'Redman Games', 'resources/songs/covers/AlbumCover6.png', 6, 0, '3:36', 'None', 'None', 'None', '2021-06-16'),
(57, 'resources/songs/audio/WW2 Airplane Game Theme Song.mp3', 'Lone Wolf: World War 2 – Theme Song', 'Redman Games', 'resources/songs/covers/AlbumCover7.png', 23, 0, '1:58', 'None', 'None', 'None', '2021-06-16'),
(58, 'resources/songs/audio/In the Air (Cinematic).mp3', 'In The Air (Cinematic)', 'Redman Games', 'resources/songs/covers/AlbumCover1.png', 1, 0, '3:31', 'None', 'None', 'None', '2021-06-16'),
(59, 'resources/songs/audio/Time (Cinematic track).mp3', 'Time (Cinematic track)', 'Redman Games', 'resources/songs/covers/AlbumCover2.png', 3, 0, '3:22', 'None', 'None', 'None', '2021-06-16'),
(60, 'resources/songs/audio/waiting2.mp3', 'Waiting', 'Redman Games', 'resources/songs/covers/AlbumCover3.png', 2, 0, '3:22', 'None', 'None', 'None', '2021-06-16'),
(61, 'resources/songs/audio/Out Of Time (Melodic_Chill Bass).mp3', 'Out of Time (Melodic/Chill Base)', 'Upwards', 'resources/songs/covers/AlbumCover4.png', 1, 0, '3:51', 'None', 'None', 'None', '2021-06-16'),
(62, 'resources/songs/audio/TSBeat1B.mp3', 'TSBeat1B', 'Upwards', 'resources/songs/covers/AlbumCover5.png', 6, 0, '2:21', 'None', 'None', 'None', '2021-06-16');

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
  `Playlists` varchar(111) NOT NULL,
  `artist` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersUsername`, `usersEmail`, `usersPassword`, `usersPictureDirectory`, `Playlists`, `artist`) VALUES
(27, 'Upwards', 'upwards@gmail.com', '$2y$10$Z8DvkXb054DRAgMX8ggt9uCX0DyEOHTo3ikp23lza36nVCKGp7mMO', 'resources/users/profilePicture/Upwards.jpg', 'Liked Songs;60;Loved Songs;;New Playlist;', 1),
(29, 'Redman Games', 'redmangamesstudio@gmail.com', '$2y$10$Z8DvkXb054DRAgMX8ggt9uCX0DyEOHTo3ikp23lza36nVCKGp7mMO', 'resources/users/profilePicture/Cloud Computing.jpg', '', 1),
(30, 'Blank_Account', 'blank@gmail.com', '$2y$10$MHWnhgUzcot9PNzoh4ayoO2Aq/iWFvMYAFA6yMyswjkpKwaZ4agim', 'resources/users/profilePicture/Avatar-2.png', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
