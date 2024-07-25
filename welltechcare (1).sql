-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 05:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `welltechcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `admin_firstname` varchar(80) NOT NULL,
  `admin_gender` varchar(20) NOT NULL,
  `admin_age` varchar(5) NOT NULL,
  `admin_birthdate` varchar(50) NOT NULL,
  `admin_email` varchar(80) NOT NULL,
  `admin_contactno` varchar(15) NOT NULL,
  `admin_profile` varchar(255) NOT NULL,
  `admin_username` varchar(80) NOT NULL,
  `admin_password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_firstname`, `admin_gender`, `admin_age`, `admin_birthdate`, `admin_email`, `admin_contactno`, `admin_profile`, `admin_username`, `admin_password`) VALUES
('Admin Chae', 'Prefer not to say', '23', '23/03/1999', 'welltechadminchae@gmail.com', '(419) 366-5075', '', 'welltechcareadmin', 'welltechcareadmin123');

-- --------------------------------------------------------

--
-- Table structure for table `patient_account`
--

CREATE TABLE `patient_account` (
  `Patient_ID` int(15) NOT NULL,
  `First_Name` varchar(80) NOT NULL,
  `Middle_Name` varchar(80) NOT NULL,
  `Last_Name` varchar(80) NOT NULL,
  `Birthdate` date NOT NULL,
  `Age` int(5) NOT NULL,
  `Height` int(5) NOT NULL,
  `Weight` int(5) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BloodType` varchar(5) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `VCode` varchar(10) NOT NULL,
  `Username` varchar(80) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Patient_Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`admin_username`);

--
-- Indexes for table `patient_account`
--
ALTER TABLE `patient_account`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_account`
--
ALTER TABLE `patient_account`
  MODIFY `Patient_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
