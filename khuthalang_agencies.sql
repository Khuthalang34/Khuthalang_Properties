-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 03:48 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khuthalang_agencies`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
CREATE TABLE `agents` (
  `Agent_ID` int(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Statistics` int(3) NOT NULL,
  `Contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`Agent_ID`, `Name`, `Surname`, `Type`, `Statistics`, `Contact`) VALUES
(1257, 'Adam', 'Gallant', 'Buying Agent', 0, 'agallant@gmail.com'),
(1359, 'Brian', 'Johnson', 'Buying Agent', 0, 'johnb@gmail.com'),
(1586, 'Ryan', 'Smith', 'Buying Agent', 0, 'buysmith@buy.com'),
(2465, 'Mark', 'Printz', 'Selling Agent', 0, 'maprint@mp.com'),
(2593, 'Khuthalang', 'Jwili', 'Selling Agent', 0, 'info@khuthalang.com'),
(2687, 'Sakhe', 'Zikolo', 'Selling Agent', 0, 'z.sakhe@grav.com');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

DROP TABLE IF EXISTS `buyers`;
CREATE TABLE `buyers` (
  `Buyer_Name` varchar(20) NOT NULL,
  `Buyer_Surname` varchar(20) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `Agent_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`Buyer_Name`, `Buyer_Surname`, `Contact`, `Agent_ID`) VALUES
