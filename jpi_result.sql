-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 02:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpi_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `c1st`
--

CREATE TABLE `c1st` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pc61011` int(11) NOT NULL,
  `pf61011` int(11) NOT NULL,
  `tc65711` int(11) NOT NULL,
  `tf65711` int(11) NOT NULL,
  `pc65711` int(11) NOT NULL,
  `tc65712` int(11) NOT NULL,
  `tf65712` int(11) NOT NULL,
  `tc65911` int(11) NOT NULL,
  `tf65911` int(11) NOT NULL,
  `pc65911` int(11) NOT NULL,
  `tc66712` int(11) NOT NULL,
  `tf66712` int(11) NOT NULL,
  `pc66712` int(11) NOT NULL,
  `pf66712` int(11) NOT NULL,
  `tc65912` int(11) NOT NULL,
  `tf65912` int(11) NOT NULL,
  `pc65912` int(11) NOT NULL,
  `pf65912` int(11) NOT NULL,
  `pc67012` int(11) NOT NULL,
  `pf67012` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c1st`
--

INSERT INTO `c1st` (`id`, `roll`, `month`, `year`, `pc61011`, `pf61011`, `tc65711`, `tf65711`, `pc65711`, `tc65712`, `tf65712`, `tc65911`, `tf65911`, `pc65911`, `tc66712`, `tf66712`, `pc66712`, `pf66712`, `tc65912`, `tf65912`, `pc65912`, `pf65912`, `pc67012`, `pf67012`) VALUES
(1, 723466, 10, 4, 40, 45, 30, 34, 25, 28, 33, 25, 35, 23, 30, 30, 20, 15, 30, 35, 25, 23, 25, 20),
(2, 723467, 5, 12, 34, 36, 28, 40, 20, 30, 33, 55, 88, 30, 50, 70, 20, 24, 55, 77, 19, 25, 20, 23);

-- --------------------------------------------------------

--
-- Table structure for table `c2nd`
--

CREATE TABLE `c2nd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66421` int(11) NOT NULL,
  `tf66421` int(11) NOT NULL,
  `pc66421` int(11) NOT NULL,
  `pf66421` int(11) NOT NULL,
  `tc65722` int(11) NOT NULL,
  `tf65722` int(11) NOT NULL,
  `pc65722` int(11) NOT NULL,
  `pc66611` int(11) NOT NULL,
  `pf66611` int(11) NOT NULL,
  `tc65921` int(11) NOT NULL,
  `tf65921` int(11) NOT NULL,
  `pc65921` int(11) NOT NULL,
  `tc66822` int(11) NOT NULL,
  `tf66822` int(11) NOT NULL,
  `pc66822` int(11) NOT NULL,
  `pf66822` int(11) NOT NULL,
  `tc65922` int(11) NOT NULL,
  `tf65922` int(11) NOT NULL,
  `pc65922` int(11) NOT NULL,
  `pf65922` int(11) NOT NULL,
  `pc65812` int(11) NOT NULL,
  `pf65812` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c2nd`
--

INSERT INTO `c2nd` (`id`, `roll`, `month`, `year`, `tc66421`, `tf66421`, `pc66421`, `pf66421`, `tc65722`, `tf65722`, `pc65722`, `pc66611`, `pf66611`, `tc65921`, `tf65921`, `pc65921`, `tc66822`, `tf66822`, `pc66822`, `pf66822`, `tc65922`, `tf65922`, `pc65922`, `pf65922`, `pc65812`, `pf65812`) VALUES
(1, 723466, 8, 10, 30, 35, 20, 23, 18, 30, 30, 23, 21, 28, 28, 34, 28, 30, 20, 24, 34, 32, 18, 20, 20, 24),
(2, 723467, 10, 8, 28, 30, 20, 24, 18, 28, 26, 23, 22, 28, 50, 34, 35, 24, 25, 24, 40, 55, 20, 20, 20, 25);

-- --------------------------------------------------------

--
-- Table structure for table `c3rd`
--

CREATE TABLE `c3rd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66431` int(11) NOT NULL,
  `tf66431` int(11) NOT NULL,
  `pc66431` int(11) NOT NULL,
  `pf66431` int(11) NOT NULL,
  `tc66432` int(11) NOT NULL,
  `tf66432` int(11) NOT NULL,
  `pc66432` int(11) NOT NULL,
  `pf66432` int(11) NOT NULL,
  `tc66433` int(11) NOT NULL,
  `tf66433` int(11) NOT NULL,
  `pc66433` int(11) NOT NULL,
  `pf66433` int(11) NOT NULL,
  `pc66434` int(11) NOT NULL,
  `pf66434` int(11) NOT NULL,
  `tc65931` int(11) NOT NULL,
  `tf65931` int(11) NOT NULL,
  `pc65931` int(11) NOT NULL,
  `tc65913` int(11) NOT NULL,
  `tf65913` int(11) NOT NULL,
  `pc65913` int(11) NOT NULL,
  `pf65913` int(11) NOT NULL,
  `tc65811` int(11) NOT NULL,
  `tf65811` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c3rd`
--

INSERT INTO `c3rd` (`id`, `roll`, `month`, `year`, `tc66431`, `tf66431`, `pc66431`, `pf66431`, `tc66432`, `tf66432`, `pc66432`, `pf66432`, `tc66433`, `tf66433`, `pc66433`, `pf66433`, `pc66434`, `pf66434`, `tc65931`, `tf65931`, `pc65931`, `tc65913`, `tf65913`, `pc65913`, `pf65913`, `tc65811`, `tf65811`) VALUES
(1, 723466, 8, 2, 20, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25),
(2, 723467, 10, 1, 18, 20, 24, 30, 25, 25, 18, 20, 25, 24, 20, 20, 24, 21, 25, 40, 25, 25, 36, 20, 18, 24, 36);

-- --------------------------------------------------------

--
-- Table structure for table `cmt1st`
--

