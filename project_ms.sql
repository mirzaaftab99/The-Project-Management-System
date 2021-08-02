-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 06:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide_allot`
--

CREATE TABLE `guide_allot` (
  `group_code` varchar(20) NOT NULL,
  `guide_code` varchar(30) NOT NULL,
  `guide_name` text NOT NULL,
  `dept` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide_allot`
--

INSERT INTO `guide_allot` (`group_code`, `guide_code`, `guide_name`, `dept`, `academic_year`, `shift`) VALUES
('CO/18/F/01', 'G2', 'Mr. Ubaid Saudagar', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/F/02', 'G1', 'Mr. Imran Shaikh', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/S/01', 'G9', 'Mr. Ali Karim Sayed', 'Computer Engineering', '2018-2019', '2nd Shift'),
('CE/18/F/01', 'G3', 'Mr. Vijay Sharma', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/F/02', 'G4', 'Mr. Ajay Yadav', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/S/01', 'G10', 'Mr. Sohel Khan', 'Civil Engineering', '2018-2019', '2nd Shift'),
('ME/18/F/01', 'G5', 'Mr. Sajid Khan', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/F/02', 'G6', 'Mr. Virat Sharma', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/S/01', 'G11', 'Mr. Naved Khan', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('EJ/18/F/01', 'G7', 'Mr. Shubham Sutar', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/F/02', 'G8', 'Mr. Talib Shaikh', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/S/01', 'G12', 'Mr. Kayyum Shaikh', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift');

-- --------------------------------------------------------

--
-- Table structure for table `guide_reg`
--

CREATE TABLE `guide_reg` (
  `guide_id` int(11) NOT NULL,
  `guide_code` varchar(30) NOT NULL,
  `guide_name` text NOT NULL,
  `domain` varchar(500) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide_reg`
--

INSERT INTO `guide_reg` (`guide_id`, `guide_code`, `guide_name`, `domain`, `username`, `password`, `dept`, `academic_year`, `shift`) VALUES
(1, 'G1', 'Mr. Imran Shaikh', '1)PHP and MYSQl  2)Python  3)Networking  ', 'imran123', 'imran123', 'Computer Engineering', '2018-2019', '1st Shift'),
(2, 'G2', 'Mr. Ubaid Saudagar', '1)PHP and MYSQl  2)Embedded System  ', 'ubaid123', 'ubaid123', 'Computer Engineering', '2018-2019', '1st Shift'),
(3, 'G3', 'Mr. Vijay Sharma', '1)CAD  2)Auto CAD  ', 'vijay123', 'vijay123', 'Civil Engineering', '2018-2019', '1st Shift'),
(4, 'G4', 'Mr. Ajay Yadav', '1)Surveying and Levelling  2)MOS  3)CAD  ', 'ajay123', 'ajay123', 'Civil Engineering', '2018-2019', '1st Shift'),
(5, 'G5', 'Mr. Sajid Khan', '1)Fluid Mechanics  2)Machine Drawing  3)Design Machine Elements  ', 'sajid123', 'sajid123', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(6, 'G6', 'Mr. Virat Sharma', '1)Automobile and Manufacturing System  2)Energy Management  3)Machine Drawing  ', 'virat123', 'virat123', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(7, 'G7', 'Mr. Shubham Sutar', '1)VLSI System  2)Control System and Instrumentation  3)PDT  ', 'shubham123', 'shubham123', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(8, 'G8', 'Mr. Talib Shaikh', '1)EMB System  2)Control System and Instrumentation  3)MIC System  ', 'talib123', 'talib123', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(9, 'G9', 'Mr. Ali Karim Sayed', '1)PHP and MYSQl  2)Networking  3)Embedded System  ', 'alikarim456', 'alikarim456', 'Computer Engineering', '2018-2019', '2nd Shift'),
(10, 'G10', 'Mr. Sohel Khan', '1)MOS  2)CAD  ', 'sohel456', 'sohel456', 'Civil Engineering', '2018-2019', '2nd Shift'),
(11, 'G11', 'Mr. Naved Khan', '1)Automobile and Manufacturing System  2)Energy Management  ', 'naved456', 'naved456', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(12, 'G12', 'Mr. Kayyum Shaikh', '1)EMB System  2)Control System and Instrumentation  3)PDT  ', 'kayyum456', 'kayyum456', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift');

-- --------------------------------------------------------

--
-- Table structure for table `project_group`
--

CREATE TABLE `project_group` (
  `group_leader` bigint(20) NOT NULL,
  `enrollment_no` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_no` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `atkt` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `academic_year` varchar(60) NOT NULL,
  `shift` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_group`
--

INSERT INTO `project_group` (`group_leader`, `enrollment_no`, `name`, `phone_no`, `email`, `city`, `atkt`, `dept`, `academic_year`, `shift`) VALUES
(1605690221, 1605690221, 'Afroz Labhai', 8569548548, 'afroz1@gmail.com', 'Nerul', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690221, 1605690509, 'Ibrahim Khan', 9584587458, 'ibrahim23@gmail.com', 'Kurla', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690221, 1605690263, 'Arbaz Nakhwa', 9584584578, 'arbazz23@gmail.com', 'Mumbra', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690221, 1605690261, 'Uzair Faquih', 9584584584, 'uzair32@gmail.com', 'Mumbra', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 1605690273, 'Aftab Mirza', 9584587458, 'aftab4@gmail.com', 'Kalyan', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 1605690259, 'Shoheb Kazi', 9856589845, 'shoheb4@gmail.com', 'Mulund', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 1605690232, 'Ahtesham Syed', 8651238486, 'ahtesham6@gmail.com', 'Airoli', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 1605690254, 'Shadab Khan', 8512645132, 'shadab8@gmail.com', 'Mumbra', 'no', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690256, 1605690256, 'Sharuk Shaikh', 8528645138, 'sharukh37@gmail.com', 'Kalyan', 'no', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605690256, 1605690245, 'Harun Khan', 8945665846, 'harun9@gmail.com', 'CST', 'no', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605690256, 1605692069, 'Mohammed Abbas', 8945656184, 'abbas6@gmail.com', 'Kurla', 'yes', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605690256, 1654854584, 'Jakir Naik', 8458465238, 'jakir67@gmail.com', 'Nerul', 'no', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 1605696521, 'Sufiyan Naik', 8465458554, 'sufiyan78@gmail.com', 'Kurla', 'no', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 1605696596, 'Wallid Shaikh', 8465846584, 'wallid98@gmail.com', 'Chembur', 'no', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 1605696522, 'Shahid Shaikh', 8464555215, 'shahid96@gmail.com', 'Andheri', 'no', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 1605696546, 'Nisar Kazi', 9879845458, 'nisar95@gmail.com', 'Nerul', 'no', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605690352, 1605690352, 'Namprasad Mhadgut', 9584578568, 'namprasad8@gmail.com', 'Nahur', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690352, 1605690357, 'Rahul Gurav', 7895158965, 'rahul98@gmail.com', 'Mulund', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690352, 1605690365, 'Digvijay Subhedar', 7845789484, 'digvi56@gmail.com', 'Thane', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690352, 1605690345, 'Akash Desai', 7874589984, 'akash35@gmail.com', 'Mumbra', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 1605690389, 'Monty Naik', 9584575645, 'monty65@gmail.com', 'Andheri', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 1605690377, 'Ritesh Desai', 8658458945, 'riteshs87@gmail.com', 'Thane', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 1605690344, 'Abu Khan', 8956784659, 'abu5@gmail.com', 'Thane', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 1605690320, 'Salman Shaikh', 9784598746, 'salman87@gmail.com', 'Mumbra', 'no', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605694423, 1605694423, 'Shahid Khan', 9854758697, 'shahid98@gmail.com', 'Nerul', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694423, 1605694468, 'Kanis Dsouza', 7858465894, 'kanis56@gmail.com', 'Panvel', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694423, 1605694474, 'Shubham Patil', 8945658584, 'shubham45@gmail.com', 'Kurla', 'yes', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694423, 1605694465, 'Pratik Patil', 9846584854, 'pratik9@gmail.com', 'Thane', 'yes', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 1605694452, 'Faizan Syed', 8745548547, 'faizan767@gmail.com', 'Panvel', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 1605694441, 'Farhan Kazi', 8564854845, 'farhan87@gmail.com', 'Mumbra', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 1605694467, 'Adnan Shaikh', 7544545846, 'adnan87@gmail.com', 'Thane', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 1605694447, 'Munir Khan', 7986548458, 'munir36@gmail.com', 'Airoli', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1616080232, 1616080232, 'Faizan Khan', 8956855478, 'faizank76@gmail.com', 'Kurla', 'no', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1616080232, 1616088458, 'Junaid Ansari', 8564894584, 'junaid56@gmail.com', 'Kurla', 'yes', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1616080232, 1616086285, 'Varun Sutar', 9874545455, 'varun6@gmail.com', 'Ghatkophar', 'no', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1616080232, 1616087474, 'Aziz Shaikh', 9874545454, 'aziz89@gmail.com', 'Mumbra', 'yes', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1616087458, 1616087458, 'Rohan Desai', 8645547458, 'rohan768@gmail.com', 'Mulund', 'no', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1616087458, 1616087485, 'Chand Syed', 8945585899, 'chand677@gmail.com', 'Kurla', 'no', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1616087458, 1616089656, 'Dhiraj Naik', 8965864545, 'dhiraj98@gmail.com', 'Thane', 'no', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1616087458, 1616082152, 'Asif Khan', 8565454544, 'asif8@gmail.com', 'Mumbra', 'yes', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1616084455, 1616084455, 'Sujit Dubhe', 9854785415, 'sujit98@gmail.com', 'Panvel', 'no', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1616084455, 1616089568, 'Karan Sutar', 8945658989, 'karan5@gmail.com', 'Nerul', 'no', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1616084455, 1616086545, 'Satyam Desai', 8468548454, 'satyan877@gmail.com', 'Thane', 'no', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1616084455, 1616084562, 'Rehman Syed', 7845864548, 'rehman9@gmail.com', 'Belapur CBD', 'no', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1616089235, 1616089235, 'Aadharsh Desai', 9854751254, 'aadarsh56@gmail.com', 'Bhandup', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
(1616089235, 1616089856, 'Raju Syed', 8658453484, 'raju56@gmail.com', 'Vidhyavihar', 'yes', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
(1616089235, 1616087451, 'Aman Khan', 8955565656, 'aman7654@gmail.com', 'Mumbra', 'yes', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
(1616089235, 1616083265, 'Sourab Desai', 9864515444, 'sourab23@gmail.com', 'Thane', 'no', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift');

-- --------------------------------------------------------

--
-- Table structure for table `project_group_code_assign`
--

CREATE TABLE `project_group_code_assign` (
  `gl_enrollment_no` int(11) NOT NULL,
  `group_members` varchar(30) NOT NULL,
  `enrollment_no` int(11) NOT NULL,
  `group_code` varchar(30) NOT NULL,
  `dept` varchar(80) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_group_code_assign`
--

INSERT INTO `project_group_code_assign` (`gl_enrollment_no`, `group_members`, `enrollment_no`, `group_code`, `dept`, `academic_year`, `shift`) VALUES
(1605690221, 'Afroz Labhai', 1605690221, 'CO/18/F/01', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690221, 'Ibrahim Khan', 1605690509, 'CO/18/F/01', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690221, 'Arbaz Nakhwa', 1605690263, 'CO/18/F/01', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690221, 'Uzair Faquih', 1605690261, 'CO/18/F/01', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 'Aftab Mirza', 1605690273, 'CO/18/F/02', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 'Shoheb Kazi', 1605690259, 'CO/18/F/02', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 'Ahtesham Syed', 1605690232, 'CO/18/F/02', 'Computer Engineering', '2018-2019', '1st Shift'),
(1605690273, 'Shadab Khan', 1605690254, 'CO/18/F/02', 'Computer Engineering', '2018-2019', '1st Shift'),
(1616080232, 'Faizan Khan', 1616080232, 'CO/18/S/01', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1616080232, 'Junaid Ansari', 1616088458, 'CO/18/S/01', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1616080232, 'Varun Sutar', 1616086285, 'CO/18/S/01', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1616080232, 'Aziz Shaikh', 1616087474, 'CO/18/S/01', 'Computer Engineering', '2018-2019', '2nd Shift'),
(1605690256, 'Sharuk Shaikh', 1605690256, 'CE/18/F/01', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605690256, 'Harun Khan', 1605690245, 'CE/18/F/01', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605690256, 'Mohammed Abbas', 1605692069, 'CE/18/F/01', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605690256, 'Jakir Naik', 1654854584, 'CE/18/F/01', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 'Sufiyan Naik', 1605696521, 'CE/18/F/02', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 'Wallid Shaikh', 1605696596, 'CE/18/F/02', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 'Shahid Shaikh', 1605696522, 'CE/18/F/02', 'Civil Engineering', '2018-2019', '1st Shift'),
(1605696521, 'Nisar Kazi', 1605696546, 'CE/18/F/02', 'Civil Engineering', '2018-2019', '1st Shift'),
(1616087458, 'Rohan Desai', 1616087458, 'CE/18/S/01', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1616087458, 'Chand Syed', 1616087485, 'CE/18/S/01', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1616087458, 'Dhiraj Naik', 1616089656, 'CE/18/S/01', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1616087458, 'Asif Khan', 1616082152, 'CE/18/S/01', 'Civil Engineering', '2018-2019', '2nd Shift'),
(1605690352, 'Namprasad Mhadgut', 1605690352, 'ME/18/F/01', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690352, 'Rahul Gurav', 1605690357, 'ME/18/F/01', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690352, 'Digvijay Subhedar', 1605690365, 'ME/18/F/01', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690352, 'Akash Desai', 1605690345, 'ME/18/F/01', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 'Monty Naik', 1605690389, 'ME/18/F/02', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 'Ritesh Desai', 1605690377, 'ME/18/F/02', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 'Abu Khan', 1605690344, 'ME/18/F/02', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1605690389, 'Salman Shaikh', 1605690320, 'ME/18/F/02', 'Mechanical Engineering', '2018-2019', '1st Shift'),
(1616084455, 'Sujit Dubhe', 1616084455, 'ME/18/S/01', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1616084455, 'Karan Sutar', 1616089568, 'ME/18/S/01', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1616084455, 'Satyam Desai', 1616086545, 'ME/18/S/01', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1616084455, 'Rehman Syed', 1616084562, 'ME/18/S/01', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
(1605694423, 'Shahid Khan', 1605694423, 'EJ/18/F/01', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694423, 'Kanis Dsouza', 1605694468, 'EJ/18/F/01', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694423, 'Shubham Patil', 1605694474, 'EJ/18/F/01', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694423, 'Pratik Patil', 1605694465, 'EJ/18/F/01', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 'Faizan Syed', 1605694452, 'EJ/18/F/02', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 'Farhan Kazi', 1605694441, 'EJ/18/F/02', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 'Adnan Shaikh', 1605694467, 'EJ/18/F/02', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1605694452, 'Munir Khan', 1605694447, 'EJ/18/F/02', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
(1616089235, 'Aadharsh Desai', 1616089235, 'EJ/18/S/01', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
(1616089235, 'Raju Syed', 1616089856, 'EJ/18/S/01', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
(1616089235, 'Aman Khan', 1616087451, 'EJ/18/S/01', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
(1616089235, 'Sourab Desai', 1616083265, 'EJ/18/S/01', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift');

-- --------------------------------------------------------

--
-- Table structure for table `project_idea_topic`
--

CREATE TABLE `project_idea_topic` (
  `group_code` varchar(20) NOT NULL DEFAULT '',
  `gl_eno` int(11) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `idea1` varchar(100) NOT NULL,
  `idea2` varchar(100) NOT NULL,
  `idea3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_idea_topic`
--

INSERT INTO `project_idea_topic` (`group_code`, `gl_eno`, `dept`, `academic_year`, `shift`, `date`, `idea1`, `idea2`, `idea3`) VALUES
('CO/18/F/02', 1605690273, 'Computer Engineering', '2018-2019', '1st Shift', '2018-08-07', 'Feedback System', 'Project Management System', 'IOT based Thermometer'),
('CO/18/F/01', 1605690221, 'Computer Engineering', '2018-2019', '1st Shift', '2018-08-07', 'Voting System', 'Library Management System', 'Medical App'),
('CE/18/F/01', 1605690256, 'Civil Engineering', '2018-2019', '1st Shift', '2018-08-08', 'Entrepreneurial opportunities iin civil engineerin', 'Experimental study on Bendable Concrete', 'Pontoon Bridge'),
('CE/18/F/02', 1605696521, 'Civil Engineering', '2018-2019', '1st Shift', '2018-08-08', 'Design of STP for Panvel Area', 'Planning of a bridge using software', 'Pontoon Bridge'),
('ME/18/F/01', 1605690352, 'Mechanical Engineering', '2018-2019', '1st Shift', '2018-08-06', 'Pedal Operated Filling Cladder', 'Abrasive Belt Grinder', 'Mechatronic Arm'),
('ME/18/F/02', 1605690389, 'Mechanical Engineering', '2018-2019', '1st Shift', '2018-08-07', 'Mono Wheel ', 'Industry Based Project', 'Electricity Generator'),
('EJ/18/F/01', 1605694423, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift', '2018-07-07', 'IOT Based Power Plant Monitoring System', 'Bomb Defusing Robot', 'GSM based LPG Gas Detector'),
('EJ/18/F/02', 1605694452, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift', '2018-07-07', 'GSM Based Accident Alert System', 'Bomb Defusing Robot', 'Tyre pressure measurement system'),
('CO/18/S/01', 1616080232, 'Computer Engineering', '2018-2019', '2nd Shift', '2018-08-07', 'Health Indicator App', 'College Notice Management', 'Andriod App Development'),
('CE/18/S/01', 1616087458, 'Civil Engineering', '2018-2019', '2nd Shift', '2018-08-07', 'Town Planning', 'solid waste Management for ARKP', 'Intelligent Transportation system for Roadway safe'),
('ME/18/S/01', 1616084455, 'Mechanical Engineering', '2018-2019', '2nd Shift', '2018-08-07', 'Remote Control Floor Sweeper', 'Abrasive Belt Grinder', 'Auto Pneumatic Bumper'),
('EJ/18/S/01', 1616089235, 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift', '2018-08-07', 'Water management in hotel using PLC & SCADA', 'Factory worker alcohol detection with\r\nautomatic machine shutdown', 'Automatic soft drink dispenser using PLC');

-- --------------------------------------------------------

--
-- Table structure for table `project_login`
--

CREATE TABLE `project_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL,
  `dept` varchar(60) NOT NULL,
  `academic_year` varchar(60) NOT NULL,
  `shift` varchar(61) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_login`
--

INSERT INTO `project_login` (`username`, `password`, `role`, `role_id`, `dept`, `academic_year`, `shift`) VALUES
('1605690221', '1605690221', 'Group Leader', 4, 'Computer Engineering', '2018-2019', '1st Shift'),
('1605690273', '1605690273', 'Group Leader', 4, 'Computer Engineering', '2018-2019', '1st Shift'),
('1605690256', '1605690256', 'Group Leader', 4, 'Civil Engineering', '2018-2019', '1st Shift'),
('1605696521', '1605696521', 'Group Leader', 4, 'Civil Engineering', '2018-2019', '1st Shift'),
('1605690352', '1605690352', 'Group Leader', 4, 'Mechanical Engineering', '2018-2019', '1st Shift'),
('1605690389', '1605690389', 'Group Leader', 4, 'Mechanical Engineering', '2018-2019', '1st Shift'),
('1605694423', '1605694423', 'Group Leader', 4, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('1605694452', '1605694452', 'Group Leader', 4, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('shaista123', 'shaista123', 'HOD', 1, 'Computer Engineering', '2018-2019', '1st Shift'),
('illyas123', 'illyas123', 'HOD', 1, 'Civil Engineering', '2018-2019', '1st Shift'),
('jamil123', 'jamil123', 'HOD', 1, 'Mechanical Engineering', '2018-2019', '1st Shift'),
('arif123', 'arif123', 'HOD', 1, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('imrans123', 'imrans123', 'Project Coordinator', 2, 'Computer Engineering', '2018-2019', '1st Shift'),
('rehan123', 'rehan123', 'Project Coordinator', 2, 'Civil Engineering', '2018-2019', '1st Shift'),
('rahul123', 'rahul123', 'Project Coordinator', 2, 'Mechanical Engineering', '2018-2019', '1st Shift'),
('sujit123', 'sujit123', 'Project Coordinator', 2, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('1616080232', '1616080232', 'Group Leader', 4, 'Computer Engineering', '2018-2019', '2nd Shift'),
('1616087458', '1616087458', 'Group Leader', 4, 'Civil Engineering', '2018-2019', '2nd Shift'),
('1616084455', '1616084455', 'Group Leader', 4, 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('1616089235', '1616089235', 'Group Leader', 4, 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
('sameer76', 'sameer76', 'Project Coordinator', 2, 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
('mohin23', 'mohin23', 'Project Coordinator', 2, 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('kartik88', 'kartik88', 'HOD', 1, 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
('kunal23', 'kunal23', 'HOD', 1, 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('shaista456', 'shaista456', 'HOD', 1, 'Computer Engineering', '2018-2019', '2nd Shift'),
('illyas456', 'illyas456', 'HOD', 1, 'Civil Engineering', '2018-2019', '2nd Shift'),
('imrans456', 'imrans456', 'Project Coordinator', 2, 'Computer Engineering', '2018-2019', '2nd Shift'),
('rehan456', 'rehan456', 'Project Coordinator', 2, 'Civil Engineering', '2018-2019', '2nd Shift'),
('imran123', 'imran123', 'Guide', 3, 'Computer Engineering', '2018-2019', '1st Shift'),
('ubaid123', 'ubaid123', 'Guide', 3, 'Computer Engineering', '2018-2019', '1st Shift'),
('vijay123', 'vijay123', 'Guide', 3, 'Civil Engineering', '2018-2019', '1st Shift'),
('ajay123', 'ajay123', 'Guide', 3, 'Civil Engineering', '2018-2019', '1st Shift'),
('sajid123', 'sajid123', 'Guide', 3, 'Mechanical Engineering', '2018-2019', '1st Shift'),
('virat123', 'virat123', 'Guide', 3, 'Mechanical Engineering', '2018-2019', '1st Shift'),
('shubham123', 'shubham123', 'Guide', 3, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('talib123', 'talib123', 'Guide', 3, 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('alikarim456', 'alikarim456', 'Guide', 3, 'Computer Engineering', '2018-2019', '2nd Shift'),
('sohel456', 'sohel456', 'Guide', 3, 'Civil Engineering', '2018-2019', '2nd Shift'),
('naved456', 'naved456', 'Guide', 3, 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('kayyum456', 'kayyum456', 'Guide', 3, 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift');

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `group_code` varchar(30) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `uploaded_file` varchar(50) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`group_code`, `description`, `uploaded_file`, `dept`, `academic_year`, `shift`) VALUES
('CO/18/F/02', 'Project Group data', 'Screenshot (1).png', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/F/02', 'Guide allot data', 'Screenshot (2).png', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/F/02', 'Login page', 'Screenshot (3).png', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/F/02', 'Registration page', 'Screenshot (4).png', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/F/01', 'docx file of project report', 'act1.docx', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/F/01', 'pdf of data', 'SCHEME-6G_COMPUTER.pdf', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/S/01', 'pdf file of project report', 'CO2_proj_2018-19( 2 shift).pdf', 'Computer Engineering', '2018-2019', '2nd Shift'),
('CE/18/F/01', 'Testing1', 'CE1_proj_2017-18 (1 shift).pdf', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/F/01', 'Testing 2...', 'Chapter 4 MAN[1879].pptx', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/F/02', 'list of project shift 2', 'CE2_proj_2017-18 (2 shift).pdf', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/F/02', 'coding of login page', 'Black Book Format.docx', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/S/01', 'test3', 'uwp.dat', 'Civil Engineering', '2018-2019', '2nd Shift'),
('CE/18/S/01', 'test4', 'T-Rex.3mf', 'Civil Engineering', '2018-2019', '2nd Shift'),
('ME/18/F/01', 'mech test1...', 'ME1_proj_2018-19( 1 shift).pdf', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/F/01', 'mech test 0001', 'atmdb.mdb', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/F/02', 'reg.php', 'LibraryManagementSystem_log.ldf', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/F/02', 'hello world', 'icon.png', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/S/01', 'mech second shift data', 'ME2_proj_2018-19 (2 shift).pdf', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('ME/18/S/01', 'Mechtronic version 1', 'admin_connections.php', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('EJ/18/F/01', 'electronic test002', 'EJ_proj_2017-18 (1 shift).pdf', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/F/01', 'Electricity generating', 'Img #3.pdf', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/F/02', 'test456......', 'IMG-20190104-WA0008.jpg', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/F/02', 'test000023', 'EJ_proj_2017-18 (1 shift).pdf', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/S/01', 'electronic device image', 'IMG-20190104-WA0002.jpg', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift'),
('EJ/18/S/01', 'Project test008', 'Img #4.pdf', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift');

-- --------------------------------------------------------

--
-- Table structure for table `topic_allot`
--

CREATE TABLE `topic_allot` (
  `group_code` varchar(20) NOT NULL,
  `group_leader` varchar(100) NOT NULL,
  `guide_code` varchar(20) NOT NULL,
  `guide_name` varchar(30) NOT NULL,
  `project_topic` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic_allot`
--

INSERT INTO `topic_allot` (`group_code`, `group_leader`, `guide_code`, `guide_name`, `project_topic`, `dept`, `academic_year`, `shift`) VALUES
('CO/18/F/02', 'Aftab Mirza', 'G1', 'Mr. Imran Shaikh', 'Project Management System', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/F/01', 'Afroz Labhai', 'G2', 'Mr. Ubaid Saudagar', 'Voting System', 'Computer Engineering', '2018-2019', '1st Shift'),
('CO/18/S/01', 'Faizan Khan', 'G9', 'Mr. Ali Karim Sayed', 'College Notice Management', 'Computer Engineering', '2018-2019', '2nd Shift'),
('CE/18/F/01', 'Sharuk Shaikh', 'G3', 'Mr. Vijay Sharma', 'Entrepreneurial opportunities iin civil engineering', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/F/02', 'Sufiyan Naik', 'G4', 'Mr. Ajay Yadav', 'Pontoon Bridge', 'Civil Engineering', '2018-2019', '1st Shift'),
('CE/18/S/01', 'Rohan Desai', 'G10', 'Mr. Sohel Khan', 'Solid Waste Management for ARKP', 'Civil Engineering', '2018-2019', '2nd Shift'),
('ME/18/F/01', 'Namprasad Mhadgut', 'G5', 'Mr. Sajid Khan', 'Abrasive Belt Grinder', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/F/02', 'Monty Naik', 'G6', 'Mr. Virat Sharma', 'Industry Based Project', 'Mechanical Engineering', '2018-2019', '1st Shift'),
('ME/18/S/01', 'Sujit Dubhe', 'G11', 'Mr. Naved Khan', 'Remote Control Floor Sweeper', 'Mechanical Engineering', '2018-2019', '2nd Shift'),
('EJ/18/F/01', 'Shahid Khan', 'G7', 'Mr. Shubham Sutar', 'Bomb Defusing Robot', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/F/02', 'Faizan Syed', 'G8', 'Mr. Talib Shaikh', 'GSM Based Accident Alert System', 'Electronics and Telecommunication Engineering', '2018-2019', '1st Shift'),
('EJ/18/S/01', 'Aadharsh Desai', 'G12', 'Mr. Kayyum Shaikh', 'Water management in hotel using PLC & SCADA', 'Electronics and Telecommunication Engineering', '2018-2019', '2nd Shift');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide_reg`
--
ALTER TABLE `guide_reg`
  ADD PRIMARY KEY (`guide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guide_reg`
--
ALTER TABLE `guide_reg`
  MODIFY `guide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
