-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2020. Nov 28. 23:28
-- Kiszolgáló verziója: 5.7.32-log
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
-- Adatbázis: `fwnqgy`
--
DROP DATABASE IF EXISTS `fwnqgy`;
CREATE DATABASE IF NOT EXISTS `fwnqgy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fwnqgy`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menhely_kapcsolat_table`
--

CREATE TABLE `menhely_kapcsolat_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `text` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `menhely_kapcsolat_table`
--

INSERT INTO `menhely_kapcsolat_table` (`id`, `name`, `phone`, `email`, `text`) VALUES
(1, 'Böröczki Gábor', '06303242115', 'gabor.css@gmail.com', 'Próba!'),
(2, 'Böröczki Gábor', '06303242115', 'gabor.css@gmail.com', 'Ez most tuti, hogy ez a weboldal kérem uram?'),
(3, 'Böröczki Gábor', '06303242115', 'gabor.css@gmail.com', 'Egyszerűen felfoghatatlan!'),
(4, 'Böröczki Gábor', '06303242115', 'gabor.css@gmail.com', 'Ezt én így most hírtelen nem értem.'),
(5, 'Böröczki Gábor', '06303242115', 'gabor.css@gmail.com', 'Egy illetékessel beszélhetnék?\r\n'),
(6, 'Böröczki Gábor', '06303242115', 'gabor.css@gmail.com', 'Jónapot! Van itt valaki?');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menhely_kutya_table`
--

CREATE TABLE `menhely_kutya_table` (
  `id` int(11) NOT NULL,
  `azonosito` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `date_in` date NOT NULL,
  `neve` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `ivara` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `szine` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `szore_hossza` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `magassaga` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `kora` date NOT NULL,
  `bekerules_helye_korulmenye` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `tulajdonsagai` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `ismerteto_jegyei` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `chip` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `tetovalas` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `date_out` date NOT NULL,
  `orokbefogadva` int(2) NOT NULL DEFAULT '0',
  `allat` int(10) NOT NULL,
  `kep` varchar(255) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'nopic.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `menhely_kutya_table`
--

INSERT INTO `menhely_kutya_table` (`id`, `azonosito`, `date_in`, `neve`, `ivara`, `szine`, `szore_hossza`, `magassaga`, `kora`, `bekerules_helye_korulmenye`, `tulajdonsagai`, `ismerteto_jegyei`, `chip`, `tetovalas`, `date_out`, `orokbefogadva`, `allat`, `kep`) VALUES
(32, 'Ayax-7790', '2020-11-27', 'Ayax', 'Ivartalaní', 'Világos ba', 'Rövid', 'Nagy', '2020-11-08', 'Kadafalva, Boróka utca', '', '', '1', 'Nincs', '0000-00-00', 0, 0, 'nopic.jpg'),
(33, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(34, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(35, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(36, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(37, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(38, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(39, 'Ayax-7790', '2020-11-27', 'Ayax', 'Ivartalaní', 'Világos ba', 'Rövid', 'Nagy', '2020-11-08', 'Kadafalva, Boróka utca', '', '', '1', 'Nincs', '0000-00-00', 0, 0, 'nopic.jpg'),
(40, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(41, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(42, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(43, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(44, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg'),
(45, 'Bella-1809', '2020-11-27', 'Bella', 'Ivartalaní', 'Szürkés', 'Rövid', 'Nagy', '2020-11-27', 'Itthon van', 'Szeret enni', 'Duci', '1', 'Nincs', '0000-00-00', 0, 0, 'Bella-1809.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menhely_segitettunk_table`
--

CREATE TABLE `menhely_segitettunk_table` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `text` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `menhely_segitettunk_table`
--

