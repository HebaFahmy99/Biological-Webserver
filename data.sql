-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2023 at 11:26 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userdata`
--
CREATE DATABASE IF NOT EXISTS `userdata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `userdata`;

-- --------------------------------------------------------

--
-- Table structure for table `genes`
--

CREATE TABLE IF NOT EXISTS `genes` (
  `GeneId` int(11) NOT NULL AUTO_INCREMENT,
  `GeneSymbol` varchar(20) NOT NULL,
  `GeneType` varchar(15) NOT NULL,
  `GeneDescription` varchar(500) DEFAULT NULL,
  `GeneSequence` varchar(600) NOT NULL,
  PRIMARY KEY (`GeneId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `genes`
--

INSERT INTO `genes` (`GeneId`, `GeneSymbol`, `GeneType`, `GeneDescription`, `GeneSequence`) VALUES
(1, 'PLA2G2A ', 'protein', 'The protein encoded by this gene is a member of the phospholipase A2 family (PLA2). PLA2s constitute a diverse family of enzymes with respect to sequence, function, localization, and divalent cation requirements.\r\n', 'AGTGTCAGCCCGAAGGCTGAAGGAAAAAGAGCAACAGATCCAGGGAGCATTCACCTGCCCTGTCTCCAAA\r\nCAGGTGAGGATGGGGAATAAAGTGAAGGCAGTGCTTTGGTGGGAACTTCAAGGATAGCCTCTGGCTTTTT\r\nCCAGGTTTAGAAGCTCATATGAGACAGGGGTGGAGGAAAAGAAGAAAGAAGAATAAGAAGAGAAAGTTGA'),
(2, 'TLR4', 'protein', 'The protein encoded by this gene is a member of the Toll-like receptor (TLR) family which plays a fundamental role in pathogen recognition and activation of innate immunity\r\n', 'AGACGGTGATAGCGAGCCACGCATTCACAGGGCCACTGCTGCTCACAGAAGCAGTGAGGATGATGCCAGG\r\nATGATGTCTGCCTCGCGCCTGGCTGGGACTCTGATCCCAGCCATGGCCTTCCTCTCCTGCGTGAGACCAG\r\nAAAGCTGGGAGCCCTGCGTGGAGGTATGTGGCTGGAGTCAGCTCCTCTGAACTTTCCCTCACTTCTGCCC '),
(3, 'FOXP3', 'protein', 'The protein encoded by this gene is a member of the forkhead/winged-helix family of transcriptional regulators. Defects in this gene are the cause of immunodeficiency polyendocrinopathy, enteropathy, X-linked syndrome (IPEX), also known as X-linked autoimmunity-immunodeficiency syndrome.\r\n', 'AGTTTCCCACAAGCCAGGCTGATCCTTTTCTGTCAGTCCACTTCACCAAGGTGAGTGTCCCTGCTCTCCC\r\nCTACCAGATGTGGGCCCCATTGGAGGAGATGGCAGGGAGGTAGGCACGGCGGGGGGGTCAGGGGCCCTCT\r\nGGTACAGTGGGATGTACCCAGCTACCGTGATTCCAGCCAGGTAAGGTCTTTAAAAAAATAATAGAATAAA'),
(4, 'SPP1', 'protein', 'The protein encoded by this gene is involved in the attachment of osteoclasts to the mineralized bone matrix. The encoded protein is secreted and binds hydroxyapatite with high affinity. \r\n', 'AGCAGCAGGAGGAGGCAGAGCACAGCATCGTCGGGACCAGACTCGTCTCAGGCCAGTTGCAGCCTTCTCA\r\nGCCAAACGCCGACCAAGGTACAGCTTCAGTTTGCTACTGGGTTGTGCATTCAGCTGAATTTCATGGGGAA\r\nGTCCAAATTCTAAGGAAAAATATTTTTAATTGTAATGCTGTTAAACAGACTTAAATTTTCTAGCCTTTTT\r\nAATAAGCAGATTAGATACATTGCAGGTCTCCTGGAACAAAGGTGTCTAGATATTTTGAATGCCAATCAAA\r\nTTTAAAACTTAAAAATACTTCCACTGGGTCCTCAAAAGAACGGAAACCACCGATGCTAATCAGAAAATAG\r\nTAAAATTAAATTCCCCTTTGGAATAATTATACCTATATAATTTTCAGTGGGTGACTGTGCAGGAATTTAA\r\nAAGAAAAGGGATCTTTTATGCTAATTAAACCAATTACAATGCTATTTTTTAAATGATGTATCTCACTTTT\r\nAAGGGGAAGAAAACCCTTTCTGAATATGCCACTGCTAAATTTAGCTGTTAAAATATTCACCAAGATACCT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FName` varchar(15) NOT NULL,
  `LName` varchar(15) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `FName`, `LName`, `Gender`, `Email`, `PhoneNumber`, `Password`) VALUES
(1, 'Heba', 'Fahmy', 'female', 'heba@gmail.com', '0123456789', 'heba123'),
(2, 'Joya', 'Gamal', 'female', 'joya@yahoo.com', '01223355677', 'joya123'),
(5, 'Rana', 'Mohamed', 'Female', 'rana@gmail.com', '123123', 'usbw'),
(7, 'Hana', 'Fahmy', 'Female', 'hana@yahoo.com', '0122211111', 'hana123'),
(11, 'Sahar', 'mahmoud', 'Female', 'sahar@yahoo.com', '121318913', 'sahar123'),
(13, 'Ahmed', 'Mohamed', 'Male', 'ahmed@yahoo.com', '01229373635', 'ahmedahmed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
