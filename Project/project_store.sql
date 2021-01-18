-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2020 at 09:25 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `porder`
--

DROP TABLE IF EXISTS `porder`;
CREATE TABLE IF NOT EXISTS `porder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `order_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porder`
--

INSERT INTO `porder` (`id`, `id_user`, `price`, `quantity`, `status`, `order_date`) VALUES
(39, 14, 448.21, 1, 'Delivered', '2020-12-15'),
(2, 6, 10, 1, 'Delivered', '2008-12-20'),
(3, 6, 10, 1, 'Canceled', '2008-12-20'),
(38, 13, 378, 1, 'Ordered', '2020-12-15'),
(37, 13, 55, 1, 'Ordered', '2020-12-15'),
(36, 13, 3846, 1, 'Delivered', '2020-12-15'),
(35, 11, 678, 2, 'Delivered', '2020-12-15'),
(34, 11, 851, 1, 'Delivered', '2020-12-15'),
(30, 6, 837, 1, 'Ordered', '2020-12-14'),
(29, 6, 310.52, 1, 'Delivered', '2014-12-20'),
(28, 6, 70, 3, 'Ordered', '2014-12-20'),
(27, 6, 10, 1, 'Canceled', '2008-12-20'),
(26, 6, 60, 6, 'Delivered', '2008-12-20'),
(25, 6, 10, 1, 'Delivered', '2008-12-20'),
(24, 6, 50, 1, 'Delivered', '2008-12-20'),
(40, 15, 50.5, 1, 'Ordered', '2020-12-15'),
(41, 6, 55, 1, 'Ordered', '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `price` double(10,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_category` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `category_id`, `description`) VALUES
(7, 'Dry Erase Set', 'glue.jpg', 55.00, 2, 'Bright, vivid, nontoxic ink is quick drying, smear proof, easy to see from a distance, and provides consistent color quality\r\nDurable, fine point tip for thin, detailed lines\r\nErases cleanly and easily with a dry cloth or Expo eraser\r\nInk is specially formulated to be low odor. Perfect for use in classrooms, small offices, and homes\r\nMade in the USA'),
(25, 'Printer Cart Ridge Black', 'cartridge.jpg', 50.50, 2, 'Printer Cart Ridge suitable for HP printers. Color black.'),
(27, 'Smart Watch', 'smartwatch.jpg', 850.00, 5, 'Smart watch, color black'),
(28, 'Birthday Card', 'birthdaycard.jpg', 10.00, 10, 'Hand made birthday card'),
(12, 'Humans Hardcover', 'humans.jpg', 116.00, 9, 'Brandon Stanton created Humans of New York in 2010. What began as a photographic census of life in New York City, soon evolved into a storytelling phenomenon. A global audience of millions began following HONY daily. Over the next several years, Stanton broadened his lens to include people from across the world.'),
(15, 'Apple IPad Air 64 GB', 'ipad.jpg', 3846.00, 5, 'Stunning 10.9-inch Liquid Retina display with True Tone and P3 wide color\r\nA14 Bionic chip with Neural Engine\r\nTouch ID for secure authentication and Apple Pay\r\n12MP back camera, 7MP FaceTime HD front camera\r\nAvailable in Silver, Space Gray, Rose Gold, Green, and Sky Blue\r\nWide stereo audio\r\nWi-Fi 6 (802.11ax) and Gigabit-class LTE cellular data\r\nUp to 10 hours of battery life\r\nUSB-C connector for charging and accessories\r\nSupport for Magic Keyboard, Smart Keyboard Folio, and Apple Pencil (2nd generation)'),
(14, 'Greenlights Hardcover', 'greenlights.jpg', 157.00, 9, 'NEW YORK TIMES BESTSELLER\r\nFrom the Academy Award winning actor, an unconventional memoir filled with raucous stories, outlaw wisdom, and lessons learned the hard way about living with greater satisfaction'),
(16, '2020 Apple IPad 28GB', 'ipad2020.jpg', 2874.00, 5, '2020 Apple iPad 8th Gen 32/128GB Wifi Latest Model\r\n'),
(17, 'Height Stools', 'furniture1.jpg', 851.00, 3, 'Materials include fabric and wood\r\nProduced by Roundhill Furniture'),
(18, 'Costway 4 PCS Patio Furniture', 'furniture2.jpg', 837.00, 3, 'Including 1 Loveseat, 2 Single Sofas And 1 Tea Table With Glass Top\r\n'),
(19, 'Flowerbomb By Viktor & Rolf For Women', 'perfume1.jpg', 628.00, 7, 'An explosive bouquet of fresh and sweet notes arrives with perfume Flower bomb, designed by Olivier Poleg, Carlos Benaim and Domitille Berthier\r\nThis product is firm hold and natural finish\r\nRecommended for casual wear\r\nNote: The promo code is not available on the product packaging if purchased Online.\r\nGreat for romantic and social settings; full-bodied and opulent\r\nFeatures hints of freesia, Centifolia rose, osmanthus and Sambac jasmine, supported by a background of patchouli\r\nThis item is not for sale in Catalina Island'),
(20, 'Dolce&Gabbana LIGHT BLUE 3 ', 'perfume2.jpg', 378.00, 7, '3.3oz EDT Spray, 10ml EDT Spray, 2.5oz Body Cream\r\nNumber of items: 1.0\r\nPackage Dimensions: 7.62 L x 25.4 H x 21.59 W (centimeters)\r\nManufacturer: Dolce&Gabbana LIGHT BLUE GIFT SET'),
(21, ' Cordless Dustbuster Handheld Vacuum', 'dustbuster.jpg', 310.52, 4, 'Lithium Ion for long battery life and outstanding performance; Always ready holds a charge for upto 18 months\r\nLong life, Lightweight, and no memory effect.Suction Power 15.2 AW; Dustbowl Capacity: 20.6 ounces\r\nSmart Charge Technology uses upto 50 percent less energy,air Watts: 15.2 Watts, Voltage: 16V MAX\r\nCyclonic action helps to keep the filter clean and power strong, translucent bagless dirt bowl easy to see dirt and empty\r\nRotating slim nozzle for a variety of applications, removable, washable bowl and filters for thorough cleaning'),
(22, 'Koolaburra By UGG Women', 'ugg.jpg', 448.00, 6, 'Suede\r\nImported\r\nRubber sole\r\nShaft measures approximately 7\" from arch\r\nHeel measures approximately 0.75\"\r\nPlatform measures approximately 0.5 inches\r\nBoot opening measures approximately 12\" around\r\nSheepskin and faux fur lining'),
(23, 'Vintage Utility Storage Shelf ', 'shelf.jpg', 448.21, 8, '3-Tier Ample Storage: size (35.5W * 15.75 D * 32.67H)inch, the kitchen shelf has massive space. The top shelf can hold a microwave oven and other kitchen appliances. Two tiers on the left and three tiers on right can store toaster, spice, dishes, and any other things you want. 10 little hooks on the sides make it convenient to hang some cooking tools.\r\nMultipurpose Kitchen Shelf: this kitchen storage shelf protects your health and safety. It is a great choice to be your kitchen storage shelf, Microwave Stand, Baker\'s Rack, Spice Rack Organizer and kitchen island.\r\nSolid & Sturdy Construction: the kitchen standing shelf is constructed by high-quality P2 MDF Vintage Board and Black Metal Frame. The metal frame offers a large weight capacity.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(2, 'Office Products'),
(3, 'Furniture'),
(4, 'Tools & Home Improvements'),
(5, 'Electronics'),
(6, 'Shoes'),
(7, 'Perfumes & Fragrances'),
(8, 'Kitchen & Dining Room'),
(9, 'Books'),
(10, 'Cards'),
(11, 'Clothing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `user_password`, `user_type`) VALUES
(6, 'Andreia Fratila', 'andreiafratila7@gmail.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(7, 'Ana Maria', 'ana@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Admin'),
(8, 'Ana Popescu', 'anapopescu@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(9, 'Minhai Popescu', 'mihaipopescu@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(10, 'Alin Mihai', 'alinmihai@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(11, 'Ana Marin', 'anamarin@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(12, 'Admin User', 'admin@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Admin'),
(13, 'Maria Pop', 'mariapop@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(14, 'Andrei Pop', 'andreipop@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(15, 'Daniel Marian', 'danielmarian@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client'),
(16, 'Diana Alin', 'dianaalin@email.com', '8287458823facb8ff918dbfabcd22ccb', 'Client');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
