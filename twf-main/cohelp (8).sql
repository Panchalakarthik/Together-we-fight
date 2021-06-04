-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cohelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` varchar(250) NOT NULL,
  `street` varchar(300) NOT NULL,
  `city` varchar(300) NOT NULL,
  `district` varchar(300) NOT NULL,
  `State` varchar(300) NOT NULL,
  `zipcode` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `street`, `city`, `district`, `State`, `zipcode`) VALUES
('025bc333e3bbcf539cf0da9b8e3b1b7e', '', 'Tiruvuru', 'Krishna', 'Andhra', '521235'),
('1dbb64ea4655c06d74c9f460cd5b9227', '', 'Bhaskarnagar', 'East', 'Andhra', '533003'),
('29bbc7dc2064a2166c56b1217a111c26', '', 'Engg.College', 'East', 'Andhra', '533003'),
('55c844bff26ddcc7e64461d072625178', '', 'Bhaskarnagar', 'East', 'Andhra', '533003'),
('64be1d0f7cb87665a0b4f3ea87eccf26', '', 'Mehernagar', 'East', 'Andhra', '533003'),
('85bc5fcfbe1f5bdb983b64051c2e02c6', '', 'Tiruvuru', 'Krishna', 'Andhra', '521235'),
('860f9aa15956bc0d16a889bd0fbafdd5', '', 'Gayatri', 'Visakhapatnam', 'Andhra', '530048'),
('f60aa76695d7265334d88ea4abb31cca', '', 'Engg.College', 'East', 'Andhra', '533003'),
('fa09ed7c0e63d3a4391e07bdd0f74ffd', '', 'Mehernagar', 'East', 'Andhra', '533003');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` varchar(250) NOT NULL,
  `food` int(2) DEFAULT 0,
  `plasma` int(2) DEFAULT 0,
  `oxygen` int(2) DEFAULT 0,
  `blood` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `food`, `plasma`, `oxygen`, `blood`) VALUES
('025bc333e3bbcf539cf0da9b8e3b1b7e', 1, 1, 1, 1),
('1dbb64ea4655c06d74c9f460cd5b9227', 0, 0, 0, 0),
('29bbc7dc2064a2166c56b1217a111c26', 0, 0, 0, 0),
('55c844bff26ddcc7e64461d072625178', 0, 0, 0, 0),
('64be1d0f7cb87665a0b4f3ea87eccf26', 0, 0, 1, 1),
('85bc5fcfbe1f5bdb983b64051c2e02c6', 1, 1, 1, 1),
('860f9aa15956bc0d16a889bd0fbafdd5', 1, 0, 0, 0),
('f60aa76695d7265334d88ea4abb31cca', 0, 0, 1, 1),
('fa09ed7c0e63d3a4391e07bdd0f74ffd', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `medical_id` varchar(250) NOT NULL,
  `med` int(2) NOT NULL DEFAULT 0,
  `me` int(2) NOT NULL DEFAULT 0,
  `oc` int(2) NOT NULL DEFAULT 0,
  `beds` int(2) NOT NULL DEFAULT 0,
  `beds_o2` int(2) NOT NULL DEFAULT 0,
  `beds_ven` int(2) NOT NULL DEFAULT 0,
  `doc` int(2) NOT NULL DEFAULT 0,
  `med_i` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`medical_id`, `med`, `me`, `oc`, `beds`, `beds_o2`, `beds_ven`, `doc`, `med_i`) VALUES
('025bc333e3bbcf539cf0da9b8e3b1b7e', 1, 1, 1, 1, 0, 0, 0, 0),
('1dbb64ea4655c06d74c9f460cd5b9227', 0, 0, 0, 0, 0, 0, 0, 0),
('29bbc7dc2064a2166c56b1217a111c26', 0, 0, 0, 0, 0, 0, 0, 0),
('55c844bff26ddcc7e64461d072625178', 0, 0, 0, 0, 0, 0, 0, 0),
('64be1d0f7cb87665a0b4f3ea87eccf26', 1, 0, 0, 0, 0, 0, 0, 0),
('85bc5fcfbe1f5bdb983b64051c2e02c6', 1, 1, 1, 1, 1, 1, 1, 1),
('860f9aa15956bc0d16a889bd0fbafdd5', 0, 0, 0, 0, 0, 0, 0, 0),
('f60aa76695d7265334d88ea4abb31cca', 1, 0, 0, 0, 0, 0, 0, 0),
('fa09ed7c0e63d3a4391e07bdd0f74ffd', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` varchar(250) NOT NULL,
  `name` varchar(300) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `adderss` varchar(300) NOT NULL,
  `des` longtext NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` datetime(6) DEFAULT NULL,
  `pt` int(11) NOT NULL DEFAULT 0,
  `vol_id` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `name`, `title`, `adderss`, `des`, `phone`, `date`, `pt`, `vol_id`) VALUES