INSERT INTO `menhely_segitettunk_table` (`id`, `title`, `text`) VALUES
(3, 'Adományoztunk', '<img src=\"http://menhely.eu/pics/cikkek/75/.0_0~100.jpg\">\r\n\" Mindig tud adni, akinek a szíve szeretettel van tele \"'),
(4, 'Húst vittünk a tanyán élő kutyusoknak...', '<img src=\"http://menhely.eu/pics/cikkek/75/20160526hus0_0~100.JPG\">\r\nA mai napon több mint 5 mázsa húst osztottunk szét a kutyusoknak. Örömmel fogadták, több meg is kóstolta...'),
(5, 'Alapítványunk húst osztott a tanyán élő kutyusoknak....', '<img src=\"http://menhely.eu/pics/cikkek/75/20151021hus0_0~100.JPG\">\r\nHúsosztással egybekötött ellenőrzést tartottunk'),
(6, 'Segítséget kértek alapítványunktól egy kutya megmentésére..', '<img src=\"http://menhely.eu/pics/cikkek/75/20150414kutyuk0_0~100.jpeg\">\r\nLajosmizse és Felsőlajos között, az új Tanyacsárdához vezető úton lehet megközelíteni az alkotótábort, ahol most vagyok. Krisztina farm a neve.'),
(7, 'Gazdira vár 2 hányatott sorsú kutya! Biztos kezekben vannak már ...Mesike és Picur', '<img src=\"http://menhely.eu/pics/cikkek/2040/20140516sohordo0_0~100.JPG\">\r\nSajnos életük folyamán nem sok szerencsében volt részük. Gazdája anyagi helyzete miatt nem tud róluk gondoskodni már ezért sürgősen szerető gazdira van szükségük.\r\nBővebb információ a 0620 476 9693-as telefonszámon vagy az info@menhely.eu e-mail címen.\r\nMind a két kutya oltva , féregtelenítve és chippel ellátva fogadható örökbe.'),
(8, 'Bejelentést kaptunk!', '<img src=\"http://menhely.eu/pics/cikkek/81/20150401tiszakecske0_0~100.jpg\">\r\nTisztelt Állatvédők!\r\nTiszakécskén a szomszédomba van egy keverék kutyus aki elég idős. Tizenhárom éves minimum van. A gazdája alkohol függő és nem ad neki rendesen enni és alultáplált a kutya és a szőrzete is nagyon rossz állapotban van. Nagyon vakarózik. Adtunk már neki már nem is egyszer enni, de ez nem megoldás. ********* 95. sz. Én a*****sz. alatt lakom. Köszönettel: ********'),
(9, 'Adománnyal segített Alapítványunk!', '<img src=\"http://menhely.eu/pics/cikkek/75/20150404adomany0_0~100.JPG\">\r\nAdományt adtunk Lakos Györgynek a felelős állattartás nemzeti civil program vezetőjének.'),
(10, 'Alapítványunk ivartalanítási akciója lezárult!', '<img src=\"http://menhely.eu/pics/cikkek/2039/20150330ivartalanitas0_1~100.jpg\">\r\nAz ivartalanítási akció 2015.05.3-án lezárult. Akciós ivartalanítási kupont már nem tudunk kiadni, a kint lévő kuponok május 23-ig válthatók be!\r\n\r\nAz alapítvány köszöni a gazdáknak, hogy igénybe vették az akciót és éltek a lehetőséggel.\r\n'),
(11, 'Köszönőlevél!', 'Lakos György\r\nNagy köszönet a karácsonyi kutya kaja adományért Tőzsér Juditnak a Kecskeméti Menhely az Állatokért Alapítvány vezetőjének Kecskemét-Tóalmás-Taksony-Budapest (Kuci és Happy Cats) útvonalon vittük végig, hogy legyen a kutyák-macskák karácsonyai is boldogabb'),
(12, 'Köszönőlevél Gombóc gazdijától....', '<img src=\"http://menhely.eu/pics/cikkek/1305/20140701koszonet0_0~100.jpg\">\r\nTisztelt Alapítványi Munkatársak!\r\n\r\nMellékelek 3 fotót Gombócról, aki 1 hete került hozzánk. Haza érkezése után kicsit félt, de már 1 óra múlva kezdett feloldódni, és azóta nagyon jól érzi magát.'),
(13, 'Köszönő levél...', '<img src=\"http://menhely.eu/pics/cikkek/1305/20140516koszono0_0~100.jpg\">\r\nFeladó:.......@gmail.com>\r\nDátum: 2014. május 15.\r\nCímzett: menhely@menhely.eu\r\nTárgy: Köszönöm a szerető gazdikat a menhelynek Dénes\r\n\r\nKedves menhely dolgozók köszönjük Dénes cicát');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menhely_users`
--

CREATE TABLE `menhely_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `csaladinev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `utonev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `menhely_users`
--

INSERT INTO `menhely_users` (`id`, `username`, `csaladinev`, `utonev`, `password`, `email`, `role`) VALUES
(7, 'gabeszcsgo', 'Böröczki', 'Gábor', 'e9cffdbc98648260df63b217fe986269a919097ff701e4f6457c6e5ff52fed0e', 'gabor.css@gmail.com', 0),
(8, 'Marcellka', 'Vitkovszki', 'Marcell', 'cf75ab1028187a6f6735d6289de8be075986f95be40a6098a4d7424c4fc55198', 'gabor.css@gmail.com', 0),
(9, 'Brandxforce', 'Gabesz', 'gabesz', 'e9cffdbc98648260df63b217fe986269a919097ff701e4f6457c6e5ff52fed0e', 'gabor.css@gmail.com', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `menhely_kapcsolat_table`
--
ALTER TABLE `menhely_kapcsolat_table`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `menhely_kutya_table`
--
ALTER TABLE `menhely_kutya_table`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `menhely_segitettunk_table`
--
ALTER TABLE `menhely_segitettunk_table`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `menhely_users`
--
ALTER TABLE `menhely_users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `menhely_kapcsolat_table`
--
ALTER TABLE `menhely_kapcsolat_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `menhely_kutya_table`
--
ALTER TABLE `menhely_kutya_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT a táblához `menhely_segitettunk_table`
--
ALTER TABLE `menhely_segitettunk_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT a táblához `menhely_users`
--
ALTER TABLE `menhely_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
