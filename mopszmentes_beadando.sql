-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 29. 22:40
-- Kiszolgáló verziója: 10.1.38-MariaDB
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `mopszmentes_beadando`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `contacts_list`
--

CREATE TABLE `contacts_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `sent_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `contacts_list`
--

INSERT INTO `contacts_list` (`id`, `name`, `email`, `phone`, `subject`, `Message`, `sent_date`) VALUES
(6, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'fhjdksfnw', '2022-04-29 18:19:52'),
(7, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'fhdiwejgket', '2022-04-29 18:21:44'),
(8, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'fhdjnskrt', '2022-04-29 18:27:32'),
(9, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'sdfserzsdsz', '2022-04-29 18:30:47'),
(10, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'hnjbnm', '2022-04-29 18:33:41'),
(11, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'dzfuweitj', '2022-04-29 18:35:32'),
(12, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'dzfuweitj', '2022-04-29 18:47:25'),
(13, 'detti', 'detti.ignacz@outlook.hu', '2425463654', 'fefherjg', 'hello', '2022-04-29 19:30:18'),
(14, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'fhejekrg', '2022-04-29 19:31:04'),
(15, 'detti', 'detti.ignacz@outlook.hu', '3765812345', 'vefdhj', 'DUWEJFIWRETJ', '2022-04-29 19:38:22'),
(16, 'detti', 'detti.ignacz@outlook.hu', '2425463654', 'fefherjg', 'FVHCUFG', '2022-04-29 19:40:07'),
(17, 'Lajhika', 'lumilla92@gmail.com', '06387535894', 'izÃ©', 'hello', '2022-04-29 21:32:15');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `image`
--

INSERT INTO `image` (`image_id`, `image`, `location`) VALUES
(1, '1651233543.webp', 'upload/1651233543.webp'),
(2, '1651234145.jpg', 'upload/1651234145.jpg'),
(3, '1651236987.jpg', 'upload/1651236987.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `lastname`, `firstname`, `email`, `password`) VALUES
(1, 'lumilla92', 'IgnÃ¡cz', 'Bernadett', 'lumilla92@gmail.com', '4bd582bf6974f659badf910016a181e4');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `contacts_list`
--
ALTER TABLE `contacts_list`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `contacts_list`
--
ALTER TABLE `contacts_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT a táblához `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
