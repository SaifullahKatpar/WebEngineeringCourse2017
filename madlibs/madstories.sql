-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 01:50 PM
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
-- Database: `madstories`
--

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `text`) VALUES
(1, 'I wannabe a <job> when I grow up.\r\nJust like my dad.\r\nLife is <adjective> like that!\r\n'),
(2, 'One of the most <adjective> characters in fiction is named\r\nTarzan of the <plural-noun> . Tarzan was raised by a/an\r\n<noun> and lives in the <adjective> jungle in the\r\nheart of darkest <place> . He spends most of his time\r\neating <plural-noun> and swinging from tree to <noun> .\r\nWhenever he gets angry, he beats on his chest and says,\r\n <funny-noise> ! This is his war cry. Tarzan always dresses in\r\n<adjective> shorts made from the skin of a/an <noun>\r\nand his best friend is a/an <adjective> chimpanzee named\r\nCheetah. He is supposed to be able to speak to elephants and\r\n<plural-noun> . In the movies, Tarzan is played by <person-name> .\r\n'),
(3, 'Our American universities offer students many <adjective>\r\ncourses that will prepare them to become professional <plural-noun> .\r\nYou can get a degree as a Bachelor of <plural-noun> or take a\r\nregular liberal <plural-noun> course. Or, if you want to become\r\na/an <adjective> engineer, you can study <adjective> mathematics\r\nand differential <plural-noun> . Then, after <number> years, if\r\nyou want to continue your studies you can write a/an <noun> and\r\nbecome a Doctor of <plural-noun> . \r\nWhen you get out into the <adjective> world, if you have a diploma \r\nfrom a university, you will be able to get a job easily as a/an <job-title> \r\nor even a/an <job-title> . If you dont have a diploma, you may have to take\r\na job as a <noun> . \r\nRemember, its important that you study hard in high school so you are able \r\nto do well on your college entrance <plural-noun> . It is true that a little \r\nlearning is a/an <adjective> thing.'),
(4, '<Male-Name> has announced that his <adjective>\r\nclothing store in the heart of downtown <CITY> is having\r\na/an <adjective> sale of all merchandise, including\r\n<unusual-adjective> suits and slightly irregular <plural-noun>\r\navailable. Men\'s cable-knit <plural-noun> , only $15.99.\r\nHand-woven Italian <plural-noun> , 1/2-price. Double-\r\nbreasted cashmere <plural-noun> , $50.00. Genuine imported\r\n<Color!> <adjective> shoes, <Exciting-adjective> handerchiefs,\r\nand women\'s embroidered <plural-noun> , all at rock-bottom prices.\r\nThis is a chance to get some really <Interesting-Adjective> bargains.\r\n'),
(5, 'Here\'s how you dance the Monstrosity. Stand with your feet together.\r\nNow, move your left foot <aDvErB> to the side. Now stamp your\r\nright foot <NUMBER> times and put your hands on your partner\'s\r\n<Plural-Noun> . Next, you both <verb> slowly to the right and bend\r\nyour <body-part> backward. For the next eight counts,\r\nboth of you <verb> <adverb> to the left. Next, you and\r\nyour partner stand back to back and wiggle your <pluRAL-nOUN> and\r\nslap your <plural-noun> together. Don\'t forget to keep stamping\r\nyour right foot. Now, face your partner again, put your <plural-noun>\r\ntogether and shout, \' <FUNNY-noise> !\' Now, <verb> backward\r\nand repeat the whole thing <Number> times. If you feel that you can\'t\r\nlearn this dance, you can always <verB> the next one out.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
