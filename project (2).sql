-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 08:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pet_type` enum('Dog','Cat') NOT NULL,
  `service` varchar(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `payment_method` enum('pay-at-store','credit-card') NOT NULL,
  `card_number` varchar(16) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `cvv` varchar(3) DEFAULT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `pet_type`, `service`, `appointment_date`, `appointment_time`, `payment_method`, `card_number`, `expiry_date`, `cvv`, `added_on`, `updated_on`) VALUES
(1, 'k', 'kasturiborhade@yahoo.com', 'Dog', 'Nail Trimming', '2024-09-18', '11:34:00', 'pay-at-store', NULL, NULL, NULL, '2024-09-27 11:30:37', '2024-09-27 11:30:37'),
(2, 'k', 'kasturiborhade@yahoo.com', 'Dog', 'Nail Trimming', '2024-09-18', '11:34:00', 'credit-card', NULL, NULL, NULL, '2024-09-27 11:30:45', '2024-09-27 11:30:45'),
(3, 'k', 'kasturiborhade@yahoo.com', 'Dog', 'Nail Trimming', '2024-10-03', '15:40:00', 'pay-at-store', NULL, NULL, NULL, '2024-09-27 15:37:15', '2024-09-27 15:37:15'),
(4, 'k', 'kasturiborhade@yahoo.com', 'Dog', 'Nail Trimming', '2024-09-18', '16:04:00', 'pay-at-store', NULL, NULL, NULL, '2024-09-27 16:02:00', '2024-09-27 16:02:00'),
(5, 'kasturi', 'kasturiborhade@yahoo.com', 'Dog', 'Nail Trimming', '2024-10-01', '16:51:00', 'pay-at-store', NULL, NULL, NULL, '2024-09-27 16:46:16', '2024-09-27 16:46:16'),
(6, 'k', 'kasturiborhade@yahoo.com', 'Dog', 'Nail Trimming', '2024-10-02', '20:52:00', 'credit-card', NULL, NULL, NULL, '2024-09-27 20:47:41', '2024-09-27 20:47:41'),
(7, 'raya', 'raya@gmail.com', 'Cat', 'Pet Walking', '2024-10-03', '08:12:00', 'pay-at-store', NULL, NULL, NULL, '2024-09-28 08:09:23', '2024-09-28 08:09:23'),
(8, 'raya', 'ria@gmail.com', 'Dog', 'Nail Trimming', '2024-09-07', '12:16:00', 'credit-card', NULL, NULL, NULL, '2024-09-28 12:14:55', '2024-09-28 12:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `article` longtext NOT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `article`, `added_on`, `updated_on`, `thumbnail`) VALUES
(8, 1, 'Essential Grooming Tools .', 'Essential Grooming Tools for Pets\r\nApril 5, 2024', '1.Brushes: For detangling and removing loose fur. Options include slicker brushes, bristle brushes, and pin brushes.                  2.Combs: For fine grooming and detecting mats. Metal combs are useful for different coat types.\r\n                    3.De-shedding Tools: Such as the Furminator, designed to reduce shedding and manage loose undercoat.\r\n                    4.Nail Clippers: Cat or dog-specific clippers to trim nails and prevent overgrowth.\r\n                    5.Ear Cleaners: Gentle solutions to clean and maintain healthy ears, avoiding excess wax and infections.\r\n                    6.Shampoo: Pet-friendly shampoos for bathing, suited to your pet’s skin and coat type.\r\n                    7.Toothbrushes and Toothpaste: Specialized for pets to maintain dental health and prevent plaque buildup.\r\n                    8.Bathing Tools: Bath mats, sprayers, or brushes to make the bathing process easier and more effective.\r\n                    9.Grooming Scissors: Rounded-tip or straight scissors for trimming hair and managing coat length.\r\n                    10.Fur Removers: Tools like lint rollers or pet hair removers for cleaning fur from furniture and clothing.', '2024-09-27 16:29:02', '2024-09-27 20:45:26', '2m5qxbgolsp3ad0476f1vktrijy8hezw.jpg'),
(11, 1, 'Essential Grooming Tools for P', 'Essential Grooming Tools for Pets\r\nApril 5, 2024', '1.Brushes: For detangling and removing loose fur. Options include slicker brushes, bristle brushes, and pin brushes.                  2.Combs: For fine grooming and detecting mats. Metal combs are useful for different coat types.\r\n                    3.De-shedding Tools: Such as the Furminator, designed to reduce shedding and manage loose undercoat.\r\n                    4.Nail Clippers: Cat or dog-specific clippers to trim nails and prevent overgrowth.\r\n                    5.Ear Cleaners: Gentle solutions to clean and maintain healthy ears, avoiding excess wax and infections.\r\n                    6.Shampoo: Pet-friendly shampoos for bathing, suited to your pet’s skin and coat type.\r\n                    7.Toothbrushes and Toothpaste: Specialized for pets to maintain dental health and prevent plaque buildup.\r\n                    8.Bathing Tools: Bath mats, sprayers, or brushes to make the bathing process easier and more effective.\r\n                    9.Grooming Scissors: Rounded-tip or straight scissors for trimming hair and managing coat length.\r\n                    10.Fur Removers: Tools like lint rollers or pet hair removers for cleaning fur from furniture and clothing.', '2024-09-27 17:28:49', '2024-09-27 20:39:11', 'ubc7ngivx8qoz09se4la3k1drh5fw6y2.jpg'),
(12, 4, 'Essential Grooming Tools for P', 'Essential Grooming Tools for Pets\r\nApril 5, 2024', '1.Brushes: For detangling and removing loose fur. Options include slicker brushes, bristle brushes, and pin brushes.                  2.Combs: For fine grooming and detecting mats. Metal combs are useful for different coat types.\r\n                    3.De-shedding Tools: Such as the Furminator, designed to reduce shedding and manage loose undercoat.\r\n                    4.Nail Clippers: Cat or dog-specific clippers to trim nails and prevent overgrowth.\r\n                    5.Ear Cleaners: Gentle solutions to clean and maintain healthy ears, avoiding excess wax and infections.\r\n                    6.Shampoo: Pet-friendly shampoos for bathing, suited to your pet’s skin and coat type.\r\n                    7.Toothbrushes and Toothpaste: Specialized for pets to maintain dental health and prevent plaque buildup.\r\n                    8.Bathing Tools: Bath mats, sprayers, or brushes to make the bathing process easier and more effective.\r\n                    9.Grooming Scissors: Rounded-tip or straight scissors for trimming hair and managing coat length.\r\n                    10.Fur Removers: Tools like lint rollers or pet hair removers for cleaning fur from furniture and clothing.', '2024-09-27 17:31:52', '2024-09-27 17:31:52', 'mv5jdeil6tyq43z8o921g7bnsawpxc0f.jpg'),
(13, 4, 'How to Handle Pet Shedding', 'How to Handle Pet Shedding\r\nMay 10, 2024', '1.Understand Shedding Patterns: Pets shed more during seasonal changes and different breeds shed at varying rates.\r\n                    2.Regular Grooming: Brush your pet regularly and bathe them occasionally to remove loose fur and manage shedding\r\n                    3.Maintain a Healthy Diet: Provide a balanced diet rich in omega fatty acids and ensure proper hydration to promote a healthy coat.\r\n                  4.Manage Environmental Factors: Vacuum frequently and use pet-safe cleaning products to manage fur around the home.\r\n                    5.Check for Health Issues: Consult your vet if excessive shedding occurs, as it could indicate underlying health problems.\r\n                    6.Use De-shedding Tools: Employ de-shedding brushes or tools to remove loose hair and reduce shedding.\r\n                    7.Regular Health Check-Ups: Schedule routine vet exams to monitor overall health, including skin and coat condition.', '2024-09-27 22:55:00', '2024-09-27 22:55:00', 'hzno4rws8209gamqcutkxef7vdl5y3i6.jpg'),
(14, 1, 'Preparing Your Pet for a Profe', 'Preparing Your Pet for a Professional Grooming Session\r\nMarch 18, 2024', '1.Familiarize Your Pet with Handling: Gradually get your pet used to being touched and handled in the areas that will be groomed.\r\n                    2.Brush Your Pet Beforehand: Brush your pet to remove loose fur and tangles, which makes the grooming process smoother.\r\n                    3.Check for Health Issues: Ensure your pet is free from any injuries or health issues that might be exacerbated by grooming.\r\n                    4.Provide Accurate Information: Inform the groomer about any specific needs, allergies, or behavioral concerns your pet may have.\r\n                    5.Make Sure Your Pet Is Calm: Try to keep your pet calm before the appointment by engaging in relaxing activities or exercise.\r\n                    6.Prepare Your Pet’s Vaccination Records: Some grooming salons require proof of vaccinations, so have these documents ready if needed.\r\n                    7.Bring Comfort Items: Consider bringing your pet’s favorite blanket or toy to provide comfort during the grooming session.\r\n                    8.Schedule a Convenient Time: Choose a grooming appointment time that aligns with your pet’s routine to reduce stress.\r\n                    9.Arrive Early: Arrive a few minutes early to complete any necessary paperwork and give your pet time to adjust to the new environment.\r\n                    10.Discuss Grooming Preferences: Clearly communicate your preferences for your pet’s grooming style and any special requests with the groomer', '2024-09-27 22:58:16', '2024-09-27 22:58:16', 'gzrcuy0f5h1wkqoa6tm9dbnlspjeiv47.jpg'),
(15, 1, 'pet dhredding', 'How to Handle Pet Shedding\r\nMay 10, 2024', '1.Understand Shedding Patterns: Pets shed more during seasonal changes and different breeds shed at varying rates.\r\n                    2.Regular Grooming: Brush your pet regularly and bathe them occasionally to remove loose fur and manage shedding.\r\n                    3.Maintain a Healthy Diet: Provide a balanced diet rich in omega fatty acids and ensure proper hydration to promote a healthy coat.\r\n                    4.Manage Environmental Factors: Vacuum frequently and use pet-safe cleaning products to manage fur around the home.\r\n                    5.Check for Health Issues: Consult your vet if excessive shedding occurs, as it could indicate underlying health problems.\r\n                    6.Use De-shedding Tools: Employ de-shedding brushes or tools to remove loose hair and reduce shedding.\r\n                    7.Regular Health Check-Ups: Schedule routine vet exams to monitor overall health, including skin and coat condition.\r\n', '2024-09-28 13:01:19', '2024-09-28 13:01:19', 'z4vmicet5ug3j28r9n7y601xklbswfoq.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `added_on` datetime DEFAULT current_timestamp(),
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_type` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `added_on`, `updated_on`, `user_type`) VALUES
(1, 'kasturi', 'b', 'borhadekasturi@gmail.com', '1f21f4b5d992cf4769297889ad2e63b9', '2024-09-27 11:34:55', '2024-09-27 11:34:55', 'admin'),
(4, 'k', 'b', 'kasturiborhade@yahoo.com', 'dc468c70fb574ebd07287b38d0d0676d', '2024-09-27 15:43:14', '2024-09-27 16:48:41', 'user'),
(6, 'om', 'patil', 'ompatil@gmail.com', '444bcb3a3fcf8389296c49467f27e1d6', '2024-09-28 13:02:12', '2024-09-28 13:02:12', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_users_FK` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
