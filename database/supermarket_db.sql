-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2024 at 06:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `a_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`a_id`, `address`) VALUES
(5, 'Bugolobi'),
(4, 'Kabalagala'),
(6, 'Kansanga'),
(7, 'Makerere'),
(8, 'Munyonyo'),
(3, 'Nsambya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cashier`
--

CREATE TABLE `tbl_cashier` (
  `ch_id` int(11) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `g_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cashier`
--

INSERT INTO `tbl_cashier` (`ch_id`, `cashier`, `contact`, `g_id`, `a_id`) VALUES
(2, 'Alex', '0784793658', 3, 4),
(3, 'Emmanual', '074573957', 4, 6),
(4, 'Christine', '077673935', 4, 8),
(5, 'Majok', '07547682742', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `cl_id` int(11) NOT NULL,
  `client` varchar(100) NOT NULL,
  `cEmail` varchar(100) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `g_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `cPass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`cl_id`, `client`, `cEmail`, `contact`, `g_id`, `a_id`, `cPass`) VALUES
(3, 'Sulainah', '', '07563294826', 4, 6, ''),
(4, 'Jonathan', '', '07873947289', 3, 8, ''),
(5, 'Sohail', '', '0746837583', 4, 5, ''),
(6, 'Edwin', '', '0757395763', 3, 8, ''),
(13, 'Maxim', 'maxim@gmail.com', '07876823', 3, 4, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gender`
--

CREATE TABLE `tbl_gender` (
  `g_id` int(11) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gender`
--

INSERT INTO `tbl_gender` (`g_id`, `gender`) VALUES
(4, 'Female'),
(3, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `i_id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `exp_date` date NOT NULL,
  `man_date` date NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`i_id`, `item`, `price`, `exp_date`, `man_date`, `quantity`, `s_id`) VALUES
(3, 'Apple', 1000, '2024-04-20', '2024-04-14', '187', 5),
(4, 'Banana', 800, '2024-04-26', '2024-04-10', '876', 7),
(5, 'Mango', 2000, '2024-04-30', '2024-04-03', '766', 6),
(6, 'Fanta', 1500, '2024-05-17', '2024-03-10', '766', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `pm_id` int(11) NOT NULL,
  `method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pm_id`, `method`) VALUES
(4, 'Cash'),
(5, 'Mobile Money'),
(7, 'Mustard Card'),
(8, 'Paypal'),
(6, 'Visa Card');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

CREATE TABLE `tbl_section` (
  `s_id` int(11) NOT NULL,
  `section` varchar(50) NOT NULL,
  `s_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_section`
--

INSERT INTO `tbl_section` (`s_id`, `section`, `s_number`) VALUES
(5, 'Section A', 'B001'),
(6, 'Section B', 'B002'),
(7, 'Section C', 'B003'),
(8, 'Section D', 'B004');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `t_id` int(11) NOT NULL,
  `ch_id` int(11) NOT NULL,
  `cl_id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL,
  `pm_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_n` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`t_id`, `ch_id`, `cl_id`, `i_id`, `pm_id`, `quantity`, `order_n`) VALUES
(1, 5, 3, 3, 7, 7, ''),
(2, 4, 4, 6, 4, 10, ''),
(3, 3, 5, 4, 5, 100, ''),
(4, 2, 6, 5, 8, 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `address_UNIQUE` (`address`);

--
-- Indexes for table `tbl_cashier`
--
ALTER TABLE `tbl_cashier`
  ADD PRIMARY KEY (`ch_id`),
  ADD KEY `fk_tbl_cashier_tbl_gender1_idx` (`g_id`),
  ADD KEY `fk_tbl_cashier_tbl_address1_idx` (`a_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`cl_id`),
  ADD KEY `fk_tbl_client_tbl_address_idx` (`a_id`),
  ADD KEY `fk_tbl_client_tbl_gender1_idx` (`g_id`);

--
-- Indexes for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  ADD PRIMARY KEY (`g_id`),
  ADD UNIQUE KEY `gender_UNIQUE` (`gender`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `item_UNIQUE` (`item`),
  ADD KEY `fk_tbl_item_tbl_section1_idx` (`s_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`pm_id`),
  ADD UNIQUE KEY `method_UNIQUE` (`method`);

--
-- Indexes for table `tbl_section`
--
ALTER TABLE `tbl_section`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `sectionA_UNIQUE` (`section`),
  ADD UNIQUE KEY `s_number_UNIQUE` (`s_number`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `fk_tbl_transaction_tbl_client1_idx` (`cl_id`),
  ADD KEY `fk_tbl_transaction_tbl_item1_idx` (`i_id`),
  ADD KEY `fk_tbl_transaction_tbl_payment1_idx` (`pm_id`),
  ADD KEY `fk_tbl_transaction_tbl_cashier1_idx` (`ch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_cashier`
--
ALTER TABLE `tbl_cashier`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_section`
--
ALTER TABLE `tbl_section`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cashier`
--
ALTER TABLE `tbl_cashier`
  ADD CONSTRAINT `fk_tbl_cashier_tbl_address1` FOREIGN KEY (`a_id`) REFERENCES `tbl_address` (`a_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_cashier_tbl_gender1` FOREIGN KEY (`g_id`) REFERENCES `tbl_gender` (`g_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD CONSTRAINT `fk_tbl_client_tbl_address` FOREIGN KEY (`a_id`) REFERENCES `tbl_address` (`a_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_client_tbl_gender1` FOREIGN KEY (`g_id`) REFERENCES `tbl_gender` (`g_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD CONSTRAINT `fk_tbl_item_tbl_section1` FOREIGN KEY (`s_id`) REFERENCES `tbl_section` (`s_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `fk_tbl_transaction_tbl_cashier1` FOREIGN KEY (`ch_id`) REFERENCES `tbl_cashier` (`ch_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_transaction_tbl_client1` FOREIGN KEY (`cl_id`) REFERENCES `tbl_client` (`cl_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_transaction_tbl_item1` FOREIGN KEY (`i_id`) REFERENCES `tbl_item` (`i_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_transaction_tbl_payment1` FOREIGN KEY (`pm_id`) REFERENCES `tbl_payment` (`pm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
