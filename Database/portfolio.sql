-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 05:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_subtitle` text NOT NULL,
  `profile_pic` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_title`, `about_subtitle`, `profile_pic`, `about_desc`) VALUES
(1, 'Full Stack Developer', 'Hello, I\'m Abhishek Singh, a passionate Full Stack Web Developer with strong Skills.', '1694589353IMG_20230913_121746.jpg', 'A tech enthusiast with skills in HTML, CSS, JavaScript,\r\nC, C++, PHP, and MySQL, I\'m on a journey of constant learning. With 4 months of valuable internship experience and a knack for building real-life projects, I\'m eager to contribute my expertise to innovative ventures. As a team player with a positive attitude, I thrive in collaborative environments. Let\'s connect and explore how we can drive success together.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `admin_profile`) VALUES
(1, 'Abhishek Singh', 'admin@gmail.com', 'admin123', '1694603814IMG_20230913_121746.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'app'),
(3, 'web');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(130, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'Enquiry', 'ffff'),
(131, 'hello', 'abhisheksingh81037272@gmail.com', 'dadad', 'vbb'),
(132, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'dadad', 'aaa'),
(133, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'dadad', 'aaa'),
(134, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'dadad', 'aaa'),
(135, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'Enquiry', 'vv'),
(136, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'Enquiry', 'vv'),
(137, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'Enquiry', 'vv'),
(138, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'Enquiry', 'vv'),
(139, 'Abhisheksingh8103@gmail.com', 'rs5163665@gmail.com', 'dsndbns', 'dsdsdsd'),
(140, 'Abhisheksingh8103@gmail.com', 'rs5163665@gmail.com', 'dsndbns', 'dsdsdsd'),
(141, 'Abhisheksingh8103@gmail.com', 'rs5163665@gmail.com', 'dsndbns', 'dsdsdsd'),
(142, 'Abhisheksingh8103@gmail.com', 'rs5163665@gmail.com', 'dsndbns', 'dsdsdsd'),
(143, 'Abhishek Singh', 'abhisheksingh81037272@gmail.com', 'sds', 'cc');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `address`, `phone`, `email`) VALUES
(21, 'Silchar, Cachar, Assam, 788031', '9365524166', 'abhisheksingh81037272@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `counter_icon` varchar(255) NOT NULL,
  `pre` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `counter_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `counter_icon`, `pre`, `post`, `counter_title`) VALUES
(11, 'bi bi-folder', 0, 20, 'PROJECTS'),
(13, 'bi bi-briefcase', 0, 2, 'WORK EXPERIENCE'),
(14, 'bi bi-award', 0, 5, 'CERTIFICATES'),
(15, 'bi bi-code', 0, 6, 'LANGUAGES');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `date`, `location`, `description`) VALUES
(9, 'Persuing MCA', 'Sep 2025', 'I.T.S College Mohan Nagar Ghaziabad', 'I am currently doing my Masters of Computer Applications (MCA) degree from Institute of Technology and Science, (I.T.S),Ghaziabad.'),
(10, 'BCA', 'July 20 2023', 'NERIM, Guwahati, Assam', 'I completed my Bachelor of Computer Applications (BCA) degree from NERIM, Guwahati, Assam, with a strong academic record of 70%. This rigorous program equipped me with a deep understanding of computer science fundamentals.'),
(12, 'H.S', 'Jun 2020', 'D.N.HS COLLEGE, Udharbond, Assam', 'I completed my HS from D.N.H.S College with a 50%. This rigorous program equipped me with a deep understanding of fundamentals.');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `date`, `location`, `description`) VALUES
(6, 'Full Stack Web Developer', 'JAN 2023 – MAY 2023', 'Web Infotech, Guwahati', 'I gained valuable experience during my internship, working on both front-end and back-end development:\nDeveloped responsive web pages using HTML, CSS, and Bootstrap.\nAssisted in testing and enhancing website features.\nDebugged issues to ensure an optimal user experience.\nBuilt dynamic web applications with PHP and Laravel.\nSeamlessly integrated front-end designs for a smooth user interface.\nEmphasized software development best practices, including documentation and optimization.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `showicons` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `subtitle`, `showicons`) VALUES
(1, 'Abhishek Singh', 'A full Stack Developer', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(11) NOT NULL,
  `interest_icon` varchar(255) NOT NULL,
  `interest_title` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `interest_icon`, `interest_title`, `color`) VALUES
(14, 'bi bi-tools', 'Technology Exploration', '#24ff5b'),
(15, 'bi bi-puzzle', 'Coding Challenges', '#000000'),
(20, 'bi bi-airplane', 'Travel', '#000000'),
(22, 'bi bi-tree', 'Cricket', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `info_title` varchar(255) NOT NULL,
  `info_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `info_title`, `info_desc`) VALUES
(6, 'Name', 'Abhishek Singh'),
(11, 'Email', 'abhisheksingh81037272@gmail.com'),
(12, 'Birthday', '30 March 2001'),
(13, 'Age', '22'),
(14, 'Degree', 'MCA'),
(15, 'City', 'Silchar, Assam'),
(16, 'Phone', '+91 9365524166'),
(17, 'Status', 'Open for Job');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `project_date` date NOT NULL,
  `url` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `category`, `client`, `project_date`, `url`, `text`, `image`) VALUES
