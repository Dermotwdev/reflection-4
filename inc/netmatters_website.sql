-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 03:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `optin` set('true','false') NOT NULL DEFAULT 'false',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `subject`, `message`, `optin`, `date`) VALUES
(17, 'Testname', 'test@test.net', '7123123123', 'A simple test', 'Let\'s see if this works', 'true', '2020-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `theme` set('it','design','software','marketing','telecoms','security','training') NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL DEFAULT 'news',
  `tooltip` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_img` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `theme`, `img`, `title`, `comment`, `tag`, `tooltip`, `author`, `author_img`, `date`) VALUES
(1, 'it', 'img/news-img/1st-line-support-NXuI.jpg', 'Senior IT Support Technician', 'Salary: &pound;28,000 - &pound;34,000 + Bonuses + Pension Hours: 40 hours per week, Monday - Friday Locatio...', 'careers', 'View all: IT Support / Careers', 'Rob George', 'img/news-img/Rob-author.jpg', '2020-06-10'),
(2, 'it', 'img/news-img/senior-it-support-DklE.jpg', '1st Line Support Technician', 'SALARY: &pound;18,000 - &pound;23,000 + Bonus & Pension Netmatters is a rapidly growing website development...', 'careers', 'View all: IT Support / Careers', 'Rob George', 'img/news-img/Rob-author.jpg', '2020-06-10'),
(3, 'design', 'img/news-img/may-2020-notable-sK95.jpg', 'May 2020 Notable Employee', 'It\'s the beginning of June which means only one thing here at Netmatters - announcing the winner...', 'news', 'View all: Web Design / News', 'Netmatters Ltd', 'img/news-img/nm-author.jpg', '2020-06-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
