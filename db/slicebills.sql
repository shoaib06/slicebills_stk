-- phpMyAdmin SQL Dump
-- version 5.1.1deb3+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2023 at 10:39 AM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slicebills`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`, `profile_pic`, `status`, `ip_address`) VALUES
(2, 'Nexus', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 1, '122.173.142.182');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE `tbl_cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` text COLLATE utf8mb4_unicode_ci,
  `category` int(11) DEFAULT NULL COMMENT '1=>home_top,2=>top_reads,3=>trending',
  `is_featured` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`id`, `url`, `heading`, `blog_date`, `image`, `description`, `timestamp`, `category`, `is_featured`, `status`) VALUES
(1, 'how-to-decorate-your-home-on-a-budget', 'How To Decorate Your Home on a Budget', '2022-04-01', 'img_1672459031_STposttemplateKTxkt.png', '<p><span style=\"font-weight: 400;\">Home decorating can be a time-consuming and costly process, especially if you’re a first time homeowner. The national average cost to furnish a home is $16,000, but it can range anywhere between 10-50% of your home’s value, depending on your financial situation. This may come as a surprise but luckily, there are some ways you can cut down on costs and stick to your financial plans if you’re on a tight budget.</span></p>\r\n&nbsp;\r\n<p><span style=\"font-weight: 400;\">We listed useful tips below to help you through the home decorating process and hopefully save you some money along the way:</span></p>\r\n<p><strong>Don’t Rush</strong></p>\r\n<p><span style=\"font-weight: 400;\">You may want to hurry along the process of furnishing your home and finish it as quickly as possible, however it would be more beneficial for you to take your time with it. Rushing and making too many big purchases at once may come back to bite you in the end when you find out an item may be too big for your space or doesn’t fit your lifestyle. When shopping for home furnishings, there are many factors to consider such as an item’s durability, dimensions, and quality. So spend all the time you need researching your big ticket furniture items before making any purchases and don’t worry about having an “unfinished” home.</span></p>\r\n<p><strong>Use Your Mementos as Accent Decor</strong></p>\r\n<p><span style=\"font-weight: 400;\">Displaying your keepsake items and&nbsp;framing your personal photos are&nbsp;affordable ways to furnish your home. These items differ drastically from the generic, pricey decor items you see in most stores and they also add a nice personal touch to your homes.</span></p>\r\n<p><strong>Know When to Splurge vs Save</strong></p>\r\n<p><span style=\"font-weight: 400;\">Buying high ticket items where quality and durability matter most such as couches, beds, or window coverings may require you to splurge a little, however certain smaller items such as trendy accent decor, dinnerware and flatware, or lighting is where you can save some of your money. These items can vary greatly in price and you’d likely be able to find some&nbsp;at a great prices.</span></p>\r\n<p><strong>Shop Secondhand</strong></p>\r\n<p><span style=\"font-weight: 400;\">You can score extremely affordable pieces for your home by visiting local secondhand stores, estate sales, and flea markets. You can also search for keywords online and scour through Facebook Marketplace, Craigslist, or OfferUp to see if anyone nearby is selling a piece you want. Most pieces of furniture can be sanitized if you’re worried about its cleanliness, so don’t be afraid to shop secondhand because you might miss out on some great pieces.</span></p>\r\n<p><strong>DIY Decor</strong></p>\r\n<p><span style=\"font-weight: 400;\">Large wall art and canvas paintings can be pricey, however if you’re trying to fill up an empty wall in your home and are feeling artsy, make your own work of art! You can find lots of DIY tutorials online for just about any decor item, so this is a great option if you’re eyeing an expensive piece of decor and don’t want to shell out tons of money.</span></p>', '1672459031', 1, 1, 1),
(2, '5-best-meal-kit-delivery-services-to-try', '5 Best Meal Kit Delivery Services to Try', '2022-03-18', 'img_1672458966_STposttemplateKTx.png', '<p><b></b><span style=\"font-weight: 400;\">Life can be busy at times, so when it comes to meals, takeout food is usually the most convenient option for many when there’s no time for cooking. With Uber Eats, DoorDash, Seamless, and a number of other food delivery services available, these services make ordering takeout food an extremely quick and convenient experience.</span></p>\r\n<p><span style=\"font-weight: 400;\">However, your takeout food may be limited to a number of unhealthy options with questionable ingredients. Luckily, turning to a meal kit delivery service can be a great option if you want to be in more control of what’s put in your meals, want to reduce food waste, or if you’re looking to cook more often – whether you’re a beginner or simply want an easier and more streamlined way to cook your meals.</span></p>\r\n&nbsp;\r\n<p><span style=\"font-weight: 400;\">Below, we listed 5 great meal kit delivery services you can try:</span></p>\r\n<p><strong>HelloFresh</strong></p>\r\n<p><span style=\"font-weight: 400;\">HelloFresh is a popular choice for many – and for good reason. They offer flexible plans to match every lifestyle. You can select your meal plan preferences and choose from 25+ chef-created recipes each week, whether you’re looking for meals that are family-friendly, plant-based, seafood-based, or focused on meat and veggies. Their meals start at $7.99 per serving.</span></p>\r\n<p><strong>Blue Apron</strong></p>\r\n<p><span style=\"font-weight: 400;\">Blue Apron was one of the first major companies to popularize meal kit delivery services and focuses on sustainable farming with non-GMO ingredients, less food waste, and direct shipping with recyclable packaging. Their name is an homage to chefs worldwide who typically wear blue aprons while learning to cook. You can choose from multiple meal options that are also accommodating to people with allergies or dietary restrictions. Their meals have an average cook time of 45 minutes and can start at $8.99 per serving.</span></p>\r\n<p><strong>Home Chef</strong></p>\r\n<p><span style=\"font-weight: 400;\">Home Chef simplifies your dinners by delivering weekly fresh meal kits to your home. They deliver pre-portioned ingredients for quick and no-prep meals that can be heated in your microwave, grill, or oven. These kits can be customized to your liking and are available for people of all cooking skill levels and dietary preferences, such as vegetarian, soy-free, gluten-free and low-calorie meals. Simply answer a few questions about your food and serving size preferences to get started and pick from a number of new recipes each week. Their standard meals start at $8.99 per serving.</span></p>\r\n<p><strong>Sunbasket</strong></p>\r\n<p><span style=\"font-weight: 400;\">Sunbasket prioritizes sustainability and using high-quality ingredients with responsibly-sourced meats and 100% organic produce. You can choose from a number of weekly menu recipes to fit your dietary preferences, whether you’re looking for paleo, carb-conscious, gluten-free, high protein, or diabetes-friendly meals, Sunbasket offers total meal flexibility. You can also order meal kits with easy-to-follow cooking instructions or opt for their fresh and ready heat-and-eat meals for easy convenience. Their dinners start at $9.99 per serving.</span></p>\r\n<p><strong>EveryPlate</strong></p>\r\n<p><span style=\"font-weight: 400;\">EveryPlate prioritizes affordability, with basic plans starting at $5 per serving. They deliver the luxurious experience of a meal kit with fulfilling, classic, home-style recipes to consumers without the typical premium price tag. They offer a variety of flavorful weekly meals to choose from with fast cook times. At the moment, they don’t offer plans for special diets (as they prioritize keeping their prices low) however they do offer a range of 17 recipes you can choose from each week.</span></p>', '1672458966', 1, 0, 1),
(3, '5-must-have-cleaning-products-thatll-make-your-life-easier', '5 Must-Have Cleaning Products That’ll Make Your Life Easier', '2022-03-06', 'img_1672458931_STposttemplateKTx.png', '<p>Household chores can be time-consuming, back breaking, and dreadful. A long checklist of household cleaning chores that consists of tedious dusting, sweeping and mopping all surfaces, or scrubbing away at a bathtub or stovetop for hours on end is never enjoyable. Luckily, there are a number of cleaning products and tools you can get to help keep your home in tip-top shape, so you can spend more time doing the things you love most.</p>\r\n&nbsp;\r\n<p><span style=\"font-weight: 400;\">Below, we listed 5 must-have products and gadgets to make your household chores a more enjoyable experience and make life easier for you:</span></p>\r\n<p><strong>Homitt Electric Cordless Spin Scrubber ($43.99)</strong></p>\r\n<p><span style=\"font-weight: 400;\">This power scrubbing tool will make cleaning your showers, sinks, and bathtubs a breeze – no need to put in elbow grease and do any heavy scrubbing! This cordless spin scrubber rotates at different speeds to help you deep clean and tackle tough stains.This device also comes with a number of interchangeable attachments and brush heads so you can get into every nook and cranny.</span></p>\r\n<p><strong>Tineco iFloor Complete Wet/Dry Cordless Stick Vacuum ($169.99)</strong></p>\r\n<p><span style=\"font-weight: 400;\">This all-in-one device can vacuum and wash your floors in one simple step; It eliminates the need for owning a separate vacuum and mop. It’s a powerful device that can help you spend half the amount of time deep cleaning and sanitizing all your hard floor surfaces. This device is also extremely convenient as it’s self-cleaning with a push of a button, so it always stays fresh and odor-free.&nbsp;</span></p>\r\n<p><strong>Eufy BoostIQ RoboVac 11S Slim ($188.22)</strong></p>\r\n<p><span style=\"font-weight: 400;\">If you want to eliminate having to vacuum your home, then consider investing in a robot vacuum that does the work for you! This device uses powerful suction to vacuum your hard floors and medium-pile carpets. It’s a great option for the elderly or disabled who may struggle to regularly clean their homes, pet owners who have cats or dogs that shed often, or for those who simply want the convenience and to save precious time they would otherwise have spent vacuuming.</span></p>\r\n<p><strong>Zep Grout Cleaner ($9.28)</strong></p>\r\n<p><span style=\"font-weight: 400;\">Deep cleaning grout is a tough and tedious job. However, this cleaning solution will work wonders for your floors and grout lines. This product is formulated with safe acids that aren’t abrasive on your tiles, yet&nbsp;brighten your stained grout lines (without any heavy scrubbing!)</span></p>\r\n<p><strong>Angry Mama Microwave Cleaner ($9.99)</strong></p>\r\n<p><span style=\"font-weight: 400;\">This little tool can make cleaning those tough food stains in your microwave effortless. Simply fill it up with water and vinegar, then microwave it and let the steam soften all your built-up food splatters for easy clean up. This tool is also dishwasher safe and comes in 3 fun color combinations.</span></p>', '1672458931', 1, 0, 1),
(4, '5-ways-to-boost-your-productivity-levels', '5 Ways to Boost Your Productivity Levels', '2022-02-25', 'img_1672458840_STposttemplateKTx.png', '<p><b></b><span style=\"font-weight: 400;\">If you’ve been feeling unmotivated, distracted, or&nbsp;have trouble concentrating on your work, keep reading on for tips on how to increase your productivity. Staying productive at work may be difficult and doesn’t come naturally to everyone – it does involve putting in some effort and adapting healthy work habits. Fortunately, there are some things you can do to help you stay focused and productive throughout the workday.</span></p>\r\n&nbsp;\r\n<p><span style=\"font-weight: 400;\">Below, we listed 5 ways you can boost your productivity at work:</span></p>\r\n<p><strong>Eliminate distractions</strong></p>\r\n<p><span style=\"font-weight: 400;\">Some people need complete silence and zero disturbances to stay focused on their work. If this is something that resonates with you, try eliminating all distractions for better concentration. This can include: silencing notifications on your phone, maintaining a tidy work space, and removing yourself from noisy settings (using noise-cancellation headphones are also a great option!)</span></p>\r\n<p><strong>Set short-term goals</strong></p>\r\n<p><span style=\"font-weight: 400;\">Make a to-do list containing all the daily, weekly, or monthly tasks you wish to accomplish. Then make a schedule and set realistic deadlines for yourself, making sure to prioritize tasks to help with your time management. Accomplishing your short-term goals can motivate you to continue onwards and prevent you from feeling overwhelmed.</span></p>\r\n<p><strong>Listen to classical music</strong></p>\r\n<p><span style=\"font-weight: 400;\">Research showed that listening to classical music can help people concentrate and perform tasks more efficiently. This genre of music enhances brain activity and increases your ability to manipulate shapes and solve spatial puzzles. So put Beethoven, Chopin, and Mozart on blast!&nbsp;<b>♫</b></span></p>\r\n<p><strong>Stay nourished</strong></p>\r\n<p><span style=\"font-weight: 400;\">Working on an empty stomach is less than ideal, so make sure to keep yourself fueled with healthy foods and water. What you eat can also impact your productivity levels; in fact, nutrient-rich “brain food” snacks can boost your memory and improve overall performance. And as appealing as junk foods may seem, try to steer clear of them as they can cause your blood sugar levels to spike and subsequently “crash,” making you feel more tired and sluggish throughout the day.</span></p>\r\n<p><strong>Take breaks as needed</strong></p>\r\n<p><span style=\"font-weight: 400;\">Taking short breaks throughout the day can actually be good for you and is necessary for reducing high levels of stress and burnout. So take a five-minute breather, get up to stretch your legs, and grab a healthy snack or glass of water. A short break can help with mental fatigue and make you feel more refreshed and energized once returning back to your work.</span></p>', '1672458840', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `question_type` text,
  `massage` text,
  `timestamp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `email`, `name`, `question_type`, `massage`, `timestamp`) VALUES
(1, 'kdas@yopmail.com', 'Shoaib Mohammad', '', 'asdasdasdasd', '1672423158'),
(2, 'kdas@yopmail.com', 'SHOAIB MOHAMMAD', '', 'asdadasd', '1672987968');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donot_sell_requests`
--

CREATE TABLE `tbl_donot_sell_requests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type_of_request` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` text,
  `city` text,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `request_on` varchar(100) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `timestamp` bigint(20) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donot_sell_requests`
--

INSERT INTO `tbl_donot_sell_requests` (`id`, `name`, `email`, `type_of_request`, `phone`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`, `request_on`, `ip_address`, `timestamp`, `deleted_at`) VALUES
(4, NULL, 'shoaib@yopmail.com', 'access', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'someoneelse', '::1', 1672243478, 0),
(5, NULL, 'sam@yopmail.com', 'deletion', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'someoneelse', '::1', 1672552445, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `orders` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads`
--

CREATE TABLE `tbl_leads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `name` text,
  `address` longtext,
  `state` text,
  `dob` datetime DEFAULT NULL,
  `gender` text,
  `date_time` datetime DEFAULT NULL,
  `message` text,
  `certUrl` text,
  `pingUrl` text,
  `ip_address` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leads`
--

INSERT INTO `tbl_leads` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `city`, `zip_code`, `name`, `address`, `state`, `dob`, `gender`, `date_time`, `message`, `certUrl`, `pingUrl`, `ip_address`, `timestamp`) VALUES
(1, NULL, 'SHOAIB', 'MOHAMMAD', 'kdas@yopmail.com', '08882670078', 'Idaho', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-12 16:00:00', 'Test', 'https://cert.trustedform.com/f4efd46331d4039785dbac594250a29d9cc4c1e4', 'https://ping.trustedform.com/0.QBSKwE4EyLqMGJlxMhe8ncnMbibM-LEfzyCtugB7Cb3zP60KAtmi20MCAc1OUdMnXeC8_SSU.XBFO2yQM5gv6x4OGYRofwQ.bMjphw9-M2rymQzrx6enBA', '', '1670855057'),
(2, NULL, 'Sharadindu', 'Guha', 'sharadindu.guha@gmail.com', '9852369856', 'Behala', 780002, 'Sharadindu Guha', 'Kolkata', 'Georgia', '1998-02-02 00:00:00', 'Male', NULL, NULL, 'https://cert.trustedform.com/4935a2c61da7dd9c8b39e2b81a7c511893378596', 'https://ping.trustedform.com/0.IYwbCQ5WBQ-ktDaZ7lanE8YUbOHTUocKAOo83mTxbW2OATs9zXAl8ZUFEnL6lpQG9dXlcS6M.xo7VNNg1QS-ahelT6ZScrA.c3ny4itJk3UB1fYBbfmYnA', '::1', '1671735214'),
(3, NULL, 'Sam', 'Ahuja', 'sam@yopmail.com', '9897121641', 'Test', 7000245, 'Sam Ahuja', 'Test', 'Idaho', '1991-09-06 00:00:00', 'Male', NULL, NULL, 'https://cert.trustedform.com/5cf4ff9a00ab1743aeaac6a9bbc048d6498c599c', 'https://ping.trustedform.com/0.cZ8v9lfgiDYBOJjHjaFhje14lfgTYzrjCC4lAXeOwNS45l3JLKPUMPZeBZUcbIlA9hwF-gJU.P0p9C1BG-OuNv60PqXaGEg.Ubb2Yi3qefVflW1muE_ZWA', '::1', '1672211634'),
(4, NULL, 'SHOAIB', 'MOHAMMAD', 'kdas@yopmail.com', '8882670078', 'KOLKATA', 700024, 'SHOAIB MOHAMMAD', 'R-93,Akra Road', 'AZ', '1978-02-15 00:00:00', 'm', NULL, NULL, '', '', '::1', '1672491185');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `slug` mediumtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `title`, `slug`, `description`) VALUES
(1, 'Privacy Policy', 'Privacy-Policy', '<p>Updated: Oct. 1, 2020</p>\r\n      At Digital Hopr Inc. (\"Digital Hopr\") we are committed to maintaining the accuracy, confidentiality and security\r\n      of your personal information. This Privacy Policy describes the personal information that Digital Hopr collects\r\n      from or about you, how we use and to whom we may disclose that information.\r\n      <br>\r\n      <br>\r\n      <h5>Privacy Policy Effective for USA</h5>\r\n\r\n      <br>\r\n      <p>It is Digital Hopr\'s policy to comply with the privacy legislation within each jurisdiction in which we\r\n         operate. Sometimes the privacy legislation and / or an individual\'s right to privacy are different from one\r\n         jurisdiction to another. This Privacy Policy covers only those activities that are subject to the provisions of\r\n         the United States of America, as applicable. </p>\r\n\r\n      <p>It is Digital Hopr\'s policy to comply with the privacy legislation within each jurisdiction in which we\r\n         operate. Sometimes the privacy legislation and / or an individual\'s right to privacy are different from one\r\n         jurisdiction to another. This Privacy Policy covers only those activities that are subject to the provisions of\r\n         the United States of America, as applicable. </p>\r\n\r\n      <br>\r\n      <br>\r\n      <h5>What is Personal Information?</h5>\r\n      <br>\r\n      <p>For the purposes of this Privacy Policy, personal information is any information about an identifiable\r\n         individual, other than the person\'s business title or business contact information when used or disclosed for\r\n         the purpose of business communications. </p>\r\n      <br>\r\n      <br>\r\n      <h5>What Personal Information do we Collect?</h5>\r\n      <p>We may collect and maintain different types of personal information in respect of the individuals with whom we\r\n         interact. This includes: </p>\r\n      <ul>\r\n         <li>contact and identification information, such as your name, address, telephone number and e-mail address;\r\n         </li>\r\n         <li>product and service related information concerning the products and services that we provide to, or receive\r\n            from, you;</li>\r\n         <li>credit and financial information, such as your employment history, income sources, assets, liabilities,\r\n            credit history and payment preferences; </li>\r\n         <li>business relationship information, including information related to your agreements, preferences, advisors\r\n            and decision-makers, feed-back and information requested by or provided to you. </li>\r\n      </ul>\r\n      <p>In addition, we may collect your personal information in connection with the financial-related services that\r\n         you may seek from us, including for example, having us suggest the credit cards, loans and other financial\r\n         products that, based on (i) our experience and (ii) the information you provide to us, will most likely accept\r\n         you. </p>\r\n      <br>\r\n      <p>We may also collect market-related information, which may include personal information, concerning market\r\n         trends and activities impacting our business. This information may include contract terms, financial\r\n         information and other information for the purpose of market analysis and strategic planning. We may also\r\n         collect information related to our media, investor and public relations activities and information related to\r\n         our interactions with financial and other analysts and advisors. </p>\r\n      <br>\r\n      <p>From time to time, we may utilize the services of third parties in our business and may also receive personal\r\n         information collected by those third parties in the course of the performance of their services for us or\r\n         otherwise. Where this is the case, we will take reasonable steps to ensure that such third parties have\r\n         represented to us that they have the right to disclose your personal information to us. </p>\r\n      <br>\r\n      <p>Where permitted or required by applicable law or regulatory requirements, we may collect information about you\r\n         without your knowledge or consent.\r\n      </p><br><br>\r\n      <h3>Privacy and our Website</h3>\r\n      <br>\r\n      <p>You can visit our website without telling us who you are or revealing any information about yourself, including\r\n         your e-mail address. Our web server may collect information related to your visit to our website, including the\r\n         IP address and domain used to access our website, the type and version of your browser, the website you came\r\n         from to access our website, the page you entered and exited at, any website page that is viewed by that IP\r\n         address and what country you are from. We use this information to monitor our website\'s performance (such as\r\n         number of visits, average time spent, page views) and for our business purposes such as working to continually\r\n         upgrade our website.</p>\r\n      <br>\r\n      <p>In addition, we collect the personal information that you submit to our website, such as your name, address and\r\n         any other contact or other information that you choose to provide by:</p>\r\n      <ul>\r\n         <li>using the \"contact us\" portion of this website; or</li>\r\n         <li>by corresponding with a representative of Digital Hopr via e-mail using the hyperlinks created for that\r\n            purpose.</li>\r\n      </ul>\r\n      <br>\r\n      <p>Where you request information from us, we may use the e-mail address that you provide to send you information\r\n         about offers on products and services that we believe may be of interest to you. If you have asked us to put\r\n         you on an e-mail mailing list, provide you with certain information on a regular basis, or if we send you\r\n         information about our offers on products and services by e-mail, you may ask us to remove you from the list at\r\n         any time (using the unsubscribe instructions provided with each e-mail and on the site where you signed up).\r\n         <br>\r\n         <br>\r\n      </p><h5>Our Website and Cookies</h5>\r\n      <br>\r\n      <p>When you visit the website, we place a \"cookie\" on the hard drive of your computer to track your visit. A\r\n         cookie is a small data file that is transferred to your hard drive through your web browser that can only be\r\n         read by the website that placed the cookie on your hard drive. The cookie acts as an identification card and\r\n         allows our website to identify you and to record your passwords and preferences. The cookie allows us to track\r\n         your visit to the website so that we can better understand your use of our website so that we can customize and\r\n         tailor the website to better meet your needs.</p>\r\n      <br>\r\n      <p>Most web browsers are set to accept cookies. However, on most web browsers you may change this setting to have\r\n         your web browser either: (1) notify you prior to a website placing a cookie on your hard drive so that you can\r\n         decide whether or not to accept the cookie; or (2) automatically prevent the placing of a cookie on your hard\r\n         drive. It should be noted that if cookies are not accepted, you may not be able to access a number of web pages\r\n         found on the website.\r\n      </p>\r\n      <br>\r\n      <br>\r\n      <br>\r\n      <p>Most browsers let you remove or reject cookies, including cookies used for interest-based advertising. To do\r\n         this, follow the instructions in your browser settings. Many browsers accept cookies by default until you\r\n         change your settings.\r\n      </p>\r\n      <br>\r\n      <h5>Blocking advertising ID use in your mobile settings</h5>\r\n      <br>\r\n      <p>Your mobile device settings may provide functionality to limit use of the advertising ID associated with your\r\n         mobile device for interest-based advertising purposes</p>\r\n      <br>\r\n      <h5>Using privacy plug-ins or browsers</h5>\r\n      <br>\r\n      <p>You can block our websites from setting cookies used for interest-based ads by using a browser with privacy\r\n         features, like Brave, or installing browser plugins</p>\r\n      <br>\r\n      <h5>What about Third Party Websites?</h5>\r\n      <br>\r\n      <br>\r\n      <p>Our website may contain links to other websites that may be subject to less stringent privacy standards. We\r\n         cannot assume any responsibility for the privacy practices, policies or actions of the third parties that\r\n         operate these websites. Digital Hopr is not responsible for how such third parties collect, use or disclose\r\n         your personal information. You should review the privacy policies of these websites before providing them with\r\n         personal information. </p>\r\n   \r\n   <h5>Why Do We Collect Personal Information? </h5>\r\n   <br>\r\n   <br>\r\n   <p>Digital Hopr collects personal information to enable us to manage, maintain, and develop our business and\r\n      operations, including: </p>\r\n   <br>\r\n   <ul>\r\n      <li>to establish, maintain and manage our relationship with you so that we may provide you with, or receive from\r\n         you, the products and services that have been requested, including for example, to facilitate or otherwise\r\n         assist you in obtaining a loan, credit card or other product or service from a third party. In connection with\r\n         this, Digital Hopr and/or our third party business affiliates may perform a credit check on you, based on the\r\n         information you have provided, to confirm your financial situation and your initial and ongoing eligibility for\r\n         such products and services; </li>\r\n      <li>to be able to review the products and services that we provide to you so that we may understand your\r\n         requirements for our products and services and so that we may work to improve our products and services; </li>\r\n      <li>to send you promotional and other materials that we think might be of interest to you, subject to our\r\n         compliance with applicable laws; </li>\r\n      <li>to be able to review the products and services that we obtain from you so that we may work with you and so\r\n         that you may understand our requirements for such products and services; </li>\r\n      <li>to be able to comply with your requests (for example, if you prefer to be contacted at a business or\r\n         residential telephone number and advise us of your preference, we will use this information to contact you at\r\n         that number);</li>\r\n      <li>to protect us against error, fraud, theft and damage to our goods and property, including verifying your\r\n         identity;</li>\r\n      <li>to enable us to comply with applicable law or regulatory process; and </li>\r\n      <li>any other reasonable purpose to which you consent.</li>\r\n   </ul>\r\n   <br>\r\n   <br>\r\n   <p>We may use your personal information to create Aggregated Information (as defined below) for the purposes of\r\n      managing, maintaining, and developing our operations. Such purposes include: (i) identifying the demographics of\r\n      our clients; (ii) creating and selling benchmarks, reports, summary metrics, predictive algorithms; and (iii)\r\n      developing new or improving our existing products and/or services. In this Privacy Policy, \"Aggregated\r\n      Information\" means information that: (i) arises from the compilation, combination and/or analysis of personal and\r\n      other information; and (ii) is anonymized. </p>\r\n   <br>\r\n   <br>\r\n   <h5>How Do We Use and Disclose Your Personal Information?</h5>\r\n   <p>We may use or disclose your personal information: </p>\r\n   <ul>\r\n      <li>for the purposes described in this Privacy Policy (including, for the purposes of Digital Hopr and/or our\r\n         third party business affiliates performing a credit check on you to confirm your financial situation and your\r\n         initial and ongoing eligibility for the products and services that you have requested); and</li>\r\n      <li>for any additional purposes for which we have obtained your consent to the use or disclosure of your personal\r\n         information.</li>\r\n      <li>In addition, we may use or disclose your personal information without your knowledge or consent where we are\r\n         permitted or required by applicable law or regulatory requirements to do so.\r\n         ?</li>\r\n      <br>\r\n      <br>\r\n      <h5>When do we Disclose Your Personal Information?</h5>\r\n      <br>\r\n      <p>We may share your personal information with our employees, contractors, consultants and other parties who\r\n         require such information to assist us with managing our relationship with you, including: third parties that\r\n         assist Digital Hopr in the provision of services to you and third parties whose services we use to conduct our\r\n         business. </p>\r\n      <br>\r\n      <p>Such third parties may include lenders and dealerships who may wish to provide you with goods or services. They\r\n         may also include related parties who process and store your personal information for us.</p>\r\n      <br>\r\n      <p>For example, our third party service providers may provide certain information technology, data processing, and\r\n         advertising/marketing, and call center services to us from time to time so that we may operate our business,\r\n         and as result, your personal information may be collected, used, processed, stored or disclosed in the United\r\n         States of America, Canada and in Europe (including the United Kingdom and Russia), India or Asia (including\r\n         China). As a result, your personal information may be used, stored or accessed in other countries and may be\r\n         subject to the laws of those countries. For example, information may be disclosed in response to valid demands\r\n         or requests from government authorities, courts, or law enforcement agencies in those countries.</p>\r\n      <br>\r\n      <p>Where you have requested us to do so (either expressly or by your actions), we may share your personal\r\n         information with persons who may consider you and/or your application for a loan, credit card or other product\r\n         or service. In connection with this, Digital Hopr and/or our third party business affiliate to perform a credit\r\n         check on you to confirm your financial situation and your initial and ongoing eligibility for the products and\r\n         services you have requested.</p>\r\n      <br>\r\n      <p>In addition, personal information may be disclosed or transferred to another party during the course of, or\r\n         completion of, a change in ownership of or the grant of a security interest in, all or a part of Digital Hopr\r\n         or its affiliates through, for example, an asset or share sale, or some other form of business combination,\r\n         merger or joint venture, provided that such party is bound by appropriate agreements or obligations and\r\n         required to use or disclose your personal information in a manner consistent with the use and disclosure\r\n         provisions of this Privacy Policy, unless you consent otherwise. </p>\r\n      <p>Further, your personal information may be disclosed:</p>\r\n      <br>\r\n      <br>\r\n      <ul>\r\n         <li>as permitted or required by applicable law or regulatory requirements;</li>\r\n         <li>to comply with valid legal processes such as search warrants, subpoenas or court orders;</li>\r\n         <li>as above, in order to administer or service your aim to obtain credit with one or more third parties;</li>\r\n         <li>to protect the rights and property of Digital Hopr;</li>\r\n         <li>during emergency situations or where necessary to protect the safety of a person or group; or</li>\r\n         <li>with your consent. </li>\r\n      </ul>\r\n      <br>\r\n      <br>\r\n      <h5>Your Consent is Important to Us</h5>\r\n      <br>\r\n      <p>It is important to us that we collect, use or disclose your personal information where we have your consent to\r\n         do so. Depending on the sensitivity of the personal information, your consent may be implied, deemed (using an\r\n         opt-out mechanism) or express. Express consent can be given orally, electronically or in writing. Implied\r\n         consent is consent that can reasonably be inferred from your action or inaction. For example, when you enter\r\n         into an agreement with us, we will assume your consent to the collection, use and disclosure of your personal\r\n         information for purposes related to the performance of that agreement and for any other purposes identified to\r\n         you at the relevant time.</p>\r\n      <br>\r\n      <p>Typically, we will seek your consent at the time that we collect your personal information. In certain\r\n         circumstances, your consent may be obtained after collection but prior to our use or disclosure of your\r\n         personal information. If we plan to use or disclose your personal information for a purpose not previously\r\n         identified (either in this Privacy Policy or separately), we will endeavor to advise you of that purpose before\r\n         such use or disclosure.</p>\r\n      <br>\r\n      <p>As we have described above, we may collect, use or disclose your personal information without your knowledge or\r\n         consent where we are permitted or required to do so by applicable law or regulatory requirements. </p>\r\n      <br>\r\n      <br>\r\n      <h5>Choice/Opt-Out</h5>\r\n      <br>\r\n      <p>You may change or withdraw your consent at any time, subject to legal or contractual obligations and reasonable\r\n         notice, by contacting our Privacy Officer using the contact information set out below. All communications with\r\n         respect to such withdrawal or variation of consent should be in writing and addressed to our Privacy Officer.\r\n      </p>\r\n      <br>\r\n      <p>In certain circumstances, the withdrawal of consent may render us unable to continue to provide products or\r\n         services where the collection, use or disclosure of your personal information is necessary to provide the\r\n         product or service.</p>\r\n      <br>\r\n      <p>We assume that, unless you advise us otherwise, you have consented to the collection, use and disclosure of\r\n         your personal information as explained in this Privacy Policy. </p>\r\n      <br>\r\n      <br>\r\n      <h3>How is Your Personal Information Protected?</h3>\r\n      <br>\r\n      <p>Digital Hopr endeavors to maintain physical, technical and procedural safeguards that are appropriate to the\r\n         sensitivity of the personal information in question. These safeguards are designed to prevent your personal\r\n         information from loss and unauthorized access, copying, use, modification or disclosure.</p>\r\n      <br>\r\n      <p>The security of your personal information is important to us, please advise our Privacy Officer immediately of\r\n         any incident involving the loss of or unauthorized access to or disclosure of personal information that is in\r\n         our custody or control. </p>\r\n      <br>\r\n      <br>\r\n      <h5>Updating Your Personal Information</h5>\r\n      <br>\r\n      <p>It is important that the information contained in our records is both accurate and current. If your personal\r\n         information happens to change during the course of our relationship, please inform our Customer Care department\r\n         of this change. If our Customer Care department is unable to help you, please contact our Privacy Officer using\r\n         the contact information below. </p>\r\n      <br>\r\n      <p>In some circumstances we may not agree with your request to change your personal information and will instead\r\n         append an alternative text to the record in question. </p>\r\n      <br>\r\n      <br>\r\n      <h5>Access to Your Personal Information</h5>\r\n      <br>\r\n      <p>You can ask to see your personal information. If you want to review, verify or correct your personal\r\n         information, please contact our Customer Care department, and if our Customer Care department is unable to help\r\n         you, please contact our Privacy Officer using the contact information below. Please note that any such\r\n         communication must be in writing.</p>\r\n      <br>\r\n      <p>When requesting access to your personal information, please note that we may request specific information from\r\n         you to enable us to confirm your identity and right to access, as well as to search for and provide you with\r\n         the personal information that we hold about you. We may charge you a fee to access your personal information;\r\n         however, we will advise you of any fee in advance. If you require assistance in preparing your request, please\r\n         contact our Customer Care department. If our Customer Care department is unable to help you, please contact our\r\n         Privacy Officer using the contact information below\r\n      </p>\r\n      <br>\r\n      <p>\r\n         Your right to access the personal information that we hold about you is not absolute. There are instances where\r\n         applicable law or regulatory requirements allow or require us to refuse to provide some or all of the personal\r\n         information that we hold about you. In addition, the personal information may have been destroyed, erased or\r\n         made anonymous in accordance with our record retention obligations and practices.</p>\r\n      <br>\r\n      <br>\r\n      <p>In the event that we cannot provide you with access to your personal information, we will endeavor to inform\r\n         you of the reasons why, subject to any legal or regulatory restrictions.</p>\r\n\r\n      <br>\r\n      <br>\r\n      <h5>NOTICE TO CALIFORNIA RESIDENTS</h5>\r\n      <p>We are required by the California Consumer Privacy Act of 2018 (“CCPA”) to provide to California residents an\r\n         explanation of how we collect, use and share their personal Information, and of the rights and choices we offer\r\n         California residents regarding our handling of their personal information (the “Notice”).</p>\r\n      <br>\r\n      <p>California law provides California residents with the following privacy rights:</p>\r\n      <br>\r\n      <p><b>Access personal information:</b> Individuals exercising this right may request access to the categories and\r\n         specific pieces of their personal information we have collected in the prior 12-month period. </p>\r\n      <br>\r\n      <p><b>Disclosure</b> Individuals exercising this right can receive additional information regarding the sources\r\n         from which we collect information, the purposes for which we collect and share personal information, the\r\n         information of theirs we hold, and the categories of parties with whom we share their information.</p>\r\n      <br>\r\n      <p><b>Deletion</b> Individuals exercising this right can ask us to delete their personal information we have\r\n         collected, though we may be permitted to retain personal information for certain purposes.</p>\r\n      <br>\r\n      <p><b>Non-Discrimination:</b> Users may freely exercise these rights without fear of being denied goods or\r\n         services.</p>\r\n      <br>\r\n      <p><b>“Opt Out” of Sales:</b> As permitted by applicable law, we may share your personal information for monetary\r\n         or other valuable consideration (under California law, this is considered a “sale”). You may opt out of such a\r\n         “sale” of your personal information to third parties. You can exercise your right to opt-out</p>\r\n      <br>\r\n      <p>by emailing our Privacy Officer as per below. </p>\r\n      <br>\r\n      <h5>CCPA Scope and Exclusions</h5>\r\n      <br>\r\n      <p>The description in this Notice of our Privacy Practices and your Privacy Rights apply only to California\r\n         residents whose interactions with us are limited to:\r\n      </p>\r\n      <p>Visiting our consumer websites,\r\n\r\n         Signing up for email alerts,\r\n\r\n         Commenting on or contributing to our blogs,\r\n\r\n         Establishing an account that may or may not include financial products or services, or\r\n\r\n         Applying for our job openings on our websites or third party sites (however, note that the CCPA does not extend\r\n         Privacy Rights to job applicants).\r\n\r\n         The description in this Notice of our Privacy Policies and CCPA Privacy Rights do not apply to the personal\r\n         information we collect, use or disclose about:\r\n\r\n         Consumers who initiate or complete the process of applying for financial products or services. This is because\r\n         this information is subject to the federal Gramm-Leach-Bliley Act (“GLBA”) and implementing regulations, or the\r\n         California Financial Information Privacy Act (“FIPA”), or\r\n\r\n         Representatives of businesses that seek to obtain our products or services, or to provide products or services\r\n         to us. Please note that the CCPA limits these rights by, for example, prohibiting us from providing certain\r\n         sensitive information in response to an access request and limiting the circumstances in which we must comply\r\n         with a deletion request. We will also respond to requests for information and access only to the extent we are\r\n         able to associate with a reasonable effort the information we maintain with the identifying details you provide\r\n         in your request. If we deny your request, we will communicate our decision to you.\r\n\r\n         You are entitled to exercise the rights described above free from discrimination.\r\n\r\n         ?</p>\r\n      <br>\r\n      <br>\r\n      <p>How to Submit a Request</p>\r\n      <a href=\"mailto:info@digitalhopr.com\">info@digitalhopr.com</a>\r\n      <br>\r\n      <br>\r\n      <p>By Mail to</p>\r\n      <p>Digital Hopr Inc.</p>\r\n      <p>Unit 1, 6725 Millcreek Dr.</p>\r\n      <p>Mississauga, Ontario L5N 5V3</p>\r\n      <p>Attention: Privacy Officer</p>\r\n      <br>\r\n      <br>\r\n      <h5>Identity verification </h5>\r\n      <br>\r\n      <p>The CCPA requires us to verify the identity of the individual submitting a request to access or delete personal\r\n         information before providing a substantive response to the request. We will ask you to verify your identity\r\n         when you submit a request.</p>\r\n      <br>\r\n      <h5>Authorized agents</h5></ul>'),
(6, 'Service Providers', 'service_providers', '<span style=\"color: rgb(0, 0, 0); font-family: Poppins, sans-serif; text-align: center; white-space: pre-wrap;\">Matched debt relief companies may include:</span><p></p><div class=\"parent\"><ul></ul><p></p><p></p><ul><li style=\"text-align: left;\">National Debt Relief</li><li style=\"text-align: left;\">Freedom Debt Relief</li><li style=\"text-align: left;\">CuraDebt</li><li style=\"text-align: left;\">Debt.com</li><li style=\"text-align: left;\">United Settlement</li><li style=\"text-align: left;\">Consolidated Credit Solutions, Inc</li><li style=\"text-align: left;\">Lighthouse Finance Solutions</li><li style=\"text-align: left;\">Horizon Finance Solutions</li><li style=\"text-align: left;\">Strong Law Group</li><li style=\"text-align: left;\">New Day Financial Solutions</li><li style=\"text-align: left;\">Beyond Finance dba Accredited Debt Relief</li><li style=\"text-align: left;\">Citizens Debt Relief LLC</li></ul></div><p></p><p style=\"text-align: left;\"><br></p>'),
(5, 'Home', 'Home', '<?= $website_title; ?> is a FREE site that pays its members to try products and services. Advertisers are\r\n            always looking for people like you to evaluate their products and services and at <?= $website_title; ?>, we bring the advertisers\r\n            to you. We show you the offers and you choose the ones you want!\r\n            <br /><br />\r\n            Unlike other sites on the Internet that promise you the world, our dedication and focus to providing our members\r\n            with the newest and most profitable offers allows our members to become successful earning\r\n            an additional income online.  We are constantly in search of new offers to provide to our members and\r\n            when we find them we make sure you know about them immediately through our paid email program.  Yes, you can even\r\n            earn cash for just reading the emails we send you.\r\n            <br /><br />\r\n            <span class=\"red-bold\">With <?= $website_title; ?>, you really do earn extra cash!</span>\r\n            <br />\r\n            At <?= $website_title; ?> you can earn cash in the following ways:\r\n        <ul>\r\n            <li>Complete Offers and Surveys</li>\r\n            <li>Refer Friends, Family and Colleagues</li>\r\n            <li>Read our Paid Emails</li>\r\n            <li>Take advantage of our bonus offer programs</li>\r\n        </ul>\r\n        <br />'),
(2, 'Terms & Conditions', 'Terms-Conditions', '<div style=\"background:white;color:black !important;padding:10px;\">\r\n			<h1>Official Rules</h1>\r\n\r\n			<p><strong>A limit of one online entry per day is allowed per individual and per e-mail address for each separate online promotion unless otherwise specified.</strong> Subsequent entries determined to be submitted from the same email address or from the same individual using multiple email addresses in violation of this rule will be declared ineligible.</p>\r\n			\r\n			<p><strong>All entries received by 11:59 P.M., ET, December 31st 2022 will be eligible for our up to $12,000 Drawing.</strong> To enter these Sweepstakes, complete the entry process.  Please note that your entry is not complete until you have reached the “Confirmed Entry” page and receive a prize number. Upon timely entry, your assigned Prize Number will be fully eligible to win. Entries submitted from this Promotion after the deadline will be deemed invalid.</p>\r\n			\r\n			<p>This sweepstakes is open to legal U.S. residents, (ii) 18 years of age or older as of January 1st 2022, excluding residents of Florida, New York, Rhode Island, Puerto Rico and where otherwise prohibited by law. The Sweepstakes begins on January 1st 2022 and ends on December 31st 2022.\r\n			</p>\r\n\r\n			<p><strong>You may receive multiple entry opportunities into our ongoing Giveaways.</strong>  Various presentations of these Giveaways using various prizes/prize values may be presented to the public. The winning entry will be eligible for the prize configuration promoted in the offer from which it comes. A winner\'s prize may be supplemented up to the maximum amount of the Giveaway at {website_title}’s option.</p> \r\n\r\n			<p><strong>Unless otherwise specified, if the matching winning number from a Giveaway has not been returned at giveaway end, the minimum registered prize amount alone is guaranteed to be awarded to an alternate winner by second chance random drawing among eligible entries at giveaway end.</strong>  In the event that the winning number from a winning promotion is duplicated, there will be a random drawing among such duplicated numbers to determine a winner. In case of a dispute, winning entry will be deemed made by the holder of an established e-mail account associated with the entry. NO PURCHASE OR PAYMENT IS EVER NECESSARY TO ENTER TO WIN!</p>\r\n\r\n			<p><strong>Winners will be notified by mail, email or telephone.</strong>  Award subject to verification of identity and eligibility. Winner must be located and sign an Affidavit of Eligibility within 30 days or we will select an alternate winner. Acceptance of prize and secondary recipient\'s acceptance of payment constitute permission to use name and likeless of winner and secondary recipient for promotional purposes, except where prohibited by law.</p>\r\n			\r\n			<p><strong>Board of Judge\'s decisions are final.</strong> Giveaways may be ended early for promotional purposes, and if so, all eligible entries will be included and the winner selection method will not change. Taxes are winner\'s responsibility. Only U.S. residents are eligible for this sweepstakes. All federal, state and local laws apply.</p> \r\n\r\n			<p>By entering this promotion, each entrant accepts and agrees to be bound by these official rules and the decisions of {website_title}. {website_title} and their agencies are not responsible for any incorrect or inaccurate information, whether caused by website users or by any of the equipment or programming associated with or utilized in the Sweepstakes or by any technical or human error which may occur in the processing of submissions in the Sweepstakes. {website_title}and their agencies assume no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of entries. {website_title} and their agencies are not responsible for any problems or technical malfunction of any telephone network or lines, computer systems, servers or providers, computer equipment or software on account of technical problems or traffic congestion on the Internet or combination thereof, including injury or damage to participants or to any other person\'s computer related to or resulting from participating or downloading materials in this Sweepstakes. If, for any reason, the Sweepstakes is not capable of running as planned, including infection by computer virus, bugs, tampering, unauthorized intervention, fraud, technical failures, or any other causes beyond the control of {website_title} which corrupts or affects the administration, security, fairness, integrity or proper conduct of this Sweepstakes, {website_title} reserves the right to terminate the online portion of the promotion. Entries become the property of {website_title} and will not be returned.</p>\r\n\r\n			<p>Write-In Entry Instructions.  You may write in as often as you like to enter our sweepstakes at the address below. Sweepstakes eligibility will be based on date the write-in entry is received. Just mail each entry separately. We do not accept entries from a third party or entries sent in bulk.</p> \r\n					\r\n					\r\n		  <h1>Terms of Use</h1>\r\n		   \r\n			<p>The following sets forth the terms of use (also known as the \"Terms\") for the Web site located at {base_url} (the \"Site\"), which is operated by SBG Media Enterprise LLC. (“{base_url},” “we,” “our” or “us”) and supersedes any previous statement of such policies. By using the Site, you are consenting to these Terms. {base_url} may modify, alter or update these Terms at any time without prior notice, and your subsequent use of the Site shall constitute your consent to the modification, alteration or update. If you are interested in {base_url}\'s information collection and use practices, please use this link.</p>\r\n\r\n\r\n			<h3>Permitted Use of the Site</h3>\r\n\r\n			<p>{base_url} shall provide you (\"User\") with access to the Site and the services contained therein. User shall be liable and responsible for any and all activities conducted on the Site by User whether or not such activities have been authorized by User. The Site is provided on an \"as is\" basis for the convenience of customers and users, and the Site and the domain name(s) associated with them and all copyrights, trademarks and other proprietary and personal rights of the Site are the sole property of {base_url}. The Site is intended for use by persons 18 years of age or older. You are permitted to access the Site and the content provided by {base_url} (which may include text, images, hosted software, sound files, video or other content, and may be provided via the Site or otherwise) (collectively, \"Content\") solely for the purpose of viewing the Site and other services offered by the Site, receiving information about {base_url}\'s business and products, communicating with {base_url}, or otherwise as stated on the Site.</p>\r\n\r\n			<p>Each User is granted a non-exclusive, non-transferable, revocable and limited license to access and use the Site and related products, services and offerings (“collectively, the “Site Offerings”).  {base_url} may terminate this license at any time for any reason.  Unless otherwise expressly authorized by {base_url}, Users may only use the Site Offerings for their own personal, non-commercial use.  No part of the Site Offerings may be reproduced in any form or incorporated into any information retrieval system, electronic or mechanical.  No User or other third party may use any automated means or form of scraping or data extraction to access, query or otherwise collect material from the Site Offerings except as expressly permitted by {base_url}.  No User or other third party may use, copy, emulate, clone, rent, lease, sell, modify, decompile, disassemble, reverse engineer or transfer the Site Offerings, or any portion thereof.  No User or other third party may create any “derivative works” by altering any aspect of the Site Offerings.  No User or other third party may use the Site Offerings in conjunction with any other third-party content.  No User or other third party may exploit any aspect of the Site Offerings for any commercial purposes not expressly permitted by {base_url}.  Each User further agrees to indemnify and hold {base_url} harmless for that User’s failure to comply with this Section.  {base_url} reserves any rights not explicitly granted in the Terms. </p>\r\n\r\n			<p>The Site Offerings, as well as the organization, graphics, design, compilation, magnetic translation, digital conversion, software, services and other matters related to same, are protected under applicable copyrights, trademarks and other proprietary (including, but not limited to, intellectual property) rights.  The copying, redistribution or publication by any User or other third party of any part of the Site Offerings is strictly prohibited.  No User or other third party acquires ownership rights in or to any content, document, software, services or other materials viewed by or through the Site Offerings.  The posting of information or material by and through the Site Offerings does not constitute a waiver of any right in or to such information and/or materials.</p>\r\n\r\n			<p>You agree to and must use your own name and email address in the sign-up process and may not assume a false identity. Your computer must not be shared with another individual that has an existing account. You must maintain your email account that you used when signing up to {website_title}.</p>\r\n			\r\n			<p>Facebook® is a registered trademark of Facebook, Inc. (“Facebook”). Please be advised that {website_title} not in any way affiliated with Facebook, nor are the {website_title} Offers endorsed, administered or sponsored by Facebook.</p>\r\n			\r\n			<p>Freebies and Sweepstakes (including but not limited to: cash, gift cards, offers, specials, deals, survey, contest, giveaway, samples, and other similar offers) can change often, sometimes daily. Some images of Freebies and Sweepstakes include prior offerings, outside offerings, expired offerings, representative offerings, and different brands of similar products, or otherwise are not a current offering from {base_url}. If for whatever reason various Freebies and Sweepstakes become unavailable, you ordered them and did not receive them, their qualification requirements changed, you are denied, or any other challenges or complications arise, {base_url} is not responsible. No guarantee is made that you will receive any of the requested Freebies and Sweepstakes as these are offered by outside third parties. All third parties are unaffiliated with {base_url} and therefore are not subject to any direction or control of nor do they endorse {base_url} or its services. {base_url} sometimes receives compensation when you participate in third party offers. All third party brands, products, names, logos and trademarks are the property of their respective owners. We do not ship Freebies and Sweepstakes (unless specifically mentioned that the Freebies and Sweepstakes will be coming from us). For more information, please reference our Privacy Policy and Official Rules.</p>\r\n\r\n			<p>You hereby grant {base_url} a worldwide, perpetual, non-exclusive, transferable, fully- paid license to use, copy, perform, edit, rerun, reproduce, syndicate, license, sublicense, print, distribute, exhibit or revise any content provided by you to {base_url} via the Site in any manner and in any medium or forum, whether now known or hereafter devised, without payment to you or any third party (which is referred to in these Terms as “User Content”). Further, by submitting such User Content you agree that upon {base_url}\'s request, you will, without charge, make, execute and deliver any and all other instruments that may be necessary or desirable, as determined by {base_url} in its sole discretion, for the purpose of ensuring that all rights in the User Content are transferred to {base_url} and become the sole and exclusive property of {base_url}. In connection with such User Content, you warrant and represent to {base_url} that you have all rights, title and interests necessary to provide such User Content to {base_url}, and that your provision of the User Content to {base_url} shall not infringe any third party’s proprietary or personal rights, including but not limited to any trademark, copyright, patent, or trade secret and such submission will be compliance with all laws, rules and regulations. {base_url} makes no warranties, express or implied, with regard to the Site, their operation, or your use of the Site, including but not limited to warranties of merchantability or fitness for a particular purpose. {base_url} makes no warranties as to the availability, up-time, functionality, error-free nature or reliability of the Site or other services that you may access via the Site, the Internet, or other technology utilized to present, access or utilize the Site, nor does it warrant that the Site shall be free of computer viruses or other malicious content. {base_url} reserves the right to modify, suspend or discontinue the offering of the Site at any time for any reason without prior notice. Further, while {base_url} utilizes electronic and physical security to reduce the risk of improper access to or manipulation of data during transmission and storage, it cannot guarantee the security or integrity of the data and shall have no liability for breaches of security or integrity or third-party interception in transit, nor for any damage which may result to your computer or other property by your use of the Site.</p>\r\n\r\n			<p>IN NO EVENT SHALL {base_url} BE LIABLE TO YOU FOR ANY DAMAGES, INCLUDING, BUT NOT LIMITED TO, DIRECT, CONSEQUENTIAL, INCIDENTAL OR INDIRECT DAMAGES, INCLUDING, WITHOUT LIMITATION, ANY LOSS OF DATA, LOSS OF PROFITS OR LOST SAVINGS, ARISING OUT OF THESE TERMS OR THE SITE, EVEN IF {base_url} HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. FURTHER, IN NO EVENT SHALL {base_url}\'S AGGREGATE LIABILITY FOR ANY REASON ARISING OUT OF THESE TERMS OR THE SITE FROM ALL CAUSES OF ACTION OF ANY KIND, INCLUDING CONTRACT, TORT (INCLUDING NEGLIGENCE), STRICT LIABILITY, BREACH OF WARRANTY, MISREPRESENTATION, OR OTHERWISE, EXCEED THE AMOUNT OF $10.00.</p>\r\n\r\n			<p>{base_url} may provide links to third party Web Sites or services from the Site. Such links are provided for your convenience, and do not necessarily constitute an endorsement by {base_url} of such Site or an affiliation between {base_url} and the owners of such Site, nor shall {base_url} be liable for the contents of such Site. {base_url} will also not be liable for any errors in such links, or for any malfunction of such links.</p>\r\n\r\n			<h3>Dispute Resolution Provisions.</h3>\r\n\r\n			<p>The Agreement shall be treated as though it were executed and performed in Delray Beach, Florida and shall be governed by and construed in accordance with the laws of the State of Florida (without regard to conflict of law principles). Should a dispute arise concerning the Site Offerings, the terms and conditions of the Agreement or the breach of same by any party hereto: (a) the parties agree to submit their dispute for resolution by arbitration before a reputable arbitration organization, as mutually agreed upon by the parties, in accordance with the then current arbitration rules of that arbitration organization; and (b) you agree to first commence a formal dispute proceeding by completing and submitting an Initial Dispute Notice which can be found <a href=\"{base_url}/majorsweeps-initial-dispute-notice.pdf\">Here.</a> We may choose to provide you with a final written settlement offer after receiving your Initial Dispute Notice (\"Final Settlement Offer\"). If we provide you with a Final Settlement Offer and you do not accept it, or we cannot otherwise satisfactorily resolve your dispute and you wish to proceed, you must submit your dispute for resolution by arbitration before a reputable arbitration organization as mutually agreed upon by the parties, in your county of residence, by filing a separate Demand for Arbitration, which is available <a href=\"{base_url}/majorsweeps-demand-for-arbitration.pdf\">Here.</a> For claims of Ten Thousand Dollars ($10,000.00) or less, you can choose whether the arbitration proceeds in person, by telephone or based only on submissions. If the arbitrator awards you relief that is greater than our Final Settlement Offer, then we will pay all filing, administration and arbitrator fees associated with the arbitration and, if you retained an attorney to represent you in connection with the arbitration, we will reimburse any reasonable attorney\'s fees that your attorney accrued for investigating, preparing and pursuing the claim in arbitration. Any award rendered shall be final and conclusive to the parties and a judgment thereon may be entered in any court of competent jurisdiction. Nothing contained herein shall be construed to preclude any party from: (i) seeking injunctive relief in order to protect its rights pending an outcome in arbitration; and/or (ii) pursuing the matter in small claims court rather than arbitration. Although we may have a right to an award of attorney\'s fees and expenses if we prevail in arbitration, we will not seek such an award from you unless the arbitrator determines that your claim was frivolous. To the extent permitted by law, you agree that you will not bring, join or participate in any class action lawsuit as to any claim, dispute or controversy that you may have against Company and/or its employees, officers, directors, members, representatives and/or assigns. You agree to the entry of injunctive relief to stop such a lawsuit or to remove you as a participant in the suit. You agree to pay the attorney\'s fees and court costs that Company incurs in seeking such relief. This provision preventing you from bringing, joining or participating in class action lawsuits: (A) does not constitute a waiver of any of your rights or remedies to pursue a claim individually and not as a class action in binding arbitration as provided above; and (B) is an independent agreement. You may opt-out of these dispute resolution provisions by providing written notice of your decision within thirty (30) days of the date that you first access the Site.\r\n			{base_url} may provide you with an opportunity to obtain software or other proprietary content owned by {base_url} or a third party, such content may be subject to its own license agreement, in addition to these Terms. By using this Site, you agree to indemnify and hold harmless {base_url}, its affiliates and contractors, and its and their officers, directors, employees and agents from and against any loss, claim, damage, obligation, liability, cost or expense (including, without limitation, reasonable attorneys’ fees and costs of any investigation or preparation) arising out of or in connection with any actual or threatened claim, suit, action or proceeding by any person based on or arising out any use by you, or an account or computer owned by you, or your provision of User Content to {base_url}.</p>\r\n\r\n			<p>These Terms shall be governed by and interpreted in accordance with the laws of the State of Florida, United States of America. You agree that the exclusive forum for any disputes arising out of these Terms and/or your use of the Site shall be the state and federal courts located in Delray Beach, Florida. The provisions regarding ownership, disclaimers, indemnification, governing law and forum set forth above will survive any termination of these Terms. All notices to {base_url} in connection with these Terms shall be provided in writing, and any notice will be deemed to be provided on the date it is received.</p>\r\n		</div>');
INSERT INTO `tbl_pages` (`id`, `title`, `slug`, `description`) VALUES
(3, 'About', 'about', 'Signature Surveys is a FREE site that pays its members to try products and services. Advertisers are\r\n            always looking for people like you to evaluate their products and services and at <!--?= $website_title; ?-->, we bring the advertisers\r\n            to you. We show you the offers and you choose the ones you want!\r\n            <br><br>\r\n            Unlike other sites on the Internet that promise you the world, our dedication and focus to providing our members\r\n            with the newest and most profitable offers allows our members to become successful earning\r\n            an additional income online.  We are constantly in search of new offers to provide to our members and\r\n            when we find them we make sure you know about them immediately through our paid email program.  Yes, you can even\r\n            earn cash for just reading the emails we send you.\r\n            <br><br>\r\n            <span class=\"red-bold\">With <!--?= $website_title; ?-->, you really do earn extra cash!</span>\r\n            <br>\r\n            At <!--?= $website_title; ?--> you can earn cash in the following ways:\r\n        <ul>\r\n            <li>Complete Offers and Surveys</li>\r\n            <li>Refer Friends, Family and Colleagues</li>\r\n            <li>Read our Paid Emails</li>\r\n            <li>Take advantage of our bonus offer programs</li>\r\n        </ul>\r\n        <br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `rating` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `type`, `value`) VALUES
(1, 'result_per_page', '0'),
(2, 'website_title', 'Slicebills'),
(3, 'phone', ' 888-563-1111'),
(4, 'website_logo', 'logo.png'),
(5, 'footer_text', '<p>Copyright© 2013-2022 SBG Media Enterprise LLC. All Rights Reserved</p>\r\n							<p style=\"padding:5px;\">NO PURCHASE NECESSARY TO ENTER OR WIN. PURCHASE WILL NOT INCREASE\r\n								THE ODDS OF WINNING. Our general Sweepstakes are open to legal residents of the United\r\n								States, the District of Columbia, who are living in the United States and the District\r\n								of Columbia and who are at least 18 years of age. Our Grand Prize Sweepstakes are void\r\n								in FLORIDA, NEW YORK, PUERTO RICO and where otherwise prohibited by law. Winners are\r\n								responsible for all taxes associated with prizes. Odds of winning depend on the number\r\n								of entries received during the sweepstakes period. Illustrations do not imply\r\n								endorsement by the manufacturers or owners of third party marks. For alternative method\r\n								of entry, <a href=\"official-rules.html#means\" target=\"new\">click here.</a> Sweepstakes\r\n								ends on 12/31/2022.\r\n							</p>'),
(6, 'support_email', 'support@optionalfailure.com'),
(7, 'address', '555 Anton Blvd, Suite 150, Costa Mesa Ca 92626'),
(8, 'number_of_question', ''),
(9, 'address_text', '6586 W Atlantic Ave<br />\r\n							Suite 4871<br />\r\n							Delray Beach, FL 33446<br />\r\n							561-486-2530 <br />');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settlement`
--

CREATE TABLE `tbl_settlement` (
  `id` int(11) NOT NULL,
  `creditor` varchar(255) NOT NULL,
  `debt_amount` varchar(255) NOT NULL,
  `settlement` varchar(255) NOT NULL,
  `savings` varchar(255) NOT NULL,
  `timestamp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `id` int(11) NOT NULL,
  `code` char(5) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`id`, `code`, `name`) VALUES
(1, 'AL', 'Alabama'),
(2, 'AK', 'Alaska'),
(3, 'AS', 'American Samoa'),
(4, 'AZ', 'Arizona'),
(5, 'AR', 'Arkansas'),
(6, 'CA', 'California'),
(7, 'CO', 'Colorado'),
(8, 'CT', 'Connecticut'),
(9, 'DE', 'Delaware'),
(10, 'DC', 'District of Columbia'),
(11, 'FM', 'Federated tbl_states of Micronesia'),
(12, 'FL', 'Florida'),
(13, 'GA', 'Georgia'),
(14, 'GU', 'Guam'),
(15, 'HI', 'Hawaii'),
(16, 'ID', 'Idaho'),
(17, 'IL', 'Illinois'),
(18, 'IN', 'Indiana'),
(19, 'IA', 'Iowa'),
(20, 'KS', 'Kansas'),
(21, 'KY', 'Kentucky'),
(22, 'LA', 'Louisiana'),
(23, 'ME', 'Maine'),
(24, 'MH', 'Marshall Islands'),
(25, 'MD', 'Maryland'),
(26, 'MA', 'Massachusetts'),
(27, 'MI', 'Michigan'),
(28, 'MN', 'Minnesota'),
(29, 'MS', 'Mississippi'),
(30, 'MO', 'Missouri'),
(31, 'MT', 'Montana'),
(32, 'NE', 'Nebraska'),
(33, 'NV', 'Nevada'),
(34, 'NH', 'New Hampshire'),
(35, 'NJ', 'New Jersey'),
(36, 'NM', 'New Mexico'),
(37, 'NY', 'New York'),
(38, 'NC', 'North Carolina'),
(39, 'ND', 'North Dakota'),
(40, 'MP', 'Northern Mariana Islands'),
(41, 'OH', 'Ohio'),
(42, 'OK', 'Oklahoma'),
(43, 'OR', 'Oregon'),
(44, 'PW', 'Palau'),
(45, 'PA', 'Pennsylvania'),
(46, 'PR', 'Puerto Rico'),
(47, 'RI', 'Rhode Island'),
(48, 'SC', 'South Carolina'),
(49, 'SD', 'South Dakota'),
(50, 'TN', 'Tennessee'),
(51, 'TX', 'Texas'),
(52, 'TH', 'The District of Columbia and the Northern Mariana Islands'),
(53, 'UT', 'Utah'),
(54, 'VT', 'Vermont'),
(55, 'VI', 'Virgin Islands'),
(56, 'VA', 'Virginia'),
(57, 'WA', 'Washington'),
(58, 'WV', 'West Virginia'),
(59, 'WI', 'Wisconsin'),
(60, 'WY', 'Wyoming'),
(61, 'Other', 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unsubscribe`
--

CREATE TABLE `tbl_unsubscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `timestamp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unsubscribe`
--

INSERT INTO `tbl_unsubscribe` (`id`, `email`, `timestamp`) VALUES
(1, 'mnutshoaib.md061@gmail.com', 1670874519),
(2, 'kdas@yopmail.com', 1672552405);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` text,
  `apt` text,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `chkterms` int(11) DEFAULT '1',
  `chktcpa` int(11) DEFAULT '1',
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL DEFAULT '1',
  `ip_address` varchar(255) NOT NULL,
  `timestamp` bigint(20) NOT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `phone`, `gender`, `first_name`, `last_name`, `address`, `apt`, `city`, `state`, `zip`, `dob`, `chkterms`, `chktcpa`, `password`, `profile_pic`, `user_type`, `status`, `created_by`, `ip_address`, `timestamp`, `deleted_at`) VALUES
(1, 'Nexus1', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'e10adc3949ba59abbe56e057f20f883e', '', 1, 1, 1, '::1', 1670743737, 0),
(31, 'NAHID ABBAS', 'nahid@gmail.com', '95559913777', 'Ms', 'NAHID', 'ABBAS', 'B-29-B 1st FLOOR WEST VINOD NAGAR EAST ', '1234', 'VINOD NAGAR', 'Idaho', '79993', '686687400', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', '', 2, 1, 1, '', 1671365546, 0),
(32, 'SHOAIB MOHAMMAD', 'shoaib.md06@gmail.com', '08882670078', 'Mr', 'SHOAIB', 'MOHAMMAD', 'R-93,Akra Road', 'Metiabruz,Kolkata', 'KOLKATA', 'Illinois', '70002', '684095400', 1, 1, 'e10adc3949ba59abbe56e057f20f883e', '', 2, 1, 1, '', 1671363838, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_types`
--

CREATE TABLE `tbl_user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user_types`
--

INSERT INTO `tbl_user_types` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donot_sell_requests`
--
ALTER TABLE `tbl_donot_sell_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settlement`
--
ALTER TABLE `tbl_settlement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unsubscribe`
--
ALTER TABLE `tbl_unsubscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_types`
--
ALTER TABLE `tbl_user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_cms`
--
ALTER TABLE `tbl_cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_donot_sell_requests`
--
ALTER TABLE `tbl_donot_sell_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_settlement`
--
ALTER TABLE `tbl_settlement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_unsubscribe`
--
ALTER TABLE `tbl_unsubscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user_types`
--
ALTER TABLE `tbl_user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