(34, 'Salon Management System', '3', 'HTML, CSS, Javascript, PHP, MYSQL', '2023-05-13', 'https://github.com/Abhisheksingh0303/Salon-Management-System', 'Salon management software helps businesses operate more efficiently and purpose of salon    management software is to streamline salon operations', 'post-img-1.jpg'),
(35, 'Cafe Management System', '3', 'HTML, CSS, Javascript, PHP, MYSQL', '2022-12-13', 'https://github.com/Abhisheksingh0303/cafe-project', 'provides the admin with access to manage all data. . Less prone to errors and reduce manual records. . The system is user friendly. . Minimize the manual work and maximize the productivity', 'about.jpg'),
(36, 'Weather Forecasting App', '1', 'HTML, CSS, Javascript', '2023-04-13', 'https://abhisheksingh0303.github.io/Weather-Forecasting-App/weather-web-app/', 'The Weather Forecasting App is a user-friendly and comprehensive web application that provides accurate weather predictions and forecasts. This app aims to offer users a seamless experience in accessing weather information for any location worldwide. It utilizes real-time data from reliable sources, ensuring up-to-date and precise weather forecasts.', 'Screenshot 2023-09-13 195552.png'),
(37, 'Aayurdha NGO', '3', 'HTML, CSS, Javascript, Bootstrap', '2023-04-13', 'https://www.aayurdhafoundation.org/', 'Aayurdha NGO Website is a client project developed for a non-governmental organization (NGO) with a focus on showcasing their mission, activities, and initiatives. This website is built using a combination of technologies to deliver a visually appealing and informative online presence.', 'Screenshot 2023-09-13 200320.png'),
(38, 'Online Code Editor (Codekaro)', '1', 'HTML, CSS, Javascript', '2023-08-13', 'https://abhisheksingh0303.github.io/CodeKaro/', 'CodeKaro is a powerful online live code editor that allows you to write, test, and experiment with HTML, CSS, and JavaScript code right in your browser.', 'codekaro.png');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `section`, `section_id`) VALUES
(1, 'Education', 1),
(2, 'Experience', 2),
(3, 'summary', 10),
(4, 'About me ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `section_control`
--

CREATE TABLE `section_control` (
  `id` int(11) NOT NULL,
  `home_section` varchar(11) NOT NULL,
  `about_section` varchar(11) NOT NULL,
  `resume_section` varchar(11) NOT NULL,
  `services_section` varchar(11) NOT NULL,
  `portfolio_section` varchar(11) NOT NULL,
  `contact_section` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_control`
--

INSERT INTO `section_control` (`id`, `home_section`, `about_section`, `resume_section`, `services_section`, `portfolio_section`, `contact_section`) VALUES
(1, 'on', 'on', 'on', '0', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `siteicon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `page_title`, `keywords`, `description`, `siteicon`) VALUES
(1, 'I am ddd', 'I am abhissssssddd', 'ssssssssssssssssssdd', '16944184971691592414Food_Category_153.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `text`) VALUES
(11, 'bx bxl-dribbble', 'PYTHON', 'Python is a computer programming language often used to build websites and software, automate tasks, and conduct data analysis. Python is a general-purpose language, meaning it can be used to create a variety of different programs and isn\'t specialized fo'),
(12, 'bx bxl-dribbble', 'PHP', 'Python is a computer programming language often used to build wks, and conduct data analysis. Python is a general-purpose language, meaning it can be used to create a variety of different programs and isn\'t specialized fo'),
(25, 'bx bxl-dribbble', 'ff', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `site_background`
--

CREATE TABLE `site_background` (
  `id` int(11) NOT NULL,
  `background_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_background`
--

INSERT INTO `site_background` (`id`, `background_img`) VALUES
(1, '16946039645kmO9f.webp');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_level`) VALUES
(12, 'HTML', 100),
(13, 'CSS', 89),
(14, 'JAVASCRIPT', 68),
(15, 'C', 45),
(16, 'C++', 53),
(17, 'PHP', 58),
(18, 'MY SQL', 86),
(19, 'GIT', 51),
(20, 'GITHUB', 51),
(21, 'PROBLEM SOLVING', 100);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `link`) VALUES
(12, 'Github', 'https://github.com/Abhisheksingh0303'),
(13, 'Linkedin', 'https://www.linkedin.com/in/abhishek-singh-531889240/'),
(14, 'Facebook', 'https://www.facebook.com/ab.abhishek.1806'),
(15, 'Instagram', 'https://www.instagram.com/shekabhi_03/'),
(19, 'Twitter', 'https://twitter.com/SheikhAbhi28');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`id`, `name`, `description`) VALUES
(24, 'Overview', 'I\'m a motivated Full Stack Web Developer with strong academic credentials and hands-on experience. Pursuing an MCA degree at ITS, MohanNagar, UP, I hold a BCA degree from NERIM, Guwahati, with a 70% academic record. During my internship at WEB INFOTECH, Guwahati, I honed my skills in front-end and back-end development, creating responsive web pages, and building dynamic web applications with PHP and Laravel. Proficient in multiple languages, I\'m enthusiastic about contributing my expertise to new web development opportunities.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_control`
--
ALTER TABLE `section_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_background`
--
ALTER TABLE `site_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_control`
--
ALTER TABLE `section_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `site_background`
--
ALTER TABLE `site_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
