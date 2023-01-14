-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 04:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Book_Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Flight_No` int(255) NOT NULL,
  `Seats` int(255) NOT NULL,
  `Credit_Card` varchar(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `FromTo` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Book_Id`, `Name`, `Email`, `Contact`, `Flight_No`, `Seats`, `Credit_Card`, `Amount`, `Day`, `Date`, `Time`, `FromTo`, `Destination`) VALUES
(1, 'Umer', 'umar_qaiser12@yahoo.com', '0348', 7900, 3, '12344', 12000, '', '', '', '', ''),
(2, 'Afif', 'umer12@gmail.com', '123', 123, 2, '456788', 12500, '', '', '', '', ''),
(3, 'Kazmi', 'kazmi@gmail.com', '12345', 345, 1, '2345', 6000, '', '', '', '', ''),
(4, 'Muhammad Umer', 'umar_qaiser12@yahoo.com', '03482982451', 4460, 3, '1345672', 330000, 'Monday', '1-Aug-2022', '4.00 AM', 'Karachi', 'London'),
(5, 'Maryam Kazmi', 'maryam@gmail.com', '456789', 1010, 2, '89434', 186000, 'Friday', '12-Aug-2022', '8.20 AM', 'Karachi', 'Madina'),
(6, 'Muhammad Haris', 'haris@gmail.com', '67819', 810, 2, '578', 44000, 'Thursday', '11-Aug-2022', '6.30 PM', 'Gawadar', 'Gilgit'),
(7, 'Afif', 'afif@gmail.com', '1234', 810, 2, '3556', 44000, 'Thursday', '11-Aug-2022', '6.30 PM', 'Gawadar', 'Gilgit'),
(8, 'Hammad', 'hami@gmail.com', '12', 810, 2, '355', 44000, 'Thursday', '11-Aug-2022', '6.30 PM', 'Gawadar', 'Gilgit'),
(9, 'Umer', 'umer12@gmail.com', '34567', 9860, 4, '5689', 374000, 'Thursday', '4-Aug-2022', '3.00 AM', 'Lahore', 'Las Vegas'),
(10, 'Umer', 'umer12@gmail.com', '1324', 9860, 4, '3546', 374000, 'Thursday', '4-Aug-2022', '3.00 AM', 'Lahore', 'Las Vegas'),
(11, 'Umer', 'umer12@gmail.com', '3245', 7860, 2, '23', 156000, 'Thursday', '4-Aug-2022', '4.00 PM', 'Islamabad', 'Venice'),
(12, 'Umer', 'umer12@gmail.com', '34', 7860, 1, '4536', 78000, 'Thursday', '4-Aug-2022', '4.00 PM', 'Islamabad', 'Venice'),
(13, 'Umer', 'umer12@gmail.com', '234', 7860, 4, '2345', 312000, 'Thursday', '4-Aug-2022', '4.00 PM', 'Islamabad', 'Venice');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_Id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'Umer', 'umer12@gmail.com', 'Problem', 'I am facing webiste issues');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Flight_No` int(255) NOT NULL,
  `FromTo` varchar(255) NOT NULL,
  `Destination` varchar(255) NOT NULL,
  `Seats` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Day` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Flight_No`, `FromTo`, `Destination`, `Seats`, `Date`, `Time`, `Day`, `Price`, `Id`) VALUES
(7860, 'Islamabad', 'Venice', '282', '4-Aug-2022', '4.00 PM', 'Thursday', '78000', 1),
(9860, 'Lahore', 'Las Vegas', '26', '4-Aug-2022', '3.00 AM', 'Thursday', '93500', 2),
(2860, 'Karachi', 'Skardu', '44', '6-Aug-2022', '8.00 AM', 'Saturday', '28000', 3),
(4460, 'Karachi', 'London', '78', '1-Aug-2022', '4.00 AM', 'Monday', '110000', 4),
(787, 'Karachi', 'Beijing', '56', '8-Aug-2022', '5.00 PM', 'Tuesday', '46000', 5),
(708, 'Karachi', 'Makkah', '280', '7-Aug-2022', '7.30 AM', 'Friday', '89000', 6),
(709, 'Islamabad', 'Tehrun', '46', '10-Aug-2022', '7.45 PM', 'Wednesday', '60000', 7),
(810, 'Gawadar', 'Gilgit', '38', '11-Aug-2022', '6.30 PM', 'Thursday', '22000', 8),
(909, 'Faisalabad', 'Manchester', '120', '10-Aug-2022', '11.15 PM', 'Wednesday', '130000', 9),
(1010, 'Karachi', 'Madina', '108', '12-Aug-2022', '8.20 AM', 'Friday', '93000', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Book_Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_Id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Book_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
