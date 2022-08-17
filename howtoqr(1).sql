-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 08:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `howtoqr`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrcodes`
--

CREATE TABLE `qrcodes` (
  `qrCollege` varchar(250) NOT NULL,
  `qrName` varchar(250) NOT NULL,
  `qrImg` varchar(250) NOT NULL,
  `qrlink` text NOT NULL,
  `qrEmail` varchar(30) NOT NULL,
  `qrContact` bigint(20) NOT NULL,
  `qrBranch` varchar(40) NOT NULL,
  `qrYear` varchar(12) NOT NULL,
  `qrUid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcodes`
--

INSERT INTO `qrcodes` (`qrCollege`, `qrName`, `qrImg`, `qrlink`, `qrEmail`, `qrContact`, `qrBranch`, `qrYear`, `qrUid`) VALUES
('Krishna Ramchandani', 'SKNCOE QR code Ready', 'meravi1527792096.png', 'localhost/qrcodemeravi1527792096.png', '', 0, '', '', ''),
('Alex', 'Pune QR code Ready', 'meravi1508523937.png', 'localhost/qrcodemeravi1508523937.png', '', 0, '', '', ''),
('Sample', 'Sample QR code Ready', 'meravi1090765736.png', 'localhost/qrcodemeravi1090765736.png', '', 0, '', '', ''),
('Peter', 'spiderman QR code Ready', 'meravi1813515611.png', 'localhost/qrcodemeravi1813515611.png', '', 0, '', '', ''),
('SKNCOE', 'Krishna Ramchandani QR code Ready', 'meravi1228109000.png', 'localhost/qrcodemeravi1228109000.png', '', 0, '', '', ''),
('SKNCOE', 'Alex S QR code Ready', 'QRcode1286505856.png', 'localhost/qrcodeQRcode1286505856.png', '', 0, '', '', ''),
('SKNCOE', 'Darshan Pawar QR code Ready', 'QRcode967396244.png', 'localhost/qrcodeQRcode967396244.png', '', 0, '', '', ''),
('SKNCOE', 'Alex S QR code Ready', 'QRcode124145522.png', 'localhost/qrcodeQRcode124145522.png', '', 0, '', '', ''),
('SKNCOE', 'Jayesh Padhiar QR code Ready', 'QRcode1531092535.png', 'localhost/qrcodeQRcode1531092535.png', '', 0, '', '', ''),
('SCOE', 'Sample User QR code Ready', 'QRcode804788270.png', 'localhost/qrcodeQRcode804788270.png', '', 0, '', '', ''),
('AISSMS', 'Sarthak Badgujar QR code Ready', 'QRcode108127491.png', 'localhost/qrcodeQRcode108127491.png', '', 0, '', '', ''),
('SCOE', 'Krishna Ramchandani QR code Ready', 'QRcode1516362258.png', 'localhost/qrcodeQRcode1516362258.png', '', 8208578671, 'Computer Engineering', 'Third_Year', 'ABC'),
('Sinhgad', 'Sample Sample QR code Ready', 'QRcode1483541966.png', 'localhost/qrcodeQRcode1483541966.png', 'sample@gmail.com', 8956412365, 'Information Technology', 'Third_Year', 'APHDC18'),
('Sinhgad', 'Admin QR code Ready', 'QRcode802563281.png', 'localhost/qrcodeQRcode802563281.png', 'admin@admin.com', 8523564121, 'Aeronotical Engineering', '', 'ADMIN'),
('Sinhgad', 'Admin QR code Ready', 'QRcode2131674422.png', 'localhost/qrcodeQRcode2131674422.png', 'admin@admin.com', 8523564121, 'Aeronotical Engineering', 'Last_Year', 'ADMIN'),
('Sinhgad<or>=\"\"<?php ?>', 'Admin #include <?code QR code Ready', 'QRcode877426447.png', 'localhost/qrcodeQRcode877426447.png', 'admin@admin.com <script>', 8523564121, 'Aeronotical Engineering ()/*-+!@#$%^&*()', 'Last_Year', 'ADMIN ~!@#$%^&*())))'),
('sampleuser', 'sampleuser QR code Ready', 'QRcode662676404.png', 'localhost/qrcodeQRcode662676404.png', 'sampleuser@gmail.com', 8788522222, 'CSE', 'Second_Yea', 'Sampleuser'),
('sampleuser12', 'Sampleuser12 QR code Ready', 'QRcode1959843357.png', 'localhost/qrcodeQRcode1959843357.png', '', 7411239852, 'ITCSE', 'Second_Year', 'SAMPLE'),
('sampleuser12', 'Sampleuser12 QR code Ready', 'QRcode577447343.png', 'localhost/qrcodeQRcode577447343.png', '', 7411239852, 'ITCSE', 'Second_Year', 'SAMPLE'),
('sampleuser12', 'Sampleuser12 QR code Ready', 'QRcode1064883310.png', 'localhost/qrcodeQRcode1064883310.png', 'sampleuser12@gmail.com', 7411239852, 'ITCSE', 'Second_Year', 'SAMPLE'),
('Sinhgad<or>=\"\"<?php ?>', 'Admin #include <?code QR code Ready', 'QRcode932023252.png', 'localhost/qrcodeQRcode932023252.png', 'admin@admin.com <script>', 0, 'Aeronotical Engineering ()/*-+!@#$%^&*()', 'Second_Year', '!@#$%^&*(+_)('),
('Sinhgad<or>=\"\"<?php ?>', 'Admin #include <?code QR code Ready', 'QRcode162703451.png', 'localhost/qrcodeQRcode162703451.png', 'admin@admin.com <script>', 0, 'Aeronotical Engineering ()/*-+!@#$%^&*()', 'Second_Year', '!@#$%^&*(+_)('),
('SKNCOE PUNE', 'Shubham QR code Ready . SKNCOE PUNE', 'QRcode934624577.png', 'localhost/qrcodeQRcode934624577.png', 'sample@gmail.com', 7899885522, 'CSE', 'Second_Year', 'SAMPLE'),
('SKNCOE PUNE', 'Shubham QR code Ready . SKNCOE PUNE', 'QRcode1478272993.png', 'localhost/qrcodeQRcode1478272993.png', 'sample@gmail.com', 7899885522, 'CSE', 'Second_Year', 'SAMPLE'),
('SKNCOE PUNE', 'Shubham QR code Ready . SKNCOE PUNE', 'QRcode1533065734.png', 'localhost/qrcodeQRcode1533065734.png', 'sample@gmail.com', 7899885522, 'CSE', 'Second_Year', 'SAMPLE'),
('SKNCOE', 'Peter QR code Ready . SKNCOE', 'QRcode1913223600.png', 'localhost/qrcodeQRcode1913223600.png', 'sample@gmail.com', 8523564121, 'CSE', '--Select Yea', 'SAMPLE'),
('jdsvbbvjbkjbsvj', 'Peter QR code Ready . jdsvbbvjbkjbsvj', 'QRcode735924512.png', 'localhost/qrcodeQRcode735924512.png', 'sample@gmail.com<>!@#$%^&*()_', 8523564121, 'CSE', 'Second_Year', 'SAMPLE'),
('AISSMS !@#$%^&*()_', 'Vinit@#$%^&*( QR code Ready . AISSMS !@#$%^&*()_', 'QRcode1792926929.png', 'localhost/qrcodeQRcode1792926929.png', 'abc@gmail.com@#$%^&*(', 0, 'CSE !@#$%^&U', 'Second_Year', 'VBHBGVG#$%^&*('),
('MG College', 'Narendra Modi QR code Ready . MG College', 'QRcode927174067.png', 'localhost/qrcodeQRcode927174067.png', 'namo@gmail.com', 9148784556, 'BJP', 'Last_Year', 'PRIME111'),
('SKNCOE PUNE', 'Shubham Shinde QR code Ready . SKNCOE PUNE', 'QRcode653059605.png', 'localhost/qrcodeQRcode653059605.png', 'shubhamshinde@gmail.com', 8787878888, 'COMPUTER', 'Third_Year', 'VMTTP19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
