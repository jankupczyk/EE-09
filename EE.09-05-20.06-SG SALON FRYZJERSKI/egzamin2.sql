-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Lis 2018, 10:10
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `egzamin`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kadra`
--

CREATE TABLE `kadra` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text,
  `stanowisko` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kadra`
--

INSERT INTO `kadra` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Anna', 'Kowalska', 'dietetyk'),
(2, 'Jolanta', 'Szczesny', 'kosmetolog'),
(3, 'Aleksandra', 'Wilk', 'stylista'),
(4, 'Katarzyna', 'Nowak', 'fryzjer'),
(5, 'Piotr', 'Bartczak', 'fizjoterapeuta');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `matematycy`
--

CREATE TABLE `matematycy` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text,
  `rok_urodzenia` int(10) DEFAULT NULL,
  `liczba_publikacji` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `matematycy`
--

INSERT INTO `matematycy` (`id`, `imie`, `nazwisko`, `rok_urodzenia`, `liczba_publikacji`) VALUES
(1, 'Stefan', 'Banach', 1892, 20),
(2, 'Leonardo', 'Fibonacci', 1175, 15),
(3, 'Augustin', 'Cauchy', 1789, 10),
(4, 'Leonard', 'Euler', 1707, 30),
(5, 'Gotfried', 'Leibniz', 1646, 40);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy`
--

CREATE TABLE `typy` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategoria` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `typy`
--

INSERT INTO `typy` (`id`, `kategoria`) VALUES
(1, 'Procesor'),
(2, 'RAM'),
(5, 'karta graficzna'),
(6, 'HDD');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(10) UNSIGNED NOT NULL,
  `kadra_id` int(10) UNSIGNED NOT NULL,
  `rodzaj` int(10) UNSIGNED DEFAULT NULL,
  `nazwa` text,
  `cena` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id`, `kadra_id`, `rodzaj`, `nazwa`, `cena`) VALUES
(1, 2, 1, 'Piling enzymatyczny', 45),
(2, 5, 3, 'Masaz twarzy', 20),
(3, 2, 1, 'Maska', 30),
(4, 2, 1, 'Regulacja brwi', 5),
(5, 4, 2, 'Farbowanie', 50),
(6, 4, 2, 'Strzyzenie', 40),
(7, 1, 3, 'Ustalenie diety', 70),
(8, 2, 1, 'Henna', 10),
(9, 2, 1, 'Paznokcie', 90),
(10, 4, 2, 'Czesanie', 30);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text,
  `telefon` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES
(1, 'Anna', 'Kowalska', '601601601', 'anna@poczta.pl'),
(2, 'Jan', 'Nowak', '608608608', 'jan@poczta.pl'),
(3, 'Jolanta', 'Jasny', '606606606', 'jolanta@poczta.pl'),
(4, 'qqq', 'www', '345', 'dsfsdklfs@daskl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `id` int(10) UNSIGNED NOT NULL,
  `dyscyplina_id` int(10) UNSIGNED NOT NULL,
  `sportowiec_id` int(10) UNSIGNED NOT NULL,
  `wynik` decimal(5,2) DEFAULT NULL,
  `dataUstanowienia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wyniki`
--

INSERT INTO `wyniki` (`id`, `dyscyplina_id`, `sportowiec_id`, `wynik`, `dataUstanowienia`) VALUES
(1, 1, 1, '12.40', '2015-10-14'),
(2, 1, 1, '12.00', '2015-10-06'),
(3, 1, 2, '11.80', '2015-10-14'),
(4, 1, 2, '11.90', '2015-10-06'),
(5, 1, 3, '11.50', '2015-10-14'),
(6, 1, 3, '11.56', '2015-10-06'),
(7, 1, 4, '11.70', '2015-10-14'),
(8, 1, 4, '11.67', '2015-10-06'),
(9, 1, 5, '11.30', '2015-10-14'),
(10, 1, 5, '11.52', '2015-10-06'),
(11, 1, 6, '12.10', '2015-10-14'),
(12, 1, 6, '12.00', '2015-10-06'),
(13, 3, 1, '63.00', '2015-11-11'),
(14, 3, 1, '63.60', '2015-10-13'),
(15, 3, 2, '64.00', '2015-11-11'),
(16, 3, 2, '63.60', '2015-10-13'),
(17, 3, 3, '60.00', '2015-11-11'),
(18, 3, 3, '61.60', '2015-10-13'),
(19, 3, 4, '63.50', '2015-11-11'),
(20, 3, 4, '63.60', '2015-10-13'),
(21, 3, 5, '70.00', '2015-10-07'),
(22, 3, 6, '68.00', '2015-10-07');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `uslugi_FKIndex1` (`kadra_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kadra`
--
ALTER TABLE `kadra`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
