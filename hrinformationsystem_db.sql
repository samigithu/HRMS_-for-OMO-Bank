-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 12:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrinformationsystem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence_table`
--

CREATE TABLE `attendence_table` (
  `id` int(50) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `morning` varchar(50) NOT NULL,
  `afternoon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence_table`
--

INSERT INTO `attendence_table` (`id`, `EmpId`, `date`, `morning`, `afternoon`) VALUES
(15, '56', '2022-09-03', '', 'Present'),
(14, '23', '2022-09-03', '', ''),
(13, '78', '2022-09-03', '', ''),
(12, '22', '2022-09-03', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `branches_table`
--

CREATE TABLE `branches_table` (
  `branches_id` int(11) NOT NULL,
  `branches_name` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches_table`
--

INSERT INTO `branches_table` (`branches_id`, `branches_name`, `date_created`) VALUES
(1, 'Villasis Branch', '2022-08-27'),
(2, 'Solsona Branch', '2020-10-03'),
(6, 'A/minch', '2022-09-02'),
(4, 'Dato kutir Hulet ', '2022-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_table`
--

CREATE TABLE `corporate_table` (
  `corporate_id` int(11) NOT NULL,
  `corporate_name` varchar(255) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_table`
--

INSERT INTO `corporate_table` (`corporate_id`, `corporate_name`, `date_created`) VALUES
(1, 'Risk Department', '2022-08-27'),
(2, 'Credit Department', '2020-10-03'),
(3, 'Asset Management Department', '2020-10-03'),
(4, 'Finance Department', '2020-10-03'),
(5, 'Accounting Department', '2020-10-03'),
(6, 'Customer Relation Management', '2020-10-03'),
(7, 'HR Department', '2020-10-03'),
(8, 'IT Department', '2020-10-03'),
(9, 'Audit Department', '2022-09-02'),
(10, 'Complience Department', '2020-10-03'),
(11, 'Corporate Secretary\'s Office', '2020-10-03'),
(12, 'President\'s Office', '2020-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_id` int(11) NOT NULL,
  `employee_companyid` varchar(255) DEFAULT NULL,
  `employee_firstname` varchar(255) DEFAULT NULL,
  `employee_lastname` varchar(255) DEFAULT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employee_pass` varchar(100) NOT NULL,
  `employee_middlename` varchar(255) DEFAULT NULL,
  `branches_datefrom` varchar(255) DEFAULT NULL,
  `branches_recentdate` varchar(255) DEFAULT NULL,
  `employee_department` varchar(255) DEFAULT NULL,
  `employee_branches` varchar(255) DEFAULT NULL,
  `employee_position` varchar(255) DEFAULT NULL,
  `employee_contact` varchar(255) DEFAULT NULL,
  `employee_sss` varchar(255) DEFAULT NULL,
  `employee_tin` varchar(255) DEFAULT NULL,
  `employee_hdmf_pagibig` varchar(100) NOT NULL,
  `employee_gsis` varchar(255) DEFAULT NULL,
  `employee_file201` text CHARACTER SET utf8 DEFAULT NULL,
  `employee_image` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `employee_companyid`, `employee_firstname`, `employee_lastname`, `employee_email`, `employee_pass`, `employee_middlename`, `branches_datefrom`, `branches_recentdate`, `employee_department`, `employee_branches`, `employee_position`, `employee_contact`, `employee_sss`, `employee_tin`, `employee_hdmf_pagibig`, `employee_gsis`, `employee_file201`, `employee_image`) VALUES
(7, '22', 'Samuel', 'Roba', 'Sami@amu.com', 'employee', 'Gesese', '2022-08-12', '2022-08-22', 'IT Department', 'Villasis Branch', 'Employee', '09456781234', 'Male', '10001123456765432', 'OMO BANK', 'Sami@amu.com', '../file_upload/202208251661427145_', '../image_upload/202208251661427145_FB_IMG_16606684684407067.jpg'),
(11, '78', 'Abe', 'Gesese', 'root@gmail.com', 'abe', 'as', '2022-08-03', '2022-08-09', 'Finance Department', 'Villasis Branch', 'Employee', '0945678', '', '100986542', 'OMO BANK', 'root@gmail.com', '../file_upload/202208251661426861_', '../image_upload/202208251661426861_'),
(12, '23', 'Omo', 'Employee', 'kumeda@123', '202cb962ac59075b964b07152d234b70', 'Bank', '2022-08-24', '2022-09-02', 'IT Department', 'Dato kutir Hulet ', 'Employee', '09873456723', 'Male', '1000233234562144', '', 'employee@123', '../file_upload/202209031662164411_', '../image_upload/202209031662164411_omo1.jpg'),
(17, '56', 'Omo', 'Employee', 'hremployee@gmail.com', 'faea5511822efa343c946a3b33485a7f', 'Bank', '2022-09-14', '2022-09-14', 'Finance Department', 'A/minch', 'Employee', '09876523456', 'Male', '100009876543234567', '', NULL, '../file_upload/202209031662167923_t.txt', '../image_upload/202209031662167923_bg3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hr_member`
--

CREATE TABLE `hr_member` (
  `hr_id` int(11) NOT NULL,
  `hr_companyid` varchar(255) DEFAULT NULL,
  `hr_firstname` varchar(255) DEFAULT NULL,
  `hr_lastname` varchar(255) DEFAULT NULL,
  `hr_middlename` varchar(255) DEFAULT NULL,
  `hr_contactno` varchar(255) DEFAULT NULL,
  `hr_email` varchar(100) NOT NULL,
  `hr_password` varchar(100) NOT NULL,
  `hr_type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_member`
--

INSERT INTO `hr_member` (`hr_id`, `hr_companyid`, `hr_firstname`, `hr_lastname`, `hr_middlename`, `hr_contactno`, `hr_email`, `hr_password`, `hr_type`) VALUES
(2, '1232133', 'hr officer', 'hr officer', 'h', '09777777777', 'hrofficer@gmail.com', 'b751fe1687f236ec50aa773676038973', 'HR Officer'),
(4, '3123213', 'hrhead', 'hrhead', 'a', '09978987978', 'hrhead@gmail.com', '013105255453d64e60d2ccc2ba57a1df', 'HR Head'),
(12, '22', 'Samuel', 'Roba', 'Gesese', '09876543212', 'Sami@amu.com', '1cc39ffd758234422e1f75beadfc5fb2', 'HR Head'),
(17, '78', 'Abe', 'Gesese', 'as', '09876543212', 'root@gmail.com', '1234', 'HR Head');

-- --------------------------------------------------------

--
-- Table structure for table `leavedetails`
--

CREATE TABLE `leavedetails` (
  `Detail_Id` bigint(20) NOT NULL,
  `EmpId` bigint(20) NOT NULL,
  `TypesLeaveId` int(10) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `StateDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `LeaveStatus` varchar(50) NOT NULL,
  `approvedby` varchar(100) DEFAULT NULL,
  `approveddate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavedetails`
--

INSERT INTO `leavedetails` (`Detail_Id`, `EmpId`, `TypesLeaveId`, `Reason`, `StateDate`, `EndDate`, `LeaveStatus`, `approvedby`, `approveddate`) VALUES
(1, 11, 6, 'I Went To Visit A.A', '2022-08-10', '2022-08-17', 'Accept', 'hr officer', '2022-08-28'),
(2, 11, 3, 'help', '2022-11-18', '2022-08-19', 'Denied', 'hr officer', '2022-08-30'),
(3, 7, 6, 'vacation', '2022-08-16', '2022-10-30', 'Accept', 'hr officer', '2022-08-28'),
(4, 12, 1, ' I visit Docter', '2022-08-09', '2022-11-02', 'Denied', 'hr officer', '2022-08-28'),
(5, 12, 1, 'dasdsd', '2022-09-22', '2022-09-21', 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `notice_date` date NOT NULL,
  `notice_time` time NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `visibility` int(25) NOT NULL,
  `insert_by` varchar(30) NOT NULL,
  `insert_date` timestamp NULL DEFAULT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `subject`, `notice_date`, `notice_time`, `description`, `status`, `visibility`, `insert_by`, `insert_date`, `update_by`, `update_date`) VALUES
(11, 'Assignment', '2022-08-11', '11:11:12', 'jxslkxjalzmka\\lz', 1, 0, '', '2022-08-03 23:17:29', '', NULL),
(0, 'Training', '2022-08-23', '03:01:00', 'To all Concerned', 1, 0, 'Hr_officer', '2022-08-20 08:20:16', '', NULL),
(0, 'Project', '2022-08-29', '15:30:00', 'only To Samuel', 1, 22, 'hr officer', '2022-08-27 07:31:00', '', NULL),
(0, 'Congratulation', '0000-00-00', '23:42:00', 'to All Concerned', 1, 22, 'hr officer', '2022-08-29 17:42:22', '', NULL),
(0, 'Submit', '2022-09-02', '01:27:00', 'Onnly for Abe', 1, 78, 'hr officer', '2022-08-30 08:23:43', '', NULL),
(0, 'Plan Submit  date reminding', '2022-08-09', '08:28:00', 'Concerned to All', 1, 0, 'hrhead', '2022-08-28 15:25:21', '', NULL),
(0, 'Plan Submit  date reminding', '2022-08-18', '05:13:00', 'harry up', 1, 78, 'hr officer', '2022-08-28 12:11:09', '', NULL),
(0, 'Congratulation', '2022-09-21', '18:22:00', 'All to vacation', 1, 0, 'hr officer', '2022-09-02 13:21:26', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_of_leave`
--

CREATE TABLE `type_of_leave` (
  `LeaveId` bigint(20) NOT NULL,
  `Type_of_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_of_leave`
--

INSERT INTO `type_of_leave` (`LeaveId`, `Type_of_Name`) VALUES
(1, 'sick leave'),
(3, 'casual leave'),
(4, 'Birth leave'),
(5, 'yearly leave'),
(6, 'Vacation'),
(7, 'Death');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence_table`
--
ALTER TABLE `attendence_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches_table`
--
ALTER TABLE `branches_table`
  ADD PRIMARY KEY (`branches_id`);

--
-- Indexes for table `corporate_table`
--
ALTER TABLE `corporate_table`
  ADD PRIMARY KEY (`corporate_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `hr_member`
--
ALTER TABLE `hr_member`
  ADD PRIMARY KEY (`hr_id`);

--
-- Indexes for table `leavedetails`
--
ALTER TABLE `leavedetails`
  ADD PRIMARY KEY (`Detail_Id`);

--
-- Indexes for table `type_of_leave`
--
ALTER TABLE `type_of_leave`
  ADD PRIMARY KEY (`LeaveId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence_table`
--
ALTER TABLE `attendence_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `branches_table`
--
ALTER TABLE `branches_table`
  MODIFY `branches_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `corporate_table`
--
ALTER TABLE `corporate_table`
  MODIFY `corporate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hr_member`
--
ALTER TABLE `hr_member`
  MODIFY `hr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `leavedetails`
--
ALTER TABLE `leavedetails`
  MODIFY `Detail_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_of_leave`
--
ALTER TABLE `type_of_leave`
  MODIFY `LeaveId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
