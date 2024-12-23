-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 07:23 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `king`
--

CREATE TABLE `king` (
  `id` int(11) NOT NULL,
  `username` varchar(179) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `king`
--

INSERT INTO `king` (`id`, `username`, `rname`, `message`) VALUES
(6, 'asdf@gmail.com', 'rty@gmail.com', 'KN4nBdQh+IydQaCd96GqV1HuYhjOfzsdqomUNQRJ/LU='),
(9, 'asdf@gmail.com', 'lkj@gmail.com', 'MP6Zbp2z8zSYzeqP771x9HOku8LUIZhDmU6xwMMiZOQ='),
(11, 'rty@gmail.com', 'asdf@gmail.com', '3VXdwt4Hg7RXmP+Bxk7XcFNTHmNGlOpzxSVH0P6R8ig='),
(12, 'lkj@gmail.com', 'rty@gmail.com', 'W/VuGmdqgIGpQaS0J+Owugo/lkPMWOjrNv3QS0iJtiA='),
(13, 'asdf@gmail.com', 'lkj@gmail.com', '2j9m+CnBSwTak/nyNijJ4DuxfgieTBZOKdtCZc+0QFo='),
(14, 'asdf@gmail.com', 'lkj@gmail.com', 'zGrUgcIu3pCk2ToVn9NX84aJ29IOvkt6rt2Gf9+3rwE=');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(190) NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(276) NOT NULL,
  `password` varchar(276) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `number`, `email`, `password`) VALUES
('abc', 742, 'abc@gmail.com', '$2y$10$kPJBRqLTRq4.Cw/soWEMc.joPnCkEPLhiWzMPPTM.AX8igM8hjeYe'),
('asdf', 2341, 'asdf@gmail.com', '$2y$10$mhBOAmmf2tnGcHuTNDJSy.wEXnjmBUie59CtxgwouPdUQuRKbMk56'),
('mkdir', 4567, 'mkdir@gmail.com', '$2y$10$bTr9nff8fgRkrv51erntG.MaFqo2.2lkz9cpfNdXXmpV7uP2X8lcC'),
('lkj', 5432, 'lkj@gmail.com', '$2y$10$kqztinXr3Ur7fwC5lsLpK.ouDePZIvCVSVxrNAQdnDCTlOJmqC6qi'),
('rty', 9808, 'rty@gmail.com', '$2y$10$bOYdTs0UWaoHMzL.R.WuIetHYtu2WFZFcfLNy/NXLAHdR8aVTG28q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `king`
--
ALTER TABLE `king`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `king`
--
ALTER TABLE `king`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
