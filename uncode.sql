-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2021 at 12:36 AM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uncode1`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '0',
  `expired_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acc_action_logs`
--

CREATE TABLE `acc_action_logs` (
  `log_index` int NOT NULL,
  `doc_id` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stamp_uid` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stamp_date` datetime NOT NULL,
  `log_comment` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acc_action_log_names`
--

CREATE TABLE `acc_action_log_names` (
  `id` bigint UNSIGNED NOT NULL,
  `log_index` int NOT NULL,
  `log_description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_view` smallint NOT NULL,
  `lan_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search_index` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acc_datas`
--

CREATE TABLE `acc_datas` (
  `data_index` smallint NOT NULL,
  `doc_id` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` smallint NOT NULL,
  `brutto` double(19,6) DEFAULT NULL,
  `brutto_calc` double(19,6) DEFAULT NULL,
  `vat` double(19,6) DEFAULT NULL,
  `vat_pros` double(19,6) DEFAULT NULL,
  `accepted` smallint DEFAULT NULL,
  `acceptor_id` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accepted_date` datetime DEFAULT NULL,
  `t1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t4` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t5` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t6` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t7` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t8` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t9` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t10` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t11` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t12` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t13` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t14` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t15` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t16` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t17` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t18` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t19` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t20` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t21` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t22` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t23` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t24` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t25` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t26` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t27` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t28` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t29` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t30` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t31` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t32` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t33` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t34` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t35` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t36` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t37` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t38` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t39` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t40` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t41` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t42` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t43` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t44` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t45` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t46` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t47` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t48` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t49` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t50` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t51` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t52` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t53` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t54` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t55` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t56` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t57` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t58` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t59` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t60` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t61` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t62` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t63` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t64` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t65` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t66` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t67` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t68` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t69` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t70` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t71` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t72` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t73` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t74` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t75` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t76` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t77` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t78` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t79` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t80` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t81` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t82` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t83` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t84` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t85` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `n1` double(19,6) DEFAULT NULL,
  `n2` double(19,6) DEFAULT NULL,
  `n3` double(19,6) DEFAULT NULL,
  `n4` double(19,6) DEFAULT NULL,
  `n5` double(19,6) DEFAULT NULL,
  `n6` double(19,6) DEFAULT NULL,
  `n7` double(19,6) DEFAULT NULL,
  `n8` double(19,6) DEFAULT NULL,
  `n9` double(19,6) DEFAULT NULL,
  `n10` double(19,6) DEFAULT NULL,
  `n11` double(19,6) DEFAULT NULL,
  `n12` double(19,6) DEFAULT NULL,
  `n13` double(19,6) DEFAULT NULL,
  `n14` double(19,6) DEFAULT NULL,
  `n15` double(19,6) DEFAULT NULL,
  `n16` double(19,6) DEFAULT NULL,
  `n17` double(19,6) DEFAULT NULL,
  `n18` double(19,6) DEFAULT NULL,
  `n19` double(19,6) DEFAULT NULL,
  `n20` double(19,6) DEFAULT NULL,
  `stamp_date` datetime DEFAULT NULL,
  `stamp_uid` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `net_sum` double(19,6) DEFAULT NULL,
  `net_calc` double(19,6) DEFAULT NULL,
  `layer` smallint DEFAULT NULL,
  `reviewed` smallint DEFAULT NULL,
  `reviewer_id` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviewed_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acc_data_names`
--

CREATE TABLE `acc_data_names` (
  `id` bigint UNSIGNED NOT NULL,
  `data_index` smallint NOT NULL,
  `data_field` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_value` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_type` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_formula` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_background` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_format` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listfile_index` int DEFAULT NULL,
  `lock_field` smallint DEFAULT NULL,
  `special_field` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expand_index` smallint DEFAULT NULL,
  `dont_warn` smallint DEFAULT NULL,
  `comp_bind_level` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `must_field` smallint DEFAULT NULL,
  `max_length` smallint DEFAULT NULL,
  `min_length` smallint DEFAULT NULL,
  `layer` smallint DEFAULT NULL,
  `comp_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_digitgrouping` smallint DEFAULT NULL,
  `num_digits` smallint DEFAULT NULL,
  `data_width` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compagnies`
--

CREATE TABLE `compagnies` (
  `comp_index` smallint DEFAULT NULL,
  `comp_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_name` varchar(99) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_parent` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct4` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct5` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct6` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct7` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct8` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct9` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_struct10` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comp_date1` datetime DEFAULT NULL,
  `comp_date2` datetime DEFAULT NULL,
  `comp_date3` datetime DEFAULT NULL,
  `valid_start` datetime DEFAULT NULL,
  `valid_end` datetime DEFAULT NULL,
  `edipartnerid` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_grid_fields`
--

CREATE TABLE `company_grid_fields` (
  `id` bigint UNSIGNED NOT NULL,
  `comp_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acc_fields` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `doc_id` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scan_date` datetime DEFAULT NULL,
  `comp_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_pages` smallint DEFAULT NULL,
  `flow_fixed` smallint DEFAULT NULL,
  `supplier_num` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_num` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_num` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `invoice_last_date` datetime DEFAULT NULL,
  `invoice_sum` double(19,6) DEFAULT NULL,
  `stamp_date` datetime DEFAULT NULL,
  `stamp_uid` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_index` smallint NOT NULL,
  `order_num` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_acceptor` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` double(19,6) DEFAULT NULL,
  `invoice_currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_sum_calc` double(19,6) DEFAULT NULL,
  `cash_date` datetime DEFAULT NULL,
  `accounting_period` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_name` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_t1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_t2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_t3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_t4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_t5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_t6]` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_t7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attrib_n` double(19,6) DEFAULT NULL,
  `attrib_n2` double(19,6) DEFAULT NULL,
  `attrib_n3` double(19,6) DEFAULT NULL,
  `attrib_n4` double(19,6) DEFAULT NULL,
  `attrib_d` datetime DEFAULT NULL,
  `attrib_d2` datetime DEFAULT NULL,
  `attrib_d3` datetime DEFAULT NULL,
  `attrib_d4` datetime DEFAULT NULL,
  `bff_resource` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_sum` double(19,6) DEFAULT NULL,
  `invoice_serial` double(19,6) DEFAULT NULL,
  `invoice_type` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prebooked` smallint DEFAULT NULL,
  `secondary_status` smallint DEFAULT NULL,
  `entry_date` datetime DEFAULT NULL,
  `voucher_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voucher_period` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_serial` smallint DEFAULT NULL,
  `net_sum_calc` double(19,6) DEFAULT NULL,
  `net_sum` double(19,6) DEFAULT NULL,
  `with_comments` smallint DEFAULT NULL,
  `external_status` smallint DEFAULT NULL,
  `voucher_year` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_year` smallint DEFAULT NULL,
  `gl_date` datetime DEFAULT NULL,
  `credit_memo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_sum_calc` varchar(19) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hold_owner` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lock_owner` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lock_date` datetime DEFAULT NULL,
  `lock_index` smallint DEFAULT NULL,
  `contract_num` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oneaction` smallint DEFAULT NULL,
  `transfer_check` smallint DEFAULT NULL,
  `autoflow_status_index` smallint DEFAULT NULL,
  `match_status_index` smallint DEFAULT NULL,
  `custom_action_status` smallint DEFAULT NULL,
  `preprocessing_timestamp` datetime DEFAULT NULL,
  `supplier_rep_code` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_rep_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `delivery_note_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_person` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CM_REQUEST` smallint DEFAULT NULL,
  `invoice_origin` smallint DEFAULT NULL,
  `match_wait_until` datetime DEFAULT NULL,
  `invoice_category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_invoice_id` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MC_MATCH_STATUS_INDEX` smallint DEFAULT NULL,
  `account_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_attachments`
