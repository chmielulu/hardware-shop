-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Gru 2019, 15:11
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hardware.pl`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `Category_name` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordered_products`
--

CREATE TABLE `ordered_products` (
  `Ordered_productID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Status` text COLLATE utf8_polish_ci NOT NULL,
  `Shipping_type` text COLLATE utf8_polish_ci NOT NULL,
  `Payment_type` text COLLATE utf8_polish_ci NOT NULL,
  `Payment_status` text COLLATE utf8_polish_ci NOT NULL,
  `Prize` double NOT NULL,
  `Data_and_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `Name` text COLLATE utf8_polish_ci NOT NULL,
  `Price` double NOT NULL,
  `Discount` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Ranking` int(11) NOT NULL,
  `Sub_categoryID` int(11) NOT NULL,
  `VariantsID` int(11) NOT NULL,
  `Basic_Spec1` int(11) NOT NULL,
  `Basic_Spec2` int(11) NOT NULL,
  `Basic_Spec3` int(11) NOT NULL,
  `Basic_Spec4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `specifications`
--

CREATE TABLE `specifications` (
  `SpecificationID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `specifications_items`
--

CREATE TABLE `specifications_items` (
  `Specification_itemID` int(11) NOT NULL,
  `SpecificationID` int(11) NOT NULL,
  `TitleID` int(11) NOT NULL,
  `Value` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `specification_title`
--

CREATE TABLE `specification_title` (
  `TitleID` int(11) NOT NULL,
  `Title` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sub_categories`
--

CREATE TABLE `sub_categories` (
  `Sub_categoryID` int(11) NOT NULL,
  `Sub_category_name` text COLLATE utf8_polish_ci NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Login` text COLLATE utf8_polish_ci NOT NULL,
  `Password` text COLLATE utf8_polish_ci NOT NULL,
  `First_name` text COLLATE utf8_polish_ci NOT NULL,
  `Last_name` text COLLATE utf8_polish_ci NOT NULL,
  `Email` text COLLATE utf8_polish_ci NOT NULL,
  `Address` text COLLATE utf8_polish_ci NOT NULL,
  `Postal_code` text COLLATE utf8_polish_ci NOT NULL,
  `City` text COLLATE utf8_polish_ci NOT NULL,
  `Phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `variants`
--

CREATE TABLE `variants` (
  `VariantsID` int(11) NOT NULL,
  `Variants_typeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `variants_items`
--

CREATE TABLE `variants_items` (
  `ItemID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `VariantsID` int(11) NOT NULL,
  `Value` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `variants_types`
--

CREATE TABLE `variants_types` (
  `TypeID` int(11) NOT NULL,
  `Type` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indeksy dla tabeli `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`Ordered_productID`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indeksy dla tabeli `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`SpecificationID`);

--
-- Indeksy dla tabeli `specifications_items`
--
ALTER TABLE `specifications_items`
  ADD PRIMARY KEY (`Specification_itemID`);

--
-- Indeksy dla tabeli `specification_title`
--
ALTER TABLE `specification_title`
  ADD PRIMARY KEY (`TitleID`);

--
-- Indeksy dla tabeli `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD KEY `Sub_categoryID` (`Sub_categoryID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indeksy dla tabeli `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`VariantsID`);

--
-- Indeksy dla tabeli `variants_items`
--
ALTER TABLE `variants_items`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indeksy dla tabeli `variants_types`
--
ALTER TABLE `variants_types`
  ADD PRIMARY KEY (`TypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `Ordered_productID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `specifications`
--
ALTER TABLE `specifications`
  MODIFY `SpecificationID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `specifications_items`
--
ALTER TABLE `specifications_items`
  MODIFY `Specification_itemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `specification_title`
--
ALTER TABLE `specification_title`
  MODIFY `TitleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `Sub_categoryID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `variants`
--
ALTER TABLE `variants`
  MODIFY `VariantsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `variants_items`
--
ALTER TABLE `variants_items`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `variants_types`
--
ALTER TABLE `variants_types`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
