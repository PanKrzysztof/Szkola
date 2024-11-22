-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Wrz 03, 2023 at 06:21 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(11) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `PESEL` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `nazwisko`, `imie`, `PESEL`) VALUES
(1, 'Nowakowski', 'Jan', '01212237453'),
(2, 'Olekszyk', 'Franciszek', '98063035738'),
(3, 'Wilk', 'Adam', '98020754113'),
(4, 'Mateja', 'Maria', '02292036767'),
(5, 'Król', 'Karolina', '90071314562'),
(6, 'Poręba', 'Krzysztof', '94110954975'),
(7, 'Sobuś', 'Michał', '95032551596'),
(8, 'Bednarczyk', 'Wojciech', '00282275415'),
(9, 'Kazimierczak', 'Mateusz', '93100931992'),
(10, 'Maj', 'Kinga', '01281166629'),
(11, 'Frankowski', 'Maksymilian', '95051969376'),
(12, 'Krówka', 'Dawid', '02252824191'),
(13, 'Mak', 'Tomasz', '92112737453'),
(14, 'Arłamowska', 'Ewa', '00212775345'),
(15, 'Bąk', 'Antoni', '01060658954'),
(16, 'Mikołajczyk', 'Tymoteusz', '01040331996');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
