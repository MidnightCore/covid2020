-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 02:33 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `fname`, `lname`, `role`) VALUES
('savemed2020', 'savemed2020', 'palm', 'hngeng', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `save_med`
--

CREATE TABLE `save_med` (
  `id` int(10) NOT NULL,
  `need` text NOT NULL,
  `piece` int(11) NOT NULL,
  `place` text NOT NULL,
  `applicant` text NOT NULL,
  `contact` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `save_med`
--

INSERT INTO `save_med` (`id`, `need`, `piece`, `place`, `applicant`, `contact`, `status`) VALUES
(1, 'face shield', 400, 'ภาควิชาวิสัญญีวิทยา คณะแพทยศาสตร์ศิริราชพยาบาล บางกอกน้อย กทม 10700', 'นพ.สมเกียรติ อรุณพฤกษากุล', '', 'รอรับบริจาค'),
(2, 'face shield', 200, 'ศูนย์บริการสาธารณสุขโพธิ์กลาง เทศบาลนครนครราชสีมา \r\nจ.นครราชสีมา', 'พญ.จิราวรรณ จันทร์เลิศฤทธิ์', '', 'รอรับบริจาค'),
(3, 'face shield', 60, 'หน่วยทารกแรกเกิด \r\nกองกุมารเวชกรรม\r\nโรงพยาบาลพระมงกุฏเกล้า\r\nที่อยู่ 315 \r\nอาคารพัชรกิตติยาภา ชั้น2 แขวงทุ่งพญาไท เขตราชเทวี กทม. 10400', 'ภัทราพร จันทร์เมืองไทย', '', 'รอรับบริจาค'),
(4, 'face shield', 200, 'คณะแพทยศาสตร์มหาวิทยาลัยบูรพา 169 ถ.ลงหาดบางแสน\r\nต.แสนสุข อ.เมือง จ.ชลบุรี 20131', 'รมร แย้มประทุม', '', 'รอรับบริจาค'),
(5, 'face shield', 100, 'แผนกวิสัญญีกรรม รพ.สมเด็จพระปิ่นเกล้า กรมแพทย์ทหารเรือ  504 บุคคโล ธนบุรี กทม. 10600', 'น.ต.หญิงพรประภา สุขียามานนท์', 'ที่ทำงาน 024752520 ส่วนตัว 0894412216', 'รอรับบริจาค'),
(6, 'face shield', 100, 'รพ.เวชการุณย์รัศมิ์', 'สุพรรณี สุขสม', '0897680841 ', 'รอรับบริจาค '),
(7, 'face shield', 100, 'ตึกผู้ป่วยนอกชั้น7 แผนกจิตเวชฟื้นฟู  รพ.ศิริราช เลขที่ 2 ถ.วังหลัง แขวงศิริราช เขตบางกอกน้อย กรุงเทพมหานคร 10700', 'อภิญญา สิริไพบูลย์กิจ', '', 'รอรับบริจาค'),
(8, 'face shield', 100, 'อาคารหอพักนักศึกษาและบุคลากร 5 สถาบันการแพทย์จักรีนฤบดินทร์ 111/2 หมู่ 14 ตำบลบางปลา อำเภอบางพลี จังหวัดสมุทรปราการ 10540', 'นายปณิธาน ตันติยาทร', '0891696045', 'รอรับบริจาค'),
(9, 'face shield', 100, 'หน่วยผู้ป่วยนอกอายุรกรรม ชั้น3 โซนC โรงพยาบาลรามาธิบดีจักรีนฤบดินทร์ 111 หมู่14 ถนนเลียบคลองส่งน้ำสุวรรณภูมิ ตำบลบางปลา อำเภอบางพลี จังหวัดสมุทรปราการ 10540', 'หน่วยผู้ป่วยนอกอายุรกรรม โรงพยาบาลรามาธิบดีจักรีนฤบดินทร์', '', 'รอรับบริจาค'),
(10, 'face shield', 100, 'รพ.มหาวชิราลงกรณธัญบุรี', 'อุไรรัตน์ ผดุงโชค', '0972400909', 'รอรับบริจาค'),
(11, 'face shield', 100, 'รพ.วิภาวดี', 'พัชรา เถียรประภากุล', '0851191453', 'รอรับบริจาค '),
(12, 'face shield', 100, 'รพ มงกุฎวัฒนะ', 'คุณปลื้มจิตร์', '0815612065', 'รอรับบริจาค'),
(13, 'face shield', 100, 'รพ.สินแพทย์', 'สุภาพร สาครรัตน์', '0819053779', 'รอรับบริจาค'),
(14, 'face shield', 100, 'รพ.ซีจีเอช', 'อุษา ชาอุ่น', '0996146128', 'รอรับบริจาค'),
(15, 'face shield', 100, '39/648 หมู่ที่ 1 หมู่บ้านเพ็ชรรัตน์ เลควิลล์ ต. ทับมา อ. เมืองระยอง จ. ระยอง 21000 ', 'ภัณฑารักษ์ เอกุล', '080-554-6426', 'รอรับบริจาค'),
(16, 'face shield', 200, '177/1 ถ.เทศบาล4 ซ.5/1 ต.ปากเพรียว อ.เมือง จ.สระบุรี 18000 ', 'พญ จิราวรรณ องค์วรรณดี', '0817516001', 'รอรับบริจาค'),
(17, 'face shield', 100, '98/42 หมู่บ้านไลฟ์บางกอกบลูเลอวาร์ด ซอยรามอินทรา 23 ถนนรามอินทรา แขวงอนุสาวรีย์ เขตบางเขน กทม. 10220', 'คุณพีระกานต์ ปั้นสนิท ', '0854535695', 'รอรับบริจาค'),
(18, 'face shield', 200, 'กลุ่มงานผู้ป่วยนอก รพ.ศูนย์ขอนแก่น ถนนศรีจันทร์ ต.ในเมือง อ.เมือง \r\nจ.ขอนแก่น 40000', 'คุณนิตยา ศรีสุทธิกมล', '', 'รอรับบริจาค');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_med`
--
ALTER TABLE `save_med`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `save_med`
--
ALTER TABLE `save_med`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
