-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2021 at 06:45 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `up_mail` varchar(30) NOT NULL,
  `full_name` text NOT NULL,
  `student_num` text NOT NULL,
  `degree_program` text NOT NULL,
  `Type` int(1) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`up_mail`, `full_name`, `student_num`, `degree_program`, `Type`, `Password`) VALUES
('aacacayuran@up.edu.ph', 'Alexis Cacayuran', '2018-03829', 'BS Computer Science', 0, 'student1'),
('admin@up.edu.ph', 'Null', '0000-00000', 'Null', 1, 'admin0'),
('ebabad2@up.edu.ph', 'Abad, Erick, B', '2013-53857', 'BS Computer Science', 0, 'student2');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `question_id` int(5) NOT NULL,
  `question` text NOT NULL,
  `classification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`question_id`, `question`, `classification`) VALUES
(1, 'How useful was the freshmen orientation in providing academic information?', 'Degree Program'),
(2, 'How will you rate the quality of faculty advising', 'Degree Program'),
(3, 'How will you rate the student - faculty interaction in the program?', 'Degree Program'),
(4, 'How will you rate the assistance/service provided by the admin staff when lodging \r\nrequests (Certifications, clearance, and other documents)?', 'Degree Program'),
(5, 'How will you rate the GE programs?\r\n', 'Degree Program'),
(6, 'How useful was the NSTP in your development as a student?', 'Degree Program'),
(7, 'How will you rate the relevance of the subjects offered in the degree program?', 'Degree Program'),
(8, 'How will you rate the availability of the subjects you need in the degree program?', 'Degree Program'),
(9, 'How will you rate the overall quality of your degree program?', 'Degree Program'),
(10, 'How do you think can the program be improved?', 'Degree Program'),
(11, 'How would you rate the quality of advising of your thesis adviser?', 'Degree Program'),
(12, 'How will you rate the quality of lecture rooms?', 'Facilities and Infrastructure'),
(13, 'How will you rate the quality of the computer laboratories?', 'Facilities and Infrastructure'),
(14, 'How will you rate the quality of the equipment and instruments used/provided in \r\nthe laboratory course/s?', 'Facilities and Infrastructure'),
(15, 'What are the areas that need improvement in the computer laboratories? (Check all \r\nthat applies)', 'Facilities and Infrastructure'),
(16, 'How will you rate the following services provided by the following offices?', 'Facilities and Infrastructure'),
(17, 'Did you ever seek for financial aid (e.g. stipend, loan, other financial assistance) \r\nfrom the university to support your UP education?', 'Financial Aid'),
(18, 'Did you seek for financial help in attending conferences?', 'Financial Aid'),
(19, 'Which events did you participate in? (Pasiklaban, CS Week, Knowledge Festival, \r\nOrganization-led Quiz Bees, Intramurals, Tagislakas, Salakniban, Other:_____)', 'Events'),
(20, 'Which academic organization did you belong to? (Math-Physics Society, UP SIKAT, ComSci@UP.Bag)', 'Events'),
(21, 'What other (non-academic) organizations did you belong to?', 'Events'),
(22, 'What are your plans after graduation? (Scientific research, graduate school, \r\nteaching, private sector (bank and finance, data science, actuarial, insurance, etc.), \r\nNGO, Government, Other: _____ )', 'Career Plans '),
(23, 'Did you receive or attend any career counseling conducted within the university?\r\n', 'Career Plans'),
(24, 'Will you be willing to be contacted for a follow-up interview?', 'Consent for a follow-up interview');

-- --------------------------------------------------------

--
-- Table structure for table `respondents`
--

CREATE TABLE `respondents` (
  `id` int(11) NOT NULL,
  `up_mail` varchar(30) NOT NULL,
  `question_id` int(5) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`up_mail`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `respondents`
--
ALTER TABLE `respondents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `up_mail` (`up_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `question_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `respondents`
--
ALTER TABLE `respondents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `respondents`
--
ALTER TABLE `respondents`
  ADD CONSTRAINT `respondents_ibfk_2` FOREIGN KEY (`up_mail`) REFERENCES `login` (`up_mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