CREATE TABLE `cmt1st` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pc66611` int(11) NOT NULL,
  `pf66611` int(11) NOT NULL,
  `tc66712` int(11) NOT NULL,
  `tf66712` int(11) NOT NULL,
  `pc66712` int(11) NOT NULL,
  `pf66712` int(11) NOT NULL,
  `tc65911` int(11) NOT NULL,
  `tf65911` int(11) NOT NULL,
  `pc65911` int(11) NOT NULL,
  `tc65912` int(11) NOT NULL,
  `tf65912` int(11) NOT NULL,
  `pc65912` int(11) NOT NULL,
  `pf65912` int(11) NOT NULL,
  `tc65712` int(11) NOT NULL,
  `tf65712` int(11) NOT NULL,
  `tc65711` int(11) NOT NULL,
  `tf65711` int(11) NOT NULL,
  `pc65711` int(11) NOT NULL,
  `pc65812` int(11) NOT NULL,
  `pf65812` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmt1st`
--

INSERT INTO `cmt1st` (`id`, `roll`, `month`, `year`, `pc66611`, `pf66611`, `tc66712`, `tf66712`, `pc66712`, `pf66712`, `tc65911`, `tf65911`, `pc65911`, `tc65912`, `tf65912`, `pc65912`, `pf65912`, `tc65712`, `tf65712`, `tc65711`, `tf65711`, `pc65711`, `pc65812`, `pf65812`) VALUES
(1, 723463, 2, 5, 23, 22, 30, 30, 20, 15, 25, 35, 30, 30, 35, 19, 23, 30, 40, 30, 40, 25, 20, 24),
(2, 723464, 3, 10, 23, 22, 25, 25, 20, 15, 25, 30, 26, 30, 35, 19, 23, 28, 33, 30, 34, 25, 20, 24),
(3, 723465, 9, 8, 23, 22, 25, 25, 20, 15, 25, 27, 23, 30, 30, 19, 23, 28, 33, 30, 39, 25, 20, 24);

-- --------------------------------------------------------

--
-- Table structure for table `cmt2nd`
--

CREATE TABLE `cmt2nd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pc66621` int(11) NOT NULL,
  `pf66621` int(11) NOT NULL,
  `pc66612` int(11) NOT NULL,
  `pf66612` int(11) NOT NULL,
  `pc66623` int(11) NOT NULL,
  `pf66623` int(11) NOT NULL,
  `tc66822` int(11) NOT NULL,
  `tf66822` int(11) NOT NULL,
  `pc66822` int(11) NOT NULL,
  `pf66822` int(11) NOT NULL,
  `tc65921` int(11) NOT NULL,
  `tf65921` int(11) NOT NULL,
  `pc65921` int(11) NOT NULL,
  `tc65922` int(11) NOT NULL,
  `tf65922` int(11) NOT NULL,
  `pc65922` int(11) NOT NULL,
  `pf65922` int(11) NOT NULL,
  `tc65722` int(11) NOT NULL,
  `tf65722` int(11) NOT NULL,
  `pc65722` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmt2nd`
--

INSERT INTO `cmt2nd` (`id`, `roll`, `month`, `year`, `pc66621`, `pf66621`, `pc66612`, `pf66612`, `pc66623`, `pf66623`, `tc66822`, `tf66822`, `pc66822`, `pf66822`, `tc65921`, `tf65921`, `pc65921`, `tc65922`, `tf65922`, `pc65922`, `pf65922`, `tc65722`, `tf65722`, `pc65722`) VALUES
(1, 723463, 10, 6, 25, 25, 25, 25, 25, 25, 28, 30, 20, 24, 30, 34, 34, 34, 35, 20, 24, 20, 30, 30),
(2, 723464, 8, 8, 25, 20, 20, 25, 20, 20, 28, 28, 20, 24, 30, 30, 30, 30, 32, 18, 24, 18, 30, 30),
(3, 723465, 9, 4, 25, 25, 20, 25, 20, 25, 28, 25, 22, 25, 28, 28, 28, 34, 35, 18, 24, 18, 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `cmt3rd`
--

CREATE TABLE `cmt3rd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66631` int(11) NOT NULL,
  `tf66631` int(11) NOT NULL,
  `pc66631` int(11) NOT NULL,
  `pf66631` int(11) NOT NULL,
  `pc66632` int(11) NOT NULL,
  `pf66632` int(11) NOT NULL,
  `pc66633` int(11) NOT NULL,
  `pf66633` int(11) NOT NULL,
  `pc66634` int(11) NOT NULL,
  `pf66634` int(11) NOT NULL,
  `tc65931` int(11) NOT NULL,
  `tf65931` int(11) NOT NULL,
  `pc65931` int(11) NOT NULL,
  `tc65913` int(11) NOT NULL,
  `tf65913` int(11) NOT NULL,
  `pc65913` int(11) NOT NULL,
  `pf65913` int(11) NOT NULL,
  `tc65811` int(11) NOT NULL,
  `tf65811` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmt3rd`
--

INSERT INTO `cmt3rd` (`id`, `roll`, `month`, `year`, `tc66631`, `tf66631`, `pc66631`, `pf66631`, `pc66632`, `pf66632`, `pc66633`, `pf66633`, `pc66634`, `pf66634`, `tc65931`, `tf65931`, `pc65931`, `tc65913`, `tf65913`, `pc65913`, `pf65913`, `tc65811`, `tf65811`) VALUES
(1, 723463, 7, 7, 30, 30, 25, 25, 25, 25, 25, 25, 25, 25, 25, 30, 25, 25, 30, 25, 18, 25, 35),
(2, 723464, 11, 12, 30, 30, 20, 20, 20, 20, 20, 20, 20, 20, 20, 30, 20, 20, 30, 20, 18, 20, 35),
(3, 723465, 11, 12, 30, 30, 20, 25, 20, 25, 25, 20, 25, 20, 20, 30, 25, 25, 30, 20, 18, 20, 35);

-- --------------------------------------------------------

--
-- Table structure for table `dep`
--

