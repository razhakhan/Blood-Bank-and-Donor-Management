-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 11:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donorsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `nod` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `firstname`, `lastname`, `email`, `number`, `password`, `dob`, `gender`, `bloodgrp`, `state`, `city`, `address`, `nod`) VALUES
(18, 'Gal ', 'Gadot', 'razhagarrix@gmail.com', 7032786834, 'Truth@123', '21-01-2002', 'f', 'B+', 'Andhra Pradesh', ' Visakhapatnam ', 'Athens', 0),
(19, 'Alekh Prasad', 'Sahu', 'sahu123@gmail.com', 8213564299, 'Sahu@123', '01-06-2002', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '1-2-121,Rajiv Nagar, NAD, Visakhapatnam, A.P.', 0),
(20, 'Dinesh Kumar', 'Patnana', 'dinesh123@gmaiil.com', 9676000339, 'Dinuu@123', '22-04-2001', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '1-5-121,Rajiv Nagar, Mdp, Visakhapatnam, A.P.', 0),
(21, 'Karthik', 'Beesetti', 'karthik123@gmail.com', 9823472732, 'Karthik@123', '02-12-2001', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '5-2-121,krishna Nagar, NAD, Visakhapatnam, A.P.', 0),
(22, 'Krishna Rao', 'Teripalli', 'krishna123@gmail.com', 7632356731, 'Krishna@123', '03-10-2001', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '1-8-61,Indira Nagar, NAD, Visakhapatnam, A.P.', 0),
(23, 'Mohan', 'Sahu', 'mohan123@gmail.com', 8236283623, 'Mohan@123', '01-01-2003', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '8-3-151,Indira Colony, MVP, Visakhapatnam, A.P.', 0),
(24, 'Santosh', 'Vardhan', 'santosh123@gmail.com', 7323289733, 'Santosh@123', '03-08-2003', 'm', 'A+', 'Andhra Pradesh', ' Hyderabad ', '3-33/28, Gandhi Nagar, Nampally, Hyderabad.', 0),
(26, 'Saranya ', 'Kurada', 'saranya123@gmail.com', 9237648328, 'Saranya@123', '17-01-2002', 'f', 'A+', 'Andhra Pradesh', ' Hyderabad ', '5-55-23/A, Chanda Nagar, Nampally, Hyderabad.', 34),
(27, 'Prasanthi', 'Karuna', 'prasanthi76@gmail.com', 8972387623, 'Karuna@123', '02-12-2000', 'f', 'A+', 'Andhra Pradesh', ' Hyderabad ', '4-456, Gandhi Nagar, Nampally, Hyderabad.', 0),
(28, 'Chandana', 'Gembali', 'chandana123@gmail.com', 8763282737, 'Chandana@123', '02-08-2002', 'f', 'A+', 'Andhra Pradesh', ' Hyderabad ', '3-221-48, Krishna Nagar,Chanda Nagar, Hyderabad.', 67),
(29, 'Koushik', 'Malla', 'koushik687@gmail.com', 7826387378, 'Koushik@123', '07-02-2004', 'm', 'A+', 'Andhra Pradesh', ' Hyderabad ', '5-558, Rao Nagar, Kukatpally, Hyderabad.', 0),
(30, 'Sriya', 'Kumari', 'sriya6786@gmail.com', 9832735572, 'Sriya@123', '04-03-2002', 'f', 'O+', 'Orissa', ' Bhubaneswar ', '3-321/A, Mohali Road, Rayagada, Orissa', 45),
(31, 'Saketh', 'Varma', 'saketh123@gmail.com', 7923649292, 'Saketh@123', '02-05-2004', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '3-345/A, TGP, Visakhapatnam', 69),
(32, 'Giridhar', 'Pappala', 'giridhar356@gmail.com', 9842389237, 'Giri@123', '03-12-2003', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '2-204A,Pappu Street, Murali Nagar, Visakhapatnam', 0),
(33, 'Bala', 'Sai', 'bala65@gmail.com', 7832676423, 'Bala@123', '02-12-1999', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '2-299A, Razha Road, Murali Nagar, Visakhapatnam', 0),
(34, 'Jaswanth', 'Aravala', 'jaswanth456@gmail.com', 8732687324, 'Jaswanth@567', '02-07-2000', 'm', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '3-55A, Aravala Road, Carshed, Visakhapatnam', 0),
(35, 'Charitha', 'Bukaya', 'charitha456@gmail.com', 7654568760, 'Charitha@456', '24-04-2001', 'f', 'A+', 'Andhra Pradesh', ' Visakhapatnam ', '699A, Bendapudi Road, Jawahar Nagar, Visakhapatnam', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
