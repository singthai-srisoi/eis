-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 06:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eis3`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_27_141319_db', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_addresses`
--

CREATE TABLE `tb_addresses` (
  `a_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `a_line1` varchar(200) NOT NULL,
  `a_line2` varchar(200) NOT NULL,
  `a_city` varchar(50) NOT NULL,
  `a_postcode` int(11) NOT NULL,
  `a_state` varchar(20) DEFAULT NULL,
  `a_country` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_addresses`
--

INSERT INTO `tb_addresses` (`a_id`, `u_id`, `a_line1`, `a_line2`, `a_city`, `a_postcode`, `a_state`, `a_country`) VALUES
(10, 1, '4-6-6 TMN KUMBAR PERMAI', 'LINTANG KG MASJID 1', 'BAYAN LEPAS', 11920, 'PENANG', 'MALAYSIA'),
(11, 1, 'no 11 jalan lili 2', 'jejfirirmo', 'fuji', 75600, 'Haguri', 'Malaysia'),
(12, 1, 'no 11 jalan lili 2', 'jejfirirmo', 'fuji', 75600, 'Haguri', 'Malaysia'),
(13, 1, 'no 11 jalan lili 2', 'jejfirirmo', 'fuji', 75600, 'Haguri', 'Malaysia'),
(14, 1, 'no 11 jalan lili 2', 'jejfirirmo', 'fuji', 75600, 'Haguri', 'Malaysia'),
(15, 1, 'no 11 jalan lili 2', 'jejfirirmo', 'fuji', 75600, 'Haguri', 'Malaysia'),
(16, 1, 'no 11 jalan lili 2', 'jejfirirmo', 'fuji', 75600, 'Haguri', 'Malaysia'),
(17, 1, 'no 11 jalan lili 2', 'jejfirirmo', 'fuji', 75600, 'Haguri', 'Malaysia'),
(18, 8, 'y', 'y', 'y', 13435, 'y', 'y'),
(19, 8, 'y', 'y', 'y', 1234, 'u', 'u'),
(20, 8, 'q', 'q', 'q', 1134, '1', '2'),
(21, 8, 'my house', 'not your house', 'my city', 74768, 'my state', 'my country'),
(22, 8, 'hi im here again', '2', 'city', 10837, 'no state', 'manybe'),
(23, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(24, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(25, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(26, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(27, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(28, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(29, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(30, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(31, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(32, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(33, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya', 'Sungai Petani', 8000, 'Kedah', 'Malaysia'),
(34, 9, '147, Jalan Anggerik 1', 'Bandar Aman Jaya, 08000 Sungai Petani, Kedah', 'Sungai Petani', 8000, 'Kedah', 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_approvals`
--

CREATE TABLE `tb_approvals` (
  `a_id` int(11) NOT NULL,
  `a_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_approvals`
--

INSERT INTO `tb_approvals` (`a_id`, `a_desc`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `c_id` int(11) NOT NULL,
  `c_uid` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_state` varchar(50) NOT NULL,
  `c_postalcode` int(10) NOT NULL,
  `c_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`c_id`, `c_uid`, `c_name`, `c_address`, `c_state`, `c_postalcode`, `c_contact`) VALUES
(1, 1, 'JonSnow', 'KDSE', 'Johor', 51300, '0123456789'),
(2, 2, 'Arya', 'KDOJ', 'Johor', 51300, '01122334455');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grns`
--

CREATE TABLE `tb_grns` (
  `grn_id` int(11) NOT NULL,
  `grn_poid` int(11) NOT NULL,
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
(23050035, 6, '2023-06-26 18:33:43', '123', '2023-07-05', NULL, 'ad'),
(23050036, 7, '2023-06-28 04:27:08', 'abc', '2023-06-28', '-', 'tsk wanie');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mishandling`
--

CREATE TABLE `tb_mishandling` (
  `miss_id` int(11) NOT NULL,
  `miss_status` varchar(50) NOT NULL,
  `ship_id` int(11) NOT NULL,
  `miss_desc` varchar(100) NOT NULL,
  `miss_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mishandling`
--

INSERT INTO `tb_mishandling` (`miss_id`, `miss_status`, `ship_id`, `miss_desc`, `miss_date`) VALUES
(2, 'Reviewing', 29, 'Hello', '2023-06-27'),
(3, 'Pending', 29, 'asds', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `o_id` int(11) NOT NULL,
  `o_dateIssued` date DEFAULT NULL,
  `o_deliveryOrder` varchar(30) DEFAULT NULL,
  `o_jobOrder` varchar(30) DEFAULT NULL,
  `o_salesOrder` varchar(30) DEFAULT NULL,
  `o_terms` varchar(15) DEFAULT NULL,
  `o_cust` int(11) NOT NULL,
  `o_purchaseOrder` int(11) DEFAULT NULL,
  `o_qty` int(11) DEFAULT NULL,
  `o_totalAmount` float DEFAULT NULL,
  `o_tax` int(11) DEFAULT NULL,
  `o_uom` varchar(10) DEFAULT NULL,
  `o_isShip` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`o_id`, `o_dateIssued`, `o_deliveryOrder`, `o_jobOrder`, `o_salesOrder`, `o_terms`, `o_cust`, `o_purchaseOrder`, `o_qty`, `o_totalAmount`, `o_tax`, `o_uom`, `o_isShip`) VALUES
(7, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 2, 200, NULL, NULL, 2),
(8, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 3, 300, NULL, NULL, 2),
(9, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 2, 200, NULL, NULL, 2),
(10, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 1, 150, NULL, NULL, 1),
(11, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 1, 300, NULL, NULL, 2),
(12, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 1, 150, NULL, NULL, 1),
(13, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 1, 50, NULL, NULL, 1),
(14, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 2, 150, NULL, NULL, 1),
(17, '2023-06-21', NULL, NULL, NULL, NULL, 1, NULL, 1, 150, NULL, NULL, 1),
(18, '2023-06-21', NULL, NULL, NULL, NULL, 2, NULL, 2, 200, NULL, NULL, 1),
(19, '2023-06-22', NULL, NULL, NULL, NULL, 2, NULL, 1, 150, NULL, NULL, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`o_id`, `o_cust`, `o_dateIssued`, `o_deliveryOrder`, `o_jobOrder`, `o_salesOrder`, `o_terms`, `o_totalAmount`, `o_tax`, `o_status`, `o_rate`, `o_pack_stat`) VALUES
(55, 9, '2023-06-27 16:25:26', NULL, NULL, NULL, 'Bank', 10215, 0, 'Paid', 0, NULL),
(56, 9, '2023-06-27 16:30:48', NULL, NULL, NULL, 'Bank', 5746.8, 0, 'Order Placed', 0, NULL),
(57, 9, '2023-06-27 16:31:02', NULL, NULL, NULL, 'Bank', 5746.8, 0, 'Order Placed', 0, NULL),
(58, 9, '2023-06-27 16:32:43', NULL, NULL, NULL, 'Bank', 5430.9, 0, 'Order Placed', 0, NULL),
(59, 9, '2023-06-27 16:48:36', NULL, NULL, NULL, 'Bank', 10425, 0, 'Order Placed', 0, NULL),
(60, 9, '2023-06-27 16:49:36', NULL, NULL, NULL, 'Bank', 10425, 0, 'Order Placed', 0, NULL),
(61, 9, '2023-06-27 16:53:15', NULL, NULL, NULL, 'Bank', 576.8, 0, 'Order Placed', 0, NULL),
(62, 9, '2023-06-27 16:55:12', NULL, NULL, NULL, 'Bank', 330.9, 0, 'Order Placed', 0, NULL),
(63, 9, '2023-06-27 16:56:11', NULL, NULL, NULL, 'Bank', 506.8, 0, 'Order Placed', 0, NULL),
(64, 9, '2023-06-27 16:58:01', NULL, NULL, NULL, 'Bank', 506.8, 0, 'Order Placed', 0, NULL),
(65, 9, '2023-06-27 17:05:32', NULL, NULL, NULL, 'Bank', 5185, 0, 'Order Placed', 0, NULL),
(66, 9, '2023-06-27 17:10:54', NULL, NULL, NULL, 'Bank', 260.9, 0, 'Order Placed', 0, NULL),
(67, 9, '2023-06-27 17:15:24', NULL, NULL, NULL, 'Bank', 260.9, 0, 'Order Placed', 0, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order_items`
--

INSERT INTO `tb_order_items` (`oItem_id`, `oItem_orderId`, `oItem_product`, `oItem_purchaseOrder`, `oItem_project`, `oItem_qty`, `oItem_uom`, `oItem_totalprice`) VALUES
(33, 55, 132, NULL, 'None', 2, NULL, 10200),
(34, 56, 133, NULL, 'None', 2, NULL, 140),
(35, 56, 134, NULL, 'None', 2, NULL, 491.8),
(36, 56, 132, NULL, 'None', 1, NULL, 5100),
(37, 57, 133, NULL, 'None', 2, NULL, 140),
(38, 57, 134, NULL, 'None', 2, NULL, 491.8),
(39, 57, 132, NULL, 'None', 1, NULL, 5100),
(40, 58, 132, NULL, 'None', 1, NULL, 5100),
(41, 58, 133, NULL, 'None', 1, NULL, 70),
(42, 58, 134, NULL, 'None', 1, NULL, 245.9),
(43, 59, 133, NULL, 'None', 3, NULL, 210),
(44, 59, 132, NULL, 'None', 2, NULL, 10200),
(45, 60, 133, NULL, 'None', 3, NULL, 210),
(46, 60, 132, NULL, 'None', 2, NULL, 10200),
(47, 61, 134, NULL, 'None', 2, NULL, 491.8),
(48, 61, 133, NULL, 'None', 1, NULL, 70),
(49, 62, 134, NULL, 'None', 1, NULL, 245.9),
(50, 62, 133, NULL, 'None', 1, NULL, 70),
(51, 63, 134, NULL, 'None', 2, NULL, 491.8),
(52, 64, 134, NULL, 'None', 2, NULL, 491.8),
(53, 65, 133, NULL, 'None', 1, NULL, 70),
(54, 65, 132, NULL, 'None', 1, NULL, 5100),
(55, 66, 134, NULL, 'None', 1, NULL, 245.9),
(56, 67, 134, NULL, 'None', 1, NULL, 245.9);

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
-- Table structure for table `tb_payments`
--

CREATE TABLE `tb_payments` (
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_orderId` int(11) NOT NULL,
  `p_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_payments`
--

INSERT INTO `tb_payments` (`p_id`, `u_id`, `p_orderId`, `p_file`) VALUES
(44, 9, 55, 'SamplePhoto_4.jpg'),
(45, 9, 57, 'SamplePhoto_14.jpg'),
(46, 9, 58, 'SamplePhoto_12.jpg'),
(47, 9, 60, 'SamplePhoto_13.jpg'),
(48, 9, 61, 'SamplePhoto_13.jpg'),
(49, 9, 62, 'SamplePhoto_2.jpg'),
(50, 9, 63, 'SamplePhoto_3.jpg'),
(51, 9, 64, 'SamplePhoto_14.jpg'),
(52, 9, 65, 'SamplePhoto_3.jpg'),
(53, 9, 66, 'SamplePhoto_14.jpg'),
(54, 9, 67, 'SamplePhoto_14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productrequests`
--

CREATE TABLE `tb_productrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `prod_id` int(11) NOT NULL,
  `prod_code` varchar(200) DEFAULT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_image` varchar(200) DEFAULT NULL,
  `prod_ctg` int(11) NOT NULL,
  `prod_desc` text DEFAULT NULL,
  `prod_price` float NOT NULL,
  `prod_sellprice` float NOT NULL,
  `prod_stock` int(11) NOT NULL,
  `prod_supplierID` int(11) NOT NULL,
  `prod_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`prod_id`, `prod_code`, `prod_name`, `prod_image`, `prod_ctg`, `prod_desc`, `prod_price`, `prod_sellprice`, `prod_stock`, `prod_supplierID`, `prod_status`) VALUES
(132, 'ELC001', 'HP PAVILION', NULL, 1, 'zzzzzzzzzzzzzzz', 5000, 5100, 193, 1, 1),
(133, 'ELC002', 'Philip mouse', NULL, 1, 'zzzzzzzzzzzzzzzzzzzzz', 60, 70, -8, 1, 1),
(134, 'ELC003', 'Black Wireless Bluetooth Earphones', NULL, 1, NULL, 200, 245.9, -7, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_productscategories`
--

CREATE TABLE `tb_productscategories` (
  `ctg_id` int(11) NOT NULL,
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
  `ps_id` int(11) NOT NULL,
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
  `po_id` int(11) NOT NULL,
  `po_supplierID` int(11) NOT NULL,
  `po_cdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `po_paymentTerm` int(11) NOT NULL,
  `po_prID` int(11) NOT NULL,
  `po_deliveryTo` varchar(200) NOT NULL,
  `po_total` float NOT NULL,
  `po_buyer` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaseorders`
--

INSERT INTO `tb_purchaseorders` (`po_id`, `po_supplierID`, `po_cdate`, `po_paymentTerm`, `po_prID`, `po_deliveryTo`, `po_total`, `po_buyer`) VALUES
(1, 1, '2023-06-27 08:32:24', 30, 1, 'TSK SYNERGY SDN BHD\nNO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.', 10209.8, NULL),
(5, 1, '2023-06-27 08:32:27', 30, 2, 'TSK SYNERGY SDN BHD\nNO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.', 10209.8, NULL),
(6, 1, '2023-06-27 08:32:28', 30, 14, 'TSK SYNERGY SDN BHD\nNO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.', 500, NULL),
(7, 1, '2023-06-27 20:24:55', 30, 2, 'TSK SYNERGY SDN BHD\r\nNO. 19, JALAN MEGA 1/8 TAMAN PERINDUSTRIAN NUSA CEMERLANG 79200 ISKANDAR PUTERI JOHOR.', 60, 'TSK. WANIE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchaserequests`
--

CREATE TABLE `tb_purchaserequests` (
  `pr_id` int(11) NOT NULL,
  `pr_cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pr_ddate` date NOT NULL,
  `pr_qty` int(11) NOT NULL,
  `pr_uom` int(11) NOT NULL,
  `pr_supplierID` int(11) NOT NULL,
  `pr_prodID` int(11) NOT NULL,
  `pr_subtot` float NOT NULL,
  `pr_tax` float NOT NULL,
  `pr_total` float NOT NULL,
  `pr_status` int(11) NOT NULL,
  `pr_comment` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaserequests`
--

INSERT INTO `tb_purchaserequests` (`pr_id`, `pr_cdate`, `pr_ddate`, `pr_qty`, `pr_uom`, `pr_supplierID`, `pr_prodID`, `pr_subtot`, `pr_tax`, `pr_total`, `pr_status`, `pr_comment`) VALUES
(1, '2023-06-27 09:55:10', '2023-06-11', 2, 1, 1, 132, 10004.9, 0, 10004.9, 2, NULL),
(2, '2023-06-27 09:55:15', '2023-06-12', 1, 1, 1, 133, 64.9, 0, 64.9, 2, NULL),
(14, '2023-06-27 10:06:52', '2023-06-28', 10, 1, 1, 132, 50004.9, 0, 50004.9, 1, NULL);

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
-- Table structure for table `tb_shipping`
--

CREATE TABLE `tb_shipping` (
  `shp_id` int(11) NOT NULL,
  `shp_oid` int(11) NOT NULL,
  `shp_date` date NOT NULL,
  `shp_status` int(11) NOT NULL,
  `shp_courier` varchar(50) NOT NULL,
  `shp_comment` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_shipping`
--

INSERT INTO `tb_shipping` (`shp_id`, `shp_oid`, `shp_date`, `shp_status`, `shp_courier`, `shp_comment`) VALUES
(29, 7, '2023-06-23', 1, 'DHL', 'The item stuck in transit'),
(30, 8, '2023-06-24', 1, 'DHL', NULL),
(31, 9, '2023-06-28', 1, 'JnT', NULL),
(32, 11, '2023-06-28', 1, 'Poslaju', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `s_id` int(11) NOT NULL,
  `s_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`s_id`, `s_desc`) VALUES
(1, 'Pending'),
(2, 'Packed'),
(3, 'Shipped'),
(4, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suppliers`
--

CREATE TABLE `tb_suppliers` (
  `sup_id` int(11) NOT NULL,
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
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `u_contact` varchar(15) DEFAULT NULL,
  `u_pwd` varchar(255) NOT NULL,
  `u_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`u_id`, `u_email`, `u_name`, `u_contact`, `u_pwd`, `u_type`) VALUES
(1, 'koko@gmail.com', 'kokowww', '012-3456789', '$2y$10$Wp0NRlBjNTUXI4OqAZHuEOCowtGFw8.sXmEl1SRAuLirArWkU3Xqe', 'customer'),
(2, 'lala@yahoo.com', NULL, NULL, '$2y$10$BTqXQsAICniZCTJ09AR1BuMDX5i2d8XvFDWAKgY.kQuDtjOR5zP46', 'customer'),
(3, 'naam@gmail.com', NULL, NULL, '$2y$10$LaxG2pqm.baykvMy0HhK8OiJklJ4c8A93fMxMTMJWgEdlYhm2R9zq', 'customer'),
(4, 'sakinahalizzah@graduate.utm.my', NULL, NULL, '$2y$10$qM4lfWZ/SWxATuBQRh9dsek6s4kBB34Nz5vQsLTmX7zQkEPiZrjda', 'customer'),
(5, 'sara@gmail.com', 'sara', NULL, '$2y$10$o7N72tAshZWwI9jVCjkgZO61Zz7kqoiLAm8BI4ty5H0wK420R0ff.', 'customer'),
(6, 'yoyo@gmail.com', NULL, NULL, '$2y$10$IoleG51tC/JCjlbfcbD1gOcYpgGkBYJqWmNdAqCUWNJBLN46.ST2e', 'customer'),
(7, 'koko@gmail.com', NULL, NULL, '$2y$10$awVYiXNwe6eP2aunRT3FS.XfkAuc7IyPxCSNNLhqbYbrnTDHI2X9a', 'customer'),
(8, 'yanakun', NULL, NULL, '$2y$10$1ig2i6/2.Mdx5mT3Lyng4uQyvyybNLETVRlcip5aHtj1y4q2CfgeC', 'customer'),
(9, 'madihahchezabri29@gmail.com', 'Madihah CZ', '0194757676', '$2y$10$HY41XaaZ82c9236N6KFDj.1CZzvEBNVAjPNF9tvqDSyMpQzWZHGae', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_addresses`
--
ALTER TABLE `tb_addresses`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `tb_approvals`
--
ALTER TABLE `tb_approvals`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tb_grns`
--
ALTER TABLE `tb_grns`
  ADD PRIMARY KEY (`grn_id`),
  ADD KEY `grn_preqid` (`grn_poid`);

--
-- Indexes for table `tb_mishandling`
--
ALTER TABLE `tb_mishandling`
  ADD PRIMARY KEY (`miss_id`),
  ADD KEY `ship_id` (`ship_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `o_cust` (`o_cust`);

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
-- Indexes for table `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_orderId` (`p_orderId`);

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
-- Indexes for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  ADD PRIMARY KEY (`shp_id`),
  ADD KEY `shp_oid` (`shp_oid`),
  ADD KEY `shp_status` (`shp_status`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`s_id`);

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
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`u_id`);

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
-- AUTO_INCREMENT for table `tb_addresses`
--
ALTER TABLE `tb_addresses`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_approvals`
--
ALTER TABLE `tb_approvals`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_grns`
--
ALTER TABLE `tb_grns`
  MODIFY `grn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23050037;

--
-- AUTO_INCREMENT for table `tb_mishandling`
--
ALTER TABLE `tb_mishandling`
  MODIFY `miss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tb_order_items`
--
ALTER TABLE `tb_order_items`
  MODIFY `oItem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_packstatuses`
--
ALTER TABLE `tb_packstatuses`
  MODIFY `pac_stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_payments`
--
ALTER TABLE `tb_payments`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_productstatuses`
--
ALTER TABLE `tb_productstatuses`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_purchaseorders`
--
ALTER TABLE `tb_purchaseorders`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_purchaserequests`
--
ALTER TABLE `tb_purchaserequests`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_sales`
--
ALTER TABLE `tb_sales`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  MODIFY `shp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_suppliers`
--
ALTER TABLE `tb_suppliers`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_uoms`
--
ALTER TABLE `tb_uoms`
  MODIFY `uom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_addresses`
--
ALTER TABLE `tb_addresses`
  ADD CONSTRAINT `tb_addresses_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `tb_users` (`u_id`);

--
-- Constraints for table `tb_grns`
--
ALTER TABLE `tb_grns`
  ADD CONSTRAINT `tb_grns_ibfk_1` FOREIGN KEY (`grn_poid`) REFERENCES `tb_purchaseorders` (`po_id`);

--
-- Constraints for table `tb_mishandling`
--
ALTER TABLE `tb_mishandling`
  ADD CONSTRAINT `tb_mishandling_ibfk_1` FOREIGN KEY (`ship_id`) REFERENCES `tb_shipping` (`shp_id`);

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`o_cust`) REFERENCES `tb_customer` (`c_id`);

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
-- Constraints for table `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD CONSTRAINT `tb_payments_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `tb_users` (`u_id`),
  ADD CONSTRAINT `tb_payments_ibfk_2` FOREIGN KEY (`p_orderId`) REFERENCES `tb_orders` (`o_id`);

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
  ADD CONSTRAINT `tb_purchaseorders_ibfk_2` FOREIGN KEY (`po_prID`) REFERENCES `tb_purchaserequests` (`pr_id`),
  ADD CONSTRAINT `tb_purchaseorders_ibfk_3` FOREIGN KEY (`po_supplierID`) REFERENCES `tb_suppliers` (`sup_id`);

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

--
-- Constraints for table `tb_shipping`
--
ALTER TABLE `tb_shipping`
  ADD CONSTRAINT `tb_shipping_ibfk_1` FOREIGN KEY (`shp_status`) REFERENCES `tb_status` (`s_id`),
  ADD CONSTRAINT `tb_shipping_ibfk_2` FOREIGN KEY (`shp_oid`) REFERENCES `tb_order` (`o_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
