-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Gru 2020, 09:43
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin6`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadra`
--

CREATE TABLE `kadra` (
  `id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `stanowisko` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kadra`
--

INSERT INTO `kadra` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Anna', 'Karenina', 'fryzjerka'),
(2, 'Kasia', 'Figura', 'kosmetyczka'),
(3, 'Zosia', 'Kowalska', 'kosmetyczka'),
(4, 'Misia', 'Kosińska', 'fryzjerka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(11) NOT NULL,
  `kadra_id` int(11) NOT NULL,
  `rodzaj` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `cena` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id`, `kadra_id`, `rodzaj`, `nazwa`, `cena`) VALUES
(1, 1, 1, 'Usluga kosmetyczna za 20zl', 20),
(2, 1, 2, 'Usluga fryzjerska za 30zl', 30),
(3, 1, 3, 'Usluga inna za 15 zl', 15),
(4, 1, 1, 'Usluga kosmetyczna za 60 zl', 60);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczki`
--

CREATE TABLE `wycieczki` (
  `id` int(11) NOT NULL,
  `zdjecia_id` int(11) NOT NULL,
  `dataWyjazdu` date NOT NULL,
  `cel` text COLLATE utf8_polish_ci NOT NULL,
  `cena` double NOT NULL,
  `dostepna` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wycieczki`
--

INSERT INTO `wycieczki` (`id`, `zdjecia_id`, `dataWyjazdu`, `cel`, `cena`, `dostepna`) VALUES
(1, 1, '2019-09-08', 'Włochy, Wenecja', 1200, 1),
(2, 2, '2019-09-14', 'Włochy, Wenecja', 1200, 1),
(3, 3, '2019-08-14', 'Polska, Warszawa', 640, 1),
(4, 4, '2019-08-14', 'Francja, Paryż', 1200, 1),
(5, 5, '2019-08-14', 'Niedostępna', 2000, 0),
(6, 6, '2019-09-14', 'Francja, Paryż', 1200, 1),
(7, 7, '2019-08-14', 'Niedostępna', 2000, 0),
(8, 8, '2019-08-14', 'Niedostępna', 2000, 0),
(9, 9, '2019-09-14', 'Hiszpania, Barcelona', 1200, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `id` int(11) NOT NULL,
  `dataZadania` date NOT NULL,
  `wpis` text COLLATE utf8_polish_ci NOT NULL,
  `miesiac` text COLLATE utf8_polish_ci NOT NULL,
  `rok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zadania`
--

INSERT INTO `zadania` (`id`, `dataZadania`, `wpis`, `miesiac`, `rok`) VALUES
(1, '2020-08-01', 'Remont', 'sierpien', 2020),
(2, '2020-08-02', 'Remont', 'sierpien', 2020),
(3, '2020-08-03', 'Remont', 'sierpien', 2020),
(4, '2020-08-04', 'Remont', 'sierpien', 2020),
(5, '2020-08-05', '', 'sierpien', 2020),
(6, '2020-08-06', '', 'sierpien', 2020),
(7, '2020-08-07', 'Rower', 'sierpien', 2020),
(8, '2020-08-08', 'Rower', 'sierpien', 2020),
(9, '2020-08-09', '', 'sierpien', 2020),
(10, '2020-08-10', '', 'sierpien', 2020),
(11, '2020-08-11', 'Weterynarz - Dika', 'sierpien', 2020),
(12, '2020-08-12', '', 'sierpien', 2020),
(13, '2020-08-13', 'Sopot', 'sierpien', 2020),
(14, '2020-08-14', 'Sopot', 'sierpien', 2020),
(15, '2020-08-15', '', 'sierpien', 2020),
(16, '2020-08-16', '', 'sierpien', 2020),
(17, '2020-08-17', 'Wyjazd na wakacje', 'sierpien', 2020),
(18, '2020-08-18', 'Tatry', 'sierpien', 2020),
(19, '2020-08-19', 'Tatry', 'sierpien', 2020),
(20, '2020-08-20', 'Tatry', 'sierpien', 2020),
(21, '2020-08-21', 'Tatry', 'sierpien', 2020),
(22, '2020-08-22', 'Tatry', 'sierpien', 2020),
(23, '2020-08-23', 'Tatry', 'sierpien', 2020),
(24, '2020-08-24', 'Tatry', 'sierpien', 2020),
(25, '2020-08-25', '', 'sierpien', 2020),
(26, '2020-08-26', '', 'sierpien', 2020),
(27, '2020-08-27', '', 'sierpien', 2020),
(28, '2020-08-28', '', 'sierpien', 2020),
(29, '2020-08-29', 'Weterynarz - Dika', 'sierpien', 2020),
(30, '2020-08-30', '', 'sierpien', 2020),
(31, '2020-08-31', '', 'sierpien', 2020),
(32, '2020-07-01', 'Zadanie z dnia 2020-07-01', 'lipiec', 2020),
(33, '2020-07-13', 'Wycieczka: Karkonosze', 'lipiec', 2020),
(34, '2020-07-14', 'Wycieczka: Bałtyk', 'lipiec', 2020);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id` int(11) NOT NULL,
  `nazwaPliku` text COLLATE utf8_polish_ci NOT NULL,
  `podpis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zdjecia`
--

INSERT INTO `zdjecia` (`id`, `nazwaPliku`, `podpis`) VALUES
(1, 'zdjecie1.jpg', 'Opis zdjecia 1'),
(2, 'zdjecie2.jpg', 'Opis zdjecia 2'),
(3, 'zdjecie3.jpg', 'Opis zdjecia 3'),
(4, 'zdjecie4.jpg', 'Opis zdjecia 4'),
(5, 'zdjecie5.jpg', 'Opis zdjecia 5'),
(6, 'zdjecie6.jpg', 'Opis zdjecia 6'),
(7, 'zdjecie7.jpg', 'Opis zdjecia 7'),
(8, 'zdjecie8.jpg', 'Opis zdjecia 8'),
(9, 'zdjecie9.jpg', 'Opis zdjecia 9');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kadra`
--
ALTER TABLE `kadra`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zadania`
--
ALTER TABLE `zadania`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kadra`
--
ALTER TABLE `kadra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `zadania`
--
ALTER TABLE `zadania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
