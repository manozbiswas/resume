-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 01:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `last_certification` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `cv_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `name`, `address`, `email`, `mobile`, `last_certification`, `institution`, `passing_year`, `subject`, `result`, `interest`, `nature`, `cv_url`) VALUES
(1, 'manoz', 'Dhaka', 'manoz@dnet', '01926197902', 'MSC', 'MIT', '2016', 'CSE', '4.00', 'Nothing', 'Full time', 'cv.pdf'),
(8, 'manoz kumar', 'Dhaka', 'manoz.biswas@dnet.org.bd', '01926197902', 'certificate', 'just', '2008', 'cse', '4', 'Finance & Account,Business Intelligence,Content,Copy writing ,Technology,Marketing,Sales,App Development,Graphic Design,Human Resources,Business Development,Social Media,Games Development,Software Architecture,Admin,Research,Digital Marketing,UI & UX desi', 'Intern,Volunteer,Part Time, Full Time', 'manozkumar_cv_1476095700.doc'),
(9, 'manoz debnath', 'Dhaka', 'manoz.biswas@dnet.org.bd', '01926197902', 'certificate', 'just', '2008', 'cse', '4', 'Communication,Finance & Account,Business Intelligence,Content,Copy writing ,Technology,Marketing,Sales,App Development,Graphic Design,Human Resources,Business Development,Social Media,Games Development,Software Architecture,Admin,Research,Digital Marketin', 'Intern,Volunteer,Part Time, Full Time', 'manozdebnath_cv_1476095819.doc'),
(10, 'manoz kumar debnath', 'Dhaka', 'manoz.biswas@dnet.org.bd', '01926197902', 'certificate', 'just', '2008', 'cse', '4', 'Technology,Marketing,Sales,App Development,Graphic Design,Human Resources,Business Development,Social Media,Games Development,Software Architecture,Admin,Research,Digital Marketing,UI & UX design,Innovative Design', 'Volunteer,Part Time, Full Time', ''),
(11, 'manoz kumar debnath', 'Dhaka', 'manoz.biswas@dnet.org.bd', '01926197902', 'certificate', 'just', '2008', 'cse', '4', 'Technology,Marketing,Sales,App Development,Graphic Design,Human Resources,Business Development,Social Media,Games Development,Software Architecture,Admin,Research,Digital Marketing,UI & UX design,Innovative Design', 'Volunteer,Part Time, Full Time', 'manozkumardebnath_cv_1476097114.doc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
