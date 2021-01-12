-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 01:10 PM
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
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills_and_payment`
--

CREATE TABLE `bills_and_payment` (
  `Receipt_No` int(10) NOT NULL,
  `Payment_Status` varchar(15) NOT NULL,
  `Bill` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills_and_payment`
--

INSERT INTO `bills_and_payment` (`Receipt_No`, `Payment_Status`, `Bill`) VALUES
(1001, 'Paid', 10000),
(1002, 'Paid', 9000),
(1003, 'Paid', 800),
(1004, 'Not paid', 2000),
(1005, 'Paid', 1000),
(1006, 'Not paid', 10000),
(1007, 'Paid', 4000),
(1008, 'Paid', 10000),
(1009, 'Paid', 500),
(1010, 'Not paid', 8000),
(1011, 'Paid', 1000),
(1012, 'Not paid', 10000),
(1013, 'Paid', 6000),
(1014, 'Paid', 10000),
(1015, 'Paid', 800),
(1016, 'Not paid', 3000),
(1017, 'Paid', 1000),
(1018, 'Not paid', 10000),
(1019, 'Paid', 4000),
(1020, 'Paid', 10000),
(1021, 'Not paid', 7000),
(1022, 'Paid', 1000),
(1023, 'Not paid', 10000),
(1024, 'Paid', 5000),
(1025, 'Paid', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `disease_and_diagnosis`
--

CREATE TABLE `disease_and_diagnosis` (
  `Disease` varchar(20) NOT NULL,
  `Receipt_No` int(10) NOT NULL,
  `P_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_and_diagnosis`
--

INSERT INTO `disease_and_diagnosis` (`Disease`, `Receipt_No`, `P_ID`) VALUES
('Dengue', 1001, '1001'),
('Dengue', 1002, '1002'),
('Low BP', 1003, '1003'),
('Tuberculosis', 1004, '1004'),
('Measles', 1005, '1005'),
('Jaundice', 1006, '1006'),
('Chicken pox', 1007, '1007'),
('Dengue', 1008, '1008'),
('Dengue', 1009, '1009'),
('Blood Cancer', 1010, '1010'),
('Tuberculosis', 1011, '1011'),
('Measles', 1012, '1012'),
('Jaundice', 1013, '1013'),
('Chicken pox', 1014, '1014'),
('Dengue', 1015, '1015'),
('Dengue', 1016, '1016'),
('Low BP', 1017, '1017'),
('Tuberculosis', 1018, '1018'),
('Measles', 1019, '1019'),
('Jaundice', 1020, '1020'),
('Chicken pox', 1021, '1021'),
('Cancer', 1022, '1022'),
('Dengue', 1023, '1023'),
('High BP', 1024, '1024'),
('Alcer', 1025, '1025');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_ID` varchar(20) NOT NULL,
  `D_Name` varchar(15) NOT NULL,
  `Qualification` varchar(15) NOT NULL,
  `D_Phone_no` varchar(12) NOT NULL,
  `D_Address` varchar(55) DEFAULT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_Name`, `Qualification`, `D_Phone_no`, `D_Address`, `pass`) VALUES
('2001', 'Dr.Shafiq Ahmed', 'MBBS,FCPS,Derma', '01111111111', 'Mohammadpur,Dhaka', 'shafiq111'),
('2002', 'Dr.Roksana', 'Opthalmology', '01222222222', 'Nikunjo,Dhaka', 'roksanan111'),
('2003', 'Dr.Abdul Bari M', 'DDS,Dentistry', '01333333333', 'Dhaka Cantonment', 'abdul111'),
('2004', 'Dr.Tawsif', 'MBBS,FCPS,Medic', '01666666666', 'O.R Nizam Road,Chattogram', 'tawsif111'),
('2005', 'Dr.Tasneem Kama', 'MBBS,FCPS,Surge', '01777777777', 'Chawkbazar,Chattogram', 'tasneem111'),
('2006', 'Dr.Tahiat Tabas', 'MBBS,FCPS,Anest', '01888888888', 'Mirpur DOHS,Mirpur,Dhaka', 'tahiat111');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_ID` varchar(20) NOT NULL,
  `E_Name` varchar(15) NOT NULL,
  `Shift` varchar(8) DEFAULT NULL,
  `Designation` varchar(15) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `E_Name`, `Shift`, `Designation`, `pass`) VALUES
('001', 'Arman', 'as', 'd', '11'),
('002', 'B', 'Morning', 'Nurse', '2'),
('003', 'C', 'Day', 'Ward Boy', ''),
('004', 'D', 'Night', 'ward Boy', ''),
('005', 'E', 'Day', 'Nurse', ''),
('006', 'F', 'Night', 'Nurse', ''),
('007', 'G', 'Day', 'Nurse', ''),
('008', 'H', 'Night', 'Nurse', ''),
('009', 'I', 'Day', 'Nurse', ''),
('010', 'J', 'Night', 'Nurse', ''),
('011', 'K', 'Night', 'Nurse', ''),
('012', 'L', 'Day', 'Nurse', ''),
('013', 'M', 'Night', 'Medical Assista', ''),
('014', 'N', 'Day', 'Medical Assista', ''),
('015', 'O', 'Night', 'Nurse', ''),
('016', 'P', 'Day', 'Nurse', ''),
('017', 'Q', 'Night', 'Nurse', ''),
('018', 'R', 'Day', 'Nurse', ''),
('019', 'S', 'Night', 'Nurse', ''),
('020', 'T', 'Day', 'Nurse', ''),
('021', 'U', 'Night', 'Nurse', ''),
('022', 'V', 'Day', 'Nurse', ''),
('023', 'Y', 'Night', 'Nurse', ''),
('024', 'Z', 'Night', 'Receptionist', ''),
('025', 'W', 'Day', 'Receptionist', ''),
('026', 'nn', 'n', 'nn', '');

-- --------------------------------------------------------

--
-- Table structure for table `financial_update`
--

CREATE TABLE `financial_update` (
  `Paid_amount` int(20) NOT NULL,
  `Amount_to_be_paid` int(20) NOT NULL,
  `E_Salary` int(20) NOT NULL,
  `D_ID` varchar(20) NOT NULL,
  `Receipt_No` int(10) NOT NULL,
  `E_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_update`
--

INSERT INTO `financial_update` (`Paid_amount`, `Amount_to_be_paid`, `E_Salary`, `D_ID`, `Receipt_No`, `E_ID`) VALUES
(10000, 10000, 5000, '2006', 1001, '001'),
(10000, 10000, 5000, '2004', 1002, '002'),
(800, 800, 10000, '2001', 1003, '003'),
(0, 8000, 10000, '2002', 1004, '004'),
(1000, 1000, 15000, '2005', 1005, '005'),
(0, 10000, 10000, '2006', 1006, '006'),
(4000, 4000, 15000, '2001', 1007, '007'),
(10000, 10000, 10000, '2003', 1008, '008'),
(10000, 10000, 15000, '2002', 1009, '009'),
(800, 800, 15000, '2005', 1010, '010'),
(0, 8000, 10000, '2002', 1011, '011'),
(1000, 1000, 15000, '2004', 1012, '012'),
(0, 10000, 20000, '2001', 1013, '013'),
(4000, 4000, 20000, '2006', 1014, '014'),
(10000, 10000, 10000, '2005', 1015, '015'),
(10000, 10000, 25000, '2002', 1016, '016'),
(800, 800, 15000, '2002', 1017, '017'),
(0, 8000, 10000, '2003', 1018, '018'),
(1000, 1000, 15000, '2005', 1019, '019'),
(0, 10000, 10000, '2004', 1020, '020'),
(4000, 4000, 15000, '2002', 1021, '021'),
(10000, 10000, 10000, '2001', 1022, '022'),
(0, 10000, 10000, '2004', 1023, '023'),
(4000, 4000, 25000, '2005', 1024, '024'),
(10000, 10000, 25000, '2006', 1025, '025');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `user`, `pass`) VALUES
('Zannatul Ferdous Tunny', 'admin1', '101'),
('Ishrar Mannan', 'admin2', '102'),
('Farhan Naser', 'admin3', '103');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_ID` varchar(20) NOT NULL,
  `P_Name` varchar(30) NOT NULL,
  `P_Phone_no` varchar(12) NOT NULL,
  `P_Address` varchar(55) NOT NULL,
  `Test_Report` varchar(55) NOT NULL,
  `D_ID` varchar(20) NOT NULL,
  `Room_No` varchar(10) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `P_Name`, `P_Phone_no`, `P_Address`, `Test_Report`, `D_ID`, `Room_No`, `pass`) VALUES
