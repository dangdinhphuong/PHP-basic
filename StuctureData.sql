SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `new_column` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data to the table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `new_column`) VALUES
(1, 'SC', 'Sample Category', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL),
(2, 'OSC', 'Otherrrrrrrrrr Sample Category', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL),
(3, 'SC', 'Sample tttttttttCategory', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL),
(4, 'OSC', 'Other trrrrrSample Categohjghjry', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL),
(5, 'SC', 'Sample fffffffffCategoghjhgjry', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL),
(6, 'OSC', 'Otherzzzzzzzzzzz Sample Categghjghjdgjory', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL),
(7, 'SC', 'Samplegggggggggggg Catghjdgjegory', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL),
(8, 'OSC', 'Other Sampljjjjjjjjje Category', '2021-08-21 09:50:12', '2021-08-21 09:50:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `category_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data to the table `items`
--

INSERT INTO `items` (`id`, `name`, `amount`, `category_id`) VALUES
(1, 'Item 1', 10, 1),
(2, 'Item 2', 20, 1),
(3, 'Item 3', 10, 3),
(4, 'Item 4', 20, 4),
(5, 'Item 5', 10, 5),
(6, 'Item 6', 20, 1),
(7, 'Item 7', 10, 2),
(8, 'Item 8', 20, 3);

--
-- Index for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT of table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT of table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;


