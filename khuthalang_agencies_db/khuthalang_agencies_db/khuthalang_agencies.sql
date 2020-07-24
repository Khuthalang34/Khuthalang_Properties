-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2019 at 01:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

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
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Property_Title` varchar(300) NOT NULL,
  `Property_Description` varchar(1000) NOT NULL,
  `Type` varchar(300) NOT NULL,
  `Status` varchar(300) NOT NULL,
  `Suburb` varchar(300) NOT NULL,
  `Bedrooms` int(255) NOT NULL,
  `Bathrooms` int(255) NOT NULL,
  `Property_ID` int(255) NOT NULL,
  `Garages` int(255) NOT NULL,
  `Sale_or_Rent_Price` int(255) NOT NULL,
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
  `State` varchar(300) NOT NULL,
  `Zip_Postal_Code` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`ID`, `Property_Title`, `Property_Description`, `Type`, `Status`, `Suburb`, `Bedrooms`, `Bathrooms`, `Property_ID`, `Garages`, `Sale_or_Rent_Price`, `Deposit_Price`, `Property_Features`, `Property_Gallery_1`, `Property_Gallery_2`, `Property_Gallery_3`, `Property_Gallery_4`, `Property_Gallery_5`, `Address`, `Country`, `City`, `State`, `Zip_Postal_Code`) VALUES
(7, 'House In Elsies River', 'In the heart of the Garden Route the world-renowned town of Knysna showcases exquisite residential areas and Thesen Islands is certainly one of them. This multi-award-winning marina development located in the impressive picturesque Knysna estuary is surrounded by 25ha of tidal waterways. This expansive home enjoys uncomplicated sophistication with seamless living spaces as well as multiple entertainment areas which capitalise of the tranquil surrounds. \r\n\r\nPrivately positioned on the quiet outer canal and on one of the largest stands of Thesen Islands, this home is truly one-of-a-kind and a place where many everlasting special memories are created. \r\nA grand entrance complete with koi pond and lush vegetation gives way to a haven of space and tranquillity in this large, beach styled home. ', 'House', 'Sale', 'Southern Suburbs', 3, 3, 51290, 1, 200000, 25000, 'Pool,Wifi,Laundry,Balcony', 'property_images/5av1.jpg', 'property_images/5av2.jpg', 'property_images/5av3.jpg', 'property_images/5av4.jpg', 'property_images/5av5.jpg', '48 Consani Road, Elsies River', 'South Africa', 'Cape Town', 'Western Cape', 7251),
(6, 'House For Rent', 'The manor house is split into two levels and two different houses. On the ground floor you have 4 bedrooms, 2 bathrooms, 2 lounges, a bar, lounge and kitchen and on top, there are 3 bedrooms, one bathroom, an open plan kitchen/ lounge/ dining room. The house upstairs has got access with a staircase on the outside of the house. The worker\'s cottages each have electricity meters and bathrooms. ', 'House', 'Rent', 'Southern Suburbs', 2, 1, 51291, 1, 10500, 2500, 'Pool,Wifi,Laundry,Balcony', 'property_images/amy-large.jpg', 'property_images/amy3.jpg', 'property_images/amy4.jpg', 'property_images/amy5.jpg', 'property_images/amy2.jpg', '50 Consani Road, Elsies River', 'South Africa', 'Cape Town', 'Western Cape', 7251),
(8, 'Petersham Town', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur.\r\n\r\nDuis aute irure dolor in reprehenderit in volupte velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum sed ut perspiciatis', 'Appartment', 'Rent', 'Cape Flats', 2, 1, 51293, 0, 2500, 1500, 'Spacious Space, Garden, Pool, Balcony', 'property_images/lamer5.jpg', 'property_images/lamer4.jpg', 'property_images/lamer3.jpg', 'property_images/lamer2.jpg', 'property_images/lamer1.jpg', '19930 Lumka Street, Khayelitsha', 'South Africa', 'Cape Town', 'Western Cape', 7430);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
