-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 06:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(111) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `admin_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(7, 'vivi@gmail.com', '12345', 'vivek65k', 'vivek', 'pandey', '1'),
(8, 'vivek@gmail.com', '1', 'pritesh', 'vivek', 'pandey', '2'),
(9, 'pritesh@gmail.com', 'pritesh123', ' pritesh123', ' pritesh', ' thakur', '2'),
(11, 'vivek65k@gmail.com', '12345', '', 'Test', 'Test', '2'),
(12, 'test@gmail.com', '12345', '', 'Test', 'Test', '2'),
(13, 'bhatnagardivyansh98@gmail.com', '12345', '', 'Test', 'Test', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(111) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `admin`) VALUES
(1, 'Super admin'),
(2, 'Customer admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_jobs`
--

CREATE TABLE `all_jobs` (
  `job_id` int(111) NOT NULL,
  `customer_email` varchar(111) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `country` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(100) NOT NULL,
  `keyword` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_jobs`
--

INSERT INTO `all_jobs` (`job_id`, `customer_email`, `job_title`, `des`, `country`, `state`, `city`, `keyword`, `category`) VALUES
(7, 'vivek@gmail.com', 'Urgent Requirement of PHP Developer, 1 To 4 Years, Noida', 'Dear Candidates, \r\n\r\nGreeting from iWEBSERVICES.\r\n\r\niWEBSERVICES is one of the most promising full-service Web ', 'India', 'West Bengal', 'Kolkata', ' PHP ', ' 3'),
(10, 'rohit@gmail.com', 'PHP Developer - Angularjs/corephp/mysql', 'Angularjs', 'North Korea', 'Hwanghae-namdo', 'Kaesong', 'Angularjs', ' 6'),
(12, 'amit@gmail.com', 'Coding java Developer', 'Php Developer Start Date : Immediately Great opportunities for qualified PHP developers OUR MOBILE APPS Require', 'India', 'Assam', 'Agia', 'java', ' 3'),
(13, 'amit@gmail.com', 'java developer', 'ABOUT US\r\nB3- BRAIN BEHIND BRAND is one of the fastest growing Executive Search Agency/ Placement Consultant based at Kolkata, India. We started our journey in 2008 and since then, have worked/ working for esteemed Clients in India, Oman, UAE, Malaysia, Indonesia etc. Our focused Verticals are Engineering, Construction, Manufacturing, Mining, Project Management etc.\r\nABOUT OUR CLIENT (Owner of this Job)\r\nThis Company have a vision is to democratize financial information and bring Wall Street like information to the masses by using artificial intelligence, generate smart analytics and intelligent content curation for the global financial markets. Their aim is to be exhaustive but precise. A tough challenge considering the expanse of information that is getting created. Currently, the engine covers US and Indian stocks, Currencies, Commodities, Indices and ETFs. Further, we use the power of social media, email, YouTube to reach our audience where they hang out, thus breaking away from the traditional distribution channels of investment research and connecting with the millennial audience.\r\nPROFILE NAME:\r\n\r\nJob Title --- PHP Developer\r\nExperience --- 2 5 years\r\nQualification Any Graduate\r\nPlace of Posting ----- KOLKATA\r\nCTC 1,80,000 3,60,000\r\nDUTIES AND RESPONSIBILITIES -----\r\nWe require PHP Developer candidate_\r\nSkills Required:\r\nâ€¢ Core PHP 7.2\r\nâ€¢ GIT\r\nâ€¢ MVC Framework (Code igniter)\r\nâ€¢ OOPS\r\nâ€¢ HTML\r\nâ€¢ CSS\r\nâ€¢ AJAX\r\nâ€¢ JQuery\r\nâ€¢ RESTful API\r\nâ€¢ MySql\r\nâ€¢ MongoDb\r\nâ€¢ Ubuntu\r\nâ€¢ Netbeans\r\nâ€¢ Web Security\r\nAdditional skills:\r\nâ€¢ Docker\r\nâ€¢ Kubernetes\r\nIf you are highly interested and motivated, kindly send your positive clarification as soon as possible to- becube13@gmail.com\r\nWITH REGARDS\r\nPrativa Batabyal\r\n7595064381\r\nJR. EXECUTIVETALENT ACQUISITION\r\nB3- BRAIN BEHIND BRAND', 'India', 'Manipur', 'Boljang', 'java', ' 3'),
(14, 'amit@gmail.com', 'java Developer', 'Candidates Skill:-\r\n\r\n1) Must have Knowledge of Ajax,Advance Jquary, .net ,Laravel, Wordpress (related Framework ),\r\n\r\ndbms, Ionic or Any Mobile Hybrid App Framework .', 'India', 'Himachal Pradesh', 'Alas', 'java', ' 3'),
(15, 'amit@gmail.com', 'Urgent Job opening for PHP Developer', 'Job Description\r\n\r\nOpening for a PHP Developer who is dedicated to the craft, writes code that they are proud of and can hit the ground running. A PHP Developer writes beautiful, fast PHP to a high standard, in a timely and scalable way that improves the code-base of our products in meaningful ways.\r\nCONTACT - HR Priyanka (9330241083)', 'India', 'West Bengal', 'Ambikanagar', 'php', ' 3'),
(17, 'amit@gmail.com', 'Angularjs Developer', 'We are looking for PHP Developers with 3 years of experience to strengthen our team.\r\n\r\nJob Description :\r\n\r\n- Your primary focus will be the development of all server-side logic, definition and maintenance of the central database, and ensuring high performance and responsiveness to requests from the front-end.\r\n\r\nResponsibilities :\r\n\r\n- Integration of user-facing elements developed by front-end developers\r\n\r\n- Build efficient, testable, and reusable PHP modules\r\n\r\n- Solve complex performance problems and architectural challenges\r\n\r\n- Integration of data storage solutions\r\n\r\nSkills And Qualifications :\r\n\r\n- Strong knowledge of PHP web framework such as Laravel.\r\n\r\n- Understanding the fully synchronous behavior of PHP\r\n\r\n- Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3\r\n\r\n- Knowledge of object-oriented PHP programming\r\n\r\n- Understanding accessibility and security compliance\r\n\r\n- Strong knowledge of the common PHP or web server exploits and their solutions\r\n\r\n- Familiarity with limitations of PHP as a platform and its workarounds\r\n\r\n- Familiarity with SQL/NoSQL databases and their declarative query languages\r\n\r\n- B. Tech. / MCA or equivalent\r\n\r\nInterested candidate can give a call at 91 6290829813', 'Algeria', 'Oum el Bouaghi', 'Ain Kercha', 'Angularjs', ' 3'),
(19, 'amit@gmail.com', 'Opening for Angularjs Developer', 'Profile - PHP/Laravel Developer\r\n\r\nTEKSMOBILE has an urgent requirement for a PHP developer. Experienced candidates will be given preference.\r\n\r\nExperience - 2+ years to 6+ years\r\n\r\nNumber of Vacancies : 02\r\n\r\nLocation - Kolkata\r\n\r\nJob Description:\r\n\r\nCandidates are required to have excellent object-oriented programming skills. Extensive experience in handling/managing PHP/Laravel data objects is essential. Should be proficient in working with PHP 5 or later. Knowledge of React.js will be considered as an added advantage.\r\n\r\nDesired Profile\r\n\r\nShould know in and out of PHP / CodeIgniter / Laravel.\r\n\r\nStrong reasoning and logical skills\r\n\r\nShould be able to think smart and do the right implementation.\r\n\r\nShould understand complex admin panel portals and complex database designs\r\n\r\nShould be problem solving.\r\n\r\nRest APIs and other APIs like Google Places etc.\r\n\r\nShould have good Laravel Knowledge. Projects will be mainly on this framework.\r\n\r\nSpecial Preference given knowledge with React.js\r\n\r\nHTML5 / Responsive...', 'Anguilla', 'The Valley', 'The Valley', 'Angularjs', ' 3'),
(22, 'amit@gmail.com', 'Angularjs Developer', 'â€¢ Strong knowledge of PHP web frameworks (such as Laravel, CodeIgniter, Core PHP, WordPress. )\r\nâ€¢ Strong Knowledge on Apache server JavaScript: Angular.js, Node.js, jQuery etc.\r\nâ€¢ Knowledge of new web developments like AJAX, XML Building Web applications and Websites with an emphasis on performance and user experience.\r\nâ€¢ Plugin Development, Word press theme customization.\r\nâ€¢ Basic understanding of front-end technologies, such as JavaScript, HTML5 & CSS3 Hands on experience with any E-commerce website.\r\nâ€¢ Experiences in developing web based applications in MVC architecture.\r\nâ€¢ Candidate must have independently done at least 5-10 projects.\r\nâ€¢ Build, maintain, and optimize PHP web applications. Integration of data storage solutions {may include databases, key-value stores, blob stores, etc.\r\n', 'Benin', 'Atakora', 'Natitingou', 'Angularjs', ' 3'),
(23, 'vivek65k@gmail.com', 'php job in kolkata', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Albania', 'Fier', 'Bubullime', 'php', ' 3'),
(24, 'abc@gmail.com', 'swift developer', 'swift for fresher', 'India', 'Maharashtra', 'Pune', 'swift', ' 8'),
(25, 'vivi@gmail.com', 'asp.net', 'asp.net developer', 'India', 'Punjab', 'Alawalpur', 'net', ' 8'),
(26, 'amir@gmail.com', 'asp.net', 'asp.net developer required', 'India', 'Maharashtra', 'Pune', 'net', ' 8');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `des` varchar(100) NOT NULL,
  `admin` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company`, `des`, `admin`) VALUES
