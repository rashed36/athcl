-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2023 at 07:05 PM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athclbd_athclbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `title`, `description`, `photo`) VALUES
(4, 'null', 'null', 'null', 'public/mastaring/backend/images/about/1718937833931331.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `all_mamber`
--

CREATE TABLE `all_mamber` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `type_of_member` varchar(120) NOT NULL,
  `position_name` varchar(150) NOT NULL,
  `Year_of_joining` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `all_mamber`
--

INSERT INTO `all_mamber` (`id`, `name`, `Batch`, `type_of_member`, `position_name`, `Year_of_joining`, `phone`, `photo`) VALUES
(14, 'MD: Lamiya', '4/5/2000', 'student', 'xxxcccc', '2012', '015678686897', 'public/mastaring/backend/images/all_member/1718286292888008.jpg'),
(15, 'MD: Mamun', '23/4/2013', 'stydent', 'sddfdf', '2018', '01716518144', 'public/mastaring/backend/images/all_member/1718286266111744.jpg'),
(16, 'Dr Pullen', '54/65/2014', 'student', 'x  aaa', '2033', '01716518144', 'public/mastaring/backend/images/all_member/1718286233387278.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

CREATE TABLE `blood_donation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Blood_Group` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `Date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `blood_donation`
--

INSERT INTO `blood_donation` (`id`, `name`, `Batch`, `Blood_Group`, `phone`, `Date_time`) VALUES
(21, 'sdfasdffsdfdsd', 'dsf', 'dfsadf', '45465465', '2020-02-20 19:22:24'),
(22, 'sgsdfg', 'sdfg', 'dsfg', '017234353454', '2020-02-20 19:22:31'),
(23, 'sdfgsdfg', 'sdgsdf', 'gsdgsdf', '45435324234', '2020-02-20 19:22:37'),
(24, 'dfgsdgs', 'dgds', 'fgsdg', '017234353454', '2020-02-20 19:22:43'),
(25, 'sfgsdfg', 'sdgsdfg', 'dsgsdfg', '017234353454', '2020-02-20 19:22:51'),
(26, 'dsfsdaf', 'asdfasdfsadfasdsdaf', 'dasfsadf', '01716518144 rr', '2020-02-20 19:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `map_link` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`id`, `location`, `name`, `address`, `mobile`, `long_description`, `map_link`) VALUES
(2, 'বরিশাল', 'প্রধান ক্যাম্পাস', 'অমৃত লাল দে কলেজ সংলগ্ন, তালুকদার ম্যানশন (  ৩য় তলা) হাসপাতাল রোড, বরিশাল', '০১৭১৮-০৪০২৮৩', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 'https://maps.google.com/maps?q=%E0%A6%85%E0%A6%AE%E0%A7%83%E0%A6%A4%20%E0%A6%B2%E0%A6%BE%E0%A6%B2%20%E0%A6%A6%E0%A7%87%20%E0%A6%95%E0%A6%B2%E0%A7%87%E0%A6%9C%20%E0%A6%B8%E0%A6%82%E0%A6%B2%E0%A6%97%E0%A7%8D%E0%A6%A8,%20%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A7%81%E0%A6%95%E0%A6%A6%E0%A6%BE%E0%A6%B0%20%E0%A6%AE%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A6%B6%E0%A6%A8(%E0%A7%A9%E0%A7%9F%20%E0%A6%A4%E0%A6%B2%E0%A6%BE),%20%E0%A6%B9%E0%A6%BE%E0%A6%B8%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE%E0%A6%B2%20%E0%A6%B0%E0%A7%8B%E0%A6%A1,%20%E0%A6%AC%E0%A6%B0%E0%A6%BF%E0%A6%B6%E0%A6%BE%E0%A6%B2%E0%A5%A4&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(3, 'বরগুনা', 'শাখা ক্যাম্পাস', 'পরিচালক - শহিদুল ইসলাম,শরীফ ভবন,সেন্ট্রাল ক্লিনিক সংলগ্ন, কলেজ রোড, বরগুনা', '01751609711', 'sdfsdf', 'https://maps.google.com/maps?q=%E0%A6%A8%E0%A6%BE%E0%A6%B9%E0%A6%BF%E0%A6%A6%20%E0%A6%AD%E0%A6%BF%E0%A6%B2%E0%A6%BE,%20%E0%A6%B8%E0%A6%A6%E0%A6%B0%20%E0%A6%B0%E0%A7%8B%E0%A6%A1,%20%E0%A6%AC%E0%A6%B0%E0%A6%97%E0%A7%81%E0%A6%A8%E0%A6%BE&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(4, 'পটুয়াখালী', 'শাখা ক্যাম্পাস', 'পরিচালক - মাসুম বিল্লাহ, নুর হক প্যানেল,সদর,পটুয়াখালী।', '01618040283', 'test', 'https://maps.google.com/maps?q=%E0%A6%A8%E0%A7%81%E0%A6%B0%20%E0%A6%B9%E0%A6%95%20%E0%A6%AA%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%87%E0%A6%B2,%E0%A6%B8%E0%A6%A6%E0%A6%B0,%E0%A6%AA%E0%A6%9F%E0%A7%81%E0%A7%9F%E0%A6%BE%E0%A6%96%E0%A6%BE%E0%A6%B2%E0%A7%80&t=&z=13&ie=UTF8&iwloc=&output=embed'),
(5, 'রংপুর', 'শাখা ক্যাম্পাস', 'পরিচালক - মো. খালেদুল ইসলাম, মো. নুরু ভিলা, তারাগঞ্জ, রংপুর।', '০১৭৬৫-৬৫২৫৪২', 'test', 'https://maps.google.com/maps?q=%E0%A6%AE%E0%A7%8B.%20%E0%A6%A8%E0%A7%81%E0%A6%B0%E0%A7%81%20%E0%A6%AD%E0%A6%BF%E0%A6%B2%E0%A6%BE,%20%E0%A6%A4%E0%A6%BE%E0%A6%B0%E0%A6%BE%E0%A6%97%E0%A6%9E%E0%A7%8D%E0%A6%9C,%20%E0%A6%B0%E0%A6%82%E0%A6%AA%E0%A7%81%E0%A6%B0&t=&z=13&ie=UTF8&iwloc=&output=embed');

-- --------------------------------------------------------

--
-- Table structure for table `committee_a`
--

CREATE TABLE `committee_a` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `Instagram` varchar(100) NOT NULL,
  `contant` varchar(100) NOT NULL,
  `c_number` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `committee_a`
--

INSERT INTO `committee_a` (`id`, `name`, `facebook`, `twitter`, `Instagram`, `contant`, `c_number`, `photo`) VALUES
(25, 'MD: Lamiya', '3', '3', '3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '01764373534', 'public/mastaring/backend/images/1st_committee/1718286381394232.jpg'),
(26, 'DR ARIF KHAN', '#', '#', '#', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '01764373534', 'public/mastaring/backend/images/1st_committee/1718286429573866.jpg'),
(27, 'ARIF', '#', '#', '#', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', '01764373534', 'public/mastaring/backend/images/1st_committee/1718286446591252.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(50) NOT NULL,
  `call` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `location_boot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `call`, `duration`, `email`, `web`, `location`, `location_boot`) VALUES
(1, '01718-040283', 'Monday-Friday (9am-5pm)', 'twakwagroup@gmail.com', 'http://athclbd.com', 'অমৃত লাল দে কলেজ সংলগ্ন,', 'তালুকদার ম্যানশন(৩য় তলা),হাসপাতাল রোড, বরিশাল।');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `curs_name` varchar(255) NOT NULL,
  `curs_name_b` varchar(255) NOT NULL,
  `cours_duration` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `curs_name`, `curs_name_b`, `cours_duration`, `description`, `photo`, `created_at`) VALUES
