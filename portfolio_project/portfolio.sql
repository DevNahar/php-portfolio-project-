-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 12:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(20) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1=Active, 0 = InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `details`, `image`, `status`) VALUES
(30, 'Dolorum nulla rerum ', 'Corrupti qui veniam', 'Perspiciatis 000', '1656185560.jpg', 1),
(42, 'Totam illo occaecat ', 'Voluptas aliquip mag', 'Molestias ', '1656800691.png', 1),
(43, 'Officia ', 'Laborum', 'Consequuntur ', '1656801456.png', 1),
(44, 'Magnam temporibus ', 'Exercitation', 'Repudiandae ', '1656801602.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`) VALUES
(1, 'Web Design', 1),
(3, 'Web Development', 1),
(4, 'Graphic Design', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `contact_topic` varchar(100) NOT NULL,
  `contact_details` text NOT NULL,
  `icon_name` varchar(30) NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `contact_topic`, `contact_details`, `icon_name`, `active_status`) VALUES
(1, 'Iusto aliquid reicie', 'Ullamco a ipsum et i', 'Kiara Anderson', 0),
(2, 'Magna praesentium ', '\"Iure ex blanditiis ', '', 0),
(3, 'Facere odit et aut e', '\"Esse qui temporibus ', 'Zelenia Waller', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(11) NOT NULL,
  `designation_name` varchar(50) NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `active_status`) VALUES
(4, 'ceo', 1),
(5, 'officer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` int(11) NOT NULL,
  `clients_name` varchar(50) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `client_image` varchar(20) NOT NULL,
  `client_review` text NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `clients_name`, `designation_id`, `client_image`, `client_review`, `active_status`) VALUES
(7, 'Madaline Bates', 5, '1656614741.png', 'Voluptate pariatur ', 1),
(9, 'Keefe Franks', 5, '1656623447.png', 'Ut soluta quam quisq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_projects`
--

CREATE TABLE `our_projects` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_link` varchar(100) NOT NULL,
  `project_thumb` varchar(30) NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_projects`
--

INSERT INTO `our_projects` (`id`, `category_id`, `project_name`, `project_link`, `project_thumb`, `active_status`) VALUES
(6, 4, 'Hillary Clin', 'https://www.xyvazuj.cc', '1656619289.png', 1),
(7, 1, 'Howard Martin', 'https://www.cud.me.uk', '1656621930.png', 1),
(8, 2, 'Evangeline England', 'https://www.wib.info', '1656614339.png', 1),
(9, 2, 'Irma Combs', 'https://www.nefesytomurig.ca', '1656614413.png', 1),
(10, 3, 'Brenna Mooney', 'https://www.norepesoqiv.org', '1656622988.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_staff`
--

CREATE TABLE `our_staff` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `staff_image` varchar(30) NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `linkedin` text NOT NULL,
  `instagram` text NOT NULL,
  `active_status` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_staff`
--

INSERT INTO `our_staff` (`id`, `staff_name`, `designation_id`, `staff_image`, `twitter`, `facebook`, `linkedin`, `instagram`, `active_status`) VALUES
(8, 'Paki Hojj', 4, '1656622935.jpg', 'Vel ', 'A', 'Velit ', 'Mollitia ', 1),
(9, 'Tallulah Webster', 0, '1656622777.png', 'Dolore dolore ut', 'Eius facere architec', 'Culpa voluptatibus ', 'Cillum vel voluptas ', 1),
(10, 'Brittany Ballard', 0, '1656623513.png', 'Corrupti aut nesciu', 'Labore aspernatur do', 'Ex eos sequi et est', 'Suscipit iste incidu', 1),
(11, 'September Whitehead', 0, '1656623657.png', 'Culpa iure cillum r', 'Tenetur nihil id nos', 'Aut necessitatibus e', 'Dolore facere fuga ', 1),
(12, 'Tyrone Hess', 5, '1658406194.png', 'Nihil incididunt tem', 'Velit et ut alias v', 'Vel repellendus Mol', 'Eaque officiis esse', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_details` text NOT NULL,
  `icon_name` varchar(30) NOT NULL,
  `design_status` tinyint(2) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_details`, `icon_name`, `design_status`) VALUES
(5, 'Eugenia Ray', 'Quis earum sit commo', 'Demetrius Stanley', 1),
(7, 'Jasmine Faulkner', 'Fugit impedit sed ', 'Keiko Mosley', 1),
(8, 'Tallulah Porter', 'Neque minus quo quia', 'Jescie Phelps', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_projects`
--
ALTER TABLE `our_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_staff`
--
ALTER TABLE `our_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `our_projects`
--
ALTER TABLE `our_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `our_staff`
--
ALTER TABLE `our_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