(6, '     Web', '       web                                                                       ee                 ', 'pritesh@gmail.com'),
(7, ' poorti', '                      poorti is the best company                    ', 'rohit@gmail.com'),
(8, ' Webmaddy', '                      Webmaddy                    ', 'vivek@gmail.com'),
(9, ' infosky', '                      infosky                    ', 'pritesh@gmail.com'),
(10, 'telcome.net', 'telcome.n', 'rohit@gmail.com'),
(11, 'staq', 'staq is looking for swift developers', 'abc@gmail.com'),
(13, 'Webnoice', 'it company in indore', 'amir@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(233) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(2, 'Test', 'vivi@gmail.com', 'php job', 'how can i post my job '),
(3, 'Test', 'vivi@gmail.com', 'php job', 'how can i post my job ');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `first_name`, `last_name`, `email`, `password`, `company_name`, `mobile`, `status`) VALUES
(3, 'Test', 'Test', 'vivek65k@gmail.com', '12345', 'Host Programming', '8210991424', 'Active'),
(5, 'Test', 'Test', 'test@gmail.com', '12345', 'Host Programming', '8210991424', 'Active'),
(6, 'Test', 'Test', 'bhatnagardivyansh98@gmail.com', '12345', 'Host Programming', '8210991424', 'Active'),
(7, 'xyz', 'abc', 'xyz@gmail.com', '12345', 'xyz', '8976512154', 'Active'),
(8, 'abc', 'xyz', 'abc@gmail.com', '12345', 'staq', '685768745', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `jobskeer`
--

CREATE TABLE `jobskeer` (
  `id` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobskeer`
--

INSERT INTO `jobskeer` (`id`, `email`, `password`, `first_name`, `last_name`, `dob`, `mobile_number`, `status`) VALUES
(1, 'vivek65k@gmail.com', '1', 'vivek', 'pandey', '2019-07-24', '08210991424', 'Active'),
(2, 'amit@gmail.com', '12345', 'Amit', 'Kumar', '2019-07-23', '08210991424', 'Active'),
(3, 'vivek65k@gmail.com', '1234', 'Test', 'Test', '', '8210991424', 'Active'),
(4, 'test@gmail.com', '12345', 'test', 'k', '2018-03-06', '8210991424', 'Active'),
(5, 'againtest@gmail.com', '12345', 'Test', 'Test', '2021-03-18', '8210991424', 'Active'),
(7, 'rohit@gmail.com', '12345', 'rohit', 'bhosle', '1997-06-12', '8765132135', 'Active'),
(9, 'mahesh@gmail.com', '12345', 'mahesh', 'solanke', '2021-05-21', '687', 'Inactive'),
(10, 'mahesh@gmail.com', '12345', 'mahesh', 'solanke', '2021-05-21', '687', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `job_apply`
--

CREATE TABLE `job_apply` (
  `id` int(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `file` varchar(111) NOT NULL,
  `id_job` varchar(111) NOT NULL,
  `job_seeker` varchar(111) NOT NULL,
  `mobile_number` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_apply`
--

INSERT INTO `job_apply` (`id`, `first_name`, `last_name`, `dob`, `file`, `id_job`, `job_seeker`, `mobile_number`) VALUES
(1, 'Ajinkya', 'Deshmukh', '1996-06-05', 'Chapter 3.2.docx', '23 ', 'vivek65k@gmail.com ', 2147483647),
(2, '', '', '', '', '23 ', 'test@gmail.com ', 0),
(3, 'test', 'pass', '1996-06-13', 'Test.docx', '12 ', 'test@gmail.com ', 2147483647),
(6, '', '', '', '', '7 ', 'vivek65k@gmail.com ', 0),
(7, '', '', '', '', '7 ', 'rohit@gmail.com ', 0),
(8, 'rohit', 'bhosle', '2008-06-13', '', '23 ', 'rohit@gmail.com ', 2147483647),
(9, 'rohit', 'bhosle', '2002-07-18', 'Chapter 3.2.docx', '26 ', 'rohit@gmail.com ', 87432154),
(22, 'rohit', 'bhosle', '2021-05-22', 'Untitled Document.pdf', '24 ', 'rohit@gmail.com ', 456);

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(2, 'java', 'gh'),
(3, 'php', 'php for fresher'),
(4, 'python', 'this is for python'),
(5, 'Wordpress', 'Wordpress'),
(6, 'Angularjs', 'Angularjs'),
(7, 'flutter', 'this is for mobile development'),
(8, 'other', 'other technologies');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(111) NOT NULL,
  `img` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `number` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user_email` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `img`, `name`, `dob`, `number`, `email`, `user_email`) VALUES
(19, 'download.png', 'vivek kumar pandey', '', '08210991424', 'vivek65k@gmail.com', 'vivek65k@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `questionset`
--

CREATE TABLE `questionset` (
  `id` int(11) NOT NULL,
  `title` varchar(233) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(222) NOT NULL,
  `employee` varchar(222) NOT NULL,
  `qset` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionset`
--

INSERT INTO `questionset` (`id`, `title`, `option1`, `option2`, `option3`, `option4`, `answer`, `employee`, `qset`) VALUES
(1, 'Which among the following is the most unique feature of Dholavira site of the Indus Valley Civilization?', 'Its cities were horizontally divided in multiple parts', ' Its cities were unevenly divided', 'Its cities were divided into 3 parts', 'None of these', 'B', 'vivek65k@gmail.com', 'set1'),
(2, 'Which among the following University was founded by Ramapala, the ruler of Pala dynasty?', 'Somapuri', 'Vallabhi', 'Jagadal', 'Odantpuri', 'C', 'vivek65k@gmail.com', 'set2'),
(3, 'At which age Gautam Buddha got Nirvana?', '24', '35', '38', '42', 'C', 'vivek65k@gmail.com', 'set3'),
(4, 'Who among the following was the founder of Pushyabhuti Dynasty ?', 'Pushyabhuti', 'Prabhakar Vardhan', 'Aditya vardhan', 'Harshavardhan', 'C', 'vivek65k@gmail.com', 'set4'),
(5, 'Which of the following inscriptions mentions the name of Kalidasa?', ' Allahabad pillar inscription', 'Aihole inscription', 'Alapadu grant', 'Hanumakonda inscription', 'B', 'vivek65k@gmail.com', 'set5'),
(25, 'select 2', '1', '2', '3', '4', 'B', 'abc@gmail.com', 'set1'),
(28, 'select 1', '1', '2', '3', '4', 'A', 'abc@gmail.com', 'set4'),
(82, 'select 3', '3', '2', '5', '6', 'A', 'abc@gmail.com', 'set2'),
(86, 'select 4', '1', '4', '2', '3', 'B', 'abc@gmail.com', 'set3'),
(87, 'select 5', '5', '4', '3', '1', 'A', 'abc@gmail.com', 'set5');

--
-- Triggers `questionset`
--
DELIMITER $$
CREATE TRIGGER `insert_questio` AFTER INSERT ON `questionset` FOR EACH ROW insert into questionset (title,option1,option2,option3,option4,answer,employee,qset) values (new.title,new.option1,new.option2,new.option3,new.option4,new.answer,new.employee,new.qset)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `questionset1`
--

CREATE TABLE `questionset1` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `employee` varchar(222) NOT NULL,
  `qset` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionset1`
--

INSERT INTO `questionset1` (`id`, `title`, `option1`, `option2`, `option3`, `option4`, `answer`, `employee`, `qset`) VALUES
(1, 'test 2', 'a', 'b', 'c', 'd', 'B', 'vivek65k@gmail.com', 'set1'),
(2, 'test2', 'simplexml_load_string()', ' loadxml()', 'Both of the above.', 'dd', 'C', 'vivek65k@gmail.com', 'set2'),
(3, 'Which of the following is correct about constants vs variables in PHP?', ' Constants may be defined and accessed anywhere without regard to variable scoping rules.', ' Once the Constants have been set, may not be redefined or undefined.', 'dd', 'None of the above.', 'C', 'vivek65k@gmail.com', 'set3'),
(4, 'Input Radio checked Property', 'a', '(int)$num', '(float)$num;', 'ddd', 'B', 'vivek65k@gmail.com', 'set5'),
(5, 'In which rock edict Ashoka mentioned “Every Human is my child…”?', 'Major Rock Edict V', '] Major Rock Edict IV', 'Major Rock Edict VI', 'Major Rock Edict VII', 'B', 'vivek65k@gmail.com', 'set4'),
(47, 'select 6', '6', '7', '8', '9', 'A', 'abc@gmail.com', 'set1'),
(48, 'select 7', '3', '7', '1', '2', 'B', 'abc@gmail.com', 'set2'),
(49, 'select 8', '1', '5', '8', '9', 'C', 'abc@gmail.com', 'set3'),
(50, 'select 9', '1', '4', '7', '9', 'D', 'abc@gmail.com', 'set4'),
(51, 'select 10', '10', '11', '54', '21', 'A', 'abc@gmail.com', 'set5');

-- --------------------------------------------------------

--
-- Table structure for table `questionset2`
--

CREATE TABLE `questionset2` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `employee` varchar(222) NOT NULL,
  `qset` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionset2`
--

INSERT INTO `questionset2` (`id`, `title`, `option1`, `option2`, `option3`, `option4`, `answer`, `employee`, `qset`) VALUES
(1, 'test 2', 'a', 'b', 'c', 'd', 'B', 'vivek65k@gmail.com', 'set1'),
(2, 'test2', 'simplexml_load_string()', ' loadxml()', 'Both of the above.', 'dd', 'D', 'vivek65k@gmail.com', 'set2'),
(3, 'At which among the following places, the Dharma-Chakra Jina Vihara was constructed by Gahadavala Queen Kumaradevi?', 'Bodha Gaya', 'Rajgrih', 'Kushinagar', 'Sarnath', 'C', 'vivek65k@gmail.com', 'set3'),
(4, 'Among all the major rock edicts of Ashoka, which one is the longest?', '7th major rock edict', '11th major rock edict', '13th major rock edict', '9th major rock edict', 'B', 'vivek65k@gmail.com', 'set4'),
(5, 'In context of Mauryan administration, who was regarded as the ‘Chief treasury officer’?', 'Samaharta', 'Paura', 'Sannidhata', 'Karmantika', 'B', 'vivek65k@gmail.com', 'set5'),
(40, 'select 11', '11', '12', '13', '14', 'A', 'abc@gmail.com', 'set1'),
(41, 'select 12', '11', '12', '13', '14', 'B', 'abc@gmail.com', 'set2'),
(42, 'select 13', '11', '12', '13', '14', 'C', 'abc@gmail.com', 'set3'),
(43, 'select 14', '11', '12', '13', '14', 'D', 'abc@gmail.com', 'set4'),
(44, 'select 15', '15', '13', '11', '12', 'A', 'abc@gmail.com', 'set5');

-- --------------------------------------------------------

--
-- Table structure for table `questionset3`
--

CREATE TABLE `questionset3` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `qset` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionset3`
--

INSERT INTO `questionset3` (`id`, `title`, `option1`, `option2`, `option3`, `option4`, `answer`, `employee`, `qset`) VALUES
(1, 'Wr', '1, -1, π/2, 0', ' 2 + X2 + x → coefficient of X2 = 1', '2 – X2 + X3 → coefficient of X2 = -1', '(π/2) X2 +x → coefficient of X2 = π/2', 'C', 'vivek65k@gmail.com', 'set1'),
(2, 'Th', 'Constant Polynomial', 'Cubic Polynomial', 'Quadratic Polynomial', 'Linear Polynomial', 'C', 'vivek65k@gmail.com', 'set2'),
(3, ' C', 'Y=−x2', 'y=−x3', ' y=−x7', 'Three curves i.e.', 'C', 'vivek65k@gmail.com', 'set3'),
(4, 'If', '2', '-1', '1', '0', 'C', 'vivek65k@gmail.com', 'set4'),
(5, 'Nu', 'More than 3', '3', '2', '1', 'B', 'vivek65k@gmail.com', 'set5'),
(22, 'select 21', '21', '22', '23', '24', 'A', 'abc@gmail.com', 'set1'),
(23, 'select 22', '21', '22', '23', '24', 'B', 'abc@gmail.com', 'set2'),
(24, 'select 23', '21', '22', '23', '24', 'C', 'abc@gmail.com', 'set3'),
(25, 'select 24', '21', '22', '23', '24', 'D', 'abc@gmail.com', 'set4'),
(26, 'select 25', '25', '26', '27', '28', 'A', 'abc@gmail.com', 'set5');

-- --------------------------------------------------------

--
-- Table structure for table `questionset4`
--

CREATE TABLE `questionset4` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `option1` varchar(233) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `answer` varchar(222) NOT NULL,
  `employee` varchar(222) NOT NULL,
  `qset` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionset4`
--

INSERT INTO `questionset4` (`id`, `title`, `option1`, `option2`, `option3`, `option4`, `answer`, `employee`, `qset`) VALUES
(1, 'Name of the first Atomic Submarine of India?    ', 'I.N.S Chakra', 'R.N. Shukla', 'V.R. Gill', 'D.B. Mahawar', 'B', 'vivek65k@gmail.com', 'set1'),
(2, 'What is the name of first British to visit India?  ', 'Hawkins', 'Norway', 'Devid', 'George Bush', 'B', 'vivek65k@gmail.com', 'set2'),
(3, 'Name of the first election commissioner of India?', 'Sukumar Sen', 'R.N. Shukla', ' V.R. Gill', 'D.B. Mahawar', 'C', 'vivek65k@gmail.com', 'set3'),
(4, 'Name of the first university of India?', 'Nalanda University', 'Taxshila University', 'Jawahar University', 'Dronacharya University', 'B', 'vivek65k@gmail.com', 'set4'),
(5, 'Name of the first Chinese pilgrim to visit India?', 'Fa-hien', 'Shekaspear', 'Hein sung', 'Charles', 'C', 'vivek65k@gmail.com', 'set5'),
(22, 'select 26', '25', '26', '27', '28', 'B', 'abc@gmail.com', 'set1'),
(23, 'select 27', '25', '26', '27', '28', 'C', 'abc@gmail.com', 'set2'),
(24, 'select 28', '26', '27', '28', '29', 'C', 'abc@gmail.com', 'set3'),
(25, 'select 29', '29', '30', '31', '32', 'A', 'abc@gmail.com', 'set4'),
(26, 'select 30', '29', '30', '31', '32', 'B', 'abc@gmail.com', 'set5');

-- --------------------------------------------------------

--
-- Table structure for table `question_title`
--

CREATE TABLE `question_title` (
  `id` int(11) NOT NULL,
  `set1` varchar(255) NOT NULL,
  `set2` varchar(255) NOT NULL,
  `set3` varchar(255) NOT NULL,
  `set4` varchar(255) NOT NULL,
  `set5` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_title`
--

INSERT INTO `question_title` (`id`, `set1`, `set2`, `set3`, `set4`, `set5`, `category`, `created_on`, `updated_on`) VALUES
(6, 'Aptitude test', 'Programming test', 'Reasoning test', 'Math test', 'Current affairs', 2, '2021-03-05 07:46:17', '2021-03-05 07:46:17'),
(8, 'Aptitude test', 'Programming test', 'Reasoning test', 'Math test', 'Current affairs ', 2, '2021-03-14 18:12:28', '2021-03-14 18:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `radioopt`
--

CREATE TABLE `radioopt` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `radioopt`
--

INSERT INTO `radioopt` (`id`, `user`, `marks`, `total`, `company_email`) VALUES
(1, 'rohit@gmail.com', '3', '5', 'abc@gmail.com'),
(2, 'rohit@gmail.com', '3', '5', 'abc@gmail.com'),
(3, 'rohit@gmail.com', '3', '5', 'abc@gmail.com'),
(4, 'rohit@gmail.com', '2', '5', 'abc@gmail.com'),
(5, 'rohit@gmail.com', '4', '5', 'abc@gmail.com'),
(6, 'rohit@gmail.com', '4', '5', 'abc@gmail.com'),
(7, 'rohit@gmail.com', '4', '5', 'abc@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `jobskeer`
--
ALTER TABLE `jobskeer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apply`
--
ALTER TABLE `job_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionset`
--
ALTER TABLE `questionset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionset1`
--
ALTER TABLE `questionset1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionset2`
--
ALTER TABLE `questionset2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionset3`
--
ALTER TABLE `questionset3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionset4`
--
ALTER TABLE `questionset4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_title`
--
ALTER TABLE `question_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radioopt`
--
ALTER TABLE `radioopt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `job_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobskeer`
--
ALTER TABLE `jobskeer`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_apply`
--
ALTER TABLE `job_apply`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `questionset`
--
ALTER TABLE `questionset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `questionset1`
--
ALTER TABLE `questionset1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `questionset2`
--
ALTER TABLE `questionset2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `questionset3`
--
ALTER TABLE `questionset3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `questionset4`
--
ALTER TABLE `questionset4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `question_title`
--
ALTER TABLE `question_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `radioopt`
--
ALTER TABLE `radioopt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
