SQL query for creating Table:

CREATE TABLE `products` (
  `entity_id` int NOT NULL,
  `category_name` text,
  `sku` varchar(50) DEFAULT NULL,
  `name` text,
  `short_desc` text,
  `price` varchar(10) DEFAULT NULL,
  `link` text,
  `image` text,
  `brand` varchar(255) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `caffeine_type` varchar(100) DEFAULT NULL,
  `count` int DEFAULT NULL,
  `flavored` varchar(50) DEFAULT NULL,
  `seasonal` varchar(50) DEFAULT NULL,
  `in_stock` varchar(50) DEFAULT NULL,
  `facebook` int DEFAULT NULL,
  `is_k_cup` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`entity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
