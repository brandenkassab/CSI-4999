-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 09:27 PM
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
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(255) DEFAULT NULL,
  `AU_FNAME` varchar(30) NOT NULL,
  `AU_LNAME` varchar(30) NOT NULL,
  `AU_BIRTHYEAR` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `AU_FNAME`, `AU_LNAME`, `AU_BIRTHYEAR`) VALUES
(185, 'Mary', 'Scott', 1986),
(0, 'Janice', 'Matt', 1990),
(229, 'John', 'Steinbeck', 1902),
(251, 'Ray', 'Bradbury', 1920),
(732, 'Gary', 'Paulsen', 1939);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BOOK_ISBN` int(255) NOT NULL,
  `BOOK_TITLE` varchar(255) NOT NULL,
  `BOOK_YEAR` int(4) NOT NULL,
  `BOOK_FR_SALE` int(255) NOT NULL,
  `BOOK_COST` int(255) NOT NULL,
  `AU_ID` int(7) NOT NULL,
  `SST_ID` int(10) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BOOK_ISBN`, `BOOK_TITLE`, `BOOK_YEAR`, `BOOK_FR_SALE`, `BOOK_COST`, `AU_ID`, `SST_ID`, `Genre`, `Location`, `image`) VALUES
(5968493, 'Cat in The HAT', 2008, 24, 10, 38474, 2938, 'Fiction', 'BookPageHat.php', 'https://upload.wikimedia.org/wikipedia/en/1/10/The_Cat_in_the_Hat.png'),
(384875, 'Hatchet', 2008, 40, 20, 45849, 395849, 'Fiction', 'BookPageHat.php', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61OmABKejnL._AC_UF1000,1000_QL80_.jpg'),
(49574859, 'Fahrenheit 451', 1953, 40, 20, 48554, 3847, 'History', 'BookPage451.php', 'https://m.media-amazon.com/images/P/1451673310.01._SCLZZZZZZZ_SX500_.jpg'),
(545354, 'To Kill a Mockingbird', 2004, 20, 30, 232332, 423432, 'history', 'BookPageTKAM.php', 'https://upload.wikimedia.org/wikipedia/commons/4/4f/To_Kill_a_Mockingbird_%28first_edition_cover%29.jpg'),
(64938, 'Fahrenheit 451', 2001, 40, 20, 3948, 3938, 'Non-fiction', 'BookPage451.php', 'https://target.scene7.com/is/image/Target/GUEST_da8b14b8-b18b-446e-a257-b1568a0eed51?wid=488&hei=488&fmt=pjpeg'),
(58493, 'Pride and Prejudice', 2020, 30, 20, 2782, 48574, 'Non-fiction', 'BookPagePride.php', 'https://images.squarespace-cdn.com/content/v1/58c180edff7c50dd0e51a2ad/1596042032039-IN7LLXRVDKGVC854LVHE/9780241375273.jpg'),
(85943, 'Harry Potter', 2018, 40, 20, 33232, 42424, 'Best-Sellers', 'Bookpage.php', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/91ocU8970hL._AC_UF1000,1000_QL80_.jpg'),
(5893565, 'Huckleberry Finn', 2019, 40, 20, 38474, 8374, 'Best-Sellers', 'BookPageFinn.php', 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/513NVF-pHOL.jpg'),
(58493, 'Pride and Prejudice', 2020, 30, 20, 2782, 48574, 'young-adults', 'BookPagePride.php', 'https://images.squarespace-cdn.com/content/v1/58c180edff7c50dd0e51a2ad/1596042032039-IN7LLXRVDKGVC854LVHE/9780241375273.jpg'),
(584593, 'The Great Gatsby', 2020, 30, 20, 2782, 48574, 'young-adults', 'BookPageGreat.php', 'https://m.media-amazon.com/images/I/71FTb9X6wsL._AC_UF1000,1000_QL80_.jpg'),
(58935565, 'Of Mice and Men', 2019, 40, 20, 38474, 8374, 'Sports', 'BookPageMice.php', 'https://upload.wikimedia.org/wikipedia/commons/a/a8/Of_Mice_and_Men_%281937_1st_ed_dust_jacket%29.jpg'),
(64938, 'Moby Dick', 2001, 40, 20, 3948, 3938, 'Non-fiction', 'BookPageMoby.php', 'https://kbimages1-a.akamaihd.net/81c9c103-30af-4e82-a9f2-ef897d666b38/1200/1200/False/moby-dick-506.jpg'),
(49574859, 'Lord of the Flies', 1953, 40, 20, 48554, 3847, 'young-adults', 'BookPagePride.php', 'https://m.media-amazon.com/images/I/5176rSnUxfL.jpg'),
(6495438, 'Catcher in the Rye', 2001, 40, 20, 3948, 3938, 'sports', 'BookPageCatcher.php', 'https://upload.wikimedia.org/wikipedia/commons/8/89/The_Catcher_in_the_Rye_%281951%2C_first_edition_cover%29.jpg'),
(6493658, 'Horton Hears a Who', 2001, 40, 20, 3948, 3938, 'Best-Sellers', 'BookPageHorton.php', 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b8/HortonHearsAWhoBookCover.jpg/220px-HortonHearsAWhoBookCover.jpg');
-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `CHECK_NUM` decimal(15,0) NOT NULL,
  `BOOK_ISBN` decimal(13,0) NOT NULL,
  `STU_ID` decimal(10,0) NOT NULL,
  `CHECK_OUT_DATE` date DEFAULT NULL,
  `CHECK_DUE_DATE` date DEFAULT NULL,
  `CHECK_IN_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`CHECK_NUM`, `BOOK_ISBN`, `STU_ID`, `CHECK_OUT_DATE`, `CHECK_DUE_DATE`, `CHECK_IN_DATE`) VALUES
('50221', '2565', '3216', '0000-00-00', '0000-00-00', '0000-00-00'),
('50222', '2258', '4567', '0000-00-00', '0000-00-00', '0000-00-00'),
('50223', '3169', '9872', '0000-00-00', '0000-00-00', '0000-00-00'),
('50224', '4568', '1667', '0000-00-00', '0000-00-00', '0000-00-00'),
('50225', '128', '6134', '0000-00-00', '0000-00-00', '0000-00-00'),
('50226', '8732', '1613', '0000-00-00', '0000-00-00', '0000-00-00'),
('50227', '4920', '9876', '0000-00-00', '0000-00-00', '0000-00-00'),
('50228', '2323', '2', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `BOOK_ISBN` varchar(255) NOT NULL,
  `BOOK_TITLE` varchar(255) NOT NULL,
  `BOOK_GENRE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`BOOK_ISBN`, `BOOK_TITLE`, `BOOK_GENRE`) VALUES
('2565', 'To Kill a Mockingbird', 'mystery'),
('2258', 'The Great Gatsby', 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `isbn`
--

CREATE TABLE `isbn` (
  `BOOK_ISBN` decimal(13,0) NOT NULL,
  `BOOK_DESCRIPTION` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `isbn`
--

INSERT INTO `isbn` (`BOOK_ISBN`, `BOOK_DESCRIPTION`) VALUES
('128', 'A young boy tries to survive by himself in the wilderness'),
('2258', 'The story is of the fabulously wealthy Jay Gatsby and his new love'),
('2323', 'The turbulant relatiopnship between Elizabeth Bennet and Fitzwilliam Darcy'),
('2565', 'The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it. '),
('3169', 'An intimate portrait of two men who cherish the slim bond between them and the dream they share in a world marred by pet'),
('4568', 'The terrifyingly prophetic novel of a post-literate future'),
('4920', 'Six boys survuve a plane crash on a desserted island'),
('8732', 'The sailor Ismael gets revenge on a sperm whale from his previous voyage');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `VST_CUR` int(255) NOT NULL,
  `VST_HIST` int(255) NOT NULL,
  `VST_FEE` int(255) NOT NULL,
  `Checkout` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `VST_CUR`, `VST_HIST`, `VST_FEE`, `Checkout`) VALUES
(1, 'branden', 'brandenkassab@gmail.com', '18942142113828a86fc4dcfbbc31657f', 'admin', 0, 0, 100, ''),
(2, 'brandnn', 'brandenkassab1@gmail.com', '18942142113828a86fc4dcfbbc31657f', 'user', 0, 0, 0, ''),
(4, 'bb', 'brandenkassab12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 0, 0, 0, ''),
(9, 'brenda', 'kassab1@gmail.com', '', 'user', 0, 0, 500, 'Hatchet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`CHECK_NUM`);

--
-- Indexes for table `isbn`
--
ALTER TABLE `isbn`
  ADD PRIMARY KEY (`BOOK_ISBN`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
