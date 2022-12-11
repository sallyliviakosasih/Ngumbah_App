-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 06:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngumbah_appdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `name`, `password`) VALUES
(2, 'admin1', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `package_table`
--

CREATE TABLE `package_table` (
  `id` int(10) NOT NULL,
  `package` varchar(100) NOT NULL,
  `description` varchar(999) NOT NULL,
  `price` bigint(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_table`
--

INSERT INTO `package_table` (`id`, `package`, `description`, `price`, `type`) VALUES
(1, 'Complete + Express', 'Paket Cuci Kiloan + Setrika + Pemesanan Prioritas', 15000, 'Kiloan'),
(2, 'Cuci + Express', 'Paket Cuci Kiloan + Pemesanan Prioritas', 10000, 'Kiloan'),
(3, 'Setrika + Express', 'Paket Setrika Kiloan + Pemesanan Prioritas', 7000, 'Kiloan'),
(4, 'Complete', 'Paket Cuci Kiloan + Setrika', 10000, 'Kiloan'),
(5, 'Cuci', 'Paket Cuci Kiloan', 7000, 'Kiloan'),
(6, 'Setrika', 'Paket Setrika Kiloan', 5000, 'Kiloan'),
(7, 'Dry Clean', 'Paket Dry Clean Kiloan + Setrika', 8000, 'Kiloan'),
(8, 'Complete (Satuan)', 'Paket Cuci + Setrika Satuan', 3000, 'Satuan'),
(9, 'Cuci (Satuan)', 'Paket cuci satuan', 2000, 'Satuan'),
(10, 'Setrika (Satuan)', 'Paket Setrika Satuan', 1000, 'Satuan');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `no` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `order_confirmed` tinyint(10) NOT NULL,
  `payment_confirmed` tinyint(10) NOT NULL,
  `order_received` tinyint(10) NOT NULL,
  `order_processed` tinyint(10) NOT NULL,
  `order_packed` tinyint(10) NOT NULL,
  `order_sent` tinyint(10) NOT NULL,
  `order_arrived` tinyint(10) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`no`, `id`, `username`, `order_confirmed`, `payment_confirmed`, `order_received`, `order_processed`, `order_packed`, `order_sent`, `order_arrived`, `date`) VALUES
(1, 'NA-bGcTFsSNek', 'user1', 1, 1, 1, 1, 1, 1, 1, '2022-12-11'),
(2, 'NA-d1DOx8uQvl', 'user1', 1, 1, 0, 0, 0, 0, 0, '2022-12-11'),
(3, 'NA-eDtaigfcGj', 'user1', 1, 1, 1, 1, 1, 1, 1, '2022-12-11'),
(4, 'NA-QO1py6wsKo', 'user1', 1, 1, 0, 0, 0, 0, 0, '2022-12-11'),
(5, 'NA-Vf8jXbhnrg', 'user1', 1, 1, 0, 0, 0, 0, 0, '2022-12-11'),
(6, 'NA-Y3hZoGmya2', 'user1', 1, 1, 0, 0, 0, 0, 0, '2022-12-11'),
(7, 'NA-fb52pNFJ9C', 'user1', 1, 1, 0, 0, 0, 0, 0, '2022-12-11'),
(8, 'NA-nelH5JvXk7', 'user1', 1, 1, 0, 0, 0, 0, 0, '2022-12-11'),
(9, 'NA-PYQ1TkefHq', 'user1', 1, 1, 0, 0, 0, 0, 0, '2022-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` tinyint(100) NOT NULL,
  `fullname` varchar(999) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `fullname`, `phone`, `email`, `username`, `password`) VALUES
(4, 'user', '081123456789', 'user1@gmail.com', 'user1', '$2y$10$UZVfiFSx6tm1vMjY06kwtuhxUMoeG3PQhgYovk/gwg7BTw/Pe.tNC'),
(5, 'Sally Livia Kosasih', '081123456789', 'abc@gmail.com', 'sally', '$2y$10$/g6AcrYBf2yGwIqAzTizY.K5Jb0soF3NSZ3aXYy0011Paa6SGDH3C'),
(6, 'Sally Livia Kosasih', '081123456789', 'abc2@gmail.com', 'user2', '$2y$10$hoHqCw49ZuPO9Mpsfoi/lezzJMQgaUPa.lCoIal8wqDbrPC37qYY6');

-- --------------------------------------------------------

--
-- Table structure for table `user_transaction`
--

CREATE TABLE `user_transaction` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `weight` int(10) NOT NULL,
  `notes` varchar(999) NOT NULL,
  `package_cost` bigint(100) NOT NULL,
  `delivery_cost` bigint(100) NOT NULL,
  `total_payment` bigint(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_transaction`
--

INSERT INTO `user_transaction` (`id`, `username`, `name`, `phone`, `address`, `package_name`, `weight`, `notes`, `package_cost`, `delivery_cost`, `total_payment`, `payment_status`, `date`) VALUES
('NA-bGcTFsSNek', 'user1', 'User 1', '0811123456789', 'Jln.  Lorem Ipsum', 'Complete + Express', 20, '', 300000, 10000, 310000, 'Lunas', '2022-12-11'),
('NA-d1DOx8uQvl', 'user1', 'User 12', '0811123456789', 'Jln.  Lorem Ipsum', 'Complete + Express', 20, '', 300000, 10000, 310000, 'Lunas', '2022-12-11'),
('NA-eDtaigfcGj', 'user1', 'User 1', '0811123456789', 'Jln.  Lorem Ipsum', 'Setrika', 20, '', 100000, 10000, 110000, 'Lunas', '2022-12-11'),
('NA-fb52pNFJ9C', 'user1', 'Sally', '081123456789', 'Jln Abc', 'Complete + Express', 10, '', 150000, 10000, 160000, 'Lunas', ''),
('NA-nelH5JvXk7', 'user1', 'User 1', '081123456789', 'Jln Lorem Ipsum', 'Complete + Express', 20, '', 300000, 10000, 310000, 'Lunas', ''),
('NA-PYQ1TkefHq', 'user1', 'User 1', '0811123456789', 'Jln.  Lorem Ipsum', 'Complete + Express', 20, '', 300000, 10000, 310000, 'Lunas', ''),
('NA-QO1py6wsKo', 'user1', 'User 1', '0811123456789', 'Jln.  Lorem Ipsum', 'Complete + Express', 20, '', 300000, 10000, 310000, 'Lunas', '2022-12-11'),
('NA-Vf8jXbhnrg', 'user1', 'User 1', '0811123456789', 'Jln.  Lorem Ipsum', 'Complete + Express', 20, '', 300000, 10000, 310000, 'Lunas', '2022-12-11'),
('NA-Y3hZoGmya2', 'user1', 'User 13', '0811123456789', 'Jln.  Lorem Ipsum', 'Complete + Express', 20, '', 300000, 10000, 310000, 'Lunas', '2022-12-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_table`
--
ALTER TABLE `package_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_transaction`
--
ALTER TABLE `user_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package_table`
--
ALTER TABLE `package_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` tinyint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