CREATE TABLE `dep` (
  `id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep`
--

INSERT INTO `dep` (`id`, `dep_name`) VALUES
(1, 'Computer'),
(2, 'Civil'),
(3, 'Mechanical'),
(4, 'Electrical'),
(5, 'Electronics'),
(6, 'Power'),
(7, 'Telecommunication');

-- --------------------------------------------------------

--
-- Table structure for table `et1st`
--

CREATE TABLE `et1st` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66711` int(11) NOT NULL,
  `tf66711` int(11) NOT NULL,
  `pc66711` int(11) NOT NULL,
  `pf66711` int(11) NOT NULL,
  `tc66713` int(11) NOT NULL,
  `tf66713` int(11) NOT NULL,
  `tc65911` int(11) NOT NULL,
  `tf65911` int(11) NOT NULL,
  `pc65911` int(11) NOT NULL,
  `tc66811` int(11) NOT NULL,
  `tf66811` int(11) NOT NULL,
  `pc66811` int(11) NOT NULL,
  `pf66811` int(11) NOT NULL,
  `pc61011` int(11) NOT NULL,
  `pf61011` int(11) NOT NULL,
  `tc65913` int(11) NOT NULL,
  `tf65913` int(11) NOT NULL,
  `pc65913` int(11) NOT NULL,
  `pf65913` int(11) NOT NULL,
  `pc65812` int(11) NOT NULL,
  `pf65812` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `et1st`
--

INSERT INTO `et1st` (`id`, `roll`, `month`, `year`, `tc66711`, `tf66711`, `pc66711`, `pf66711`, `tc66713`, `tf66713`, `tc65911`, `tf65911`, `pc65911`, `tc66811`, `tf66811`, `pc66811`, `pf66811`, `pc61011`, `pf61011`, `tc65913`, `tf65913`, `pc65913`, `pf65913`, `pc65812`, `pf65812`) VALUES
(1, 723470, 3, 4, 25, 36, 25, 25, 25, 25, 25, 36, 25, 25, 25, 25, 25, 25, 25, 25, 36, 25, 25, 25, 25),
(2, 723471, 12, 13, 26, 26, 25, 25, 27, 30, 30, 35, 40, 34, 35, 25, 20, 21, 20, 20, 30, 20, 18, 20, 25);

-- --------------------------------------------------------

--
-- Table structure for table `et2nd`
--

CREATE TABLE `et2nd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66721` int(11) NOT NULL,
  `tf66721` int(11) NOT NULL,
  `pc66721` int(11) NOT NULL,
  `pf66721` int(11) NOT NULL,
  `tc66722` int(11) NOT NULL,
  `tf66722` int(11) NOT NULL,
  `pc66722` int(11) NOT NULL,
  `pf66722` int(11) NOT NULL,
  `tc65711` int(11) NOT NULL,
  `tf65711` int(11) NOT NULL,
  `pc65711` int(11) NOT NULL,
  `tc65712` int(11) NOT NULL,
  `tf65712` int(11) NOT NULL,
  `tc65921` int(11) NOT NULL,
  `tf65921` int(11) NOT NULL,
  `pc65921` int(11) NOT NULL,
  `tc65912` int(11) NOT NULL,
  `tf65912` int(11) NOT NULL,
  `pc65912` int(11) NOT NULL,
  `pf65912` int(11) NOT NULL,
  `pc66611` int(11) NOT NULL,
  `pf66611` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `et2nd`
--

INSERT INTO `et2nd` (`id`, `roll`, `month`, `year`, `tc66721`, `tf66721`, `pc66721`, `pf66721`, `tc66722`, `tf66722`, `pc66722`, `pf66722`, `tc65711`, `tf65711`, `pc65711`, `tc65712`, `tf65712`, `tc65921`, `tf65921`, `pc65921`, `tc65912`, `tf65912`, `pc65912`, `pf65912`, `pc66611`, `pf66611`) VALUES
(1, 723470, 1, 1, 30, 40, 25, 20, 35, 60, 20, 21, 30, 40, 20, 28, 33, 30, 36, 30, 30, 36, 19, 23, 23, 22),
(2, 723471, 6, 9, 31, 36, 21, 25, 30, 34, 20, 21, 28, 36, 20, 30, 40, 34, 50, 28, 24, 80, 25, 23, 20, 22);

-- --------------------------------------------------------

--
-- Table structure for table `et3rd`
--

CREATE TABLE `et3rd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66731` int(11) NOT NULL,
  `tf66731` int(11) NOT NULL,
  `pc66731` int(11) NOT NULL,
  `pf66731` int(11) NOT NULL,
  `tc66732` int(11) NOT NULL,
  `tf66732` int(11) NOT NULL,
  `pc66732` int(11) NOT NULL,
  `pf66732` int(11) NOT NULL,
  `pc66733` int(11) NOT NULL,
  `pf66733` int(11) NOT NULL,
  `tc65722` int(11) NOT NULL,
  `tf65722` int(11) NOT NULL,
  `pc65722` int(11) NOT NULL,
  `tc65931` int(11) NOT NULL,
  `tf65931` int(11) NOT NULL,
  `pc65931` int(11) NOT NULL,
  `tc65922` int(11) NOT NULL,
  `tf65922` int(11) NOT NULL,
  `pc65922` int(11) NOT NULL,
  `pf65922` int(11) NOT NULL,
  `tc65811` int(11) NOT NULL,
  `tf65811` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `et3rd`
--

INSERT INTO `et3rd` (`id`, `roll`, `month`, `year`, `tc66731`, `tf66731`, `pc66731`, `pf66731`, `tc66732`, `tf66732`, `pc66732`, `pf66732`, `pc66733`, `pf66733`, `tc65722`, `tf65722`, `pc65722`, `tc65931`, `tf65931`, `pc65931`, `tc65922`, `tf65922`, `pc65922`, `pf65922`, `tc65811`, `tf65811`) VALUES
(1, 723470, 1, 1, 50, 80, 20, 21, 40, 50, 25, 21, 20, 21, 18, 30, 30, 25, 30, 25, 34, 35, 20, 24, 25, 35),
(2, 723471, 9, 6, 45, 80, 24, 21, 40, 50, 21, 20, 20, 24, 18, 28, 34, 24, 36, 25, 40, 36, 21, 25, 25, 36);

-- --------------------------------------------------------

--
-- Table structure for table `etc1st`
--

CREATE TABLE `etc1st` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66811` int(11) NOT NULL,
  `tf66811` int(11) NOT NULL,
  `pc66811` int(11) NOT NULL,
  `pf66811` int(11) NOT NULL,
  `pc61011` int(11) NOT NULL,
  `pf61011` int(11) NOT NULL,
  `tc65911` int(11) NOT NULL,
  `tf65911` int(11) NOT NULL,
  `pc65911` int(11) NOT NULL,
  `tc66712` int(11) NOT NULL,
  `tf66712` int(11) NOT NULL,
  `pc66712` int(11) NOT NULL,
  `pf66712` int(11) NOT NULL,
  `tc65913` int(11) NOT NULL,
  `tf65913` int(11) NOT NULL,
  `pc65913` int(11) NOT NULL,
  `pf65913` int(11) NOT NULL,
  `tc65811` int(11) NOT NULL,
  `tf65811` int(11) NOT NULL,
  `pc65812` int(11) NOT NULL,
  `pf65812` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etc1st`
--

INSERT INTO `etc1st` (`id`, `roll`, `month`, `year`, `tc66811`, `tf66811`, `pc66811`, `pf66811`, `pc61011`, `pf61011`, `tc65911`, `tf65911`, `pc65911`, `tc66712`, `tf66712`, `pc66712`, `pf66712`, `tc65913`, `tf65913`, `pc65913`, `pf65913`, `tc65811`, `tf65811`, `pc65812`, `pf65812`) VALUES
(1, 723472, 1, 1, 25, 25, 25, 25, 25, 25, 25, 36, 25, 25, 36, 20, 15, 25, 36, 25, 18, 25, 36, 20, 24),
(2, 723473, 10, 8, 34, 35, 25, 20, 40, 45, 25, 25, 26, 30, 30, 20, 24, 20, 30, 20, 25, 29, 25, 25, 24);

-- --------------------------------------------------------

--
-- Table structure for table `etc2nd`
--

CREATE TABLE `etc2nd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66821` int(11) NOT NULL,
  `tf66821` int(11) NOT NULL,
  `pc66821` int(11) NOT NULL,
  `pf66821` int(11) NOT NULL,
  `pc66611` int(11) NOT NULL,
  `pf66611` int(11) NOT NULL,
  `tc65921` int(11) NOT NULL,
  `tf65921` int(11) NOT NULL,
  `pc65921` int(11) NOT NULL,
  `tc65912` int(11) NOT NULL,
  `tf65912` int(11) NOT NULL,
  `pc65912` int(11) NOT NULL,
  `pf65912` int(11) NOT NULL,
  `tc65711` int(11) NOT NULL,
  `tf65711` int(11) NOT NULL,
  `pc65711` int(11) NOT NULL,
  `tc65712` int(11) NOT NULL,
  `tf65712` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etc2nd`
--

INSERT INTO `etc2nd` (`id`, `roll`, `month`, `year`, `tc66821`, `tf66821`, `pc66821`, `pf66821`, `pc66611`, `pf66611`, `tc65921`, `tf65921`, `pc65921`, `tc65912`, `tf65912`, `pc65912`, `pf65912`, `tc65711`, `tf65711`, `pc65711`, `tc65712`, `tf65712`) VALUES
(1, 723472, 1, 1, 30, 40, 20, 21, 23, 22, 30, 36, 30, 30, 36, 19, 23, 30, 40, 25, 28, 33),
(2, 723473, 10, 8, 26, 33, 24, 22, 20, 21, 28, 34, 34, 24, 26, 25, 25, 28, 34, 20, 30, 40);

-- --------------------------------------------------------

--
-- Table structure for table `etc3rd`
--

CREATE TABLE `etc3rd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc66831` int(11) NOT NULL,
  `tf66831` int(11) NOT NULL,
  `pc66831` int(11) NOT NULL,
  `pf66831` int(11) NOT NULL,
  `pc66832` int(11) NOT NULL,
  `pf66832` int(11) NOT NULL,
  `tc66833` int(11) NOT NULL,
  `tf66833` int(11) NOT NULL,
  `pc66833` int(11) NOT NULL,
  `pf66833` int(11) NOT NULL,
  `tc66835` int(11) NOT NULL,
  `tf66835` int(11) NOT NULL,
  `pc66835` int(11) NOT NULL,
  `pf66835` int(11) NOT NULL,
  `tc65931` int(11) NOT NULL,
  `tf65931` int(11) NOT NULL,
  `pc65931` int(11) NOT NULL,
  `tc65922` int(11) NOT NULL,
  `tf65922` int(11) NOT NULL,
  `pc65922` int(11) NOT NULL,
  `pf65922` int(11) NOT NULL,
  `tc65722` int(11) NOT NULL,
  `tf65722` int(11) NOT NULL,
  `pc65722` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etc3rd`
--

INSERT INTO `etc3rd` (`id`, `roll`, `month`, `year`, `tc66831`, `tf66831`, `pc66831`, `pf66831`, `pc66832`, `pf66832`, `tc66833`, `tf66833`, `pc66833`, `pf66833`, `tc66835`, `tf66835`, `pc66835`, `pf66835`, `tc65931`, `tf65931`, `pc65931`, `tc65922`, `tf65922`, `pc65922`, `pf65922`, `tc65722`, `tf65722`, `pc65722`) VALUES
(1, 723472, 1, 1, 50, 80, 21, 25, 30, 45, 30, 55, 21, 19, 28, 51, 20, 25, 25, 30, 25, 34, 35, 20, 24, 18, 30, 30),
(2, 723473, 11, 8, 45, 75, 20, 22, 25, 30, 25, 50, 18, 24, 30, 50, 19, 20, 24, 36, 20, 30, 36, 18, 20, 15, 28, 26);

-- --------------------------------------------------------

--
-- Table structure for table `m1st`
--

CREATE TABLE `m1st` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pc61011` int(11) NOT NULL,
  `pf61011` int(11) NOT NULL,
  `tc67013` int(11) NOT NULL,
  `tf67013` int(11) NOT NULL,
  `tc66712` int(11) NOT NULL,
  `tf66712` int(11) NOT NULL,
  `pc66712` int(11) NOT NULL,
  `pf66712` int(11) NOT NULL,
  `pc65812` int(11) NOT NULL,
  `pf65812` int(11) NOT NULL,
  `tc65911` int(11) NOT NULL,
  `tf65911` int(11) NOT NULL,
  `pc65911` int(11) NOT NULL,
  `tc65711` int(11) NOT NULL,
  `tf65711` int(11) NOT NULL,
  `pc65711` int(11) NOT NULL,
  `tc65913` int(11) NOT NULL,
  `tf65913` int(11) NOT NULL,
  `pc65913` int(11) NOT NULL,
  `pf65913` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m1st`
--

INSERT INTO `m1st` (`id`, `roll`, `month`, `year`, `pc61011`, `pf61011`, `tc67013`, `tf67013`, `tc66712`, `tf66712`, `pc66712`, `pf66712`, `pc65812`, `pf65812`, `tc65911`, `tf65911`, `pc65911`, `tc65711`, `tf65711`, `pc65711`, `tc65913`, `tf65913`, `pc65913`, `pf65913`) VALUES
(1, 723468, 1, 1, 25, 25, 30, 50, 25, 36, 24, 24, 20, 24, 25, 36, 25, 30, 40, 25, 25, 36, 25, 18),
(2, 723469, 10, 9, 40, 45, 28, 55, 30, 30, 21, 24, 25, 25, 28, 25, 26, 28, 34, 20, 20, 30, 20, 25);

-- --------------------------------------------------------

--
-- Table structure for table `m2nd`
--

CREATE TABLE `m2nd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pc67021` int(11) NOT NULL,
  `pf67021` int(11) NOT NULL,
  `tc67022` int(11) NOT NULL,
  `tf67022` int(11) NOT NULL,
  `pc67022` int(11) NOT NULL,
  `pf67022` int(11) NOT NULL,
  `pc67023` int(11) NOT NULL,
  `pf67023` int(11) NOT NULL,
  `tc65712` int(11) NOT NULL,
  `tf65712` int(11) NOT NULL,
  `tc65921` int(11) NOT NULL,
  `tf65921` int(11) NOT NULL,
  `pc65921` int(11) NOT NULL,
  `tc65912` int(11) NOT NULL,
  `tf65912` int(11) NOT NULL,
  `pc65912` int(11) NOT NULL,
  `pf65912` int(11) NOT NULL,
  `tc65811` int(11) NOT NULL,
  `tf65811` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m2nd`
--

INSERT INTO `m2nd` (`id`, `roll`, `month`, `year`, `pc67021`, `pf67021`, `tc67022`, `tf67022`, `pc67022`, `pf67022`, `pc67023`, `pf67023`, `tc65712`, `tf65712`, `tc65921`, `tf65921`, `pc65921`, `tc65912`, `tf65912`, `pc65912`, `pf65912`, `tc65811`, `tf65811`) VALUES
(1, 723468, 1, 1, 40, 40, 15, 25, 40, 35, 45, 30, 28, 33, 30, 28, 30, 30, 35, 19, 23, 25, 35),
(3, 723469, 12, 10, 38, 38, 20, 30, 35, 30, 40, 45, 30, 40, 28, 36, 34, 24, 36, 25, 25, 24, 36);

-- --------------------------------------------------------

--
-- Table structure for table `m3rd`
--

CREATE TABLE `m3rd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc67031` int(11) NOT NULL,
  `tf67031` int(11) NOT NULL,
  `pc67031` int(11) NOT NULL,
  `pf67031` int(11) NOT NULL,
  `tc67032` int(11) NOT NULL,
  `tf67032` int(11) NOT NULL,
  `pc67032` int(11) NOT NULL,
  `pf67032` int(11) NOT NULL,
  `tc66822` int(11) NOT NULL,
  `tf66822` int(11) NOT NULL,
  `pc66822` int(11) NOT NULL,
  `pf66822` int(11) NOT NULL,
  `tc65722` int(11) NOT NULL,
  `tf65722` int(11) NOT NULL,
  `pc65722` int(11) NOT NULL,
  `tc65931` int(11) NOT NULL,
  `tf65931` int(11) NOT NULL,
  `pc65931` int(11) NOT NULL,
  `tc65922` int(11) NOT NULL,
  `tf65922` int(11) NOT NULL,
  `pc65922` int(11) NOT NULL,
  `pf65922` int(11) NOT NULL,
  `pc66611` int(11) NOT NULL,
  `pf66611` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m3rd`
--

INSERT INTO `m3rd` (`id`, `roll`, `month`, `year`, `tc67031`, `tf67031`, `pc67031`, `pf67031`, `tc67032`, `tf67032`, `pc67032`, `pf67032`, `tc66822`, `tf66822`, `pc66822`, `pf66822`, `tc65722`, `tf65722`, `pc65722`, `tc65931`, `tf65931`, `pc65931`, `tc65922`, `tf65922`, `pc65922`, `pf65922`, `pc66611`, `pf66611`) VALUES
(1, 723468, 1, 1, 20, 30, 45, 40, 30, 50, 20, 24, 28, 30, 20, 24, 18, 30, 30, 25, 30, 25, 34, 35, 20, 24, 23, 22),
(2, 723469, 12, 3, 15, 25, 40, 50, 38, 54, 24, 21, 25, 28, 22, 19, 15, 28, 26, 24, 36, 20, 30, 36, 18, 20, 20, 21);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `month_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `month_name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `pw1st`
--

CREATE TABLE `pw1st` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc67111` int(11) NOT NULL,
  `tf67111` int(11) NOT NULL,
  `pc67111` int(11) NOT NULL,
  `pf67111` int(11) NOT NULL,
  `pc61011` int(11) NOT NULL,
  `pf61011` int(11) NOT NULL,
  `tc65911` int(11) NOT NULL,
  `tf65911` int(11) NOT NULL,
  `pc65911` int(11) NOT NULL,
  `tc65912` int(11) NOT NULL,
  `tf65912` int(11) NOT NULL,
  `pc65912` int(11) NOT NULL,
  `pf65912` int(11) NOT NULL,
  `tc65712` int(11) NOT NULL,
  `tf65712` int(11) NOT NULL,
  `tc65711` int(11) NOT NULL,
  `tf65711` int(11) NOT NULL,
  `pc65711` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pw1st`
--

INSERT INTO `pw1st` (`id`, `roll`, `month`, `year`, `tc67111`, `tf67111`, `pc67111`, `pf67111`, `pc61011`, `pf61011`, `tc65911`, `tf65911`, `pc65911`, `tc65912`, `tf65912`, `pc65912`, `pf65912`, `tc65712`, `tf65712`, `tc65711`, `tf65711`, `pc65711`) VALUES
(1, 723474, 1, 1, 50, 88, 20, 24, 25, 25, 25, 36, 25, 30, 36, 19, 23, 28, 33, 30, 40, 25),
(2, 723475, 5, 2, 45, 80, 24, 25, 40, 45, 28, 36, 26, 24, 36, 25, 25, 30, 40, 28, 36, 20);

-- --------------------------------------------------------

--
-- Table structure for table `pw2nd`
--

CREATE TABLE `pw2nd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc67121` int(11) NOT NULL,
  `tf67121` int(11) NOT NULL,
  `pc67121` int(11) NOT NULL,
  `pf67121` int(11) NOT NULL,
  `tc66711` int(11) NOT NULL,
  `tf66711` int(11) NOT NULL,
  `pc66711` int(11) NOT NULL,
  `pf66711` int(11) NOT NULL,
  `pc65812` int(11) NOT NULL,
  `pf65812` int(11) NOT NULL,
  `tc65921` int(11) NOT NULL,
  `tf65921` int(11) NOT NULL,
  `pc65921` int(11) NOT NULL,
  `tc65922` int(11) NOT NULL,
  `tf65922` int(11) NOT NULL,
  `pc65922` int(11) NOT NULL,
  `pf65922` int(11) NOT NULL,
  `tc65722` int(11) NOT NULL,
  `tf65722` int(11) NOT NULL,
  `pc65722` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pw2nd`
--

INSERT INTO `pw2nd` (`id`, `roll`, `month`, `year`, `tc67121`, `tf67121`, `pc67121`, `pf67121`, `tc66711`, `tf66711`, `pc66711`, `pf66711`, `pc65812`, `pf65812`, `tc65921`, `tf65921`, `pc65921`, `tc65922`, `tf65922`, `pc65922`, `pf65922`, `tc65722`, `tf65722`, `pc65722`) VALUES
(1, 723474, 1, 1, 40, 55, 25, 21, 25, 36, 25, 25, 20, 24, 30, 36, 30, 34, 36, 20, 24, 18, 30, 30),
(2, 723475, 8, 7, 34, 50, 20, 18, 26, 26, 21, 20, 25, 25, 28, 34, 34, 30, 32, 18, 20, 15, 28, 26);

-- --------------------------------------------------------

--
-- Table structure for table `pw3rd`
--

CREATE TABLE `pw3rd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc67131` int(11) NOT NULL,
  `tf67131` int(11) NOT NULL,
  `pc67131` int(11) NOT NULL,
  `pf67131` int(11) NOT NULL,
  `tc67033` int(11) NOT NULL,
  `tf67033` int(11) NOT NULL,
  `pc67033` int(11) NOT NULL,
  `pf67033` int(11) NOT NULL,
  `pc66611` int(11) NOT NULL,
  `pf66611` int(11) NOT NULL,
  `tc66822` int(11) NOT NULL,
  `tf66822` int(11) NOT NULL,
  `pc66822` int(11) NOT NULL,
  `pf66822` int(11) NOT NULL,
  `tc65931` int(11) NOT NULL,
  `tf65931` int(11) NOT NULL,
  `pc65931` int(11) NOT NULL,
  `tc65913` int(11) NOT NULL,
  `tf65913` int(11) NOT NULL,
  `pc65913` int(11) NOT NULL,
  `pf65913` int(11) NOT NULL,
  `tc65811` int(11) NOT NULL,
  `tf65811` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pw3rd`
--

INSERT INTO `pw3rd` (`id`, `roll`, `month`, `year`, `tc67131`, `tf67131`, `pc67131`, `pf67131`, `tc67033`, `tf67033`, `pc67033`, `pf67033`, `pc66611`, `pf66611`, `tc66822`, `tf66822`, `pc66822`, `pf66822`, `tc65931`, `tf65931`, `pc65931`, `tc65913`, `tf65913`, `pc65913`, `pf65913`, `tc65811`, `tf65811`) VALUES
(0, 723474, 1, 1, 50, 80, 20, 24, 20, 30, 24, 20, 23, 22, 28, 30, 20, 24, 25, 30, 25, 25, 25, 25, 18, 25, 35),
(0, 723475, 10, 9, 55, 75, 21, 20, 15, 25, 21, 19, 20, 21, 25, 28, 22, 19, 24, 36, 20, 24, 36, 20, 25, 24, 36);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `technology` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathers_name` varchar(100) NOT NULL,
  `mothers_name` varchar(100) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `registration` bigint(20) NOT NULL,
  `student_session` varchar(100) NOT NULL,
  `phone_number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `technology`, `name`, `fathers_name`, `mothers_name`, `roll`, `registration`, `student_session`, `phone_number`) VALUES
(1, 1, 'Nahidujjaman Hridoy', 'Asadujjaman', 'Afroza Khatun', 723463, 651673, '2013-14', 8801768098882),
(2, 1, 'Gm', 'Gms Dad', 'Gms Mom', 723464, 651674, '2013-14', 88452424524),
(3, 1, 'Amit', 'Amits dad', 'amits mom', 723465, 651675, '2013-14', 88452424524),
(5, 2, 'Borhan', 'Borhans dad', 'borhans mom', 723466, 651676, '2013-14', 88452424524),
(6, 2, 'civil', 'civils dad ', 'civils mom', 723467, 651677, '2013-14', 88452424524),
(7, 3, 'Naim', 'naims dad ', 'naims mom', 723468, 651678, '2013-14', 88452424524),
(8, 3, 'hafiz', 'hafizsdad', 'hafizs mom', 723469, 651679, '2013-14', 88452424524),
(9, 4, 'rayhan', 'rayhans dad', 'rayhans mim', 723470, 651680, '2013-14', 88452424524),
(10, 4, 'et', 'ets dad', 'ets mom', 723471, 651681, '2013-14', 8801768098882),
(11, 5, 'san', 'sansdad', 'sans mom', 723472, 651682, '2013-14', 88452424524),
(12, 5, 'etc', 'etc dad ', 'etc mom ', 723473, 651683, '2013-14', 88452424524),
(13, 6, 'pw1', 'pw1 dad ', 'pw1 mom', 723474, 651684, '2013-14', 88452424524),
(14, 6, 'pw2 ', 'pw2 dad', 'pw2 mom', 723475, 651685, '2013-14', 88452424524),
(15, 7, 'rezwan ', 'rezwans dad', 'rezwans mom', 723476, 651686, '2013-14', 88452424524),
(16, 7, 'tct', 'tctdad', 'tctmom', 723477, 651687, '2013-14', 88452424524);

-- --------------------------------------------------------

--
-- Table structure for table `tct1st`
--

CREATE TABLE `tct1st` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc69411` int(11) NOT NULL,
  `tf69411` int(11) NOT NULL,
  `pc69411` int(11) NOT NULL,
  `pf69411` int(11) NOT NULL,
  `tc66712` int(11) NOT NULL,
  `tf66712` int(11) NOT NULL,
  `pc66712` int(11) NOT NULL,
  `pf66712` int(11) NOT NULL,
  `tc65911` int(11) NOT NULL,
  `tf65911` int(11) NOT NULL,
  `pc65911` int(11) NOT NULL,
  `tc65913` int(11) NOT NULL,
  `tf65913` int(11) NOT NULL,
  `pc65913` int(11) NOT NULL,
  `pf65913` int(11) NOT NULL,
  `tc65811` int(11) NOT NULL,
  `tf65811` int(11) NOT NULL,
  `pc65812` int(11) NOT NULL,
  `pf65812` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tct1st`
--

INSERT INTO `tct1st` (`id`, `roll`, `month`, `year`, `tc69411`, `tf69411`, `pc69411`, `pf69411`, `tc66712`, `tf66712`, `pc66712`, `pf66712`, `tc65911`, `tf65911`, `pc65911`, `tc65913`, `tf65913`, `pc65913`, `pf65913`, `tc65811`, `tf65811`, `pc65812`, `pf65812`) VALUES
(1, 723476, 1, 1, 50, 80, 25, 24, 25, 25, 20, 15, 25, 35, 25, 25, 25, 25, 18, 25, 35, 20, 24),
(2, 723477, 10, 9, 45, 74, 21, 25, 30, 36, 21, 24, 28, 36, 26, 24, 36, 20, 25, 24, 36, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `tct2nd`
--

CREATE TABLE `tct2nd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc69421` int(11) NOT NULL,
  `tf69421` int(11) NOT NULL,
  `pc69421` int(11) NOT NULL,
  `pf69421` int(11) NOT NULL,
  `pc66611` int(11) NOT NULL,
  `pf66611` int(11) NOT NULL,
  `tc65921` int(11) NOT NULL,
  `tf65921` int(11) NOT NULL,
  `pc65921` int(11) NOT NULL,
  `tc65912` int(11) NOT NULL,
  `tf65912` int(11) NOT NULL,
  `pc65912` int(11) NOT NULL,
  `pf65912` int(11) NOT NULL,
  `tc65712` int(11) NOT NULL,
  `tf65712` int(11) NOT NULL,
  `tc65711` int(11) NOT NULL,
  `tf65711` int(11) NOT NULL,
  `pc65711` int(11) NOT NULL,
  `pc61011` int(11) NOT NULL,
  `pf61011` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tct2nd`
--

INSERT INTO `tct2nd` (`id`, `roll`, `month`, `year`, `tc69421`, `tf69421`, `pc69421`, `pf69421`, `pc66611`, `pf66611`, `tc65921`, `tf65921`, `pc65921`, `tc65912`, `tf65912`, `pc65912`, `pf65912`, `tc65712`, `tf65712`, `tc65711`, `tf65711`, `pc65711`, `pc61011`, `pf61011`) VALUES
(1, 723476, 1, 1, 55, 88, 22, 23, 23, 22, 30, 36, 30, 30, 36, 19, 23, 28, 33, 30, 40, 25, 25, 25),
(2, 723477, 8, 7, 50, 80, 21, 20, 20, 21, 28, 34, 34, 24, 26, 25, 25, 30, 40, 28, 34, 20, 40, 45);

-- --------------------------------------------------------

--
-- Table structure for table `tct3rd`
--

CREATE TABLE `tct3rd` (
  `id` int(11) NOT NULL,
  `roll` bigint(20) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `tc69431` int(11) NOT NULL,
  `tf69431` int(11) NOT NULL,
  `pc69431` int(11) NOT NULL,
  `pf69431` int(11) NOT NULL,
  `tc69432` int(11) NOT NULL,
  `tf69432` int(11) NOT NULL,
  `pc69432` int(11) NOT NULL,
  `pf69432` int(11) NOT NULL,
  `pc66621` int(11) NOT NULL,
  `pf66621` int(11) NOT NULL,
  `tc66823` int(11) NOT NULL,
  `tf66823` int(11) NOT NULL,
  `pc66823` int(11) NOT NULL,
  `pf66823` int(11) NOT NULL,
  `tc65931` int(11) NOT NULL,
  `tf65931` int(11) NOT NULL,
  `pc65931` int(11) NOT NULL,
  `tc65922` int(11) NOT NULL,
  `tf65922` int(11) NOT NULL,
  `pc65922` int(11) NOT NULL,
  `pf65922` int(11) NOT NULL,
  `tc65722` int(11) NOT NULL,
  `tf65722` int(11) NOT NULL,
  `pc65722` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tct3rd`
--

INSERT INTO `tct3rd` (`id`, `roll`, `month`, `year`, `tc69431`, `tf69431`, `pc69431`, `pf69431`, `tc69432`, `tf69432`, `pc69432`, `pf69432`, `pc66621`, `pf66621`, `tc66823`, `tf66823`, `pc66823`, `pf66823`, `tc65931`, `tf65931`, `pc65931`, `tc65922`, `tf65922`, `pc65922`, `pf65922`, `tc65722`, `tf65722`, `pc65722`) VALUES
(1, 723476, 1, 1, 20, 30, 25, 25, 20, 30, 25, 25, 25, 25, 60, 90, 25, 25, 25, 30, 25, 34, 35, 20, 24, 18, 30, 30),
(2, 723477, 11, 8, 15, 25, 20, 21, 15, 25, 20, 21, 21, 22, 55, 88, 22, 21, 24, 36, 20, 30, 36, 18, 20, 15, 28, 26);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `year_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year_name`) VALUES
(1, 2017),
(2, 2018),
(3, 2019),
(4, 2020),
(5, 2021),
(6, 2022),
(7, 2023),
(8, 2024),
(9, 2025),
(10, 2026),
(11, 2027),
(12, 2028),
(13, 2029),
(14, 2030);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c1st`
--
ALTER TABLE `c1st`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `c2nd`
--
ALTER TABLE `c2nd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `c3rd`
--
ALTER TABLE `c3rd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `cmt1st`
--
ALTER TABLE `cmt1st`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `cmt2nd`
--
ALTER TABLE `cmt2nd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `cmt3rd`
--
ALTER TABLE `cmt3rd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `et1st`
--
ALTER TABLE `et1st`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `year` (`year`),
  ADD KEY `month` (`month`);

--
-- Indexes for table `et2nd`
--
ALTER TABLE `et2nd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `et3rd`
--
ALTER TABLE `et3rd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `etc1st`
--
ALTER TABLE `etc1st`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `etc2nd`
--
ALTER TABLE `etc2nd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `etc3rd`
--
ALTER TABLE `etc3rd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `m1st`
--
ALTER TABLE `m1st`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `m2nd`
--
ALTER TABLE `m2nd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `m3rd`
--
ALTER TABLE `m3rd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pw1st`
--
ALTER TABLE `pw1st`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `pw2nd`
--
ALTER TABLE `pw2nd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `pw3rd`
--
ALTER TABLE `pw3rd`
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD UNIQUE KEY `registration` (`registration`),
  ADD KEY `technology` (`technology`);

--
-- Indexes for table `tct1st`
--
ALTER TABLE `tct1st`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `tct2nd`
--
ALTER TABLE `tct2nd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `tct3rd`
--
ALTER TABLE `tct3rd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`),
  ADD KEY `month` (`month`),
  ADD KEY `year` (`year`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c1st`
--
ALTER TABLE `c1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c2nd`
--
ALTER TABLE `c2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `c3rd`
--
ALTER TABLE `c3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cmt1st`
--
ALTER TABLE `cmt1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cmt2nd`
--
ALTER TABLE `cmt2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cmt3rd`
--
ALTER TABLE `cmt3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dep`
--
ALTER TABLE `dep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `et1st`
--
ALTER TABLE `et1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `et2nd`
--
ALTER TABLE `et2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `et3rd`
--
ALTER TABLE `et3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etc1st`
--
ALTER TABLE `etc1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etc2nd`
--
ALTER TABLE `etc2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `etc3rd`
--
ALTER TABLE `etc3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m1st`
--
ALTER TABLE `m1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m2nd`
--
ALTER TABLE `m2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m3rd`
--
ALTER TABLE `m3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pw1st`
--
ALTER TABLE `pw1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pw2nd`
--
ALTER TABLE `pw2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tct1st`
--
ALTER TABLE `tct1st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tct2nd`
--
ALTER TABLE `tct2nd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tct3rd`
--
ALTER TABLE `tct3rd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `c1st`
--
ALTER TABLE `c1st`
  ADD CONSTRAINT `c1st_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `c1st_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `c2nd`
--
ALTER TABLE `c2nd`
  ADD CONSTRAINT `c2nd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `c2nd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `c3rd`
--
ALTER TABLE `c3rd`
  ADD CONSTRAINT `c3rd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `c3rd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `cmt1st`
--
ALTER TABLE `cmt1st`
  ADD CONSTRAINT `cmt1st_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `cmt1st_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `cmt2nd`
--
ALTER TABLE `cmt2nd`
  ADD CONSTRAINT `cmt2nd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `cmt2nd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `cmt3rd`
--
ALTER TABLE `cmt3rd`
  ADD CONSTRAINT `cmt3rd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `cmt3rd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `et1st`
--
ALTER TABLE `et1st`
  ADD CONSTRAINT `et1st_ibfk_1` FOREIGN KEY (`year`) REFERENCES `year` (`id`),
  ADD CONSTRAINT `et1st_ibfk_2` FOREIGN KEY (`month`) REFERENCES `month` (`id`);

--
-- Constraints for table `et2nd`
--
ALTER TABLE `et2nd`
  ADD CONSTRAINT `et2nd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `et2nd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `et3rd`
--
ALTER TABLE `et3rd`
  ADD CONSTRAINT `et3rd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `et3rd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `etc1st`
--
ALTER TABLE `etc1st`
  ADD CONSTRAINT `etc1st_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `etc1st_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `etc2nd`
--
ALTER TABLE `etc2nd`
  ADD CONSTRAINT `etc2nd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `etc2nd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `etc3rd`
--
ALTER TABLE `etc3rd`
  ADD CONSTRAINT `etc3rd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `etc3rd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `m1st`
--
ALTER TABLE `m1st`
  ADD CONSTRAINT `m1st_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `m1st_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `m2nd`
--
ALTER TABLE `m2nd`
  ADD CONSTRAINT `m2nd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `m2nd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `m3rd`
--
ALTER TABLE `m3rd`
  ADD CONSTRAINT `m3rd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `m3rd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `pw1st`
--
ALTER TABLE `pw1st`
  ADD CONSTRAINT `pw1st_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `pw1st_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `pw2nd`
--
ALTER TABLE `pw2nd`
  ADD CONSTRAINT `pw2nd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `pw2nd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `pw3rd`
--
ALTER TABLE `pw3rd`
  ADD CONSTRAINT `pw3rd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `pw3rd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`technology`) REFERENCES `dep` (`id`);

--
-- Constraints for table `tct1st`
--
ALTER TABLE `tct1st`
  ADD CONSTRAINT `tct1st_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `tct1st_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `tct2nd`
--
ALTER TABLE `tct2nd`
  ADD CONSTRAINT `tct2nd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `tct2nd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);

--
-- Constraints for table `tct3rd`
--
ALTER TABLE `tct3rd`
  ADD CONSTRAINT `tct3rd_ibfk_1` FOREIGN KEY (`month`) REFERENCES `month` (`id`),
  ADD CONSTRAINT `tct3rd_ibfk_2` FOREIGN KEY (`year`) REFERENCES `year` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
