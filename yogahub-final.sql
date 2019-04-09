-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 06:27 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogahub`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `UserID` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `instructorname` varchar(50) NOT NULL,
  `avataar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`UserID`, `username`, `fname`, `lname`, `password`, `age`, `gender`, `address`, `instructorname`, `avataar`) VALUES
('5ygew6', 'mgupta', 'Manisha', 'Gupta', '0a20a03c117e5949a555af3174c94895ed7034bc69171b5bb1d4e18b2685d666b', 22, 'Female', 'Jersey, US', 'pn9jud', 'images/manisha.jpg'),
('8edcrc', 'chandni', 'chandani', 'Shah', '4ab43fbae7896457e490eda9f9a2195f21c8fcd8e28e389774a36640dc7b4d3e0', 23, 'Female', 'Jersey city, US', '', 'images/login.jpg'),
('3bbhtl', 'kin', 'kin', 'Shah', '97700868575b65d65b350075fec6adff2da503b374402866d61879170953faa92', 25, 'Female', 'Taxes, US', 'g3jl4b', 'images/3.jpg'),
('691rj0', 'rahul', 'rahul', 'tiwari', '2cef912164c0f8445022265c9062b641f28044397f337002c4e0a2c48c261bef5', 25, 'Male', 'Mumbai, India', 'g3jl4b', 'images/2.jpg'),
('38ytig', 'riya', 'riya', 'sahu', 'c393fae41cfe3307603641bcb4e412c244d52f709a68d9698bdc9229d51141fb8', 55, 'Female', 'india', 'e8mk7m', 'images/chandani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `UserID` varchar(100) NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`UserID`, `userrole`, `username`, `password`) VALUES
('07a1l7', 'teacher', 'anil', '702ad93da3d70c45933036264f31926746e45d2b837ea33bb8476896d56233e05'),
('38ytig', 'client', 'riya', 'c393fae41cfe3307603641bcb4e412c244d52f709a68d9698bdc9229d51141fb8'),
('3bbhtl', 'client', 'kin', '97700868575b65d65b350075fec6adff2da503b374402866d61879170953faa92'),
('4d52z7', 'teacher', 'praviin', '06ad584230c170112763493f74934a44356f5512767f4af04184eb9fe3b0a8fbd'),
('5ygew6', 'client', 'mgupta', '0a20a03c117e5949a555af3174c94895ed7034bc69171b5bb1d4e18b2685d666b'),
('691rj0', 'client', 'rahul', '2cef912164c0f8445022265c9062b641f28044397f337002c4e0a2c48c261bef5'),
('8edcrc', 'client', 'chandni', '4ab43fbae7896457e490eda9f9a2195f21c8fcd8e28e389774a36640dc7b4d3e0'),
('948l23', 'client', 'mgupta', 'ed1544ed724edef17cbad2bb0cb38b9cb332d00a2fb990110a1f4fd0f0dba92a4'),
('bk4ja0', 'teacher', 'swapnil', '0b4091ed4759ff9afc4791d193fe47a1df9d7831ad8a9d3e6008b934ac430c601'),
('e8mk7m', 'teacher', 'rucha', 'dcde397ac9f2948b8acec4ee21bf09f8b7a5e93181e83a693b458603516b82f83'),
('g3jl4b', 'teacher', 'mani', 'b7d101c862f278fdf18e11f762d4ff6f82bbd3ee80433e5c3b6eea007ddc447bb'),
('pn9jud', 'teacher', 'sayali', 'b4c12242e1936f37bf9e25f3c606fcb24368cf1736b7b15f92d54d1890d90cfd9');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `UserID` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `timeslots` varchar(50) NOT NULL,
  `avataar` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`UserID`, `username`, `firstname`, `lastname`, `password`, `email`, `experience`, `gender`, `address`, `age`, `days`, `timeslots`, `avataar`, `status`, `description`) VALUES
