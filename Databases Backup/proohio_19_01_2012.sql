-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2013 at 02:03 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proohio`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('01d29367c23fbf68dc12f2befb3739c2', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/20100101 Firefox/18.0', 1358557248, 'a:5:{s:9:"user_data";s:0:"";s:7:"user_id";s:1:"1";s:8:"username";s:5:"waqas";s:8:"password";s:5:"waqas";s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `class_id` int(13) NOT NULL AUTO_INCREMENT,
  `subject_id` int(13) NOT NULL,
  `class_period_number` varchar(255) NOT NULL,
  `class_grade_level` varchar(255) NOT NULL,
  `class_number` varchar(255) NOT NULL,
  `class_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `district_id` int(13) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(255) NOT NULL,
  `district_code` varchar(255) NOT NULL,
  `state_id` int(13) NOT NULL,
  `district_contact_first_name` varchar(255) NOT NULL,
  `district_contact_last_name` varchar(255) NOT NULL,
  `district_admin_password` varchar(255) NOT NULL,
  `district_contact_email` varchar(255) NOT NULL,
  `district_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`, `district_code`, `state_id`, `district_contact_first_name`, `district_contact_last_name`, `district_admin_password`, `district_contact_email`, `district_status`) VALUES
(1, 'ads', 'asd', 1, 'asd', 'asd', '', 'appletoeat2@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `email_config`
--

CREATE TABLE IF NOT EXISTS `email_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `protocol` varchar(255) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` varchar(255) NOT NULL,
  `smtp_user` varchar(255) NOT NULL,
  `smtp_pass` varchar(255) NOT NULL,
  `mailtype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `email_config`
--

INSERT INTO `email_config` (`id`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `mailtype`) VALUES
(1, 'smtp', 'ssl://smtp.googlemail.com', '465', 'dummyemailfortest@gmail.com', 'dummy123', 'html');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_type` varchar(255) NOT NULL,
  `number_of_choices` int(13) NOT NULL,
  `answer_type` varchar(255) NOT NULL,
  `question_title` varchar(255) NOT NULL,
  `question_scenario` longtext NOT NULL,
  `question_statement` longtext NOT NULL,
  `choices_text` longtext NOT NULL,
  `correct_answer` text NOT NULL,
  `question_image` varchar(255) NOT NULL,
  `question_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_type`, `number_of_choices`, `answer_type`, `question_title`, `question_scenario`, `question_statement`, `choices_text`, `correct_answer`, `question_image`, `question_status`) VALUES