('8e3ef59d548fdadc4d229f5a0ebe1a96', 'Chris', 'fever', 'kakinada', 'need medication', '9999999999', '2021-05-21 20:52:08.000000', 0, NULL),
('a7c97209a00bc5b1f9fb4c84d3985052', 'Sivaji', 'Test Req', 'Tiruvru', 'I Need Help', '6302632025', '2021-05-20 23:58:15.000000', 1, '85bc5fcfbe1f5bdb983b64051c2e02c6'),
('e10b1a3a90d1500ea4b198631c13a0ce', 'Mohammad Firoz Khan', 'Need Immediate ventilator', '26-27-7, Kanithi Rd, China Gantyada Jn, opp. Apollo pharmacy, Gajuwaka, Visakhapatnam, Andhra Pradesh 530026', 'isduashodihdosuiognaudy  auygfo udygsofu aoudbushbf udbs ubdxhgbaciuybdfjhabl fjb jhcblzhjbvahb  bdfuabfojdbs hbuf', '7997948874', '2021-05-21 00:12:26.000000', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` varchar(250) NOT NULL,
  `vaccination` int(2) DEFAULT 0,
  `daily_ess` int(2) NOT NULL DEFAULT 0,
  `donor_id` varchar(250) NOT NULL,
  `transport_id` varchar(250) NOT NULL,
  `medical_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `vaccination`, `daily_ess`, `donor_id`, `transport_id`, `medical_id`) VALUES
('025bc333e3bbcf539cf0da9b8e3b1b7e', 0, 0, '025bc333e3bbcf539cf0da9b8e3b1b7e', '025bc333e3bbcf539cf0da9b8e3b1b7e', '025bc333e3bbcf539cf0da9b8e3b1b7e'),
('1dbb64ea4655c06d74c9f460cd5b9227', 0, 0, '1dbb64ea4655c06d74c9f460cd5b9227', '1dbb64ea4655c06d74c9f460cd5b9227', '1dbb64ea4655c06d74c9f460cd5b9227'),
('29bbc7dc2064a2166c56b1217a111c26', 0, 0, '29bbc7dc2064a2166c56b1217a111c26', '29bbc7dc2064a2166c56b1217a111c26', '29bbc7dc2064a2166c56b1217a111c26'),
('55c844bff26ddcc7e64461d072625178', 0, 0, '55c844bff26ddcc7e64461d072625178', '55c844bff26ddcc7e64461d072625178', '55c844bff26ddcc7e64461d072625178'),
('64be1d0f7cb87665a0b4f3ea87eccf26', 0, 0, '64be1d0f7cb87665a0b4f3ea87eccf26', '64be1d0f7cb87665a0b4f3ea87eccf26', '64be1d0f7cb87665a0b4f3ea87eccf26'),
('85bc5fcfbe1f5bdb983b64051c2e02c6', 1, 1, '85bc5fcfbe1f5bdb983b64051c2e02c6', '85bc5fcfbe1f5bdb983b64051c2e02c6', '85bc5fcfbe1f5bdb983b64051c2e02c6'),
('860f9aa15956bc0d16a889bd0fbafdd5', 0, 0, '860f9aa15956bc0d16a889bd0fbafdd5', '860f9aa15956bc0d16a889bd0fbafdd5', '860f9aa15956bc0d16a889bd0fbafdd5'),
('f60aa76695d7265334d88ea4abb31cca', 0, 0, 'f60aa76695d7265334d88ea4abb31cca', 'f60aa76695d7265334d88ea4abb31cca', 'f60aa76695d7265334d88ea4abb31cca'),
('fa09ed7c0e63d3a4391e07bdd0f74ffd', 1, 1, 'fa09ed7c0e63d3a4391e07bdd0f74ffd', 'fa09ed7c0e63d3a4391e07bdd0f74ffd', 'fa09ed7c0e63d3a4391e07bdd0f74ffd');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(250) NOT NULL,
  `medicine` tinyint(1) NOT NULL DEFAULT 0,
  `oxygen` tinyint(1) NOT NULL DEFAULT 0,
  `ventilation` tinyint(1) NOT NULL DEFAULT 0,
  `ambulance` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `transport_id` varchar(250) NOT NULL,
  `two_w` int(2) NOT NULL DEFAULT 0,
  `Ambulance_service` int(2) NOT NULL DEFAULT 0,
  `four_w` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`transport_id`, `two_w`, `Ambulance_service`, `four_w`) VALUES
