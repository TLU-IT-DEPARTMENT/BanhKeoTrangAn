-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 07:05 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banhkeotrangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `IDCart` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `IDProduct` int(11) NOT NULL,
  `CartTime` datetime DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `IDCategory` int(11) NOT NULL,
  `IDCategoryParent` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Slug` varchar(255) DEFAULT NULL,
  `OrderCategory` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`IDCategory`, `IDCategoryParent`, `Name`, `Slug`, `OrderCategory`, `Description`, `Status`) VALUES
(1, NULL, 'Thị trường trong nước', 'thi-truong-trong-nuoc', 1, 'Tin tức Thị trường trong nước', 1),
(3, NULL, 'Thị trường quốc tế', 'thi-truong-quoc-te', 2, 'Tin tức Thị trường quốc tế', 1),
(4, NULL, 'Tin tức công ty', 'tin-tuc-cong-ty', 3, 'Tin tức công ty Tràng An', 1),
(5, 1, 'Thực phẩm', 'thuc-pham', 1, 'Tin tức thực phẩm', 1),
(6, 1, 'Hàng tiêu dùng', 'hang-tieu-dung', 2, 'Tin tức hàng tiêu dùng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE IF NOT EXISTS `category_post` (
  `IDCategory` int(11) NOT NULL,
  `IDPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kindofproduct`
--

CREATE TABLE IF NOT EXISTS `kindofproduct` (
  `IDKindOfProduct` int(11) NOT NULL,
  `IDKindOfProductParent` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Slug` varchar(255) DEFAULT NULL,
  `OrderKindOfProduct` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kindofproduct_product`
--

CREATE TABLE IF NOT EXISTS `kindofproduct_product` (
  `IDKindOfProduct` int(11) NOT NULL,
  `IDProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `IDPost` int(11) NOT NULL,
  `Title` text,
  `Content` text,
  `Slug` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `PostTime` datetime DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`IDPost`, `Title`, `Content`, `Slug`, `Image`, `PostTime`, `Status`) VALUES
