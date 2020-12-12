-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2020 at 02:53 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yL8dDuN9Va`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Tata Agni 250g', ' ', '80.00', '80.00', 50, 'tataagni250g.jpg'),
(2, 'Broke Bond Red Label Natural Care 250g', ' ', '140.00', '140.00', 50, 'redlabel.jpg'),
(3, 'Society 250gm', '', '125.00', '125.00', 50, 'society.jpg'),
(4, 'Society Masala Tea', '', '10.00', '10.00', 50, 'societymasala.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `category` varchar(10) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `price`, `rrp`, `quantity`, `img`, `category`, `date_added`) VALUES
(1, 'Tata Agni 250g', '80.00', '80.00', 50, 'tataagni250g.jpg', 'dal', '2020-12-05 14:04:09'),
(2, 'Broke Bond Red Label Natural C', '140.00', '140.00', 50, 'redlabel.jpg', 'dal', '2020-12-05 14:04:09'),
(3, 'Society 250gm', '125.00', '125.00', 50, 'society.jpg', 'dal', '2020-12-05 14:04:09'),
(4, 'Society Masala Tea', '10.00', '10.00', 50, 'societymasala.jpg ', 'dal', '2020-12-05 14:04:09'),
(5, 'Quaker Oats 1.5kg', '240.00', '250.00', 50, 'quakeroats1.5kg.jpg', '', '2020-12-05 13:15:48'),
(6, 'Lizol', '93.00', '93.00', 50, 'lizol.jpg', '', '2020-12-05 13:50:31'),
(7, 'Harpic', '98.00', '98.00', 50, 'harpic.jpg', '', '2020-12-05 13:50:31'),
(8, 'Pitambari 200g', '50.00', '50.00', 50, 'pitambari.jpg', '', '2020-12-05 13:50:32'),
(9, 'Sindhi Papad Big Size 1kg', '320.00', '330.00', 50, 'sindhipapadbigsize.jpeg', '', '2020-12-05 13:18:42'),
(10, 'Sindhi Papad Small Size 1kg', '240.00', '255.00', 50, 'maggie.jpg ', '', '2020-12-05 13:18:42'),
(11, 'Sindhi Amritsari Papad', '340.00', '360.00', 50, 'funfoodmayonnaise.jpg', '', '2020-12-05 13:18:42'),
(12, 'Fortune', '135.00', '145.00', 50, 'fortune.jpg ', '', '2020-12-05 13:06:27'),
(13, 'Sunday Oil', '135.00', '145.00', 50, 'sundayoil.webp ', '', '2020-12-05 13:06:27'),
(14, 'Saffola Gold', '142.00', '145.00', 50, 'saffolagold.jpg ', '', '2020-12-05 13:06:27'),
(15, 'Palmolein Oil', '104.00', '106.00', 50, 'palmoleinoil.jpg', '', '2020-12-05 13:06:27'),
(16, 'Chana Dal', '80.00', '85.00', 50, ' chana.jpg', '', '2020-12-05 14:06:52'),
(17, 'Moong Dal', '110.00', '115.00', 50, ' moong.jpg', '', '2020-12-05 14:06:52'),
(18, 'Moong Dal Chilti', '120.00', '125.00', 50, ' moongakha.jpg', '', '2020-12-05 14:06:52'),
(19, 'Toor Dal', '105.00', '115.00', 50, ' toor.jpg', '', '2020-12-05 14:06:52'),
(20, 'Tide 1kg', '58.00', '60.00', 50, 'tidered.jpg', '', '2020-12-05 13:49:18'),
(21, 'Tide 1kg', '108.00', '110.00', 50, 'tide.jpg', '', '2020-12-05 13:49:18'),
(22, 'Surf Excel 1kg', '116.00', '118.00', 50, 'surfexcel.jpg', '', '2020-12-05 13:49:18'),
(23, 'Rin', '10.00', '10.00', 50, 'rin.jpg ', '', '2020-12-05 13:49:18'),
(24, 'Lokwan Atta', '40.00', '42.00', 100, 'flour.jpg ', '', '2020-12-05 13:07:01'),
(25, 'M.P.Sihore Atta', '42.00', '44.00', 100, 'flour.jpg ', '', '2020-12-05 13:07:01'),
(26, 'Special M.P.Sihore', '44.00', '46.00', 100, 'flour.jpg ', '', '2020-12-05 13:07:01'),
(27, 'P.C. Sihore', '46.00', '48.00', 100, 'flour.jpg ', '', '2020-12-05 13:07:01'),
(28, 'Parachute Cononut Oil 1L', '370.00', '380.00', 50, 'parachutecoconutoil1L.jpg', '', '2020-12-05 13:29:28'),
(29, 'Parachute Cononut Oil 600ml', '220.00', '225.00', 50, 'oil600ml.jpg ', '', '2020-12-05 13:29:28'),
(30, 'Parachute Cononut Oil 250ml', '93.00', '100.00', 50, 'oil600ml.jpg', '', '2020-12-05 13:29:29'),
(31, 'Kissan Mixed Fruit Jam 700g', '210.00', '215.00', 50, 'kissanmixedfruitjam700g.jpg', '', '2020-12-05 13:16:35'),
(32, 'Kissan Mixed Fruit Jam 200g', '40.00', '40.00', 50, 'kissanmixedfruitjam200g.jpg ', '', '2020-12-05 13:16:35'),
(33, 'Funfood Mayonnaise', '35.00', '35.00', 50, 'funfoodmayonnaise.jpg', '', '2020-12-05 13:16:35'),
(34, 'Chings Schezwan Chutney 600g', '150.00', '155.00', 10, 'chingssehezwanchutney600g.jpeg ', '', '2020-12-05 13:12:53'),
(35, 'Kissan Ketchup 450g', '50.00', '50.00', 50, 'kissanketchup450g.jpg ', '', '2020-12-05 13:12:53'),
(36, 'Tomato Ketchup 90g', '15.00', '15.00', 50, 'tomatoketcgup90g.jpg ', '', '2020-12-05 13:12:53'),
(37, 'Red Chilli Sauce 200g', '52.00', '55.00', 50, 'redchilli250g.jpg ', '', '2020-12-05 13:12:53'),
(38, 'Dhaniya powder 250g', '55.00', '58.00', 50, 'dhaniyapowder.jpg', '', '2020-12-05 13:14:42'),
(39, 'Haldi Powder 250g', '70.00', '75.00', 50, 'haldipowder.jpg ', '', '2020-12-05 13:14:42'),
(40, 'Everest Pav Bhaji', '10.00', '10.00', 50, 'everest.jpg', '', '2020-12-05 13:14:42'),
(41, 'Everest Shahi Biryani Masala', '10.00', '10.00', 50, 'shahibiryanimasala.jpg ', '', '2020-12-05 13:14:42'),
(42, 'Badi Shep 1kg', '10.00', '10.00', 50, 'badishep1kg.jpg', '', '2020-12-05 13:20:25'),
(43, 'Colgate 500gm', '215.00', '220.00', 50, 'colgate500gm.jpg', '', '2020-12-05 13:48:32'),
(44, 'Colgate 100gm', '52.00', '52.00', 50, 'colgate100gm.png', '', '2020-12-05 13:48:32'),
(45, 'Parachute Cononut Oil 250ml', '93.00', '100.00', 50, 'colgate100gm.png', '', '2020-12-05 13:48:32'),
(46, 'Chings Hakka Noodles 150g', '30.00', '30.00', 50, 'kissanmixedfruitjam700g.jpg', '', '2020-12-05 13:17:51'),
(47, 'Maggie 4 pack', '46.00', '46.00', 50, 'maggie.jpg ', '', '2020-12-05 13:17:51'),
(48, 'Maggi Chhese Pazzta Macaroni 7', '25.00', '25.00', 50, 'funfoodmayonnaise.jpg', '', '2020-12-05 13:17:51'),
(49, 'Maggie Veg Atta Noodles 20g', '86.00', '86.00', 50, 'maggievegaatanoodles.jpg ', '', '2020-12-05 13:17:51'),
(50, 'Santoor Handwash 750ml', '99.00', '99.00', 50, 'colgate500gm.jpg', '', '2020-12-05 13:48:53'),
(51, 'Dettol Hand Wash 750ml', '105.00', '105.00', 50, 'colgate100gm.png', '', '2020-12-05 13:48:53'),
(52, 'Parachute Cononut Oil 250ml', '10.00', '10.00', 50, 'colgate100gm.png', '', '2020-12-05 13:48:53'),
(53, 'Rambandhu Sweet Lime Pickle 20', '45.00', '50.00', 50, 'rambandhusweetlime.png', '', '2020-12-05 13:19:42'),
(54, 'Rambandhu Chilli Pickle 200g', '45.00', '50.00', 50, 'rambanduchilli.jpg ', '', '2020-12-05 13:19:42'),
(55, 'Rambandhu Lime Pickle 500g', '80.00', '90.00', 50, 'rambandhulime.jpg', '', '2020-12-05 13:19:42'),
(56, 'Rambandhu Mango Pickle 500g', '80.00', '90.00', 50, 'rambandumango.png', '', '2020-12-05 13:19:42'),
(57, 'Chawli', '100.00', '105.00', 50, 'chawali.jpg ', '', '2020-12-05 13:01:45'),
(58, 'Soyawadi', '140.00', '145.00', 50, 'soyawadi.jfif ', '', '2020-12-05 13:01:45'),
(59, 'Kabuli Channa', '100.00', '105.00', 50, 'kabulichana.jpg ', '', '2020-12-05 13:01:45'),
(60, 'Small Chana', '80.00', '90.00', 50, 'smallchana.png ', '', '2020-12-05 13:01:45'),
(61, 'Steam Kolam', '40.00', '45.00', 10, 'steamkolamrice.jpg', '', '2020-12-05 13:13:29'),
(62, 'Basmati Tukda', '42.00', '45.00', 50, 'basmatitukdarice.jpg ', '', '2020-12-05 13:13:29'),
(63, 'Basmati Akha', '85.00', '90.00', 50, 'basmatiakha.jpg ', '', '2020-12-05 13:13:29'),
(64, 'Wada Kolam', '58.00', '69.00', 50, 'wadakolam.jpg ', '', '2020-12-05 13:13:29'),
(65, 'Tata Salt 1kg', '21.00', '21.00', 50, 'tatasalt.jpg', '', '2020-12-05 13:15:31'),
(66, 'Tata Salt Lite 1kg', '40.00', '40.00', 50, 'tatasaltlite.jpg ', '', '2020-12-05 13:15:31'),
(67, 'Sugar', '40.00', '42.00', 50, 'sugar.jpg', '', '2020-12-05 13:15:31'),
(68, 'Akha Jagger', '65.00', '70.00', 50, 'akhajaggery.jpg ', '', '2020-12-05 13:15:31'),
(69, 'Cinthol', '10.00', '10.00', 50, 'cinthol.jpg', '', '2020-12-05 13:21:01'),
(70, 'Dettol Soap 5 piece(Buy 4 get ', '200.00', '210.00', 50, 'dettol.jpg ', '', '2020-12-05 13:21:01'),
(71, 'Lifebuoy Soap(Buy 3 get 1 Free', '84.00', '85.00', 50, 'lifeboy.jpg', '', '2020-12-05 13:21:01'),
(72, 'Medimix', '10.00', '10.00', 50, 'medimix.jpg ', '', '2020-12-05 13:21:01'),
(73, 'Chings Manchow Soup 15g', '10.00', '10.00', 50, 'soup15g.jpg', '', '2020-12-05 13:20:00'),
(74, 'Vim', '10.00', '10.00', 50, 'vim.jpg', '', '2020-12-05 13:58:06'),
(75, 'Vim liquid', '20.00', '20.00', 50, 'vimliquid.jpg', '', '2020-12-05 13:58:06'),
(76, 'Vim Dishwash Bar(3*200g)', '45.00', '45.00', 50, 'vimdishwash.png', '', '2020-12-05 13:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `cereals`
--

CREATE TABLE `cereals` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cereals`
--