--

CREATE TABLE `doc_attachments` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doc_id` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_file` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment_owner` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_resource` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_org_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resource_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment_encrypted` smallint DEFAULT NULL,
  `original_file_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_datas`
--

CREATE TABLE `doc_datas` (
  `data_index` smallint NOT NULL,
  `doc_id` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_value` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stamp_date` datetime DEFAULT NULL,
  `stamp_uid` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_data_names`
--

CREATE TABLE `doc_data_names` (
  `id` bigint UNSIGNED NOT NULL,
  `data_index` smallint NOT NULL,
  `data_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_value` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_type` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_index` smallint DEFAULT NULL,
  `order_index` smallint DEFAULT NULL,
  `lock_field` smallint DEFAULT NULL,
  `special_field` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_value_list` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_bind_index1` smallint DEFAULT NULL,
  `check_bind_index2` smallint DEFAULT NULL,
  `check_operator1` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_operator2` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_field` smallint DEFAULT NULL,
  `must_field` smallint DEFAULT NULL,
  `cell_format` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_length` smallint DEFAULT NULL,
  `min_length` smallint DEFAULT NULL,
  `comp_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_updateable` smallint NOT NULL,
  `fs_field` smallint NOT NULL,
  `fs_must_field` smallint NOT NULL,
  `fs_order_index` int DEFAULT NULL,
  `fs_train_order_index` int DEFAULT NULL,
  `fs_length` smallint DEFAULT NULL,
  `fs_trainable` smallint DEFAULT NULL,
  `fs_alignment` smallint DEFAULT NULL,
  `fs_default_value` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_data_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fs_lock_field` smallint DEFAULT NULL,
  `use_digitgrouping` smallint DEFAULT NULL,
  `num_digits` smallint DEFAULT NULL,
  `data_width` int DEFAULT NULL,
  `fs_enablebatchlocking` smallint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_files`
--

CREATE TABLE `doc_files` (
  `id` bigint UNSIGNED NOT NULL,
  `doc_id` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_page` int NOT NULL,
  `doc_file` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_format` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_resource` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_org_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_encrypted` smallint DEFAULT NULL,
  `external_ref` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_types`
--

CREATE TABLE `invoice_types` (
  `invoice_type_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_type_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handle_code` smallint DEFAULT NULL,
  `comp_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layer` smallint DEFAULT NULL,
  `credit_memo` int DEFAULT NULL,
  `INVOICE_TYPE_CAT` smallint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_line_items`
--

CREATE TABLE `ip_line_items` (
  `id` bigint UNSIGNED NOT NULL,
  `LIT_DOC_ID` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LIT_ROWID` int NOT NULL,
  `LIT_PRODUCT_CODE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_ITEM_DESCRIPTION` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_ADD_KEY_CODE` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_DISCOUNT_PER` double(19,6) DEFAULT NULL,
  `LIT_DISCOUNT_AMOUNT` double(19,6) DEFAULT NULL,
  `LIT_VAT_PER` double(19,6) DEFAULT NULL,
  `LIT_VAT_AMOUNT` double(19,6) DEFAULT NULL,
  `LIT_QUANTITY` double(19,6) DEFAULT NULL,
  `LIT_QUANTITY_UNIT` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_NET_SUM` double(19,6) DEFAULT NULL,
  `LIT_GROSS_SUM` double(19,6) DEFAULT NULL,
  `LIT_APRICE_NET` double(19,6) DEFAULT NULL,
  `LIT_APRICE_GROSS` double(19,6) DEFAULT NULL,
  `LIT_ORDER_NUMBER` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_ORDER_ROW_NUMBER` int DEFAULT NULL,
  `LIT_INFO_ITEM` smallint DEFAULT NULL,
  `LIT_STAMP_TIME` datetime DEFAULT NULL,
  `LIT_CALC_ITEM_TOTAL` double(19,6) DEFAULT NULL,
  `LIT_MATCH_STATUS_INDEX` smallint DEFAULT NULL,
  `LIT_T1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T6` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T7` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T8` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T9` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T10` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T11` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T12` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T13` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T14` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T15` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T16` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T17` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T18` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T19` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T20` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `[LIT_T21` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T22` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T23` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T24` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T25` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T26` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T27` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T28` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T29` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T30` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T31` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T32` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T33` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T34` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T35` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T36` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T37` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T38` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T39` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T40` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T41` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T42` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T43` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T44` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T45` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T46` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T47` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T48` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T49` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_T50` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIT_N1` double(19,6) DEFAULT NULL,
  `LIT_N2` double(19,6) DEFAULT NULL,
  `LIT_N3` double(19,6) DEFAULT NULL,
  `LIT_N4` double(19,6) DEFAULT NULL,
  `LIT_N5` double(19,6) DEFAULT NULL,
  `LIT_N6` double(19,6) DEFAULT NULL,
  `LIT_N7` double(19,6) DEFAULT NULL,
  `LIT_N8` double(19,6) DEFAULT NULL,
  `LIT_N9` double(19,6) DEFAULT NULL,
  `LIT_N10` double(19,6) DEFAULT NULL,
  `LIT_D1` datetime DEFAULT NULL,
  `LIT_D2` datetime DEFAULT NULL,
  `LIT_D3` datetime DEFAULT NULL,
  `LIT_D4` datetime DEFAULT NULL,
  `LIT_D5` datetime DEFAULT NULL,
  `LIT_D6` datetime DEFAULT NULL,
  `LIT_D7` datetime DEFAULT NULL,
  `LIT_D8` datetime DEFAULT NULL,
  `LIT_D9` datetime DEFAULT NULL,
  `LIT_D10` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ip_line_item_params`
--

CREATE TABLE `ip_line_item_params` (
  `id` bigint UNSIGNED NOT NULL,
  `LIP_DATA_FIELD` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LIP_COMP_NO` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIP_FIELD_LABEL` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIP_DATA_TYPE` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIP_SCREEN_POSITION` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIP_FIELD_LENGHT` smallint DEFAULT NULL,
  `LIP_SHOW_IN_CLIENT` smallint DEFAULT NULL,
  `LIP_ORDER_ROW_DATA_FIELD` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIP_ORDER_ROW_DATA_FIELD_LABEL` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIP_ASSOSIATION_FIELD` smallint DEFAULT NULL,
  `LIP_RULES_FIELD` smallint DEFAULT NULL,
  `lip_col_order` smallint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_04_160106_create_acc_datas_table', 2),
(5, '2021_01_04_160133_create_acc_data_names_table', 2),
(6, '2021_01_04_160213_create_acc_action_logs_table', 2),
(7, '2021_01_04_160229_create_acc_action_log_names_table', 2),
(8, '2021_01_04_160334_create_doc_attachments_table', 2),
(9, '2021_01_04_160401_create_doc_datas_table', 2),
(10, '2021_01_04_160415_create_doc_data_names_table', 2),
(11, '2021_01_04_160446_create_doc_files_table', 2),
(12, '2021_01_04_160507_create_docs_table', 2),
(13, '2021_01_04_160540_create_ip_line_items_table', 2),
(14, '2021_01_04_161729_create_ip_line_item_params_table', 2),
(15, '2021_01_04_161833_create_invoice_types_table', 2),
(16, '2021_01_04_161903_create_compagnies_table', 2),
(17, '2021_01_04_161949_create_company_grid_fields_table', 2),
(18, '2021_01_04_162033_create_accounts_table', 2),
(19, '2021_01_04_162302_add_foreign_key_to_acc_datas_table', 2),
(20, '2021_01_05_125112_add_fk_to_users_table', 3),
(21, '2021_01_05_205025_add_fk_to_company_grid_fields_table', 3),
(22, '2021_01_05_205126_add_fk_to_invoice_types_table', 3),
(23, '2021_01_05_210103_add_fk_to_ip_line_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'client', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `email`, `email_verified_at`, `password`, `nom_role`, `role_id`, `remember_token`, `created_at`, `updated_at`, `tel`, `account_id`) VALUES
(3, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$Ry0.9hF64KH/TABotL9.OeBLw7LevL2CrkTRRWG5mAkX8mqCASiu2', 'admin', NULL, NULL, '2020-12-31 19:21:04', '2020-12-31 19:21:04', '771232334', NULL),
(4, 'Moustapha', 'ten', 'tentafa@gmail.com', NULL, '$2y$10$mgroP.uZfWypSHraciGr5u.WlZt/SPoofhMcsGncJqBVDFfz7lWhO', 'client', NULL, NULL, '2020-12-31 19:23:39', '2020-12-31 19:23:39', '7755258896', NULL),
(6, 'gueye', 'lufa', 'fallougueye197@gmail.com', NULL, '$2y$10$YJuYsHMu1NPLiQEThLGlc.Ft2w4Gnt5hdKDbgPIRrtQbvOLerYFVS', 'client', NULL, NULL, '2020-12-31 19:28:15', '2020-12-31 19:28:15', '7755258898', NULL),
(7, 'Moustapha', 'Ten', 'tenetafa@gmail.com', NULL, '$2y$10$gnv97tryLlix1ZMI36RAQe7g3W4iyfdrqdvSHaPU2eyGIhDjkOlHq', 'client', NULL, NULL, '2020-12-31 19:35:20', '2020-12-31 19:35:20', '7755258845', NULL),
(8, 'modou', 'fall', 'modou@gmail.com', NULL, '$2y$10$n6MhSLg8QbaXPb5CmZusEunAOtUouy6XioSOSfmvgZBCFvunt7vCS', 'client', NULL, NULL, '2020-12-31 19:42:22', '2020-12-31 19:42:22', '774562136', NULL),
(9, 'tafa', 'mustaf', 'tenetafa@yahoo.com', NULL, '$2y$10$XNGPc7M3cZ3.CtCjCrULA.9RRjLPFyHYK7bGZJkQLggiRu4V5ARGi', 'client', NULL, NULL, '2021-01-07 00:25:59', '2021-01-07 00:25:59', '+221776767949', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc_action_logs`
--
ALTER TABLE `acc_action_logs`
  ADD PRIMARY KEY (`log_index`),
  ADD KEY `acc_action_logs_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `acc_action_log_names`
--
ALTER TABLE `acc_action_log_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_action_log_names_log_index_foreign` (`log_index`);

--
-- Indexes for table `acc_datas`
--
ALTER TABLE `acc_datas`
  ADD PRIMARY KEY (`data_index`),
  ADD KEY `acc_datas_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `acc_data_names`
--
ALTER TABLE `acc_data_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acc_data_names_data_index_foreign` (`data_index`);

--
-- Indexes for table `compagnies`
--
ALTER TABLE `compagnies`
  ADD PRIMARY KEY (`comp_no`);

--
-- Indexes for table `company_grid_fields`
--
ALTER TABLE `company_grid_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_grid_fields_comp_no_foreign` (`comp_no`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `doc_attachments`
--
ALTER TABLE `doc_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_attachments_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `doc_datas`
--
ALTER TABLE `doc_datas`
  ADD PRIMARY KEY (`data_index`),
  ADD KEY `doc_datas_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `doc_data_names`
--
ALTER TABLE `doc_data_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_data_names_data_index_foreign` (`data_index`);

--
-- Indexes for table `doc_files`
--
ALTER TABLE `doc_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doc_files_doc_id_foreign` (`doc_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_types`
--
ALTER TABLE `invoice_types`
  ADD PRIMARY KEY (`invoice_type_code`),
  ADD KEY `invoice_types_comp_no_foreign` (`comp_no`);

--
-- Indexes for table `ip_line_items`
--
ALTER TABLE `ip_line_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip_line_items_lit_doc_id_foreign` (`LIT_DOC_ID`);

--
-- Indexes for table `ip_line_item_params`
--
ALTER TABLE `ip_line_item_params`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_account_id_foreign` (`account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `acc_action_log_names`
--
ALTER TABLE `acc_action_log_names`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `acc_data_names`
--
ALTER TABLE `acc_data_names`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_grid_fields`
--
ALTER TABLE `company_grid_fields`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_attachments`
--
ALTER TABLE `doc_attachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_data_names`
--
ALTER TABLE `doc_data_names`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doc_files`
--
ALTER TABLE `doc_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_line_items`
--
ALTER TABLE `ip_line_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ip_line_item_params`
--
ALTER TABLE `ip_line_item_params`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acc_action_logs`
--
ALTER TABLE `acc_action_logs`
  ADD CONSTRAINT `acc_action_logs_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acc_action_log_names`
--
ALTER TABLE `acc_action_log_names`
  ADD CONSTRAINT `acc_action_log_names_log_index_foreign` FOREIGN KEY (`log_index`) REFERENCES `acc_action_logs` (`log_index`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acc_datas`
--
ALTER TABLE `acc_datas`
  ADD CONSTRAINT `acc_datas_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acc_data_names`
--
ALTER TABLE `acc_data_names`
  ADD CONSTRAINT `acc_data_names_data_index_foreign` FOREIGN KEY (`data_index`) REFERENCES `acc_datas` (`data_index`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_grid_fields`
--
ALTER TABLE `company_grid_fields`
  ADD CONSTRAINT `company_grid_fields_comp_no_foreign` FOREIGN KEY (`comp_no`) REFERENCES `compagnies` (`comp_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doc_attachments`
--
ALTER TABLE `doc_attachments`
  ADD CONSTRAINT `doc_attachments_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doc_datas`
--
ALTER TABLE `doc_datas`
  ADD CONSTRAINT `doc_datas_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doc_data_names`
--
ALTER TABLE `doc_data_names`
  ADD CONSTRAINT `doc_data_names_data_index_foreign` FOREIGN KEY (`data_index`) REFERENCES `doc_datas` (`data_index`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doc_files`
--
ALTER TABLE `doc_files`
  ADD CONSTRAINT `doc_files_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice_types`
--
ALTER TABLE `invoice_types`
  ADD CONSTRAINT `invoice_types_comp_no_foreign` FOREIGN KEY (`comp_no`) REFERENCES `compagnies` (`comp_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ip_line_items`
--
ALTER TABLE `ip_line_items`
  ADD CONSTRAINT `ip_line_items_lit_doc_id_foreign` FOREIGN KEY (`LIT_DOC_ID`) REFERENCES `docs` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