('Connie', 'Sisnett', 'csisnett0@latimes.com', 0),
('Elberta', 'Rounce', 'erounce1@dailymotion.com', 0),
('West', 'Sewart', 'wsewart2@stumbleupon.com', 0),
('Avrit', 'Phillis', 'aphillis3@so-net.ne.jp', 0),
('Natka', 'Elham', 'nelham4@skyrock.com', 0),
('Shauna', 'Basset', 'sbasset5@com.com', 0),
('Ave', 'Olczyk', 'aolczyk6@army.mil', 0),
('Sigismund', 'Pitrollo', 'spitrollo7@un.org', 0),
('Elvin', 'Twycross', 'etwycross8@epa.gov', 0),
('Agosto', 'Shipsey', 'ashipsey9@phoca.cz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `ID` int(11) NOT NULL,
  `Agent_ID` int(15) NOT NULL,
  `Property_Title` varchar(300) NOT NULL,
  `Property_Description` varchar(1000) NOT NULL,
  `Type` varchar(300) NOT NULL,
  `Status` varchar(300) NOT NULL,
  `Suburb` varchar(300) NOT NULL,
  `Bedrooms` int(255) NOT NULL,
  `Bathrooms` int(255) NOT NULL,
  `Property_ID` int(255) NOT NULL,
  `Garages` int(255) NOT NULL,
  `Sale_Price` int(255) NOT NULL,
  `Deposit_Price` int(255) NOT NULL,
  `Property_Features` varchar(300) NOT NULL,
  `Property_Gallery_1` varchar(300) NOT NULL,
  `Property_Gallery_2` varchar(300) NOT NULL,
  `Property_Gallery_3` varchar(300) NOT NULL,
  `Property_Gallery_4` varchar(300) NOT NULL,
  `Property_Gallery_5` varchar(300) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Country` varchar(300) NOT NULL DEFAULT 'South Africa',
  `City` varchar(300) NOT NULL,
  `Province` varchar(300) NOT NULL,
  `Zip_Postal_Code` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `Agent_ID`, `Property_Title`, `Property_Description`, `Type`, `Status`, `Suburb`, `Bedrooms`, `Bathrooms`, `Property_ID`, `Garages`, `Sale_Price`, `Deposit_Price`, `Property_Features`, `Property_Gallery_1`, `Property_Gallery_2`, `Property_Gallery_3`, `Property_Gallery_4`, `Property_Gallery_5`, `Address`, `Country`, `City`, `Province`, `Zip_Postal_Code`) VALUES
(1, 0, 'House In Parklands North', 'In the heart of Parklands', 'House', 'Sale', 'Parklands', 5, 3, 51290, 1, 2100000, 429000, 'Wifi,Laundry,Balcony', 'property_images/5av1.jpg', 'property_images/5av2.jpg', 'property_images/5av3.jpg', 'property_images/5av4.jpg', 'property_images/5av5.jpg', '20 Woodlands Way, Parklands', 'South Africa', 'Cape Town', 'Western Cape', 7441),
(2, 0, 'House In Litha Park', 'Beautiful house in a much safer location', 'House', 'Sale', 'Khayelitsha', 2, 1, 51291, 1, 851900, 115000, 'Pool,Wifi,Laundry,Balcony', 'property_images/amy-large.jpg', 'property_images/amy3.jpg', 'property_images/amy4.jpg', 'property_images/amy5.jpg', 'property_images/amy2.jpg', '15 Hlobo St, Litha Park, Khayelitsha', 'South Africa', 'Cape Town', 'Western Cape', 7784),
(3, 0, 'House In Parklands North', 'Beautiful landscape and view of the Table Mountain', 'House', 'Sale', 'Parklands', 2, 1, 51292, 0, 1651000, 231000, 'Spacious Space, Garden, Pool, Balcony', 'property_images/lamer5.jpg', 'property_images/lamer4.jpg', 'property_images/lamer3.jpg', 'property_images/lamer2.jpg', 'property_images/lamer1.jpg', '11 Wood Dr, Parklands', 'South Africa', 'Cape Town', 'Western Cape', 7441),
(4, 0, 'House In Litha Park', 'Open space with some beautiful trees for shade in the sun', 'House', 'Sold', 'Khayelitsha', 3, 2, 51293, 0, 899999, 0, 'Spacious', 'property_images/1.jpg', 'property_images/1.1.jpg', 'property_images/1.2.jpg', 'property_images/1.3.jpg', 'property_images/1.3.jpg', '31 Khaya St, Litha Park, Khayelitsha', 'South Africa', 'Cape Town', 'Western Cape', 7784),
(5, 0, 'House In Camps Bay', 'Sitting in the most beautiful lands in Western Cape', 'House', 'Sale', 'Camps Bay', 4, 3, 51294, 2, 6271591, 2000000, 'Spacious', 'property_images/7.jpg', 'property_images/7.1.jpg', 'property_images/7.2.jpg', 'property_images/7.3.jpg', 'property_images/7.3.jpg', '13 Camps Dr, Camps Bay', 'South Africa', 'Cape Town', 'Western Cape', 8155),
(6, 0, 'House In Newlands West', 'One of the most safest locations with amazing views of the city', 'House', 'Sold', 'Newlands', 5, 2, 51295, 1, 2731000, 0, 'WiFi, Balcony, Pool, Garden', 'property_images/5.jpg', 'property_images/5.1.jpg', 'property_images/5.2.jpg', 'property_images/5.3.jpg', 'property_images/5.3.jpg', '71 New Rd, Newlands', 'South Africa', 'Cape Town', 'Western Cape', 6945),
(7, 0, 'House In Parklands South', 'Parklands is one of the most fast growing suburbs in the Cape, with breath taking views.', 'House', 'Sold', 'Parklands', 3, 2, 51296, 1, 1586000, 0, 'WiFi, Pool, Garden, Spacious Space', 'property_images/6.jpg', 'property_images/6.1.jpg', 'property_images/6.2.jpg', 'property_images/6.3.jpg', 'property_images/6.3.jpg', '107 Parklands Main, Parklands', 'South Africa', 'Cape Town', 'Western Cape', 7441),
(8, 0, 'House In Newlands East', 'Amazing landscape with space and less noise.', 'House', 'Sale', 'Newlands', 6, 3, 51297, 2, 2746000, 631500, 'Pool, WiFi, Garden, Spacious Space', 'property_images/4.jpg', 'property_images/4.1.jpg', 'property_images/4.2.jpg', 'property_images/4.3.jpg', 'property_images/4.3.jpg', '22 South Park, Newlands', 'South Africa', 'Cape Town', 'Western Cape', 6945),
(9, 0, 'House In Camps Bay', 'One of the most visited locations in the Cape with beautiful beaches and home to some of South Africas Celebs.', 'House', 'Sold', 'Camps Bay', 4, 2, 51298, 1, 3221000, 0, 'Spacious, WiFi, Garden', 'property_images/3.jpg', 'property_images/3.1.jpg', 'property_images/3.2.jpg', 'property_images/3.3.jpg', 'property_images/3.3.jpg', '03 East Coast, Camps Bay', 'South Africa', 'Cape Town', 'Western Cape', 8155),
(10, 0, 'House In Newlands', 'Breath taking space.', 'House', 'Sold', 'Newlands', 3, 3, 51299, 0, 901000, 0, 'Garden, Spacious', 'property_images/2.jpg', 'property_images/2.1.jpg', 'property_images/2.2.jpg', 'property_images/2.3.jpg', 'property_images/2.3.jpg', '07 Central Point, Newlands', 'South Africa', 'Cape Town', 'Western Cape', 6945);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
CREATE TABLE `sellers` (
  `Seller_Name` varchar(20) NOT NULL,
  `Seller_Surname` varchar(20) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `Agent_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`Seller_Name`, `Seller_Surname`, `Contact`, `Agent_ID`) VALUES
('Gene', 'Easeman', 'geaseman0@miibeian.gov.cn', 0),
('Farly', 'Colbron', 'fcolbron1@slate.com', 0),
('Guillaume', 'Jeskins', 'gjeskins2@domainmarket.com', 0),
('Thaine', 'Fassam', 'tfassam3@cyberchimps.com', 0),
('Bond', 'Polk', 'bpolk4@usnews.com', 0),
('Cyrillus', 'Mayward', 'cmayward5@wp.com', 0),
('Win', 'Stretton', 'wstretton6@hostgator.com', 0),
('Koenraad', 'Guitte', 'kguitte7@chronoengine.com', 0),
('Angelo', 'Risbie', 'arisbie8@goodreads.com', 0),
('Adriano', 'Tokell', 'atokell9@delicious.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`Agent_ID`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