('1001', 'Sazzad Saran', '02111111111', 'Mirpur DOHS,Mirpur,Dhaka', 'Positive', '2006', '101', 'saran'),
('1002', 'Mir Akil', '02222222222', 'Dhanmondi-19,Dhanmondi,Dhaka', 'Nothing serious', '2004', '102', 'mir1'),
('1003', 'Ahmed Raiyan', '02333333333', 'Azimpur,Dhaka', 'new', '2001', '803', 'raiyan1'),
('1004', 'Anindya Barua', '02444444444', 'Gulshan-2,Dhaka', 'Positive', '2002', '902', 'ani1'),
('1005', 'Mumin Ul Bari', '02555555555', 'Mirpur DOHS,Mirpur,Dhaka', 'Negative', '2005', '102', 'bari1'),
('1006', 'Nafiz Al Asad', '02666666666', 'Mirpur-12,Mirpur,Dhaka', 'Positive', '2006', '902', 'nafiz1'),
('1007', 'Rafi Islam', '02777777777', 'Mirpur-1,Mirpur,Dhaka', 'Negative', '2001', '603', 'rafi1'),
('1008', 'Raisa Tahsin', '02888888888', 'Prem Bagan,Sector-7,Uttara,Dhaka', 'Positive', '2003', '402', 'raisa1'),
('1009', 'Sadia Afreen', '02999999999', 'Khilgaon Taltola,Khilgaon,Dhaka', 'Negative', '2002', '103', 'sadia1'),
('1010', 'Tahmid Fahim', '02898989898', 'Central-road,Dhaka', 'Negative', '2005', '103', 'fahim1'),
('1011', 'Farhan Naser', '02456634546', 'Mohakhali,Dhaka', 'Positive', '2002', '302', 'naser1'),
('1012', 'Shaznin Sultana', '02234567898', 'Dhanmondi-19,Dhanmondi,Dhaka', 'Negative', '2004', '202', 'shaznin1'),
('1013', 'Samia Ahmed', '02123412341', 'Prem Bagan,Sector-5,Uttara,Dhaka', 'Positive', '2001', '503', 'samia1'),
('1014', 'Pranto Mahmud', '02566556645', 'Jhigatola,Dhaka', 'Negative', '2006', '803', 'pranto1'),
('1015', 'Samir Chowdhury', '02722781816', 'Panthopath,Dhaka', 'Negative', '2001', '702', 'samir1'),
('1016', 'Abrar Mannan', '02030406483', 'Baily Road,Dhaka', 'Positive', '2005', '302', 'abrar1'),
('1017', 'Zeba Labiba', '02436012123', 'Dhanmondi-27,Dhanmondi,Dhaka', 'Positive', '2002', '603', 'zeba1'),
('1018', 'Tania Akkas', '02436790125', 'Mirpur-12,Mirpur,Dhaka', 'Positive', '2003', '702', 'tania1'),
('1019', 'Ziad Mohib', '02230004560', 'Banani,Dhaka', 'Positive', '2003', '901', 'ziad1'),
('1020', 'Ismate Jahan', '02000343221', 'Mohakhali,Dhaka', 'Negative', '2004', '402', 'ismate1'),
('1021', 'Zannatul Ferdous Tunny', '021114442', 'Jhigatoal,Dhaka', 'Positive', '2002', '203', 'tunny1'),
('1022', 'Rakiba Akhter', '025666670', 'Azimpur,Dhaka', 'Positive', '2001', '603', 'rakiba1'),
('1023', 'Ishrar Mannan', '02222422342', 'Banani,Dhaka', 'Positive', '2004', '503', 'ishrar1'),
('1024', 'Israt Jahan', '02456783215', 'Mirpur-10,Mirpur,Dhaka', 'Positive', '2005', '202', 'israt1'),
('1025', 'Rimon Khan', '02908700345', 'Mirpur-12,Mirpur,Dhaka', 'hi', '2006', '203', 'rimon1'),
('1027', 'New Patient', '015', 'Dhaka', 'positive', '2001', '201', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `wards_and_rooms`
--

CREATE TABLE `wards_and_rooms` (
  `Room_No` varchar(10) NOT NULL,
  `Ward` varchar(10) NOT NULL,
  `Floor` varchar(10) NOT NULL,
  `Room` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wards_and_rooms`
--

INSERT INTO `wards_and_rooms` (`Room_No`, `Ward`, `Floor`, `Room`) VALUES
('101', 'ICU', '1st-floor', 'NULL'),
('102', 'Family', '1st-floor', 'Allocated'),
('103', 'Family', '1st-floor', 'Allocated'),
('201', 'ICU', '2nd-floor', 'Allocated'),
('202', 'Family', '2nd-floor', 'Allocated'),
('203', 'Family', '2nd-floor', 'NULL'),
('301', 'ICU', '3rd-floor', 'NULL'),
('302', 'Family', '3rd-floor', 'Allocated'),
('303', 'Family', '3rd-floor', 'NULL'),
('401', 'ICU', '4th-floor', 'NULL'),
('402', 'Family', '4th-floor', 'Allocated'),
('403', 'Family', '4th-floor', 'NULL'),
('501', 'ICU', '5th-floor', 'NULL'),
('502', 'Single', '5th-floor', 'NULL'),
('503', 'Family', '5th-floor', 'Allocated'),
('601', 'ICU', '6th-floor', 'NULL'),
('602', 'single', '6th-floor', 'NULL'),
('603', 'Family', '6th-floor', 'Allocated'),
('702', 'Family', '7th-floor', 'Allocated'),
('703', 'Single', '7th-floor', 'NULL'),
('802', 'Single', '8th-floor', 'NULL'),
('803', 'Family', '8th-floor', 'Allocated'),
('901', 'Single', '9th-floor', 'Allocated'),
('902', 'Family', '9th-floor', 'Allocated'),
('903', 'Single ', '9th-floor', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills_and_payment`
--
ALTER TABLE `bills_and_payment`
  ADD PRIMARY KEY (`Receipt_No`);

--
-- Indexes for table `disease_and_diagnosis`
--
ALTER TABLE `disease_and_diagnosis`
  ADD KEY `disease_and_diagnosis_ibfk_2` (`P_ID`),
  ADD KEY `Receipt_No` (`Receipt_No`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `financial_update`
--
ALTER TABLE `financial_update`
  ADD KEY `D_ID` (`D_ID`),
  ADD KEY `E_ID` (`E_ID`),
  ADD KEY `Receipt_No` (`Receipt_No`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `Room_No` (`Room_No`),
  ADD KEY `D_ID` (`D_ID`);

--
-- Indexes for table `wards_and_rooms`
--
ALTER TABLE `wards_and_rooms`
  ADD PRIMARY KEY (`Room_No`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_and_diagnosis`
--
ALTER TABLE `disease_and_diagnosis`
  ADD CONSTRAINT `Receipt_No` FOREIGN KEY (`Receipt_No`) REFERENCES `bills_and_payment` (`Receipt_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `financial_update`
--
ALTER TABLE `financial_update`
  ADD CONSTRAINT `financial_update_ibfk_1` FOREIGN KEY (`D_ID`) REFERENCES `doctor` (`D_ID`),
  ADD CONSTRAINT `financial_update_ibfk_2` FOREIGN KEY (`E_ID`) REFERENCES `employee` (`E_ID`),
  ADD CONSTRAINT `financial_update_ibfk_3` FOREIGN KEY (`Receipt_No`) REFERENCES `bills_and_payment` (`Receipt_No`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`Room_No`) REFERENCES `wards_and_rooms` (`Room_No`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`D_ID`) REFERENCES `doctor` (`D_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