('07a1l7', 'anil', 'anil', 'gupta', '702ad93da3d70c45933036264f31926746e45d2b837ea33bb8476896d56233e05', 'ag@pace.edu', '5', 'male', 'California, US', '25', 'Mon - Sat', '10-5', 'images/avataar2.png', '1', 'Anil Gupta is an American author, international consultant, and creative residing in Boulder, Colorado. Matthew\'s ultimate purpose in life is to live, love and learn. He has two decades of experience conducting research and development, leading projects, and delivering strategies in the fields of environmental governance, sustainable development, and social entrepreneurship. Heâ€™s worked for government, universities, non-profits and the private sector. He consults and advises leaders worldwide. Matthew has been to every Continent on Earth with the exception of Antarctica, completed expeditions to over 30 countries, lived in five and studied and conducted research in fourâ€”completing his PhD at the University of Cambridge. He has published academic and popular literature for the Journal of Biological Conservation, Marine Policy Journal, World Watch Institute, U.N. Environment Program, U.N. Peacebuilding Commission, One Earth Future Foundation, U.S. Department of State, NOAA Research, '),
('4d52z7', 'praviin', 'Praviin', 'mandare', '06ad584230c170112763493f74934a44356f5512767f4af04184eb9fe3b0a8fbd', 'pm@pace.edu', '5', 'Male', 'New York, US', '30', 'Mon', '6-9', 'images/avataar2.png', '1', 'Praviin Mandare is an American author, international consultant, and creative residing in Boulder, Colorado. Matthew\'s ultimate purpose in life is to live, love and learn. He has two decades of experience conducting research and development, leading projects, and delivering strategies in the fields of environmental governance, sustainable development, and social entrepreneurship. Heâ€™s worked for government, universities, non-profits and the private sector. He consults and advises leaders worldwide. Matthew has been to every Continent on Earth with the exception of Antarctica, completed expeditions to over 30 countries, lived in five and studied and conducted research in fourâ€”completing his PhD at the University of Cambridge. He has published academic and popular literature for the Journal of Biological Conservation, Marine Policy Journal, World Watch Institute, U.N. Environment Program, U.N. Peacebuilding Commission, One Earth Future Foundation, U.S. Department of State, NOAA Resea'),
('bk4ja0', 'swapnil', 'Swapnil', 'Tejale', '0b4091ed4759ff9afc4791d193fe47a1df9d7831ad8a9d3e6008b934ac430c601', 'st@pace.edu', '1', 'Male', 'Boston, US', '26', 'Mon,fri,Sun', '12-5', 'images/sagar.jpg', '1', 'Swapnil is an American author, international consultant, and creative residing in Boulder, Colorado. Matthew\'s ultimate purpose in life is to live, love and learn. He has two decades of experience conducting research and development, leading projects, and delivering strategies in the fields of environmental governance, sustainable development, and social entrepreneurship. Heâ€™s worked for government, universities, non-profits and the private sector. He consults and advises leaders worldwide. Matthew has been to every Continent on Earth with the exception of Antarctica, completed expeditions to over 30 countries, lived in five and studied and conducted research in fourâ€”completing his PhD at the University of Cambridge. He has published academic and popular literature for the Journal of Biological Conservation, Marine Policy Journal, World Watch Institute, U.N. Environment Program, U.N. Peacebuilding Commission, One Earth Future Foundation, U.S. Department of State, NOAA Research, amo'),
('e8mk7m', 'rucha', 'rucha', 'sharma', 'dcde397ac9f2948b8acec4ee21bf09f8b7a5e93181e83a693b458603516b82f83', 'rucha@gmail.com', '3', 'female', 'India', '24', '4', '3', 'images/avataar.png', '1', 'aaa'),
('g3jl4b', 'mani', 'Manisha', 'Gupta', 'b7d101c862f278fdf18e11f762d4ff6f82bbd3ee80433e5c3b6eea007ddc447bb', 'mg48626n@pace.edu', '7', 'Female', 'Jersey, US', '25', 'Mon, Wed, Fri', '12-5', 'images/chandani.jpg', '1', 'Mani Gupta is a qualified yoga and Tibetan meditation teacher, Reiki Master, spiritual coach and also the author of An Empath, a newly published book that explains various aspects of existing as a highly sensitive person. The book focuses on managing emotions, energy and relationships, particularly the toxic ones that many empaths are drawn into. Her greatest loves are books, poetry, writing and philosophy. She is a curious, inquisitive, deep thinking, intensely feeling, otherworldly intuitive being who lives for signs, synchronicities and serendipities. Inspired and influenced by Carl Jung, Nikola Tesla, AnaÃ¯s Nin and Paulo Coelho, she has a deep yearning to discover many of the answers that seem to have been hidden or forgotten in todayâ€™s world. Alex\'s bestselling book, An Empath, is on sale now for only $1.99! Connect with her on Facebook and join Alexâ€™s Facebook group for empaths and highly sensitive people.'),
('pn9jud', 'sayali', 'Sayali', 'Khare', 'b4c12242e1936f37bf9e25f3c606fcb24368cf1736b7b15f92d54d1890d90cfd9', 'sk@pace.edu', '3', 'Female', 'Boston, US', '23', 'Mon, Wed, Fri', '12-5', 'images/sayali.jpg', '1', 'Sayali Khare is an extraterrestrial who was given birth by Earthlings. While living on planet Earth, she fell in love with art, books, nature, writing, photography, traveling, and...pizza. Elyane finds her joy in backpacking and bonding with locals. To see the faces she interacts with on her travels, you can follow Face of the World on Instagram or Facebook. Besides getting on and off planes, she is in a serious relationship with words and hopes to inspire as many people as possible through them. Once her mission is accomplished on Earth, she will return to her planet to rejoin her extraterrestrial brothers and sisters. In case you\'re wondering, yes, she is still willingly obsessed with Frida Kahlo. You can connect with her on Facebook, Twitter, or Instagram.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
