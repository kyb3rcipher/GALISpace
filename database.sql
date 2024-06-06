-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2024 at 06:44 AM
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
-- Database: `galispace`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(15) NOT NULL,
  `model` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `media` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `model`, `type`, `media`) VALUES
(1, 'Omegon N 114/900 EQ-1', '', '1000', 'Telescope', 'Telescopes', '../images/products/telescopes/Omegon-Telescope-N-114-900-EQ-1.jpg'),
(2, 'Omegon AC 70/700 AZ-2', '', '1000', 'Achromat', 'Telescopes', '../images/products/telescopes/Omegon-Telescope-AC-70-700-AZ-2.jpg'),
(3, 'Meade AC 90/900 Polaris', '', '349', 'Apochromatic', 'Telescopes', '../images/products/telescopes/Meade-Telescope-AC-90-900-Polaris-EQ.jpg'),
(4, 'Bresser AC 90/900 EXOS-1', '', '286', 'Achromat', 'Telescopes', '../images/products/telescopes/Bresser-Telescope-AC-90-900-Messier-EXOS-1.jpg'),
(5, 'William Optics refractor 68 AP 68/260', '', '2.199', 'No mount', 'Telescopes', '../images/products/telescopes/William-Optics-Apochromatic-refractor-Pleiades-68-AP-68-260-Astrograph-OTA.jpg'),
(6, 'Celestron NexStar Evolution 6', '', '2.149', 'Catadioptric', 'Telescopes', '../images/products/telescopes/Celestron-Schmidt-Cassegrain-telescope-SC-150-1500-NexStar-Evolution-6.jpg'),
(7, 'Coronado ST 90/800 SolarMax III BF30', '', '9.79', 'Solar telescope', 'Telescopes', '../images/products/telescopes/Coronado-ST-90-800-SolarMax-III-BF30-_0-7A-OTA.jpg'),
(8, 'Omegon Push+ mini N 150/750 Pro', '', '799', 'Telescope', 'Telescopes', '../images/products/telescopes/Omegon-Dobson-telescope-Push-mini-N-150-750-Pro.jpg'),
(9, 'Spacial Era 21340', '', '70', 'LEGO', 'Toys', '../images/products/toys/LEGO-21340.jpg'),
(10, 'Astronaut kid costume', '', '85', 'Costume', 'Toys', '../images/products/toys/Costume.jpg'),
(11, 'Solar System', '', '4', 'Projector', 'Toys', '../images/products/toys/Projector.jpg'),
(12, 'STEM', '', '0', 'Solar System', 'Toys', '../images/products/toys/Solar-system.jpg'),
(13, 'Tent with Tunnel and Playhouse Kids Indoor', '', '39', 'Camp house', 'Toys', '../images/products/toys/Rocket-house.jpg'),
(14, 'Rhode Island Novelty Shuttle', '', '20', 'Space Shuttle', 'Toys', '../images/products/toys/Space-shuttle.jpg'),
(15, 'Astronaut Figure and Spaceship 31134', '', '7', 'LEGO', 'Toys', '../images/products/toys/LEGO-31134.jpg'),
(16, 'Archaeology Geology Science Solar System', '', '24', 'Gemstones', 'Toys', '../images/products/toys/Gemstones.jpg'),
(17, 'Eclipse glasses classic', '', '30', 'Eclipse', 'Glasses', '../images/products/glasses/eclipse-glasses-classic.jpg'),
(18, 'Eclipse glasses VIP', '', '70', 'Eclipse', 'Glasses', '../images/products/glasses/eclipse-glasses-vip.jpg'),
(19, 'Sun glasses', '', '80', 'Sun', 'Glasses', '../images/products/glasses/sun-glasses.jpg'),
(20, 'Planet in Repose', '', '1', 'Planet', 'Pictures', '../images/products/pictures/PIA09784.jpg'),
(21, 'Tabby\'s Star', '', '0', 'Illustration', 'Pictures', '../images/products/pictures/PIA22081.jpg'),
(22, 'Andromeda', '', '10', 'Galaxy', 'Pictures', '../images/products/pictures/PIA04921.jpg'),
(23, 'Armstrong DC-8 Aircraft', '', '5', 'Picture', 'Pictures', '../images/products/pictures/AFRC2024-0067-44.jpg'),
(24, 'Telescopes Turbulent', '', '8', 'Picture', 'Pictures', '../images/products/pictures/GSFC_20171208_Archive_e001872.jpg'),
(25, 'Mapping the Moon', '', '8', 'Map', 'Pictures', '../images/products/pictures/PIA12233.jpg'),
(26, 'Composite Mars', '', '8', 'Planet', 'Pictures', '../images/products/pictures/S91-32389.jpg'),
(27, 'Map Hurricane Maria', '', 'PFKNR', 'PR 🇵🇷', 'Pictures', '../images/products/pictures/PIA21964.jpg'),
(28, 'SpaceX Dragon Endeavour', '', '100', 'Picture', 'Pictures', '../images/products/pictures/iss071e05057.jpg'),
(29, 'Boeing Crew Flight Test Astronaut', '', '65', 'Team picture', 'Pictures', '../images/products/pictures/KSC-20240506-PH-KLS01_0195.jpg'),
(30, 'Black Hole in an unlikely place', '', '9.00', 'Picture', 'Pictures', '../images/products/pictures/behemoth-black-hole-found-in-an-unlikely-place_26209716511.jpg'),
(31, 'Neutron Stars Rip Each Other Apart', '', '8.00', 'Picture', 'Pictures', '../images/products/pictures/GSFC_20171208_Archive_e001101.jpg'),
(32, 'Black Hole', '', '30', 'Audio', 'Audios', '../audios/black-hole.mp3'),
(33, 'The Weeknd', '', '70.00', 'Dolby Atmos Audio', 'Audios', '../audios/the-weeknd-for-dolby-atmos.mp3'),
(34, 'Space Universe', '', '80.00', 'Audio', 'Audios', '../audios/space-universe-by-boody-mary.mp3'),
(35, 'Hubble in deep space', '', '80.00', 'Audio', 'Audios', '../audios/hubble-deep-space.mp3'),
(36, 'Binoculars Prismatics (8x)', '', '23.00', 'Prismatics', 'Miscellaneous', '../images/products/micellaneous/binoculars.jpg'),
(37, 'Night Vision', '', '48', 'Glasses', 'Miscellaneous', '../images/products/micellaneous/night-vision.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('admin', 'admin@galispace.com', '$2y$10$7KRo0y824TQ4QThsrnPnP.jXAvqMoZgVJruT2WTW.wrrQAveYDA6.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