(1, 'Tuyển nhân sự', '<p>C&ocirc;ng ty Cổ phần B&aacute;nh Kẹo Tr&agrave;ng An th&ocirc;ng b&aacute;o tuyển nh&acirc;n sự.</p>\r\n\r\n<p>asdf</p>\r\n\r\n<p>gjkgfdsa</p>\r\n\r\n<p>sdfghjhgasdfgh</p>\r\n\r\n<p>s</p>\r\n\r\n<p>dfghj</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">artasdfghgfs</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fgg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fdsdfghg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fdsdf</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">ghgfd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfghhgfd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fghg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">hgd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fghgfd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fghgfd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fghgf</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfgh</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">gfg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">hgfdf</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">ghgf</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">ghgfd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fgfd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fgert</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">rrtyt</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">rrty</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">err</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">t</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">ty</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">gf</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">gf</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">g</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">g</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">g</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">g</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">f</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">f</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">d</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">gfdfg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fghgf</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">d</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fgd</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">g</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">g</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfghdfg</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">dfg</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">f</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">f</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">g</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p><strong><span style="font-size:12px"><span style="color:#FFD700"><span style="background-color:#A52A2A">fg</span></span></span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'tuyen-nhan-su', 'ITStore.jpg', '2016-02-01 23:43:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `IDProduct` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Slug` varchar(255) DEFAULT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `UnitPrice` decimal(10,0) DEFAULT NULL,
  `Description` text,
  `Rate` float DEFAULT NULL,
  `RatePeople` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE IF NOT EXISTS `productdetail` (
  `IDProductDetail` int(11) NOT NULL,
  `IDProduct` int(11) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Caption` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE IF NOT EXISTS `receipt` (
  `IDReceipt` int(11) NOT NULL,
  `IDUser` int(11) NOT NULL,
  `ReceiptTime` datetime DEFAULT NULL,
  `Total` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receiptdetail`
--

CREATE TABLE IF NOT EXISTS `receiptdetail` (
  `IDReceipt` int(11) NOT NULL,
  `IDCart` int(11) NOT NULL,
  `SaleUnitPrice` decimal(10,0) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `IDTag` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Slug` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tag_post`
--

CREATE TABLE IF NOT EXISTS `tag_post` (
  `IDTag` int(11) NOT NULL,
  `IDPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tag_product`
--

CREATE TABLE IF NOT EXISTS `tag_product` (
  `IDTag` int(11) NOT NULL,
  `IDProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `IDUser` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Fullname` varchar(50) DEFAULT NULL,
  `Gender` int(11) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUser`, `Name`, `Password`, `Fullname`, `Gender`, `Birthday`, `Address`, `Email`, `PhoneNumber`, `Status`) VALUES
(1, 'admin', '44ca5fa5c67e434b9e779c5febc46f06', 'Nguyễn Trung Thành', 1, NULL, 'Hà Nội, Việt Nam', 'thanhnt115@gmail.com', '01655251141', 1),
(2, 'thanhnt602', '8377d69455a52050d61ac90d9894c09a', 'Nguyễn Trung Thành', 0, '1995-02-06', 'Vạn Phúc - Hà Đông - Hà Nội', 'nguyentrungthanh602@gmail.com', '01655251141', 1),
(3, 'trangthu2902', '8377d69455a52050d61ac90d9894c09a', 'Nguyễn Thị Trang Thư', 1, '1996-02-29', 'Kiến Hưng - Hà Đông', 'trangthukem2921996@gmail.com', '01658405015', 0),
(4, 'loint1', 'f5f37c87b9712d367aa543d90287218b', 'Nguyễn Tá Lợi', 0, '1993-03-22', 'Hà Nội', 'loint12@gmail.com', '', 1),
(5, 'kienbui', '8377d69455a52050d61ac90d9894c09a', 'Bùi Mạnh Kiên', 0, '1994-04-15', '', 'kienbui@gmail.com', '', 0),
(6, 'tuanteo', '8377d69455a52050d61ac90d9894c09a', '', 0, '1995-11-11', '', 'tuanteo@gmail.com', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`IDCart`), ADD KEY `IDUser` (`IDUser`), ADD KEY `IDProduct` (`IDProduct`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDCategory`), ADD KEY `IDCategoryParent` (`IDCategoryParent`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD KEY `IDPost` (`IDPost`), ADD KEY `IDCategory` (`IDCategory`);

--
-- Indexes for table `kindofproduct`
--
ALTER TABLE `kindofproduct`
  ADD PRIMARY KEY (`IDKindOfProduct`), ADD KEY `IDKindOfProductParent` (`IDKindOfProductParent`);

--
-- Indexes for table `kindofproduct_product`
--
ALTER TABLE `kindofproduct_product`
  ADD KEY `IDKindOfProduct` (`IDKindOfProduct`), ADD KEY `IDProduct` (`IDProduct`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`IDPost`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`IDProduct`);

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`IDProductDetail`), ADD KEY `IDProduct` (`IDProduct`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`IDReceipt`), ADD KEY `IDUser` (`IDUser`);

--
-- Indexes for table `receiptdetail`
--
ALTER TABLE `receiptdetail`
  ADD PRIMARY KEY (`IDReceipt`,`IDCart`), ADD KEY `IDReceipt` (`IDReceipt`), ADD KEY `IDCart` (`IDCart`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`IDTag`);

--
-- Indexes for table `tag_post`
--
ALTER TABLE `tag_post`
  ADD KEY `IDTag` (`IDTag`), ADD KEY `IDPost` (`IDPost`);

--
-- Indexes for table `tag_product`
--
ALTER TABLE `tag_product`
  ADD KEY `IDTag` (`IDTag`), ADD KEY `IDProduct` (`IDProduct`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `IDCart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `IDCategory` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kindofproduct`
--
ALTER TABLE `kindofproduct`
  MODIFY `IDKindOfProduct` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `IDPost` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `IDProduct` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `IDProductDetail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `IDReceipt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `IDTag` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`IDProduct`) REFERENCES `product` (`IDProduct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`IDCategoryParent`) REFERENCES `category` (`IDCategory`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category_post`
--
ALTER TABLE `category_post`
ADD CONSTRAINT `category_post_ibfk_1` FOREIGN KEY (`IDPost`) REFERENCES `post` (`IDPost`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `category_post_ibfk_2` FOREIGN KEY (`IDCategory`) REFERENCES `category` (`IDCategory`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kindofproduct`
--
ALTER TABLE `kindofproduct`
ADD CONSTRAINT `kindofproduct_ibfk_1` FOREIGN KEY (`IDKindOfProductParent`) REFERENCES `kindofproduct` (`IDKindOfProduct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kindofproduct_product`
--
ALTER TABLE `kindofproduct_product`
ADD CONSTRAINT `kindofproduct_product_ibfk_1` FOREIGN KEY (`IDProduct`) REFERENCES `product` (`IDProduct`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `kindofproduct_product_ibfk_2` FOREIGN KEY (`IDKindOfProduct`) REFERENCES `kindofproduct` (`IDKindOfProduct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productdetail`
--
ALTER TABLE `productdetail`
ADD CONSTRAINT `productdetail_ibfk_1` FOREIGN KEY (`IDProduct`) REFERENCES `product` (`IDProduct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `user` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receiptdetail`
--
ALTER TABLE `receiptdetail`
ADD CONSTRAINT `receiptdetail_ibfk_1` FOREIGN KEY (`IDReceipt`) REFERENCES `receipt` (`IDReceipt`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `receiptdetail_ibfk_2` FOREIGN KEY (`IDCart`) REFERENCES `cart` (`IDCart`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag_post`
--
ALTER TABLE `tag_post`
ADD CONSTRAINT `tag_post_ibfk_1` FOREIGN KEY (`IDTag`) REFERENCES `tag` (`IDTag`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tag_post_ibfk_2` FOREIGN KEY (`IDPost`) REFERENCES `post` (`IDPost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tag_product`
--
ALTER TABLE `tag_product`
ADD CONSTRAINT `tag_product_ibfk_1` FOREIGN KEY (`IDProduct`) REFERENCES `product` (`IDProduct`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tag_product_ibfk_2` FOREIGN KEY (`IDTag`) REFERENCES `tag` (`IDTag`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
