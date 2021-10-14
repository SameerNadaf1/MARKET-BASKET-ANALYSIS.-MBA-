-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2020 at 08:22 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mba`
--

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE `billdetails` (
  `bill_id` int(11) NOT NULL auto_increment,
  `bill_master_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY  (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `billdetails`
--

INSERT INTO `billdetails` (`bill_id`, `bill_master_id`, `pro_id`, `quantity`, `rate`, `discount`) VALUES
(1, 1, 1, 5, 7000, 0),
(108, 22, 1, 2, 7000, 0),
(109, 22, 2, 20, 55, 0),
(110, 23, 1, 1, 7000, 0),
(111, 24, 2, 2, 55, 1),
(112, 25, 1, 2, 7000, 0),
(113, 25, 2, 3, 55, 0),
(114, 26, 1, 20, 7000, 0),
(115, 27, 2, 2, 55, 0),
(116, 28, 1, 50, 7000, 0),
(117, 28, 2, 2, 55, 0),
(118, 28, 1, 7, 7000, 0),
(119, 1, 23, 10, 10, 0),
(120, 1, 23, 10, 10, 0),
(121, 1, 23, 10, 10, 0),
(122, 1, 23, 10, 10, 0),
(123, 1, 23, 10, 10, 0),
(124, 29, 23, 10, 10, 0),
(125, 29, 2, 10, 55, 0),
(126, 30, 23, 10, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `billmaster`
--

CREATE TABLE `billmaster` (
  `bill_master_id` int(11) NOT NULL auto_increment,
  `bill_date` varchar(50) NOT NULL,
  `cust_id` int(11) NOT NULL,
  PRIMARY KEY  (`bill_master_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `billmaster`
--

INSERT INTO `billmaster` (`bill_master_id`, `bill_date`, `cust_id`) VALUES
(1, '03-01-2020', 17),
(22, '10-09-2017', 12),
(23, '13-10-2018', 13),
(24, '13-10-2018', 13),
(25, '13-10-2018', 8),
(26, '17-10-2018', 12),
(28, '19-10-2018', 9),
(29, '03-01-2020', 17),
(30, '03-01-2020', 17);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL auto_increment,
  `cust_name` varchar(100) NOT NULL,
  `cust_phone` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `date_become_cust` date NOT NULL,
  `cust_city` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  PRIMARY KEY  (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_phone`, `cust_email`, `date_become_cust`, `cust_city`, `pincode`, `sup_id`) VALUES
(8, 'geetha', '1234567890', 'geetha@gmail.com', '2018-10-12', 'hospete', 583201, 4),
(9, 'abhi', '1234567890', 'abhi@gmail.com', '2018-10-12', 'hospete', 583201, 4),
(10, 'sushmitha', '1234567890', 'sush@gmail.com', '2018-10-12', 'hospete', 591215, 2),
(11, 'ananya', '1234567890', 'ana@gamil.com', '2018-10-12', 'hospete', 583201, 2),
(12, 'rithik', '1234567890', 'rithik@gmail.com', '2018-10-12', 'banglore', 583201, 1),
(14, 'vinayak', '8105953436', 'lohar@gmail.com', '2019-03-05', 'Nippani', 591215, 2),
(16, 'qwww', '9874563210', 'a@gmail.com', '2019-12-13', 'q', 58758, 1),
(17, 'Santosh S', '9886631818', 'santosh@gmail.com', '2020-01-03', 'Dharwad', 580006, 6);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL auto_increment,
  `emp_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `emp_phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `sup_id` int(11) NOT NULL,
  PRIMARY KEY  (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `address`, `emp_phone`, `gender`, `sup_id`) VALUES
(4, 'gayatri', 'hospet', '56695', 'female', 52),
(5, 'gayatri', 'dfsa', '9863698639', 'male', 2),
(6, 'goutami', 'cada colony\r\nhno a-13\r\nmunirabad', '9785461231', 'female', 2),
(7, 'Santosh S k', 'Dharwad', '9886631818', 'male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gst_category`
--

CREATE TABLE `gst_category` (
  `gst_category_id` int(11) NOT NULL auto_increment,
  `gst_category_name` varchar(50) NOT NULL,
  `gst_category_percentage` int(11) NOT NULL,
  PRIMARY KEY  (`gst_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gst_category`
--

INSERT INTO `gst_category` (`gst_category_id`, `gst_category_name`, `gst_category_percentage`) VALUES
(2, 'GST Rate', 5),
(3, 'GST Rate', 12),
(4, 'GST Rate', 18),
(5, 'GST Rate', 28),
(6, 'GST RATE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `hintq` varchar(200) NOT NULL,
  `hinta` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `hintq`, `hinta`, `status`) VALUES
('admin', '123123', 'admin', 'who i am', 'admin', 'active'),
('shop', '123123', 'shop', 'who i am', 'shop', 'active'),
('gayatriadvi@gmail.com', '11', 'shop', 'Enter Ur Email Id', 'gayatriadvi@gmail.com', 'Active'),
('jaya@gmail.com', '1234567890', 'shop', 'Enter Ur Email Id', 'jaya@gmail.com', 'Active'),
('vaishu@gmail.com', '1234567890', 'shop', 'Enter Ur Email Id', 'vaishu@gmail.com', 'Active'),
('ritu@gmail.com', '1234567890', 'shop', 'Enter Ur Email Id', 'ritu@gmail.com', 'Active'),
('a@gmail.com', '9874566310', 'shop', 'Enter Ur Email Id', 'a@gmail.com', 'Active'),
('sameer@gmail.com', '8861316893', 'shop', 'Enter Ur Email Id', 'sameer@gmail.com', 'Active'),
('vtech@gmail.com', '9886631818', 'shop', 'Enter Ur Email Id', 'vtech@gmail.com', 'Active'),
('saleem@gmail.com', '8861316893', 'shop', 'Enter Ur Email Id', 'saleem@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL auto_increment,
  `pro_name` varchar(100) NOT NULL,
  `pro_price_purchase` int(11) NOT NULL,
  `pro_price_sales` int(11) NOT NULL,
  `gst_category_id` int(50) NOT NULL,
  PRIMARY KEY  (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price_purchase`, `pro_price_sales`, `gst_category_id`) VALUES
(1, 'rice', 91199, 7000, 3),
(2, 'toothpaste', 60, 55, 4),
(3, 'dove soap', 50, 55, 0),
(4, 'parleg', 15, 15, 0),
(5, 'mango pickle', 150, 150, 0),
(6, 'washing powder', 85, 85, 0),
(7, 'refined sunflower oil', 250, 250, 0),
(8, 'maggi', 12, 12, 0),
(9, 'bournvita', 250, 250, 0),
(10, 'bru', 50, 50, 0),
(11, 'tea powder', 75, 75, 0),
(12, 'sugar', 45, 45, 0),
(13, 'wheat', 250, 250, 0),
(14, 'books long size', 50, 52, 0),
(15, 'pens', 5, 5, 0),
(16, 'salt', 53, 58, 0),
(17, 'jeera powder 50g', 50, 50, 0),
(18, 'jeera powder 50g', 50, 55, 0),
(19, 'jeera powder 50g', 40, 55, 2),
(21, 'moong dal 1kg', 85, 85, 2),
(22, 'w', 12, 15, 2),
(23, 'Nirama Soap', 9, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `purchasedetails`
--

CREATE TABLE `purchasedetails` (
  `pur_id` int(11) NOT NULL auto_increment,
  `pur_master_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY  (`pur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `purchasedetails`
--

INSERT INTO `purchasedetails` (`pur_id`, `pur_master_id`, `pro_id`, `quantity`, `rate`, `discount`) VALUES
(2, 11, 100, 200, 120, 201),
(3, 11, 10, 200, 120, 20),
(4, 11, 1, 200, 120, 20),
(5, 11, 1, 200, 120, 20),
(7, 3, 3, 1, 1200, 10),
(8, 2, 10, 1, 7500, 5);

-- --------------------------------------------------------

--
-- Table structure for table `purchasemaster`
--

CREATE TABLE `purchasemaster` (
  `pur_master_id` int(11) NOT NULL auto_increment,
  `pur_date` date NOT NULL,
  `sup_id` int(11) NOT NULL,
  PRIMARY KEY  (`pur_master_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `purchasemaster`
--

INSERT INTO `purchasemaster` (`pur_master_id`, `pur_date`, `sup_id`) VALUES
(2, '1999-12-16', 48),
(3, '1999-12-13', 589),
(4, '2017-04-01', 2),
(5, '2018-10-13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock_tabel`
--

CREATE TABLE `stock_tabel` (
  `stock_id` int(11) NOT NULL auto_increment,
  `product_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  PRIMARY KEY  (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `stock_tabel`
--

INSERT INTO `stock_tabel` (`stock_id`, `product_id`, `stock`, `sup_id`) VALUES
(1, 1, 100, 1),
(3, 1, 40, 4),
(4, 2, 10, 4),
(13, 4, 12, 1),
(14, 17, 1540, 1),
(15, 3, 12, 1),
(16, 2, 20, 0),
(17, 1, 10, 0),
(18, 1, 0, 2),
(19, 23, -30, 6),
(20, 2, 155, 6);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_id` int(11) NOT NULL auto_increment,
  `sup_name` varchar(100) NOT NULL,
  `sup_phone` varchar(100) NOT NULL,
  `sup_email` varchar(100) NOT NULL,
  `sup_address` varchar(100) NOT NULL,
  PRIMARY KEY  (`sup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sup_id`, `sup_name`, `sup_phone`, `sup_email`, `sup_address`) VALUES
(1, 'Gayatri Shop', '1234567890', 'gayatriadvi@gmail.com', 'kolhapur'),
(2, 'adavi associates', '1234567890', 'jaya@gmail.com', 'kolhapur'),
(3, 'v', '9874566310', 'a@gmail.com', 'xxxzzaassee'),
(4, 'Sameer', '8861316893', 'sameer@gmail.com', 'Chadachan'),
(5, 'VTECH', '9886631818', 'vtech@gmail.com', 'Dharwad'),
(6, 'Saleem Shop', '8861316893', 'saleem@gmail.com', 'RAMAZAN HARDWARE SHOP 7THWARD MAIN ROAD CHADCHAN\r\nCHADCHAN');
