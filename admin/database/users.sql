-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2024 at 05:52 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_gu`
--
-- --------------------------------------------------------
--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;

CREATE TABLE
  IF NOT EXISTS `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `address` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `pasword` varchar(255) NOT NULL,
    `status` int NOT NULL DEFAULT '1',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
  ) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

COMMIT;

DROP TABLE IF EXISTS `services`;

CREATE TABLE
  IF NOT EXISTS `services` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `icon` varchar(255) NOT NULL,
    `title` varchar(100) NOT NULL,
    `description` varchar(255) NOT NULL,
    `status` int (11) NOT NULL DEFAULT 1,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

COMMIT;

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE
  IF NOT EXISTS `faqs` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `question` varchar(255) NOT NULL,
    `answer` varchar(255) NOT NULL,
    `status` int (11) NOT NULL DEFAULT 1,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

COMMIT;

DROP TABLE IF EXISTS `settings`;

CREATE TABLE
  IF NOT EXISTS `settings` (
    `id` int (11) NOT NULL AUTO_INCREMENT,
    `site_key` varchar(255) NOT NULL,
    `site_value` varchar(100) NOT NULL,
    `status` int (11) NOT NULL DEFAULT 1,
    `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
    `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`id`)
  ) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

COMMIT;