('025bc333e3bbcf539cf0da9b8e3b1b7e', 0, 0, 0),
('1dbb64ea4655c06d74c9f460cd5b9227', 0, 0, 0),
('29bbc7dc2064a2166c56b1217a111c26', 0, 0, 0),
('55c844bff26ddcc7e64461d072625178', 0, 0, 0),
('64be1d0f7cb87665a0b4f3ea87eccf26', 0, 0, 0),
('85bc5fcfbe1f5bdb983b64051c2e02c6', 1, 1, 1),
('860f9aa15956bc0d16a889bd0fbafdd5', 0, 0, 0),
('f60aa76695d7265334d88ea4abb31cca', 0, 0, 0),
('fa09ed7c0e63d3a4391e07bdd0f74ffd', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vol_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Aadhar_number` varchar(100) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `Age` int(11) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ocupation` varchar(200) NOT NULL,
  `emergency_contact` varchar(200) NOT NULL,
  `birth_date` varchar(200) DEFAULT NULL,
  `service_id` varchar(250) DEFAULT NULL,
  `address_id` varchar(250) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vol_id`, `name`, `username`, `email`, `Aadhar_number`, `Phone`, `gender`, `Age`, `password`, `ocupation`, `emergency_contact`, `birth_date`, `service_id`, `address_id`, `des`) VALUES
('025bc333e3bbcf539cf0da9b8e3b1b7e', 'Sivaji', '', 'shivajimeenugu1@gmail.com', '', '6302632025', '', 0, 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, '025bc333e3bbcf539cf0da9b8e3b1b7e', '025bc333e3bbcf539cf0da9b8e3b1b7e', 'Test'),
('29bbc7dc2064a2166c56b1217a111c26', 'VOLUNTEER DEMO', '', 'pru@gmail.com', '', '7989288579', '', 0, '96e79218965eb72c92a549dd5a330112', '', '', NULL, '29bbc7dc2064a2166c56b1217a111c26', '29bbc7dc2064a2166c56b1217a111c26', ''),
('85bc5fcfbe1f5bdb983b64051c2e02c6', 'Meenugu Sivaji', '', 'shivajimeenugu@gmail.com', '', '6302632025', '', 0, 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, '85bc5fcfbe1f5bdb983b64051c2e02c6', '85bc5fcfbe1f5bdb983b64051c2e02c6', 'I can Help People with the Mentioned services.\r\n\r\n'),
('860f9aa15956bc0d16a889bd0fbafdd5', 'Sivaji Meenugu', '', 'test@12.com', '', '63025555', '', 0, 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, '860f9aa15956bc0d16a889bd0fbafdd5', '860f9aa15956bc0d16a889bd0fbafdd5', ''),
('fa09ed7c0e63d3a4391e07bdd0f74ffd', 'Prudhvi Akula', '', 'reachme.pruthvi@gmail.com', '', '7989288579', '', 0, 'e10adc3949ba59abbe56e057f20f883e', '', '', NULL, 'fa09ed7c0e63d3a4391e07bdd0f74ffd', 'fa09ed7c0e63d3a4391e07bdd0f74ffd', 'I Am Ready To help With All The Mentioned Services.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`medical_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD UNIQUE KEY `donor_id` (`donor_id`),
  ADD UNIQUE KEY `medical_id` (`medical_id`),
  ADD UNIQUE KEY `transport_id` (`transport_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transport_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vol_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `service_id` (`service_id`),
  ADD KEY `address_con` (`address_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`medical_id`) REFERENCES `medical` (`medical_id`),
  ADD CONSTRAINT `services_ibfk_3` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`transport_id`);

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `address_con` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
