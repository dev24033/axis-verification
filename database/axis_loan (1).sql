-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 03:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axis_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'axis_ver', 'ec7117851c0e5dbaad4effdb7cd17c050cea88cb');

-- --------------------------------------------------------

--
-- Table structure for table `coa_tele_verification`
--

CREATE TABLE `coa_tele_verification` (
  `id` int(50) NOT NULL,
  `application_id` int(50) NOT NULL,
  `coa_tele_dof_visit` varchar(200) NOT NULL,
  `coa_tele_tof_visit` varchar(200) NOT NULL,
  `coa_tele_nof_app` varchar(200) NOT NULL,
  `coa_tele_cont_no` varchar(200) NOT NULL,
  `coa_tele_contacted` varchar(200) NOT NULL,
  `coa_tele_spoken` varchar(200) NOT NULL,
  `coa_tele_rel_w_app` varchar(200) NOT NULL,
  `coa_tele_years_staying` varchar(200) NOT NULL,
  `coa_tele_residence` varchar(200) NOT NULL,
  `coa_tele_alt_cont_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coa_tele_verification`
--

INSERT INTO `coa_tele_verification` (`id`, `application_id`, `coa_tele_dof_visit`, `coa_tele_tof_visit`, `coa_tele_nof_app`, `coa_tele_cont_no`, `coa_tele_contacted`, `coa_tele_spoken`, `coa_tele_rel_w_app`, `coa_tele_years_staying`, `coa_tele_residence`, `coa_tele_alt_cont_no`) VALUES
(1, 50, '12/05/2020', '12:59', 'dev', '8084375', 'on', 'dev', 'self', '10', 'yes', '8109450654');

-- --------------------------------------------------------

--
-- Table structure for table `co_applicant`
--

CREATE TABLE `co_applicant` (
  `id` int(50) NOT NULL,
  `application_id` int(50) NOT NULL,
  `coa_date_of_visit` varchar(200) NOT NULL,
  `coa_date_of_time` varchar(200) NOT NULL,
  `coa_product` varchar(200) NOT NULL,
  `coa_file_no` varchar(200) NOT NULL,
  `coa_address` varchar(200) DEFAULT NULL,
  `coa_person_met` varchar(200) DEFAULT NULL,
  `coa_rel_with_app` varchar(200) DEFAULT NULL,
  `coa_locating` varchar(200) DEFAULT NULL,
  `coa_landmark` varchar(200) DEFAULT NULL,
  `coa_residence` varchar(200) DEFAULT NULL,
  `coa_years_staying` varchar(200) DEFAULT NULL,
  `coa_stay_con_by` varchar(200) DEFAULT NULL,
  `coa_type_of_resi` varchar(200) DEFAULT NULL,
  `coa_resi_covid_z` varchar(200) DEFAULT NULL,
  `coa_family_mem_inf` varchar(200) DEFAULT NULL,
  `coa_comments` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_applicant`
--

INSERT INTO `co_applicant` (`id`, `application_id`, `coa_date_of_visit`, `coa_date_of_time`, `coa_product`, `coa_file_no`, `coa_address`, `coa_person_met`, `coa_rel_with_app`, `coa_locating`, `coa_landmark`, `coa_residence`, `coa_years_staying`, `coa_stay_con_by`, `coa_type_of_resi`, `coa_resi_covid_z`, `coa_family_mem_inf`, `coa_comments`) VALUES
(7, 48, '12/05/2020', '12:59', 'new', '234', 'morar', 'dev', 'self', 'Difficult', 'Gwalior', 'self', '21 years', 'dev', 'rented', 'Red', 'Infected And Treated', '0000-00-00'),
(8, 49, '12/05/2020', '12:59', 'new', '234', 'morar', 'dev', 'self', 'Difficult', 'Gwalior', 'self', '21 years', 'dev', 'rented', 'Red', 'Infected And Treated', '0000-00-00'),
(9, 50, '12/05/2020', '12:59', 'new', '234', 'morar', 'dev', 'self', 'Difficult', 'Gwalior', 'self', '21 years', 'dev', 'rented', 'Red', 'Infected And Treated', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `loan_application`
--

CREATE TABLE `loan_application` (
  `application_id` int(50) NOT NULL,
  `date_of_visit` varchar(200) NOT NULL,
  `date_of_time` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `file_no` varchar(200) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `person_met` varchar(200) DEFAULT NULL,
  `rel_with_app` varchar(200) DEFAULT NULL,
  `locating` varchar(200) DEFAULT NULL,
  `landmark` varchar(200) DEFAULT NULL,
  `residence` varchar(200) DEFAULT NULL,
  `years_staying` varchar(200) DEFAULT NULL,
  `stay_con_by` varchar(200) DEFAULT NULL,
  `type_of_resi` varchar(200) DEFAULT NULL,
  `resi_covid_z` varchar(200) DEFAULT NULL,
  `family_mem_inf` varchar(200) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_application`
--

INSERT INTO `loan_application` (`application_id`, `date_of_visit`, `date_of_time`, `product`, `file_no`, `address`, `person_met`, `rel_with_app`, `locating`, `landmark`, `residence`, `years_staying`, `stay_con_by`, `type_of_resi`, `resi_covid_z`, `family_mem_inf`, `comments`, `status`) VALUES
(34, '12/04/2020', '12:59', 'test', '23', 'Shri nagar colony', 'Dev', 'Dev', 'Difficult', 'morar', 'own', '10 year', 'dev', 'rented', 'Red', NULL, '  ', '1'),
(38, '7/7/2020', '15:30', 'homeloan', '121', 'station road near bustand gwalior.', 'gaurav jain', 'Self', 'Easy', 'mastan baba ki dargah', 'rented', '5 yrs', 'neighbour', 'rented', 'Green', 'No Infection', 'No Infection', '2'),
(48, '12/04/2020', '12:59', 'test', '23', 'Shri nagar colony', 'Dev', 'Dev', NULL, '', '', '', '', '', NULL, NULL, ' DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA', '1'),
(49, '12/04/2020', '12:59', 'test', '23', 'Shri nagar colony', 'Dev', 'Dev', NULL, '', '', '', '', '', NULL, NULL, ' DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA', '0'),
(50, '12/04/2020', '12:59', 'test', '23', 'Shri nagar colony', 'Dev', 'Dev', NULL, '', '', '', '', '', NULL, NULL, '  DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA ', '0'),
(53, '07/16/2020', '17:59', 'homeloan', '1234', 'c/o krishna tomar h.no.q-322 shatabdipuram bhind road gwalior', '', '', NULL, '', '', '', '', '', 'Red', 'Infected And Treated', ' DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA', '1'),
(54, '07/16/2020', '12:59', 'car loan', '324', 'h.no.05 samraddhi mention sada shiv nagar bahodapur gwalior', '', '', NULL, '', '', '', '', '', NULL, NULL, ' DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA', '1'),
(55, '02/07/2020	', '12:59', 'homeloan', '654', 'flat no.102 aradhya apartment jiwaji nagar thatipur gwalior', '', '', 'Difficult', '', '', '', '', '', NULL, NULL, ' DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA', '0');

-- --------------------------------------------------------

--
-- Table structure for table `loan_document`
--

CREATE TABLE `loan_document` (
  `id` int(50) NOT NULL,
  `application_id` int(50) NOT NULL,
  `doc1` varchar(200) DEFAULT NULL,
  `doc2` varchar(200) DEFAULT NULL,
  `doc3` varchar(200) DEFAULT NULL,
  `doc4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan_document`
--

INSERT INTO `loan_document` (`id`, `application_id`, `doc1`, `doc2`, `doc3`, `doc4`) VALUES
(7, 34, 'logo8.png', 'our_logo4.png', 'plant15.jpg', 'pro618.jpg'),
(8, 38, '14787890d90d60437b9d5794e0d545a8.png', '0048062bcc101fe58d08848e14dc7db6.png', 'agency-seal2.png', 'agency-seal3.png');

-- --------------------------------------------------------

--
-- Table structure for table `office_co_applicant`
--

CREATE TABLE `office_co_applicant` (
  `id` int(50) NOT NULL,
  `application_id` int(50) NOT NULL,
  `coa_off_dof_visit` varchar(200) NOT NULL,
  `coa_off_tof_visit` varchar(200) NOT NULL,
  `coa_off_name_app` varchar(200) DEFAULT NULL,
  `coa_off_address` varchar(200) DEFAULT NULL,
  `coa_type_of_employment` varchar(200) DEFAULT NULL,
  `coa_off_person_met` varchar(200) DEFAULT NULL,
  `coa_applicant_post` varchar(200) DEFAULT NULL,
  `coa_working_since` varchar(200) DEFAULT NULL,
  `coa_ownership_of_office` varchar(200) DEFAULT NULL,
  `coa_off_num_years` varchar(200) DEFAULT NULL,
  `coa_nature_of_business` varchar(200) DEFAULT NULL,
  `coa_office_board_seen` varchar(200) DEFAULT NULL,
  `coa_off_landmark` varchar(200) DEFAULT NULL,
  `coa_off_locating` varchar(200) DEFAULT NULL,
  `coa_number_of_employee` varchar(200) DEFAULT NULL,
  `coa_stock_level` varchar(200) DEFAULT NULL,
  `coa_business_sighted` varchar(200) DEFAULT NULL,
  `coa_business_activity` varchar(200) DEFAULT NULL,
  `coa_applicant_availed` varchar(200) DEFAULT NULL,
  `coa_business_con_by` varchar(200) DEFAULT NULL,
  `coa_off_covid_zone` varchar(200) DEFAULT NULL,
  `coa_impact_of_covid` varchar(200) DEFAULT NULL,
  `coa_off_comments` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_co_applicant`
--

INSERT INTO `office_co_applicant` (`id`, `application_id`, `coa_off_dof_visit`, `coa_off_tof_visit`, `coa_off_name_app`, `coa_off_address`, `coa_type_of_employment`, `coa_off_person_met`, `coa_applicant_post`, `coa_working_since`, `coa_ownership_of_office`, `coa_off_num_years`, `coa_nature_of_business`, `coa_office_board_seen`, `coa_off_landmark`, `coa_off_locating`, `coa_number_of_employee`, `coa_stock_level`, `coa_business_sighted`, `coa_business_activity`, `coa_applicant_availed`, `coa_business_con_by`, `coa_off_covid_zone`, `coa_impact_of_covid`, `coa_off_comments`) VALUES
(2, 34, '12-08-2020', '12:59', 'Devendra', 'Gwalior', 'Salaried', NULL, '', '34', 'Self-Owned', '23', '', 'gwalior', 'morar', 'Easy', '12', 'High', 'test', 'Ease', 'yes', 'Name Board', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `office_verification`
--

CREATE TABLE `office_verification` (
  `id` int(50) NOT NULL,
  `application_id` int(50) NOT NULL,
  `off_dof_visit` varchar(200) NOT NULL,
  `off_tof_visit` varchar(200) NOT NULL,
  `off_name_app` varchar(200) DEFAULT NULL,
  `off_address` varchar(200) DEFAULT NULL,
  `type_of_employment` varchar(200) DEFAULT NULL,
  `off_person_met` varchar(200) DEFAULT NULL,
  `applicant_post` varchar(200) DEFAULT NULL,
  `working_since` varchar(200) DEFAULT NULL,
  `ownership_of_office` varchar(200) DEFAULT NULL,
  `off_num_years` varchar(200) DEFAULT NULL,
  `nature_of_business` varchar(200) DEFAULT NULL,
  `office_board_seen` varchar(200) DEFAULT NULL,
  `off_landmark` varchar(200) DEFAULT NULL,
  `off_locating` varchar(200) DEFAULT NULL,
  `number_of_employee` varchar(200) DEFAULT NULL,
  `stock_level` varchar(200) DEFAULT NULL,
  `business_sighted` varchar(200) DEFAULT NULL,
  `business_activity` varchar(200) DEFAULT NULL,
  `applicant_availed` varchar(200) DEFAULT NULL,
  `business_con_by` varchar(200) DEFAULT NULL,
  `off_covid_zone` varchar(200) DEFAULT NULL,
  `impact_of_covid` varchar(200) DEFAULT NULL,
  `off_comments` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_verification`
--

INSERT INTO `office_verification` (`id`, `application_id`, `off_dof_visit`, `off_tof_visit`, `off_name_app`, `off_address`, `type_of_employment`, `off_person_met`, `applicant_post`, `working_since`, `ownership_of_office`, `off_num_years`, `nature_of_business`, `office_board_seen`, `off_landmark`, `off_locating`, `number_of_employee`, `stock_level`, `business_sighted`, `business_activity`, `applicant_availed`, `business_con_by`, `off_covid_zone`, `impact_of_covid`, `off_comments`) VALUES
(11, 34, '12-05-2020', '12:59', 'Devendra', 'gwalior', 'Salaried', 'dev', '', '', 'Self-Owned', '10 year', '', 'dev', 'dev', 'Easy', '12', 'High', 'dev', 'Easy', 'new', 'Name Board', NULL, NULL, ' DURING VISIT PERSON MET SELF,APPLICANT IS SALARIED WORKING AS A BUSINESS EXECUTIVE, WORKING EXP,08 YRS, OFFICE ADDRESS CHANDRALOK COMPLEX B 448 SHOP NO 10 DOUBLE ROAD ANAND NAGAR GWALIOR'),
(15, 38, '7/7/2020', '15:30', 'gaurav jain', 'Gwalior', 'Self Employed', 'gaurav jain', 'Assistant', '2012', 'Leased', '5 yrs', 'Trading', 'yes', 'girraj park', 'Untraceable', '5', 'High', 'no', 'Easy', 'no', 'Name Board', 'Red', 'High', ' DURING VISIT PERSON MET SELF,APPLICANT IS SALARIED WORKING AS A BUSINESS EXECUTIVE, WORKING EXP,08 YRS, OFFICE ADDRESS CHANDRALOK COMPLEX B 448 SHOP NO 10 DOUBLE ROAD ANAND NAGAR GWALIOR');

-- --------------------------------------------------------

--
-- Table structure for table `tele_verification`
--

CREATE TABLE `tele_verification` (
  `id` int(50) NOT NULL,
  `application_id` int(50) NOT NULL,
  `tele_dof_visit` varchar(200) NOT NULL,
  `tele_tof_visit` varchar(200) NOT NULL,
  `tele_nof_app` varchar(200) DEFAULT NULL,
  `tele_cont_no` varchar(200) DEFAULT NULL,
  `tele_contacted` varchar(200) DEFAULT NULL,
  `tele_spoken` varchar(200) DEFAULT NULL,
  `tele_rel_w_app` varchar(200) DEFAULT NULL,
  `tele_years_staying` varchar(200) DEFAULT NULL,
  `tele_residence` varchar(200) DEFAULT NULL,
  `tele_alt_cont_no` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tele_verification`
--

INSERT INTO `tele_verification` (`id`, `application_id`, `tele_dof_visit`, `tele_tof_visit`, `tele_nof_app`, `tele_cont_no`, `tele_contacted`, `tele_spoken`, `tele_rel_w_app`, `tele_years_staying`, `tele_residence`, `tele_alt_cont_no`) VALUES
(30, 34, '12/05/2020 ', '12:59', 'devendra', '8109450654', 'Yes', 'dev ', 'brother ', '5 year', 'self', '9582698615'),
(34, 38, '7/7/2020', '16:20', 'gaurav jain', '9876546598', 'Yes', 'gaurav jain', 'self', '5 yrs', 'rented', 'na'),
(44, 48, '12/05/2020', '12:59', 'devendra', '8109450654', NULL, '', '', '', '', ''),
(45, 49, '12/05/2020', '12:59', 'devendra', '8109450654', NULL, '', '', '', '', ''),
(46, 50, '12/05/2020 ', '12:59', 'devendra', '8109450654', NULL, ' ', ' ', '', '', ''),
(49, 53, '07/16/2020', '12:59', '	trilokee sharma', '', NULL, '', '', '', '', ''),
(50, 54, '07/16/2020', '12:59', 'kiran sharma', '', 'Yes', '', '', '', '', ''),
(51, 55, '02/07/2020	', '12:59', 'ramlakhan sakhwar', '', NULL, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coa_tele_verification`
--
ALTER TABLE `coa_tele_verification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Indexes for table `co_applicant`
--
ALTER TABLE `co_applicant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Indexes for table `loan_application`
--
ALTER TABLE `loan_application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `loan_document`
--
ALTER TABLE `loan_document`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Indexes for table `office_co_applicant`
--
ALTER TABLE `office_co_applicant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Indexes for table `office_verification`
--
ALTER TABLE `office_verification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Indexes for table `tele_verification`
--
ALTER TABLE `tele_verification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coa_tele_verification`
--
ALTER TABLE `coa_tele_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `co_applicant`
--
ALTER TABLE `co_applicant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `loan_application`
--
ALTER TABLE `loan_application`
  MODIFY `application_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `loan_document`
--
ALTER TABLE `loan_document`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `office_co_applicant`
--
ALTER TABLE `office_co_applicant`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `office_verification`
--
ALTER TABLE `office_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tele_verification`
--
ALTER TABLE `tele_verification`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
