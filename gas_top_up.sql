-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2018 at 10:49 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_Id` int(50) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Rank` varchar(50) DEFAULT NULL,
  `Station_Id` int(50) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_Id`, `Username`, `Password`, `Rank`, `Station_Id`, `Status`) VALUES
(100100100, 'Love', 'love', 'moderator', 10000001, 'active'),
(100100101, 'nelson', 'nelson', 'moderator', 10000002, 'active'),
(100100103, 'admin', 'admin', 'administrator', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_Id` int(255) NOT NULL COMMENT 'Just a unique id for each chat.',
  `Sender_Name` varchar(50) DEFAULT NULL COMMENT 'Sender of the contact message',
  `Sender_Email` varchar(50) DEFAULT NULL COMMENT 'Email address of the sender.',
  `Contact_Message` longtext COMMENT 'Body of the contact us.',
  `Attended_To` varchar(10) DEFAULT NULL COMMENT 'If it is already attended to or not. (Yes or No)',
  `Contact_Date` varchar(20) DEFAULT NULL COMMENT 'The date the message was sent.',
  `Contact_Time` varchar(20) DEFAULT NULL COMMENT 'The time the message was sent.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gas_stations`
--

CREATE TABLE `gas_stations` (
  `Station_Id` int(50) NOT NULL,
  `Station_Name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Name of the gas station.',
  `Station_Address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Location of the gas station.',
  `Station_Phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Phone number that can be used to reach the gas station',
  `Station_Email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Email address of the gas station',
  `Image_Path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Station_Lattitude` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Station_Longitude` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Station_Website` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Website of the gas station',
  `Short_Description` longtext COLLATE utf8mb4_unicode_ci COMMENT 'A short description of the gas station',
  `Date_Added` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The date the gas station was added to the database'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gas_stations`
--

INSERT INTO `gas_stations` (`Station_Id`, `Station_Name`, `Station_Address`, `Station_Phone`, `Station_Email`, `Image_Path`, `Station_Lattitude`, `Station_Longitude`, `Station_Website`, `Short_Description`, `Date_Added`) VALUES
(10000001, 'CAROL OIL', 'Amaranta', '08100000003', 'caroloil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.caroloiloil.com', 'We sell quality oil.', '22/03/2018'),
(10000002, 'SOBAZA OIL', 'Ekeki', '08033659862', 'sobazaoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.sobazaoil.com', 'We are known for quality oil', '21/03/2018'),
(10000003, 'DE ARIZONA', 'Yenezue-Gene', '08032659632', 'arizonaloil@yahoo.com', NULL, '4.9095712', '6.2938354', 'http://www.arizonaloil.com', 'No description', '28/03/2018'),
(10000004, 'IDO-OIL NIG LTD', 'Biogbolo', '09055622354', 'idooil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.rainoil.com', 'No description', '24/03/2018'),
(10000005, 'UNLESSGOD NIG LTD', 'BIOGBOLO', '08055665552', 'unlessgodnig@yahoo.com', NULL, '4.9095712', '6.2938354', 'http://www.unlessgodnig.com', NULL, NULL),
(10000006, 'NNPC', 'Biogbolo', '08100201003', 'nnpc@gmail.com', 'img/gas_station_images/nnpc_station.jpg', '4.9095712', '6.2938354', 'http://www.nnpc.com', 'No Description', '22/03/2018'),
(10000007, 'TAMIC NIG LTD', 'Biogbolo', '08033659862', 'tamicoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.tamicoil.com', 'We are known for quality oil', '21/03/2018'),
(10000008, 'JOVERO OIL', 'Biogbolo', '07051236525', 'joverooil@yahoo.com', NULL, '4.9095712', '6.2938354', 'http://www.joverooil.com', 'No description', '28/03/2018'),
(10000009, 'NNPC', 'Opolo', '09055620544', 'nnpc@gmail.com', 'img/gas_station_images/nnpc_station.jpg', '4.9095712', '6.2938354', 'http://www.nnpc.com', 'No description', '24/03/2018'),
(10000010, 'TADERHIA OIL', 'Opolo', '08033105522', 'taderhiaoilandgas@yahoo.com', NULL, '4.9095712', '6.2938354', 'http://www.taderhiaoil.com', NULL, NULL),
(10000011, 'PEREZI PETROLEUM LTD', 'Opolo', '08012505522', 'perezioil@yahoo.com', NULL, '4.9095712', '6.2938354', 'http://www.perezioil.com', NULL, NULL),
(10000012, 'EBI ENGRIN AND SONS LTD', 'Opolo', '07022659635', 'ebiandsonsoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.ebiandsonsoil.com', NULL, NULL),
(10000013, 'SOUTH-SOUTH OIL AND GAS', 'Etekwie', '09055623621', 'southsouthoilandgas@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.southsouthoil.com', NULL, NULL),
(10000014, 'TIMIKON PETROLEUM', 'Etekwie', '08024415798', 'timikonoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.timikonoil.com', NULL, NULL),
(10000015, 'WATGOPE PETROLEUM', 'Etekwie', '08082222458', 'watgopepetroleum@hotmail.com', NULL, '4.9095712', '6.2938354', 'http://www.watgopepetroleum.com', NULL, NULL),
(10000016, 'PATCY OIL NIG LTD', 'Etekwie', '07055696662', 'patcyoil@hotmail.com', NULL, '4.9095712', '6.2938354', 'http://www.patcyoil.com', NULL, NULL),
(10000017, 'KOBISON OIL', 'Panshia', '09033625652', 'kobisonoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.kobisonoil.com', NULL, NULL),
(10000018, 'KOFABEN INT LTD', 'Panshia', '08136592365', 'kofabenltd@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.kofabenltd.com', NULL, NULL),
(10000019, 'NNPC', 'Begger', '07025223521', 'nnpc@gmail.com', 'img/gas_station_images/nnpc_station.jpg', '4.9095712', '6.2938354', 'http://www.nnpc.com', NULL, NULL),
(10000020, 'GENOTEX OIL', 'Swali', '07023569562', 'genotexltd@yahoo.com', NULL, '4.9095712', '6.2938354', 'http://genotexoil.com', NULL, NULL),
(10000021, 'MACARY NIG LTD', 'Agudama-Edepie', '08023565232', 'macaryoil@yahoo.com', NULL, '4.9095712', '6.2938354', 'http://macaryoil.com', NULL, NULL),
(10000022, 'SKY MINT ENERGY LIMITED', 'Agudama-Edepie', '08075125666', 'skymintenergy@gmail.com', NULL, '4.9095712', '6.2938354', 'http://skymintenergy.com', NULL, NULL),
(10000023, 'EMITARY OIL AND GAS', 'Agudama-Edepie', '08066523365', 'emitaryoilandgas@gmail.com', NULL, '4.9095712', '6.2938354', 'http://emitaryoil.com', NULL, NULL),
(10000024, 'TONIMAS OIL AND GAS', 'Agudama-Edepie', '09024525581', 'tonimasoilandgas@gmail.com', NULL, '4.9095712', '6.2938354', 'http://tonimasoil.com', NULL, NULL),
(10000025, 'NUN RIVER PETROLEUM SERVICE', 'Agudama-Edepie', '09022104547', 'nunriveroil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://nunriveroil.com', NULL, NULL),
(10000026, 'NNPC', 'Tombia', '08022545565', 'nnpc@gmail.com', 'img/gas_station_images/nnpc_station.jpg', '4.9095712', '6.2938354', 'http://nnpc.com', NULL, NULL),
(10000027, 'UNLESSGOD OIL NIG LTDNNPC', 'Tombia', '08066623565', 'unlessgodoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://unlessgodoil.com', NULL, NULL),
(10000028, 'SNOW WHITE ENERGY', 'Akenfa', '08055221020', 'snowwhiteoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://snowwhiteoil.com', NULL, NULL),
(10000029, 'NNPC', 'Akenfa', '08100201003', 'nnpc@gmail.com', 'img/gas_station_images/nnpc_station.jpg', '4.9095712', '6.2938354', 'http://www.nnpc.com', 'No Description', '22/03/2018'),
(10000030, 'SOBAZA OIL', 'Akenfa', '08033659862', 'sobazaoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.sobazaoil.com', 'We are known for quality oil', '21/03/2018'),
(10000031, 'BENEPIES OIL', 'Akenfa', '08155642202', 'benepiesoil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.benepiesoil.com', 'We provide quality cloudfri_products for you engines', '21/03/2018'),
(10000032, 'BARBIZON NIG LTD', 'Akenfa', '08164458692', 'barizonnig@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.barizonnig.com', '', '21/03/2018'),
(10000033, 'TOTAL', 'YENIGWE', '08165985622', 'totalgas@gmail.com', 'img/gas_station_images/total_station.jpg', '4.9095712', '6.2938354', 'http://www.totalgas.com', '', '21/03/2018'),
(10000034, 'MOBIL', 'YENIGWE', '08165985622', 'mobiloil@gmail.com', NULL, '4.9095712', '6.2938354', 'http://www.mobiloil.com', '', '21/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` int(50) NOT NULL COMMENT 'The Unique Id for each product.',
  `Product_Generic_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The general name people know the product.',
  `Product_Standard_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'A standard name for the product (if any). For example the standard name for fuel is AGO.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Id`, `Product_Generic_Name`, `Product_Standard_Name`) VALUES
(22222200, 'FUEL', 'AGO'),
(22222201, 'KEROSENE', 'DPK'),
(22222202, 'DIESEL', 'DIESEL'),
(22222203, 'GAS', 'GAS');

-- --------------------------------------------------------

--
-- Table structure for table `product_availability`
--

CREATE TABLE `product_availability` (
  `Id` int(50) NOT NULL,
  `Station_Id` int(50) DEFAULT NULL COMMENT 'The Station Id from the gas_station table',
  `Product_Id` int(50) DEFAULT NULL COMMENT 'The Product_Id from the cloudfri_products table.',
  `Product_Status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Either Available or Not_Available',
  `Price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The price of the product.',
  `Date_Added` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The date this information was updated.',
  `Time_Added` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'The time this information was updated.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_availability`
--

INSERT INTO `product_availability` (`Id`, `Station_Id`, `Product_Id`, `Product_Status`, `Price`, `Date_Added`, `Time_Added`) VALUES
(1, 10000001, 22222200, 'not_available', '400', 'Sat 01 - 09 - 2018', '8:21:04 PM'),
(2, 10000001, 22222201, 'available', '55.223', 'Thu 26 - 04 - 2018', '10:45:25 PM'),
(3, 10000003, 22222201, 'available', '350.56666', 'Fri 27 - 04 - 2018', '-1:26:49 AM'),
(4, 10000001, 22222202, 'available', '400.22', 'Sun 01 - 04 - 2018', '2:12:38 AM'),
(5, 10000002, 22222200, 'available', '5506.00', 'Sat 31 - 03 - 2018', '6:49:49 AM'),
(10, 10000003, 22222203, 'available', '200.32', 'Fri 27 - 04 - 2018', '-1:27:42 AM'),
(11, 10000004, 22222202, 'available', '100.20', 'Fri 27 - 04 - 2018', '-1:28:12 AM'),
(12, 10000006, 22222201, 'available', '800.00', 'Fri 27 - 04 - 2018', '-1:28:59 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_Id`),
  ADD KEY `Station_Id` (`Station_Id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_Id`);

--
-- Indexes for table `gas_stations`
--
ALTER TABLE `gas_stations`
  ADD PRIMARY KEY (`Station_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `product_availability`
--
ALTER TABLE `product_availability`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `cloudfri_product_availability` (`Station_Id`),
  ADD KEY `Product_Id` (`Product_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `User_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100100104;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_Id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Just a unique id for each chat.';
--
-- AUTO_INCREMENT for table `gas_stations`
--
ALTER TABLE `gas_stations`
  MODIFY `Station_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000035;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` int(50) NOT NULL AUTO_INCREMENT COMMENT 'The Unique Id for each product.', AUTO_INCREMENT=22222204;
--
-- AUTO_INCREMENT for table `product_availability`
--
ALTER TABLE `product_availability`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Station_Id`) REFERENCES `gas_stations` (`Station_Id`);

--
-- Constraints for table `product_availability`
--
ALTER TABLE `product_availability`
  ADD CONSTRAINT `cloudfri_product_availability` FOREIGN KEY (`Station_Id`) REFERENCES `gas_stations` (`Station_Id`),
  ADD CONSTRAINT `product_availability_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`Product_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
