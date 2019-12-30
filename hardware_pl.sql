-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Gru 2019, 19:41
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
-- Struktura tabeli dla tabeli `attributes`
--

CREATE TABLE `attributes` (
  `attribute_id` int(11) NOT NULL,
  `attribute_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `attribute_group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `attribute_groups`
--

CREATE TABLE `attribute_groups` (
  `attribute_group_id` int(11) NOT NULL,
  `attribute_group_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `basic_attributes`
--

CREATE TABLE `basic_attributes` (
  `basic_attributes_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_attribute_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_login` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_password` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_email` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_date_entered` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer_adresses`
--

CREATE TABLE `customer_adresses` (
  `customer_id` int(11) DEFAULT NULL,
  `customer_first_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_last_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_address` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_post_code` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_city` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `customer_phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer_carts`
--

CREATE TABLE `customer_carts` (
  `customer_id` int(11) DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `descriptions`
--

CREATE TABLE `descriptions` (
  `description_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `description_items`
--

CREATE TABLE `description_items` (
  `description_id` int(11) DEFAULT NULL,
  `description_item_order` int(11) DEFAULT NULL,
  `icon_id` int(11) DEFAULT NULL,
  `description_item_headline` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `description_item_value` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `icons`
--

CREATE TABLE `icons` (
  `icon_id` int(11) NOT NULL,
  `icon_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordered_products`
--

CREATE TABLE `ordered_products` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `ordered_product_price` double DEFAULT NULL,
  `ordered_product_discount` double DEFAULT NULL,
  `ordered_product_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `order_first_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `order_last_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `order_address` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `order_post_code` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `order_city` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `order_phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `payment_number` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `product_info` varchar(220) COLLATE utf8_polish_ci NOT NULL,
  `product_price` double DEFAULT NULL,
  `product_discount` double DEFAULT NULL,
  `product_ranking` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_attributes`
--

CREATE TABLE `product_attributes` (
  `product_attribute_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sub_category_attribute_id` int(11) DEFAULT NULL,
  `product_attribute_value` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_carts`
--

CREATE TABLE `product_carts` (
  `cart_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_cart_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_variants`
--

CREATE TABLE `product_variants` (
  `product_variants_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `review_rate` int(11) DEFAULT NULL,
  `review_description` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sale`
--

CREATE TABLE `sale` (
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sessions`
--

CREATE TABLE `sessions` (
  `session_id` int(11) NOT NULL,
  `session_value` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `session_carts`
--

CREATE TABLE `session_carts` (
  `session_id` int(11) DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sub_category_attributes`
--

CREATE TABLE `sub_category_attributes` (
  `sub_category_attribute_id` int(11) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `sub_category_attribute_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `types`
--

CREATE TABLE `types` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `variants`
--

CREATE TABLE `variants` (
  `product_variants_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `variant_value` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`attribute_id`),
  ADD KEY `attribute_group_id` (`attribute_group_id`);

--
-- Indeksy dla tabeli `attribute_groups`
--
ALTER TABLE `attribute_groups`
  ADD PRIMARY KEY (`attribute_group_id`);

--
-- Indeksy dla tabeli `basic_attributes`
--
ALTER TABLE `basic_attributes`
  ADD PRIMARY KEY (`basic_attributes_id`),
  ADD KEY `product_attribute_id` (`product_attribute_id`);

--
-- Indeksy dla tabeli `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeksy dla tabeli `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeksy dla tabeli `customer_adresses`
--
ALTER TABLE `customer_adresses`
  ADD KEY `customer_id` (`customer_id`);

--
-- Indeksy dla tabeli `customer_carts`
--
ALTER TABLE `customer_carts`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indeksy dla tabeli `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`description_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `description_items`
--
ALTER TABLE `description_items`
  ADD KEY `description_id` (`description_id`),
  ADD KEY `icon_id` (`icon_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indeksy dla tabeli `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`icon_id`);

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indeksy dla tabeli `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indeksy dla tabeli `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indeksy dla tabeli `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`product_attribute_id`),
  ADD KEY `sub_category_attribute_id` (`sub_category_attribute_id`),
  ADD KEY `product_attributes_ibfk_1` (`product_id`);

--
-- Indeksy dla tabeli `product_carts`
--
ALTER TABLE `product_carts`
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`product_variants_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indeksy dla tabeli `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indeksy dla tabeli `session_carts`
--
ALTER TABLE `session_carts`
  ADD KEY `session_id` (`session_id`),
  ADD KEY `cart_id` (`cart_id`);

--
-- Indeksy dla tabeli `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `sub_category_attributes`
--
ALTER TABLE `sub_category_attributes`
  ADD PRIMARY KEY (`sub_category_attribute_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Indeksy dla tabeli `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

--
-- Indeksy dla tabeli `variants`
--
ALTER TABLE `variants`
  ADD KEY `product_variants_id` (`product_variants_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `type_id` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `attributes`
--
ALTER TABLE `attributes`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `attribute_groups`
--
ALTER TABLE `attribute_groups`
  MODIFY `attribute_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `basic_attributes`
--
ALTER TABLE `basic_attributes`
  MODIFY `basic_attributes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `description_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `icons`
--
ALTER TABLE `icons`
  MODIFY `icon_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `product_attribute_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `product_variants_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sale`
--
ALTER TABLE `sale`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `sub_category_attributes`
--
ALTER TABLE `sub_category_attributes`
  MODIFY `sub_category_attribute_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `types`
--
ALTER TABLE `types`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_ibfk_1` FOREIGN KEY (`attribute_group_id`) REFERENCES `attribute_groups` (`attribute_group_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `basic_attributes`
--
ALTER TABLE `basic_attributes`
  ADD CONSTRAINT `basic_attributes_ibfk_1` FOREIGN KEY (`product_attribute_id`) REFERENCES `product_attributes` (`product_attribute_id`);

--
-- Ograniczenia dla tabeli `customer_adresses`
--
ALTER TABLE `customer_adresses`
  ADD CONSTRAINT `customer_adresses_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `customer_carts`
--
ALTER TABLE `customer_carts`
  ADD CONSTRAINT `customer_carts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `customer_carts_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `descriptions`
--
ALTER TABLE `descriptions`
  ADD CONSTRAINT `descriptions_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `description_items`
--
ALTER TABLE `description_items`
  ADD CONSTRAINT `description_items_ibfk_1` FOREIGN KEY (`description_id`) REFERENCES `descriptions` (`description_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `description_items_ibfk_2` FOREIGN KEY (`icon_id`) REFERENCES `icons` (`icon_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `description_items_ibfk_3` FOREIGN KEY (`image_id`) REFERENCES `images` (`image_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD CONSTRAINT `ordered_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `ordered_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`sub_category_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `product_attributes_ibfk_2` FOREIGN KEY (`sub_category_attribute_id`) REFERENCES `sub_category_attributes` (`sub_category_attribute_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `product_carts`
--
ALTER TABLE `product_carts`
  ADD CONSTRAINT `product_carts_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `product_carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `session_carts`
--
ALTER TABLE `session_carts`
  ADD CONSTRAINT `session_carts_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`session_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `session_carts_ibfk_2` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `sub_category_attributes`
--
ALTER TABLE `sub_category_attributes`
  ADD CONSTRAINT `sub_category_attributes_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`sub_category_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sub_category_attributes_ibfk_2` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`attribute_id`) ON DELETE NO ACTION;

--
-- Ograniczenia dla tabeli `variants`
--
ALTER TABLE `variants`
  ADD CONSTRAINT `variants_ibfk_1` FOREIGN KEY (`product_variants_id`) REFERENCES `product_variants` (`product_variants_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `variants_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `variants_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `types` (`type_id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
