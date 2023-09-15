-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2021 at 07:46 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vngblogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `banner` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `title_id` varchar(200) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '1',
  `meta` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `banner`, `content`, `title_id`, `views`, `meta`, `status`, `tags`, `date`) VALUES
(1, 'How German Wheels became popular as Gymnastic wheels?', 'Amarnath', 'images/post/german-wheel-gymnastics.jpg', '                            <p>\r\n                            German wheels are nothing but a type of gymnastic wheels that was introduced firstly in Germany. Wheel gymnastic is basically a form of gymnastics that originated in Germany. Within a few days of its evolution, this form of gymnastic became popular all over and still they have its use in the world of gymnastic. Those who are wheel gymansts, they usually do exercises in a large sized wheel that is basically termed as Rhonrad gymnastics wheel, German wheel and gym wheel. There are basically three core categories of this exercise like spiral, straight line and vault.\r\nThis German wheel was invented in the year 1925 by Otto Feick in Schönau a der Brend. Being the son of a blacksmith, Feick was highly inspired by the memory of an event from his childhood days that he spent in Reichenbach, when he had tied sticks between the two cartwheel bands that his father had made and rolled down a hill.\r\n</p>\r\n <p>\r\nHe was basically a lock smith and also railway men. It was from the year 1914 to 1923 that he was related with the work of establishment of Deutsche Reichsbann. At that time he was the supporter of the trade union movement and also he was the member of the board of the union of German Railway workers. He was imprisoned for his activities in the defense against the secession efforts of the Palatinate the actual motto of his life was fights, rings-but sing.\r\n</p>\r\n <p>\r\nHe was the one who was filed for a patent as wheel gymnastic as well as sports equipment. He had invented the wheel in the great Ludwigshafen am Rhein ca in the year 1920-22. This happened on the grounds of VSK Germania, a popular sports club and he was the founding chairman of that club. Th patent was issued in the year 1925 on 8th November. The name and the term Rhonrad has been protected as well as registered since 1926.\r\n</p>\r\n <p>\r\nIt was in the year 1936 that this sport was shown at the great Olympic Games that was held in Berlin. But this gymnast was not presented as an Olympic discipline. The actual focus of the wheel gymnasts remains largely in Germany. These wheels are of great use and the gymnasts prefer performing several types of acts using this particular wheel. The best part of this wheel is that these wheels are extremely lightweight. These wheels are lightweight so that the gymnasts can use them freely without having any issue. As this particular wheel was invented in Germany the wheel is termed as German wheel.\r\n</p>\r\n <p>\r\nThere are basically three disciplines in which the wheels are used.The first and foremost is the straight line. Here, the wheels rolls over an area covering 23 to 3 meters on both the tires and this will be compulsory as well as voluntary routines pre gymnastics. Some of the elements that like the stretching or gymnastics bars are used. Then there comes the spiral gymnastics where the wheel moves on one of the tires. The next is the Jump, which is performed by male.\r\n                            </p>', 'How-German-Wheels-became-popular-as-Gymnastic-wheels?', 15, '', 'active', 'Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness, Kids, Recreation, Dance, Artistic, Children, Games, Activity, Health, White Field, Kundalahalli', '2021-07-25'),
(2, 'Tokyo Olympics: Mirabai Chanu Wins India\'s First Medal', '', 'images/post/mirabai-chanu-silver-medal.webp', '                <h2>\r\n                    Saikhom Mirabai Chanu won Silver medal at the 2021 Tokyo Olympics in Women\'s 49 kg, bringing India\r\n                    its first medal in the event.\r\n                </h2>\r\n\r\n                <p>\r\n                    Tokyo Olympics: Mirabai Chanu Wins India\'s First Medal. Mirabai Chanu won Silver medal at the 2021 Tokyo Olympics in Women\'s 49 kg. This is first Olympic\r\n                    medal for India after 2000.\r\n                </p>\r\n\r\n                <p>\r\n                    Considered her weakness in the run up to the marquee event, Chanu attempted 84kg in her first snatch\r\n                    attempt.\r\n                    The Manipuri took her time and cleanly heaved the barbell.\r\n                </p>\r\n                <p>\r\n                    She lifted 87kg in her next attempt and raised the weight to 89kg, which was one 1kg more than her\r\n                    personal best of 88kg that she had lifted at the national championship last year.\r\n                </p>\r\n                <p>\r\n                    However, she was unable to better her personal best and settled for 87kg in the snatch event only\r\n                    behind leader Zhihui, who created a new Olympic record with an effort of 94kg.\r\n                </p>\r\n                <br>\r\n\r\n                <h2>\r\n                    Saikhom Mirabai Chanu (born 8 August 1994) is an Indian weightlifter.\r\n                </h2>\r\n\r\n                <p>\r\n                    Mirabai Chanu is a regular presence in international events since 2014 in the 48 kg category, Chanu\r\n                    has won the World Championships and multiple medals at the Commonwealth Games.\r\n                </p>\r\n\r\n                <p>\r\n                    She was awarded the Padma Shri by the Government of India for her contributions to the sport.\r\n                    She was awarded Rajiv Gandhi Khel Ratna award by the Government of India in 2018.\r\n                    Chanu had won the silver medal in the women\'s 48 kg weight class at the 2014 Commonwealth Games,\r\n                    Glasgow;\r\n                    She went on to break the games record en route to the gold medal at the 2018 edition of the event\r\n                    held in Gold Coast.\r\n                    Her biggest achievement came in 2017, when she won the gold medal at World Weightlifting\r\n                    Championships held in Anaheim, United States.\r\n\r\n                </p>', 'Tokyo-Olympics-Mirabai-Chanu-Wins-Indias-First-Medal', 33, '', 'active', 'Mirabai, Mirabai Chanu, Olympics, Medal, 2000, Tokyo Olympics, 49 kg, Gymnastics, Training, Bengaluru, Bangalore, Marathahalli, Excercise, Fitness', '2021-07-26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