(6, 'type5', 2, 'single_answer', 'Question Title', 'asd', 'sad', 'asd%&@ads', 'choice1', '2b3601ca370ca2733b8eebf7fb64cfcc.jpg', 'Active'),
(7, 'type1', 4, 'single_answer', 'asd', '', '<p></p><p><span style=\\"font-size: 14pt;\\">“How-dee do,” said the man in blue.<br><br>“Jolly good day,” said the man in gray.<br><br>“Good day for a kite,” said the woman in white.<br><br>“That’s right. That’s right!” spoke the bluebird in flight. “Do you think you may fly a kite?”<br><br>“I think I just might. Yes, let’s all go help that woman fly her red kite!”</span></p><span style=\\"font-size: 14pt;\\">“I’d like to help,” said a boy in a chair. “But a kite is no good for me. With a kite you must run and have fun, and I cannot do that in my chair. It has wheels, you see.”<br><br>“It doesn’t matter how we do it, either by leg or by chair. All that matters,” said the man in blue, “is the warmth of the day we share. No matter your problem, you have something to offer. So, we’ll be your legs and you’ll use your hands, and we’ll fly that kite high over the land.”</span><span style=\\"font-size: 14pt;\\">“How-dee do,” said the man in blue.</span><p><span style=\\"font-size: 14pt;\\"><br>“Jolly good day,” said the man in gray.<br><br>“Good day for a kite,” said the woman in white.<br><br>“That’s right. That’s right!” spoke the bluebird in flight. “Do you think you may fly a kite?”<br><br>“I think I just might. Yes, let’s all go help that woman fly her red kite!”</span></p><span style=\\"font-size: 14pt;\\">“I’d like to help,” said a boy in a chair. “But a kite is no good for me. With a kite you must run and have fun, and I cannot do that in my chair. It has wheels, you see.”<br><br>“It doesn’t matter how we do it, either by leg or by chair. All that matters,” said the man in blue, “is the warmth of the day we share. No matter your problem, you have something to offer. So, we’ll be your legs and you’ll use your hands, and we’ll fly that kite high over the land.”</span><br><p></p>', 'asdasd%&@asdasd%&@asdasd%&@asdasd', 'choice1', '', 'Active'),
(8, 'type7', 5, 'multiple_answer', 'sad', 'This is first half of question%&@This is second half of secenatio', 'This is question statment', 'sadasd This is first half of question This is first half of question asdasd This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question %&@asdasdasd This is first half of question This is first half of questionasdasd This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question %&@asdasd This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question asdasd This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question %&@This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question%&@ This is first half of question This is first half of question This is first half of question This is first half of questionThis is first half of question asdasd This is first half of question This is first half of question This is first half of question This is first half of question This is first half of question ', 'choice1%&@choice3%&@choice4', '', 'Active'),
(9, 'type1', 3, 'single_answer', 'asdasd', '', 'asdas', 'asd%&@asdas%&@asda', 'choice1', '', 'Active'),
(10, 'type2', 0, 'large_text_box', 'sad', 'asd', 'asdasd', '', '', '', 'Active'),
(11, 'type5', 0, 'small_text_box', 'asdasd', 'sadsadas', 'sadasdasd', '', '', '2d62fa556a9e708b667dcb3c8a900dd3.jpg', 'Active'),
(12, 'type2', 2, 'single_answer', 'asdasd', '<p>asdasdasd</p>', '<p>asdsadasdasd</p>', 'asasdasd%&@asdasdasd', 'choice2', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `questions_mtc`
--

CREATE TABLE IF NOT EXISTS `questions_mtc` (
  `question_mtc_id` int(13) NOT NULL AUTO_INCREMENT,
  `question_mtc_title` varchar(255) NOT NULL,
  `question_mtc_scenario` longtext NOT NULL,
  `question_mtc_statement` longtext NOT NULL,
  `question_mtc_col1_choices` int(13) NOT NULL,
  `question_mtc_col2_choices` int(13) NOT NULL,
  `question_mtc_text1` longtext NOT NULL,
  `question_mtc_text2` longtext NOT NULL,
  `column1_answer_order` varchar(255) NOT NULL,
  `column2_answer_order` varchar(255) NOT NULL,
  `column1_display_order` varchar(255) NOT NULL,
  `column2_display_order` varchar(255) NOT NULL,
  `question_mtc_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`question_mtc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions_mtc`
--

INSERT INTO `questions_mtc` (`question_mtc_id`, `question_mtc_title`, `question_mtc_scenario`, `question_mtc_statement`, `question_mtc_col1_choices`, `question_mtc_col2_choices`, `question_mtc_text1`, `question_mtc_text2`, `column1_answer_order`, `column2_answer_order`, `column1_display_order`, `column2_display_order`, `question_mtc_status`) VALUES
(3, 'Question Title', 'asdasd', 'sadasdas', 3, 2, 'Column 1 Option 1%&@Column 1 Option 2%&@Column 1 Option 3', 'Column 2 Option 1%&@Column 2 Option 2', '2,1,3', '1,2', '2,3,1', '2,1', 'Active'),
(4, 'Question Title', 'asdasdasd', 'asdasdasd', 2, 3, 'Column 1 Option 1%&@Column 1 Option 2', 'Column 2 Option 1%&@Column 2 Option 2%&@Column 2 Option 3', '1,2', '2,1,3', '1,2', '1,2,3', 'Active'),
(5, 'asdasda', '<p>dasdasd</p>', '<p>asdasdasdasda</p>', 2, 2, 'Column 1 Option 1%&@Column 1 Option 2', 'Column 2 Option 1%&@Column 2 Option 2', '1,2', '1,2', '1,2', '1,2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `root_path`
--

CREATE TABLE IF NOT EXISTS `root_path` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `root_path`
--

INSERT INTO `root_path` (`id`, `path`) VALUES
(1, '/ohio');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(13) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(255) NOT NULL,
  `school_address1` text NOT NULL,
  `school_address2` text NOT NULL,
  `school_city` varchar(255) NOT NULL,
  `school_state` varchar(255) NOT NULL,
  `school_zip_code` varchar(255) NOT NULL,
  `school_admin_first_name` varchar(255) NOT NULL,
  `school_admin_last_name` varchar(255) NOT NULL,
  `school_admin_password` varchar(255) NOT NULL,
  `school_admin_email` varchar(255) NOT NULL,
  `school_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `standards`
--

CREATE TABLE IF NOT EXISTS `standards` (
  `standard_id` int(13) NOT NULL AUTO_INCREMENT,
  `standard_subject` int(13) NOT NULL,
  `standard_grade` varchar(2) NOT NULL,
  `standard_pc_domain_code` varchar(15) NOT NULL,
  `standard_domain_description` varchar(40) NOT NULL,
  `standard_pc_standard_number` varchar(15) NOT NULL,
  `standard_learning_standard_description` varchar(105) NOT NULL,
  `standard_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`standard_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `standards`
--

INSERT INTO `standards` (`standard_id`, `standard_subject`, `standard_grade`, `standard_pc_domain_code`, `standard_domain_description`, `standard_pc_standard_number`, `standard_learning_standard_description`, `standard_status`) VALUES
(1, 1, '02', '1. LIT', 'Literature', '1: [1]', 'Ask and answer such questions as who, what, where, when, why, and how to demonstrate understanding of key', 'Active'),
(2, 1, '01', 'asd', 'asdasd', 'asdasd', 'asdasd', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `state_id` int(13) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) NOT NULL,
  `state_code` varchar(255) NOT NULL,
  `state_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `state_name`, `state_code`, `state_status`) VALUES
(1, 'Alabama', 'AL', 'Active'),
(2, 'Alaska', 'AK', 'Active'),
(3, 'Arizona', 'AZ', 'Active'),
(4, 'Arkansas', 'AR', 'Active'),
(5, 'California', 'CA', 'Active'),
(6, 'Colorado', 'CO', 'Active'),
(7, 'Connecticut', 'CT', 'Active'),
(8, 'Delaware', 'DE', 'Active'),
(9, 'District of Columbia', 'DC', 'Active'),
(10, 'Florida', 'FL', 'Active'),
(11, 'Georgia', 'GA', 'Active'),
(12, 'Hawaii', 'HI', 'Active'),
(13, 'Idaho', 'ID', 'Active'),
(14, 'Illinois', 'IL', 'Active'),
(15, 'Indiana', 'IN', 'Active'),
(16, 'Iowa', 'IA', 'Active'),
(17, 'Kansas', 'KS', 'Active'),
(18, 'Kentucky', 'KY', 'Active'),
(19, 'Louisiana', 'LA', 'Active'),
(20, 'Maine', 'ME', 'Active'),
(21, 'Maryland', 'MD', 'Active'),
(22, 'Massachusetts', 'MA', 'Active'),
(23, 'Michigan', 'MI', 'Active'),
(24, 'Minnesota', 'MN', 'Active'),
(25, 'Mississippi', 'MS', 'Active'),
(26, 'Missouri', 'MO', 'Active'),
(27, 'Montana', 'MT', 'Active'),
(28, 'Nebraska', 'NE', 'Active'),
(29, 'Nevada', 'NV', 'Active'),
(30, 'New Hampshire', 'NH', 'Active'),
(31, 'New Jersey', 'NJ', 'Active'),
(32, 'New Mexico', 'NM', 'Active'),
(33, 'New York', 'NY', 'Active'),
(34, 'North Carolina', 'NC', 'Active'),
(35, 'North Dakota', 'ND', 'Active'),
(36, 'Ohio', 'OH', 'Active'),
(37, 'Oklahoma', 'OK', 'Active'),
(38, 'Oregon', 'OR', 'Active'),
(39, 'Pennsylvania', 'PA', 'Active'),
(40, 'Rhode Island', 'RI', 'Active'),
(41, 'South Carolina', 'SC', 'Active'),
(42, 'South Dakota', 'SD', 'Active'),
(43, 'Tennessee', 'TN', 'Active'),
(44, 'Texas', 'TX', 'Active'),
(45, 'Utah', 'UT', 'Active'),
(46, 'Vermont', 'VT', 'Active'),
(47, 'Virginia', 'VA', 'Active'),
(48, 'Washington', 'WA', 'Active'),
(49, 'West Virginia', 'WV', 'Active'),
(50, 'Wisconsin', 'WI', 'Active'),
(51, 'Wyoming', 'WY', 'Active'),
(52, 'asdasd', 'asasd', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(13) NOT NULL AUTO_INCREMENT,
  `student_first_name` varchar(255) NOT NULL,
  `student_last_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_grade_level` varchar(10) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(13) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(15) NOT NULL,
  `subject_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_status`) VALUES
(1, 'Reading', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int(13) NOT NULL AUTO_INCREMENT,
  `teacher_first_name` varchar(255) NOT NULL,
  `teacher_last_name` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_number` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL,
  `teacher_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE IF NOT EXISTS `user_logins` (
  `user_login_id` int(13) NOT NULL AUTO_INCREMENT,
  `user_login_username` varchar(255) NOT NULL,
  `user_login_password` varchar(255) NOT NULL,
  `user_login_status` enum('Active','Deactive') NOT NULL,
  PRIMARY KEY (`user_login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`user_login_id`, `user_login_username`, `user_login_password`, `user_login_status`) VALUES
(1, 'waqas', 'waqas', 'Active'),
(2, 'ben', 'ben', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