INSERT INTO `cereals` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Quaker Oats 1.5kg', '', '240.00', '250.00', 50, 'quakeroats1.5kg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Lizol', ' ', '93.00', '93.00', 50, 'lizol.jpg'),
(2, 'Harpic', ' ', '98.00', '98.00', 50, 'harpic.jpg'),
(3, 'Pitambari 200g', '', '50.00', '50.00', 50, 'pitambari.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Sindhi Papad Big Size 1kg', ' ', '320.00', '330.00', 50, 'sindhipapadbigsize.jpeg'),
(2, 'Sindhi Papad Small Size 1kg', ' ', '240.00', '255.00', 50, 'sindhipapadsmallsize.jpg '),
(3, 'Sindhi Amritsari Papad', '', '340.00', '360.00', 50, 'sindhiamritsaripapad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cookingoil`
--

CREATE TABLE `cookingoil` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cookingoil`
--

INSERT INTO `cookingoil` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Fortune', ' ', '135.00', '145.00', 50, 'fortune.jpg '),
(2, 'Sunday Oil', ' ', '135.00', '145.00', 50, 'sundayoil.webp '),
(3, 'Saffola Gold', ' ', '142.00', '145.00', 50, 'saffolagold.jpg '),
(4, 'Palmolein Oil', ' ', '104.00', '106.00', 50, 'palmoleinoil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dal`
--

CREATE TABLE `dal` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dal`
--

INSERT INTO `dal` (`id`, `name`, `price`, `rrp`, `quantity`, `img`) VALUES
(9, 'Chana Dal', '80.00', '85.00', 50, 'chana.JPG'),
(10, 'Moong Dal Chilti', '120.00', '125.00', 50, 'moongakha.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `detergent`
--

CREATE TABLE `detergent` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detergent`
--

INSERT INTO `detergent` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Tide 1kg', ' ', '58.00', '60.00', 50, 'tidered.jpg'),
(2, 'Tide 1kg', ' ', '108.00', '110.00', 50, 'tide.jpg'),
(3, 'Surf Excel 1kg', '', '116.00', '118.00', 50, 'surfexcel.jpg'),
(4, 'Rin', '', '10.00', '10.00', 50, 'rin.jpg '),
(20, 'Tide 1kg', '', '58.00', '60.00', 50, 'tidered.jpg'),
(21, 'Tide 1kg', '', '108.00', '110.00', 50, 'tide.jpg'),
(22, 'Surf Excel 1kg', '', '116.00', '118.00', 50, 'surfexcel.jpg'),
(23, 'Rin', '', '10.00', '10.00', 50, 'rin.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `flours`
--

CREATE TABLE `flours` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flours`
--

INSERT INTO `flours` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Lokwan Atta', ' ', '40.00', '42.00', 100, 'flour.jpg '),
(2, 'M.P.Sihore Atta', ' ', '42.00', '44.00', 100, 'flour.jpg '),
(3, 'Special M.P.Sihore', ' ', '44.00', '46.00', 100, 'flour.jpg '),
(4, 'P.C. Sihore', ' ', '46.00', '48.00', 100, 'flour.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `hair`
--

CREATE TABLE `hair` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hair`
--

INSERT INTO `hair` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Parachute Cononut Oil 1L', ' ', '370.00', '380.00', 50, 'parachutecoconutoil1L.jpg'),
(2, 'Parachute Cononut Oil 600ml', ' ', '220.00', '225.00', 50, 'oil600ml.jpg '),
(3, 'Parachute Cononut Oil 250ml', '', '93.00', '100.00', 50, 'oil600ml.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Kissan Mixed Fruit Jam 500g', ' ', '210.00', '215.00', 50, 'kissanmixedjam700g.jpg'),
(2, 'Kissan Mixed Fruit Jam 200g', ' ', '40.00', '40.00', 50, 'kissanmixedfruit200g.jpg '),
(3, 'Funfood Mayonnaise', '', '35.00', '35.00', 50, 'funfoodmayonnaise.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ketchup`
--

CREATE TABLE `ketchup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ketchup`
--

INSERT INTO `ketchup` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Chings Schezwan Chutney 600g', ' ', '150.00', '155.00', 10, 'chingssehezwanchutney600g.jpeg '),
(2, 'Kissan Ketchup 450g', ' ', '50.00', '50.00', 50, 'kissanketchup450g.jpg '),
(3, 'Tomato Ketchup 90g', ' ', '15.00', '15.00', 50, 'tomatoketcgup90g.jpg '),
(4, 'Red Chilli Sauce 200g', ' ', '52.00', '55.00', 50, 'redchillisauce250g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `masala`
--

CREATE TABLE `masala` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masala`
--

INSERT INTO `masala` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Dhaniya powder 250g', ' ', '55.00', '58.00', 50, 'dhaniyapowder.jpg'),
(2, 'Haldi Powder 250g', ' ', '70.00', '75.00', 50, 'haldipowder.jpg '),
(3, 'Everest Pav Bhaji', '', '10.00', '10.00', 50, 'everest.jpg'),
(4, 'Everest Shahi Biryani Masala', '', '10.00', '10.00', 50, 'shahibiryanimasala.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `mukhvas`
--

CREATE TABLE `mukhvas` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mukhvas`
--

INSERT INTO `mukhvas` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Badi Shep 1kg', '', '10.00', '10.00', 50, 'badishep1kg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `oral`
--

CREATE TABLE `oral` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oral`
--

INSERT INTO `oral` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Colgate 500gm', ' ', '215.00', '220.00', 50, 'colgate500gm.jpg'),
(2, 'Colgate 100gm', ' ', '52.00', '52.00', 50, 'colgate100gm.png'),
(3, 'Parachute Cononut Oil 250ml', '', '93.00', '100.00', 50, 'colgate100gm.png');

-- --------------------------------------------------------

--
-- Table structure for table `pasta`
--

CREATE TABLE `pasta` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pasta`
--

INSERT INTO `pasta` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Chings Hakka Noodles 150g', ' ', '30.00', '30.00', 50, 'chingshaakanoodles150g.jpg'),
(2, 'Maggie 4 pack', ' ', '46.00', '46.00', 50, 'maggie.jpg '),
(3, 'Maggi Chhese Pazzta Macaroni 70g', '', '25.00', '25.00', 50, 'maggiecheesepasta.jpg'),
(4, 'Maggie Veg Atta Noodles 20g', '', '86.00', '86.00', 50, 'maggievegaatanoodles.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Santoor Handwash 750ml', ' ', '99.00', '99.00', 50, 'santoorhandwash750ml.jpg'),
(2, 'Dettol Hand Wash 750ml', ' ', '105.00', '105.00', 50, 'dettolhandwash750ml.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pickle`
--

CREATE TABLE `pickle` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pickle`
--

INSERT INTO `pickle` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Rambandhu Sweet Lime Pickle 200g', ' ', '45.00', '50.00', 50, 'rambandhusweetlime.png'),
(2, 'Rambandhu Chilli Pickle 200g', ' ', '45.00', '50.00', 50, 'rambanduchilli.jpg '),
(3, 'Rambandhu Lime Pickle 500g', '', '80.00', '90.00', 50, 'rambandhulime.jpg'),
(4, 'Rambandhu Mango Pickle 500g', '', '80.00', '90.00', 50, 'rambandumango.png');

-- --------------------------------------------------------

--
-- Table structure for table `pulses`
--

CREATE TABLE `pulses` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pulses`
--

INSERT INTO `pulses` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Chawli', ' ', '100.00', '105.00', 50, 'chawli.jpg'),
(2, 'Soyawadi', ' ', '140.00', '145.00', 50, 'soyawadi.jfif '),
(3, 'Kabuli Channa', ' ', '100.00', '105.00', 50, 'kabulichana.jpg '),
(4, 'Small Chana', ' ', '80.00', '90.00', 50, 'smallchana.png ');

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Steam Kolam', ' ', '40.00', '45.00', 10, 'steamkolamrice.jpg'),
(2, 'Basmati Tukda', ' ', '42.00', '45.00', 50, 'basmatitukdarice.jpg '),
(3, 'Basmati Akha', ' ', '85.00', '90.00', 50, 'basmatiakha.jpg '),
(4, 'Wada Kolam', ' ', '58.00', '69.00', 50, 'wadakolam.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `salt`
--

CREATE TABLE `salt` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salt`
--

INSERT INTO `salt` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Tata Salt 1kg', ' ', '21.00', '21.00', 50, 'tatasalt.jpg'),
(2, 'Tata Salt Lite 1kg', ' ', '40.00', '40.00', 50, 'tatasaltlite.jpg '),
(3, 'Sugar', '', '40.00', '42.00', 50, 'sugar.jpg'),
(4, 'Akha Jagger', '', '65.00', '70.00', 50, 'akhajaggery.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `skin`
--

CREATE TABLE `skin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skin`
--

INSERT INTO `skin` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Cinthol', ' ', '10.00', '10.00', 50, 'cinthol.jpg'),
(2, 'Dettol Soap 5 piece(Buy 4 get 1 Free)', ' ', '200.00', '210.00', 50, 'dettol.jpg '),
(3, 'Lifebuoy Soap(Buy 3 get 1 Free)', '', '84.00', '85.00', 50, 'lifeboy.jpg'),
(4, 'Medimix', '', '10.00', '10.00', 50, 'medimix.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `soup`
--

CREATE TABLE `soup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soup`
--

INSERT INTO `soup` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Chings Manchow Soup 15g', '', '10.00', '10.00', 50, 'chingsmanchow15g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `mobile`, `address`) VALUES
(1, '$name', '$password', '$email', '0', ''),
(2, 'lavina', '123456', 'laveenapunjabi10@gmail.com', '1234567890', 'abcd'),
(3, 'lavi', '123456', 'laveenapunjabi10@gmail.com', '1234567890', 'abcd'),
(4, 'Laveena', '123456789', 'laveenapunjabi10@gmail.com', '1234567890', 'abcd'),
(5, 'navin', 'navin@123', 'anish@gmail.com', '1234567890', ''),
(6, 'bhavesh', 'bhavesh10', 'bhavesh@gmail.com', '1234567890', ''),
(7, 'anish', 'anish@123', 'anish@gmail.com', '9896598567', 'Flat no 2, 2nd floor');

-- --------------------------------------------------------

--
-- Table structure for table `utensil`
--

CREATE TABLE `utensil` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utensil`
--

INSERT INTO `utensil` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Vim', ' ', '10.00', '10.00', 50, 'vim.jpg'),
(2, 'Vim liquid', ' ', '20.00', '20.00', 50, 'vimliquid.jpg'),
(3, 'Vim Dishwash Bar(3*200g)', '', '45.00', '45.00', 50, 'vimdishwash.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cereals`
--
ALTER TABLE `cereals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookingoil`
--
ALTER TABLE `cookingoil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dal`
--
ALTER TABLE `dal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detergent`
--
ALTER TABLE `detergent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flours`
--
ALTER TABLE `flours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hair`
--
ALTER TABLE `hair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketchup`
--
ALTER TABLE `ketchup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masala`
--
ALTER TABLE `masala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mukhvas`
--
ALTER TABLE `mukhvas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oral`
--
ALTER TABLE `oral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasta`
--
ALTER TABLE `pasta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickle`
--
ALTER TABLE `pickle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pulses`
--
ALTER TABLE `pulses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salt`
--
ALTER TABLE `salt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soup`
--
ALTER TABLE `soup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utensil`
--
ALTER TABLE `utensil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cereals`
--
ALTER TABLE `cereals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cleaner`
--
ALTER TABLE `cleaner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cookingoil`
--
ALTER TABLE `cookingoil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dal`
--
ALTER TABLE `dal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detergent`
--
ALTER TABLE `detergent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `flours`
--
ALTER TABLE `flours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hair`
--
ALTER TABLE `hair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ketchup`
--
ALTER TABLE `ketchup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `masala`
--
ALTER TABLE `masala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mukhvas`
--
ALTER TABLE `mukhvas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oral`
--
ALTER TABLE `oral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pasta`
--
ALTER TABLE `pasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pickle`
--
ALTER TABLE `pickle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pulses`
--
ALTER TABLE `pulses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salt`
--
ALTER TABLE `salt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skin`
--
ALTER TABLE `skin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `soup`
--
ALTER TABLE `soup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utensil`
--
ALTER TABLE `utensil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
