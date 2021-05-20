-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 08:44 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `aid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`aid`, `title`, `url`, `image`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Advertisement', 'http://atmamto.com/', '21021961407ad-top.gif', 'leaderboard', 'display', '2021-02-13 14:16:30', '2021-02-19 16:14:07'),
(2, 'Advertisement 2', 'http://atmamto.com/', '21021341828ad-top.jpg', 'sidebar-top', 'display', '2021-02-13 14:18:28', '2021-02-16 12:45:56'),
(3, 'Advertisement 3', 'http://face.com/', '21021341907ad-bottom.jpg', 'sidebar-bottom', 'display', '2021-02-13 14:19:07', '2021-02-19 16:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'politics', 'politics', 'on', '2020-11-30 17:44:54', '2020-11-30 19:28:02'),
(2, 'business', 'business', 'On', '2020-11-30 17:45:46', NULL),
(3, 'entertainment', 'entertainment', 'On', '2020-11-30 17:47:12', NULL),
(4, 'technology', 'technology', 'On', '2020-11-30 17:47:51', NULL),
(5, 'sports', 'sports', 'On', '2020-11-30 17:48:13', NULL),
(6, 'travel', 'travel', 'On', '2020-11-30 17:48:30', NULL),
(7, 'style', 'style', 'on', '2020-11-30 17:49:03', '2021-01-29 17:18:23'),
(8, 'health', 'health', 'On', '2020-11-30 17:49:27', NULL),
(9, 'featured', 'featured', 'off', '2021-01-22 14:11:43', NULL),
(10, 'Subscribe', 'subscribe', 'on', '2021-01-16 16:39:48', '2021-01-16 16:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Toys', 'eslam@atmamto.com', '22434242', 'g', '2021-02-12 03:20:30', NULL),
(3, 'test', 'admin@admin.com', '00966594787370', 't', '2021-02-12 15:08:00', NULL),
(4, 'eslam', 'eslam@winter26.com', '00966594787370', 'y', '2021-02-12 15:10:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_11_28_133602_create_categories_table', 1),
(7, '2020_12_01_112305_create_settings_table', 2),
(10, '2021_01_16_123625_create_posts_table', 3),
(11, '2021_02_10_181151_create_pages_table', 4),
(12, '2021_02_12_043805_create_messages_table', 5),
(13, '2021_02_13_130337_create_advertisments_table', 6),
(14, '2021_02_13_161425_create_advertisements_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pageid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageid`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'about us', 'about-us', '<p>Webtrickshome is a tutorial site with project based tutorials, video references along with forum aimed at problem solving and blogs. Webtrickshome targets to be the ultimate home for web tricks that is easy to reach and understand for prospective web designers and developers along with SEO analysts.</p>\r\n\r\n<h2>The Concept of Webtrickshome</h2>\r\n\r\n<p>The concept of webtrickshome was first conceptualized by Jiwan Thapa, a full stack developer and trainer in 2015 with a view to help his trainees by creating an online resource as reference that is organized as day-to-day tutorial lessons which are easy to go through and more fruitful than getting lost in the middle of a huge reference library that has every topic explained in a single page. According to him, huge reference library would be more useful for intermediate level developers in comparision to the beginners. So, webtrickshome aims to help beginners by providing them easy reference resources.</p>\r\n\r\n<h2>Traits</h2>\r\n\r\n<p>To be strong enough to compete with the best, webtrickshome possess some great qualities which are stated below.</p>\r\n\r\n<ul>\r\n	<li>Webtrickshome is simple and easy to understand.</li>\r\n	<li>Each of the course topics are organized to reduce the number of lessons beginners need to go through and yet still acquire enough knowlegde to be able to work professionally within a short time span.</li>\r\n	<li>All the lessons in webtrickshome are project based that gives a feeling of real world projects.</li>\r\n	<li>Webtrickshome also provides video references for selected topics.</li>\r\n	<li>Webtrickshome is absolutely free with no registration required except for the forum and blogs section where we must do that to protect spams.</li>\r\n</ul>\r\n\r\n<h2>Contact Us</h2>\r\n\r\n<p>We have a small team that works hard to ensure your learning experience is a pleasant one while keeping the resource itself useful and updated. If you find any broken links or any other errors, please&nbsp;<a href=\"https://www.webtrickshome.com/contact-us\">contact us</a>&nbsp;and help us get it fixed. You can send us your suggestions if you feel webtrickshome can be better. You can also send us if you want some topics be covered in webtrickshome.</p>\r\n\r\n<h2>Help Others Discover Webtrickshome</h2>\r\n\r\n<p>If you liked our contents and want others to discover webtrickshome, please share our lessons, blogs or forum contents on social media. If you own a site, you can add a link to refer to this site.</p>\r\n\r\n<h2>Statistics</h2>\r\n\r\n<ul>\r\n	<li>Online Since 17<sup>th</sup>&nbsp;July 2017</li>\r\n	<li>6000 Active Users</li>\r\n	<li>31% From North America</li>\r\n	<li>29% From Europe</li>\r\n	<li>23% From Asia</li>\r\n	<li>11% From Africa</li>\r\n	<li>6% From Rest of the World</li>\r\n</ul>', 'publish', '2021-02-11 17:47:27', '2021-02-11 18:16:13'),
(2, 'privacy policy', 'privacy-policy', '<p>This&nbsp;<strong>Privacy Policy</strong>&nbsp;describes how we gather, secure and use your personal information on our site and some of its aspects. This policy does not have any vital bearing to the acts of organizations that we don&rsquo;t own or control. To use this website, you need to accept our terms and conditions specified below.</p>\r\n\r\n<h2>Collection of Personal Information</h2>\r\n\r\n<p>We may store any electronic information you might fill up on our website like email address, name or any other personal information from our registration form, contact form or comments section.</p>\r\n\r\n<h2>Cookies and Their Use</h2>\r\n\r\n<p>Cookies are small pieces of data stored on users computer that is sent by our website&#39;s server to help the website load faster the next time you visit webtrickshome. You can disallow it or delete it from your browser by clearing cookies. Keep in mind, the cookies we store are only the images or associated css or javascript files that may take up a bit longer may be around 2 or 3 seconds to load in case the cookies are not stored.</p>\r\n\r\n<p>However, Google Ads use cookies to serve ads based on a user&#39;s preferences which may be a recent search you didi on Google or content you searched on other websites. Users may opt out of personalized advertising by visiting&nbsp;Ads Settings.</p>\r\n\r\n<h2>Connections to Different Websites</h2>\r\n\r\n<p>Our website might refer to various websites for visitors&#39; convenience that aren&#39;t maintained by us. We are not responsible for the safety practices of such sites.</p>\r\n\r\n<h2>Content</h2>\r\n\r\n<p>Content on this site shall not be distributed or used for any commercial purposes. But, sharing contents over social networking sites like Facebook, Twitter, Google+, Pinterest, LinkedIn etc. are not restricted.</p>\r\n\r\n<p>If you find any copyright restricted materials of others websites, please contact us and we will remove those contents or provide credit link over those materials as per the consent.</p>\r\n\r\n<h2>Maintenance</h2>\r\n\r\n<p>We maintain our website regularly for better user experience and protection of personal information etc.</p>\r\n\r\n<h2>Contact us</h2>\r\n\r\n<p>If you have any queries regarding this policy and our website, please feel free to&nbsp;contact us.</p>', 'publish', '2021-02-11 17:52:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `title`, `slug`, `description`, `category_id`, `image`, `status`, `views`, `created_at`, `updated_at`) VALUES
(1, 'update test', 'update-test', '<p><img alt=\"\" src=\"http://localhost/newspaper/ckfinder/userfiles/images/newspaper-logo.png\" style=\"width:100%\" /></p>', '6', '21011625423عملاء.PNG', 'publish', 0, '2021-01-16 12:54:23', '2021-01-16 16:17:56'),
(3, 'Politics Definition', 'politics-definition', '<p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>', '1', '21012030511maxresdefault.jpg', 'publish', 0, '2021-01-20 13:05:11', NULL),
(4, 'Business', 'business', '<p><strong>Business</strong>&nbsp;is the activity of making one&#39;s living or making money by producing or buying and selling a product</p>', '2', '21012623909basketball-95607_1280-392x272.jpg', 'publish', 0, '2021-01-20 13:08:01', '2021-01-26 12:39:09'),
(5, 'Entertainment ', 'entertainment', '<p><em>Entertainment</em>&nbsp;is a form of activity that holds the attention and interest of an audience or gives pleasure and delight. It can be an idea or a task but is more likely to be one of the activities or events that have developed over thousands of years specifically for the purpose of keeping an audience&#39;s attention.</p>', '3', '21012683524health.jpg', 'publish', 0, '2021-01-20 13:09:50', '2021-01-26 18:35:24'),
(6, 'technology', 'technology', '<p>Technology is the sum of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation</p>', '4', '21012673237swimmer-583667_1280-392x272.jpg', 'publish', 0, '2021-01-20 13:10:46', '2021-01-26 17:32:37'),
(7, 'sports', 'sports', '<p><em>The sport</em> includes all forms of competitive physical activity or games which, through casual or organized participation, at least in part aim to use,</p>', '5', '21012670728n.jpg', 'publish', 0, '2021-01-20 13:12:02', '2021-01-26 17:07:28'),
(8, 'travel', 'travel', '<p><em>Travel</em>&nbsp;is the movement of people between distant geographical locations.&nbsp;<em>Travel</em>&nbsp;can be done by foot, bicycle, automobile, train, boat, bus, airplane</p>', '6', '21012681004n.jpg', 'publish', 0, '2021-01-20 13:12:47', '2021-01-26 18:10:04'),
(9, 'Style', 'style', '<p><em>Travel</em>&nbsp;is the movement of people between distant geographical locations.&nbsp;<em>Travel</em>&nbsp;can be done by foot, bicycle, automobile, train, boat, bus, airplane</p>', '6,7', '21012681122n.jpg', 'publish', 0, '2021-01-20 13:13:12', '2021-01-26 18:11:22'),
(10, 'Health', 'health', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '8', '21012675327health.jpg', 'publish', 0, '2021-01-20 13:14:16', '2021-01-26 17:53:27'),
(11, 'Subscribe', 'subscribe', '<p>1: to sign one&#39;s name to a document. 2a: to give consent or approval to something written by signing unwilling to&nbsp;<em>subscribe</em>&nbsp;to the agreement. b: to set one&#39;s name to a paper in token of promise to give something (such as a sum of money) also: to give something in accordance with such a promise.</p>', '10', '210126122705n.jpg', 'publish', 0, '2021-01-20 13:15:54', '2021-01-26 10:27:05'),
(12, 'featured', 'featured', '<p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>', '9', '21012241907What-is-Business.jpg', 'publish', 0, '2021-01-22 14:15:28', '2021-01-22 14:19:07'),
(13, 'featured2', 'featured2', '<p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>\r\n\r\n<p><img alt=\"Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.\" src=\"http://localhost/newspaper/ckfinder/userfiles/images/What-is-Business.jpg\" style=\"height:500px; width:750px\" /></p>', '9', '21012243621What-is-Business.jpg', 'publish', 0, '2021-01-22 14:32:39', '2021-01-22 14:36:21'),
(14, 'featured3', 'featured3', '<p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>', '9', '21012243801What-is-Business.jpg', 'publish', 0, '2021-01-22 14:38:01', NULL),
(15, 'featured4', 'featured4', '<p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>', '9', '21012243831What-is-Business.jpg', 'publish', 0, '2021-01-22 14:38:31', NULL),
(16, 'featured5', 'featured5', '<p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>', '9', '21012243858What-is-Business.jpg', 'publish', 34, '2021-01-22 14:38:58', NULL),
(17, 'featured5', 'featured5', '<p>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status.</p>', '9', '21012243956What-is-Business.jpg', 'publish', 34, '2021-01-22 14:39:56', NULL),
(18, 'Lorem ipsum dolor sit amet', 'lorem-ipsum-dolor-sit-amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat&nbsp;</p>', '10', '210126122815n.jpg', 'publish', 0, '2021-01-26 10:28:15', NULL),
(19, 'Lorem ipsum dolor sit amet', 'lorem-ipsum-dolor-sit-amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse ci</p>', '10', '210126123119n.jpg', 'publish', 0, '2021-01-26 10:31:19', NULL),
(20, 'Lorem ipsum dolor sit amet', 'lorem-ipsum-dolor-sit-amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse ci</p>', '10', '210126123155n.jpg', 'publish', 0, '2021-01-26 10:31:55', NULL),
(21, 'Lorem ipsum dolor sit amet', 'lorem-ipsum-dolor-sit-amet', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '10', '210126123307n.jpg', 'publish', 0, '2021-01-26 10:33:07', NULL),
(24, 'business1', 'business1', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '2', '21012623239basketball-95607_1280-392x272.jpg', 'publish', 0, '2021-01-26 12:32:39', NULL),
(25, 'business2', 'business2', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '2', '21012623315basketball-95607_1280-392x272.jpg', 'publish', 0, '2021-01-26 12:33:15', NULL),
(26, 'business3', 'business3', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '2', '21012623345basketball-95607_1280-392x272.jpg', 'publish', 0, '2021-01-26 12:33:45', NULL),
(27, 'business4', 'business4', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '2', '21012623407basketball-95607_1280-392x272.jpg', 'publish', 0, '2021-01-26 12:34:07', NULL),
(28, 'sports1', 'sports1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '5', '21012654135n.jpg', 'publish', 0, '2021-01-26 15:41:35', '2021-01-26 15:46:47'),
(29, 'Sports2', 'sports2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '5', '21012654626n.jpg', 'publish', 0, '2021-01-26 15:41:58', '2021-01-26 15:46:26'),
(30, 'Sports3', 'sports3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '5', '21012654228n.jpg', 'publish', 0, '2021-01-26 15:42:28', '2021-01-26 15:46:42'),
(31, 'Sports4', 'sports4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '5', '21012654632n.jpg', 'publish', 0, '2021-01-26 15:43:15', '2021-01-26 15:46:32'),
(32, 'technology1', 'technology1', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '4', '21012672559swimmer-583667_1280-392x272.jpg', 'publish', 0, '2021-01-26 17:25:59', NULL),
(33, 'technology2', 'technology2', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '4', '21012672914swimmer-583667_1280-392x272.jpg', 'publish', 0, '2021-01-26 17:29:14', NULL),
(34, 'technology3', 'technology3', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '4', '21012672953swimmer-583667_1280-392x272.jpg', 'publish', 0, '2021-01-26 17:29:53', NULL),
(35, 'technology4', 'technology4', '<p>Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet</p>', '4', '21012673027swimmer-583667_1280-392x272.jpg', 'publish', 0, '2021-01-26 17:30:27', NULL),
(36, 'technology5', 'technology5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '4', '21012673134swimmer-583667_1280-392x272.jpg', 'publish', 0, '2021-01-26 17:31:34', '2021-01-26 17:34:20'),
(37, 'health1', 'health1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '8', '21012674923health.jpg', 'publish', 0, '2021-01-26 17:49:23', NULL),
(38, 'health2', 'health2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '8', '21012675021health.jpg', 'publish', 0, '2021-01-26 17:50:21', NULL),
(39, 'health3', 'health3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '8', '21012675108health.jpg', 'publish', 0, '2021-01-26 17:51:08', NULL),
(40, 'health4', 'health4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '8', '21012675236health.jpg', 'publish', 0, '2021-01-26 17:52:36', NULL),
(41, 'travel1', 'travel1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '6', '21012680621n.jpg', 'publish', 0, '2021-01-26 18:06:21', NULL),
(42, 'travel2', 'travel2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '6', '21012680656n.jpg', 'publish', 0, '2021-01-26 18:06:56', NULL),
(43, 'travel3', 'travel3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '6', '21012680742n.jpg', 'publish', 0, '2021-01-26 18:07:42', NULL),
(44, 'travel4', 'travel4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '6', '21012680853n.jpg', 'publish', 0, '2021-01-26 18:08:53', NULL),
(45, 'entertainment1', 'entertainment1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '3', '21012683104health.jpg', 'publish', 0, '2021-01-26 18:31:04', NULL),
(46, 'entertainment2', 'entertainment2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '3', '21012683145health.jpg', 'publish', 0, '2021-01-26 18:31:45', NULL),
(47, 'entertainment3', 'entertainment3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '3', '21012683643health.jpg', 'publish', 0, '2021-01-26 18:33:10', '2021-01-26 18:36:43'),
(48, 'entertainment4', 'entertainment4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit</p>', '3', '21012683415health.jpg', 'publish', 11, '2021-01-26 18:34:15', NULL),
(49, 'politics1 Lorem ipsum dolor sit amet', 'politics1-lorem-ipsum-dolor-sit-amet', '<p>&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet</p>', '1', '21012863211po.jpg', 'publish', 6, '2021-01-28 16:32:11', NULL),
(50, 'politics1 Lorem ipsum dolor sit amet', 'politics1-lorem-ipsum-dolor-sit-amet', '<p>&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet</p>', '1', '21012863333po.jpg', 'publish', 6, '2021-01-28 16:33:33', NULL),
(51, 'politics1 Lorem ipsum dolor sit amet', 'politics1-lorem-ipsum-dolor-sit-amet', '<p>&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit amet</p>', '1', '21012864425po.jpg', 'publish', 6, '2021-01-28 16:44:25', NULL),
(52, 'politics1 Lorem ipsum dolor sit amet', 'politics1-lorem-ipsum-dolor-sit-amet', '<h4>politics1 Lorem ipsum dolor sit amet&nbsp;politics1 Lorem ipsum dolor sit ametpolitics1 Lorem ipsum dolor sit ametpolitics1 Lorem ipsum dolor sit ametyyyyy</h4>', '1', '21012864951maxresdefault.jpg', 'publish', 6, '2021-01-28 16:49:51', '2021-02-11 18:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sid` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sid`, `image`, `social`, `about`, `created_at`, `updated_at`) VALUES
(1, '210113125622LOGO.png', 'https://www.facebook.com/atmamto,https://www.twitter.com/atmamto,https://www.youtube.com/atmamto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum test.', '2021-01-12 15:28:23', '2021-01-29 11:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'eslam', 'eslam@atmamto.com', NULL, '$2y$10$W3z7Z0/qokafyxTJB0gN2.95iZS5az7O1W4RJpj9LffwwRXPrz8mi', '8YT6OvLKN5UiFkQz2oAK6Y4IK8ButpVk7mVefk1xAfbqOiCR8MUTQWKvPZeb', '2021-03-21 13:46:48', '2021-03-21 13:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pageid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pageid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
