-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 08:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eisnab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_approvals`
--

CREATE TABLE `tb_approvals` (
  `a_id` int(100) NOT NULL,
  `a_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_approvals`
--

INSERT INTO `tb_approvals` (`a_id`, `a_desc`) VALUES
(1, 'Pending'),
(2, 'Approve'),
(3, 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grns`
--

CREATE TABLE `tb_grns` (
  `grn_id` int(100) NOT NULL,
  `grn_poid` int(100) NOT NULL,
  `grn_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `grn_deliveryOrderNum` varchar(100) NOT NULL,
  `grn_deliverydate` date NOT NULL,
  `grn_inhouse` varchar(100) DEFAULT NULL,
  `grn_recipient` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_grns`
--

INSERT INTO `tb_grns` (`grn_id`, `grn_poid`, `grn_date`, `grn_deliveryOrderNum`, `grn_deliverydate`, `grn_inhouse`, `grn_recipient`) VALUES
(23050023, 5, '2023-06-09 07:25:02', '230609TTXG9XBA', '2023-06-15', NULL, 'TSK Mai'),
(23050035, 6, '2023-06-26 18:33:43', '123', '2023-07-05', NULL, 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `o_id` int(11) NOT NULL,
  `o_cust` int(11) NOT NULL,
  `o_dateIssued` datetime DEFAULT NULL,
  `o_deliveryOrder` varchar(15) DEFAULT NULL,
  `o_jobOrder` varchar(15) DEFAULT NULL,
  `o_salesOrder` varchar(15) DEFAULT NULL,
  `o_terms` varchar(10) DEFAULT 'Bank',
  `o_totalAmount` float DEFAULT NULL,
  `o_tax` float DEFAULT 0,
  `o_status` varchar(50) NOT NULL,
  `o_rate` float DEFAULT 1,
  `o_pack_stat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`o_id`, `o_cust`, `o_dateIssued`, `o_deliveryOrder`, `o_jobOrder`, `o_salesOrder`, `o_terms`, `o_totalAmount`, `o_tax`, `o_status`, `o_rate`, `o_pack_stat`) VALUES
(47, 2, '2023-06-05 12:03:24', '05230052', '', '23050057', 'Cash', 800, 0, '', 1, NULL),
(48, 1, '2023-06-12 06:30:56', '05230052', '', '23050057', 'Cash', 5015, 0, 'Paid', 1, 1),
(49, 1, '2023-06-12 09:22:51', NULL, NULL, NULL, 'Bank', 456, NULL, 'Paid', 1, 1),
(50, 1, '2023-06-12 09:23:16', NULL, NULL, NULL, 'Bank', 7515, 1.5, 'Paid', 1, 1),
(51, 1, '2023-06-22 21:41:57', '05230057', '', '23000745', 'Bank', 175, 0, 'Paid', 1, 2),
(52, 1, '2023-06-22 21:41:57', '15230757', '', '23580745', 'Cash', 256, 0, 'Paid', 1, NULL),
(53, 1, '2023-06-22 21:41:57', '85920757', '', '56982143', 'Cash', 1450, 0, 'Paid', 1, NULL),
(54, 1, '2023-06-24 21:41:57', '73632164', '', '23569843', 'Bank', 2048, 0, 'Paid', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_items`
--

CREATE TABLE `tb_order_items` (
  `oItem_id` int(11) NOT NULL,
  `oItem_orderId` int(11) NOT NULL,
  `oItem_product` int(11) NOT NULL,
  `oItem_purchaseOrder` varchar(30) DEFAULT NULL,
  `oItem_project` varchar(50) DEFAULT 'None',
  `oItem_qty` int(11) NOT NULL,
  `oItem_uom` varchar(15) DEFAULT NULL,
  `oItem_totalprice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_order_items`
--

INSERT INTO `tb_order_items` (`oItem_id`, `oItem_orderId`, `oItem_product`, `oItem_purchaseOrder`, `oItem_project`, `oItem_qty`, `oItem_uom`, `oItem_totalprice`) VALUES
(29, 47, 2, NULL, 'None', 2, NULL, 800),
(30, 48, 132, '23050057-NO PO-1684456586', 'None', 1, 'EA', 5000),
(31, 50, 3, NULL, 'None', 1, NULL, 4500),
(32, 50, 124, NULL, 'None', 1, NULL, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_packstatuses`
--

CREATE TABLE `tb_packstatuses` (
  `pac_stat_id` int(11) NOT NULL,
  `pac_stat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_packstatuses`
--

INSERT INTO `tb_packstatuses` (`pac_stat_id`, `pac_stat_desc`) VALUES
(1, 'Unpack'),
(2, 'Pack'),
(3, 'Transfer to Logistic');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productrequests`
--

CREATE TABLE `tb_productrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `prod_id` int(11) NOT NULL,
  `prod_code` varchar(200) DEFAULT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_image` varchar(200) DEFAULT NULL,
  `prod_ctg` int(100) NOT NULL,
  `prod_desc` text DEFAULT NULL,
  `prod_price` float NOT NULL,
  `prod_sellprice` float NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `prod_supplierID` int(11) NOT NULL,
  `prod_status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`prod_id`, `prod_code`, `prod_name`, `prod_image`, `prod_ctg`, `prod_desc`, `prod_price`, `prod_sellprice`, `prod_stock`, `prod_supplierID`, `prod_status`) VALUES
(132, 'ELC001', 'HP PAVILION', NULL, 1, 'zzzzzzzzzzzzzzz', 5000, 5100, 203, 1, 1),
(133, 'ELC002', 'Philip mouse', NULL, 1, 'zzzzzzzzzzzzzzzzzzzzz', 60, 70, 5, 1, 1),
(134, 'ELC003', 'Black Wireless Bluetooth Earphones', NULL, 1, NULL, 200, 245.9, 7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_productscategories`
--

CREATE TABLE `tb_productscategories` (
  `ctg_id` int(100) NOT NULL,
  `ctg_desc` varchar(200) NOT NULL,
  `ctg_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_productscategories`
--

INSERT INTO `tb_productscategories` (`ctg_id`, `ctg_desc`, `ctg_text`) VALUES
(1, 'Electronics', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_productstatuses`
--

CREATE TABLE `tb_productstatuses` (
  `ps_id` int(100) NOT NULL,
  `ps_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_productstatuses`
--

INSERT INTO `tb_productstatuses` (`ps_id`, `ps_desc`) VALUES
(1, 'No stock'),
(2, 'Low stock'),
(3, 'In stock');

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchaseorders`
--

CREATE TABLE `tb_purchaseorders` (
  `po_id` int(100) NOT NULL,
  `po_supplierID` int(100) NOT NULL,
  `po_cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `po_uid` int(100) NOT NULL,
  `po_prID` int(100) NOT NULL,
  `po_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaseorders`
--

INSERT INTO `tb_purchaseorders` (`po_id`, `po_supplierID`, `po_cdate`, `po_uid`, `po_prID`, `po_total`) VALUES
(1, 1, '2023-06-08 16:37:13', 0, 1, 10209.8),
(5, 1, '2023-06-09 07:30:05', 1, 2, 10209.8),
(6, 1, '2023-06-26 18:10:45', 1, 14, 500);

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchaserequests`
--

CREATE TABLE `tb_purchaserequests` (
  `pr_id` int(100) NOT NULL,
  `pr_cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pr_ddate` date NOT NULL,
  `pr_qty` int(11) NOT NULL,
  `pr_uom` int(11) NOT NULL,
  `pr_supplierID` int(100) NOT NULL,
  `pr_prodID` int(11) NOT NULL,
  `pr_subtot` float NOT NULL,
  `pr_tax` float NOT NULL,
  `pr_total` float NOT NULL,
  `pr_status` int(100) NOT NULL,
  `pr_comment` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaserequests`
--

INSERT INTO `tb_purchaserequests` (`pr_id`, `pr_cdate`, `pr_ddate`, `pr_qty`, `pr_uom`, `pr_supplierID`, `pr_prodID`, `pr_subtot`, `pr_tax`, `pr_total`, `pr_status`, `pr_comment`) VALUES
(1, '2023-06-08 15:12:26', '2023-06-11', 2, 1, 1, 132, 10200, 0, 10209.8, 2, NULL),
(2, '2023-06-08 15:13:13', '2023-06-12', 1, 1, 1, 133, 70, 0, 74.9, 2, NULL),
(14, '2023-06-26 10:09:03', '2023-06-28', 200, 1, 1, 132, 1020000, 0, 1020000, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sales`
--

CREATE TABLE `tb_sales` (
  `s_id` int(11) NOT NULL,
  `s_product` int(11) NOT NULL,
  `s_order` int(11) NOT NULL,
  `s_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_suppliers`
--

CREATE TABLE `tb_suppliers` (
  `sup_id` int(100) NOT NULL,
  `sup_name` varchar(200) NOT NULL,
  `sup_shop` varchar(200) NOT NULL,
  `sup_address` text DEFAULT NULL,
  `sup_phone` varchar(100) DEFAULT NULL,
  `sup_fax` varchar(100) DEFAULT NULL,
  `sup_email` varchar(100) DEFAULT NULL,
  `sup_shippingFee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_suppliers`
--

INSERT INTO `tb_suppliers` (`sup_id`, `sup_name`, `sup_shop`, `sup_address`, `sup_phone`, `sup_fax`, `sup_email`, `sup_shippingFee`) VALUES
(1, 'IT.CEO\r\n', 'Shopee', NULL, NULL, NULL, NULL, 4.9),
(3, 'KB TOY SHOP', 'Shopee', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_uoms`
--

CREATE TABLE `tb_uoms` (
  `uom_id` int(11) NOT NULL,
  `uom_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_uoms`
--

INSERT INTO `tb_uoms` (`uom_id`, `uom_desc`) VALUES
(1, 'EA'),
(2, 'SET');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_approvals`
--
ALTER TABLE `tb_approvals`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tb_grns`
--
ALTER TABLE `tb_grns`
  ADD PRIMARY KEY (`grn_id`),
  ADD KEY `grn_preqid` (`grn_poid`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `o_cust` (`o_cust`),
  ADD KEY `o_pack_stat` (`o_pack_stat`);

--
-- Indexes for table `tb_order_items`
--
ALTER TABLE `tb_order_items`
  ADD PRIMARY KEY (`oItem_id`),
  ADD KEY `oItem_orderId` (`oItem_orderId`,`oItem_product`);

--
-- Indexes for table `tb_packstatuses`
--
ALTER TABLE `tb_packstatuses`
  ADD PRIMARY KEY (`pac_stat_id`);

--
-- Indexes for table `tb_productrequests`
--
ALTER TABLE `tb_productrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `p_supplierID` (`prod_supplierID`),
  ADD KEY `p_ctg` (`prod_ctg`);

--
-- Indexes for table `tb_productscategories`
--
ALTER TABLE `tb_productscategories`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `tb_productstatuses`
--
ALTER TABLE `tb_productstatuses`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `tb_purchaseorders`
--
ALTER TABLE `tb_purchaseorders`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `po_supplierID` (`po_supplierID`),
  ADD KEY `po_uid` (`po_uid`),
  ADD KEY `po_prID` (`po_prID`);

--
-- Indexes for table `tb_purchaserequests`
--
ALTER TABLE `tb_purchaserequests`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `pr_uom` (`pr_uom`),
  ADD KEY `pr_supplierID` (`pr_supplierID`),
  ADD KEY `pr_status` (`pr_status`),
  ADD KEY `pr_prodID` (`pr_prodID`);

--
-- Indexes for table `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_product` (`s_product`,`s_order`),
  ADD KEY `s_order` (`s_order`);

--
-- Indexes for table `tb_suppliers`
--
ALTER TABLE `tb_suppliers`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `tb_uoms`
--
ALTER TABLE `tb_uoms`
  ADD PRIMARY KEY (`uom_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_approvals`
--
ALTER TABLE `tb_approvals`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_grns`
--
ALTER TABLE `tb_grns`
  MODIFY `grn_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23050036;

--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_order_items`
--
ALTER TABLE `tb_order_items`
  MODIFY `oItem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_packstatuses`
--
ALTER TABLE `tb_packstatuses`
  MODIFY `pac_stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_productrequests`
--
ALTER TABLE `tb_productrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `tb_productscategories`
--
ALTER TABLE `tb_productscategories`
  MODIFY `ctg_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_productstatuses`
--
ALTER TABLE `tb_productstatuses`
  MODIFY `ps_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_purchaseorders`
--
ALTER TABLE `tb_purchaseorders`
  MODIFY `po_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_purchaserequests`
--
ALTER TABLE `tb_purchaserequests`
  MODIFY `pr_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_sales`
--
ALTER TABLE `tb_sales`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_suppliers`
--
ALTER TABLE `tb_suppliers`
  MODIFY `sup_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_uoms`
--
ALTER TABLE `tb_uoms`
  MODIFY `uom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_grns`
--
ALTER TABLE `tb_grns`
  ADD CONSTRAINT `tb_grns_ibfk_1` FOREIGN KEY (`grn_poid`) REFERENCES `tb_purchaseorders` (`po_id`);

--
-- Constraints for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD CONSTRAINT `tb_orders_ibfk_1` FOREIGN KEY (`o_pack_stat`) REFERENCES `tb_packstatuses` (`pac_stat_id`);

--
-- Constraints for table `tb_order_items`
--
ALTER TABLE `tb_order_items`
  ADD CONSTRAINT `tb_order_items_ibfk_1` FOREIGN KEY (`oItem_orderId`) REFERENCES `tb_orders` (`o_id`);

--
-- Constraints for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD CONSTRAINT `tb_products_ibfk_3` FOREIGN KEY (`prod_supplierID`) REFERENCES `tb_suppliers` (`sup_id`),
  ADD CONSTRAINT `tb_products_ibfk_4` FOREIGN KEY (`prod_ctg`) REFERENCES `tb_productscategories` (`ctg_id`);

--
-- Constraints for table `tb_purchaseorders`
--
ALTER TABLE `tb_purchaseorders`
  ADD CONSTRAINT `tb_purchaseorders_ibfk_1` FOREIGN KEY (`po_supplierID`) REFERENCES `tb_suppliers` (`sup_id`),
  ADD CONSTRAINT `tb_purchaseorders_ibfk_2` FOREIGN KEY (`po_prID`) REFERENCES `tb_purchaserequests` (`pr_id`);

--
-- Constraints for table `tb_purchaserequests`
--
ALTER TABLE `tb_purchaserequests`
  ADD CONSTRAINT `tb_purchaserequests_ibfk_1` FOREIGN KEY (`pr_uom`) REFERENCES `tb_uoms` (`uom_id`),
  ADD CONSTRAINT `tb_purchaserequests_ibfk_2` FOREIGN KEY (`pr_prodID`) REFERENCES `tb_products` (`prod_id`),
  ADD CONSTRAINT `tb_purchaserequests_ibfk_3` FOREIGN KEY (`pr_status`) REFERENCES `tb_approvals` (`a_id`),
  ADD CONSTRAINT `tb_purchaserequests_ibfk_4` FOREIGN KEY (`pr_supplierID`) REFERENCES `tb_suppliers` (`sup_id`);

--
-- Constraints for table `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD CONSTRAINT `tb_sales_ibfk_1` FOREIGN KEY (`s_product`) REFERENCES `tb_products` (`prod_id`),
  ADD CONSTRAINT `tb_sales_ibfk_2` FOREIGN KEY (`s_order`) REFERENCES `tb_orders` (`o_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
