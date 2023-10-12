-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 09:24 PM
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
-- Database: `tablica`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(15) NOT NULL,
  `e-mail` varchar(40) NOT NULL,
  `k_ime` varchar(15) NOT NULL,
  `lozinka` varchar(15) NOT NULL,
  `uloga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `e-mail`, `k_ime`, `lozinka`, `uloga`) VALUES
(0, 'Marin', 'Šimudvarac', '', 'msima', 'Marin123', 'korisnik'),
(123456, 'marko', 'markic', 'mmarkic@gmail.com', 'mmarkic', 'mmarkic123', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `orolik`
--

CREATE TABLE `orolik` (
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `pozicija` varchar(20) NOT NULL,
  `broj` int(2) NOT NULL,
  `datum dolaska` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `orolik`
--

INSERT INTO `orolik` (`ime`, `prezime`, `pozicija`, `broj`, `datum dolaska`) VALUES
('Edvard', 'Cafuta', 'Vratar', 1, '2022-08-25'),
('Marin', 'Šimudvarac', 'Desni bek/Vratar', 2, '2019-07-10'),
('Mato ', 'Lučić', 'Stoper', 3, '2020-03-19'),
('Dario ', 'Suhić', 'Zadnji vezni', 4, '2022-08-25'),
('Ivan', 'Knežević', 'Lijevi bek', 5, '2022-08-25'),
('Valentin', 'Višnjić', 'Zadnji vezni', 6, '2022-08-25'),
('Josip', 'Blažeković', 'Lijevo krilo', 7, '2022-08-25'),
('Luka ', 'Knežević', 'Ofenzivni vezni', 8, '2022-08-25'),
('Petar', 'Macura', 'Središnji napadač', 9, '2019-07-10'),
('Nemanja ', 'Ignjatović', 'Desno krilo', 10, '2022-02-10'),
('Dorijan ', 'Osmakčić', 'Ofenzivni vezni', 11, '2019-07-10'),
('Matej', 'Sabljić', 'Zadnji vezni', 13, '2022-08-25'),
('Max', 'Slaviček', 'Ofenzivni vezni', 14, '2022-08-25'),
('Lazar', 'Carević', 'Zadnji vezni', 15, '2022-11-24'),
('Nikola', 'Mihelčić', 'Stoper', 16, '2022-11-11'),
('Aleksandro', 'Logov', 'Stoper', 18, '2019-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `poredak`
--

CREATE TABLE `poredak` (
  `ime` varchar(35) NOT NULL,
  `pobjede` int(3) NOT NULL,
  `nerjeseno` int(3) NOT NULL,
  `porazi` int(3) NOT NULL,
  `bodovi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `poredak`
--

INSERT INTO `poredak` (`ime`, `pobjede`, `nerjeseno`, `porazi`, `bodovi`) VALUES
('HNK Vinkovci', 4, 2, 5, 14),
('NK Borac Banovci', 5, 1, 5, 16),
('NK Bosut Apševci', 5, 2, 4, 17),
('NK Čelik Gaboš', 1, 0, 10, 3),
('NK Hrvatski Sokol Mirkovci', 7, 1, 3, 22),
('Nk Meteor Slakovci', 9, 0, 2, 27),
('NK Obilić Ostrovo', 2, 0, 9, 6),
('NK Orolik', 1, 1, 9, 4),
('NK Podgrađe', 3, 1, 7, 10),
('NK Polet DNS', 9, 1, 1, 28),
('NK Sremac Markušica', 6, 2, 3, 20),
('Nk Šokadije Đeletovci', 8, 1, 2, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orolik`
--
ALTER TABLE `orolik`
  ADD PRIMARY KEY (`broj`);

--
-- Indexes for table `poredak`
--
ALTER TABLE `poredak`
  ADD PRIMARY KEY (`ime`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