(1, 'L.M.A.F', 'পল্লী চিকিৎসক কোর্স', '৬ মাস', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642649872137.jpg', '2021-12-20 05:33:47'),
(2, 'D.M.A', 'ডিপ্লোমা ইন মেডিকেল এসিস্ট্যান্ট', '১ বছর', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642638665917.jpg', '2021-12-20 05:35:32'),
(3, 'S.D.D.C', 'শর্ট ডিপ্লোমা ইন ডেন্টাল কেয়ার', '১ বছর', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642229960556.jpg', '2021-12-20 05:37:08'),
(4, 'P.T.A', 'ফিজিওথেরাপি ট্রেনিং এসিস্ট্যান্ট', '১ বছর', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642289634791.jpg', '2021-12-20 05:38:05'),
(5, 'B.T.P', 'বেসিক ট্রিটমেন্ট অব প্যাথলজি', '৬ মাস', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1723092446824335.jpg', '2021-12-20 05:38:52'),
(6, 'S.D.A', 'শর্ট ডিপ্লোমা ইন আয়ুর্বেদিক', '১ বছর', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642391643377.jpg', '2021-12-20 05:39:42'),
(7, 'S.D.U', 'শর্ট ডিপ্লোমা ইন ইউনানি', '১ বছর', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642447292142.jpg', '2021-12-20 05:40:35'),
(8, 'S.D.H', 'শর্ট ডিপ্লোমা ইন হোমিওপ্যাথিক', '১ বছর', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642494920096.jpg', '2021-12-20 05:41:20'),
(9, 'M.C.H', 'মা ও শিশু', '৩ মাস', 'আমাদের দেশ ঘন বসতিপূর্ণ উন্নয়নশীল দেশ। এদেশের অধিকাংশ লোক গ্রামে বাস করে। অন্ন, বস্ত্র ও বাসস্থানের পাশাপাশি শিক্ষা ও চিকিৎসা প্রত্যেক মানুষের মৌলিক অধিকার। গ্রামে এম.বি.বি.এস ডাক্তারের সংখ্যা অপ্রতুল হওয়ায় গ্রামের সাধারণ হতদরিদ্র মানুষ আধুনিক চিকিৎসা সেবা থেকে বঞ্চিত, এ ক্ষেত্রে পল্লী চিকিত্সকগণ গুরুত্বপূর্ণ ভূমিকা পালন করে আসছে। আমাদের দেশে শিক্ষিত বেকার যুবকের সংখ্যা দিন দিন বৃদ্ধি পাচ্ছে। অভিজ্ঞ চিকিৎসকদের মাধ্যমে এদের প্রাথমিক স্বাস্থ্য পরিচর্যা বিষয়ে উপযুক্ত প্রশিক্ষণ প্রদান করা গেলে একদিকে গ্রামের হতদরিদ্র মানুষের চিকিৎসা সেবার মান কিছুটা হলেও বৃদ্ধি পাবে, অন্যদিকে শিক্ষিত বেকার যুবকেরা কর্মসংস্থানের মাধ্যমে বেকারত্বের হাত থেকে মুক্তি পাবে।', 'public/mastaring/backend/images/blog/1719642544317293.jpg', '2021-12-20 05:42:07'),
(12, 'N.P.C', 'নার্সিং কোর্স ফর প্যাসেন্ট কেয়ার', '১ বছর', 'test', 'public/mastaring/backend/images/blog/1723380378256465.jpg', '2021-12-26 11:08:49'),
(13, 'B.T.V', 'বেসিক ট্রিটমেন্ট অব ভেটেরিনারি', '৬ মাস', 'test', 'public/mastaring/backend/images/blog/1723380552583148.jpg', '2022-01-30 11:56:11'),
(14, 'B.T.L.S', 'বেসিক ট্রেনিং অব ল্যান্ড সার্ভে', '৬ মাস', 'test', 'public/mastaring/backend/images/blog/1723380622585163.jpg', '2022-01-30 11:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `account_name`, `number`, `Description`) VALUES
(1, 'Our bkash number 55', '01716518155', '55 There are many different scenarios for medicine donations â€“ such as emergency aid, long-term aid, or assistance to national health systems or to individual health facilities. Donations may come from pharmaceutical companies (directly or through private voluntary organizations), they may come in the form of aid from governments, or they may be donations aimedfd directly at single healthâ€care facilities. The intended beneficiaries of donations of medicines range from individual facilities to entire health systems. Although there are legitimate differences between these scenarios, many basic rules for appropriate donation practice apply to them all.'),
(3, 'bangladesh bank', '0171651814433', 'plz bd jhuihfjdsafgasdg');

-- --------------------------------------------------------

--
-- Table structure for table `download_membership`
--

CREATE TABLE `download_membership` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `download_membership`
--

INSERT INTO `download_membership` (`id`, `title`, `Description`, `file`) VALUES
(1, 'Please Download Membership Form sss', 'Getting all the details for the membership of your business, organization or event is most important. Creative designed membership application template is most useful and excellent option for collecting information from the customers or subscribers. The Membership application includes the name of the applicant, Date of Birth, current address, employment status, emergency contact and many more details in the template in Word and PDF formats. You can also see Credit Application Template. asasasas', 'public/mastaring/backend/images/file/1659063999458959.zip');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Working_Hours` varchar(50) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `google` varchar(200) NOT NULL,
  `pinterest` varchar(200) NOT NULL,
  `address` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `Tel`, `Email`, `Working_Hours`, `facebook`, `twitter`, `google`, `pinterest`, `address`) VALUES
(1, '01718-040283', 'twakwagroup@gmail.com', '9am-5pm', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.printset.com', 'অমৃত লাল দে কলেজ সংলগ্ন, তালুকদার ম্যানশন(৩য় তলা), হাসপাতাল রোড, বরিশাল।');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_id` int(5) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_id`, `photo`, `date_time`) VALUES
(126, 8, 'public/mastaring/backend/images/gallery/1659049729757072.jpg', '2020-02-20 16:05:17'),
(127, 8, 'public/mastaring/backend/images/gallery/1659049729919081.jpg', '2020-02-20 16:05:17'),
(128, 8, 'public/mastaring/backend/images/gallery/1659049730002971.png', '2020-02-20 16:05:17'),
(129, 9, 'public/mastaring/backend/images/gallery/1659050309000959.jpg', '2020-02-20 16:14:29'),
(130, 9, 'public/mastaring/backend/images/gallery/1659050309104375.jpg', '2020-02-20 16:14:29'),
(131, 9, 'public/mastaring/backend/images/gallery/1659050309179444.png', '2020-02-20 16:14:29'),
(133, 10, 'public/mastaring/backend/images/gallery/1659050932152103.jpg', '2020-02-20 16:24:23'),
(134, 10, 'public/mastaring/backend/images/gallery/1659050932276970.png', '2020-02-20 16:24:23'),
(135, 10, 'public/mastaring/backend/images/gallery/1659050932368414.jpg', '2020-02-20 16:24:23'),
(136, 10, 'public/mastaring/backend/images/gallery/1659050932485136.jpg', '2020-02-20 16:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_name`
--

CREATE TABLE `gallery_name` (
  `id` int(11) NOT NULL,
  `gallery_name` varchar(150) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `gallery_name`
--

INSERT INTO `gallery_name` (`id`, `gallery_name`, `photo`, `start_date`) VALUES
(1, 'Image 1', 'public/mastaring/backend/images/gallery/1723381505794810.jpeg', '2022-01-30 12:11:19'),
(2, 'Image 2', 'public/mastaring/backend/images/gallery/1723381524681127.jpeg', '2022-01-30 12:11:37'),
(3, 'Image 3', 'public/mastaring/backend/images/gallery/1723381536163397.jpeg', '2022-01-30 12:11:48'),
(4, 'Image 4', 'public/mastaring/backend/images/gallery/1723381547663072.jpeg', '2022-01-30 12:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `home_team`
--

CREATE TABLE `home_team` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `twitter` varchar(150) NOT NULL,
  `Instagram` varchar(150) NOT NULL,
  `contant` varchar(300) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `Detels` text NOT NULL,
  `photo` varchar(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `home_team`
--

INSERT INTO `home_team` (`id`, `name`, `facebook`, `twitter`, `Instagram`, `contant`, `Phone`, `Detels`, `photo`) VALUES
(4, 'MD: Lamiya', '#', '#', '#', 'Doctor', '01716518144', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'public/mastaring/backend/images/home_tim_img/1718290034315694.jpg'),
(5, 'DR ARIF KHAN', '#', '#', '#', 'Doctor', '017234353454', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'public/mastaring/backend/images/home_tim_img/1718290121497812.jpg'),
(6, 'DR ARIF', '#', '#', '#', 'Doctor', '01716518144', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'public/mastaring/backend/images/home_tim_img/1718290156471517.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `title`, `discription`, `photo`, `created_at`) VALUES
(54, 'L.M.A.F', 'পল্লী চিকিৎসক কোর্স', 'public/mastaring/backend/images/blog/1718213771412554.jpg', '2020-02-22 11:59:00'),
(55, 'M.C.H', 'মা ও শিশু', 'public/mastaring/backend/images/blog/1718288241549866.jpg', '2020-02-22 11:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `middle_photo`
--

CREATE TABLE `middle_photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `middle_photo`
--

INSERT INTO `middle_photo` (`id`, `photo`) VALUES
(3, 'public/mastaring/backend/images/middle_photo/1719643194211421.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticebord`
--

CREATE TABLE `noticebord` (
  `id` int(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `noticebord`
--

INSERT INTO `noticebord` (`id`, `file`, `text`, `created_at`) VALUES
(2, 'public/mastaring/backend/images/Notice/1643535774.pdf', 'নার্সিং কোর্স অব পেসেন্ট কেয়ার', '2022-01-30 09:42:54'),
(3, 'public/mastaring/backend/images/Notice/1643535815.pdf', 'শর্ট ডিপ্লোমা ইন হোমিওপ্যাথিক', '2022-01-30 09:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `id` int(11) NOT NULL,
  `Planning` text NOT NULL,
  `Starting` text NOT NULL,
  `Success` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `planning`
--

INSERT INTO `planning` (`id`, `Planning`, `Starting`, `Success`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `registation`
--

CREATE TABLE `registation` (
  `id` int(11) NOT NULL,
  `co_no` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `batch_no` varchar(255) NOT NULL,
  `stu_name_b` varchar(255) NOT NULL,
  `stu_name_e` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `father_name_b` varchar(255) NOT NULL,
  `father_name_e` varchar(255) NOT NULL,
  `mothers_name_b` varchar(255) NOT NULL,
  `mothers_name_e` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `b_village` varchar(255) NOT NULL,
  `b_post` varchar(255) NOT NULL,
  `b_upzila` varchar(255) NOT NULL,
  `b_zilla` varchar(255) NOT NULL,
  `s_village` varchar(255) NOT NULL,
  `s_post` varchar(255) NOT NULL,
  `s_upzilla` varchar(255) NOT NULL,
  `s_zilla` varchar(255) NOT NULL,
  `qulifaction` varchar(255) NOT NULL,
  `maddom` varchar(255) NOT NULL,
  `m_mobile` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(11) NOT NULL,
  `f_content` varchar(100) NOT NULL,
  `s_content` varchar(100) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `f_content`, `s_content`, `slider_image`, `created_at`) VALUES
(3, 'আপনাকে স্বাগতম আত-তাকওয়া প্যারামেডিকেল এন্ড নার্সিং ইন্সটিটিউট', 'জনস্বাস্হ্য বিভাগ নিবন্ধন নং- 03. গভঃ রেজিঃ নং- C-175166.', 'public/mastaring/backend/images/slider_image/1718846230452332.jpg', '2020-02-22 12:59:17'),
(4, 'আপনাকে স্বাগতম আত-তাকওয়া প্যারামেডিকেল এন্ড নার্সিং ইন্সটিটিউট', 'জনস্বাস্হ্য বিভাগ নিবন্ধন নং- 03. গভঃ রেজিঃ নং- C-175166.', 'public/mastaring/backend/images/slider_image/1718846211420215.jpg', '2020-02-22 12:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instragrm` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `position`, `phone`, `facebook`, `instragrm`, `twitter`, `description`, `photo`, `role`, `created_at`) VALUES
(3, 'Md.Abul Hasan Siddiki', 'Managing Director', NULL, 'www.facebook.com', 'www.instragram.com', 'www.twitter.com', 'test', 'public/mastaring/backend/images/blog/1735619063617227.jpg', 'staff', '2022-01-30 09:18:31'),
(5, 'Dr. Md Abu Jafor', 'MBBS(D.U), C.C.D(Bardem)', NULL, 'www.facebook.com', 'www.instragram.com', 'www.twitter.com', 'test', 'public/mastaring/backend/images/blog/1720206400022432.jpeg', 'doctors', '2022-01-30 09:18:31'),
(6, 'Dr. Md. Abul Hasan', 'D.A.M.S (B.A.U.B)-Dhaka', 'Govt.Registration -1214', 'www.facebook.com', 'www.instragram.com', 'www.twitter.com', NULL, 'public/mastaring/backend/images/blog/1720206476781753.jpeg', 'doctors', '2022-01-30 09:18:31'),
(8, 'Md Mamun Khan', 'Director', NULL, 'www.facebook.com', 'www.instragram.com', 'www.twitter.com', 'test', 'public/mastaring/backend/images/blog/1735619167486348.jpg', 'staff', '2022-01-30 09:18:31'),
(9, 'Md Masum Billah', 'Director', NULL, 'www.facebook.com', 'www.instragram.com', 'www.twitter.com', 'test', 'public/mastaring/backend/images/blog/1735619302251396.jpg', 'staff', '2022-01-30 09:18:31'),
(12, 'Dr. Md Rarun or Rasid', 'MBBS,BCS(Health)', NULL, 'www.facebook.com', 'www.instragram.com', 'www.twitter.com', NULL, 'public/mastaring/backend/images/blog/1723382983556339.png', 'doctors', '2022-01-30 12:34:48'),
(13, 'Abdullah Jaber Khan', 'Chairman', NULL, NULL, NULL, NULL, NULL, 'public/mastaring/backend/images/blog/1735619825279314.jpg', 'staff', '2022-02-22 11:44:21');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pcontact` varchar(12) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `class`, `city`, `pcontact`, `photo`, `time`) VALUES
(2, 'dfasf', '123656', '1st', 'fgdsg', 'dfgdfg', 'dfasf.jpg', '2019-09-08 16:02:25'),
(3, 'ghfgh', 'fhdfsh', 'ftghfgth', 'fgjhgfdfd', 'tfhfgthdf', 'ghfgh.jpg', '2019-09-09 01:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `totle_cash`
--

CREATE TABLE `totle_cash` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `Totle_Cash` varchar(50) NOT NULL,
  `content` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `totle_cash`
--

INSERT INTO `totle_cash` (`id`, `type`, `Totle_Cash`, `content`) VALUES
(1, 'Totle Cash', '5645', 'd dsaf sdfg fsdg fsdg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2b$10$vV645nxqDWWdzUSrG2tcWuoYb4xLjoCLI6ETcQGz2KBlwA18uVN3e', 'bOsVmqMTYdzATYQJxV3avwKjBJ904FLb3JYbhuZXh9ogWdPKrn2dJRje5DhI', '2020-02-10 01:42:28', '2020-02-22 03:44:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_mamber`
--
ALTER TABLE `all_mamber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee_a`
--
ALTER TABLE `committee_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_membership`
--
ALTER TABLE `download_membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_name`
--
ALTER TABLE `gallery_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_team`
--
ALTER TABLE `home_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `middle_photo`
--
ALTER TABLE `middle_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticebord`
--
ALTER TABLE `noticebord`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registation`
--
ALTER TABLE `registation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totle_cash`
--
ALTER TABLE `totle_cash`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `all_mamber`
--
ALTER TABLE `all_mamber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blood_donation`
--
ALTER TABLE `blood_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `committee_a`
--
ALTER TABLE `committee_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `download_membership`
--
ALTER TABLE `download_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `gallery_name`
--
ALTER TABLE `gallery_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_team`
--
ALTER TABLE `home_team`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `middle_photo`
--
ALTER TABLE `middle_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticebord`
--
ALTER TABLE `noticebord`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `planning`
--
ALTER TABLE `planning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registation`
--
ALTER TABLE `registation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `totle_cash`
--
ALTER TABLE `totle_cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
